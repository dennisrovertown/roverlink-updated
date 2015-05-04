<?php

add_action('init','of_options');

if (!function_exists('of_options'))
{
	function of_options()
	{
	
		/*-----------------------------------------------------------------------------------*/
		/* TO DO: Add options/functions that use these */
		/*-----------------------------------------------------------------------------------*/
		
		//More Options
		$uploads_arr = wp_upload_dir();
		$all_uploads_path = $uploads_arr['path'];
		$all_uploads = get_option('of_uploads');
		$other_entries = array("Select a number:","1","2","3","4","5","6","7","8","9","10","11","12","13","14","15","16","17","18","19");
		$body_repeat = array("no-repeat","repeat-x","repeat-y","repeat");
		$body_pos = array("top left","top center","top right","center left","center center","center right","bottom left","bottom center","bottom right");
		
		$of_options_select = array("one","two","three","four","five"); 
		
		// Image Alignment radio box
		$of_options_thumb_align = array("alignleft" => "Left","alignright" => "Right","aligncenter" => "Center"); 
		
		// Image Links to Options
		$of_options_image_link_to = array("image" => "The Image","post" => "The Post"); 


/*-----------------------------------------------------------------------------------*/
/* The Options Array */
/*-----------------------------------------------------------------------------------*/

// Set the Options Array
global $of_options;
$of_options = array();

$url =  ADMIN_DIR . 'assets/images/';

/* ------------------------------------------------------------------------ */
/* General
/* ------------------------------------------------------------------------ */
$of_options[] = array( "name" => "General",
					"type" => "heading");
					
$of_options[] = array( "name" => "",
					"desc" => "",
					"id" => "general_heading",
					"std" => "General",
					"icon" => false,
					"type" => "info");

$of_options[] = array( "name" => "Disable Comments for all Content Pages (not Blog)",
					"desc" => "<strong>Be careful:</strong> Page specific Settings get overwritten.",
					"id" => "check_disablecomments",
					"std" => 0,
					"type" => "checkbox"); 
					
$of_options[] = array( "name" => "Tracking Code",
					"desc" => "Paste your Google Analytics Code (or other) here.",
					"id" => "textarea_trackingcode",
					"std" => "",
					"type" => "textarea"); 
					
/* ------------------------------------------------------------------------ */
					
$of_options[] = array( "name" => "",
					"desc" => "",
					"id" => "general_heading",
					"std" => "Favicons",
					"icon" => false,
					"type" => "info");
					
$of_options[] = array( "name" => "Favicon Upload (16x16)",
					"desc" => "Upload your Favicon (16x16px ico/png - use <a href='http://www.favicon.cc/' target='_blank'>favicon.cc</a> to make sure it's fully compatible)",
					"id" => "media_favicon",
					"std" => "",
					"mod" => "min",
					"type" => "media");
					
$of_options[] = array( "name" => "Apple iPhone Icon Upload (57x57)",
					"desc" => "Upload your Apple Touch Icon (57x57px png)",
					"id" => "media_favicon_iphone",
					"std" => "",
					"mod" => "min",
					"type" => "media");
					
$of_options[] = array( "name" => "Apple iPhone Retina Icon Upload (114x114)",
					"desc" => "Upload your Apple Touch Retina Icon (114x114px png)",
					"id" => "media_favicon_iphone_retina",
					"std" => "",
					"mod" => "min",
					"type" => "media");
					
$of_options[] = array( "name" => "Apple iPad Icon Upload (72x72)",
					"desc" => "Upload your Apple Touch Retina Icon (144x144px png)",
					"id" => "media_favicon_ipad",
					"std" => "",
					"mod" => "min",
					"type" => "media");
					
$of_options[] = array( "name" => "Apple iPad Retina Icon Upload (144x144px)",
					"desc" => "Upload your Apple Touch Retina Icon (144x144px png)",
					"id" => "media_favicon_ipad_retina",
					"std" => "",
					"mod" => "min",
					"type" => "media");

/* ------------------------------------------------------------------------ */
/* Layout
/* ------------------------------------------------------------------------ */
$of_options[] = array( "name" => "Layout",
					"type" => "heading");
					
$of_options[] = array( "name" => "",
					"desc" => "",
					"id" => "general_heading",
					"std" => "Layout Options",
					"icon" => false,
					"type" => "info");
					
$of_options[] = array( "name" => "Layout Style",
					"desc" => "Choose your Layout Style",
					"id" => "select_layoutstyle",
					"std" => "Fullwidth",
					"type" => "select",
					"options" => array('Fullwidth', 'Boxed Layout', 'Boxed Layout with margin'));		

$of_options[] = array( "name" => "Enable Responsive Layout",
					"desc" => "Check to enable Responsive Layout",
					"id" => "check_responsive",
					"std" => 1,
					"type" => "checkbox"); 

$of_options[] = array( "name" => "Enable to Zoom on Mobile Devices",
					"desc" => "Check to enable Zoom on Mobile Devices (If Responsive Mode is active I would recommend to leave it disabled.)",
					"id" => "check_mobilezoom",
					"std" => 0,
					"type" => "checkbox"); 
					
/* ------------------------------------------------------------------------ */

$of_options[] = array( "name" => "",
					"desc" => "",
					"id" => "general_heading",
					"std" => "Boxed Layout Options (only work when Boxed Layout is enabled)",
					"icon" => false,
					"type" => "info");
					
$of_options[] = array( "name" => "Default Background Color",
					"desc" => "Select Color for default Background",
					"id" => "color_bg",
					"std" => "#FFFFFF",
					"type" => "color"); 
					
$of_options[] = array( "name" => "Default Background Image",
					"desc" => "Upload default Background or paste Image URL",
					"id" => "media_bg",
					"std" => "",
					"mod" => "min",
					"type" => "media");

$of_options[] = array( "name" => "Background Image Repeat Options",
					"desc" => "Select Background Repeat Option for the default Background.",
					"id" => "select_bg",
					"std" => "Stretch Image",
					"type" => "select",
					"options" => array('Stretch Image', 'repeat', 'no-repeat', 'repeat-x', 'repeat-y')
					);
																		
/* ------------------------------------------------------------------------ */
/* Header
/* ------------------------------------------------------------------------ */
$of_options[] = array( "name" => "Header",
					"type" => "heading");
					
$of_options[] = array( "name" => "",
					"desc" => "",
					"id" => "general_heading",
					"std" => "Select Header Layout",
					"icon" => false,
					"type" => "info");	
					
$of_options[] = array( "name" => "",
					"desc" => "",
					"id" => "header_layout",
					"std" => "s1",
					"type" => "images",
					"options" => array(
						"s1" => get_bloginfo('template_directory')."/framework/images/headers/header1.jpg",
						"s2" => get_bloginfo('template_directory')."/framework/images/headers/header2.jpg",
						"s3" => get_bloginfo('template_directory')."/framework/images/headers/header3.jpg",
						"s4" => get_bloginfo('template_directory')."/framework/images/headers/header4.jpg",
						"s5" => get_bloginfo('template_directory')."/framework/images/headers/header5.jpg",
						"s6" => get_bloginfo('template_directory')."/framework/images/headers/header6.jpg"
					));
					
$of_options[] = array( "name" => "Activate Fixed Header",
					"desc" => "Check to Enable Fixed Header (Works on all Header Styles)",
					"id" => "check_stickyheader",
					"std" => 0,
					"type" => "checkbox");
					
/* ------------------------------------------------------------------------ */
					
$of_options[] = array( "name" => "",
					"desc" => "",
					"id" => "general_heading",
					"std" => "Upper Widget Options",
					"icon" => false,
					"type" => "info");
					
$of_options[] = array( "name" => "Show Upper Widgets",
					"desc" => "Check to show topwidgets",
					"id" => "check_topwidgets",
					"std" => 1,
					"type" => "checkbox"); 
					
$of_options[] = array( "name" => "Upper Widgets Positioning",
					"desc" => "Select if you want the topwidgets to be static of fixed. The Fixed option will keep the bar always visible.",
					"id" => "select_topwidgetsstatic",
					"std" => "fixed",
					"type" => "select",
					"options" => array(
						'fixed' => 'fixed',
						'absolute' => 'absolute'
					));
				
$of_options[] = array( "name" => "Upper Widgets Text (If no Widgets are in this area)",
					"desc" => "Enter your topwidgets Text (HTML allowed)<br /><strong>If you drop Widgets in this area, this text will not be shown.</strong>",
					"id" => "textarea_topwidgets",
					"std" => "Enter your Infotext or Widgets here...",
					"type" => "textarea");
					
$of_options[] = array( "name" => "Upper Widget Columns",
					"desc" => "Select how many Widgets you want in the topwidgets if you decide to use Widgets.",
					"id" => "select_topwidgetscolumns",
					"std" => "4",
					"type" => "select",
					"options" => array(
						'4' => '4',
						'3' => '3',
						'2' => '2',
						'1' => '1'
					)); 
										
/* ------------------------------------------------------------------------ */
					
$of_options[] = array( "name" => "",
					"desc" => "",
					"id" => "general_heading",
					"std" => "Upper Socket Area",
					"icon" => false,
					"type" => "info");				

$of_options[] = array( "name" => "Show Upper Socket",
					"desc" => "Check Show Upper Socket Area (can be used for support or email)",
					"id" => "check_uppersocket",
					"std" => 1,
					"type" => "checkbox"); 
					
$of_options[] = array( "name" => "Upper Socket Social Media Options",
					"desc" => "Check to show Social Media Icons in Upper Socket Area",
					"id" => "check_socialuppersocket",
					"std" => 1,
					"type" => "checkbox");
					
$of_options[] = array( "name" => "Upper Socket Contact Text",
					"desc" => "Enter Text Phone or Email for upper left socket area. (HTML allowed)",
					"id" => "text_sockettext",
					"std" => "Support Line: 1 (505) 555-1262  |  Mail: email@yourdomain.com",
					"type" => "textarea"); 
					
/* ------------------------------------------------------------------------ */
					
$of_options[] = array( "name" => "",
					"desc" => "",
					"id" => "general_heading",
					"std" => "General Logo & Search Options",
					"icon" => false,
					"type" => "info"); 
					
$of_options[] = array( "name" => "Show Search In Header",
					"desc" => "Check to Display Search in Header",
					"id" => "check_searchform",
					"std" => 0,
					"type" => "checkbox"); 
					
$of_options[] = array( "name" => "Add Your Logo",
					"desc" => "Upload your Logo (png, gif or jpeg files)",
					"id" => "media_logo",
					"std" => "",
					"mod" => "min",
					"type" => "media");

$of_options[] = array( "name" => "Retina Logo Options",
					"desc" => "Upload your Logo double in size (If your logo is 100 x 40px, it should be 200 x 80px)",
					"id" => "media_logo_retina",
					"std" => "",
					"mod" => "min",
					"type" => "media");
					
$of_options[] = array( "name" => "Original Logo Width",
					"desc" => "If Retina Logo is uploaded, enter the width of the Standard Logo you've uploaded earlier",
					"id" => "logo_width",
					"std" => "",
					"type" => "text");
					
$of_options[] = array( "name" => "Original Logo Height",
					"desc" => "If Retina Logo uploaded, enter the height of the Standard Logo you've uploaded earlier",
					"id" => "logo_height",
					"std" => "",
					"type" => "text");
										
/* ------------------------------------------------------------------------ */ 
					
$of_options[] = array( "name" => "",
					"desc" => "",
					"id" => "general_heading",
					"std" => "Header Style #1 Options",
					"icon" => false,
					"type" => "info");
					
$of_options[] = array( "name" => "Header Height (without px)",
					"desc" => "Header Height (Default: 85)",
					"id" => "style_headerheight",
					"std" => "85",
					"type" => "text"); 
					
$of_options[] = array( "name" => "Logo Top Margin",
					"desc" => "Enter your Top margin value for the Logo in pixels (Default: 30px)",
					"id" => "style_logotopmargin",
					"std" => "30px",
					"type" => "text");
					
$of_options[] = array( "name" => "Search Top Margin",
					"desc" => "Enter your Top margin value for the Searchform in pixels (Default: 23px)",
					"id" => "style_searchtopmargin",
					"std" => "23px",
					"type" => "text");
					
/* ------------------------------------------------------------------------ */
					
$of_options[] = array( "name" => "",
					"desc" => "",
					"id" => "general_heading",
					"std" => "Header Style #2 Options",
					"icon" => false,
					"type" => "info");
					
$of_options[] = array( "name" => "Header Height",
					"desc" => "Header Height (Default: 85px)",
					"id" => "style_header2height",
					"std" => "85px",
					"type" => "text"); 
					
$of_options[] = array( "name" => "Logo Top Margin",
					"desc" => "Enter the Top margin value for the Logo in pixels (Default: 30px)",
					"id" => "style_header2logotopmargin",
					"std" => "30px",
					"type" => "text");
					
$of_options[] = array( "name" => "Searchform Top Margin",
					"desc" => "Enter your Top margin value for the Searchform in pixels (Default: 25px)",
					"id" => "style_header2searchtopmargin",
					"std" => "25px",
					"type" => "text");
					
$of_options[] = array( "name" => "Slogan Top Margin",
					"desc" => "Enter your Top margin value for the Slogan in pixels (Default: 30px)",
					"id" => "style_header2slogantopmargin",
					"std" => "30px",
					"type" => "text");
					
$of_options[] = array( "name" => "Sub-Menu Top Margin",
					"desc" => "Enter your Top margin value for the Sub-Menu in pixels (Default: 35px)",
					"id" => "style_header2submenumargin",
					"std" => "35px",
					"type" => "text");
					
$of_options[] = array( "name" => "Slogan",
					"desc" => "Enter your Slogan",
					"id" => "text_header2slogan",
					"std" => "Enter any Slogan or Link here.",
					"type" => "textarea"); 
					
/* ------------------------------------------------------------------------ */
					
$of_options[] = array( "name" => "",
					"desc" => "",
					"id" => "general_heading",
					"std" => "Header Style #3 Options",
					"icon" => false,
					"type" => "info");
					
$of_options[] = array( "name" => "Header Height",
					"desc" => "Header Height (Default: 85px)",
					"id" => "style_header3height",
					"std" => "85px",
					"type" => "text"); 
					
$of_options[] = array( "name" => "Logo Top Margin",
					"desc" => "Enter your Top margin value for the Logo in pixels (Default: 30px)",
					"id" => "style_header3logotopmargin",
					"std" => "30px",
					"type" => "text");
					
$of_options[] = array( "name" => "Searchform Top Margin",
					"desc" => "Enter your Top margin value for the Searchform in pixels (Default: 30px)",
					"id" => "style_header3searchtopmargin",
					"std" => "26px",
					"type" => "text");
					
$of_options[] = array( "name" => "Navigation Top Margin",
					"desc" => "Enter your Top margin value for the Navigation in pixels (Default: 26px)",
					"id" => "style_header3navigationtopmargin",
					"std" => "25px",
					"type" => "text");
					
$of_options[] = array( "name" => "Sub-Menu Top Margin",
					"desc" => "Enter your Top margin value for the Sub-Menu in pixels (Default: 37px)",
					"id" => "style_header3submenumargin",
					"std" => "35px",
					"type" => "text");
					
/* ------------------------------------------------------------------------ */
					
$of_options[] = array( "name" => "",
					"desc" => "",
					"id" => "general_heading",
					"std" => "Header Style #4 Options",
					"icon" => false,
					"type" => "info");
					
$of_options[] = array( "name" => "Header Style #4 Background Color",
					"desc" => "Default: #ebebeb",
					"id" => "color_header4bgcolor",
					"std" => "#ebebeb",
					"type" => "color"); 
					
$of_options[] = array( "name" => "Header Height",
					"desc" => "Header Height (Default: 85px)",
					"id" => "style_header4height",
					"std" => "85px",
					"type" => "text"); 
					
$of_options[] = array( "name" => "Logo Top Margin",
					"desc" => "Enter your Top margin value for the Logo in pixels (Default: 30px)",
					"id" => "style_header4logotopmargin",
					"std" => "30px",
					"type" => "text");
					
$of_options[] = array( "name" => "Searchform Top Margin",
					"desc" => "Enter your Top margin value for the Searchform in pixels (Default: 26px)",
					"id" => "style_header4searchtopmargin",
					"std" => "26px",
					"type" => "text");
					
$of_options[] = array( "name" => "Slogan Top Margin",
					"desc" => "Enter your Top margin value for the Slogan in pixels (Default: 30px)",
					"id" => "style_header4slogantopmargin",
					"std" => "30px",
					"type" => "text");
					
$of_options[] = array( "name" => "Sub-Menu Top Margin",
					"desc" => "Enter your Top margin value for the Sub-Menu in pixels (Default: 38px)",
					"id" => "style_header4submenumargin",
					"std" => "38px",
					"type" => "text");
					
$of_options[] = array( "name" => "Slogan",
					"desc" => "Enter your Slogan",
					"id" => "text_header4slogan",
					"std" => "Enter any Slogan or Link here.",
					"type" => "textarea"); 
					
/* ------------------------------------------------------------------------ */
					
$of_options[] = array( "name" => "",
					"desc" => "",
					"id" => "general_heading",
					"std" => "Header Style #5 Options",
					"icon" => false,
					"type" => "info");
					
$of_options[] = array( "name" => "Header Height",
					"desc" => "Header Height (Default: 107px)",
					"id" => "style_header5height",
					"std" => "107px",
					"type" => "text"); 
					
$of_options[] = array( "name" => "Logo Top Margin",
					"desc" => "Enter your Top margin value for the Logo in pixels (Default: 33px)",
					"id" => "style_header5logotopmargin",
					"std" => "33px",
					"type" => "text");
					
$of_options[] = array( "name" => "Slogan Top Margin",
					"desc" => "Enter your Top margin value for the Slogan in pixels (Default: 4px)",
					"id" => "style_header5slogantopmargin",
					"std" => "4px",
					"type" => "text");
					
$of_options[] = array( "name" => "Sub-Menu Top Margin",
					"desc" => "Enter your Top margin value for the Sub-Menu in pixels (Default: 41px)",
					"id" => "style_header5submenumargin",
					"std" => "41px",
					"type" => "text");
					
$of_options[] = array( "name" => "Slogan",
					"desc" => "Enter your Slogan",
					"id" => "text_header5slogan",
					"std" => "Enter any Slogan or Link here.",
					"type" => "textarea"); 
					
/* ------------------------------------------------------------------------ */
/* Footer
/* ------------------------------------------------------------------------ */
$of_options[] = array( "name" => "Footer",
					"type" => "heading");				
					
$of_options[] = array( "name" => "Enable Widgetized Footer",
					"desc" => "Check to show widgetized Footer.",
					"id" => "check_footerwidgets",
					"std" => 1,
					"type" => "checkbox"); 
					
$of_options[] = array( "name" => "Footer Widget Columns",
					"desc" => "Select how many columns you want in the footer.",
					"id" => "select_footercolumns",
					"std" => "4",
					"type" => "select",
					"options" => array(
						'4' => '4',
						'3' => '3',
						'2' => '2',
						'1' => '1'
					));

$of_options[] = array( "name" => "Copyright Text",
					"desc" => "Enter your Copyright Text (HTML allowed)",
					"id" => "textarea_copyright",
					"std" => "Copyright 2014 <strong>Frisco</strong> by <a href='http://www.creativesmitten.com/frisco/'>CreativeSmitten</a>",
					"type" => "textarea"); 

/* ------------------------------------------------------------------------ */
					
$of_options[] = array( "name" => "",
					"desc" => "",
					"id" => "general_heading",
					"std" => "Footer & Upper Widgets Color Settings",
					"icon" => false,
					"type" => "info");
					
$of_options[] = array( "name" => "Footer Background Color",
					"desc" => "Default: #444444",
					"id" => "color_footerbg",
					"std" => "#444444",
					"type" => "color"); 
					
$of_options[] = array( "name" => "Footer Border Top Color",
					"desc" => "Default: 10px solid #333333",
					"id" => "border_footertop",
					"std" => array('width' => '10','style' => 'solid','color' => '#333333'),
					"type" => "border"); 
					
$of_options[] = array( "name" => "Footer Text Color",
					"desc" => "Default: #999999",
					"id" => "color_footertext",
					"std" => "#999999",
					"type" => "color"); 
					
$of_options[] = array( "name" => "Footer Heading Border Color",
					"desc" => "Default: 1px solid #555555",
					"id" => "border_footerheading",
					"std" => array('width' => '1','style' => 'solid','color' => '#555555'),
					"type" => "border");
					
$of_options[] = array( "name" => "Footer Link Color",
					"desc" => "Default: #999999",
					"id" => "color_footerlink",
					"std" => "#999999",
					"type" => "color"); 
					
$of_options[] = array( "name" => "Footer Link Hover Color",
					"desc" => "Default: #ffffff",
					"id" => "color_footerlinkhover",
					"std" => "#ffffff",
					"type" => "color"); 
					
/* ------------------------------------------------------------------------ */
					
$of_options[] = array( "name" => "",
					"desc" => "",
					"id" => "general_heading",
					"std" => "Footer Copyright Options",
					"icon" => false,
					"type" => "info");
					
$of_options[] = array( "name" => "Copyright Background Color",
					"desc" => "Default: #222222",
					"id" => "color_copyrightbg",
					"std" => "#222222",
					"type" => "color"); 
					
$of_options[] = array( "name" => "Copyright Text Color",
					"desc" => "Default: #777777",
					"id" => "color_copyrighttext",
					"std" => "#777777",
					"type" => "color"); 
					
$of_options[] = array( "name" => "Copyright Link Color",
					"desc" => "Default: #888888",
					"id" => "color_copyrightlink",
					"std" => "#888888",
					"type" => "color"); 
					
$of_options[] = array( "name" => "Copyright Link Hover Color",
					"desc" => "Default: #ffffff",
					"id" => "color_copyrightlinkhover",
					"std" => "#ffffff",
					"type" => "color");
		
/* ------------------------------------------------------------------------ */
/* Typography
/* ------------------------------------------------------------------------ */
$of_options[] = array( "name" => "Typography",
					"type" => "heading");
									
$of_options[] = array( "name" => "",
					"desc" => "",
					"id" => "general_heading",
					"std" => "Body Font Options",
					"icon" => false,
					"type" => "info");

$of_options[] = array( "name" => "Body Text Font",
					"desc" => "Specify the Body font properties",
					"id" => "font_body",
					"std" => array('size' => '13px','face' => 'Helvetica','style' => 'normal','color' => '#777777'),
					"type" => "typography");

/* ------------------------------------------------------------------------ */

$of_options[] = array( "name" => "",
					"desc" => "",
					"id" => "general_heading",
					"std" => "Navigation Font Options",
					"icon" => false,
					"type" => "info");

$of_options[] = array( "name" => "Main Navigation",
					"desc" => "Default: #7777777",
					"id" => "font_nav",
					"std" => array('size' => '14px','face' => 'Helvetica','style' => 'normal','color' => '#777777'),
					"type" => "typography"); 
										
$of_options[] = array( "name" => "Navigation Link Hover Color",
					"desc" => "Default: #0eafb5",
					"id" => "color_navlinkhover",
					"std" => "#0eafb5",
					"type" => "color"); 
					
$of_options[] = array( "name" => "Navigation Link Active Color",
					"desc" => "Default: #0eafb5",
					"id" => "color_navlinkactive",
					"std" => "#0eafb5",
					"type" => "color"); 

/* ------------------------------------------------------------------------ */

$of_options[] = array( "name" => "",
					"desc" => "",
					"id" => "general_heading",
					"std" => "Sub-Menu Styling",
					"icon" => false,
					"type" => "info");
					
$of_options[] = array( "name" => "Sub-Menu Background Color",
					"desc" => "Default: #ffffff",
					"id" => "color_submenubg",
					"std" => "#ffffff",
					"type" => "color"); 
					
$of_options[] = array( "name" => "Sub-Menu Border-Top Color",
					"desc" => "Default: #0eafb5",
					"id" => "color_submenuborder",
					"std" => "#0eafb5",
					"type" => "color"); 
					
$of_options[] = array( "name" => "Sub-Menu Link Color",
					"desc" => "Default: #515151",
					"id" => "color_submenulink",
					"std" => "#515151",
					"type" => "color"); 
					
$of_options[] = array( "name" => "Sub-Menu Link Border Color",
					"desc" => "Default: #f2f2f2",
					"id" => "color_submenulinkborder",
					"std" => "#f2f2f2",
					"type" => "color"); 
					
$of_options[] = array( "name" => "Sub-Menu Link Hover Color (also Active Color)",
					"desc" => "Default: #0eafb5",
					"id" => "color_submenulinkhover",
					"std" => "#0eafb5",
					"type" => "color"); 									

/* ------------------------------------------------------------------------ */

$of_options[] = array( "name" => "",
					"desc" => "",
					"id" => "general_heading",
					"std" => "Heading Font Options",
					"icon" => false,
					"type" => "info");
					
$of_options[] = array( "name" => "Page Title H1 Font Options",
					"desc" => "Default: #ffffff",
					"id" => "font_titleh1",
					"std" => array('size' => '32px','face' => 'Helvetica','style' => 'normal','color' => '#ffffff'),
					"type" => "typography"); 
					
$of_options[] = array( "name" => "Page Sub-Title H2 Font Options",
					"desc" => "Default: #ededed",
					"id" => "font_titleh2",
					"std" => array('size' => '14px','face' => 'Helvetica','style' => 'normal','color' => '#ffffff'),
					"type" => "typography");

$of_options[] = array( "name" => "Sidebar Widget Titles H3 ",
					"desc" => "Default: #777777",
					"id" => "font_sidebarwidget",
					"std" => array('size' => '16px','face' => 'Helvetica','style' => 'normal','color' => '#777777'),
					"type" => "typography"); 
					 			
$of_options[] = array( "name" => "Footer Title H3 ",
					"desc" => "Default: #ffffff",
					"id" => "font_footerheading",
					"std" => array('size' => '14px','face' => 'Helvetica','style' => 'normal','color' => '#ffffff'),
					"type" => "typography");

/* ------------------------------------------------------------------------ */

$of_options[] = array( "name" => "",
					"desc" => "",
					"id" => "general_heading",
					"std" => "General Heading Font Options",
					"icon" => false,
					"type" => "info");
					
$of_options[] = array( "name" => "H1 - Font Options",
					"desc" => "Select H1 font style",
					"id" => "font_h1",
					"std" => array('size' => '32px','face' => 'Helvetica','style' => 'normal','color' => '#666666'),
					"type" => "typography");  

$of_options[] = array( "name" => "H2 - Font Option",
					"desc" => "Select H2 font style",
					"id" => "font_h2",
					"std" => array('size' => '24px','face' => 'Helvetica','style' => 'normal','color' => '#666666'),
					"type" => "typography");  
					
$of_options[] = array( "name" => "H3 - Font Option",
					"desc" => "Select H3 font style",
					"id" => "font_h3",
					"std" => array('size' => '18px','face' => 'Helvetica','style' => 'normal','color' => '#666666'),
					"type" => "typography");  

$of_options[] = array( "name" => "H4 - Font Option",
					"desc" => "Select H4 font style",
					"id" => "font_h4",
					"std" => array('size' => '16px','face' => 'Helvetica','style' => 'normal','color' => '#666666'),
					"type" => "typography");  
					
$of_options[] = array( "name" => "H5 - Font Option",
					"desc" => "Select H5 font style",
					"id" => "font_h5",
					"std" => array('size' => '14px','face' => 'Helvetica','style' => 'normal','color' => '#666666'),
					"type" => "typography");  

$of_options[] = array( "name" => "H6 - Font Option",
					"desc" => "Select H6 font style",
					"id" => "font_h6",
					"std" => array('size' => '12px','face' => 'Helvetica','style' => 'normal','color' => '#666666'),
					"type" => "typography"); 
					
/* ------------------------------------------------------------------------ */
/* Styling
/* ------------------------------------------------------------------------ */
$of_options[] = array( "name" => "Styling",
					"type" => "heading");
					
/* ------------------------------------------------------------------------ */
					
$of_options[] = array( "name" => "",
					"desc" => "",
					"id" => "general_heading",
					"std" => "Theme Color Setting",
					"icon" => false,
					"type" => "info");
					
$of_options[] = array( "name" => "Primary Theme Color",
					"desc" => "Define the primary Theme Color (Default: #0eafb5)",
					"id" => "color_accent",
					"std" => "#0eafb5",
					"type" => "color"); 
					
/* ------------------------------------------------------------------------ */
					
$of_options[] = array( "name" => "",
					"desc" => "",
					"id" => "general_heading",
					"std" => "Links",
					"icon" => false,
					"type" => "info");
					
$of_options[] = array( "name" => "Link Color",
					"desc" => "Define your link color (Default: #0eafb5)",
					"id" => "color_link",
					"std" => "#0eafb5",
					"type" => "color"); 
					
$of_options[] = array( "name" => "Link Hover Color",
					"desc" => "Define your link hover color (Default: #515151)",
					"id" => "color_hover",
					"std" => "#515151",
					"type" => "color"); 
					
/* ------------------------------------------------------------------------ */
					
					
$of_options[] = array( "name" => "",
					"desc" => "",
					"id" => "general_heading",
					"std" => "Upper Socket Background Settings",
					"icon" => false,
					"type" => "info");
					
$of_options[] = array( "name" => "Upper Socket Background Color",
					"desc" => "Define the background color of the upper socket area (Default: #232323)",
					"id" => "color_uppersocketbg",
					"std" => "#232323",
					"type" => "color"); 
					
$of_options[] = array( "name" => "Upper Socket Border Color",
					"desc" => "Default: 1px solid #404040",
					"id" => "border_uppersocket",
					"std" => array('width' => '1','style' => 'solid','color' => '#404040'),
					"type" => "border"); 

$of_options[] = array( "name" => "Upper Socket Mobile Background Color",
					"desc" => "Default: #7d7d7d",
					"id" => "color_uppersocketresponsive",
					"std" => "#7d7d7d",
					"type" => "color"); 

/* ------------------------------------------------------------------------ */
					
$of_options[] = array( "name" => "",
					"desc" => "",
					"id" => "general_heading",
					"std" => "Upper Socket Text Settings",
					"icon" => false,
					"type" => "info");
					
$of_options[] = array( "name" => "Upper Socket Text",
					"desc" => "Default: #7d7d7d",
					"id" => "font_sockettext",
					"std" => array('size' => '11px','face' => 'Helvetica','style' => 'normal','color' => '#7d7d7d'),
					"type" => "typography"); 
					
$of_options[] = array( "name" => "Upper Socket Link Hover Color",
					"desc" => "Default: #0eafb5",
					"id" => "color_uppersocketlinkhover",
					"std" => "#0eafb5",
					"type" => "color"); 

/* ------------------------------------------------------------------------ */
					
$of_options[] = array( "name" => "",
					"desc" => "",
					"id" => "general_heading",
					"std" => "Header",
					"icon" => false,
					"type" => "info");
					
$of_options[] = array( "name" => "Header Background Color",
					"desc" => "Default: #232323",
					"id" => "color_headerbg",
					"std" => "#232323",
					"type" => "color"); 
																
/* ------------------------------------------------------------------------ */
					
$of_options[] = array( "name" => "",
					"desc" => "",
					"id" => "general_heading",
					"std" => "Slogan",
					"icon" => false,
					"type" => "info"); 
					
$of_options[] = array( "name" => "Slogan Font",
					"desc" => "Default: #666666",
					"id" => "font_slogan",
					"std" => array('size' => '13px','face' => 'Helvetica','style' => 'normal','color' => '#666666'),
					"type" => "typography"); 
					
/* ------------------------------------------------------------------------ */					

$of_options[] = array( "name" => "",
					"desc" => "",
					"id" => "general_heading",
					"std" => "Standard Title Background Settings",
					"icon" => false,
					"type" => "info");
					
$of_options[] = array( "name" => "Title Background Gradient Top",
					"desc" => "Default: #0eafb5",
					"id" => "color_titlebargradtop",
					"std" => "#0eafb5",
					"type" => "color"); 
					
$of_options[] = array( "name" => "Title Background Gradient Bottom",
					"desc" => "Default: #0ca0a5",
					"id" => "color_titlebargradbottom",
					"std" => "#0ca0a5",
					"type" => "color");
					
$of_options[] = array( "name" => "Title Border Top Color",
					"desc" => "Default: 1px solid #0eafb5",
					"id" => "border_titlebartop",
					"std" => array('width' => '1','style' => 'solid','color' => '#0eafb5'),
					"type" => "border"); 
					
$of_options[] = array( "name" => "Title Border Bottom Color",
					"desc" => "Default: 1px solid #0ca0a5",
					"id" => "border_titlebarbottom",
					"std" => array('width' => '1','style' => 'solid','color' => '#0ca0a5'),
					"type" => "border"); 

/* ------------------------------------------------------------------------ */					

$of_options[] = array( "name" => "",
					"desc" => "",
					"id" => "general_heading",
					"std" => "Breadcrumb Font Options",
					"icon" => false,
					"type" => "info");
															
$of_options[] = array( "name" => "Title Breadcrumb Color",
					"desc" => "Default: #aaaaaa",
					"id" => "color_titlebarbreadcrumb",
					"std" => "#aaaaaa",
					"type" => "color"); 
					
$of_options[] = array( "name" => "Title Breadcrumb Hover Color",
					"desc" => "Default: #0eafb5",
					"id" => "color_titlebarbreadcrumbhover",
					"std" => "#0eafb5",
					"type" => "color"); 
					
/* ------------------------------------------------------------------------ */					

$of_options[] = array( "name" => "",
					"desc" => "",
					"id" => "general_heading",
					"std" => "Title Bar Style #1 (with BG Mask)",
					"icon" => false,
					"type" => "info");
					
$of_options[] = array( "name" => "Featured Image Mask Opacity",
					"desc" => "Opacity of the Mask Overlay of Title Background Image. Between 0 (0%) and 1 (100%). Default: 0.5",
					"id" => "titleimg_maskopacity",
					"std" => "0.5",
					"type" => "text");
					
$of_options[] = array( "name" => "Page Title H1 Background Color",
					"desc" => "Default: #0eafb5",
					"id" => "color_titleimgbg1",
					"std" => "#0eafb5",
					"type" => "color"); 
					
$of_options[] = array( "name" => "Page Title H2 Background Color",
					"desc" => "Default: #ffffff",
					"id" => "color_titleimgbg2",
					"std" => "#ffffff",
					"type" => "color"); 
					
$of_options[] = array( "name" => "Page Title H1 Text Font",
					"desc" => "Default: #ffffff",
					"id" => "font_titleimgh1",
					"std" => array('size' => '18px','face' => 'Helvetica','style' => 'normal','color' => '#ffffff'),
					"type" => "typography"); 
					
$of_options[] = array( "name" => "Page Title H2 Text Font",
					"desc" => "Default: #999999",
					"id" => "font_titleimgh2",
					"std" => array('size' => '15px','face' => 'Helvetica','style' => 'normal','color' => '#999999'),
					"type" => "typography"); 
					
$of_options[] = array( "name" => "Breadcrumb Background",
					"desc" => "Default: #999999",
					"id" => "color_titleimgbreadcrumbbg",
					"std" => "#999999",
					"type" => "color");
					
$of_options[] = array( "name" => "Border Color",
					"desc" => "Default: 1px solid #e4e4e4",
					"id" => "border_titleimgbreadcrumb",
					"std" => array('width' => '1','style' => 'solid','color' => '#e4e4e4'),
					"type" => "border"); 
					
$of_options[] = array( "name" => "Breadcrumb Link Color",
					"desc" => "Default: #FFFFFF",
					"id" => "color_titleimgbreadcrumblink",
					"std" => "#FFFFFF",
					"type" => "color");
					
$of_options[] = array( "name" => "Breadcrumb Link Hover",
					"desc" => "Default: #0eafb5",
					"id" => "color_titleimgbreadcrumblinkhover",
					"std" => "#0eafb5",
					"type" => "color");
					
/* ------------------------------------------------------------------------ */					

$of_options[] = array( "name" => "",
					"desc" => "",
					"id" => "general_heading",
					"std" => "Title Bar Style #2 (No Mask)",
					"icon" => false,
					"type" => "info");
					
$of_options[] = array( "name" => "Title Background Image Style #2 Background Color",
					"desc" => "Default: #efefef",
					"id" => "color_titleimg2bg",
					"std" => "#efef",
					"type" => "color");
					
$of_options[] = array( "name" => "Title Background Image Style #2 Border Color",
					"desc" => "Default: 1px solid #e4e4e4",
					"id" => "border_titleimg2border",
					"std" => array('width' => '1','style' => 'solid','color' => '#e4e4e4'),
					"type" => "border"); 
					
$of_options[] = array( "name" => "Title Background Image Style #2 h1 Text Font",
					"desc" => "Default: #666666",
					"id" => "font_titleimg2h1",
					"std" => array('size' => '18px','face' => 'Helvetica','style' => 'bold','color' => '#666666'),
					"type" => "typography");
					
$of_options[] = array( "name" => "Title Background Image Style #2 Breadcrumb Link Color",
					"desc" => "Default: #FFFFFF",
					"id" => "color_titleimg2breadcrumblink",
					"std" => "#FFFFFF",
					"type" => "color");
					
$of_options[] = array( "name" => "Title Background Image Style #2 Breadcrumb Link Hover",
					"desc" => "Default: #0eafb5",
					"id" => "color_titleimg2breadcrumblinkhover",
					"std" => "#0eafb5",
					"type" => "color"); 
								
/* ------------------------------------------------------------------------ */
/* Blog
/* ------------------------------------------------------------------------ */
$of_options[] = array( "name" => "Blog",
					"type" => "heading");
					
$of_options[] = array( "name" => "",
					"desc" => "",
					"id" => "general_heading",
					"std" => "Blog Options",
					"icon" => false,
					"type" => "info"); 
					
$of_options[] = array( "name" => "Blog Layout",
					"desc" => "Choose your Default Blog Layout",
					"id" => "select_bloglayout",
					"std" => "Blog Fullwidth",
					"type" => "select",
					"options" => array('Blog Fullwidth', 'Blog Medium'));	
					
$of_options[] = array( "name" => "Blog Sidebar Position",
					"desc" => "Blog Listing Sidebar Position",
					"id" => "select_blogsidebar",
					"std" => "sidebar-right",
					"type" => "select",
					"options" => array('sidebar-left', 'sidebar-right'));	
					
$of_options[] = array( "name" => "Enable Share-Box on Post Detail",
					"desc" => "Check to enable Share-Box",
					"id" => "check_sharebox",
					"std" => 1,
					"type" => "checkbox"); 

$of_options[] = array( "name" => "Enable Author Info on Post Detail",
					"desc" => "Check to enable Author Info",
					"id" => "check_authorinfo",
					"std" => 1,
					"type" => "checkbox"); 

$of_options[] = array( "name" => "Enable Related Posts on Post Detail",
					"desc" => "Check to enable Related Posts",
					"id" => "check_relatedposts",
					"std" => 1,
					"type" => "checkbox"); 
					
$of_options[] = array( "name" => "Blog Excerpt Length",
					"desc" => "Default: 30. Used for blog page, archives & search results.",
					"id" => "text_excerptlength",
					"std" => "30",
					"type" => "text"); 
					
$of_options[] = array( "name" => "Enable 'Read More' Button",
					"desc" => "Check to enable 'Read More' button on blog entries.",
					"id" => "check_readmore",
					"std" => 1,
					"type" => "checkbox"); 
					
$of_options[] = array( "name" => "",
					"desc" => "",
					"id" => "general_heading",
					"std" => "Blog Title Settings",
					"icon" => false,
					"type" => "info"); 
					
$of_options[] = array( "name" => "Blog Title",
					"desc" => "",
					"id" => "text_blogtitle",
					"std" => "Blog",
					"type" => "text");

$of_options[] = array( "name" => "Blog Subtitle",
					"desc" => "",
					"id" => "text_blogsubtitle",
					"std" => "Blog Subtitle",
					"type" => "text"); 
					

$of_options[] = array( "name" => "Blog Breadcrumb Name",
					"desc" => "",
					"id" => "text_blogbreadcrumb",
					"std" => "Blog",
					"type" => "text"); 	
					
$of_options[] = array( "name" => "Blog Titlebar",
					"desc" => "Choose your Blog Titlebar Layout",
					"id" => "select_blogtitlebar",
					"std" => "Default",
					"type" => "select",
					"options" => array('Default', 'Background-Image Style 1', 'Background-Image Style 2', 'No Titlebar'));

$of_options[] = array( "name" => "Disable Breadcrumbs for Blog",
					"desc" => "Check to disable Breadcrumbs for Blog & Blog Posts.",
					"id" => "check_blogbreadcrumbs",
					"std" => 0,
					"type" => "checkbox"); 
					
$of_options[] = array( "name" => "Blog Titlebar Image (If Blog Titlebar Layout is set to Image)",
					"desc" => "Upload a Blog Titlebar Image.",
					"id" => "media_blogtitlebar",
					"std" => "",
					"mod" => "min",
					"type" => "media");			

$of_options[] = array( "name" => "",
					"desc" => "",
					"id" => "general_heading",
					"std" => "Social Sharing Box Icons",
					"icon" => false,
					"type" => "info"); 
					
$of_options[] = array( "name" => "Enable Facebook in Social Sharing Box",
					"desc" => "Check to enable Facebook in Social Sharing Box",
					"id" => "check_sharingboxfacebook",
					"std" => 1,
					"type" => "checkbox"); 
					
$of_options[] = array( "name" => "Enable Twitter in Social Sharing Box",
					"desc" => "Check to enable Twitter in Social Sharing Box",
					"id" => "check_sharingboxtwitter",
					"std" => 1,
					"type" => "checkbox"); 
					
$of_options[] = array( "name" => "Enable LinkedIn in Social Sharing Box",
					"desc" => "Check to enable LinkedIn in Social Sharing Box",
					"id" => "check_sharingboxlinkedin",
					"std" => 1,
					"type" => "checkbox"); 
					
$of_options[] = array( "name" => "Enable Reddit in Social Sharing Box",
					"desc" => "Check to enable Reddit in Social Sharing Box",
					"id" => "check_sharingboxreddit",
					"std" => 1,
					"type" => "checkbox"); 
					
$of_options[] = array( "name" => "Enable Digg in Social Sharing Box",
					"desc" => "Check to enable Digg in Social Sharing Box",
					"id" => "check_sharingboxdigg",
					"std" => 1,
					"type" => "checkbox"); 
					
$of_options[] = array( "name" => "Enable Delicious in Social Sharing Box",
					"desc" => "Check to enable Delicious in Social Sharing Box",
					"id" => "check_sharingboxdelicious",
					"std" => 1,
					"type" => "checkbox");
					
$of_options[] = array( "name" => "Enable Google in Social Sharing Box",
					"desc" => "Check to enable Google in Social Sharing Box",
					"id" => "check_sharingboxgoogle",
					"std" => 1,
					"type" => "checkbox"); 

$of_options[] = array( "name" => "Enable E-Mail in Social Sharing Box",
					"desc" => "Check to enable Google in E-Mail Sharing Box",
					"id" => "check_sharingboxemail",
					"std" => 1,
					"type" => "checkbox");  
					
/* ------------------------------------------------------------------------ */
/* Portfolio
/* ------------------------------------------------------------------------ */
$of_options[] = array( "name" => "Portfolio",
					"type" => "heading");
					
$of_options[] = array( "name" => "Portfolio Slug",
					"desc" => "Enter the URL Slug for your Portfolio (Default: portfolio-item) <br /><strong>Go save your permalinks after changing this.</strong>",
					"id" => "text_portfolioslug",
					"std" => "portfolio-item",
					"type" => "text"); 
					
$of_options[] = array( "name" => "Items on Portfolio Overview",
					"desc" => "Enter how many items you want to show on Portfolio Overview before Pagination shows up (Default: 16)",
					"id" => "text_portfolioitems",
					"std" => "16",
					"type" => "text"); 

/* ------------------------------------------------------------------------ */
/* Google Maps
/* ------------------------------------------------------------------------ */

$of_options[] = array( "name" => "Google Maps",
					   "type" => "heading");
					
$of_options[] = array( "name" => "",
					"desc" => "",
					"id" => "general_heading",
					"std" => "Google Maps Settings",
					"icon" => false,
					"type" => "info");
					
$of_options[] = array( "name" => "Address",
					"desc" => "Enter the address you want to display on Google Maps",
					"id" => "fullwidth_map_address",
					"std" => "",
					"type" => "text");

$of_options[] = array( "name" => "Latitude",
					"desc" => "Enter ther Latitude Coordinate (Do not use with Address)",
					"id" => "fullwidth_map_lat",
					"std" => "",
					"type" => "text");
					
$of_options[] = array( "name" => "Longitude",
					"desc" => "Enter ther Longitude Coordinate (Do not use with Address)",
					"id" => "fullwidth_map_lng",
					"std" => "",
					"type" => "text");

$of_options[] = array( "name" => "Height",
					"desc" => "Select the height for Google Maps: Default (550px)",
					"id" => "fullwidth_map_height",
					"std" => "550",
					"type" => "text");

$of_options[] = array( "name" => "Zoom Level",
					"desc" => "Select the zoom level for Google Maps",
					"id" => "fullwidth_map_zoom",
					"std" => "14",
					"type" => "select",
					"options" => array('1', '2', '3', '4', '5', '6', '7', '8', '9', '10', '11', '12', '13', '14', '15', '16', '17', '18', '19', '20', '21')
					);

$of_options[] = array( "name" => "Map Type",
					"desc" => "Select the style of Google Maps to display",
					"id" => "fullwidth_map_type",
					"std" => "ROADMAP",
					"type" => "select",
					"options" => array('ROADMAP', 'SATELLITE', 'HYBRID', 'TERRAIN')
					);

$of_options[] = array( "name" => "Show Marker",
					"desc" => "Show marker",
					"id" => "fullwidth_map_marker",
					"std" => "Yes",
					"type" => "select",
					"options" => array('Yes', 'No')
					);

$of_options[] = array( "name" => "Info Window Text",
					"desc" => "Add any information to the Google Maps Balloon",
					"id" => "fullwidth_map_text",
					"std" => "",
					"type" => "textarea"
					);

$of_options[] = array( "name" => "Hide Control",
					"desc" => "Hide Maps Zoom In/Out and Pan controls",
					"id" => "fullwidth_map_hidecontrol",
					"std" => "Yes",
					"type" => "select",
					"options" => array('Yes', 'No')
					);
									
/* ------------------------------------------------------------------------ */
/* WooCommerce
/* ------------------------------------------------------------------------ */

$of_options[] = array( "name" => "WooCommerce",
					"type" => "heading");
				
$of_options[] = array( "name" => "",
					"desc" => "",
					"id" => "general_heading",
					"std" => "Woocommerce Title Settings",
					"icon" => false,
					"type" => "info"); 

$of_options[] = array( "name" => "Show Cart Icon in Header",
					"desc" => "Check to show Cart Icon in Header",
					"id" => "check_woocommerceicon",
					"std" => 1,
					"type" => "checkbox"); 

$of_options[] = array( "name" => "WooCommerce Sidebar Position",
					"desc" => "WooCommerce Listing Sidebar Position",
					"id" => "select_woocommercesidebar",
					"std" => "no-sidebar",
					"type" => "select",
					"options" => array('no-sidebar', 'sidebar-left', 'sidebar-right'));	
					
$of_options[] = array( "name" => "Woocommerce Title",
					"desc" => "",
					"id" => "text_woocommercetitle",
					"std" => "woocommerce",
					"type" => "text");

$of_options[] = array( "name" => "Woocommerce Subtitle",
					"desc" => "",
					"id" => "text_woocommercesubtitle",
					"std" => "woocommerce Subtitle",
					"type" => "text"); 
										
$of_options[] = array( "name" => "Woocommerce Titlebar",
					"desc" => "Choose your Woocommerce Titlebar Layout",
					"id" => "select_woocommercetitlebar",
					"std" => "Default",
					"type" => "select",
					"options" => array('Default', 'Background-Image Style 1', 'Background-Image Style 2', 'No Titlebar'));

$of_options[] = array( "name" => "Disable Breadcrumbs for Woocommerce",
					"desc" => "Check to disable Breadcrumbs for Woocommerce",
					"id" => "check_woocommercebreadcrumbs",
					"std" => 0,
					"type" => "checkbox"); 
					
$of_options[] = array( "name" => "Woocommerce Titlebar Image (If Woocommerce Titlebar Layout is set to Image)",
					"desc" => "Upload a Woocommerce Titlebar Image.",
					"id" => "media_woocommercetitlebar",
					"std" => "",
					"mod" => "min",
					"type" => "media");
						
/* ------------------------------------------------------------------------ */
/* Social
/* ------------------------------------------------------------------------ */
$of_options[] = array( "name" => "Social Media",
					"type" => "heading");

$of_options[] = array( "name" => "Social Media Setup Settings (Upper Socket and Social Icons)",
					"desc" => "",
					"id" => "introduction",
					"std" => "Enter your username / URL to show or leave blank to hide Social Media Icons",
					"icon" => true,
					"type" => "info");					

$of_options[] = array( "name" => "Twitter Username",
					"desc" => "Enter your Twitter username",
					"id" => "sociable_twitter",
					"std" => "",
					"type" => "text"); 
										
$of_options[] = array( "name" => "Forrst URL",
					"desc" => "Enter URL to your Forrst Account",
					"id" => "sociable_forrst",
					"std" => "",
					"type" => "text"); 

$of_options[] = array( "name" => "Dribbble URL",
					"desc" => "Enter URL to your Dribbble Account",
					"id" => "sociable_dribbble",
					"std" => "",
					"type" => "text"); 
					
$of_options[] = array( "name" => "Flickr URL",
					"desc" => "Enter URL to your Flickr Account",
					"id" => "sociable_flickr",
					"std" => "",
					"type" => "text"); 

$of_options[] = array( "name" => "Facebook URL",
					"desc" => "Enter URL to your Facebook Account",
					"id" => "sociable_facebook",
					"std" => "",
					"type" => "text"); 
					
$of_options[] = array( "name" => "Skype URL",
					"desc" => "Enter URL to your Skype Account",
					"id" => "sociable_skype",
					"std" => "",
					"type" => "text"); 
					
$of_options[] = array( "name" => "Digg URL",
					"desc" => "Enter URL to your Digg Account",
					"id" => "sociable_digg",
					"std" => "",
					"type" => "text"); 

$of_options[] = array( "name" => "Google+ URL",
					"desc" => "Enter URL to your Google+ Account",
					"id" => "sociable_google",
					"std" => "",
					"type" => "text"); 
					
$of_options[] = array( "name" => "Instagram URL",
					"desc" => "Enter URL to your Instagram Account",
					"id" => "sociable_instagram",
					"std" => "",
					"type" => "text"); 
					
$of_options[] = array( "name" => "LinkedIn URL",
					"desc" => "Enter URL to your LinkedIn Account",
					"id" => "sociable_linkedin",
					"std" => "",
					"type" => "text"); 
					
$of_options[] = array( "name" => "Vimeo URL",
					"desc" => "Enter URL to your Vimeo Account",
					"id" => "sociable_vimeo",
					"std" => "",
					"type" => "text"); 
					
$of_options[] = array( "name" => "Yahoo URL",
					"desc" => "Enter URL to your Yahoo Account",
					"id" => "sociable_yahoo",
					"std" => "",
					"type" => "text"); 
					
$of_options[] = array( "name" => "Tumblr URL",
					"desc" => "Enter URL to your Tumblr Account",
					"id" => "sociable_tumblr",
					"std" => "",
					"type" => "text"); 
					
$of_options[] = array( "name" => "YouTube URL",
					"desc" => "Enter URL to your YouTube Account",
					"id" => "sociable_youtube",
					"std" => "",
					"type" => "text"); 
					
$of_options[] = array( "name" => "Picasa URL",
					"desc" => "Enter URL to your Picasa Account",
					"id" => "sociable_picasa",
					"std" => "",
					"type" => "text"); 
					
$of_options[] = array( "name" => "DeviantArt URL",
					"desc" => "Enter URL to your DeviantArt Account",
					"id" => "sociable_deviantart",
					"std" => "",
					"type" => "text"); 
					
$of_options[] = array( "name" => "Behance URL",
					"desc" => "Enter URL to your Behance Account",
					"id" => "sociable_behance",
					"std" => "",
					"type" => "text");
					
$of_options[] = array( "name" => "Pinterest URL",
					"desc" => "Enter URL to your Pinterest Account",
					"id" => "sociable_pinterest",
					"std" => "",
					"type" => "text");  
					
$of_options[] = array( "name" => "PayPal URL",
					"desc" => "Enter URL to your PayPal Account",
					"id" => "sociable_paypal",
					"std" => "",
					"type" => "text"); 
					
$of_options[] = array( "name" => "Delicious URL",
					"desc" => "Enter URL to your Delicious Account",
					"id" => "sociable_delicious",
					"std" => "",
					"type" => "text"); 
					
$of_options[] = array( "name" => "XING URL",
					"desc" => "Enter URL to your XING Account",
					"id" => "sociable_xing",
					"std" => "",
					"type" => "text"); 
					
$of_options[] = array( "name" => "Show RSS",
					"desc" => "Check to Show RSS Icon",
					"id" => "sociable_rss",
					"std" => 1,
					"type" => "checkbox"); 
									
/* ------------------------------------------------------------------------ */
/* Lightbox Settings
/* ------------------------------------------------------------------------ */
$of_options[] = array( "name" => "Lightbox",
					"type" => "heading");
					
$of_options[] = array( "name" => "Lightbox Theme",
					"desc" => "",
					"id" => "lightbox_theme",
					"std" => "pp_default",
					"type" => "select",
					"options" => array(
						'pp_default' => 'pp_default',
						'light_rounded' => 'light_rounded',
						'dark_rounded' => 'dark_rounded',
						'light_square' => 'light_square',
						'dark_square' => 'dark_square',
						'facebook' => 'facebook'
					));
					
$of_options[] = array( "name" => "Animation Speed",
					"desc" => "",
					"id" => "lightbox_animation_speed",
					"std" => "fast",
					"type" => "select",
					"options" => array('fast' => 'Fast', 'slow' => 'Slow', 'normal' => 'Normal'));

$of_options[] = array( "name" => "Background Opacity",
					"desc" => "",
					"id" => "lightbox_opacity",
					"std" => "0.8",
					"type" => "text");

$of_options[] = array( "name" => "Show title",
					"desc" => "Check to show the title",
					"id" => "lightbox_title",
					"std" => 1,
					"type" => "checkbox");
					
$of_options[] = array( "name" => "Show Gallery Thumbnails",
					"desc" => "Check to show gallery thumbnails",
					"id" => "lightbox_gallery",
					"std" => 1,
					"type" => "checkbox");

$of_options[] = array( "name" => "Autoplay Gallery",
					"desc" => "Check to autoplay the lightbox gallery",
					"id" => "lightbox_autoplay",
					"std" => 0,
					"type" => "checkbox");

$of_options[] = array( "name" => "Autoplay Gallery Speed",
					"desc" => "If autoplay is set to true, select the slideshow speed in ms. (Default: 5000, 1000 ms = 1 second)",
					"id" => "lightbox_slideshow_speed",
					"std" => "5000",
					"type" => "text");

$of_options[] = array( "name" => "Social Icons",
					"desc" => "Check to show social sharing icons",
					"id" => "lightbox_social",
					"std" => 1,
					"type" => "checkbox");		
					
$of_options[] = array( "name" => "Disable Lightbox on Smartphone",
					"desc" => "Check to disable Lightbox on Smartphones. This will link directly to the image",
					"id" => "lightbox_smartphones",
					"std" => 0,
					"type" => "checkbox");	
					
$of_options[] = array( "name" => "Disable automatic Lightbox for Images",
					"desc" => "If checked this will disable automatic Lightbox for Images in the Content.",
					"id" => "lightbox_automatic",
					"std" => 0,
					"type" => "checkbox");			
					
/* ------------------------------------------------------------------------ */
/* Custom CSS
/* ------------------------------------------------------------------------ */
$of_options[] = array( "name" => "Custom CSS",
					"type" => "heading");
					
$of_options[] = array( "name" => "Custom CSS",
					"desc" => "Advanced CSS Options. Paste your CSS Code.",
					"id" => "textarea_csscode",
					"std" => "",
					"type" => "textarea"); 
					
/* ------------------------------------------------------------------------ */
/* Backup
/* ------------------------------------------------------------------------ */
$of_options[] = array( "name" => "Backup Options",
					"type" => "heading");
					
$of_options[] = array( "name" => "Backup and Restore Options",
                    "id" => "of_backup",
                    "std" => "",
                    "type" => "backup",
					"desc" => 'You can use the two buttons below to backup your current options, and then restore it back at a later time. This is useful if you want to experiment on the options but would like to keep the old settings in case you need it back.',
					);
					
$of_options[] = array( "name" => "Transfer Theme Options Data",
                    "id" => "of_transfer",
                    "std" => "",
                    "type" => "transfer",
					"desc" => 'You can tranfer the saved options data between different installs by copying the text inside the text box. To import data from another install, replace the data in the text box with the one from another install and click "Import Options".
						',
					);
					
	}
}
?>
