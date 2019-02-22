<?php

add_action('wp_enqueue_scripts', 'metal_styles');
add_action('wp_enqueue_scripts', 'metal_scripts');

function metal_styles()
{
    wp_enqueue_style('bootstrap-style', get_template_directory_uri().'/assets/css/bootstrap.min.css');
    wp_enqueue_style('main-style', get_stylesheet_uri());
}

function metal_scripts() {
    wp_deregister_script('jquery');
    wp_register_script('jquery', get_template_directory_uri().'/assets/js/jquery.min.js');
    wp_enqueue_script('jquery');


    wp_enqueue_script('modernizr', get_template_directory_uri().'/assets/js/modernizr.js',
        array('jquery'), null, true);

    wp_enqueue_script('bootstrap', get_template_directory_uri().'/assets/js/bootstrap.min.js',
        array('jquery'), null, true);

    wp_enqueue_script('retina', get_template_directory_uri().'/assets/js/retina.js',
        array('jquery'), null, true);

    wp_enqueue_script('imagesloaded', get_template_directory_uri().'/assets/js/imagesloaded.min.js',
        array('jquery'), null, true);

    wp_enqueue_script('skrollr', get_template_directory_uri().'/assets/js/skrollr.js',
        array('jquery'), null, true);

    wp_enqueue_script('jqueryscrollto', get_template_directory_uri().'/assets/js/jquery.scrollto.min.js',
        array('jquery'), null, true);

    wp_enqueue_script('jqueryeasing', get_template_directory_uri().'/assets/js/jquery.easing.js',
        array('jquery'), null, true);

    wp_enqueue_script('jquerylocalscroll', get_template_directory_uri().'/assets/js/jquery.localscroll.min.js',
        array('jquery'), null, true);

    wp_enqueue_script('smoothscroll', get_template_directory_uri().'/assets/js/smoothscroll.js',
        array('jquery'), null, true);

    wp_enqueue_script('ekkolightbox', get_template_directory_uri().'/assets/js/ekko-lightbox.min.js',
        array('jquery'), null, true);

//    wp_enqueue_script('googlemap', 'http://maps.google.com/maps/api/js?sensor=false',
//        array('jquery'), null, true);

    wp_enqueue_script('jqueryform.', get_template_directory_uri().'/assets/js/jquery.form.js',
        array('jquery'), null, true);

    wp_enqueue_script('jqueryflowuplabels', get_template_directory_uri().'/assets/js/jquery.flowuplabels.js',
        array('jquery'), null, true);

    wp_enqueue_script('custom', get_template_directory_uri().'/assets/js/custom.js',
        array('jquery'), null, true);
}
