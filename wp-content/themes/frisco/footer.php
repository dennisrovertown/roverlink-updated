	<div class="clear"></div>
	
	<?php global $data; ?>
	
	<?php if($data['check_footerwidgets'] == true) { ?>
	<footer id="footer">
		<div class="container">
			<div class="clearfix">
				<?php if (function_exists('dynamic_sidebar') && dynamic_sidebar('Footer Widgets')); ?>		
			</div>
		</div>
	</footer>
	<?php } ?>
		
	<div id="copyright" class="clearfix">
		<div class="container">
			
			<div class="copyright-text eight columns">
				<?php if($data['textarea_copyright'] != "") { ?>
					<?php echo $data['textarea_copyright']; ?>
				<?php } else { ?>
					&copy; Copyright <?php echo date("Y"); echo " "; bloginfo('name'); ?>
				<?php } ?>
			</div>
			
			<div class="eight columns">
				<div class="footer-menu">
				<?php wp_nav_menu(array('theme_location' => 'footer_navigation', 'menu_id' => 'footer_nav')); ?>
				</div>
			</div>
			
		</div>
	</div><!-- end copyright -->
		
	<div class="clear"></div>
		
	<?php if($data['select_layoutstyle'] == 'Boxed Layout' || $data['select_layoutstyle'] == 'Boxed Layout with margin' ) { ?>
	</div> <!-- end boxed -->
	<?php } ?>

	<div id="back-to-top"><a href="#"><?php _e( 'Back to Top', 'smitten' ) ?></a></div>
	
	<?php if($data['check_topwidgets'] == true) { ?>
	<div id="topwidgets" class="clearfix">
		<div class="container clearfix">
			<?php 
				if (function_exists('dynamic_sidebar') && dynamic_sidebar('topwidgets Widgets')){

				}
				else{ 
					echo '<div class="no-widgets">'.$data['textarea_topwidgets'].'</div>'; 
				}
			?>	
		</div>
		<a href="#" class="close-topwidgets"></a>
	</div>
	<?php } ?>
	
	<?php if($data['textarea_trackingcode'] != '') { echo $data['textarea_trackingcode']; } ?>
	
	<?php wp_footer(); ?>
	
</body>

</html>
