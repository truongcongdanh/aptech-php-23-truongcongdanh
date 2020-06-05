
$(document).ready(function () {
    // click button ẩn
    $('#btnAn').click(function () { 
        $('#hideShow').hide(500);
        $('#btnHien').show(200);
        $('#btnAn').hide(200);
    });
    // click button hiện
    $('#btnHien').click(function () { 
        $('#hideShow').show(500);
        $('#btnHien').hide(200);
        $('#btnAn').show(200);
    });
    // click button btnSearch
   
        $('#btnSearch').click(function () { 
            // $('#search').toggle()  // thay cho đoạn if else ở dưới
            if ($('#search').attr("style") == "display: inline-block;") {              
                $('#search').hide(500);
            }
            else {
                $('#search').show(500);
            }
            
        });
    // click back to top
        $(window).scroll(function () {
            if ($(this).scrollTop() > 50) {
                $('.back-to-top').show();
            } else {
                $('.back-to-top').hide();
            }
        });
        // scroll body to 0px on click
        $('.back-to-top').click(function () {
            $('body,html').animate({
                scrollTop: 0
            }, 500);
            return false;
        });
  
});

