<?php
/* ----------------------------------------------------- */
/* portfolio Custom Post Type */
/* ----------------------------------------------------- */

// Adds Custom Post Type
add_action('init', 'faq_register'); 

// Add Icons
add_action( 'admin_head', 'faq_icon' );

function faq_register() {  

	global $data;
	
	$labels = array(
		'name' => __( 'FAQ Items', 'smitten' ),
		'singular_name' => __( 'FAQ Item', 'smitten' ),
		'add_new' => __( 'Add New Item', 'smitten' ),
		'add_new_item' => __( 'Add New FAQ Item', 'smitten' ),
		'edit_item' => __( 'Edit FAQ Item', 'smitten' ),
		'new_item' => __( 'Add New FAQ Item', 'smitten' ),
		'view_item' => __( 'View Item', 'smitten' ),
		'search_items' => __( 'Search FAQ Items', 'smitten' ),
		'not_found' => __( 'No FAQ items found', 'smitten' ),
		'not_found_in_trash' => __( 'No FAQ items found in trash', 'smitten' )
	);
	
    $args = array(  
        'labels' => $labels,
        'public' => false,  
        'show_ui' => true,  
        'capability_type' => 'post',  
        'hierarchical' => false,  
        'rewrite' => array('slug' => 'faq'), // Permalinks format
        'supports' => array('title', 'editor' )  
       );  
  
    register_post_type( 'faq' , $args );  
}  

/**
 * Displays the custom post type icon in the dashboard
 */
	 
function faq_icon() { ?>
	    <style type="text/css" media="screen">
	        #menu-posts-faq .wp-menu-image {
	            background: url(<?php echo get_template_directory_uri() . '/images/admin/faq-icon.png'; ?>) no-repeat 6px 6px !important;
	        }
			#menu-posts-faq:hover .wp-menu-image, #menu-posts-faq.wp-has-current-submenu .wp-menu-image {
	            background-position:6px -26px !important;
	        }
	        #toplevel_page_optionsframework .wp-menu-image {
	            background: url(<?php echo get_template_directory_uri() . '/images/admin/theme-icon.png'; ?>) no-repeat 6px 6px !important;
	        }
			#toplevel_page_optionsframework:hover .wp-menu-image, #toplevel_page_optionsframework.wp-has-current-submenu .wp-menu-image {
	            background-position:6px -26px !important;
	        }
			#icon-edit.icon32-posts-faq {background: url(<?php echo get_template_directory_uri() . '/images/admin/faq-32x32.png'; ?>) no-repeat;}
	    </style>
	<?php } 

/* ----------------------------------------------------- */
/* EOF */
/* ----------------------------------------------------- */

?>