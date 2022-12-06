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

<body style="background-image: url('world-cup.avif');background-repeat: no-repeat;background-attachment: fixed;background-size: 100% 100%;">
    <div class="mt-5 pt-5 ">
        <div class="container d-flex justify-content-around align-items-center mt-5 pt-5">
            <a href="Poule-A.php"><img src="brasil.png" alt=""></a>
            <div class="d-grid gap-5 col-6 mx-auto">
                <a class="btn btn-outline-light" href="Liste-Brasil.php" role="button">Liste du Brasil</a>
                <a class="btn btn-outline-light" href="Compo-Brasil.php" role="button">Composition du Brasil</a>
            </div>
        </div>
    </div>
</body>

</html>
<?php
$content = ob_get_clean();
require "template.php";
?>