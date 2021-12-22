const cookieSection = document.getElementById("cookie-consent");
const acceptBtn = document.getElementById("accept");
const disableScroll = document.querySelector(".main");

acceptBtn.addEventListener("click", () => {
  localStorage.setItem('true', 'fine');
  cookieSection.style.display = "none";
  disableScroll.classList.remove('scroll_stop');
})

document.addEventListener("DOMContentLoaded", function(event) {
  if ("true" in localStorage) {
    disableScroll.classList.remove('scroll_stop');
  } else {
    disableScroll.classList.add('scroll_stop');
    cookieSection.style.display = "flex";
  }
});
