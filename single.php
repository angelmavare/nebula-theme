<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package Nebula_Theme
 */

get_header();
?>

	<main id="primary" class="site-main post-content">

		<?php
		while ( have_posts() ) :
			the_post();

			get_template_part( 'template-parts/content-single', get_post_type() );

			/* the_post_navigation(
				array(
					'prev_text' => '<span class="nav-subtitle">' . esc_html__( 'Previous:', 'nebula' ) . '</span> <span class="nav-title">%title</span>',
					'next_text' => '<span class="nav-subtitle">' . esc_html__( 'Next:', 'nebula' ) . '</span> <span class="nav-title">%title</span>',
				)
			); */
			?>

			<section class="mt-4 pt-4 pb-4 mb-4 bg-gray">
				<div class="container">
				<?php 
				// If comments are open or we have at least one comment, load up the comment template.
				if ( comments_open() || get_comments_number() ) :
					comments_template();
				endif;
				?>
				</div>
			
			</section>
			

			
		<?php 
		endwhile; // End of the loop.
		?>

     	<?php get_template_part( 'template-parts/related-postlist-partial' );?>

	</main><!-- #main -->

<?php
get_footer();
