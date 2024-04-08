<?php
add_theme_support( 'custom-logo' );

add_action('wp_enqueue_scripts', function () {
	wp_enqueue_style('main-css', get_template_directory_uri() . '/css/main.css');
	wp_enqueue_style('icon-library', 'https://cdn.jsdelivr.net/npm/remixicon@4.1.0/fonts/remixicon.css');
	wp_enqueue_script('main-js', get_template_directory_uri() . '/js/main.js', array('jquery'), null, true);
	wp_localize_script('main-js', 'admin_ajax_php', ['ajax_url' => admin_url('admin-ajax.php')]);
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



//Bookings
add_action('init', function(){
	register_post_type('bookings', [
		'labels' => [
			'name'               => 'Bookings',
			'singular_name'      => 'Booking'
		],
		'public' => false,
		'show_ui' => true,
		'supports' => ['title']
	]);
});


add_action('wp_ajax_bookings', 'submit_form');
add_action('wp_ajax_nopriv_bookings', 'submit_form');
function submit_form(){
	$response = ['res' => false, 'error' => ''];

	$name = trim($_POST['name']);
	$email = trim($_POST['email']);
	$date = $_POST['date'];
	$time = $_POST['time'];
	$number = $_POST['number'];

	if(mb_strlen($name, 'UTF-8') < 2){
		$response['error'] = 'Name should be longer than 1 letter.';
	}else{
		$post_data = array(
			'post_title' => wp_strip_all_tags("$name - $email - $date - $time - $number"),
			'post_type'  => 'bookings'
		);
		
		$post_id = wp_insert_post($post_data, true);

		if(is_wp_error($post_id)){
			$response['error'] = $post_id->get_error_message();
		}
		else {
			$response['res'] = true;
		}
	}
	echo json_encode($response);
	wp_die();

}




//Burgers
add_action('init', function(){
	register_post_type('burgers', [
		'labels' => [
			'name'               => 'Burgers',
			'singular_name'      => 'Burger'
		],
		'public' => false,
		'show_ui' => true,
		'supports' => [ 'title'],
	]);
});

add_action('init', function(){
	register_taxonomy( 'meat_type', 'burgers', [
		'labels' => [
			'name' => 'Meat type'
		]
	]);
});

add_action('wp_ajax_filter_posts', 'filter_posts');
add_action('wp_ajax_nopriv_filter_posts', 'filter_posts');

function filter_posts() {
	$categories = $_POST['categories'];
	$page = $_POST['page'];
	$posts_per_page = 3;
	$offset = ($page - 1) * $posts_per_page;

	$args = array(
			'post_type' => 'burgers',
			'posts_per_page' => $posts_per_page,
			'paged' => $page,
			'offset' => $offset,
			'order' => 'ASC',
			'tax_query' => array(
					array(
							'taxonomy' => 'meat_type',
							'field' => 'slug',
							'terms' => $categories,
							'operator' => 'IN'
					),
			),
	);
	$burger = new WP_Query($args);
	if($burger->have_posts()) :
			while($burger->have_posts()) : $burger->the_post();
					?>
					<div class="burger">
							<img class="burger__image" src="<?= esc_html(get_field('burger_image', $burger -> ID)); ?>" alt=""/>
							<h3 class="burger__heading"><?= esc_html(get_field('burger_heading', $burger->ID));?></h3>
							<p class="burger__text"><?= esc_html(get_field('burger_text', $burger->ID));?></p>
					</div>
					<?php
			endwhile;
			wp_reset_postdata();
	else :
			echo 'No burgers found :(';
	endif;
	die();
}
