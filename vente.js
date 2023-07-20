// Sélectionnez le bouton du logo
const boutonLogo = document.querySelector(".icon-menu");
const barreMobile = document.querySelector(".navigation");

// Fonction de gestion du clic sur le bouton du logo
function showNav() {
  barreMobile.classList.toggle("show");
}

// Ajoutez un écouteur d'événement pour le clic sur le bouton du logo
boutonLogo.addEventListener("click", showNav);

function filtrer() {
  // Récupérer les valeurs saisies dans les champs de filtrage
  const prixMax = parseInt(document.getElementById("prix").value);
  const annee = parseInt(document.getElementById("annee").value);
  const kilometrageMax = parseInt(document.getElementById("kilometrage").value);

  // Récupérer toutes les cartes de voiture
  const carCards = document.querySelectorAll(".car-card");

  // Parcourir les cartes de voiture et les afficher ou les masquer en fonction des critères de filtrage
  carCards.forEach((carCard) => {
    const prix = parseInt(
      carCard
        .querySelector("p:nth-of-type(1)")
        .textContent.split(" ")[1]
        .replace(",", "")
    );
    const anneeVoiture = parseInt(
      carCard.querySelector("p:nth-of-type(2)").textContent.split(":")[1].trim()
    );
    const kilometrage = parseInt(
      carCard.querySelector("p:nth-of-type(3)").textContent.split(":")[1].trim()
    );

    const afficher =
      (isNaN(prixMax) || prix <= prixMax) &&
      (isNaN(annee) || anneeVoiture === annee) &&
      (isNaN(kilometrageMax) || kilometrage <= kilometrageMax);

    carCard.style.display = afficher ? "block" : "none";
  });
}
