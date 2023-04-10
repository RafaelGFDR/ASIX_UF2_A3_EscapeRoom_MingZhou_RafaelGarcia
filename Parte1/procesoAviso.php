<?php
if (isset ($_POST['Aviso'])) {
    session_start();
    $_SESSION['aviso2']='aviso2ok';
    header("location: ./examen1.php");
}
else{
    header("location: ../index.php?error=2");
}
