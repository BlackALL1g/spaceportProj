


// var swiper = new Swiper(".container-main", {

//     slidesPerView: 3,
//     spaceBetween: 140,
//     loop: true,
//     grabCursor: true,
//     // mousewheel: true,
    
//     autoplay: {
//         delay: 4500,
//         disableOnInteraction: false,
//     },
//     pagination: {
//         el: ".swiper-pagination",
//         clickable: true,
//     },
//     breakpoints: {
//         450:{
//             slidesPerView:1,
//         },
//         1183:{
//             slidesPerView: 2,
//         },
//         1680:{
//             slidesPerView: 3
//         },
//     }
// });

var swiper = new Swiper(".team-slider", {
    loop:true,
    spaceBetween:40,
    grabCursor:true,

    autoplay: {
        delay: 3500,
        disableOnInteraction: false,
    },
    
    pagination: {
      el: ".swiper-pagination",
      clickable:true,
    //   renderBullet: function (index, className) {
    //     return '<span class="' + className + '">' + (index + 1) + "</span>";
    //   },
    },
    breakpoints: {
      450: {
        slidesPerView: 1,
      },
      768: {
        slidesPerView: 2,
      },
      1000: {
        slidesPerView: 3,
      },
    },
  });

