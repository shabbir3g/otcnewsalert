<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package otcnewsalert
 */

?>

<footer id="colophon" class="site-footer full">
               <div class="container">
                  <div class="row">
                     <div class="col-lg-12 asseen-logo text-center wow fadeIn">
                        <section id="text-6" class="widget widget_text">
                           <h3 style="display:none;">&nbsp;</h3>
                           <div class="textwidget">
                              <ul>
							  
							  <?php $footer_gallery_logo = get_field('footer_gallery_logo','options'); 
								if( $footer_gallery_logo): ?>
								
								
								<?php foreach($footer_gallery_logo as $images): ?>
								
								 <li><a href="#"><img src="<?php  echo $images['url']; ?>" alt=""></a></li>
								
								<?php endforeach; endif; ?>
                                
                                
                              </ul>
                           </div>
                        </section>
                     </div>
                  </div>
               </div>
               <div class="full footer-bottom wow fadeIn">
                  <div class="container">
                     <div class="row">
                        <div class="col-sm-9 footer-menu">
                           <div class="menu-footer-menu-container">
							
								<?php wp_nav_menu(array(
									'theme_location'		=> 'menu-footer',
									'menu_class'		=> 'primary-menu',
									'fallback_cb'		=> 'main_default',
								  )); ?>
						   
                           </div>
                        </div>
                        <div class="symbol col-sm-3">
                           <form method="get" action="https://wallstreetalerts.org//market-scan/"> <input type="text" class="search-symbol" onblur="if(this.value=='')this.value='Enter Symbol'" onfocus="if(this.value=='Enter Symbol')this.value=''" value="Enter Symbol" id="symbol1" name="symbol"> <input type="submit" class="submit-symbol" value="Get Report"></form>
                        </div>
                        <div class="col-lg-12 text-center copyright">
                           <section id="text-7" class="widget widget_text">
                              <h3 style="display:none;">&nbsp;</h3>
                              <div class="textwidget">
							  
							  
						<?php $footer_copy_right_text = get_field('footer_copy_right_text','options'); 
						if( $footer_copy_right_text): ?>
						
						<?php echo $footer_copy_right_text; ?>
							 
						<?php endif; ?>	  
							  </div>
                           </section>
                        </div>
                        <div class="footer-social text-center col-lg-12">
                           <nav class="social-navigations">
                              <div class="menu-social-menu-container">
                                 <ul id="menu-social-menu" class="social-links-menu">
								 
                                    <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                    <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                                    <li><a href="#"><i class="fab fa-google-plus-g"></i></a></li>
									
                                    
                                 </ul>
                              </div>
                           </nav>
                        </div>
                     </div>
                  </div>
               </div>
            </footer>
         </div>
      </div>
    
	  <?php wp_footer(); ?>
   </body>
</html>