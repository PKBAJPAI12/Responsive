hamburger=document.querySelector('.hamburger')
navbar=document.querySelector('.navbar')
navul=document.querySelector('.navul')
rightnav=document.querySelector('.rightnav')

hamburger.addEventListener('click', ()=>{
    rightnav.classList.toggle('v-hid');
    navul.classList.toggle('v-hid');
    navbar.classList.toggle('h-nav');
})