<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Services Garage Parrot</title>
    <link rel="stylesheet" href="./services.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" rel="stylesheet" />
</head>

<body>
    <?php include "./header.php"; ?>
    <div class="text-center py-5 quality-text">
        <h2>Découvrez Nos Services</h2>
        <div>
            <p>
                Qualité et expertise pour votre véhicule. Bienvenue chez Garage
                Parrot, où l'excellence rencontre la passion automobile. À la
                diférence des centres de services traditionnels, nous combinons
                expertise technique, technologies de pointe et une approche
                personnalisée pour ofrir à votre véhicule le soin qu'il mérite.
                Découvrez un niveau de service inégalé, où votre satisfaction est
                notre priorité absolue.
            </p>
        </div>
    </div>
    <div class="container mt-5">
        <div class="row reset-horizontal-margin">
            <div class="col-md-4 py-4">
                <div class="card">
                    <img src=".garagistecapot.png" class="card-img-top" alt="Service 1" />
                    <div class="card-body text-center">
                        <h5 class="card-title">Réparation Mécanique</h5>
                        <p class="card-text">Confiez la santé de votre véhicule à notre équipe de mécaniciens experts.
                            Avec des compétences techniques de pointe et un engagement envers la qualité, nous nous efforçons de vous offrir un service fiable et professionnel à chaque visite.
                            Roulez en toute confiance, en sachant que votre véhicule est entre de bonnes mains.</p>
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
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid text-center py-5 quality-text">
        <h2>Voiture d'occasion</h2>
        <img class="d-block w-100" src=".carousel3.png" alt="" />
        <p>
            Explorez notre sélection de voitures d'occasion soigneusement choisies pour répondre à vos besoins et à votre budget.
        </p>
        <p>
            Chez Garage Parrot, chaque véhicule a été méticuleusement inspecté pour assurer une qualité exceptionnelle et une performance fiable.
        <p>
            Que vous recherchiez une berline élégante, un SUV spacieux ou une voiture compacte pour la ville, notre équipe est là pour vous aider à trouver la voiture parfaite pour vous.
        </p>
        <p>
            Avec des options de financement flexibles et un service client de premier ordre, vous pouvez acheter en toute confiance chez nous.
        </p>
        <button class="btn btn-custom"><a href="./voitures.php">Voir les voitures disponibles</a></button>
    </div>
    <?php include("./temoignages.php"); ?>
    <div class="py-5 text-center">
        <img class="d-block w-100" src=".entretienbis.png" alt="" />
        <p>
            Prêt à recevoir le service que votre voiture mérite ? Contactez-nous
            aujourd'hui pour planifer un rendez-vous.
        </p>
        <button class="btn btn-custom"><a href="./contact.php"></a>Contactez-nous</button>
    </div>
    <?php include("./trouver.php"); ?>
    <footer>
        <?php include("./footer.php"); ?>
        <!-- Add Bootstrap JS -->
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>
    </footer>
</body>

</html>