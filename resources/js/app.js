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

document.addEventListener('DOMContentLoaded', () => {
    // Dropdown functionality
    const dropdowns = document.querySelectorAll('.drop-down');
    const dropdownMenus = document.querySelectorAll('.drop-menu');

    dropdowns.forEach((dropdown, index) => {
        dropdown.addEventListener('click', () => {
            dropdownMenus[index].classList.toggle('show');
        });
    });

    document.addEventListener('click', (e) => {
        dropdowns.forEach((dropdown, index) => {
            if (!dropdown.contains(e.target)) {
                dropdownMenus[index].classList.remove('show');
            }
        });
    });
});




