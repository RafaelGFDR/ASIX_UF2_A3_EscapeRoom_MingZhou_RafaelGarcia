<?php
if (isset ($_POST['envio'])) {
    session_start();
    $_SESSION['quest1']='paso4ok';
    header("location: ./pregunta1.php");
}
else{
    header("location: ./parte2.php?error=2"); 
}
