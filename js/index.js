


var swiper = new Swiper(".container-main", {

    slidesPerView: 3,
    spaceBetween: 140,
    loop: true,
    grabCursor: true,
    // mousewheel: true,
    // effect: "fade",

    autoplay: {
        delay: 4500,
        disableOnInteraction: false,
    },
    pagination: {
        el: ".swiper-pagination",
        clickable: true,
    },
    breakpoints: {
        450:{
            slidesPerView: 1,
        },
        768:{
           slidesPerView: 2, 
        },
        1024:{
            slidesPerView: 3,    
        },
    }
});

    // navigation: {
    //     nextEl: ".swiper-button-next",
    //     prevEl: ".swiper-button-prev",
    //   },