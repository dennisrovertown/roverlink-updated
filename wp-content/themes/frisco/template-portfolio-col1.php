<?php

/* Template Name: Portfolio: 1 Column */

?>

<?php get_header(); ?>

<?php get_template_part( 'framework/inc/titlebar' ); ?>
	
<div id="page-wrap" class="container portfolio">

	<!-- Content -->
	<div id="content" class="sixteen columns">
	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
			
		<article class="post" id="post-<?php the_ID(); ?>">
		
			<div class="entry">
				
				<?php the_content(); ?>

				<?php wp_link_pages(array('before' => 'Pages: ', 'next_or_number' => 'number')); ?>

			</div>

		</article>

		<?php endwhile; endif; ?>
	</div>
	<!-- End: content -->
	
<div id="filters" class="sixteen columns">
<?php	$portfolio_filters = get_terms('portfolio_filter');
		if($portfolio_filters): ?>
			<ul class="clearfix">
				<li><a href="#" data-filter="*" class="active"><?php _e('All', 'smitten'); ?></a></li>	
				<?php foreach($portfolio_filters as $portfolio_filter): ?>
					<?php if(get_post_meta(get_the_ID(), 'smitten_portfoliofilter', false)  && !in_array('0', get_post_meta(get_the_ID(), 'smitten_portfoliofilter', false))): ?>
						<?php if(in_array($portfolio_filter->term_id, get_post_meta(get_the_ID(), 'smitten_portfoliofilter', false))): ?>
							<li><a href="#" data-filter=".term-<?php echo $portfolio_filter->slug; ?>"><?php echo $portfolio_filter->name; ?></a></li>
						<?php endif; ?>
					<?php else: ?>
						<li><a href="#" data-filter=".term-<?php echo $portfolio_filter->slug; ?>"><?php echo $portfolio_filter->name; ?></a></li>
					<?php endif; ?>
				<?php endforeach; ?>
			</ul>
		<?php endif; ?>
</div>

	
	<div id="portfolio-wrap">
	
		<?php
			global $wp_query;
			$portfolioitems = $data['text_portfolioitems']; // Get Items per Page Value
			$paged = get_query_var('paged') ? get_query_var('paged') : 1;
			$args = array(
				'post_type' 		=> 'portfolio',
				'posts_per_page' 	=> $portfolioitems,
				'post_status' 		=> 'publish',
				'orderby' 			=> 'date',
				'order' 			=> 'DESC',
				'paged' 			=> $paged
			);
			
			// Only pull from selected Filters if chosen
			$selectedfilters = get_post_meta(get_the_ID(), 'smitten_portfoliofilter', false);
			if($selectedfilters && $selectedfilters[0] == 0) {
				unset($selectedfilters[0]);
			}
			if($selectedfilters){
				$args['tax_query'][] = array(
					'taxonomy' 	=> 'portfolio_filter',
					'field' 	=> 'ID',
					'terms' 	=> $selectedfilters
				);
			}
			
			$wp_query = new WP_Query($args);
			
			while ( $wp_query->have_posts() ) : $wp_query->the_post(); ?>

			<?php $terms = get_the_terms( get_the_ID(), 'portfolio_filter' ); ?>              	
			<div class="<?php if($terms) : foreach ($terms as $term) { echo 'term-'.$term->slug.' '; } endif; ?>portfolio-item-one sixteen columns">
				
				<?php // Define if Lightbox Link or Not
				
				$embedd = '';
				
				if( get_post_meta( get_the_ID(), 'smitten_portfolio-lightbox', true ) == "true") { 
					if( get_post_meta( get_the_ID(), 'smitten_embed', true ) != "") {
						$lightboxtype = '<span class="overlay-lightbox"><i class="icon-play-circle"></i></span>';
						if ( get_post_meta( get_the_ID(), 'smitten_source', true ) == 'youtube' ) {
							$link = '<a href="http://www.youtube.com/watch?v='.get_post_meta( get_the_ID(), 'smitten_embed', true ).'" class="prettyPhoto icon" rel="prettyPhoto[portfolio]" title="'. get_the_title() .'">';
							$embedhtml = '<iframe width="100%" height="100%" frameborder="no" src="http://www.youtube.com/embed/' . get_post_meta( get_the_ID(), 'smitten_embed', true ) . '?rel=1&amp;autoplay=0"></iframe>';
						} else if ( get_post_meta( get_the_ID(), 'smitten_source', true ) == 'vimeo' ) {
							$link = '<a href="http://vimeo.com/'. get_post_meta( get_the_ID(), 'smitten_embed', true ) .'" class="prettyPhoto icon" rel="prettyPhoto[portfolio]" title="'. get_the_title() .'">';
							$embedhtml = '<iframe src="http://player.vimeo.com/video/' . get_post_meta( get_the_ID(), 'smitten_embed', true ) . '#at=0?title=0&amp;byline=0&amp;portrait=0&amp;color=ffffff" width="100%" height="100%" frameborder="0" webkitAllowFullScreen mozallowfullscreen allowFullScreen></iframe>';
						} else if ( get_post_meta( get_the_ID(), 'smitten_source', true ) == 'own' ) {
							$randomid = rand();
							$link = '<a href="#embedd-video-'.$randomid.'" class="prettyPhoto icon" title="'. get_the_title() .'" rel="prettyPhoto[portfolio]">';
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
					$link = '<a href="'. get_permalink() .'" title="'. get_the_title() .'" class="link icon">';
					$embedd = '';
				} ///// ?>
			
				<div class="portfolio-picwrap">
					<?php echo $link; ?>
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
								$src = wp_get_attachment_image_src( $att, 'eight-columns-thin' );
								if ( $src ) {
									$thumbnail = $src[0];
									break;
								}
							}
						}
					?>
					<?php if ( $thumbnail ){ ?>
						<img src="<?php echo $thumbnail ?>" />
					<?php } else if ( has_post_thumbnail()) { ?>
						<?php the_post_thumbnail('eight-columns-thin'); ?>
					<?php } else { ?>
						<?php if ( $embedhtml ): ?>
						<div class="portfolio-embed"><?php echo $embedhtml; ?></div>
						<?php else: ?>
						<img src="<?php echo get_template_directory_uri() ?>/images/default.png" />
						<?php endif; ?>
					<?php } ?>
					<div class="portfolio-overlay"><?php echo $lightboxtype; ?></div></span></a>
				</div>
				<div class="portfolio-desc">
					<a href="<?php the_permalink() ?>" title="<?php the_title(); ?>"><h4><?php the_title(); ?></h4></a>
					<div class="portfolio-tags"><?php $taxonomy = strip_tags( get_the_term_list($post->ID, 'portfolio_filter', '', ', ', '') ); echo $taxonomy; ?></div>
					<?php the_excerpt(); ?>
					<a href="<?php the_permalink() ?>" class="button"><?php _e('View Details', 'smitten'); ?></a>
					<?php if( get_post_meta( get_the_ID(), 'smitten_portfolio-link', true ) != "") { ?>
					<a href="<?php echo get_post_meta( get_the_ID(), 'smitten_portfolio-link', true ); ?>" target="_blank" class="button"><?php _e('Launch Project', 'smitten'); ?></a>
					<?php } ?>	
				</div>
				<?php echo $embedd; ?>
							
			</div> <!-- end of terms -->	
			
		<?php endwhile; ?>
		
	</div>
	
	<div class="sixteen columns">
		<?php get_template_part( 'framework/inc/nav' ); ?>
	</div>
	
</div>


<?php get_footer(); ?>