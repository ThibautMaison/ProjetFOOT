<?php ob_start()?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Accueil</title>
</head>
<body style="background-image: url('cdm2022.jpg');background-repeat: no-repeat;background-attachment: fixed;background-size: 100% 100%;">
    
</body>
</html>
<?php
$content=ob_get_clean();
require "template.php";
?>