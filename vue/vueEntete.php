<?php
// vueEntete.php
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
?>
<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <!-- lien vers les URL javascript de Bootstrap -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

    <!-- liens css ici  -->
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/styleBarreDeRecherche.css">
    <link rel="stylesheet" href="css/styleAccueil.css">
    <link rel="stylesheet" href="css/styleRechercheParAlphabet.css">
    <link rel="stylesheet" href="css/styleMadeleines.css">
    <link rel="stylesheet" href="css/styleIntroduction.css">
    <link rel="stylesheet" href="css/styleHistorique.css">
    <link rel="stylesheet" href="css/styleMotAleatoire.css">
    <link rel="stylesheet" href="css/styleAffichage.css">
    <link rel="stylesheet" href="css/styleLogin.css">
    <script src="modele/suggestion.js"></script>
    <title></title>
</head>
<body> 

    <!-- Entete  -->
    <nav class="navbar navbar-dark" alt="vueEntete">
        <img src="image/CouvertureEntete.jpg" alt="imgEntete" class="img-responsive">
        
        <!-- Bouton de entete  -->
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarEntete" aria-controls="navbarEntete" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <!-- Contenu de entete  -->
        <div class="collapse navbar-collapse" id="navbarEntete">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                    <a class="nav-link" href="./?action=intro">Introduction</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="./?action=rechercheParAlphabet">Recherche par lettre</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="./?action=dico">Dictionnaire</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="./?action=rechercheMot">Recherche par mot</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="./?action=theme">Recherche par theme</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="./?action=madeleines">Madeleine</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="./?action=motAleatoire">Mot aléatoire</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="./?action=flashCode">Flash code</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="./?action=historique">Historique</a>
                </li>
                <?php
                    if(isset($_SESSION['login'])){//si utilisateur connecté
                        echo '<li class="nav-item">';
                        echo '<a href="./?action=mesInfos" class="nav-link">Mes informations</a>';
                        echo '</li>';
                        echo '<li class="nav-item">';
                        echo '<a class="nav-link" href="./?action=login&type=out">Se déconnecter</a>';
                        echo '</li>';
                    }else{//si non connecté
                        echo '<li class="nav-item">';
                        echo '<a class="nav-link" href="./?action=login&type=in">Se connecter</a>';
                        echo '</li>';
                    }
                ?>
            </ul>
        </div>
    </nav>

