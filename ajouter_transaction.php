<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8" />
  <title>Ajouter une Transaction</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" />
  <style>
    @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap');

    html, body {
      height: 100%;
      margin: 0;
      font-family: 'Poppins', sans-serif;
      position: relative;
      overflow: hidden;
    }

    /* Fond image fixe, sombre */
    body::before {
      content: "";
      position: fixed;
      top: 0; left: 0;
      width: 100%; height: 100%;
      background-image: url('images/capture-ecran.jpg');
      background-size: cover;
      background-position: center;
      background-repeat: no-repeat;
      background-attachment: fixed;
      filter: brightness(0.5);
      z-index: -1;
    }

    .form-container {
      max-width: 600px;
      margin: 80px auto;
      background: rgba(0, 0, 0, 0.6);
      border-radius: 12px;
      box-shadow: 0 10px 25px rgba(0,0,0,0.5);
      padding: 30px;
      color: white;
    }

    .form-title {
      text-align: center;
      font-weight: 600;
      margin-bottom: 25px;
      color: #fff;
    }

    .form-label {
      font-weight: 500;
      margin-bottom: 5px;
      color: #eee;
    }

    .form-control, .form-select {
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
    <h2 class="form-title">Ajouter une Transaction</h2>
    <form action="traitement_ajouter_transaction.php" method="POST">

      <div class="mb-3">
        <label for="client_id" class="form-label">Client</label>
        <select class="form-select" id="client_id" name="client_id" required>
          <option value="">-- Sélectionner un client --</option>
          <!-- Ici tu vas remplir dynamiquement les clients via PHP -->
          <?php
          // Exemple d'intégration PHP à adapter à ta base
          /*
          $pdo = new PDO('mysql:host=localhost;dbname=agence_immo', 'root', '');
          $stmt = $pdo->query('SELECT id, nom, prenom FROM clients');
          while ($row = $stmt->fetch()) {
              echo "<option value='{$row['id']}'>{$row['nom']} {$row['prenom']}</option>";
          }
          */
          ?>
        </select>
      </div>

      <div class="mb-3">
        <label for="bien_id" class="form-label">Bien Immobilier</label>
        <select class="form-select" id="bien_id" name="bien_id" required>
          <option value="">-- Sélectionner un bien --</option>
          <!-- Remplir dynamiquement avec les biens -->
          <?php
          /*
          $stmt2 = $pdo->query('SELECT id, nom FROM biens');
          while ($row = $stmt2->fetch()) {
              echo "<option value='{$row['id']}'>{$row['nom']}</option>";
          }
          */
          ?>
        </select>
      </div>

      <div class="mb-3">
        <label for="montant" class="form-label">Montant (€)</label>
        <input type="number" class="form-control" id="montant" name="montant" step="0.01" required />
      </div>

      <div class="mb-3">
        <label for="date_transaction" class="form-label">Date de la transaction</label>
        <input type="date" class="form-control" id="date_transaction" name="date_transaction" required />
      </div>

      <button type="submit" class="btn btn-primary">Ajouter la Transaction</button>
    </form>
  </div>
</body>
</html>
