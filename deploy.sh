#!/usr/bin/env bash

# cPanel Deployment Script for tirwin.in-website (Pure Shell)
# Deploys only newly added or modified files to cPanel server using credentials in .env file.

set -e

ENV_FILE=".env"
STATE_FILE=".deploy_state"

# 1. Check if .env file exists
if [ ! -f "$ENV_FILE" ]; then
    echo "❌ Error: $ENV_FILE file not found!"
    echo "Creating default .env file..."
    cat << 'EOF' > "$ENV_FILE"
# cPanel FTP / SFTP Deployment Configuration
DEPLOY_METHOD=ftp
REMOTE_HOST=your-cpanel-ip-or-domain.com
REMOTE_PORT=21
REMOTE_USER=your_cpanel_username
REMOTE_PASS=your_cpanel_password
REMOTE_PATH=/public_html/
EOF
    echo "Please edit $ENV_FILE with your cPanel credentials before deploying."
    exit 1
fi

# 2. Parse .env file
REMOTE_HOST=$(grep -E '^REMOTE_HOST=' "$ENV_FILE" | cut -d '=' -f2- | sed 's/[\r"'\'']//g')
REMOTE_PORT=$(grep -E '^REMOTE_PORT=' "$ENV_FILE" | cut -d '=' -f2- | sed 's/[\r"'\'']//g')
REMOTE_USER=$(grep -E '^REMOTE_USER=' "$ENV_FILE" | cut -d '=' -f2- | sed 's/[\r"'\'']//g')
REMOTE_PASS=$(grep -E '^REMOTE_PASS=' "$ENV_FILE" | cut -d '=' -f2- | sed 's/[\r"'\'']//g')
REMOTE_PATH=$(grep -E '^REMOTE_PATH=' "$ENV_FILE" | cut -d '=' -f2- | sed 's/[\r"'\'']//g')

REMOTE_PORT=${REMOTE_PORT:-21}
REMOTE_PATH=${REMOTE_PATH:-/public_html/}
# Strip trailing slash from REMOTE_PATH
REMOTE_PATH="${REMOTE_PATH%/}"

if [ -z "$REMOTE_HOST" ] || [ "$REMOTE_HOST" = "your-cpanel-ip-or-domain.com" ]; then
    echo "❌ Error: REMOTE_HOST in .env is not configured!"
    echo "Please update .env with your cPanel IP/domain, username, and password."
    exit 1
fi

DEPLOY_ALL=false
DRY_RUN=false

for arg in "$@"; do
    case "$arg" in
        --all) DEPLOY_ALL=true ;;
        --dry-run) DRY_RUN=true ;;
    esac
done

# Exclude list
EXCLUDES=(".git" ".gitignore" ".env" ".env.example" "deploy.sh" "deploy.py" ".deploy_state" ".DS_Store" "README.md")

is_excluded() {
    local file="$1"
    for ex in "${EXCLUDES[@]}"; do
        if [[ "$file" == *"$ex"* ]]; then
            return 0
        fi
    done
    return 1
}

# 3. Collect changed/added files
FILES_TO_DEPLOY=()

if [ "$DEPLOY_ALL" = true ]; then
    echo "📦 Mode: FULL DEPLOYMENT (All files)"
    while IFS= read -r f; do
        f="${f#./}"
        if [ -f "$f" ] && ! is_excluded "$f"; then
            FILES_TO_DEPLOY+=("$f")
        fi
    done < <(find . -type f)
else
    echo "🔍 Finding added & modified files..."
    RAW_FILES=()
    
    if [ -f "$STATE_FILE" ]; then
        LAST_COMMIT=$(cat "$STATE_FILE")
        if [ -n "$LAST_COMMIT" ]; then
            while IFS= read -r f; do
                [ -n "$f" ] && RAW_FILES+=("$f")
            done < <(git diff --name-only "$LAST_COMMIT" HEAD 2>/dev/null || true)
        fi
    fi

    # Include uncommitted or staged modified files
    while IFS= read -r line; do
        [ -z "$line" ] && continue
        status="${line:0:2}"
        f="${line:3}"
        if [[ "$status" != *"D"* ]]; then
            RAW_FILES+=("$f")
        fi
    done < <(git status --porcelain 2>/dev/null || true)

    # Fallback to HEAD~1 diff if no changes detected
    if [ ${#RAW_FILES[@]} -eq 0 ]; then
        while IFS= read -r f; do
            [ -n "$f" ] && RAW_FILES+=("$f")
        done < <(git diff --name-only HEAD~1 HEAD 2>/dev/null || true)
    fi

    # Filter out non-existent and excluded files
    for f in "${RAW_FILES[@]}"; do
        if [ -f "$f" ] && ! is_excluded "$f"; then
            FILES_TO_DEPLOY+=("$f")
        fi
    done
fi

# Unique file list
if [ ${#FILES_TO_DEPLOY[@]} -gt 0 ]; then
    UNIQUE_FILES=($(printf "%s\n" "${FILES_TO_DEPLOY[@]}" | sort -u))
else
    UNIQUE_FILES=()
fi

if [ ${#UNIQUE_FILES[@]} -eq 0 ]; then
    echo "✨ No new or modified files found to deploy!"
    echo "Use './deploy.sh --all' to force upload all project files."
    exit 0
fi

echo ""
echo "📋 Found ${#UNIQUE_FILES[@]} file(s) to deploy:"
for f in "${UNIQUE_FILES[@]}"; do
    echo "  • $f"
done
echo ""

if [ "$DRY_RUN" = true ]; then
    echo "🔍 --- DRY RUN MODE (No files transferred) ---"
    for f in "${UNIQUE_FILES[@]}"; do
        echo "  [WOULD UPLOAD] $f -> ${REMOTE_PATH}/$f"
    done
    exit 0
fi

# 4. Upload files over FTP via curl
echo "🚀 Connecting to cPanel FTP server: ${REMOTE_HOST}:${REMOTE_PORT}..."

UPLOADED_COUNT=0
TOTAL_FILES=${#UNIQUE_FILES[@]}

for f in "${UNIQUE_FILES[@]}"; do
    target_url="ftp://${REMOTE_HOST}:${REMOTE_PORT}${REMOTE_PATH}/$f"
    
    echo -n "[$((UPLOADED_COUNT + 1))/${TOTAL_FILES}] Uploading: $f ... "
    
    if curl --silent --show-error --ftp-create-dirs --user "${REMOTE_USER}:${REMOTE_PASS}" -T "$f" "$target_url"; then
        echo "✅ DONE"
        UPLOADED_COUNT=$((UPLOADED_COUNT + 1))
    else
        echo "❌ FAILED"
    fi
done

echo ""
echo "🎉 Successfully deployed ${UPLOADED_COUNT}/${TOTAL_FILES} files to cPanel!"

# Save current commit hash
CURRENT_COMMIT=$(git rev-parse HEAD 2>/dev/null || true)
if [ -n "$CURRENT_COMMIT" ]; then
    echo "$CURRENT_COMMIT" > "$STATE_FILE"
fi
