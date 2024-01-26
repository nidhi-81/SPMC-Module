AOS.init();

jQuery('.banner .owl-carousel').owlCarousel({
	loop:false,
	nav:false,
	dots:true,
	mousedrag:false,
	items:1,
	autoplay:false,
	navText:["<i class='fa fa-angle-left'></i>","<i class='fa fa-angle-right'></i>"],
})

jQuery('.testimonial .owl-carousel, .gallery .owl-carousel').owlCarousel({
	loop:true,
	margin:20,
	nav:false,
	dots:true,
	touchDrag: false,
	mouseDrag: false,
	autoplay:true,
	navText:["<i class='fa fa-angle-left'></i>","<i class='fa fa-angle-right'></i>"],
	responsive:{
		0:{items:1},
		575:{items:2},
		767:{items:3}
	}
});

jQuery("nav .fa-bars").click(function(){
  jQuery("ul.main").toggle();
});