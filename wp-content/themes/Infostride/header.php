<?php
/**
 * Header file for the Mytheme .
 *
 * 
 * @package WordPress
 * @subpackage Infostride
 * @since 1.0
 */

?>

<!DOCTYPE html>
<html <?php echo language_attributes(); ?> >

<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1.0" >
  <title><?php echo get_bloginfo('name')." | ".get_bloginfo('description') ?> </title>

  <!-- Favicons -->
  <link href="<?php bloginfo('template_url'); ?>/assets/img/favicon.png" rel="icon">
  <link href="<?php bloginfo('template_url'); ?>/assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <?php wp_head(); ?>
  <!-- Template Main CSS File -->
  <link href="<?php bloginfo('template_url'); ?>/assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Mentor - v4.3.0
  * Template URL: https://bootstrapmade.com/mentor-free-education-bootstrap-theme/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
  
</head>

<body>
  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top">
    <div class="container d-flex align-items-center">

      
      <a href="<?php echo get_site_url();?>" class="logo-area"><?php 
							if ( function_exists( 'the_custom_logo' ) ) {
								the_custom_logo();
							}
						?></a>
      <nav id="navbar" class="navbar order-last order-lg-0 n ms-auto">
        
        <?php 
			wp_nav_menu(
			array(
				'menu'           => 'header-menu',
				'theme_location' => 'primary',
			// 'menu_class'     => 'navbar-nav',
				'container_class' => ''
			// 'walker' => new MY_Menu_Walker
				)
					);
		?>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

      <!-- <a href="courses.php" class="get-started-btn">Get Started</a> -->

    </div>
  </header><!-- End Header -->
  