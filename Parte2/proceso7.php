<?php
if (isset ($_POST['envio'])) {
    session_start();
    $_SESSION['quest2']='paso7ok';
    header("location: ./pregunta2.php");
}
else{
    header("location: ./parte2.php?error=2"); 
}
