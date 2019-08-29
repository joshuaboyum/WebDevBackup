<?php
    
    

    $link = mysqli_connect("shareddb-q.hosting.stackcp.net", "users-info-3131377c05", "thisisr3", "users-info-3131377c05");

    if (mysqli_connect_error()) {
        
        die ("ERROR");
        
    }  

    $error = "";

    if(isset($_POST["submit"])) {
        
        $bookname = $_POST["bookname"];
        
        $dirname = strtolower(str_replace(' ', '_', $bookname));
        
        $imagename = $_FILES['fileToUpload']['name'];
        
        $query = "INSERT INTO `onmiweb` (`foldername`, `imagename`, `bookname`) VALUES('$dirname', '$imagename', '$bookname')";
            
        mysqli_query($link, $query);

        mkdir("$dirname");
        
        $target_dir = "$dirname/";
        $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
        $uploadOk = 1;
        $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
        
        
        if ($uploadOk == 0) {
            $error =  "<div class='alert alert-danger' role='alert'>"."There was an error uploading this book"."</div>";
        // if everything is ok, try to upload file
        } else {
            if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
                $error =  "<div class='alert alert-success' role='alert'>"."$bookname has been added!"."</div>";
            } else {
                $error =  "<div class='alert alert-danger' role='alert'>"."There was an error uploading this book"."</div>";
            }
        }
        
    }

    
    
?>


<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>Hello, world!</title>
      
    <style type="text/css">
      
        html { 
          background: url("images/gallerybackground.jpg") no-repeat center center fixed; 
          -webkit-background-size: cover;
          -moz-background-size: cover;
          -o-background-size: cover;
          background-size: cover;
        }
        
        
        #content {
            
            background-color: rgba(255, 255, 255, 0);
        }  
        
        h1 {
            
            margin-top: 30px;
        }
        
        body {
            background: none;
        }
        
        
        .card {
            
            border: 2px solid white;
            width: 15rem;
            float: none;
            margin: 0 auto;
            margin-bottom: 50px;
        }
        
        .navbar-nav.navbar-center {
            position: absolute;
            left: 50%;
            transform: translatex(-50%);
        }
        
        .white {
            
            color: white;
        }
        
        #welcome {
            
            margin-top: 40px;
            margin-bottom: 40px;
            background-color: rgba(52, 58, 64, .85);
            border: 2px solid white;
            width: 500px;
            color: white;
            padding-bottom: 25px;
        }
        
        #bookmaker {
            
            width: 700px;
            background-color: rgba(255, 255, 255, .85);
            margin-top: 150px;
            border-radius: 15px;
            padding: 25px;
            border: 2px solid black;
            margin-bottom: 50px;
            
        }
        
        button {
            
            margin-top: 15px;
        }
        
        #yeet {
            
            width: 700px;
        }
    

    </style>
      
  </head>
  <body>
      
      
      <nav class="navbar navbar-expand-lg sticky-top navbar-dark bg-dark">
          <a class="navbar-brand" href="#">OmnibusWeb</a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>

          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav navbar-center mr-auto">
              <li class="nav-item active">
                <a class="nav-link" href="homepage.php">Home <span class="sr-only">(current)</span></a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="gallery.php">Gallery</a>
              </li>
            </ul>
          </div>
      </nav>
      
      <div class="container" id="bookmaker">
          
          
          <form method="post"  enctype="multipart/form-data">
              <div class="form-group">
                <label for="bookname">Book name</label>
                <input type="text" class="form-control" id="bookname" name="bookname" aria-describedby="emailHelp" placeholder="Enter name of book">
              </div>
              <div class="form-group">
                  <label for="exampleFormControlFile1"></label>
                  <input type="file" class="form-control-file" id="fileToUpload" name="fileToUpload">
              </div>
              <div class="form-group">
                  <input type="submit" value="Upload Image" name="submit">
              </div>
          </form>
      
      </div>
      
      <div class="container" id="yeet"><?php echo $error; ?></div>
      
      
      
      
      
    

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>