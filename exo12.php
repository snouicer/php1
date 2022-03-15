<h1>Algorithmes PHP n°1 Exo 12</h1>

<?php
//Exo 12
/*
Initialiser un tableau de x marques de voitures. 
Ecrire un algorithme permettant de parcourir ce tableau et 
d’en afficher le contenu (une marque de voiture par ligne). 
Il est également demandé d’afficher le nombre de marques 
de voitures présentes dans le tableau.
*/
// declaration de variables:
$tableau=[
            "Salut" => "Mickaël", 
            "Hola" => "Virgile",
            "Hello" => "Marie-Claire"
];
asort($tableau);//trier en conservant les associations clé-valeur

//var_dump($tableau);
foreach($tableau as $langue=>$prenom){
    echo $langue." ".$prenom."<br>";
//switch($langue){
   // case "FRA": echo "Salut $prenom<br>"; break;
//}
}
