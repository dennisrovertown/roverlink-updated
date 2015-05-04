<?php
/* ----------------------------------------------------- */
/* testimonial Custom Post Type */
/* ----------------------------------------------------- */

// Adds Custom Post Type
add_action('init', 'testimonial_register'); 

// Add Icons
add_action( 'admin_head', 'testimonial_icon' );

function testimonial_register() {  

	global $data;
	
	$labels = array(
		'name' => __( 'Testimonials', 'smitten' ),
		'singular_name' => __( 'Testimonial', 'smitten' ),
		'add_new' => __( 'Add New Testimonial', 'smitten' ),
		'add_new_item' => __( 'Add New Testimonial', 'smitten' ),
		'edit_item' => __( 'Edit Testimonial', 'smitten' ),
		'new_item' => __( 'Add New Testimonial', 'smitten' ),
		'view_item' => __( 'View Testimonial', 'smitten' ),
		'search_items' => __( 'Search Testimonials', 'smitten' ),
		'not_found' => __( 'No Testimonials found', 'smitten' ),
		'not_found_in_trash' => __( 'No Testimonials found in trash', 'smitten' )
	);
	
    $args = array(  
        'labels' => $labels,
        'public' => false,  
        'show_ui' => true,  
        'capability_type' => 'post',  
        'hierarchical' => false,  
        'rewrite' => array('slug' => 'testimonials'), // Permalinks format
        'supports' => array('title', 'editor' )  
       );  
  
    register_post_type( 'testimonial' , $args );  
}  

/**
 * Displays the custom post type icon in the dashboard
 */
	 
function testimonial_icon() { ?>
	    <style type="text/css" media="screen">
	        #menu-posts-testimonial .wp-menu-image {
	            background: url(<?php echo get_template_directory_uri() . 'framework/images/admin/testimonial-icon.png'; ?>) no-repeat 6px 6px !important;
	        }
			#menu-posts-testimonial:hover .wp-menu-image, #menu-posts-testimonial.wp-has-current-submenu .wp-menu-image {
	            background-position:6px -25px !important;
	        }
	    </style>
	<?php } 

/* ----------------------------------------------------- */
/* EOF */
/* ----------------------------------------------------- */

?>