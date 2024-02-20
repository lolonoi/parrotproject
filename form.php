<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>header</title>
    <link rel="stylesheet" href="./form.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous" />

    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" rel="stylesheet" />
</head>

<h2 class="text-center py-5 ">Contact</h2>
<div class="contact container mt-">
    <div class="row">
        <div class="col-md-6">
            <form>
                <div class="mb-3">
                    <label for="nom" class="form-label">Nom</label>
                    <input type="text" class="form-control" id="nom" placeholder="Parrot">
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" class="form-control" id="email" placeholder="garageparrot@gmail.com">
                </div>
                <div class="mb-3">
                    <label for="phone" class="form-label">Tel</label>
                    <input type="number" class="form-control" id="phone" placeholder="+33 06 07 08 09 04">
                </div>
                <div class="mb-3">
                    <label for="message" class="form-label">Message</label>
                    <textarea class="form-control" id="message" rows="3" placeholder="Message"></textarea>
                </div>
                <button type="submit" class="btn btn-custom">Envoyer</button>
            </form>
        </div>
        <div class="col-md-6 my-5 d-flex align-items-center justify-content-center coordonnees">
            <h2>Coordonnées</h2>
            <div>
                <i class="fas fa-phone"></i>
                <span>+33 06 07 08 09 04</span>
            </div>
            <div>
                <i class="fas fa-envelope"></i>
                <span>garageparrot31@gmail.com</span>
            </div>
            <div>
                <i class="fas fa-clock"></i>
                <span>
                    Lun-Vendredi : 8h-12h / 14h-18h<br />
                    Sam : 8h-13h<br />
                    Dim: Fermé
                </span>
            </div>
        </div>
    </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>
</body>

</html>