<?php
if (isset ($_POST['correcto'])) {
    session_start();
    $_SESSION['examen2']='paso3ok';
    header("location: ./examen2.php");
}

else{
    session_start();
    $_SESSION['aviso']='paviso1ok';
    header("location: aviso.php");  
}