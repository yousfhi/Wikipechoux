<!-- CSS only -->
<link rel="stylesheet" href=".\css\Style.css">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
<body style="background-color: Lightgray">  
    <div class="row">
        <div class="col-4 mx-auto text-center">
            <form action="./?action=recherche" method="POST"> 
                <div>
                    <select class="combo" name="lettre" id="lettre">
                        <?php for($i= 65; $i<=90;$i++){
                        ?>
                        <option value="<?= chr($i)?>"><?=chr($i)?></option>
                        <?php
                        }
                        
                        ?>
                    </select>
                </div>
                <input type="submit" class="button btn-success" value="Rechercher" name="Rechercher" />
                <br/>
            </form>
            <br/><br/>
        </div>
    </div>
</body>  