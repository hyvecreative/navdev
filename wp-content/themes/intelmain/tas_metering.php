<?php
/*
Template Name: tas_metering_temp
*/
?>
<?php get_header(); ?>

<main>
<article>

<div class="container-fluid first-pic-wrap tas-metering hero-pic-bg">
	 
<div class="row first-pic">
	
	<div class="hm-pic-wrap"><?php the_post_thumbnail( 'full' ); ?></div>

	<div class="hm-feature-text tas-metering-text background-<?php the_field('header_text_background') ?>">
	<h1><?php the_field('banner_head'); ?></h1>
	<h2><?php the_field('banner_sub'); ?></h2>
	<a href="<?php the_field('banner_button_url'); ?>" class="btn btn-hero btn-top-scroll"><?php the_field('banner_button_text'); ?> <i class="fas fa-arrow-down bounce-down" aria-hidden="true"></i></a>
		
	</div>
	
</div>
	
</div> <!-- end container-fluid -->

<!-- begin content -->
	
	<div class="container-fluid">
	<div id="content" class="container">
		<div class="row">
			
				<div class="col-sm-12 col-md-8 offset-md-2" style="margin-top: 2rem; margin-bottom: 2rem;">

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
	
</article>
</main>
    
<?php get_footer(); ?>


