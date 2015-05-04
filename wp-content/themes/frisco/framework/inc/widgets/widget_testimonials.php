<?php

/**
* Testimonials Slideshow Widget
*/
class Widget_Testimonials_Slideshow extends WP_Widget {

    function __construct() {
        $widget_ops = array('classname' => 'widget_testimonials_slideshow', 'description' => __('Testimonials Slideshow', 'smitten') );
        parent::__construct('testimonials_slideshow', __('smitten.Testimonials', 'smitten'), $widget_ops);
        $this->alt_option_name = 'widget_testimonials_slideshow';
    }

    function widget($args, $instance) {
        if ( ! isset( $args['widget_id'] ) )
            $args['widget_id'] = $this->id;

        ob_start();
        extract($args);

        $title = apply_filters('widget_title', empty($instance['title']) ? __( 'Testimonials', 'smitten' ) : $instance['title'], $instance, $this->id_base);
        if ( empty( $instance['number'] ) || ! $number = absint( $instance['number'] ) )
             $number = 5;

		if ( empty( $instance['timeout'] ) || ! $timeout = absint( $instance['timeout'] ) )
			$timeout = 3000;

        $r = new WP_Query( apply_filters( 'widget_posts_args', array( 'post_type' => 'testimonial', 'posts_per_page' => $number, 'no_found_rows' => true, 'post_status' => 'publish', 'ignore_sticky_posts' => true ) ) );
        if ($r->have_posts()) :
?>
        <?php echo $before_widget; ?>
        <?php if ( $title ) echo $before_title . $title . $after_title; ?>
		<div class="slide-buttons"><a class="prevslide">&#60;</a><a class="nextslide">&#62;</a></div>
        <div class="cycle-slideshow" data-cycle-fx="fade" data-allow-wrap="false" data-cycle-timeout="<?php echo $timeout ?>" data-cycle-slides=".item" data-cycle-prev=".prevslide" data-cycle-next=".nextslide">
			<?php while ( $r->have_posts() ) : $r->the_post(); ?>
            <div class="item" style="width:100%;">
				<div class="testimonial">
                <?php the_content(); ?>
				</div>

				<?php
					$author = get_post_meta( get_the_ID(), 'smitten_testimonial_author', true);
					$role = get_post_meta( get_the_ID(), 'smitten_testimonial_role', true);

					$title = '';
					if ( $author ) {
						$title .= '<div class="item-title testimonial-author">';
						$title .= $author . ', ';

						if ( $role )
							$title .= '<span>' . $role . '</span>';

						$title .= '</div>';
					}
					echo $title;
				?>
            </div>
			<?php endwhile; ?>
        </div>
        <?php echo $after_widget; ?>
<?php
        // Reset the global $the_post as this query will have stomped on it
        wp_reset_postdata();

        endif;
    }

    function update( $new_instance, $old_instance ) {
        $instance = $old_instance;
        $instance['title'] = strip_tags($new_instance['title']);
        $instance['number'] = (int) $new_instance['number'];
        $instance['timeout'] = (int) $new_instance['timeout'];

        $alloptions = wp_cache_get( 'alloptions', 'options' );
        if ( isset($alloptions['widget_testimonials_slideshow']) )
            delete_option('widget_testimonials_slideshow');

        return $instance;
    }

    function form( $instance ) {
        $title     = isset( $instance['title'] ) ? esc_attr( $instance['title'] ) : '';
        $number    = isset( $instance['number'] ) ? absint( $instance['number'] ) : 5;
?>
        <p><label for="<?php echo $this->get_field_id( 'title' ); ?>"><?php _e( 'Title:', 'smitten' ); ?></label>
        <input class="widefat" id="<?php echo $this->get_field_id( 'title' ); ?>" name="<?php echo $this->get_field_name( 'title' ); ?>" type="text" value="<?php echo $title; ?>" /></p>

        <p><label for="<?php echo $this->get_field_id( 'number' ); ?>"><?php _e( 'Number of testimonials to show:', 'smitten' ); ?></label>
        <input id="<?php echo $this->get_field_id( 'number' ); ?>" name="<?php echo $this->get_field_name( 'number' ); ?>" type="text" value="<?php echo $number; ?>" size="3" /></p>

        <p><label for="<?php echo $this->get_field_id( 'timeout' ); ?>"><?php _e( 'Timeout(milliseconds):', 'smitten' ); ?></label>
        <input class="widefat" id="<?php echo $this->get_field_id( 'timeout' ); ?>" name="<?php echo $this->get_field_name( 'timeout' ); ?>" type="text" value="<?php echo $timeout; ?>" /></p>

<?php
    }
}

add_action( 'widgets_init', 'testimonials_custom_widgets' );
function testimonials_custom_widgets() {

    register_widget( 'Widget_Testimonials_Slideshow' );

}

?>