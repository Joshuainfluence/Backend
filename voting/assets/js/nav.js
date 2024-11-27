const navToggle = document.querySelector('.hamburger');
const tabs = document.querySelector('.hide')
navToggle.addEventListener('click', () => {
    navToggle.classList.toggle('open')
    tabs.classList.toggle('visible')
    tabs.classList.toggle('hide')

})