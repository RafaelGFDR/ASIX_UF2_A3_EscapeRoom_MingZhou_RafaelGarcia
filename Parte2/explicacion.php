<?php
   session_start(); 
    if(!isset($_SESSION['explicacion'])){
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
<<<<<<< HEAD
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
    <h1 id="explica1">Continuemos</h1>
=======
    <h1 id="tit">Continuemos</h1>
>>>>>>> 10d3da58d9813a63b4d0ec19d7f0a4703bd0c93e
    <div id="explica1">
    <p>Usted ha completado exitosamente la primera evaluación</p>
    <p>Por ende pasaremos a la segunda</p>
    <p>Recuerde que sus decisiones tendrán una alta importáncia.</p>
    <p>Ahora comencemos con la explicación de la parte 2:</p>
    <p>A usted se le mostrará 1 foto de una criatura que nosotros tenemos cautiva</p>
    <p>Debe indicar su nivel de amenaza para que podamos dividir nuestro personal correctamente</p>
    <p>Y así tenerlos bajo vigilancia</p>
    </div>
<<<<<<< HEAD
    <form action="proceso2.php" method="post">
    <div class="botexpli1">
            <button class="botonexp1" type="submit" name="empezar">Empezar</button>
        </div>
    </form>
=======
>>>>>>> 10d3da58d9813a63b4d0ec19d7f0a4703bd0c93e
</body>
</html>