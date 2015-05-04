/* ------------------------------------------------------------------------ */
/* Javascripts
/* ------------------------------------------------------------------------ */

jQuery(document).ready(function($){
    
     // Clear Input Fields value
	 $('input[type=text]').each(function() {
		var default_value = this.value;
		$(this).focus(function(){
		   if(this.value == default_value) {
		           this.value = '';
		   }
		});
		$(this).blur(function(){
		       if(this.value == '') {
		               this.value = default_value;
		       }
		});
	});	
	
	/* ------------------------------------------------------------------------ */
	/* Back To Top */
	/* ------------------------------------------------------------------------ */

	$(window).scroll(function(){
		if($(window).scrollTop() > 200){
			$("#back-to-top").fadeIn(200);
		} else{
			$("#back-to-top").fadeOut(200);
		}
	});
	
	$('#back-to-top, .back-to-top').click(function() {
		  $('html, body').animate({ scrollTop:0 }, '800');
		  return false;
	});

	/* ------------------------------------------------------------------------ */
	/* Image Hovers */
	/* ------------------------------------------------------------------------ */

	$(".post-image a, .post-gallery a, #portfolio-slider li a").hover(function(){
		$(this).has('img').append('<div class="overlay"></div>');
		$(this).find('.overlay').animate({opacity : '1'}, 300);
	}, function(){
		$(this).find('.overlay').animate({opacity : '0'}, 300 ,function(){ 
			$(this).remove(); 
		});
	});
	
	$('.portfolio-item').hover(function() {
		$(this).find('.portfolio-overlay').stop().animate({'opacity' : 1}, 200, 'easeOutSine');
		$(this).find('.overlay-link, .overlay-lightbox').stop().animate({'top' : $(this).height()/2-54, 'opacity' : 1}, 160, 'easeOutSine');
	}, function(){
		$(this).find('.portfolio-overlay').stop().animate({'opacity' : 0}, 300, 'easeInSine');
		$(this).find('.overlay-link, .overlay-lightbox').stop().animate({'top' : -25, 'opacity' : 0}, 260, 'easeOutSine');
	});
	
	$('.portfolio-item-one .portfolio-picwrap').hover(function() {
		$(this).find('.portfolio-overlay').stop().animate({'opacity' : 1}, 200, 'easeOutSine');
		$(this).find('.overlay-link, .overlay-lightbox').stop().animate({'top' : $(this).height()/2-24, 'opacity' : 1}, 160, 'easeOutSine');
	}, function(){
		$(this).find('.portfolio-overlay').stop().animate({'opacity' : 0}, 300, 'easeInSine');
		$(this).find('.overlay-link, .overlay-lightbox').stop().animate({'top' : -25, 'opacity' : 0}, 260, 'easeOutSine');
	});
	
	$('.blog-item').hover(function() {
		$(this).find('.blog-overlay').stop().animate({'opacity' : 1}, 200, 'easeOutSine');
		$(this).find('.post-icon').stop().animate({'top' : 50, 'opacity' : 1}, 160, 'easeOutSine');
	}, function(){
		$(this).find('.blog-overlay').stop().animate({'opacity' : 0}, 300, 'easeInSine');
		$(this).find('.post-icon').stop().animate({'top' : -25, 'opacity' : 0}, 260, 'easeOutSine');
	});
	
	/* ------------------------------------------------------------------------ */
	/* Upper Widgets Area */
	/* ------------------------------------------------------------------------ */
	
	var topwidgetsstate = 'close';
	var topwidgetsheight = $('#topwidgets').height() + 62;
	
	$('.close-topwidgets').click(function() {
		if(topwidgetsstate == 'close'){
			$('#topwidgets').show().animate({ top : 0 }, 220, 'easeOutQuad');
			$(this).addClass('open');
			topwidgetsstate = 'open';
		}
		else if(topwidgetsstate == 'open'){
			$('#topwidgets').show().animate({ top : -topwidgetsheight }, 220, 'easeOutQuad');
			$(this).removeClass('open');
			topwidgetsstate = 'close';
		}
		return false;
	});
	
	$('#topwidgets').css({'top' : -topwidgetsheight}).fadeIn('fast');
	
	$(window).resize(function() {
		topwidgetsheight = $('#topwidgets').height() + 62;
		$('#topwidgets').css({'top' : -topwidgetsheight}).show();
		$('.close-topwidgets').removeClass('open');
		topwidgetsstate = 'close';
  		});
	
	});
	
/* ------------------------------------------------------------------------ */
/* EOF
/* ------------------------------------------------------------------------ */