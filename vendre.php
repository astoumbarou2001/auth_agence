<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Vendre un Bien - Professionnel</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f0f2f5;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }

        h2 {
            color: #2c3e50;
            font-weight: bold;
            text-align: center;
        }

        .form-container {
            max-width: 800px;
            margin: 0 auto;
        }

        form {
            background-color: #ffffff;
            padding: 30px;
            border-radius: 15px;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.08);
        }

        label {
            font-weight: 500;
        }

        .btn-success {
            width: 100%;
            font-weight: bold;
            font-size: 16px;
        }

        .carousel-container img {
            max-height: 400px;
            object-fit: cover;
        }

        nav.navbar {
            border-bottom: 1px solid #ddd;
        }

        .container.mt-5 {
            margin-top: 40px !important;
        }
    </style>
</head>
<body>

    <!-- Barre de navigation -->
    <nav class="navbar navbar-light bg-light shadow-sm">
        <div class="container-fluid">
            <a href="dashboard.php" class="btn btn-outline-secondary">
                ← Tableau de bord
            </a>
            <span class="navbar-text fw-bold">
                Section actuelle : vendre
            </span>
        </div>
    </nav>

    <!-- Image en haut de page -->
    <div class="carousel-container position-relative">
        <img src="images/OP.jpg" class="d-block w-100" alt="Slide 1">
    </div>

    <!-- Formulaire -->
    <div class="container mt-5 form-container">
        <h2 class="mb-4">Déposer une annonce - Professionnel</h2>

        <form id="annonceForm">
            <div class="mb-3">
                <label>Nom de l'agence / professionnel</label>
                <input type="text" name="nom_agence" id="nom_agence" class="form-control" required>
            </div>

            <div class="mb-3">
                <label>Email de contact</label>
                <input type="email" name="email" id="email" class="form-control" required>
            </div>

            <div class="mb-3">
                <label>Téléphone</label>
                <input type="text" name="telephone" id="telephone" class="form-control" required>
            </div>

            <div class="mb-3">
                <label>Type de bien</label>
                <select name="type_bien" id="type_bien" class="form-control" required>
                    <option>Appartement</option>
                    <option>Villa</option>
                    <option>Terrain</option>
                    <option>Immeuble</option>
                    <option>Local commercial</option>
                </select>
            </div>

            <div class="mb-3">
                <label>Adresse du bien</label>
                <input type="text" name="adresse" id="adresse" class="form-control" required>
            </div>

            <div class="mb-3">
                <label>Ville / Quartier</label>
                <input type="text" name="ville" id="ville" class="form-control" required>
            </div>

            <div class="mb-3">
                <label>Superficie (en m²)</label>
                <input type="number" name="superficie" id="superficie" class="form-control" required>
            </div>

            <div class="mb-3">
                <label>Nombre de pièces</label>
                <input type="number" name="pieces" id="pieces" class="form-control" required>
            </div>

            <div class="mb-3">
                <label>Nombre de salles de bain</label>
                <input type="number" name="sdb" id="sdb" class="form-control">
            </div>

            <div class="mb-3">
                <label>Prix demandé (en FCFA)</label>
                <input type="number" name="prix" id="prix" class="form-control" required>
            </div>

            <div class="mb-3">
                <label>Description</label>
                <textarea name="description" id="description" class="form-control" rows="4" required></textarea>
            </div>

            <div class="mb-3">
                <label>Photos du bien</label>
                <input type="file" name="photo[]" id="photos" class="form-control" multiple required>
            </div>

            <button type="submit" class="btn btn-success">Publier l'annonce</button>
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    
    <script>
        document.getElementById('annonceForm').addEventListener('submit', function(e) {
            e.preventDefault();
            
            // Récupération des valeurs du formulaire
            const formData = {
                nom_agence: document.getElementById('nom_agence').value,
                email: document.getElementById('email').value,
                telephone: document.getElementById('telephone').value,
                type_bien: document.getElementById('type_bien').value,
                adresse: document.getElementById('adresse').value,
                ville: document.getElementById('ville').value,
                superficie: document.getElementById('superficie').value,
                pieces: document.getElementById('pieces').value,
                sdb: document.getElementById('sdb').value,
                prix: document.getElementById('prix').value,
                description: document.getElementById('description').value,
                photos: document.getElementById('photos').files.length
            };
            
            // Affichage des données dans la console
            console.log('Annonce soumise:', formData);
            
            // Message de confirmation
            alert(`Merci ${formData.nom_agence} ! Votre annonce pour ${formData.type_bien} à ${formData.ville} a bien été enregistrée. Nous vous contacterons au ${formData.telephone} ou à ${formData.email}.`);
            
            // Réinitialisation du formulaire
            this.reset();
        });
    </script>
</body>
</html>