<?php

/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Nebula_Theme
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<!----BANNER----->
	<section class="banner pb-4">
		<div class="container bg-primary">

			<div class="row single-post-banner">
				<div class="col-md-12 p-0">
					<div class="single-post-img">
						<picture>
							<img class="card-img-source" src="<?php echo $url_thumbnail = wp_get_attachment_url(get_post_thumbnail_id($post->ID), 'thumbnail'); ?>" alt="<?php the_title(); ?>">
						</picture>
						<div class="single-img-overlay-bg"></div>
						<header class="content-text">
							
								<!-- <span class="text-light-orange">Some text for title</span><span class="text-orange"></span> -->
								<div class="text-orange">
									<?php
									$categories = get_the_category();
									$separator = ', ';
									$output = '';
									if (!empty($categories)) {
										foreach ($categories as $category) {
											$output .= '<a class="text-orange fw-bold text-decoration-none" style="text-shadow: 0px 0px 10px black;" href="' . esc_url(get_category_link($category->term_id)) . '" alt="' . esc_attr(sprintf(__('View all posts in %s', 'textdomain'), $category->name)) . '">' . esc_html($category->name) . '</a>' . $separator;
										}
										echo trim($output, $separator);
									} ?>
								</div>

								<?php the_title('<h1 class="text-white" style="text-shadow: 0px 0px 10px black;">', '</h1>'); ?>
								<div class="ux-meta-post mt-2">
									<img class="ux-profile-sm d-none d-sm-inline-block" src="<?php print get_avatar_url(get_the_author_meta('user_email')); ?>" alt="<?php echo get_the_author(); ?>">
									<small class="ux-post-editor text-white" style="text-shadow: 0px 0px 10px black;"> Por <a class="link-profile text-white" href="<?php echo get_home_url(); ?>/author/<?php echo get_the_author_meta('user_nicename'); ?>"><?php echo get_the_author(); ?></a> |</small>
									<a class="text-white text-decoration-none" style="text-shadow: 0px 0px 10px black;" href="<?php echo get_home_url() . '/' . get_the_date('Y/m/d'); ?>"><?php echo get_the_date(); ?></a>
								</div>
							

						</header>
					</div>

				</div>
			</div>



		</div>

	</section>
	<!----END BANNER----->
	<!----ENTRY----->
	<section class="entry">
		<div class="container">
			<!----TITLE SECTION BAR----->
			<div>
				<div>
					<?php dynamic_sidebar('social-post'); ?>
				</div>
				<div class="title-section mt-2">
					<img class="title-section-icon" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/SINGLE-4.svg" alt="gradient">
					<div class="line-gradient-title" style="height:21px;"></div>

				</div>
			</div>
			<!----END TITLE SECTION BAR----->

			<div class="row">
				<div class="col-md-9">
					<div class="entry-content">
						<?php
						the_content(
							sprintf(
								wp_kses(
									/* translators: %s: Name of current post. Only visible to screen readers */
									__('Continue reading<span class="screen-reader-text"> "%s"</span>', 'nebula'),
									array(
										'span' => array(
											'class' => array(),
										),
									)
								),
								wp_kses_post(get_the_title())
							)
						);

						wp_link_pages(
							array(
								'before' => '<div class="page-links">' . esc_html__('Pages:', 'nebula'),
								'after'  => '</div>',
							)
						);
						?>

					</div>
					<!-- Begin Tags -->
					<?php
					$tags = wp_get_post_tags($post->ID);
					$html = '<div class="after-post-tags">';
					foreach ($tags as $tag) {
						$tag_link = get_tag_link($tag->term_id);

						$html .= "<a href='{$tag_link}' title='{$tag->name} Tag' class='{$tag->slug}'><span class='badge bg-primary p-2 m-1'>";
						$html .= "{$tag->name}</span></a>";
					}
					$html .= '</div>';
					echo $html;
					?>
					<!-- End Tags -->

					<?php get_template_part('template-parts/author-info-partial'); ?>
				</div>
				<!--  SIDEBAR -->
				<div class="col-md-3">
					<?php get_sidebar(); ?>
				</div>
				<!-- END  SIDEBAR -->
			</div>

		</div>




	</section>
	<!----END Entry----->

</article><!-- #post-<?php the_ID(); ?> -->