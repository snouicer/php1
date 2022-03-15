<h1>Algorithmes PHP n°1 Exo 4</h1>
<?php

//Exo 4
/*
Ecrire un algorithme permettant de
 savoir si une phrase est palindrome.
 La phrase « Engage le jeu que je le gagne » est palindrome
*/

$phrase1 = "Engage le jeu que je le gagne";
$phrase=strtolower($phrase1);// minuscule mb_strt
$phrase=str_replace(" ", "", $phrase); //deleteSpace
$inverse = strrev($phrase);//inverse une chaine de caractère
if (($phrase) == ($inverse)){
    echo "La Phrase : « ".$phrase1." » est palindrome <br>";
} else {
    echo "La Phrase : « ".$phrase1." » n'est pas palindrome <br>";
}

//echo "Laphrase est".($phrase == ($inverse) ? $phrase1 "palindrome": "non palindrome");