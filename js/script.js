let menu = document.querySelector('#menu-btn');
let navbar = document.querySelector('.header .navbar');

menu.onclick = () =>{
    menu.classList.toggle('fa-times');
    navbar.classList.toggle('active');

    navbar.classList.toggle('d-none')
};

window.onscroll = () =>{
    menu.classList.remove('fa-times');
    navbar.classList.reomove('active');
};

var swiper = new Swiper(".home-slider", {
    loop:true,
    navigation: {
      nextEl: ".swiper-button-next",
      prevEl: ".swiper-button-prev",
    },
    
    autoplay: {
    delay: 4000, // 5000 milliseconds = 5 seconds
    disableOnInteraction: false, // Keep autoplay even after user clicks
  },

  });


  var swiper = new Swiper(".reviews-slider", {
    loop:true,
    navigation: {
      nextEl: ".swiper-button-next",
      prevEl: ".swiper-button-prev",
    },
    
    autoplay: {
    delay: 4000, // 5000 milliseconds = 5 seconds
    disableOnInteraction: false, // Keep autoplay even after user clicks
  },

  });



// var swiper = new swiper(".swiper reviews-slider",{
// loop:true,
// spaceBetween: 20,
// autoHeight:true,
// grabCursor:true,
// breakpoints: {
//   640: {
//     slidesPerView: 1,
//   },
//   768: {
//     slidePerView: 2,
    
//   },
//   1024: {
//     slidePerView: 3,
    
//   },
//   },
// });
