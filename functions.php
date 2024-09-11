<?php
//my functions page!

function my_excerpt_length(){
    return 30;
}
add_filter('excerpt_length' , 'my_excerpt_length');

set_post_thumbnail_size(200, 200);
add_theme_support('post-thumbnails');

// Register navigation

register_nav_menus(array(
'primary' => 'Primary Menu',
'footer' => 'Footer Menu'
));

//enqueuing scripts

function my_theme_scripts() {
    wp_enqueue_script( 'astuteo', get_template_directory_uri() . '/js/astuteo.js', '1.0.0', false );
    }
    add_action( 'wp_enqueue_scripts', 'my_theme_scripts' );
    
// registering widgets 

function init_widgets() {
    register_sidebar(array(
    'name' => 'Sidebar Blog',
    'id' => 'sidebar-blog',
    'before_widget' => '<div class="inner-widget">',
    'after_widget' => '</div>',
    'before_title' => '<h3>',
    'after_title' => '</h3>'
    ));


    register_sidebar(array(
    'name' => 'Sidebar About',
    'id' => 'sidebar-about',
    'before_widget' => '<div class="inner-widget">',
    'after_widget' => '</div>',
    'before_title' => '<h3>',
    'after_title' => '</h3>'
    ));

    register_sidebar(array(
    'name' => 'Sidebar Bands',
    'id' => 'sidebar-bands',
    'before_widget' => '<div class="inner-widget" class"inner-bands">',
    'after_widget' => '</div>',
    'before_title' => '<h3>',
    'after_title' => '</h3>'
    ));
    
    register_sidebar(array(
    'name' => 'Sidebar Bands Features',
    'id' => 'sidebar-bands-features',
    'before_widget' => '<div class"inner-bands-features">',
    'after_widget' => '</div>',
    'before_title' => '<h3>',
    'after_title' => '</h3>'
    ));

    register_sidebar(array(
    'name' => 'Sidebar Menu',
    'id' => 'sidebar-menu',
    'before_widget' => '<div class="inner-menu">',
    'after_widget' => '</div>',
    'before_title' => '<h3>',
    'after_title' => '</h3>'
    ));
        
    register_sidebar(array(
    'name' => 'Sidebar Contact',
    'id' => 'sidebar-contact',
    'before_widget' => '<div class="inner-widget">',
    'after_widget' => '</div>',
    'before_title' => '<h3>',
    'after_title' => '</h3>'
    ));
    

    } // end function init widgets
    // add action AFTER the function
    add_action('widgets_init', 'init_widgets');

function food_allergen_disclaimer(){
    return '<p><small><strong>Please inform your server if you have any food allergies!!</small></strong></p>';
}

add_shortcode('disclaimer', 'food_allergen_disclaimer');

function features(){
//switch featured artist
//if Sunday show featured artist for Sunday etc

if(isset($_GET['today'])){
    $today = $_GET['today'];
} else{
$today = date('l');
}

switch($today){
case 'Sunday' :
$content = 'Tonight\'s Featured Artist is PatRiff!
To learn more about PatRiff, click <a href="">here!</a>';

case 'Monday' :
    $content = 'Tonight\'s Featured Artist is Aqualizer!
    To learn more about Aqualizer, click <a href="">here!</a>';

    case 'Tuesday' :
        $content = 'Tonight\'s Featured Artist is Tuesday Night Jams!
        To learn more about Tuesday Night Jams, click <a href="">here!</a>';

    case 'Wednesday' :
        $content = 'Tonight\'s Featured Artist is the Dusty 45s!
        To learn more about the Dusty 45s, click <a href="">here!</a>';       
        
    case 'Thursday' :
        $content = 'Tonight\'s Featured Artist is X-Presents!
        To learn more about X-Presents, click <a href="">here!</a>';

    case 'Friday' :
        $content = 'Tonight\'s Featured Artist is Zach Tupper !
        To learn more about Zach Tupper, click <a href="">here!</a>';

    case 'Saturday' :
        $content = 'Tonight\'s Featured Artist is Jesse\'s Night!
        To learn more about Jesse\'s Night, click <a href="">here!</a>';


}//closing switch

return $content;

}//closing the function

add_shortcode('today_features', 'features');

function today_date() {
    return date('l\, F jS Y');
}

add_shortcode('current_date', 'today_date');

add_filter( 'widget_text' , 'do_shortcode' );