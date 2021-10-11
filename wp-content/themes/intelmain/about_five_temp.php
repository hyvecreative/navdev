<?php
/*
Template Name: about_five_temp
*/
?>
<?php get_header(); ?>


<article>

<div class="container-fluid hero-pic-bg">
	 <?php if(has_post_thumbnail()) {
                        $feat_image = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), "full", true);
                    } ?>
<div class="row feature-image" style="background-image:url(<?php echo (($feat_image[0]))?>); background-size: cover; background-position: center <?php the_field('image_vert_position') ?>;">
<?php if(get_field('echo_title')):?>

<?php else:?> 
		<div class="hero-text text-pop">
		<div class="container">
			<h1><?php the_title(); ?></h1>
		</div>
</div>
<?php endif;?>
</div>

</div>		

<!-- begin content -->
	
<div class="container-fluid page-double-row">
	<div id="content" class="container page-simple 2-col-aside" style="padding-bottom: 1rem; padding-top: 4rem;">
		<div class="row">
			<div class="col-lg-6">
				<?php the_field('row_1_left') ?>
			</div>
			
			<div class="col-lg-6">
				<?php the_field('row_1_right') ?>
			</div>
			
		</div>
	</div>
</div>
	
<div class="container-fluid page-double-row services_bg">
	<div id="content" class="container page-simple 2-col-aside">
		<div class="row">
			<div class="col-lg-6">
				<?php the_field('row_2_left', false, false) ?>
			</div>
			
			<div class="col-lg-6">
				<?php the_field('row_2_right') ?>
			</div>
			
		</div>
	</div>
</div>
	
<div class="container-fluid page-double-row">
	<div id="content" class="container page-simple 2-col-aside" style="padding-bottom: 1rem;">
		<div class="row">
			<div class="col-lg-6">
				<?php the_field('row_3_left') ?>
			</div>
			
			<div class="col-lg-6">
				<?php the_field('row_3_right') ?>
			</div>
			
		</div>
	</div>
</div>
	
<div class="container-fluid page-double-row services_bg">
	<div id="content" class="container page-simple 2-col-aside" style="padding-bottom: 1rem;">
		<div class="row">
			<div class="col-lg-6">
				<?php the_field('row_4_left') ?>
			</div>
			
			<div class="col-lg-6">
				<?php the_field('row_4_right') ?>
			</div>
			
		</div>
	</div>
</div>
	
	
<div class="container-fluid location-block">
	<div id="content" class="container page-simple" style="padding-top: 0;">
		<div class="row">
			<div class="col-sm-12 col-md-8 loc-intro"><h2><?php the_field('location_title') ?></h2>
			<?php the_field('location_intro') ?>
			</div>
			<div class="col-sm-12 col-md-4 loc-addresse-wrap"></div>
				<div class="col-sm-12 col-md-4 loc-addresses"><?php the_field('location_left') ?></div>
				<div class="col-sm-12 col-md-4 loc-addresses"><?php the_field('location_right') ?></div>
			</div>
				
			</div>
	</div>
	
</article>
</main>
    
<?php get_footer(); ?>


