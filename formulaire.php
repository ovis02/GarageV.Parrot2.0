<?php
$host = 'localhost'; // nom de l'hote de ma base de données
$db = 'garage'; // C'est le nom de ma base de données
$user = 'root'; // Le nom d'utilisateur de la base de données (dans ce cas, 'root' pour une installation locale)
$password = ''; // Mot de passe vide car je n'ai pas de mot de passe

// Connexion à la base de données
$conn = new mysqli($host, $user, $password, $db);

// Vérifier la connexion
if ($conn->connect_error) {
    die("Échec de la connexion à la base de données : " . $conn->connect_error);
}

if(isset($_POST['valid']))
{
    if(isset($_POST['lastName']) && isset($_POST['firstName']) && isset($_POST['email']) && isset($_POST['phoneNumber']) && isset($_POST['plateNumber']) && isset($_POST['message']) && isset($_POST['conditions'])) 
    {
        if(!empty($_POST['lastName']) && !empty($_POST['firstName']) && !empty($_POST['email']) && !empty($_POST['phoneNumber']) && !empty($_POST['plateNumber']) && !empty($_POST['message']) && !empty($_POST['conditions']))
        {
            // Récupérer les données du formulaire
            $lastName = $conn->real_escape_string($_POST['lastName']);
            $firstName = $conn->real_escape_string($_POST['firstName']);
            $email = $conn->real_escape_string($_POST['email']);
            $phoneNumber = $conn->real_escape_string($_POST['phoneNumber']);
            $plateNumber = $conn->real_escape_string($_POST['plateNumber']);
            $message = $conn->real_escape_string($_POST['message']);
            $conditions = isset($_POST['conditions']) ? 1 : 0; // Convertir la valeur de la checkbox en 1 ou 0

            // Requête d'insertion dans la base de données
            $sql = "INSERT INTO messages (nom, prenom, email, telephone, numero_immatriculation, message, condition_acceptee) VALUES ('$lastName', '$firstName', '$email', '$phoneNumber', '$plateNumber', '$message', $conditions)";

            // Exécuter la requête
            if ($conn->query($sql) === TRUE) {
                echo "<h2>Bonjour <b>$lastName</b> <b>$firstName</b>, merci pour votre message : <b>$message</b>. Nous vous répondrons sous 24h.</h2>";
            } else {
                echo "Erreur lors de l'enregistrement du message : " . $conn->error;
            }
        }
    }
}

// Fermer la connexion à la base de données
$conn->close();
?>
