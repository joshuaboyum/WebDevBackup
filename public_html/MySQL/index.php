<?php

    $link = mysqli_connect("shareddb-q.hosting.stackcp.net", "users-info-3131377c05", "thisisr3", "users-info-3131377c05");

    if (mysqli_connect_error()) {
        
        die ("ERROR");
        
    }  

    if ($_POST["email"] != '' && $_POST["password"] != '') {
        
        $email = $_POST["email"];

        $password = $_POST["password"];


        $query = "SELECT * FROM users where email LIKE '$email'";

        $tester = array();


        if ($result = mysqli_query($link, $query)) {

                while ($row = mysqli_fetch_array($result)) {

                $tester[] = $row;

                }
        }

        if (!empty($tester)) {

            $error = "This email address has aleady been used! Please enter a different email";        
            $error = '<div class="alert alert-danger" role="alert"><strong>There were error(s) in your form:</strong><br>'.$error.'</div>';
        } else {

            $query = "INSERT INTO users ( `email`, `password`) VALUES('$email', '$password')";
            mysqli_query($link, $query);
            $error = '<div class="alert alert-success" role="alert"><strong>You have been signed up! <a href="">Sign in here!</strong><br>'.$error.'</div>';

        }
    } 
    


    //$query = "INSERT INTO users ( `email`, `password`) VALUES('bigboi@gmail.com', 'lololol')";

    //$query = "UPDATE  `users` SET password = 'thisisr3' WHERE id = 1 LIMIT 1";
    
    //mysqli_query($link, $query);

    //$query = "SELECT * FROM users where email LIKE '%y%'";

    //if ($result = mysqli_query($link, $query)) {
        
        //while ($row = mysqli_fetch_array($result)) {
            
        //print_r($row);
            
        //}
        
    //}

?>







<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
      
    <style type="text/css">
      
        
        h1 {
            
            margin-top: 50px;
        }
        
        
        body {
            
            text-align: center;
        }
        
        .container {
            
            width: 600px;
            margin-top: 50px;
            
        }
      
      
      
      
      
      
      
      
    </style>

    <title>Hello, world!</title>
  </head>
  <body>
      
      <h1>Sign up!</h1>
      
      <div class="container">
      <form method="post">
          <div class="form-group">
            <label for="email">Email address</label>
            <input type="email" class="form-control" id="email" aria-describedby="emailHelp" placeholder="Enter email" name="email">
            <small id="emailHelp" class="form-text text-muted">We'll always share your email with everyone else.</small>
          </div>
          <div class="form-group">
            <label for="password">Password</label>
            <input name="password" type="password" class="form-control" id="password" placeholder="Password">
          </div>
          <div class="form-group form-check">
            <input type="checkbox" class="form-check-input" id="checkbox">
            <label class="form-check-label" for="checkbox">I agree to terms and conditions</label>
          </div>
          <button type="submit" class="btn btn-primary">Submit</button>
    </form>
    </div>
      
    <div class="container"><?php echo $error ?></div> 
      
      
      
      
      
      
      

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>