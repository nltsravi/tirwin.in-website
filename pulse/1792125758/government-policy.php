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
                    <span>Regulatory Frameworks and Public Sector Developments</span>
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
                                        <h2>Statutory MSDC 21st Meeting Mandates "One Nation, One Port Process" (ONOP) & Sagar Setu Integration by March 2027 Across All Indian Gateways</h2>
                                        <p>In a landmark statutory gathering in Mumbai in mid-October 2026, the 21st Meeting of the Maritime State Development Council (MSDC)—chaired by Union Minister for Ports, Shipping and Waterways Sarbananda Sonowal—finalized sweeping national directives to standardize and digitize India’s maritime trade architecture. Operating for the first time as a formal statutory consultative body following the enactment of the Indian Ports Act, 2025, the MSDC resolved that all maritime gateways across the nation—encompassing both the 12 Major Ports and over 200 non-major, state maritime board, and private commercial ports—must achieve full operational compliance with the "One Nation, One Port Process" (ONOP) framework by March 2027. This nationwide standardization is structured to eliminate the fragmented, multi-agency compliance hurdles that have long burdened international freight forwarders, customs brokers, and export-import shippers.</p>

                                        <h4>Three Pillars of ONOP: Documentation, Process Re-engineering & Sagar Setu</h4>
                                        <p>The ONOP reform roadmap rests on three foundational pillars: One Nation One Documentation, Port Process Re-engineering, and Inter-Ministerial Coordination. Under the newly released "Ready Reckoner for Implementing ONOP," procedures across the Central Board of Indirect Taxes and Customs (CBIC), Ministry of Home Affairs (Bureau of Immigration), and Ministry of Health and Family Welfare (Port Health Organization) have been harmonized into standardized digital workflows. All maritime gateways are legally mandated to integrate their terminal operating software with the Maritime Single Window (MSW – Sagar Setu) platform by March 2027. This single-window digital integration eliminates duplicative physical and electronic submissions, enabling shipping lines and NVOCCs to execute automated vessel clearances, electronic delivery orders (e-DO), and container gate-in authorizations through a singular, uniform national portal.</p>

                                        <h4>Mandatory Electronic Port Tariffs & Exim Cost Transparency</h4>
                                        <p>In a direct measure to enhance cost competitiveness and curb unauthorized terminal surcharges, the MSDC officially mandated the electronic publication of port tariffs and vessel-related charges across all public and private maritime terminals. Port concessionaires and private terminal operators must now publish fully itemized, audited tariff schedules online, guaranteeing pricing transparency for Indian exporters and overseas buyers. As India's maritime throughput accelerates—evidenced by the Visakhapatnam Port Authority crossing its 50-million-tonne handling milestone well ahead of fiscal schedules—the enforced rollout of ONOP and Sagar Setu integration establishes an unassailable foundation for reducing national logistics costs to below 8% of GDP and cementing India’s rank among top global maritime logistics hubs.</p>

                                        <div class="text-left">
                                            <a href="https://pib.gov.in/PressReleasePage.aspx?PRID=2322942"
                                                target="_blank" class="btn-source"><i class="fa fa-external-link"></i>
                                                View Original Source</a>
                                        </div>
                                    </div>
                                    <div class="post-tags">
                                        <a href="#" target="_new">#OneNationOnePort</a>
                                        <a href="#" target="_new">#MSDC</a>
                                        <a href="#" target="_new">#SagarSetu</a>
                                        <a href="#" target="_new">#IndianPortsAct</a>
                                        <a href="#" target="_new">#PortReforms</a>
                                        <a href="#" target="_new">#MaritimeIndia</a>
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
