<?php
   session_start(); 
    if(!isset($_SESSION['aviso'])){
    header("location: ../index.php?error=2");
    }
    // else if (isset($_SESSION['aviso']) && isset($_SESSION['aviso2'])){
    //     header("location: ../index.php?error=2");
    // }

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
<body id="cuidado">
    <h1 class="aviso">Tenga cuidado, que se equivocó</h1>
    <div class="explica2">
    <p>Aquí le recordamos las instrucciones</p>
    <p>Para que sepa cuál es la no humana le damos las siguientes instrucciones:</p>
    <ul>
        <li>Te miran, constantemente</li>
        <li>Se ven deformes, raros, extraños</li>
        <li>Te dan una sensación de incomodidad, miedo</li>
        <li>Les puede faltar alguna parte del cuerpo</li>
    </ul>
    </div>
    <form action="procesoAviso.php">
    <div class="botexpli1">
        <button class="botonexp1" type="submit" name="Aviso">Siguiente</button>
    </div>
    </form>
</body>
</html>