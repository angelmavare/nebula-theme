<?php

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
                        <img class="title-section-icon" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/LIST-1.svg" alt="gradient">
                        <div class="line-gradient-title"></div>
                        <div class="content-title-section">
						<?php
						/* translators: %s: search query. */
						if($wp_query->post_count!=1) :
						echo '<h2 class="text-white d-inline-block">Se encontraron <strong>'.$wp_query->post_count.'</strong> resultados para:</h2>';
						else :
						echo '<h2 class="text-white d-inline-block">Se encontró <strong>'.$wp_query->post_count.'</strong> resultado para:</h2>'.'" "';
						endif;
						echo '<h3 class="text-white d-inline-block" style="padding-left:10px;"><strong> ' . get_search_query() . '</strong></h3>';
					?>
							
                            
                        </div>
                    </div>
                </div>
                <!----END TITLE SECTION BAR----->

                <div class="row">
                    <div class="col-md-9">
                    <?php get_template_part( 'template-parts/content' ); ?>
					<?php get_template_part( 'template-parts/pagination' ); ?>
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