<?php

$host = 'localhost';
$username = 'root';
$password = '';
$dbname = 'taskman';


$con= mysqli_connect($host,$username,$password,$dbname);

if(!$con)
{
    die('connection error:'.mysqliconnect_error());

}





?>