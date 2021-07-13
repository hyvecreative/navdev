<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since Twenty Twenty-One 1.0
 */

?>

<?php get_header(''); ?>

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
		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
		
		<?php the_content(__('(more...)')); ?>
		
		<?php endwhile; else: ?>
		<p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
		<?php endif; ?>

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
			
			<section id="section-fun-facts" class="text-light" data-bgimage="url(<?php bloginfo('template_directory'); ?>/images/bg-5.jpg) fixed top">
                    <div class="container">
						<div class="row">
                            <div class="col-md-3 col-xs-6 wow fadeIn" data-wow-delay=".5s">
                                <div class="de_count" >
                                    <i class="icon_id-2 id-color-2"></i>
                                    <h3>1,100+</h3>
                                    <span class="text-white">Attendees</span>
                                </div>
                            </div>

                            <div class="col-md-3 col-xs-6 wow fadeIn" data-wow-delay=".5s">
                                <div class="de_count">
                                    <i class="icon_easel id-color-2"></i>
                                    <h3>100+</h3>
                                    <span class="text-white">Presentations</span>
                                </div>
                            </div>

                            <div class="col-md-3 col-xs-6 wow fadeIn" data-wow-delay=".5s">
                                <div class="de_count">
                                    <i class="icon_headphones id-color-2"></i>
                                    <h3>70+</h3>
                                    <span class="text-white">Speakers</span>
                                </div>
                            </div>

                            <div class="col-md-3 col-xs-6 wow fadeIn" data-wow-delay=".5s">
                                <div class="de_count">
                                    <i class="icon_globe id-color-2"></i>
                                    <h3>9</h3>
                                    <span class="text-white">Awards</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>




<?php get_footer(''); ?>
