<?php ob_start();
require "../projetBack/bdd.php";
?>
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
            <?php foreach ($equipes as $equipe) {
                if ($equipe->getPoule() == "A") {
            ?><a href="Poule-A-<?php echo $equipe->getNation() ?>.php"><img src="img/<?php echo $equipe->getNation() ?>.png" alt=""></a><?php                                                                                                                    }
            }                                                                                                                       ?>
        </div>
    </div>
</body>

</html>
<?php
$content = ob_get_clean();
require "template.php";
?>