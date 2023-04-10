<?php
if (isset ($_POST['correcto'])) {
    session_start();
    $_SESSION['finexamen']='paso7ok';
    header("location: ../Parte2/parte2.php");
}
else{
    header("location: aviso.php"); 
}