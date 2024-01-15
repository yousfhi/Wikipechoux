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


            $idMotPrecedent = ModeleMotDAO::getMotPrecedent($idMot)->getId();
            $idMotSuivant = ModeleMotDAO::getMotSuivant($idMot)->getId();

              echo "<a href='./?action=affichagel&mot=$idMotPrecedent'>Mot Précédent</a>";

              echo "<a href='./?action=affichagel&mot=$idMotSuivant'>Mot Suivant</a>";
              

          ?>
        </div>
      <?php
        }
            $idMotPrecedent = ModeleMotDAO::getMotPrecedent($idMot)->getId();
            $idMotSuivant = ModeleMotDAO::getMotSuivant($idMot)->getId();
            $motSuivantApercu = ModeleMotDAO::getMotSuivantApercu($idMot);
              echo "<a href='./?action=affichagel&mot=$idMotPrecedent'>Mot Précédent</a>";

              echo "<a href='./?action=affichagel&mot=$idMotSuivant'>Mot Suivant($motSuivantApercu)</a>";


      
    }
      
      
    else{
      ?>
    <div> Mot inconnu </div>
    <?php
      }
      ?>
        
  </body>
</html>
