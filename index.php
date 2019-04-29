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
