<?php
// Récupérer le paramètre "type" passé en GET, sécuriser avec htmlspecialchars
$typeBien = '';
if (isset($_GET['type'])) {
    $typeBien = htmlspecialchars($_GET['type']);
}
// Liste des types possibles pour valider la valeur et éviter un type non prévu
$typesPossibles = ['Maison', 'Appartement', 'Terrain', 'Studio'];
if (!in_array($typeBien, $typesPossibles)) {
    $typeBien = ''; // reset si valeur non valide
}
?>
<!DOCTYPE html> 
<html lang="fr">
<head>
  <meta charset="UTF-8" />
  <title>Ajouter un Bien Immobilier</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" />
  <style>
    @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap');

    html, body {
      height: 100%;
      margin: 0;
      font-family: 'Poppins', sans-serif;
      background-image: url('images/capture-ecran.jpg');
      background-size: cover;
      background-position: center;
      background-attachment: fixed;
    }

    .form-container {
      max-width: 600px;
      margin: 80px auto;
      background: rgba(0, 0, 0, 0.6);
      border-radius: 12px;
      box-shadow: 0 10px 25px rgba(0, 0, 0, 0.5);
      padding: 30px;
      color: white;
    }

    .form-title {
      text-align: center;
      font-weight: 600;
      margin-bottom: 10px;
      color: #fff;
    }

    .slogan {
      text-align: center;
      font-size: 16px;
      font-style: italic;
      margin-bottom: 25px;
      color: #ddd;
    }

    .form-label {
      font-weight: 500;
      color: #eee;
    }

    .form-control,
    .form-select {
      background-color: rgba(255, 255, 255, 0.1);
      border: 1px solid #ccc;
      color: #fff;
    }

    .form-control::placeholder {
      color: #ccc;
    }

    .btn-primary {
      width: 100%;
      padding: 10px;
      font-size: 18px;
    }
  </style>
</head>
<body>

  <div class="form-container">
    <h2 class="form-title">Ajouter un Bien Immobilier</h2>
    <p class="slogan">Votre confiance, notre priorité</p>
    <form action="traitement_ajouter_bien.php" method="POST">
      <div class="mb-3">
        <label for="nom" class="form-label">Nom du bien</label>
        <input type="text" class="form-control" id="nom" name="nom" placeholder="Nom du bien" required />
      </div>

      <div class="mb-3">
        <label for="type" class="form-label">Type de bien</label>
        <select class="form-select" id="type" name="type" required>
          <option value="">-- Choisir un type --</option>
          <option value="Maison" <?= ($typeBien === 'Maison') ? 'selected' : '' ?>>Maison</option>
          <option value="Appartement" <?= ($typeBien === 'Appartement') ? 'selected' : '' ?>>Appartement</option>
          <option value="Terrain" <?= ($typeBien === 'Terrain') ? 'selected' : '' ?>>Terrain</option>
          <option value="Studio" <?= ($typeBien === 'Studio') ? 'selected' : '' ?>>Studio</option>
        </select>
      </div>

      <div class="mb-3">
        <label for="adresse" class="form-label">Adresse</label>
        <input type="text" class="form-control" id="adresse" name="adresse" placeholder="Adresse" required />
      </div>

      <div class="mb-3">
        <label for="prix" class="form-label">Prix (€)</label>
        <input type="number" class="form-control" id="prix" name="prix" placeholder="Ex: 100000" step="0.01" required />
      </div>

      <div class="mb-3">
        <label for="description" class="form-label">Description</label>
        <textarea class="form-control" id="description" name="description" rows="4" placeholder="Décrivez le bien..." required></textarea>
      </div>

      <button type="submit" class="btn btn-primary">Ajouter le Bien</button>
    </form>
  </div>

</body>
</html>
