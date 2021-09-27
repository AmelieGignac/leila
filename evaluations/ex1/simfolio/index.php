<?php
    //définir la variable qui indique la page
    $page = "accueil";
    //inclure l'entête
    include('inclusions\entete.php');
?>
<section class="principale">
    <div>
        <h1><?= $acc_sousTitre; ?></h1>
        <h3><?= $acc_sousTitre2; ?></h3>
        <ul>
            <li><?= $acc_point1; ?></li>
            <li><?= $acc_point2; ?></li>
            <li><?= $acc_point3; ?></li>
        </ul>
    </div>
    <div>
        <img src="images/accueil.jpg" alt="">
    </div>
</section>
<?php
    //inclure le footer
    include('inclusions\footer.php');
?>