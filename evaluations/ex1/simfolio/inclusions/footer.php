    <footer>
        <div class="da">&copy;<?= $foot_franchise; ?></div>
        <nav class="navigation-secondaire">
            <a href="#" title="À venir"><?= $foot_polConfi; ?></a>
            <a href="#" title="À venir"><?= $foot_conditions; ?></a>
            <a href="?langue=fr" title="<?= $nomsLangues['fr']; ?>" class="<?php if($langueDefaut == $codeLangue) { echo 'actif'; } ?>">FR</a>
            <a href="?langue=en" title="<?= $nomsLangues['en']; ?>" class="<?php if($langueDefaut == $codeLangue) { echo 'actif'; } ?>">EN</a>
            <a href="?langue=ko" title="<?= $nomsLangues['ko']; ?>" class="<?php if($langueDefaut == $codeLangue) { echo 'actif'; } ?>">KO</a>
        </nav>
    </footer>
</body>
</html>