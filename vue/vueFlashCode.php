<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Flash Code</title>
    
    <!-- CSS Stylesheets -->
    <link rel="stylesheet" href="../css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
</head>

<body style="background-color: lightgray">

    <div class="row">
        <div class="col-4 mx-auto text-center">
            <br> <br>
            <h1>Flash Code</h1>
            <br> <br>
            <img src="image/flashCode.png" alt="Flash Code Image">
            
            <?php
            // Vérifier si des erreurs ont été transmises (par exemple, une erreur de code invalide)
            if (isset($erreur)) {
                echo '<p style="color: red;">' . $erreur . '</p>';
            }
            ?>

            <!-- Afficher le formulaire -->
            <form action="./?action=flashCode" method="POST">
            </form>
        </div>
    </div>

    <!-- Inclure tout ce qui est nécessaire après le formulaire, comme les pieds de page, etc. -->
    <!-- ... -->

</body>

</html>
