<?php
class Personne {
    private $nom;
    private $prenom;

    public function __construct($nom, $prenom) {
        $this->nom = $nom;
        $this->prenom = $prenom;
    }

    public function getNom() {
        return $this->nom;
    }

    public function setNom($nom) {
        $this->nom = $nom;
    }

    public function getPrenom() {
        return $this->prenom;
    }

    public function setPrenom($prenom) {
        $this->prenom = $prenom;
    }

    public function getNomComplet() {
        return $this->prenom . ' ' . $this->nom;
    }
}

$personne1 = new Personne('Senghor', 'Ben Cheikh');
echo $personne1->getNomComplet(); // Affiche "Ben Cheikh Senghor"
$personne1->setNom('Ndiaye');
echo $personne1->getNomComplet(); // Affiche "Ben Cheikh Ndiaye"
?>