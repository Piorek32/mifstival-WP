
<?php
 add_theme_support( 'menus' );


 function coderslab_enqueue_style() {
    wp_enqueue_style('ionicons', 'https://unpkg.com/ionicons@4.5.10-0/dist/css/ionicons.min.css');
    wp_enqueue_style(
    'global'
    ,
    get_stylesheet_directory_uri()
    .
    '/src/style/style.css'
    ,
    false );
    }
    add_action(
    'wp_enqueue_scripts'
    ,
    'coderslab_enqueue_style' );

 function enqueue_script() {
    wp_enqueue_script(
    'mainjs',
    get_template_directory_uri()
    .
    '/src/js/index.js',
    array(),
    false,true );
    wp_enqueue_script( 'gsap-js', 'http://cdnjs.cloudflare.com/ajax/libs/gsap/1.19.0/TweenMax.min.js', array(), false, true );
    
    }
    add_action(
    'wp_enqueue_scripts'
    ,
    'enqueue_script' )


   

?>