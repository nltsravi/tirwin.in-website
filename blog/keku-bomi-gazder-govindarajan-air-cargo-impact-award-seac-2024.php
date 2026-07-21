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
    <!-- Body Inner -->
    <div class="body-inner">
        <!-- Header -->
        <?php include('../include/menu.php'); ?>
        <!-- end: Header -->
        <!-- Page title -->
        <section id="page-title" data-bg-parallax="images/pages/contact.webp">
            <div class="bg-overlay" data-style="13"></div>
            <div class="container">
                <div class="page-title">
                    <h1>Blog</h1>
                    <span>Expert Perspectives on Tech & Business Growth</span>
                </div>
                <div class="breadcrumb">
                    <ul>
                        <li><a href="#">Home</a> </li>
                        <li><a href="#">Pages</a> </li>
                        <li class="active"><a href="#">Blog</a> </li>
                    </ul>
                </div>
            </div>
        </section>

        <!-- end: Page title -->
        <!-- FULL WIDTH PAGE -->
        
        <!-- Page Content -->
        <section id="page-content" class="sidebar-right">
            <div class="container">
                <div class="row">
                    <!-- content -->
                    <div class="content col-lg-12">
                        <!-- Blog -->
                        <div id="blog" class="single-post">
                            <!-- Post single item-->
                            <div class="post-item">
                                <div class="post-item-wrap">
                                    <div class="post-image">
                                        <a href="#">
                                            <img alt="" src="images/blog-images/keku-bomi-gazder-govindarajan-air-cargo-impact-award-seac-2024.jpeg">
                                        </a>
                                    </div>
                                    <div class="post-item-description">
                                        <h2 style="text-align:left;">Mr. Keku Bomi Gazder Honored with the Govindarajan Air Cargo Impact Award at SEAC 2024</h2>
                                        <div class="post-meta">
                                            <span class="post-meta-date"><i class="fa fa-calendar-o"></i>Jan 15, 2025</span>
                                            <span class="post-meta-category"><a href=""><i class="fa fa-tag"></i>Awards</a></span>
                                            <div class="post-meta-share">
                                                <a class="btn btn-xs btn-slide btn-facebook" href="https://www.facebook.com/sharer/sharer.php?u=<?php echo $currentURL; ?>" target="_blank" data-width="160">
                                                    <i class="fab fa-facebook-f"></i>
                                                    <span>Share on Facebook</span>
                                                </a>
                                                <a class="btn btn-xs btn-slide btn-twitter" href="https://twitter.com/intent/tweet?url=<?php echo $currentURL; ?>&text=Check%20out%20this%20post!" target="_blank" data-width="120">
                                                    <i class="fab fa-x-twitter"></i>
                                                    <span>Share with X</span>
                                                </a>
                                                <a class="btn btn-xs btn-slide btn-info" class="btn btn-info" href="https://www.linkedin.com/sharing/share-offsite/?url=<?php echo $currentURL; ?>" data-width="150">
                                                    <i class="fab fa-linkedin-in"></i>
                                                    <span>Share on LinkedIn</span>
                                                </a>
                                                <a class="btn btn-xs btn-slide btn-googleplus" href="mailto:?subject=Check%20out%20this%20post!&body=Read%20this%20amazing%20blog:%20<?php echo $currentURL; ?>" data-width="130">
                                                    <i class="icon-mail"></i>
                                                    <span>Share via Email</span>
                                                </a>
                                            </div>
                                        </div>
                                        <p>Mr. <a href="https://www.linkedin.com/in/kekugazder/" target="_new">Keku Bomi Gazder</a> was honored with the Govindarajan Air Cargo Impact Award at South East Air Cargo Conclave & Awards 2024. This prestigious accolade highlights his outstanding contributions and transformative impact on the air cargo industry.</p>
                                        <p>Congratulations on this well-deserved recognition! Your vision continues to inspire the entire fraternity.</p>
                                    </div>
                                    <div class="post-tags">
                                        <a href="https://www.linkedin.com/feed/hashtag/?keywords=aircargoimpactaward&highlightedUpdateUrns=urn%3Ali%3Aactivity%3A7268250208461860865" target="_new">#SEAC2024</a>
                                        <a href="https://www.linkedin.com/feed/hashtag/?keywords=aircargoimpactaward&highlightedUpdateUrns=urn%3Ali%3Aactivity%3A7268250208461860865" target="_new">#AirCargoImpactAward </a>
                                        <a href="https://www.linkedin.com/feed/hashtag/?keywords=aircargoimpactaward&highlightedUpdateUrns=urn%3Ali%3Aactivity%3A7268250208461860865" target="_new">#RecognizingExcellence </a>
                                        <a href="https://www.linkedin.com/feed/hashtag/?keywords=aircargoimpactaward&highlightedUpdateUrns=urn%3Ali%3Aactivity%3A7268250208461860865" target="_new">#IndustryLeaders</a>
                                    </div>
                                    <!-- <div class="post-navigation">
                                        <a href="blog-single-slider.html" class="post-prev">
                                            <div class="post-prev-title"><span>Previous Post</span>Post with a slider and lightbox</div>
                                        </a>
                                        <a href="blog-masonry-3.html" class="post-all">
                                            <i class="icon-grid"> </i>
                                        </a>
                                        <a href="blog-single-video.html" class="post-next">
                                            <div class="post-next-title"><span>Next Post</span>Post with YouTube Video</div>
                                        </a>
                                    </div> -->
                                </div>
                            </div>
                            <!-- end: Post single item-->
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- end: Page Content -->
        <!-- end: FULL WIDTH PAGE -->
    </div>
    <!-- end: Body Inner -->
    <?php include ('../include/footer.php'); ?>
    <!-- Scroll top -->
    <a id="scrollTop"><i class="icon-chevron-up"></i><i class="icon-chevron-up"></i></a>
    <!--Plugins-->
    <script src="js/jquery.js"></script>
    <script src="js/plugins.js"></script>
    <!--Template functions-->
    <script src="js/functions.js"></script>
</body>

</html>