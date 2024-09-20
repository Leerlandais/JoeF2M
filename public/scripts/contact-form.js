const contactForm = document.getElementById("contactForm");
const formElements = contactForm.querySelectorAll("input, textarea"); // don't forget to add new input types if we need to add to the current formulaire
const submitButton = document.querySelector("input[type=submit]");
const formData = {};

formElements.forEach(element => {
    const key = element.id
    if (key) {
        formData[key] = element;
    element.addEventListener("input", validateForm);
    }
});

function isValidEmail(mail) {
    const email = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    /* reminder to self:
        / -> /  = here is Regex
        ^       = start of string
        []      = character set (\s = space)
        ^ in [] = must not contain
        +       = string must contain
        So, above test is 'string must not contain space or @ before the @ nor should it have space or @ before the . nor should it have space or @ after the .'
     */
    return email.test(mail);
}

function validateForm() {
    let allValid = true;
    formElements.forEach(element => {
        if (!element.value.trim()) {
            allValid = false;
        }

        if (element.type === "email" && !isValidEmail(element.value)) {
            allValid = false;
        }
    });
    submitButton.disabled = !allValid;
}

validateForm();
