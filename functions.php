
<?php

/******************
Funtions
******************/

function loadFiles(){
    // js files
    wp_enqueue_script('main-js', get_theme_file_uri('/dist/js/main.js'), NULL, '1.0', true);

    //vendor js files
    wp_enqueue_script('jquery-js', get_theme_file_uri('/dist/js/jquery-3.6.0.min.js'), NULL, '1.0', true);


    //css files
    wp_enqueue_style( 'custom-style', get_theme_file_uri('/dist/css/app.css') );

}


/******************
Actions
******************/
add_action('wp_enqueue_scripts', 'loadFiles');

?>