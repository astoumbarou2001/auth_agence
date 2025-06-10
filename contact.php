
<?php
$successMessage = "";

$conn = new mysqli("localhost", "root", "", "agence_immo");
if ($conn->connect_error) {
    die("Erreur de connexion à la base : " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $conn->real_escape_string(trim($_POST['name']));
    $email = $conn->real_escape_string(trim($_POST['email']));
    $subject = $conn->real_escape_string(trim($_POST['subject']));
    $message = $conn->real_escape_string(trim($_POST['message']));

    $sql = "INSERT INTO contacts (name, email, subject, message) VALUES ('$name', '$email', '$subject', '$message')";
    if ($conn->query($sql) === TRUE) {
        $successMessage = "Merci, votre message a bien été envoyé !";
    } else {
        $successMessage = "Erreur lors de l'envoi du message : " . $conn->error;
    }
}

$conn->close();
?>

<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8" />
  <title>Contact - Agence Immobilière</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" />
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet" />
  <style>
    /* Ton CSS ici, inchangé */
    body {
      margin: 0;
      font-family: 'Poppins', sans-serif;
      background: #f8f9fa;
    }

    .top-bar {
      background-color: #343a40;
      color: white;
      padding: 8px 30px;
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

    .top-bar a {
      color: white;
      text-decoration: none;
    }

    nav.navbar {
      background-color: #000;
      padding: 10px 30px;
      color: white;
    }

    .carousel-container {
      position: relative;
      width: 100%;
      max-height: 400px;
      overflow: hidden;
    }

    .carousel-container img {
      width: 100%;
      height: auto;
      object-fit: cover;
      display: block;
    }

    .carousel-text {
      position: absolute;
      bottom: 20px;
      left: 30px;
      background-color: rgba(0, 0, 0, 0.6);
      color: white;
      padding: 15px 25px;
      font-size: 22px;
      font-weight: 600;
      border-radius: 10px;
    }

    .contact-container {
      max-width: 1100px;
      margin: 60px auto;
      background: white;
      border-radius: 15px;
      box-shadow: 0 4px 20px rgba(0,0,0,0.1);
      display: flex;
      overflow: hidden;
    }

    .contact-image {
      width: 450px;
      background-image: url('https://via.placeholder.com/450x450.png?text=Test+Image');
      background-size: cover;
      background-position: center;
      background-repeat: no-repeat;
      background-color: #ddd;
    }

    .contact-form {
      flex: 1;
      padding: 50px;
      background: #ffffff;
      display: flex;
      flex-direction: column;
      justify-content: center;
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

    .contact-form input,
    .contact-form textarea {
      width: 100%;
      padding: 12px 15px;
      margin-top: 5px;
      border: 1.5px solid #ddd;
      border-radius: 8px;
      font-size: 15px;
      transition: border-color 0.3s;
    }

    .contact-form input:focus,
    .contact-form textarea:focus {
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
        margin: 30px 20px;
      }

      .contact-image {
        width: 100%;
        height: 300px;
      }

      .contact-form {
        padding: 30px 20px;
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
        Section actuelle : Contact
      </span>
    </div>
  </nav>

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

  <div class="carousel-container">
    <img src="images/OP.jpg" alt="Immobilier" />
    <div class="carousel-text">Pour toute question ou assistance, n’hésitez pas à nous contacter</div>
  </div>

  <div class="contact-container">
    <div class="contact-image"></div>
    <div class="contact-form">
      <h2>Contactez-nous</h2>

      <?php if (!empty($successMessage)) : ?>
          <div class="alert alert-success" role="alert" style="margin-bottom: 20px;">
              <?= htmlspecialchars($successMessage) ?>
          </div>
      <?php endif; ?>

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
