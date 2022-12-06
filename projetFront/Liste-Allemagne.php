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

<body style="background-image: url('world-cup.avif');background-repeat: no-repeat;background-attachment: fixed;background-size: 100% 100%;">
    <div class="container">
        <h1>Les 7 joueurs selecttionnés par</h1>
        <?php foreach ($allemagnes as $player) {
            echo $player->presentation();
        } ?>

    </div>
    <div class="container">
        <h2 class="bg-black ">GARDIENS</h2>

    </div>
</body>

</html>

<?php
$content = ob_get_clean();
require "template.php";
?>