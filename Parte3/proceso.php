<?php
if (isset ($_POST['fin'])) {
    session_start();
    $_SESSION['juego']='pasook';
    header("location: ./juego.php");
}
else{
    header("location: ./parte3.php?error=3"); 
}
