<?php 
	if (!defined('ABSPATH')) exit;
	get_header(); 
?>

<div class="container-fluid title-container bg-graphic">
	<div id="content" class="container">
			<div class="row">
				<div class="col-12">
					<h1 class="text-center" style="margin: 2rem auto 1rem;">News</h1>
				</div>
			</div>
	</div>
</div>	

<!-- begin content -->


<div class="container">

<!-- begin row -->

<div class="row"  style="margin-bottom: 2rem">

	
	<div class="col-12 col-md-8 offset-md-2 text-center" style="color: #333; margin: 2rem auto 1rem;">

		<a href="/category/latest-news/" class="btn hm-more" style="margin-right: .5rem;">News items</a> <a href="/category/reports-and-submissions/" class="btn hm-more">Reports and submissions</a>

		<p>Explore what’s new and the latest developments in smart metering and the shift to a cleaner energy system.</p>

	</div>
	
</div>
	
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
                

</div>

</div><!-- end container-->



<?php get_footer(); ?>