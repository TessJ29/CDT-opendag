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

// Course page
// Opens and closes dropdown
var list = document.querySelectorAll("[data-toggle=dropdown]");
for (var i = 0, s = list.length; i < s; i++) {
    var elm = list[i];
    elm.addEventListener("click", function() {
        // this for loop will hide previously clicked drop downs
        for (var j = 0, z = list.length; j < z; j++) {
            if (list[j] != this) {
                var elm = document.querySelector(list[j].getAttribute("data-target"));
                var str = elm.className.replace("d-block");
                elm.className = str;
            }
        } // if you like, remove the above loop
        var obj = document.querySelector(this.getAttribute("data-target"));
        if (obj.className.indexOf("d-block") > 0) {
            var temp = obj.className.replace("d-block", "");
            obj.className = temp;
        } else {
            obj.className += " d-block";
        }
    });
}

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

