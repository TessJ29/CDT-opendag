//* Hamburger menu variables
const menu = document.querySelector('#mobile-menu');
const menuLinks = document.querySelector('.navbar__menu');

//* Display mobile menu
const mobileMenu = () => {
    menu.classList.toggle('is-active');
    menuLinks.classList.toggle('active');
};

//* This line of code listens to when the hamburger-button is pressed.
//* When it is, it will execute the mobileMenu function.
menu.addEventListener('click', mobileMenu);



// Survey
// Switch between data steps

const setStep = step => {
    document.querySelectorAll(".step-content").forEach(element => element.style.display = "none");
    document.querySelector("[data-step='" + step + "']").style.display = "block";
    document.querySelectorAll(".steps .step").forEach((element, index) => {
        index < step - 1 ? element.classList.add("complete") : element.classList.remove("complete");
        index == step - 1 ? element.classList.add("current") : element.classList.remove("current");
    });
};
document.querySelectorAll("[data-set-step]").forEach(element => {
    element.onclick = event => {
        event.preventDefault();
        setStep(parseInt(element.dataset.setStep));
    };
});

