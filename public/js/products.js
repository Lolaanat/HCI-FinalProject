function $(q) {
    const el = document.querySelectorAll(q);
    return el.length === 1 ? el[0] : el;
}

const categorySelect = $("#category");
const productCards = document.querySelectorAll(".product-card");

const categories = [
    "Cinematography",     // Maverick
    "Beginner Friendly",     // AeroNova
    "Travel & Lightweight",  // HelixStorm
    "Cinematography",        // LuminAir
    "High-Performance"       // VortexEdge
];

productCards.forEach((card, i) => {
    card.setAttribute("data-category", categories[i]);
});

function filterProducts() {
    const selected = categorySelect.value;

    productCards.forEach(card => {
        const cat = card.getAttribute("data-category");

        if (selected === "all" || cat === selected) {
            card.style.display = "flex";
        } else {
            card.style.display = "none";
        }
    });
}

categorySelect.addEventListener("change", filterProducts);

filterProducts();