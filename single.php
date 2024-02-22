<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
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
			<main id="primary" class="site-main dd">
				<section class="page-section bgc-light one-child">
				<div class="container">
					<div class="row portfolio-single-detail pb-40">
						<div class="col-lg-8 col-md-8 col-xs-8 portfolio-single-content pb-30">

						<?php
						while ( have_posts() ) :
							the_post();

							get_template_part( 'template-parts/content', get_post_type() );

							the_post_navigation(
								array(
									'prev_text' => '<span class="nav-subtitle">' . esc_html__( 'Previous:', 'stoica-abogados' ) . '</span> <span class="nav-title">%title</span>',
									'next_text' => '<span class="nav-subtitle">' . esc_html__( 'Next:', 'stoica-abogados' ) . '</span> <span class="nav-title">%title</span>',
								)
							);

							// If comments are open or we have at least one comment, load up the comment template.
							if ( comments_open() || get_comments_number() ) :
								comments_template();
							endif;

						endwhile; // End of the loop.
						?>
					</div>

					<div class="col-lg-4 col-md-4 col-xs-4 portfolio-single-sidebar">
						<?php
						get_sidebar();
						?>
					</div>
				</div>
				</section>
			</main><!-- #main -->

<?php
get_footer();
