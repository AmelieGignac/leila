<?php
    //Exemple d'accès au système de fichier avec PHP
    $contenuDossier = scandir('textes');
    //print_r($contenuDossier);

    //Écrire une bpucle et afficher uniquement les codes de langues
    /*for($i = 0; $i < count($contenuDossier); $i++){
        if($contenuDossier[$i] != '.' && $contenuDossier[$i] != '..'){
            echo $contenuDossier[$i];
            echo '<br>';
        }
    }*/

    //Alternative de boucle
    foreach($contenuDossier as $nomDossier){
        if($nomDossier != '.' && $nomDossier != '..'){
            echo $nomDossier;
            echo '<br>';
        }
    }

    // Tests 
  /* echo $langueChoisie;
  echo '<hr>';
  print_r($_GET);
  echo '<hr>';*/

?>