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

// Js for component back-to-top.blade.php
document.addEventListener('DOMContentLoaded', () => {
    // Back to Top functionality
    const backToTopButton = document.getElementById('back-to-top');

    window.addEventListener('scroll', () => {
        if (window.scrollY > 200) {
            backToTopButton.classList.remove('hidden');
        } else {
            backToTopButton.classList.add('hidden');
        }
    });

    backToTopButton.addEventListener('click', () => {
        window.scrollTo({
            top: 0,
            behavior: 'smooth'
        });
    });
});

// Js for component dropdown.blade.php
document.addEventListener('DOMContentLoaded', () => {
    // Dropdown functionality
    const dropdown = document.querySelector('#drop-down');
    const dropdownMenu = document.querySelector('#drop-menu');

    dropdown.addEventListener('click', () => {
        dropdownMenu.classList.toggle('show');
    });

    document.addEventListener('click', (e) => {
        if (!dropdown.contains(e.target)) {
            dropdownMenu.classList.remove('show');
        }
    });
});





