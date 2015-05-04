<?php global $data; ?>

<?php if (!is_singular('portfolio')) { ?>
		
		<?php if ( has_post_thumbnail() && get_post_meta( get_the_ID(), 'smitten_titlebar', true ) == 'featuredimage' ) { ?>
		<!-- Titlebar Type: Post Thumbnail -->
		
			<div id="title-img" class="post-thumbnail" style="background-image: url( <?php $src = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full', false, '' ); echo $src[0]; ?> );">
				<div class="mask"></div>
				<div class="container">
					<h1><?php the_title(); ?></h1>
					<?php if(get_post_meta( get_the_ID(), 'smitten_subtitle', true )){ echo '<h2>'.get_post_meta( get_the_ID(), 'smitten_subtitle', true ).'</h2>'; } ?>
				</div>
			</div>
			
			<?php if(get_post_meta( get_the_ID(), 'smitten_titleimage-breadcrumbs', true ) == true) { ?>
				<div id="title-img-breadcrumbs">
					<div class="container">
						<?php smitten_breadcrumbs(); ?>
					</div>
				</div>
			<?php } ?>
						
		<?php /* ---------------------------------------------------------------------------------------*/ ?>
			
		<?php } elseif ( has_post_thumbnail() && get_post_meta( get_the_ID(), 'smitten_titlebar', true ) == 'featuredimage2' ) { ?>
		<!-- Titlebar Type: No Titlebar -->
		
			<div id="title-img-2" class="post-thumbnail" style="background-image: url( <?php $src = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full', false, '' ); echo $src[0]; ?> );">
				<div class="container">
					<div class="ten columns">
					<h1><?php the_title(); ?></h1>
					<?php if(get_post_meta( get_the_ID(), 'smitten_subtitle', true )){ echo '<h2>'.get_post_meta( get_the_ID(), 'smitten_subtitle', true ).'</h2>'; } ?>
				</div>
					<?php if(get_post_meta( get_the_ID(), 'smitten_titleimage-breadcrumbs', true ) == true) { ?>
						<div id="breadcrumbs" class="six columns <?php if(get_post_meta( get_the_ID(), 'smitten_subtitle', true )){ echo 'breadrcumbpadding'; } /* to align middle */ ?>">
							<?php  smitten_breadcrumbs(); ?>
						</div>
					<?php } ?>
				</div>
			</div>

			
		<?php /* ---------------------------------------------------------------------------------------*/ ?>
		
		<?php } elseif (get_post_meta( get_the_ID(), 'smitten_titlebar', true ) == 'notitlebar') { ?>
		<!-- Titlebar Type: No Titlebar -->
		
			<?php if(get_post_meta( get_the_ID(), 'smitten_titleimage-breadcrumbs', true ) == true) { ?>
			<div id="no-title">
				<div class="container">
						<div id="breadcrumbs" class="sixteen columns <?php if(get_post_meta( get_the_ID(), 'smitten_subtitle', true )){ echo 'breadrcumbpadding'; } /* to align middle */ ?>">
							<?php  smitten_breadcrumbs(); ?>
						</div>
				</div>
			</div>
			<?php } else { ?>
			<div id="no-title-divider"></div>
			<?php } ?>
			
		<?php /* ---------------------------------------------------------------------------------------*/ ?>
		
		<?php } elseif (get_post_meta( get_the_ID(), 'smitten_titlebar', true ) == 'revslider') { ?>
		<!-- Titlebar Type: Revolution Slider -->
		
			<div class="clear"></div>
	
			<?php if(class_exists('RevSlider')){ putRevSlider(get_post_meta( get_the_ID(), 'smitten_revolutionslider', true )); } ?>
			
		<?php /* ---------------------------------------------------------------------------------------*/ ?>
			
		<?php } elseif (get_post_meta( get_the_ID(), 'smitten_titlebar', true ) == 'flexslider') { ?>
		<!-- Titlebar Type: FlexSlider -->
			
			<div id="title-flexslider">
				<div class="container">
					<div class="sixteen columns">
						<?php echo do_shortcode('[wooslider slide_page="'.get_post_meta( get_the_ID(), 'smitten_flexslider', true ).'" slider_type="slides" limit="5"]'); ?>
					</div>
				</div>
			</div>
			
		<?php /* ---------------------------------------------------------------------------------------*/ ?>
			
		<?php } else { ?>
		<!-- Titlebar Type: Default Titlebar -->
	
			<div id="title">
				<div class="container">
					<div class="ten columns">
						<h1><?php the_title(); ?></h1>
						<?php if(get_post_meta( get_the_ID(), 'smitten_subtitle', true )){ echo '<h2>'.get_post_meta( get_the_ID(), 'smitten_subtitle', true ).'</h2>'; } ?>
					</div>
					<?php if(get_post_meta( get_the_ID(), 'smitten_titleimage-breadcrumbs', true ) == true) { ?>
						<div id="breadcrumbs" class="six columns <?php if(get_post_meta( get_the_ID(), 'smitten_subtitle', true )){ echo 'breadrcumbpadding'; } /* to align middle */ ?>">
							<?php  smitten_breadcrumbs(); ?>
						</div>
					<?php } ?>
				</div>
			</div>
					
		<?php } ?>
		
	<?php /* ---------------------------------------------------------------------------------------*/ ?>
	
	<!-- End: Title Bar -->

<?php } else { // Begin: Single Projects Title bar ?>

	<?php if (get_post_meta( get_the_ID(), 'smitten_titlebar', true ) == 'notitlebar') { ?>
		
		<div id="no-title-divider"></div>
		
	<?php } else { ?>

		<div id="title">
			<div class="container">
				<div class="ten columns">
					<h1><?php the_title(); ?></h1>
					<?php if(get_post_meta( get_the_ID(), 'smitten_subtitle', true )){ echo '<h2>'.get_post_meta( get_the_ID(), 'smitten_subtitle', true ).'</h2>'; } ?>
				</div>
				<div class="projects-nav <?php if( (get_post_meta( get_the_ID(), 'smitten_subtitle', true )) == true ){ echo 'projectsnavpadding'; } /* to align middle */ ?>">
					<?php next_post_link('<div class="next">%link</div>', __('Next', 'smitten')); ?>  
					<?php previous_post_link('<div class="prev">%link</div>', __('Previous', 'smitten')); ?>
				</div>
			</div>
		</div>
			
	<?php } ?>

	<!-- End: Projects Title Bar -->

<?php } ?>

	<!-- Begin: Full Width Map -->

<?php
	//Full Width Map
	$fullwidth_map = get_post_meta( get_the_ID(), 'smitten_full_width_map', true );
	if ( $fullwidth_map == 'visible' ) {
		echo smitten_fullwidth_map();
	}
?>
	<!-- End: Full Width Map -->