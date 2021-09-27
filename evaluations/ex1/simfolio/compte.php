<!-- <!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <link rel="shortcut icon" href="images/lynx-64.png">
    <link href='http://fonts.googleapis.com/css?family=Roboto+Slab:300,700|Roboto:700,400' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="css/styles.css">
    <title>Mon compte | Lynx</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Mon compte Lynx permet la gestion des avoirs et obligations, incluants les espèces, les comptes d'investissements, les avoirs immobiliers, et les cryptomonnaies.">
</head>
<body>
    <header>
        <div class="logo">
            <a href="index.html" title="Page d'accueil"><img src="images/lynx-64.png" alt="Lynx" class="logo"></a>
            <h1 class="logo">Lynx</h1>
        </div>
        <nav>
            <a href="compte.html" class="actif">Mon compte</a>
            <a href="#">À propos</a>
        </nav>
    </header> -->
<?php
    //définir la page
    $page = "compte";
    //inclure l'entête
    include('inclusions\entete.php');
?>
    <section class="principale">
        <form action="javascript: return false">
            <fieldset>
                <legend><?= $com_legende; ?></legend>
                <input type="text" placeholder="<?= $com_adresseCourriel; ?>">
                <input type="password" name="mdp" id="mdp" placeholder="<?= $com_mdp; ?>">
                <input type="button" value="<?= $com_connexion; ?>">
            </fieldset>
            <div class="actions-compte">
                <a href="#"><?= $com_oubliMdp; ?></a>
                <a href="#"><?= $com_nouveauCompte; ?></a>
            </div>
        </form>
    </section>
<?php
    //inclure le footer
    include('inclusions\footer.php');
?>