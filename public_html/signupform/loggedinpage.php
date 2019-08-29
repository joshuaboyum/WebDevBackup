<?php 

    session_start();

    if ($_COOKIE["login"] == "true") {
        
        echo $_COOKIE['id'];
        
        $_SESSION['id'] = $_COOKIE['id'];
        
        echo $_SESSION['id'];
    
    } else {
        
        unset($_SESSION);
    }

    if (array_key_exists('id', $_SESSION)) {
        
        
        echo "<p>Logged in! <a href='diary1.php?logout=1'>Log out</a></p>";
    

    } else {
        
        header("Location: diary1.php");
    }



?>