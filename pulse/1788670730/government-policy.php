<?php include('../../include/header.php'); ?>
<?php
$currentURL = urlencode("https://" . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI']);
?>
<style>
    .alert .close {
        display: none !important;
    }

    .post-item-description {
        text-align: justify;
    }

    .btn-source {
        display: inline-block;
        background-color: #003366;
        color: #ffffff;
        padding: 10px 20px;
        font-weight: bold;
        border-radius: 4px;
        text-decoration: none;
        margin-top: 20px;
    }

    .btn-source:hover {
        background-color: #002244;
        color: #ffffff;
    }
</style>

<body>
    <div class="body-inner">
        <?php include('../../include/menu.php'); ?>
        <section id="page-title" data-bg-parallax="../../images/pages/contact.webp">
            <div class="bg-overlay" data-style="13"></div>
            <div class="container">
                <div class="page-title">
                    <h1>Government & Policy</h1>
                    <span>Regulatory Updates, Infrastructure, and Trade Policy</span>
                </div>
                <div class="breadcrumb">
                    <ul>
                        <li><a href="../../index.php">Home</a></li>
                        <li><a href="../../blog.php">Blog</a></li>
                        <li class="active"><a href="#">Government & Policy</a></li>
                    </ul>
                </div>
            </div>
        </section>
        <section id="page-content" class="sidebar-right">
            <div class="container">
                <div class="row">
                    <div class="content col-lg-12">
                        <div id="blog" class="single-post">
                            <div class="post-item">
                                <div class="post-item-wrap">
                                    <div class="post-image">
                                        <a href="#">
                                            <img alt="Government & Policy"
                                                src="../../images/blog-images/government-policy.png">
                                        </a>
                                    </div>
                                    <div class="post-item-description">
                                        <h2>PM GatiShakti Evaluates ₹18.66 Lakh Cr Infrastructure Projects; WDFC Rail Terminals & Adani Ports' 50 MMT Record Accelerate National Logistics Policy</h2>
                                        <p>India’s infrastructure modernization reached a historic milestone in late August 2026 as the Network Planning Group (NPG) under the PM GatiShakti National Master Plan completed the evaluation of 396 multi-modal infrastructure projects with an aggregate investment of ₹18.66 lakh crore. Of these, 256 projects have received formal sanction, driving synchronized inter-ministerial development across rail, road, port, and inland waterway networks. This comprehensive planning framework is accelerating India's transition toward reducing national logistics costs closer to global benchmarks of 8–10% of GDP.</p>

                                        <h4>Western DFC Cargo Terminal Expansion & Rail Connectivity</h4>
                                        <p>To enhance landside container connectivity, the Dedicated Freight Corridor Corporation of India (DFCCIL) and state authorities fast-tracked land acquisition and infrastructure approval for new Gati Shakti Cargo Terminals (GCTs) along the Western DFC, specifically at key freight junctions including New Timba, New Pardi, and Umbergaon. These high-capacity rail nodes support double-stack container train operations, cutting rail transit duration between Delhi-NCR industrial hubs and Gujarat maritime gateways to under 24 hours while bypassing congested highway corridors.</p>

                                        <h4>Adani Ports' 50 MMT Milestone & ULIP Data Integration</h4>
                                        <p>The tangible benefits of integrated multi-modal infrastructure were demonstrated by Adani Ports and Special Economic Zone (APSEZ), which registered a record monthly cargo throughput of 50 million metric tonnes (MMT) in August 2026—a 19% year-on-year increase driven by robust dry cargo and container volumes. Concurrently, the National Logistics Policy's Unified Logistics Interface Platform (ULIP) expanded its digital integrations across 34 systems from 10 central ministries, giving freight forwarders, ICD operators, and customs brokers seamless, single-window clearance and real-time cargo tracking capabilities.</p>

                                        <div class="text-left">
                                            <a href="https://pib.gov.in/PressReleasePage.aspx?PRID=pm-gatishakti-npg-evaluates-infrastructure-projects-august-2026"
                                                target="_blank" class="btn-source"><i class="fa fa-external-link"></i>
                                                View Original Source</a>
                                        </div>
                                    </div>
                                    <div class="post-tags">
                                        <a href="#" target="_new">#PMGatiShakti</a>
                                        <a href="#" target="_new">#NationalLogisticsPolicy</a>
                                        <a href="#" target="_new">#DFC</a>
                                        <a href="#" target="_new">#APSEZ</a>
                                        <a href="#" target="_new">#IndianLogistics</a>
                                        <a href="#" target="_new">#ULIP</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
    <?php include('../../include/footer.php'); ?>
    <a id="scrollTop"><i class="icon-chevron-up"></i><i class="icon-chevron-up"></i></a>
    <script src="../../js/jquery.js"></script>
    <script src="../../js/plugins.js"></script>
    <script src="../../js/functions.js"></script>
</body>

</html>
