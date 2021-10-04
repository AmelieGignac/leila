<?php
    //écrire une instruction conditionnelle simple en une courte expression à l'aide de l'opératuer ternaire de PHP
    $province = 'qc';
    $montant = 100;

    //conditionnelle traditionnelle
    /*if($province == 'qc') {
        $montant = 1.15*$montant; //mm chose $montant +0.15*$montant;
    } 
    else {
        $montant = 1.05*$montant;
    }*/

    //expression conditionnelle simple avec opérateur ternaire ( x ? y : z) (si x est vrai alors y sinon z)
    $montant = $province == 'qc' ? 1.15*$montant : 1.05*$montant;

    echo "$montant $";
?>