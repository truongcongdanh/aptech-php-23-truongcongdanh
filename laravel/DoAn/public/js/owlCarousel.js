// owlCrousel
$('.welcome').owlCarousel({
    // items: 3,
	loop: true,
	margin: 10,
	nav: false,
	dots: false,
	autoplay: true,
	autoplayTimeout: 2000,
	autoplayHoverPause: true,
  responsiveClass:true,
	responsive: {
		0: {
			items:1
		},
		768: {
			items:2
		},
		992: {
			items:3
		}
	}
});
//dùng chuột lăn để qua trang owlCarousel
// $('.welcome').on('mousewheel', '.owl-stage', function (e) {
//     if (e.deltaY>0) {
//         $('.welcome').trigger('prev.owl');
// 	}
// 	else {
//         $('.welcome').trigger('next.owl');
//     }
//     e.preventDefault();
// });
