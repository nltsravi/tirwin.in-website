<?php include('../include/header.php'); ?>
<?php
$issueDate = "12 August 2026";
$issueNumber = "43";
?>
<style>
    /* Newsletter Container Styling inside Website Page */
    .newsletter-wrapper {
        width: 100%;
        background-color: #f4f6f8;
        padding: 30px 0;
    }
    .newsletter-container {
        max-width: 600px;
        margin: 0 auto;
        background-color: #ffffff;
        border-radius: 8px;
        overflow: hidden;
        box-shadow: 0 4px 15px rgba(0, 0, 0, 0.08);
    }
    .newsletter-header {
        background: linear-gradient(135deg, #001f3f 0%, #003366 100%);
        padding: 30px 25px 25px 25px;
        text-align: center;
        color: #ffffff;
        border-bottom: 4px solid #0066cc;
    }
    .newsletter-header-badge {
        display: inline-block;
        background-color: rgba(255, 255, 255, 0.15);
        color: #79c0ff;
        font-size: 11px;
        font-weight: 600;
        text-transform: uppercase;
        letter-spacing: 1.5px;
        padding: 4px 12px;
        border-radius: 20px;
        margin-bottom: 12px;
    }
    .newsletter-header h1 {
        margin: 0;
        font-size: 24px;
        font-weight: 800;
        letter-spacing: 0.5px;
        color: #ffffff;
        text-transform: uppercase;
    }
    .newsletter-header p.subtitle {
        margin: 8px 0 0 0;
        font-size: 13px;
        color: #b3d4fc;
        letter-spacing: 2px;
        text-transform: uppercase;
        font-weight: 500;
    }
    .newsletter-header-meta {
        margin-top: 15px;
        padding-top: 12px;
        border-top: 1px solid rgba(255, 255, 255, 0.15);
        font-size: 12px;
        color: #d0e1fd;
    }
    .newsletter-content-block {
        padding: 25px;
        color: #2d3748;
        line-height: 1.65;
    }
    .newsletter-section-header {
        margin-top: 25px;
        margin-bottom: 15px;
        padding-left: 12px;
        border-left: 4px solid #0055a5;
    }
    .newsletter-section-title {
        color: #002244;
        font-size: 17px;
        font-weight: 700;
        text-transform: uppercase;
        letter-spacing: 0.5px;
        margin: 0;
    }
    .newsletter-article-card {
        background-color: #fafbfc;
        border: 1px solid #e1e8ed;
        border-radius: 6px;
        padding: 16px;
        margin-bottom: 18px;
        transition: all 0.2s ease;
    }
    .newsletter-article-title {
        font-size: 16px;
        font-weight: 700;
        margin-bottom: 8px;
        line-height: 1.4;
    }
    .newsletter-article-title a {
        text-decoration: none;
        color: #0055a5;
    }
    .newsletter-article-title a:hover {
        color: #003366;
        text-decoration: underline;
    }
    .newsletter-tag-container {
        margin-bottom: 10px;
    }
    .newsletter-tag {
        display: inline-block;
        background-color: #eaf2f8;
        color: #004085;
        font-size: 11px;
        font-weight: 600;
        padding: 3px 8px;
        border-radius: 4px;
        margin-right: 6px;
        margin-bottom: 4px;
    }
    .newsletter-article-text {
        margin: 0;
        font-size: 14px;
        color: #4a5568;
    }
    .newsletter-article-text strong {
        color: #1a202c;
    }
    .newsletter-feedback-section {
        background: linear-gradient(180deg, #f0f4f8 0%, #e6eef5 100%);
        border: 1px solid #d0dbe5;
        border-radius: 8px;
        padding: 22px;
        margin: 30px 0 20px 0;
        text-align: center;
    }
    .newsletter-feedback-title {
        font-size: 16px;
        font-weight: 700;
        color: #002244;
        margin: 0 0 6px 0;
    }
    .newsletter-feedback-subtitle {
        font-size: 13px;
        color: #4a5568;
        margin: 0 0 16px 0;
    }
    .newsletter-feedback-btn {
        display: inline-block;
        padding: 10px 14px;
        margin: 4px;
        background-color: #ffffff;
        border: 1px solid #cbd5e1;
        border-radius: 24px;
        text-decoration: none;
        font-size: 13px;
        font-weight: 600;
        color: #334155;
        box-shadow: 0 2px 4px rgba(0, 0, 0, 0.04);
        transition: all 0.2s ease;
    }
    .newsletter-feedback-btn:hover {
        background-color: #0055a5;
        color: #ffffff !important;
        border-color: #0055a5;
    }
    .newsletter-connect-section {
        background-color: #ffffff;
        border-top: 1px solid #edf2f7;
        padding: 25px 20px;
        text-align: center;
    }
    .newsletter-connect-title {
        font-size: 14px;
        font-weight: 700;
        text-transform: uppercase;
        letter-spacing: 1px;
        color: #4a5568;
        margin-bottom: 15px;
    }
    .newsletter-social-icon-table {
        margin: 0 auto;
    }
    .newsletter-social-icon-btn {
        display: inline-block;
        width: 40px;
        height: 40px;
        line-height: 40px;
        border-radius: 50%;
        text-align: center;
        text-decoration: none;
        margin: 0 5px;
        box-shadow: 0 2px 6px rgba(0, 0, 0, 0.1);
    }
    .newsletter-social-icon-btn img {
        vertical-align: middle;
        width: 20px;
        height: 20px;
    }
    .social-linkedin { background-color: #0077b5; }
    .social-x { background-color: #000000; }
    .social-facebook { background-color: #1877f2; }
    .social-instagram { background-color: #e4405f; }
    .social-youtube { background-color: #ff0000; }
    .social-website { background-color: #003366; }
    .newsletter-share-container {
        margin-top: 20px;
        padding-top: 15px;
        border-top: 1px dashed #e2e8f0;
        font-size: 12px;
        color: #718096;
    }
    .newsletter-share-link {
        color: #0055a5;
        text-decoration: none;
        font-weight: 600;
        margin: 0 8px;
    }
    .newsletter-footer {
        background-color: #1a202c;
        padding: 25px 20px;
        text-align: center;
        font-size: 12px;
        color: #a0aec0;
        line-height: 1.6;
    }
    .newsletter-footer a {
        color: #63b3ed;
        text-decoration: none;
    }
    .newsletter-footer-divider {
        margin: 12px auto;
        width: 50px;
        border-top: 1px solid #4a5568;
    }
    @media screen and (max-width: 600px) {
        .newsletter-container { width: 100% !important; border-radius: 0 !important; }
        .newsletter-content-block { padding: 18px 15px !important; }
        .newsletter-feedback-btn { display: block !important; margin: 6px 0 !important; width: 100% !important; box-sizing: border-box; }
    }
</style>

<body>
    <div class="body-inner">
        <?php include('../include/menu.php'); ?>
        <section id="page-title" data-bg-parallax="images/pages/contact.webp">
            <div class="bg-overlay" data-style="13"></div>
            <div class="container">
                <div class="page-title">
                    <h1>Logistics Pulse Newsletter</h1>
                    <span>Issue #<?php echo $issueNumber; ?> &bull; <?php echo $issueDate; ?></span>
                </div>
                <div class="breadcrumb">
                    <ul>
                        <li><a href="index.php">Home</a></li>
                        <li><a href="pulse.php">Pulse</a></li>
                        <li class="active"><a href="pulse/tirwin-pulse-latest.php">Newsletter #<?php echo $issueNumber; ?></a></li>
                    </ul>
                </div>
            </div>
        </section>

        <section id="page-content" class="p-b-50">
            <div class="container">
                <div class="newsletter-wrapper">
                    <table border="0" cellpadding="0" cellspacing="0" width="100%">
                        <tr>
                            <td align="center">
                                <table border="0" cellpadding="0" cellspacing="0" width="100%" class="newsletter-container">
                                    
                                    <!-- HEADER -->
                                    <tr>
                                        <td class="newsletter-header">
                                            <span class="newsletter-header-badge">Tirwin Intelligence Brief</span>
                                            <h1>LOGISTICS PULSE</h1>
                                            <p class="subtitle">Trade • Policy • Tech • Talent</p>
                                            <div class="newsletter-header-meta">
                                                <strong>Date:</strong> <?php echo $issueDate; ?> &nbsp;|&nbsp; <strong>Issue:</strong> #<?php echo $issueNumber; ?>
                                            </div>
                                        </td>
                                    </tr>

                                    <!-- MAIN CONTENT -->
                                    <tr>
                                        <td class="newsletter-content-block">

                                            <!-- SECTION 1 -->
                                            <div class="newsletter-section-header">
                                                <h2 class="newsletter-section-title">1. Global Macro-Radar</h2>
                                            </div>

                                            <div class="newsletter-article-card">
                                                <div class="newsletter-article-title">
                                                    <a href="pulse/1787212135/global-macro-radar.php">Freight Market Resets to Elevated Baseline as Integrators Cut Capacity</a>
                                                </div>
                                                <div class="newsletter-tag-container">
                                                    <span class="newsletter-tag">Global Trade Winds</span>
                                                    <span class="newsletter-tag">Parcel & Freight Trends</span>
                                                </div>
                                                <p class="newsletter-article-text">
                                                    <strong>Market Reset:</strong> Freight markets are settling into a new structural baseline rather than returning to historical averages. All-in truckload rates remain 50% above year-ago levels, while major integrators like UPS and FedEx are aggressively cutting low-margin e-commerce capacity to focus on high-yield healthcare and automotive sectors. On Trans-Pacific lanes, ocean carriers have successfully pushed $1,000 rate increases as importers continue frontloading cargo ahead of late-summer tariff updates.
                                                </p>
                                            </div>

                                            <!-- SECTION 2 -->
                                            <div class="newsletter-section-header">
                                                <h2 class="newsletter-section-title">2. The Tech Lab</h2>
                                            </div>

                                            <div class="newsletter-article-card">
                                                <div class="newsletter-article-title">
                                                    <a href="pulse/1787212135/tech-lab.php">FCC Advanced Robotic Ruling Mandates OEM-Agnostic Domestic Strategies</a>
                                                </div>
                                                <div class="newsletter-tag-container">
                                                    <span class="newsletter-tag">Warehouse Automation</span>
                                                    <span class="newsletter-tag">Robotics Policy</span>
                                                    <span class="newsletter-tag">Logistics Technology</span>
                                                </div>
                                                <p class="newsletter-article-text">
                                                    <strong>Tech Policy Shift:</strong> A new regulatory ruling by the FCC blocking approvals for foreign advanced robotic devices is reshaping 2026 warehouse automation planning. Distribution center operators and 3PLs are pivoting away from single-source foreign hardware vendors toward OEM-agnostic software architectures and domestic robotic systems that can operate securely across unified Warehouse Execution System (WES) layers.
                                                </p>
                                            </div>

                                            <!-- SECTION 3 -->
                                            <div class="newsletter-section-header">
                                                <h2 class="newsletter-section-title">3. Government & Policy</h2>
                                            </div>

                                            <div class="newsletter-article-card">
                                                <div class="newsletter-article-title">
                                                    <a href="pulse/1787212135/government-policy.php">Australia Tightens Biosecurity: DAFF Eliminates Two BMSB Clearance Pathways</a>
                                                </div>
                                                <div class="newsletter-tag-container">
                                                    <span class="newsletter-tag">Biosecurity Regulations</span>
                                                    <span class="newsletter-tag">Customs & Compliance</span>
                                                </div>
                                                <p class="newsletter-article-text">
                                                    <strong>Policy Mandate:</strong> Australia’s Department of Agriculture, Fisheries and Forestry (DAFF) has confirmed the removal of two key alternative clearance pathways—the Safeguarding Arrangement Scheme and the Rolled Goods Policy—for the upcoming 2026-2027 Brown Marmorated Stink Bug (BMSB) season starting September 1. Importers sending containerized ocean cargo into Oceania must adapt quickly to strict mandatory offshore treatment guidelines.
                                                </p>
                                            </div>

                                            <!-- SECTION 4 -->
                                            <div class="newsletter-section-header">
                                                <h2 class="newsletter-section-title">4. Global Best Practices</h2>
                                            </div>

                                            <div class="newsletter-article-card">
                                                <div class="newsletter-article-title">
                                                    <a href="pulse/1787212135/global-best-practices.php">Managing Easing Spot Rates Through Disciplined Blank Sailings</a>
                                                </div>
                                                <div class="newsletter-tag-container">
                                                    <span class="newsletter-tag">Resilient Logistics</span>
                                                    <span class="newsletter-tag">Ocean Capacity Planning</span>
                                                </div>
                                                <p class="newsletter-article-text">
                                                    <strong>Carrier Strategy:</strong> While ocean spot rates from Asia to Europe have gradually eased (e.g., Shanghai to Northern Europe down to $4,677/FEU), carriers are managing vessel capacity disciplined through blank sailings to prevent rate crashes. Best practices for Q3 demand pairing contractual allocation buffers with strategic spot bookings to protect margins against sudden capacity withdrawals.
                                                </p>
                                            </div>

                                            <!-- SECTION 5 -->
                                            <div class="newsletter-section-header">
                                                <h2 class="newsletter-section-title">5. The Talent Bench</h2>
                                            </div>

                                            <div class="newsletter-article-card">
                                                <div class="newsletter-article-title">
                                                    <a href="pulse/1787212135/talent-bench.php">Developing the "Warehouse 2030" Workforce Amid Supply Chain Shifts</a>
                                                </div>
                                                <div class="newsletter-tag-container">
                                                    <span class="newsletter-tag">Workforce Upskilling</span>
                                                    <span class="newsletter-tag">Hybrid Operators</span>
                                                </div>
                                                <p class="newsletter-article-text">
                                                    <strong>Talent Pivot:</strong> Industrial and electrical distributors are accelerating the transformation of frontline logistics roles as labor scarcity persists. To manage increasingly complex customer customization and multi-channel LTL rerouting, organizations are focused on upskilling floor staff into digital "Hybrid Operators" equipped with decision-support software and operational visibility tools.
                                                </p>
                                            </div>

                                            <!-- FEEDBACK SECTION -->
                                            <div class="newsletter-feedback-section">
                                                <h3 class="newsletter-feedback-title">Was this edition useful to you?</h3>
                                                <p class="newsletter-feedback-subtitle">Your feedback helps us tailor future logistics intelligence brief issues.</p>
                                                <table border="0" cellpadding="0" cellspacing="0" width="100%" style="margin-top: 12px;">
                                                    <tr>
                                                        <td align="center">
                                                            <!-- Feedback Reaction Buttons -->
                                                            <a href="contact.php?feedback=insightful&issue=<?php echo $issueNumber; ?>" class="newsletter-feedback-btn" target="_blank">
                                                                🤩 Insightful
                                                            </a>
                                                            <a href="contact.php?feedback=good&issue=<?php echo $issueNumber; ?>" class="newsletter-feedback-btn" target="_blank">
                                                                👍 Good
                                                            </a>
                                                            <a href="contact.php?feedback=okay&issue=<?php echo $issueNumber; ?>" class="newsletter-feedback-btn" target="_blank">
                                                                😐 Average
                                                            </a>
                                                            <a href="contact.php?feedback=needs-work&issue=<?php echo $issueNumber; ?>" class="newsletter-feedback-btn" target="_blank">
                                                                👎 Needs Work
                                                            </a>
                                                        </td>
                                                    </tr>
                                                </table>
                                                <p style="margin-top: 14px; margin-bottom: 0; font-size: 12px; color: #718096;">
                                                    Have additional comments? <a href="mailto:tirwin.communications@tirwin.in?subject=Logistics%20Pulse%20Feedback" style="color: #0055a5; text-decoration: underline;">Send feedback directly to our editors</a>.
                                                </p>
                                            </div>

                                        </td>
                                    </tr>

                                    <!-- SOCIAL & CONNECT SECTION -->
                                    <tr>
                                        <td class="newsletter-connect-section">
                                            <div class="newsletter-connect-title">Connect With Us</div>
                                            
                                            <!-- Social Icons Row -->
                                            <table border="0" cellpadding="0" cellspacing="0" class="newsletter-social-icon-table">
                                                <tr>
                                                    <td align="center">
                                                        <!-- LinkedIn -->
                                                        <a href="https://www.linkedin.com/company/tirwin-management-services" target="_blank" class="newsletter-social-icon-btn social-linkedin" title="LinkedIn">
                                                            <img src="https://img.icons8.com/ios-filled/48/ffffff/linkedin.png" alt="LinkedIn" width="20" height="20" style="vertical-align: middle; width: 20px; height: 20px;">
                                                        </a>
                                                        
                                                        <!-- X / Twitter -->
                                                        <a href="https://x.com/tirwin_in" target="_blank" class="newsletter-social-icon-btn social-x" title="X (Twitter)">
                                                            <img src="https://img.icons8.com/ios-filled/48/ffffff/twitterx.png" alt="X" width="20" height="20" style="vertical-align: middle; width: 20px; height: 20px;">
                                                        </a>
                                                        
                                                        <!-- Facebook -->
                                                        <a href="https://www.facebook.com/tirwinmanagementservices" target="_blank" class="newsletter-social-icon-btn social-facebook" title="Facebook">
                                                            <img src="https://img.icons8.com/ios-filled/48/ffffff/facebook-new.png" alt="Facebook" width="20" height="20" style="vertical-align: middle; width: 20px; height: 20px;">
                                                        </a>
                                                        
                                                        <!-- Instagram -->
                                                        <a href="https://www.instagram.com/tirwin_in/" target="_blank" class="newsletter-social-icon-btn social-instagram" title="Instagram">
                                                            <img src="https://img.icons8.com/ios-filled/48/ffffff/instagram-new.png" alt="Instagram" width="20" height="20" style="vertical-align: middle; width: 20px; height: 20px;">
                                                        </a>
                                                        
                                                        <!-- YouTube -->
                                                        <a href="https://www.youtube.com/@tirwin" target="_blank" class="newsletter-social-icon-btn social-youtube" title="YouTube">
                                                            <img src="https://img.icons8.com/ios-filled/48/ffffff/youtube-play.png" alt="YouTube" width="20" height="20" style="vertical-align: middle; width: 20px; height: 20px;">
                                                        </a>

                                                        <!-- Website -->
                                                        <a href="index.php" target="_blank" class="newsletter-social-icon-btn social-website" title="Tirwin Website">
                                                            <img src="https://img.icons8.com/ios-filled/48/ffffff/domain.png" alt="Website" width="20" height="20" style="vertical-align: middle; width: 20px; height: 20px;">
                                                        </a>
                                                    </td>
                                                </tr>
                                            </table>

                                            <!-- Share Newsletter Options -->
                                            <div class="newsletter-share-container">
                                                <span>Share this edition:</span>
                                                <a href="https://www.linkedin.com/sharing/share-offsite/?url=https%3A%2F%2Ftirwin.in%2Fpulse%2Ftirwin-pulse-latest.php" target="_blank" class="newsletter-share-link">LinkedIn</a> &bull;
                                                <a href="https://api.whatsapp.com/send?text=Check%20out%20the%20Logistics%20Intelligence%20Brief%20by%20Tirwin:%20https%3A%2F%2Ftirwin.in%2Fpulse%2Ftirwin-pulse-latest.php" target="_blank" class="newsletter-share-link">WhatsApp</a> &bull;
                                                <a href="mailto:?subject=Logistics%20Intelligence%20Brief%20by%20Tirwin&body=Thought%20you%20might%20find%20this%20interesting:%20https%3A%2F%2Ftirwin.in%2Fpulse%2Ftirwin-pulse-latest.php" class="newsletter-share-link">Forward Email</a>
                                            </div>
                                        </td>
                                    </tr>

                                    <!-- FOOTER -->
                                    <tr>
                                        <td class="newsletter-footer">
                                            <p style="margin: 0 0 8px 0; font-weight: 600; color: #e2e8f0;">Tirwin Management Services (P) Ltd.</p>
                                            <p style="margin: 0 0 12px 0;">Logistics & Supply Chain Intelligence Advisory</p>
                                            <div class="newsletter-footer-divider"></div>
                                            <p style="margin: 8px 0;">
                                                &copy; 2026 Tirwin Management Services (P) Ltd. All rights reserved.
                                            </p>
                                            <p style="margin: 8px 0;">
                                                <a href="index.php" target="_blank">www.tirwin.in</a> &nbsp;|&nbsp;
                                                <a href="contact.php" target="_blank">Contact Us</a> &nbsp;|&nbsp;
                                                <a href="privacy.php" target="_blank">Privacy Policy</a>
                                            </p>
                                            <p style="margin: 12px 0 0 0; font-size: 11px; color: #718096;">
                                                You received this email because you subscribed to the Tirwin Logistics Intelligence Brief.<br>
                                                <a href="unsubscribe.php" style="color: #a0aec0; text-decoration: underline;">Unsubscribe from this list</a>
                                            </p>
                                        </td>
                                    </tr>

                                </table>
                            </td>
                        </tr>
                    </table>
                </div>
            </div>
        </section>
    </div>

    <?php include('../include/footer.php'); ?>
    <a id="scrollTop"><i class="icon-chevron-up"></i><i class="icon-chevron-up"></i></a>
    <script src="js/jquery.js"></script>
    <script src="js/plugins.js"></script>
    <script src="js/functions.js"></script>
</body>
</html>
