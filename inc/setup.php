<?php
/** Setup post types and pages */
function projectsoul_posts_page_setup(){

    add_post_type_support( 'page', 'excerpt' );

}

add_action( 'init', 'projectsoul_posts_page_setup' );



/** Enqueue scripts and styles */
function projectsoul_secondary_scripts() {

    wp_enqueue_style( 'projectsoul-slick-style', get_template_directory_uri() . '/js/slick/slick.css'  );
    wp_enqueue_style( 'projectsoul-slick-style-theme', get_template_directory_uri() . '/js/slick/slick-theme.css'  );
    

    wp_enqueue_style( 'projectsould-custom-style', get_template_directory_uri() . '/style-custom.css' );
    wp_enqueue_style( 'projectsould-about-style', get_template_directory_uri() . '/about.css' );

    wp_enqueue_script( 'projectsoul-slick-js', get_template_directory_uri() . '/js/slick/slick.min.js', array('jquery'), '2017', true );

    wp_enqueue_script( 'projectsoul-index', get_template_directory_uri() . '/js/index.js', array('projectsoul-slick-js'), '2017', true );

    wp_enqueue_script( 'projectsoul-toggle-menu', get_template_directory_uri() . '/js/toggle-menu.js', array('jquery'), false, true );
    // Enqueue Font Awesome for menu icons always
    wp_enqueue_script( 'font-awesome-cdn', 'https://use.fontawesome.com/affc2627e0.js', array(),'4.7.0');

    // Swiper
    wp_enqueue_script( 'swiper-js', 'https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.0.3/js/swiper.min.js', array(),'4.0.3');
    wp_enqueue_style( 'swiper-css', 'https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.0.3/css/swiper.min.css' );
    
    //rellax
    wp_enqueue_script( 'projectsoul-rellax-js', get_template_directory_uri() . '/js/rellax/rellax.min.js', array('jquery'), '1.0.0', true );
    
}
add_action( 'wp_enqueue_scripts', 'projectsoul_secondary_scripts' );
?>