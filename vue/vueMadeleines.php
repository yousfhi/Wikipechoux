<!-- CSS only -->
<link rel="stylesheet" href="../css/Style.css">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">


<!-- Html -->
<head>
    <title>VueMadeleines</title>
</head>
<body style="background-color: lightgray">
    <div class="row">
        <div class="col-4 mx-auto text-center">
            <br> <br>
            <h1 >Les madeleines</h1>

            <br> <br>
            <table class="table col-md-8 mx-auto text-center">
                <thead>
                    <tr>
                        <th scope="col text-center">Id</th>
                        <th scope="col">Image</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    include_once "./modele/ModeleMadeleinesDAO.php";
                    $lesMadeleines = ModeleMadeleinesDAO::getMadeleines();
                    foreach($lesMadeleines as $uneMadeleine){
                    ?>
                    <tr >
                        <td> <?= $uneMadeleine -> getId() ?></td>
                        <td>
                            <a class = 'nav-link' href='./?action=detail&id=<?= $uneMadeleine -> getId() ?>'><img src="./image/petitesMadeleines/<?=$uneMadeleine->getImage()?>" alt=""  height="130px" width="200px"> </a>
                        </td>
                    </tr>
                    <?php }?>
                </tbody>
            </table>
        </div>
    </div>
</body>