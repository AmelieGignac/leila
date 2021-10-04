<?php
    //fonction reliée aux citations 
    function citationAleatoire($section, $langue) {
        //choisir une citation aléatoire du fichier citation-menu selon la langue choisie sur le site
        // 1. lire le fichier json dans une chaine de charactères
        $citationsChaineJson = file_get_contents('data/citations-'. $section .'.json');

        // 2. transformer la chaine json en tableau php
        $citations = json_decode($citationsChaineJson, true);

        // 3. selectionner les citations dans la langue choisie
        //$citationsLangueChoisie = $citations[$langue];
        // corriger le code pour utiliser les citations en français s'il n'y en a pas dans la langue choisie
        /*if(isset($citations[$langue])) {
            $citationsLangueChoisie = $citations[$langue];
        } else {
            $citationsLangueChoisie = $citations['fr'];
        }*/

        $citationsLangueChoisie = isset($citations[$langue]) 
                                ? $citations[$langue] : $citations['fr'];

        // 4. selectionner une citation aléatoire
        $positionAleatoire = array_rand($citationsLangueChoisie);
        //$positionAleatoire = rand(0, count($citationsLangueChoisie)-1);   

        // 5. retourner la valeur de la citation choisie  
        return $citatonAleatoire = $citationsLangueChoisie[$positionAleatoire];
    }
?>