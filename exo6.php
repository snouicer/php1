<h1>Algorithmes PHP n°1 Exo 6</h1>

<?php
//Exo 6
/*
Ecrire un algorithme permettant de calculer un montant
de facture à régler à partir de la quantité d’articles, 
son prix hors taxe et un taux de TVA (exprimé en décimal. Ex : 20 % -> 0.2)
*/
$prixUnitaire=9.99;
$quantite=5;
$tauxtva=0.2;
$montantTotal=0;

//$montant=$prixUnitaire*$quantite+($prixUnitaire*$quantite*$tauxtva);
$montantTotal=$prixUnitaire*$quantite*(1+$tauxtva);// factorisation
echo "Prix unitaire de l’article : ".$prixUnitaire." € <br>";
echo "Quantité : ".$quantite."<br>";
echo "Taux de TVA : ".$tauxtva."<br>";
echo "Le montant de la facture à régler est de : ".$montantTotal."€ <br>";