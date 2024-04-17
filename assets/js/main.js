window.onload = function () {
    // script
};

$(function () {
    ("use strict");
    // script
});

$(document).ready(function () {

    AOS.init({
        // duration: 1000,
        // once: true,
        // offset: 0,
    });

    // ---------- TEST ----------

    // console.log( "ready!" );
    // swal("Hello world!");

    // ---------- END TEST ------

    // Initialize LazyLoad
    var lazyLoadInstance = new LazyLoad({
        // Your custom settings go here
    });

    // Initialize SELECT2
    $('.select-control').select2({
        minimumResultsForSearch: -1,
        placeholder: function () {
            $(this).data('placeholder');
        }
    });

    // Initialize Fancybox
    Fancybox.bind('[data-fancybox="gallery"]', {
        // Your custom options
    });

    // const gallerySwiper = new Swiper('.gallerySwiper', {
    //     // Optional parameters
    //     watchSlidesProgress: true,
    //     slidesPerView: 5,
    //     spaceBetween: 30,
    //     // loop: true,
    //     navigation: {
    //         nextEl: ".swiper-button-next",
    //         prevEl: ".swiper-button-prev",
    //     },
    //     pagination: {
    //         el: '.swiper-pagination',
    //         dynamicBullets: true,
    //         clickable: true
    //     },
    //     breakpoints: {
    //         0: {
    //             slidesPerView: 3,
    //             spaceBetween: 15,
    //         },
    //         991: {
    //             slidesPerView: 4,
    //             spaceBetween: 20,
    //         },
    //         1199: {
    //             slidesPerView: 5,
    //             spaceBetween: 30,
    //         }
    //     }
    // });

    // const attachSwiper = new Swiper('.attachSwiper', {
    //     // Optional parameters
    //     spaceBetween: 40,
    //     // loop: true,
    //     slidesPerView: 2,
    //     navigation: {
    //         nextEl: ".swiper-button-next",
    //         prevEl: ".swiper-button-prev",
    //     },
    //     pagination: {
    //         el: '.swiper-pagination',
    //         // dynamicBullets: true,
    //         clickable: true
    //     },
    // });

    // var relateSwiper = new Swiper(".relateSwiper", {        
    //     watchSlidesProgress: true,
    //     slidesPerView: 4,
    //     spaceBetween: 30,
    //     // centeredSlides: true,
    //     navigation: {
    //         nextEl: ".swiper-button-next",
    //         prevEl: ".swiper-button-prev",
    //     },
    //     pagination: {
    //         el: '.swiper-pagination',
    //         // dynamicBullets: true,
    //         clickable: true wgOurPersonnel
    //     },
    // });

    var wgOurPersonnel = new Swiper('.wg-our-personnel .swiper', {
        loop: false,
        lazy: true,
        slidesPerView: 3,
        spaceBetween: 25,
        // If we need pagination
        pagination: {
            el: '.wg-our-personnel .swiper-pagination',
            clickable: true
        },
        breakpoints: {
            0: {
                slidesPerView: 1,
                spaceBetween: 15,
            },
            767: {
                slidesPerView: 2,
                spaceBetween: 15,
            },
            991: {
                slidesPerView: 3,
                spaceBetween: 15,
            },
            1199: {
                slidesPerView: 3,
                spaceBetween: 25,
            }
        }
    });

    $('.dropdown-submenu a.test').on("click", function (e) {
        $(this).next('ul').toggle();
        e.stopPropagation();
        e.preventDefault();
    });



    $('.panel-topic').on('click', function () {
        if ($(this).hasClass('active')) {
            $(this).siblings('.panel-collapse').slideUp();
            $(this).removeClass('active');
        } else {
            $('.panel-collapse').slideUp();
            $('.panel-topic').removeClass('active');
            $(this).siblings('.panel-collapse').slideToggle();
            $(this).toggleClass('active');
        }
    })

    // burger menu
    $(".menu-mobile-btn .btn-mobile").click(function () {
        $(this).toggleClass("close");

    });


    // $("body").scrollspy({ target: ".layout-header", offset: 120 });

    // $(".navbar ul li a[href^='#']").on('click', function (e) {

    //     // prevent default anchor click behavior
    //     e.preventDefault();
    //     // store hash
    //     var hash = this.hash;
    //     // animate
    //     $('html, body').delay(0).animate({
    //         scrollTop: $(hash).offset().top - 100

    //     }, 500 * 2);

    // });


    var heroBanner = new Swiper('.hero-banner .swiper', {
        loop: false,
        lazy: true,
        slidesPerView: 1,
        // spaceBetween: 25,
        // If we need pagination
        pagination: {
            el: '.hero-banner .swiper-pagination',
            clickable: true
        },
        // breakpoints: {
        //     0: {
        //         slidesPerView: 1,
        //         spaceBetween: 15,
        //     },
        //     767: {
        //         slidesPerView: 2,
        //         spaceBetween: 15,
        //     },
        //     991: {
        //         slidesPerView: 3,
        //         spaceBetween: 15,
        //     },
        //     1199: {
        //         slidesPerView: 3,
        //         spaceBetween: 25,
        //     }
        // }
    });

    var gallerySwiper = new Swiper(".gallery-swiper-", {
        slidesPerView: 4,
        spaceBetween: 10,
        freeMode: true,
        watchSlidesProgress: true,
        // breakpoints: {
        //     0: {
        //         slidesPerView: 3,
        //         spaceBetween: 7,
        //     },
        //     576: {
        //         slidesPerView: 4,
        //         spaceBetween: 10,
        //     },
        //     1199: {
        //         slidesPerView: 6,
        //         spaceBetween: 10,
        //     },
        // },
        navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
        },
    });

    var gallerySwiper2 = new Swiper(".gallery-swiper-2", {
        spaceBetween: 0,
        navigation: {
            nextEl: ".gallery-slide .swiper-button-next",
            prevEl: ".gallery-slide .swiper-button-prev",
        },
        thumbs: {
            swiper: gallerySwiper,
        },
    });


    var swiper = new Swiper(".wg-tc .card-left .swiper", {
        direction: "vertical",
        slidesPerView: "auto",
        freeMode: true,
        scrollbar: {
            el: ".swiper-scrollbar",
        },
        navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
        },
        mousewheel: true,
    });

    var swiperTc2 = new Swiper(".wg-tc .card-right .swiper", {
        loop: false,
        lazy: true,
        slidesPerView: 1,
        // spaceBetween: 25,
        // If we need pagination
        pagination: {
            el: '.wg-tc .card-right .swiper-pagination',
            clickable: true
        },
    });

    var swiperRule = new Swiper(".wg-rule .swiper", {
        loop: false,
        lazy: true,
        slidesPerView: 4,
        spaceBetween: 20
        // If we need pagination
        // pagination: {
        //     el: '.wg-tc .card-right .swiper-pagination',
        //     clickable: true
        // },
    });
    var swiperProject = new Swiper(".wg-project .swiper", {
        loop: false,
        lazy: true,
        slidesPerView: 5,
        spaceBetween: 15,
        // If we need pagination
        pagination: {
            el: '.wg-project .swiper-pagination',
            clickable: true
        },
    });

    var swiperProject = new Swiper(".wg-relation .swiper", {
        loop: false,
        lazy: true,
        slidesPerView: 1,
        spaceBetween: 20,
        // If we need pagination
        pagination: {
            el: '.wg-relation .swiper-pagination',
            clickable: true
        },
    });

    var swiperEvent = new Swiper(".wg-events .swiper", {
        loop: false,
        lazy: true,
        slidesPerView: 2,
        spaceBetween: 20,
        // If we need pagination
        // pagination: {
        //     el: '.wg-relation .swiper-pagination',
        //     clickable: true
        // },
    });

    var swiperTv = new Swiper(".wg-tv .swiper", {
        loop: true,
        lazy: true,
        slidesPerView: 1,
        spaceBetween: 20,
        effect: 'cards',
        grabCursor: true,
        centerdSlides: true,
        // If we need pagination
        pagination: {
            el: '.wg-tv .swiper-pagination',
            clickable: true
        },
    });

    var swiperPublic = new Swiper(".wg-public .swiper", {
        loop: false,
        lazy: true,
        slidesPerView: 6,   
        spaceBetween: 15,
        // If we need pagination
        pagination: {
            el: '.wg-public .swiper-pagination',
            clickable: true
        },
    });
});

