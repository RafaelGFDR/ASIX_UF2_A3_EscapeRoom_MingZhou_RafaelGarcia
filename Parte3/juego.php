<?php
   session_start(); 
    if(!isset($_SESSION['juego'])){
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
    <link rel="stylesheet" href="../css/juego.css">
    <script src="https://kit.fontawesome.com/7822954312.js" crossorigin="anonymous"></script>
</head>
<body>
<div id="container">
        <div class="mbox">
            <h2 id="contador">15</h2>
        <div id="maze">
            <div id="thingie">
                <div class="emo" id="emo">🔴</div>
            </div>
            <div id="home">
                <div class="emo">🟥</div>
            </div>
            <div class="barrier" id="top"></div>
            <div class="barrier" id="bottom"></div>
        </div>
            </div>
        <div class="controls">
            <div class="buttons">
                <button class="btn" id="bu"><div class="chevron">↑</div></button>
                <button class="btn" id="bd"><div class="chevron">↓</div></button>
                <button class="btn" id="bl"><div class="chevron">←</div></button>
                <button class="btn" id="br"><div class="chevron">→</div></button>
            </div>
        </div>
    </div>
    <script src="../js/juego.js"></script>
</body>
</html>