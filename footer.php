<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Storexist
 */

?>

		</div><!-- /.container -->

	</div><!-- #content -->

	<footer id="colophon" class="site-footer" role="contentinfo" style="background-image: url(https://btqwp.preview.decentthemes.com/wp-content/uploads/2016/09/bg-image1.png);">

		<div class="container">

			<div class="site-footer__top">

				<div class="row widget-area">

					<div class="col-sm-6 col-md-3">
						<section class="site-widget widget">
							<h2 class="widget-title">Our Services</h2>
							<div class="menu-services-container">
								<ul class="menu-services">
									<li class="menu-item"><a href="#">About Us</a></li>
									<li class="menu-item"><a href="#">Order History</a></li>
									<li class="menu-item"><a href="#">Return</a></li>
									<li class="menu-item"><a href="#">Customer Services</a></li>
									<li class="menu-item"><a href="#">Term & Condistions</a></li>
								</ul>
							</div>
						</section>
					</div>

					<div class="col-sm-6 col-md-3">
						<section class="site-widget widget">
							<h2 class="widget-title">Our Services</h2>
							<div class="menu-services-container">
								<ul class="menu-services">
									<li class="menu-item"><a href="#">About Us</a></li>
									<li class="menu-item"><a href="#">Order History</a></li>
									<li class="menu-item"><a href="#">Return</a></li>
									<li class="menu-item"><a href="#">Customer Services</a></li>
									<li class="menu-item"><a href="#">Term & Condistions</a></li>
								</ul>
							</div>
						</section>
					</div>

					<div class="col-sm-6 col-md-3">
						<section class="site-widget widget">
							<h2 class="widget-title">Our Services</h2>
							<div class="menu-services-container">
								<ul class="menu-services">
									<li class="menu-item"><a href="#">About Us</a></li>
									<li class="menu-item"><a href="#">Order History</a></li>
									<li class="menu-item"><a href="#">Return</a></li>
									<li class="menu-item"><a href="#">Customer Services</a></li>
									<li class="menu-item"><a href="#">Term & Condistions</a></li>
								</ul>
							</div>
						</section>
					</div>

					<div class="col-sm-6 col-md-3">
						<section class="site-widget widget">
							<h2 class="widget-title">Our Services</h2>
							<div class="textwidget">
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consequatur perspiciatis modi magnam, magni vero nam molestias sit in dicta recusandae accusantium id, saepe animi odio sequi ea odit qui porro.</p>
							</div>
						</section>
					</div>

				</div>

			</div><!-- /.site-footer__top -->

			<div class="site-info">
				<a href="<?php echo esc_url( __( 'https://wordpress.org/', 'storexist' ) ); ?>"><?php printf( esc_html__( 'Proudly powered by %s', 'storexist' ), 'WordPress' ); ?></a>
				<span class="sep"> | </span>
				<?php printf( esc_html__( 'Theme: %1$s by %2$s.', 'storexist' ), 'storexist', '<a href="https://automattic.com/" rel="designer">Themexist</a>' ); ?>
			</div><!-- .site-info -->

		</div><!-- /.container -->

	</footer><!-- #colophon -->

</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
