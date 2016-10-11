<?php
// Theme support options

require_once(get_template_directory().'/assets/functions/theme-support.php');

// Customizer options
require_once(get_template_directory().'/assets/functions/customizer.php');

// WP Head and other cleanup functions
require_once(get_template_directory().'/assets/functions/cleanup.php');

// Register scripts and stylesheets
require_once(get_template_directory().'/assets/functions/enqueue-scripts.php');

// Register custom menus and menu walkers
require_once(get_template_directory().'/assets/functions/menu.php');
require_once(get_template_directory().'/assets/functions/menu-walkers.php');

// Register sidebars/widget areas
require_once(get_template_directory().'/assets/functions/sidebar.php');

// Makes WordPress comments suck less
require_once(get_template_directory().'/assets/functions/comments.php');

// Replace 'older/newer' post links with numbered navigation
require_once(get_template_directory().'/assets/functions/page-navi.php');

// Setup initial pages and assign to main menu
require_once(get_template_directory().'/assets/functions/setup-pages.php');


// Adds support for multiple languages
require_once(get_template_directory().'/assets/translation/translation.php');

// Adds site styles to the WordPress editor
//require_once(get_template_directory().'/assets/functions/editor-styles.php');

// Related post function - no need to rely on plugins
// require_once(get_template_directory().'/assets/functions/related-posts.php');

// Use this as a template for custom post types
require_once(get_template_directory().'/assets/functions/custom-post-type.php');

// Customize the WordPress login menu
// require_once(get_template_directory().'/assets/functions/login.php');

// Customize the WordPress admin
// require_once(get_template_directory().'/assets/functions/admin.php');


function wpsx_5505_modify_uploaded_file_meta($meta, $file, $sourceImageType) {

    // Get the parent post ID, if there is one
    if( isset($_REQUEST['post_id']) ) {
        $post_id = $_REQUEST['post_id'];
    } else {
        $post_id = false;
    }

    // Only do this if we got the post ID--otherwise they're probably in
    //  the media section rather than uploading an image from a post.
    if($post_id && is_numeric($post_id)) {

        // Get the post title
        $post_title = get_the_title($post_id);
        $post_caption = get_field('image_description', $post_id);

        // If we found a title
        if($post_title) {

            $meta['title'] = $post_title . ' details';
            $meta['caption'] = $post_caption;

        }

    }

    return $meta;

}
add_filter('wp_read_image_metadata', 'wpsx_5505_modify_uploaded_file_meta', 1, 3);


add_action( 'init', 'wpa4182_init');
function wpa4182_init()
{
    global $wp_taxonomies;

    // The list of labels we can modify comes from
    //  http://codex.wordpress.org/Function_Reference/register_taxonomy
    //  http://core.trac.wordpress.org/browser/branches/3.0/wp-includes/taxonomy.php#L350
    $wp_taxonomies['post_tag']->labels = (object)array(
        'name' => 'Contributors',
        'menu_name' => 'Contributors',
        'singular_name' => 'Contributor',
        'search_items' => 'Search Contributors',
        'popular_items' => 'Popular Contributors',
        'all_items' => 'All Contributors',
        'parent_item' => null, // Tags aren't hierarchical
        'parent_item_colon' => null,
        'edit_item' => 'Edit Contributor',
        'update_item' => 'Update Contributor',
        'add_new_item' => 'Add new Contributor',
        'new_item_name' => 'New Contributor Name',
        'separate_items_with_commas' => 'Separate Contributors with commas',
        'add_or_remove_items' => 'Add or remove Contributors',
        'choose_from_most_used' => 'Choose from the most used Contributors',
    );

    $wp_taxonomies['post_tag']->label = 'Contributors';
}
