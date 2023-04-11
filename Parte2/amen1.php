<?php
   session_start(); 
    if(!isset($_SESSION['amen1'])){
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
    <script src="https://kit.fontawesome.com/7822954312.js" crossorigin="anonymous"></script>
</head>
<body>
<audio id="myAudio1" preload="auto" loop>
    <source src="" type="audio/mpeg">
</audio>
    <div>
        <div>
            <h1 class="amenaza">Indique su nivel de amenaza</h1>
        </div>
    </div>
    <div class="row flex">
        <div class="column-1 flex">
            <img id="amen1" src="../img/amenaza3.jpg" alt="">
        </div>
    <div class="column-1 flex">
        <div class="wrapper">
    <div class="section">
      <ul class="emojis">
        <li class="slide-emoji">Bajo</li>
        <li>Neutral</li>
        <li>Alto</li>
        <li>Peligroso</li>
        <li>Mortal</li>
      </ul>
    </div>
    <div class="slider">
      <div class="thumb"><span></span></div>
      <div class="progress-bar"></div>
      <input type="range" min="0" value="0" max="100">
      </div>
      <br>
      <br>
      <br>
      <br>
      <form action="proceso3.php" method="post">
    <button class="botonexp1" type="submit" name="envio">Enviar</button>
      </form>
    <button class="sub">Enviar</button>
    </div>
  </div>
  <script src="../js/scripts.js"></script>
</body>
</html>