jQuery(document).ready($ => {
	$(window).scroll(function() {
		const height = $(this).height();
		if ( $(this).scrollTop() > 200 ) {
			$("#btn-scroll-top").attr('style', 'display: block !important');
		} else{
			$("#btn-scroll-top").attr('style', 'display: none !important');
		}
		
	});

	$("#btn-scroll-top").click(() => {
		$('body, html').animate({
			scrollTop: 0
		}, 500);
	});

	$('.division').each(function(index, value) {
		$(this).find('form').addClass('form-group');
		$(this).find('select').addClass('form-control');
	});

	$('.header-widget-container').each(function(index, value) {
		const banner = $(this).find('.chw-widget').length;
		$(this).find('img').addClass('banner');
		if ( banner == 1 ) {
			$(this).wrapInner('<div class="row m-auto"></div>');
			$(this).find(".chw-widget").wrap('<div class="col-12 p-0"></div>');
		} else if ( banner ==2 ) {
			$(this).wrapInner('<div class="row"></div>');
			$(this).find(".chw-widget").wrap('<div class="col-lg-6"></div>');
		}
	});

	$('.division').each(function(index, value) {
		$(this).find('img').addClass('banner');
	});

	$('.navbar').each(function(index, value) {
		$(this).find('a').addClass('nav-link dropdown-item');
	});

	 // $(document).bind("contextmenu",e => false);

	// $(document).keydown(event => {
	//     if (event.keyCode == 123) { // Prevent F12
	//         return false;
	//     } else if (event.ctrlKey && event.shiftKey && event.keyCode == 73 || (event.ctrlKey && event.shiftKey && event.keyCode == 74) || (event.ctrlKey && event.shiftKey && event.keyCode == 67) || (event.ctrlKey && event.keyCode == 85) ) { // Prevent Ctrl+Shift+I        
	//         return false;
	//     }
	// });

	// $(document).ready(function () {
	//     //Disable cut copy paste
	//     $('body').bind('cut copy paste', function (e) {
	//         e.preventDefault();
	//     });
	   
	//     //Disable mouse right click
	//     $("body").on("contextmenu",function(e){
	//         return false;
	//     });
	// });

});