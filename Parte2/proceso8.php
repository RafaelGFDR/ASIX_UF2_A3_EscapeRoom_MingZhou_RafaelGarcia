<?php
if (isset ($_POST['envio'])) {
    session_start();
    $_SESSION['amen5']='paso8ok';
    header("location: ./amen5.php");
}
else{
    header("location: ./parte2.php?error=2"); 
}
