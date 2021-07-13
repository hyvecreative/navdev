<?php
/*
Template Name: about_temp
*/
?>
<?php get_header(); ?>


<article>

<div class="container-fluid">
	 <?php if(has_post_thumbnail()) {
                        $feat_image = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), "full", true);
                    } ?>
	<div class="row feature-image" style="background-image:url(<?php echo (($feat_image[0]))?>); background-size: cover; background-position: center <?php the_field('image_vert_position') ?>;">

		<div class="hero-text text-pop">
			<div class="container">
				<h1><?php the_title(); ?></h1>
			</div>
		</div>

	</div>

</div>
	
<div class="container-fluid quote-container bg-graphic">
	<div id="content" class="container" style="padding-top: 2rem;">
			<div class="row">
				<div class="col-12 quote-block-wrap">
					<div class="col-12 quote-block">
					<?php the_field('full_width_quote_block') ?>
					</div>
				</div>
			</div>
	</div>
</div>			

<!-- begin content -->

<div class="container-fluid page-simple-wrap">
	<div id="content" class="container page-simple 2-col-aside" style="padding-bottom: 0;">
		<div class="row">
			<div class="col-md-8">

			<?php if(get_field('echo_title')):?>
				<h1 class="page-header-title"><?php the_title(); ?></h1> 
			<?php else:?> 
			<?php endif;?> 
				
			<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

			<?php the_content(__('(more...)')); ?>

			<?php endwhile; else: ?>
			<p><?php _e('Sorry, no pages are available. visit: http://strokensw.org.au'); ?></p>
			<?php endif; ?>
			</div>
			
			<div class="col-md-3 offset-md-1">
				<?php the_field('two-col-sb') ?>
			</div>
			
		</div>
	</div>
</div>
	
<div class="container-fluid locations">
	<div id="content" class="container page-simple" style="padding-top: 0;">
		<div class="row">
			<div class="col-sm-12 col-md-8"><h2><?php the_field('location_title') ?></h2>
			<?php the_field('location_intro') ?>
			</div>
			<div class="col-sm-12 col-md-4"></div>
				<div class="col-sm-12 col-md-4"><?php the_field('location_left') ?></div>
				<div class="col-sm-12 col-md-4"><?php the_field('location_right') ?></div>
			</div>
				
			</div>
	</div>
	
</article>
</main>
    
<?php get_footer(); ?>


