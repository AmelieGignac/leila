<?php
// Exemples d'accès au système de fichier avec PHP
$contenuDossier = scandir('textes');
//print_r($contenuDossier);

// Écrire une boucle et afficher uniquement les codes de langues 
/*
for($i = 0; $i < count($contenuDossier); $i++) {
    if($contenuDossier[$i] != '.' && $contenuDossier[$i] != '..') { 
        echo $contenuDossier[$i];
        echo '<br>';
    }
}
*/
// Alternative : boucle 'foreach'
foreach($contenuDossier as $nomDossier) {
    if($nomDossier != '.' && $nomDossier != '..') {
        echo $nomDossier;
        echo '<br>';
    }
}


?>