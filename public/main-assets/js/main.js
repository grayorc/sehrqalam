
let swiper = new Swiper("#swiper-first", {
  loop: true,
  // slidesPerView: 4,
  spaceBetween: 0,
  breakpoints: {
    // when window width is >= 320px
    0: {
      slidesPerView: 1,
      spaceBetween: 0,
    },
    320: {
      slidesPerView: 1,
      spaceBetween: 10,
    },
    // when window width is >= 480px
    425: {
      slidesPerView: 2,
      spaceBetween: 10,
    },
    // when window width is >= 640px
    640: {
      slidesPerView: 3,
      spaceBetween: 20,
    },
    768: {
      slidesPerView: 4,
      spaceBetween: 50,
    },
  },
  // // If we need pagination
  // pagination: {
  //   el: ".swiper-pagination",
  // },

  // // Navigation arrows
  // navigation: {
  //   nextEl: ".swiper-button-next",
  //   prevEl: ".swiper-button-prev",
  // },
});

// first swiper styles go here
// let card= document.querySelector('.card-contaiener');
// let cardText1= document.querySelector('.cover')
// let cardText2= document.querySelector('.cover-text')
// card.addEventListener('mouseover',()=>{
//     cardText1.classList.add('hover-color')
//     cardText2.classList.add('hover-color')
//   })


const swiper2 = new Swiper("#swiper-second", {
  slidesPerView: 5,
  // spaceBetween: 10,
  loop:true,
  // Responsive breakpoints
  breakpoints: {

    0: {
      slidesPerView: 1,
      // spaceBetween: 100,
    },
    // when window width is >= 320px
    300: {
      slidesPerView: 1,
      // spaceBetween: 100,
    },
    // when window width is >= 480px
    480: {
      slidesPerView: 2,
      // spaceBetween: 150,
    },
    // when window width is >= 640px
    640: {
      slidesPerView: 3,
      // spaceBetween: 40,
    },
    768: {
      slidesPerView: 3,
      // spaceBetween: 40,
    },
    1024: {
      slidesPerView: 5,
      // spaceBetween: 40,
    },
  },
  pagination: {
    el: ".swiper-pagination",
  },

  navigation: {
    nextEl: ".swiper-button-next",
    prevEl: ".swiper-button-prev",
  },
});

// blog-swiper
const swiper3 = new Swiper(".swiper4", {
  loop: true,
  breakpoints: {
    320: {
      slidesPerView: 1,
      spaceBetween: 50,
    },
    425: {
      slidesPerView: 2,
      spaceBetween: 50,
    },
  },
});
// offcanvas menu
let bars = document.querySelector(".bars-parent .bars");
let offcanvass = document.querySelector(".offcanvas");
let offBars = document.querySelector(".off-container .bars");
let offSupplemet = document.querySelector(".off-supplemet");
offBars.addEventListener("click", closeMenu);
bars.addEventListener("click", openMenu);
offSupplemet.addEventListener("click", closeMenu);
function openMenu() {
  offSupplemet.style.display = "flex";
  offcanvass.classList.toggle("show");
  offSupplemet.classList.toggle("supplemet-color");
}
function closeMenu() {
  offSupplemet.style.display = "none";
  offcanvass.classList.toggle("show");
  offSupplemet.classList.toggle("supplemet-color");
}
