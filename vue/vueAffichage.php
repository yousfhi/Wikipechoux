<!-- Fichier : vue/vueAffichage.php -->
<!DOCTYPE html>
<html>
<head>
  <title>Affichage Mot</title>
  <link rel="stylesheet" href=".\css\style.css">
</head>
<body>
  <?php
  if ($estTrouve) {
    ?>
    <!-- Display the word information centered -->
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

    <!-- Display links for the previous and next words -->
    <div>
      <?php
        $idMotPrecedent = ModeleMotDAO::getMotPrecedent($unMot->getId());
        $idMotSuivant = ModeleMotDAO::getMotSuivant($unMot->getId());
        $motSuivantApercu = ModeleMotDAO::getMotSuivantApercu($unMot->getId());

        // Vérifier si $idMotPrecedent est un entier avant d'appeler getId()
        if (is_int($idMotPrecedent)) {
          $idMotPrecedentValue = $idMotPrecedent;
        } elseif ($idMotPrecedent instanceof Mot) {
          $idMotPrecedentValue = $idMotPrecedent->getId();
        }

        // Vérifier si $idMotSuivant est un entier avant d'appeler getId()
        if (is_int($idMotSuivant)) {
          $idMotSuivantValue = $idMotSuivant;
        } elseif ($idMotSuivant instanceof Mot) {
          $idMotSuivantValue = $idMotSuivant->getId();
        }

        echo '<div style="display: flex;">';
        echo '<div>';
        echo '<button onclick="window.location.href=\'./?action=affichage&mot=' . $idMotPrecedentValue . '\'">Mot Précédent</button>';
        echo '</div>';
        
        echo '<div>';
        echo '<button onclick="window.location.href=\'./?action=affichage&mot=' . $idMotSuivantValue . '\'">Mot Suivant ';

        // Vérifier si $motSuivantApercu est défini avant d'utiliser implode
        if (isset($motSuivantApercu) && is_array($motSuivantApercu)) {
            echo implode(",<br>\n", $motSuivantApercu);
        }
        
        echo '</button>';
        echo '</div>';
        echo '</div>';
        
      ?>
    </div>

    <!-- Include the file with associated words -->
    <?php
      // Assurez-vous que $idMot est un objet Mot avant d'appeler getId()
      if ($idMot instanceof Mot) {
        $idMotValue = $idMot->getId();
      } else {
        // Définissez une valeur par défaut ou gérez l'erreur selon vos besoins
        $idMotValue = 0; // ou une autre valeur par défaut
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
</body>
</html>
