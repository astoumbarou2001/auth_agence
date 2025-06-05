<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8" />
  <title>À propos de nous - Agence Immobilière</title>
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

    /* Carousel pleine largeur */
    .carousel-container {
      position: relative;
      width: 100%;
      height: 400px;
      overflow: hidden;
    }

    .carousel-container img {
      width: 100%;
      height: 100%;
      object-fit: cover;
    }

    .carousel-text {
      position: absolute;
      top: 50%;
      left: 50%;
      transform: translate(-50%, -50%);
      color: white;
      font-size: 4rem;
      font-weight: 900;
      text-shadow: 2px 2px 8px rgba(0,0,0,0.7);
      user-select: none;
    }

    /* Sections de contenu */
    .content-section {
      max-width: 900px;
      margin: 50px auto;
      padding: 0 20px;
      background: white;
      border-radius: 12px;
      box-shadow: 0 4px 20px rgba(0,0,0,0.1);
    }

    .content-section h3 {
      margin-top: 30px;
      color: #343a40;
      font-weight: 700;
      border-bottom: 3px solid #ffc107;
      padding-bottom: 8px;
    }

    .content-section p {
      color: #555;
      font-size: 1.1rem;
      line-height: 1.6;
      margin-top: 15px;
    }

    @media (max-width: 600px) {
      .carousel-text {
        font-size: 2.5rem;
        padding: 0 10px;
        text-align: center;
      }
      .content-section {
        margin: 30px 10px;
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
      <a href="#" class="active">À propos de nous</a>
      <a href="contact.php">Nous contacter</a>
    </div>
  </nav>

  <!-- Carousel pleine largeur avec image fiable -->
  <div class="carousel-container">
    <img src="https://picsum.photos/1920/400" alt="Immobilier" />
    <div class="carousel-text">À propos de nous</div>
  </div>

  <!-- Sections de contenu -->
  <div class="content-section">
    <h3>Qui sommes-nous ?</h3>
    <p>
      Nous sommes une agence immobilière sénégalaise engagée à offrir un service personnalisé et de qualité à nos clients. Avec plusieurs années d'expérience, notre équipe dynamique et professionnelle vous accompagne dans tous vos projets immobiliers.
    </p>

    <h3>Pourquoi choisir notre agence immobilière ?</h3>
    <p>
      Notre agence se distingue par sa connaissance approfondie du marché local, sa transparence, et son engagement à satisfaire les besoins spécifiques de chaque client. Nous mettons un point d’honneur à établir une relation de confiance durable avec vous.
    </p>

    <h3>Nos missions</h3>
    <p>
      Faciliter l’achat, la vente, la location et la gestion de biens immobiliers en fournissant un accompagnement complet et adapté à chaque étape. Nous visons à simplifier vos démarches tout en vous offrant des conseils avisés et un suivi personnalisé.
    </p>

    <h3>Nos points forts</h3>
    <ul>
      <li>Équipe expérimentée et professionnelle</li>
      <li>Large réseau de partenaires et clients</li>
      <li>Réactivité et disponibilité</li>
      <li>Solutions adaptées à vos besoins</li>
      <li>Transparence et intégrité dans nos transactions</li>
    </ul>
  </div>

</body>
</html>
