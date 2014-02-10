<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html lang="en" <?php language_attributes(); ?>>
<head>
	<meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=no" />
	<meta name="apple-mobile-web-app-capable" content="yes"/>
	<title><?php bloginfo("name"); ?> : <?php the_title(); ?></title>
	<?php
		wp_enqueue_style("main", get_template_directory_uri()."/style/global.css" , false, "1.0");
		wp_enqueue_style("fonts", get_template_directory_uri()."/style/fonts/stylesheet.css" , false, "1.0");
		//wp_enqueue_style("scrollpane_css", get_template_directory_uri()."/style/jquery.jscrollpane.css" , false, "1.0");
		//wp_enqueue_style("liteaccordion", get_template_directory_uri()."/scripts/liteaccordion.css" , false, "1.0");
		if(get_field("enable_responsive","options")){
			wp_enqueue_style("responsive", get_template_directory_uri()."/style/responsive.css" , false, "1.0");
		}
		wp_enqueue_style("anim", get_template_directory_uri()."/style/anim.css" , false, "1.0");
		if(get_field("skins","options") == "Dark"){
			wp_enqueue_style("dark_skin", get_template_directory_uri()."/style/dark.css" , false, "1.0");
		}
		if ( is_singular() && get_option( 'thread_comments' ) ){
			wp_enqueue_script( 'comment-reply' );
		}
	?>


	<?php if(get_field("google_analytics","options")): ?>
		<?php the_field("google_analytics","options"); ?>
	<?php endif; ?>
	
	<?php if(get_field("custom_css","options")): ?>
	<style>
		<?php the_field("custom_css","options"); ?>
	</style>
	<?php endif; ?>
	<?php if(get_field("custom_php","options")): ?>
		<?php eval(get_field("custom_php","options")); ?>
	<?php endif; ?>
	<?php if(get_field("animation","options")): ?>

	<?php endif; ?>
	
	<?php if(get_field("favicon","options")): ?>
		<link rel="icon" type="image/png" href="<?php $img = get_field("favicon","options");echo $img["url"]; ?>">
	<?php endif; ?>
	
	<?php wp_head(); ?>
	<?php include "headingoptions.php"; ?>
</head>



	
<?php
	$background = '';
	if(is_page()){

		$image = get_field("background_image");
		if($image){
			$background = 'style=\'background: url("'.$image['url'].'") no-repeat center center fixed;background-size: cover;\'';
		}
		else{
			$color = get_field("no_image_color","options");
			$background = "style='background:{$color}'";
		}

	}else if($post->post_type == "project_post"){
		$image = get_field("projects_background","options");
		if($image["url"]){
			$background = 'style=\'background: url("'.$image['url'].'") no-repeat center center fixed;background-size: cover;\'';
		}
		else{
			$color = get_field("no_image_color","options");
			$background = "style='background:{$color}'";
		}
	}else{
		$image = get_field("posts_background","options");
		if($image["url"]){
			$background = 'style=\'background: url("'.$image['url'].'") no-repeat center center fixed;background-size: cover;\'';
		}
		else{
			$color = get_field("no_image_color","options");
			$background = "style='background:{$color}'";
		}
	}
	if(!isset($divs)){
		$divs = array(""=>"");
	}
?>
<body style="background-color:<?php the_field("background_image"); ?>" <?php body_class(); ?>>

	<div class="site-background">


	</div>

	<div class="wrapper">

		<ul class="mobile_social_media">
			<?php if(get_field("facebook_profile","options")): ?>
			<li><a href="<?php the_field("facebook_profile","options"); ?>" class="fb"></a></li>
			<?php endif; ?>
			<?php if(get_field("twitter_profile","options")): ?>
				<li><a href="<?php the_field("twitter_profile","options"); ?>" class="tw"></a></li>
			<?php endif; ?>
		</ul>

		<div class="header">
			<div class="inner-content">
				<div class="logo"><a class="visuallyhidden" href="<?php bloginfo("wpurl"); ?>">
					<?php if(get_field("site_logo","options")): ?>
						<img src="<?php $img = get_field("site_logo","options");echo $img["url"];?>"/>
					<?php else : ?>
						<?php echo str_replace(".","<span>.</span>",get_bloginfo("name")); ?>
					<?php endif; ?>
				</a></div>
				<ul class="navigation">
					<?php
					$current_menu = get_nav_menu_locations();
					$current_menu = $current_menu["main_menu"];
					$menu_items = wp_get_nav_menu_items($current_menu);
					$this_url = curPageURL();
					if($menu_items):
					foreach($menu_items as $menu):
					?>
						<li><a href="<?php echo $menu->url; ?>" class="<?php if($this_url == $menu->url): ?> current<?php endif; ?>"><?php echo $menu->title?></a></li>
					<?php
					endforeach;
					endif;
					?>
				</ul>
				<ul class="mobile_navigation dropped">
					<a href="#" class="nav_item">Navigation <span></span></a>
					<?php
					$current_menu = get_nav_menu_locations();
					$current_menu = $current_menu["main_menu"];
					$menu_items = wp_get_nav_menu_items($current_menu);
					$this_url = curPageURL();
					if($menu_items):
					foreach($menu_items as $menu):
					?>
						<li><a href="<?php echo $menu->url; ?>" class="<?php if($this_url == $menu->url): ?> current<?php endif; ?>"><?php echo $menu->title?></a></li>
					<?php
					endforeach;
					endif;
					?>
				</ul>
				<ul class="social_media">
					<?php if(get_field("facebook_profile","options")): ?>
					<li><a href="<?php the_field("facebook_profile","options"); ?>" class="fb"></a></li>
					<?php endif; ?>
					<?php if(get_field("twitter_profile","options")): ?>
						<li><a href="<?php the_field("twitter_profile","options"); ?>" class="tw"></a></li>
					<?php endif; ?>
					<li><a href="<?php bloginfo('rss2_url'); ?>" class="rss"></a></li>
				</ul>
			</div>
		</div><!--Close Header-->