<?php ob_start();
require "../projetBack/bdd.php";

?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Liste</title>
</head>

<body style="background-image: url('img/world-cup.avif');background-repeat: no-repeat;background-attachment: fixed;background-size: 100% 100%;">
    <div class="container">
        <h2 class="text-light text-center text-uppercase fw-bold fs-1 text-decoration-underline">LISTE DES JOUEURS</h2>

    </div>
    <h1 class="d-flex text-light">Les 7 joueurs selectionnés par <?php
        foreach ($equipes as $value) {
        if ($value->getNation() == "Allemagne") {
            echo $value->getSelectionneur();
            }
        };
    ?> sont :</h1>
    <div class="container">
        <div class="d-flex text-light"><?php foreach ($allemagnes as $player){
            echo $player->presentation();
        } ?></div>

    </div>
</body>

</html>

<?php
$content = ob_get_clean();
require "template.php";
?>