<h1>Algorithmes PHP n°1 Exo 2</h1>
<?php

//Exo 2
/*A partir de la phrase de l’exercice 1, écrire 
l’instruction permettant de compter le nombre de 
mots contenus dans celle-ci.
*/
$phrase="Notre formation DL commence aujourd'hui";
$nbMots = str_word_count($phrase);// compte le nombre de mot
echo "La Phrase « ".$phrase." » contient ".$nbMots." mots.";
