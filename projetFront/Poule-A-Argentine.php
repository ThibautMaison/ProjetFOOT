<?php ob_start() ?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Poule A</title>
    <link rel="stylesheet" href="/style.css">
</head>

<body style="background-image: url('img/world-cup.avif');background-repeat: no-repeat;background-attachment: fixed;background-size: 100% 100%;">
    <div class="mt-5 pt-5 ">
        <div class="container d-flex justify-content-around align-items-center mt-5 pt-5">
            <a href="Poule-A.php"><img src="img/argentine.png" alt=""></a>
            <div class="d-grid gap-5 col-6 mx-auto">
                <a class="btn btn-lg btn-light" href="Liste-Argentine.php" role="button">Liste de l'Argentine</a>
                <a class="btn btn-lg btn-light" href="Compo-Argentine.php" role="button">Composition de l'Argentine</a>
            </div>
        </div>
    </div>
</body>

</html>

<?php
$content = ob_get_clean();
require "template.php";
?>