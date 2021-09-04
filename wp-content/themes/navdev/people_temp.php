<?php
/*
Template Name: people_temp
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
				<div class="row">
				<div class="col-sm-12 col-md-10 offset-md-1">
				<h1><?php the_title(); ?></h1>
					</div>
				</div>
			</div>
</div>
<?php endif;?>
</div>

</div>

<!-- begin content -->

<div class="container-fluid page-simple-wrap">
	<div id="content" class="container page-simple" style="padding-bottom: 1rem; padding-top: 4rem;">
		<div class="row">
			
			
			
			<div class="col-sm-12 col-md-10 offset-md-1">

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
		
		
				<div class="row">
			
			<div class="col-sm-12 col-md-10 offset-md-1" style="margin-bottom: 1.5rem;">
				<h2><?php the_field('leadership_team_title') ?></h2>
			</div>
			
			<div class="col-sm-12 col-md-10 offset-md-1">

				<div class="row">

				<?php if( have_rows('leadership_team') ): while ( have_rows('leadership_team') ) : the_row(); ?>


					<div class="col-sm-6 col-lg-4 people-block" style="margin-bottom: 1rem;">

							<?php
							$image = get_sub_field('image');
							?>

							<img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />

						<p><strong><?php the_sub_field('name') ?></strong><br />
							<?php the_sub_field('title') ?></p>
						
						<?php the_sub_field('text') ?>
						
						<p style="margin-top: .5rem">
							<a href="mailto:<?php the_sub_field('email') ?>"><i class="fas fa-envelope" aria-hidden="true"></i></a>
							<a href="mailto:<?php the_sub_field('email') ?>"> Contact</a> | <a href="<?php the_sub_field('linkedin') ?>"> Linkedin</a></p>
					
						<div class="rule-block"></div>
						
					</div>

					<?php endwhile; else: endif; ?>

				</div>
				
				<hr class="wp-block-separator">
				
			</div>
		</div>
		
		<div class="row">
			
			<div class="col-sm-12 col-md-10 offset-md-1" style="margin-bottom: 1.5rem;">
				<h2><?php the_field('board_title') ?></h2>
			</div>
			
			<div class="col-sm-12 col-md-10 offset-md-1">

				<div class="row">

				<?php if( have_rows('the_board') ): while ( have_rows('the_board') ) : the_row(); ?>


					<div class="col-sm-6 col-lg-3 people-block" style="margin-bottom: 1rem;">

							<?php
							$image = get_sub_field('image');
							?>

							<img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />

						<p><strong><?php the_sub_field('name') ?></strong><br />
							<?php the_sub_field('title') ?></p>
						<?php the_sub_field('text') ?>
					
						<div class="rule-block"></div>
						
					</div>

					<?php endwhile; else: endif; ?>

				</div>
				
			</div>
						
		</div>
		
		

		
</div>
</div>
	
<div class="container-fluid women-metering services_bg">
	<div id="content" class="container page-simple 2-col-aside" style="padding-bottom: 1rem;">
		<div class="row">
			<div class="col-sm-12 col-md-10 offset-md-1">
				<div class="row">
					<div class="col-lg-6">
						<?php the_field('women_metering_content') ?>
					</div>

					<div class="col-lg-6">
						<?php 
		$image = get_field('women_metering_image');
		$size = 'full'; // (thumbnail, medium, large, full or custom size)
		if( $image ) {
			echo wp_get_attachment_image( $image, $size );
		}
						?>
					</div>

				</div>
			</div>
		</div>	
	</div>
</div>
	
<div class="container-fluid page-double-row" style="margin-bottom: 2rem;">
	<div id="content" class="container page-simple 2-col-aside" style="padding-bottom: 1rem;">
		<div class="row">
			<div class="col-sm-12 col-md-10 offset-md-1">
				<div class="row">
					<div class="col-lg-6">
						<?php 
							$image = get_field('the_hub_image');
							$size = 'full'; // (thumbnail, medium, large, full or custom size)
							if( $image ) {
								echo wp_get_attachment_image( $image, $size );
							}
						?>
					</div>

					<div class="col-lg-6">
						<?php the_field('the_hub_content') ?>
					</div>
			
				</div>
				
			</div>
		</div>	
				
	</div>
</div>	
	
</article>
</main>
    
<?php get_footer(); ?>


