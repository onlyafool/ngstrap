<?php
/**
 * Enqueue scripts and styles.
 */
function ngstrap_scripts() {
	wp_enqueue_style( 'ngstrap-style', get_stylesheet_uri() );
	wp_enqueue_script( 'ngstrap-js', get_template_directory_uri() . '/js/dist/scripts.min.js', array('jquery'), '1.0.0', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'ngstrap_scripts' );


function home_scripts() {
	wp_enqueue_script('flexslider', get_template_directory_uri() .
	'/bower_components/flexslider/jquery.flexslider.js', array(), null, false);
	wp_enqueue_script('wow', get_template_directory_uri() . '/bower_components/wow/dist/wow.min.js', array(), null, false);
	wp_enqueue_script('custom', get_template_directory_uri() . '/js/custom.js', array(), null, false);
}

function app_scripts() {

	//ANGULAR CORE
	wp_enqueue_script('angular-core', get_template_directory_uri() . '/bower_components/angular/angular.js', array('jquery'), null, false);
	wp_enqueue_script('angular-route', get_template_directory_uri() . '/bower_components/angular-route/angular-route.min.js', array('angular-core'),null, false);
	wp_enqueue_script('lodash', get_template_directory_uri() . '/bower_components/lodash/dist/lodash.min.js', array(),null, false);

	//MY ANGULAR APP
	wp_enqueue_script('angular-app', get_template_directory_uri() . '/app/app.js' );
	wp-wp_enqueue_script('product-service', get_template_directory_uri() . '/app/scripts/product-service.js');
	wp-wp_enqueue_script('catalog', get_template_directory_uri() . '/app/scripts/catalog.js');
	wp-wp_enqueue_script('product', get_template_directory_uri() . '/app/scripts/product.js');

	wp_localize_script( 'angular-app', 'appFiles',
		array(
			'partials' => trailingslashit(get_template_directory_uri()) . 'app/partials/',
			'data' => trailingslashit(get_template_directory_uri()) . 'app/data/',
			'images' => trailingslashit(get_template_directory_uri()) . 'app/images')
	);

	//ANGULAR STYLES
	wp_enqueue_style( 'angularStyles', get_template_directory_uri() .'/app/css/style.css', array(), null, 'all');

}
