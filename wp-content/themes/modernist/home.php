<?php get_header(); ?>
<?php 
global $post;
setup_postdata( $post ); 
?>
			<div class="inner-content">


						<?php echo get_the_content(); ?>

			</div><!--Close Inner Content-->
		<?php get_footer(); ?>
</html>