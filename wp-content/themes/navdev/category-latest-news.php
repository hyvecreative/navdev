<?php 
	if (!defined('ABSPATH')) exit;
	get_header(); 
?>

<div class="container-fluid title-container bg-graphic">
	<div id="content" class="container">
			<div class="row">
				<div class="col-12">
					<h1 class="text-center" style="margin: 2rem auto 1rem;">Latest news</h1>
				</div>
			</div>
	</div>
</div>	

<!-- begin content -->


<div class="container">

<!-- begin row -->
	
<div class="row"  style="margin: 2rem auto 0">		
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>	


                
                <div class="col-sm-6 col-lg-4 feeditem" >
								<div class="feeditem-wrap">

								<div class="meta clearfix">
									
									<span class="date"><?php the_time('M j, Y') ?></span>
									
									<span class="cats">
										
										<?php the_category(' | ') ?>
										
									</span>
						
								</div><!-- end meta -->

								<h3><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h3>

								<div class="excerpthm"><p><?php the_excerpt(); ?></p></div>


								</div>
				</div><!-- END feeditem-->

              


					
<?php endwhile; ?>

				

				<?php else : ?>

				<p>Sorry, but you are looking for something that isn't here.</p>

				<?php endif; ?>

	
	<?php if (function_exists("emm_paginate")) {

					emm_paginate();

				} ?>
                
</div><!-- end col -->

</div><!-- end container-->



<?php get_footer(); ?>