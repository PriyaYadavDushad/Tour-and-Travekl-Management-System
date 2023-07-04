<?php 

session_start();
if(!isset($_SESSION['username'])){


    header("Location: http://localhost/traveland1/admin/login.php");
}

?>



<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">

 
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>

<link rel="stylesheet" href="css/open-iconic-bootstrap.min.css">
<link rel="stylesheet" href="css/animate.css">

<link rel="stylesheet" href="css/owl.carousel.min.css">
<link rel="stylesheet" href="css/owl.theme.default.min.css">
<link rel="stylesheet" href="css/magnific-popup.css">

<link rel="stylesheet" href="css/aos.css">

<link rel="stylesheet" href="css/ionicons.min.css">

<link rel="stylesheet" href="css/bootstrap-datepicker.css">
<link rel="stylesheet" href="css/jquery.timepicker.css">


<link rel="stylesheet" href="css/flaticon.css">
<link rel="stylesheet" href="css/icomoon.css">
<link rel="stylesheet" href="css/style.css">


  <style>
    /* Remove the navbar's default rounded borders and increase the bottom margin */ 
   ound color and some padding to the footer */
   
  </style>
</head>
<body>

<section>
<div class="fluid-container  bg-primary">
<div class="container">
  <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar ftco-navbar-light" id="ftco-navbar">
    <a class="navbar-brand" href="#"><span class="pt-3 pb-3 pl-2 pr-2 bg-dark" style="font-family: sans-serif; font-size:40px;">TRAVELAND</span></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
   </button>

    <ul class="navbar-nav ">
      
    <li> <h5 style="color:white; margin-top:20px; margin-left:400px; font-weight:bold; ">Welcome <?php echo $_SESSION['username']; ?> </h5> 
    </li>
      <li class="nav-item active">
        <a class="nav-link  text-white" href="login.php" style="margin-left: 50px;">Logout<span class="sr-only"></span></a>
      </li>
    </ul>
  </nav>
</div>
</div>
    </section>

    <section>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">

  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
    <div class="navbar-nav" style="margin-left: 300px;">
      <a class="nav-item nav-link active text-primary" style="margin-left: 20px;" href="home.php">HOME<span class="sr-only">(current)</span></a>
      <a class="nav-item nav-link active text-primary" style="margin-left: 20px;" href="users.php">USERS<span class="sr-only">(current)</span></a>
      <a class="nav-item nav-link text-primary"        style="margin-left: 20px;" href="flight.php">FLIGHT</a>
      <a class="nav-item nav-link text-primary"        style="margin-left: 20px;" href="train.php">TRAIN</a>
      <a class="nav-item nav-link text-primary"        style="margin-left: 20px;" href="bus.php">BUS</a>
      <a class="nav-item nav-link text-primary"        style="margin-left: 20px;" href="car.php">CAR</a>
      <a class="nav-item nav-link text-primary"        style="margin-left: 20px;" href="#">ENQUIRIES</a>
      <a class="nav-item nav-link text-primary"        style="margin-left: 20px;" href="#" tabindex="-1" aria-disabled="true">MANAGE PAGES</a>
    </div>
  </div>
</nav>
    

<div class="container">    
  <div class="row">
  <div class="col-sm-4">
    <div class="card">
      <div class="card-body bg-primary pt-5 pb-5">
        <h5 class="card-title  text-white">Users</h5>
        <p class="card-text">0</p>
        <p class="card-text">Records</p>
       
      </div>
    </div>
  </div>

  <div class="col-sm-4">
    <div class="card">
      <div class="card-body bg-warning pt-5 pb-5 " style="float: left;">
        <h5 class="card-title text-white">Bookings</h5>
        <p class="card-text text-white">00</p>
        <p class="card-text text-white">Records</p>
       
       
      </div>
    </div>
  </div>

  <div class="col-sm-4" >
    <div class="card" >
      <div class="card-body bg-danger pt-5 pb-5" style="float: left;">
        <h5 class="card-title text-white">Enquiries</h5>
        <p class="card-text text-white">0</p>
        <p class="card-text text-white">Records</p>
      </div>
    </div>
  </div>
</div>
</div>





<script src="js/jquery.min.js"></script>
    <script src="js/jquery-migrate-3.0.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.easing.1.3.js"></script>
    <script src="js/jquery.waypoints.min.js"></script>
    <script src="js/jquery.stellar.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/jquery.magnific-popup.min.js"></script>
    <script src="js/aos.js"></script>
    <script src="js/jquery.animateNumber.min.js"></script>
    <script src="js/bootstrap-datepicker.js"></script>
    <script src="js/scrollax.min.js"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
    <script src="js/google-map.js"></script>
    <script src="js/main.js"></script>
    </body>
    </html>
</body>
</html>
