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
<title>القائمة الرئيسية</title>
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
<h1><small>  القائمة الرئيسية

</small></h1>
</section>

 



 
<section class="content" dir=rtl>
<div class="box box-info">
<div class="box-body">


<div align="center">
 
	<table border="1" width="100%" cellspacing="0" cellpadding="0" height="18" bordercolordark="#FFFFFF" bordercolorlight="#EEEEEE" style="border-collapse: collapse">
		 
		<tr>
			<td bgcolor="#FFFFFF">
			<p align="center"> 
			<div align="center">
<table id='example1'  class="table table-bordered table-striped"  dir=rtl >

						<form method="POST" name="form1" action="<?php echo( $self ); ?>" enctype="multipart/form-data" onSubmit="return check();">
					<tr>
						<td align="right"   dir="rtl" height="32" width="18%" bgcolor="#EEEEEE">
						<p align="center"><span lang="ar-sa">
						<font face="Droid Arabic Kufi" size="2">اسم القائمة</font></span></td>
						<td align="right"  dir="rtl" height="32" width="26%">
							<p align="center">
							<font face="Droid Arabic Kufi" size="2">				 										
						
							<input  required="required"    name="T1" id="T1" size="20"     class="form-control" style="width: 100%; height:30; font-family:Droid Arabic Kufi; text-align:right" dir="rtl" required="required" placeholder="Menu Name" ></font></td>
						<td align="right"  dir="rtl" height="32" width="18%" bgcolor="#EEEEEE">
							<p align="center">
							<font face="Droid Arabic Kufi" size="2">Name of the 
							list</font></td>
						<td align="right"  dir="rtl" height="32" width="36%">
							<p align="center">
							<font face="Droid Arabic Kufi" size="2">				 										
						
							<input  required="required"    name="T2" id="T3" size="20"     class="form-control" style="width: 100%; height:30; font-family:Droid Arabic Kufi; text-align:right" dir="rtl" required="required" placeholder="Menu Name" ></font></td>
					</tr>
					<tr>
						<td align="right"   dir="rtl" height="32" width="18%" bgcolor="#EEEEEE">
						<p align="center"><span lang="ar-sa">
						<font face="Droid Arabic Kufi" size="2">هل تريد قائمة 
						فرعية( drop down )</font></span></td>
						<td align="right"  dir="rtl" height="32" width="78%" colspan="3">
							<p align="left">
							<input     type="checkbox" name="C1" value="1" style="float: right"></td>
					</tr>
					<tr>
						<td align="right" dir="rtl" height="31" colspan="4" bgcolor="#EEEEEE">
										
						<p align="center">
	
	<font face="Droid Arabic Kufi" size="2">
	
	<input  required="required"   type="submit" value="New addition" name="B2"   ></font></td>
					</tr>
					</form>
					</form>
					</table> </div>
			</span></td>
		</tr>
		</table>
		
		<table  width=100% class="table table-striped table-bordered table-condensed"   style="border-collapse: collapse" border="1">
								<form method="POST" name="form2" action="<?php echo( $self ); ?>" >
									<tr>
										<td align="center" width="4%" bgcolor="#EBEBEB" dir="rtl">
										&nbsp;</td>
										<td align="center"   bgcolor="#EBEBEB" dir="rtl">
						<span lang="ar-sa">
						<font face="Droid Arabic Kufi" size="2">&nbsp;قائمة 
						فرعية( drop down)</font></span></td>
										<td align="center"   bgcolor="#EBEBEB" dir="rtl" colspan="2">
						<span lang="ar-sa"><b>
						<font face="Droid Arabic Kufi" size="2">اسم القائمة</font></b></span></td>
										<td align="center" width="4%" bgcolor="#EBEBEB" dir="rtl">
										<b>
										<font face="Tahoma" size="2">No.</font></b></td>
									</tr>
 <?php
include ("../config.php");
$result=mysqli_query($conn,"select* from  mune");
$i=0;
$c=0;
while($row=mysqli_fetch_array($result))
{
$c++;
?>
									<tr>
										<td align="center"   dir="rtl">
																	
								<span lang="ar-sa">						
							
								<font face="Tahoma" color="#FF0000">						
							
<input      name="checkbox[]" type="checkbox" id="checkbox[]" value="<?php echo $i++;?>" style="width: 100%"    ></font></span></td>
										<td align="center" width="19%" dir="rtl">
										<select required="required"   style="font-family: Arial; width: 100%; height:30; font-family:Droid Arabic Kufi; text-align:right"  size="1" name="D1[]">
										<?php if($row['up']==1) { ?> <option value="1">نعم</option><?php } else { ?><option value="0">لا</option><?php } ?>
										<option value="1">نعم</option>
										<option value="0">لا</option>
										</select></td>
										<td align="center" width="31%" dir="rtl">
										<font face="Droid Arabic Kufi" size="2">				 										
						
							<input  required="required"    name="T2[]" id="T4" size="20"     class="form-control" style="width: 100%; height:30; font-family:Droid Arabic Kufi; text-align:right" dir="rtl" required="required" placeholder="Menu Name" value="<?php echo $row['mune_en']; ?>" ></font></td>
										<td align="center" width="34%" dir="rtl">
										<font face="Droid Arabic Kufi" size="2">				 										
						
							<input  required="required"    name="T1[]" id="T2" size="20"     class="form-control" style="width: 100%; height:30; font-family:Droid Arabic Kufi; text-align:right" dir="rtl" required="required" placeholder="Menu Name" value="<?php echo $row['mune']; ?>" ></font></td>
										<td align="center" width="4%" dir="rtl" bgcolor="#EEEEEE">
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
										<td align="center" colspan="5" bgcolor="#EEEEEE">
										<input  required="required"   type="submit" value="Delete" name="B3"   class="btn btn-danger dropdown-toggle">&nbsp;&nbsp;&nbsp;
										<input  required="required"   type="submit" value="Saving changes" name="B4" class="btn btn-primary dropdown-toggle"></td>
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
if("New addition"=="$B2")
{
 
$ID= mysqli_real_escape_string($conn,htmlspecialchars($_POST['ID'], ENT_QUOTES, "utf-8"));
$T1= mysqli_real_escape_string($conn,htmlspecialchars($_POST['T1'], ENT_QUOTES, "utf-8"));
$IDD= mysqli_real_escape_string($conn,htmlspecialchars($_POST['IDD'], ENT_QUOTES, "utf-8"));
$ID= mysqli_real_escape_string($conn,htmlspecialchars($_POST['ID'], ENT_QUOTES, "utf-8"));

$T2= mysqli_real_escape_string($conn,htmlspecialchars($_POST['T2'], ENT_QUOTES, "utf-8"));
$T3= mysqli_real_escape_string($conn,htmlspecialchars($_POST['T3'], ENT_QUOTES, "utf-8"));
$T4= mysqli_real_escape_string($conn,htmlspecialchars($_POST['T4'], ENT_QUOTES, "utf-8"));
$T5= mysqli_real_escape_string($conn,htmlspecialchars($_POST['T5'], ENT_QUOTES, "utf-8"));
$T6= mysqli_real_escape_string($conn,htmlspecialchars($_POST['T6'], ENT_QUOTES, "utf-8"));
$T7= mysqli_real_escape_string($conn,htmlspecialchars($_POST['T7'], ENT_QUOTES, "utf-8"));
$T8= mysqli_real_escape_string($conn,htmlspecialchars($_POST['T8'], ENT_QUOTES, "utf-8"));
$T9= mysqli_real_escape_string($conn,htmlspecialchars($_POST['T9'], ENT_QUOTES, "utf-8"));
$T10= mysqli_real_escape_string($conn,htmlspecialchars($_POST['T10'], ENT_QUOTES, "utf-8"));
$S1= mysqli_real_escape_string($conn,htmlspecialchars($_POST['S1'], ENT_QUOTES, "utf-8"));
$S2= mysqli_real_escape_string($conn,htmlspecialchars($_POST['S2'], ENT_QUOTES, "utf-8"));
$S3= mysqli_real_escape_string($conn,htmlspecialchars($_POST['S3'], ENT_QUOTES, "utf-8"));
$S4= mysqli_real_escape_string($conn,htmlspecialchars($_POST['S4'], ENT_QUOTES, "utf-8"));
$S5= mysqli_real_escape_string($conn,htmlspecialchars($_POST['S5'], ENT_QUOTES, "utf-8"));
$S6= mysqli_real_escape_string($conn,htmlspecialchars($_POST['S6'], ENT_QUOTES, "utf-8"));
$C1= mysqli_real_escape_string($conn,htmlspecialchars($_POST['C1'], ENT_QUOTES, "utf-8"));
$C2= mysqli_real_escape_string($conn,htmlspecialchars($_POST['C2'], ENT_QUOTES, "utf-8"));

$S222= mysqli_real_escape_string($conn,htmlspecialchars($_POST['S222'], ENT_QUOTES, "utf-8"));
$S22= mysqli_real_escape_string($conn,htmlspecialchars($_POST['S22'], ENT_QUOTES, "utf-8"));



$sql="insert into mune set  mune='$T1',up='$C1',mune_en='$T2',sort='0',type='0',timer1='0' ";
 

if(@mysqli_query($conn,$sql))
{
echo '<script>
function myFunction() {
document.getElementById("snackbar2").style.visibility = "hidden";
}
 document.getElementById("snackbar2").style.visibility = "visible";
 window.setTimeout("hideMsg()", 1000); </script>';
?><meta http-equiv="refresh" content="1;url=<?php echo( $self ); ?>"><?php

echo '<meta http-equiv="refresh" content="1;url=add_menu.php">';
}
}
 

elseif("Saving changes"=="$B4")
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
$sql="UPDATE mune set mune='$T1', mune_en='$T2',up='$D1',sort='0',type='0',timer1='0'   where ID='$ID'";
if(@mysqli_query($conn,$sql))
{
echo '<meta http-equiv="refresh" content="1;url=add_menu.php">';
}

}

echo '<script>
function myFunction() {
document.getElementById("snackbar").style.visibility = "hidden";
}
 document.getElementById("snackbar").style.visibility = "visible";
 window.setTimeout("hideMsg()", 2000); </script>';
}}

elseif("Delete"=="$B3")
{
 

if($checkbox){ 
foreach($_POST['checkbox'] as $i) { 

$sql="DELETE FROM mune where ID='{$_POST['ID'][$i]}'";
if(@mysqli_query($conn,$sql))
{
echo '<meta http-equiv="refresh" content="1;url=add_menu.php">';
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