// Email validation

const errMessages = document.getElementById("error");
const submitBtn = document.getElementById("enquire");
const contactForm = document.getElementById("contact_form");


submitBtn.addEventListener('click', (e) => {

  if (errMessages.innerHTML !== "") {
    e.preventDefault()
  }

})
