<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * template name: Home
 */

get_header(); ?>


<div id="content" class="site-content full">
   <div class="container">
	  <div class="row">
		 <div id="primary" class="content-area">
			<main id="main" class="site-main">
			   <article id="post-12" class="post-12 page type-page status-publish hentry">
				  <header class="entry-header">
					
					 <h1 class="entry-title"><?php the_title(); ?></h1>
					 
				  </header>
				  <div class="entry-content">
				  <?php $banner_background = get_field('banner_background'); 
					if($banner_background): ?>
					 <div data-vc-full-width="true" data-vc-full-width-init="false" class="vc_row wpb_row vc_row-fluid header-bg" style="background:url(<?php echo $banner_background['url']; ?>) no-repeat center top;">
					 <?php endif; ?>
					 
						<div class="top-header-form wpb_column vc_column_container vc_col-sm-8">
						   <div class="vc_column-inner ">
							  <div class="wpb_wrapper">
								 <div class="wpb_widgetised_column wpb_content_element wow fadeInLeft">
									<div class="wpb_wrapper">
									   <section id="execphp-2" class="widget widget_execphp">
										  <h3 style="display:none;">&nbsp;</h3>
										  <div class="execphpwidget">
											 <div class="top-sign-outer">
											 
											 <?php $banner_content = get_field('banner_content'); 
											if($banner_content): ?>
											
											
												<?php echo $banner_content; ?>
											
											
												
											 <?php endif; ?>	
												
												
											 </div>
										  </div>
									   </section>
									</div>
								 </div>
							  </div>
						   </div>
						</div>
						<div class="ios-app-icon wpb_column vc_column_container vc_col-sm-4">
						   <div class="vc_column-inner ">
							  <div class="wpb_wrapper">
								 <div class="wpb_widgetised_column wpb_content_element">
									<div class="wpb_wrapper">
										<?php $apple_icon = get_field('apple_icon'); 
											if($apple_icon): ?>
										   <section id="text-4" class="widget widget_text">
											  <h3 style="display:none;">&nbsp;</h3>
											  <div class="textwidget"><a class="app-icon" href="#"></a></div>
										   </section>
										    <?php endif; ?>	
									</div>
								 </div>
							  </div>
						   </div>
						</div>
					 </div>
					 <div class="vc_row-full-width vc_clearfix"></div>
					 <div data-vc-full-width="true" data-vc-full-width-init="false" class="vc_row wpb_row vc_row-fluid countdown-timer">
						<div class="timer-right-text wpb_column vc_column_container vc_col-sm-6">
						   <div class="vc_column-inner ">
						   <?php $next_explosive_text = get_field('next_explosive_text'); 
											if($next_explosive_text): ?>
							  <div class="wpb_wrapper">
								 <div class="wpb_text_column wpb_content_element  wpb_animate_when_almost_visible wpb_right-to-left">
								 
								 
											
											<?php echo $next_explosive_text; ?>
									
								
									
								 </div>
							  </div>
							  <?php endif; ?>	
						   </div>
						</div>
						<div class="timer-block wpb_column vc_column_container vc_col-sm-6">
						   <div class="vc_column-inner ">
							  <div class="wpb_wrapper">
							   <?php $next_explosive_countdown = get_field('next_explosive_countdown'); 
											if($next_explosive_countdown): ?>
								 <div class="wpb_text_column wpb_content_element  wpb_animate_when_almost_visible wpb_left-to-right">
									<div class="wpb_wrapper">
									   <div class="fack-time">
										  <div class="countdown callback">Dummy-content</div>
									   </div>
									</div>
								 </div>
								   <?php endif; ?>	
							  </div>
						   </div>
						</div>
					 </div>
					 <div class="vc_row-full-width vc_clearfix"></div>
					 <div data-vc-full-width="true" data-vc-full-width-init="false" class="vc_row wpb_row vc_row-fluid why-choose-block">
						<div class="why-choose-left wpb_column vc_column_container vc_col-sm-6">
						   <div class="vc_column-inner ">
							  <div class="wpb_wrapper">
								 <div class="wpb_text_column wpb_content_element  wow fadeInUp">
									<div class="wpb_wrapper">
									
									
									 <?php $choose_us_textarea = get_field('choose_us_textarea'); 
											if($choose_us_textarea): ?>
											
											<?php echo $choose_us_textarea; ?>
											
											
									   
									    <?php endif; ?>	
									   
									   
									</div>
								 </div>
							  </div>
						   </div>
						</div>
						<div class="stock-video wpb_column vc_column_container vc_col-sm-6">
						   <div class="vc_column-inner ">
							  <div class="wpb_wrapper">
								 <div class="wpb_text_column wpb_content_element  wow fadeInRight">
									<div class="wpb_wrapper">
									   <p></p>
									   <div id="scroll-to" class="video-section">
										  <p>
										   <?php $section_video = get_field('section_video'); 
											if($section_video): ?>
											
											
											<video width="100%" height="350" controls poster="<?php echo get_template_directory_uri(); ?>/images/video-poster.jpg" autoplay="autoplay">
											  <source src="<?php echo $section_video['url']; ?>" type="video/mp4" />
											  <source src="movie.ogg" type="video/ogg">
											 
											</video>
										  <?php endif; ?>	
											
											 <button id="unmuteButton"></button>
										  </p>
										  <div class="playpause"></div>
									   </div>
									</div>
								 </div>
							  </div>
						   </div>
						</div>
					 </div>
					 <div class="vc_row-full-width vc_clearfix"></div>
					 <div data-vc-full-width="true" data-vc-full-width-init="false" class="vc_row wpb_row vc_row-fluid recent-winners">
						<div class="recent-winners-text wpb_column vc_column_container vc_col-sm-6">
						   <div class="vc_column-inner ">
							  <div class="wpb_wrapper">
								 <div class="wpb_text_column wpb_content_element  wow fadeInLeft">
									<div class="wpb_wrapper">
									<?php $recent_winners_text = get_field('recent_winners_text'); 
											if($recent_winners_text): ?>
											
											<?php echo $recent_winners_text; ?>
									  
									     <?php endif; ?>	
									</div>
								 </div>
							  </div>
						   </div>
						</div>
						<div class="chart-ticker-section wow fadeInRight wpb_column vc_column_container vc_col-sm-6">
						   <div class="vc_column-inner ">
						   
						   
						   
							  <div class="wpb_wrapper">
							  
							  <?php $block_content = get_field('block_content'); 
							if($block_content): 
							foreach($block_content as $blocks): ?>
								 <script>jQuery(document).ready(function () {
									jQuery(".view-chart").hover(
									function () {
									jQuery(this).find('.imgChart').fadeIn();
									},
									function () {
									jQuery(this).find('.imgChart').fadeOut();
									}
									);
									});
								 </script> 
								 <div class="chart-block">
									<div class="ticker-list wow fadeInLeft" data-wow-delay="0.6s" id="box1">
									   <div class="ticker-title"><?php echo $blocks['ticker_title']; ?></div>
									   <div class="gain-block"><?php echo $blocks['gain_block']; ?></div>
									   <p><?php echo $blocks['block_content']; ?></p>
									   <div class="view-chart"><a href="#">View Chart <img src="<?php echo $blocks['block_chart_image']['url']; ?>" alt="" title="" class="imgChart" style="display:none" /> </a></div>
									</div>
								 </div>
								<?php endforeach; endif; ?>
								 
								 
								
								 
								 
								 
								 
								 
								 
								 <div class="wpb_text_column wpb_content_element ">
									<div class="wpb_wrapper"></div>
								 </div>
							  </div>
						   </div>
						</div>
					 </div>
					 <div class="vc_row-full-width vc_clearfix"></div>
					 <div data-vc-full-width="true" data-vc-full-width-init="false" class="vc_row wpb_row vc_row-fluid how-it-works-section">
						<div class="how-it-title wpb_column vc_column_container vc_col-sm-4">
						   <div class="vc_column-inner ">
							  <div class="wpb_wrapper">
								 <div class="wpb_text_column wpb_content_element ">
									<div class="wpb_wrapper">
										<?php $section_title_howit = get_field('section_title_howit'); 
											if($section_title_howit): ?>
										
											
									
									<h2 class="wow fadeInLeft" data-wow-delay="0.3s"><?php echo $section_title_howit; ?></h2>
									   
									    <?php endif; ?>	
									   
									</div>
								 </div>
							  </div>
						   </div>
						</div>
						<div class="wow fadeIn wpb_column vc_column_container vc_col-sm-8">
						   <div class="vc_column-inner ">
							  <div class="wpb_wrapper">
								 <div class="wpb_text_column wpb_content_element  wow fadeInRight">
									<div class="wpb_wrapper">
									
									<?php $section_content_howit = get_field('section_content_howit'); 
											if($section_content_howit): ?>
											
											
											<?php echo $section_content_howit; ?>
											
									   
									   </div>
									    <?php endif; ?>	
										
										
										
									</div>
								 </div>
							  </div>
						   </div>
						</div>
					 </div>
					 <div class="vc_row-full-width vc_clearfix"></div>
					 <div data-vc-full-width="true" data-vc-full-width-init="false" class="vc_row wpb_row vc_row-fluid we-cover-section">
						<div class="wpb_column vc_column_container vc_col-sm-12">
						   <div class="vc_column-inner ">
							  <div class="wpb_wrapper">
								 <div class="wpb_text_column wpb_content_element  heading-title">
									<div class="wpb_wrapper">
									
									
									<?php $section_title_we_cover = get_field('section_title_we_cover'); 
											if($section_title_we_cover): ?>
											
									 <h2 class="wow fadeIn" data-wow-delay="0.3s"><?php echo $section_title_we_cover; ?></h2>	
											
									<?php endif; ?>	
									
									
									
								
									</div>
								 </div>
								 <div class="wpb_text_column wpb_content_element  sectors-option wow fadeInDown">
									<div class="wpb_wrapper">
									
									<?php $section_content_wecover = get_field('section_content_wecover'); 
											if($section_content_wecover): ?>
										
											<?php  echo $section_content_wecover; ?>										
									
									
									   <?php endif; ?>	
									   
									   
									   
									   
									</div>
								 </div>
							  </div>
						   </div>
						</div>
					 </div>
					 <div class="vc_row-full-width vc_clearfix"></div>
					 <div data-vc-full-width="true" data-vc-full-width-init="false" class="vc_row wpb_row vc_row-fluid why-section">
						<div class="wpb_column vc_column_container vc_col-sm-8">
						   <div class="vc_column-inner ">
							  <div class="wpb_wrapper">
								 <div class="wpb_text_column wpb_content_element ">
									<div class="wpb_wrapper">
									
									<?php $section_content_whypanny = get_field('section_content_whypanny'); 
											if($section_content_whypanny): ?>
										
											<?php  echo $section_content_whypanny; ?>										
									
									
									<?php endif; ?>	
									   
									   
									  
									   
									   
									</div>
								 </div>
							  </div>
						   </div>
						</div>
						<div class="wpb_column vc_column_container vc_col-sm-4">
						   <div class="vc_column-inner ">
							  <div class="wpb_wrapper">
								 <div class="wpb_single_image wpb_content_element vc_align_left   wow fadeInRight">
								 
								 <?php $section_image_whypanny = get_field('section_image_whypanny'); 
											if($section_image_whypanny): ?>
									<div class="wpb_wrapper vc_figure">
									   <div class="vc_single_image-wrapper   vc_box_border_grey">
									   <img width="479" height="355" src="<?php echo $section_image_whypanny['url']; ?>" /></div>
									</div>
								<?php endif; ?>	
									
									
									
								 </div>
							  </div>
						   </div>
						</div>
					 </div>
					 <div class="vc_row-full-width vc_clearfix"></div>
					 <div data-vc-full-width="true" data-vc-full-width-init="false" class="vc_row wpb_row vc_row-fluid testimonial-section">
						<div class="wow fadeInDown wpb_column vc_column_container vc_col-sm-12">
						   <div class="vc_column-inner ">
							  <div class="wpb_wrapper">
								 <div class="wpb_text_column wpb_content_element  heading-title">
									<div class="wpb_wrapper">
									<?php $section_title_testimonial = get_field('section_title_testimonial'); 
											if($section_title_testimonial): ?>
									
									   <h2><?php echo $section_title_testimonial; ?></h2>
									   
									   <?php endif; ?>	
									   
									   
									   
									</div>
								 </div>
								 <div class="wpb_widgetised_column wpb_content_element">
									<div class="wpb_wrapper">
									   <section id="cycledtestimonialwidget-2" class="widget cycledTestimonialWidget">
										  <h3 style="display:none;">&nbsp;</h3>
										  <h2 class="widget-title"></h2>
										  <div class="easy-t-slideshow-wrap easy-t-1446629540" style="width: 100%">
											 <div class="cycle-slideshow" data-cycle-fx="fade" data-cycle-timeout="5000" data-cycle-slides="div.testimonial_slide" data-cycle-auto-height="calc"  data-cycle-pause-on-hover="true"     data-cycle-log="false">
											 
											 
											 
											 <div class="wpb_wrapper">
							  
											  <?php $testimonials = get_field('testimonials'); 
											if($testimonials): 
											foreach($testimonials as $testimonial): ?>
											 
												<div  class="testimonial_slide">
												   <div class="style-default_style  show_thumbs hide_title hide_date _rating show_other  easy_t_single_testimonial" style="width: 100%">
													  <blockquote class="easy_testimonial">
														 <div class="easy_testimonial_image_wrapper"><img width="50" height="50" src="<?php echo $testimonial['testimonial_author_image']['url']; ?> " class="attachment-easy_testimonial_thumb size-easy_testimonial_thumb wp-post-image" alt="" /></div>
														 <div class="testimonial_body">
															<p><?php echo $testimonial['testimonial_content']; ?> </p>
														 </div>
														 <p class="testimonial_author"> <cite> <span class="testimonial-client"><?php echo $testimonial['testimonial_author']; ?></span> <span class="testimonial-position">VIA EMAIL</span> </cite></p>
														 <div class="easy_t_clear"></div>
													  </blockquote>
												   </div>
												</div>
											<?php endforeach; endif; ?>	
												
												
												
												
											 </div>
											 <div class="easy-t-cycle-controls"></div>
										  </div>
									   </section>
									</div>
								 </div>
							  </div>
						   </div>
						</div>
					 </div>
					 <div class="vc_row-full-width vc_clearfix"></div>
					 
					 
					 <?php $section_background_signup = get_field('section_background_signup'); 
											if($section_background_signup): ?>
					 <div data-vc-full-width="true" data-vc-full-width-init="false" class="vc_row wpb_row vc_row-fluid bottom-signup" style="background:url(<?php echo $section_background_signup['url']; ?>) no-repeat center top;">
					 <?php endif; ?>	
					 
					 
					 
						<div class="wow fadeInUp wpb_column vc_column_container vc_col-sm-12">
						   <div class="vc_column-inner ">
							  <div class="wpb_wrapper">
								 <div class="wpb_widgetised_column wpb_content_element">
									<div class="wpb_wrapper">
									   <section id="text-5" class="widget widget_text">
										  <h3 style="display:none;">&nbsp;</h3>
										  <div class="textwidget">
											 <div class="second-signup full">
											 
											  <?php $section_title_signup = get_field('section_title_signup'); 
											if($section_title_signup): ?>
												<h2 class="wow fadeInLeft" data-wow-delay="0.3s"><?php echo $section_title_signup; ?></h2>
												
												<?php endif; ?>	
												
												
												 <?php $section_subtitle = get_field('section_subtitle'); 
											if($section_subtitle): ?>
												<h3 class="wow fadeInLeft" data-wow-delay="0.4s"><?php  echo  $section_subtitle; ?></h3>
												<?php endif; ?>	
												
												
												 <?php $signup_form = get_field('signup_form'); 
											if($signup_form): ?>
												<?php echo $signup_form; ?>
												
											<?php endif; ?>	
												
												
											 </div>
										  </div>
									   </section>
									</div>
								 </div>
							  </div>
						   </div>
						</div>
					 </div>
					 <div class="vc_row-full-width vc_clearfix"></div>
				  </div>
			   </article>
			</main>
		 </div>
	  </div>
   </div>
</div>




<?php get_footer();
