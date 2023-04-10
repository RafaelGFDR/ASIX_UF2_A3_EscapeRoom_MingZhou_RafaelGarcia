<?php
if (isset ($_POST['envio'])) {
    session_start();
    $_SESSION['finamen']='paso9ok';
    header("location: ../Parte3/final.php");
}
else{
    header("location: ./parte2.php?error=2"); 
}