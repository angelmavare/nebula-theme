<div class="w-100 footer-section <?php if(is_404()): echo "mt-0"; endif;?>" style="background: url('<?php echo get_stylesheet_directory_uri(); ?>/assets/img/fondo-burbujas3.jpg');">
            <div class="container position-relative card-newsletter-desk p-0" style="height:100px">
                <div class="footer-overlay">

                </div>
                <div class="row w-100 m-0">
                    <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-6 ">
                        <?php    
                        
                        if ( ! is_active_sidebar( 'sidebar-1' ) ):
                        ?>
                        <div class="pt-4 pb-4 d-none d-xl-block">

                        <?php dynamic_sidebar( 'newsletter-1' ); ?>
                        </div>
                        <?php endif; ?>
                    </div>
                    <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-6" style="z-index:10">
                        <div class="newsletter-section">
                            <p><strong>¿Quieres ser parte de la tripulación?</strong><br>
                                Suscríbete para mantenerte informado</p>
                                <?php echo do_shortcode( '[mc4wp_form id="412"]' ); ?>

                                <!-- <form>
                                    <div class="mb-3 pt-2">
  
                                      <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Correo electrónico" style="max-width: 300px;margin: auto;">
                                      
                                    </div>
                                    <button type="submit" class="btn btn-gradient mt-2">Me apunto</button>
                                  </form> -->
                        </div>
                    </div>
                </div>
                <img class="card-tag-footer" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/card-footer.svg" alt="pixonauta subscribe">
                
            </div>
            
            
        </div>