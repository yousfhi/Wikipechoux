<?php


if(isset($_POST['Rechercher'])&& $_POST['Rechercher']){
    //inclut le modèle nécessaire
    include_once "$racine/modele/ModeleMotDAO.php";

    //récupération de la lettre et du mot grâce à la lettre

    $lettre = filter_input(INPUT_POST, "lettre", FILTER_SANITIZE_STRING);

    $lesMots = ModeleMotDAO::getMots($lettre);
    //VAR_DUMP($lesMots);

    //entete

    //include "$racine/vue/vueEntete.php";

    //vueRechercheMot

    include "$racine/vue/vueRechercheParAlphabet.php";

    if(isset($lesMots)){
        include "$racine/vue/vueResultRecherche.php";
    }

    //vuePied

    //include "$racine/vue/vuePied.php";
}
else{
    include "$racine/vue/vueRechercheParAlphabet.php";
}
































//renvoyer tout l'objet mot et pas seulement nom_mot !!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!