<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>header</title>
  <link rel="stylesheet" href="./header.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous" />

  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" rel="stylesheet" />
</head>

<body>
  <header>
    <div class="container-fluid text-center">
      <span>
        <i class="fa-solid fa-phone"></i>
        <a href="tel:+">+33 06 07 08 09 04</a>
      </span>
    </div>
    <!-- Add your header content here, e.g., a navbar -->
    <nav class="navbar navbar-expand-lg navbar-light">
      <div class="container-fluid">
        <!-- Logo -->
        <a class="navbar-brand" href="./index.php">
          <img src=".logoparrot.png" alt="Logo" height="150" />
        </a>

        <!-- Bouton de bascule pour les petits écrans -->
        <button class="navbar-toggler  collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <!-- Menu -->
        <div class="collapse navbar-collapse justify-content-center" id="navbarNav">
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link" href="./index.php">Accueil</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="./services.php">Nos Services</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="./voitures.php">Voitures d'Occasion</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="./contact.php">Contact</a>
            </li>
          </ul>
        </div>

        <!-- Icône de connexion -->
        <div>
          <a href="#" class="nav-link">
            <i class="bi bi-person-circle fs-3"></i>
            <!-- Remplacer par l'icône souhaité -->
          </a>
        </div>
      </div>
    </nav>
    <div id="carouselhome" class="carousel slide" data-bs-ride="carousel">
      <div class="carousel-inner">
        <div class="carousel-item active ">
          <img src=".avantapres.png" class="d-block w-100 " alt="avant après d'une voiture de sport" />
          <div class="carousel-caption ">
            <h1>Redonnez vie à votre voiture</h1>
            <p>
              Des experts en réparation de carrosserie pour restaurer l'éclat
              d'origine de votre véhicule.
            </p>
            <button class="btn btn-custom "><a href="./contact.php">Estimez votre réparation</a></button>
          </div>
        </div>
        <div class="carousel-item">
          <img src=".garagiste.png" class="d-block w-100" alt="mécaniciens souriant a la caméra" />
          <div class="carousel-caption d-block ">
            <h1>Expertise mécanique pour une performance optimale</h1>
            <p>
              Confiez-nous votre véhicule pour une réparation mécanique fiable et de qualité.
            </p>
            <button class="btn btn-custom"><a href="./contact.php">Prenez rendez-vous</a></button>
          </div>
        </div>
        <div class="carousel-item">
          <img src=".entretien.png" class="d-block w-100" alt="inspecton d'un véhicule" />
          <div class="carousel-caption d-block">
            <h1>Préservez la performance et la sécurité</h1>
            <p>
              Un entretien régulier pour garantir la longévité et la sécurité de votre véhicule.
            </p>
            <button class="btn btn-custom"><a href="./contact.php">Planifiez votre entretien</a></button>
          </div>
        </div>
      </div>
      <div class="carousel-home">
        <button type="button" data-bs-target="#carouselhome" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carouselhome" data-bs-slide-to="1" aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#carouselhome" data-bs-slide-to="2" aria-label="Slide 3"></button>
      </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#carouselhome" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#carouselhome" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>
  </header>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>
</body>

</html>