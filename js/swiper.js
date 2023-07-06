

let menu = document.querySelector('#menu-btn')
let navbar = document.querySelector('.header .navbar')

menu.onclick = () => {
    menu.classList.toggle('fa-times')
    navbar.classList.toggle('active')
};

window.onscroll = () => {
    menu.classList.remove('fa-times')
    navbar.classList.remove('active')
};



var swiper = new Swiper(".team-slider", {
    loop:true,
    spaceBetween:40,
    grabCursor:true,
    // effect:"coverflow",

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
      0: {
        slidesPerView: 1,
      },
      550: {
        slidesPerView: 2,
      },
      1025: {
        slidesPerView: 3,
      },
    },
  });

