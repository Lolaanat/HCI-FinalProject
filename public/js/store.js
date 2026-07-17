document.addEventListener("DOMContentLoaded", () => {
    const cards = document.querySelectorAll(".ecom-card");

    cards.forEach((c, i) => {
        c.style.opacity = "0";
        c.style.transform = "translateY(20px)";
        setTimeout(() => {
            c.style.transition = "0.5s ease";
            c.style.opacity = "10";
            c.style.transform = "translateY(0)";
        }, i * 150);
    });
});