<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<?php
   
           
if(isset($_POST['get_option']))
{
include ("conn.php");
$state = $_POST['get_option'];

$query = "select max(cors_no) as cors_no from cors where Branches='$state'  and level!='' AND TY=0  order by cors_no ";
$result = mysqli_query($conn,$query);
while($row=mysqli_fetch_array($result))
{
   $section_Id1=$row['cors_no']+1;
?>
<font size="3">
<input  name="cors_no"   size="15"   id="new_select4"    readonly required="required"  class="form-control input-lg" value="<? echo $section_Id1; ?>" style="text-align: center" ></font>
<?
}
 exit;
}

?>