<?php include('../include/header.php'); ?>
<?php
  $currentURL = urlencode("https://" . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI']);
?>

<style>
    .alert .close {
        display: none !important;
    }
    
    .post-item-description{
        text-align: justify;
    }
</style>

<body>
    <div class="body-inner">
        <?php include('../include/menu.php'); ?>
        
        <section id="page-title" data-bg-parallax="images/pages/contact.webp">
            <div class="bg-overlay" data-style="13"></div>
            <div class="container">
                <div class="page-title">
                    <h1>Blog</h1>
                    <span>Expert Perspectives on the Logistics & Supply Chain Industry</span>
                </div>
                <div class="breadcrumb">
                    <ul>
                        <li><a href="#">Home</a></li>
                        <li><a href="#">Pages</a></li>
                        <li class="active"><a href="#">Blog</a></li>
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
                                            <img alt="" src="images/blog-images/bridging-skill-gap.png">
                                        </a>
                                    </div>
                                    <div class="post-item-description">
                                        <h2>The Logistics Industry: Bridging the Talent Gap for a Future-Ready Workforce</h2>
                                        <p>The logistics sector, a backbone of global trade, now faces an urgent challenge—bridging the workforce capability gap amidst rapid technological growth. Organizations are addressing this by embracing innovation, upskilling talent, and fostering collaborative training ecosystems.</p>
                                    </div>
                                    <div class="post-tags">
                                        <a href="#" target="_new">#TheLogisticsIndustry</a>
                                        <a href="#" target="_new">#BridgingTheTalentGap</a>
                                        <a href="#" target="_new">#FutureReadyWorkforce</a>
                                        <a href="#" target="_new">#LogisticsInnovation</a>
                                        <a href="#" target="_new">#WorkforceDevelopment</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
    
    <?php include ('../include/footer.php'); ?>
    <a id="scrollTop"><i class="icon-chevron-up"></i><i class="icon-chevron-up"></i></a>
    <script src="js/jquery.js"></script>
    <script src="js/plugins.js"></script>
    <script src="js/functions.js"></script>
</body>
</html>