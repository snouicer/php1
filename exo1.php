<h1>Algorithmes PHP n°1 Exo 1</h1>
<?php

//Exo 1
/*Soit la phrase « Notre formation DL commence aujourd'hui ».
Ecrire un algorithme permettant de compter le nombre de caractères
contenus dans cette phrase (espaces inclus).
La phrase « Notre formation DL commence aujourd’hui » contient 39 caractères.
*/
$phrase="Notre formation DL commence aujourd'hui";
$nbCaracteres = strlen($phrase);
echo "La Phrase « ".$phrase." » contient ".$nbCaracteres." caractères.<br>";
// $cptNbrChar=substr_count."caractères.";
