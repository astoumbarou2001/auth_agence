<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Recherche de biens immobiliers</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body class="container mt-5">

    <h2 class="mb-4">Recherche de biens</h2>

    <!-- FORMULAIRE DE RECHERCHE -->
    <form method="GET" action="recherche.php" class="mb-5">
        <div class="form-group">
            <label for="ville">Ville</label>
            <input type="text" class="form-control" id="ville" name="ville" placeholder="Ex: Dakar">
        </div>

        <div class="form-group">
            <label for="type">Type de bien</label>
            <select class="form-control" id="type" name="type">
                <option value="">-- Sélectionner --</option>
                <option value="Appartement">Appartement</option>
                <option value="Maison">Maison</option>
                <option value="Terrain">Terrain</option>
            </select>
        </div>

        <div class="form-group">
            <label for="prix_max">Prix maximum</label>
            <input type="number" class="form-control" id="prix_max" name="prix_max" placeholder="Ex: 20000000">
        </div>

        <button type="submit" class="btn btn-primary">Chercher</button>
    </form>

    <!-- TRAITEMENT PHP -->
    <?php
    // Connexion à la base de données
    $conn = new mysqli("localhost", "root", "", "agence_immobiliere");

    if ($conn->connect_error) {
        die("<div class='alert alert-danger'>Connexion échouée : " . $conn->connect_error . "</div>");
    }

    // Récupérer les données du formulaire
    $ville = $_GET['ville'] ?? '';
    $type = $_GET['type'] ?? '';
    $prix_max = $_GET['prix_max'] ?? '';

    // Construire la requête SQL dynamique
   $sql = "SELECT * FROM annonces_v2 WHERE 1=1";


    if (!empty($ville)) {
        $ville = $conn->real_escape_string($ville);
        $sql .= " AND ville LIKE '%$ville%'";
    }

    if (!empty($type)) {
        $type = $conn->real_escape_string($type);
        $sql .= " AND type = '$type'";
    }

    if (!empty($prix_max)) {
        $prix_max = (int)$prix_max;
        $sql .= " AND prix <= $prix_max";
    }

    // Exécuter la requête
    $result = $conn->query($sql);

    // Afficher les résultats
    if ($result && $result->num_rows > 0) {
        echo "<h3>Résultats trouvés :</h3>";
        while($row = $result->fetch_assoc()) {
            echo "<div class='card mb-3'>";
            echo "<div class='card-body'>";
            echo "<h5 class='card-title'>" . htmlspecialchars($row["titre"]) . "</h5>";
            echo "<p class='card-text'><strong>Ville :</strong> " . htmlspecialchars($row["ville"]) . "</p>";
            echo "<p class='card-text'><strong>Type :</strong> " . htmlspecialchars($row["type"]) . "</p>";
            echo "<p class='card-text'><strong>Prix :</strong> " . number_format($row["prix"], 0, ',', ' ') . " FCFA</p>";
            echo "</div></div>";
        }
    } elseif (isset($_GET['ville']) || isset($_GET['type']) || isset($_GET['prix_max'])) {
        echo "<div class='alert alert-warning'>Aucun résultat trouvé.</div>";
    }

    $conn->close();
    ?>

</body>
</html>
