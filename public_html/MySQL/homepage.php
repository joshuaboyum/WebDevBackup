<?php 

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
          background: url("images/backgground.jpg") no-repeat center center fixed; 
          -webkit-background-size: cover;
          -moz-background-size: cover;
          -o-background-size: cover;
          background-size: cover;
        }
        
        
        #content {
            
            margin-top: 60px;
            background-color: rgba(255, 255, 255, 0.85);
            border-radius: 17px;
            border: 2px solid white;
            height: 800px;
        }  
        
        h1 {
            
            margin-top: 30px;
        }
        
        body {
            text-align: center;
            background: none;
        }
        
        .container {
            
            background-color: none;

            
        }
        
        .card {
            
            border: 2px solid black;
            float: left;
            height: 480px;
        }
        
        .navbar-nav.navbar-center {
            position: absolute;
            left: 50%;
            transform: translatex(-50%);
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
      
      
      
      <div class="container" id="content">
      
        <h1>Welcome to OmnibusWeb!</h1>
          
        <br><br>
          
        <h3>Here you will be able to:</h3>
          
        <br><br>
          
        <div class="row">
          <div class="col-sm-4">
            <div class="card">
              <img src="images/download.png" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title">Gallery</h5>
                <p class="card-text">View a gallery of this year's Omni books.</p>
                <a href="gallery.php" class="btn btn-primary">Go to Gallery</a>
              </div>
            </div>
          </div>
          <div class="col-sm-4">
            <div class="card">
              <img src="images/assignmentimage.png" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title">View Assignments</h5>
                <p class="card-text">Once in the book gallery, click on a book to see the book sheet and the assignments for that book!</p>
              </div>
            </div>
          </div>
          <div class="col-sm-4">
            <div class="card">
              <img src="images/uploadimage.png" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title">Upload Completed Assignments</h5>
                <p class="card-text">Once you have completed an assignment, upload it so the group can see your work!</p>
              </div>
            </div>
          </div>
        </div>
      
      
      
      </div>
      
      
      
      
      
    

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>