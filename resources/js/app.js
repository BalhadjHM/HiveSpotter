import './bootstrap';


// burger menu
const burger = document.querySelector('#burger');
const menu = document.querySelector('#burger-menu');
const close = document.querySelector('#close');

burger.addEventListener('click', () => {
    menu.classList.toggle('top-[-100%]');
    menu.classList.toggle('top-0');
});




