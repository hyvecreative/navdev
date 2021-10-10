


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
	const menuBtn = document.querySelector('.menu-btn');
let menuOpen = false;
menuBtn.addEventListener('click', () => {
  if(!menuOpen) {
    menuBtn.classList.add('open');
    menuOpen = true;
  } else {
    menuBtn.classList.remove('open');
    menuOpen = false;
  }
});// JavaScript Document
</script>

</body>

</html>