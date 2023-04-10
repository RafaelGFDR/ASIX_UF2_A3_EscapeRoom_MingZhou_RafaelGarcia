<?php
if (isset ($_POST['examen'])) {
    session_start();
    $_SESSION['explicacion1']='paso1ok';
    header("location: ./explicacion1.php");
}
else{
    header("location: ../index.php?error=2"); 
}
