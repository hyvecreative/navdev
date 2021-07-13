<?php
/*
Template Name: front_page_temp
*/
?>
<?php get_header(); ?>

<main>
<article>

<div class="container-fluid first-pic-wrap">
	 
<div class="row first-pic">
	
	<div class="hm-pic-wrap"><?php the_post_thumbnail( 'full' ); ?></div>

	<div class="hm-feature-text background-<?php the_field('header_text_background') ?>">
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

<div id="Services" class="container-fluid">
	<div class="container page-simple" style="min-height: 500px">
		<div class="row">
			
			<div class="col-sm-12 col-md-8 offset-md-2 " style="margin-bottom: 30px;">
				<h2 class="text-center">Metering Services</h2>
				<p> We are an independent metering services provider, offering Metering Coordinator, Metering Provider and Metering Data Provider services to more than 30 electricity retailers, big and small.</p>
				<p>We also service electricity distributors, embedded networks, C&I and SME businesses and we partner with other energy and technology companies to maximise value for our customers.
 <a href="/wptest/metering-services/">More <i class="fas fa-arrow-right" aria-hidden="true"></i></a></p>
			</div>
			
			<div class="col-sm-12 col-md-8 offset-md-2" style="margin-bottom: 30px;">
				
				<div class="row services-items services-items_top">
					<div class="col-sm-6 service-item-wrap">
						<a href="/wptest/metering-services/"><img src="<?php bloginfo('template_directory'); ?>/images/residential.svg" alt="Residentail buildings icon" /></a>
						<a href="/wptest/metering-services/"><h3>Residential</h3></a>
						<p>Installation and management of smart meters for homes including load control, solar metering, disconnection and reconnection services on behalf of our retail customers.</p>
						<a href="/wptest/metering-services/">Find out more <i class="fas fa-arrow-right" aria-hidden="true"></i></a>
					</div>
					<div class="col-sm-6 service-item-wrap">
						<a href="/wptest/metering-services/"><img src="<?php bloginfo('template_directory'); ?>/images/commercial.svg" alt="commercial buildings icon" /></a>
						<a href="/wptest/metering-services/"><h3>Commercial and Industrial</h3></a>
						<p>Smart meter installation, demand response, network tariff optimisation, customer portal, account management and NEM-12 data delivery.</p>
						<a href="/wptest/metering-services/">Find out more <i class="fas fa-arrow-right" aria-hidden="true"></i></a>
					</div>

				</div>
				
				<div class="row services-items services-items_middle">
					<div class="col-sm-6 service-item-wrap">
						<a href="/wptest/metering-services/"><img src="<?php bloginfo('template_directory'); ?>/images/embedded.svg" alt="Embedded networks icon" /></a>
						<a href="/wptest/metering-services/"><h3>Embedded Networks</h3></a>
						<p>Installation of new or replacement electricity and water meters, remote access communications, reprogramming of existing meters and fast and accurate billing data.</p>
						<a href="/wptest/metering-services/">Find out more <i class="fas fa-arrow-right" aria-hidden="true"></i></a>
					</div>

					<div class="col-sm-6 service-item-wrap">
						<a href="/wptest/metering-services/"><img src="<?php bloginfo('template_directory'); ?>/images/data.svg" alt="Gas and water icon" /></a>
						<a href="/wptest/metering-services/"><h3>Data Insights</h3></a>
						<p>Voltage monitoring and fully encrypted safety and revenue alerts, outage and restoration alarms and status pings.</p>
						<a href="/wptest/metering-services/">Find out more <i class="fas fa-arrow-right" aria-hidden="true"></i></a>
					</div>

				</div>
				
				<div class="row services-items services-items_bottom">
					<div class="col-sm-6 service-item-wrap">
						<a href="/wptest/metering-services/"><img src="<?php bloginfo('template_directory'); ?>/images/connections.svg" alt="Embedded networks icon" /></a>
						<a href="/wptest/metering-services/"><h3>New connections</h3></a>
						<p>Online portal providing a quick, easy and rewarding end-to-end service for Accredited Service Provider to connect new homes with advanced metering services.</p>
						<a href="/wptest/metering-services/">Find out more <i class="fas fa-arrow-right" aria-hidden="true"></i></a>
					</div>

					<div class="col-sm-6 service-item-wrap">
						<a href="/wptest/metering-services/"><img src="<?php bloginfo('template_directory'); ?>/images/gas-water.svg" alt="Gas and water icon" /></a>
						<a href="/wptest/metering-services/"><h3>Gas/Water</h3></a>
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras sed orci rhoncus, luctus ante vel, maximus augue. Aenean eget feugiat </p>
						<a href="/wptest/metering-services/">Find out more <i class="fas fa-arrow-right" aria-hidden="true"></i></a>
					</div>

				</div>
		
			</div>

		</div>
	</div>
</div>
	
<div class="container-fluid second-pic">

<div class="row hm-feature-page full-page" style="background-image: url('<?php the_field('hero_three_image') ?>'); background-position: right center;">

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


