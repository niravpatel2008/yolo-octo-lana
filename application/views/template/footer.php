<!-- Footer Section -->
    <footer id="footer-section">
        <div class="footer-section parallax-style">
            <div class="pattern">
                <div class="container">
                    <div class="footer-social-btn">
                        <a href="#" class="twitter-btn wow rollIn center animated" data-wow-delay=".1s"><i class="fa fa-twitter"></i></a>
                        <a href="#" class="facebook-btn wow rollIn center animated" data-wow-delay=".2s"><i class="fa fa-facebook"></i></a>
                        <a href="#" class="dribbble-btn wow rollIn center animated" data-wow-delay=".3s"><i class="fa fa-dribbble"></i></a>
                        <a href="#" class="linkedin-btn wow rollIn center animated" data-wow-delay=".4s"><i class="fa fa-linkedin"></i></a>
                        <a href="#" class="pinterest-btn wow rollIn center animated" data-wow-delay=".5s"><i class="fa fa-pinterest"></i></a>
                        <a href="#" class="google-plus-btn wow rollIn center animated" data-wow-delay=".6s"><i class="fa fa-google-plus"></i></a>
                        <a href="#" class="youtube-btn wow rollIn center animated" data-wow-delay=".7s"><i class="fa fa-youtube"></i></a>
                        <a href="#" class="rss-btn wow rollIn center animated" data-wow-delay=".8s"><i class="fa fa-rss"></i></a>
                    </div><!-- /.footer-social-btn -->
                </div><!-- /.container -->
            </div><!-- /.pattern -->
        </div><!-- /.footer-section -->

        <div class="copyrights">
            <div class="container">
                &copy; <a href="#">TopClass</a>  2014 - Developed by <a href="#">JWTheme</a>
            </div><!-- /.container -->
        </div><!-- /.copyrights -->
    </footer><!-- /#footer-section -->
    <!-- Footer Section End -->


    <div id="scroll-to-top">
        <span>
            <i class="fa fa-chevron-up"></i>
        </span>
    </div>


    <!-- Include modernizr-2.8.0.min.js -->
    <script src="<?=public_path()?>js/modernizr-2.8.0.min.js"></script>

    <!-- Include jquery.min.js plugin -->
    <script src="<?=public_path()?>js/jquery-2.1.0.min.js"></script>

    <!-- Include JavaScript Plugins -->
    <script src="<?=public_path()?>js/plugins.js"></script>

    <!-- Include JavaScript Functions -->
    <script src="<?=public_path()?>js/functions.js"></script>

    <!-- Include jquery.parallax.js Plugins -->
    <script src="<?=public_path()?>js/jquery.parallax.js"></script>

    <!-- Include wow.js Plugins -->
    <script src="<?=public_path()?>js/wow.min.js"></script>

    <script src="<?=public_path()?>js/jquery.content_slider.min.js"></script>
    <script src="<?=public_path()?>js/jquery.mousewheel.js"></script>


    <script type="text/javascript">

        /*----------- wow animation with support of wow.js and animation.css ----------------*/
        var wow = new WOW(
          {
            boxClass:     'wow',      // animated element css class (default is wow)
            animateClass: 'animated', // animation css class (default is animated)
            offset:       0,          // distance to the element when triggering the animation (default is 0)
            mobile:       false       // trigger animations on mobile devices (true is default)
          }
        );
        wow.init();

        /*----------- Google Map - with support of gmaps.js ----------------*/

        function isMobile() {
            return ('ontouchstart' in document.documentElement);
        }


        jQuery(document).ready(function($) {
            "use strict";

            /*---------------------- Current Menu Item -------------------------*/
            $('#main-menu #headernavigation').onePageNav({
                currentClass: 'active',
                changeHash: false,
                scrollSpeed: 750,
                scrollThreshold: 0.5,
                scrollOffset: 160,
                filter: ':not(.sub-menu a, .not-in-home)',
                easing: 'swing'
            });


        });
        // document ready function End

    </script>



	</body>
</html>
