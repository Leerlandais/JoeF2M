const contactForm = document.getElementById("contactForm");
const formElements = contactForm.querySelectorAll("input, textarea"); // don't forget to add new input types if we need to add to the current formulaire
const formData = {};

formElements.forEach(element => {
    const key = element.id
    if (key) {
        formData[key] = element;
    }
});
console.log("If this isn't undefined, the script works - add default values for more testing tomorrow : ", formData);


