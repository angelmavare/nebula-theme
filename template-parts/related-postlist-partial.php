<?php

/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package uxtify
 */

?>
<section class="mt-1 mb-5 pb-4 related-post">
    <div class="container">
        <div class="row row-cols-1 row-cols-md-3 g-4">
            <div class="col-md-12 text-center">
                <h3><strong>Entradas relacionadas</strong></h3>
            </div>

            <?php
            $categories = get_the_category();
            $categories_slug = [];

            if (!empty($categories)) {
                foreach ($categories as $category) {
                    array_push($categories_slug, $category->slug);
                }
            }
            /* echo json_encode($categories_slug); */
            ?>
            <?php $args_relacionados = array(
                'post_type' => 'post',
                'tax_query' => array(
                    array(
                        'taxonomy' => 'category',
                        'field' => 'slug',
                        'terms' => $categories_slug
                    ),
                ),
                'post_status' => 'publish',
                'posts_per_page' => 3,
                'post__not_in' => array(get_the_ID()),
            );
            $arr_relacionados = new WP_Query($args_relacionados);
            if ($arr_relacionados->have_posts()) :    ?>
                <?php while ($arr_relacionados->have_posts()) :
                    $arr_relacionados->the_post();
                ?>
                    <div class="col">
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
            <?php endif;
            wp_reset_query(); ?>


        </div>
    </div>
</section>