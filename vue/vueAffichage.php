<div class="contenuAffichage" style="background-color: lightgray">

  <?php
  if ($estTrouve) {
    ?>
    <!-- Affichage des informations sur le mot centré -->
    <center><h1><?=$unMot->getLibelle()?></h1></center> 
    <center><h2><?=$unMot->getDefinition()?></h2></center>
    
    <?php if (ModeleMotDAO::isPhoto($unMot->getId())): ?>
      <div class="slider-container">
        <div class="menu">
          <?php for ($i = 0; $i < count($lesPhotos); $i++): ?>
            <label for='slide-dot-<?=($i+1)?>'></label>
          <?php endfor; ?>
        </div>
        
        <?php for ($i = 0; $i < count($lesPhotos); $i++): ?>
          <input class="slide-input" id="slide-dot-<?=($i+1)?>" type="radio" name="slides" checked>
          <img class="slide-img" src="./image/<?=$lesPhotos[$i]['fichier']?>">
        <?php endfor; ?>
      
      </div>
    <?php endif; ?>

    <!-- Affichage des liens pour les mots précédents et suivants -->
    <div>
    <?php
    $idMotPrecedent = ModeleMotDAO::getMotPrecedent($unMot->getId());
    $idMotSuivant = ModeleMotDAO::getMotSuivant($unMot->getId());
    $motSuivantApercu = ModeleMotDAO::getMotSuivantApercu($unMot->getId());
    $motPrecedentApercu = ModeleMotDAO::getMotPrecedentApercu($unMot->getId());

    echo '<div style="display: flex;">';
    echo '<div>';

    echo '<button onclick="window.location.href=\'./?action=affichage&mot=' . $idMotPrecedent->getId() . '\'">';
    if (isset($motPrecedentApercu)) {
        echo implode(",<br>\n", $motPrecedentApercu);
    }
    echo '</button>';

    echo '</div>';

    echo '<div>';
    
    echo '<button onclick="window.location.href=\'./?action=affichage&mot=' . $idMotSuivant->getId() . '\'">';
    if (isset($motSuivantApercu)) {
        echo implode(",<br>\n", $motSuivantApercu);
    }
    echo '</button>';
    
    echo '</div>';
    echo '</div>';
    ?>
    </div> <!-- Fin de la division pour les liens précédents et suivants -->

    <!-- Affichage des mots associés -->
    <?php
    if ($unMot instanceof Mot) {
      $idMotValue = $unMot->getId();
    } else {
      $idMotValue = 0; // Valeur par défaut
    }

    $motsAssocies = ModeleMotDAO::obtenirMotsAssocies($idMotValue);
    include 'vue/vueAffichageMotsAssocies.php';
    ?>

  <?php
  } else {
  ?>
    <div> Mot inconnu </div>
  <?php
  }
  ?>
</div>
