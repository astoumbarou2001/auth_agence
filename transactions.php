<?php
session_start();
require 'config.php';

if (!isset($_SESSION['user_email'])) {
    header('Location: connexion.php');
    exit();
}

// Requête pour récupérer les transactions avec info client + bien
$sql = "SELECT t.id, t.date_transaction, c.nom, c.prenom, b.type, b.adresse, t.montant 
        FROM transactions t
        JOIN clients c ON t.client_id = c.id
        JOIN biens b ON t.bien_id = b.id
        ORDER BY t.date_transaction DESC";

$stmt = $pdo->query($sql);
$transactions = $stmt->fetchAll();
?>

<!DOCTYPE html>
<html>
<head>
    <title>Liste des transactions</title>
</head>
<body>
    <h1>Liste des transactions</h1>
    <a href="ajouter_transaction.php">Ajouter une transaction</a>
    <table border="1" cellpadding="10">
        <thead>
            <tr>
                <th>ID</th>
                <th>Date</th>
                <th>Client</th>
                <th>Adresse</th>
                <th>Montant (FCFA)</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($transactions as $t): ?>
                <tr>
                    <td><?= htmlspecialchars($t['id']) ?></td>
                    <td><?= htmlspecialchars($t['date_transaction']) ?></td>
                    <td><?= htmlspecialchars($t['nom'] . ' ' . $t['prenom']) ?></td>
                    <td><?= htmlspecialchars($t['type'] . ' - ' . $t['adresse']) ?></td>
                    <td><?= htmlspecialchars($t['montant']) ?></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <br>
    <a href="index.php">Retour à l'accueil</a>
</body>
</html>
