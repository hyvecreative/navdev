<?php get_header(); ?>

<!-- begin content -->

<div class="container">

<!-- begin row -->
	
    <div class="row content">
	<div class="col-12">
    
    <div class="bCrumbs" style="margin-bottom: .5rem;" xmlns:v="http://rdf.data-vocabulary.org/#">
				    <?php if(function_exists('bcn_display'))
				    {
				        bcn_display();
				    }?>
	</div>
		
	</div>
	</div>
		
	<div class="row content" style="min-height: 900px; margin-bottom: 2rem;">
		
	<div class="col-md-8 colLeft">
		
                
				<?php if (have_posts()) : while (have_posts()) : the_post(); ?>	

					<div class="postItem hmfeed">
						
						 <h1 style="color: #333;"><?php the_title(); ?></h1>
						
						<div class="titlemeta">
                        <div class="metadate"><?php the_time('M j Y') ?></div>
						</div>

						<?php the_content(__('Continue reading &raquo;')); ?> 
	
					</div> <!-- Postitem -->

				<?php endwhile; ?>

				<?php else : ?>

				<p>Sorry, but you are looking for something that isn't here.</p>				
				<?php endif; ?>
                
	</div>
			<!-- end col left -->
	
			<?php get_sidebar(' '); ?>

            
		</div><!-- end col -->
		</div><!-- end row -->
        <?php get_footer(); ?>




