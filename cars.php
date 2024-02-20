<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>cars</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous" />
    <link rel="stylesheet" href="./cars.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" rel="stylesheet" />
</head>

<body>
    <div class="mt-5 m-0">
        <h2 class="text-center">Voitures d'occasion</h2>
        <div class="row align-items-center m-0">
            <div class="col-md-3">
                <div class="form-floating mb-3">
                    <select class="form-select" id="floatingSelectyears" aria-label="Filtre par année">
                        <option value="0">Année</option>
                        <option value="2000">2000</option>
                        <option value="2005">2005</option>
                        <option value="2010">2010</option>
                        <option value="2015">2015</option>
                        <option value="2020">2020</option>
                        <option value="2024">2024</option>
                    </select>
                    <label for="floatingSelectyears">Filtre par année</label>
                </div>
            </div>
            <div class="col-md-3">
                <div class="form-floating mb-3">
                    <select class="form-select" id="floatingSelectkil" aria-label="Filtre par kilométrage">
                        <option value="0">Kilométrage</option>
                        <option value="50000">50 000</option>
                        <option value="100000">100 000</option>
                        <option value="150000">150 000</option>
                        <option value="200000">+200 000</option>
                    </select>
                    <label for="floatingSelectkil">Filtre par kilométrage</label>
                </div>
            </div>
            <div class="col-md-3">
                <div class="form-floating mb-3">
                    <select class="form-select" id="floatingSelectprice" aria-label="Filtre par prix">
                        <option value="0">Prix</option>
                        <option value="2000">2 000</option>
                        <option value="4000">4 000</option>
                        <option value="6000">6 000</option>
                        <option value="8000">8 000</option>
                        <option value="10000">+10 000</option>
                    </select>
                    <label for="floatingSelectprice">Filtre par prix</label>
                </div>
            </div>
            <div class="col-md-3">
                <button type="button" class="btn btn-custom w-100">Filtrer</button>
            </div>
        </div>
        <div class="mt-5">
            <div class="row m-0">
                <div class="col text-center">
                    <div class="carousel slide" id="carouselExampleIndicators" data-bs-ride="carousel">
                        <div class="carousel-indicators d-none">
                            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
                            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="3" aria-label="Slide 4"></button>
                        </div>
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <div class="row">
                                    <div class="col-4 col-md-4">
                                        <div class="card h-100">
                                            <img src=".voiture1.png" class="card-img-top" alt="Voiture d'occasion 1" />
                                            <div class="card-body">
                                                <h5 class="card-title">Voiture d'occasion 1</h5>
                                                <p class="card-text">
                                                    Année : 2018, Kilométrage : 50 000 km, Prix : 6 000 €
                                                </p>
                                            </div>
                                            <button type="button" class="btn btn-custom" data-bs-toggle="modal" data-bs-target="#Modal1">
                                                Voir la description
                                            </button>
                                        </div>
                                    </div>
                                    <div class="modal fade" id="Modal1" tabindex="-1" aria-labelledby="Modal1Label" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="Modal1Label">Voiture d'occasion 1</h5>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body">
                                                    <img src=".voiture1.png" alt="Image de la voiture" class="img-fluid">
                                                    Découvrez cette superbe voiture d'occasion, prête à vous emmener vers de nouvelles aventures.
                                                    Avec son design élégant et ses performances fiables, elle offre le parfait équilibre entre style et fonctionnalité.
                                                    Dotée d'un moteur puissant et de fonctionnalités modernes, cette voiture garantit une conduite agréable et confortable à chaque trajet.
                                                    Son intérieur spacieux et bien équipé offre tout le confort et la commodité dont vous avez besoin pour vos déplacements quotidiens.
                                                    Ne manquez pas cette opportunité de posséder une voiture de qualité à un prix abordable. Contactez-nous dès aujourd'hui pour plus d'informations
                                                    ou pour planifier un essai.
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-custom" data-bs-dismiss="modal">Fermer</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-4 col-md-4">
                                        <div class="card h-100">
                                            <img src=".voiture2.png" class="card-img-top" alt="Voiture d'occasion 2" />
                                            <div class="card-body">
                                                <h5 class="card-title">Voiture d'occasion 2</h5>
                                                <p class="card-text">
                                                    Année : 2020, Kilométrage : 30 000 km, Prix : 10 000 €
                                                </p>
                                            </div>
                                            <button type="button" class="btn btn-custom" data-bs-toggle="modal" data-bs-target="#Modal2">
                                                Voir la description
                                            </button>
                                        </div>
                                    </div>

                                    <div class="modal fade" id="Modal2" tabindex="-1" aria-labelledby="Modal2Label" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="Modal2Label">Voiture d'occasion 2</h5>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body">
                                                    <img src=".voiture2.png" alt="Image de la voiture" class="img-fluid">
                                                    Découvrez cette superbe voiture d'occasion, prête à vous emmener vers de nouvelles aventures.
                                                    Avec son design élégant et ses performances fiables, elle offre le parfait équilibre entre style et fonctionnalité.
                                                    Dotée d'un moteur puissant et de fonctionnalités modernes, cette voiture garantit une conduite agréable et confortable à chaque trajet.
                                                    Son intérieur spacieux et bien équipé offre tout le confort et la commodité dont vous avez besoin pour vos déplacements quotidiens.
                                                    Ne manquez pas cette opportunité de posséder une voiture de qualité à un prix abordable. Contactez-nous dès aujourd'hui pour plus d'informations
                                                    ou pour planifier un essai.
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-custom" data-bs-dismiss="modal">Fermer</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-4 col-md-4">
                                        <div class="card h-100">
                                            <img src=".voiture2.png" class="card-img-top" alt="Voiture d'occasion 2" />
                                            <div class="card-body">
                                                <h5 class="card-title">Voiture d'occasion 2</h5>
                                                <p class="card-text">
                                                    Année : 2020, Kilométrage : 30 000 km, Prix : 10 000 €
                                                </p>
                                            </div>
                                            <button type="button" class="btn btn-custom" data-bs-toggle="modal" data-bs-target="#Modal2">
                                                Voir la description
                                            </button>
                                        </div>
                                    </div>
                                    <div class="modal fade" id="Modal2" tabindex="-1" aria-labelledby="Modal2Label" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="Modal2Label">Voiture d'occasion 2</h5>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body">
                                                    <img src=".voiture2.png" alt="Image de la voiture" class="img-fluid">
                                                    Découvrez cette superbe voiture d'occasion, prête à vous emmener vers de nouvelles aventures.
                                                    Avec son design élégant et ses performances fiables, elle offre le parfait équilibre entre style et fonctionnalité.
                                                    Dotée d'un moteur puissant et de fonctionnalités modernes, cette voiture garantit une conduite agréable et confortable à chaque trajet.
                                                    Son intérieur spacieux et bien équipé offre tout le confort et la commodité dont vous avez besoin pour vos déplacements quotidiens.
                                                    Ne manquez pas cette opportunité de posséder une voiture de qualité à un prix abordable. Contactez-nous dès aujourd'hui pour plus d'informations
                                                    ou pour planifier un essai.
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-custom" data-bs-dismiss="modal">Fermer</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-4 col-md-4">
                                        <div class="card h-100">
                                            <img src=".voiture4.png" class="card-img-top" alt="Voiture d'occasion 4" />
                                            <div class="card-body">
                                                <h5 class="card-title">Voiture d'occasion 4</h5>
                                                <p class="card-text">
                                                    Année : 2017, Kilométrage : 60 000 km, Prix : 9 000 €
                                                </p>
                                            </div>
                                            <button type="button" class="btn btn-custom" data-bs-toggle="modal" data-bs-target="#Modal4">
                                                Voir la description
                                            </button>
                                        </div>
                                    </div>
                                    <div class="modal fade" id="Modal4" tabindex="-1" aria-labelledby="Modal4Label" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="Modal4Label">Voiture d'occasion 4</h5>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body">
                                                    <img src=".voiture4.png" alt="Image de la voiture" class="img-fluid">
                                                    Découvrez cette superbe voiture d'occasion, prête à vous emmener vers de nouvelles aventures.
                                                    Avec son design élégant et ses performances fiables, elle offre le parfait équilibre entre style et fonctionnalité.
                                                    Dotée d'un moteur puissant et de fonctionnalités modernes, cette voiture garantit une conduite agréable et confortable à chaque trajet.
                                                    Son intérieur spacieux et bien équipé offre tout le confort et la commodité dont vous avez besoin pour vos déplacements quotidiens.
                                                    Ne manquez pas cette opportunité de posséder une voiture de qualité à un prix abordable. Contactez-nous dès aujourd'hui pour plus d'informations
                                                    ou pour planifier un essai.
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-custom" data-bs-dismiss="modal">Fermer</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-4 col-md-4">
                                        <div class="card h-100">
                                            <img src=".voiture5.png" class="card-img-top" alt="Voiture d'occasion 5" />
                                            <div class="card-body">
                                                <h5 class="card-title">Voiture d'occasion 5</h5>
                                                <p class="card-text">
                                                    Année : 2021, Kilométrage : 15 000 km, Prix : 12 000 €
                                                </p>
                                            </div>
                                            <button type="button" class="btn btn-custom" data-bs-toggle="modal" data-bs-target="#Modal5">
                                                Voir la description
                                            </button>
                                        </div>
                                    </div>
                                    <div class="modal fade" id="Modal5" tabindex="-1" aria-labelledby="Modal5Label" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="Modal5Label">Voiture d'occasion 5</h5>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body">
                                                    <img src=".voiture5.png" alt="Image de la voiture" class="img-fluid">
                                                    Découvrez cette superbe voiture d'occasion, prête à vous emmener vers de nouvelles aventures.
                                                    Avec son design élégant et ses performances fiables, elle offre le parfait équilibre entre style et fonctionnalité.
                                                    Dotée d'un moteur puissant et de fonctionnalités modernes, cette voiture garantit une conduite agréable et confortable à chaque trajet.
                                                    Son intérieur spacieux et bien équipé offre tout le confort et la commodité dont vous avez besoin pour vos déplacements quotidiens.
                                                    Ne manquez pas cette opportunité de posséder une voiture de qualité à un prix abordable. Contactez-nous dès aujourd'hui pour plus d'informations
                                                    ou pour planifier un essai.
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-custom" data-bs-dismiss="modal">Fermer</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-4 col-md-4">
                                        <div class="card h-100">
                                            <img src=".voiture5.png" class="card-img-top" alt="Voiture d'occasion 5" />
                                            <div class="card-body">
                                                <h5 class="card-title">Voiture d'occasion 5</h5>
                                                <p class="card-text">
                                                    Année : 2021, Kilométrage : 15 000 km, Prix : 12 000 €
                                                </p>
                                            </div>
                                            <button type="button" class="btn btn-custom" data-bs-toggle="modal" data-bs-target="#Modal6">
                                                Voir la description
                                            </button>
                                        </div>
                                    </div>
                                    <div class="modal fade" id="Modal6" tabindex="-1" aria-labelledby="Modal6Label" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="Modal6Label">Voiture d'occasion 5</h5>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body">
                                                    <img src=".voiture5.png" alt="Image de la voiture" class="img-fluid">
                                                    Découvrez cette superbe voiture d'occasion, prête à vous emmener vers de nouvelles aventures.
                                                    Avec son design élégant et ses performances fiables, elle offre le parfait équilibre entre style et fonctionnalité.
                                                    Dotée d'un moteur puissant et de fonctionnalités modernes, cette voiture garantit une conduite agréable et confortable à chaque trajet.
                                                    Son intérieur spacieux et bien équipé offre tout le confort et la commodité dont vous avez besoin pour vos déplacements quotidiens.
                                                    Ne manquez pas cette opportunité de posséder une voiture de qualité à un prix abordable. Contactez-nous dès aujourd'hui pour plus d'informations
                                                    ou pour planifier un essai.
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-custom" data-bs-dismiss="modal">Fermer</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>
</body>