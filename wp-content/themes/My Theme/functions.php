<?php

require_once get_template_directory() . '/includes/custom-meta-boxes.php';

function load_css()
{
    wp_enqueue_style('main', get_template_directory_uri() . '/css/main.css', array(), null);
}
add_action('wp_enqueue_scripts', 'load_css');

function my_theme_enqueue_styles()
{
    // Enqueue your compiled Tailwind CSS file
    wp_enqueue_style('tailwindcss', get_template_directory_uri() . '/dist/output.css', array(), null);
}
add_action('wp_enqueue_scripts', 'my_theme_enqueue_styles');


//Styles: Font awesome
function enqueue_font_awesome()
{
    wp_enqueue_style('font-awesome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css');
}
add_action('wp_enqueue_scripts', 'enqueue_font_awesome');


//Styles: Google font
function enqueue_google_fonts()
{
    wp_enqueue_style("google-font", "https://fonts.googleapis.com/css2?family=Inter");
}
add_action('wp_enqueue_scripts', 'enqueue_google_fonts');


//Theme Options
add_theme_support('menus');
//Featured Image
add_theme_support('post-thumbnails');
//Widgets
add_theme_support('widgets');

//Menus
register_nav_menus(
    array(
        'top-menu' => 'Top Menu Location',
        'mobile-menu' => 'Mobile Menu Location',
        'footer-menu' => 'Footer Menu Location',
    )
);

//Custom Image Sizes
add_image_size('blog-large', 800, 600, true); // Adjust width, height, and cropping as needed
add_image_size('blog-small', 300, 200, true);


//Register Sidebars
function my_sidebars()
{
    register_sidebar(
        array(
            'name' => 'Page Sidebar',
            'id' => 'page-sidebar',
            'before_title' => '<h4 class="widget-title">',
            'after_title' => '</h4>'
        )
    );

    register_sidebar(
        array(
            'name' => 'Blog Sidebar',
            'id' => 'blog-sidebar',
            'before_title' => '<h4 class="widget-title">',
            'after_title' => '</h4>'
        )
    );
}
add_action('widgets_init', 'my_sidebars');


//Add Custom Post Types
function my_first_post_type()
{
    $args = array(
        'labels' => array(
            'name' => 'Teams',
            'singluar_name' => 'Team',
            'add_new' => 'Add Team', // Changes "Add New" in the menu
            'add_new_item' => 'Add New Team Member', // Changes "Add New Team" label on the add screen
            'edit_item' => 'Edit Team',
            'new_item' => 'New Team',
            'view_item' => 'View Team',
            'search_items' => 'Search Team',
            'not_found' => 'No Team Members found',
            'not_found_in_trash' => 'No Team Members found in Trash',
            'all_items' => 'All Team Members',
            'menu_name' => 'Team',
            'name_admin_bar' => 'Team' // Changes the name in the admin bar
        ),
        'hierarchical' => false,
        'public' => true,
        'has_archive' => true,
        'menu_icon' => 'dashicons-list-view',
        'supports' => array('title', 'editor', 'thumbnail', 'category', 'custom-fields'),
        // 'rewrite' => array('slug' => 'our-services'),
    );
    register_post_type('team', $args);
}
add_action('init', 'my_first_post_type');


//Add Cateogories To Custom Post Types
function my_first_taxonomy()
{
    $args = array(
        'labels' => array(
            'name' => 'Titles',
            'singluar_name' => 'Title',
        ),
        'public' => true,
        'hierarchical' => true,
    );

    register_taxonomy('titles', array('team'), $args);
}
add_action('init', 'my_first_taxonomy');

//Custom Field Type
//Skill Repeater Field
// Register the Skills meta box
function enqueue_team_skills_script()
{
    // Enqueue JavaScript only in the admin area and for the 'team' post type
    global $post_type;
    if (is_admin() && $post_type === 'team') {
        wp_enqueue_script(
            'team-skills-js', // Handle name
            get_template_directory_uri() . '/js/team-skills.js', // File location
            array('jquery'), // Dependencies
            null, // Version
            true // Load in footer
        );
    }
}
add_action('admin_enqueue_scripts', 'enqueue_team_skills_script');
