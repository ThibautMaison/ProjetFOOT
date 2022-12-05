<?php
require "class.joueurs.php";
class Equipe
{
    private $id;
    private $nation;
    private $poule;
    // private static $joueurs= [];
    private $selectionneur;

    public function __construct($id,$nation, $selectionneur,$poule)
    {
        $this->id = $id;
        $this->nation = $nation;
        $this->selectionneur = $selectionneur;
        $this->poule = $poule;
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
    public function getPoule(){return $this->poule;}

    //setter
    public function setNation($nation){$this->nation = $nation;return $this;}
    public function setJoueurs($joueurs){$this->joueurs = $joueurs;return $this;} //permet de modifier le $joueurs en plus de l'id ou du sélectionneur en ajoutant une fleche pour $player1->setSelectionneur() (= "Fluent Setter" = permet de chainer les setter (j'enchaine les setters))};
    public function setSelectionneur($selectionneur){$this->selectionneur = $selectionneur;return $this;}
    public function setPoule($poule){$this->poule = $poule;return $this;}
}


$allemagne = new Equipe(1,"Allemagne","Joachim Low","A");
$argentine = new Equipe(2,"Argentine","Jeff Bezos","A");
$bresil = new Equipe(3,"Brasil","Pelé","A");
$coreeS = new Equipe(4,"Coree","Pape San","A");
$equipes = [$allemagne, $argentine, $bresil, $coreeS];
?>


