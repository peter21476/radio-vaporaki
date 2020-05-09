<?php


add_theme_support ('menus');



add_theme_support( 'post-thumbnails' );



function register_theme_menus () {



register_nav_menus (



array(

		'primary-menu' => __('Primary Menu'),
		'secondary-menu' => __('Secondary Menu')



		)

); 

}

add_action ( 'init', 'register_theme_menus' );


function vaporaki_port_theme_styles () {



	wp_enqueue_style ( 'fonts01', 'https://fonts.googleapis.com/css?family=EB+Garamond:400,400i,500,500i,700,700i&display=swap&subset=greek');

	wp_enqueue_style ( 'bootstrap_css', get_template_directory_uri() . '/bower_components/bootstrap/dist/css/bootstrap.min.css' );

	wp_enqueue_style ( 'main_css', get_template_directory_uri() . '/style.css' );

}

add_action ( 'wp_enqueue_scripts', 'vaporaki_port_theme_styles' );

function vaporaki_theme_js () {

	global $wp_scripts;

	wp_register_script ( 'html5_shiv', 'https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js', '','', false  );

	wp_register_script ( 'respond_js', 'https://oss.maxcdn.com/respond/1.4.2/respond.min.js', '','', false  );

	$wp_scripts->add_data('html5_shiv', 'conditional', 'lt IE 9');
	$wp_scripts->add_data('respond_js', 'conditional', 'lt IE 9');

	wp_enqueue_script ( 'bootstrap_js', get_template_directory_uri() . '/bower_components/bootstrap/dist/js/bootstrap.min.js', array('jquery'), '', true  );

}

add_action ( 'wp_enqueue_scripts', 'vaporaki_theme_js' );


function create_widget( $name, $id, $description ) {
$args = array(
	'name'          => __( $name ),
	'id'            => $id,
	'description'   => $description,
	'before_widget' => '',
	'after_widget'  => '',
	'before_title'  => '<h1>',
	'after_title'   => '</h1>' );

register_sidebar( $args );
}
create_widget('Login', 'login', 'login1');
create_widget('Last Songs', 'lastsongs', 'lastsongs');
create_widget('Slider', 'slider', 'slider');


function splen_remove_admin_bar() {
	if( !is_super_admin() ) 
		add_filter( 'show_admin_bar', '__return_false' );
}
add_action('wp', 'splen_remove_admin_bar');

