<?php
    //Nommer les langues dans leurs langues respectives
    $nomsLangues = [
        "fr" => 'Français',
        "en" => 'English',
        "ko" => '한국어'
    ];

    //Mettre les langues disponibles dans un tableau
    $contenuTextes = scandir('textes');
    $languesDispo = [];
    foreach ($contenuTextes as $nomDossier) {
        if($nomDossier != '.' && $nomDossier != '..'){
            $languesDispo[] = $nomDossier;
        }
    }

    //Choisir une langue par défaut
    $langueDefaut = 'fr';

    //voir si un choix de langue à déjà été fait
    if(isset($_COOKIE['ex1_langue']) && in_array($_COOKIE['ex1_langue'], $languesDispo)) {
        $langueDefaut = $_COOKIE['ex1_langue'];
    }

    //ou si l'utilisateur en choisi une en particulier
    if(isset($_GET['langue']) && in_array($_GET['langue'], $languesDispo)) {
        $langueDefaut = $_GET['langue'];
    
        //et la retenir dans un cookie
        setcookie('ex1_langue', $langueDefaut, time() + 365*24*60*60);
    }

    //inclure le fichier dans la bonne langue
    include('textes/' . $langueDefaut . '/i18n.txt.php');
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <link rel="shortcut icon" href="images/lynx-64.png">
    <link href='http://fonts.googleapis.com/css?family=Roboto+Slab:300,700|Roboto:700,400' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="css/styles.css">
    <title><?= $meta[$page]['titre']; ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="<?= $meta[$page]['desc']; ?>">
</head>
<body>
    <header>
        <div class="logo">
            <a href="index.php" title="Page d'accueil"><img src="images/lynx-64.png" alt="Lynx" class="logo"></a>
            <h1 class="logo"><?= $en_nom; ?></h1>
        </div>
        <nav>
            <a href="compte.php" class="<?php if($page == 'compte') { echo 'actif'; } ?>"><?= $en_titreCompte; ?></a>
            <a href="#"><?= $en_propos; ?></a>
        </nav>
    </header>