

const cookieSection = document.getElementById("cookie-consent");
const acceptBtn = document.getElementById("accept");
const page = document.querySelector(".main-outer");

 acceptBtn.onclick = () => {
   localStorage.setItem('true', 'fine');
  cookieSection.style.display = "none";
}

window.onload = () => {
  if("true" in localStorage){
    cookieSection.style.display = "none";
  }
}
