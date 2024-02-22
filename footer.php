<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package STOICA_ABOGADOS
 */

?>

</div>
<footer class="page-footer footer-preset-5" id="footer">
	<div class="footer-body bgc-gray-darker">
		<div class="container">
			<div class="row">
				<div class="col-lg-4 col-sm-6 col-xs-12 __block-wrapper-1">
				<div class="footer-widget-about">
					<?php dynamic_sidebar( 'footer-left-sidebar' ); ?>
				</div>
				</div>
				<div class="col-lg-4 col-sm-6 col-xs-12 __block-wrapper-2">
				<div class="footer-widget-about">
					<?php dynamic_sidebar( 'footer-middle-sidebar' ); ?>
				</div>
				</div>
				<div class="col-lg-4 col-sm-6 col-xs-12 __block-wrapper-4">
					<?php dynamic_sidebar( 'footer-address-sidebar' ); ?>
				</div>
			</div>
		</div>
	</div>
	<div class="footer-foot-3 bgc-gray-darkest">
		<div class="container">
			<div class="row">
				<div class="__content-left">
				<p class="font-heading fz-6-s"><?php dynamic_sidebar( 'footer-bottom-sidebar' ) ?></p>
				</div>
				<div class="__content-right">
				<nav class="footer-nav">
					<?php
					wp_nav_menu(array(
						'theme_location' => 'footer-menu',
						'container' => false,
						'depth' => 1,
						'menu_class' => 'font-heading',
					))
					?>
				</nav>
				</div>
			</div>
		</div>
	</div>
</footer>
</div>

</div><!-- #page-body -->
<button id="back-to-top-btn"><i class="icon-up-open-big"></i></button> 

<?php wp_footer(); ?>
</body>
</html>
