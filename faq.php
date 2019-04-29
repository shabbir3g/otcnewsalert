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
    * template name: FAQ
    */
   
   get_header(); ?>
<div id="content" class="site-content full">
   <div class="container">
      <div class="row">
         <div id="primary" class="content-area">
            <main id="main" class="site-main">
               <article id="post-22" class="post-22 page type-page status-publish hentry">
                  <header class="entry-header">
					<?php while(have_posts()): the_post(); ?>
                     <h1 class="entry-title"><?php the_title(); ?></h1>
					 <?php endwhile; ?>
                  </header>
                  <div class="entry-content">
                     <h3 style="margin-bottom:20px;display:block;width:100%;margin-top:10px"></h3>
                     <div class="wpsm_panel-group" id="wpsm_accordion_90" >
					 
					 
                        <?php $faq_section = get_field('faq_section'); 
						
						$i = 0;
							if($faq_section): 
							
							
							foreach($faq_section as $faqs): ?>
							
							
							<?php $inc = $i++; ?>
											
											
											
                        <div class="wpsm_panel wpsm_panel-default">
                           <div class="wpsm_panel-heading" role="tab" >
                              <h4 class="wpsm_panel-title"> <a  class="collapsed"  data-toggle="collapse" data-parent="#wpsm_accordion_90 " href="#ac_90_collapse2<?php echo $inc; ?>"  > <span  class="ac_open_cl_icon fa fa-plus"></span> <span class="ac_title_class"><?php echo $faqs['question']; ?></span> </a></h4>
                           </div>
                           <div id="ac_90_collapse2<?php echo $inc; ?>" class="wpsm_panel-collapse collapse_90 collapse "  >
                              <div class="wpsm_panel-body"> <?php echo $faqs['answer']; ?></div>
                           </div>
                        </div>
                        <?php endforeach; endif; ?>	
				
				
				
				
				
				
				
                     </div>
                  </div>
               </article>
            </main>
         </div>
      </div>
   </div>
</div>
<?php get_footer(); ?>