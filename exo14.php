<h1>Algorithmes PHP n°1 Exo 14</h1>

<?php
//Exo 14
/*
Calculer l'âge exact d'une personne à partir
de sa date de naissance (en années, mois, jours)...
*/
// declaration de variables:
/*
//date courante 25/05/2018
$annee=2018;
$mois=05;
$jour=21;
//date personne 17/01/1985
$anneePers=1985;
$moisPers=01;
$jourPers=17;

$ageAnnee=$annee-$anneePers;
$ageMois=$mois-$moisPers;
$ageJour=$jour-$jourPers;
echo  "Age de la personne : ".$ageAnnee." ans ".$ageMois." mois ".$ageJour." jours";
*/

/*
$now= new DateTime();
$dateNaissance=new DateTime("1985-01_17 13:30:00");
$interval = $dateNaissance->diff($now);
echo $interval->format("d");
*/

$date1 = new DateTime('2015-06-22 10:40:25');
$date2 = new DateTime('2010-01-01 22:10:57');

$interval = date_diff($date1, $date2);

echo $interval->format("year =%y month=%m Days = %d Time = %H:%I:%S .");