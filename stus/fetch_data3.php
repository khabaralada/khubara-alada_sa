<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<?php
   
           
if(isset($_POST['get_option']))
{
include ("conn.php");
$state = $_POST['get_option'];

$query = "select * from building where Building='$state'  order by cou_class";
$result = mysqli_query($conn,$query);
while($row=mysqli_fetch_array($result))
{
       echo "<option>".$row['cou_class']."</option>";
}
 exit;
}

?>




 