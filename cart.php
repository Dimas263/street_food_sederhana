<?=include_once ("header.php")?>
    <!-- page-banner-section
            ================================================== -->
    <section class="page-item">
        <div class="container">
            <br><br><br>
            <h1>Shopping Cart</h1>
            <div id="items_table">
                <h3>Shopping List</h3>
                <table id=list></table>
                <br>
                <p>
                    <label>
                        <a class="btn btn-danger text-white" onclick="ClearAll()">
                            Delete all items
                        </a>
                    </label>
                </p>
            </div>
        </div>
    </section>
    <!-- End page-banner section -->

<!-- footer
    ================================================== -->
<footer>
    <div class="container">

        <div class="up-footer">
            <div class="row">

                <div class="col-lg-4 col-md-6">
                    <div class="footer-widget social-widget">
                        <a href="index.html">
                            <img src="upload/gallery/icon2.png" width="300" alt="">
                        </a>
                        <p>The best variety of food and drinks with a lively and fun atmosphere.
                            Enjoy with family and friends.</p>
                        <ul class="social-list">
                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                        </ul>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="footer-widget newsletter-widget">
                        <h3>Newsletter</h3>
                        <p>Please subscribe to get the latest information from us</p>
                        <form class="subscribe-form" action="">
                            <input type="text" placeholder="enter your email"/>
                            <button type="submit" >Subscribe</button>
                        </form>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="footer-widget contact-widget">
                        <h3>How To Find Us</h3>
                        <p><i class="fa fa-map-marker"></i>Bekasi</p>
                        <p><i class="fa fa-phone"></i>+62858 xxxx-xxxx</p>
                        <p><i class="fa fa-envelope"></i>Streetfood_bekasi@mail.com</p>
                    </div>
                </div>

            </div>
        </div>

        <p class="copyright-line">Copyright &copy; DimasDesktop. All rights reserved.</p>
        <a href="#" class="go-top">Back To Top</a>

    </div>

</footer>
<!-- End footer -->

</div>
<!-- End Container -->

<div class="preloader">
    <img alt="" src="images/loader.gif">
</div>

<script src="js/plugins.min.js"></script>
<script src="js/jquery.countTo.js"></script>
<script src="js/popper.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/gmap.min.js"></script>
<script src="js/script.js"></script>

<script>
    var tpj=jQuery;
    var revapi202;
    tpj(document).ready(function() {
        if (tpj("#rev_slider_202_1").revolution == undefined) {
            revslider_showDoubleJqueryError("#rev_slider_202_1");
        } else {
            revapi202 = tpj("#rev_slider_202_1").show().revolution({
                sliderType: "standard",
                jsFileLocation: "js/",
                sliderLayout:"fullscreen",
                dottedOverlay: "none",
                delay: 5000,
                navigation: {
                    keyboardNavigation: "off",
                    keyboard_direction: "horizontal",
                    mouseScrollNavigation: "off",
                    onHoverStop: "off",
                    arrows: {
                        enable: true,
                        style: 'zeus',
                        tmp: '<div class="tp-title-wrap"><div class="tp-arr-imgholder"></div></div>',
                        left: {
                            container: 'slider',
                            h_align: 'left',
                            v_align: 'center',
                            h_offset: 20,
                            v_offset: 35
                        },

                        right: {
                            container: 'slider',
                            h_align: 'right',
                            v_align: 'center',
                            h_offset: 20,
                            v_offset: 35
                        }
                    },
                    touch: {
                        touchenabled: "on",
                        swipe_threshold: 75,
                        swipe_min_touches: 50,
                        swipe_direction: "horizontal",
                        drag_block_vertical: false
                    },
                    bullets: {

                        enable: false,
                        style: 'persephone',
                        tmp: '',
                        direction: 'horizontal',
                        rtl: false,

                        container: 'slider',
                        h_align: 'center',
                        v_align: 'bottom',
                        h_offset: 0,
                        v_offset: 55,
                        space: 7,

                        hide_onleave: false,
                        hide_onmobile: false,
                        hide_under: 0,
                        hide_over: 9999,
                        hide_delay: 200,
                        hide_delay_mobile: 1200
                    }
                },
                responsiveLevels: [1140, 1024, 778, 480],
                visibilityLevels: [1140, 1024, 778, 480],
                gridwidth: [1140, 1024, 778, 480],
                gridheight: [700, 700, 600, 600],
                lazyType: "none",
                parallax: {
                    type: "scroll",
                    origo: "slidercenter",
                    speed: 1000,
                    levels: [5, 10, 15, 20, 25, 30, 35, 40, 45, 46, 47, 48, 49, 50, 100, 55],
                    type: "scroll",
                },
                shadow: 0,
                spinner: "off",
                stopLoop: "off",
                stopAfterLoops: -1,
                stopAtSlide: -1,
                shuffle: "off",
                autoHeight: "off",
                fullScreenAutoWidth: "off",
                fullScreenAlignForce: "off",
                fullScreenOffsetContainer: "",
                fullScreenOffset: "0px",
                disableProgressBar: "on",
                hideThumbsOnMobile: "off",
                hideSliderAtLimit: 0,
                hideCaptionAtLimit: 0,
                hideAllCaptionAtLilmit: 0,
                debugMode: false,
                fallbacks: {
                    simplifyAll: "off",
                    nextSlideOnWindowFocus: "off",
                    disableFocusListener: false,
                }
            });
        }
    }); /*ready*/
</script>

</body>
</html>