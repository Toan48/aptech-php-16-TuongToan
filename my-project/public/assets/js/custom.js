
/*
Theme Name: Car Project
Author: Kim Dung
Version: 1.0
*/
/*================================================
[  Table of contents  ]
================================================
    1. Owl Carousel








======================================
[ End table content ]
======================================*/

/*---------------------------------------------------------------------
1. Owl Carousel
-----------------------------------------------------------------------*/
$('.owl-productSlide').owlCarousel({
    loop:true,
    autoplay:true,
    dots: false,
    autoplayTimeout:3000,
    nav:true,
    margin: 20,
    responsive:{
        0:{
            items:5
        },
        600:{
            items:5
        },
        1000:{
            items:4
        }
    }
})

$('.owl-relatedSlide').owlCarousel({
    loop:true,
    autoplay:true,
    dots: false,
    autoplayTimeout:3000,
    nav:true,
    margin: 20,
    responsive:{
        0:{
            items:1
        },
        600:{
            items:1
        },
        1000:{
            items:5
        }
    }
})