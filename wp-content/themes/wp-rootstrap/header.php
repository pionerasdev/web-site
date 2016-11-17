<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package rootstrap
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title><?php wp_title( '|', true, 'right' ); ?></title>
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>
<script type="text/javascript" src="https://netdna.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" href="<?php bloginfo('stylesheet_url') ?>"><!--Cargamos la hoja de estilos-->
   
   <link href="https://fonts.googleapis.com/css?family=Roboto+Slab:400,700" rel="stylesheet">
   <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <script type="text/javascript" src="./wp-content/themes/wp-rootstrap/inc/js/scrolling-nav.js"></script>
     <script type="text/javascript" src="./wp-content/themes/wp-rootstrap/inc/js/jquery.easing.min.js"></script>
     <script type="text/javascript" src="//code.jquery.com/jquery-1.11.2.min.js"></script>
      <script type="text/javascript" src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
      <script type="text/javascript" src="./wp-content/themes/wp-rootstrap/inc/js/owl.carousel.js"></script>
      <script type="text/javascript" src="./wp-content/themes/wp-rootstrap/inc/js/owl.carousel.min.js"></script>
      <link  href="./wp-content/themes/wp-rootstrap/inc/css/owl.carousel.css" rel="stylesheet" type="text/css">
      <link  href="./wp-content/themes/wp-rootstrap/inc/css/albumes.css" rel="stylesheet" type="text/css">
      <script type="text/javascript" src="enviar.js"></script>



<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<a href="#" class="back-to-top">Back to Top</a>

    <div class="" >
		<nav class="navbar navbar-fixed-top" role="navigation">
			<div class="container" style="width:100%;height:85px;padding-top:16px;">
		        <div class="navbar-header logo-margin">
		            <div  class="navbar">
                    <a href="http://pionerasdev.co/"><img src="http://pionerasdev.co/wp-content/themes/wp-rootstrap/LogoSimpleHorizon.png" class="img-responsive logo-pioneras">
                        </a></div>
                        <button type="button" data-toggle="collapse" data-target="#navbar-ex-collapse" class="navbar-toggle">
		                <span class="sr-only">Toggle navigation</span>
		                <span class="icon-bar"></span>
		                <span class="icon-bar"></span>
		                <span class="icon-bar"></span>
		            </button>						
                	</div>
				    	<div class="collapse navbar-collapse" id="navbar-ex-collapse">
            <div class=" hidden-xs text-right menu-supredes " >
              <a href="http://pionerasdevelopers.github.io/" target="_blank" class="menu-fontsize font-mbtx" style="margin-left: 399px !important">BLOG</a>
              <a href="https://twitter.com/pionerasdev" target="_blank"><i class="fa fa-lg fa-fw fa-twitter text-inverse font-redessup"></i></a>
              <a href="https://github.com/pionerasdevelopers" target="_blank" ><i class="fa fa-lg fa-fw fa-github text-inverse font-redessup"></i></a>
              <a href="https://www.instagram.com/pionerasdev/" target="_blank"><i class="fa fa-lg fa-fw fa-instagram text-inverse font-redessup"></i></a>
              <a href="https://es.pinterest.com/piodev/" target="_blank" ><i class="fa fa-lg fa-fw fa-pinterest-p text-inverse font-redessup"></i></a>
              <a href="https://www.flickr.com/photos/141169078@N06/" target="_blank" ><i class="fa fa-lg fa-fw fa-flickr text-inverse font-redessup"></i></a>
              <a href="https://pionerasdevelopers.slack.com" target="_blank" ><i class="fa fa-lg fa-fw fa-slack text-inverse font-redessup"></i></a>

                </div>
            <?php wp_nav_menu( array(
               'theme_location' => 'my-custom-menu',
              'container_class' => 'custom-menu-class' ) );
                ?>
          </div>        
      </nav>
     </div>
           
           
      
    

         
					