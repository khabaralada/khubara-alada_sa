<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<?php
   
           
if(isset($_POST['get_option']))
{
include ("conn.php");
$state = $_POST['get_option'];

$query = "select * from teacher where Branches='$state'  ";
$result = mysqli_query($conn,$query);
while($row=mysqli_fetch_array($result))
{
       echo "<option value=".$row['teacher_id']." >".$row['teacher_name']."</option>";
}
 exit;
}

?>




 