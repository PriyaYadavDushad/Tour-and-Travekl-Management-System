<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Traveland</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>

   
    
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">

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
      <li class="nav-item active">
        <a class="nav-link  text-white" href="login.php" style="margin-left: 700px;">Logout<span class="sr-only"></span></a>
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
      <a class="nav-item nav-link text-primary"  style="margin-left: 20px;" href="#">BOOKINGS</a>
      <a class="nav-item nav-link text-primary" style="margin-left: 20px;" href="#">ENQUIRIES</a>
      <a class="nav-item nav-link text-primary" style="margin-left: 20px;" href="#" tabindex="-1" aria-disabled="true">MANAGE PAGES</a>
    </div>
  </div>
</nav>
    </section>

    <section>
        <div class="container">
            <h2>All Users</h2>
            <?php 

                include("connection.php");

                 $sql="SELECT * FROM `users` WHERE users.u_id";

                 $result= mysqli_query($conn, $sql)or die ("query unsuccefull..");

                 if(mysqli_num_rows($result) > 0){

          ?>
            <table cellpadding="7px" border="1">
            <thead>
            <th>No.</th>
            <th>Name</th>
            <th>Mobile No</th>
            <th>Email</th>
    
            <th>Action</th>
            </thead>

            <tbody>
                <?php

                    while($row = mysqli_fetch_assoc($result))
                    {

                    

                ?>
                <tr>
                    <td><?php echo $row['u_id'];?></td>
                    <td><?php echo $row['uname'];?></td>
                    <td><?php echo $row['umobile'];?></td>
                    <td><?php echo $row['uemail'];?></td>
                   
                    <td>
                        <a href="edit.php">Edit</a>
                        <a href="delete-inline.php">Delete</a>
                    </td>
                </tr>
                    <?php } ?>
            </tbody>
        </table>
      <?php  }else{
          echo "No Records found..";
      } ?>
    
    </div>

    </section>







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