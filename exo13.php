<h1>Algorithmes PHP n°1 Exo 13</h1>

<?php
//Exo 13
/*
Calculer la moyenne générale d'un élève
dont les notes sont renseignées dans un tableau 
(pas de coefficient). Elle devra être affichée avec 2 décimales..
*/
// declaration de variables:
$note=[10, 12, 8, 19, 3, 16, 11, 13, 9];
$somme=0;
echo "Les notes obtenues par l’élève sont : "; 
for($i=0;$i<count($note);$i++){
    echo $note[$i]." ";
    $sommeNote=$sommeNote+$note[$i];
}
//implode(",",$note);// tranforme 
//$phrase="bonjour tout le monde";
//explode(" ",$phrase);//chaine en un tableau
$moyenne=$sommeNote/count($note);
echo "<br>Sa moyenne générale est donc de : ".round($moyenne,2);
