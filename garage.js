// Sélectionnez le bouton du logo
const boutonLogo = document.querySelector(".icon-menu");
const barreMobile = document.querySelector(".navigation");

// Fonction de gestion du clic sur le bouton du logo
function showNav() {
  barreMobile.classList.toggle("show");
}

// Ajoutez un écouteur d'événement pour le clic sur le bouton du logo
boutonLogo.addEventListener("click", showNav);
