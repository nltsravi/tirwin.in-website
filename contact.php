<?php include('include/header.php'); ?>
<style>
    .alert .close {
        display: none !important;
    }
</style>
<body>
    <!-- Body Inner -->
    <div class="body-inner">
        <!-- Header -->
        <?php include('include/menu.php'); ?>
        <!-- end: Header -->
        <!-- Page title -->
        <section id="page-title" data-bg-parallax="images/pages/contact.webp">
            <div class="bg-overlay" data-style="13"></div>
            <div class="container">
                <div class="page-title">
                    <h1>Contact Us</h1>
                    <span>The most happiest time of the day!.</span>
                </div>
                <div class="breadcrumb">
                    <ul>
                        <li><a href="#">Home</a> </li>
                        <li><a href="#">Pages</a> </li>
                        <li class="active"><a href="#">Contact Us</a> </li>
                    </ul>
                </div>
            </div>
        </section>

        <!-- end: Page title -->
        <!-- FULL WIDTH PAGE -->
        <section>
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <h3 class="text-uppercase">Get In Touch</h3>
                        <p>We'd love to hear from you! If you have any questions, comments, or inquiries, feel free to reach out to us. Our team is always ready to assist you with your needs.</p>
                        <div class="m-t-30">
                            <form class="widget-contact-form" data-success-message-delay="40000" novalidate action="include/contact-form.php" role="form" method="post">
                                <div class="row">
                                    <div class="form-group col-md-6">
                                        <label for="name">Name</label>
                                        <input type="text" aria-required="true" name="widget-contact-form-name" required class="form-control required name" placeholder="Enter your Name">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="email">Email</label>
                                        <input type="email" aria-required="true" name="widget-contact-form-email" required class="form-control required email" placeholder="Enter your Email">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="form-group col-md-12">
                                        <label for="subject">Services</label>
                                        <select class="form-select" name="widget-contact-form-category" required id="category" onchange="onCategoryChange()">
                                            <option value="">Choose Subject</option>
                                            <option value="consulting">Consulting Services </option>
                                            <option value="training">Training Services </option>
                                            <option value="staffing">Staffing Services</option>
                                            <option value="tech">Technology Services</option>
                                            <option value="publication">IATA Publication</option>
                                            <option value="other">Others</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="form-group col-md-12">
                                        <label for="subject" id="subcategoryLabel" style="display:none;">Sub Services</label>
                                        <select class="form-select" name="widget-contact-form-subcategory" id="subcategory" style="display:none;">
                                            <option value="">Select Subcategory</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="message">Message</label>
                                    <textarea type="text" name="widget-contact-form-message" required rows="5" class="form-control required" placeholder="Enter your Message"></textarea>
                                </div>
                                <div class="form-group">
                                    <script src="https://www.google.com/recaptcha/api.js" async defer></script>
                                    <div class="g-recaptcha" data-sitekey="6Ld_s0ErAAAAAABK4Fe9TZsJQ8-s5nCK6DdOuiF-"></div>
                                </div>
                                <button class="btn btn-primary" type="submit" id="form-submit"><i class="fa fa-paper-plane"></i>&nbsp;Send message</button>
                            </form>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <h3 class="text-uppercase">Address & Map</h3>
                        <div class="row">
                            <div class="col-lg-6">
                                <address>
                                    <strong>Tirwin Management Services (P) Ltd</strong><br>
                                    "Kamalalayam"<br>
                                    Door No 23, Ramanar Street,<br>
                                    Chitlapakkam<br>
                                    Chennai 600 064<br>
                                    <abbr title="Email">E:</h4> tirwin.communications@tirwin.in
                                </address>
                            </div>
                        </div>
                        <!-- Google Map -->
                        <!-- <div class="map" data-latitude="-37.817240" data-longitude="144.955826" data-style="light" data-info="Hello from &lt;br&gt; Inspiro Themes"></div> -->
                        <!-- end: Google Map -->
                    </div>
                </div>
            </div>
        </section>
        <!-- end: FULL WIDTH PAGE -->
    </div>
    <!-- end: Body Inner -->
    <?php include ('include/footer.php'); ?>
    <!-- Scroll top -->
    <a id="scrollTop"><i class="icon-chevron-up"></i><i class="icon-chevron-up"></i></a>
    <!--Plugins-->
    <script src="js/jquery.js"></script>
    <script src="js/plugins.js"></script>
    <!--Template functions-->
    <script src="js/functions.js"></script>

    <script>
        // Function to get URL parameters
        function getUrlParameter(name) {
            const urlParams = new URLSearchParams(window.location.search);
            return urlParams.get(name);
        }

        // Subcategories mapping
        const subcategories = {
            'tech': ['Process Diagnosis', 'Core Platform / Technology Support', 'Process Automation', 'Analytics & Insights', 'Advanced Analytics & AI Solutions', 'Digital Transformation - Program Management', 'Digital Transformation - Workforce Transformation', 'Other'],
            'staffing': ['Employers', 'Job Seekers', 'Other'],
            'training': ['DGR', 'Other'],
            'publication': []
        };

        // Function to set category and subcategory based on contact-reference
        function setCategoryAndSubcategory(contactReference) {
            const categoryDropdown = document.getElementById('category');
            const subcategoryDropdown = document.getElementById('subcategory');
            const subcategoryLabel = document.getElementById('subcategoryLabel');
            console.log("subcategories[contactReference]",subcategories[contactReference])
            // Set category
            if (contactReference && subcategories[contactReference]) {
                categoryDropdown.value = contactReference;
                if(subcategories[contactReference].length) {
                    showSubcategoryDropdown(contactReference);
                }
            } else {
                hideSubcategoryDropdown();
            }
        }

        // Function to display the subcategory dropdown
        function showSubcategoryDropdown(category) {
            const subcategoryDropdown = document.getElementById('subcategory');
            const subcategoryLabel = document.getElementById('subcategoryLabel');

            // Clear existing subcategories
            subcategoryDropdown.innerHTML = '<option value="">Select Subcategory</option>';

            // Set subcategories based on the category
            subcategories[category].forEach(function(subcat) {
                const option = document.createElement('option');
                option.value = subcat.toLowerCase();
                option.text = subcat;
                subcategoryDropdown.appendChild(option);
            });

            // Show the subcategory dropdown
            subcategoryDropdown.style.display = 'inline-block';
            subcategoryLabel.style.display = 'inline-block';
        }

        // Function to hide the subcategory dropdown
        function hideSubcategoryDropdown() {
            const subcategoryDropdown = document.getElementById('subcategory');
            const subcategoryLabel = document.getElementById('subcategoryLabel');

            // Hide the subcategory dropdown
            subcategoryDropdown.style.display = 'none';
            subcategoryLabel.style.display = 'none';
        }

        // Event handler when the category dropdown changes
        function onCategoryChange() {
            const categoryDropdown = document.getElementById('category');
            const selectedCategory = categoryDropdown.value;

            if (subcategories[selectedCategory]?.length) {
                showSubcategoryDropdown(selectedCategory);
            } else {
                hideSubcategoryDropdown();
            }
        }

        // Get contact-reference from the URL parameter
        const contactReference = getUrlParameter('contact-reference');

        // Set the dropdown values on page load
        setCategoryAndSubcategory(contactReference);
    </script>
</body>

</html>