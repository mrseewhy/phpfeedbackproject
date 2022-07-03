<?php 
define('DB_HOST', 'localhost');
define('DB_NAME', 'feebback');
define('DB_USER', 'root');
define('DB_PASSWORD', '');

$con = new mysqli(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);

if($con->error){
    die("Connection failed ". $con->connect_error);
}else{
    echo " you don kolo ooooooooo";
}