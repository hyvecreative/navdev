<div class="row">
<div class="col-12 text-center">
<h1><?php the_field('insights_title'); ?></h1>
<p class="text-left"><?php the_field('insights_intro'); ?></p>
</div>

<?php if( have_rows('insight_block') ): while ( have_rows('insight_block') ) : the_row(); ?>

                
        <div class="col-sm-6 col-md-4 insight-block" style="margin-bottom: 1rem;">
           
                <?php
                $image = get_sub_field('insight_image');
                ?>

                <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
            
        </div>
   
<?php endwhile; else: endif; ?>
</div>


