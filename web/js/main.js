/**
 * Менюшка
 */
var scrolled;
var scrolled2;
window.onscroll = function() {
    scrolled = window.pageYOffset || document.documentElement.scrollTop;

    if(window.matchMedia('(min-width: 1025px)').matches) {
        if (scrolled > 60) {
            $("#site_fix").css({"background": "#000000", "min-width": "100%", "border-bottom": "1px solid #E88D16"});
            $("#site_line_menu").css({"display": "none"});
        }
        if (60 > scrolled) {
            $("#site_fix").css({"background": "transparent", "border": "none"});
            $("#site_line_menu").css({"display": "block"});
        }

    }


    scrolled2 = window.pageYOffset || document.documentElement.scrollTop;
    if(scrolled2 > 300){
        $("#top_button").css({"display": "block"});

    }
    if(300 > scrolled2){
        $("#top_button").css({"display": "none"});
    }

};




/**
 * Выделяем активный пункт меню
 */


$(document).ready(function(){
    var link = window.location.pathname;
    var link2 = window.location.pathname;
    $('.menu_header li a[href="'+link+'"]').addClass('active');
    $('#left_men li a[href="'+link2+'"]').addClass('actives');
});


/**
 * Плашки
 */

// $(document).ready(function(){
//    $("#plachki_one").mouseover(function() {
//           $(this).css({"background": "#B22222"});
//        });
// });



$(document).ready(function(){
$("#plachki_one, #plachki_two").hover(function(){



    $(this).stop().animate({opacity:'1'});
    $(this).css({"background": "#B22222"})
},function(){

    $(this).stop().animate({opacity:'1'});
    $(this).css({"background": "#E88D16"})
});
});







