<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Storexist
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<div class="mobile-navigation">

	<?php wp_nav_menu( array( 'theme_location' => 'menu-1', 'menu_class' => '', 'container' => '', 'walker' => new Storexist_Walker_Nav_Menu() ) ); ?>

	<ul>
		<li class="menu-item"><a href="#"><i class="icon-user"></i> <span>Login</span></a></li>
		<li class="menu-item"><a href="#">About</a></li>
		<li class="menu-item"><a href="#">Contact</a></li>
	</ul>

</div><!-- .mobile-navigation -->

<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'storexist' ); ?></a>

	<header id="masthead" class="site-header" role="banner">
		<div class="header-top">
			<div class="container">
				<div class="row">
					<div class="col-xs-12">
						<div class="social-icon">
							<ul class="social-menu">
								<li class="menu-item"><a href="#"><i class="icon-social-facebook"></i></a></li>
								<li class="menu-item"><a href="#"><i class="icon-social-twitter"></i></a></li>
								<li class="menu-item"><a href="#"><i class="icon-social-instagram"></i></a></li>
								<li class="menu-item"><a href="#"><i class="icon-social-linkedin"></i></a></li>
							</ul>
						</div><!-- .social-icon -->

						<div class="top-navigation">
							<ul class="top-menu">
								<li class="menu-item"><a href="#"><i class="icon-user"></i> <span>Login</span></a></li>
								<li class="menu-item"><a href="#">About</a></li>
								<li class="menu-item"><a href="#">Contact</a></li>
							</ul>
						</div><!-- .top-navigation -->

						<div class="clearfix"></div>
					</div>
				</div><!-- .row -->
			</div><!-- /.container -->
		</div><!-- /.header-top -->

		<div class="header-center">
			<div class="container">
				<div class="row">
					<div class="col-xs-12">
						<div class="header-center-inner">
							<div class="site-branding">
								<div class="site-branding-inner">
								<?php
								if ( is_front_page() && is_home() ) : ?>
									<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
								<?php else : ?>
									<p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
								<?php
								endif;

								$description = get_bloginfo( 'description', 'display' );
								if ( $description || is_customize_preview() ) : ?>
									<p class="site-description"><?php echo $description; /* WPCS: xss ok. */ ?></p>
								<?php
								endif; ?>

									<!-- <a href="#" class="site-logo">
										<img src="http://storefy-demo.detheme.com/wp-content/uploads/2016/12/logo-orange.png" alt="">
									</a> -->
								</div><!-- .site-branding-inner -->
							</div><!-- .site-branding -->

							<div class="mobile-trigger">
								<i class="icon-menu"></i>
							</div>

							<div class="site-search">
								<form action="<?php echo home_url('/'); ?>">
									<input type="text" name="s" class="search-text" placeholder="<?php _e("Search for Products ...", 'storexist'); ?>">
									<button type="submit" class="search-button"><i class="icon-magnifier"></i></button>
								</form>
							</div><!-- /.site-search -->

							<div class="site-ephone">
								<div class="ephone-phone">
									<div class="ephone-icon">
										<i class="icon-phone"></i>
									</div>
									<div class="ephone-text">
										<div class="ephone-text-label">+62 146 212 84</div>
										<div class="ephone-text-desc">Support Any Time</div>
									</div>
								</div>
								<div class="ephone-mail">
									<div class="ephone-icon">
										<i class="icon-envelope"></i>
									</div>
									<div class="ephone-text">
										<div class="ephone-text-label">support@storexist.com</div>
										<div class="ephone-text-desc">Support Any Time</div>
									</div>
								</div>
							</div><!-- /.site-ephone -->

							<div class="site-cart">
								<a href="#" class="site-cart-button">
									<i class="icon-basket-loaded icons"></i>
									<span class="cart-text"><?php _e( 'Cart', 'storexist' ); ?></span>
									<small class="cart-count">1</small>
								</a>
							</div><!-- .site-cart -->
						</div><!-- .header-center-inner -->
					</div>
				</div><!-- .row -->
			</div><!-- /.container -->
		</div><!-- /.header-center -->

		<div class="header-bottom">
			<nav id="site-navigation" class="main-navigation" role="navigation">
				<div class="container">
					<?php wp_nav_menu( array( 'theme_location' => 'menu-1', 'menu_class' => 'primary-menu' ) ); ?>
				</div><!-- /.container -->
			</nav><!-- #site-navigation -->
		</div><!-- /.header-bottom -->

	</header><!-- #masthead -->

	<div id="content" class="site-content">
		<div class="container">
			<div class="row site-content-row">
				<div class="col-md-8">
