<!DOCTYPE html>
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html <?php language_attributes(); ?>> <!--<![endif]-->
<head>

<!-- Basic Page Needs 
========================================================= -->

<meta charset="<?php bloginfo('charset'); ?>">
<title><?php bloginfo('name'); ?> <?php wp_title(' - ', true, 'left'); ?></title>

<!--[if lt IE 9]>
	<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->

<?php global $data; ?>

<!-- Favicons & Mobile Icons ================================= -->

<?php if($data['check_mobilezoom'] == 0) { ?><meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0"><?php } ?>

<?php if($data['media_favicon'] != "") { ?><link rel="shortcut icon" href="<?php echo $data['media_favicon']; ?>"><?php } ?>

<?php if($data['media_favicon_iphone'] != "") { ?><link rel="apple-touch-icon" href="<?php echo $data['media_favicon_iphone']; ?>"><?php } ?>

<?php if($data['media_favicon_iphone_retina'] != "") { ?><link rel="apple-touch-icon" sizes="114x114" href="<?php echo $data['media_favicon_iphone_retina']; ?>"><?php } ?>

<?php if($data['media_favicon_ipad'] != "") { ?><link rel="apple-touch-icon" sizes="72x72" href="<?php echo $data['media_favicon_ipad']; ?>"><?php } ?>

<?php if($data['media_favicon_ipad_retina'] != "") { ?><link rel="apple-touch-icon" sizes="144x144" href="<?php echo $data['media_favicon_ipad_retina']; ?>"><?php } ?>


<!-- WordPress ================================================== -->

<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
<?php if ( is_singular() ) wp_enqueue_script( 'comment-reply' ); ?>

<?php get_template_part( 'includes/lib/googlefonts'); ?>

<?php wp_head(); ?>

</head>

<body <?php body_class(); ?>>

	<?php if($data['select_layoutstyle'] == 'Boxed Layout' || $data['select_layoutstyle'] == 'Boxed Layout with margin' ) { ?>	
	<div id="boxed-layout">
	<?php } ?>
	
	<?php if($data['check_uppersocket'] == true) { ?>
	<div id="uppersocket" class="clearfix <?php if($data['check_socialuppersocket'] == false) { echo 'no-social'; } ?>">
	
		<div class="container">
		
			<div class="eight columns">
				<?php if($data['text_sockettext'] != "") { ?>
					<div class="sockettext"><?php echo $data['text_sockettext']; ?></div>
					<div class="clear"></div>
				<?php } ?>
			</div>
			
			<?php if($data['check_socialuppersocket'] == true) { ?>
			<div class="eight columns">
				<div class="social-icons clearfix">
					<ul>  
                        <?php if($data['sociable_behance'] != "") { ?>
							<li class="social-behance"><a href="<?php echo $data['sociable_behance']; ?>" target="_blank" title="<?php _e( 'Behance', 'smitten' ) ?>"><?php _e( 'Behance', 'smitten' ) ?></a></li>
						<?php } ?>
                        <?php if($data['sociable_delicious'] != "") { ?>
							<li class="social-delicious"><a href="<?php echo $data['sociable_delicious']; ?>" target="_blank" title="<?php _e( 'Delicious', 'smitten' ) ?>"><?php _e( 'Delicious', 'smitten' ) ?></a></li>
						<?php } ?>
 						<?php if($data['sociable_deviantart'] != "") { ?>
							<li class="social-deviantart"><a href="<?php echo $data['sociable_deviantart']; ?>" target="_blank" title="<?php _e( 'DeviantArt', 'smitten' ) ?>"><?php _e( 'DeviantArt', 'smitten' ) ?></a></li>
						<?php } ?>                       
                   		<?php if($data['sociable_digg'] != "") { ?>
							<li class="social-digg"><a href="<?php echo $data['sociable_digg']; ?>" target="_blank" title="<?php _e( 'Digg', 'smitten' ) ?>"><?php _e( 'Digg', 'smitten' ) ?></a></li>
						<?php } ?>
                   		<?php if($data['sociable_dribbble'] != "") { ?>
							<li class="social-dribbble"><a href="<?php echo $data['sociable_dribbble']; ?>" target="_blank" title="<?php _e( 'Dribbble', 'smitten' ) ?>"><?php _e( 'Dribbble', 'smitten' ) ?></a></li>
						<?php } ?>
						<?php if($data['sociable_flickr'] != "") { ?>
							<li class="social-flickr"><a href="<?php echo $data['sociable_flickr']; ?>" target="_blank" title="<?php _e( 'Flickr', 'smitten' ) ?>"><?php _e( 'Flickr', 'smitten' ) ?></a></li>
						<?php } ?>
						<?php if($data['sociable_facebook'] != "") { ?>
							<li class="social-facebook"><a href="<?php echo $data['sociable_facebook']; ?>" target="_blank" title="<?php _e( 'Facebook', 'smitten' ) ?>"><?php _e( 'Facebook', 'smitten' ) ?></a></li>
						<?php } ?>
                        <?php if($data['sociable_forrst'] != "") { ?>
							<li class="social-forrst"><a href="<?php echo $data['sociable_forrst']; ?>" target="_blank" title="<?php _e( 'Forrst', 'smitten' ) ?>"><?php _e( 'Forrst', 'smitten' ) ?></a></li>
						<?php } ?>                   
						<?php if($data['sociable_google'] != "") { ?>
							<li class="social-google"><a href="<?php echo $data['sociable_google']; ?>" target="_blank" title="<?php _e( 'Google', 'smitten' ) ?>"><?php _e( 'Google+', 'smitten' ) ?></a></li>
						<?php } ?>
						<?php if($data['sociable_instagram'] != "") { ?>
							<li class="social-instagram"><a href="<?php echo $data['sociable_instagram']; ?>" target="_blank" title="<?php _e( 'Instagram', 'smitten' ) ?>"><?php _e( 'Instagram', 'smitten' ) ?></a></li>
						<?php } ?>
                        <?php if($data['sociable_linkedin'] != "") { ?>
							<li class="social-linkedin"><a href="<?php echo $data['sociable_linkedin']; ?>" target="_blank" title="<?php _e( 'LinkedIn', 'smitten' ) ?>"><?php _e( 'LinkedIn', 'smitten' ) ?></a></li>
						<?php } ?>
  						<?php if($data['sociable_rss'] == true) { ?>
							<li class="social-rss"><a href="<?php bloginfo('rss2_url'); ?>" target="_blank" title="<?php _e( 'RSS', 'smitten' ) ?>"><?php _e( 'RSS', 'smitten' ) ?></a></li>
						<?php } ?>    
						<?php if($data['sociable_skype'] != "") { ?>
							<li class="social-skype"><a href="<?php echo $data['sociable_skype']; ?>" target="_blank" title="<?php _e( 'Skype', 'smitten' ) ?>"><?php _e( 'Skype', 'smitten' ) ?></a></li>
						<?php } ?>
						<?php if($data['sociable_tumblr'] != "") { ?>
							<li class="social-tumblr"><a href="<?php echo $data['sociable_tumblr']; ?>" target="_blank" title="<?php _e( 'Tumblr', 'smitten' ) ?>"><?php _e( 'Tumblr', 'smitten' ) ?></a></li>
						<?php } ?>
            			<?php if($data['sociable_vimeo'] != "") { ?>
							<li class="social-vimeo"><a href="<?php echo $data['sociable_vimeo']; ?>" target="_blank" title="<?php _e( 'Vimeo', 'smitten' ) ?>"><?php _e( 'Vimeo', 'smitten' ) ?></a></li>
						<?php } ?>
						<?php if($data['sociable_yahoo'] != "") { ?>
							<li class="social-yahoo"><a href="<?php echo $data['sociable_yahoo']; ?>" target="_blank" title="<?php _e( 'Yahoo', 'smitten' ) ?>"><?php _e( 'Yahoo', 'smitten' ) ?></a></li>
						<?php } ?>
						<?php if($data['sociable_youtube'] != "") { ?>
							<li class="social-youtube"><a href="<?php echo $data['sociable_youtube']; ?>" target="_blank" title="<?php _e( 'YouTube', 'smitten' ) ?>"><?php _e( 'YouTube', 'smitten' ) ?></a></li>
						<?php } ?>
						<?php if($data['sociable_picasa'] != "") { ?>
							<li class="social-picasa"><a href="<?php echo $data['sociable_picasa']; ?>" target="_blank" title="<?php _e( 'Picasa', 'smitten' ) ?>"><?php _e( 'Picasa', 'smitten' ) ?></a></li>
						<?php } ?>
						<?php if($data['sociable_pinterest'] != "") { ?>
							<li class="social-pinterest"><a href="<?php echo $data['sociable_pinterest']; ?>" target="_blank" title="<?php _e( 'Pinterest', 'smitten' ) ?>"><?php _e( 'Pinterest', 'smitten' ) ?></a></li>
						<?php } ?>
						<?php if($data['sociable_paypal'] != "") { ?>
							<li class="social-paypal"><a href="<?php echo $data['sociable_paypal']; ?>" target="_blank" title="<?php _e( 'PayPal', 'smitten' ) ?>"><?php _e( 'PayPal', 'smitten' ) ?></a></li>
						<?php } ?>
                        <?php if($data['sociable_twitter'] != "") { ?>
							<li class="social-twitter"><a href="http://www.twitter.com/<?php echo $data['sociable_twitter']; ?>" target="_blank" title="<?php _e( 'Twitter', 'smitten' ) ?>"><?php _e( 'Twitter', 'smitten' ) ?></a></li>
						<?php } ?>
						<?php if($data['sociable_xing'] != "") { ?>
							<li class="social-xing"><a href="<?php echo $data['sociable_xing']; ?>" target="_blank" title="<?php _e( 'XING', 'smitten' ) ?>"><?php _e( 'XING', 'smitten' ) ?></a></li>
						<?php } ?>
					</ul>
				</div>
			</div>
			<?php } ?>
		
		</div>
	
	</div> <!-- End Upper Socket -->
    
	<?php } ?>

	<?php
	
	if($data['header_layout']) {
		if(is_page('header-2')) {
			include_once('framework/inc/headers/header-s2.php');
		} elseif(is_page('header-3')) {
			include_once('framework/inc/headers/header-s3.php');
		} elseif(is_page('header-4')) {
			include_once('framework/inc/headers/header-s4.php');
		} elseif(is_page('header-5')) {
			include_once('framework/inc/headers/header-s5.php');
		} elseif(is_page('header-6')) {
			include_once('framework/inc/headers/header-s6.php');
		} else {
			include_once('framework/inc/headers/header-'.$data['header_layout'].'.php');
		}
	} else {
		if(is_page('header-2')) {
			include_once('framework/inc/headers/header-s2.php');
		} elseif(is_page('header-3')) {
			include_once('framework/inc/headers/header-s3.php');
		} elseif(is_page('header-4')) {
			include_once('framework/inc/headers/header-s4.php');
		} elseif(is_page('header-5')) {
			include_once('framework/inc/headers/header-s5.php');
		} elseif(is_page('header-6')) {
			include_once('framework/inc/headers/header-s6.php');
		} else {
			include_once('framework/inc/headers/header-s1.php');
		}
	}
	
	?>		