<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<?php
   
           
if(isset($_POST['get_option']))
{
include ("conn.php");
$state = $_POST['get_option'];

$query = "select * from subjects   where Branches='$state' and cors='لغة صينية'";
$result = mysqli_query($conn,$query);
while($row=mysqli_fetch_array($result))
{
       echo "<option value=".$row['cors_ID']." >".$row['cors_name']."</option>";
}
 exit;
}

?>




 