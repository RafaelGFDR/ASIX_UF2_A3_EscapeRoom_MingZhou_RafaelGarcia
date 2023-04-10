<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <title>Test de anormalidad</title>
    <link rel="shortcut icon" href="./img/icono.svg" type="image/x-icon">
    <link rel="stylesheet" href="./css/styles.css">
</head>
<body>
    <div>
        <div class="tituloIndex">
            <h1>TEST DE ANORMALIDAD</h1>
        </div>
    </div>
    <form action="parte1/proceso1.php" method="post">
        <div class="grupoBot">
            <input hidden type="text" name="ps1">
            <button class="botonIni" type="submit" name="examen">Examen</button>
            <br>
            <br>
            <button class="botonIni" id="tachado" disabled>Nivel de Amenaza</button>
        </div>
    </form>
    <?php
        if (isset($_GET['error']) == 2) {
            echo "<script>alert('Error: D3bKFGarGe2ZDuv')</script>";
            echo "<script>window.location.href = 'index.php'</script>";
        }
    ?>
</body>
</html>