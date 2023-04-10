<?php
if (isset ($_POST['correcto'])) {
    session_start();
    $_SESSION['examen4']='paso5ok';
    header("location: ./examen4.php");
}
else{
    header("location: aviso.php"); 
}