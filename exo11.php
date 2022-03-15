<h1>Algorithmes PHP n°1 Exo 11</h1>

<?php
//Exo 11
/*

Initialiser un tableau de x marques de voitures. 
Ecrire un algorithme permettant de parcourir ce tableau et 
d’en afficher le contenu (une marque de voiture par ligne). 
Il est également demandé d’afficher le nombre de marques 
de voitures présentes dans le tableau.
*/
$marque=["Peugeot", "Renault", "BMW", "Mercedes"];
echo "Il y a ".count($marque)." marques de voitures dans le tableau :<br>";
echo "<ul>";
for($i=0;$i<count($marque);$i++){
echo "<li>".$marque[$i]."</li>";
}
echo "</ul>";