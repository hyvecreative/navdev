
<div class="row hm-news-wrap text-left" style="margin-top: 1.5rem;">

		<?php
								$my_query = new WP_Query("cat=1,7,59&showposts=3");
								while ($my_query->have_posts()) : $my_query->the_post();?>

							<div class="col-sm-6 col-lg-4 feeditem">
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

		<?php endwhile;	?>
							

					
	<div class="col-12 text-center" style="margin-top: 1rem; margin-bottom: 1rem;"><a href="/wptest/news/" class="btn hm-more">More news <i class="fas fa-arrow-right" aria-hidden="true"></i></a></div>
					
</div>