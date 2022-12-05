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
    public function getId(){ return $this->id;}
    public function getNom(){return $this->nom;}
    public function getPrenom(){return $this->prenom;}
    public function getPost(){return $this->post;}
    public function getAge(){return $this->age;}
    public function getRemplacant(){return $this->remplacant;}




    //setter
    public function setId($id){$this->id = $id;return $this;}
    public function setNom($nom){$this->nom = $nom;return $this;}
    public function setPrenom($prenom){$this->prenom = $prenom;return $this;}
    public function setPost($post){$this->post = $post; return $this;}
    public function setAge($age){$this->age = $age;return $this;}
    public function setRemplacant($remplacant){$this->remplacant = $remplacant;return $this;}
    function __toString(){ return  $this->nom . $this->prenom . $this->post . $this->age . $this->remplacant;}
}

$allemagne1 = new Player("Freeze", "Corleone", "goal", "20", false);
$allemagne2 = new Player("Kanye", "West", "milieu", "20",  false);
$allemagne3 = new Player("Rudiger", "Antonio", "défenseur", "20", false);
$allemagne4 = new Player("Neuer", "Manuel", "Gardien", "20",  false);
$allemagne5 = new Player("Smogo", "Go", "défenseur", "20", false);
$allemagne6 = new Player("Carlier", "Shrek", "défenseur", "20",  false);
$allemagne7 = new Player("Havertz", "Kai", "défenseur", "20", false);
$allemagnes = [$allemagne1, $allemagne2, $allemagne3, $allemagne4, $allemagne5, $allemagne6, $allemagne7];

$argentine1 = new Player("Di Maria", "Angel", "attaquant", "20",  false);
$argentine2 = new Player("Messi", "Lionel", "milieu", "20", false);
$argentine3 = new Player("Diaz", "Juan", "défenseur", "20",  false);
$argentine4 = new Player("LeHiguain", "Gonzalo", "attaquant", "20",  false);
$argentine5 = new Player("Dybala", "Paulo", "défenseur", "20",  false);
$argentine6 = new Player("Ton", "Couaffe", "défenseur", "20", false);
$argentine7 = new Player("Maradona", "Diego", "Attaquant", "20", false);
$argentines = [$argentine1, $argentine2, $argentine3, $argentine4, $argentine5, $argentine6, $argentine7];

$bresil1 = new Player("Neymar", "Jr", "attaquant", "20",  false);
$bresil2 = new Player("Tiago", "Silva", "milieu", "20", false);
$bresil3 = new Player("Ronaldo", "Juan", "défenseur", "20",  false);
$bresil4 = new Player("Ronaldhino", "Gaucho", "attaquant", "20",  false);
$bresil5 = new Player("Ka", "Poera", "défenseur", "20",  false);
$bresil6 = new Player("Mega", "Rayquaza", "défenseur", "20",  false);
$bresil7 = new Player("Torti", "Pouss", "Attaquant", "20", false);
$bresils = [$bresil1, $bresil2, $bresil3, $bresil4, $bresil5, $bresil6, $bresil7];


$coreeS1 = new Player("Jong-Hun", "Kim", "goal", "20",  false);
$coreeS2 = new Player("Son", "Heung-Min", "milieu", "20",  false);
$coreeS3 = new Player("Brevet", "de Technicien Supérieur", "défenseur", "20",  false);
$coreeS4 = new Player("Kardashian", "Kim", "défenseur", "20", false);
$coreeS5 = new Player("Park", "J-Sung", "milieu", "20",  false);
$coreeS6 = new Player("", "Syrine", "milieu", "20",  false);
$coreeS7 = new Player("Mega", "Metalosse", "milieu", "20", false);
$coreeSs = [$coreeS1, $coreeS2, $coreeS3, $coreeS4, $coreeS5, $coreeS6, $coreeS7];

