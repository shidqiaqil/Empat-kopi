<!DOCTYPE html>
<html lang="en">
<head>
  <title>Empat kopi</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
  <link href="fontawesome/css/all.css" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="css/Home.css">
  <link rel="stylesheet" type="text/css" href="css/Navbar.css">
</head>

<body>
    <!--membuat navbar--> 
    <nav class="navbar navbar-expand-lg navbar-light " style="background-color: white;">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
          <a class="navbar-brand" href="#"><img src="Image\capture.jpg" alt="" style="width: 150px; height:60px;"></a>
          <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
            <li class="nav-item active">
              <a class="nav-link font-weight-bold " href="Home.php">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link font-weight-bold" href="Menu.php">Order</a>
            </li>
            <li class="nav-item">
              <a class="nav-link font-weight-bold" href="#">Report</a>
            </li>
            <li class="nav-item">
              <a class="nav-link font-weight-bold" href="#">Profile</a>
            </li>
          </ul>
        </div>
      </nav>

      <!--membuat gambar (Carousel) dibawah navbar-->
      <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img class="d-block w-100" src="Image\kopi1.jpg">
            <div class="carousel-caption d-none d-md-block">
                <a href="Menu.php" class="btn btn-primary btn-lg font-weight-bold" id="btncashier">ORDER</a>
                <h5>EMPAT KOPI</h5>
                <p style="font-family: verdana;">All you need to feel better, is coffee</p>  
            </div>
          </div>
          <div class="carousel-item">
            <img class="d-block w-100" src="Image\kopi2.jpg" >
            <div class="carousel-caption d-none d-md-block">
                <a href="" class="btn btn-primary btn-lg font-weight-bold" id="btncashier">PESAN</a>
                <h5>EMPAT KOPI</h5>
                <p style="font-family: verdana;">All you need to feel better, is coffee</p>
                
            </div>
          </div>
          <div class="carousel-item">
            <img class="d-block w-100" src="Image\kopi3.jpg" >
            <div class="carousel-caption d-none d-md-block">
                <a href="" class="btn btn-primary btn-lg font-weight-bold" id="btncashier">PESAN</a>
                <h5>EMPAT KOPI</h5>
                <p style="font-family: verdana;">All you need to feel better, is coffee</p>
            </div>
          </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>
      <div>
          <h2 id="slogan">CRAFTED BY US, FOR YOU</h2>
      </div>

  <!-- Footer -->
  <footer class="page-footer font-small  pt-4">

    <!-- Footer Elements -->
    <div class="container">

      <!-- Social buttons -->
      <ul class="list-unstyled list-inline text-center">
        <li class="list-inline-item">
          <a href="" class="btn-floating btn-fb mx-1">
            <i class="fab fa-facebook text-white"></i>
          </a>
        </li>
        <li class="list-inline-item">
          <a href="" class="btn-floating btn-tw mx-1">
            <i class="fab fa-twitter text-white"> </i>
          </a>
        </li>
        <li class="list-inline-item">
          <a href="" class="btn-floating btn-gplus mx-1">
            <i class="fab fa-google-plus-g text-white"> </i>
          </a>
        </li>
        <li class="list-inline-item">
          <a href="" class="btn-floating btn-li mx-1">
            <i class="fab fa-linkedin-in text-white"> </i>
          </a>
        </li>

      </ul>
      <!-- Social buttons -->

    </div>
    <!-- Footer Elements -->

    <!-- Copyright -->
    <div class="footer-copyright text-center py-3" style="color: white;">© 2020 Copyright:
      <a href="" style="color: white;"> Empatkopi.com</a>
    </div>
    <!-- Copyright -->

  </footer>
  <!-- Footer -->

</body>
</html>
