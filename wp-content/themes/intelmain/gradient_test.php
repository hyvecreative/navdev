<?php
/*
Template Name: gradient-test
*/
?><?php get_header(); ?>

<main>
<article>

<div class="container-fluid">

	
<div class="gradient-block">
		

</div>

</div>

<!-- begin content -->

<div class="container-fluid page-simple-wrap">
	<div id="content" class="container page-simple">
		<div class="row">
			<div class="col-sm-12 col-md-8 offset-md-2">

			<?php if(get_field('echo_title')):?>
				<h1 class="page-header-title"><?php the_title(); ?></h1> 
			<?php else:?> 
			<?php endif;?> 
				
			<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

			<?php the_content(__('(more...)')); ?>

			<?php endwhile; else: ?>
			<p><?php _e('Sorry, no pages are available. visit: http://coalimpactindex.com.au'); ?></p>
			<?php endif; ?>
			</div>
		</div>
	</div>
</div>
	
</article>
</main>
    
<?php get_footer(); ?>


