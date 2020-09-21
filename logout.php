<?php 

    session_start(); 
    
    /*session is started if you don't write this line can't use $_Session  global variable*/
    unset($_SESSION['userId']);
    unset($_SESSION['userName']);
    session_destroy(); 

    header("Location: index.php");
    exit; 
    
?>