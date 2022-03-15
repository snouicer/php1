<h1>Algorithmes PHP n°1 Exo 15</h1>

<?php
//Exo 15
/*
Créer une classe Personne (nom, prénom et date de naissance).
Instancier 2 personnes et afficher leurs informations : nom, prénom et âge.
$p1 = new Personne("DUPONT", "Michel", "1980-02-19");
$p2 = new Personne("DUCHEMIN", "Alice", "1985-01-17");
*/

class Personne{  //ensemble d'état et de comportement elle comprend des attributs et des méthodes(function)
	private $nom;
	private $prenom;
    private $date;
	// creer une instance => construire  initalisé la valeur des instances
	public function __construct($nom, $prenom, $date){// 2 underscore (methode magique 
		$this->nom=$nom; // objet sur lequel je suis entrain de travaillé
		$this->prenom=$prenom;
        $this->date=$date;
	}
    //getteur
    public function getNom(){ //assesseur getteur récupere la valeur de lattribut de lobjet 
        return $this->nom;
    }
    public function getPrenom(){ //assesseur getteur récupere la valeur de lattribut de lobjet 
        return $this->prenom;
    }
    public function getDate(){ //assesseur getteur récupere la valeur de lattribut de lobjet 
        return $this->date;
    }
    //setteur
    public function setNom($val){ //getteur setteur modifie la valeur de lattribut d'un objet 
        $this->nom=$val;
    }
    public function setPrenom($val){ //getteur setteur modifie la valeur de lattribut d'un objet 
        $this->prenom=$val;
    }
    public function setDate($val){ //getteur setteur modifie la valeur de lattribut d'un objet 
        $this->date=$val;
    }
    public function getInfoPersonne(){ //assesseur getteur récupere la valeur de lattribut de lobjet 
        echo "Nom: ".$this->nom."<br>Prenom: ".$this->prenom."<br>Date: ".$this->date."<br>";
    }
    public function calculeAge(){
        $dateNow = new DateTime();
        $date= new DateTime($this->date);
        $age=$dateNow->diff($date);
        return $age->y;
        }
}
$p1 = new Personne("DUPONT", "Michel", "1980-02-19");//instance prend tout ce qu'il ya dans la classe
$p2 = new Personne("DUCHEMIN", "Alice", "1985-01-17");
echo "<br>";
echo $p1->getPrenom()." ".$p1->getNom()." a ".$p1->calculeAge()." ans";
echo "<br>";
echo $p2->getPrenom()." ".$p2->getNom()." a ".$p2->calculeAge()." ans";
//var_dump($p1);