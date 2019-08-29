<?php

    session_start();

    if (array_key_exists("logout", $_GET)) {
        
        unset($_SESSION);
        
        echo $_SESSION['id'];
        
        setcookie("id", "", time() - 60*60);
        
        setcookie("login", "false", time()- 60*60);
        
        $_COOKIE["login"] = "false";
        
    } else if (array_key_exists("id", $_SESSION) OR array_key_exists("id", $_COOKIE)) {
        
        header("Location: loggedinpage.php");
    }

    $link = mysqli_connect("shareddb-q.hosting.stackcp.net", "users-info-3131377c05", "thisisr3", "users-info-3131377c05");

    if (mysqli_connect_error()) {
        
        die ("ERROR");
    }

    $error = "";

    if (array_key_exists("submit", $_POST)) {
        
        
        if (!$_POST['email']) {
            
            $error .= "An email address is required<br>";
        }
        
        
        if (!$_POST['password']) {
            
            $error .= "A password is required<br>";
        }
        
        if ($error != "") {
            
            $error = "<p>There were error(s) in your form:</p>".$error;
        }    
        
        if ($error == "") {
            
            $password = $_POST["password"];
            
            $email = $_POST["email"];
            
            $query = "INSERT INTO `logintable` (`email`, `password`) VALUES('$email', '$password')";
            
            mysqli_query($link, $query);
            
            $query = "SELECT * FROM `logintable` WHERE email = '$email'";
            
            
            if ($result = mysqli_query($link, $query)) {
                
                $row = mysqli_fetch_array($result);
                
                $salt = md5($row[0]);
                    
                $newpassword = md5($salt.$password);
                
                $query = "UPDATE `logintable` SET password = '$newpassword' WHERE id = $row[0] LIMIT 1";
                
                mysqli_query($link, $query);
                
            }
            
            $_SESSION['id'] = $row[0];
                    
                    if ($_POST["stayLoggedIn"] == "yes") {
                    
                        setcookie("id", $row[0], time() + 60*60*365);
                        
                        setcookie("login", "true", time() + 60*60*365);

                        
                }
            
            header("Location: loggedinpage.php");
        }
    }



    if (array_key_exists("loginsubmit", $_POST)) {
        
        
        if (!$_POST['loginemail']) {
            
            $error .= "An email address is required<br>";
        }
        
        
        if (!$_POST['loginpassword']) {
            
            $error .= "A password is required<br>";
        }
        
        if ($error != "") {
            
            $error = "<p>There were error(s) in your form:</p>".$error;
        }    
        
        if ($error == "") {
            
            $password = $_POST["loginpassword"];
            
            $email = $_POST["loginemail"];
            
            $query = "SELECT * FROM `logintable` WHERE email = '$email'";
            
            if ($result = mysqli_query($link, $query)) {
                
                $row = mysqli_fetch_array($result);
                
                $salt = md5($row[0]);
                    
                $check = md5($salt.$password);
                
                if ($row['password'] == $check) {
                    
                    echo "LOGGED IN";
                    
                    $_SESSION['id'] = $row[0];
                    
                    if ($_POST["stayLoggedIn"] == "yes") {
                    
                        setcookie("id", $row[0], time() + 60*60*365);
                        
                        setcookie("login", "true", time() + 60*60*365);
                        
                        header("Location: loggedinpage.php");

                        
                }
                    
                } else {
                    
                    echo "PASSWORD OR EMAIL IS INCORRECT";
                }
                
                
                
            }
            
            
            
        }
    }


?>
























<form method="post">

    <input type="email" name="email" placeholder="your email">
    
    <input type="password" name="password" placeholder="Password">
    
    <input type="checkbox" name="stayLoggedIna" value="yes">
        
    <input type="submit" value="Sign up!" name="submit">
    
</form>

<form method="post">

    <input type="email" name="loginemail" placeholder="your email">
    
    <input type="password" name="loginpassword" placeholder="Password">
    
    <input type="checkbox" name="stayLoggedIn" value="yes">
        
    <input type="submit" name="loginsubmit" value="Log in!">
    
</form>

<?php echo $error; ?>