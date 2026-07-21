<?php include('include/header.php'); ?>
<style>
    .alert .close {
        display: none !important;
    }
    .post-item-description {
        text-align: justify;
    }
    .post-image img {
        width: 100%;
        height: 250px !important;
        object-fit: cover;
    }
</style>

<body>
    <div class="body-inner">
        <?php include('include/menu.php'); ?>
        <section id="page-title" data-bg-parallax="images/pages/contact.webp">
            <div class="bg-overlay" data-style="13"></div>
            <div class="container">
                <div class="page-title">
                    <h1>Pulse</h1>
                    <span>Real-Time Freight, Logistics & Air Cargo News</span>
                </div>
                <div class="breadcrumb">
                    <ul>
                        <li><a href="#">Home</a> </li>
                        <li><a href="#">Pages</a> </li>
                        <li class="active"><a href="pulse.php">Pulse</a> </li>
                    </ul>
                </div>
            </div>
        </section>

        <section>
            <div class="container">
                <div id="blog" class="grid-layout post-3-columns m-b-30" data-item="post-item">
                    
                    <!-- Air Cargo News Card -->
                    <div class="post-item border">
                        <div class="post-item-wrap">
                            <div class="post-image">
                                <a href="pulse/air-cargo-surge.php">
                                    <img alt="Air Cargo Spot Rate Surge" src="images/pulse-images/air-cargo-surge.png">
                                </a>
                                <span class="post-meta-category"><a href="pulse/air-cargo-surge.php">Air Cargo</a></span>
                            </div>
                            <div class="post-item-description">
                                <span class="post-meta-date"><i class="fa fa-calendar-o"></i>Jul 20, 2026</span>
                                <h2><a href="pulse/air-cargo-surge.php">Transpacific Air Freight Rates Surge Amid Capacity Squeeze</a></h2>
                                <p>Transpacific air cargo rates hit new seasonal highs as belly capacity tightens across major Asia-Pacific trade corridors, accelerating freighter charter demands for Q3 peak shipments.</p>
                                <a href="pulse/air-cargo-surge.php" class="item-link">Read More <i class="icon-chevron-right"></i></a>
                            </div>
                        </div>
                    </div>

                    <!-- Port Congestion News Card -->
                    <div class="post-item border">
                        <div class="post-item-wrap">
                            <div class="post-image">
                                <a href="pulse/port-congestion-update.php">
                                    <img alt="Port Congestion & Ocean Freight" src="images/pulse-images/port-congestion.png">
                                </a>
                                <span class="post-meta-category"><a href="pulse/port-congestion-update.php">Maritime Freight</a></span>
                            </div>
                            <div class="post-item-description">
                                <span class="post-meta-date"><i class="fa fa-calendar-o"></i>Jul 18, 2026</span>
                                <h2><a href="pulse/port-congestion-update.php">Global Maritime Hubs Shift Schedules to Ease Port Bottlenecks</a></h2>
                                <p>Key transshipment hubs experience increased container vessel dwell times as ocean carriers realign port calls and implement off-dock staging to mitigate systemic choke points.</p>
                                <a href="pulse/port-congestion-update.php" class="item-link">Read More <i class="icon-chevron-right"></i></a>
                            </div>
                        </div>
                    </div>

                    <!-- Digital Customs News Card -->
                    <div class="post-item border">
                        <div class="post-item-wrap">
                            <div class="post-image">
                                <a href="pulse/digital-customs-initiative.php">
                                    <img alt="Digital Customs & Trade" src="images/pulse-images/digital-customs.png">
                                </a>
                                <span class="post-meta-category"><a href="pulse/digital-customs-initiative.php">Logistics Tech</a></span>
                            </div>
                            <div class="post-item-description">
                                <span class="post-meta-date"><i class="fa fa-calendar-o"></i>Jul 16, 2026</span>
                                <h2><a href="pulse/digital-customs-initiative.php">Single-Window Digital Customs Cut Clearance Times by 40%</a></h2>
                                <p>Automated customs clearance platforms and unified digital trade corridors are dramatically streamlining cross-border documentation and accelerating cargo throughput across global hubs.</p>
                                <a href="pulse/digital-customs-initiative.php" class="item-link">Read More <i class="icon-chevron-right"></i></a>
                            </div>
                        </div>
                    </div>

                    <!-- Sustainable Fuel News Card -->
                    <div class="post-item border">
                        <div class="post-item-wrap">
                            <div class="post-image">
                                <a href="pulse/sustainable-aviation-fuel.php">
                                    <img alt="Sustainable Aviation Fuel" src="images/pulse-images/sustainable-fuel.png">
                                </a>
                                <span class="post-meta-category"><a href="pulse/sustainable-aviation-fuel.php">Sustainability</a></span>
                            </div>
                            <div class="post-item-description">
                                <span class="post-meta-date"><i class="fa fa-calendar-o"></i>Jul 14, 2026</span>
                                <h2><a href="pulse/sustainable-aviation-fuel.php">Airlines Accelerate SAF Blending to Meet Carbon Targets</a></h2>
                                <p>Global air cargo operators expand Sustainable Aviation Fuel (SAF) procurement frameworks to comply with tightening international climate mandates and scope 3 emission reduction targets.</p>
                                <a href="pulse/sustainable-aviation-fuel.php" class="item-link">Read More <i class="icon-chevron-right"></i></a>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </section>
    </div>
    <?php include ('include/footer.php'); ?>
    <a id="scrollTop"><i class="icon-chevron-up"></i><i class="icon-chevron-up"></i></a>
    <script src="js/jquery.js"></script>
    <script src="js/plugins.js"></script>
    <script src="js/functions.js"></script>
</body>
</html>
