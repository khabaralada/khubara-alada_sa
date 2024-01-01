<?php
error_reporting(0);

if ( phpversion() >= "4.2.0"){  
    extract($_POST);  
    extract($_GET);  
   extract($_SERVER);
}
$servername = "localhost";
$username = "khubaraa_db";
$password = "khubaraa_db";
$dbname = "khubaraa_db";
$conn = mysqli_connect($servername, $username, $password, $dbname);
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

mysqli_query($conn,"set names 'utf8';");

?> 

