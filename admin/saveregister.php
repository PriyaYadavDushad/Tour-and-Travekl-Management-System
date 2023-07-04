<?php 
    include("connection.php");

   echo $name=$_POST['name'];
   echo  $pass=$_POST['password'];
   echo  $mobile=$_POST['mobile'];
   echo  $email=$_POST['remail'];
  

   $sql="INSERT INTO admin(username, password, mobile, email) VALUES( '{$name}', '{$pass}','{$mobile}', '{$email}')";

   $result= mysqli_query($conn, $sql)or die ("query unsuccefull..");


   header("Location: http://localhost/traveland1/admin/login.php");

   mysqli_close($conn);



?>