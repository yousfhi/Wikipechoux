<!-- Fichier : vue/vueAffichageMotsAssocies.php -->
<?php if ($motsAssocies && is_array($motsAssocies)): ?>
  <div>
    <h3>Mots associés :</h3>
    <ul>
      <?php foreach ($motsAssocies as $motAssocie): ?>
        <li><?= $motAssocie->getLibelle() ?></li>
      <?php endforeach; ?>
    </ul>
  </div>
<?php else: ?>
  <div>Aucun mot associé trouvé.</div>
<?php endif; ?>
