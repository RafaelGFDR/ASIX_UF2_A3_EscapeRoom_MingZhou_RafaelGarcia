<?php
if (isset ($_POST['envio'])) {
    session_start();
    $_SESSION['amen2']='paso3ok';
    header("location: ./amen2.php");
}
else{
    header("location: ./parte2.php?error=2"); 
}
