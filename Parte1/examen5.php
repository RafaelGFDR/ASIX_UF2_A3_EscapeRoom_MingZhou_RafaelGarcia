<?php
   session_start(); 
    if(!isset($_SESSION['examen5'])){
    header("location: ../index.php?error=2"); 
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Test de anormalidad</title>
    <link rel="shortcut icon" href="../img/icono.svg" type="image/x-icon">
    <link rel="stylesheet" href="../css/styles.css">
</head>
<body>
    <div>
        <div class="examen">
            <h1>Haz una decision</h1>
        </div>
    </div>
    <div class="row">
    <form action="proceso7.php" method="post">
        <div class="column-2 imaje">
        <button class='botonexam' type="submit" name="correcto"><img src="../img/A5.jpg" alt=""></button>
        </div>
        <div class="column-2 imaje">
        <button class='botonexam' type="submit" name="falso"><img src="../img/B5.jpg" alt=""></button>
        </div>
    </form>
    </div>

</body>
</html>