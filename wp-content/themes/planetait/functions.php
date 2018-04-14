<?php
/*
 *  Author: Todd Motto | @toddmotto
 *  URL: html5blank.com | @html5blank
 *  Custom functions, support, custom post types and more.
 *  Customised by Patryk Mirosław | miroslaw.patryk@gmail.com | http://patmir.com
 */

/*------------------------------------*\
	External Modules/Files/Classes
\*------------------------------------*/
// load config.json and register for GlobalConfig

require_once("config_res.php");
require_once("classes.php");
foreach (json_decode(file_get_contents(get_template_directory() . DIRECTORY_SEPARATOR . 'config.json'), true) as $config_item_name => $config_item_value) {
    GlobalConfig::set($config_item_name, $config_item_value);
}

/*------------------------------------*\
	Theme Support
\*------------------------------------*/

if (!isset($content_width)) {
    $content_width = 900;
}

if (function_exists('add_theme_support')) {
    // Add Menu Support
    add_theme_support('menus');

    // Add Thumbnail Theme Support
    add_theme_support('post-thumbnails');
    add_image_size('large', 700, '', true); // Large Thumbnail
    add_image_size('medium', 250, '', true); // Medium Thumbnail
    add_image_size('small', 120, '', true); // Small Thumbnail
    add_image_size('custom-size', 700, 200, true); // Custom Thumbnail Size call using the_post_thumbnail('custom-size');

    // Add Support for Custom Backgrounds - Uncomment below if you're going to use
    /*add_theme_support('custom-background', array(
	'default-color' => 'FFF',
	'default-image' => get_template_directory_uri() . '/img/bg.jpg'
    ));*/

    // Add Support for Custom Header - Uncomment below if you're going to use
    /*add_theme_support('custom-header', array(
	'default-image'			=> get_template_directory_uri() . '/img/headers/default.jpg',
	'header-text'			=> false,
	'default-text-color'		=> '000',
	'width'				=> 1000,
	'height'			=> 198,
	'random-default'		=> false,
	'wp-head-callback'		=> $wphead_cb,
	'admin-head-callback'		=> $adminhead_cb,
	'admin-preview-callback'	=> $adminpreview_cb
    ));*/

    // Enables post and comment RSS feed links to head
    add_theme_support('automatic-feed-links');

    // Localisation Support
    load_theme_textdomain('html5blank', get_template_directory() . '/languages');
}

/*------------------------------------*\
	Functions
\*------------------------------------*/

// HTML5 Blank navigation
function html5blank_nav()
{
    wp_nav_menu(
        array(
            'theme_location' => 'header-menu',
            'menu' => '',
            'container' => 'div',
            'container_class' => 'menu-{menu slug}-container',
            'container_id' => '',
            'menu_class' => 'menu',
            'menu_id' => '',
            'echo' => true,
            'fallback_cb' => 'wp_page_menu',
            'before' => '',
            'after' => '',
            'link_before' => '',
            'link_after' => '',
            'items_wrap' => '<ul>%3$s</ul>',
            'depth' => 0,
            'walker' => new Project_MenuWalker()
        )
    );
}

// Load HTML5 Blank scripts (header.php)
function html5blank_header_scripts()
{
    if ($GLOBALS['pagenow'] != 'wp-login.php' && !is_admin()) {

        wp_register_script('conditionizr', get_template_directory_uri() . '/js/lib/conditionizr-4.3.0.min.js', array(), '4.3.0'); // Conditionizr
        wp_enqueue_script('conditionizr'); // Enqueue it!

        wp_register_script('modernizr', get_template_directory_uri() . '/js/lib/modernizr-2.7.1.min.js', array(), '2.7.1'); // Modernizr
        wp_enqueue_script('modernizr'); // Enqueue it!

        wp_register_script('html5blankscripts', get_template_directory_uri() . '/js/scripts.js', array('jquery'), '1.0.0'); // Custom scripts
        wp_enqueue_script('html5blankscripts'); // Enqueue it!
    }
}

// Load HTML5 Blank conditional scripts
function html5blank_conditional_scripts()
{
    if (is_page('pagenamehere')) {
        wp_register_script('scriptname', get_template_directory_uri() . '/js/scriptname.js', array('jquery'), '1.0.0'); // Conditional script(s)
        wp_enqueue_script('scriptname'); // Enqueue it!
    }
}

// Load HTML5 Blank styles
function html5blank_styles()
{
    wp_register_style('normalize', get_template_directory_uri() . '/normalize.css', array(), '1.0', 'all');
    wp_enqueue_style('normalize'); // Enqueue it!

    wp_register_style('html5blank', get_template_directory_uri() . '/style.css', array(), '1.0', 'all');
    wp_enqueue_style('html5blank'); // Enqueue it!
}

// Register HTML5 Blank Navigation
function register_html5_menu()
{
    register_nav_menus(array( // Using array to specify more menus if needed
        'header-menu' => __('Header Menu', 'html5blank'), // Main Navigation
        'sidebar-menu' => __('Sidebar Menu', 'html5blank'), // Sidebar Navigation
        'extra-menu' => __('Extra Menu', 'html5blank') // Extra Navigation if needed (duplicate as many as you need!)
    ));
}

// Remove the <div> surrounding the dynamic navigation to cleanup markup
function my_wp_nav_menu_args($args = '')
{
    $args['container'] = false;
    return $args;
}

// Remove Injected classes, ID's and Page ID's from Navigation <li> items
function my_css_attributes_filter($var)
{
    return is_array($var) ? array() : '';
}

// Remove invalid rel attribute values in the categorylist
function remove_category_rel_from_category_list($thelist)
{
    return str_replace('rel="category tag"', 'rel="tag"', $thelist);
}

// Add page slug to body class, love this - Credit: Starkers Wordpress Theme
function add_slug_to_body_class($classes)
{
    global $post;
    if (is_home()) {
        $key = array_search('blog', $classes);
        if ($key > -1) {
            unset($classes[$key]);
        }
    } elseif (is_page()) {
        $classes[] = sanitize_html_class($post->post_name);
    } elseif (is_singular()) {
        $classes[] = sanitize_html_class($post->post_name);
    }

    return $classes;
}

// If Dynamic Sidebar Exists
if (function_exists('register_sidebar')) {
    // Define Sidebar Widget Area 1
    register_sidebar(array(
        'name' => __('Widget Area 1', 'html5blank'),
        'description' => __('Description for this widget-area...', 'html5blank'),
        'id' => 'widget-area-1',
        'before_widget' => '<div id="%1$s" class="%2$s">',
        'after_widget' => '</div>',
        'before_title' => '<h3>',
        'after_title' => '</h3>'
    ));

    // Define Sidebar Widget Area 2
    register_sidebar(array(
        'name' => __('Widget Area 2', 'html5blank'),
        'description' => __('Description for this widget-area...', 'html5blank'),
        'id' => 'widget-area-2',
        'before_widget' => '<div id="%1$s" class="%2$s">',
        'after_widget' => '</div>',
        'before_title' => '<h3>',
        'after_title' => '</h3>'
    ));
}

// Remove wp_head() injected Recent Comment styles
function my_remove_recent_comments_style()
{
    global $wp_widget_factory;
    remove_action('wp_head', array(
        $wp_widget_factory->widgets['WP_Widget_Recent_Comments'],
        'recent_comments_style'
    ));
}

// Pagination for paged posts, Page 1, Page 2, Page 3, with Next and Previous Links, No plugin
function html5wp_pagination()
{
    global $wp_query;
    $big = 999999999;
    echo paginate_links(array(
        'base' => str_replace($big, '%#%', get_pagenum_link($big)),
        'format' => '?paged=%#%',
        'current' => max(1, get_query_var('paged')),
        'total' => $wp_query->max_num_pages
    ));
}

// Custom Excerpts
function html5wp_index($length) // Create 20 Word Callback for Index page Excerpts, call using html5wp_excerpt('html5wp_index');
{
    return 20;
}

// Create 40 Word Callback for Custom Post Excerpts, call using html5wp_excerpt('html5wp_custom_post');
function html5wp_custom_post($length)
{
    return 40;
}

// Create the Custom Excerpts callback
function html5wp_excerpt($length_callback = '', $more_callback = '')
{
    global $post;
    if (function_exists($length_callback)) {
        add_filter('excerpt_length', $length_callback);
    }
    if (function_exists($more_callback)) {
        add_filter('excerpt_more', $more_callback);
    }
    $output = get_the_excerpt();
    $output = apply_filters('wptexturize', $output);
    $output = apply_filters('convert_chars', $output);
    $output = '<p>' . $output . '</p>';
    echo $output;
}

// Custom View Article link to Post
function html5_blank_view_article($more)
{
    global $post;
    return '... <a class="view-article" href="' . get_permalink($post->ID) . '">' . __('View Article', 'html5blank') . '</a>';
}

// Remove Admin bar
function remove_admin_bar()
{
    return false;
}

// Remove 'text/css' from our enqueued stylesheet
function html5_style_remove($tag)
{
    return preg_replace('~\s+type=["\'][^"\']++["\']~', '', $tag);
}

// Remove thumbnail width and height dimensions that prevent fluid images in the_thumbnail
function remove_thumbnail_dimensions($html)
{
    $html = preg_replace('/(width|height)=\"\d*\"\s/', "", $html);
    return $html;
}

// Custom Gravatar in Settings > Discussion
function html5blankgravatar($avatar_defaults)
{
    $myavatar = get_template_directory_uri() . '/img/gravatar.jpg';
    $avatar_defaults[$myavatar] = "Custom Gravatar";
    return $avatar_defaults;
}

// Threaded Comments
function enable_threaded_comments()
{
    if (!is_admin()) {
        if (is_singular() and comments_open() and (get_option('thread_comments') == 1)) {
            wp_enqueue_script('comment-reply');
        }
    }
}

// Custom Comments Callback
function html5blankcomments($comment, $args, $depth)
{
    $GLOBALS['comment'] = $comment;
    extract($args, EXTR_SKIP);

    if ('div' == $args['style']) {
        $tag = 'div';
        $add_below = 'comment';
    } else {
        $tag = 'li';
        $add_below = 'div-comment';
    }
    ?>
    <!-- heads up: starting < for the html tag (li or div) in the next line: -->
    <<?php echo $tag ?> <?php comment_class(empty($args['has_children']) ? '' : 'parent') ?> id="comment-<?php comment_ID() ?>">
	<?php if ('div' != $args['style']) : ?>
	<div id="div-comment-<?php comment_ID() ?>" class="comment-body">
	<?php endif; ?>
	<div class="comment-author vcard">
	<?php if ($args['avatar_size'] != 0) echo get_avatar($comment, $args['180']); ?>
	<?php printf(__('<cite class="fn">%s</cite> <span class="says">says:</span>'), get_comment_author_link()) ?>
	</div>
<?php if ($comment->comment_approved == '0') : ?>
	<em class="comment-awaiting-moderation"><?php _e('Your comment is awaiting moderation.') ?></em>
	<br />
<?php endif; ?>

	<div class="comment-meta commentmetadata"><a href="<?php echo htmlspecialchars(get_comment_link($comment->comment_ID)) ?>">
		<?php
    printf(__('%1$s at %2$s'), get_comment_date(), get_comment_time()) ?></a><?php edit_comment_link(__('(Edit)'), '  ', '');
                                                                            ?>
	</div>

	<?php comment_text() ?>

	<div class="reply">
	<?php comment_reply_link(array_merge($args, array('add_below' => $add_below, 'depth' => $depth, 'max_depth' => $args['max_depth']))) ?>
	</div>
	<?php if ('div' != $args['style']) : ?>
	</div>
	<?php endif; ?>
<?php 
}

/*------------------------------------*\
	Actions + Filters + ShortCodes
\*------------------------------------*/

// Add Actions
add_action('init', 'html5blank_header_scripts'); // Add Custom Scripts to wp_head
add_action('wp_print_scripts', 'html5blank_conditional_scripts'); // Add Conditional Page Scripts
add_action('get_header', 'enable_threaded_comments'); // Enable Threaded Comments
add_action('wp_enqueue_scripts', 'html5blank_styles'); // Add Theme Stylesheet
add_action('init', 'register_html5_menu'); // Add HTML5 Blank Menu
add_action('admin_menu', 'register_html5_admin_menu'); // Add Admin Menu
add_action('init', 'create_post_type_html5'); // Add our HTML5 Blank Custom Post Type
add_action('widgets_init', 'my_remove_recent_comments_style'); // Remove inline Recent Comment Styles from wp_head()
add_action('init', 'html5wp_pagination'); // Add our HTML5 Pagination

// Remove Actions
remove_action('wp_head', 'feed_links_extra', 3); // Display the links to the extra feeds such as category feeds
remove_action('wp_head', 'feed_links', 2); // Display the links to the general feeds: Post and Comment Feed
remove_action('wp_head', 'rsd_link'); // Display the link to the Really Simple Discovery service endpoint, EditURI link
remove_action('wp_head', 'wlwmanifest_link'); // Display the link to the Windows Live Writer manifest file.
remove_action('wp_head', 'index_rel_link'); // Index link
remove_action('wp_head', 'parent_post_rel_link', 10, 0); // Prev link
remove_action('wp_head', 'start_post_rel_link', 10, 0); // Start link
remove_action('wp_head', 'adjacent_posts_rel_link', 10, 0); // Display relational links for the posts adjacent to the current post.
remove_action('wp_head', 'wp_generator'); // Display the XHTML generator that is generated on the wp_head hook, WP version
remove_action('wp_head', 'adjacent_posts_rel_link_wp_head', 10, 0);
remove_action('wp_head', 'rel_canonical');
remove_action('wp_head', 'wp_shortlink_wp_head', 10, 0);

// Add Filters
add_filter('avatar_defaults', 'html5blankgravatar'); // Custom Gravatar in Settings > Discussion
add_filter('body_class', 'add_slug_to_body_class'); // Add slug to body class (Starkers build)
add_filter('widget_text', 'do_shortcode'); // Allow shortcodes in Dynamic Sidebar
add_filter('widget_text', 'shortcode_unautop'); // Remove <p> tags in Dynamic Sidebars (better!)
add_filter('wp_nav_menu_args', 'my_wp_nav_menu_args'); // Remove surrounding <div> from WP Navigation
// add_filter('nav_menu_css_class', 'my_css_attributes_filter', 100, 1); // Remove Navigation <li> injected classes (Commented out by default)
// add_filter('nav_menu_item_id', 'my_css_attributes_filter', 100, 1); // Remove Navigation <li> injected ID (Commented out by default)
// add_filter('page_css_class', 'my_css_attributes_filter', 100, 1); // Remove Navigation <li> Page ID's (Commented out by default)
add_filter('the_category', 'remove_category_rel_from_category_list'); // Remove invalid rel attribute
add_filter('the_excerpt', 'shortcode_unautop'); // Remove auto <p> tags in Excerpt (Manual Excerpts only)
add_filter('the_excerpt', 'do_shortcode'); // Allows Shortcodes to be executed in Excerpt (Manual Excerpts only)
add_filter('excerpt_more', 'html5_blank_view_article'); // Add 'View Article' button instead of [...] for Excerpts
add_filter('show_admin_bar', 'remove_admin_bar'); // Remove Admin bar
add_filter('style_loader_tag', 'html5_style_remove'); // Remove 'text/css' from enqueued stylesheet
add_filter('post_thumbnail_html', 'remove_thumbnail_dimensions', 10); // Remove width and height dynamic attributes to thumbnails
add_filter('image_send_to_editor', 'remove_thumbnail_dimensions', 10); // Remove width and height dynamic attributes to post images

// Remove Filters
remove_filter('the_excerpt', 'wpautop'); // Remove <p> tags from Excerpt altogether

// Shortcodes
add_shortcode('html5_shortcode_demo', 'html5_shortcode_demo'); // You can place [html5_shortcode_demo] in Pages, Posts now.
add_shortcode('html5_shortcode_demo_2', 'html5_shortcode_demo_2'); // Place [html5_shortcode_demo_2] in Pages, Posts now.

// Shortcodes above would be nested like this -
// [html5_shortcode_demo] [html5_shortcode_demo_2] Here's the page title! [/html5_shortcode_demo_2] [/html5_shortcode_demo]

/*********************************
 * Custom Admin Menu Entry
 */

function register_html5_admin_menu()
{
    add_menu_page("Planeta IT - Zarządzanie", GlobalConfig::get("project_pretty_name"), "administrator", GlobalConfig::get("project_slug_name"), null, GlobalConfig::get("admin_menu_icon"), 1);
    add_submenu_page(GlobalConfig::get("project_slug_name"), GlobalConfig::get("project_pretty_name") . " - Ustawienia", "Ustawienia", "administrator", GlobalConfig::get("project_slug_name") . "_ustawienia", "admin_project_ustawienia_page_content");
}

/***
 * Admin page content functions
 * 
 */
function admin_project_ustawienia_page_content()
{
    ?>
        <button id="ustawienia_generuj_tresci">Generuj Treści</button>
    <?php

}
add_action('admin_footer', 'ustawienia_ajax');

function ustawienia_ajax()
{
    $ajax_generate_content_nonce = wp_create_nonce("ajax-generate-content-nonce");
    ?>
	<script type="text/javascript">
	jQuery(document).ready(function($) {

        jQuery("#ustawienia_generuj_tresci").click(function(){
            var data = {
			action: 'project_generate_content',            
		    security: '<?php echo $ajax_generate_content_nonce; ?>',
            flush: true
		};

		jQuery.post(ajaxurl, data, function(response) {
			console.log(response);
		});


        });
		
	});
	</script> <?php

        }
        add_action('wp_ajax_project_generate_content', 'project_generate_content');

        function project_generate_content()
        {
            global $wpdb; // generating content
            $flush = bool( $_POST['flush'] );
    // Creating main sections
            check_ajax_referer('ajax-generate-content-nonce', 'security');

            // check for post existance
            $page_projects = post_exists("Projekty");
            $page_refferences= post_exists("Referencje");
            $page_carrier= post_exists("Kariera");
            $page_contact= post_exists("Kontakt");

            $section_what_we_do = post_exists("Co Robimy");
            $section_achievements = post_exists("Osiągnięcia");
            $section_prog_languages = post_exists("Języki Programowania");
            $section_about_us = post_exists("O Nas");
            $section_partners = post_exists("Partnerzy");

            if ($page_projects != 0 && $flush) {
                wp_delete_post($page_projects, true);
            }
            if ($page_refferences != 0 && $flush) {
                wp_delete_post($page_refferences, true);
            }
            if ($page_carrier != 0 && $flush) {
                wp_delete_post($page_carrier, true);
            }
            if ($page_contact != 0 && $flush) {
                wp_delete_post($page_contact, true);
            }
            if ($page_projects == 0) {
                $page_projects = wp_insert_post(array(
                    "post_content" => "Projekty",
                    "post_title" => "Projekty",
                    "post_status" => "publish",
                    "post_type" => "sub_page",
                    "menu_order" => 1
                ));
            }
            if ($page_refferences == 0) {
                $page_refferences = wp_insert_post(array(
                    "post_content" => "Referencje",
                    "post_title" => "Referencje",
                    "post_status" => "publish",
                    "post_type" => "sub_page",
                    "menu_order" => 1
                ));
            }
            if ($page_carrier == 0) {
                $page_carrier = wp_insert_post(array(
                    "post_content" => "Kariera",
                    "post_title" => "Kariera",
                    "post_status" => "publish",
                    "post_type" => "sub_page",
                    "menu_order" => 1
                ));
            }
            if ($page_contact == 0) {
                $page_contact = wp_insert_post(array(
                    "post_content" => "Kontakt",
                    "post_title" => "Kontakt",
                    "post_status" => "publish",
                    "post_type" => "sub_page",
                    "menu_order" => 1
                ));
            }

            if ($section_what_we_do != 0 && $flush) {
                wp_delete_post($section_what_we_do, true);
            }
            if ($section_achievements != 0 && $flush) {
                wp_delete_post($section_achievements, true);
            }
            if ($section_prog_languages != 0 && $flush) {
                wp_delete_post($section_prog_languages, true);
            }
            if ($section_about_us != 0 && $flush) {
                wp_delete_post($section_about_us, true);
            }
            if ($section_partners != 0 && $flush) {
                wp_delete_post($section_partners, true);
            }
            if ($section_what_we_do == 0) {
                $section_what_we_do = wp_insert_post(array(
                    "post_content" => "Co robimy",
                    "post_title" => "Co Robimy",
                    "post_status" => "publish",
                    "post_type" => "section_main",
                    "menu_order" => 1
                ));
            }
            if ($section_achievements == 0) {
                $section_achievements = wp_insert_post(array(
                    "post_content" => "Osiągnięcia",
                    "post_title" => "Osiągnięcia",
                    "post_status" => "publish",
                    "post_type" => "section_main",
                    "menu_order" => 2
                ));
            }
            if ($section_prog_languages == 0) {

                $section_prog_languages = wp_insert_post(array(
                    "post_content" => "Języki Programowania",
                    "post_title" => "Języki Programowania",
                    "post_status" => "publish",
                    "post_type" => "section_main",
                    "menu_order" => 3
                ));
            }
            if ($section_about_us == 0) {
                $section_about_us = wp_insert_post(array(
                    "post_content" => "O Nas",
                    "post_title" => "O Nas",
                    "post_status" => "publish",
                    "post_type" => "section_main",
                    "menu_order" => 4
                ));
            }
            if ($section_partners == 0) {
                $section_partners = wp_insert_post(array(
                    "post_content" => "Partnerzy",
                    "post_title" => "Partnerzy",
                    "post_status" => "publish",
                    "post_type" => "section_main",
                    "menu_order" => 5
                ));
            }
// create pages

            // create menu
            wp_delete_nav_menu(GlobalConfig::get("project_slug_name")."_menu");

            $menu = wp_create_nav_menu( GlobalConfig::get("project_slug_name")."_menu");

            wp_update_nav_menu_item($menu, 0, array(
                "menu-item-title" => __("Strona Główna"),
                "menu-item-classes" => "nav-home",
                "menu-item-url" => home_url("/"),
                "menu-item-status" => "publish"
            ));
            $pagess = get_posts(array(
                'posts_per_page' => 99999,
                'orderby' => 'menu_order',
                'order' => 'ASC',
                'post_type' => 'sub_page',
                'post_status' => 'publish'
            
            ));
            foreach($pages as $page){
                wp_update_nav_menu_item($menu, 0, array(
                    "menu-item-title" => $page->post_title,
                    "menu-item-classes" => "nav-item",
                    "menu-item-url" => get_permalink($page->ID),
                    "menu-item-status" => "publish"
                ));
            }
            if((bool)GlobalConfig::get("menu_get_quote_enabled")){
                wp_update_nav_menu_item($menu, 0, array(
                    "menu-item-title" => __("Zapytaj o Ofertę"),
                    "menu-item-classes" => "nav-quote",
                    "menu-item-url" => get_permalink($page_contact)."#contact-form",
                    "menu-item-status" => "publish"
                ));
            }
            wp_die(); // this is required to terminate immediately and return a proper response
        }
/*------------------------------------*\
	Custom Post Types
\*------------------------------------*/

// Create 1 Custom Post type for a Demo, called HTML5-Blank
        function create_post_type_html5()
        {
            register_taxonomy_for_object_type('category', 'sub_page');
            register_taxonomy_for_object_type('category', 'job_listing');
            register_taxonomy_for_object_type('post_tag', 'sub_page');
            register_taxonomy_for_object_type('post_tag', 'job_listing');

            register_post_type(
                'section_main',
                array(
                    'labels' => array(
                        'name' => __('Sekcje strony głównej', 'html5blank'),
                        'singular_name' => __('Sekcja strony głównej', 'html5blank'),
                        'add_new' => __('Dodaj nową sekcję', 'html5blank'),
                        'add_new_item' => __('Dodaj nową sekcję', 'html5blank'),
                        'edit' => __('Edytuj', 'html5blank'),
                        'edit_item' => __('Edytuj sekcję', 'html5blank'),
                        'new_item' => __('Nowa sekcja', 'html5blank'),
                        'view' => __('Zobacz', 'html5blank'),
                        'view_item' => __('Zobacz sekcję', 'html5blank'),
                        'search_items' => __('Szukaj', 'html5blank'),
                        'not_found' => __('Nie znaleziono sekcji', 'html5blank'),
                        'not_found_in_trash' => __('Nie znaleziono sekcji w koszu', 'html5blank'),
                        'description' => __('Sekcje widoczne na stronie głównej', 'html5blank'),
                    ),
                    'public' => true,
                    'hierarchical' => true,
                    'has_archive' => true,
                    'supports' => array(
                        'title',
                        'editor',
                        'excerpt',
                        'thumbnail'
                    ),
                    'can_export' => true,
                    'show_ui' => true,
                    'show_in_nav_menus' => false,
                    'show_in_menu' => GlobalConfig::get("project_slug_name"),
                )
            );

            register_post_type(
                'sub_page',
                array(
                    'labels' => array(
                        'name' => __('Podstrony', 'html5blank'),
                        'singular_name' => __('Podstrona', 'html5blank'),
                        'add_new' => __('Dodaj nową podstronę', 'html5blank'),
                        'add_new_item' => __('Dodaj nową podstronę', 'html5blank'),
                        'edit' => __('Edytuj', 'html5blank'),
                        'edit_item' => __('Edytuj podstronę', 'html5blank'),
                        'new_item' => __('Nowa podstrona', 'html5blank'),
                        'view' => __('Zobacz', 'html5blank'),
                        'view_item' => __('Zobacz podstronę', 'html5blank'),
                        'search_items' => __('Szukaj', 'html5blank'),
                        'not_found' => __('Nie znaleziono podstron', 'html5blank'),
                        'not_found_in_trash' => __('Nie znaleziono podstron w koszu', 'html5blank'),
                        'description' => __('Podstrony', 'html5blank')
                    ),
                    'public' => true,
                    'hierarchical' => true,
                    'has_archive' => true,
                    'supports' => array(
                        'title',
                        'editor',
                        'excerpt',
                        'thumbnail'
                    ),
                    'can_export' => true,
                    'show_ui' => true,
                    'show_in_nav_menus' => false,
                    'show_in_menu' => GlobalConfig::get("project_slug_name"),
                    'exclude_from_search' => false,
                    'taxonomies' => array(
                        'post_tag',
                        'category'
                    )
                )
            );
            register_post_type(
                'job_listing',
                array(
                    'labels' => array(
                        'name' => __('Oferty pracy', 'html5blank'),
                        'singular_name' => __('Oferta pracy', 'html5blank'),
                        'add_new' => __('Dodaj nową ofertę pracy', 'html5blank'),
                        'add_new_item' => __('Dodaj nową ofertę pracy', 'html5blank'),
                        'edit' => __('Edytuj', 'html5blank'),
                        'edit_item' => __('Edytuj ofertę pracy', 'html5blank'),
                        'new_item' => __('Nowa oferta pracy', 'html5blank'),
                        'view' => __('Zobacz', 'html5blank'),
                        'view_item' => __('Zobacz ofertę pracy', 'html5blank'),
                        'search_items' => __('Szukaj', 'html5blank'),
                        'not_found' => __('Nie znaleziono ofert pracy', 'html5blank'),
                        'not_found_in_trash' => __('Nie znaleziono ofert pracy w koszu', 'html5blank'),
                        'description' => __('Oferty Pracy', 'html5blank')
                    ),
                    'show_ui' => true,
                    'show_in_nav_menus' => false,
                    'show_in_menu' => GlobalConfig::get("project_slug_name"),
                    'exclude_from_search' => false,
                    'public' => true,
                    'hierarchical' => true,
                    'has_archive' => true,
                    'supports' => array(
                        'title',
                        'editor',
                        'excerpt',
                        'thumbnail'
                    ),
                    'can_export' => true,
                    'taxonomies' => array(
                        'post_tag',
                        'category'
                    )
                )
            );
        }

/*------------------------------------*\
	ShortCode Functions
\*------------------------------------*/

// Shortcode Demo with Nested Capability
        function html5_shortcode_demo($atts, $content = null)
        {
            return '<div class="shortcode-demo">' . do_shortcode($content) . '</div>'; // do_shortcode allows for nested Shortcodes
        }

// Shortcode Demo with simple <h2> tag
        function html5_shortcode_demo_2($atts, $content = null) // Demo Heading H2 shortcode, allows for nesting within above element. Fully expandable.
        {
            return '<h2>' . $content . '</h2>';
        }

        ?>