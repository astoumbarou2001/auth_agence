<?php
session_start();
require 'config.php';

if (!isset($_SESSION['user_email'])) {
    header('Location: connexion.php');
    exit();
}

$sql = "SELECT * FROM clients ORDER BY nom ASC";
$stmt = $pdo->query($sql);
$clients = $stmt->fetchAll();
?>

<!DOCTYPE html>
<html>
<head>
    <title>Liste des clients</title>
</head>
<body>
    <h1>Liste des clients</h1>
    <a href="ajouter_client.php">Ajouter un nouveau client</a>
    <table border="1" cellpadding="10">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nom</th>
                <th>Prénom</th>
                <th>Email</th>
                <th>Téléphone</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($clients as $client): ?>
                <tr>
                    <td><?= htmlspecialchars($client['id']) ?></td>
                    <td><?= htmlspecialchars($client['nom']) ?></td>
                    <td><?= htmlspecialchars($client['prenom']) ?></td>
                    <td><?= htmlspecialchars($client['email']) ?></td>
                    <td><?= htmlspecialchars($client['telephone']) ?></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <br>
    <a href="index.php">Retour à l'accueil</a>
</body>
</html>
