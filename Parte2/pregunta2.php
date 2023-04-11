<<<<<<< HEAD
<?php
   session_start(); 
    if(!isset($_SESSION['quest2'])){
    header("location: ../index.php?error=2"); 
}

?>
=======
>>>>>>> 10d3da58d9813a63b4d0ec19d7f0a4703bd0c93e
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
    <h1 class="examen">¿Estás seguro que estás solo?</h1>
    <div class="row flex">
<<<<<<< HEAD
    <form action="proceso8.php" method="post">
        <div class="column-2" id="pregunta">
            <button class="botonexp1" type="submit" name="envio" id="tachado" disabled>Sí</button>
        </div>
        <div class="column-2" id="pregunta">
            <button class="botonexp1" type="submit" name="envio">No</button>
        </div>
    </div>
</body>
</body>
=======
        <div class="column-2" id="pregunta">
            <button class="sub">Sí</button>
        </div>
        <div class="column-2" id="pregunta">
            <button class="sub">No</button>
        </div>
    </div>
</body>
>>>>>>> 10d3da58d9813a63b4d0ec19d7f0a4703bd0c93e
</html>