<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<?php
   
           
 
include ("conn.php");
 
  $searchTerm = mysqli_real_escape_string($conn,htmlspecialchars(intval($_GET['term']), ENT_QUOTES, "utf-8"));

$query = "select * from student   where stu_name LIKE '%".$searchTerm."%' ";
$result = mysqli_query($conn,$query);
while($row=mysqli_fetch_array($result))
{
$data[] = $row['stu_name'];
}
 
echo  $data ;
?>




 