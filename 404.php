<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package Nebula_Theme
 */

get_header();
?>

	<main id="primary" class="site-main" style="background: url('<?php echo get_stylesheet_directory_uri(); ?>/assets/img/error_pages/404-BG.png'); background-size:cover; background-repeat:no-repeat; background-position:center center;">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-md-8 pb-5">
					<img class="d-block m-auto" style="width:70%" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/error_pages/404-frente.svg" alt="404 error">
					<h1 class="text-white text-center">Hey perrito! por aqui no es</h1>
				</div>
			</div>
		</div>

		

	</main><!-- #main -->

<?php
get_footer();
