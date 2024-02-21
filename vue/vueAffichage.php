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
   // if ($libelleMotSuivant !== null) {           
        echo "<a href='./?action=affichagel&mot=$idMotPrecedent' class='motNavig'>Mot Précédent($libelleMotPrecedent)</a>";
        echo "<a href='./?action=affichagel&mot=$idMotSuivant'>Mot Suivant($libelleMotPrecedent)</a>";
      //}else {
      //  echo "<a href='./?action=affichagel&mot=$idMotPrecedent' class='motNavig'>Mot Précédent($libelleMotPrecedent)</a>";
       // echo "Vous êtes au dernier mot de la liste";
     // }
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
