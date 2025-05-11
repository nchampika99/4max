// Mobile Menu
// const menuBtn = document.getElementById('menuBtn');
// const mobileMenu = document.getElementById('mobileMenu');

// menuBtn.addEventListener('click', () => {
    // mobileMenu.classList.toggle('hidden');
// });

// Initialize Animations
AOS.init({
    duration: 800,
    once: true,
    easing: 'ease-in-out-quad'
});

// Loading Screen
window.addEventListener('load', () => {
    const loader = document.querySelector('.loader');
    loader.style.opacity = '0';
    setTimeout(() => loader.remove(), 500);
});

// Form Validation
document.querySelectorAll('form').forEach(form => {
    form.addEventListener('submit', (e) => {
        let valid = true;
        form.querySelectorAll('[required]').forEach(input => {
            if (!input.value.trim()) {
                valid = false;
                input.classList.add('error');
            }
        });
        if (!valid) e.preventDefault();
    });
});


// Mobile menu toggle
const menuBtn = document.getElementById('menuBtn');
const mobileMenu = document.getElementById('mobileMenu');

if(menuBtn && mobileMenu) {
    menuBtn.addEventListener('click', () => {
        mobileMenu.classList.toggle('hidden');
        menuBtn.querySelector('i').classList.toggle('fa-bars');
        menuBtn.querySelector('i').classList.toggle('fa-times');
    });
}