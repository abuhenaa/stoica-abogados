<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package STOICA_ABOGADOS
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page-body" class="page-content page-body">
	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'stoica-abogados' ); ?></a>

	<div class="main-nav nav-absolute bgc-light">
            <div class="__header bgc-gray-darkest">
               <div class="container">
                  <div class="nav-content-wrapper">
                     <div class="pull-left">
                        <div class="nav-info nav-item mr-20"><a href="https://www.facebook.com/" target="_blank"><img alt="Cambiar imagen" height="20px" onmouseout="this.src='<?php echo get_template_directory_uri() ?>/assets/img/2.png';" onmouseover="this.src='<?php echo get_template_directory_uri() ?>/assets/img/1.png';" src="<?php echo get_template_directory_uri() ?>/assets/img/2.png" width="20px"/> </a></div>
                        <div class="nav-info nav-item mr-20"><a href="https://www.instagram.com/" target="_blank"><img alt="Cambiar imagen" height="20px" onmouseout="this.src='<?php echo get_template_directory_uri() ?>/assets/img/6.png';" onmouseover="this.src='<?php echo get_template_directory_uri() ?>/assets/img/5.png';" src="<?php echo get_template_directory_uri() ?>/assets/img/6.png" width="20px"/> </a></div>
                        <div class="nav-info nav-item mr-20"><a href="https://www.youtube.com/" target="_blank"><img alt="Cambiar imagen" height="20px" onmouseout="this.src='<?php echo get_template_directory_uri() ?>/assets/img/8.png';" onmouseover="this.src='<?php echo get_template_directory_uri() ?>/assets/img/7.png';" src="<?php echo get_template_directory_uri() ?>/assets/img/8.png" width="20px"/> </a></div>
                     </div>
                     <div class="pull-right" style="font-family:Arial, Helvetica, sans-serif">
                        <div class="nav-info nav-item mr-20" style=" font-size:13px; color:#ffffff "><img alt="" class="alignnone size-full wp-image-2567" height="21px" src="<?php echo get_template_directory_uri() ?>/assets/img/iconos/what.png" width="21px"/> <a href="tel:+34642640834 " style="font-family:Montserrat, sans-serif"> 642 640 834 </a></div>
                        <div class="nav-info nav-item mr-20" style=" font-size:13px; color:#ffffff "><a href="tel:+34642640834 " style="font-family:Montserrat, sans-serif"><img alt="" class="alignnone size-full wp-image-2567" height="22px" src="<?php echo get_template_directory_uri() ?>/assets/img/iconos/corre.png" width="22px"/> </a><a href="mailto:info@stoicaabogados.es" style="font-family:Montserrat, sans-serif"> info@stoicaabogados.es </a></div>
                     </div>
                  </div>
               </div>
            </div>
            <a href="mailto:info@stoicaabogados.es" style="font-family:Montserrat, sans-serif"> </a> 
            <div class="__middle">
               <div class="container">
                  <div class="nav-content-wrapper">
                     <div class="pull-left">
                        <div class="megatron inline logo-light">
                           <div class="cell-vertical-wrapper">
                              <div class="cell-middle">
								<?php
								$custom_logo_id = get_theme_mod( 'custom_logo' );
								$image = wp_get_attachment_image_src( $custom_logo_id , 'full' );
								 ?>
                                 <div class="brand"><a href="<?php echo home_url() ?>"><img alt="Stoica abogados, Derecho inmobiliario Madrid, Abogados para Agencias Inmobiliarias Madrid" name="" src="<?php echo $image[0]; ?>" title="Stoica abogados, Derecho inmobiliario Madrid, Abogados para Agencias Inmobiliarias Madrid" width="320px"/> </a></div>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="pull-right">
						<?php
							wp_nav_menu(array(
								'theme_location' => 'main-menu',
								'container' => 'nav',
								'container_class' => 'os-menu main-menu text-center',
								'menu_class' => ''
							));
						?>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <div class="main-nav small-nav bgc-light nav-fixed ">
            <div class="container">
               <div class="nav-content-wrapper">
                  <div class="pull-left">
                     <div class="megatron inline">
                        <div class="cell-vertical-wrapper">
                           <div class="cell-middle">
                              <div class="brand"><a href="<?php echo home_url() ?>"><img alt="Stoica abogados, Derecho inmobiliario Madrid, Abogados para Agencias Inmobiliarias Madrid" name="" src="<?php echo $image[0]; ?>" title="Stoica abogados, Derecho inmobiliario Madrid, Abogados para Agencias Inmobiliarias Madrid" width="300px"/> </a></div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="pull-right visible-lg">
				  		<?php
							wp_nav_menu(array(
								'theme_location' => 'main-menu',
								'container' => 'nav',
								'container_class' => 'os-menu main-menu',
								'menu_class' => ''
							));
						?>
                  </div>
                  <div class="pull-right nav-item hidden-lg"></div>
               </div>
            </div>
         </div>
         <div class="mobile-nav">
            <div class="brand"><a class="megatron" href="<?php echo home_url() ?>"><img alt="Stoica abogados, Derecho inmobiliario Madrid, Abogados para Agencias Inmobiliarias Madrid" name="" src="<?php echo $image[0]; ?>" title="Stoica abogados, Derecho inmobiliario Madrid, Abogados para Agencias Inmobiliarias Madrid" width="200"/> </a></div>
            <?php
				wp_nav_menu(array(
					'theme_location' => 'main-menu',
					'container' => 'nav',
					'container_class' => 'os-menu mobile-menu',
					'menu_class' => ''
				));
			?>
            <!--<div class="social-area"> <ul class="social circle gray"> <li><a href="https://www.facebook.com/oliviadefalconi.WeddingPlanner" target="_blank"><i class="icon icon-facebook-1"></i></a></li><li><a href="https://www.instagram.com/oliviadefalconi.weddingplanner" target="_blank"><i class="icon icon-instagrem"></i></a></li><li><a href="https://www.linkedin.com/oliviadefalconi.weddingplanner" target="_blank"><i class="icon icon-linkedin-1"></i></a></li></ul> </div>--> 
         </div>

