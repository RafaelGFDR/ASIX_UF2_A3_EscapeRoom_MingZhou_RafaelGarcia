<?php
   session_start(); 
    if(!isset($_SESSION['explicacion1'])){
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
    <form action="proceso2.php" method="post">
        <h1 id="explica1">Bienvenido administrador</h1>
        <div id="explica1">
            <p>Usted ha sido contratado para hacer un serie de acciones, tenemos altas expectativas de usted </p>
            <p>Recuerde que sus decisiones tendrán una alta importáncia.</p>
            <p>Ahora comencemos con la explicación del examen:</p>
            <p>A usted se le mostraran 2 fotos de 2 criaturas, una es humana y la otra no. </p>
            <p>Para que sepa cuál es la no humana le damos las siguientes instrucciones:</p>
            <ul>
                <li>Te miran, constantemente</li>
                <li>Se ven deformes, raros, extraños</li>
                <li>Te dan una sensación de incomodidad, miedo</li>
                <li>Les puede faltar alguna parte del cuerpo</li>
            </ul>
        </div>
        <div class="botexpli1">
            <button class="botonexp1" type="submit" name="empezar1">Empezar</button>
        </div>
    </form>
</body>
</html>