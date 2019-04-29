<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package otcnewsalert
 */

?>

<!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
   
   <head>
      <meta charset="<?php bloginfo('charset'); ?>">
      <meta name="viewport" content="width=device-width, initial-scale=1">
	  
	  
	  
	  <?php $favicon_upload = get_field('favicon_upload','options'); 
						if( $favicon_upload): ?>
      <link rel="icon"  type="image/jpg"  href="<?php echo $favicon_upload['url']; ?>" />
     <?php endif; ?>
     
	  
    <?php wp_head(); ?>
   </head>
   <body <?php body_class(); ?> >
      
      <div class="see_alert ove-md second_step">
         <div id="courser_popup-md">
            <h4 class="modal-title">
               <p>Want our Alerts FASTER than everyone else?</p>
            </h4>
            <div class="modal-body">
               <p>Serious traders know that every second counts in these markets. Text messages are about 7x faster than email. Get an edge on other traders by receiving our FREE instant Stock Alerts ahead of e-mail subscribers by subscribing to our Mobile Alert System.</p>
               <p>We promise never to share your number with anyone else. Standard text messaging rates may apply.</p>
               <div class="clearfix sign-up-pop">
                  <div class="second_step" style="display:none">
                     <div id="phone-img"></div>
                     <form class="cs_html_form" id="sendForm" action="https://login.limecellular.com/fbAPI" method="post" >
                        <div class="cs_html_form_result"></div>
                        <div class="cs_html_form_error"></div>
                        <div class="cs_html_form_row"> <input id="mN" name="mN" placeholder="Mobile Number *" type="text"></div>
                        <div class="cs_html_form_row"> <input id="submitButton" value="Subscribe" type="submit"></div>
                        <div class="us-carriers"><a style="font-size:14px;color:#000;" target="_blank" href="2017/05/07/text-alerts/index.html">Canadian Subscribers:  CLICK HERE</a></div>
                        <p class="cs_html_form_terms" class="second_step" style="display:none"> Message &amp; data rates may apply. See <a href="http://login.limecellular.com/info/terms.jsf" style="font-size:12px;color:#000000">Terms of Service</a> and <a href="http://login.limecellular.com/info/privacyPolicy.jsf" style="font-size:12px;color:#000000">Privacy Policy</a>.</p>
                        <input type="hidden" id="sc" name="sc" value="wallstreet (71441-US)" /> <input type="hidden" id="ev" name="ev" value="send" /> <input type="hidden" id="ac" name="ac" value="0" /> <input type="hidden" id="me" name="me" value="WebSite" /> <input type="hidden" id="forwardLink" name="forwardLink" value="thank-you/index.html" />
                     </form>
                  </div>
               </div>
              
               <div class="clearfix">
                  <p><a id="btn_no_thanks" aria-label="Close" data-dismiss="modal" href="thank-you/index.html">No Thanks</a></p>
               </div>
            </div>
            <div class="course-close"> <a onclick="javascript:interstitialBox.closeit(); return false" href="thank-you/index.html" id="btn_closeit"><img width="37" height="37" alt="" class="png" src="images/close-icon.png"></a></div>
         </div>
      </div>
      <div id="page" class="site">
         <div class="site-inner">
            <header id="masthead" class="site-header navbar navbar-default navbar-fixed-top">
               <div class="header-top full">
                  <div class="container">
                     <div class="row">
                        <div class="col-sm-5 logo"> 
						
						<?php $logo_upload = get_field('logo_upload','options'); 
						if( $logo_upload): ?>
						<a href="<?php echo bloginfo('home'); ?>">
						<img src="<?php echo $logo_upload['url']; ?>" alt="<?php echo $logo_upload['title']; ?>" /></a>
						<?php endif; ?>
						
						</div>
                        <div class="col-sm-7 menu-top text-right">
                           <div class="menu-top-menu-container">
						   
								 <?php wp_nav_menu(array(
									'theme_location'		=> 'main-menu',
									'menu_class'		=> 'nav',
									'fallback_cb'		=> 'main_default',
								  )); ?>
								
                           </div>
                           <div class="symbol sy-top">
                              <form onsubmit="javascript: return graph_valid();" method="get" action=""> <input type="text" class="search-symbol" onblur="if(this.value=='')this.value='Enter Symbol'" onfocus="if(this.value=='Enter Symbol')this.value=''" value="Enter Symbol" id="symbol" name="symbol"> <input type="submit" class="submit-symbol" value="Get Report"></form>
                           </div>
                        </div>
                        <div class="col-sm-7 ticker-top text-right"></div>
                     </div>
                  </div>
               </div>
            </header>