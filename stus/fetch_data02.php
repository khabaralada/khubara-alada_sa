<meta http-equiv="Content-Type" content="text/html; charset=utf-8"><option></option>
<?php
   
           
if(isset($_POST['get_option']))
{
include ("conn.php");
$state = $_POST['get_option'];

$query = "select * from catogry where Branches='$state'  ";
$result = mysqli_query($conn,$query);
while($row=mysqli_fetch_array($result))
{
       echo "<option value=".$row['catogry_ID']." >".$row['catogry']."</option>";
}
 exit;
}

?>