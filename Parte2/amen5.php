<?php
   session_start(); 
    if(!isset($_SESSION['amen5'])){
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
<<<<<<< HEAD
<audio id="myAudio1" preload="auto" loop>
    <source src="" type="audio/mpeg">
</audio>
    <div>
=======
<div>
>>>>>>> 10d3da58d9813a63b4d0ec19d7f0a4703bd0c93e
        <div>
            <h1 class="amenaza">Indique su nivel de amenaza</h1>
        </div>
    </div>
    <div class="row flex">
        <div class="column-1 flex">
            <img id="amen5" src="../img/amenaza1.jpg" alt="">
        </div>
<<<<<<< HEAD
    <div class="column-1 flex">
=======
        <div class="column-1 flex">
>>>>>>> 10d3da58d9813a63b4d0ec19d7f0a4703bd0c93e
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
<<<<<<< HEAD
      <form action="proceso9.php" method="post">
    <button class="botonexp1" type="submit" name="envio">Enviar</button>
      </form>
=======
    <button class="sub">Enviar</button>
>>>>>>> 10d3da58d9813a63b4d0ec19d7f0a4703bd0c93e
    </div>
  </div>
  <script src="../js/scripts.js"></script>
</body>
</html>