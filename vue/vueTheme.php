<div class="row">
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
            <br/>
        </form>
        <br/><br/>
    </div>
    
</div>

<div class="container">
    <br/>
    
    <br/><br/>
    <div class="row">
        <div class="col-md-8 mx-auto text-center">

        <?php
         //echo ('$lesMots : '.$lesMots[0]);
            if(isset($lesMots) &&  !is_null($lesMots[0])){                
        ?>
            <h1 class = "text-center">Résultat de la recherche du theme : <br> <?=$unTheme->getLibelle() ?></h1> <br> <br> <br>
                <table class="table">
                     <thead>
                        <tr>
                            <th scope="col">Mot</th>
                       </tr>
                    </thead>
                    <tbody>
                        
                    <?php foreach($lesMots as $unMot){
                    
                    ?>
                    <tr>
                        
                        <td scope='row'>
                           
                        <a href="./?action=affichagel&mot=<?= $unMot->getId() ?>"><?= $unMot->getLibelle()?>
                        </a>
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