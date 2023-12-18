<!DOCTYPE html>
<html>
  <head>
    <title>Affichage Mot</title>
    <link rel="stylesheet" href=".\css\style.css">
  </head>
  <body>
    <?php
    if($estTrouve){
    ?>
      
        <center><h1><?=$unMot->getLibelle()?></h1> </center> 
        <center><h2><?=$unMot->getDefinition()?></h2> </center>
    <?php

        if(ModeleMotDAO::isPhoto($unMot->getId())){
      
      ?>
      

      
            <div class="slider-container">
            <div class="menu">
            <?php

            for($i = 0; $i < count($lesPhotos); $i++){
                echo "<label for='slide-dot-".($i+1)."'></label>";
            }
        ?>
          
        
            </div>
      
        <?php
            for($i = 0;$i < count($lesPhotos); $i++){
            echo '<input class="slide-input" id="slide-dot-'.($i+1).'" type="radio" name="slides" checked>' ;
            echo '<img class="slide-img" src="./image/'.$lesPhotos[$i]['fichier'].'">' ;
            }
        ?>
      
      
            </div>

            
        <div>
            <?php
            // Ajout des liens vers les mots précédent et suivant
            $motPrecedentId = $idMot - 1;
            $motSuivantId = $idMot + 1;

            // Lien vers le mot précédent s'il existe
            if ($motPrecedentId > 0) {
                echo "<a href='./?action=affichage&mot=$motPrecedentId'>Mot Précédent</a>";
            }

            // Lien vers le mot suivant s'il existe
            if ($motSuivantId <= 1) {
                echo "<a href='./?action=affichage&mot=$motSuivantId'>Mot Suivant</a>";
            }
            ?>
        </div>
      <?php
        }
       
      
    }
      
      
    else{
      ?>
    <div> Mot inconnu </div>
    <?php
      }
      ?>
        
  </body>
</html>