<?php
/**
 * Template part for displaying single products.
 *
 * @package RED_Starter_Theme
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="product-header">
		<?php if ( has_post_thumbnail() ) : ?>
			<?php the_post_thumbnail( 'large' ); ?>
		<?php endif; ?>
	</header><!-- .entry-header -->

	<div class="entry-content">
		<h1 class="single-product-title bold"><?php the_title()?></h1>
		<div class="single-product-price"><?php $meta_print_value=get_post_meta(get_the_ID(),'price',true); echo($meta_print_value); ?></div>
		<?php the_content(); ?>
		
		<a href="http://facebook.com">
			<button class="btn-alt"><i class="fa fa-facebook" aria-hidden="true"></i>Like</button>
		</a>
		<a href="http://twitter.com">
			<button class="btn-alt"><i class="fa fa-twitter" aria-hidden="true"></i>Tweet</button>
		</a>
		<a href="http://pinterest.com">
			<button class="btn-alt"><i class="fa fa-pinterest" aria-hidden="true"></i>Pin</button>
		</a>
	</div><!-- .entry-content -->

</article><!-- #post-## -->
