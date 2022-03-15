<h1>Algorithmes PHP n°1 Exo 10</h1>

<?php
//Exo 10
/*
A partir d’un montant à payer et d’une somme versée
 pour régler un achat, écrire l’algorithme qui affiche 
 à un utilisateur un rendu de monnaie en nombre de billets 
 de 10 € et 5 €, de pièces de 2 € et 1 €.
*/
// declaration de variables:
$montantAPayer=152;
$montantVerser=200;
$resteAPayer=0;
$nbBillet10=0;
$nbBillet5=0;
$nbPiece2=0;
$resteAPayer=$montantVerser-$montantAPayer;
echo "Montant à payer : ".$montantAPayer." € <br>";
echo "Montant versé : ".$montantVerser." € <br>";
echo "Reste à payer : ".$resteAPayer." € <br>";
while($resteAPayer>=10){
  $nbBillet10=$nbBillet10+1;
  $resteAPayer=$resteAPayer-10;
}
if($resteAPayer>=5){
  $nbBillet5=$nbBillet5+1;
  $resteAPayer=$resteAPayer-5;
}
if($resteAPayer>2){
  $nbPiece2=$nbPiece2+1;
  $resteAPayer=$resteAPayer-2; 
}

echo "****************************************<br>";
echo "Rendue de monnaie : <br>";
echo $nbBillet10." billets de 10 € - ".$nbBillet5." billet de 5 € - ".$nbPiece2." pièce de 2 € - ".$resteAPayer." pièce de 1 € <br>";            

