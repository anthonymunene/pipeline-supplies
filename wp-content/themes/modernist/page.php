<?php get_header();global $post;setup_postdata($post); ?>
		<div class="content">
			<div class="inner-content">
			
				<div class="panel--full-width">
					<h1><?php the_title(); ?></h1>
					<?php the_content(); ?>
				</div>

			</div><!--Close Inner Content-->	
		</div><!--Close Content-->
		<?php get_footer(); ?>
	</div><!--Close Wrapper-->
</body>
</html>