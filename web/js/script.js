
function indicator(autoplay){$('.swiper-indication').stop(true);$('.swiper-indication').css({width:'0%',});
$('.swiper-indication').animate({width:'100%',},autoplay,'linear');}
var swiper=new Swiper('.ares-slider',{loop:true,nextButton:'.swiper-button-next',prevButton:'' +
'.swiper-button-prev',paginationClickable:true,spaceBetween:20,autoplayDisableOnInteraction:false,onTouchStart:function(){

},onInit:function(swiper){},onAutoplay:function(swiper){}});var swiper_sale=
    new Swiper('.swiper_sale_wrapper',
        {wrapperClass:'swiper_sale',slideClass:'mobile_slide',slidesPerView:'auto',
            spaceBetween:5,preventClicks:true,scrollbar:'.swiper-scrollbar'
            ,scrollbarHide:false,slidesPerView:'auto',grabCursor:true,breakpoints:{980:{spaceBetween:0,},}});
var awards_block_mobile=new Swiper('.awards_block_mobile',{slidesPerView:'auto',spaceBetween:5,
    preventClicks:true,freeMode:true,scrollbar:'.swiper-scrollbar',scrollbarHide:false,slidesPerView:'auto'
    ,grabCursor:true,breakpoints:{980:{spaceBetween:0,},}});var swiper=new Swiper('.portfolio_block',{slidesPerView:
    'auto',paginationClickable:false,spaceBetween:13,preventClicks:true,freeMode:true,scrollbar:'.swiper-scrollbar'
    ,scrollbarHide:false,slidesPerView:'auto',grabCursor:true,breakpoints:{980:{spaceBetween:0,},}});var swiper=new
Swiper('.diploms_block',{slidesPerView:'auto',paginationClickable:false,spaceBetween:13,preventClicks:true,
    freeMode:true,scrollbar:'.swiper-scrollbar',scrollbarHide:false,slidesPerView:'auto'
    ,grabCursor:true,breakpoints:{980:{spaceBetween:0,},}});