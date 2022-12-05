<?php
require "class.joueurs.php";
class Equipe
{
    private $id;
    private $nation;
    private static $joueurs= [];
    private $selectionneur;

    public function __construct($nation, $selectionneur)
    {
        $this->nation = $nation;
        $this->selectionneur = $selectionneur;
    }

    public function presentationEquipe()
    {
        echo "<b>ID: </b>" . $this->id . "<br/>";
        echo "<b> : </b>" . $this->nation . "<br/>";
        echo "<b>date : </b>" . $this->joueurs . "<br/>";
        echo "<b>nombrechambre : </b>" . $this->selectionneur  . "<br/>";
    }

    //getter
    public function getNation(){return $this->nation;}
    public function getJoueurs(){return $this->joueurs;}
    public function getSelectionneur(){return $this->selectionneur;}

    //setter
    public function setNation($nation){$this->nation = $nation;return $this;}
    public function setJoueurs($joueurs){$this->joueurs = $joueurs;return $this;} //permet de modifier le $joueurs en plus de l'id ou du sélectionneur en ajoutant une fleche pour $player1->setSelectionneur() (= "Fluent Setter" = permet de chainer les setter (j'enchaine les setters))};
    public function setSelectionneur($selectionneur){$this->selectionneur = $selectionneur;return $this;}
}


$allemagne = new Equipe("Allemagne", $allemagnes, "Joachim Low");
$argentine = new Equipe("Argentine", $argentines, "Jeff Bezos");
$bresil = new Equipe("Brésil", $bresils, "Pelé");
$coreeS = new Equipe("Corée du Sud", $coreeSs, "Pape San");
$equipes = [$allemagne, $argentine, $bresil, $coreeS];
?>


