<?php

// Add Custom Styles with WP wp_add_inline_style Method

function my_styles_method() {

	global $data; 

	wp_enqueue_style(
		'custom-style',
		get_template_directory_uri() . '/framework/css/custom_script.css'
	);

		// ----------- VARIABLES -----------
        //$color_headerbg = $data['color_headerbg'];
        $font_body_face = $data['font_body']['face'];
		$font_body_size = $data['font_body']['size'];
		$font_body_style = $data['font_body']['style'];
		$font_body_color = $data['font_body']['color'];

		$font_h1_face = $data['font_h1']['face'];
		$font_h1_size = $data['font_h1']['size'];
		$font_h1_style = $data['font_h1']['style'];
		$font_h1_color = $data['font_h1']['color'];

		$font_h2_face = $data['font_h2']['face'];
		$font_h2_size = $data['font_h2']['size'];
		$font_h2_style = $data['font_h2']['style'];
		$font_h2_color = $data['font_h2']['color'];

		$font_h3_face = $data['font_h3']['face'];
		$font_h3_size = $data['font_h3']['size'];
		$font_h3_style = $data['font_h3']['style'];
		$font_h3_color = $data['font_h3']['color'];

		$font_h4_face = $data['font_h4']['face'];
		$font_h4_size = $data['font_h4']['size'];
		$font_h4_style = $data['font_h4']['style'];
		$font_h4_color = $data['font_h4']['color'];

		$font_h5_face = $data['font_h5']['face'];
		$font_h5_size = $data['font_h5']['size'];
		$font_h5_style = $data['font_h5']['style'];
		$font_h5_color = $data['font_h5']['color'];

		$font_h6_face = $data['font_h6']['face'];
		$font_h6_size = $data['font_h6']['size'];
		$font_h6_style = $data['font_h6']['style'];
		$font_h6_color = $data['font_h6']['color'];

		$color_link = $data['color_link']; // LINK COLOR
		$color_hover = $data['color_hover']; // HOVER COLOR

		$font_sockettext_face = $data['font_sockettext']['face'];
		$font_sockettext_size = $data['font_sockettext']['size'];
		$font_sockettext_style = $data['font_sockettext']['style'];
		$font_sockettext_color = $data['font_sockettext']['color'];

		$select_topwidgetsstatic = $data['select_topwidgetsstatic'];

		$color_uppersocketbg = $data['color_uppersocketbg'];
		$border_uppersocket_width = $data['border_uppersocket']['width'];
		$border_uppersocket_style = $data['border_uppersocket']['style'];
		$border_uppersocket_color = $data['border_uppersocket']['color'];
		$color_uppersocketlinkhover = $data['color_uppersocketlinkhover'];

		$color_headerbg = $data['color_headerbg'];
		$font_slogan_face = $data['font_slogan']['face'];
		$font_slogan_size = $data['font_slogan']['size'];
		$font_slogan_style = $data['font_slogan']['style'];
		$font_slogan_color = $data['font_slogan']['color'];

		$style_headerheight = $data['style_headerheight'];
		$style_headerheight_minus = $data['style_headerheight']-3;
		$style_logotopmargin = $data['style_logotopmargin'];
		$style_searchtopmargin = $data['style_searchtopmargin'];

		$font_nav_face = $data['font_nav']['face'];
		$font_nav_size = $data['font_nav']['size'];
		$font_nav_style = $data['font_nav']['style'];
		$font_nav_color = $data['font_nav']['color'];
		$color_navlinkhover = $data['color_navlinkhover'];
		$color_navlinkactive = $data['color_navlinkactive'];

		$style_header2height = $data['style_header2height'];
		$style_header2logotopmargin = $data['style_header2logotopmargin'];
		$style_header2searchtopmargin = $data['style_header2searchtopmargin'];
		$style_header2slogantopmargin = $data['style_header2slogantopmargin'];
		$style_header2submenumargin = $data['style_header2submenumargin'];

		$style_header3height = $data['style_header3height'];
		$style_header3logotopmargin = $data['style_header3logotopmargin'];
		$style_header3navigationtopmargin = $data['style_header3navigationtopmargin'];
		$style_header3searchtopmargin = $data['style_header3searchtopmargin'];
		$style_header3submenumargin = $data['style_header3submenumargin'];

		$style_header4height = $data['style_header4height'];
		$style_header4logotopmargin = $data['style_header4logotopmargin'];
		$style_header4searchtopmargin = $data['style_header4searchtopmargin'];
		$style_header4slogantopmargin = $data['style_header4slogantopmargin'];
		$style_header4submenumargin = $data['style_header4submenumargin'];
		$color_header4bgcolor = $data['color_header4bgcolor'];

		$style_header5height = $data['style_header5height'];
		$style_header5logotopmargin = $data['style_header5logotopmargin'];
		$style_header5slogantopmargin = $data['style_header5slogantopmargin'];
		$style_header5submenumargin = $data['style_header5submenumargin'];

		$color_submenubg = $data['color_submenubg'];
		$color_submenuborder = $data['color_submenuborder'];
		$color_submenulink = $data['color_submenulink'];
		$color_submenulinkborder = $data['color_submenulinkborder'];
		$color_submenulinkhover = $data['color_submenulinkhover'];

		$color_titlebargradtop = $data['color_titlebargradtop'];
		$color_titlebargradbottom = $data['color_titlebargradbottom'];
		$border_titlebarbottom_width = $data['border_titlebarbottom']['width'];
		$border_titlebarbottom_style = $data['border_titlebarbottom']['style'];
		$border_titlebarbottom_color = $data['border_titlebarbottom']['color'];
		$border_titlebartop_width = $data['border_titlebartop']['width'];
		$border_titlebartop_style = $data['border_titlebartop']['style'];
		$border_titlebartop_color = $data['border_titlebartop']['color'];

		$font_titleh1_face = $data['font_titleh1']['face'];
		$font_titleh1_size = $data['font_titleh1']['size'];
		$font_titleh1_style = $data['font_titleh1']['style'];
		$font_titleh1_color = $data['font_titleh1']['color'];

		$font_titleh2_face = $data['font_titleh2']['face'];
		$font_titleh2_size = $data['font_titleh2']['size'];
		$font_titleh2_style = $data['font_titleh2']['style'];
		$font_titleh2_color = $data['font_titleh2']['color'];

		$color_titlebarbreadcrumb = $data['color_titlebarbreadcrumb'];
		$color_titlebarbreadcrumbhover = $data['color_titlebarbreadcrumbhover'];

		$color_titleimgbg1 = $data['color_titleimgbg1'];
		$font_titleimgh1_face = $data['font_titleimgh1']['face'];
		$font_titleimgh1_size = $data['font_titleimgh1']['size'];
		$font_titleimgh1_style = $data['font_titleimgh1']['style'];
		$font_titleimgh1_color = $data['font_titleimgh1']['color'];

		$color_titleimgbg2 = $data['color_titleimgbg2'];
		$font_titleimgh2_face = $data['font_titleimgh2']['face'];
		$font_titleimgh2_size = $data['font_titleimgh2']['size'];
		$font_titleimgh2_style = $data['font_titleimgh2']['style'];
		$font_titleimgh2_color = $data['font_titleimgh2']['color'];

		$color_titleimgbreadcrumbbg = $data['color_titleimgbreadcrumbbg'];

		$border_titleimgbreadcrumb_width = $data['border_titleimgbreadcrumb']['width'];
		$border_titleimgbreadcrumb_style = $data['border_titleimgbreadcrumb']['style'];
		$border_titleimgbreadcrumb_color = $data['border_titleimgbreadcrumb']['color'];

		$color_titleimgbreadcrumblink = $data['color_titleimgbreadcrumblink'];
		$color_titleimgbreadcrumblinkhover = $data['color_titleimgbreadcrumblinkhover'];

		$titleimg_maskopacity = $data['titleimg_maskopacity'];

		$font_titleimg2h1_face = $data['font_titleimg2h1']['face'];
		$font_titleimg2h1_size = $data['font_titleimg2h1']['size'];
		$font_titleimg2h1_style = $data['font_titleimg2h1']['style'];
		$font_titleimg2h1_color = $data['font_titleimg2h1']['color'];

		$font_titleimg2h1_face = $data['font_titleimg2h1']['face'];
		$font_titleimg2h1_size = $data['font_titleimg2h1']['size'];
		$font_titleimg2h1_style = $data['font_titleimg2h1']['style'];
		$font_titleimg2h1_color = $data['font_titleimg2h1']['color'];

		$color_titleimg2bg = $data['color_titleimg2bg'];

		$border_titleimg2border_width = $data['border_titleimg2border']['width'];
		$border_titleimg2border_style = $data['border_titleimg2border']['style'];
		$border_titleimg2border_color = $data['border_titleimg2border']['color'];

		$color_titleimg2breadcrumblink = $data['color_titleimg2breadcrumblink'];
		$color_titleimg2breadcrumblinkhover = $data['color_titleimg2breadcrumblinkhover'];

		$font_sidebarwidget_face = $data['font_sidebarwidget']['face'];
		$font_sidebarwidget_size = $data['font_sidebarwidget']['size'];
		$font_sidebarwidget_style = $data['font_sidebarwidget']['style'];
		$font_sidebarwidget_color = $data['font_sidebarwidget']['color'];

		$border_footertop_width = $data['border_footertop']['width'];
		$border_footertop_style = $data['border_footertop']['style'];
		$border_footertop_color = $data['border_footertop']['color'];

		$color_footerbg = $data['color_footerbg'];
		$color_footertext = $data['color_footertext'];
		$color_footerlink = $data['color_footerlink'];
		$color_footerlinkhover = $data['color_footerlinkhover'];

		$font_footerheading_face = $data['font_footerheading']['face'];
		$font_footerheading_size = $data['font_footerheading']['size'];
		$font_footerheading_style = $data['font_footerheading']['style'];
		$font_footerheading_color = $data['font_footerheading']['color'];

		$border_footerheading_width = $data['border_footerheading']['width'];
		$border_footerheading_style = $data['border_footerheading']['style'];
		$border_footerheading_color = $data['border_footerheading']['color'];

		$color_copyrightbg = $data['color_copyrightbg'];
		$color_copyrighttext = $data['color_copyrighttext'];
		$color_copyrightlink = $data['color_copyrightlink'];
		$color_copyrightlinkhover = $data['color_copyrightlinkhover'];

		$color_accent = $data['color_accent'];

		// ----------- STYLES -----------
        $custom_css = "
        	
			/* Standard Fonts ----------------------------------------------------------------------------------- */ 
			 	
			body{ font-family: {$font_body_face}, Arial, Helvetica, sans-serif; font-size: {$font_body_size}; font-weight: {$font_body_style}; color: {$font_body_color}; }
			
			h1{ font-family: {$font_h1_face}, Arial, Helvetica, sans-serif; font-size: {$font_h1_size}; font-weight: {$font_h1_style}; color: {$font_h1_color}; }
			h2{ font-family: {$font_h2_face}, Arial, Helvetica, sans-serif; font-size: {$font_h2_size}; font-weight: {$font_h2_style}; color: {$font_h2_color}; }
			h3{ font-family: {$font_h3_face}, Arial, Helvetica, sans-serif; font-size: {$font_h3_size}; font-weight: {$font_h3_style}; color: {$font_h3_color}; }
			h4{ font-family: {$font_h4_face}, Arial, Helvetica, sans-serif; font-size: {$font_h4_size}; font-weight: {$font_h4_style}; color: {$font_h4_color}; }
			h5{ font-family: {$font_h5_face}, Arial, Helvetica, sans-serif; font-size: {$font_h5_size}; font-weight: {$font_h5_style}; color: {$font_h5_color}; }
			h6{ font-family: {$font_h6_face}, Arial, Helvetica, sans-serif; font-size: {$font_h6_size}; font-weight: {$font_h6_style}; color: {$font_h6_color}; }

			h1 a, h2 a, h3 a, h4 a, h5 a, h6 a, h1 a:visited, h2 a:visited, h3 a:visited, h4 a:visited, h5 a:visited, h6 a:visited  { font-weight: inherit; color: inherit; }

			h1 a:hover, h2 a:hover, h3 a:hover, h4 a:hover, h5 a:hover, h6 a:hover, a:hover h1, a:hover h2, a:hover h3, a:hover h4, a:hover h5, a:hover h6 { color: {$color_hover}; }

			a, a:visited{ color: {$color_link}; }
			a:hover, a:focus{ color: {$color_hover}; }
			#topwidgets{ position: {$select_topwidgetsstatic}; }
			.title span { border-bottom: 3px solid {$color_accent}; }

			/* Upper Socket ----------------------------------------------------------------------------------- */  
			 
			.sockettext{ font-family: {$font_sockettext_face}, Arial, Helvetica, sans-serif; font-size: {$font_sockettext_size}; font-weight: {$font_sockettext_style}; color: {$font_sockettext_color} !important; }
			#uppersocket{ background: {$color_uppersocketbg}; }
			#uppersocket{ border-bottom: {$border_uppersocket_width}px {$border_uppersocket_style} {$border_uppersocket_color}; }
			#uppersocket .sockettext { color: {$font_sockettext_color}; }
			#uppersocket .sockettext a { color: {$font_sockettext_color}; }
			#uppersocket .sockettext a:hover { color: {$color_uppersocketlinkhover}; }

			/* Forms ----------------------------------------------------------------------------------------- */  
	    
			input[type='text'], input[type='password'], input[type='email'], textarea, select, button, input[type='submit'], input[type='reset'], input[type='button'] { font-family: {$font_body_face}, Arial, Helvetica, 	sans-serif; font-size: {$font_body_size}; }
			
			/* Header Style #1 ------------------------------------------------------------------------------ */  

			.header{ background: {$color_headerbg}; }
			.header .slogan{ font-family: {$font_slogan_face}, Arial, Helvetica, sans-serif; font-size: {$font_slogan_size}; font-weight: {$font_slogan_style}; color: {$font_slogan_color}; }
			
			#header { height: {$style_headerheight}px; }
			#header .logo{ margin-top: {$style_logotopmargin}; }
			#header .select-menu{ background: {$color_headerbg} }

			#header #navigation ul#nav > li { height: {$style_headerheight}px; }
			#header #navigation ul#nav > li > a { height: {$style_headerheight_minus}px; line-height: {$style_headerheight_minus}px; }
			#header #navigation ul#nav li .sub-menu{ top: {$style_headerheight_minus}px; }
			#header #header-searchform{ margin-top: {$style_searchtopmargin}; }
			#header #header-cart{ margin-top: {$style_searchtopmargin}; }

			#header #navigation ul#nav > li > a { font-family: {$font_nav_face}, Arial, Helvetica, sans-serif; font-size: {$font_nav_size}; font-weight: {$font_nav_style}; color: {$font_nav_color}; }
			#header #navigation ul#nav > li > a:hover { color: {$color_navlinkhover}; border-color: {$color_navlinkhover}; }
			#header #navigation ul#nav > li.current-menu-item > a,
			#header #navigation ul#nav > li.current-menu-item > a:hover,
			#header #navigation ul#nav > li.current-page-ancestor > a,
			#header #navigation ul#nav > li.current-page-ancestor > a:hover,
			#header #navigation ul#nav > li.current-menu-ancestor > a,
			#header #navigation ul#nav > li.current-menu-ancestor > a:hover,
			#header #navigation ul#nav > li.current-menu-parent > a,
			#header #navigation ul#nav > li.current-menu-parent > a:hover,
			#header #navigation ul#nav > li.current_page_ancestor > a,
			#header #navigation ul#nav > li.current_page_ancestor > a:hover { color: {$color_navlinkactive}; border-color: {$color_navlinkactive}; }

			/* Header Style #2 --------------------------------------------------------------------------- */  

			#header-s2 .header-s2-container{ height: {$style_header2height}; }
			#header-s2 .logo{ margin-top: {$style_header2logotopmargin}; }
			#header-s2 #header-searcform{ margin-top: {$style_header2searchtopmargin}; }
			#header-s2 #header-cart{ margin-top: {$style_header2searchtopmargin}; }
			#header-s2 .slogan{ margin-top: {$style_header2slogantopmargin}; }
			#header-s2 #navigation .sub-menu{ top: {$style_header2submenumargin}; }

			#header-s2 #navigation ul#nav > li > a { font-family: {$font_nav_face}, Arial, Helvetica, sans-serif; font-size: {$font_nav_size}; font-weight: {$font_nav_style}; color: {$font_nav_color}; }
			#header-s2 #navigation ul#nav > li > a:hover { color: {$color_navlinkhover}; border-color: {$color_navlinkhover}; }
			#header-s2 #navigation ul#nav > li.current-menu-item > a,
			#header-s2 #navigation ul#nav > li.current-menu-item > a:hover,
			#header-s2 #navigation ul#nav > li.current-page-ancestor > a,
			#header-s2 #navigation ul#nav > li.current-page-ancestor > a:hover,
			#header-s2 #navigation ul#nav > li.current-menu-ancestor > a,
			#header-s2 #navigation ul#nav > li.current-menu-ancestor > a:hover,
			#header-s2 #navigation ul#nav > li.current-menu-parent > a,
			#header-s2 #navigation ul#nav > li.current-menu-parent > a:hover,
			#header-s2 #navigation ul#nav > li.current_page_ancestor > a,
			#header-s2 #navigation ul#nav > li.current_page_ancestor > a:hover { color: {$color_navlinkactive}; border-color: {$color_navlinkactive}; }

			#header-s2 #navigation ul#nav > li.current-menu-item > a:after,
			#header-s2 #navigation ul#nav > li.current-page-ancestor > a:after,
			#header-s2 #navigation ul#nav > li.current-menu-ancestor > a:after,
			#header-s2 #navigation ul#nav > li.current-menu-parent > a:after,
			#header-s2 #navigation ul#nav > li.current_page_ancestor > a:after{ border-color: {$color_navlinkactive} transparent transparent transparent; }

			/* Header Style #3 --------------------------------------------------------------------------- */  

			#header-s3 { height: {$style_header3height}; }
			#header-s3 .logo{ margin-top: {$style_header3logotopmargin}; }
			#header-s3 #navigation ul{ margin-top: {$style_header3navigationtopmargin}; }
			#header-s3 #header-searchform{ margin-top: {$style_header3searchtopmargin}; }
			#header-s3 #header-cart{ margin-top: {$style_header3searchtopmargin}; }
			#header-s3 #navigation .sub-menu{ top: {$style_header3submenumargin}; }

			#header-s3 #navigation ul#nav > li > a { font-family: {$font_nav_face}, Arial, Helvetica, sans-serif; font-size: {$font_nav_size}; font-weight: {$font_nav_style}; color: {$font_nav_color}; background: {$color_headerbg}; }

			#header-s3 #navigation ul#nav > li > a:hover, 
			#header-s3 #navigation ul#nav > li.sfHover > a  { background: {$color_navlinkhover}; }

			#header-s3 #navigation ul#nav > li.current-menu-item > a,
			#header-s3 #navigation ul#nav > li.current-menu-item > a:hover,
			#header-s3 #navigation ul#nav > li.current-page-ancestor > a,
			#header-s3 #navigation ul#nav > li.current-page-ancestor > a:hover,
			#header-s3 #navigation ul#nav > li.current-menu-ancestor > a,
			#header-s3 #navigation ul#nav > li.current-menu-ancestor > a:hover,
			#header-s3 #navigation ul#nav > li.current-menu-parent > a,
			#header-s3 #navigation ul#nav > li.current-menu-parent > a:hover,
			#header-s3 #navigation ul#nav > li.current_page_ancestor > a,
			#header-s3 #navigation ul#nav > li.current_page_ancestor > a:hover { background: {$color_navlinkactive}; }

			/* Header Style #4 -------------------------------------------------------------------------- */  

			#header-s4 .header-s4-container{ height: {$style_header4height}; }
			#header-s4 .logo{ margin-top: {$style_header4logotopmargin}; }
			#header-s4 #header-searchform{ margin-top: {$style_header4searchtopmargin}; }
			#header-s4 #header-cart{ margin-top: {$style_header4searchtopmargin}; }
			#header-s4 .slogan{ margin-top: {$style_header4slogantopmargin}; }
			#header-s4 #navigation .sub-menu{ top: {$style_header4submenumargin}; }

			#header-s4 #navigation{ background: {$color_header4bgcolor}; }
			#header-s4 #navigation ul#nav > li > a { font-family: {$font_nav_face}, Arial, Helvetica, sans-serif; font-size: {$font_nav_size}; font-weight: {$font_nav_style}; color: {$font_nav_color}; }

			#header-s4 #navigation ul#nav > li > a:hover, 
			#header-s4 #navigation ul#nav > li.sfHover > a { background: {$color_navlinkhover}; }

			#header-s4 #navigation ul#nav > li.current-menu-item > a,
			#header-s4 #navigation ul#nav > li.current-menu-item > a:hover,
			#header-s4 #navigation ul#nav > li.current-page-ancestor > a,
			#header-s4 #navigation ul#nav > li.current-page-ancestor > a:hover,
			#header-s4 #navigation ul#nav > li.current-menu-ancestor > a,
			#header-s4 #navigation ul#nav > li.current-menu-ancestor > a:hover,
			#header-s4 #navigation ul#nav > li.current-menu-parent > a,
			#header-s4 #navigation ul#nav > li.current-menu-parent > a:hover,
			#header-s4 #navigation ul#nav > li.current_page_ancestor > a,
			#header-s4 #navigation ul#nav > li.current_page_ancestor > a:hover { background: {$color_navlinkactive}; }

			/* Header Style #5 ------------------------------------------------------------------------- */  

			#header-s5 .header-s5-container{ height: {$style_header5height}; }
			#header-s5 .logo{ margin-top: {$style_header5logotopmargin}; }
			#header-s5 .slogan{ margin-top: {$style_header5slogantopmargin}; }
			#header-s5 #navigation .sub-menu{ top: {$style_header5submenumargin}; }

			#header-s5 #navigation ul#nav > li > a { font-family: {$font_nav_face}, Arial, Helvetica, sans-serif; font-size: {$font_nav_size}; font-weight: {$font_nav_style}; color: {$font_nav_color}; }

			#header-s5 #navigation ul#nav > li > a:hover { color: {$color_navlinkhover}; }
			        
			#header-s5 #navigation ul#nav > li.current-menu-item > a,
			#header-s5 #navigation ul#nav > li.current-menu-item > a:hover,
			#header-s5 #navigation ul#nav > li.current-page-ancestor > a,
			#header-s5 #navigation ul#nav > li.current-page-ancestor > a:hover,
			#header-s5 #navigation ul#nav > li.current-menu-ancestor > a,
			#header-s5 #navigation ul#nav > li.current-menu-ancestor > a:hover,
			#header-s5 #navigation ul#nav > li.current-menu-parent > a,
			#header-s5 #navigation ul#nav > li.current-menu-parent > a:hover,
			#header-s5 #navigation ul#nav > li.current_page_ancestor > a,
			#header-s5 #navigation ul#nav > li.current_page_ancestor > a:hover { color: {$color_navlinkactive}; border-color:{$color_navlinkactive}; }

			/* Header Style #6 ------------------------------------------------------------------------ */  

			#header-s6 { height: {$style_headerheight}px; }
			#header-s6 .logo{ margin-top: {$style_logotopmargin}; }
			#header-s6 .select-menu{ background: {$color_headerbg} }

			#header-s6 #navigation ul#nav > li { height: {$style_headerheight}px; }
			#header-s6 #navigation ul#nav > li > a { height: {$style_headerheight_minus}px; line-height: {$style_headerheight_minus}px; }
			#header-s6 #navigation .sub-menu{ top: {$style_headerheight_minus}px !important; }
			#header-s6 #header-searchform{ margin-top: {$style_searchtopmargin}; }
			#header-s6 #header-cart{ margin-top: {$style_searchtopmargin}; }

			#header-s6 #navigation ul#nav > li > a { font-family: {$font_nav_face}, Arial, Helvetica, sans-serif; font-size: {$font_nav_size}; font-weight: {$font_nav_style}; color: {$font_nav_color}; }
			#header-s6 #navigation ul#nav > li > a:hover { color: {$color_navlinkhover}; border-color: {$color_navlinkhover}; }
			#header-s6 #navigation ul#nav > li.current-menu-item > a,
			#header-s6 #navigation ul#nav > li.current-menu-item > a:hover,
			#header-s6 #navigation ul#nav > li.current-page-ancestor > a,
			#header-s6 #navigation ul#nav > li.current-page-ancestor > a:hover,
			#header-s6 #navigation ul#nav > li.current-menu-ancestor > a,
			#header-s6 #navigation ul#nav > li.current-menu-ancestor > a:hover,
			#header-s6 #navigation ul#nav > li.current-menu-parent > a,
			#header-s6 #navigation ul#nav > li.current-menu-parent > a:hover,
			#header-s6 #navigation ul#nav > li.current_page_ancestor > a,
			#header-s6 #navigation ul#nav > li.current_page_ancestor > a:hover { color: {$color_navlinkactive}; border-color: {$color_navlinkactive}; }

			#header-s6.header-mega #navigation > ul#nav > li.mega > ul > li{ border-color: {$color_submenulinkborder} !important; }
			#header-s6.header-mega #navigation .sub-menu ul li a,
			#header-s6.header-mega #navigation .sub-menu li a{ border-color: {$color_submenulinkborder} !important; }

			#navigation ul#nav > li.current-menu-item > a,
			#navigation ul#nav > li.current-page-ancestor > a,
			#navigation ul#nav > li.current-page-parent > a{ font-weight: 600 !important; }

			/* Sub-Menu Navigation ------------------------------------------------------------------------ */ 

			html body #navigation .sub-menu{ background: {$color_submenubg} !important; border-color: {$color_submenuborder} !important; }
			html body #navigation .sub-menu li a,
			html body #navigation .sub-menu li .sub-menu li a,
			html body #navigation .sub-menu li .sub-menu li .sub-menu li a { font-family: {$font_body_face}, Arial, Helvetica, sans-serif !important; font-size: {$font_body_size} !important; font-weight: {$font_body_style} !important; color: {$color_submenulink} !important; }
			#navigation .sub-menu li{ border-color: {$color_submenulinkborder}; }
			#navigation .sub-menu li a:hover,
			#navigation .sub-menu li .sub-menu li a:hover,
			#navigation .sub-menu li.current-menu-item a,
			#navigation .sub-menu li.current-menu-item a:hover,
			#navigation .sub-menu li.current_page_item a,
			#navigation .sub-menu li.current_page_item a:hover { color: {$color_submenulinkhover} !important; }

			#navigation ul#nav > li > ul > li:last-child > a:hover{ border:none !important; }
			
			/* Title Bar -------------------------------------------------------------------------------- */ 
			
			#title {
				background: {$color_titlebargradtop};
			    background-image: linear-gradient(bottom, {$color_titlebargradbottom} 0%, {$color_titlebargradtop} 100%);
			    background-image: -o-linear-gradient(bottom, {$color_titlebargradbottom} 0%, {$color_titlebargradtop} 100%);
			    background-image: -moz-linear-gradient(bottom, {$color_titlebargradbottom} 0%, {$color_titlebargradtop} 100%);
			    background-image: -webkit-linear-gradient(bottom, {$color_titlebargradbottom} 0%, {$color_titlebargradtop} 100%);
			    background-image: -ms-linear-gradient(bottom, {$color_titlebargradbottom} 0%, {$color_titlebargradtop} 100%);
			    border-bottom: {$border_titlebarbottom_width}px {$border_titlebarbottom_style} {$border_titlebarbottom_color};
			    border-top: {$border_titlebartop_width}px {$border_titlebartop_style} {$border_titlebartop_color};
			}
			#title h1, #title .blog-h1 { font-family: {$font_titleh1_face}, Arial, Helvetica, sans-serif; font-size: {$font_titleh1_size}; font-weight: {$font_titleh1_style}; color: {$font_titleh1_color}; }
			#title h2, #title .blog-h2 { font-family: {$font_titleh2_face}, Arial, Helvetica, sans-serif; font-size: {$font_titleh2_size}; font-weight: {$font_titleh2_style}; color: {$font_titleh2_color}; }
			#title #breadcrumbs { color: {$color_titlebarbreadcrumb}; }
			#title #breadcrumbs a { color: {$color_titlebarbreadcrumb}; }
			#title #breadcrumbs a:hover { color: {$color_titlebarbreadcrumbhover}; }

			/* Title Bar Style #1------------------------------------------------------------------------ */ 
			
			#title-img h1, #title-img .blog-h1 { font-family: {$font_titleimgh1_face}, Arial, Helvetica, sans-serif; font-size: {$font_titleimgh1_size}; font-weight: {$font_titleimgh1_style}; color: {$font_titleimgh1_color};  }
			#title-img h2, #title-img .blog-h2 { background:{$color_titleimgbg2}; font-family: {$font_titleimgh2_face}, Arial, Helvetica, sans-serif; font-size: {$font_titleimgh2_size}; font-weight: {$font_titleimgh2_style}; color: {$font_titleimgh2_color}; }
			#title-img-breadcrumbs, #no-title { background:{$color_titleimgbreadcrumbbg}; border-bottom: {$border_titleimgbreadcrumb_width}px {$border_titleimgbreadcrumb_style} {$border_titleimgbreadcrumb_color}; color: {$color_titleimgbreadcrumblink}; }
			#title-img .mask{ opacity: {$titleimg_maskopacity}; }
			#no-title  #breadcrumbs{ color: {$color_titleimgbreadcrumblink}; }
			#title-img-breadcrumbs a, #no-title #breadcrumbs a { color: {$color_titleimgbreadcrumblink}; }
			#title-img-breadcrumbs a:hover, #no-title #breadcrumbs a:hover { color: {$color_titleimgbreadcrumblinkhover}; }

			/* Title Bar Style #2------------------------------------------------------------------------ */ 
			
			#title-img-2 h1, #title-img-2 .blog-h1 { font-family: {$font_titleimg2h1_face}, Arial, Helvetica, sans-serif; font-size: {$font_titleimg2h1_size}; font-weight: {$font_titleimg2h1_style}; color: {$font_titleimg2h1_color}; }
			#title-img-2 { background-color: {$color_titleimg2bg}; border-top:{$border_titleimg2border_width}px {$border_titleimg2border_style} {$border_titleimg2border_color}; border-bottom:{$border_titleimg2border_width}px {$border_titleimg2border_style} {$border_titleimg2border_color}; }
			#title-img-2 h2, #title-img-2 .blog-h2 { font-family: {$font_titleh2_face}, Arial, Helvetica, sans-serif; font-size: {$font_titleh2_size}; font-weight: {$font_titleh2_style}; color: {$font_titleh2_color}; }

			#title-img-2 #breadcrumbs, #title-img-2 #breadcrumbs a{ color: {$color_titleimg2breadcrumblink}; }
			#title-img-2 #breadcrumbs a:hover{ color: {$color_titleimg2breadcrumblinkhover}; }

			#sidebar .widget h3 { font-family: {$font_sidebarwidget_face}, Arial, Helvetica, sans-serif; font-size: {$font_sidebarwidget_size}; font-weight: {$font_sidebarwidget_style}; color: {$font_sidebarwidget_color}; }
  
			/* Footer & Upper Widgets----------------------------------------------------------------------------------- */  
	
			#footer{ border-top: {$border_footertop_width}px {$border_footertop_style} {$border_footertop_color}; }  
			#footer, #topwidgets { border-top-color: {$border_footertop_color}; background: {$color_footerbg}; color:{$color_footertext}; }
			#footer a, #topwidgets a{ color:{$color_footerlink}; }
			#footer a:hover, #topwidgets a:hover{ color:{$color_footerlinkhover}; }
			#footer .widget h3, #topwidgets .widget h3 { font-family: {$font_footerheading_face}, Arial, Helvetica, sans-serif; font-size: {$font_footerheading_size}; font-weight: {$font_footerheading_style} !important; color: {$font_footerheading_color} !important; border-bottom:{$border_footerheading_width}px {$border_footerheading_style} {$border_footerheading_color}; }
			#topwidgets .no-widgets{ color:{$color_footertext}; }

			/* Copyright ------------------------------------------------------------------------------- */  
	        
			#copyright { background: {$color_copyrightbg}; color: {$color_copyrighttext}; }
			#copyright a { color: {$color_copyrightlink}; }
			#copyright a:hover { color: {$color_copyrightlinkhover}; }

			/* Accent Color ---------------------------------------------------------------------------- */ 
	
			::selection { background: {$color_accent} }
			::-moz-selection { background: {$color_accent} }
			.highlight { color: {$color_accent} }
			.post-icon { background: {$color_accent} }
			.single .post-tags a:hover { background: {$color_accent}; border-color: {$color_accent}; }
			#pagination a:hover { border-color: {$color_accent}; background: {$color_accent}; }
			#filters ul li a:hover { color: {$color_accent} }
			#filters ul li a.active { color: {$color_accent} }
			.portfolio-item .portfolio-overlay .overlay-link, .portfolio-item-one .portfolio-overlay .overlay-link, .portfolio-item .portfolio-overlay .overlay-lightbox, .portfolio-item-one .portfolio-overlay .overlay-lightbox { background-color: {$color_accent} }
			.portfolio-item.eight .portfolio-overlay { background-color: {$color_accent} }
			.portfolio-item.one-third .portfolio-overlay { background-color: {$color_accent} }
			.portfolio-item.four .portfolio-overlay { background-color: {$color_accent} }
			.latest-portfolio .portfolio-it:hover { border-bottom: 2px solid {$color_accent} !important; }
			.portfolio-item .meta a { color: {$font_body_color} }
			.portfolio-item .meta a:hover { color: {$color_accent} }
			.projects-nav a:hover,
			.post-navigation a:hover { background-color: {$color_accent} }
			.side-nav li a:hover, .widget_wp_nav_menu_desc li a:hover { color: {$color_accent} }
			.side-nav > li.current_page_item > a, .widget_wp_nav_menu_desc > li.current_page_item > a { border-left-color: {$color_accent}; color: {$color_accent}; }
			.side-nav > li.current_page_item > a, .side-nav > li.current_page_item > a:hover, .widget_wp_nav_menu_desc > li.current_page_item > a, .widget_wp_nav_menu_desc > li.current_page_item > a:hover { background-color: {$color_accent}; }
			.side-nav ul.children > li.current_page_item > a{ color: {$color_accent} }
			#back-to-top a:hover { background-color: {$color_accent} }
			.widget_tag_cloud a:hover { background: {$color_accent}; border-color: {$color_accent}; }
			.widget_flickr #flickr_tab a:hover { background: {$color_accent}; border-color: {$color_accent}; }
			.widget_portfolio .portfolio-widget-item .portfolio-pic:hover { background: {$color_accent}; border-color: {$color_accent}; }
			#footer .widget_tag_cloud a:hover,
			#topwidgets .widget_tag_cloud a:hover { background: {$color_accent}; border-color: {$color_accent}; }
			#footer .widget_flickr #flickr_tab a:hover,
			#topwidgets .widget_flickr #flickr_tab a:hover { background: {$color_accent}; border-color: {$color_accent}; }
			#footer .widget_portfolio .portfolio-widget-item .portfolio-pic:hover,
			#topwidgets .widget_portfolio .portfolio-widget-item .portfolio-pic:hover { background: {$color_accent}; border-color: {$color_accent}; }			
			#topwidgets { border-bottom: 5px solid {$color_accent} !important; }
			.flex-direction-nav a:hover { background-color: {$color_accent} }
			a.button.alternative-2 { background: {$color_accent}; border-color: {$color_accent}; }
			.gallery img:hover { background: {$color_accent}; border-color: {$color_accent} !important; }
			.skillbar .skill-percentage { background: {$color_accent} }
			.latest-blog .blog-item:hover h4 { color: {$color_accent} }
			.tp-caption.big_colorbg{ background: {$color_accent}; }
			.tp-caption.medium_colorbg{ background: {$color_accent}; }
			.tp-caption.small_colorbg{ background: {$color_accent}; }
			.tp-caption.customfont_color{ color: {$color_accent}; }
			.tp-caption a { color: {$color_accent}; }
			.wooslider-direction-nav a:hover { background-color: {$color_accent}; }
			.carousel-nav a {background: {$color_accent};}
			.accordion .accordion-title.active a i {color: {$color_accent} !important; }
			.toggle .toggle-title.active i {color: {$color_accent} !important;}
			.iconbox[class^='icon-'], .iconbox[class*='icon-'] { background: {$color_accent} !important; }
			.iconbox.horz[class^='icon-'], .iconbox.horz[class*='icon-'] { color: {$color_accent} !important; border: 3px solid {$color_accent}; }
			.iconbox.horz:hover[class^='icon-'], .iconbox.horz:hover[class*='icon-'] { background: {$color_accent} !important; }
			.close-topwidgets { border-color: {$color_accent}; }
			
			/* Live Chat */

			#sc_chat_box div.sc-chat-header { background-color: {$color_accent}; }
			#sc_chat_box .sc-chat-wrapper .sc-start-chat-btn > a { background-color: {$color_accent}; }
			
			/* WooCommerce */

			.product .onsale{ background: {$color_accent}; }
			.woocommerce button, .woocommerce input[type=submit]{ color: {$color_accent}; }
			.products li .price{ color: {$color_accent}; }
			.product .price{ color: {$color_accent}; }
			.woocommerce-tabs .panel h2{ color: {$color_accent}; }
			.checkout .shop_table .total{ color: {$color_accent}; }
			.woocommerce .form-row input[type=submit], 
			.woocommerce .form-row button{ color: {$color_accent}; }
			.woocommerce-pagination a:hover{ background: {$color_accent}; border-color: {$color_accent};}

        ";

        // ----------- ADD INLINE STYLES -----------
		
        wp_add_inline_style( 'custom-style', $custom_css );
		}
		add_action( 'wp_enqueue_scripts', 'my_styles_method' );

		// Add Custom Responsive & Boxed Layout Expressions

		function smitten_styles_custom() {
		global $data; 

?>
	<style>
		
		<?php if($data['select_layoutstyle'] == 'Boxed Layout' || $data['select_layoutstyle'] == 'Boxed Layout with margin' ) { ?>
			body{
			<?php // Specific Page Background defined? 
			if( get_post_meta( get_the_ID(), 'smitten_bgurl', true ) != '' ) {
		
				if(get_post_meta( get_the_ID(), 'smitten_bgcolor', true )) { echo 'background-color: '.get_post_meta( get_the_ID(), 'smitten_bgcolor', true ).';';}
				if(get_post_meta( get_the_ID(), 'smitten_bgurl', true )) { echo 'background-image: url('.get_post_meta( get_the_ID(), 'smitten_bgurl', true ).');';}
				if(get_post_meta( get_the_ID(), 'smitten_bgstyle', true ) != 'stretch') { 
					echo 'background-repeat: '.get_post_meta( get_the_ID(), 'smitten_bgstyle', true ).';'; 
				} else { 
					echo '-webkit-background-size: cover; -moz-background-size: cover; -o-background-size: cover; background-size: cover;'; 
				}
				
			} // EOF Specific BG
			
			// If No Specific Page Background take Defaults
			else {
				if($data['color_bg'] != "") { echo 'background-color: '. $data['color_bg'] .';'; }
				if($data['media_bg'] != "") { echo 'background-image: url('.$data['media_bg'].');'; } 
				if($data['select_bg'] != 'Stretch Image') { 
					echo 'background-repeat: '.$data['select_bg'].';'; 
				} else { 
					echo '-webkit-background-size: cover; -moz-background-size: cover; -o-background-size: cover; background-size: cover;'; 
				}
			} // EOF Default BG ?>
			background-attachment: fixed;
			}
		<?php } ?>
		
		 <?php if($data['check_responsive'] == true) { ?>
		@media only screen and (max-width: 767px) {
			#uppersocket { background: <?php echo $data['color_uppersocketresponsive']; ?>; }
			#uppersocket .sockettext{ background: <?php echo $data['color_uppersocketresponsive']; ?>; }	
		}
		<?php } ?>
		
		<?php if($data['select_layoutstyle'] == 'Boxed Layout with margin' ) { ?>
			#boxed-layout{
				margin: 40px auto;
				overflow: hidden;
				border-radius: 6px;
			}
		<?php } ?>
		
		<?php if($data['select_layoutstyle'] != 'Fullwidth' ) { ?>	
			@media only screen and (min-width: 960px) {
				.stuck {
					width: 1000px;
				}
			}
		<?php } ?>
		
		<?php if($data['media_logo_retina'] != '') { ?>
			@media only screen and (-webkit-min-device-pixel-ratio: 2), 
			only screen and (min-device-pixel-ratio: 2) {
				.header .logo .logo_standard{ display: none; }
				.header .logo .logo_retina{ display: inline; }
			}
		<?php } ?>

		<?php if($data['select_headlinestyle'] == 'Border Bottom' ) { ?>

			.title{
				display:block;
				line-height: 1 !important;
				background: none;
				margin:0 0 20px 0;
				border-bottom:1px solid #f1f1f1;	
			}
			.title span{
				display:inline-block;
				line-height: 1 !important;
				background: none;
				margin: 0 0 -1px 0;
				padding: 0 0 10px 0;
				border-bottom:1px solid #cccccc;
			}

		<?php } ?>
		
		<?php echo $data['textarea_csscode']; ?>
		
	</style>

<?php }

add_action( 'wp_head', 'smitten_styles_custom', 100 );

?>