window.addEventListener('load', () => {
    headerSwiper = new Swiper('.swiper-container', {
        loop: true,
        loopedSlides: 5,
        slidesPerView: 1,
        slidesPerGroup: 1,
        loopedSlides: 5,
        centeredSlides : true,
        effect: 'fade',
    
        // 前後の画像が被らないようにする
        fadeEffect: {
            crossFade: true
        },
        autoplay: {
            delay: 5000,
        },
    
    });   
});
