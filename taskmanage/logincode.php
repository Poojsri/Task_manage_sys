<?php
session_start();
include 'connection.php';

if (isset($_POST['submit'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];
    $sql1 = "SELECT * FROM login_admin WHERE email='$email' and password='$password'";
    $sql2 = "SELECT * FROM login_users WHERE email='$email' and password='$password'";
    $result1 = mysqli_query($con, $sql1);
    $result2 = mysqli_query($con, $sql2);
    
    $resultcheck1 = mysqli_num_rows($result1);
    $resultcheck2 = mysqli_num_rows($result2);

    if ($resultcheck1 > 0) {
        $_SESSION['email'] = $email;
        echo '<script type="text/javascript"> alert("Login Successful! ") 
        document.location.href="dashboard(a).php";
        </script>';
    } if ($resultcheck2 > 0){
         $_SESSION['email'] = $email;
        echo '<script type="text/javascript"> alert("Login Successful! ") 
        document.location.href="dashboard(u).php";
        </script>';

    }
    
    else {
        echo 'Login Unsuccessful!';
    }
}
?>