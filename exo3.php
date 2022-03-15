<h1>Algorithmes PHP n°1 Exo 3</h1>
<?php

//Exo 3
/*A partir de la phrase de l’exercice 1, écrire 
l’instruction permettant de remplacer le mot 
« aujourd’hui » par le mot « demain ».
 Afficher l’ancienne et la nouvelle phrase.
*/

$phrase="Notre formation DL commence aujourd'hui";
echo "La Phrase 1 : « ".$phrase." » <br>";
$newphrase=str_replace("aujourd'hui", "demain", $phrase); // fonction remplace aujourd'hui par demain
echo "La Phrase 2 : « ".$newphrase." » <br>";