<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8" />
  <title>Faire gérer - Agence Immobilière</title>
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

    /* Section principale */
    .main-section {
      max-width: 1100px;
      margin: 50px auto;
      padding: 20px;
      background: white;
      border-radius: 12px;
      box-shadow: 0 4px 20px rgba(0,0,0,0.1);
      display: flex;
      gap: 40px;
      flex-wrap: wrap;
    }

    .main-text {
      flex: 1 1 55%;
      color: #343a40;
      font-size: 1.2rem;
      line-height: 1.7;
    }

    .main-text h2 {
      font-weight: 700;
      border-bottom: 4px solid #ffc107;
      padding-bottom: 12px;
      margin-bottom: 20px;
    }

    /* Formulaire */
    .form-container {
      flex: 1 1 40%;
    }

    form .form-group {
      margin-bottom: 15px;
    }

    form label {
      font-weight: 600;
      margin-bottom: 6px;
      display: block;
    }

    form input, form textarea {
      width: 100%;
      padding: 10px 12px;
      border: 1.5px solid #ced4da;
      border-radius: 6px;
      font-size: 1rem;
      transition: border-color 0.3s;
    }

    form input:focus, form textarea:focus {
      outline: none;
      border-color: #ffc107;
      box-shadow: 0 0 5px #ffc107aa;
    }

    form textarea {
      resize: vertical;
      min-height: 120px;
    }

    form button {
      background-color: #ffc107;
      border: none;
      color: black;
      font-weight: 700;
      padding: 12px 20px;
      border-radius: 8px;
      cursor: pointer;
      transition: background-color 0.3s;
      width: 100%;
      font-size: 1.1rem;
    }

    form button:hover {
      background-color: #e0a800;
    }

    @media (max-width: 900px) {
      .main-section {
        flex-direction: column;
        margin: 30px 15px;
      }
      .main-text, .form-container {
        flex: 1 1 100%;
      }
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
      Section actuelle : Faire gerer
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

  <!-- Section principale -->
  <div class="main-section">
    <!-- Texte -->
    <div class="main-text">
      <h2>Pourquoi nous confier votre bien ?</h2>
      <p>
        Confier la gestion de votre bien immobilier à notre agence, c'est choisir la tranquillité d'esprit. Nous assurons un suivi rigoureux et personnalisé de chaque étape : de la mise en location, la sélection rigoureuse des locataires, la perception des loyers, à l'entretien et à la valorisation de votre patrimoine.  
      </p>
      <p>
        Notre équipe expérimentée connaît parfaitement le marché local et s'engage à défendre vos intérêts avec transparence et professionnalisme. Grâce à notre large réseau et nos outils modernes, nous maximisons la rentabilité de votre bien tout en minimisant les risques liés à la gestion locative.
      </p>
      <p>
        En nous confiant votre bien, vous bénéficiez également de rapports réguliers et d'un service client disponible pour répondre à toutes vos questions. Vous pouvez ainsi vous concentrer sur vos projets pendant que nous nous occupons de tout.
      </p>
    </div>

    <!-- Formulaire -->
    <div class="form-container">
      <form id="contactForm">
        <div class="form-group">
          <label for="nom">Nom</label>
          <input type="text" id="nom" name="nom" required />
        </div>
        <div class="form-group">
          <label for="prenom">Prénom</label>
          <input type="text" id="prenom" name="prenom" required />
        </div>
        <div class="form-group">
          <label for="email">Adresse Email</label>
          <input type="email" id="email" name="email" required />
        </div>
        <div class="form-group">
          <label for="telephone">Téléphone</label>
          <input type="tel" id="telephone" name="telephone" required />
        </div>
        <div class="form-group">
          <label for="message">Message</label>
          <textarea id="message" name="message" placeholder="Écrivez votre demande ou vos questions ici..." required></textarea>
        </div>
        <button type="submit">Envoyer</button>
      </form>
    </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
  
  <script>
    document.getElementById('contactForm').addEventListener('submit', function(e) {
      e.preventDefault();
      
      // Récupération des valeurs du formulaire
      const nom = document.getElementById('nom').value;
      const prenom = document.getElementById('prenom').value;
      const email = document.getElementById('email').value;
      const telephone = document.getElementById('telephone').value;
      const message = document.getElementById('message').value;
      
      // Affichage des données dans la console (à remplacer par un envoi réel en production)
      console.log('Formulaire soumis :', {
        nom,
        prenom,
        email,
        telephone,
        message
      });
      
      // Message de confirmation à l'utilisateur
      alert('Merci ' + prenom + ' ' + nom + ' ! Votre demande a bien été envoyée. Nous vous contacterons bientôt à l\'adresse ' + email + ' ou au ' + telephone + '.');
      
      // Réinitialisation du formulaire
      this.reset();
    });
  </script>
</body>
</html>