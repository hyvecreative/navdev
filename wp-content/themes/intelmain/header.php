<!DOCTYPE html>
<html lang="en"><head >
	<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-141133993-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-141133993-1');
</script>

	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	
	<meta content="index, follow, noarchive" name="robots">
	<meta name="google-site-verification" content="X_SuFmC9mGtqfiV7KcxBc8R8dcnq75GZl-yqs93B5Ow" />
	<link rel="apple-touch-icon" sizes="180x180" href="<?php bloginfo('template_directory'); ?>/images/apple-touch-icon.png">
	<link rel="icon" type="image/png" sizes="32x32" href="<?php bloginfo('template_directory'); ?>/images/favicon-32x32.png">
	<link rel="icon" type="image/png" sizes="16x16" href="<?php bloginfo('template_directory'); ?>/images/favicon-16x16.png">
	<link rel="manifest" href="<?php bloginfo('template_directory'); ?>/site.webmanifest">
    
        <?php
        $template_directory = get_bloginfo('template_url');
        
        wp_enqueue_style('style', get_bloginfo('stylesheet_url'));
		wp_enqueue_style('awesome', $template_directory.'/css/all.css');

		
        wp_deregister_script( 'jquery' );
        wp_register_script( 'jquery', 'https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js', false, '1.12.4', false);
        wp_enqueue_script( 'jquery');
	
		wp_enqueue_script( 'bootstrap', $template_directory."/bootstrap/js/bootstrap.min.js", array('jquery'), null, true);
		wp_enqueue_script( 'scrollTo', $template_directory."/js/jquery.scrollTo.js", array('jquery'), null, true);
		wp_enqueue_script( 'fancyboxeasing', $template_directory."/js/jquery.easing-1.3.pack.js", array('jquery'), null, true);
		wp_enqueue_script( 'scroll', $template_directory."/js/scroll.js", array('jquery'), null, true);

		?>

    
	<?php wp_head();?>
    
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    
	<!--[if lt IE 9]>
	<link rel="stylesheet" type="text/css" charset="utf-8" media="all" href="<?php bloginfo('template_url'); ?>/css/ie8.css" />
	<![endif]-->   
	
 <link rel="stylesheet" href="https://use.typekit.net/ypr5psl.css">

 <link
    rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"
  />



</head>
    
  <body <?php body_class(); ?>>
  
<!-- begin wrapper -->
 <div id="wrapper" class="wrapperhome">

<!-- begin header -->
<div id="header" 
	 
	 <?php if ( is_front_page() ) { ?>
        class="header-wrap-hm"
    <?php } elseif ( is_page_template( 'front-page.php' ) )  { ?>
        class="header-wrap-hm"
	 <?php } elseif ( is_page_template( 'front-page-home-dev.php' ) )  { ?>
        class="header-wrap-hm"
    <?php } else  { ?>
		class="header-wrap lo-shadow"
	<?php } ?>
	 
	>

<div class="fm-container home-header clearfix">

		<div class="fm-button"><span class="fm-bar"></span><span class="fm-bar"></span><span class="fm-bar"></span></div>

		<div id="logo">
			<a href="<?php bloginfo('url'); ?>/">
			
			<svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
	 viewBox="0 0 399.6 126.4" style="enable-background:new 0 0 399.6 126.4;" xml:space="preserve">

<g>
	<path style="fill:#fff;" d="M106.6,124.9V93.4h3.9v31.5C110.4,124.9,106.6,124.9,106.6,124.9z"/>
	<path style="fill:#fff;" d="M147.4,124.9L127,100v24.8h-3.9V93.4h3.9l20.4,24.3V93.4h3.9v31.5C151.3,124.9,147.4,124.9,147.4,124.9z"/>
	<path style="fill:#fff;" d="M168.9,124.9V97.3H159V94h23.7v3.3h-9.9v27.6H168.9z"/>
	<path style="fill:#fff;" d="M191.5,124.9V93.4h22.1v3.3h-18.2v9.9h17.7v3.3h-17.7v11h18.2v3.3L191.5,124.9L191.5,124.9z"/>
	<path style="fill:#fff;" d="M224.7,124.9V93.4h3.9V121h14.3v3.3L224.7,124.9L224.7,124.9z"/>
	<path style="fill:#fff;" d="M252.2,124.9V93.4h3.9V121h14.3v3.3L252.2,124.9L252.2,124.9z"/>
	<path style="fill:#fff;" d="M278.7,124.9V93.4h3.9v31.5C282.6,124.9,278.7,124.9,278.7,124.9z"/>
	<path style="fill:#fff;" d="M318.5,111.1h-17.1v13.8h-5.5V93.4h5.5v12.7h17.1V93.4h5.5v31.5h-5.5V111.1z"/>
	<path style="fill:#fff;" d="M336.7,93.4h5.5v18.8c0,5,2.8,8.3,8.3,8.3c5.5,0,8.3-3.3,8.3-8.3V93.4h5.5v18.8c0,7.7-4.4,12.7-13.8,12.7
		s-14.3-5-14.3-12.7L336.7,93.4L336.7,93.4z"/>
	<path style="fill:#fff;" d="M374.8,93.4h14.9c6.1,0,9.4,3.3,9.4,7.7c0,3.9-2.8,6.6-5.5,7.2c3.3,0.6,6.1,3.9,6.1,7.7c0,5-3.3,8.3-9.4,8.3h-15.5
		C374.8,124.3,374.8,93.4,374.8,93.4z M388,106.7c2.8,0,4.4-1.7,4.4-3.9c0-2.2-1.7-3.9-4.4-3.9h-7.7v8.3L388,106.7L388,106.7z
		 M388.6,119.9c3.3,0,5-1.7,5-4.4c0-2.2-1.7-4.4-5-4.4h-8.3v8.8L388.6,119.9L388.6,119.9z"/>
</g>
<g>
	<path class="line-2" style="fill:none;stroke:#fff;stroke-width:3.863;stroke-miterlimit:10;" d="M175.7,64.2c-12.1-6.6-54.2-29.8-60.3-33.1
		s-16-8.8-16-8.8s-19.3-11.6-32.6,2.2c-9.9,9.9-9.9,18.8-13.2,37.5c-3.3,18.8-11.6,59.6,2.8,62.4c9.9,1.7,14.9-8.3,20.4-16
		c13.8-20.4,27-44.7,34.8-56.3c3.8-6.7,11-16.6,11-16.7l0,0c5.4-7.5,9.9-12.7,13.8-15.9c6.1-5.5,22.1-13.2,32.6,0.6
		s18.8,30.9,19.3,37.5S187.7,70.8,175.7,64.2"/>
</g>
<g>
	<path class="line-1" style="fill:none;stroke:#fff;stroke-width:3.863;stroke-miterlimit:10;" d="M172.6,75.5C154,71.7,135.8,67,135.8,67
		S91.7,57,75.6,53.1c0,0-48.6-8.8-63.5-1.1C0.6,58.1-1.1,74.7,6.7,79.6c6.6,4.4,12.7,3.9,23.2,1.1C36.8,78.8,51,71,51,71
		c3.5-2.2,8.1-5.1,12-7.9c13.2-9.5,33.4-24.9,47-35.4l0.1-0.1c8.7-6.7,14.7-11.4,14.7-11.4s19.9-17.1,43-13.8
		C179.9,4,182.2,6.2,191,16.2c0,0,11,13.2,17.1,20.4c6.6,7.7,17.1,23.7,18.2,28.1c0.6,3.3,1.1,16-22.1,15.5
		c-7.6-0.2-19.8-2.3-31.8-4.8"/>
</g>
</svg>
			
			</a>
		</div>

		<div class="header-items">
			
			<nav class="navbar navbar-expand-lg navbar-dark" role="navigation">
  <div class="container">
    <!-- Brand and toggle get grouped for better mobile display -->
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-controls="bs-example-navbar-collapse-1" aria-expanded="false" aria-label="<?php esc_attr_e( 'Toggle navigation', 'your-theme-slug' ); ?>">
        <span class="navbar-toggler-icon"></span>
    </button>
        <?php
        wp_nav_menu( array(
            'theme_location'    => 'primary',
            'depth'             => 2,
            'container'         => 'div',
            'container_class'   => 'collapse navbar-collapse',
            'container_id'      => 'bs-example-navbar-collapse-1',
            'menu_class'        => 'nav navbar-nav',
            'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
            'walker'            => new WP_Bootstrap_Navwalker(),
        ) );
        ?>
    </div>
</nav>

		</div>  <!-- end header-items-->  
           
</div>  <!-- end fm-container -->          
</div><!-- END Header -->



 


	
