<?php
// Écrire une instruction conditionnelle simple en une courte expression à l'aide
// de l'opérateur ternaire de PHP

// Exemple 
$montant = 100;
$province = 'ipe';

// Conditionnelle traditionnelle
/*
if($province == 'qc') {
    $montant = 1.15*$montant;
}
else {
    $montant = 1.05*$montant;
}
*/
// Expression conditionnelle avec opérateur ternaire ( x ? y : z)
$montant2 = $province == 'qc' ? 1.15*$montant : 1.05*$montant;

//echo "Montant : $montant $";
echo "<hr>Montant2 : $montant2 $";

?>