<?php
/*
Template Name: Contact
*/
?>

<?php
	get_header();
	global $post;setup_postdata($post);
?>



			<div class="inner-content">
				<div class="panel--full-width">
					<h1><?php the_title(); ?></h1>
					<?php the_content(); ?>
				</div>
			</div><!--Close Inner Content-->
		<?php get_footer(); ?>
</body>
</html>