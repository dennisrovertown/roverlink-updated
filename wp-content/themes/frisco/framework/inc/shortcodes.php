<?php

/*-----------------------------------------------------------------------------------*/
/*	Accordion
/*-----------------------------------------------------------------------------------*/
function smitten_accordion($atts, $content=null, $code) {

	extract(shortcode_atts(array(
		'open' => '1',
		'icon' => ''
	), $atts));

	if($icon == '') {
    	$return = "";
	}
	else{
    	$return = "<i class='icon-".$icon."'></i>";
    }
	if (!preg_match_all("/(.?)\[(accordion-item)\b(.*?)(?:(\/))?\](?:(.+?)\[\/accordion-item\])?(.?)/s", $content, $matches)) {
		return do_shortcode($content);
	} 
	else {
		$output = '';
		for($i = 0; $i < count($matches[0]); $i++) {
			$matches[3][$i] = shortcode_parse_atts($matches[3][$i]);
						
			$output .= '<div class="accordion-title"><a href="#">' . $return . $matches[3][$i]['title'] . '</a></div><div class="accordion-inner">' . do_shortcode(trim($matches[5][$i])) .'</div>';
		}
		return '<div class="accordion" rel="'.$open.'">' . $output . '</div>';
		
	}
	
}

/*-----------------------------------------------------------------------------------*/
/*	Alert
/*-----------------------------------------------------------------------------------*/
function smitten_alert( $atts, $content = null) {

extract( shortcode_atts( array(
      'type' 	=> 'warning',
	  'icon'    => '',
      'close'	=> 'true'
      ), $atts ) );
      
	if($icon == '') {
    	$return = "";
	}
	else{
    	$return = "<i class='icon-".$icon."'></i>";
    }

      if($close == 'false') {
		  $var1 = '';
	  }
	  else{
		  $var1 = '<span class="close" href="#">x</span>';
	  }
      
      return '<div class="alert ' . $type . '">' . $return . do_shortcode($content) . '' . $var1 . '</div>';
}

/*-----------------------------------------------------------------------------------*/
/*	Br-Tag
/*-----------------------------------------------------------------------------------*/
function smitten_br() {
   return '<br />';
}

/*-----------------------------------------------------------------------------------*/
/* Buttons 
/*-----------------------------------------------------------------------------------*/
function smitten_button( $atts, $content = null ) {
    extract(shortcode_atts(array(
        'link'      => '#',
        'size'    	=> 'medium',
		'target'    => '_self',
		'lightbox'  => false, 
		'color'     => 'white',
		'icon'		=> '',
		'margin'	=> ''
    ), $atts));
    
    if($lightbox == true) {
    	$return = "prettyPhoto ";
    }
    else{
    	$return = " ";
    }
    if($icon == '') {
    	$return2 = "";
    }
    else{
    	$return2 = "<i class='icon-".$icon."'></i>";
    }

	$out = "<a href=\"" .$link. "\" target=\"" .$target. "\" style=\"margin:" .$margin. "\" class=\"".$return."button ".$color." ".$size."\" rel=\"slides[buttonlightbox]\">". $return2 . "". do_shortcode($content). "</a>";
    return $out;
}

/*-----------------------------------------------------------------------------------*/
/* Callouts & Teaser 
/*-----------------------------------------------------------------------------------*/

function smitten_teaser( $atts, $content = null) {
extract( shortcode_atts( array(
      'img' => ''
      ), $atts ) );
      
      if($img == '') {
    	$return = "";
      } else{
    	$return = "<div class='teaser-img'><img src='".$img."' /></div>";
      }
      
      return '<div class="teaser">' .$return. '' . do_shortcode($content) . '</div>';
}

/*-----------------------------------------------------------------------------------*/

function smitten_teaserbox( $atts, $content = null) {
extract( shortcode_atts( array(
      'title' => '',
      'button' => '',
      'buttonsize' => 'normal',
      'buttoncolor' => 'alternative-1',
      'link' => '',
      'target'  => '_self'
      ), $atts ) );
      return '<div class="teaserbox"><div class="border"><h2 class="highlight">' .$title. '</h2>' . do_shortcode($content) . '<br /><a class="button ' .$buttonsize. ' ' .$buttoncolor. '" href="' .$link. '" target="' .$target. '">' .$button. '</a></div></div>';
}

/*-----------------------------------------------------------------------------------*/

function smitten_callout( $atts, $content = null) {
extract( shortcode_atts( array(
      'title' => '',
      'button' => '',
      'buttonsize' => 'normal',
      'buttoncolor' => 'alternative-1',
      'link' => '',
      'target'  => '_self',
      'margin' => '0px'
      ), $atts ) );
      return '<div class="callout"><div class="border clearfix"><div class="callout-content">
      				<h2 class="highlight">' .$title. '</h2>' . do_shortcode($content) . '
      			</div><div class="callout-button" style="margin:' .$margin. ';">
      				<a class="button ' .$buttonsize. ' ' .$buttoncolor. '" href="' .$link. '" target="' .$target. '">' .$button. '</a>
      			</div></div></div>';
}

function smitten_box( $atts, $content = null) {
extract( shortcode_atts( array(
      'style' => '1',
	  'background' => 'url()'
      ), $atts ) );
      return '<div class="description clearfix style-' .$style. '" style="background:' .$background. ' !important;">' . do_shortcode($content) . '</div>';
}

/*-----------------------------------------------------------------------------------*/
/*	Google Font
/*-----------------------------------------------------------------------------------*/

function smitten_googlefont( $atts, $content = null) {
extract( shortcode_atts( array(
      	'font' => 'PT Sans',
      	'size' => '42px',
      	'margin' => '0px',
		'color' => '#353535',
		'align' => 'center',
		'weight' => 'normal',
		'transform' => 'none'
      ), $atts ) );
      
      $google = preg_replace("/ /","+",$font);
       
      return '<link href="http://fonts.googleapis.com/css?family='.$google.'" rel="stylesheet" type="text/css">
      			<div class="googlefont" style="font-family:\'' .$font. '\', serif !important; font-size:' .$size. ' !important; margin: ' .$margin. ' !important; text-align: ' .$align. '; color: ' .$color. '; font-weight: ' .$weight. '; text-transform: ' .$transform. ';">' . do_shortcode($content) . '</div>';
}

/*-----------------------------------------------------------------------------------*/
/*	HR Dividers
/*-----------------------------------------------------------------------------------*/
function smitten_hr( $atts, $content = null) {
extract( shortcode_atts( array(
      'style' => '1',
      'margin' => ''
      ), $atts ) );
      
    if($margin == '') {
    	$return = "";
    } else{
    	$return = "style='margin:".$margin." !important;'";
    }
      
    return '<div class="hr hr' .$style. '" ' .$return. '></div>';  
}


/*-----------------------------------------------------------------------------------*/
/*	Tagline
/*-----------------------------------------------------------------------------------*/
function smitten_tagline( $atts, $content = null) {
extract( shortcode_atts( array(
      'style' => '1',
      'margin' => ''
      ), $atts ) );
      
    return '<div class="tagline">' . do_shortcode($content) . '</div>';  
}

/*-----------------------------------------------------------------------------------*/
/*	White Space Dividers
/*-----------------------------------------------------------------------------------*/

function smitten_whitespace( $atts, $content = null) {

extract( shortcode_atts( array(
      'height' 	=> '10'
      ), $atts ) );
      
      if($height == '') {
		  $return = '';
	  }
	  else{
		  $return = 'style="height: '.$height.'px;"';
	  }
      
      return '<div class="whitespace" ' . $return . '></div>';
}

/*-----------------------------------------------------------------------------------*/
/*	Clear-Tag
/*-----------------------------------------------------------------------------------*/
function smitten_clear() {  
    return '<div class="clear"></div>';  
}

/*-----------------------------------------------------------------------------------*/
/*	Columns
/*-----------------------------------------------------------------------------------*/
function smitten_one_third( $atts, $content = null ) {
   return '<div class="one_third">' . do_shortcode($content) . '</div>';
}

function smitten_one_third_last( $atts, $content = null ) {
   return '<div class="one_third last">' . do_shortcode($content) . '</div><div class="clear"></div>';
}

function smitten_two_third( $atts, $content = null ) {
   return '<div class="two_third">' . do_shortcode($content) . '</div>';
}

function smitten_two_third_last( $atts, $content = null ) {
   return '<div class="two_third last">' . do_shortcode($content) . '</div><div class="clear"></div>';
}

function smitten_one_half( $atts, $content = null ) {
   return '<div class="one_half">' . do_shortcode($content) . '</div>';
}

function smitten_one_half_last( $atts, $content = null ) {
   return '<div class="one_half last">' . do_shortcode($content) . '</div><div class="clear"></div>';
}

function smitten_one_fourth( $atts, $content = null ) {
   return '<div class="one_fourth">' . do_shortcode($content) . '</div>';
}

function smitten_one_fourth_last( $atts, $content = null ) {
   return '<div class="one_fourth last">' . do_shortcode($content) . '</div><div class="clear"></div>';
}

function smitten_three_fourth( $atts, $content = null ) {
   return '<div class="three_fourth">' . do_shortcode($content) . '</div>';
}

function smitten_three_fourth_last( $atts, $content = null ) {
   return '<div class="three_fourth last">' . do_shortcode($content) . '</div><div class="clear"></div>';
}

function smitten_one_fifth( $atts, $content = null ) {
   return '<div class="one_fifth">' . do_shortcode($content) . '</div>';
}

function smitten_one_fifth_last( $atts, $content = null ) {
   return '<div class="one_fifth last">' . do_shortcode($content) . '</div><div class="clear"></div>';
}

function smitten_two_fifth( $atts, $content = null ) {
   return '<div class="two_fifth">' . do_shortcode($content) . '</div>';
}

function smitten_two_fifth_last( $atts, $content = null ) {
   return '<div class="two_fifth last">' . do_shortcode($content) . '</div><div class="clear"></div>';
}

function smitten_three_fifth( $atts, $content = null ) {
   return '<div class="three_fifth">' . do_shortcode($content) . '</div>';
}

function smitten_three_fifth_last( $atts, $content = null ) {
   return '<div class="three_fifth last">' . do_shortcode($content) . '</div><div class="clear"></div>';
}

function smitten_four_fifth( $atts, $content = null ) {
   return '<div class="four_fifth">' . do_shortcode($content) . '</div>';
}

function smitten_four_fifth_last( $atts, $content = null ) {
   return '<div class="four_fifth last">' . do_shortcode($content) . '</div><div class="clear"></div>';
}

function smitten_one_sixth( $atts, $content = null ) {
   return '<div class="one_sixth">' . do_shortcode($content) . '</div>';
}

function smitten_one_sixth_last( $atts, $content = null ) {
   return '<div class="one_sixth last">' . do_shortcode($content) . '</div><div class="clear"></div>';
}

function smitten_five_sixth( $atts, $content = null ) {
   return '<div class="five_sixth">' . do_shortcode($content) . '</div>';
}

function smitten_five_sixth_last( $atts, $content = null ) {
   return '<div class="five_sixth last">' . do_shortcode($content) . '</div><div class="clear"></div>';
}

/*-----------------------------------------------------------------------------------*/
/* Dropcap */
/*-----------------------------------------------------------------------------------*/
function smitten_dropcap($atts, $content = null) {
    extract(shortcode_atts(array(
        'style'      => ''
    ), $atts));
    
    if($style == '') {
    	$return = "";
    }
    else{
    	$return = "dropcap-".$style;
    }
    
	$out = "<span class='dropcap ". $return ."'>" .$content. "</span>";
    return $out;
}

/*-----------------------------------------------------------------------------------*/
/* Media */
/*-----------------------------------------------------------------------------------*/
add_shortcode('video', 'smitten_video');

function smitten_video($atts) {
	extract(shortcode_atts(array(
		'type' 	=> '',
		'id' 	=> '',
		'width' 	=> false,
		'height' 	=> false,
		'autoplay' 	=> ''
	), $atts));
	
	if ($height && !$width) $width = intval($height * 16 / 9);
	if (!$height && $width) $height = intval($width * 9 / 16);
	if (!$height && !$width){
		$height = 315;
		$width = 560;
	}
	
	$autoplay = ($autoplay == 'yes' ? '1' : false);
		
	if($type == "vimeo") $return = "<div class='video-embed'><iframe src='http://player.vimeo.com/video/$id?autoplay=$autoplay&amp;title=0&amp;byline=0&amp;portrait=0' width='$width' height='$height' class='iframe'></iframe></div>";
	
	else if($type == "youtube") $return = "<div class='video-embed'><iframe src='http://www.youtube.com/embed/$id?HD=1;rel=0;showinfo=0' width='$width' height='$height' class='iframe'></iframe></div>";
	
	else if($type == "dailymotion") $return ="<div class='video-embed'><iframe src='http://www.dailymotion.com/embed/video/$id?width=$width&amp;autoPlay={$autoplay}&foreground=%23FFFFFF&highlight=%23CCCCCC&background=%23000000&logo=0&hideInfos=1' width='$width' height='$height' class='iframe'></iframe></div>";
		
	if (!empty($id)){
		return $return;
	}
}
/*-----------------------------------------------------------------------------------*/
/* Google Maps */
/*-----------------------------------------------------------------------------------*/
function smitten_fullwidth_map($atts = array()) {

	global $data;

	$map_address = $data['fullwidth_map_address'];
	$map_lat = $data['fullwidth_map_lat'] ? $data['fullwidth_map_lat'] : 0;
	$map_lng = $data['fullwidth_map_lng'] ? $data['fullwidth_map_lng'] : 0;
	$map_height = $data['fullwidth_map_height'] ? $data['fullwidth_map_height'] : 200;
	$map_zoom = $data['fullwidth_map_zoom'] ? $data['fullwidth_map_zoom'] : 10;
	$map_type = $data['fullwidth_map_type'] ? $data['fullwidth_map_type'] : 'ROADMAP';
	$map_marker = $data['fullwidth_map_marker'] ? $data['fullwidth_map_marker'] : 'No';
	$map_text = $data['fullwidth_map_text'];
	$map_hidecontrol = $data['fullwidth_map_hidecontrol'] ? $data['fullwidth_map_hidecontrol'] : 'No';

	if ( $map_hidecontrol == 'Yes' )
		$map_hidecontrol = 'true';
	else
		$map_hidecontrol = 'false';

	if ( !$map_address && !($map_lat && $map_lng) )
		return;

	$returnme = '<div id="fullwidth_map" style="height:' . $map_height . 'px;" class="google_map_wide"></div>';
	
	$returnme .= '
	<script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false"></script>
	<script type="text/javascript">
		var latlng = new google.maps.LatLng(' . $map_lat . ', ' . $map_lng . ');
		var fullMapOptions = {
			zoom: ' . $map_zoom . ',
			center: latlng,
			scrollwheel: true,
			scaleControl: false,
			disableDefaultUI: ' . $map_hidecontrol .',
			mapTypeId: google.maps.MapTypeId.' . $map_type . '
		};
		var fullwidth_map = new google.maps.Map(document.getElementById("fullwidth_map"), fullMapOptions);
		';
				
		//address
		if ( $map_address != '' )
		{
			$returnme .= '
		    var geocoder_fullwidth_map = new google.maps.Geocoder();
			var address = \'' . $map_address . '\';
			geocoder_fullwidth_map.geocode( { \'address\': address}, function(results, status) {
				if (status == google.maps.GeocoderStatus.OK) {
					fullwidth_map.setCenter(results[0].geometry.location);
					';
					
					if ($map_marker == 'Yes')
					{
						$returnme .= '
						var marker = new google.maps.Marker({
							map: fullwidth_map, 
							';
						$returnme .= '
							position: fullwidth_map.getCenter()
						});
						';

						//infowindow
						if ( $map_text != '' ) 
						{
							//first convert and decode html chars
							$thiscontent = htmlspecialchars_decode($map_text);
							$returnme .= '
							var contentString = \'' . $thiscontent . '\';
							var infowindow = new google.maps.InfoWindow({
								content: contentString
							});
										
							google.maps.event.addListener(marker, \'click\', function() {
							  infowindow.open(fullwidth_map,marker);
							});
							';
						}
					}
			$returnme .= '
				} else {
				alert("Geocode was not successful for the following reason: " + status);
			}
			});
			';
		}
		
		$returnme .= '</script>';
		
		
	echo $returnme;
}

function smitten_map($atts) {

	// default atts
	$atts = shortcode_atts(array(	
		'lat'   => '0', 
		'lon'    => '0',
		'id' => 'map',
		'z' => '1',
		'w' => '400',
		'h' => '300',
		'maptype' => 'ROADMAP',
		'address' => '',
		'kml' => '',
		'kmlautofit' => 'yes',
		'marker' => '',
		'markerimage' => '',
		'traffic' => 'no',
		'bike' => 'no',
		'fusion' => '',
		'start' => '',
		'end' => '',
		'infowindow' => '',
		'infowindowdefault' => 'yes',
		'directions' => '',
		'hidecontrols' => 'false',
		'scale' => 'false',
		'scrollwheel' => 'true',
		'style' => ''		
	), $atts);
									
	$returnme = '<div id="' .$atts['id'] . '" style="width:' . $atts['w'] . 'px;height:' . $atts['h'] . 'px;" class="google_map ' . $atts['style'] . '"></div>';
	
	//directions panel
	if($atts['start'] != '' && $atts['end'] != '') 
	{
		$panelwidth = $atts['w']-20;
		$returnme .= '<div id="directionsPanel" style="width:' . $panelwidth . 'px;height:' . $atts['h'] . 'px;border:1px solid gray;padding:10px;overflow:auto;"></div><br>';
	}

	$returnme .= '
	<script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false"></script><style type="text/css">.entry-content img {max-width: 100000%; /* override */}</style>
	<script type="text/javascript">
		var latlng = new google.maps.LatLng(' . $atts['lat'] . ', ' . $atts['lon'] . ');
		var myOptions = {
			zoom: ' . $atts['z'] . ',
			center: latlng,
			scrollwheel: ' . $atts['scrollwheel'] .',
			scaleControl: ' . $atts['scale'] .',
			disableDefaultUI: ' . $atts['hidecontrols'] .',
			mapTypeId: google.maps.MapTypeId.' . $atts['maptype'] . '
		};
		var ' . $atts['id'] . ' = new google.maps.Map(document.getElementById("' . $atts['id'] . '"),
		myOptions);
		';
				
		//kml
		if($atts['kml'] != '') 
		{
			if($atts['kmlautofit'] == 'no') 
			{
				$returnme .= '
				var kmlLayerOptions = {preserveViewport:true};
				';
			}
			else
			{
				$returnme .= '
				var kmlLayerOptions = {preserveViewport:false};
				';
			}
			$returnme .= '
			var kmllayer = new google.maps.KmlLayer(\'' . html_entity_decode($atts['kml']) . '\',kmlLayerOptions);
			kmllayer.setMap(' . $atts['id'] . ');
			';
		}

		//directions
		if($atts['start'] != '' && $atts['end'] != '') 
		{
			$returnme .= '
			var directionDisplay;
			var directionsService = new google.maps.DirectionsService();
		    directionsDisplay = new google.maps.DirectionsRenderer();
		    directionsDisplay.setMap(' . $atts['id'] . ');
    		directionsDisplay.setPanel(document.getElementById("directionsPanel"));

				var start = \'' . $atts['start'] . '\';
				var end = \'' . $atts['end'] . '\';
				var request = {
					origin:start, 
					destination:end,
					travelMode: google.maps.DirectionsTravelMode.DRIVING
				};
				directionsService.route(request, function(response, status) {
					if (status == google.maps.DirectionsStatus.OK) {
						directionsDisplay.setDirections(response);
					}
				});


			';
		}
		
		//traffic
		if($atts['traffic'] == 'yes')
		{
			$returnme .= '
			var trafficLayer = new google.maps.TrafficLayer();
			trafficLayer.setMap(' . $atts['id'] . ');
			';
		}
	
		//bike
		if($atts['bike'] == 'yes')
		{
			$returnme .= '			
			var bikeLayer = new google.maps.BicyclingLayer();
			bikeLayer.setMap(' . $atts['id'] . ');
			';
		}
		
		//fusion tables
		if($atts['fusion'] != '')
		{
			$returnme .= '			
			var fusionLayer = new google.maps.FusionTablesLayer(' . $atts['fusion'] . ');
			fusionLayer.setMap(' . $atts['id'] . ');
			';
		}
	
		//address
		if($atts['address'] != '')
		{
			$returnme .= '
		    var geocoder_' . $atts['id'] . ' = new google.maps.Geocoder();
			var address = \'' . $atts['address'] . '\';
			geocoder_' . $atts['id'] . '.geocode( { \'address\': address}, function(results, status) {
				if (status == google.maps.GeocoderStatus.OK) {
					' . $atts['id'] . '.setCenter(results[0].geometry.location);
					';
					
					if ($atts['marker'] !='')
					{
						//add custom image
						if ($atts['markerimage'] !='')
						{
							$returnme .= 'var image = "'. $atts['markerimage'] .'";';
						}
						$returnme .= '
						var marker = new google.maps.Marker({
							map: ' . $atts['id'] . ', 
							';
							if ($atts['markerimage'] !='')
							{
								$returnme .= 'icon: image,';
							}
						$returnme .= '
							position: ' . $atts['id'] . '.getCenter()
						});
						';

						//infowindow
						if($atts['infowindow'] != '') 
						{
							//first convert and decode html chars
							$thiscontent = htmlspecialchars_decode($atts['infowindow']);
							$returnme .= '
							var contentString = \'' . $thiscontent . '\';
							var infowindow = new google.maps.InfoWindow({
								content: contentString
							});
										
							google.maps.event.addListener(marker, \'click\', function() {
							  infowindow.open(' . $atts['id'] . ',marker);
							});
							';

							//infowindow default
							if ($atts['infowindowdefault'] == 'yes')
							{
								$returnme .= '
									infowindow.open(' . $atts['id'] . ',marker);
								';
							}
						}
					}
			$returnme .= '
				} else {
				alert("Geocode was not successful for the following reason: " + status);
			}
			});
			';
		}

		//marker: show if address is not specified
		if ($atts['marker'] != '' && $atts['address'] == '')
		{
			//add custom image
			if ($atts['markerimage'] !='')
			{
				$returnme .= 'var image = "'. $atts['markerimage'] .'";';
			}

			$returnme .= '
				var marker = new google.maps.Marker({
				map: ' . $atts['id'] . ', 
				';
				if ($atts['markerimage'] !='')
				{
					$returnme .= 'icon: image,';
				}
			$returnme .= '
				position: ' . $atts['id'] . '.getCenter()
			});
			';

			//infowindow
			if($atts['infowindow'] != '') 
			{
				$returnme .= '
				var contentString = \'' . $atts['infowindow'] . '\';
				var infowindow = new google.maps.InfoWindow({
					content: contentString
				});
							
				google.maps.event.addListener(marker, \'click\', function() {
				  infowindow.open(' . $atts['id'] . ',marker);
				});
				';
				//infowindow default
				if ($atts['infowindowdefault'] == 'yes')
				{
					$returnme .= '
						infowindow.open(' . $atts['id'] . ',marker);
					';
				}				
			}
		}
		
		$returnme .= '</script>';
		
		
		return $returnme;
}
add_shortcode('map', 'smitten_map');

/*-----------------------------------------------------------------------------------*/
/*	Icons & Iconbox
/*-----------------------------------------------------------------------------------*/

function smitten_icon( $atts, $content = null ) {
	extract(shortcode_atts(array(
       	'icon'      => 'leaf',
		'size'		=> '',	
		'color'		=> '',
		'align'		=> '',
		'display'		=> 'block'
    ), $atts));
    
	$out = '<div class="icon-'. $icon .'" style= "font-size:' .$size. '; color: ' .$color. '; text-align: ' .$align. '; display: ' .$display. ';"></div>';
    return $out;
}

/*-----------------------------------------------------------------------------------*/

function smitten_iconbox( $atts, $content = null ) {
	extract(shortcode_atts(array(
       	'icon'      	=> 'leaf',
		'size'			=> '',
		'color'			=> '',
		'border'		=> '',
		'background'	=> '',
		'height'		=> '',
       	'title'			=> '',
		'style'			=> '',
       	'iconurl' 		=> ''
    ), $atts));
    
    $geticon = '';
    
    if($iconurl != ''){
	    $geticon = '<span class="none"><img src="'.$icon.'" /></span>';
    }
    else{
	    $geticon = '<span class="icon-'. $icon .' "style= "color: '.$color. '; size: ' .$size. '; border: ' .$border. '; background: ' .$background. '; height: ' .$height. ';"></span>';
    };

	if ( $style == '2' )
		$result = ' horz';
	else
		$result = '';
    
	$out = '<div class="iconbox' . $result . '">'.$geticon.'<h3>'. $title .'</h3>'. do_shortcode($content) . '</div>';
    return $out;
}

/*-----------------------------------------------------------------------------------*/

function smitten_miniicon( $atts, $content = null ) {
	extract(shortcode_atts(array(
       	'icon'      => 'leaf'
    ), $atts));
    
	$out = '<i class="icon-'. $icon .'"></i>';
    return $out;
}

/*-----------------------------------------------------------------------------------*/
/*	Lists
/*-----------------------------------------------------------------------------------*/

function smitten_list( $atts, $content = null ) {
    extract(shortcode_atts(array(), $atts));
	$out = '<ul class="styled-list">'. do_shortcode($content) . '</ul>';
    return $out;
}

/*-----------------------------------------------------------------------------------*/

function smitten_item( $atts, $content = null ) {
	extract(shortcode_atts(array(
       	'icon'      => 'leaf'
    ), $atts));
	$out = '<li><i class="icon-'.$icon.'"></i>'. do_shortcode($content) . '</li>';
    return $out;
}

/*-----------------------------------------------------------------------------------*/
/*	Profile
/*-----------------------------------------------------------------------------------*/

function smitten_profile( $atts, $content = null) {
extract( shortcode_atts( array(
      'img' 	=> '',
      'name' 	=> '',
      'role'	=> '',
      'twitter' => '',
      'facebook' => '',
      'skype' => '',
      'google' => '',
      'linkedin' => '',
      'mail' => '',
      ), $atts ) );
      
      if($img == '') {
    	$return = "";
      } else{
    	$return = "<div class='profile-img'><img src='".$img."' /><div class='profile-role'>" .$role. "</div></div>";
      }
      
      if( $twitter != '' || $facebook != '' || $skype != '' || $google != '' || $linkedin != '' || $mail != '' ){
	      $return8 = '<div class="profile-sociable"><ul>';
	      $return9 = '</ul></div>';
	      
	      if($twitter != '') {
	    	$return2 = '<li class="profile-sociable-twitter"><a href="' .$twitter. '" target="_blank" title="Twitter">Twitter</a></li>';
	      } else{
		     $return2 = ''; 
	      }
	      
	      if($facebook != '') {
	    	$return3 = '<li class="profile-sociable-facebook">facebook: <a href="' .$facebook. '" target="_blank" title="Facebook">Facebook</a></li>';
	      } else{
		      $return3 = ''; 
	      }
	      
	      if($skype != '') {
	    	$return4 = '<li class="profile-sociable-skype">skype: <a href="' .$skype. '" target="_blank" title="Skype">Skype</a></li>';
	      } else{
		      $return4 = ''; 
	      }
	      
	      if($google != '') {
	    	$return5 = '<li class="profile-sociable-google">google+: <a href="' .$google. '" target="_blank" title="Google+">Google</a></li>';
	      } else{
		      $return5 = ''; 
	      }
	      
	      
	      if($linkedin != '') {
	    	$return6 = '<li class="profile-sociable-linkedin">linkedin: <a href="' .$linkedin. '" target="_blank" title="LinkedIn">Linkedin</a></li>';
	      }
	      else{
		      $return6 = ''; 
	      }
	      
	      if($mail != '') {
	    	$return7 = '<li class="profile-sociable-email"><a href="mailto:' .$mail. '" title="Mail">Mail</a></li>';
	      }
	      else{
		      $return7 = ''; 
	      }
      }  else {
	      $return2 = '';
	      $return3 = ''; 
	      $return4 = ''; 
	      $return5 = ''; 
	      $return6 = ''; 
	      $return7 = '';
	      $return8 = ''; 
	      $return9 = ''; 
      }   
      return '<div class="profile">' .$return. '
      	<h4>' .$name. '</h4>' . do_shortcode($content) . '' .$return8. '' .$return2. '' .$return3. '' .$return4. '' .$return5. '' .$return6. '' .$return7. '' .$return9. '</div>';
}

/*-----------------------------------------------------------------------------------*/
/* Progress Bars */
/*-----------------------------------------------------------------------------------*/

function smitten_skill( $atts, $content = null ) {
	extract(shortcode_atts(array(
       	'percentage' => '0',
       	'title'      => ''
    ), $atts));
	$out = '<div class="skill-title">' .$title. '</div><div class="skillbar" data-perc="' .$percentage. '"><div class="skill-percentage"></div></div>';
    return $out;
}

/*-----------------------------------------------------------------------------------*/
/* Circle Counters */
/*-----------------------------------------------------------------------------------*/

function smitten_counterscircle($atts, $content = null) {
	$html = '<div class="counters-circle clearfix">';
	$html .= do_shortcode($content);
	$html .= '</div>';

	return $html;
}

function smitten_countercircle($atts, $content = null) {
		extract(shortcode_atts(array(
		'filledcolor' => '',
		'unfilledcolor' => '',
		'value' => '70'
	), $atts));
	
	global $data;

	wp_enqueue_script( 'waypoints' );
	wp_enqueue_script( 'gauge' );
	
	if(!$filledcolor) {
		$filledcolor = $data['counter_filled_color'];
	}

	if(!$unfilledcolor) {
		$unfilledcolor = $data['counter_unfilled_color'];
	}

	static $smitten_countercircle = 1;

	{
	$html = "<script type='text/javascript'>
		jQuery(document).ready(function() {
			var opts = {
			  lines: 12, // The number of lines to draw
			  angle: 0.5, // The length of each line
			  lineWidth: 0.05, // The line thickness
			  colorStart: '{$filledcolor}',   // Colors
			  colorStop: '{$filledcolor}',    // just experiment with them
			  strokeColor: '{$unfilledcolor}',   // to see which ones work best for you
			  generateGradient: false
			};
			var gauge_{$smitten_countercircle} = new Donut(document.getElementById('counter-circle-{$smitten_countercircle}')).setOptions(opts); // create sexy gauge!
			gauge_{$smitten_countercircle}.maxValue = 100; // set max gauge value
			gauge_{$smitten_countercircle}.animationSpeed = 100; // set animation speed (32 is default value)
			gauge_{$smitten_countercircle}.set({$value}); // set actual value
		});
		</script>";
	}
	
	$html .= '<div class="counter-circle-container">';
	$html .= '<canvas width="220" height="220" class="counter-circle" id="counter-circle-'.$smitten_countercircle.'">';
	$html .= '</canvas>';
	$html .= '<div class="counter-circle-content">';
	$html .= do_shortcode($content);   
    $html .= '</div>';
	$html .= '</div>';

	$smitten_countercircle++;

	return $html;
}

/*-----------------------------------------------------------------------------------*/
/* Pricing Table */
/*-----------------------------------------------------------------------------------*/

function smitten_plan( $atts, $content = null ) {
    extract(shortcode_atts(array(
        'name'      => 'Premium',
		'link'      => '#',
		'linkname'      => 'Sign Up',
		'price'      => '$45.00',
		'per'      => false,
		'color'    => false, // grey, green, red, blue
		'button_style' => false,
		'button_icon' => false,
		'button_color' => false,
		'featured' => ''
    ), $atts));
    
    if($featured != '') {
    	$return = "<div class='featured'>".$featured."</div>";
    }
    else{
	    $return = "";
    }

    if($per != false) {
    	$return3 = "/ ".$per."";
    }
    else{
    	$return3 = "";
    }
    $return5 = "";
    if($color != false) {
    	$return4 = " style='color:".$color.";' ";
    }
    else{
    	$return4 = "";
    }

	$button_class = '';
	if ( $button_style )
		$button_class .= ' ' . $button_style;
	if ( $button_color )
		$button_class .= ' ' . $button_color;

	$icon = '';
	if ( $button_icon )
		$icon = '<i class="icon-' . $button_icon . '"></i>';
	
	$out = "
		<div class='plan'>	
			<div class='plan-head'><h3>".$name."</h3>".$return."</div>
			<div class='price' ".$return4.">".$price." <span>".$return3."</span></div>
			<ul>" .do_shortcode($content). "</ul><div class='signup'><a class='button".$button_class."' href='".$link."'".$return4.">".$icon.$linkname."</a></div>";

	$out .= "</div>";

    return $out;
}

/*-----------------------------------------------------------------------------------*/

function smitten_pricing( $atts, $content = null ) {
    extract(shortcode_atts(array(
        'col'      => '3'
    ), $atts));
	
	$out = "<div class='pricing-table col-".$col."'>" .do_shortcode($content). "</div><div class='clear'></div>";
    return $out;
}

/*-----------------------------------------------------------------------------------*/
/*	Section
/*-----------------------------------------------------------------------------------*/
function smitten_section( $atts, $content = null) {

extract( shortcode_atts( array(
	'bgcolor'	=> '#ffffff',
	'bgimage'	=> '',
	'parallax'	=> 'false',
	'padding'   => '',
	'border'    => 'none',	
	'mask'		=> ''
	), $atts ) );

	if($parallax == 'false') {
	  	$var1 = '';
	}
	else{
	  	$var1 = 'section-parallax';
	}

	$var2 = '';

	if($bgimage != ''){
		$var2 = 'background-image: url(' . $bgimage . ');';
	}
	
	return '
    <div class="section ' . $var1 . '" style="background-color: ' . $bgcolor . '; border: ' . $border . '; padding: ' . $padding . '; ' . $var2 . '">
		<div class="section-mask" style="background: ' . $mask . '"></div>
    		<div class="container clearfix">
    			<div class="sixteen columns">' . do_shortcode($content) . '</div>
    	</div>
    </div>';
}

/*-----------------------------------------------------------------------------------*/
/*	Video Section
/*-----------------------------------------------------------------------------------*/
function smitten_videosection( $atts, $content = null) {

extract( shortcode_atts( array(
	'fallback'		=> '',
	'mp4'			=> '',
	'webm'			=> '',
	'ogv'			=> '',
	'padding' 		=> '',
	'color'			=> '#999999',
	'mask'		    => ''
	), $atts ) );

	$var2 = '';

	if($fallback != ''){
		$var2 = 'background-image: url(' . $fallback . ');';
	}
      
    return '
    <div class="videosection" style="padding: ' . $padding . '; color: ' . $color . ';">
    	<div class="container clearfix">
    		<div class="sixteen columns">' . do_shortcode($content) . '</div>
    	</div>
		<div class="video-wrap"><video width="100%" height="auto" preload="auto" autoplay loop="loop" muted="muted"><source src="' . $mp4 . '" type="video/mp4"><source src="' . $webm . '" type="video/webm"><source src="' . $ogv . '" type="video/ogg"></video></div>
		<div class="video-fallback" style="background-image: url(' . $fallback . ')"></div>
		<div class="video-mask" style="background: ' . $mask . '"></div>
    </div>';
}

/*-----------------------------------------------------------------------------------*/
/*	Gap Dividers
/*-----------------------------------------------------------------------------------*/

function smitten_gap( $atts, $content = null) {

extract( shortcode_atts( array(
      'height' 	=> '10'
      ), $atts ) );
      
      if($height == '') {
		  $return = '';
	  }
	  else{
		  $return = 'style="height: '.$height.'px;"';
	  }
      
      return '<div class="gap" ' . $return . '></div>';
}

/*-----------------------------------------------------------------------------------*/
/*	Block & Pullquotes
/*-----------------------------------------------------------------------------------*/
function smitten_blockquote( $atts, $content = null) {
extract( shortcode_atts( array(), $atts ) );
      
	return '<blockquote><p>' . do_shortcode($content) . '</p></blockquote>';
}

/*-----------------------------------------------------------------------------------*/

function smitten_pullquote( $atts, $content = null ) {
    extract(shortcode_atts(array(
        'align'      => 'left'
    ), $atts));
	
    return '<span class="pullquote align-'.$align.'">' . do_shortcode($content) . '</span>';
}

/*-----------------------------------------------------------------------------------*/
/* Responsive Images 
/*-----------------------------------------------------------------------------------*/

function smitten_responsive( $atts, $content = null ) {
    extract(shortcode_atts(array(), $atts));
	
	return '<span class="responsive">' . do_shortcode($content) . '</span>';
}

/*-----------------------------------------------------------------------------------*/
/* Responsive Visibility 
/*-----------------------------------------------------------------------------------*/

function smitten_responsivevisibility( $atts, $content = null) {

extract( shortcode_atts( array(
      'show' => 'desktop'
      ), $atts ) );
      return '<div class="visibility-' . $show . '">' . do_shortcode($content) . '</div>';
}

/*-----------------------------------------------------------------------------------*/
/* Social Icons 
/*-----------------------------------------------------------------------------------*/

function smitten_social( $atts, $content = null) {

extract( shortcode_atts( array(
      'icon' 	=> 'twitter',
      'url'		=> '#',
      'target' 	=> '_blank'
      ), $atts ) );
      
      $capital = ucfirst($icon);
      
      return '<div class="social-icon social-' . $icon . '"><a href="' . $url . '" title="' . $capital . '" target="' . $target . '">' . $capital . '</a></div>';
}

/*-----------------------------------------------------------------------------------*/
/* Styled Tables
/*-----------------------------------------------------------------------------------*/

function smitten_table( $atts, $content = null) {

extract( shortcode_atts( array(
      'style' 	=> '1'
      ), $atts ) );
      
      return '<div class="custom-table-' . $style . '">' . do_shortcode($content) . '</div>';
}

/*-----------------------------------------------------------------------------------*/
/* Testimonial
/*-----------------------------------------------------------------------------------*/

function smitten_testimonial( $atts, $content = null) {
	extract( shortcode_atts( array(
		'author' => '',
		'role' => ''
      ), $atts ) );

	  if ( $role )
		  $role = ' <span>' . $role . '</span>';
      return '<div class="testimonial">' . do_shortcode($content) . '</div><div class="testimonial-author">' .$author. ', ' . $role . '</div>';
}

/*-----------------------------------------------------------------------------------*/
/* Slideshow Testimonials
/*-----------------------------------------------------------------------------------*/

function smitten_slideshow_testimonials( $atts, $content = null) {
	extract( shortcode_atts( array(
		'title' => '',
		'button' => false,
		'number' => 5,
		'timeout' => 3000,
		'speed' => 750,
		'width' => '100%'
    ), $atts ) );

	$result = '';

	$r = new WP_Query( apply_filters( 'widget_posts_args', array( 'post_type' => 'testimonial', 'posts_per_page' => $number, 'no_found_rows' => true, 'post_status' => 'publish', 'ignore_sticky_posts' => true ) ) );
	if ($r->have_posts()) {
		$result .= '<div id="testimonials-slideshow" class="cycle-slideshow" data-cycle-fx="fade" data-allow-wrap="false" data-cycle-speed="' . $speed . '" data-cycle-timeout="' . $timeout . '" data-cycle-slides=".item" data-cycle-prev=".prevslide" data-cycle-next=".nextslide">';
		while ( $r->have_posts() ) {
			$r->the_post();
			$result .= '<div class="item" style="width:' . $width . ';">';
			$result .= '<div class="testimonial">';
			$result .= get_the_content();
			$result .= '</div>';

			$author = get_post_meta( get_the_ID(), 'smitten_testimonial_author', true);
			$role = get_post_meta( get_the_ID(), 'smitten_testimonial_role', true);

			if ( $author ) {
				$result .= '<div class="item-title testimonial-author">';
				$result .= $author . ', ';

				if ( $role )
					$result .= '<span>' . $role . '</span>';

				$result .= '</div>';
			}

			if ( $button ) {
				$result .= '<div class="slide-buttons"><a class="prevslide">&#60;</a><a class="nextslide">&#62;</a></div>';
			}

			$result .= '</div>';
		}

		$result .= '</div>';
	}

	wp_reset_postdata();

	return $result;
}

/*-----------------------------------------------------------------------------------*/
/* FAQ
/*-----------------------------------------------------------------------------------*/

function smitten_faq( $atts, $content = null) {
	extract( shortcode_atts( array(
      'orderby' => 'id'
      ), $atts ) );
      
	$return = '';

	$faq_items = new WP_Query( array('post_type' => 'faq', 'orderby' => $orderby) );

	if ( $faq_items->have_posts() ) {
		$return .= '<div class="faqlist">';

		while ( $faq_items->have_posts() ) {
			$faq_items->the_post();

			$return .= '<div class="toggle">';

				$return .= '<div class="toggle-title">';

				$return .= '<i class="icon-question-sign"></i>';

				$return .= apply_filters('the_title', get_the_title());

				$return .= '<span></span>';
				
				$return .= '</div>';

				$return .= '<div class="toggle-inner">';

				$return .= apply_filters('the_content', get_the_content());
				
				$return .= '</div>';

			$return .= '</div>';
		}

		$return .= '</div>';
	}

	wp_reset_query();

	return $return;
}

/*-----------------------------------------------------------------------------------*/
/*	Tabs
/*-----------------------------------------------------------------------------------*/

function smitten_tabgroup( $atts, $content = null ) {
	$GLOBALS['tab_count'] = 0;
	$i = 1;
	$randomid = rand();

	do_shortcode( $content );

	if( is_array( $GLOBALS['tabs'] ) ){
	
		foreach( $GLOBALS['tabs'] as $tab ){	
			if( $tab['icon'] != '' ){
				$icon = '<i class="icon-'.$tab['icon'].'"></i>';
			}
			else{
				$icon = '';
			}
			$tabs[] = '<li class="tab"><a href="#panel'.$randomid.$i.'">'.$icon . $tab['title'].'</a></li>';
			$panes[] = '<div class="panel" id="panel'.$randomid.$i.'"><p>'.$tab['content'].'</p></div>';
			$i++;
			$icon = '';
		}
		$return = '<div class="tabset"><ul class="tabs">'.implode( "\n", $tabs ).'</ul>'.implode( "\n", $panes ).'</div>';
	}
	return $return;
}
add_shortcode( 'tabgroup', 'smitten_tabgroup' );

function smitten_tab( $atts, $content = null) {
	extract(shortcode_atts(array(
			'title' => '',
			'icon'  => ''
	), $atts));
	
	$x = $GLOBALS['tab_count'];
	$GLOBALS['tabs'][$x] = array( 'title' => sprintf( $title, $GLOBALS['tab_count'] ), 'icon' => $icon, 'content' =>  $content );
	$GLOBALS['tab_count']++;
}
add_shortcode( 'tab', 'smitten_tab' );


/*-----------------------------------------------------------------------------------*/
/* Toggle */
/*-----------------------------------------------------------------------------------*/

function smitten_toggle( $atts, $content = null){
	extract(shortcode_atts(array(
        'title' => '',
        'icon' => '',
        'open' => "false"
    ), $atts));

	if($icon == '') {
    	$return = "";
    }
    else{
    	$return = "<i class='icon-".$icon."'></i>";
    }
    
    if($open == "true") {
	    $return2 = "active";
    }
    else{
	    $return2 = '';
    }
   
   return '<div class="toggle"><div class="toggle-title '.$return2.'">'.$return.''.$title.'<span></span></div><div class="toggle-inner"><p>'. do_shortcode($content) . '</p></div></div>';
}


/*-----------------------------------------------------------------------------------*/
/* Tooltip */
/*-----------------------------------------------------------------------------------*/

function smitten_tooltip( $atts, $content = null)
{
	extract(shortcode_atts(array(
        'text' => ''
    ), $atts));
   
   return '<span class="tooltips"><a href="#" rel="tooltip" title="'.$text.'">'. do_shortcode($content) . '</a></span>';
}

/*-----------------------------------------------------------------------------------*/
/* Headline */
/*-----------------------------------------------------------------------------------*/

function smitten_headline( $atts, $content = null){
	extract(shortcode_atts(array(
       	'type'      => 'h3',
       	'title' => 'Title'
    ), $atts));
   
	return '<'.$type.' class="title"><span>'.$title.'</span></'.$type.'>';
}

/*-----------------------------------------------------------------------------------*/
/*	Latest Projects
/*-----------------------------------------------------------------------------------*/

function smitten_portfolio($atts){
	global $wpdb;

	extract(shortcode_atts(array(
       	'projects'      => '4',
       	'title' => 'Portfolio',
       	'show_title' => 'yes',
       	'columns' => '4',
       	'filters' => 'all'
    ), $atts));
    
    global $post;

	$args = array(
		'post_type' => 'portfolio',
		'posts_per_page' => $projects,
		'order'          => 'DESC',
		'orderby'        => 'date',
		'post_status'    => 'publish'
    );
    
    if($filters != 'all'){
    	
    	// string to array
    	$str = $filters;
    	$arr = explode(',', $str);
    	//var_dump($arr);
    	
		$args['tax_query'][] = array(
			'taxonomy' 	=> 'portfolio_filter',
			'field' 	=> 'slug',
			'terms' 	=> $arr
		);
	}
    
    
    $randomid = rand();

    query_posts( $args );
    $out = '';

	if( have_posts() ) :
		
		if($show_title == 'yes'){
			$out .= '<h3 class="title"><span>'.$title.'</span></h3>';
		}

		$wrap_id = 'carousel-' . rand(10000, 99999);

		if($columns == '3'){
			$return = 'one-third';
		}
		elseif($columns == '2'){
			$return = 'eight';
		}
		else{
			$return = 'four';
		}

		if ( $columns < $projects ) {
			$items = $columns;
			if ( $items == 1 )
				$items = 4;
			$out .= '<script src="' . get_template_directory_uri() .'/js/jquery.carouFredSel.packed.js" type="text/javascript"></script>';
			$out .= '<script type="text/javascript">';
			$out .= 'jQuery(document).ready(function() {';
			$out .= 'jQuery("#' . $wrap_id . '").carouFredSel({
						auto: false,
						circular: false,
						responsive: true,
						items: ' . $items . ',
						prev: "#' . $wrap_id . '-prev",
						next: "#' . $wrap_id . '-next"
					});';

			$out .= '});';
			$out .= '</script>';

			$out .= '<div class="list_carousel responsive">';
			$out .= '<div class="carousel-nav">';
			$out .= '<a id="' . $wrap_id . '-prev" class="carousel-prev"><i class="icon-chevron-left"></i></a>';
			$out .= '<a id="' . $wrap_id . '-next" class="carousel-next"><i class="icon-chevron-right"></i></a>';
			$out .= '</div>';
		}
		
		$out .= '<ul id="' . $wrap_id . '" class="latest-portfolio negative-wrap">';	
		while ( have_posts() ) : the_post();
			
			$out .= '<li class="portfolio-item '.$return.' columns">';
			
			
			$embedd = '';
				
			if( get_post_meta( get_the_ID(), 'smitten_portfolio-lightbox', true ) == "true") { 
				if( get_post_meta( get_the_ID(), 'smitten_embed', true ) != "") {
					$lightboxtype = '<span class="overlay-lightbox video"><i class="icon-play-circle"></i></span>';
					if ( get_post_meta( get_the_ID(), 'smitten_source', true ) == 'youtube' ) {
						$link = '<a href="http://www.youtube.com/watch?v='.get_post_meta( get_the_ID(), 'smitten_embed', true ).'" class="prettyPhoto" rel="prettyPhoto[portfolio]" title="'. get_the_title() .'">';
						$embedhtml = '<iframe width="100%" height="100%" frameborder="no" src="http://www.youtube.com/embed/' . get_post_meta( get_the_ID(), 'smitten_embed', true ) . '?rel=1&amp;autoplay=0"></iframe>';
					} else if ( get_post_meta( get_the_ID(), 'smitten_source', true ) == 'vimeo' ) {
						$link = '<a href="http://vimeo.com/'. get_post_meta( get_the_ID(), 'smitten_embed', true ) .'" class="prettyPhoto" rel="prettyPhoto[portfolio]" title="'. get_the_title() .'">';
						$embedhtml = '<iframe src="http://player.vimeo.com/video/' . get_post_meta( get_the_ID(), 'smitten_embed', true ) . '#at=0?title=0&amp;byline=0&amp;portrait=0&amp;color=ffffff" width="100%" height="100%" frameborder="0" webkitAllowFullScreen mozallowfullscreen allowFullScreen></iframe>';
					} else if ( get_post_meta( get_the_ID(), 'smitten_source', true ) == 'own' ) {
						$randomid = rand();
						$link = '<a href="#embedd-video-'.$randomid.'" class="prettyPhoto" title="'. get_the_title() .'" rel="prettyPhoto[portfolio]">';
						$embedd = '<div id="embedd-video-'.$randomid.'" class="embedd-video"><p>'. get_post_meta( get_the_ID(), 'smitten_embed', true ) .'</p></div>';
						
						$embedhtml = get_post_meta( get_the_ID(), 'smitten_embed', true );
					}
				} else {
					$lightboxtype = '<span class="overlay-lightbox"><i class="icon-camera-retro"></i></span>';
					if ( get_post_thumbnail_id() ) {
						$link = '<a href="'. wp_get_attachment_url( get_post_thumbnail_id() ) .'" class="prettyPhoto icon" rel="prettyPhoto[portfolio]" title="'. get_the_title() .'">';
					} else {
						$meta = get_post_meta( get_the_ID( ), 'smitten_screenshot', false );
						if ( !is_array( $meta ) )
							$meta = ( array ) $meta;

						$link = '';
						if ( !empty( $meta ) ) {
							$meta = implode( ',', $meta );
							$images = $wpdb->get_col( "
							SELECT ID FROM $wpdb->posts
							WHERE post_type = 'attachment'
							AND ID IN ( $meta )
							ORDER BY menu_order ASC
							" );
							for ( $i = count($images) - 1; $i >= 0; $i-- ) {
								if ( $i > 0 )
									$link .= '<a href="'. wp_get_attachment_url( $images[$i] ) .'" class="prettyPhoto icon" rel="prettyPhoto[portfolio]" title="'. get_the_title() .'"></a>';
								else
									$link .= '<a href="'. wp_get_attachment_url( $images[$i] ) .'" class="prettyPhoto icon" rel="prettyPhoto[portfolio]" title="'. get_the_title() .'">';
							}
						}
					}
				}
			}
			else{
				$lightboxtype = '<span class="overlay-link"><i class="icon-eye-open"></i></span>';
				$link = '<a href="'. get_permalink() .'" title="'. get_the_title() .'">';
				$embedd = '';
			}			
			
			$filters = wp_get_object_terms( $post->ID, 'portfolio_filter' );
			$subtitle = '';
			if ( !empty($filters) ) {
				foreach ( $filters as $term ) {
					if ( $subtitle )
						$subtitle .= ', ';
					$subtitle .= sprintf('<a href="%s">%s</a>', get_term_link($term->slug, 'portfolio_filter'), $term->name);
				}
			}

			$title = get_the_title();
			if ( strlen($title) > 25 )
				$title = substr($title, 0, 25) . '...';
			
			$out .= '<div class="portfolio-it">'. $link . '<span class="portfolio-pic">';

			// slider
			$meta = get_post_meta( get_the_ID( ), 'smitten_screenshot', false );
			if ( !is_array( $meta ) )
				$meta = ( array ) $meta;

			$slider_thumbnail = '';
			if ( !empty( $meta ) ) {
				$has_slider = true;

				$meta = implode( ',', $meta );
				$images = $wpdb->get_col( "
				SELECT ID FROM $wpdb->posts
				WHERE post_type = 'attachment'
				AND ID IN ( $meta )
				ORDER BY menu_order ASC
				" );
				foreach ( $images as $att ) {
					$src = wp_get_attachment_image_src( $att, 'column2-portfolio' );
					if ( $src ) {
						$slider_thumbnail = $src[0];
						break;
					}
				}
			}

			if ( $slider_thumbnail ) {

				$out .= '<img src="'.$slider_thumbnail.'" />';

			} else if ( has_post_thumbnail()) {
			
				$portfolio_thumbnail= wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'thumb-portfolio' );
				$out .= '<img src="'.$portfolio_thumbnail[0].'" />';
			
			} else {

				if ( $embedhtml )
					$out .= '<div class="portfolio-embed">' . $embedhtml . '</div>';
				else
					$out .= '<img src="'.get_template_directory_uri().'/images/default.png" />';

			}
			
			$out .= '<div class="portfolio-overlay">'. $lightboxtype .'</div></span></a><a href="'. get_permalink() .'" title="'. get_the_title() .'" class="portfolio-title"><h4>'. $title .'</h4></a><div class="meta">'.$subtitle.'</div></div>';
			
			$out .= $embedd;

		    $out .='</li>';
			
		endwhile;
		
		$out .='</ul><div class="clear"></div>';

		if ( $columns < $projects ) {
			$out .= '</div>';
		}
		
		wp_reset_query();
	
	endif;

	return $out;
}
add_shortcode('portfolio', 'smitten_portfolio');


/*-----------------------------------------------------------------------------------*/
/*	Latest Blog List
/*-----------------------------------------------------------------------------------*/

function smitten_bloglist($atts){
	extract(shortcode_atts(array(
       	'posts'      => '4',
       	'title' => 'Latest Blog Entries',
       	'show_title' => 'yes',
       	'categories' => 'all'
    ), $atts));
    
    global $post;

	$args = array(
		'post_type' => 'post',
		'posts_per_page' => $posts,
		'order'          => 'DESC',
		'orderby'        => 'date',
		'post_status'    => 'publish'
    );
    
    if($categories != 'all'){
    	
    	// string to array
    	$str = $categories;
    	$arr = explode(',', $str);
    	//var_dump($arr);
    	
		$args['tax_query'][] = array(
			'taxonomy' 	=> 'category',
			'field' 	=> 'slug',
			'terms' 	=> $arr
		);
	}

    query_posts( $args );
    $out = '';
    
   

	if( have_posts() ) :
		
		if($show_title == 'yes'){
			$out .= '<h3 class="title"><span>'.$title.'</span></h3>';
		}
		
		while ( have_posts() ) : the_post();
				
			$out .= '<div class="latest-blog-list clearfix"><div class="blog-list-item-date"><span class="date">'.get_the_time('d').'</span><span class="month">'.get_the_time('M').'</span></div>
					<div class="blog-list-item-description">
						<h4><a href="'.get_permalink().'" title="' . get_the_title() . '">'.get_the_title() .'</a></h4>
						<span class="icomments">'.get_comments_number().' '.__( 'Comments', 'smitten' ) .'</span>
						<div class="blog-list-item-excerpt">'.limit_words(get_the_excerpt(), '20').'... <a href="'. get_permalink() . '">' . 'Read more...' . '</a></div>
					</div>
					</div>';
			
		endwhile;
		
		$out .='<div class="clear"></div>';
		
		 wp_reset_query();
	
	endif;

	return $out;
}
add_shortcode('bloglist', 'smitten_bloglist');

/*-----------------------------------------------------------------------------------*/
/*	Latest Blog
/*-----------------------------------------------------------------------------------*/

function smitten_blog($atts){
	extract(shortcode_atts(array(
       	'posts'      => '4',
       	'title' => 'Latest From the Blog',
       	'show_title' => 'yes',
       	'categories' => 'all'
    ), $atts));
    
    global $post;

	$args = array(
		'post_type' => 'post',
		'posts_per_page' => $posts,
		'order'          => 'DESC',
		'orderby'        => 'date',
		'post_status'    => 'publish'
    );
    
    if($categories != 'all'){
    	
    	// string to array
    	$str = $categories;
    	$arr = explode(',', $str);
    	//var_dump($arr);
    	
		$args['tax_query'][] = array(
			'taxonomy' 	=> 'category',
			'field' 	=> 'slug',
			'terms' 	=> $arr
		);
	}

    query_posts( $args );
    $out = '';
    
   

	if( have_posts() ) :
		
		if($show_title == 'yes'){
			$out .= '<h3 class="title"><span>'.$title.'</span></h3>';
		}
		
		$out .= '<div class="latest-blog negative-wrap">';	
		
		while ( have_posts() ) : the_post();
		
			 //$text = strip_tags(smitten_excerpt(20));
			
			$out .= '<div class="blog-item four columns">';
			
			if ( has_post_thumbnail()) {
				$blog_thumbnail= wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'eight-columns' );
				$out .= '<a href="'.get_permalink().'" title="' . get_the_title() . '" class="blog-pic"><img src="'.$blog_thumbnail[0].'" /><div class="blog-overlay">';
				
					if ( has_post_format( 'audio' )) {
						$out .= '<span class="post-icon audio"></span>';
					}
					if ( has_post_format( 'gallery' )) {
						$out .= '<span class="post-icon imagegallery"></span>';
					}
					if ( has_post_format( 'link' )) {
						$out .= '<span class="post-icon link"></span>';
					}
					if ( has_post_format( 'quote' )) {
						$out .= '<span class="post-icon quote"></span>';
					}
					if ( has_post_format( 'video' )) {
						$out .= '<span class="post-icon video"></span>';
					}
					if ( get_post_format() == false ) {
						$out .= '<span class="post-icon standard"></span>';
					}
				
				$out .= '</div></a>';
			} else if ( $video = get_post_meta($post->ID, '_format_video_embed', true) ) {
				$out .= '<a href="'.get_permalink().'" title="' . get_the_title() . '" class="blog-pic">' . do_shortcode($video) . '<div class="blog-overlay">';
				$out .= '<span class="post-icon video"></span>';
				$out .= '</div></a>';
			} else {
				$images = get_children(array('post_parent' => $post->ID, 'post_type' => 'attachment', 'post_mime_type' => 'image' ));
				if ( $images ) {
					foreach ( $images as $image ) {
						$image_id = $image->ID;
						break;
					}
					$blog_thumbnail= wp_get_attachment_image_src( $image_id, 'eight-columns' );
					$out .= '<a href="'.get_permalink().'" title="' . get_the_title() . '" class="blog-pic"><img src="'.$blog_thumbnail[0].'" /><div class="blog-overlay">';
					
						if ( has_post_format( 'audio' )) {
							$out .= '<span class="post-icon audio"></span>';
						}
						if ( has_post_format( 'gallery' )) {
							$out .= '<span class="post-icon imagegallery"></span>';
						}
						if ( has_post_format( 'link' )) {
							$out .= '<span class="post-icon link"></span>';
						}
						if ( has_post_format( 'quote' )) {
							$out .= '<span class="post-icon quote"></span>';
						}
						if ( has_post_format( 'video' )) {
							$out .= '<span class="post-icon video"></span>';
						}
						if ( get_post_format() == false ) {
							$out .= '<span class="post-icon standard"></span>';
						}
					
					$out .= '</div></a>';

				}
			}
			
			$out .= '<div class="blog-item-description">
						<h4><a href="'.get_permalink().'" title="' . get_the_title() . '">'.get_the_title() .'</a></h4>
						<span>'.get_the_date().' / '.get_comments_number().' '.__( 'Comments', 'smitten' ) .'</span>
					</div>';
		
		    $out .='<div class="blog-border"></div></div>';
			
		endwhile;
		
		$out .='</div><div class="clear"></div>';
		
		 wp_reset_query();
	
	endif;

	return $out;
}
add_shortcode('blog', 'smitten_blog');

/* ----------------------------------------------------- */
/* Remove extra P tags */
/* ----------------------------------------------------- */
function smitten_shortcodes_formatter($content) {
	$block = join("|",array("accordion", "alert", "smitten_button", "divider", "dropcap", "video", "maps", "whitespace", "clear", "icon", "miniicon", "iconbox", "profile", "skill", "pricing", "projects", "blog", "bloglist", "testimonial", "slideshow_testimonials", "faq", "highlight", "counterscircle", "countercircle", "pullquote", "responsiveimage", "visibility", "sociable", "table", "tabs", "toggle", "smitten_tooltip", "list", "headline", "googlefont", "one_half", "one_third", "two_third", "one_fourth", "three_fourth", "one_fifth", "teaser", "teaserbox", "callout", "box", "section", "videosection","gal"));

	// opening tag
	$rep = preg_replace("/(<p>)?\[($block)(\s[^\]]+)?\](<\/p>|<br \/>)?/","[$2$3]",$content);

	// closing tag
	$rep = preg_replace("/(<p>)?\[\/($block)](<\/p>|<br \/>)/","[/$2]",$rep);

	return $rep;
}
add_filter('the_content', 'smitten_shortcodes_formatter');
add_filter('widget_text', 'smitten_shortcodes_formatter');

/* ----------------------------------------------------- */
/* Pre Process Shortcodes */
/* ----------------------------------------------------- */

function pre_process_shortcode($content) {
    global $shortcode_tags;
 
    // Backup current registered shortcodes and clear them all out
    $orig_shortcode_tags = $shortcode_tags;
    remove_all_shortcodes();
    
    add_shortcode('accordion', 'smitten_accordion');
    add_shortcode('alert', 'smitten_alert');
    add_shortcode('button', 'smitten_button');
    
    add_shortcode('teaserbox', 'smitten_teaserbox');
    add_shortcode('teaser', 'smitten_teaser');
    add_shortcode('callout', 'smitten_callout');
    add_shortcode('box', 'smitten_box');
    
    add_shortcode('googlefont', 'smitten_googlefont');
    
    add_shortcode('br', 'smitten_br');
    add_shortcode('clear', 'smitten_clear');
    add_shortcode('whitespace', 'smitten_whitespace');
    add_shortcode('hr', 'smitten_hr');
    
    add_shortcode('one_third', 'smitten_one_third');
	add_shortcode('one_third_last', 'smitten_one_third_last');
	add_shortcode('two_third', 'smitten_two_third');
	add_shortcode('two_third_last', 'smitten_two_third_last');
	add_shortcode('one_half', 'smitten_one_half');
	add_shortcode('one_half_last', 'smitten_one_half_last');
	add_shortcode('one_fourth', 'smitten_one_fourth');
	add_shortcode('one_fourth_last', 'smitten_one_fourth_last');
	add_shortcode('three_fourth', 'smitten_three_fourth');
	add_shortcode('three_fourth_last', 'smitten_three_fourth_last');
	add_shortcode('one_fifth', 'smitten_one_fifth');
	add_shortcode('one_fifth_last', 'smitten_one_fifth_last');
	add_shortcode('two_fifth', 'smitten_two_fifth');
	add_shortcode('two_fifth_last', 'smitten_two_fifth_last');
	add_shortcode('three_fifth', 'smitten_three_fifth');
	add_shortcode('three_fifth_last', 'smitten_three_fifth_last');
	add_shortcode('four_fifth', 'smitten_four_fifth');
	add_shortcode('four_fifth_last', 'smitten_four_fifth_last');
	add_shortcode('one_sixth', 'smitten_one_sixth');
	add_shortcode('one_sixth_last', 'smitten_one_sixth_last');
	add_shortcode('five_sixth', 'smitten_five_sixth');
	add_shortcode('five_sixth_last', 'smitten_five_sixth_last');
	
	add_shortcode('dropcap', 'smitten_dropcap');
	
	add_shortcode('video', 'smitten_video');
	
	add_shortcode('iconbox', 'smitten_iconbox');
	add_shortcode('icon', 'smitten_icon');
	add_shortcode('mini-icon', 'smitten_miniicon');
	
	add_shortcode('counterscircle', 'smitten_counterscircle');
	add_shortcode('countercircle', 'smitten_countercircle');	
	
	add_shortcode( 'gal', 'smitten_gallery' );
	
	add_shortcode('list', 'smitten_list');
	add_shortcode('list_item', 'smitten_item');
	
	add_shortcode('profile', 'smitten_profile');
	add_shortcode('skill', 'smitten_skill');
	
	add_shortcode('plan', 'smitten_plan');
	add_shortcode('pricing-table', 'smitten_pricing');
	
	add_shortcode('blockquote', 'smitten_blockquote');
	add_shortcode('pullquote', 'smitten_pullquote');
	
	add_shortcode('responsive', 'smitten_responsive');
	add_shortcode('visibility', 'smitten_responsivevisibility');

	add_shortcode('section', 'smitten_section');
	add_shortcode('videosection', 'smitten_videosection');
	
	add_shortcode('sociable', 'smitten_social');
	
	add_shortcode('custom_table', 'smitten_table');
	
	add_shortcode('testimonial', 'smitten_testimonial');
	add_shortcode('testimonials', 'smitten_slideshow_testimonials');
	
	add_shortcode('toggle', 'smitten_toggle');
	add_shortcode('faq', 'smitten_faq');
	
	add_shortcode('smitten_tooltip', 'smitten_tooltip');
	add_shortcode('highlight', 'smitten_highlight');
	add_shortcode('separator', 'smitten_separator');
	
	add_shortcode('headline', 'smitten_headline');
	add_shortcode('tagline', 'smitten_tagline');
 
    // Do the shortcode (only the one above is registered)
    $content = do_shortcode($content);
 
    // Put the original shortcodes back
    $shortcode_tags = $orig_shortcode_tags;
 
    return $content;
}

 
add_filter('the_content', 'pre_process_shortcode', 7);

// Allow Shortcodes in Widgets
add_filter('widget_text', 'pre_process_shortcode', 7);

/*-----------------------------------------------------------------------------------*/
/* Add TinyMCE Buttons to Editor */
/*-----------------------------------------------------------------------------------*/
add_action('init', 'add_button');

function add_button() {  
   if ( current_user_can('edit_posts') &&  current_user_can('edit_pages') )  
   {  
     add_filter('mce_external_plugins', 'add_plugin');  
     add_filter('mce_buttons_3', 'register_button_3');
     add_filter('mce_buttons_4', 'register_button_4');  
   }  
}  

// Define Position of TinyMCE Icons
function register_button_3($buttons) {  
   array_push($buttons, "accordion", "alert", "smitten_button", "divider", "dropcap", "video", "maps", "gap", "clear", "icon", "miniicon", "iconbox", "profile", "skill", "pricing", "projects", "blog", "bloglist", "testimonial", "faq", "highlight", "videosection", "section");  
   return $buttons;  
} 
function register_button_4($buttons) {  
   array_push($buttons, "pullquote", "responsiveimage", "visibility", "socialmedia", "table", "tabs", "toggle", "smitten_tooltip", "list", "headline", "googlefont", "one_half", "one_third", "two_third", "one_fourth", "three_fourth", "one_fifth", "teaser", "teaserbox", "callout", "box", "counterscircle", "countercircle");  
   return $buttons;  
}  

function add_plugin($plugin_array) {  
   $plugin_array['accordion'] = get_template_directory_uri().'/framework/inc/tinymce/tinymce.js';
   $plugin_array['alert'] = get_template_directory_uri().'/framework/inc/tinymce/tinymce.js';
   $plugin_array['smitten_button'] = get_template_directory_uri().'/framework/inc/tinymce/tinymce.js';
   $plugin_array['divider'] = get_template_directory_uri().'/framework/inc/tinymce/tinymce.js';
   $plugin_array['dropcap'] = get_template_directory_uri().'/framework/inc/tinymce/tinymce.js';
   $plugin_array['video'] = get_template_directory_uri().'/framework/inc/tinymce/tinymce.js';
   $plugin_array['maps'] = get_template_directory_uri().'/framework/inc/tinymce/tinymce.js';
   $plugin_array['gap'] = get_template_directory_uri().'/framework/inc/tinymce/tinymce.js';
   $plugin_array['clear'] = get_template_directory_uri().'/framework/inc/tinymce/tinymce.js'; 
   $plugin_array['icon'] = get_template_directory_uri().'/framework/inc/tinymce/tinymce.js';
   $plugin_array['miniicon'] = get_template_directory_uri().'/framework/inc/tinymce/tinymce.js';
   $plugin_array['iconbox'] = get_template_directory_uri().'/framework/inc/tinymce/tinymce.js';
   $plugin_array['list'] = get_template_directory_uri().'/framework/inc/tinymce/tinymce.js';
   $plugin_array['profile'] = get_template_directory_uri().'/framework/inc/tinymce/tinymce.js';
   $plugin_array['skill'] = get_template_directory_uri().'/framework/inc/tinymce/tinymce.js';
   $plugin_array['pricing'] = get_template_directory_uri().'/framework/inc/tinymce/tinymce.js';
   $plugin_array['pullquote'] = get_template_directory_uri().'/framework/inc/tinymce/tinymce.js';
   $plugin_array['responsiveimage'] = get_template_directory_uri().'/framework/inc/tinymce/tinymce.js';
   $plugin_array['socialmedia'] = get_template_directory_uri().'/framework/inc/tinymce/tinymce.js';
   $plugin_array['table'] = get_template_directory_uri().'/framework/inc/tinymce/tinymce.js';
   $plugin_array['tabs'] = get_template_directory_uri().'/framework/inc/tinymce/tinymce.js';
   $plugin_array['toggle'] = get_template_directory_uri().'/framework/inc/tinymce/tinymce.js';
   $plugin_array['smitten_tooltip'] = get_template_directory_uri().'/framework/inc/tinymce/tinymce.js';
   $plugin_array['headline'] = get_template_directory_uri().'/framework/inc/tinymce/tinymce.js';
   $plugin_array['googlefont'] = get_template_directory_uri().'/framework/inc/tinymce/tinymce.js';
   $plugin_array['one_half'] = get_template_directory_uri().'/framework/inc/tinymce/tinymce.js';
   $plugin_array['one_third'] = get_template_directory_uri().'/framework/inc/tinymce/tinymce.js';
   $plugin_array['two_third'] = get_template_directory_uri().'/framework/inc/tinymce/tinymce.js';
   $plugin_array['one_fourth'] = get_template_directory_uri().'/framework/inc/tinymce/tinymce.js';
   $plugin_array['three_fourth'] = get_template_directory_uri().'/framework/inc/tinymce/tinymce.js';
   $plugin_array['one_fifth'] = get_template_directory_uri().'/framework/inc/tinymce/tinymce.js';
   $plugin_array['teaser'] = get_template_directory_uri().'/framework/inc/tinymce/tinymce.js';
   $plugin_array['teaserbox'] = get_template_directory_uri().'/framework/inc/tinymce/tinymce.js';
   $plugin_array['callout'] = get_template_directory_uri().'/framework/inc/tinymce/tinymce.js';
   $plugin_array['box'] = get_template_directory_uri().'/framework/inc/tinymce/tinymce.js';
   $plugin_array['projects'] = get_template_directory_uri().'/framework/inc/tinymce/tinymce.js';
   $plugin_array['blog'] = get_template_directory_uri().'/framework/inc/tinymce/tinymce.js';
   $plugin_array['bloglist'] = get_template_directory_uri().'/framework/inc/tinymce/tinymce.js';
   $plugin_array['testimonial'] = get_template_directory_uri().'/framework/inc/tinymce/tinymce.js';
   $plugin_array['section'] = get_template_directory_uri().'/framework/inc/tinymce/tinymce.js';
   $plugin_array['videosection'] = get_template_directory_uri().'/framework/inc/tinymce/tinymce.js';
   $plugin_array['countercircle'] = get_template_directory_uri().'/framework/inc/tinymce/tinymce.js';
   $plugin_array['counterscircle'] = get_template_directory_uri().'/framework/inc/tinymce/tinymce.js';

   return $plugin_array;  
}  
?>