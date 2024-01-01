<meta http-equiv="Content-Type" content="text/html; charset=utf-8"><option></option>
 

<?php
   
           
if(isset($_POST['get_option']))
{
include ("config.php");
$state = $_POST['get_option'];
$query1 = "select* from subjects,cors where cors.cors_ID=subjects.cors_ID and  ID='$state'   ";
$result1 = mysqli_query($conn,$query1);
$rows1 = mysqli_num_rows($result1 );
 
while($row1=mysqli_fetch_array($result1))
{
?>
                          <? if( $row1['price']>0) { ?>  <option value="<? echo $row1[price]; ?>">حضوري ( <? echo $row1[price]; ?> )ريال</option><?php } ?>
                          <? if( $row1['price1']>0) { ?> <option value="<? echo $row1[price1]; ?>">اونلاين ( <? echo $row1[price1]; ?> )ريال</option><?php } ?>

<?php
}
 
 

 exit;
}

?>