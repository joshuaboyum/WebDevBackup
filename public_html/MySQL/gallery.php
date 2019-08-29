<?php 
    
    $link = mysqli_connect("shareddb-q.hosting.stackcp.net", "users-info-3131377c05", "thisisr3", "users-info-3131377c05");

    if (mysqli_connect_error()) {
        
        die ("ERROR");
        
    }  

    $query = "SELECT * FROM onmiweb";

    $cards = "";

    if ($result = mysqli_query($link, $query)) {

        while ($row = mysqli_fetch_array($result)) {
            
            $bookname = $row["bookname"];
            
            $foldername = $row["foldername"];
            
            $imagename = $row["imagename"];
            
            $src = $foldername."/".$imagename;
            
            if ($row["id"] == 1) {
                
                $cards = $cards."<div class='row'><div class='col-sm-4'><div class='card'><img src='$src' class='card-img-top' alt='...'><div class='card-body'><h5 class='card-title'>$bookname</h5><p class='card-text'></p><a href='$foldername/index.php' class='btn btn-secondary'>Go to Book</a></div></div></div>";
            } else {
                
                if ((($row["id"] - 1) % 3) == 0) {
                
                    $cards = $cards."</div>"."<div class='row'><div class='col-sm-4'><div class='card'><img src='$src' class='card-img-top' alt='...'><div class='card-body'><h5 class='card-title'>$bookname</h5><p class='card-text'></p><a href='$foldername/index.php' class='btn btn-secondary'>Go to Book</a></div></div></div>";
                
                } else {
                    
                    $cards = $cards."<div class='col-sm-4'><div class='card'><img src='$src' class='card-img-top' alt='...'><div class='card-body'><h5 class='card-title'>$bookname</h5><p class='card-text'></p><a href='$foldername/index.php' class='btn btn-secondary'>Go to Book</a></div></div></div>";
                    
                }  
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
            text-align: center;
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
      
      <div class="container" id="welcome">
          
          <div class="row">
              
              <div class="col-sm">
                  
                  <h1>Welcome to The Gallery!</h1>

              </div>

          </div>
          
      </div>
      
      
      <div class="container-fluid" id="content">
          
          
          <?php echo $cards; ?>
          
          
          
          
    <!--<div class="row">
              <div class="col-sm-4">
                <div class="card">
                  <img src="images/hobbit.jpg" class="card-img-top" alt="...">
                  <div class="card-body">
                    <h5 class="card-title">The Hobbit</h5>
                    <p class="card-text"></p>
                    <a href="gallery.php" class="btn btn-secondary">Go to Book</a>
                  </div>
                </div>
              </div>
              <div class="col-sm-4">
                <div class="card">
                  <img src="images/eusebius.jpg" class="card-img-top" alt="...">
                  <div class="card-body">
                    <h5 class="card-title">Church Histories</h5>
                    <p class="card-text"></p>
                    <a href="gallery.php" class="btn btn-secondary">Go to Book</a>
                  </div>
                </div>
              </div>
              <div class="col-sm-4">
                <div class="card">
                  <img src="images/confessions.jpg" class="card-img-top" alt="...">
                  <div class="card-body">
                    <h5 class="card-title">Confessions</h5>
                    <p class="card-text"></p>
                    <a href="gallery.php" class="btn btn-secondary">Go to Book</a>
                  </div>
                </div>
              </div>
        </div>
        <div class="row">
              <div class="col-sm-4">
                <div class="card">
                  <img src="images/gawain.jpg" class="card-img-top" alt="...">
                  <div class="card-body">
                    <h5 class="card-title">Sir Gawain</h5>
                    <p class="card-text"></p>
                    <a href="gallery.php" class="btn btn-secondary">Go to Book</a>
                  </div>
                </div>
              </div>
              <div class="col-sm-4">
                <div class="card">
                  <img src="images/fellowship.jpg" class="card-img-top" alt="...">
                  <div class="card-body">
                    <h5 class="card-title">The Fellowship</h5>
                    <p class="card-text"></p>
                    <a href="gallery.php" class="btn btn-secondary">Go to Book</a>
                  </div>
                </div>
              </div>
              <div class="col-sm-4">
                <div class="card">
                  <img src="images/twotowers.jpg" class="card-img-top" alt="...">
                  <div class="card-body">
                    <h5 class="card-title">Two Towers</h5>
                    <p class="card-text"></p>
                    <a href="gallery.php" class="btn btn-secondary">Go to Book</a>
                  </div>
                </div>
              </div>
        </div>
        <div class="row">
              <div class="col-sm-4">
                <div class="card">
                  <img src="images/gawain.jpg" class="card-img-top" alt="...">
                  <div class="card-body">
                    <h5 class="card-title">Sir Gawain</h5>
                    <p class="card-text"></p>
                    <a href="gallery.php" class="btn btn-secondary">Add Book</a> 
                  </div>
                </div>
              </div>
        </div> -->
      </div> 
      
      
      
      
      
      
    

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>