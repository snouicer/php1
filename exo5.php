<h1>Algorithmes PHP n°1 Exo 5</h1>

<?php

//Exo 5
/*
Ecrire un algorithme qui déclare une valeur en francs
et qui la convertit en euros. Attention, la valeur générée 
devra être arrondie à 2 décimales.
*/
$francs=100;
$taux=6.55957;
$euros=round($francs/$taux,2);
echo "  Montant en francs : ".$francs."<br>".$francs." francs = ".$euros." € <br>";