


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

const sidebar = document.querySelector(".sidebar");
const hamburger = document.getElementById("hamburger");
const bars = document.querySelector(".fas");
const main = document.querySelector(".main");
const header = document.getElementById("top_header");
const inner = document.querySelector(".main-inner");

hamburger.addEventListener('click', () => {
  bars.classList.toggle('in-use');
  sidebar.classList.toggle('is-active');
  main.classList.toggle('shift');
  inner.classList.toggle('over');
})

// body.document.style.transition('all 0.8s ease 0.8s');
