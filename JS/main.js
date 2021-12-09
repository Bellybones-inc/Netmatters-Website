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
        mobileFirst: true,
        pauseOnFocus: false,
        pauseOnHover: false,
        waitForAnimate: false,
      });
    });

// slide-out menu variables
const sidebar = document.getElementById("sidebar");
const hamburger = document.getElementById("hamburger");
const main = document.querySelector(".main");
const header = document.getElementById("top_header");
const inner = document.querySelector(".main-inner");
const outer = document.querySelector(".main-outer");
const body = document.getElementsByTagName('body')[0];
const pageParent = document.querySelector(".page-parent");

// Burger bars
const barTop = document.querySelector(".top");
const barMiddle = document.querySelector(".middle");
const barBottom = document.querySelector(".bottom");

// Show side-menu, move page and add overlay
hamburger.addEventListener("click", () => {
  outer.classList.toggle('hidden');
  barTop.classList.toggle('ro');
  barMiddle.classList.toggle('tate');
  barBottom.classList.toggle('out');
  sidebar.classList.toggle('is-active');
  main.classList.toggle('shift');
  inner.classList.toggle('over');
  pageParent.classList.toggle('layer');
})

// Removes side-menu and returns page to default
pageParent.addEventListener("click", () => {
  if(inner.classList.toggle('over')) {
  outer.classList.remove('hidden');
  barTop.classList.remove('ro');
  barMiddle.classList.remove('tate');
  barBottom.classList.remove('out');
  sidebar.classList.remove('is-active');
  main.classList.remove('shift');
  inner.classList.remove('over');
  pageParent.classList.remove('layer');
  }
})

const cookieSection = document.getElementById("cookie-consent");
const acceptBtn = document.getElementById("accept");
const disableScroll = document.querySelector(".main");

acceptBtn.addEventListener("click", () => {
  localStorage.setItem('true', 'fine');
  cookieSection.style.display = "none";
  disableScroll.classList.remove('scroll_stop');
})

document.addEventListener('DOMContentLoaded', function(event) {
  if ("true" in localStorage) {
    cookieSection.style.display = "none";
    disableScroll.classList.remove('scroll_stop');
  } else {
    disableScroll.classList.add('scroll_stop');
  }
});

const headerTop = document.querySelector(".top_header");
const slideContainer = document.querySelector(".slide_container");
let lastScroll = 0;

window.addEventListener('scroll', () => {

  const currentScroll = window.pageYOffset

// If the page is at the top
  if(currentScroll <= 0) {
    headerTop.classList.remove("scroll-up")
    slideContainer.style.marginTop = "0px";
  }

  // This is causing the scroll-down to be added/ menu disappear
  if (currentScroll > 1200 && !headerTop.classList.contains("scroll-down")) {
    headerTop.classList.remove('scroll-up')
    headerTop.classList.add('scroll-down')
  }

  if (currentScroll < lastScroll && headerTop.classList.contains("scroll-down")) {
    headerTop.classList.remove('scroll-down')
    headerTop.classList.add('scroll-up')
    slideContainer.style.marginTop = "208px";
  }

  lastScroll = currentScroll;
})
