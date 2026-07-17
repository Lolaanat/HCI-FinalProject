document.addEventListener("DOMContentLoaded", function () {

    const buttons = document.querySelectorAll(".category-btn");
    const cards = document.querySelectorAll(".forum-card");

    buttons.forEach(btn => {
        btn.addEventListener("click", () => {

            const filter = btn.getAttribute("data-filter");

            // active class
            buttons.forEach(b => b.classList.remove("active"));
            btn.classList.add("active");

            cards.forEach(card => {
                const categories = card.getAttribute("data-category").split(",").map(c => c.trim());

                if (filter === "all" || categories.includes(filter)) {
                    card.style.display = "flex";
                } else {
                    card.style.display = "none";
                }
            });
        });
    });

});