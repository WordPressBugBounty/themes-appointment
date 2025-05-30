<?php
function appointment_theme_setup_data()
  	{
	return $appointment_options=array(
	//Header Settings
	'upload_image_favicon' => '',
	'header_one_name' => '' ,
	'header_one_text' => '' ,
	'text_title' => 1 ,
	'height' => '50',
	'width' => '50',
	'enable_header_logo_text' => '',
	'upload_image_logo' => '',
	'social_media_facebook_link' => '',
	'social_media_twitter_link' => '',
	'social_media_linkedin_link' => '',
	'header_social_media_enabled' => 0,
	'facebook_media_enabled' => 1,
	'twitter_media_enabled' => 1,
	'linkedin_media_enabled' => 1,
	'webrit_custom_css' => '',
  	'link_color' => '#ee591f',
  	'link_color_enable' => false,
  	'appointment_search_enable' => false,

	//Slider Default settings
	'home_banner_enabled' => '',
	'slider_radio' => 'demo',
	'slider_select_category' =>__('Uncategorized','appointment'),
	'slider_options' => __('slide','appointment'),
	'slider_transition_delay' => 2000,
	'featured_slider_post' => '',

	//Service section settings
	'service_section_enabled' => '',
	'service_title' => 'Lorem Ipsum',
	'service_description' => 'Duis aute irure dolor in reprehenderit in voluptate velit cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupid non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.',
	'service_one_icon' => 'fa-mobile-screen',
	'service_one_title'=>'Quam in nibh',
	'service_one_description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consec tetur adipisicing elit dignissim dapib tumst.',
	'service_two_icon' => 'fa-bell',
	'service_two_title'=>'Quam in nibh',
	'service_two_description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consec tetur adipisicing elit dignissim dapib tumst.',
	'service_three_icon' => 'fa-laptop',
	'service_three_title'=>'Quam in nibh',
	'service_three_description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consec tetur adipisicing elit dignissim dapib tumst.',
	'service_four_icon' => 'fa-life-ring',
	'service_four_title'=>'Quam in nibh',
	'service_four_description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consec tetur adipisicing elit dignissim dapib tumst.',
	'service_five_icon' => 'fa-code',
	'service_five_title'=>'Quam in nibh',
	'service_five_description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consec tetur adipisicing elit dignissim dapib tumst.',
	'service_six_icon' => 'fa-cog',
	'service_six_title'=>'Quam in nibh',
	'service_six_description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consec tetur adipisicing elit dignissim dapib tumst.',

	//Home callout section
	'home_call_out_area_enabled' => '',
	'home_call_out_title' => 'Etiam eu nisi quis lectus bibend?',
	'home_call_out_description' => 'Reprehen derit in voluptate velit cillum dolore eu fugiat nulla pariaturs sint occaecat proidentse.',
	'callout_background' => '',
	'home_call_out_btn1_text' =>'Morbi fermentum',
	'home_call_out_btn1_link' => '#',
	'home_call_out_btn1_link_target' => '',
	'home_call_out_btn2_text' => 'Fringilla in Magna',
	'home_call_out_btn2_link' => '#',
	'home_call_out_btn2_link_target' => '',

	//News Section
	'home_blog_enabled' => '',
	'home_meta_section_settings' => 0,
	'blog_heading' => 'Proin euismod',
	'blog_description' => 'Duis aute irure dolor in reprehenderit in voluptate velit cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupid non proident, sunt in culpa qui official deserunt mollit anim id est laborum.',
	'blog_selected_category_id'=> 1,
	'post_display_count' => '4',

	//Footer Copyright & footer social links
	'footer_copyright_text' => __( 'Proudly powered by <a href="https://wordpress.org">WordPress</a>', 'appointment' ),
	'footer_menu_bar_enabled' => 0,
	'footer_social_media_enabled' => 0,
	'footer_social_media_facebook_link' => '',
	'footer_facebook_media_enabled' => 1,
	'footer_social_media_twitter_link' => '',
	'footer_twitter_media_enabled'=>1,
	'footer_social_media_linkedin_link' => '',
	'footer_linkedin_media_enabled'=>1,
	'footer_social_media_skype_link' => '',
	'footer_skype_media_enabled' => 1
	);
  	}