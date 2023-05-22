<?php
class Personne {
  public $nom;
  public $prenom;
  public $age;

  function __construct($nom, $prenom, $age) {
    $this->nom = $nom;
    $this->prenom = $prenom;
    $this->age = $age;
  }
}

$personne1 = new Personne("Senghor", "Ben Cheikh", 22);
$personne2 = new Personne("Ndiaye", "Geneviève", 20);


echo "Personne 1 :<br>";
echo "Nom : " . $personne1->nom . "<br>";
echo "Prénom : " . $personne1->prenom . "<br>";
echo "Âge : " . $personne1->age . "<br><br>";
echo "Personne 2 :<br>";
echo "Nom : " . $personne2->nom . "<br>";
echo "Prénom : " . $personne2->prenom . "<br>";
echo "Âge : " . $personne2->age . "<br>";
?>
