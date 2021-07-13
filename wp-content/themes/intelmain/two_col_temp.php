<?php
/*
Template Name: two_col_temp
*/
?>
<?php get_header(); ?>


<article>

<div class="container-fluid">
	 <?php if(has_post_thumbnail()) {
                        $feat_image = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), "full", true);
                    } ?>
<div class="row hm-feature-page header-<?php the_field('header_panel_height') ?>" style="background-image:url(<?php echo (($feat_image[0]))?>); background-size: cover; background-position: top;">
<?php if(get_field('echo_title')):?>

<?php else:?> 
	<div class="hero-text text-center background-<?php the_field('header_text_background') ?>">
	<h1><?php the_title(); ?></h1>
</div>
<?php endif;?>
</div>

</div>

<!-- begin content -->

<div class="container-fluid page-simple-wrap">
	<div id="content" class="container page-simple 2-col-aside">
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
	
</article>
</main>
    
<?php get_footer(); ?>


