<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package Nebula_Theme
 */

get_header();
?>

	<main id="primary" class="site-main post-content">

		<?php
		while ( have_posts() ) :
			the_post();

			get_template_part( 'template-parts/content', get_post_type() );

			/* the_post_navigation(
				array(
					'prev_text' => '<span class="nav-subtitle">' . esc_html__( 'Previous:', 'nebula' ) . '</span> <span class="nav-title">%title</span>',
					'next_text' => '<span class="nav-subtitle">' . esc_html__( 'Next:', 'nebula' ) . '</span> <span class="nav-title">%title</span>',
				)
			); */

			// If comments are open or we have at least one comment, load up the comment template.
			if ( comments_open() || get_comments_number() ) :
				comments_template();
			endif;

			

		endwhile; // End of the loop.
		?>

		<section class="mt-5 mb-5 pb-4 related-post">
            <div class="container">
                <div class="row row-cols-1 row-cols-md-3 g-4">
                    <div class="col">
                      <div class="card h-100 vertical-post-related">
                        <div class="post-feed">
                            <a class="post-img-link" href="single.html">
                                <picture>
                                    <img class="post-img" src="/assets/img/img-test-1.jpg" alt="">
                                </picture>
                                
                            </a>
                        </div>
                        <div class="card-body">
                         <a href="#" style="text-decoration: none;">
                            <h5 class="card-title">Card title</h5>
                         </a> 
                        </div>
                      </div>
                    </div>
                    <div class="col">
                        <div class="card h-100 vertical-post-related">
                            <div class="post-feed">
                                <a class="post-img-link" href="single.html">
                                    <picture>
                                        <img class="post-img" src="/assets/img/img-test-1.jpg" alt="">
                                    </picture>
                                    
                                </a>
                            </div>
                        <div class="card-body">
                            <a href="#" style="text-decoration: none;">
                                <h5 class="card-title">Card title</h5>
                             </a> 
                        </div>
                      </div>
                    </div>
                    <div class="col">
                        <div class="card h-100 vertical-post-related">
                            <div class="post-feed">
                                <a class="post-img-link" href="single.html">
                                    <picture>
                                        <img class="post-img" src="/assets/img/img-test-1.jpg" alt="">
                                    </picture>
                                    
                                </a>
                            </div>
                        <div class="card-body">
                            <a href="#" style="text-decoration: none;">
                                <h5 class="card-title">Card title</h5>
                             </a> 
                        </div>
                      </div>
                    </div>
                    
                  </div>
            </div>
        </section>

	</main><!-- #main -->

<?php
get_footer();
