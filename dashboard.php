<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8" />
  <title>Dashboard - Agence Immobilière</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" />
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet" />
  <style>
    body {
      margin: 0;
      font-family: 'Poppins', sans-serif;
      background: #f8f9fa;
    }

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

    nav.navbar {
      background-color: rgba(0, 0, 0, 0.9);
    }

    .navbar-nav .nav-link {
      color: white !important;
      font-weight: 600;
      padding: 10px 15px;
    }

    .navbar-nav .nav-link:hover,
    .navbar-nav .nav-link.active {
      background-color: #ffc107;
      color: black !important;
      border-radius: 6px;
    }

    .dropdown-menu {
      background-color: white;
      border-radius: 8px;
      box-shadow: 0 2px 8px rgba(0,0,0,0.15);
    }

    .dropdown-menu .dropdown-item {
      color: #000;
      font-weight: 500;
    }

    .dropdown-menu .dropdown-item:hover {
      background-color: #ffc107;
      color: black;
    }

    .carousel-image {
      width: 100%;
      height: 500px;
      object-fit: cover;
    }

    .carousel-caption {
      position: absolute;
      bottom: 30px;
      left: 50%;
      transform: translateX(-50%);
      font-size: 36px;
      font-weight: bold;
      color: #ffc107;
      background: rgba(0,0,0,0.6);
      padding: 10px 20px;
      border-radius: 10px;
      text-shadow: 0 0 10px black;
    }

    .welcome-box {
      position: absolute;
      top: 20%;
      right: 5%;
      background-color: rgba(255, 255, 255, 0.9);
      color: #000;
      padding: 20px;
      max-width: 300px;
      border-radius: 15px;
      box-shadow: 0 4px 15px rgba(0,0,0,0.3);
      animation: fadeInMove 2s ease-in-out forwards, float 3s ease-in-out infinite;
      opacity: 0;
      animation-fill-mode: forwards;
    }

    @keyframes fadeInMove {
      0% {
        opacity: 0;
        transform: translateY(20px);
      }
      100% {
        opacity: 1;
        transform: translateY(0);
      }
    }

    @keyframes float {
      0%, 100% {
        transform: translateY(0);
      }
      50% {
        transform: translateY(-5px);
      }
    }

    .presentation-section {
      margin: 60px auto;
      padding: 30px;
      max-width: 1200px;
      text-align: center;
      background-color: white;
      border-radius: 15px;
      box-shadow: 0 4px 10px rgba(0,0,0,0.1);
    }

    .presentation-section h2 {
      color: #343a40;
      margin-bottom: 20px;
    }
 @media(max-width: 768px) {
  .full-width-video {
    width: 900% !important;  /* forcer la largeur à 100% */
    height: 700px;
    max-height: none;
    margin: 0 auto;          /* margin horizontal à zéro */
    display: block;
  }
}


    @media(max-width: 768px) {
      .welcome-box {
        top: auto;
        bottom: 10%;
        right: 50%;
        transform: translateX(50%);
      }

      .carousel-caption {
        font-size: 22px;
      }

      .carousel-image,
      .full-width-video {
        height: 300px;
      }

      .top-bar {
        flex-direction: column;
        align-items: flex-start;
        gap: 10px;
      }
    }
    @media(max-width: 768px) {
  body {
    margin: 0;
    padding: 0;
  }}

.video-container {
  width: 100%;
  aspect-ratio: 16/9; /* Ratio classique 16:9 (comme YouTube) */
  overflow: hidden;
}

.video-container video {
  width: 100%;
  height: 100%;
  object-fit: cover;
}
  </style>
</head>
<body>

  <!-- Coordonnées -->
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

  <!-- ... (toute la partie de ton code inchangée avant ici) -->

<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-dark">
  <div class="container">
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse justify-content-center" id="navbarNav">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item"><a class="nav-link active" href="#">Home</a></li>

        <!-- Menu Acheter modifié -->
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="acheterDropdown" role="button" data-bs-toggle="dropdown">Acheter</a>
          <ul class="dropdown-menu" aria-labelledby="acheterDropdown">
            <li><a class="dropdown-item" href="achete.php?type=appartement">Appartement</a></li>
            <li><a class="dropdown-item" href="achete.php?type=villa">Villa</a></li>
            <li><a class="dropdown-item" href="achete.php?type=terrain">Terrain</a></li>
            <li><a class="dropdown-item" href="achete.php?type=commercial">Local commercial</a></li>
          </ul>
        </li>

        <!-- Louer reste inchangé -->
         <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="louerDropdown" role="button" data-bs-toggle="dropdown">Louer</a>
          <ul class="dropdown-menu" aria-labelledby="louerDropdown">
            <li><a class="dropdown-item" href="louer.php?type=appartement">Appartement</a></li>
            <li><a class="dropdown-item" href="louer.php?type=villa">Villa</a></li>
            <li><a class="dropdown-item" href="louer.php?type=terrain">Terrain</a></li>
            <li><a class="dropdown-item" href="louer.php?type=commercial">Local commercial</a></li>
          </ul>
        </li>

        <li class="nav-item"><a class="nav-link" href="vendre.php">Vendre</a></li>
        <li class="nav-item"><a class="nav-link" href="fairegerer.php">Faire gérer</a></li>
        <li class="nav-item"><a class="nav-link" href="apropos.php">À propos</a></li>
        <li class="nav-item"><a class="nav-link" href="contact.php">Contact</a></li>
      </ul>

      <form class="d-flex me-3" role="search" onsubmit="event.preventDefault(); alert('Recherche lancée pour : ' + this.query.value);">
        <input class="form-control me-2" type="search" name="query" placeholder="Rechercher" aria-label="Rechercher" />
        <button class="btn btn-warning" type="submit">Rechercher</button>
      </form>
      <a href="connexion.php" class="btn btn-outline-warning">Connexion</a>
    </div>
  </div>
</nav>

<!-- ... (tout le reste de ton code inchangé après ici) -->


  <!-- Carousel -->
  <div class="carousel-container position-relative">
    <img id="carousel-img" class="carousel-image" src="https://images.unsplash.com/photo-1494526585095-c41746248156?auto=format&fit=crop&w=1740&q=80" alt="Appartement" />
    <div class="carousel-caption" id="carousel-caption">Appartement</div>

    <!-- Boîte de bienvenue -->
    <div class="welcome-box">
      <h4>Bienvenue à la Sénégalaise de l’Immobilier !</h4>
      <p>Là où vos rêves trouvent leur maison.<br><strong>Nio far ! 🏡🇸🇳</strong></p>
    </div>
  </div>

  <!-- Présentation -->
  <div class="presentation-section">
    <h2>Notre Agence Immobilière</h2>
    <p>À la Sénégalaise de l’Immobilier, nous vous accompagnons dans toutes vos démarches : achat, vente, location ou gestion de biens. Notre équipe vous guide avec expertise et professionnalisme.</p>
  </div>

  <!-- Vidéo -->

<<div class="video-container">
  <video src="Wh2.mp4" autoplay muted loop playsinline></video>
</div>

  <!-- Script du carousel -->
  <script>
    const slides = [
      { src: 'https://images.unsplash.com/photo-1494526585095-c41746248156?auto=format&fit=crop&w=1740&q=80', caption: 'Appartement' },
      { src: 'https://images.unsplash.com/photo-1560448204-e02f11c3d0e2?auto=format&fit=crop&w=1740&q=80', caption: 'Studio' }
    ];
    let currentIndex = 0;
    const imgElement = document.getElementById('carousel-img');
    const captionElement = document.getElementById('carousel-caption');
    function showSlide(index) {
      currentIndex = (index + slides.length) % slides.length;
      imgElement.src = slides[currentIndex].src;
      captionElement.textContent = slides[currentIndex].caption;
    }
    setInterval(() => showSlide(currentIndex + 1), 5000);
    showSlide(currentIndex);
  </script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
  
</body>
</html>
