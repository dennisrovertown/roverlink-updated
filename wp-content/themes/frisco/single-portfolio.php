<?php get_header(); ?>

<?php get_template_part( 'framework/inc/titlebar' ); ?>
	
<div id="page-wrap" class="container portfolio-detail">
	
	<div id="content">
	
		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
		
		<?php if ( get_post_meta( get_the_ID(), 'smitten_portfolio-detaillayout', true ) == "full-width" ) {
			get_template_part( 'framework/inc/portfolio/full-width' );
		} else {
			get_template_part( 'framework/inc/portfolio/two-column' );
		}
		?>
		
		<?php if( get_post_meta( get_the_ID(), 'smitten_portfolio-relatedposts', true ) == 1 ) { // Show related Posts Projects specific ?>
			
			<div class="clear"></div>
			
			<div id="portfolio-related-post">
				
				<h3 class="title"><span><?php _e('Related Projects', 'smitten'); ?></span></h3>
			
				<?php
				$terms = get_the_terms( $post->ID , 'portfolio_filter', 'string');
				$term_ids = array_values( wp_list_pluck( $terms,'term_id' ) );
				$second_query = new WP_Query( array(
				      'post_type' => 'portfolio',
				      'tax_query' => array(
							array(
								'taxonomy' => 'portfolio_filter',
								'field' => 'id',
								'terms' => $term_ids,
								'operator'=> 'IN' //Or 'AND' or 'NOT IN'
							 )),
				      'posts_per_page' => 4,
				      'ignore_sticky_posts' => 1,
				      'orderby' => 'date',  // 'rand' for random order
				      'post__not_in'=>array($post->ID)
				   ) );
				
				//Loop through posts and display...
				if($second_query->have_posts()) {
					while ($second_query->have_posts() ) : $second_query->the_post(); ?>
					
					      <div class="portfolio-item four columns">

							    <?php // Define if Lightbox Link or Not
								
								$embedd = '';
								
								if( get_post_meta( get_the_ID(), 'smitten_portfolio-lightbox', true ) == "true") { 
									if( get_post_meta( get_the_ID(), 'smitten_embed', true ) != "") {
										if ( get_post_meta( get_the_ID(), 'smitten_source', true ) == 'youtube' ) {
											$link = '<a href="http://www.youtube.com/watch?v='.get_post_meta( get_the_ID(), 'smitten_embed', true ).'" class="prettyPhoto video" rel="prettyPhoto[portfolio]" title="'. get_the_title() .'"></a>';
											$embedhtml = '<iframe width="100%" height="100%" frameborder="no" src="http://www.youtube.com/embed/' . get_post_meta( get_the_ID(), 'smitten_embed', true ) . '?rel=1&amp;autoplay=0"></iframe>';
										} else if ( get_post_meta( get_the_ID(), 'smitten_source', true ) == 'vimeo' ) {
											$link = '<a href="http://vimeo.com/'. get_post_meta( get_the_ID(), 'smitten_embed', true ) .'" class="prettyPhoto video" rel="prettyPhoto[portfolio]" title="'. get_the_title() .'"></a>';
											$embedhtml = '<iframe src="http://player.vimeo.com/video/' . get_post_meta( get_the_ID(), 'smitten_embed', true ) . '#at=0?title=0&amp;byline=0&amp;portrait=0&amp;color=ffffff" width="100%" height="100%" frameborder="0" webkitAllowFullScreen mozallowfullscreen allowFullScreen></iframe>';
										} else if ( get_post_meta( get_the_ID(), 'smitten_source', true ) == 'own' ) {
											$randomid = rand();
											$link = '<a href="#embedd-video-'.$randomid.'" class="prettyPhoto video" title="'. get_the_title() .'" rel="prettyPhoto[portfolio]"></a>';
											$embedd = '<div id="embedd-video-'.$randomid.'" class="embedd-video"><p>'. get_post_meta( get_the_ID(), 'smitten_embed', true ) .'</p></div>';
											$embedhtml = get_post_meta( get_the_ID(), 'smitten_embed', true );
										}
									} else {
										$link = '<a href="'. wp_get_attachment_url( get_post_thumbnail_id() ) .'" class="prettyPhoto gallery" rel="prettyPhoto[portfolio]" title="'. get_the_title() .'"></a>';
						    		}
									$lightboxtype = $link;
						    	}
								else{
									$lightboxtype = '<a href="'. get_permalink() .'" title="'. get_the_title() .'" class="link"></a>';
									$embedd = '';
								} ///// 

								$filters = wp_get_object_terms( get_the_ID(), 'portfolio_filter' );
								$filter_string = '';
								if ( !empty($filters) ) {
									foreach ( $filters as $term ) {
										if ( $filter_string )
											$filter_string .= ', ';
										$filter_string .= sprintf('<a href="%s">%s</a>', get_term_link($term->slug, 'portfolio_filter'), $term->name);
									}
								}

								?>
							
								<div class="portfolio-it">
									<span class="portfolio-pic">
									<?php
										// slider
										$meta = get_post_meta( get_the_ID( ), 'smitten_screenshot', false );
										if ( !is_array( $meta ) )
											$meta = ( array ) $meta;

										$thumbnail = '';
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
												$src = wp_get_attachment_image_src( $att, 'column4-portfolio' );
												if ( $src ) {
													$thumbnail = $src[0];
													break;
												}
											}
										}
									?>

									<?php if ( $thumbnail ) { ?>
										<img src="<?php echo $thumbnail ?>" />
									<?php } else if ( has_post_thumbnail()) { ?>
										<?php the_post_thumbnail('column4-portfolio'); ?>
									<?php } else { ?>
										<?php if ( $embedhtml ): ?>
											<div class="portfolio-embed"><?php echo $embedhtml; ?></div>
										<?php else: ?>
											<img src="<?php echo get_template_directory_uri() ?>/images/default.png" />
										<?php endif; ?>
									<?php } ?>
									</span>
									<div class="portfolio-overlay">
										<?php echo $lightboxtype; ?>
										<h4><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h4>
										<?php if ( $filter_string ): ?><span class="filters"><?php echo $filter_string ?></span><?php endif; ?>
										<span class="excerpt"><?php if(get_post_meta( get_the_ID(), "smitten_subtitle", true ) != '' ) { echo get_post_meta( get_the_ID(), "smitten_subtitle", true ); } else { echo substr(get_the_excerpt(),0,100).'...'; } ?></span>
									</div>
								</div>
								<?php echo $embedd; ?>

					      </div>
					   <?php endwhile; wp_reset_query(); ?>
				<?php } ?>
				
			</div> <!-- end of portfolio-related-posts -->
		
		<?php } //end related specific ?>
		
		<div class="clear"></div>
		
		<div class="sixteen columns portfolio-comments"><?php comments_template(); ?></div>
	
		<?php endwhile; endif; ?>
	
	</div> <!-- end of content -->
	
</div> <!-- end of page-wrap -->

<?php get_footer(); ?>