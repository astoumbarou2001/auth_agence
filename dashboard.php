<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8" />
  <title>Dashboard - Agence Immobilière</title>
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
      padding: 10px 30px;
      display: flex;
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

    .carousel-container {
      margin-top: 50px;
      position: relative;
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

    .carousel-arrow {
      position: absolute;
      top: 50%;
      transform: translateY(-50%);
      font-size: 40px;
      color: white;
      background: rgba(0, 0, 0, 0.4);
      border-radius: 50%;
      width: 50px;
      height: 50px;
      line-height: 50px;
      text-align: center;
      cursor: pointer;
      user-select: none;
      transition: background 0.3s;
    }

    .carousel-arrow:hover {
      background: #ffc107;
      color: black;
    }

    .carousel-arrow.left {
      left: 20px;
    }

    .carousel-arrow.right {
      right: 20px;
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

    .presentation-section p {
      font-size: 16px;
      color: #555;
      margin-bottom: 30px;
    }

    .full-width-video {
  width: 100%;
  height: 900px;
  margin: 40px auto;
  
  object-fit: cover;
  display: block;
  transform: scale(0.90); /* 0.8 ou 0.75 pour plus petit */
  transform-origin: center;
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
  </style>
</head>
<body>

  <!-- Coordonnées en haut -->
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

  <!-- Navbar -->
  <nav class="navbar">
    <div class="nav-links">
      <a href="#" class="active">Home</a>
      <a href="acheter.php">Acheter</a>
      <a href="louer.php">Louer</a>
      <a href="vendre.php">Vendre</a>
      <a href="fairegerer.php">Faire gérer</a>
      <a href="apropos.php">À propos de nous</a>
      <a href="contact.php">Nous contacter</a>
    </div>
  </nav>

  <!-- Carousel -->
  <div class="carousel-container">
    <img id="carousel-img" class="carousel-image" src="https://images.unsplash.com/photo-1494526585095-c41746248156?auto=format&fit=crop&w=1740&q=80" alt="Appartement" />
    <div class="carousel-caption" id="carousel-caption">Appartement</div>
    <div class="carousel-arrow left" id="prev">&#10094;</div>
    <div class="carousel-arrow right" id="next">&#10095;</div>

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

  <!-- Vidéo en pleine largeur -->
  <video autoplay muted loop class="full-width-video">
    <source src="Wh2.mp4" type="video/mp4" />
    Votre navigateur ne supporte pas la lecture de la vidéo.
  </video>

  <!-- Script du carousel -->
  <script>
    const slides = [
      {
        src: 'https://images.unsplash.com/photo-1494526585095-c41746248156?auto=format&fit=crop&w=1740&q=80',
        caption: 'Appartement'
      },
      {
        src: 'https://images.unsplash.com/photo-1560448204-e02f11c3d0e2?auto=format&fit=crop&w=1740&q=80',
        caption: 'Studio'
      }
    ];

    let currentIndex = 0;
    const imgElement = document.getElementById('carousel-img');
    const captionElement = document.getElementById('carousel-caption');
    const prevBtn = document.getElementById('prev');
    const nextBtn = document.getElementById('next');

    function showSlide(index) {
      currentIndex = (index + slides.length) % slides.length;
      imgElement.src = slides[currentIndex].src;
      captionElement.textContent = slides[currentIndex].caption;
    }

    prevBtn.addEventListener('click', () => showSlide(currentIndex - 1));
    nextBtn.addEventListener('click', () => showSlide(currentIndex + 1));

    setInterval(() => showSlide(currentIndex + 1), 5000);
    showSlide(currentIndex);
  </script>

</body>
</html>
