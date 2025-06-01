// Navbar scroll effect
window.addEventListener('scroll', function () {
    const navbar = document.querySelector('nav');
    const logo = document.querySelector('.logo-svg');
    if (window.scrollY > 50) {
        navbar.classList.add('py-2', 'shadow-lg');
        navbar.classList.remove('py-4');
        logo.classList.add('w-10', 'h-10');
        logo.classList.remove('w-12', 'h-12');
    } else {
        navbar.classList.remove('py-2', 'shadow-lg');
        navbar.classList.add('py-4');
        logo.classList.remove('w-10', 'h-10');
        logo.classList.add('w-12', 'h-12');
    }
});

// Mobile menu toggle (simplified for demo)
const navbarToggler = document.querySelector('.navbar-toggler');
navbarToggler.addEventListener('click', () => {
    const navbarNav = document.querySelector('#navbarNav');
    navbarNav.classList.toggle('hidden');
});

// Animate on scroll
function animateOnScroll() {
    const elements = document.querySelectorAll('.animate-on-scroll');
    elements.forEach(element => {
        const elementPosition = element.getBoundingClientRect().top;
        const screenPosition = window.innerHeight / 1.3;

        if (elementPosition < screenPosition) {
            element.classList.add('animated');
        }
    });
}

window.addEventListener('scroll', animateOnScroll);
window.addEventListener('load', animateOnScroll);

// Smooth scrolling for anchor links
document.querySelectorAll('a[href^="#"]').forEach(anchor => {
    anchor.addEventListener('click', function (e) {
        e.preventDefault();

        const targetId = this.getAttribute('href');
        const targetElement = document.querySelector(targetId);

        if (targetElement) {
            window.scrollTo({
                top: targetElement.offsetTop - 80,
                behavior: 'smooth'
            });
        }
    });
});

// Modal Functions
function openModal(modalId) {
    const modal = document.getElementById(modalId);
    modal.classList.remove('modal-hidden');
    document.body.style.overflow = 'hidden';
}

function closeModal(modalId) {
    const modal = document.getElementById(modalId);
    modal.classList.add('modal-hidden');
    document.body.style.overflow = 'auto';
}

// Close modal when clicking outside content
document.querySelectorAll('.modal').forEach(modal => {
    modal.addEventListener('click', function (e) {
        if (e.target === this) {
            this.classList.add('modal-hidden');
            document.body.style.overflow = 'auto';
        }
    });
});

// Close modal with Escape key
document.addEventListener('keydown', function (e) {
    if (e.key === 'Escape') {
        document.querySelectorAll('.modal').forEach(modal => {
            modal.classList.add('modal-hidden');
            document.body.style.overflow = 'auto';
        });
    }
});