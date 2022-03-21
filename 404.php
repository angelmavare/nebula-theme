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

<main id="primary" class="site-main" style="background: url('<?php echo get_stylesheet_directory_uri(); ?>/assets/img/error_pages/404-BG.png'); background-size:cover; background-repeat:no-repeat; background-position:center center;background-attachment: fixed;">
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-md-8 pb-5 mb-4">
				<img class="d-block m-auto" style="width:70%" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/error_pages/404-frente.svg" alt="404 error">
				<h1 class="text-white text-center">Capitán, nos hemos perdido...</h1>
			</div>
		</div>


	</div>
	<section class="bg-white">
	<div class="container pt-4">
		 <!----TITLE SECTION BAR----->
		 <div class="">
                    <div class="title-section">
                        
                        <div class="line-gradient-title"></div>
                        <div class="content-title-section">
                            <h3 class="text-white">Tal vez desees echar un vistazo a estos otros temas que podrían interesarte</h3>
                        </div>
                    </div>
                </div>
                <!----END TITLE SECTION BAR----->
		<div class="row pb-5">
			<?php $args_recent = array(
				'post_type' => 'post',
				'post_status' => 'publish',
				'posts_per_page' => 3,
				/* 'offset' => 4 */
			);
			$arr_recent = new WP_Query($args_recent);

			if ($arr_recent->have_posts()) :    ?>
				<?php
				while ($arr_recent->have_posts()) :
					$arr_recent->the_post();
				?>
					<div class="col-md-4 mb-4">
						<div class="card h-100 vertical-post-related">
							<div class="post-feed">
								<a class="post-img-link" href="<?php the_permalink(); ?>">
									<picture>
										<img class="post-img" src="<?php echo $url_thumbnail = wp_get_attachment_url(get_post_thumbnail_id($post->ID), 'thumbnail'); ?>" alt="<?php the_title(); ?>">
									</picture>

								</a>
							</div>
							<div class="card-body">
								<a class="text-orange text-decoration-none" href="<?php echo get_home_url() . '/' . get_the_date('Y/m/d'); ?>"><?php echo get_the_date(); ?></a><span class="text-orange">/</span>
								<div class="text-orange d-inline-block">
									<?php
									$categories = get_the_category();
									$separator = ', ';
									$output = '';
									if (!empty($categories)) {
										foreach ($categories as $category) {
											$output .= '<a class="text-orange fw-bold text-decoration-none"  href="' . esc_url(get_category_link($category->term_id)) . '" alt="' . esc_attr(sprintf(__('View all posts in %s', 'textdomain'), $category->name)) . '">' . esc_html($category->name) . '</a>' . $separator;
										}
										echo trim($output, $separator);
									} ?>
								</div>
								<a href="<?php the_permalink(); ?>" style="text-decoration: none;">
									<h5 class="card-title"><?php the_title(); ?></h5>
								</a>
							</div>
							<div class="card-footer text-muted">
								<div class="ux-meta-post mt-2">
									<img class="ux-profile-sm d-none d-sm-inline-block" src="<?php print get_avatar_url(get_the_author_meta('user_email')); ?>" alt="<?php echo get_the_author(); ?>"><small class="ux-post-editor"> Por <a class="link-profile" href="<?php echo get_home_url(); ?>/author/<?php echo get_the_author_meta('user_nicename'); ?>"><?php echo get_the_author(); ?></a></small>
								</div>
							</div>
						</div>
					</div>



				<?php
				endwhile; ?>
			<?php endif; ?>
		</div>
		<div class="row pb-5 mb-4 text-center justify-content-center">
			<div class="col-md-12">
				<a href="<?php echo get_home_url();?>" class="btn btn-lg btn-gradient">Ir al inicio</a>
			</div>
		
		</div>
	</div>
	</section>
	



</main><!-- #main -->

<?php
get_footer();
