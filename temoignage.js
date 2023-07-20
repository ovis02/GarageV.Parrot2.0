// Code JavaScript pour la gestion des témoignages
const testimonialForm = document.getElementById("testimonial-form");
const testimonialList = document.getElementById("testimonial-list");

testimonialForm.addEventListener("submit", function (event) {
  event.preventDefault();

  const name = document.getElementById("name").value;
  const comment = document.getElementById("comment").value;
  const rating = document.getElementById("rating").value;

  // Vous pouvez ajouter votre logique de traitement des témoignages ici,
  // telle que l'envoi des données au serveur, la validation/modération, etc.

  // Exemple d'ajout d'un témoignage approuvé à la liste
  const testimonialItem = document.createElement("div");
  testimonialItem.innerHTML = `
        <h3>${name}</h3>
        <p>${comment}</p>
        <p>Note: ${rating}/5</p>
      `;
  testimonialList.appendChild(testimonialItem);

  // Réinitialiser le formulaire
  testimonialForm.reset();
});
