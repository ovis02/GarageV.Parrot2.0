<?php
$email = $_POST['email'];
$password = $_POST['password'];

// Effectuer la connexion à votre base de données
$conn = new PDO('mysql:host=localhost;dbname=garage', 'root', '');

// Préparer et exécuter la requête
$stmt = $conn->prepare('SELECT * FROM employe WHERE email = :email');
$stmt->bindParam(':email', $email);
$stmt->execute();

// Vérifier si un employé correspondant a été trouvé
$employe = $stmt->fetch(PDO::FETCH_ASSOC);
if ($employe && password_verify($password, $employe['password'])) {
    // Les informations d'identification sont valides, l'employé est connecté avec succès
    // Vous pouvez stocker les détails de l'employé dans la session ou effectuer d'autres actions nécessaires
    session_start();
    $_SESSION['employe_id'] = $employe['id'];
    $_SESSION['employe_email'] = $employe['email'];

    // Rediriger vers la page de l'employé ou une autre page sécurisée
    header('Location: employe_dashboard.php');
    exit();
} else {
    // Les informations d'identification sont incorrectes
    echo 'Identifiants incorrects';
}
?>
