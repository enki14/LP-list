
const lineUpSwiper = new Swiper('.l-lineup__slide', {
    // Optional parameters
    loop: true,
    loopedSlides: 10,
    spaceBetween: 28,
    watchSlidesVisibility: true,
    loopFillGroupWithBlank: true,
    breakpoints: {
        1380: {
            slidesPerView: 4.5
        },
        1250: {
            slidesPerView: 3.5
        },
        1100: {
            slidesPerView: 3
        },
        831: {
            slidesPerView: 2.5
        },
        650: {
            slidesPerView: 2
        }
    },
    slidesPerGroup: 1,
    centeredSlides : true,

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




const mainSwiper = new Swiper('.l-award__swiper', {
    // Optional parameters
    loop: true,
    loopedSlides: 8,
    watchSlidesVisibility: true,
    loopFillGroupWithBlank: true,
    breakpoints: {
        1380: {
            slidesPerView: 4.5
        },
        1250: {
            slidesPerView: 3.5
        },
        1100: {
            slidesPerView: 3
        },
        831: {
            slidesPerView: 2.5
        },
        650: {
            slidesPerView: 2
        }
    },
    slidesPerGroup: 1,
    centeredSlides : true,

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



