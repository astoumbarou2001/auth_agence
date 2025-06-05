<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8" />
  <title>Contact - Agence Immobilière</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" />
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet" />
  <style>
    body {
      margin: 0;
      font-family: 'Poppins', sans-serif;
      background: #f8f9fa;
    }

    /* En-tête - top-bar */
    .top-bar {
      background-color: #343a40;
      color: white;
      padding: 5px 30px;
      font-size: 14px;
      display: flex;
      justify-content: space-between;
      align-items: center;
      flex-wrap: wrap;
    }

    .top-bar .contact-info {
      display: flex;
      gap: 15px;
      align-items: center;
      flex-wrap: wrap;
    }

    .top-bar .social-icons {
      display: flex;
      gap: 10px;
    }

    .top-bar i {
      margin-right: 5px;
    }

    .top-bar a {
      color: white;
      text-decoration: none;
    }

    /* Navbar */
    nav.navbar {
      background-color: rgba(0, 0, 0, 0.9);
      padding: 10px 30px;
      width: 100%;
      display: flex;
      align-items: center;
      justify-content: center;
    }

    nav.navbar .nav-links {
      display: flex;
      gap: 20px;
      margin-top: 40px;
    }

    nav.navbar .nav-links a {
      color: white;
      text-decoration: none;
      font-weight: 600;
      font-size: 16px;
      padding: 8px 12px;
      border-radius: 6px;
      transition: background-color 0.3s;
    }

    nav.navbar .nav-links a:hover,
    nav.navbar .nav-links a.active {
      background-color: #ffc107;
      color: black;
    }

    /* Contenu principal */
    .contact-container {
      max-width: 1100px;
      margin: 60px auto 80px auto;
      background: white;
      border-radius: 15px;
      box-shadow: 0 4px 20px rgba(0,0,0,0.1);
      display: flex;
      overflow: hidden;
      /* flex-wrap: wrap; supprimé pour éviter problème d’affichage */
    }

    /* Partie gauche - image AVEC TEINTE VERTE */
    .contact-image {
      flex: none;
      width: 450px;
      min-height: 450px;
      background-image: url('https://via.placeholder.com/450x450.png?text=Test+Image');

      background-size: cover;
      background-position: center;
      background-repeat: no-repeat;
      background-color: #ddd;
    }

    /* Partie droite - formulaire */
    .contact-form {
      flex: 1 1 auto;
      padding: 40px 50px;
    }

    .contact-form h2 {
      margin-bottom: 30px;
      color: #343a40;
      font-weight: 700;
    }

    .contact-form label {
      font-weight: 600;
      margin-top: 15px;
      display: block;
      color: #555;
    }

    .contact-form input, .contact-form textarea {
      width: 100%;
      padding: 12px 15px;
      margin-top: 5px;
      border: 1.5px solid #ddd;
      border-radius: 8px;
      font-size: 15px;
      transition: border-color 0.3s;
      resize: vertical;
    }

    .contact-form input:focus, .contact-form textarea:focus {
      border-color: #ffc107;
      outline: none;
    }

    .contact-form button {
      margin-top: 30px;
      background-color: #ffc107;
      border: none;
      padding: 12px 25px;
      font-weight: 700;
      font-size: 16px;
      border-radius: 10px;
      color: black;
      cursor: pointer;
      transition: background-color 0.3s;
    }

    .contact-form button:hover {
      background-color: #e0a800;
    }

    @media (max-width: 900px) {
      .contact-container {
        flex-direction: column;
        margin: 30px 20px 50px 20px;
      }
      .contact-image, .contact-form {
        flex: 1 1 100%;
        min-height: 300px;
        width: 100%;
      }
      .contact-form {
        padding: 30px 20px;
      }
    }
  </style>
</head>
<body>

  <!-- Top bar identique dashboard -->
  <div class="top-bar">
    <div class="contact-info">
      <span><i class="fas fa-phone"></i> 772294183</span>
      <span><i class="fas fa-envelope"></i> <a href="mailto:mbarouastou@gmail.com">mbarouastou@gmail.com</a></span>
      <span><i class="fas fa-map-marker-alt"></i> Sénégalaise de l'immobilier, Dakar</span>
    </div>
    <div class="social-icons">
      <a href="#"><i class="fab fa-facebook-f"></i></a>
      <a href="#"><i class="fab fa-whatsapp"></i></a>
      <a href="#"><i class="fab fa-snapchat-ghost"></i></a>
      <a href="#"><i class="fab fa-twitter"></i></a>
    </div>
  </div>

  <!-- Navbar identique dashboard -->
  <nav class="navbar">
    <div class="nav-links">
      <a href="dashboard.php">Home</a>
      <a href="#">Acheter</a>
      <a href="#">Louer</a>
      <a href="#">Vendre</a>
      <a href="#">Faire gérer</a>
      <a href="#">À propos de nous</a>
      <a href="contact.php" class="active">Nous contacter</a>
    </div>
  </nav>

  <!-- Contenu principal contact -->
  <div class="contact-container">
    <div class="contact-image"></div>
    <div class="contact-form">
      <h2>Contactez-nous</h2>
      <form action="#" method="post">
        <label for="name">Nom complet</label>
        <input type="text" id="name" name="name" placeholder="Votre nom complet" required>

        <label for="email">Email</label>
        <input type="email" id="email" name="email" placeholder="Votre adresse email" required>

        <label for="subject">Sujet</label>
        <input type="text" id="subject" name="subject" placeholder="Sujet de votre message" required>

        <label for="message">Message</label>
        <textarea id="message" name="message" rows="5" placeholder="Votre message" required></textarea>

        <button type="submit">Envoyer</button>
      </form>
    </div>
  </div>

</body>
</html>
