<div class="footer">
			<div class="inner-content">
				<div class="footer_top_field">
					<?php dynamic_sidebar( 'footer_sidebar_1' ); ?>
					<br style="clear:both;">
				</div>
				<div class="copyright">
					<?php the_field("footer_text","options"); ?>

					<?php if( get_field("footer_logo","options") ):$image = get_field("footer_logo","options"); ?>
						<img src="<?php echo $image["url"]; ?>" alt="" />
					<?php endif; ?>
				</div><!--Close Copyright-->
			</div>
		</div><!--Close Footer-->
	</div><!--Close Wrapper-->
	<?php wp_footer(); ?>

</body>