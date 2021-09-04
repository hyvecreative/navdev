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
		wp_register_script( 'jquery', 'https://code.jquery.com/jquery-3.5.1.slim.min.js', false, '3.5.1', false);
        wp_enqueue_script( 'jquery');
	
		wp_enqueue_script( 'popper', 'https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js', array('jquery'), null, true);
		wp_enqueue_script( 'bootstrap4', 'https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js', array('jquery'), null, true);
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
<div id="header">

<div class="container-fluid">
	<div class="container">
		
		
		<nav class="navbar navbar-expand-lg navbar-dark" role="navigation">
    <!-- Brand and toggle get grouped for better mobile display -->
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-controls="bs-example-navbar-collapse-1" aria-expanded="false" aria-label="<?php esc_attr_e( 'Toggle navigation', 'your-theme-slug' ); ?>">
        <span class="navbar-toggler-icon"></span>
    </button>
	  
	  <a class="navbar-brand" href="#">Navbar</a>
	  
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

	</nav>
	
		
 
	</div>  <!-- end container -->  
</div>  <!-- end fm-container -->          
</div><!-- END Header -->



 


	
