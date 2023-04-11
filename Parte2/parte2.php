<?php
   session_start(); 
    if(!isset($_SESSION['finexamen'])){
    header("location: ../index.php?error=2"); 
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <title>Test de anormalidad</title>
<<<<<<< HEAD
    <link rel="shortcut icon" href="../img/icono.svg" type="image/x-icon">
=======
    <link rel="shortcut icon" href="./img/icono.svg" type="image/x-icon">
>>>>>>> 10d3da58d9813a63b4d0ec19d7f0a4703bd0c93e
    <link rel="stylesheet" href="../css/styles.css">
</head>
<body>
    <div>
        <div class="tituloIndex">
            <h1>TEST DE ANORMALIDAD</h1>
        </div>
    </div>
    <form action="proceso1.php" method="post">
        <div class="grupoBot">
            <input hidden type="text" name="ps1">
            <button class="botonIni" id="tachado" disabled>Examen</button>
            <br>
            <br>
            <button class="botonIni" type="submit" name="amen">Nivel de Amenaza</button>
        </div>
    </form>
    <?php
        if (isset($_GET['error2']) == 2) {
            echo "<script>alert('Error: D3bKFGarGe2ZDuv')</script>";
            echo "<script>window.location.href = 'parte2.php'</script>";
        }
    ?>
</body>
</html>