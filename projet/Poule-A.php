<?php ob_start()?>
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
    <div class="mt-5 pt-5 " >
        <div class="container d-flex justify-content-around align-items-center mt-5 pt-5">
        <a href="Poule-A-Brasil.php"><img  src="/brasil.png" alt="" ></a>
        <a href="Poule-A-Coree.php"><img  src="/coree.png" alt="" ></a>
        <a href="Poule-A-Allemagne.php"><img  src="/allemagne.png" alt="" ></a>
        <a href="Poule-A-Argentine.php"><img  src="/argentine.png" alt="" ></a>
        </div>
    </div>
</body>
</html>

<?php
$content=ob_get_clean();
require "template.php";
?>