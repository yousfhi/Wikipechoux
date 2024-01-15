<!-- CSS only -->
<link rel="stylesheet" href="../css/Style.css">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">

<!-- Html -->
<head>
    <title>VueMotAleatoire</title>
</head>
<body style="background-color: lightgray">
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
</body>
