<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Accueil | Agence Immo</title>

  <!-- Police Google Fonts -->
  <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">

  <!-- Bootstrap -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

  <style>
    body {
      font-family: 'Poppins', sans-serif;
      margin: 0;
      padding: 0;
      background-image: url('https://images.unsplash.com/photo-1570129477492-45c003edd2be');
      background-size: cover;
      background-position: center;
      height: 100vh;
      color: white;
    }

    .overlay {
      background-color: rgba(0, 0, 0, 0.6);
      height: 100%;
      width: 100%;
      position: absolute;
      top: 0;
      left: 0;
    }

    .content {
      position: relative;
      z-index: 1;
      padding-top: 150px;
      text-align: center;
    }

    .btn-custom {
      background-color: #28a745;
      border: none;
    }
    .btn-custom:hover {
      background-color: #218838;
    }
  </style>
</head>
<body>
  <div class="overlay"></div>

  <div class="content">
    <h1 class="display-4">Bienvenue à l'Agence Immobilière</h1>
    <p class="lead">Gérez facilement vos biens, clients et transactions</p>
    <a href="dashboard.php" class="btn btn-custom btn-lg mt-4">Accéder au tableau de bord</a>
  </div>

  <!-- Bootstrap JS -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
