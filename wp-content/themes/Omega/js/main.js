function n(n){
    return n > 9 ? "" + n: "0" + n;
}
jQuery(document).ready(function () {

	$('.bannersider').flexslider({
	    animation: "fade",
	    controlNav: false,
	    directionNav: true,
	    animationSpeed: 1200,
	    smoothHeight: true,
            start: function(){
	    	var total_count = $('.bannersider .slides li').length;
                var omega_cur_class = $('.flex-active-slide');
                var omega_current_slide = $('.bannersider .slides li').index(omega_cur_class);
                var index_count = (parseInt(omega_current_slide) + parseInt(1));
                $('.current-slide').empty().text(n(index_count));
                $('.total-slide').empty().text(n(total_count));
	    },
	    before: function(){
	    	$('.banner-caption-inner').animate({left: '100px', opacity: '0'}, 700);
	    },
	    after: function(){
	    	$('.banner-caption-inner').animate({left: '0', opacity: '1'}, 700);
                var total_count = $('.bannersider .slides li').length;
                var omega_cur_class = $('.flex-active-slide');
                var omega_current_slide = $('.bannersider .slides li').index(omega_cur_class);
                var index_count = (parseInt(omega_current_slide) + parseInt(1));
                $('.current-slide').empty().text(n(index_count));
                $('.total-slide').empty().text(n(total_count));
	    }
	});
	$('.portfoliodetails-slider').flexslider({
		animation: 'slide',
        smoothHeight: true,
		controlNav: false,
                start: function(){
                    var total_count = $('.portfoliodetails-slider .slides li').length;
                    var omega_cur_class = $('.portfoliodetails-slider .slides li.flex-active-slide');
                    var omega_current_slide = $('.portfoliodetails-slider .slides li').index(omega_cur_class);
                    total_count = (parseInt(total_count) - parseInt(4));
                    omega_current_slide = (parseInt(omega_current_slide) - parseInt(2));
                    var index_count = (parseInt(omega_current_slide) + parseInt(1));
                    $('.current-port-slide').empty().text(n(index_count));
                    $('.total-port-slide').empty().text(n(total_count));
                },
                after: function(){
                    var total_count = $('.portfoliodetails-slider .slides li').length;
                    var omega_cur_class = $('.portfoliodetails-slider .slides li.flex-active-slide');
                    var omega_current_slide = $('.portfoliodetails-slider .slides li').index(omega_cur_class);
                    total_count = (parseInt(total_count) - parseInt(4));
                    omega_current_slide = (parseInt(omega_current_slide) - parseInt(2));
                    var index_count = (parseInt(omega_current_slide) + parseInt(1));
                    $('.current-port-slide').empty().text(n(index_count));
                    $('.total-port-slide').empty().text(n(total_count));
                }
	});

	$('.portfolio-slider').flexslider({
		animation: 'slide',
        smoothHeight: true,
		controlNav: false,
                directionNav: true,
                start: function(){
                    var total_count = $('.portfolio-slider .slides li').length;
                    var omega_cur_class = $('.portfolio-slider .slides li.flex-active-slide');
                    var omega_current_slide = $('.portfolio-slider .slides li').index(omega_cur_class);
                    total_count = (parseInt(total_count) - parseInt(4));
                    omega_current_slide = (parseInt(omega_current_slide) - parseInt(2));
                    var index_count = (parseInt(omega_current_slide) + parseInt(1));
                    $('.current-port-slide').empty().text(n(index_count));
                    $('.total-port-slide').empty().text(n(total_count));
                },
                after: function(){
                    var total_count = $('.portfolio-slider .slides li').length;
                    var omega_cur_class = $('.portfolio-slider .slides li.flex-active-slide');
                    var omega_current_slide = $('.portfolio-slider .slides li').index(omega_cur_class);
                    total_count = (parseInt(total_count) - parseInt(4));
                    omega_current_slide = (parseInt(omega_current_slide) - parseInt(2));
                    var index_count = (parseInt(omega_current_slide) + parseInt(1));
                    $('.current-port-slide').empty().text(n(index_count));
                    $('.total-port-slide').empty().text(n(total_count));
                }
	});

	 $('.bxslider').bxSlider();
	 
    jQuery('header nav').meanmenu({
    	meanScreenWidth: "767",
    	meanMenuContainer: '.header-nav'
    });
	
	jQuery(".media-grid-video, .portfolio-details-video, .video-bl").fitVids();

	var whatweHeight = jQuery('.whatwe-block-content').outerHeight();
	jQuery('.whatwe-title-background').height(whatweHeight);

	var portfolioHeight = jQuery('.portfolio-grid').innerHeight();
	jQuery('.portfolio-slide').height(portfolioHeight);

	$('.logo-carousel').owlCarousel({
	    loop:true,
	    margin:10,
	    nav:true,
	    responsive:{
	        0:{
	            items:1
	        },
	        600:{
	            items:3,
	            margin:10,
	        },
	        1000:{
	            items:4,
	            margin:22,
	        }
	    }
	});
});
