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


const showWorkshop = document.querySelector()
document.getElementById("3.23").addEventListener("click", showWorkshop);
document.getElementById("3.26").addEventListener("click", showWorkshop);
document.getElementById("3.27").addEventListener("click", showWorkshop);
// document.getElementById("3.28").addEventListener("click", showWorkshop);
// document.getElementById("3.03").addEventListener("click", showWorkshop);
// document.getElementById("3.04").addEventListener("click", showWorkshop);
// document.getElementById("3.05").addEventListener("click", showWorkshop);
// document.getElementById("3.06").addEventListener("click", showWorkshop);
// document.getElementById("3.08").addEventListener("click", showWorkshop);

function showWorkshop() {
    document.getElementById("workshopTitle").innerHTML = ;//! Hier moet komen te staan dat wanneer deze functie eord aangeroepen de Titel verschijnt die bij de workshop hoort
    document.getElementById("workshopInfo").innerHTML = ;//! Hier moet komen te staan dat wanneer deze functie eord aangeroepen de Tekst verschijnt die bij de workshop hoort
  }