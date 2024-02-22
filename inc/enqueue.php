<?php 

wp_enqueue_style( 'style-name', get_stylesheet_uri() );
wp_enqueue_style( 'style-bootstrap',get_template_directory_uri().'/assets/css/bootstrap.min.css');

wp_enqueue_script( 'Script', get_template_directory_uri().'/assets/js/bootstrap.bundle.min.js' , array() , 1.0 , 'true' );


?>