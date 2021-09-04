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
	
</div>

<!-- begin content -->
	
	
	<div id="quick-links" class="container-fluid quick-links">
	<div class="container">
		<div class="row">
			
			<div class="col-lg-4" style="margin-bottom: 2rem; display: flex;">
				
				<div class="quick-link-wrap">
				
					<img src="<?php bloginfo('template_directory'); ?>/images/what-we-do.jpg" alt="What we do" />
					<h2 class"hm-box-sub">What we do</h2>
					<p style="margin-bottom: .5rem">We are an independent metering services specialist, offering Metering Coordinator, Metering Provider and Metering Data Provider services.</p>
					<p class="ql-btn text-left"  style="margin-top: 0"> <a class="btn hm-more" href="/metering-services/">More <i class="fas fa-arrow-right" aria-hidden="true"></i></a></p>				
				</div>
				
			</div>
			
			<div class="col-lg-4" style="margin-bottom: 30px; display: flex;">
				<div class="quick-link-wrap">
				
					<img src="<?php bloginfo('template_directory'); ?>/images/who-we-serve.jpg" alt="What we do" />
					<h2 class"hm-box-sub">Who we serve</h2>
					<p  style="margin-bottom: .5rem">We provide smart metering and data services to the energy and utilities sector, embedded networks and connecting customers.</p>
					<p class="ql-btn text-left" style="margin-top: 0"> <a class="btn hm-more" href="/our-customers/">More <i class="fas fa-arrow-right" aria-hidden="true"></i></a></p>
				
				</div>
				
			</div>
			<div class="col-lg-4" style="margin-bottom: 30px; display: flex;">
				<div class="quick-link-wrap">
				
					<img src="<?php bloginfo('template_directory'); ?>/images/our-solutions.jpg" alt="What we do" />
					<h2 class"hm-box-sub">Our solutions</h2>
					<p  style="margin-bottom: .5rem">Our metering and data solutions help households actively take part in the shift to renewable energy.</p>
					<p class="ql-btn text-left"  style="margin-top: 0"> <a class="btn hm-more" href="/our-solutions/">More <i class="fas fa-arrow-right" aria-hidden="true"></i></a></p>				
				</div>
				
			</div>
			
		</div>
	</div>
</div>	
	
<div id="Introduction" class="container-fluid about-intro">
	<div id="content" class="container">
		<div class="row">
			
				<div class="col-sm-12 col-md-8 offset-md-2 text-center">

				<?php if(get_field('echo_title')):?>
					<h1 class="page-header-title"><?php the_title(); ?></h1> 
				<?php else:?> 
				<?php endif;?> 

				<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

				<?php the_content(__('(more...)')); ?>

				<?php endwhile; else: ?>
				<p><?php _e('Sorry, no pages are available. visit: http://coalimpactindex.com.au'); ?></p>
				<?php endif; ?>
					
					<a href="/wptest/about/" class="btn btn-hm-more ">About us <i class="fas fa-arrow-right bounce-right" aria-hidden="true"></i></a>
					
				</div>
			
			</div>
		</div>
</div>
	
	
<div id="News" class="container-fluid hm-news-feed-wrap">
	<div class="container" style="min-height: 500px">
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


