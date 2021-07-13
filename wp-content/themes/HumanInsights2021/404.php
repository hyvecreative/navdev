<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since Twenty Twenty-One 1.0
 */

get_header(''); ?>

        <!-- content begin -->
        <div id="content" class="no-bottom no-top">
				
				<!-- section begin -->
            <section id="section-page">
				<div class="wm wm-border dark wow fadeInDown ">conference</div>
                <div class="container">
                    <div class="row">
                        <div class="col-lg-10 offset-lg-1 text-center wow fadeInUp">
                            <h1 style="font-size:4em;"><?php the_title( ); ?></h1>
                            <div class="spacer-single"></div>
                        </div>
                        <div class="col-lg-10 offset-lg-1 wow fadeInUp">
<!-- start content -->
			<p>It looks like nothing was found at this location. <a href="/">Visit Home Page</a></p>

<!-- end content -->
                            <div class="separator"><span><i class="fa fa-square"></i></span></div>
                            <div class="spacer-single"></div>
                        </div>						

                    </div>
                </div>
            </section>
            <!-- section close -->
			

									
			<!-- section begin -->
            <section id="call-to-action" class="gradient-to-right text-light call-to-action" aria-label="cta">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-8 col-md-7">
                            <h3 class="size-2 no-margin">Sponsorship Options Still Available!</h3>
                            <p>It's not too late for organisations to get involved in sponsoring this event <br>
- Call Leslea Clements on +61 2 9566 3100 to discuss your ideas and options.</p>
                        </div>

                        <div class="col-lg-4 col-md-5 text-right">
                            <a href="mailto:events@researchsociety.com.au" class="btn-custom text-white scroll-to">Contact Us Now</a>
                        </div>
                    </div>
                </div>
            </section>
            <!-- logo carousel section close -->
			



<?php get_footer(''); ?>

	