<?php
session_start();

$host = 'localhost';
$db = 'garage';
$user = 'root';
$password = '';

$conn = new mysqli($host, $user, $password, $db);

if ($conn->connect_error) {
    die("Échec de la connexion à la base de données : " . $conn->connect_error);
}

if(isset($_POST['valid'])) {
    $email = $conn->real_escape_string($_POST['email']);
    $password = $_POST['password'];

    // Vérification de l'administrateur
    $sqlAdmin = "SELECT * FROM admin WHERE email='$email'";
    $resultAdmin = $conn->query($sqlAdmin);

    if ($resultAdmin === false) {
        echo "Erreur de requête SQL : " . $conn->error;
        exit();
    }

    if ($resultAdmin->num_rows === 1) {
        $rowAdmin = $resultAdmin->fetch_assoc();
        $hashedPasswordAdmin = $rowAdmin['password'];

        if (password_verify($password, $hashedPasswordAdmin)) {
            $_SESSION['admin_id'] = $rowAdmin['id'];
            $_SESSION['admin_email'] = $rowAdmin['email'];

            // Rediriger vers la page d'administration
            header("Location: admin.php");
            exit();
        } else {
            echo "Mot de passe administrateur incorrect";
        }
    } else {
        echo "Administrateur non trouvé";
    }
}

$conn->close();
?>

