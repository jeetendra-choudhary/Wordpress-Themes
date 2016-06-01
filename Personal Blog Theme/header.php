<?php
/**
 * The header for our theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Jeetendra_Kumar_Choudhary
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<!-- bootstrap core css -->
	<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/assets/css/bootstrap.min.css">
	<!-- font awesome icons -->
	<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/assets/css/font-awesome/css/font-awesome.min.css">

	<!-- google fonts -->
	<!-- <link href='https://fonts.googleapis.com/css?family=Raleway:400,700' rel='stylesheet' type='text/css'> -->
	<link href='https://fonts.googleapis.com/css?family=Lora:400,400italic' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Roboto:400,300">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
<!-- HTML5 shiv and Respond.js IE8 support of HTML5 elements and media queries -->
	<!--[if lt IE 9]>
	<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
	<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->
<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#main"><?php esc_html_e( 'Skip to content', 'jeetendra' ); ?></a>

	<header id="masthead" class="site-header" role="banner">
	<!-- navbar -->
				<div class="navbar-wrapper">
					<nav class="navbar navbar-default  navbar-fixed-top" role="navigation">
					  <div class="container">
					    <!-- Brand and toggle get grouped for better mobile display -->
					    <div class="navbar-header">
						      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse" aria-expanded="false">
							        <span class="sr-only">Toggle navigation</span>
							        <span class="icon-bar"></span>
							        <span class="icon-bar"></span>
							        <span class="icon-bar"></span>
						      </button>
						    	<a class="navbar-brand" href= "<?php echo esc_url( home_url( '/' ) ); ?>" > 
					     		<img src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/logo.png" alt="Site Logo" ></a>
					    </div> <!-- navbar-header -->

						<?php 
							wp_nav_menu(
									array(
											'theme_loction'		=>	'primary',
											'container'			=>	'nav',
											'container_class'	=>	'navbar-collapse collapse',
											'menu_class'		=>	'nav navbar-nav navbar-right'
										)
								);
						 ?>
					    <!-- Collect the nav links, forms, and other content for toggling -->
					  </div><!-- /.container-fluid -->
					</nav>
				</div> <!-- navbar-wrapper -->
			<div class="container">
				<div class="site-branding">
			
					<div class="row">
						<div class="col-sm-3">
							<?php if ( get_header_image() ) : ?>
							<?php
								/**
								 * Filter the default twentysixteen custom header sizes attribute.
								 *
								 * @since Twenty Sixteen 1.0
								 *
								 * @param string $custom_header_sizes sizes attribute
								 * for Custom Header. Default '(max-width: 709px) 85vw,
								 * (max-width: 909px) 81vw, (max-width: 1362px) 88vw, 1200px'.
								 */
								$custom_header_sizes = apply_filters( 'twentysixteen_custom_header_sizes', '(max-width: 709px) 85vw, (max-width: 909px) 81vw, (max-width: 1362px) 88vw, 1200px' );
							?>
							<div class="header-image">
								<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
									<img src="<?php header_image(); ?>" srcset="<?php echo esc_attr( wp_get_attachment_image_srcset( get_custom_header()->attachment_id ) ); ?>" sizes="<?php echo esc_attr( $custom_header_sizes ); ?>" width="<?php echo esc_attr( get_custom_header()->width ); ?>" height="<?php echo esc_attr( get_custom_header()->height ); ?>" alt="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>">
								</a>
							</div><!-- .header-image -->
							<?php endif; // End header image check. ?>
						</div> <!-- col-sm-3 -->
						<div class="col-sm-9">
							<?php
							if ( is_front_page() && is_home() ) : ?>
								<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
							<?php else : ?>
								<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
							<?php
							endif;

							$description = get_bloginfo( 'description', 'display' );
							if ( $description || is_customize_preview() ) : ?>
								<p class="site-description"><?php echo $description; /* WPCS: xss ok. */ ?></p>
							<?php
							endif; ?>
						</div> <!-- col-sm-9 -->
					</div>  <!-- Row -->	
		
				</div>  <!--  .site-branding -->
			</div><!-- container-->
		
	</header><!-- #masthead -->

	<div id="content" class="site-content">
