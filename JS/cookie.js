
const cookieSection = document.getElementById("cookie-consent");
const acceptBtn = document.getElementById("accept");

window.onload = () => {
  cookieSection.style.display = "flex";
};

acceptBtn.addEventListener('click', () => {
  cookieSection.style.display = "none";

})
