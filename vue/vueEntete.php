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
    <link rel="stylesheet" href="css/style.css">
        <!-- Enfin, incluez votre script suggestion.js -->
        <script src="modele/suggestion.js"></script>
    <title></title>
</head>
<body>
    
    <nav class="navbar navbar-dark bg-dark" alt="vueEntete">
        <!--Boutton Accueil-->
        <a class="navbar-brand" href="./?action=defaut">Accueil</a>
        <img src="image/CouvertureEntete.jpg" alt="imgEntete" class="img-responsive">


        <!--Boutton coulissant-->
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarEntete" aria-controls="navbarEntete" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarEntete">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                    <a class="nav-link" href="./?action=dico">Recherche par lettre</a>
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
                <br> 
                
                
                <?php
                    if(isset($_SESSION['login'])){
                ?>
                
                <li class="nav-item">
                    <a href="./?action=mesInfos" class="nav-link">Mes informations</a>
                </li>
                
                
                <li class="nav-item">
                    <a class="nav-link" href="./?action=login&type=out">Se déconnecter</a>
                </li>
                <?php }else{?>
                <li class="nav-item">
                    <a class="nav-link" href="./?action=login&type=in">Se connecter</a>
                </li>
                <?php }?>

            </ul>
        </div>

            <div class="container-fluid"></div>
                <div class="row align-center">
                    <div class="col-sx-12 col-md-12 col-lg-12">
                        <form action="./?action=affichage" class="d-flex flex-row" method="POST">
                        <input type="text" id="mot" name="mot" placeholder="Saisir un mot" class="form-control">
                        </form>
                        <!-- Container pour afficher les suggestions -->
                        <form action="./?action=affichage" class="d-flex flex-row" method="POST">
                        <div style="background-color: white;">
                            <div id="suggestionsContainer" class="suggestions-container" style="display: block;"></div>
                        </div>
                        </form>
                        <!-- Script pour gérer les suggestions -->
                        <script src="modele/suggestion.js"></script>
                    </div>
                </div>
    </nav>

