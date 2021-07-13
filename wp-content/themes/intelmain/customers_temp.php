<?php
/*
Template Name: customers_temp
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
	
<div class="container-fluid quote-container bg-graphic">
	<div id="content" class="container">
			<div class="row list-block">
					<div class="col-sm-6 quote-block-left">
						<h2 style="color: #fff;"><?php the_field('list_title_left') ?></h2>
					    <?php the_field('list_block_left') ?>
					</div>
					<div class="col-sm-6 quote-block-right">
					   <h2 style="color: #fff;"><?php the_field('list_title_right') ?></h2>
					   <?php the_field('list_block_right') ?>
					</div>
			</div>
	</div>
</div>			

<!-- begin content -->
	
	<!-- begin content -->
	
<div class="container-fluid page-double-row">
	<div id="content" class="container page-simple 2-col-aside" style="padding-bottom: 1rem;">
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
		
		<hr class="wp-block-separator">
		
	</div>
</div>
	
<div class="container-fluid logo-panel-wrap" style="margin-bottom: 2rem; display: none;">
	<div id="content" class="container">
		<div class="row footer-supporters text-center">
			
			<div class="col-12 supporter-title text-center" style="margin-bottom: 1.5rem; "> 
				<h2><?php the_field('customer_title'); ?></h2>
			</div>


		<?php if( have_rows('customer-logos') ): while ( have_rows('customer-logos') ) : the_row(); ?>
		
		        <div class="col-4 col-sm-2 col-xl-2 supporter-logo"> 
					
						<a href="<?php the_sub_field('logo-url'); ?>" class="logo-wrap">

			                <?php
			                $image = get_sub_field('logo_image');

			                ?>

			                <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />

						</a>

				</div>
			
    	<?php endwhile; else: endif; ?>
		

		</div>
		
	</div>
	</div>
	
	<div class="container-fluid logo-panel-wrap" style="margin-bottom: 3rem; display: none;">
	<div id="content" class="container">
		
		<div class="row footer-supporters text-center">
			
			<div class="col-12 supporter-title text-center" style="margin-bottom: 1.5rem;"> 
				<h2><?php the_field('partner_title'); ?></h2>
			</div>


		<?php if( have_rows('partner-logos') ): while ( have_rows('partner-logos') ) : the_row(); ?>
		
		        <div class="col-4 col-sm-2 col-xl-2 supporter-logo"> 
					
						<a href="<?php the_sub_field('logo-url'); ?>" class="logo-wrap">

			                <?php
			                $image = get_sub_field('logo_image');

			                ?>

			                <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />

						</a>

				</div>
			
    	<?php endwhile; else: endif; ?>
		

		</div>
		
	</div>
	</div>
	
</article>
</main>
    
<?php get_footer(); ?>


