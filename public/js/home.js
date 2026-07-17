// Home Page Interactions

// Example: animate cards on scroll
window.addEventListener('scroll', () => {
    const elements = document.querySelectorAll('.product-card, .expertise-card, .award-card');

    elements.forEach(el => {
        const rect = el.getBoundingClientRect();
        if (rect.top < window.innerHeight - 100) {
            el.style.opacity = 1;
            el.style.transform = 'translateY(0)';
        }
    });
});
