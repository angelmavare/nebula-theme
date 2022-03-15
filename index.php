<?php
/**
 * Template Name: Home
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Nebula_Theme
 */

get_header();
?>
<main>
		<?php get_template_part( 'template-parts/home-banner-partial' ); ?>
        <!----POSTLIST----->
        <?php get_template_part( 'template-parts/home-postlist-partial' ); ?>
        <!----END POSTLIST----->

        <section>

        </section>
</main>
	        

<?php
get_sidebar();
get_footer();
