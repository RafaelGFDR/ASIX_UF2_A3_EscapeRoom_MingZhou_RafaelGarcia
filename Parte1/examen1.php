<?php
   session_start(); 
    if(!isset($_SESSION['examen1'])){
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
    <form action="proceso3.php" method="post">
        <div class="row">
            <div class="column-2 imaje">
                <button class='botonexam' type="submit" name="correcto"><img src="../img/A1.jpg" alt=""></button>
            </div>
            <div class="column-2 imaje">
            <button class='botonexam' type="submit" name="falso"><img src="../img/B1.jpg" alt=""></button>
            </div>
        </div>
    </form>
</body>
</html>