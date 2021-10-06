<?php
// Fonctions reliées aux citations

function citationAleatoire($section, $langue) {
    // Étape 1 : lire le fichier JSON dans une chaîne de caractères
    $citationsChaineJson = file_get_contents('data/citations-'.$section.'.json');
  
    // Étape 2 : transformer la chaîne JSON en tableau PHP
    $citationsToutes = json_decode($citationsChaineJson, true);

    // Étape 3 : sélectionner les citations dans la langue choisie
    // Attention : corriger le code pour utiliser les citation en français s'il
    // n'y en a pas dans la langue sélectionnée
    /*
    if(isset($citationsToutes[$langue])) { 
        $citationsLangueChoisie = $citationsToutes[$langue];
    }
    else {
        $citationsLangueChoisie = $citationsToutes['fr'];
    }
    */
    // Remplacer l'instruction conditionnelle par une expression d'opérateur 
    // ternaire
    $citationsLangueChoisie = isset($citationsToutes[$langue]) 
                        ? $citationsToutes[$langue] : $citationsToutes['fr'];

    // Étape 4 : sélection une citation aléatoirement
    $positionAleatoire = rand(0, count($citationsLangueChoisie)-1);
    return $citationsLangueChoisie[$positionAleatoire];
}
?>