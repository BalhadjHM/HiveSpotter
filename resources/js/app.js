import './bootstrap';

// Js for component navbar.blade.php
document.addEventListener('DOMContentLoaded', () => {
    // burger menu
    const burger = document.querySelector('#burger');
    const menu = document.querySelector('#burger-menu');

    // close menu
    burger.addEventListener('click', () => {
        menu.classList.toggle('top-[-100%]');
        menu.classList.toggle('top-0');
    });
});




