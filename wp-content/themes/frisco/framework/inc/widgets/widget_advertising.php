<?php

/*
Plugin Name: Custom Flickr Widget
Plugin URI: http://twitter.com/hellosmitten/
Description: A simple but powerful widget to display advertisings.
Version: 2.00
Author: smitten
Author URI: http://twitter.com/hellosmitten/
*/

class widget_advertising extends WP_Widget_Text { 
	
	// Widget Settings
	function widget_advertising() {
		$widget_ops = array('description' => __('Display your advertising Links') );
		$control_ops = array( 'width' => 300, 'height' => 350, 'id_base' => 'advertising' );
		$this->WP_Widget( 'advertising', __('smitten.Advertising'), $widget_ops, $control_ops );
	}
	
	// Widget Output
	function widget($args, $instance) {
		extract($args);
		$title = apply_filters('widget_title', $instance['title']);
		
		$advertising1 = $instance['advertising1'];
		$advertisingimg1 = $instance['advertisingimg1'];
		
		$advertising2 = $instance['advertising2'];
		$advertisingimg2 = $instance['advertisingimg2'];
		
		$advertising3 = $instance['advertising3'];
		$advertisingimg3 = $instance['advertisingimg3'];
		
		$advertising4 = $instance['advertising4'];
		$advertisingimg4 = $instance['advertisingimg4'];
		
		// ------
		echo $before_widget;
		echo $before_title . $title . $after_title;
		
		echo '<div class="advertisings clearfix">';
			if (!empty($advertisingimg1)) { echo '<a href="'.$advertising1.'" target="_blank"><img src="'.$advertisingimg1.'" /></a>';}
			if (!empty($advertisingimg2)) { echo '<a href="'.$advertising2.'" target="_blank"><img src="'.$advertisingimg2.'" /></a>';}
			if (!empty($advertisingimg3)) { echo '<a href="'.$advertising3.'" target="_blank"><img src="'.$advertisingimg3.'" /></a>';}
			if (!empty($advertisingimg4)) { echo '<a href="'.$advertising4.'" target="_blank"><img src="'.$advertisingimg4.'" /></a>';}
		echo '</div>';

		echo $after_widget;
		// ------
	}
	
	// Update
	function update( $new_instance, $old_instance ) {  
		$instance = $old_instance; 
		
		$instance['title'] = strip_tags( $new_instance['title'] );
		
		$instance['advertising1'] = strip_tags( $new_instance['advertising1'] );
		$instance['advertisingimg1'] = strip_tags( $new_instance['advertisingimg1'] );
		
		$instance['advertising2'] = strip_tags( $new_instance['advertising2'] );
		$instance['advertisingimg2'] = strip_tags( $new_instance['advertisingimg2'] );
		
		$instance['advertising3'] = strip_tags( $new_instance['advertising3'] );
		$instance['advertisingimg3'] = strip_tags( $new_instance['advertisingimg3'] );
		
		$instance['advertising4'] = strip_tags( $new_instance['advertising4'] );
		$instance['advertisingimg4'] = strip_tags( $new_instance['advertisingimg4'] );

		return $instance;
	}
	
	// Backend Form
	function form($instance) {
		$placeholder = 'http://placehold.it/95x95';
		$defaults = array( 'title' => 'advertising Widget', 'advertising1' => '#', 'advertisingimg1' => $placeholder, 'advertising2' => '#', 'advertisingimg2' => $placeholder, 'advertising3' => '#', 'advertisingimg3' => $placeholder, 'advertising4' => '#', 'advertisingimg4' => $placeholder ); // Default Values
		$instance = wp_parse_args( (array) $instance, $defaults ); ?>
        
		<p>
			<label for="<?php echo $this->get_field_id( 'title' ); ?>">Widget Title:</label>
			<input class="widefat" id="<?php echo $this->get_field_id( 'title' ); ?>" name="<?php echo $this->get_field_name( 'title' ); ?>" value="<?php echo $instance['title']; ?>" />
		</p>
		
        <p>
			<label for="<?php echo $this->get_field_id( 'advertising1' ); ?>">advertising 1 URL:</label>
			<input class="widefat" id="<?php echo $this->get_field_id( 'advertising1' ); ?>" name="<?php echo $this->get_field_name( 'advertising1' ); ?>" value="<?php echo $instance['advertising1']; ?>" />
		</p>

		<p>
			<label for="<?php echo $this->get_field_id( 'advertisingimg1' ); ?>">advertising 1 Image URL:</label>
			<input class="widefat" id="<?php echo $this->get_field_id( 'advertisingimg1' ); ?>" name="<?php echo $this->get_field_name( 'advertisingimg1' ); ?>" value="<?php echo $instance['advertisingimg1']; ?>" />
		</p>
		
		<p>
			<label for="<?php echo $this->get_field_id( 'advertising2' ); ?>">advertising 2 URL:</label>
			<input class="widefat" id="<?php echo $this->get_field_id( 'advertising2' ); ?>" name="<?php echo $this->get_field_name( 'advertising2' ); ?>" value="<?php echo $instance['advertising2']; ?>" />
		</p>

		<p>
			<label for="<?php echo $this->get_field_id( 'advertisingimg2' ); ?>">advertising 2 Image URL:</label>
			<input class="widefat" id="<?php echo $this->get_field_id( 'advertisingimg2' ); ?>" name="<?php echo $this->get_field_name( 'advertisingimg2' ); ?>" value="<?php echo $instance['advertisingimg2']; ?>" />
		</p>
		
		<p>
			<label for="<?php echo $this->get_field_id( 'advertising3' ); ?>">advertising 3 URL:</label>
			<input class="widefat" id="<?php echo $this->get_field_id( 'advertising3' ); ?>" name="<?php echo $this->get_field_name( 'advertising3' ); ?>" value="<?php echo $instance['advertising3']; ?>" />
		</p>

		<p>
			<label for="<?php echo $this->get_field_id( 'advertisingimg3' ); ?>">advertising 3 Image URL:</label>
			<input class="widefat" id="<?php echo $this->get_field_id( 'advertisingimg3' ); ?>" name="<?php echo $this->get_field_name( 'advertisingimg3' ); ?>" value="<?php echo $instance['advertisingimg3']; ?>" />
		</p>
		
		<p>
			<label for="<?php echo $this->get_field_id( 'advertising4' ); ?>">advertising 4 URL:</label>
			<input class="widefat" id="<?php echo $this->get_field_id( 'advertising4' ); ?>" name="<?php echo $this->get_field_name( 'advertising4' ); ?>" value="<?php echo $instance['advertising4']; ?>" />
		</p>

		<p>
			<label for="<?php echo $this->get_field_id( 'advertisingimg4' ); ?>">advertising 4 Image URL:</label>
			<input class="widefat" id="<?php echo $this->get_field_id( 'advertisingimg4' ); ?>" name="<?php echo $this->get_field_name( 'advertisingimg4' ); ?>" value="<?php echo $instance['advertisingimg4']; ?>" />
		</p>
		
    <?php }
}

// Add Widget
function widget_advertising_init() {
	register_widget('widget_advertising');
}
add_action('widgets_init', 'widget_advertising_init');

?>