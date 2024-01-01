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


 

 
$query8 = "select * from branches where Branches_ID='1'";
$result8 = mysqli_query($conn,$query8);
while($row8=mysqli_fetch_array($result8))
{
  $Branches_name=$row8['Branches_name'];
  $Branches_name_en=$row8['Branches_name_en'];
$Branches_email=$row8['Branches_email'];
$Branches_mobile=$row8['Branches_mobile'];
$Branches_map=$row8['Branches_map'];
$Branches_address=$row8['Branches_address'];
}?>
