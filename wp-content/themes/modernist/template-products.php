<?php
/*
Template Name: Products
*/
?>

<?php get_header();
	global $post;
	setup_postdata($post);
	$products = get_field("products");


?>
	<div class="inner-content">
			<h1 class="panel--full-width"><?php the_title(); ?></h1>
			<?php
				foreach ($products as $product) {
					echo '<div class="panel--full-width">'.
							'<h2>'.$product['name'].'</h2>'.
							'<img class="product-image" src="'.$product['image'].'"/>'.
							'<p class="product-desc">'.$product['description'].'</p>'.
						 '</div>';

				}
			?>
	</div><!--Close Inner Content-->
		<?php get_footer(); ?>
</body>
</html>