<?php 

session_start();
  if(isset($_POST['login'])){
  

    include ("connection.php");

    $name = $_POST['user'];
    $pass = $_POST['pass'];

    $sql = "select * from admin where username= '$name' and password = '$pass' ";

    $result = mysqli_query($conn, $sql);

    $num = mysqli_num_rows($result);

    if($num == 1){

        $_SESSION['username'] = $name;
        header("Location: http://localhost/traveland1/admin/home.php");
        
    }else{

        header("Location: http://localhost/traveland1/login.php");
        echo '<div class="alert alert-danger">Username and password are not matched<div>';
    }

}else{

    echo "username and password not matched";

}




?>