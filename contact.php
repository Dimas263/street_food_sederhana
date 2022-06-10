<?=include_once ("header.php")?>

    <!-- page-banner-section
        ================================================== -->
    <section class="page-banner-section">
        <div class="container">
            <h1>Contacts</h1>
            <span>get in touch</span>
        </div>
    </section>
    <!-- End page-banner section -->

    <!-- page-ban-list -->
    <div class="container">
        <ul class="page-ban-list">
            <li><a href="index.html">Home</a></li>
            <li><a href="contact">Contacts</a></li>
        </ul>
    </div>
    <!-- end page-ban-list -->

    <!-- contact-section
        ================================================== -->
    <section class="contact-section2">
        <div class="container">
            <div class="contact-info">
                <div class="row">
                    <div class="col-lg-4 col-md-6">
                        <div class="info-post">
                            <span><i class="la la-map-marker"></i></span>
                            <div class="info-content">
                                <h3>Location:</h3>
                                <p>Bekasi,<br> West Java, Indonesia</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="info-post">
                            <span><i class="la la-phone"></i></span>
                            <div class="info-content">
                                <h3>Phone:</h3>
                                <p>(+62) 858 - xxxx - xxxx <br> (+62) 813 - xxxx - xxxx</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="info-post">
                            <span><i class="la la-envelope"></i></span>
                            <div class="info-content">
                                <h3>Email:</h3>
                                <p>Streetfood_bekasi@mail.com <br> support_dimas263@mail.com</p>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <div class="contact-box">
                <div class="row">
                    <div class="col-lg-6">
                        <form id="contact-form">
                            <input name="name" id="name" type="text" placeholder="Name*">
                            <input name="mail" id="mail" type="text" placeholder="Email*">
                            <input name="tel-number" id="tel-number" type="text" placeholder="Your Phone">
                            <textarea name="comment" id="comment" placeholder="Your Message*"></textarea>
                            <input type="submit" id="submit_contact" value="Submit">
                            <div id="msg" class="message"></div>
                        </form>

                    </div>
                    <div class="col-lg-6">

                        <div id="map"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End contact section -->

<?=include_once ("footer.php")?>