<?php
/*
Template Name: event-list_temp
*/
?>
<?php get_header(); ?>

<main>
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

</div> <!-- end container-fluid -->

<!-- begin content -->

<div class="container-fluid page-simple-wrap services_bg">
	<div id="content" class="container page-simple">
		<div class="row">
			<div class="col-sm-12 text-center" style="margin-bottom: 30px;">
			
			<?php if(get_field('echo_title')):?>
				<h1 class="page-header-title"><?php the_title(); ?></h1> 
			<?php else:?> 
			<?php endif;?> 
			
			<div class="row">
			<div class="col-md-4 event-feed">
				<h3>Local events</h3>
			<?php echo do_shortcode('[tribe_events_list category="local-events" limit="3"]'); ?>	
			</div>
            <div class="col-md-4 event-feed">
				<h3>Partner events</h3>
			<?php echo do_shortcode('[tribe_events_list category="partner-events" limit="3"]'); ?>	
			</div>	
			<div class="col-md-4 event-feed">
				<h3>State wide events</h3>
			<?php echo do_shortcode('[tribe_events_list category="state-wide-events" limit="3"]'); ?>	
			</div>		
				
			</div>
			</div>
		</div>
	</div>
</div>
	
</article>
</main>
    
<?php get_footer(); ?>


