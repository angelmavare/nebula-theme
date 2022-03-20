<?php
/**
 * The sidebar containing the main widget area
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Nebula_Theme
 */

/* if ( ! is_active_sidebar( 'sidebar-1' ) ) {
	return;
} */
?>

<aside id="secondary" class="widget-area">
	<!-- Begin Tags -->
					<div class="pt-4 ">
					<?php
					/* $tags = wp_get_post_tags($post->ID);
					$html = '<div class="after-post-tags">';
					foreach ($tags as $tag) {
						$tag_link = get_tag_link($tag->term_id);

						$html .= "<a href='{$tag_link}' title='{$tag->name} Tag' class='{$tag->slug} p-1'><span class='badge bg-primary p-2 mb-1'>";
						$html .= "{$tag->name}</span></a>";
					}
					$html .= '</div>';
					echo $html; */
					?>
					<br>
					</div>
					<!-- End Tags -->
	<?php dynamic_sidebar( 'sidebar-1' ); ?>

	<script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
							<!-- Anuncios Sidebar -->
							<ins class="adsbygoogle"
								style="display:block"
								data-ad-client="ca-pub-8275348615930938"
								data-ad-slot="2126506017"
								data-ad-format="auto"
								data-full-width-responsive="true"></ins>
							<script>
								(adsbygoogle = window.adsbygoogle || []).push({});
							</script>
</aside><!-- #secondary -->
