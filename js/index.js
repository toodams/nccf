let menuButton = document.querySelector('.navbar__mobile__menu');
let navItems = document.querySelector('.navbar__nav');
let navBar = document.querySelector('.navbar');
let barHide = document.querySelector('.navbar__mobile__menu__bar:nth-child(1)');
let barLeft = document.querySelector('.navbar__mobile__menu__bar:nth-child(2)');
let barRight = document.querySelector('.navbar__mobile__menu__bar:nth-child(3)');

menuButton.onclick = openMenu;

function openMenu() {
  navItems.classList.toggle('navbar__nav__toggle');
  barHide.classList.toggle('navbar__mobile__menu__bar__hide');
  barLeft.classList.toggle('navbar__mobile__menu__bar__cross');
  barRight.classList.toggle('navbar__mobile__menu__bar__across');

  let nav = document.querySelector('.navbar__nav__toggle');

  if (nav) {
    navBar.style.height = '100vh';
    navBar.style.overflow = 'hidden';
  } else {
    navBar.style.height = 'auto';
  }
}

const swiperHeader = new Swiper('.header-carousel', {
  loop: true,
  autoplay: {
    delay: 60000,
  },
  slidesPerView: 1,
  spaceBetween: 0,
});

const swiperSpeech = new Swiper('.speech-carousel', {
  loop: true,
  autoplay: {
    delay: 30000,
  },
  slidesPerView: 1,
  spaceBetween: 0,
});

const swiperEvents = new Swiper('.theme__image', {
  loop: true,
  autoplay: {
    delay: 7200,
  },
  slidesPerView: 1,
  spaceBetween: 0,
});

var modal = document.getElementById('myModal');
var span = document.getElementsByClassName('modal__close')[0];
var btn = document.getElementsByClassName('modal__close')[1];

span.onclick = function () {
  modal.style.display = 'none';
};

btn.onclick = function () {
  modal.style.display = 'none';
};

window.onclick = function (event) {
  if (event.target == modal) {
    modal.style.display = 'none';
  }
};

window.addEventListener('load', function () {
  modal.style.display = 'flex';
});
