<?php
add_action( 'after_setup_theme', 'twentyeleven_agilefrance_setup' );
function twentyeleven_agilefrance_setup() {
	register_default_headers( array(
		'teamwork' => array(
			'url' => '%s/../twentyeleven-agilefrance/images/headers/teamwork.jpg',
			'thumbnail_url' => '%s/../twentyeleven-agilefrance/images/headers/teamwork-thumbnail.jpg',
			'description'   => __( 'Teamwork', 'twentyeleven-agilefrance' )
		),
		'workshop' => array(
			'url' => '%s/../twentyeleven-agilefrance/images/headers/workshop.jpg',
			'thumbnail_url' => '%s/../twentyeleven-agilefrance/images/headers/workshop-thumbnail.jpg',
			'description'   => __( 'Workshop', 'twentyeleven-agilefrance' )
		)
	) );
}
?>