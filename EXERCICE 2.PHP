<?php

class Personne {
  protected $nom;
  protected $prenom;
  protected $age;

  public function __construct($nom, $prenom, $age) {
    $this->nom = $nom;
    $this->prenom = $prenom;
    $this->age = $age;
  }

  public function afficherPersonne() {
    echo "Nom : " . $this->nom . "<br>";
    echo "Prenom : " . $this->prenom . "<br>";
    echo "Age : " . $this->age . "<br>";
  }
}

class Employe extends Personne {
  protected $salaire;

  public function __construct($nom, $prenom, $age, $salaire) {
    parent::__construct($nom, $prenom, $age);
    $this->salaire = $salaire;
  }

  public function afficherEmploye() {
    $this->afficherPersonne();
    echo "Salaire : " . $this->salaire . "<br>";
  }
}

// Création d'objets Employe
$employe1 = new Employe("Senghor", "Saer", 22, 3000000);
$employe2 = new Employe("Ndiaye", "Geneviève", 20, 2500000);

// Affichage des propriétés de chaque objet
$employe1->afficherEmploye();
echo "<br>";
$employe2->afficherEmploye();

?>
