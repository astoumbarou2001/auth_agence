<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8" />
  <title>Connexion - Agence Immobilière</title>
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" />
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet" />
  <style>
    body {
      font-family: 'Segoe UI', sans-serif;
      background-color: #f5f5f5;
    }

    .login-section {
      min-height: 100vh;
      display: flex;
      align-items: center;
    }

    .login-form {
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

    .btn-social {
      display: flex;
      align-items: center;
      justify-content: center;
      border: 1px solid #ddd;
      border-radius: 8px;
      margin-bottom: 10px;
      color: #333;
      background-color: #fff;
      text-decoration: none;
      padding: 10px;
      transition: background 0.2s;
    }

    .btn-social:hover {
      background-color: #f1f1f1;
    }

    .btn-social i {
      margin-right: 8px;
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
    <a href="contact.php" class="btn btn-outline-secondary">
      ← retour
    </a>
    
  </div>
  <div class="container-fluid login-section">
    <div class="row w-100">
      <!-- Formulaire -->
      <div class="col-lg-6 d-flex align-items-center justify-content-center">
        <div class="login-form">
          <h2 class="text-center">Connectez-vous</h2>

          <a href="#" class="btn-social"><i class="fab fa-google"></i> Continuer avec Google</a>
          <a href="#" class="btn-social"><i class="fab fa-apple"></i> Continuer avec Apple</a>
          <a href="#" class="btn-social"><i class="fab fa-facebook-f"></i> Continuer avec Facebook</a>

          <form action="traitement_connexion.php" method="post" class="mt-3">
            <input type="email" class="form-control" name="email" placeholder="Adresse courriel" required>
            <input type="password" class="form-control" name="mot_de_passe" placeholder="Mot de passe" required>

            <div class="d-flex justify-content-between align-items-center mb-3">
              <div class="form-check">
                <input class="form-check-input" type="checkbox" id="souvenir" />
                <label class="form-check-label" for="souvenir">Souvenez-vous de moi</label>
              </div>
              <a href="#">Mot de passe oublié ?</a>
            </div>

            <button type="submit" class="btn btn-primary w-100">S'identifier</button>
          </form>

          <p class="text-center mt-3">Pas encore de compte ? <a href="inscription.php">Créer un compte</a></p>
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
