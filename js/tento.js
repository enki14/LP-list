
// const swiperSlides = document.getElementsByClassName('l-header');
// const pagination = document.getElementById('h_pagination')
// const breakpoint = 390;
// let headerSwiper;

// window.addEventListener('load', () =>{
//     setTimeout(() => {
//         if(breakpoint < window.innerWidth){
//             createSwiper();
//         }else if(breakpoint >= window.innerWidth){
//             headerSwiper.autoplay.stop();
//             pagination.style.display = "none";
//             headerSwiper.params.direction = "vertical";
//             headerSwiper = undefined;

//         }
//     }, 1000);
// });

// window.addEventListener('resize', () =>{
//     if(breakpoint < window.innerWidth && !headerSwiper){
//         createSwiper();
//     }else if(breakpoint >= window.innerWidth && headerSwiper){
//         headerSwiper.autoplay.stop();
//         pagination.style.display = "none";
//         headerSwiper.params.direction = 'vertical';
//         headerSwiper = undefined;
//     }
// });

// const createSwiper = () => {
//     headerSwiper = new Swiper('.swiper-container', {
//         loop: true,
//         loopedSlides: swiperSlides.length,
//         slidesPerView: 1,
//         slidesPerGroup: 1,
//         centeredSlides : true,
//         effect: 'fade',
//         initialSlide: 0,
    
//         // 前後の画像が被らないようにする
//         fadeEffect: {
//             crossFade: true
//         },
    
//         // If we need pagination
//         pagination: {
//             el: '.swiper-pagination',
//             type: 'bullets',
//             clickable: true,
//         },
    
//         autoplay: {
//             delay: 5000,
//         },
//         breakpoints:{
//             390: {
//                 slidesPerView: swiperSlides.length
//             }
//         }
    
//     });   
    
// }

headerSwiper = new Swiper('.swiper-container', {
    loop: true,
    loopedSlides: 4,
    slidesPerView: 1,
    slidesPerGroup: 1,
    loopedSlides: 4,
    centeredSlides : true,
    effect: 'fade',

    // 前後の画像が被らないようにする
    fadeEffect: {
        crossFade: true
    },
    // If we need pagination
    pagination: {
        el: '.swiper-pagination',
        type: 'bullets',
    },
    autoplay: {
        delay: 10000,
    },

});   



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
        1000: {
            slidesPerView: 3
        },
        767: {
            slidesPerView: 2,
        },
        390: {
            slidesPerView: 'auto'
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



// .l-detail__contentをふわっと表示
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

// .l-apply__procedureをふわっと表示
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

// .l-lineup__slideをふわっと表示
const lineup_area = document.getElementsByClassName('l-lineup__slide');
for(let i = lineup_area.length; i--;){
    let observer = new IntersectionObserver((entries, observer) =>{
        if(entries[i].isIntersecting){
            entries[i].target.classList.add('active');
            observer.unobserve(entries[i].target);
        }
    });
    observer.observe(lineup_area[i]);
}

// .sectionContentをふわっと表示
let middleAria = document.querySelectorAll('.sectionContent');
let observe = new IntersectionObserver(callback);
middleAria.forEach(function(value){
    observe.observe(value);
});
function callback(entries){
    if(entries[0].isIntersecting){
        entries[0].target.classList.add('active');
        observe.unobserve(entries[0].target);
    }
}

// .p-eCardをふわっと表示
let eCard = document.querySelectorAll('.p-eCard');
let observe_e = new IntersectionObserver(callback);
eCard.forEach(function(value){
    observe_e.observe(value);
});
function callback(entries){
    if(entries[0].isIntersecting){
        entries[0].target.classList.add('active');
        observe_e.unobserve(entries[0].target);
    }
}

// ページ最上部へ移動ボタン
const backtop = document.querySelector('.c-backtop__circle');
backtop.addEventListener('click', scroll_to_top);

function scroll_to_top(){
    window.scroll({top:0, behavior: 'smooth'});
}


  

// html構造が複雑だったため、javascriptで処理しようとしたがまだ解決できていない
// const toggle = document.getElementById('navToggle');
// const h_pagi = document.getElementById('h_pagination');
// const sp_array = Array.from(h_pagi.children);
// console.log(sp_array);

// toggle.addEventListener('click', () => {
//     if(toggle.checked){
//         console.log(true);
    
//         sp_array.forEach((elem, index) => {
//             elem.style.zIndex = sp_array.length - index;
//         });
//     }else{
//         console.log(false);
//         sp_array.forEach((elem, index) => {
//             elem.style.zIndex = index + 1;
//         })
//     }
// });



// document.getElementById('navArea').addEventListener('click', () => {
//     const navArea = document.getElementById('navArea');
//     navArea.classList.toggle('p-navArea');
// });
// document.addEventListener('click', (e) => {
//     if(!e.target.closest('div#navArea')){
//         const navArea = document.getElementById('navArea');
//         const burger = document.getElementById('burger').children;
//         const btn_burger = burger[0];

//         navArea.classList.add('p-navArea');
//         const before = getComputedStyle(btn_burger, "::before");
//         before.transform = 'rotate(0)';
//     }
// });



    // const burger = document.getElementById('burger');
    // const nav = document.querySelector('.menu-nazuca-menu-container');
    // const navArea = document.getElementById('navArea');
  
    // burger.addEventListener('click', function() {
    //   nav.classList.toggle('active');
    //   burger.classList.toggle('active');
    //   navArea.classList.toggle('active');
  
    //   // nav以外をタップした時
    //   if (burger.classList.contains('active')) {
    //     navArea.addEventListener('click', function handleClick() {
    //         burger.classList.remove('active');
    //         navArea.classList.remove('active');
    //         nav.classList.remove('active');
    //         nav.removeEventListener('click', handleClick);
    //     });
    //   }
    // });
