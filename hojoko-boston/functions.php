<?php 

// hide front-end admin bar if user is logged in

show_admin_bar( false );

// register post thumbnails 

add_theme_support( 'post-thumbnails' );

// register 'sidebar' for open table widget

function widgets_init() {

	register_sidebar( array(
		'name'          => 'Hojoko Reservations',
		'id'            => 'hojoko_reservations',
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );

}

add_action( 'widgets_init', 'widgets_init' );

?>