<h1>Algorithmes PHP n°1 Exo 8</h1>

<?php
//Exo 8
/*
Ecrire un algorithme qui renvoie 
la table de multiplication d’un nombre 
passé en paramètre sous la forme :
    Affichage (pour la table de 8):
*/
$table=8;
echo "(Avec la boucle for)<br>";
echo "Table de ".$table." :<br>";
for($i=1;$i<=10;$i++){
    echo $i." x ".$table." = ".$i*$table."<br>";
}
//-------------------------------------------------------
echo "<br>(Avec le foreach)<br>";
echo "Table de ".$table." :<br>";
$valeurs = range(1,10);  
foreach($valeurs as $valeur){
    echo $valeur." x ".$table." = ".$valeur*$table."<br>";
}
