<?php
if (isset ($_POST['correcto'])) {
    session_start();
    $_SESSION['examen3']='paso4ok';
    header("location: ./examen3.php");
}
else{
    header("location: aviso.php"); 
}