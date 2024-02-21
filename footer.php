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
					<div class="brand"><a class="megatron inline size-2" href="index.html"><img alt="Stoica abogados, Derecho inmobiliario Madrid, Abogados para Agencias Inmobiliarias Madrid" name="" src="img/stoica_abogados-derecho_inmobiliario_madrid-abogados_en_derecho_inmobiliario_en_madrid_3.png" title="Stoica abogados, Derecho inmobiliario Madrid, Abogados para Agencias Inmobiliarias Madrid"/> </a></div>
					<p align="justify" style="font-size: 13px; line-height: 22px ">STOICA ABOGADOS es un despacho cuya filosof&iacute;a se basa en el rigor t&eacute;cnico y el trato personalizado al cliente. Nuestro despacho de abogados est&aacute; comprometido con los m&aacute;s altos valores y &eacute;tica profesional. Creamos relaciones de confianza con nuestros clientes y les brindamos soluciones efectivas a sus necesidades legales.</p>
					<p class="common-serif __caption " style="font-size: 16px; color: #d2ae6d; margin-bottom: 1px; align-content: 1px ">Vivir honestamente, no da&ntilde;ar a nadie y dar a cada uno lo que es suyo.</p>
					<p align="justify" style="font-size: 13px; padding-top: -20">&ndash; Cneo Domicio Annio Ulpiano</p>
					<!--<ul class="social circle"> <li><a href="https://www.facebook.com/oliviadefalconi.WeddingPlanner" target="_blank"><i class="icon icon-facebook-1"></i></a></li><li><a href="https://www.instagram.com/oliviadefalconi.weddingplanner/" target="_blank"><i class="icon icon-instagrem"></i></a></li><li><a href="https://www.youtube.com/channel/UC2utBbx3xU-E_piYILGR4AQ" target="_blank"><i class="icon fa fa-youtube-play"></i></a></li></ul> --> 
				</div>
				</div>
				<div class="col-lg-4 col-sm-6 col-xs-12 __block-wrapper-2">
				<div class="footer-widget-about">
					<h4>UB&Iacute;CANOS</h4>
					<div class="widget widget-gallery"><iframe allowfullscreen="" height="330" loading="lazy" referrerpolicy="no-referrer-when-downgrade" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3034.383520946752!2d-3.3623299825561523!3d40.48890150000002!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd4249c004b0ab83%3A0x49c77c4d9102086b!2sStoica%20Abogados!5e0!3m2!1ses-419!2spe!4v1653590056563!5m2!1ses-419!2spe" style="border:0;" width="100%"></iframe></div>
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

<button id="back-to-top-btn"><i class="icon-up-open-big"></i></button> 

<?php wp_footer(); ?>
</body>
</html>
