<?php
/**
 * Template Name: About Page
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
			<article id="<?php the_ID(); ?>" <?php post_class();?>>

					<header class="entry-header custom-hero"></header>

				<div class="container">

					<div class="entry-content">
							<?php the_title( '<h1 class="entry-title">', '</h1>');?>
							 
							<?php red_starter_posted_by(); ?>
				
							<?php
								echo CFS()->get( 'adventure_content' );
							?>

				</div>

			</article>

		</main><!-- #main -->
	</div><!-- #primary -->

	

<?php get_footer(); ?>
