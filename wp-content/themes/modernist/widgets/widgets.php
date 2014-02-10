<?php
	
	function sidebar_widgets_init(){
		register_sidebar( array(
			'name' => __('Footer Widgets'),
			'id' => 'footer_sidebar_1',
			'description' => __( 'Footer First Widget' ),
			'before_widget' => '<div id="%1$s" class="widget_container col_300 %2$s">',
			'after_widget' => "</div>",
			'before_title' => '<h3>',
			'after_title' => '</h3>',
		) );
	}

	add_action( 'widgets_init', 'sidebar_widgets_init' );
	
	include get_template_directory() . '/widgets/widget-find-us.php';
	include get_template_directory() . '/widgets/widget-blogroll.php';
	include get_template_directory() . '/widgets/widget-twitterfeed.php';
?>