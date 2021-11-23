
let lastScroll = 0;
const headerTop = document.querySelector(".top_header");

window.addEventListener('scroll', () => {

  const currentScroll = window.pageYOffset

// If the page is at the top
  if(currentScroll <= 0) {
    headerTop.classList.remove("scroll-up")
  }

  // This is causing the scroll-down to be added/ menu disappear
  if (currentScroll > 1000 && !headerTop.classList.contains("scroll-down")) {
    headerTop.classList.remove('scroll-up')
    headerTop.classList.add('scroll-down')
  }

  // if (currentScroll < lastScroll && !headerTop.classList.contains("scroll-down")) {
  //   headerTop.classList.remove('scroll-down')
  //   headerTop.classList.add('scroll-up')
  // }

  lastScroll = currentScroll;
})

//
//
// if(currentScroll >= 0) {
//   header.classList.remove("scroll-up")
// }
//
// This is causing the scroll-down to be added/ menu disappear
// if (currentScroll >  500 && !body.classList.contains("scroll-down")) {
//   header.classList.remove("scroll-up")
//   header.classList.add("scroll-down")
// }
//
// if (currentScroll < lastScroll && !body.classList.contains("scroll-down")) {
//   header.classList.remove("scroll-down")
//   header.classList.add("scroll-up")
// }
//
// lastScroll = currentScroll;
