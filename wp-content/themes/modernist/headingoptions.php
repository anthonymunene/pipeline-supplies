<?php	global $fonts;	$font = get_field("google_fonts","options");	if($font != "Robotto"):	$fonti;	foreach($fonts as $fnt){		if($fnt["name"] == $font){			$fonti = $fnt;			break;		}	}	if(isset($fonti)){		echo $fonti["url"];	}?><style>body,*{	<?php if(isset($fonti)): ?>		<?php echo $fonti["css"]; ?> !important;	<?php endif; ?>}.find_us p strong, .header .logo a, .headline h1 strong, .tweet strong, .place, .services ul li a, .career h2, .testimonial_box .pos, .staff_name, .accordion_button span, .blog_post_content h3 a, .project_box_info h3 a, .read_more, .blog_title h1 a, .page_numbers ul li a, .page_nav a, .contact_form_info .label span, .add_comment .label span, .reply_form .label span, .reset, #send, .contact_info_list > li h3, .partners_heading a, .partner_content a, .post_social_links a, .dropcap:first-letter, .info_message strong, .yes_message strong, .error_message strong, .info2_message strong, .ordered_list, .button {	font-weight: 700;}.headline h1 {	font-weight: 300;}</style><?php endif; ?><?php if(get_field("font_color","options")): ?><style>.widget_title, .footer h3, .post_content h3, .project_content h3, .header .logo a span, .tweet a, .b_post_content a, .testimonial_box .pos, .accordion_button span, .accordion_content h3, .accordion ul li > div h3, .read_more, .blog_title h1 a, .contact_form_info .label span, .add_comment .label span, .reply_form .label span, .contact_info_list > li h3, .partner_content h4, .ordered_list, .comment_content .name, .info_text span , .header .navigation a:hover, .current {	color: <?php the_field("font_color","options"); ?> !important;}</style><?php endif; ?><?php if(get_field("brand_color","options")): ?><style>.mobile_navigation a, .headline h1, .services ul li a:hover, .career a, .accordion_box .accordion_button, #send, .map a, .partners_heading a, .partner_content a, .p_prev, .p_next, .tab_buttons ul li a, .dropcap:first-letter {	background: <?php the_field("brand_color","options"); ?> !important;}.post_content::-webkit-scrollbar-thumb, .project_content::-webkit-scrollbar-thumb, .comments_field::-webkit-scrollbar-thumb {	background-color: <?php the_field("brand_color","options"); ?> !important;}	.next:hover {		background: <?php the_field("brand_color","options"); ?> url(../images/icons/blog_widget_nav.png) no-repeat !important;		background-position: -34px 6px;	}	.prev:hover {		background: <?php the_field("brand_color","options"); ?> url(../images/icons/blog_widget_nav.png) no-repeat !important;		background-position: 8px 6px;	}	.pro_prev:hover, .h_prev:hover {		background: <?php the_field("brand_color","options"); ?> url(../images/icons/project_nav.png) no-repeat !important;		background-position: 22px 17px !important;	}	.pro_next:hover, .h_next:hover {		background: <?php the_field("brand_color","options"); ?> url(../images/icons/project_nav.png) no-repeat !important;		background-position: -53px 17px !important	}	.pr_prev:hover {		background: <?php the_field("brand_color","options"); ?> url(../images/icons/project_nav.png) no-repeat !important;		background-position: 22px 17px !important;	}	.pr_next:hover {		background: <?php the_field("brand_color","options"); ?> url(../images/icons/project_nav.png) no-repeat !important;		background-position: -53px 17px !important	}.replies {	border-left: 1px solid <?php the_field("brand_color","options"); ?> !important;}.widget_title, .footer h3, .post_content h3, .project_content h3 {	border-left: 5px solid <?php the_field("brand_color","options"); ?> !important;}.widget {	border-top: 2px solid <?php the_field("brand_color","options"); ?> !important;}</style><?php endif; ?><?php if(get_field("brand_dark_color","options")): ?><style>.tab_buttons ul li a:hover, .accordion_button:hover {	background: <?php the_field("brand_dark_color","options"); ?>;}.accordion_button:hover a span {	color: <?php the_field("brand_dark_color","options"); ?> !important;}.accordion ul li > h4:hover {	background: <?php echo hex2rgb(get_field("brand_dark_color","options")); ?>;}</style><?php endif; ?>