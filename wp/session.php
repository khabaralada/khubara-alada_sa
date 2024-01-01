<?php
session_start();// Starting Session
 

$username=mysqli_real_escape_string($conn,htmlspecialchars($_SESSION['username'], ENT_QUOTES, "utf-8"));;
$password=mysqli_real_escape_string($conn,htmlspecialchars($_SESSION['password'], ENT_QUOTES, "utf-8"));;
$Branches=mysqli_real_escape_string($conn,htmlspecialchars($_SESSION['Branches'], ENT_QUOTES, "utf-8"));;
 
$acount_type=mysqli_real_escape_string($conn,htmlspecialchars($_SESSION['acount_type'], ENT_QUOTES, "utf-8"));;
$user_ID=mysqli_real_escape_string($conn,htmlspecialchars($_SESSION['user_ID'], ENT_QUOTES, "utf-8"));;
$iqama_no=mysqli_real_escape_string($conn,htmlspecialchars($_SESSION['iqama_no'], ENT_QUOTES, "utf-8"));; // Initializing Session
$email=mysqli_real_escape_string($conn,htmlspecialchars($_SESSION['email'], ENT_QUOTES, "utf-8"));; // Initializing Session
$name=mysqli_real_escape_string($conn,htmlspecialchars($_SESSION['name'], ENT_QUOTES, "utf-8"));; // Initializing Session
  $updates=mysqli_real_escape_string($conn,htmlspecialchars($_SESSION['updates'], ENT_QUOTES, "utf-8"));;
  $image=mysqli_real_escape_string($conn,htmlspecialchars($_SESSION['image'], ENT_QUOTES, "utf-8"));;
 

$acount_type=mysqli_real_escape_string($conn,htmlspecialchars($row['acount_type'], ENT_QUOTES, "utf-8"));;
 
$login_session = mysqli_real_escape_string($conn,htmlspecialchars($row['username'], ENT_QUOTES, "utf-8"));;


 

 
 



if(!isset($_SESSION['username'])){
?><meta http-equiv="refresh" content="0;url=logout.php"><?php
      die();

}
?>


 <?php   

require 'arabicTools.class.php';
date_default_timezone_set('asia/riyadh');
  date('Y-m-d H:i:s'); 
 date_default_timezone_set('asia/riyadh');
  $synch_timestamp=date('Y-m-d H:i:s');
  $time=date('H:i:s');

$ar_date=ArabicTools::arabicDate('hj:Y-m-d',time()); 



?>
<head>
<link href="https://fonts.googleapis.com/css?family=Amiri|Katibeh|Lateef|Scheherazade" rel="stylesheet">
<link href='https://fonts.googleapis.com/css?family=Droid%20Arabic%20Kufi' rel='stylesheet' type='text/css'>
</head>