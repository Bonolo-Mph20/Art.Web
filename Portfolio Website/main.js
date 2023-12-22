let menu = document.querySelector('#menu-icon');
let navbar = document.querySelector('.navbar');
 
menu.onclick = () =>{
 
    menu.classList.toggle('fa-times');
    navbar.classList.toggle('active');
}
 
window.onscroll = () =>{
    menu.classList.remove('fa-times');
    navbar.classList.remove('active');
}


const scriptURL = 'https://script.google.com/macros/s/AKfycbzx2lpoA9y6bSdaEhC7E9V04PguQyjG882hNNVOXgRdZMzTdB4eHk5p9ZpOJwliehTjhw/exec'

const form = document.forms['contact-form']

form.addEventListener('submit', e => {
  e.preventDefault()
  fetch(scriptURL, { method: 'POST', body: new FormData(form)})
  .then(response => alert("Thank you! your form is submitted successfully." ))
  .then(() => { window.location.reload(); })
  .catch(error => console.error('Error!', error.message))
})
