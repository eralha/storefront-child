<?php
/**
 * The sidebar containing the main widget area.
 *
 * @package storefront
 */

if ( ! is_active_sidebar( 'sidebar-1' ) ) {
	return;
}
?>

<div id="secondary" class="widget-area" role="complementary">
	<h1>Categorias</h1>

	<?php
		
			/**
			 * @hooked storefront_homepage_content - 10
			 * @hooked storefront_product_categories - 20
			 * @hooked storefront_recent_products - 30
			 * @hooked storefront_featured_products - 40
			 * @hooked storefront_popular_products - 50
			 * @hooked storefront_on_sale_products - 60
			 */
			//do_action( 'homepage' ); 

			$taxonomy_name = 'product_cat';
			$args = array( 'taxonomy' => $taxonomy_name );
			$terms = get_terms('product_cat', $args);

			$walker = new Term_Walker();

			//echo $walker->walk($terms, 3);

			?>


	<?php dynamic_sidebar( 'sidebar-1' ); ?>
</div><!-- #secondary -->
