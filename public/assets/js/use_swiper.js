/*=============== HOME SWIPER ===============*/ 
let swiper = new Swiper(".explore__swiper", { loop: true, spaceBetween: 32,
  grabCursor: true,
  effect: "creative",
  creativeEffect: {
    prev: {
      translate: [-100, 0, -500],
      opacity: 0,
    },
    next: {
      translate: [-100, 0, -500],
      opacity: 0,
    },
  },
  // slidesPerView: 'auto',
  // centeredSlides: 'auto',
  autoplay: {
    delay: 5000,
    disableOnInteraction: false,
  },

  // breakpoints: {
  //   1220: {
  //     spaceBetween: -32,
  //   }
  // },

  pagination: {
    el: ".swiper-pagination",
    clickable: true,
  },
});

document.addEventListener("DOMContentLoaded", () => {});


// SWIPER JS GALLERY
let swiperGalleryCards = new Swiper(".gallery__cards", {
    loop: true,
    loopedSlides: 5,
    cssMode: true,
    effect: 'fade',
})
let swiperGalleryThumbs = new Swiper(".gallery__thumbs", {
  loop: true,
  loopedSlides: 5,
  slidesPerView: 3,
  centeredSlides: true,
  slideToClickedSlide: true,

  navigation: {
    nextEl: ".swiper-button-next",
    prevEl: ".swiper-button-prev",
  }
});

swiperGalleryThumbs.controller.control = swiperGalleryCards;

// SWIPER TESTIMONIOS
let swiperTestimonial = new Swiper(".body", {
  autoHeight: true,
  loop: true,
  autoplay: {
    delay: 4500,
    disableOnInteraction: false,
  },  
  pagination: {
    el: ".swiper-pagination",
  }
});


