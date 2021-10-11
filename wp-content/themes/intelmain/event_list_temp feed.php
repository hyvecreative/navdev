<?php
/*
Template Name: event-list_temp
*/
?>
<?php get_header(); ?>

<main>
<article>

<div class="container-fluid">
	 <?php if(has_post_thumbnail()) {
                        $feat_image = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), "full", true);
                    } ?>
<div class="row hm-feature-page" style="background-image:url(<?php echo (($feat_image[0]))?>); background-size: cover; background-position: top;">

<?php if(get_field('echo_title')):?>

<?php else:?> 
	<div class="hero-text text-center background-<?php the_field('header_text_background') ?>">
	<h1><?php the_title(); ?></h1>
	</div>
<?php endif;?>
	
</div>

</div> <!-- end container-fluid -->

<!-- begin content -->

<div class="container-fluid page-simple-wrap services_bg">
	<div id="content" class="container page-simple">
		<div class="row">
			<div class="col-sm-12 col-md-8 offset-md-2 text-center" style="margin-bottom: 30px;">
				
			<!-- Latest News -->
<div id="latest-grants" class="latest-news" style="margin-top: 50px;">
    <?php $paged = (get_query_var('paged')) ? get_query_var('paged') : 1; ?>
    <?php $loop = new WP_Query( array( 'post_type' => 'event', 'paged' => $paged) ) ; ?>
    <?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
        <article class="row">
            <div class="four">
                <?php $src = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), array( 5600,1000 ), false, '' ); ?>
                <a href="<?php the_permalink(); ?>">
		    <img class="featured" src="<?php echo $src[0]; ?>" alt="<?php the_title(); ?>" title="<?php the_title(); ?>">
	        </a>
            </div>

            <div class="eight">
                <p class="category">
                     <?php           
                $product_terms = wp_get_object_terms( $post->ID,  'nsw_location' );
if ( ! empty( $product_terms ) ) {
	if ( ! is_wp_error( $product_terms ) ) {
			foreach( $product_terms as $term ) {
				echo '<a class="' . $term->slug .'" href="' . get_term_link( $term->slug, 'nsw_location' ) . '">' . esc_html( $term->name ) . '</a> '; 
			}

	}
} ?>          
                    <span class="entry-date-sep">|</span> <span class="entry-date entry-date-inline"> <?php echo get_the_date(); ?></span>
                    
                </p>
                <h4><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
                <p><?php the_excerpt(); ?> </p>
		<a class="button" href="<?php the_permalink(); ?>">Continue reading</a>
            </div>
        </article>

    <?php endwhile; wp_reset_query(); ?>
    
    <?php the_posts_pagination( array(
    'mid_size'  => 2,
    'prev_text' => __( 'Newer posts', 'textdomain' ),
    'next_text' => __( 'Older posts', 'textdomain' ),
) ); ?>

</div>
				
		
			</div>
		</div>
	</div>
</div>
	
</article>
</main>
    
<?php get_footer(); ?>


