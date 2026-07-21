# TIRWIN Management Services - Official Website

Welcome to the repository for the **TIRWIN Management Services Pvt Ltd** official website ([tirwin.in](https://www.tirwin.in)).

TIRWIN Management Services specializes in transforming Logistics & Cargo businesses through expert consulting, technology innovation, comprehensive training programs, and specialized staffing solutions.

---

## 📌 Features & Structure

- **Home Page (`index.php`)**: Features interactive banner sliders highlighting key logistics themes (*Make in India*, *Technology & Talent*, *Logistics Industry*) and showcase of major corporate clients.
- **Our Story (`about/`)**:
  - `about/index.php`: Core values and background.
  - `about/founder.php`: Message and profile of the founder.
  - `about/our-team.php`: Leadership, key team members, and advisory board.
- **Services (`services/`)**:
  - `services/training.php`: IATA & logistics training modules.
  - `services/innovation.php`: Logistics tech & software solutions.
  - `services/resourcing.php`: Talent acquisition and staffing.
  - `services/tirwin-touch.php`: Dedicated client engagement model.
- **Blog & Newsroom (`blog.php`, `news-room.php`)**: Industry insights, updates, and announcements.
- **Contact Us (`contact.php`)**: Interactive contact form with dynamic category selection, integrated with Google reCAPTCHA and SendGrid Email API.

---

## 🛠️ Technology Stack

- **Backend / Templating**: PHP (7.4+ or 8.x)
- **Frontend**: HTML5, CSS3, JavaScript (jQuery, Inspiro UI Framework, FontAwesome 6)
- **Integrations**: SendGrid Mail API v3, Google reCAPTCHA v2, Google Analytics (GTM)
- **Web Server Config**: Apache `.htaccess` (HTTPS redirection & URL configuration)

---

## 💻 Local Setup & Installation Guide

### Prerequisites
Make sure you have **PHP** (v7.4 or newer) installed on your system.

To check if PHP is installed:
```bash
php -v
```

---

### Option 1: Quick Start using Built-in PHP Web Server (Recommended)

1. **Clone or navigate to the project folder:**
   ```bash
   cd /path/to/tirwin.in-website
   ```

2. **Start the PHP development server:**
   ```bash
   php -S localhost:8000
   ```

3. **View the website:**
   Open your browser and navigate to:
   ```text
   http://localhost:8000
   ```

---

### Option 2: Setup using XAMPP / MAMP / WampServer / Apache

1. Copy or clone this repository into your local server's web root:
   - **XAMPP**: `C:/xampp/htdocs/tirwin.in-website` (Windows) or `/Applications/XAMPP/htdocs/tirwin.in-website` (macOS)
   - **MAMP**: `/Applications/MAMP/htdocs/tirwin.in-website`
   - **Apache Linux**: `/var/www/html/tirwin.in-website`

2. Ensure `mod_rewrite` module is enabled in Apache configuration if you want to test `.htaccess` rewrite rules.

3. Open your browser and navigate to:
   ```text
   http://localhost/tirwin.in-website/
   ```

---

## ⚙️ Configuration Notes

- **Contact Form**: Form submissions send emails via SendGrid's API in `include/contact-form.php`. Submissions require active internet connectivity for Google reCAPTCHA verification and SendGrid API requests.
- **Base URL**: The site dynamically sets `$base_url` in `include/header.php` based on the request host.

---

## 📁 Repository Structure Overview

```text
tirwin.in-website/
├── about/                # About company, founder, and team pages
├── blog/                 # Blog articles & assets
├── css/                  # CSS stylesheets (style.css, custom.css, plugins.css)
├── images/               # Media & graphics assets
├── include/              # PHP modular components (header.php, menu.php, footer.php, contact-form.php)
├── js/                   # JS scripts (plugins.js, functions.js)
├── media/                # Additional media files
├── plugins/              # Frontend UI libraries & plugins
├── services/             # Specialized service pages
├── webfonts/             # Icon and web fonts
├── .htaccess             # Apache rewrite rules
├── blog.php              # Main blog landing page
├── contact.php           # Contact page with form
├── index.php             # Home page
├── news-room.php         # News & media coverage page
├── README.md             # Project documentation
├── robots.txt            # Search engine crawler instructions
└── sitemap.xml           # XML Sitemap
```

---

## 📄 License
© TIRWIN Management Services Pvt Ltd. All rights reserved.
