<?php
if (isset ($_POST['empezar'])) {
    session_start();
    $_SESSION['amen1']='paso2ok';
    header("location: ./amen1.php");
}
else{
    header("location: ./parte2.php?error=2"); 
}
