const mainSwiper = new Swiper('.l-award__swiper', {
    // Optional parameters
    loop: true,
    loopedSlides: 8,
    slidesPerView: 'auto',
    // spaceBetween: 50,
    watchSlidesVisibility: true,
    breakpoints: {
        1380: {
            slidesPerView: 3.5
        },
        1080: {
            slidesPerView: 3
        },
        970: {
            slidesPerView: 2.5
        },
        831: {
            slidesPerView: 2
        },
        421: {
            slidesPerView: 1.25
        }
    },
    slidesPerGroup: 1,
    centeredSlides : true,
    // effect: 'slide',

    // speed: 1000,
    autoplay: {
        delay: 4000,
        disableOnInteraction: false,
    },

    // If we need pagination
    pagination: {
        el: '.swiper-pagination',
        type: 'bullets',
    },

    // Navigation arrows
    navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
    },

});