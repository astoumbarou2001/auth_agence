<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8" />
  <title>Ajouter un Client</title>
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

    /* Fond image remplacé par celui de ajouter_bien.php */
    body::before {
      content: "";
      position: fixed;
      top: 0; left: 0;
      width: 100%; height: 100%;
      background-image: url('images/capture-ecran.jpg'); /* image du formulaire ajouter_bien */
      background-size: cover; /* comme dans ajouter_bien.php */
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
      box-shadow: 0 10px 25px rgba(0, 0, 0, 0.5);
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
      color: #eee;
    }

    .form-control {
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
    <h2 class="form-title">Ajouter un Client</h2>
    <form action="traitement_ajouter_client.php" method="POST">
      <div class="mb-3">
        <label for="nom" class="form-label">Nom</label>
        <input type="text" class="form-control" id="nom" name="nom" placeholder="Ex: Diop" required />
      </div>
      <div class="mb-3">
        <label for="prenom" class="form-label">Prénom</label>
        <input type="text" class="form-control" id="prenom" name="prenom" placeholder="Ex: Awa" required />
      </div>
      <div class="mb-3">
        <label for="email" class="form-label">Email</label>
        <input type="email" class="form-control" id="email" name="email" placeholder="exemple@email.com" required />
      </div>
      <div class="mb-3">
        <label for="telephone" class="form-label">Téléphone</label>
        <input type="tel" class="form-control" id="telephone" name="telephone" placeholder="Ex: 77 123 45 67" required />
      </div>
      <button type="submit" class="btn btn-primary">Ajouter le Client</button>
    </form>
  </div>
</body>
</html>
