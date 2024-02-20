<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Accueil garage Parrot</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous" />
    <link rel="stylesheet" href="./index.css" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" rel="stylesheet" />
</head>

<body>
    <?php include "./header.php"; ?>
    <main>
        <!-- Add your main content here -->
        <div class="container mt-5">
            <div class="row reset-horizontal-margin ">
                <h2>Nos Services</h2>
                <div class="col-md-4 py-4">
                    <div class="card">
                        <img src=".garagistecapot.png" class="card-img-top" alt="Service 1" />
                        <div class="card-body text-center">
                            <h5 class="card-title">Réparation Mécanique</h5>
                            <p class="card-text">Confiez la santé de votre véhicule à notre équipe de mécaniciens experts.
                                Avec des compétences techniques de pointe et un engagement envers la qualité, nous nous efforçons de vous offrir un service fiable et professionnel à chaque visite.
                                Roulez en toute confiance, en sachant que votre véhicule est entre de bonnes mains.</p>
                            <a href="./services.php" class="btn btn-custom">Découvrir</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 py-4">
                    <div class="card">
                        <img src=".avantapres.png" class="card-img-top" alt="Service 2" />
                        <div class="card-body text-center">
                            <h5 class="card-title">Réparation de Carrosserie</h5>
                            <p class="card-text">Dites adieu aux éraflures, bosses et dommages extérieurs.
                                Notre équipe de spécialistes en réparation de carrosserie travaille avec précision pour redonner à votre voiture son allure d'origine.
                                Confiez-nous votre véhicule et laissez-nous lui redonner son éclat d'antan, pour
                                que vous puissiez rouler avec fierté</p>
                            <a href="./services.php" class="btn btn-custom">Découvrir</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 py-4">
                    <div class="card">
                        <img src=".entretien.png" class="card-img-top" alt="Service 3" />
                        <div class="card-body text-center">
                            <h5 class="card-title">Entretien Régulier</h5>
                            <p class="card-text">Préservez la performance et la longévité de votre véhicule grâce à notre service d'entretien régulier.
                                Nos techniciens qualifiés veillent à ce que chaque aspect de votre voiture soit pris en charge, des vidanges d'huile aux vérifications des freins,
                                en passant par les changements de filtres et bien plus encore. </p>
                            <a href="./services.php" class="btn btn-custom">Découvrir</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="mt-5 m-0 text-center">
            <h2>À propos</h2>
            <div class="row m-0">
                <div class="col-md-6 col-sm-12">
                    <img src=".squadgaragiste.png" alt="À propos image" class="img-fluid" />
                </div>
                <div class="col-md-6 col-sm-12">
                    <p>
                        Bienvenue chez Garage Parrot. Notre passion pour l'automobile et notre engagement envers la qualité nous démarquent.
                        Avec une équipe dévouée et des services fiables, nous sommes là pour répondre à tous vos besoins automobiles.
                        Faites confiance à Garage Parrot pour une expérience inégalée
                    </p>
                </div>
            </div>
        </div>
        <?php include("./cars.php"); ?>
        <?php include("./temoignages.php"); ?>
        <?php include("./form.php");  ?>
    </main>
    <?php include("./trouver.php"); ?>
    <?php include("./footer.php"); ?>
    <!-- Add Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>
</body>

</html>