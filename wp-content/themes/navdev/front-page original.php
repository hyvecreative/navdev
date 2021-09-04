<?php
/*
Template Name: front_page_temp
*/
?>
<?php get_header(); ?>

<main>
<article>

<div class="container-fluid first-pic">
	 <?php if(has_post_thumbnail()) {
                        $feat_image = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), "full", true);
                    } ?>
<div class="row hm-feature-page full-page" style="background-image:url(<?php echo (($feat_image[0]))?>);">

	<div class="hero-text text-center background-<?php the_field('header_text_background') ?>">
	<h1><?php the_field('banner_head'); ?></h1>
	<h2><?php the_field('banner_sub'); ?></h2>
	<a href="<?php the_field('banner_button_url'); ?>" class="btn btn-hero btn-top-scroll"><?php the_field('banner_button_text'); ?> <i class="fas fa-arrow-down bounce-down" aria-hidden="true"></i></a>
		
	</div>
	
</div>
	
</div> <!-- end container-fluid -->
	
<div class="container-fluid second-pic">

<div class="row hm-feature-page full-page" style="background-image: url('<?php the_field('hero_two_image') ?>');">

	<div class="hero-text text-center background-<?php the_field('header_text_background') ?>">
	<h1><?php the_field('hero_two_main_text'); ?></h1>
	<a href="<?php the_field('hero_two_url'); ?>" class="btn btn-hero btn-bottom-scroll"><?php the_field('hero_two_button'); ?> <i class="fas fa-arrow-down bounce-down" aria-hidden="true" style="font-size: .9rem;"></i></a>
	</div>
	
</div> <!-- end container-fluid -->
	
</div>

<!-- begin content -->
	
	<div id="Introduction" class="container-fluid about-intro gradient-block">
	<div id="content" class="container">
		<div class="row">
			
				<div class="col-sm-12 col-md-8 offset-md-2 text-center" style="margin-bottom: 30px;">

				<?php if(get_field('echo_title')):?>
					<h1 class="page-header-title"><?php the_title(); ?></h1> 
				<?php else:?> 
				<?php endif;?> 

				<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

				<?php the_content(__('(more...)')); ?>

				<?php endwhile; else: ?>
				<p><?php _e('Sorry, no pages are available. visit: http://coalimpactindex.com.au'); ?></p>
				<?php endif; ?>
					
					<a href="/wptest/about/" class="btn btn-rev ">About us <i class="fas fa-arrow-right bounce-right" aria-hidden="true"></i></a>
					
				</div>
			
			</div>
		</div>
	</div>

<div id="Services" class="container-fluid services_bg">
	<div class="container page-simple" style="min-height: 500px">
		<div class="row">
			
			<div class="col-sm-12 col-md-8 offset-md-2 " style="margin-bottom: 30px;">
				<h2 class="text-center">Metering Services</h2>
				<p> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras sed orci rhoncus, luctus ante vel, maximus augue. Aenean eget feugiat leo. Phasellus in faucibus massa. In sagittis pharetra porta. Integer vitae lobortis felis, eget tincidunt tortor. Donec pellentesque quam quis lectus posuere, at feugiat felis laoreet. Aliquam vehicula elit quis nulla vulputate, eget malesuada lorem gravida. Praesent tincidunt, turpis sit amet rhoncus vulputate, lorem mauris pulvinar est, vel lobortis mi tellus at arcu. <a href="#">More <i class="fas fa-arrow-right" aria-hidden="true"></i></a></p>
			</div>
			
			<div class="col-sm-12 col-md-8 offset-md-2" style="margin-bottom: 30px;">
				
				<div class="row services-items services-items_top">
					<div class="col-sm-6 service-item-wrap">
						<a href="/metering-services/"><img src="<?php bloginfo('template_directory'); ?>/images/residential.svg" alt="Residentail buildings icon" /></a>
						<a href="/metering-services/"><h3>Residential</h3></a>
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras sed orci rhoncus, luctus ante vel, maximus augue. Aenean eget feugiat </p>
						<a href="/metering-services/">Find out more <i class="fas fa-arrow-right" aria-hidden="true"></i></a>
					</div>
					<div class="col-sm-6 service-item-wrap">
						<a href="/metering-services/"><img src="<?php bloginfo('template_directory'); ?>/images/commercial.svg" alt="commercial buildings icon" /></a>
						<a href="/metering-services/"><h3>Commercial/industrial</h3></a>
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras sed orci rhoncus, luctus ante vel, maximus augue. Aenean eget feugiat </p>
						<a href="/metering-services/">Find out more <i class="fas fa-arrow-right" aria-hidden="true"></i></a>
					</div>

				</div>
				
				<div class="row services-items services-items_bottom">
					<div class="col-sm-6 service-item-wrap">
						<a href="/metering-services/"><img src="<?php bloginfo('template_directory'); ?>/images/embedded.svg" alt="Embedded networks icon" /></a>
						<a href="/metering-services/"><h3>Embedded Networks</h3></a>
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras sed orci rhoncus, luctus ante vel, maximus augue. Aenean eget feugiat </p>
						<a href="/metering-services/">Find out more <i class="fas fa-arrow-right" aria-hidden="true"></i></a>
					</div>

					<div class="col-sm-6 service-item-wrap">
						<a href="/metering-services/"><img src="<?php bloginfo('template_directory'); ?>/images/gas-water.svg" alt="Gas and water icon" /></a>
						<a href="/metering-services/"><h3>Gas/Water</h3></a>
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras sed orci rhoncus, luctus ante vel, maximus augue. Aenean eget feugiat </p>
						<a href="/metering-services/">Find out more <i class="fas fa-arrow-right" aria-hidden="true"></i></a>
					</div>

				</div>
				
		
			</div>

		</div>
	</div>
</div>
	
<div class="container-fluid second-pic">

<div class="row hm-feature-page full-page" style="background-image: url('<?php the_field('hero_three_image') ?>'); background-position: center center;">

	<div class="hero-text text-center background-<?php the_field('header_text_background') ?>">
	<h1><?php the_field('hero_three_main_text'); ?></h1>
	<a href="<?php the_field('hero_three_url'); ?>" class="btn btn-hero btn-bottom-scroll"><?php the_field('hero_three_button'); ?> <i class="fas fa-arrow-down bounce-down" aria-hidden="true" style="font-size: .9rem;"></i></a>
	</div>
	
</div> <!-- end container-fluid -->
	
	
<div id="News" class="container-fluid">
	<div class="container page-simple" style="min-height: 500px">
		<div class="row">
			
			<div class="col-sm-12" style="margin-bottom: 2rem;">
				
					<h2 class="text-center" style="margin-bottom: 2.5rem;">Latest News</h2>
				
					<?php get_template_part( 'partials/content', 'news-feed' ); ?>
				
				</div>

		</div>
	</div>
</div>
	
</article>
</main>
    
<?php get_footer(); ?>


