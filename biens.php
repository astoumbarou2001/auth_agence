<?php
session_start();
require 'config.php'; // ta connexion PDO à la BDD

// Vérifier si utilisateur connecté
if (!isset($_SESSION['user_email'])) {
    header('Location: connexion.php');
    exit();
}

// Requête pour récupérer tous les biens
$sql = "SELECT * FROM biens ORDER BY date_ajout DESC";
$stmt = $pdo->query($sql);
$biens = $stmt->fetchAll();
?>

<!DOCTYPE html>
<html>
<head>
    <title>Liste des biens</title>
</head>
<body>
    <h1>Liste des biens immobiliers</h1>
    <a href="ajouter_bien.php">Ajouter un nouveau bien</a>
    <table border="1" cellpadding="10">
        <thead>
            <tr>
                <th>ID</th>
                <th>Type</th>
                <th>Adresse</th>
                <th>Prix</th>
                <th>Description</th>
                <th>Date d'ajout</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($biens as $bien): ?>
                <tr>
                    <td><?= htmlspecialchars($bien['id']) ?></td>
                    <td><?= htmlspecialchars($bien['type']) ?></td>
                    <td><?= htmlspecialchars($bien['adresse']) ?></td>
                    <td><?= htmlspecialchars($bien['prix']) ?> FCFA</td>
                    <td><?= htmlspecialchars($bien['description']) ?></td>
                    <td><?= htmlspecialchars($bien['date_ajout']) ?></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</body>
</html>
