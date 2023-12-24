<?php
session_start();
include 'connection.php';

if(isset($_POST['submit']))
{
  $email =$_POST['emailr'];  
  $password =$_POST['passr'];
  $cpassword =$_POST['cpassr'];
  if($password == $cpassword){
    $query = "INSERT INTO `login_users`(`email`,`password`)
    VALUES ('$email','$password')";
    $query_run = mysqli_query($con,$query);
 
    if($query_run)
        {
            echo '<script type="text/javascript"> alert("Data added Successfully! ") 
            document.location.href="dashboard(u).php";
            </script>';

        }
    else
        {
            echo '<script type="text/javascript"> alert("Data Added  UnSuccessfull!")
        
            </script>';
        }
    }
}
else
{
  echo '<script type="text/javascript"> alert("Invalid  Form!")
        
  </script>';

}


?>