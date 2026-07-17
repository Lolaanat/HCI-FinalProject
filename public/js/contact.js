function $(query){
    const elements = document.querySelectorAll(query);
    return elements.length == 1 ? elements[0] : elements;
}

const form = $("#contact-form");
const nameInput = $("#name-input");
const phoneInput = $("#phone-input");
const emailInput = $("#email-input");
const messageInput = $("#message-input");
const termsInput = $("#terms-input");

form.addEventListener("submit", (e) => {
    e.preventDefault();

    if (nameInput.value.trim().length === 0) {
        alert("Name cannot be empty!");
        return;
    }

    if (nameInput.value.trim().length < 8 || nameInput.value.trim().length > 24) {
        alert("Name must be between 8 and 24 characters");
        return;
    }

    if (phoneInput.value.length !== 12 || isNaN(phoneInput.value)) {
        alert("Phone number must be 12 digits and numeric");
        return;
    }

    if (!emailInput.value.includes("@") || !emailInput.value.includes(".")) {
        alert("Please use a valid email");
        return;
    }

    if (messageInput.value.trim().length === 0) {
        alert("Message cannot be empty");
        return;
    }

    if (!termsInput.checked) {
        alert("Please agree to the Terms & Conditions");
        return;
    }

    alert("Form submitted successfully!");
});

console.log(emailInput, typeof emailInput);
