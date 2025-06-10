<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Accueil | Agence Immo</title>

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">

  <!-- Bootstrap -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

  <style>
    body, html {
      margin: 0;
      padding: 0;
      height: 100%;
      font-family: 'Poppins', sans-serif;
      overflow: hidden;
    }

    .slider {
      position: fixed;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      z-index: -2;
    }

    .slide {
      position: absolute;
      width: 100%;
      height: 100%;
      background-size: cover;
      background-position: center;
      opacity: 0;
      transition: opacity 1s ease-in-out;
    }

    .slide.active {
      opacity: 1;
    }

    .overlay {
      background-color: rgba(0, 0, 0, 0.6);
      position: fixed;
      top: 0;
      left: 0;
      height: 100%;
      width: 100%;
      z-index: -1;
    }

    .content {
      position: relative;
      z-index: 1;
      padding-top: 150px;
      text-align: center;
      color: white;
    }

    .btn-custom {
      background-color: #28a745;
      border: none;
    }
    .btn-custom:hover {
      background-color: #218838;
    }

    @media (max-width: 768px) {
      .content h1 {
        font-size: 2rem;
      }
    }
  </style>
</head>
<body>

  <!-- Slider en arrière-plan -->
  <div class="slider">
    <div class="slide active" style="background-image: url('https://www.immo-gaia.com/wp-content/uploads/2023/01/vendre-louer-son-bien-immobilier-dakar-2.jpg')"></div> 
    <div class="slide" style="background-image: url('https://www.immo-gaia.com/wp-content/uploads/2023/01/slider-gaia-immobilier-8.jpg')"></div>
    <div class="slide" style="background-image: url('https://www.immo-gaia.com/wp-content/uploads/2023/01/slider-gaia-immobilier-7.jpg')"></div>

  </div>

  <!-- Overlay sombre -->
  <div class="overlay"></div>

  <!-- Contenu principal -->
  <div class="content">
    <h1 class="display-4">Bienvenue à l'Agence Immobilière</h1>
    <p class="lead">Gérez facilement vos biens, clients et transactions</p>
    <a href="dashboard.php" class="btn btn-custom btn-lg mt-4">Accéder au tableau de bord</a><br>
  </div>

  <!-- JS Bootstrap + Slider -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
  <script>
    let currentSlide = 0;
    const slides = document.querySelectorAll('.slide');

    function nextSlide() {
      slides[currentSlide].classList.remove('active');
      currentSlide = (currentSlide + 1) % slides.length;
      slides[currentSlide].classList.add('active');
    }

    setInterval(nextSlide, 5000); // Change every 5 seconds
  </script>
</body>
</html>
