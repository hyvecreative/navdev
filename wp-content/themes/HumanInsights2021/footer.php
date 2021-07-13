<?php
/**
 * The template for displaying the footer
 *
 * @package WordPress
 * @subpackage HumanInsights2021
 * @since HumanInsights2021
 */

?>
            <!-- footer begin -->
        <footer class="style-2">
            <div class="container">
                <div class="row align-items-middle">
                    <div class="col-md-3">
                        <img style="width:200px;height:auto;" src="<?php bloginfo('template_directory'); ?>/images/logo.png" class="logo-small" alt=""><br>
                    </div>

                    <div class="col-md-4">
                        &copy; Copyright 2021 - <span class="id-color">The Research Society</span>
                    </div>
					
	                    <div class="col-md-5 bannerad">
<?php echo adrotate_ad(3); ?>
					</div>
					
                    <div class="col-md-6 text-right">
                        <div class="social-icons">
                            <a href="https://www.facebook.com/ResearchOz/"><i class="fa fa-facebook fa-lg"></i></a>
                            <a href="https://twitter.com/researchoz"><i class="fa fa-twitter fa-lg"></i></a>
                            <a href="https://www.linkedin.com/company/researchoz"><i class="fa fa-linkedin fa-lg"></i></a>
                        </div>
                    </div>
                </div>
            </div>


            <a href="#" id="back-to-top" class="custom-1"></a>
        </footer>
        <!-- footer close -->
        </div>
    </div>

    
    <div id="de-extra-wrap" class="de_light">
        <span id="b-menu-close">
            <span></span>
            <span></span>
        </span>
        <div class="de-extra-content">
            <h3>Information</h3>
            <p>
                The Research Society’s National Conference has proven year after year that it is the not to be missed event for the Australian research; insights, CX, UX & data analytics industry.
            </p>

            <div class="spacer10"></div>
            
            <div class="p-4 border">
                <div class="text-center">
                    <h1>1,000+</h1>
                   <p>Attendees last year!</p>
                    <a href="#section-ticket" class="btn-custom btn-fullwidth text-white scroll-to">Get Your Ticket</a>
                </div>
            </div>

            <div class="spacer-single"></div>

            <h3>Where &amp; When?</h3>
            <div class="h6 padding10 pt0 pb0"><i class="i_h3 fa fa-calendar-check-o id-color"></i>3 - 7 May 2021</div>
            <div class="h6 padding10 pt0 pb0"><i class="i_h3 fa fa-map-marker id-color"></i>Online Virtual Conference</div>
            <div class="h6 padding10 pt0 pb0"><i class="i_h3 fa fa-phone id-color"></i>+61 2 9566 3100</div>
            <div class="h6 padding10 pt0 pb0"><i class="i_h3 fa fa-envelope-o id-color"></i><a href="mailto:events@researchsociety.com.au">Email us for more info</a></div>
        	                    <div class="bannerad" style="width:100%">
<?php echo adrotate_ad(4); ?>
					</div>
</div>
    </div>
    <div id="de-overlay"></div>

    <!-- Javascript Files
    ================================================== -->
    <script src="<?php bloginfo('template_directory'); ?>/js/jquery.min.js"></script>
    <script src="<?php bloginfo('template_directory'); ?>/js/jpreLoader.js"></script>
    <script src="<?php bloginfo('template_directory'); ?>/js/bootstrap.min.js"></script>
    <script src="<?php bloginfo('template_directory'); ?>/js/jquery.isotope.min.js"></script>
    <script src="<?php bloginfo('template_directory'); ?>/js/easing.js"></script>
    <script src="<?php bloginfo('template_directory'); ?>/js/jquery.flexslider-min.js"></script>
    <script src="<?php bloginfo('template_directory'); ?>/js/jquery.scrollto.js"></script>
    <script src="<?php bloginfo('template_directory'); ?>/js/owl.carousel.js"></script>
    <script src="<?php bloginfo('template_directory'); ?>/js/jquery.countTo.js"></script>
    <script src="<?php bloginfo('template_directory'); ?>/js/video.resize.js"></script>
    <script src="<?php bloginfo('template_directory'); ?>/js/validation.js"></script>
    <script src="<?php bloginfo('template_directory'); ?>/js/wow.min.js"></script>
    <script src="<?php bloginfo('template_directory'); ?>/js/jquery.magnific-popup.min.js"></script>
    <script src="<?php bloginfo('template_directory'); ?>/js/jquery.stellar.min.js"></script>
	<script src="<?php bloginfo('template_directory'); ?>/js/enquire.min.js"></script>	
    <script src="<?php bloginfo('template_directory'); ?>/js/designesia.js"></script>	
	<script src="<?php bloginfo('template_directory'); ?>/js/jquery.event.move.js"></script>
	<script src="<?php bloginfo('template_directory'); ?>/js/jquery.plugin.js"></script>
    <script src="<?php bloginfo('template_directory'); ?>/js/jquery.countdown.js"></script>
    <script src="<?php bloginfo('template_directory'); ?>/js/countdown-custom.js"></script>
    <script src="<?php bloginfo('template_directory'); ?>/js/jquery.twentytwenty.js"></script>	

    <!-- RS5.0 Core JS Files -->
    <script src="<?php bloginfo('template_directory'); ?>/revolution/js/jquery.themepunch.tools.min.js?rev=5.0"></script>
    <script src="<?php bloginfo('template_directory'); ?>/revolution/js/jquery.themepunch.revolution.min.js?rev=5.0"></script>

    <!-- RS5.0 Extensions Files -->
    <script src="<?php bloginfo('template_directory'); ?>/revolution/js/extensions/revolution.extension.video.min.js"></script>
    <script src="<?php bloginfo('template_directory'); ?>/revolution/js/extensions/revolution.extension.slideanims.min.js"></script>
    <script src="<?php bloginfo('template_directory'); ?>/revolution/js/extensions/revolution.extension.layeranimation.min.js"></script>
    <script src="<?php bloginfo('template_directory'); ?>/revolution/js/extensions/revolution.extension.navigation.min.js"></script>
    <script src="<?php bloginfo('template_directory'); ?>/revolution/js/extensions/revolution.extension.actions.min.js"></script>
    <script src="<?php bloginfo('template_directory'); ?>/revolution/js/extensions/revolution.extension.kenburn.min.js"></script>
    <script src="<?php bloginfo('template_directory'); ?>/revolution/js/extensions/revolution.extension.migration.min.js"></script>
    <script src="<?php bloginfo('template_directory'); ?>/revolution/js/extensions/revolution.extension.parallax.min.js"></script>

    <script>
        jQuery(document).ready(function() {
            // revolution slider
            jQuery("#slider-revolution").revolution({
                sliderType: "standard",
                sliderLayout: "fullwidth",
                delay: 5000,
                navigation: {
                    arrows: {
                        enable: true
                    },
                    bullets: {
                        enable: false,
                        style: 'hermes'
                    },

                },
                parallax: {
                    type: "mouse",
                    origo: "slidercenter",
                    speed: 2000,
                    levels: [2, 3, 4, 5, 6, 7, 12, 16, 10, 50],
                },
                spinner: "off",
                gridwidth: 1140,
                gridheight: 700,
                disableProgressBar: "on"
            });
        });
    </script>
	
	<script>
    $(window).on("load", function(){
      $(".twentytwenty-container[data-orientation!='vertical']").twentytwenty({default_offset_pct: 0.7});
      $(".twentytwenty-container[data-orientation='vertical']").twentytwenty({default_offset_pct: 0.3, orientation: 'vertical'});
    });
    </script>


</body>

</html>