function toggleMenu() {
    const menu = document.getElementById('mobileMenu');
    menu.classList.toggle('open');
}

window.addEventListener('resize', function () {
    if (window.innerWidth > 950) {
        const menu = document.getElementById('mobileMenu');
        menu.classList.remove('open');
    }
});