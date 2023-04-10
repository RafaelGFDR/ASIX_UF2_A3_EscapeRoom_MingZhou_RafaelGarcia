<?php
if (isset ($_POST['empezar1'])) {
    session_start();
    $_SESSION['examen1']='paso2ok';
    header("location: ./examen1.php");
}
else{
    
    header("location: ../index.php?error=2"); 
}