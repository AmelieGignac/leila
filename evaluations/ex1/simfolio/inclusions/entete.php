<?php
    //langue par défaut
    $langueChoisie = 'fr';

    //voir si le choix de langue a déjà été fait
    if(isset($_COOKIE['ex1_langue']) && in_array($_COOKIE['ex1_langue'], $languesDispo)) {
        $langueChoisie = $_COOKIE['ex1_langue'];
      }

    //inclure le fichier dans la bonne langue
    include('textes/' . $langueChoisie . '/i18n.txt.php');
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
            <a href="compte.php"><?= $en_titreCompte; ?></a>    <!-- pas oublier la classe actif -->
            <a href="#"><?= $en_propos; ?></a>
        </nav>
    </header>