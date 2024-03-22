<?php
add_theme_support( 'custom-logo' );

add_action('wp_enqueue_scripts', function () {
	wp_enqueue_style('main-css', get_template_directory_uri() . '/css/main.css');
	wp_enqueue_style('icon-library', 'https://cdn.jsdelivr.net/npm/remixicon@4.1.0/fonts/remixicon.css');
	wp_enqueue_script('main-js', get_template_directory_uri() . '/js/main.js', array('jquery'), null, true);
});

add_action('after_setup_theme', function () {
	add_theme_support('menus');
	register_nav_menus([
		'header-menu' => 'Header menu'
	]);
});

add_filter('show_admin_bar', '__return_false');

if( function_exists('acf_add_options_page') ) {

	acf_add_options_page();

}

//Secondary logo
add_action('customize_register', function ($wp_customize) {
	$wp_customize->add_setting('secondary_logo');
	$wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'secondary_logo', array(
		'label' => __('Secondary Logo'),
		'section' => 'title_tagline',
		'settings' => 'secondary_logo',
	)));
});

function the_secondary_logo() {
	$secondary_logo_id = get_theme_mod('secondary_logo');
	echo '<img src="' . esc_url($secondary_logo_id) . '" alt="">';
}



// //Submit reservation form

add_action('wp_ajax_enquiry', 'submit_form');
add_action('wp_ajax_nopriv_enquiry', 'submit_form');
function submit_form(){
	$formdata = [];
	wp_parse_str($_POST['enquiry'], $formdata);

	wp_send_json_success($formdata['name']);

}
