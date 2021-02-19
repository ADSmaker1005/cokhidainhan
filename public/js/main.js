

$(document).ready(function(){
    $(".owl-carousel").owlCarousel({
        items:6,
        loop:true,
        nav:true,
        lazyLoad:true,
        autoplay:true,
        autoplayTimeout:3000,
        autoplayHoverPause:true,
        dots:false,
        navText:['<div class="index--service__carousel--nav__prev"><i class="fas fa-chevron-left"></i></div>','<div class="index--service__carousel--nav__next"><i class="fas fa-chevron-right"></i></div>'],
    });
});
