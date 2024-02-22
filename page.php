<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package STOICA_ABOGADOS
 */

get_header();
?>
		<header class="page-header common-header bgc-dark-o-3 large">
            <div data-parallax="scroll" data-image-src="<?php the_post_thumbnail_url() ?>" data-speed="0.3" class="parallax-background"></div>
            <div class="container text-center cell-vertical-wrapper">
               <div class="cell-middle">
                  <h1 class="text-responsive size-l nmb" style="font-size: 40px"> <?php the_title(); ?></h1>
               </div>
            </div>
            <div class="ab-bottom col-xs-12">
               <div class="container">
                  <div class="breadcrumb bgc-dark-o-6"><span class="__title font-heading fz-6-s"> Estas Aquí:</span><span class="__content italic font-serif fz-6-ss"><span><a href="<?php echo esc_url( home_url( '/' ) ); ?>"> Inicio</a></span><span><a href="<?php the_permalink() ?>"> <?php the_title(); ?> </a></span><span></span></span></div>
               </div>
            </div>
        </header>
		<main id="primary" class="site-main">
			<?php
			while ( have_posts() ) :
				the_post();

				get_template_part( 'template-parts/content', 'page' );

				// If comments are open or we have at least one comment, load up the comment template.
				if ( comments_open() || get_comments_number() ) :
					comments_template();
				endif;

			endwhile; // End of the loop.
			?>
		</main>

<?php
//get_sidebar();
get_footer();
