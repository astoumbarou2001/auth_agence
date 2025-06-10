<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8" />
  <title>Louer - Agence Immobilière</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" />
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet" />
  <style>
    body {
      margin: 0;
      font-family: 'Poppins', sans-serif;
      background: #f8f9fa;
    }
    /* En-tête identique */
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
      width: 100%;
      display: flex;
      align-items: center;
      justify-content: center;
    }
    nav.navbar .nav-links {
      display: flex;
      gap: 20px;
      margin-top: 40px;
      flex-wrap: wrap;
      justify-content: center;
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
    
    /* Carousel */
    .carousel-container {
      position: relative;
      width: 100%;
      max-height: 450px;
      overflow: hidden;
    }
    .carousel-container img {
      width: 100%;
      height: 450px;
      object-fit: cover;
    }
    .carousel-text {
      position: absolute;
      top: 20%;
      left: 50%;
      transform: translateX(-50%);
      color: white;
      font-size: 2.5rem;
      font-weight: 700;
      background-color: rgba(0,0,0,0.5);
      padding: 10px 20px;
      border-radius: 8px;
      user-select: none;
      max-width: 90%;
      text-align: center;
    }
    /* Formulaire de recherche */
    .search-section {
      max-width: 900px;
      margin: 40px auto;
      background: white;
      padding: 30px;
      border-radius: 12px;
      box-shadow: 0 4px 20px rgba(0,0,0,0.1);
    }
    .search-section h2 {
      font-weight: 700;
      margin-bottom: 25px;
      color: #343a40;
      text-align: center;
      border-bottom: 3px solid #ffc107;
      padding-bottom: 10px;
    }
    .form-group label {
      font-weight: 600;
      color: #343a40;
    }
    .btn-search {
      background-color: #ffc107;
      color: black;
      font-weight: 700;
      padding: 12px 30px;
      border: none;
      border-radius: 8px;
      transition: background-color 0.3s;
      width: 100%;
      max-width: 200px;
      margin: 20px auto 0 auto;
      display: block;
    }
    .btn-search:hover {
      background-color: #e6b007;
      color: black;
    }
    /* Section résultat */
    .results-section {
      max-width: 900px;
      margin: 40px auto 60px auto;
      background: white;
      padding: 30px;
      border-radius: 12px;
      box-shadow: 0 4px 20px rgba(0,0,0,0.1);
      text-align: center;
      font-size: 1.2rem;
      color: #343a40;
      font-weight: 600;
    }
    @media (max-width: 600px) {
      .carousel-text {
        font-size: 1.8rem;
        padding: 8px 12px;
      }
      .search-section, .results-section {
        margin: 20px 10px 40px 10px;
        padding: 20px;
      }
      nav.navbar .nav-links {
        margin-top: 20px;
      }
    }
    .card-img-top {
      height: 250px;
      object-fit: cover;
    }
    /* Modal styles */
    .modal-body .detail-item {
      margin-bottom: 15px;
      padding-bottom: 15px;
      border-bottom: 1px solid #eee;
    }
    .modal-body .detail-item:last-child {
      border-bottom: none;
    }
    .detail-label {
      font-weight: 600;
      color: #343a40;
    }
  </style>
</head>
<body>
    <nav class="navbar navbar-light bg-light shadow-sm">
      <div class="container-fluid">
        <a href="dashboard.php" class="btn btn-outline-secondary">
          ← Tableau de bord
        </a>
        <span class="navbar-text">
          Section actuelle : louer
        </span>
      </div>
    </nav>

    <!-- Top bar -->
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

    <!-- Carousel immobilier -->
    <div class="carousel-container position-relative">
      <img src="images/OP.jpg" class="d-block w-100" alt="Slide 1">
      <div class="carousel-text">Trouvez la location idéale parmi nos offres exclusives</div>
    </div>

    <!-- Formulaire de recherche original -->
    <div class="search-section">
      <h2>Votre futur logement à louer vous attend ici !</h2>
      <form id="searchForm" action="resultats.php" method="GET" class="row g-3">

        <div class="col-md-6">
          <label for="lieu" class="form-label">Lieu</label>
          <input type="text" id="lieu" name="lieu" class="form-control" placeholder="Ex: Dakar, Mermoz..." required>
        </div>

        <div class="col-md-6">
          <label for="typeBien" class="form-label">Type de bien</label>
          <select id="typeBien" name="typeBien" class="form-select" required>
            <option value="" disabled selected>Choisissez un type</option>
            <option value="villa">Villa</option>
            <option value="terrain">Terrain</option>
            <option value="local_commercial">Local commercial</option>
            <option value="appartement">Appartement</option>
            <option value="bureau">Bureau</option>
          </select>
        </div>

        <div class="col-md-4">
          <label for="chambres" class="form-label">Chambres</label>
          <select id="chambres" name="chambres" class="form-select" required>
            <option value="" disabled selected>Nombre</option>
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4_plus">4+</option>
          </select>
        </div>

        <div class="col-md-4">
          <label for="toilettes" class="form-label">Toilettes</label>
          <select id="toilettes" name="toilettes" class="form-select" required>
            <option value="" disabled selected>Nombre</option>
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3_plus">3+</option>
          </select>
        </div>

        <div class="col-md-4">
          <label for="budget" class="form-label">Budget maximum (FCFA)</label>
          <input type="number" id="budget" name="budget" class="form-control" placeholder="Ex: 5000000" min="0" required>
        </div>

        <div class="col-md-6">
          <label for="surface" class="form-label">Surface minimum (m²)</label>
          <input type="number" id="surface" name="surface" class="form-control" placeholder="Ex: 100" min="0" required>
        </div>

        <div class="col-md-6 d-flex align-items-end">
          <button type="submit" class="btn btn-search">Rechercher une location</button>
        </div>

      </form>
    </div>

    <!-- Section : Nos biens à louer -->
    <div class="container my-5">
      <h2 class="text-center mb-4" style="font-weight:700; color:#343a40; border-bottom:3px solid #ffc107; padding-bottom:10px;">
        Nos biens à louer
      </h2>
      <div class="row g-4 justify-content-center">

        <!-- Carte 1 -->
        <div class="col-md-4">
          <div class="card shadow-sm">
            <img src="images/R.jpeg" class="card-img-top" alt="Appartement à louer">
            <div class="card-body">
              <h5 class="card-title">Appartement moderne à Mermoz</h5>
              <p class="card-text">3 chambres, 2 toilettes, balcon avec vue panoramique.</p>
              <p class="text-warning fw-bold">Loyer : 800 000 FCFA / mois</p>
              <button class="btn btn-warning w-100 text-dark fw-bold" data-bs-toggle="modal" data-bs-target="#detailModal1">Voir le détail</button>
            </div>
          </div>
        </div>

        <!-- Carte 2 -->
        <div class="col-md-4">
          <div class="card shadow-sm">
            <img src="images/capture-ecran.jpg" class="card-img-top" alt="Villa à louer">
            <div class="card-body">
              <h5 class="card-title">Villa spacieuse à Yoff</h5>
              <p class="card-text">4 chambres, jardin, piscine, sécurisée 24h/24.</p>
              <p class="text-warning fw-bold">Loyer : 1 500 000 FCFA / mois</p>
              <button class="btn btn-warning w-100 text-dark fw-bold" data-bs-toggle="modal" data-bs-target="#detailModal2">Voir le détail</button>
            </div>
          </div>
        </div>

        <!-- Carte 3 -->
        <div class="col-md-4">
          <div class="card shadow-sm">
            <img src="images/52.jpg" class="card-img-top" alt="Local commercial à louer">
            <div class="card-body">
              <h5 class="card-title">Local commercial à Plateau</h5>
              <p class="card-text">Espace ouvert, accès facile, idéal pour boutique ou bureau.</p>
              <p class="text-warning fw-bold">Loyer : 900 000 FCFA / mois</p>
              <button class="btn btn-warning w-100 text-dark fw-bold" data-bs-toggle="modal" data-bs-target="#detailModal3">Voir le détail</button>
            </div>
          </div>
        </div>

      </div>
    </div>

    <!-- Modal pour les détails du bien 1 -->
    <div class="modal fade" id="detailModal1" tabindex="-1" aria-hidden="true">
      <div class="modal-dialog modal-lg">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title">Détails complet - Appartement moderne à Mermoz</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <div class="detail-item">
              <span class="detail-label">Type de bien:</span> Appartement
            </div>
            <div class="detail-item">
              <span class="detail-label">Localisation:</span> Résidence Les Almadies, Mermoz, Dakar
            </div>
            <div class="detail-item">
              <span class="detail-label">Surface:</span> 120 m²
            </div>
            <div class="detail-item">
              <span class="detail-label">Composition:</span> 
              <ul>
                <li>3 chambres spacieuses</li>
                <li>2 salles de bain</li>
                <li>1 salon-salle à manger</li>
                <li>Cuisine équipée</li>
                <li>Balcon avec vue mer</li>
              </ul>
            </div>
            <div class="detail-item">
              <span class="detail-label">Équipements:</span> 
              <ul>
                <li>Climatisation</li>
                <li>Ascenseur</li>
                <li>Parking sécurisé</li>
                <li>Gardiens 24h/24</li>
              </ul>
            </div>
            <div class="detail-item">
              <span class="detail-label">Loyer:</span> 800 000 FCFA/mois (charges comprises)
            </div>
            <div class="detail-item">
              <span class="detail-label">Disponibilité:</span> Immédiate
            </div>
            <div class="detail-item">
              <span class="detail-label">Description complète:</span>
              <p>Cet appartement lumineux et spacieux offre un cadre de vie exceptionnel avec vue sur l'océan. Situé dans une résidence sécurisée avec piscine et espace fitness, il est proche des écoles internationales, centres commerciaux et restaurants.</p>
            </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fermer</button>
            <button type="button" class="btn btn-warning">Contacter l'agence</button>
          </div>
        </div>
      </div>
    </div>

    <!-- Modal pour les détails du bien 2 -->
    <div class="modal fade" id="detailModal2" tabindex="-1" aria-hidden="true">
      <div class="modal-dialog modal-lg">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title">Détails complet - Villa spacieuse à Yoff</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <div class="detail-item">
              <span class="detail-label">Type de bien:</span> Villa
            </div>
            <div class="detail-item">
              <span class="detail-label">Localisation:</span> Quartier des Almadies, Yoff, Dakar
            </div>
            <div class="detail-item">
              <span class="detail-label">Surface:</span> 350 m² (terrain 600 m²)
            </div>
            <div class="detail-item">
              <span class="detail-label">Composition:</span> 
              <ul>
                <li>4 chambres dont 1 suite parentale</li>
                <li>3 salles de bain</li>
                <li>Grand salon avec cheminée</li>
                <li>Salle à manger</li>
                <li>Cuisine américaine équipée</li>
                <li>Buanderie</li>
              </ul>
            </div>
            <div class="detail-item">
              <span class="detail-label">Équipements:</span> 
              <ul>
                <li>Piscine</li>
                <li>Jardin paysagé</li>
                <li>Garage 2 voitures</li>
                <li>Système d'alarme</li>
                <li>Générateur électrique</li>
              </ul>
            </div>
            <div class="detail-item">
              <span class="detail-label">Loyer:</span> 1 500 000 FCFA/mois
            </div>
            <div class="detail-item">
              <span class="detail-label">Disponibilité:</span> A partir du 1er du mois prochain
            </div>
            <div class="detail-item">
              <span class="detail-label">Description complète:</span>
              <p>Magnifique villa de standing dans un quartier résidentiel calme et sécurisé. La propriété dispose d'un grand espace extérieur arboré et d'une terrasse avec vue sur la piscine. Parfait pour une famille exigeante.</p>
            </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fermer</button>
            <button type="button" class="btn btn-warning">Contacter l'agence</button>
          </div>
        </div>
      </div>
    </div>

    <!-- Modal pour les détails du bien 3 -->
    <div class="modal fade" id="detailModal3" tabindex="-1" aria-hidden="true">
      <div class="modal-dialog modal-lg">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title">Détails complet - Local commercial à Plateau</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <div class="detail-item">
              <span class="detail-label">Type de bien:</span> Local commercial
            </div>
            <div class="detail-item">
              <span class="detail-label">Localisation:</span> Avenue Georges Pompidou, Plateau, Dakar
            </div>
            <div class="detail-item">
              <span class="detail-label">Surface:</span> 85 m²
            </div>
            <div class="detail-item">
              <span class="detail-label">Composition:</span> 
              <ul>
                <li>Espace principal ouvert</li>
                <li>1 bureau</li>
                <li>1 salle de stockage</li>
                <li>1 salle d'eau</li>
                <li>Toilettes</li>
              </ul>
            </div>
            <div class="detail-item">
              <span class="detail-label">Équipements:</span> 
              <ul>
                <li>Climatisation</li>
                <li>Vitrine</li>
                <li>Accès PMR</li>
                <li>Alarme</li>
              </ul>
            </div>
            <div class="detail-item">
              <span class="detail-label">Loyer:</span> 900 000 FCFA/mois (hors charges)
            </div>
            <div class="detail-item">
              <span class="detail-label">Disponibilité:</span> Immédiate
            </div>
            <div class="detail-item">
              <span class="detail-label">Description complète:</span>
              <p>Local commercial idéalement situé en plein cœur du quartier des affaires. Fort passage piéton, visibilité exceptionnelle. Convient pour boutique, agence ou cabinet. Possibilité d'aménagement sur mesure.</p>
            </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fermer</button>
            <button type="button" class="btn btn-warning">Contacter l'agence</button>
          </div>
        </div>
      </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>