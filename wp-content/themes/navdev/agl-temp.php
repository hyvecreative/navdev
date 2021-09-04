<?php
/*
Template Name: agl-temp
*/
?>
<?php 
	if (!defined('ABSPATH')) exit;
	get_header(); 
?>

<!-- begin content -->

<div class="container-fluid">
<div class="row hm-feature-page" style="background-image:url(http://coalimpactsindex.com.au/wp/wp-content/uploads/2020/12/about-hero.jpg); background-size: cover; background-position: center;">
<div class="hero-text text-center">
	<h1 class="<?php the_field('h1_large', get_option('page_for_posts')); ?>"><?php the_field('hero-text', get_option('page_for_posts')) ?></h1>
</div>
</div>

</div>
	
<!-- end hero panel --> 

<div class="container-fluid">

	<div class="row index-stats-panel" style="padding-left: 10%; padding-right: 10%; position: relative;">
	<div class="col-12 col-xl-10 offset-xl-1 count-wrap">
		<?php get_template_part( 'partials/content', 'counter-index' ); ?>
	</div>
</div>
</div>

<div class="incident-wrap">

<div class="container-fluid incident-intro">
<div id="content" class="container">

<div class="row section-panel">	
	<div class="col-12 col-xl-8 offset-xl-2 text-center">
		<h2><?php the_field('about_incidents_title', get_option('page_for_posts')) ?></h2>
		<?php the_field('about_incidents_text', get_option('page_for_posts')) ?>
	</div>
</div>
	
</div>
</div>
	

<div class="container incident-icons">
	
	<div class="row icon-panel text-center">
	
	<div class="col-6 col-lg-3">
		<div class="incident-icon">
			<img src="<?php bloginfo('template_directory'); ?>/images/Icon-pollution.png" alt="Emissions belching from chimney stack" />
		</div>
		<p>Licence Breaches</p>
	</div>
	<div class="col-6 col-lg-3">
		<div class="incident-icon">
		<img src="<?php bloginfo('template_directory'); ?>/images/Icon-breakdowns.png" alt="Bolt of electricity crossed out" /></div>
		<p>Breakdowns</p>
	</div>
	<div class="col-6 col-lg-3">
		<div class="incident-icon">
		<img src="<?php bloginfo('template_directory'); ?>/images/Icon-toxic-pollution.png" alt="Skull and crossbones in danger warning sign" /></div>
		<p>Toxic Air Pollution</p>
	</div>
	<div class="col-6 col-lg-3">
		<div class="incident-icon">
		<img src="<?php bloginfo('template_directory'); ?>/images/Icon-emissions.png" alt="Cloud containg particles of CO2 gas" /></div>
		<p>Emissions</p>
	</div>

	</div>
	
</div> <!-- end container -->


<!-- begin row -->

<div class="container incident-index">

<div class="row text-center">
	<div class="col-12 text-center">
	<h2><?php the_field('view_incidents_title', get_option('page_for_posts')) ?></h2>
		<?php the_field('view_incidents_content', get_option('page_for_posts')) ?>
	<?php get_sidebar('filter'); ?>
	</div>
<!-- AGL feed -->	
<div class="col-12 colLeft text-center">
<?php
  
$args = array(
    'tag' => 'agl',
);
  
// Custom query.
$query = new WP_Query( $args );
  
// Check that we have query results.
if ( $query->have_posts() ) {
  
    // Start looping over the query results.
    while ( $query->have_posts() ) {
  
        $query->the_post();?>
  
        <div class="feeditem text-left">  
				
				<li style="list-style: none">
                
                <div class="feedcont">
					
					<div class="meta date-tab">
            			<span class="date"><?php the_time('M, Y') ?></span>
            		</div><!-- end meta -->

            		<div class="itemImage">
						<?php the_post_thumbnail( 'full' ); ?>
					</div>
                
					<h3><?php the_title(); ?></h3>
					
					<div class="excerpthm"><?php the_content(); ?></div>
					
					<a href="<?php the_field('learn_more_link') ?>" class="btn">Learn more</a>

					<p class="tag-display"><?php the_tags(' '); ?></p>
					
					<div class="share-icons text-right">
						
					<a href="https://www.facebook.com/sharer/sharer.php?u=<?php the_permalink() ?>" class="fb-share">
					  <span class="fa-stack fa-lg">
					  <i aria-hidden="true" class="fas fa-square fa-stack-2x fa-inverse" title="Share on Facebook"></i>
					  <i aria-hidden="true" class="fab fa-facebook-square fa-stack-2x"></i>
					</span>
						<span class="sr-only">Share on Facebook</span>
					</a>
					<a href="<?php the_field('twitter_url') ?>" class="tw-share <?php the_field('twitter_on'); ?>">
						<span class="fa-stack fa-lg">
					  <i aria-hidden="true" class="fas fa-square fa-stack-2x fa-inverse" title="Share on Twitter"></i>
					  <i aria-hidden="true" class="fab fa-twitter-square fa-stack-2x"></i>
					</span>
					<span class="sr-only">Share on Twitter</span>
					</a>
					</div>

				</div>

              
                </li>
                
    </div><!-- END feeditem-->
  
    <?php }
  
}
  
// Restore original post data.
wp_reset_postdata();
  
?>
	
</div>
<!-- Filter feed -->
	
<div class="col-12 colLeft text-center">
<ul>		
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>	


				<div class="feeditem text-left">  
				
				<li style="list-style: none">
                
                <div class="feedcont">
					
					<div class="meta date-tab">
            			<span class="date"><?php the_time('M, Y') ?></span>
            		</div><!-- end meta -->

            		<div class="itemImage">
						<?php the_post_thumbnail( 'full' ); ?>
					</div>
                
					<h3><?php the_title(); ?></h3>
					
					<div class="excerpthm"><?php the_content(); ?></div>
					
					<a href="<?php the_field('learn_more_link') ?>" class="btn">Learn more</a>

					<p class="tag-display"><?php the_tags(' '); ?></p>
					
					<div class="share-icons text-right">
						
					<a href="https://www.facebook.com/sharer/sharer.php?u=<?php the_permalink() ?>" class="fb-share">
					  <span class="fa-stack fa-lg">
					  <i aria-hidden="true" class="fas fa-square fa-stack-2x fa-inverse" title="Share on Facebook"></i>
					  <i aria-hidden="true" class="fab fa-facebook-square fa-stack-2x"></i>
					</span>
						<span class="sr-only">Share on Facebook</span>
					</a>
					<a href="<?php the_field('twitter_url') ?>" class="tw-share <?php the_field('twitter_on'); ?>">
						<span class="fa-stack fa-lg">
					  <i aria-hidden="true" class="fas fa-square fa-stack-2x fa-inverse" title="Share on Twitter"></i>
					  <i aria-hidden="true" class="fab fa-twitter-square fa-stack-2x"></i>
					</span>
					<span class="sr-only">Share on Twitter</span>
					</a>
					</div>

				</div>

              
                </li>
                
    </div><!-- END feeditem-->

					
<?php endwhile; ?>

				

				<?php else : ?>

				<p>Sorry, but you are looking for something that isn't here.</p>

				<?php endif; ?>
<ul>

<!--<div class="navigation">

							<div class="alignleft"><?php next_posts_link() ?></div>

							<div class="alignright"><?php previous_posts_link() ?></div>

</div>-->

				<?php if (function_exists("emm_paginate")) {

					emm_paginate();

				} ?>
                
</div><!-- end col -->

        
</div><!-- end row -->
</div><!-- end container-->
	
	</div> <!-- end incident-wrap-->

<div class="container-fluid report-intro">
	<div class="container">

	<div class="row report-item">
	<div class="col-xl-6 text-center">
		<img src="<?php bloginfo('template_directory'); ?>/images/stories-sighting.png" alt="Image of a coal incident occuring" />
	</div>
	<div class="col-xl-6 text-center">
		<h2><?php the_field('share_story_title', 'option'); ?></h2>
		<p><b><?php the_field('share_story_intro', 'option'); ?></b></p>
		<p><?php the_field('share_story_content', 'option'); ?></p>
		<a href="<?php the_field('story_link_destination', 'option'); ?>" class="btn"><?php the_field('story_link_text', 'option'); ?></a>
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
	
<div class="container">
		<div class="row source-info">	
			<div class="col-12 col-lg-8 offset-lg-2 text-center">
				<h3><?php the_field('sources_spruik_title', 'option'); ?></h3>
				<?php the_field('sources_spruik_content', 'option'); ?>
				<?php the_field('sources_spruik_link', 'option'); ?>
			</div>
		</div>
		
</div>


<?php get_footer(); ?>