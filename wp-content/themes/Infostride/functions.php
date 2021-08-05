<?php 
// require get_template_directory(  ). '/acf-repeater.php';
    function profetch_solution_scripts(){

        //stylesheets
        wp_enqueue_style('main_style', get_stylesheet_uri());
        wp_enqueue_style('animate.min.css', get_template_directory_uri().'/assets/vendor/animate.css/animate.min.css');
        //wp_enqueue_style('aos.css', get_template_directory_uri().'/assets/vendor/aos/aos.css');
        wp_enqueue_style('bootstrap.min.css', get_template_directory_uri().'/assets/vendor/bootstrap/css/bootstrap.min.css');
        wp_enqueue_style('bootstrap-icons.css', get_template_directory_uri().'/assets/vendor/bootstrap-icons/bootstrap-icons.css');
        wp_enqueue_style('boxicons.min.css', get_template_directory_uri().'/assets/vendor/boxicons/css/boxicons.min.css');
        wp_enqueue_style('remixicon.css', get_template_directory_uri().'/assets/vendor/remixicon/remixicon.css');
        wp_enqueue_style('swiper-bundle.min.css', get_template_directory_uri().'/assets/vendor/swiper/swiper-bundle.min.css');
        wp_enqueue_style('style.css', get_template_directory_uri().'/assets/css/style.css');

        //javascripts
        wp_enqueue_script('main.js',get_template_directory_uri().'/assets/js/main.js',array(),'1.1', true);
        wp_enqueue_script('swiper-bundle.min.js',get_template_directory_uri().'/assets/vendor/swiper/swiper-bundle.min.js',array(),'1.1', true);
        wp_enqueue_script('aos.js',get_template_directory_uri().'/assets/vendor/aos/aos.js',array(),'1.1', true);
        wp_enqueue_script('validate.js',get_template_directory_uri().'/assets/vendor/php-email-form/validate.js',array(),'1.1', true);
        wp_enqueue_script('purecounter.js',get_template_directory_uri().'/assets/vendor/purecounter/purecounter.js',array(),'1.1', true);
        wp_enqueue_script('swiper-bundle.min.js',get_template_directory_uri().'/assets/vendor/swiper/swiper-bundle.min.js',array(),'1.1', true);
    }
    //attach with action hook

    add_action("wp_enqueue_scripts","profetch_solution_scripts");

    // REgister Nav Menu
    function register_my_menus() {   
        register_nav_menus(
          array(
            'header-menu' => __( 'Header Menu' ),
            'extra-menu' => __( 'Extra Menu' )
           )
         );
       }
       add_action( 'init', 'register_my_menus' );


       /* ADD theme support for logo */
add_theme_support( 'custom-logo' );

function themename_custom_logo_setup() {
 $defaults = array(
 'height'      => 100,
 'width'       => 400,
 'flex-height' => true,
 'flex-width'  => true,
 'header-text' => array( 'site-title', 'site-description' ),
'unlink-homepage-logo' => true, 
 );
 add_theme_support( 'custom-logo', $defaults );
}
add_action( 'after_setup_theme', 'themename_custom_logo_setup' );
/* ADD theme support for logo ends here*/

function themename_custom_header_setup() {
  $args = array(
      'default-image'      => get_template_directory_uri() . 'img/default-image.jpg',
      'default-text-color' => '000',
      'width'              => 1000,
      'height'             => 250,
      'flex-width'         => true,
      'flex-height'        => true,
  );
  add_theme_support( 'custom-header', $args );
}
add_action( 'after_setup_theme', 'themename_custom_header_setup' );



 /* Add sidebar */
 function profotech_register_sidebar(){
    //Footer Sidebar 1 will created
    register_sidebar(array(
         'name' => __('Footer Sidebar 1', 'theme_name'),
         'id' =>'sidebar-1',
         'before_widget' =>'<aside id="%1$s" class="widget %2$s">',
         'after_widget' => '</aside>',
         'before_title' => '<h4 class="widget-title">',
         'after_title' => '</h4>',
     ));
  //Footer Sidebar 2 will created
  register_sidebar(array(
         'name' => __('Footer Sidebar 2', 'theme_name'),
         'id' => 'sidebar-2',
         'before_widget' =>'<aside id="%1$s" class="widget %2$s">',
         'after_widget' => '</aside>',
         'before_title' => '<h4 class="widget-title">',
         'after_title' => '</h4>',
     ));
     register_sidebar(array(
        'name' => __('Footer Sidebar 3', 'theme_name'),
        'id' => 'sidebar-3',
        'before_widget' =>'<aside id="%1$s" class="widget %2$s">',
        'after_widget' => '</aside>',
        'before_title' => '<h4 class="widget-title">',
        'after_title' => '</h4>',
    ));
    register_sidebar(array(
      'name' => __('Footer Sidebar 4', 'theme_name'),
      'id' => 'sidebar-4',
      'before_widget' =>'<aside id="%1$s" class="widget %2$s">',
      'after_widget' => '</aside>',
      'before_title' => '<h4 class="widget-title">',
      'after_title' => '</h4>',
  ));
  

register_sidebar(array(
  'name' => __('Footer sidebar', 'theme_name'),
  'id' => 'footer-sidebar-5',
  'before_widget' =>'<aside id="%1$s" class="widget %2$s">',
  'after_widget' => '</aside>',
  'before_title' => '<h4 class="widget-title">',
  'after_title' => '</h4>',
));


register_sidebar(array(
  'name' => __('Home Section', 'theme_name'),
  'id' =>'home-section',
  'before_widget' =>'<aside id="%1$s" class="widget %2$s">',
  'after_widget' => '</aside>',
  'before_title' => '<h4 class="widget-title">',
  'after_title' => '</h4>',
));


register_sidebar(array(
  'name' => __('contact-side-1', 'theme_name'),
  'id' => 'contact-2',
  'before_widget' =>'<aside id="%1$s" class="widget %2$s">',
  'after_widget' => '</aside>',
  'before_title' => '<h4 class="widget-title">',
  'after_title' => '</h4>',
));

register_sidebar(array(
  'name' => __('contact-map', 'theme_name'),
  'id' => 'contact-1',
  'before_widget' =>'<aside id="%1$s" class="widget %2$s">',
  'after_widget' => '</aside>',
  'before_title' => '<h4 class="widget-title">',
  'after_title' => '</h4>',
));

 }

 add_action("widgets_init","profotech_register_sidebar");

 /** Sidebar ends */

 /** Add Fetured Image  */
 function owt_theme_supports(){

    add_theme_support("post-thumbnails");
    //images size
    add_image_size("small-thumbnail",334,223,true); // 120 wide 90 tall
    add_image_size("banner-image",352,241,true);
 
    // post formats
    add_theme_support("post-formats",array("aside","gallery","link"));
 }
 
 // functions used to show thumbnail image:
 the_post_thumbnail('small-thumbnail');
 
 add_action("after_setup_theme","owt_theme_supports");
 
 /**Ends fetured image  */

add_theme_support( 'post-thumbnails' );
add_post_type_support( 'themes', 'thumbnail' );



 /**starts first Trainer function */
function my_custom_post_trainer() {
  $labels = array(
    'name'               => _x( 'trainers', 'post type general name' ),
    'singular_name'      => _x( 'trainer', 'post type singular name' ),
    'add_new'            => _x( 'Add New', 'book' ),
    'add_new_item'       => __( 'Add New trainer' ),
    'edit_item'          => __( 'Edit trainer' ),
    'new_item'           => __( 'New trainer' ),
    'all_items'          => __( 'All trainers' ),
    'view_item'          => __( 'View trainer' ),
    'search_items'       => __( 'Search trainers' ),
    'not_found'          => __( 'No trainers found' ),
    'not_found_in_trash' => __( 'No trainers found in the Trash' ), 
    'menu_name'          => 'trainers'
  );
  $args = array(
    'labels'        => $labels,
    'description'   => 'Holds our trainers and trainer specific data',
    'public'        => true,
    'menu_position' => 5,
    'supports'      => array( 'title', 'editor', 'thumbnail', 'excerpt', 'comments' ),
    'has_archive'   => true,
  );
  register_post_type( 'trainer', $args ); 
}
add_action( 'init', 'my_custom_post_trainer' );
 /**end first trainer function */

/**starts first pricing function */
 function my_custom_post_pricing() {
  $labels = array(
    'name'               => _x( 'Pricing', 'post type general name' ),
    'singular_name'      => _x( 'Pricing', 'post type singular name' ),
    'add_new'            => _x( 'Add New', 'book' ),
    'add_new_item'       => __( 'Add New pricing' ),
    'edit_item'          => __( 'Edit pricing' ),
    'new_item'           => __( 'New pricing' ),
    'all_items'          => __( 'All pricings' ),
    'view_item'          => __( 'View pricing' ),
    'search_items'       => __( 'Search pricings' ),
    'not_found'          => __( 'No pricings found' ),
    'not_found_in_trash' => __( 'No pricings found in the Trash' ), 
    'menu_name'          => 'pricings'
  );
  $args = array(
    'labels'        => $labels,
    'description'   => 'Holds our pricings and pricing specific data',
    'public'        => true,
    'menu_position' => 5,
    'supports'      => array( 'title', 'editor', 'thumbnail', 'excerpt', 'comments' ),
    'has_archive'   => true,
  );
  register_post_type( 'pricing', $args ); 
}
add_action( 'init', 'my_custom_post_pricing' );
/**ends first pricing function */



/**starts first contact function */
// function my_custom_post_contact() {
//   $labels = array(
//     'name'               => _x( 'contacts', 'post type general name' ),
//     'singular_name'      => _x( 'contact', 'post type singular name' ),
//     'add_new'            => _x( 'Add New', 'book' ),
//     'add_new_item'       => __( 'Add New contact' ),
//     'edit_item'          => __( 'Edit contact' ),
//     'new_item'           => __( 'New contact' ),
//     'all_items'          => __( 'All contacts' ),
//     'view_item'          => __( 'View contact' ),
//     'search_items'       => __( 'Search contacts' ),
//     'not_found'          => __( 'No contacts found' ),
//     'not_found_in_trash' => __( 'No contacts found in the Trash' ), 
//     'menu_name'          => 'contacts'
//   );
//   $args = array(
//     'labels'        => $labels,
//     'description'   => 'Holds our contacts and contact specific data',
//     'public'        => true,
//     'menu_position' => 5,
//     'supports'      => array( 'title', 'editor', 'thumbnail', 'excerpt', 'comments' ),
//     'has_archive'   => true,
//   );
//   register_post_type( 'contact', $args ); 
// }
// add_action( 'init', 'my_custom_post_contact' );
/**ends first contact function */

?>