<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="maincontentcontainer">
 *
 * @package Quark
 * @since Quark 1.0
 */
?><!doctype html>
<!-- paulirish.com/2008/conditional-stylesheets-vs-css-hacks-answer-neither/ -->
<!--[if lt IE 7]> <html class="no-js lt-ie9 lt-ie8 lt-ie7" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 7]>    <html class="no-js lt-ie9 lt-ie8" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 8]>    <html class="no-js lt-ie9" <?php language_attributes(); ?>> <![endif]-->
<!-- Consider adding a manifest.appcache: h5bp.com/d/Offline -->
<!--[if gt IE 8]><!--> <html class="no-js" <?php language_attributes(); ?>> <!--<![endif]-->


<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<!-- Always force latest IE rendering engine (even in intranet) & Chrome Frame -->
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

	<meta http-equiv="cleartype" content="on">

	<!-- Responsive and mobile friendly stuff -->
	<meta name="HandheldFriendly" content="True">
	<meta name="MobileOptimized" content="320">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<link rel="profile" href="http://gmpg.org/xfn/11" />
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<div id="wrapper" class="hfeed site">

	<div class="visuallyhidden skip-link"><a href="#primary" title="<?php esc_attr_e( 'Skip to main content', 'quark' ); ?>"><?php esc_html_e( 'Skip to main content', 'quark' ); ?></a></div>
	<div id="site-socialmedia" class="site-header">
		<div class="row">
			<div class="col grid_12_of_12">
				<ul class="redes_sociais_header">
					<li class="youtube"><a target="_blank" href="#"></a></li>
					<li class="instagram"><a target="_blank" href="#"></a></li>
					<li class="twitter"><a target="_blank" href="#"></a></li>
					<li class="facebook"><a target="_blank" href="#"></a></li>
				</ul>
				<div class="carrinho-login">
					<span class="fa fa-sign-in"></span><a href="<?php echo esc_url( home_url( '/' ))."/minha-conta/"; ?>"> Login</a> | 
					<span class="fa fa-shopping-cart"></span> <a class="cart-contents" href="<?php echo WC()->cart->get_cart_url(); ?>" title="<?php _e( 'View your shopping cart' ); ?>"><?php echo sprintf (_n( '%d item', '%d items', WC()->cart->cart_contents_count ), WC()->cart->cart_contents_count ); ?> </a>	
				</div>
			</div>
		</div>
	</div>
	<div id="headercontainer">
		<header id="masthead" class="site-header" role="banner">
			<div class="row">
				<div class="col grid_4_of_12" style="padding:5px 0">
					<h1 style="margin:0">
						<a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name' ) ); ?>" rel="home">
							<img class="efeito-cinza" src="<?php echo dirname( get_bloginfo('stylesheet_url'))."/images/logo_exoteric.png"; ?>" alt="" />
						</a>
					</h1>
				</div> <!-- /.col.grid_5_of_12 -->

				<div class="col grid_8_of_12">
					<div class="row">
						<nav id="site-navigation" class="main-navigation header-padding" role="navigation">
							<h3 class="menu-toggle assistive-text"><?php esc_html_e( 'Menu', 'quark' ); ?></h3>
							<div class="assistive-text skip-link"><a href="#content" title="<?php esc_attr_e( 'Skip to content', 'quark' ); ?>"><?php esc_html_e( 'Skip to content', 'quark' ); ?></a></div>
							<div class="nav-menu">
								<ul>
									<li class="page_item"><a href="<?php echo esc_url( home_url( '/' ))."/contato/"; ?>">CONTATO</a></li>
									<li class="page_item"><a href="<?php echo esc_url( home_url( '/' ))."/corporativo/"; ?>">CORPORATIVO</a></li>
									<li class="page_item"><a href="<?php echo esc_url( home_url( '/' ))."/category/terapeutas/"; ?>">TERAPEUTAS</a></li>
									<li class="page_item"><a href="<?php echo esc_url( home_url( '/' ))."/categoria-produto/estetica/"; ?>">ESTÉTICA</a></li>
									<li class="page_item"><a href="<?php echo esc_url( home_url( '/' ))."/categoria-produto/cursos/"; ?>">CURSOS</a></li>
									<li class="page_item"><a href="<?php echo esc_url( home_url( '/' ))."/categoria-produto/psicoterapia/"; ?>">PSICOTERAPIA</a></li>
									<li class="page_item"><a href="<?php echo esc_url( home_url( '/' ))."/categoria-produto/massagens/"; ?>">MASSAGENS</a></li>
									<li class="page_item"><a href="<?php echo esc_url( home_url( '/' ))."/sobre/"; ?>">SOBRE</a></li>
								</ul>
							</div>
							<div class="menu-responsivo">
								<a class="menu-drop-header" href="#">Menu</a>
								
								<ul class="menu-drop">	
									<li class="page_item"><a href="<?php echo esc_url( home_url( '/' ))."/sobre/"; ?>">SOBRE</a></li>
									<li class="page_item"><a href="<?php echo esc_url( home_url( '/' ))."/categoria-produto/massagens/"; ?>">MASSAGENS</a></li>
									<li class="page_item"><a href="<?php echo esc_url( home_url( '/' ))."/categoria-produto/psicoterapia/"; ?>">PSICOTERAPIA</a></li>
									<li class="page_item"><a href="<?php echo esc_url( home_url( '/' ))."/categoria-produto/cursos/"; ?>">CURSOS</a></li>
									<li class="page_item"><a href="<?php echo esc_url( home_url( '/' ))."/categoria-produto/estetica/"; ?>">ESTÉTICA</a></li>
									<li class="page_item"><a href="<?php echo esc_url( home_url( '/' ))."/category/terapeutas/"; ?>">TERAPEUTAS</a></li>
									<li class="page_item"><a href="<?php echo esc_url( home_url( '/' ))."/corporativo/"; ?>">CORPORATIVO</a></li>
									<li class="page_item"><a href="<?php echo esc_url( home_url( '/' ))."/contato/"; ?>">CONTATO</a></li>
								</ul>								
							</div>								
						</nav> <!-- /.site-navigation.main-navigation -->
					</div>
				</div> <!-- /.col.grid_7_of_12 -->
			</div>
		</header> <!-- /#masthead.site-header.row -->

	</div> <!-- /#headercontainer -->

	<div id="maincontentcontainer">
		<?php	do_action( 'quark_before_woocommerce' ); ?>