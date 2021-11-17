const body = document.body;
let lastScroll = 0;
const header = document.querySelector('header');

window.addEventListener('scroll', () => {
    const currentScroll = window.pageYOffset

    // if(currentScroll >= 0) {
    //   header.classList.remove("scroll-up")
    // }

    // This is causing the scroll-down to be added/ menu disappear
    // if (currentScroll >  500 && !body.classList.contains("scroll-down")) {
    //   header.classList.remove("scroll-up")
    //   header.classList.add("scroll-down")
    // }

    if (currentScroll < lastScroll && !body.classList.contains("scroll-down")) {
      header.classList.remove("scroll-down")
      header.classList.add("scroll-up")
    }

    lastScroll = currentScroll;
})
