<?php
if (isset ($_POST['envio'])) {
    session_start();
    $_SESSION['amen4']='paso6ok';
    header("location: ./amen4.php");
}
else{
    header("location: ./parte2.php?error=2"); 
}