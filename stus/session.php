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


require ("conn.php");
if($_SESSION['login_type']==1) { 
$query = "select * from user where  username='$_SESSION[username]' and password='$_SESSION[password]' and go=1";
$result = mysqli_query($conn,$query);
$rows = mysqli_num_rows($result );
if ($rows== 1) {
while($row=mysqli_fetch_array($result))
{
}}
else {
?><meta http-equiv="refresh" content="60;url=updatePW.php"><?

 
} }

 
 



if(!isset($_SESSION['username'])){
?><meta http-equiv="refresh" content="0;url=logout.php"><?
      die();

}
?>


 <?php   

require 'arabicTools.class.php';
date_default_timezone_set('asia/riyadh');
  date('Y-m-d H:i:s'); 
 date_default_timezone_set('asia/riyadh');
  $synch_timestamp=date('Y-m-d H:i:s');

  $ar_date=ArabicTools::arabicDate('hj:Y-m-d',time()); 


$sql="insert into user_login set username='$_SESSION[username]',date=CURDATE(),time=NOW()";
if(mysqli_query($conn,$sql))
{
}
?>