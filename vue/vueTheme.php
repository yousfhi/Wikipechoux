<div class="contenu" style="background-color: lightgray">
    <div class="col-4 mx-auto text-center">
        <form action="./?action=theme" method="POST"> 
            <div>
                <select name="theme" id="theme">
                    <?php 
                        foreach ($lesThemes as $unTheme){
                    ?>
                    <option value="<?= $unTheme->getId()?>"><?=$unTheme->getLibelle()?></option>
                    <?php   
                        }
                    ?>
                </select>
            </div>
            <input type="submit" class="btn btn-success" value="Rechercher2" name="Rechercher2" />
        </form>
    </div>
    <br>
    <div class="container">
        <div class="col-md-8 mx-auto text-center">
            <?php
            if(isset($lesMots) &&  !is_null($lesMots[0])){                
            ?>
            <h1 class = "text-center">Résultat de la recherche du theme : <br> <?=$unTheme->getLibelle() ?></h1> 
            <br>
            <br>
            <br>
            <table>
                <thead>
                    <tr>
                        <th scope="col">Mot</th>
                    </tr>
                </thead>
                <tbody>
                    <?php 
                        foreach($lesMots as $unMot){
                    ?>
                    <tr>
                        <td scope='row'>
                           <a href="./?action=affichage&mot=<?= $unMot->getId() ?>"><?= $unMot->getLibelle()?></a>
                        </td>
                    </tr>
                    <?php
                        }
                    ?>
                </tbody>
            </table>
            <?php
                } 
                else{
                    echo "<br/><h2>Mot non référencé !</h2>";
                }
            ?>
        </div>
    </div>
</div>
<style>
    .contenu {
        overflow-y: auto;
        height: 75%; /* Ajout de cette propriété pour garantir une largeur maximale de 100% */
        padding: 15px; /* Ajout de padding pour améliorer l'apparence */
    }
</style>