<?php
$host = 'localhost'; // nom de l'hote de ma base de données
$db = 'garage'; // C'est le nom de ma base de données "garage"
$user = 'root'; // Le nom d'utilisateur de la base de données (dans ce cas, 'root' pour une installation locale)
$password = ''; // Mot de passe vide car je n'ai pas de mot de passe

// Connexion à la base de données
$conn = new mysqli($host, $user, $password, $db);

// Vérifier la connexion
if ($conn->connect_error) {
    die("Échec de la connexion à la base de données : " . $conn->connect_error);
}

if (isset($_POST['valid'])) {
    if (isset($_POST['name']) && isset($_POST['comment']) && isset($_POST['rating'])) {
        if (!empty($_POST['name']) && !empty($_POST['comment']) && !empty($_POST['rating'])) {
            // Récupérer les données du formulaire
            $name = $conn->real_escape_string($_POST['name']);
            $comment = $conn->real_escape_string($_POST['comment']);
            $rating = intval($_POST['rating']); // Convertir la valeur de note en entier

            // Requête d'insertion dans la base de données
            $sql = "INSERT INTO temoignage (name, comment, rating) VALUES ('$name', '$comment', $rating)";

            // Exécuter la requête
            if ($conn->query($sql) === TRUE) {
                echo "<h2>Merci <b>$name</b> pour votre témoignage.</h2>";
            } else {
                echo "Erreur lors de l'enregistrement du témoignage : " . $conn->error;
            }
        }
    }
}

// Fermer la connexion à la base de données
$conn->close();
?>
