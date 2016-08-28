<?php
/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function ngstrap_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'ngstrap' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'ngstrap' ),
		'before_widget' => '<section id="%1$s" class="panel panel-default widget no-padding  %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<div class="panel-heading"><h3 class="panel-title widget-title">',
		'after_title'   => '</h3></div>',
	) );

	register_sidebar( array(
		'name'          => esc_html__( 'Footer 1', 'ngstrap' ),
		'id'            => 'footer-1',
		'description'   => esc_html__( '' ),
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );

	register_sidebar( array(
		'name'          => esc_html__( 'Footer 2', 'ngstrap' ),
		'id'            => 'footer-2',
		'description'   => esc_html__( '' ),
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget'  => '</div></div>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3><div class="footer-about-us">',
	) );

}
add_action( 'widgets_init', 'ngstrap_widgets_init' );