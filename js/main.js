
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


const headerSwiper = new Swiper('.swiper-container', {
    loop: true,
    loopedSlides: 3,
    slidesPerView: 1,
    slidesPerGroup: 1,
    centeredSlides : true,
    effect: 'fade',
    initialSlide: 0,

    // 前後の画像が重ならないようにする
    fadeEffect: {
        crossFade: true
    },

    // If we need pagination
    pagination: {
        el: '.swiper-pagination',
        type: 'bullets',
    },

    autoplay: {
        delay: 5000,
    },

});

const detail_aria = document.getElementsByClassName('l-detail__content');
for(let i = detail_aria.length; i--;){
    let observer = new IntersectionObserver((entries, observer) =>{
        if(entries[i].isIntersecting){
            entries[i].target.classList.add('active');
            observer.unobserve(entries[i].target);
        }
    });
    observer.observe(detail_aria[i]);
}

const apply_aria = document.getElementsByClassName('l-apply__procedure');
for(let i = apply_aria.length; i--;){
    let observer = new IntersectionObserver((entries, observer) =>{
        if(entries[i].isIntersecting){
            entries[i].target.classList.add('active');
            observer.unobserve(entries[i].target);
        }
    });
    observer.observe(apply_aria[i]);
}

// const lineup_area = document.getElementsByClassName('l-lineup__slide');
// for(let i = lineup_area.length; i--;){
//     let observer = new IntersectionObserver((entries, observer) =>{
//         entries.forEach(entry => {
//             if(entry.target == lineup_area[i]){
//                 if(entry.isIntersecting){
//                     entry.target.classList.add('active');
//                     observer.unobserve(entry.target);
//                 }else{
//                     entry.target.classList.remove('active');
//                     entry.target.style.opacity = 0;
//                     entry.target.style.transform = 'translateY(30px)';
//                 }    
//             }
    
//         });
//     });
//     observer.observe(lineup_area[i]);
// }

const lineup_area = document.getElementsByClassName('l-lineup__slide');
let observer_l = new IntersectionObserver((entries, observer_l) =>{
    entries.forEach(entry => {
        if(entry.isIntersecting){
            entry.target.classList.add('active');
            observer_l.unobserve(entry.target);
        }else{
            entry.target.classList.remove('active');
            entry.target.style.opacity = 0;
            entry.target.style.transform = 'translateY(30px)';
        }
    });
});

for(let i = 0; i < lineup_area.length; i++){
    observer_l.observe(lineup_area[i]);
}


let middleAria = document.querySelectorAll('.sectionContent');
let observe = new IntersectionObserver(callback);
middleAria.forEach(function(value){
    observe.observe(value);
});
function callback(entries){
    if(entries[0].isIntersecting){
        entries[0].target.classList.add('active');
        observe.unobserve(entries[0].target);
    }else{
        entries[0].target.classList.remove('active');
    }
}

let eCard = document.querySelectorAll('.p-eCard');
let observe_e = new IntersectionObserver(callback);
eCard.forEach(function(value){
    observe_e.observe(value);
});
function callback(entries){
    if(entries[0].isIntersecting){
        entries[0].target.classList.add('active');
        observe_e.unobserve(entries[0].target);
    }else{
        entries[0].target.classList.remove('active');
    }
}


