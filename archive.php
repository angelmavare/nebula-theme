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
                        <img class="title-section-icon d-none d-md-block" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/LIST-4.svg" alt="gradient">
                        <div class="line-gradient-title"></div>
                        <div class="content-title-section">
							<?php /* the_archive_title( '<h2 class="text-white">', '</h2>' ); */
									/* the_archive_description( '<div class="text-white">', '</div>' ); */?>
									<?php 
									
									if(is_category()):
									echo '<h2 class="text-white">'.str_replace('Categoría: ','', get_the_archive_title())."</h2>";
									elseif(is_date()):
										echo '<h2 class="text-white">'.str_replace('Día: ','', get_the_archive_title())."</h2>";
									elseif(is_tag()):
										echo '<h2 class="text-white">'.str_replace('Etiqueta: ','', get_the_archive_title())."</h2>";
									elseif(is_author()):
										echo '<h2 class="text-white">'.str_replace('Autor: ','', get_the_archive_title())."</h2>";
									endif;
									?>
									
                        </div>
                    </div>
					
					<?php 
					if(is_author()):
						get_template_part( 'template-parts/author-info-partial' ); 
					endif;
					?>
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