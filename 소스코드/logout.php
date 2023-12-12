<?php 
    session_start();
        
    unset($_SESSION["id"  ]);
    unset($_SESSION["name"]);
        
    header("Location:admin_login_main.php");
?>