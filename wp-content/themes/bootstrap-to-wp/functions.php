<?php

function b2w_theme_styles(){

	wp_enqueue_style('owl_css', get_template_directory_uri(). 'assets/owl.carousel.css' );
    wp_enqueue_style('style_css', get_template_directory_uri(). 'style.css' );

}

add_action('wp_enqueue_scripts();','b2w_theme_styles');


function b2w_theme_js(){

	wp_enqueue_script('owl_js', get_template_directory_uri().'owl.carousel.js', array('jquery'),'',true);
	wp_enqueue_script('owlcar_js'),get_template_directory_uri().'owl.carousel.min.js', array('jquery'),'',true);
    wp_enqueue_script('enviar_js'),get_template_directory_uri().'enviar.js', array('jquery'),'',true);
    wp_enqueue_script('scrolling_js'),get_template_directory_uri().'./js/scrolling-nav.js', array('jquery'),'',true);
    wp_enqueue_script('easing_js'),get_template_directory_uri().'./js/jquery.easing.min.js', array('jquery'),'',true);

}   


add_action('wp_enqueue_scripts();','b2w_theme_js');





?>