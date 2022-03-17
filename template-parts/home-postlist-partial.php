<section class="postlist">
    <div class="container">
        <!----TITLE SECTION BAR----->
        <div>
            <div class="title-section mt-5">
                <img class="title-section-icon" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/card-gradient2.svg" alt="gradient">
                <div class="line-gradient-title"></div>
                <div class="content-title-section">
                    <h2 class="text-white">Lo más nuevo</h2>
                </div>
            </div>
        </div>
        <!----END TITLE SECTION BAR----->

        <div class="row">
            <div class="col-md-9">

                <?php $args_recent = array(
                    'post_type' => 'post',
                    'post_status' => 'publish',
                    'posts_per_page' => 6,
                    'offset' => 4
                );
                $arr_recent = new WP_Query($args_recent);

                if ($arr_recent->have_posts()) :    ?>
                    <?php
                    while ($arr_recent->have_posts()) :
                        $arr_recent->the_post();
                    ?>
                        <!--  card -->
                        <article class="card mb-4 horizontal-post-feed">
                            <div class="row g-0">
                                <div class="col-md-4 post-feed">
                                    <a href="<?php the_permalink(); ?>" class="h-100  post-bottom-left post-top-left">
                                        <picture>
                                            <img class="post-img" src="<?php echo $url_thumbnail = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'medium-recentpost')[0]; ?>" alt="">
                                        </picture>

                                    </a>

                                </div>
                                <div class="col-md-8">
                                    <div class="card-body">
                                        <div class="mb-2">
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
                                            <!-- <a class="text-orange fw-bold text-decoration-none" href="#">Categoria</a> -->
                                        </div>

                                        <a href="<?php the_permalink(); ?>" class="link-text">
                                            <h5 class="card-title" style="text-decoration: none;"><?php the_title(); ?></h5>

                                            <p class="card-text"><?php echo substr(get_the_excerpt(), 0, 300); ?>
                                            </p>
                                        </a>
                                        <div class="ux-meta-post mt-2">
                                            <img class="ux-profile-sm d-none d-sm-inline-block" src="<?php print get_avatar_url(get_the_author_meta('user_email')); ?>" alt="<?php echo get_the_author(); ?>"><small class="ux-post-editor"> Por <a class="link-profile" href="<?php echo get_home_url(); ?>/author/<?php echo get_the_author_meta('user_nicename'); ?>"><?php echo get_the_author(); ?></a></small>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </article>
                        <!--  end card -->
                    <?php
                    endwhile; ?>
                <?php endif; ?>

                <div class="col-md-12 text-center">
                    <a href="<?php echo get_home_url(); ?>/publicaciones/" class="btn btn-lg btn-gradient">Ver todos</a>
                </div>
            </div>
            <!--  SIDEBAR -->
            <div class="col-md-3">
                <?php get_sidebar(); ?>

            </div>
            <!-- END  SIDEBAR -->
        </div>

    </div>




</section>