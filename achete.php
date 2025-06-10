<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8" />
  <title>Acheter - Agence Immobilière</title>
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
        Section actuelle : Acheter
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
    <img src="images/OP.jpg" alt="Immobilier" />
    <div class="carousel-text">Découvrez les meilleurs biens immobiliers à acheter ou louer</div>
  </div>

  <!-- Formulaire de recherche -->
  <div class="search-section">
    <h2>Le coup de cœur immobilier que vous attendiez est peut-être ici…</h2>
    <form id="searchForm" class="row g-3">
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
        <input type="number" id="budget" name="budget" class="form-control" placeholder="Ex: 50000000" min="0" required>
      </div>

      <div class="col-md-6">
        <label for="surface" class="form-label">Surface maximum (m²)</label>
        <input type="number" id="surface" name="surface" class="form-control" placeholder="Ex: 120" min="0" required>
      </div>

      <div class="col-md-6 d-flex align-items-end">
        <button type="submit" class="btn btn-search">Chercher</button>
      </div>
    </form>
  </div>

  <!-- Section Offres Immobilières -->
  <div class="container my-5">
    <h2 class="text-center mb-4 fw-bold text-dark">Nos biens à vendre</h2>
    <div class="row row-cols-1 row-cols-md-3 g-4">

      <!-- Carte 1 -->
      <div class="col">
        <div class="card h-100 shadow-sm">
          <img src="images/2.jpg" class="card-img-top" alt="Immeuble Keur Gorgui">
          <div class="card-body">
            <h5 class="card-title">Immeuble R+2 à vendre - Keur Gorgui</h5>
            <p class="card-text">Prix : 150 000 000 FCFA<br>Surface : 300 m²<br>Emplacement premium proche commodités.</p>
            <button class="btn btn-warning w-100 text-dark fw-bold" data-bs-toggle="modal" data-bs-target="#detailModal1">Voir le détail</button>
          </div>
        </div>
      </div>

      <!-- Carte 2 -->
      <div class="col">
        <div class="card h-100 shadow-sm">
          <img src="images/2.jpeg" class="card-img-top" alt="Appartement Point E">
          <div class="card-body">
            <h5 class="card-title">Appartement à vendre - Point E</h5>
            <p class="card-text">Prix : 95 000 000 FCFA<br>Standing élevé, 3 chambres salon, proche université et commerces.</p>
            <button class="btn btn-warning w-100 text-dark fw-bold" data-bs-toggle="modal" data-bs-target="#detailModal2">Voir le détail</button>
          </div>
        </div>
      </div>

      <!-- Carte 3 -->
      <div class="col">
        <div class="card h-100 shadow-sm">
          <img src="images/7.jpeg" class="card-img-top" alt="Vente sur plan Keur Massar">
          <div class="card-body">
            <h5 class="card-title">Vente sur plan - Keur Massar</h5>
            <p class="card-text">Appartements en construction R+1<br>Possibilité de paiement échelonné sur 12 mois.</p>
            <button class="btn btn-warning w-100 text-dark fw-bold" data-bs-toggle="modal" data-bs-target="#detailModal3">Voir le détail</button>
          </div>
        </div>
      </div>

      <!-- Carte 4 -->
      <div class="col">
        <div class="card h-100 shadow-sm">
          <img src="images/8.jpeg" class="card-img-top" alt="Immeuble entier">
          <div class="card-body">
            <h5 class="card-title">Immeuble entier à vendre</h5>
            <p class="card-text">4 niveaux, 8 appartements loués, idéal pour investisseurs.<br>Situé à Liberté 6 Extension.</p>
            <button class="btn btn-warning w-100 text-dark fw-bold" data-bs-toggle="modal" data-bs-target="#detailModal4">Voir le détail</button>
          </div>
        </div>
      </div>

      <!-- Carte 5 -->
      <div class="col">
        <div class="card h-100 shadow-sm">
          <img src="images/a.jpeg" class="card-img-top" alt="Appartement grand standing">
          <div class="card-body">
            <h5 class="card-title">Appartement grand standing</h5>
            <p class="card-text">F4 moderne avec piscine, sécurité 24h/24<br>Vue dégagée sur la ville, à Fann Résidence.</p>
            <button class="btn btn-warning w-100 text-dark fw-bold" data-bs-toggle="modal" data-bs-target="#detailModal5">Voir le détail</button>
          </div>
        </div>
      </div>

      <!-- Carte 6 -->
      <div class="col">
        <div class="card h-100 shadow-sm">
          <img src="images/f.jpg" class="card-img-top" alt="Vente sur plan - Zone Nord">
          <div class="card-body">
            <h5 class="card-title">Vente sur plan - Zone Nord</h5>
            <p class="card-text">Résidence moderne en cours de finition<br>Studio, F2 et F3 disponibles.</p>
            <button class="btn btn-warning w-100 text-dark fw-bold" data-bs-toggle="modal" data-bs-target="#detailModal6">Voir le détail</button>
          </div>
        </div>
      </div>

    </div>
  </div>

  <!-- Modals pour les détails des biens -->
  <!-- Modal 1 -->
  <div class="modal fade" id="detailModal1" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title">Détails complet - Immeuble R+2 à Keur Gorgui</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <div class="detail-item">
            <span class="detail-label">Type de bien:</span> Immeuble
          </div>
          <div class="detail-item">
            <span class="detail-label">Localisation:</span> Keur Gorgui, Dakar
          </div>
          <div class="detail-item">
            <span class="detail-label">Surface:</span> 300 m²
          </div>
          <div class="detail-item">
            <span class="detail-label">Composition:</span> 
            <ul>
              <li>Rez-de-chaussée commercial</li>
              <li>2 étages d'habitation</li>
              <li>6 appartements au total</li>
              <li>Parking privé</li>
            </ul>
          </div>
          <div class="detail-item">
            <span class="detail-label">Prix:</span> 150 000 000 FCFA (négociable)
          </div>
          <div class="detail-item">
            <span class="detail-label">Description complète:</span>
            <p>Immeuble moderne récemment rénové, situé dans un quartier en plein développement. Idéal pour investisseur ou usage mixte (habitation/commerce). Tous les appartements sont loués avec des baux en cours, assurant un revenu locatif immédiat.</p>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fermer</button>
          <button type="button" class="btn btn-warning">Contacter l'agence</button>
        </div>
      </div>
    </div>
  </div>

  <!-- Ajoutez les modals 2 à 6 avec la même structure mais des contenus différents -->

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
  
  <script>
    // Script pour le formulaire de recherche
    document.getElementById('searchForm').addEventListener('submit', function(e) {
      e.preventDefault();
      
      // Récupérer les valeurs du formulaire
      const lieu = document.getElementById('lieu').value;
      const typeBien = document.getElementById('typeBien').value;
      const budget = document.getElementById('budget').value;
      
      // Afficher une alerte avec les critères de recherche
      alert(`Recherche effectuée avec les critères :\n\nLieu : ${lieu}\nType de bien : ${typeBien}\nBudget maximum : ${budget} FCFA`);
      
      // Ici vous pourriez ajouter une requête AJAX pour récupérer les résultats réels
    });
  </script>
</body>
</html>