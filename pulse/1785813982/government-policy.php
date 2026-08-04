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
                    <span>Analyzing Regulatory Frameworks and Infrastructure Developments</span>
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
                                            <img alt="Government and Policy"
                                                src="../../images/blog-images/government-policy.png">
                                        </a>
                                    </div>
                                    <div class="post-item-description">
                                        <h2>Gati Shakti Terminals Draw ₹10,000 Cr Private Capital Across 142 Sites</h2>
                                        <p>In an update presented to Parliament, Union Railway Minister Ashwini Vaishnaw
                                            confirmed that 142 Gati Shakti Cargo Terminals (GCTs) have been commissioned
                                            across India. This infrastructure initiative is transforming freight
                                            mobility by establishing direct rail connections to high-density industrial
                                            corridors.</p>

                                        <h4>Mobilizing Private Investment for Freight Expansion</h4>
                                        <p>The GCT policy framework has successfully unlocked approximately ₹10,000
                                            crore in private sector investment. By allowing private terminal operators
                                            to build and run cargo hubs on rail land, the government has accelerated
                                            modal shift from road to rail, expanding national freight handling capacity
                                            by 224 million tonnes per annum (MTPA).</p>

                                        <h4>Broadening Capacity for Bulk and Containerized Freight</h4>
                                        <p>To sustain momentum under the PM GatiShakti National Master Plan,
                                            in-principle approval has been granted for an additional 310 GCT projects.
                                            These upcoming terminals will expand multi-modal connections for heavy bulk
                                            sectors—such as steel, cement, and food grains—while bolstering specialized
                                            container handling networks across key logistics nodes.</p>

                                        <div class="text-left">
                                            <a href="https://swarajyamag.com/infrastructure/gati-shakti-cargo-terminal-policy-draws-rs-10000-crore-private-investment-as-142-gcts-with-224-mtpa-freight-handling-capacity-commissioned"
                                                target="_blank" class="btn-source"><i class="fa fa-external-link"></i>
                                                View Original Source</a>
                                        </div>
                                    </div>
                                    <div class="post-tags">
                                        <a href="#" target="_new">#PMGatiShakti</a>
                                        <a href="#" target="_new">#RailInfrastructure</a>
                                        <a href="#" target="_new">#LogisticsPolicy</a>
                                        <a href="#" target="_new">#MultiModalTransport</a>
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