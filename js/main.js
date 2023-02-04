const mainSwiper = new Swiper('.l-award__swiper', {
    // Optional parameters
    loop: true,
    slidesPerView: 3,
    loopedSlides: 8,
    // spaceBetween: 50,
    breakpoints: {
        831: {
            slidesPerView: 1.5
        },
        421: {
            slidesPerView: 1.25
        }
    },
    slidesPerGroup: 1,
    centeredSlides : true,
    effect: 'slide',

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

    // And if we need scrollbar
    // scrollbar: {
    //     el: '.swiper-scrollbar',
    //     hide: true
    // },

});