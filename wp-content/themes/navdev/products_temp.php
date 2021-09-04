<?php
/*
Template Name: procucts_temp
*/
?>
<?php get_header(); ?>


<article>

<div class="container-fluid hero-pic-bg">
	 <?php if(has_post_thumbnail()) {
                        $feat_image = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), "full", true);
                    } ?>
<div class="row feature-image" style="background-image:url(<?php echo (($feat_image[0]))?>); background-size: cover; background-position: left center;">
<?php if(get_field('echo_title')):?>

<?php else:?> 
	<div class="hero-text text-pop">
		<div class="container">
			<h1>Metering Services</h1>
		</div>
</div>
<?php endif;?>
</div>

</div>
		

<!-- begin content -->
	
<div class="container-fluid procucts-wrap">
	<div id="content" class="container page-simple" style="padding-top: 5rem;">
		<div class="row">
			<div class="col-sm-12 col-md-8">
				
				<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

				<?php the_content(__('(more...)')); ?>

				<?php endwhile; else: ?>
				<p style="margin-bottom: 0;">><?php _e('Sorry, no pages are available.'); ?></p>
				<?php endif; ?>
				
			</div>
		</div>
	
		<div id="residential" class="row" style="margin-bottom: 1rem;">
			
			<div class="col-md-12 spacer-block" style="height: 30px; width: 100%;"></div>
	
			<div class="col-md-12 product-pic" style="background: url('<?php the_field('product_bg_image_1') ?>') center <?php the_field('image_vertical_position_1') ?>; background-size: cover;">
				<div class="product-title-cover"></div>
				<div class="product-title-wrap">
					<h2><?php the_field('product_title_1') ?> <span> <img class=" " src="<?php the_field('product_icon_1'); ?>"/></span></h2>
				</div>
			</div>
			
			<div class="col-md-12 product-content">
				<div class="row product-content-wrap">
				<div class="col-md-8 product-left"><?php the_field('product_left_1') ?></div>
				<div class="col-md-4 product-right"><?php the_field('product_right_1') ?></div>
				</div>
			</div>
				
		</div>
		
		<div id="commercial-and-industrial" class="row" style="margin-bottom: 1rem;">
			
			<div class="col-md-12 spacer-block" style="height: 30px; width: 100%;"></div>
	
			<div class="col-md-12 product-pic" style="background: url('<?php the_field('product_bg_image_2') ?>') center <?php the_field('image_vertical_position_2') ?>; background-size: cover;">
				<div class="product-title-cover cover-blue"></div>
				<div class="product-title-wrap">
					<h2><?php the_field('product_title_2') ?> <span> <img class=" " src="<?php the_field('product_icon_2'); ?>"/></span></h2>
				</div>
			</div>
			
			<div class="col-md-12 product-content">
				<div class="row product-content-wrap">
				<div class="col-md-8 product-left"><?php the_field('product_left_2') ?></div>
				<div class="col-md-4 product-right"><?php the_field('product_right_2') ?></div>
				</div>
			</div>
				
		</div>
		
		<div id="embedded-metering" class="row" style="margin-bottom: 1rem;">
			
			<div class="col-md-12 spacer-block" style="height: 30px; width: 100%;"></div>
	
			<div class="col-md-12 product-pic" style="background: url('<?php the_field('product_bg_image_3') ?>') center <?php the_field('image_vertical_position_3') ?>; background-size: cover;">
				<div class="product-title-cover cover-blue"></div>
				<div class="product-title-wrap">
					<h2><?php the_field('product_title_3') ?> <span> <img class=" " src="<?php the_field('product_icon_3'); ?>"/></span></h2>
				</div>
			</div>
			
			<div class="col-md-12 product-content">
				<div class="row product-content-wrap">
				<div class="col-md-8 product-left"><?php the_field('product_left_3') ?></div>
				<div class="col-md-4 product-right"><?php the_field('product_right_3') ?></div>
				</div>
			</div>
				
		</div>
		
		<div id="data-insights" class="row" style="margin-bottom: 1rem;">
			
			<div class="col-md-12 spacer-block" style="height: 30px; width: 100%;"></div>
	
			<div class="col-md-12 product-pic" style="background: url('<?php the_field('product_bg_image_4') ?>') center <?php the_field('image_vertical_position_4') ?>; background-size: cover;">
				<div class="product-title-cover cover-blue"></div>
				<div class="product-title-wrap">
					<h2><?php the_field('product_title_4') ?> <span> <img class=" " src="<?php the_field('product_icon_4'); ?>"/></span></h2>
				</div>
			</div>
			
			<div class="col-md-12 product-content">
				<div class="row product-content-wrap">
				<div class="col-md-8 product-left"><?php the_field('product_left_4') ?></div>
				<div class="col-md-4 product-right"><?php the_field('product_right_4') ?></div>
				</div>
			</div>
				
		</div>
		
		
		<div id="new-connections" class="row" style="margin-bottom: 1rem;">
			
			<div class="col-md-12 spacer-block" style="height: 30px; width: 100%;"></div>
	
			<div class="col-md-12 product-pic" style="background: url('<?php the_field('product_bg_image_5') ?>') center <?php the_field('image_vertical_position_5') ?>; background-size: cover;">
				<div class="product-title-cover cover-blue"></div>
				<div class="product-title-wrap">
					<h2><?php the_field('product_title_5') ?> <span> <img class=" " src="<?php the_field('product_icon_5'); ?>"/></span></h2>
				</div>
			</div>
			
			<div class="col-md-12 product-content">
				<div class="row product-content-wrap">
				<div class="col-md-8 product-left"><?php the_field('product_left_5') ?></div>
				<div class="col-md-4 product-right"><?php the_field('product_right_5') ?></div>
				</div>
			</div>
				
		</div>
		
		<div id="gas-and-water-metering" class="row" style="margin-bottom: 1rem;">
			
			<div class="col-md-12 spacer-block" style="height: 30px; width: 100%;"></div>
	
			<div class="col-md-12 product-pic" style="background: url('<?php the_field('product_bg_image_6') ?>') center <?php the_field('image_vertical_position_6') ?>; background-size: cover;">
				<div class="product-title-cover cover-blue"></div>
				<div class="product-title-wrap">
					<h2><?php the_field('product_title_6') ?> <span> <img class=" " src="<?php the_field('product_icon_6'); ?>"/></span></h2>
				</div>
			</div>
			
			<div class="col-md-12 product-content">
				<div class="row product-content-wrap">
				<div class="col-md-8 product-left"><?php the_field('product_left_6') ?></div>
				<div class="col-md-4 product-right"><?php the_field('product_right_6') ?></div>
				</div>
			</div>
				
		</div>
				
	</div>
</div>
	
</article>
</main>
    
<?php get_footer(); ?>


