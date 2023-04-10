<?php
if (isset ($_POST['envio'])) {
    session_start();
    $_SESSION['amen3']='paso5ok';
    header("location: ./amen3.php");
}
else{
    header("location: ./parte2.php?error=2"); 
}
