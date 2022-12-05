<?php


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
        echo $this->nom . "<br/>";
        echo $this->prenom . "<br/>";
        echo "<b>post: </b>" . $this->post . "<br/>";
        echo "<b>age : </b>" . $this->age  . "<br/>";
        echo "<b>remplacant : </b>" . $this->remplacant . "<br/>";
    }

    //getter
    public function getID()
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
