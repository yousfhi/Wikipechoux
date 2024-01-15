<?php


//Intégration des modèles
include_once "$racine\modele\ModeleMotDAO.php";
include_once "$racine\classes\Mot.php";


$id =  filter_input(INPUT_GET, "mot", FILTER_VALIDATE_INT) ;

$unMot = ModeleMotDAO::getMotbyId($id);

if($unMot != null){
    $estTrouve = true;
            
    $idMot = $unMot->getId() ;
    $lesPhotos = ModeleMotDAO::getPhoto($idMot);
    $libelle = $unMot->getLibelle();
}
else{
    $estTrouve = false;
}

//Entete
include "$racine/vue/vueEntete.php";


include "$racine/vue/vueAffichage.php";

//Vue pied de page
include "$racine/vue/vuePied.php";