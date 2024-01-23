    <?php
    if ($estTrouve) {
    ?>
        <!-- Display the word information centered -->
        <center><h1><?= $unMot->getLibelle() ?></h1></center> 
        <center><h2><?= $unMot->getDefinition() ?></h2></center>
    <?php

        // Check if the word has a photo
        if (ModeleMotDAO::isPhoto($unMot->getId())) {
      
    ?>
            <!-- Display a slider for photos -->
            <div class="slider-container">
                <div class="menu">
                    <?php
                        // Generate labels for each photo slide
                        for ($i = 0; $i < count($lesPhotos); $i++) {
                            echo "<label for='slide-dot-" . ($i+1) . "'></label>";
                        }
                    ?>
                </div>
      
                <?php
                    // Generate radio buttons and images for each photo slide
                    for ($i = 0; $i < count($lesPhotos); $i++) {
                        echo '<input class="slide-input" id="slide-dot-' . ($i+1) . '" type="radio" name="slides" checked>';
                        echo '<img class="slide-img" src="./image/' . $lesPhotos[$i]['fichier'] . '">';
                    }
                ?>
            </div>

            <!-- Display links for the previous and next words -->
            <div>
                <?php
                    // Get the IDs for the previous and next words
                    $idMotPrecedent = ModeleMotDAO::getMotPrecedent($idMot)->getId();
                    $idMotSuivant = ModeleMotDAO::getMotSuivant($idMot)->getId();

                    // Display links for the previous and next words
                    echo "<a href='./?action=affichage&mot=$idMotPrecedent'>Mot Précédent</a>";
                    echo "<a href='./?action=affichage&mot=$idMotSuivant'>Mot Suivant</a>";
                ?>
            </div>
    <?php
        }

        $idMotPrecedent = ModeleMotDAO::getMotPrecedent($idMot)->getId();
        $idMotSuivant = ModeleMotDAO::getMotSuivant($idMot)->getId();
        $motSuivantApercu = ModeleMotDAO::getMotSuivantApercu($idMot);
        echo '<div style="display: flex;">';
        echo '<div>';
        echo '<button onclick="window.location.href=\'./?action=affichage&mot=' . $idMotPrecedent . '\'">Mot Précédent</button>';
        echo '</div>';
        
        echo '<div>';
        echo '<button onclick="window.location.href=\'./?action=affichage&mot=' . $idMotSuivant . '\'">Mot Suivant ' . implode(",<br>\n", $motSuivantApercu) . '</button>';
        echo '</div>';
        echo '</div>';
        
        
      }
    else {
    ?>
        <!-- Display "Mot inconnu" if $estTrouve is false -->
        <div> Mot inconnu </div>
    <?php
      }
