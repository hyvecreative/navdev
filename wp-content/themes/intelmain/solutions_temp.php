<?php
/*
Template Name: solutions_temp
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
				<div class="row">
				<div class="col-sm-12 col-md-8 offset-md-2">
				<h1><?php the_title(); ?></h1>
					</div>
				</div>
			</div>
		</div>

	</div>

</div>		

<!-- begin content -->

<div class="container-fluid page-simple-wrap solutions-wrap">
	<div id="content" class="container page-simple 2-col-aside" style="padding-top: 4rem; padding-bottom: 2rem;">
		<div class="row">
			<div class="col-sm-12 col-md-8 offset-md-2">

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
			
		</div>
	</div>
</div>

	
</article>
</main>
    
<?php get_footer(); ?>


