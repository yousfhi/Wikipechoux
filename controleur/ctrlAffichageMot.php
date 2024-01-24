<?php
include_once "$racine/modele/ModeleThemeDAO.php";
include_once "$racine/modele/ModeleMotDAO.php";

// Récupérer tous les thèmes
$lesThemes = ModeleThemeDAO::getAllTheme();

// Initialiser la variable $lesMots
$lesMots = array();

// Vérifier si le formulaire a été soumis
if (isset($_POST['Rechercher2']) && $_POST['Rechercher2']) {
    // Récupérer le thème sélectionné
    $themeId = filter_input(INPUT_POST, "theme", FILTER_VALIDATE_INT);

    // Vérifier si le thème sélectionné est valide
    if ($themeId !== false) {
        // Récupérer le thème et les mots associés à ce thème
        $themeSelectionne = ModeleThemeDAO::getThemeById($themeId);
        $lesMots = ModeleMotDAO::getMotbyTheme($themeId);
    }
}

// Inclure les vues
include "$racine/vue/vueEntete.php";
include "$racine/vue/vueTheme.php";
include "$racine/vue/vuePied.php";
?>
