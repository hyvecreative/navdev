<?php
/*
Template Name: front-page-indication
*/
?>
<?php get_header(); ?>

<main>
<article>

<div class="container-fluid">
	 <?php if(has_post_thumbnail()) {
                        $feat_image = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), "full", true);
                    } ?>
<div class="row hm-feature-page header-<?php the_field('header_panel_height') ?> full-page" style="background-image:url(<?php echo (($feat_image[0]))?>);">

	<div class="hero-text text-center background-<?php the_field('header_text_background') ?>">
	<h1><?php the_field('banner_head'); ?></h1>
	</div>
	
</div>
	
</div> <!-- end container-fluid -->
	
<div class="container-fluid">
	 <?php if(has_post_thumbnail()) {
                        $feat_image = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), "full", true);
                    } ?>
<div class="row hm-feature-page header-<?php the_field('header_panel_height') ?> full-page" style="background-image:url(<?php echo (($feat_image[0]))?>);">

	<div class="hero-text text-center background-<?php the_field('header_text_background') ?>">
	<h1><?php the_field('banner_head'); ?></h1>
	</div>
	
</div> <!-- end container-fluid -->
	
</div>

<!-- begin content -->
	
	<div class="container-fluid about-intro gradient-block">
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
					
					<a href="#" class="btn btn-rev">About us <i class="fas fa-arrow-right bounce-right" aria-hidden="true"></i></a>
					
				</div>
			
			</div>
		</div>
	</div>

<div class="container-fluid page-simple-wrap research_bg">
	<div id="content" class="container page-simple" style="min-height: 500px">
		<div class="row">
			
			<div class="col-sm-12 col-md-8 offset-md-2 text-center" style="margin-bottom: 30px;">
				
		
			</div>

		</div>
	</div>
</div>
	
</article>
</main>
    
<?php get_footer(); ?>


