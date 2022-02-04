// Accordion plugin
const revealArrow = document.getElementById("arrow");
const supportHeading = document.getElementById("support-heading");
const textReveal = document.getElementById("answer");
const questWrap = document.getElementById("question-wrapper");

revealArrow.addEventListener('click', () => {
  textReveal.style.display = "block";
  supportHeading.classList.toggle('active');
})

revealArrow.addEventListener('click', () => {
  if(supportHeading.classList.contains('active')) {
  textReveal.style.display = "none";
  supportHeading.classList.toggle('hide');
  }
})

supportHeading.addEventListener('click', () => {
  textReveal.style.display = "block";
  supportHeading.classList.toggle('active');
})

supportHeading.addEventListener('click', () => {
  if(supportHeading.classList.contains('active')) {
  textReveal.style.display = "none";
  supportHeading.classList.toggle('hide');
  }
})

// Email validation
const contactForm = document.getElementById("contact_form");
const name = document.getElementById("name");
const company = document.getElementById("company").required = false; 
const email = document.getElementById("email");
const phone = document.getElementById("phone");
const subject = document.getElementById("subject");
const message = document.getElementById("message");
const error = document.getElementById("error");

// messages accepts string
contactForm.addEventListener('submit', (e) => {
  let messages = []

  // If users have not entered a value for name.
  if (name.value === '' || name.value == null) {
    messages.push('Name is required')
    name.style.border = "1px red solid";
    // nameError.innerText = 'Name is required';
  } else {
    name.style.border = "1px solid #DCDCDC";
  }

  // If user has entered email/ else if, then compares value to regex format
  if (email.value === '' || email.value == null) {
    messages.push('Please enter an email address')
    email.style.border = "1px red solid";
    // emailError.innerText = 'Please enter an email address';
  } else {
    email.style.border = "1px solid #DCDCDC";
  }

  if (!isEmail(email.value)) {
    messages.push('Invalid email address')
    email.style.border = "1px red solid";
  } else {
    email.style.border = "1px solid #DCDCDC";
  }

  if (phone.value === '' || phone.value == null) {
    messages.push('Please enter a phone number')
    phone.style.border = "1px red solid";
  } else {
    phone.style.border = "1px solid #DCDCDC";
  }

  if (subject.value === '' || subject.value == null) {
    messages.push('Subject is required')
    subject.style.border = "1px red solid";
  } else {
    subject.style.border = "1px solid #DCDCDC";
  }

  if (message.value === '' || message.value == null) {
    messages.push('Please write a message')
    subject.style.border = "1px red solid";
  } else {
    subject.style.border = "1px solid #DCDCDC";
  }

  // If  message length  >  0, prevent submit & display messages in error div
  if (messages.length > 0) {
    e.preventDefault()
    error.innerText = messages.join(', ')
  } else {
    return true;
  }
  })

// Function tests variable against regex format
function isEmail(i) {
  return /^([a-z\.-]+)@([a-z\d-]+)\.([a-z]{2,8})(\.[a-z]{2,8})?$/.test(i);
}
