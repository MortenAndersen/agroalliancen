<?php
function agro_widgets_init() {

	// Menu
	register_sidebar(
		array(
			'name'          => __( 'Menu 1 widget', 'agroaliancen-domain' ),
			'id'            => 'sidebar-menu-1',
			'description'   => __( 'Menu 1 widget', 'agroaliancen-domain' ),
			'before_widget' => '<div id="%1$s" class="widget widget-menu %2$s">',
			'after_widget'  => '</div>',
			'before_title'  => '<h5 class="widget-title widget-title-menu">',
			'after_title'   => '</h5>',
		)
	);
	register_sidebar(
		array(
			'name'          => __( 'Menu 2 widget', 'agroaliancen-domain' ),
			'id'            => 'sidebar-menu-2',
			'description'   => __( 'Menu 2 widget', 'agroaliancen-domain' ),
			'before_widget' => '<div id="%1$s" class="widget widget-menu %2$s">',
			'after_widget'  => '</div>',
			'before_title'  => '<h5 class="widget-title widget-title-menu">',
			'after_title'   => '</h5>',
		)
	);
	register_sidebar(
		array(
			'name'          => __( 'Menu 3 widget', 'agroaliancen-domain' ),
			'id'            => 'sidebar-menu-3',
			'description'   => __( 'Menu 3 widget', 'agroaliancen-domain' ),
			'before_widget' => '<div id="%1$s" class="widget widget-menu %2$s">',
			'after_widget'  => '</div>',
			'before_title'  => '<h5 class="widget-title widget-title-menu">',
			'after_title'   => '</h5>',
		)
	);



}

add_action( 'widgets_init', 'agro_widgets_init' );

