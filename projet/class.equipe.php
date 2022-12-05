

<?php

class Equipe
{
    private static $idFirst = 1;
    private $id;
    private $nation;
    private $joueurs;
    private $selectionneur;

    public function __construct($nation, $joueurs, $selectionneur)
    {
        $this->id = self::$idFirst++;
        $this->nation = $nation;
        $this->joueurs = $joueurs;
        $this->selectionneur = $selectionneur;
    }

    //getter
    public function getId()
    {
        return $this->id;
    }
    public function getNation()
    {
        return $this->nation;
    }
    public function getJoueurs()
    {
        return $this->joueurs;
    }
    public function getSelectionneur()
    {
        return $this->selectionneur;
    }





    //setter
    public function setId($id)
    {
        $this->id = $id;
        return $this;
    }
    public function setNation($nation)
    {
        $this->nation = $nation;
        return $this;
    }
    public function setJoueurs($joueurs)
    {
        $this->joueurs = $joueurs;
        return $this; //permet de modifier le $joueurs en plus de l'id ou du sélectionneur en ajoutant une fleche pour $player1->setSelectionneur() (= "Fluent Setter" = permet de chainer les setter (j'enchaine les setters))
    }
    public function setSelectionneur($selectionneur)
    {
        $this->selectionneur = $selectionneur;
        return $this;
    }
}


?>


