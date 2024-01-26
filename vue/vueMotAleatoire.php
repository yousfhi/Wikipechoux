<div class="contenuMotAleatoire" style="background-color: lightgray">
    <div class="row">
        <div class="col-4 mx-auto text-center">

            <br> <br>
            <h1>Mot aléatoire</h1>
             
             <a href="./?action=motAleatoire" class="btn btn-primary">Mot aléatoire</a>

             <?php

            if (isset($motAleatoire['libelle']) && isset($motAleatoire['definition'])) {
                echo "<p class = 'motAleatoire'> Mot : " . $motAleatoire['libelle'] . "<br> Définition : " . $motAleatoire['definition'] . "</p>";
            } else {
                echo "<p>Aucun mot trouvé</p>";
            }
            ?>


        </div>
    </div>
</div>

