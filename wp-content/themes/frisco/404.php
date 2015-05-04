<?php get_header(); ?>
		<div id="title">
			<div class="container">
				<div class="ten columns">
					<h1><?php _e('Error 404', 'smitten') ?></h1>
				</div>
			</div>
		</div>
        
	<div id="page-wrap" class="container">
	
		<div id="content" class="sixteen columns">
				
			<article class="post">
	
				<div class="entry" id="error-404">
						
					<h2 class="error-404"><?php _e("Four-oh-Four!", "smitten") ?></h2>
					<h3 class="error-404"><?php _e("Sorry, but the page you are looking for could not be found.", "smitten") ?></h3>
					<br /><br />
					
					<span align="center"><a href="<?php echo home_url(); ?>" target="_self" class="button 2d-accent large"><?php _e("Back to Home", "smitten") ?></a></span>
	
				</div>
	
			</article>
			
		</div> <!-- end content -->
	
	</div> <!-- end page-wrap -->
	
<?php get_footer(); ?>
