<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package otcnewsalert
 */

get_header(); ?>

	
<div id="content" class="site-content full">
	<div class="container">
		<div class="row">
			<div class="container">
				<div class="row">
				
				<?php while(have_posts()): the_post(); ?>
					<div class="col-md-12">
						<div class="middle_white clearfix">
							<div id="primary" class="content-area">
							<header class="entry-header">
								<h1 class="entry-title"><?php the_title(); ?></h1>
							</header>
							</div>
						</div>
						<?php the_content(); ?>
					</div>
				<?php endwhile; ?>
				
				
				</div>
			</div>
		</div>
	</div>
</div>
	
	
	

<?php get_footer(); 
