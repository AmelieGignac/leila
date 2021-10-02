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