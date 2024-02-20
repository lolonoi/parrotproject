<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Contact Garage Parrot</title>
    <link rel="stylesheet" href="./contact.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" rel="stylesheet" />
</head>

<body>
    <?php include "./header.php"; ?>
    <?php include("./form.php");  ?>
    <?php include("./trouver.php"); ?>
    <div class="text-center justify-content-space-around my-2 py-4  ">
        <img class="d-block w-100" src=".contact.png" alt="garagiste souriant a la caméra" />
        <p>Prêt à franchir nos portes ? Venez nous voir !</p>
        <button class="btn btn-custom"><a href="./contact.php">Venir</a></button>
    </div>
    <footer>
        <?php include("./footer.php"); ?>
    </footer>
</body>

</html>