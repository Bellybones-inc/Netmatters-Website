

const headerTop = document.querySelector(".top_header");
const slideContainer = document.querySelector(".after_header");
const classNames = ['scroll-down', 'slide_container'];
let lastScroll = 0;

window.addEventListener('scroll', () => {
  const currentScroll = window.pageYOffset

  // If the page is at the top
    if(currentScroll <= 0) {
      headerTop.classList.remove("scroll-up");
      slideContainer.style.marginTop = "0px";
    }
    // This causes the scroll-down to be added/ menu disappear
    if (currentScroll > 350 && !headerTop.classList.contains('scroll-down')) {
      headerTop.classList.remove('scroll-up');
      headerTop.classList.add('scroll-down');
    }
  if (currentScroll < lastScroll && headerTop.classList.contains('scroll-down')) {
    headerTop.classList.remove('scroll-down');
    headerTop.classList.add('scroll-up');
    slideContainer.style.marginTop = "208px";
  } {
  lastScroll = currentScroll;


  }
})
