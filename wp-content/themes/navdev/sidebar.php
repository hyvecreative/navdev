<!-- begin colRight -->

<div class="col-lg-3 offset-lg-1 col-md-4 sidebar-main" style="margin-bottom: 30px;">
 
<div class="sb-news">
<h2>Latest news</h2>

<ul>
    <?php
			$my_query = new WP_Query("cat=59,1,6,7,8&showposts=5");
			while ($my_query->have_posts()) : $my_query->the_post();?>

				<li>
                
                <a href="<?php the_permalink() ?>"><i class="fas fa-arrow-right"></i> <?php the_title(); ?></a>
              
                </li>
                
			<?php endwhile;	?>
    </ul>

</div><!-- end sbevents-->

</div><!-- end colRight -->