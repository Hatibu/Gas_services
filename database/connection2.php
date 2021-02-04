<?php
$servername ="localhost";
$username ="root";
$password ="";
$DBname = "m-pesadb";

$connect = mysqli_connect($servername,$username,$password,$DBname);

if(!$connect){

    die(mysqli_connect_error());
}








?>