<?php
   session_start(); 
    if(!isset($_SESSION['quest1'])){
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
    <h1 class="examen">¿Estás solo?</h1>
    <div class="row flex">
    <form action="proceso5.php" method="post">
        <div class="column-2" id="pregunta">
            <button class="botonexp1" type="submit" name="envio">Sí</button>
        </div>
        <div class="column-2" id="pregunta">
            <button class="botonexp1" type="submit" name="envio">No</button>
        </div>
    </form>
    </div>
</body>
</html>