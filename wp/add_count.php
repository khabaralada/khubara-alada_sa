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
<title>الإعداد</title>
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
<h1><small>  الإعداد
</small></h1>
</section>

 



 
<section class="content" dir=rtl>
<div class="box box-info">
<div class="box-body">


<div align="center">
 
	 
		
<table id='example1'  class="table table-bordered table-striped"  dir=ltr >

								<form method="POST" name="form2" action="<?php echo( $self ); ?>" >
									<tr>
										<td align="center" width="4%" bgcolor="#EBEBEB" dir="rtl">
										&nbsp;</td>
										<td align="center"   bgcolor="#EBEBEB" dir="rtl">
						<b><font face="Droid Arabic Kufi" size="2">الايقونة</font></b></td>
										<td align="center"   bgcolor="#EBEBEB" dir="rtl">
						<b><font face="Droid Arabic Kufi" size="2">العدد</font></b></td>
										<td align="center"   bgcolor="#EBEBEB" dir="rtl">
						<b><font face="Droid Arabic Kufi" size="2">النص (انجليزي)</font></b></td>
										<td align="center"   bgcolor="#EBEBEB" dir="rtl">
						<b><font face="Droid Arabic Kufi" size="2">النص (عربي)</font></b></td>
										<td align="center" width="3%" bgcolor="#EBEBEB" dir="ltr">
										<b>
										<font face="Droid Arabic Kufi" size="2">م 
										</font>
										</b></td>
									</tr>
 <?php
include ("../config.php");
$result=mysqli_query($conn,"select* from  count_pro");
$i=0;
$c=0;
while($row=mysqli_fetch_array($result))
{
$c++;
?>
									<tr>
										<td align="center"   dir="ltr">
																	
								<span lang="ar-sa">						
							
								<font face="Tahoma" color="#FF0000">						
							
<input      name="checkbox[]" type="checkbox" id="checkbox[]" value="<?php echo $i++;?>" style="width: 100%"    ></font></span></td>
										<td align="center" width="23%" dir="ltr">
										 <font face="Droid Arabic Kufi" size="2">				 										
						
							<input  required="required"    name="logo[]" id="T5" size="20"     class="form-control" style="width: 100%; height:30; font-family:Droid Arabic Kufi; text-align:right" dir="ltr" required="required" placeholder="Menu Name" value="<?php echo $row['logo']; ?>" ></font></td>
										<td align="center" width="20%" dir="ltr">
										<font face="Droid Arabic Kufi" size="2">				 										
						
							<input  required="required"    name="T2[]" id="T4" size="20"     class="form-control" style="width: 100%; height:30; font-family:Droid Arabic Kufi; text-align:right" dir="ltr" required="required" placeholder="Menu Name" value="<?php echo $row['num']; ?>" ></font></td>
										<td align="center" width="30%" dir="ltr">
										<input  required="required"    name="T3[]" id="T2" size="20"     class="form-control" style="width: 100%; height:30; font-family:Droid Arabic Kufi; text-align:right" dir="ltr" required="required" placeholder="Menu Name" value="<?php echo $row['name_en']; ?>" ></td>
										<td align="center" width="21%" dir="ltr">
										<font face="Droid Arabic Kufi" size="2">				 										
						
							<input  required="required"    name="T1[]" id="T2" size="20"     class="form-control" style="width: 100%; height:30; font-family:Droid Arabic Kufi; text-align:right" dir="ltr" required="required" placeholder="Menu Name" value="<?php echo $row['name']; ?>" ></font></td>
										<td align="center" width="3%" dir="ltr" bgcolor="#EEEEEE">
										<font color="#FF0000">
										<font size="2" face="Tahoma">
									<?php echo $c; ?></font><font face="Tahoma"><font size="2">
										</font>
									
									<input  required="required"   type=hidden class=input2 id=roomno0 size=19 name=ID[] style="width: 243; height: 21" dir="rtl" value="	<?php echo $row['ID']; ?>"></font></font></td>
									</tr>
<?php
}
?>
									<tr>
										<td align="center" colspan="6" bgcolor="#EEEEEE">
										<input  required="required"   type="submit" value="Edit" name="B4" class="btn btn-primary dropdown-toggle"></td>
									</tr>
								</form>
								</table>
</div>

                 
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
 if("Edit"=="$B4")
{
 
if($checkbox){ 
foreach($_POST['checkbox'] as $i) { 
$ID= mysqli_real_escape_string($conn,htmlspecialchars($_POST['ID'][$i], ENT_QUOTES, "utf-8"));
$T1= mysqli_real_escape_string($conn,htmlspecialchars($_POST['T1'][$i], ENT_QUOTES, "utf-8"));
$T2= mysqli_real_escape_string($conn,htmlspecialchars($_POST['T2'][$i], ENT_QUOTES, "utf-8"));
$T3= mysqli_real_escape_string($conn,htmlspecialchars($_POST['T3'][$i], ENT_QUOTES, "utf-8"));
$T4= mysqli_real_escape_string($conn,htmlspecialchars($_POST['T4'][$i], ENT_QUOTES, "utf-8"));
$T5= mysqli_real_escape_string($conn,htmlspecialchars($_POST['T5'][$i], ENT_QUOTES, "utf-8"));
$T6= mysqli_real_escape_string($conn,htmlspecialchars($_POST['T6'][$i], ENT_QUOTES, "utf-8"));
$T7= mysqli_real_escape_string($conn,htmlspecialchars($_POST['T7'][$i], ENT_QUOTES, "utf-8"));
$T8= mysqli_real_escape_string($conn,htmlspecialchars($_POST['T8'][$i], ENT_QUOTES, "utf-8"));
$T9= mysqli_real_escape_string($conn,htmlspecialchars($_POST['T9'][$i], ENT_QUOTES, "utf-8"));
$T10= mysqli_real_escape_string($conn,htmlspecialchars($_POST['T10'][$i], ENT_QUOTES, "utf-8"));
$S1= mysqli_real_escape_string($conn,htmlspecialchars($_POST['S1'][$i], ENT_QUOTES, "utf-8"));
$S2= mysqli_real_escape_string($conn,htmlspecialchars($_POST['S2'][$i], ENT_QUOTES, "utf-8"));
$S3= mysqli_real_escape_string($conn,htmlspecialchars($_POST['S3'][$i], ENT_QUOTES, "utf-8"));
$S4= mysqli_real_escape_string($conn,htmlspecialchars($_POST['S4'][$i], ENT_QUOTES, "utf-8"));
$S5= mysqli_real_escape_string($conn,htmlspecialchars($_POST['S5'][$i], ENT_QUOTES, "utf-8"));
$S6= mysqli_real_escape_string($conn,htmlspecialchars($_POST['S6'][$i], ENT_QUOTES, "utf-8"));
$C1= mysqli_real_escape_string($conn,htmlspecialchars($_POST['C1'][$i], ENT_QUOTES, "utf-8"));
$C2= mysqli_real_escape_string($conn,htmlspecialchars($_POST['C2'][$i], ENT_QUOTES, "utf-8"));

$S222= mysqli_real_escape_string($conn,htmlspecialchars($_POST['S222'][$i], ENT_QUOTES, "utf-8"));
$S22= mysqli_real_escape_string($conn,htmlspecialchars($_POST['S22'][$i], ENT_QUOTES, "utf-8"));
$R1= mysqli_real_escape_string($conn,htmlspecialchars($_POST['R1'][$i], ENT_QUOTES, "utf-8"));
$url= mysqli_real_escape_string($conn,htmlspecialchars($_POST['url'][$i], ENT_QUOTES, "utf-8"));

$D1= mysqli_real_escape_string($conn,htmlspecialchars($_POST['D1'][$i], ENT_QUOTES, "utf-8"));
$D2= mysqli_real_escape_string($conn,htmlspecialchars($_POST['D2'][$i], ENT_QUOTES, "utf-8"));
$D3= mysqli_real_escape_string($conn,htmlspecialchars($_POST['D3'][$i], ENT_QUOTES, "utf-8"));
$D4= mysqli_real_escape_string($conn,htmlspecialchars($_POST['D4'][$i], ENT_QUOTES, "utf-8"));
$D5= mysqli_real_escape_string($conn,htmlspecialchars($_POST['D5'][$i], ENT_QUOTES, "utf-8"));
$D6= mysqli_real_escape_string($conn,htmlspecialchars($_POST['D6'][$i], ENT_QUOTES, "utf-8"));
$D7= mysqli_real_escape_string($conn,htmlspecialchars($_POST['D7'][$i], ENT_QUOTES, "utf-8"));
$D8= mysqli_real_escape_string($conn,htmlspecialchars($_POST['D8'][$i], ENT_QUOTES, "utf-8"));
$D9= mysqli_real_escape_string($conn,htmlspecialchars($_POST['D9'][$i], ENT_QUOTES, "utf-8"));
$D10= mysqli_real_escape_string($conn,htmlspecialchars($_POST['D10'][$i], ENT_QUOTES, "utf-8"));
$logo= mysqli_real_escape_string($conn,htmlspecialchars($_POST['logo'][$i], ENT_QUOTES, "utf-8"));

$sql="UPDATE count_pro set name='$T1', num='$T2',name_en='$T3',logo='{$logo}'   where ID='$ID'";
if(@mysqli_query($conn,$sql))
{
echo '<meta http-equiv="refresh" content="1;url=add_count.php">';
}

}

echo '<script>
function myFunction() {
document.getElementById("snackbar").style.visibility = "hidden";
}
 document.getElementById("snackbar").style.visibility = "visible";
 window.setTimeout("hideMsg()", 2000); </script>';
}}

 

?>