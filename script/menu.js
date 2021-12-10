//Menu ouverture/fermeture
const hamburger = document.querySelector(".hamburger");
const navMenu = document.querySelector(".nav-menu");
const navLink = document.querySelectorAll(".nav-link");

//Ouverture/fermeture du menu si click sur le burger
hamburger.addEventListener("click", openMenu);

//Fermeture du menu si click sur un lien
navLink.forEach(n => n.addEventListener("click", closeMenu));

window.addEventListener('scroll', () => {
    if (hamburger.className == "hamburger active" && navMenu.className == "nav-menu active") {
        closeMenu();
    }
})

//Fonction ouverture menu
function openMenu() {
    hamburger.classList.toggle("active");
    navMenu.classList.toggle("active");
}

//Fonction fermeture du menu
function closeMenu() {
    hamburger.classList.remove("active");
    navMenu.classList.remove("active");
}