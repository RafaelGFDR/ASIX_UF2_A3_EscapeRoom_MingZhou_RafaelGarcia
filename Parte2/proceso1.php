<?php
if (isset ($_POST['amen'])) {
    session_start();
    $_SESSION['explicacion']='paso1ok';
    header("location: ./explicacion.php");
}
else{
    header("location: ./parte2.php?error=2"); 
}
