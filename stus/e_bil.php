<?php
error_reporting(0);
include('session.php'); 
include('font.php'); 
include ("conn.php");

?>
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>البرنامج الأكاديمي</title>
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<link rel="shortcut icon" href="favicon.ico"/>
<script type="text/javascript">
function framePrint(whichFrame){
parent[whichFrame].focus();
parent[whichFrame].print();
}
</script>

 



</head>
<body class="skin-blue">
<div class="wrapper">      
<? include("header.php"); ?>
<? include("sidebar.php"); ?>

<div class="content-wrapper">

<section class="content-header" dir=rtl>
<h1><small>
إدارة القاعات الدراسية
</small></h1>
</section>

 



 
<section class="content" dir=rtl>
<div class="box box-info">
<div class="box-body">					   
 
                  <form role="form" action="edit_bil.php" method="post">
                    <!-- text input -->
                     
                    
                    <div class="form-group">
                      <label>المبني</label>
                      <select style="font-family: Arial"   style="font-family: Arial"   size="1" name="D2"   required    class="form-control"  >
							<option></option>
<?
$i=0;
include ("conn.php");
$query = "select * from branches ";
$result = mysqli_query($conn,$query);
$rows = mysqli_num_rows($result );
if($rows > 0 )
{
while($row=mysqli_fetch_array($result))
{
?>

<option value="<? echo $row['Branches_ID']; ?>"><? echo $row['Branches_name']; ?></option>
<?php } } ?>
					</select>
                    </div>
                    
                    
                     

                    <!-- textarea -->
                     
                                  

                    <!-- input states -->
                     
                     
                    
                     
                    
                    
                    <div class="form-group has-error">
 
<input type="submit" value="موافق" name="find"  class="btn btn-primary" style="float: left">                    
&nbsp;</p>
&nbsp;</div>
 
                  </form>

                </div> 
 

                  </div>
</div>
</section>


</div><!-- /.content-wrapper -->
<? include('footer.php'); ?>
    </div><!-- ./wrapper -->
  </body>
</html>

 