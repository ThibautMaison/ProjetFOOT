<?php
require "class.equipe.php";
require "class.joueurs.php";
require "instance.allemagne.php";
require "instance.argentine.php";
require "instance.bresil.php";
require "instance.coreeS.php";


$allemagne = new Equipe("Allemagne", $allemagnes, "Joachim Low");
$argentine = new Equipe("Argentine", $argentines, "Jeff Bezos");
$bresil = new Equipe("Brésil", $bresils, "Pelé");
$coreeS = new Equipe("Corée du Sud", $coreeSs, "Pape San");
$equipes = [$allemagne, $argentine, $bresil, $coreeS];
