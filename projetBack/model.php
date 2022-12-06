<?php

class Equipe
{
    private $id;
    private $nation;
    private $poule;
    // private static $joueurs= [];
    private $selectionneur;

    public function __construct($id, $nation, $selectionneur, $poule)
    {
        $this->id = $id;
        $this->nation = $nation;
        $this->selectionneur = $selectionneur;
        $this->poule = $poule;
    }

    public function presentationEquipe()
    {
        echo "<b>ID: </b>" . $this->id . "<br />";
        echo "<b> : </b>" . $this->nation . "<br />";
        echo "<b>date : </b>" . $this->joueurs . "<br />";
        echo "<b>nombrechambre : </b>" . $this->selectionneur . "<br />";
    }

    //getter
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
    public function getPoule()
    {
        return $this->poule;
    }

    //setter
    public function setNation($nation)
    {
        $this->nation = $nation;
        return $this;
    }
    public function setJoueurs($joueurs)
    {
        $this->joueurs = $joueurs;
        return $this;
    } //permet de modifier le $joueurs en plus de l'id ou du sélectionneur en ajoutant une fleche pour $player1->setSelectionneur() (= "Fluent Setter" = permet de chainer les setter (j'enchaine les setters))};
    public function setSelectionneur($selectionneur)
    {
        $this->selectionneur = $selectionneur;
        return $this;
    }
    public function setPoule($poule)
    {
        $this->poule = $poule;
        return $this;
    }
}


class Player
{
    private static $idFirst = 1;
    private $id;
    private $nom;
    private $prenom;
    private $post;
    private $remplacant;

    public function __construct($nom, $prenom, $post, $age, $remplacant)
    {
        $stock = self::$idFirst++;

        $this->id = $stock;
        $this->nom = $nom;
        $this->prenom = $prenom;
        $this->post = $post;
        $this->age = $age;
        $this->remplacant = $remplacant;
    }

    public function presentation()
    {
        echo "<b>Nom: " . $this->nom . "<br/>";
        echo "<b>Prénom: " . $this->prenom . "<br/>";
        echo "<b>Poste: " . $this->post . "<br/>";
        echo "<b>Age : " . $this->age  . "<br/>";
        echo "<b>Remplacant : " . $this->remplacant . "<br/>";
        echo "------------------------------------------------------------". "<br/>";
    }

    //getter
    public function getId()
    {
        return $this->id;
    }
    public function getNom()
    {
        return $this->nom;
    }
    public function getPrenom()
    {
        return $this->prenom;
    }
    public function getPost()
    {
        return $this->post;
    }
    public function getAge()
    {
        return $this->age;
    }
    public function getRemplacant()
    {
        return $this->remplacant;
    }

    //setter
    public function setId($id)
    {
        $this->id = $id;
        return $this;
    }
    public function setNom($nom)
    {
        $this->nom = $nom;
        return $this;
    }
    public function setPrenom($prenom)
    {
        $this->prenom = $prenom;
        return $this;
    }
    public function setPost($post)
    {
        $this->post = $post;
        return $this;
    }
    public function setAge($age)
    {
        $this->age = $age;
        return $this;
    }
    public function setRemplacant($remplacant)
    {
        $this->remplacant = $remplacant;
        return $this;
    }
    function __toString()
    {
        return  $this->nom . $this->prenom . $this->post . $this->age . $this->remplacant;
    }
}
