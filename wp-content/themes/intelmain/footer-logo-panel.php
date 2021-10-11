


<!-- begin footer -->
<footer>

<div class="container-fluid ftwraptop">
<div class="container">
	<div class="row main-row">

            <div class="col-md-4">
            <?php the_field('footer_authorisation_text', 'option'); ?>
			<?php the_field('footer_copyright', 'option'); ?>
			</div>

            <div class="col-md-3 col-lg-2 ft-logo">
					<?php 
						$image = get_field('footer-logo', 'option');
						if( !empty( $image ) ): ?>
							<img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
						<?php endif; ?>
			</div>
			
			<div class="col-md-2 col-lg-2 offset-lg-2 footer-nav">
		
				<div class="nav-ft">
				<?php wp_nav_menu( array( 'theme_location' => 'footer-menu', 'container_id' => 'topmenu', 'container_class' => 'menu-ft', 'items_wrap' => '<ul id="mymenu">%3$s</ul>' ) ); ?>
				</div>

			</div>
			
			<div class="col-md-3 col-lg-2 social-logos">
           <p style="font-size: 1rem; line-height: 200%; margin-bottom: .5rem;"><strong>SHARE</strong></p>
				<a href="<?php the_field('facebook_url', 'option'); ?>" class="fb-share" style="margin-right: 10px;"><i aria-hidden="true" class="fab fa-facebook-square fa-3x"></i></a> 
				<a href="<?php the_field('twitter_url', 'option'); ?>" class="tw-share"><i aria-hidden="true" class="fab fa-twitter-square fa-3x"></i></a>

			</div>
	   
</div> <!-- end row -->

<div class="row footer-supporters text-center">


		<?php if( have_rows('supporter-logos', 'option') ): while ( have_rows('supporter-logos', 'option') ) : the_row(); ?>
		
		        <div class="col-6 col-sm-4 col-lg-2 supporter-logo"> 
					
						<a href="<?php the_sub_field('logo-url', 'option'); ?>" class="logo-wrap">

			                <?php
			                $image = get_sub_field('logo_image', 'option');

			                ?>

			                <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />

						</a>

				</div>
			
    	<?php endwhile; else: endif; ?>
		

</div>

</div> <!-- end container -->

</div><!-- end container-fluid -->

</footer><!-- end footer -->

</div><!-- end wrapper -->







<?= wp_footer() ?> 
    
 <script>
(function($){
      jQuery('.a-menu').flexMenu({
        responsivePattern: 'off-canvas'
      });
    })(jQuery);   
</script> 

<script>

	$(window).on('scroll', function (e) {
   var top = $(window).scrollTop() + $(window).height(),
       isVisible = top > $('.ani').offset().top;

   $('.ani').toggleClass('animate__animated', isVisible);
});

	
</script>

</body>

</html>