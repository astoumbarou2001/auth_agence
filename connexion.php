<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Connexion</title>
</head>
<body>
    <h2>Connexion</h2>
    <form action="traitement_connexion.php" method="post">
        <input type="email" name="email" placeholder="Email" required><br>
        <input type="password" name="mot_de_passe" placeholder="Mot de passe" required><br>
        <button type="submit">Se connecter</button>
    </form>
    <p><a href="inscription.php">Pas encore de compte ? Inscription</a></p>
</body>
</html>