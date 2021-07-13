<?php
/**
 * The header.
 *
 * @package WordPress
 * @subpackage HumanInsights2021
 * @since HumanInsights2021
 */

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>The Research Society - Human Insights Conference</title>
<meta name="keywords" content="research, insights, cx, ux, data analytics, research society, research australia, research conference, amsrs, amsrs conference, research industry"/>
<meta name="description" content="Australia’s biggest event for the Research, Insights, CX, UX & Data Analytics Industry"/>
<meta name="subject" content="The Research Society Conference">
<meta name="copyright"content="The Research Society">

    <meta property='og:title' content='The Research Society - Human Insights Conference'/>
    <meta property='og:image' content='http://humaninsights.com.au/wp-content/uploads/2021/03/TRS_HI_LI_conference_110321.png'/>
    <meta property='og:description' content='Australia’s biggest event for the Research, Insights, CX, UX & Data Analytics Industry'/>
    <meta property='og:url' content='http://www.humaninsights.com.au'/>
	
	<meta name="viewport" content="width=device-width, initial-scale=1.0">


    <!--[if lt IE 9]>
	<script src="js/html5shiv.js"></script>
	<![endif]-->


    <!-- CSS Files
    ================================================== -->
<link rel='stylesheet' id='wp-block-library-css'  href='http://humaninsights.com.au/wp-includes/css/dist/block-library/style.min.css' type='text/css' media='all' />
    <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/bootstrap.css" type="text/css">
    <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/jpreloader.css" type="text/css">
    <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/animate.css" type="text/css">
    <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/plugin.css" type="text/css">
    <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/owl.carousel.css" type="text/css">
    <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/owl.theme.css" type="text/css">
    <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/owl.transitions.css" type="text/css">
    <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/magnific-popup.css" type="text/css">
    <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/jquery.countdown.css" type="text/css">
    <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/stylesmain120421.css" type="text/css">
	<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/twentytwenty.css" type="text/css">

    <!-- custom background -->
    <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/bg.css" type="text/css">

    <!-- color scheme -->
	<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/colors/yellow.css" type="text/css" id="colors">
    <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/color.css" type="text/css">

    <!-- load fonts -->
    <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/fonts/font-awesome/css/font-awesome.css" type="text/css">
    <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/fonts/elegant_font/HTML_CSS/style.css" type="text/css">
    <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/fonts/et-line-font/style.css" type="text/css">

    <!-- RS5.0 Stylesheet -->
    <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/revolution/css/settings.css" type="text/css">
    <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/revolution/css/layers.css" type="text/css">
    <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/revolution/css/navigation.css" type="text/css">
    <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/rev-settings.css" type="text/css">
	
	<!-- custom font -->
	<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/font-style.css" type="text/css">
<script src="https://kit.fontawesome.com/ac47bebd61.js" crossorigin="anonymous"></script>
	
	<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-69NCLH99YX"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-69NCLH99YX');
</script>
	
</head>
<body id="homepage">

    <div id="wrapper">

        <!-- header begin -->
        <header class="transparent">
            <div class="info">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <!-- social icons -->
                            <div class="column social">
                            <a href="https://www.facebook.com/ResearchOz/"><i class="fa fa-facebook fa-lg"></i></a>
                            <a href="https://twitter.com/researchoz"><i class="fa fa-twitter fa-lg"></i></a>
                            <a href="https://www.linkedin.com/company/researchoz"><i class="fa fa-linkedin fa-lg"></i></a>
                            </div>
                            <!-- social icons close -->
                        </div>
                    </div>
                </div>
            </div>

            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <!-- logo begin -->
                        <div id="logo">
                            <a href="/">
                                <img class="logo" src="<?php bloginfo('template_directory'); ?>/images/logo.png" alt="The Research Society Human Insights Conference" style="height: 75px;width: auto;margin-top: 15px;">
                            </a>
                        </div>
                        <!-- logo close -->

                            <!-- small button begin -->
                            <span id="menu-btn"></span>
                            <!-- small button close -->

                            <div class="header-extra">
                                <div class="v-center">
                                    <span id="b-menu">
                                        <span></span>
                                        <span></span>
                                        <span></span>
                                    </span>
                                </div>
                            </div>

                            <!-- mainmenu begin -->
<?php if ( function_exists( 'wp_nav_menu' ) ){

					wp_nav_menu( array( 'theme_location' => 'mainmenu', 'items_wrap' => '<ul id="mainmenu" class="ms-2">%3$s</ul>') );

				}else{

					primarymenu();

}?>

							<!-- mainmenu close -->

                            

                    </div>
                    

                </div>
            </div>
        </header>
        <!-- header close -->
