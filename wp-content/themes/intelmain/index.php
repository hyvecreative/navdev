<?php 
	if (!defined('ABSPATH')) exit;
	get_header(); 
?>

<!-- begin content -->


<div class="container">

<!-- begin row -->

<div class="row">
	
<div class="col-12 colLeft text-center">

            
              
<?php if ( is_home() ) { ?>

     <h1>Events</h1>

<?php } else { ?>

	 <h1><?php single_cat_title(); ?></h1>

<?php } ?>

                  
<ul>		
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>	


				<div class="text-left">  
				
				<li style="list-style: none">
                
                <div class="">
					
					<div class="meta">
            			<span class="date"><?php the_time('M, Y') ?></span>
            		</div><!-- end meta -->

            		<div class="itemImage">
						<?php the_post_thumbnail( 'full' ); ?>
					</div>
                
					<h3><?php the_title(); ?></h3>
					
					<div class="excerpthm"><?php the_content(); ?></div>
					
					<a href="<?php the_field('learn_more_link') ?>" class="btn">Learn more</a>

					<p class="tag-display"><?php the_tags(' '); ?></p>
					

				</div>

              
                </li>
                
    </div><!-- END feeditem-->

					
<?php endwhile; ?>

				

				<?php else : ?>

				<p>Sorry, but you are looking for something that isn't here.</p>

				<?php endif; ?>
<ul>
	
	<?php if (function_exists("emm_paginate")) {

					emm_paginate();

				} ?>
                
</div><!-- end col -->

        
</div><!-- end row -->
</div><!-- end container-->



<?php get_footer(); ?>