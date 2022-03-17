<?php if (have_posts()): while (have_posts()) : the_post(); ?>
        <?php if(!get_the_category()) : ?>
        <!--  card -->
		<article class="card mb-4 horizontal-post-feed">
                            <div class="row g-0">
                                <div class="col-md-4 post-feed">
                                    <a href="<?php the_permalink(); ?>" class="h-100  post-bottom-left post-top-left">
                                        <picture>
											<?php $url_thumbnail = wp_get_attachment_url( get_post_thumbnail_id($post->ID), 'thumbnail' ); 
											if($url_thumbnail):
												$url_thumbnail;
											else:
												$url_thumbnail = get_stylesheet_directory_uri().'/assets/img/img-test-1.jpg';
											endif;
											
											?>
                                            <img class="post-img" src="<?php echo $url_thumbnail; ?>" alt="">
                                        </picture>
                                        
                                    </a>

                                </div>
                                <div class="col-md-8">
                                    <div class="card-body">
                                        
                                        
                                        <a href="<?php the_permalink(); ?>" class="link-text">
                                            <h5 class="card-title" style="text-decoration: none;"><?php the_title(); ?></h5>
                                        
                                            <p class="card-text"><?php echo substr(get_the_excerpt(), 0, 300); ?>
                                            </p>
                                        </a>
                                        
                                    </div>
                                </div>
                            </div>
                        </article>
                        <!--  end card -->
        <?php else : ?>
        <!--  card -->
		<article class="card mb-4 horizontal-post-feed">
                            <div class="row g-0">
                                <div class="col-md-4 post-feed">
                                    <a href="<?php the_permalink(); ?>" class="h-100  post-bottom-left post-top-left">
                                        <picture>
											<?php $url_thumbnail = wp_get_attachment_url( get_post_thumbnail_id($post->ID), 'thumbnail' ); 
											if($url_thumbnail):
												$url_thumbnail;
											else:
												$url_thumbnail = get_stylesheet_directory_uri().'/assets/img/img-test-1.jpg';
											endif;
											
											?>
                                            <img class="post-img" src="<?php echo $url_thumbnail; ?>" alt="">
                                        </picture>
                                        
                                    </a>

                                </div>
                                <div class="col-md-8">
                                    <div class="card-body">
                                        <div class="mb-2">
                                            <a class="text-orange text-decoration-none" href="<?php echo get_home_url().'/'.get_the_date('Y/m/d'); ?>"><?php echo get_the_date(); ?></a><span class="text-orange">/</span>
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
        <?php endif; ?>			
	<?php endwhile; ?>

	<?php else: ?>

	<!-- article -->
		<article>
			<h2>No hay Post disponibles</h2>
		</article>
	<!-- /article -->

<?php endif; ?>