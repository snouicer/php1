<h1>Algorithmes PHP n°1 Exo 7</h1>

<?php
//Exo 7
/*
Ecrire un algorithme permettant de renvoyer 
la catégorie d’un enfant en fonction de son âge :
Poussin : entre 6 et 7 ans 
Pupille : entre 8 et 9 ans 
Minime : entre 10 et 11 ans 
Cadet : à partir de 12 ans
Si la catégorie n’est pas gérée, merci de le préciser.
*/
$age=10;
$categorie="";
if($age>=12){
    $categorie="Cadet";
}elseif($age>=10){
    $categorie="Minime";
}elseif($age>=8){
    $categorie="Pupille";
}elseif($age>=6){
    $categorie="Poussin";
}else{
    $categorie= "n'est pas gérer";
}
echo "L’enfant qui a ".$age." ans appartient à la catégorie « ".$categorie." »";