<?php
error_reporting(0);
include('session.php'); 
include('font.php'); 
include ("../config.php");


?>
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>الاحصائيات</title>
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
<?php include("header.php"); ?>
<?php include("sidebar.php"); ?>

<div class="content-wrapper">

<section class="content-header" dir=rtl>
<h1><small>  الاحصائيات
</small></h1>
</section>

 



 
<section class="content" dir=rtl>
<div class="box box-info">
<div class="box-body">


<div align="center">
<table id='example1'  class="table table-bordered table-striped"  dir=rtl >


																	

			

											<form method="POST" action="<?php echo( $self ); ?>">
																	

			

										<tr>

											

											<td width="1%" align="center">

											&nbsp;</td>

											


											<td width="35%" align="center">

																						

																				<b>

																						

																				<font size="2">Count</font></b></td>

											

											<td width="33%" align="center">

																						

																				<b>

																						

																				<font size="2">Country</font></b></td>

											

											<td width="33%" align="center">

																						

																				<b>

																						

																				<font size="2">IP</font></b></td>

											

											<td width="3%" align="center">

																						

																				<p dir="ltr"><b>No.</b></td>

											

										</tr>

																<?php

include ("../config.php");
 $sums=0;
$result=mysqli_query($conn,"select distinct ip,country  from sing  where date=CURDATE() order by country");
$i=0;
$C=1;
$c=0;
while($row=mysqli_fetch_array($result))
{
    $ip=$row['ip'];

?>		<?php
								if($c%2==0)
								echo "<tr bgcolor=#F0F0F0>";
								else
								echo "<tr>";
								?>
										

											


	<input  required="required"   type="hidden" name="ID[]" size="37" style="border: 1px solid #000000; width:51; height:18" dir="rtl" value="<?php echo $row['ip']; ?>" >
 
											

											<td width="1%" align="center">

											<span lang="ar-sa">						
							
								<font face="Tahoma" color="#FF0000">						
							
<input    name="checkbox[]" type="checkbox" id="checkbox[]" value="<?php echo $i++;?>"  ></font></span></td>

											


											<td width="35%" align="center">

																						

																				<font color="#000000" size="2">

																						
<?php
$cc=0;
$result1=mysqli_query($conn,"select *  from sing  where date=CURDATE() and ip='$ip'");
while($row1=mysqli_fetch_array($result1))
{
$cc++;
    }
    $sums=$sums+$cc;
    echo $cc;
    ?>
</font></td>

											

											<td width="33%" align="center">

																						

																				<font color="#000000">

																						

																				<?php echo $row['country']; ?></font></td>

											

											<td width="33%" align="center">

																						

																				<font color="#000000" size="2">

																						

																				<?php echo $row['ip']; ?></font></td>

											

											<td width="3%" align="center">

																						

																				<span lang="ar-sa"><font color="#000000"><?php echo $C++; ?></font></span></td>

											

										</tr>

									

										 
<?php

}

?>

										<tr>
 
											

											<td width="36%" align="center" colspan="2" bgcolor="#EEEEEE">

											<b><font color="#FF0000">
											<span lang="ar-sa"><?php echo $sums; ?></span></font></b></td>

											


											<td width="69%" align="center" colspan="3">

																						

																				<font color="#FF0000"><b>Total</b></font></td>

											

										</tr>

									

										 
										<tr>

											<td width="112%" align="center" colspan="5" style="border-top-style: none; border-top-width: medium">

											<span lang="ar-sa">							
										<input  required="required"   type="submit" value="Delete" name="B2" style="color: #FFFFFF; font-family: Tahoma; border: 1px dashed #FFFFFF; background-color: #0066CC; width:129; height:24"><font size="2" face="Tahoma">&nbsp;
										</font>
											</td>

										</tr>
 
									

										</form>
 
									

								</table></div>

                 
                  </div>
</div>
</section>


</div><!-- /.content-wrapper -->
<?php include('footer.php'); ?>
    </div><!-- ./wrapper -->
  </body>
</html>

<?php

include ("../config.php");
if("Delete"=="$B2")
{
$ID=$_POST['ID']; 

if($checkbox){ 
foreach($_POST['checkbox'] as $i) { 

$sql="DELETE FROM sing   where ip='{$_POST['ID'][$i]}'";
if(@mysqli_query($conn,$sql))
{
echo '<meta http-equiv="refresh" content="1;url=si.php">';

}

 

}

echo '<script>
function myFunction() {
document.getElementById("snackbar3").style.visibility = "hidden";
}
 document.getElementById("snackbar3").style.visibility = "visible";
 window.setTimeout("hideMsg()", 2000); </script>';


}}

?>