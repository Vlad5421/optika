const slider = document.querySelector('.swiper-container');
const slider1 = document.querySelector('.swiper-container1');
const slider2 = document.querySelector('.swiper-container2');

if (document.documentElement.clientWidth > 420) {
    let mySwiper = new Swiper(slider, {
        slidesPerView: 4,
        spaceBetween: 10,
        /*loop: true,*/
        pagination: {
            el: '.pag-1',
            clickable: true,
        },
        navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
        },
    });

    let mySwiper1 = new Swiper(slider1, {
        slidesPerView: 4,
        spaceBetween:25,
        /*loop: true,*/
        pagination: {
            el: '.pag-2',
            clickable: true,
        },
        navigation: {
            nextEl: '.swiper-button-next1',
            prevEl: '.swiper-button-prev1',
        },
    });

    let mySwiper2 = new Swiper(slider2, {
        slidesPerView: 1,
        spaceBetween:10,
        /*loop: true,*/
        pagination: {
            el: '.pag-3',
            clickable: true,
        },
        navigation: {
            nextEl: '.swiper-button-next2',
            prevEl: '.swiper-button-prev2',
        },
    });
}
if (document.documentElement.clientWidth < 420) {
    let mySwiper = new Swiper(slider, {
        slidesPerView: 3,
        spaceBetween: 10,
        /*loop: true,*/
        pagination: {
            el: '.pag-1',
            clickable: true,
        },
        navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
        },
    });
    
    let mySwiper1 = new Swiper(slider1, {
        slidesPerView: 2,
        spaceBetween:10,
        /*loop: true,*/
        pagination: {
            el: '.pag-2',
            clickable: true,
        },
        navigation: {
            nextEl: '.swiper-button-next1',
            prevEl: '.swiper-button-prev1',
        },
    });
    
    let mySwiper2 = new Swiper(slider2, {
        slidesPerView: 1,
        spaceBetween:10,
        /*loop: true,*/
        pagination: {
            el: '.pag-3',
            clickable: true,
        },
        navigation: {
            nextEl: '.swiper-button-next2',
            prevEl: '.swiper-button-prev2',
        },
    });
}

