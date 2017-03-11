<?php
function wpb_imagelink_setup() {
	$image_set = get_option( 'image_default_link_type' );
	
	if ($image_set !== 'none') {
		update_option('image_default_link_type', 'none');
	}
}
add_action('admin_init', 'wpb_imagelink_setup', 10);
$wpsmiliestrans = array(
			':D' => 'icon_biggrin.gif',
			':S' => 'icon_confused.gif',
			'8)' => 'icon_cool.gif',
			'>:(' => 'icon_mad.gif',
			':|' => 'icon_neutral.gif',
			':P' => 'icon_razz.gif',
			':rolleyes:' => 'icon_rolleyes.gif',
			':(' => 'icon_sad.gif',
			':)' => 'icon_smile.gif',
			':O' => 'icon_surprised.gif',
			';)' => 'icon_wink.gif',
			':quill:' => 'quill.png',
			':tassu:' => 'tassu.png',
			':dana:' => 'dana.png',
			':kamera:' => 'kamera.png',
			':vkamera:' => 'videokamera.png',
			':dh:' => 'dh.png',
			);
$args = array(
	'width'         => 1600,
	'flex-height'    => true,
	'height'        => 230,
	'default-image' => get_template_directory_uri() . '/images/ylapalkkikuva.jpg',
);
add_theme_support( 'custom-header', $args );
function register_my_menu() {
  register_nav_menu('yla-valikko',__( 'Ylä valikko' ));
}
add_action( 'init', 'register_my_menu' );
?>