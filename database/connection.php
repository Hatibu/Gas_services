<?php
$servername ="localhost";
$username ="root";
$password ="";
$DBname = "gas_systemdb";

$connection = mysqli_connect($servername,$username,$password,$DBname);

if(!$connection){

    die(mysqli_connect_error());
}


?>