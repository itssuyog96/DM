$(document).ready(function() {
	
	/*-- SITE MENU --*/
	$('.site-toggle').on('click', function(e){
		e.preventDefault();
		var element = $(".site-menu");
		var button  = $(".site-toggle");
		var content = $(".site-page");
		if( $(element).is(':visible') ) {
			$(element).animate({ 'left': '-240px' }, 'slow', function(){
				$(element).hide();
			});
			$(button).animate({ 'left': '0px' }, 'slow', function(){
				$(button).css({
				   'color' : '#000',
				   'background-color' : '#fff'
				});
				// call resize
				resizeFunc();
			});
			$(content).animate({ 'margin-left': '0px' }, 'slow');
		}
		else {
			$(element).show();
			$(element).animate({ 'left': '0px' }, 'slow');
			$(button).animate({ 'left': '200px' }, 'slow', function(){
				$(button).css({
				   'color' : '#fff',
				   'background-color' : 'transparent'
				});
				// call resize
				resizeFunc();
			});
			$(content).animate({ 'margin-left': '240px' }, 'slow');
		}
	});
	/*-- SITE MENU END --*/
	
	/*-- SITE MENU MOBILE --*/
	function siteMenu() {
		var windowHeight = $(window).height();
		if(windowHeight <= 640) {
			$(".site-menu, .site-background").addClass("mobile");
			$(".site-menu").niceScroll({cursorcolor:"#000", cursorborder:""});
		}
		else {
			$(".site-menu, .site-background").removeClass("mobile");
		}
	}
	/*-- SITE MENU MOBILE END --*/
	
	/*-- NICE SCROLL --*/
	$("html").niceScroll({cursorcolor:"#fff", cursorborder:""});
	/*-- NICE SCROLL END --*/
	
	/*-- PRETTY PHOTO --*/
	$("a[data-rel^='prettyPhoto']").prettyPhoto({
		social_tools: false
	});
	/*-- PRETTY PHOTO END --*/
	
	/*-- PROJECTS CAROUSEL --*/
	var owl1 = $("#owl-projects");
	owl1.owlCarousel({
	  items : 4,
	  itemsDesktop : [1400,3],
	  itemsDesktopSmall : [1100,2],
	  itemsTablet: [600,1],
	  itemsMobile : [400,1],
	  pagination : false,
	  navigation : true,
	  navigationText: false
	});
	/*-- PROJECTS CAROUSEL END --*/
	
	/*-- TEAM CAROUSEL --*/
	var owl2 = $("#owl-team");
	owl2.owlCarousel({
	  items : 4,
	  itemsDesktop : [1400,3],
	  itemsDesktopSmall : [1100,2],
	  itemsTablet: [600,1],
	  itemsMobile : [400,1],
	  pagination : false,
	  navigation : true,
	  navigationText: false
	});
	/*-- TEAM CAROUSEL END --*/
	
	/*-- COUNT TO --*/
	$(".countTo").countTo();
	/*-- COUNT TO END --*/
	
	/*-- MASONRY --*/
	var getMasonry = $('.masonry-list');
	getMasonry.imagesLoaded(function () {
		getMasonry.masonry({
			itemSelector: '.masonry-item',
			columnWidth: '.grid-sizer',
			isAnimated: true
		});
	});
	/*-- MASONRY END --*/
	
	/*-- MASONRY FILTER --*/
	$('.item-filter').on('click', 'a', function(e) {
		e.preventDefault();
        var selector = $(this).data('filter');
		
		$(".item-filter a").removeClass("active");
		$(this).addClass("active");
		
        $(".item").fadeTo("slow", 0.33);
		 $(selector).fadeTo("slow", 1);
    });
	/*-- MASONRY FILTER END --*/
	
	/*-- GOOGLE MAP --*/
	$("#google_map").width("100%").height("400px").gmap3({
		map:{
			options: {
			center:[51.5209564,0.157134],
			zoom: 15,
			mapTypeId: google.maps.MapTypeId.ROADMAP
		}
		},
		marker:{
			latLng:[51.5209564,0.157134]
		}
	});
	/*-- GOOGLE MAP END --*/
	
	/*-- SLIDER --*/
	var getSlider = $('.bxslider').bxSlider({
	  mode: 'fade',
	  adaptiveHeight: true,
	  captions: true,
	  pager: false,
	  auto: true,
	  prevText:'',
	  nextText:''
	});
	/*-- SLIDER END --*/
	
	/*-- FIT VIDEO --*/
	$(".video-full").fitVids();
	/*-- FIT VIDEO END --*/
	
	/*-- RESIZE FUNCTION --*/
	function resizeFunc() {
		// slide resize
		if(getSlider.length ==! 0) {
			getSlider.reloadSlider();
		}
		// masonry resize
		if(getMasonry.length ==! 0) {
			getMasonry.masonry({
			  isAnimated: true
			})
		}
		// projects carousel resize
		if(owl1.length ==! 0) {
			owl1.data('owlCarousel').reinit();
		}
		// team carousel resize
		if(owl2.length ==! 0) {
			owl2.data('owlCarousel').reinit();
		}
	}
	/*-- RESIZE FUNCTION END --*/
	
	/*-- BACK TOP --*/
	$(".site-back-top").hide();
	$(".site-back-top").click(function(e){
		e.preventDefault();
		$("body,html").animate({scrollTop: 0}, 800);
		return false;
	});
	/*-- BACK TOP END --*/
	
	/*-- SCROLL COMMENT FORM --*/
	$(".leave-new").click(function(e){
		e.preventDefault();
		var element = $(".comment-form").offset();
		$("html, body").animate({scrollTop: element.top}, 800);
		return false;
	});
	/*-- SCROLL COMMENT FORM END --*/
	
	/*-- WINDOW SCROLL --*/
	$(window).scroll(function () {
		if($(this).scrollTop() > 100) {
			$(".site-back-top").fadeIn();
		}else{
			$(".site-back-top").fadeOut();
		}
	});
	/*-- WINDOW SCROLL END --*/
	
	/*-- WINDOW LOAD --*/
	$(window).load(function() {
		$(".site-loader").delay(100).fadeOut("slow");
		siteMenu();
	});
	/*-- WINDOW LOAD END --*/
	
	/*-- WINDOW RESIZE --*/
	$(window).resize(function() {
		siteMenu();
	});
	/*-- WINDOW RESIZE END --*/
	
});