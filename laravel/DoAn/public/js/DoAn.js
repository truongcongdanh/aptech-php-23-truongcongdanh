// $(window).scroll(function () {
//     if ($(this).scrollTop() > 200) {
//         $('.menuMyHanh').hide(200);
//     } else {
//         $('.menuMyHanh').show(200);
//     }
// });
// 
$(window).scroll(function () {
    if ($(this).scrollTop() > 500) {
        $('.tenTrang').hide(100);
        $('.tenTrangPhu').show(100);
    } else {
        $('.tenTrang').show(100);
        $('.tenTrangPhu').hide(100);
    }
});