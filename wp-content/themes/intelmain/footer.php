


<!-- begin footer -->
<footer>

<div class="container-fluid ftwraptop">
<div class="container">
	<div class="row main-row">

            <div class="col-md-4 ft-logo">
			<?php 
						$image = get_field('footer-logo', 'option');
						if( !empty( $image ) ): ?>
							<img style="max-width: 180px;" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
			<?php endif; ?>
            <?php the_field('footer_authorisation_text', 'option'); ?>
				
			<?php the_field('contact_us', 'option'); ?>

			</div>

            <div class="col-md-3 footer-info">
			<h2>INFORMATION</h2>
					<?php the_field('more_information', 'option'); ?>

			</div>
			
			<div class="col-md-3 footer-nav">
		
				<div class="nav-ft">
					<h2>LINKS</h2>
					<?php wp_nav_menu( array( 'theme_location' => 'footer-menu', 'container_id' => 'topmenu', 'container_class' => 'menu-ft', 'items_wrap' => '<ul id="mymenu">%3$s</ul>' ) ); ?>
				</div>

			</div>
			
			<div class="col-md-2 social-logos">
				
           <h2>SHARE</h2>
				<a href="<?php the_field('linkedin_url', 'option'); ?>" class="fb-share" style="margin-right: 10px;"><i aria-hidden="true" class="fab fa-linkedin fa-2x" title="Share on linked in"></i>
				<span class="sr-only">Share on linkedin</span>
				</a> 
				<a href="<?php the_field('youtube_url', 'option'); ?>" class="fb-share" style="margin-right: 10px;"><i aria-hidden="true" class="fab fa-youtube-square fa-2x" title="See us on youtube"></i>
				<span class="sr-only">See us on youtube</span>
				</a> 
			</div>
	   
</div> <!-- end row -->

</div> <!-- end container -->

</div><!-- end container-fluid -->
	
<div class="container-fluid ftwrapbot">
	<div class="container">
		<div class="row">

			<div class="col-md-6 ft-bot ft-bot-left">

			</div>

			<div class="col-md-6 ft-bot ft-bot-right">

			</div>

		</div>
	</div>
</div>

</footer><!-- end footer -->

</div><!-- end wrapper -->

<a id="scroll-to-top" title="Back To Top" class="" href="#">
<span class=" " aria-hidden="true">
	<i class="fas fa-arrow-up"></i></span>
<span class="sr-only">Error:</span>
</a>

<?= wp_footer() ?> 
    
 <script>
(function($){
      jQuery('.a-menu').flexMenu({
        responsivePattern: 'off-canvas'
      });
    })(jQuery);   
</script>

<script>	
document.querySelectorAll('a[href^="#"]').forEach(anchor => {
    anchor.addEventListener('click', function (e) {
        e.preventDefault();
      
      // Smooth scroll to #results 
      var target = $(this.hash);
      $('html, body').animate({
        scrollTop: target.offset().top
      }, 1000, function() {});

    });
});
</script>

<script>	
$(document).on('click', '#mymenu a[href*="#"]', function () {
    //console.log('clicked anchor link');
    $( ".fm-button" ).trigger( "click" );
});
</script>

</body>

</html>