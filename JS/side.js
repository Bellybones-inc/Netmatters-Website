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
