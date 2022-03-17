<?php
/*
Template Name: Post List
*/
get_header();
?>
<?php
/*   $currCat = get_category(get_query_var('cat'));
  $cat_name = $currCat->name;
  $cat_id   = get_cat_ID( $cat_name ); */
?>

<main>

                <!----POSTLIST----->
        <section class="postlist">
            <div class="container">
                <!----TITLE SECTION BAR----->
                <div class="mt-5">
                    <div class="title-section">
                        <img class="title-section-icon" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/card-gradient2.svg" alt="gradient">
                        <div class="line-gradient-title"></div>
                        <div class="content-title-section">
                            <h2 class="text-white">Lista de artículos</h2>
                        </div>
                    </div>
                </div>
                <!----END TITLE SECTION BAR----->

                <div class="row">
                    <div class="col-md-9">
                    <?php 
                    $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
                    $args_recent = array(
                        'post_type' => 'post',
                        'post_status' => 'publish',
                        'paged' => $paged, 
                        'posts_per_page' => 10,
                        );
                        $arr_recent = new WP_Query( $args_recent );
                                
                        if ( $arr_recent->have_posts() ) :    ?> 
                    <?php
                    while ( $arr_recent->have_posts() ) :
                        $arr_recent->the_post();
                    ?>
                        <!--  card -->
                        <article class="card mb-4 horizontal-post-feed">
                            <div class="row g-0">
                                <div class="col-md-4 post-feed">
                                    <a href="single.html" class="h-100  post-bottom-left post-top-left">
                                        <picture>
                                            <img class="post-img" src="/assets/img/img-test-1.jpg" alt="">
                                        </picture>
                                        
                                    </a>

                                </div>
                                <div class="col-md-8">
                                    <div class="card-body">
                                        <div class="mb-2">
                                            <a class="text-orange text-decoration-none" href="#">Fecha, año</a><span class="text-orange">/</span><a class="text-orange fw-bold text-decoration-none" href="#">Categoria</a>
                                        </div>
                                        
                                        <a href="single.html" class="link-text">
                                            <h5 class="card-title" style="text-decoration: none;">Card title</h5>
                                        
                                            <p class="card-text">This is a wider card with supporting text below as a
                                                natural lead-in to additional content. This content is a little bit longer.
                                            </p>
                                        </a>
                                        <div class="ux-meta-post mt-2">
                                            <img class="ux-profile-sm d-none d-sm-inline-block" src="/assets/img/profile.jpg" alt=""><small class="ux-post-editor"> Por <a class="link-profile" href="">Pixonauta</a></small>
                                         </div>
                                    </div>
                                </div>
                            </div>
                        </article>
                        <!--  end card -->

                            <!-- /post recientes -->
                            
                        <?php endwhile; ?>

                        <!-- pagination -->
                        <div class="col-md-12 text-center">
                            <nav  style="justify-content:center;" aria-label="Page navigation">
                                <div class="pagination d-inline-flex">
                                    <?php 
                                        echo paginate_links( array(
                                            'base'         => str_replace( 999999999, '%#%', esc_url( get_pagenum_link( 999999999 ) ) ),
                                            'total'        => $arr_recent->max_num_pages,
                                            'current'      => max( 1, get_query_var( 'paged' ) ),
                                            'format'       => '?paged=%#%',
                                            'show_all'     => false,
                                            'type'         => 'plain',
                                            'end_size'     => 2,
                                            'mid_size'     => 1,
                                            'prev_next'    => true,
                                            'prev_text'    => sprintf( '<i></i> %1$s', __( '« Anterior', 'text-domain' ) ),
                                            'next_text'    => sprintf( '%1$s <i></i>', __( 'Siguiente »', 'text-domain' ) ),
                                            'add_args'     => false,
                                            'add_fragment' => '',
                                        ) );
                                    ?>
                                </div>
                            </nav>
                        </div>
                        <!-- /pagination -->

                        <!--?php get_template_part( 'template-parts/pagination' ); ?-->
                    <?php endif; ?>
                    </div>
                    <!--  SIDEBAR -->
                    <div class="col-md-3">
                        <?php get_sidebar(); ?>
                    </div>
                    <!-- END  SIDEBAR -->
                </div>
                
            </div>




        </section>
        <!----END POSTLIST----->

        <!--?php get_template_part( 'template-parts/home-postlist-partial' ); ?-->
        <!----END POSTLIST----->
</main>
	        

<?php

get_footer();