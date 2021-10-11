<?php
/*
Template Name: homepage-temp
*/
?>
<?php
get_header(); 
?>

<!-- begin content -->

<div class="container-fluid">
<div class="row hm-feature header-<?php the_field('header_panel_height') ?> full-page" style="position: relative;">
<picture>
  <source media="(max-width: 991px)" srcset="<?php bloginfo('template_directory'); ?>/images/hero-img-2-sm.jpg">
  <source media="(min-width: 992px)" srcset="<?php bloginfo('template_directory'); ?>/images/hero-img-2.jpg">
  <img src="<?php bloginfo('template_directory'); ?>/images/hero-img-2.jpg" alt="Stroke Olympics 2019">
</picture>

<div class="feature-text text-center background-<?php the_field('header_text_background') ?>">
	<h1 class=""><?php the_field('banner_head') ?></h1>

</div>
</div>

</div>


<div class="container-fluid">
	<div class="container hm-container about-wrap">
		<div class="row text-center section-wrap about-section">
			<div class="col-sm-12 col-md-8 offset-md-2">
				<h2><?php the_field('about_title') ?></h2>
				<?php the_field('about_text') ?>
			</div>
			
			<div class="col-12">
				<a href="" class="btn btn-1">Find out more <i class="fas fa-chevron-right" aria-hidden="true"></i></a>
			</div>
			
		</div>
	</div>
</div>

<div class="container-fluid home-signup">
<div class="container">

	<div class="row">	

		<?php get_template_part( 'partials/content', 'updates' ); ?>
</div>
		
</div>
</div>

<div id="preload-hm">
	<img src="<?php bloginfo('template_directory'); ?>/images/hero-img-2-sm.jpg"  width="1" height="1" alt="" />
</div>


<?php get_footer(); ?>