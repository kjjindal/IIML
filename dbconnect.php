<?php

$server="localhost";
$username="root";
$password="9588059706";//  enter your password
$database="legal";
error_reporting(0);
$conn=mysqli_connect($server,$username,$password,$database);

if(!$conn){
    echo 'not connected';
}

?>