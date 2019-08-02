(function($){
	
	$(document).ready(function(){
		
		$('.nav-wrap .mobile-open').click(function(e){
			e.preventDefault();
			$('.nav-wrap ul#menu-primary').slideToggle(300);
		});
		
		var offset = $('.header .nav-wrap').offset().top;
		if($('#wpadminbar').length){
			offset = offset - $('#wpadminbar').height();
		}
		if($(window).width() > 768){
			$(window).scroll(function(){
				var scrollTop = $(this).scrollTop();
				var isStuck = false;
				if(scrollTop >= offset && !isStuck){
					$('.header .nav-wrap').addClass('sticky');
					isStuck = true;
				} else  {
					$('.header .nav-wrap').removeClass('sticky');
					isStuck = false;
				}
			})
		}
		
	})
	
	
	
})(jQuery)