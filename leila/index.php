<?php
  //définir une variable pour indiquer l'identifiant de la page
  $page = 'accueil';

  //inclure l'entete communne ici
  include('inclusions/entete.php');
?>
    <div class="contenu-principal">
      <h2><?php $acc_titrePage; ?></h2>
      <p><img src="images/accueil-cuisine.jpg" alt="<?= $acc_introImgAlt; ?>"><?= $acc_introP1; ?></p>
      <p><?= $acc_introP2; ?></p>
    </div>
<?php
  //inclure le pied de page commun ici
  include('inclusions/pied2page.php');
?>

<!-- E:\ecole\logiciels\php8010\php -S 127.0.0.1:81 -->
<!-- Pour ouvrir les raccourcis -> engrenage -> User snippets -> html -->
<!-- git init est utilisé pour surveiller un dossier -->