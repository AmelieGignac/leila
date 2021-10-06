<?php
  // Définir une variable pour indiquer l'identifiant de la page
  $page = 'menu';
  
  // Inclure le haut de page commun ici
  include('inclusions/entete.php');

  // Inclure la librairie de gestion des citations
  include('lib/citations.lib.php');

  // Faire appel à la fonction citationAleatoire()
  $citationAlea = citationAleatoire($page, $langueChoisie);


  // !!!!! METTRE DANS UNE FONCTION DANS UN FICHIER DANS LIB
  // lire le fichier json dans la langue chosisie
  // file_exists() pour intégrer le menu en fr dans les autres langues
  $menuTexte = file_get_contents("data/menu-$langueChoisie.json");

  // décoder le texte json en tableau php
  $menuTableau = json_decode($menuTexte, true);
  // print_r($menuTableau);
  
?>
    <div class="contenu-principal">
      <div class="citation">
        <img src="images/menu-citation.jpg" alt="">
        <blockquote>
          <?= $citationAlea['texte']; ?>
          <cite>- <?= $citationAlea['auteur']; ?></cite>
        </blockquote>
      </div>
      <div class="carte">
        <!-- répéter ce gabarit pour chaque section (etiquette) du fichier json -->
        <?php foreach ($menuTableau as $titreSection => $platsSection) { ?>
        <section>
          <h2><?= $titreSection; ?></h2>
          <ul>
            <!-- répéter ce gabarit pour chaque plats dans la section courrante -->
            <?php foreach ($platsSection as $plat) { ?>
            <li>
              <span><?= $plat['nom']; ?><br><i><?= $plat['desc']; ?></i></span>
              <span class="prix"><i class="article-menu-portion">(<?= $mnu_portions; ?><?= $plat['portion']; ?> portion)</i><?= $plat['prix']; ?></span>
            </li>
            <?php } ?> <!-- !!!!!!PAS OUBLIER QUE PORTION 1 = ON VOIT PAS ET QUE LE POINTILLÉ FINI AU BOUT DU NOM SI YA PAS DE DESC-->
          </ul>
        </section>
        <?php } ?>
      </div>
    </div>
<?php
  // Inclure le pied de page commun ici
  include('inclusions/pied2page.php');
?>
