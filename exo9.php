<h1>Algorithmes PHP n°1 Exo 9</h1>

<?php
//Exo 9
/*
Nous souhaitons savoir si une personne est 
imposable en fonction de son âge et de son sexe.
Si la personne est une femme dont l’âge est 
compris entre 18 et 35 ans ou si c’est un homme 
de plus de 20 ans, alors celle-ci est imposable 
(sinon ce n’est pas le cas, « non imposable »).
Age : 32
Sexe : F
La personne est imposable.
*/

$age=32;
$sexe = "F";
echo "Age : ".$age."<br>";
if ($sexe == "F"){
    echo "Sexe : F <br>";
}else if($sexe == "H") {
    echo "Sexe : H <br>";
}
else{ 
    echo "Sexe : n'existe pas <br>";
}

if(($age>=18 && $age<=35 && $sexe=="F")||($age>=20 && $sexe=="H")){
    echo "la personne est imposable <br>";
}else{
    echo "la personne est non imposable <br>";
}