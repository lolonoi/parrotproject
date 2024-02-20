<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Voiture Garage Parrot</title>
    <link rel="stylesheet" href="./voitures.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" rel="stylesheet" />
</head>

<body>
    <?php include "./header.php"; ?>
    <div class="text-center py-5 quality-text">
        <h2>Qualité et Confiance</h2>
        <p>
            Bienvenue dans notre sélection exclusive de voitures d'occasion. Chaque
            véhicule que nous proposons a été méticuleusement inspecté et certifé,
            assurant non seulement la qualité mais aussi la tranquillité d'esprit.</br>
            Nous nous engageons à ofrir une expérience exceptionnelle, avec des
            voitures prêtes à enrichir vos trajets quotidiens.</br> Proftez de notre
            garantie complète et d'un service après-vente réactif, conçus pour vous
            accompagner à chaque kilomètre.
        </p>
    </div>
    <?php include("./cars.php"); ?>
    <div class="py-5">
        <h2>Votre satisfaction Notre Priorité</h2>
        <img class="d-block w-100" src=".carousel2.png" alt="" />
        <div class="card-body">
            <div class="d-flex align-items-center mb-3">
                <i class="fas fa-check fa-2x me-3"></i>
                <p class="mb-0">
                    Inspection Rigoureuse : Chaque voiture passe par une inspection
                    détaillée en 100 points pour garantir une qualité sans compromis.
                </p>
            </div>
            <div class="d-flex align-items-center mb-3">
                <i class="fas fa-shield-alt fa-2x me-3"></i>
                <p class="mb-0">
                    Garantie Complète : Nous ofrons une garantie étendue sur chaque
                    voiture pour vous assurer tranquillité d'esprit et sécurité.
                </p>
            </div>
            <div class="d-flex align-items-center">
                <i class="fas fa-road fa-2x me-3"></i>
                <p class="mb-0">
                    Assistance Routière : Votre sérénité est essentielle, c'est pourquoi
                    une assistance routière est disponible 24/7 avec chaque achat
                </p>
            </div>
        </div>
    </div>
    <?php include("./temoignages.php"); ?>
    <div class="py-5 text-center">
        <img class="d-block w-100" src=".phonecall.png" alt="" />
        <p>
            Trouvez la voiture de vos rêves dès aujourd'hui. Contactez-nous pour
            plus d'informations ou pour planifer un essai.
        </p>
        <button class="btn btn-custom"><a href="./contact.php">Planifez un essai</a></button>
    </div>

    <footer>
        <?php include("./footer.php"); ?>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>
    </footer>
</body>

</html>