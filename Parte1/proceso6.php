<?php
if (isset ($_POST['correcto'])) {
    session_start();
    $_SESSION['examen5']='paso6ok';
    header("location: ./examen5.php");
}
else{
    header("location: aviso.php"); 
}