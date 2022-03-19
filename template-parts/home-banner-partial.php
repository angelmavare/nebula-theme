<!----BANNER----->
<div class="wrap-banner">
            <section class="banner bg-darkprimary" >
                <div class="container" >
				<?php $args_hero = array(
				'post_type' => 'post',
				'post_status' => 'publish',
				'posts_per_page' => 4,
				);
				$arr_hero = new WP_Query( $args_hero );
						
				if ( $arr_hero->have_posts() ) : 
					$count_post = 0;   
					while ( $arr_hero->have_posts() ) :
					$arr_hero->the_post();
					?>  

					<?php if($count_post == 0): ?>
                    <article class="row principal-card-row post-feed">
                        <div class="col-md-6 p-0 principal-card-img">
                                <a href="<?php the_permalink(); ?>" class="post-top-left post-bottom-left h-100">
                                    <picture>
                                        <img class="principal-card-img-source" src="<?php echo $url_thumbnail = wp_get_attachment_url( get_post_thumbnail_id($post->ID), 'thumbnail' );?>" alt="">
                                    </picture>
                                    
                                </a>
    
    
                        </div>
                        <div class="col-md-6 principal-card-text gradient-bg-animation">
                            
                            <a href="<?php the_permalink(); ?>" class="p-0 d-flex link-text">
                                <header class="content-text content-principal">
                                    
                                        
                                    <span class="text-light-orange text-decoration-none"><?php echo get_the_date(); ?></span><span class="text-light-orange">/</span>
                                    <div class="d-inline-block text-orange">
									<?php 
									$categories = get_the_category();
									$separator = ' , ';
									$output = '';
									if ( ! empty( $categories ) ) {
										foreach( $categories as $category ) {
											$output .= '<span class="text-light-orange fw-bold text-decoration-none">' . esc_html( $category->name ). '</span>' . $separator;
										}
										echo trim( $output, $separator );
									} ?>
                                    </div>
									<!-- <span class="text-light-orange fw-bold text-decoration-none">Categoria</span> -->
                                    <h1 class="text-white"><?php the_title(); ?></h1>
                                    <p class="text-white serif-text"><?php echo substr(get_the_excerpt(), 0,600)."... "?></p>
                                        <div class="ux-meta-post mt-2">
                                            <img class="ux-profile-sm d-none d-sm-inline-block" src="<?php print get_avatar_url(get_the_author_meta( 'user_email' )); ?>" alt=""><small class="ux-post-editor text-white"> Por <span class="link-profile text-white" ><?php echo get_the_author(); ?></span></small>
                                         </div>
                                </header>
                            </a>    
                            
                        </div>
                    </article>
					<?php endif; ?>
					<?php if($count_post == 1): ?>
                    <div class="row secondary-card-row">
                        <article class="col-md-4 secondary-card-text post-feed ">
                            
                            <a href="<?php the_permalink(); ?>" class="post-bottom-left">
                               
                                <picture>
                                    <img class="secondary-card-img-source" src="<?php echo $url_thumbnail = wp_get_attachment_url( get_post_thumbnail_id($post->ID), 'thumbnail' );?>" alt="">
                                </picture>
                                <div class="overlay-bg"></div>
                                <header class="content-text">
                                    <h3 class="text-white"><?php the_title(); ?></h3>
                                </header>
                                
                            </a>
                            
                        </article>
						<?php endif; ?>
						<?php if($count_post == 2): ?>
                        <article class="col-md-4 secondary-card-text post-feed">
                            <a href="<?php the_permalink(); ?>">
                                <picture>
                                    <img class="secondary-card-img-source" src="<?php echo $url_thumbnail = wp_get_attachment_url( get_post_thumbnail_id($post->ID), 'thumbnail' );?>" alt="">
                                </picture>
                                <div class="overlay-bg"></div>
                                <header class="content-text">
                                    <h3 class="text-white"><?php the_title(); ?></h3>
                                </header>
                            </a>
                            
                        </article>
						<?php endif; ?>
						<?php if($count_post == 3): ?>
                        <article class="col-md-4 secondary-card-text post-feed post-right">
                            <a href="<?php the_permalink(); ?>" class="post-bottom-right">
                                <picture>
                                    <img class="secondary-card-img-source" src="<?php echo $url_thumbnail = wp_get_attachment_url( get_post_thumbnail_id($post->ID), 'thumbnail' );?>" alt="">
                                </picture>
                                <div class="overlay-bg"></div>
                                <header class="content-text">
                                    <h3 class="text-white"><?php the_title(); ?></h3>
                                </header>
                            </a>
                        </article>
						
                    </div>
					<?php endif; ?>
						<?php
						$count_post++;
					endwhile; 
					endif; 
					?>
    
                    <div class="category-tags pt-4">
                        <i class="fa-solid fa-circle"></i> <span class="title-category-tags text-white">Categorías: </span> 
						<?php
						// Get the current queried object
						$term    = get_queried_object();
						$term_id = ( isset( $term->term_id ) ) ? (int) $term->term_id : 0;

						$categories = get_categories( array(
							'taxonomy'   => 'category', // Taxonomy to retrieve terms for. We want 'category'. Note that this parameter is default to 'category', so you can omit it
							'orderby'    => 'name',
							'parent'     => 0,
							'hide_empty' => 0, // change to 1 to hide categores not having a single post
							'exclude' => '1',
						) );
						?>
						<?php
						$count_categories = count($categories);
						$count_category = 1;
						foreach ( $categories as $category ): 
						$category_id = 'category_'.$category->cat_ID;
						$category_name = $category->name;
						$category_slug = $category->slug;

						//echo "Number total: ".$count_categories." Number this: ".$count_category;
						?>
						
						<span><a href="<?php echo esc_url( get_category_link( $category->term_id ) ); ?>"><?php echo $category_name; ?></a> </span> <?php if($count_category < $count_categories): ?><span> - </span><?php endif; ?>
                        <!-- <span><a href="#">Categoria 1</a> </span><span> - </span><span><a href="#">Categoria 2</a></span><span> - </span><span><a href="#">Categoria 3</a></span><span> - </span><span><a href="#">Categoria 4</a></span>
                        <span> - </span><span><a href="#">Categoria 5</a></span> -->
						
						<?php
						$count_category++;
						endforeach; ?>
                    </div>
                </div>
    
            </section>
        </div>

        <!----END BANNER----->