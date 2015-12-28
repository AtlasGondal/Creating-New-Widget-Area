<?php
/**
 * Register a new sidebars for widget areas.
 *
 */
 
function example_widgets_init() {

	register_sidebar( array(
		'name'          => 'Example Widget',
		'id'            => 'example_widget',
		'before_widget' => '<div>',
		'after_widget'  => '</div>',
		'before_title'  => '<h2 class="title">',
		'after_title'   => '</h2>',
	) );

}
add_action( 'widgets_init', 'example_widgets_init' );
?>
