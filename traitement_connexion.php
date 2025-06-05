<?php
session_start();

require 'config.php'; // fichier avec la connexion à la BDD

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $email = $_POST['email'];
    $mot_de_passe = $_POST['mot_de_passe'];

    $sql = "SELECT * FROM utilisateurs WHERE email = :email";
    $stmt = $pdo->prepare($sql);
    $stmt->execute(['email' => $email]);
    $user = $stmt->fetch();

    if ($user && password_verify($mot_de_passe, $user['mot_de_passe'])) {
        // Connexion réussie : création des variables de session
        $_SESSION['user_email'] = $user['email'];
        $_SESSION['user_prenom'] = $user['prenom'];

        header('Location: index.php'); // redirection vers la page d’accueil
        exit();
    } else {
        echo "Email ou mot de passe incorrect.";
    }
} else {
    header('Location: connexion.php');
    exit();
}
