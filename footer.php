<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Nebula_Theme
 */

?>
</div>


<!----END WRAPPER----->
<footer>
        <div class="w-100 footer-section" style="background: url('/assets/img/fondo-burbujas3.jpg');">
            <div class="container position-relative card-newsletter-desk p-0" style="height:100px">
                <div class="footer-overlay">

                </div>
                <div class="row w-100 m-0">
                    <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-6">

                    </div>
                    <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-6" style="z-index:10">
                        <div class="newsletter-section">
                            <p><strong>¿Quieres se parte de la tripulación?</strong><br>
                                Suscribete para mantenerte informado</p>
                                <form>
                                    <div class="mb-3 pt-2">
  
                                      <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Correo electrónico" style="max-width: 300px;margin: auto;">
                                      
                                    </div>
                                    <button type="submit" class="btn btn-gradient mt-2">Me apunto</button>
                                  </form>
                        </div>
                    </div>
                </div>
                <img class="card-tag-footer" src="/assets/img/card-footer.svg" alt="pixonauta subscribe">
                
            </div>
            
            
        </div>
        <div class="row w-100 copyright-section" >
            <!-- Grid column -->
            <div class="col-md-6">

                <nav class="navbar navbar-expand-lg navbar-light bg-light text-primary">
                    
                    <div class="w-100">
                      <ul class="navbar-nav mr-auto">
                        <li class="nav-item active">
                          <a class="nav-link text-primary" href="#">Inicio <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link text-primary" href="#">Artículos</a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link text-primary" href="#">Newsletter</a>
                        </li>
                        <li class="nav-item">
                           <!-- Facebook -->
                            <a class="rs-ic fb-ic nav-link text-primary" rel="noreferrer" href="https://www.facebook.com/pixonauta/" target="_blank">
                                <i class="fab fa-facebook-f fa-lg white-text mr-md-5 mr-3 fa-2x"> </i>
                            </a>
                            <a class="rs-ic tw-ic nav-link text-primary" target="_blank" rel="noreferrer" href="https://twitter.com/pixonauta">
                                <i class="fab fa-twitter fa-lg white-text mr-md-5 mr-3 fa-2x"> </i>
                            </a>
                            <a class="rs-ic ins-ic nav-link text-primary" target="_blank" rel="noreferrer" href="https://www.instagram.com/pixonauta/">
                                <i class="fab fa-instagram fa-lg white-text fa-2x"> </i>
                            </a>
                
                        </li>
                        
                      </ul>
                      
                    </div>
                  </nav>


               
            </div>
            <!-- Grid column -->
            
            <div class="col-md-6">
                <nav class="navbar navbar-expand-lg navbar-light bg-light right-footer-nav">
                    
                    <div >
                      <ul class="navbar-nav ml-auto">
                        <li class="nav-item active">
                            <span class="navbar-text text-primary">
                                Hecho con <i class="fa-solid fa-heart"></i> por <a href="<?php echo get_home_url();?>" class="fw-bold text-primary text-decoration-none" >Pixonauta</a>
                            </span>
                        </li>
                        
                      </ul>
                      
                    </div>
                  </nav>
            </div>
        </div>
        <div class="row w-100 line-gradient-footer">

        </div>

    </footer>

    <!---Scripts--->
	<?php wp_footer(); ?>
</body>


</html>
