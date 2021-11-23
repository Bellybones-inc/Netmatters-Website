// Slick
$(document).ready(function(){
      $('.slide-inner').slick({
        variableWidth: true,
        infinite: true,
        slidesToShow: 1,
        slidesToScroll: 1,
        dots: true,
        autoplay: true,
        speed: 3000,
      });
    });

const sidebar = document.getElementById("sidebar");
const hamburger = document.getElementById("hamburger");
const bars = document.querySelector(".fas");
const main = document.querySelector(".main");
const header = document.getElementById("top_header");
const inner = document.querySelector(".main-inner");
const outer = document.querySelector(".main-outer");
const body = document.getElementsByTagName('body')[0];

// Burger bars
const barTop = document.querySelector(".top");
const barMiddle = document.querySelector(".middle");
const barBottom = document.querySelector(".bottom");

hamburger.addEventListener('click', () => {
  outer.classList.toggle('hidden');
  barTop.classList.toggle('ro');
  barMiddle.classList.toggle('tate');
  barBottom.classList.toggle('out');
  sidebar.classList.toggle('is-active');
  main.classList.toggle('shift');
  inner.classList.toggle('over');
  body.classList.toggle('nav_active');
})

  sidebar.addEventListener('click', () => {
  outer.classList.remove('hidden');
  bars.classList.remove('in-use');
  sidebar.classList.remove('is-active');
  main.classList.remove('shift');
  inner.classList.remove('over');
  barTop.classList.remove('ro');
  barMiddle.classList.remove('tate');
  barBottom.classList.remove('out');
})
