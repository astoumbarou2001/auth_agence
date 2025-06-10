<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8" />
  <title>Inscription - Agence Immobilière</title>
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" />
  <style>
    body {
      font-family: 'Segoe UI', sans-serif;
      background-color: #f5f5f5;
    }

    .register-section {
      min-height: 100vh;
      display: flex;
      align-items: center;
    }

    .register-form {
      background-color: #ffffff;
      padding: 40px;
      border-radius: 12px;
      box-shadow: 0 5px 15px rgba(0, 0, 0, 0.05);
      max-width: 420px;
      margin: auto;
    }

    h2 {
      font-weight: 600;
      color: #333;
      margin-bottom: 30px;
    }

    .form-control {
      margin-bottom: 15px;
      border-radius: 8px;
      padding: 10px 15px;
    }

    .btn-primary {
      background-color: #0d6efd;
      border: none;
      font-weight: 500;
    }

    .btn-primary:hover {
      background-color: #084dbf;
    }

    .image-section img {
      width: 100%;
      height: 100vh;
      object-fit: cover;
      border-radius: 0 12px 12px 0;
    }

    footer {
      text-align: center;
      font-size: 13px;
      margin-top: 40px;
      color: #777;
    }

    footer a {
      color: #555;
      text-decoration: none;
      margin: 0 5px;
    }

    footer a:hover {
      text-decoration: underline;
    }

    @media (max-width: 768px) {
      .image-section img {
        height: 300px;
        border-radius: 12px 12px 0 0;
      }
    }
  </style>
</head>
<body>
    <div class="container-fluid">
    <a href="connexion.php" class="btn btn-outline-secondary">
      ← retour
    </a>
    
  </div>
  <div class="container-fluid register-section">
    <div class="row w-100">
      <!-- Formulaire -->
      <div class="col-lg-6 d-flex align-items-center justify-content-center">
        <div class="register-form">
          <h2 class="text-center">Inscription</h2>
          <form action="traitement_inscription.php" method="post" class="mt-3">
            <input type="text" class="form-control" name="nom" placeholder="Nom" required />
            <input type="text" class="form-control" name="prenom" placeholder="Prénom" required />
            <input type="email" class="form-control" name="email" placeholder="Adresse courriel" required />
            <input type="password" class="form-control" name="mot_de_passe" placeholder="Mot de passe" required />

            <button type="submit" class="btn btn-primary w-100 mt-3">S'inscrire</button>
          </form>

          <p class="text-center mt-3">Déjà inscrit ? <a href="connexion.php">Se connecter</a></p>
        </div>
      </div>

      <!-- Image -->
      <div class="col-lg-6 image-section d-none d-lg-block p-0">
        <img src="images/OP.jpg" alt="Immobilier" />
      </div>
    </div>
  </div>

  <footer>
    <p>© 2025 Agence Immobilière Sénégal. Tous droits réservés.</p>
    <p>
      <a href="#">Conditions de service</a> |
      <a href="#">Politique de confidentialité</a>
    </p>
  </footer>
</body>
</html>
