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
<title>التصنيفات الفرعية
</title>
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
<h1><small>  التصنيفات الفرعية

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
						<td align="right"   dir="ltr" height="32" width="18%" bgcolor="#EEEEEE">
						<p align="center"><span lang="ar-sa">
						<font face="Droid Arabic Kufi" size="2">التصنيفات الرئيسية</font></span></td>
						<td align="right"  dir="ltr" height="32" width="78%">
							<p align="left">
						<span lang="ar-sa">
										<font face="Tahoma" size="2">
										<select required="required"   style="font-family: Arial; width: 100%; height:30; font-family:Droid Arabic Kufi; text-align:right"  size="1" name="Sub_cat_ID" style="font-weight: 700" dir="ltr">
						<option ></option>
<?php
include ("../config.php");
$result1=mysqli_query($conn,"select* from categories");
while($row1=mysqli_fetch_array($result1))
{
echo '<option value='.$row1['category_ID'].'>'.$row1['category_name'];
}
?>
										</select></font></span></td>
					</tr>
					<tr>
						<td align="right"   dir="ltr" height="32" width="18%" bgcolor="#EEEEEE">
						<p align="center"><span lang="ar-sa">
						<font face="Droid Arabic Kufi" size="2">اسم التصنيف 
						الفرعية</font></span></td>
						<td align="right"  dir="ltr" height="32" width="78%">
							<p align="center">
							<font face="Droid Arabic Kufi" size="2">				 										
						
							<input  required="required"    name="T1" id="T1" size="20"     class="form-control" style="width: 100%; height:30; font-family:Droid Arabic Kufi; text-align:left" dir="ltr" required="required" placeholder="Menu Name" ></font></td>
					</tr>
					<tr>
						<td align="right" dir="ltr" height="31" colspan="2" bgcolor="#EEEEEE">
										
						<p align="center">
	
	<font face="Droid Arabic Kufi" size="2">
	
	<input  required="required"   type="submit" value="Save" name="B2" style="color: #FFFFFF; font-family: Tahoma; font-size: 8pt; border: 1px dashed #FFFFFF; background-color: #737375; height:29; width:131"></font></td>
					</tr>
					</form>
					</form>
					</table> </div>
			</span></td>
		</tr>
		</table>
		
<table id='example1'  class="table table-bordered table-striped"  dir=ltr >

								<form method="POST" name="form2" action="<?php echo( $self ); ?>" >
									<tr>
										<td align="center" width="4%" bgcolor="#EBEBEB" dir="ltr">
										&nbsp;</td>
										<td align="center"   bgcolor="#EBEBEB" dir="ltr">
						<p align="center"><span lang="ar-sa">
						<font face="Droid Arabic Kufi" size="2">اسم التصنيف 
						الفرعية</font></span></td>
										<td align="center" width="25%" bgcolor="#EBEBEB" dir="ltr">
						<p align="center"><span lang="ar-sa">
						<font face="Droid Arabic Kufi" size="2">التصنيفات الرئيسية</font></span></td>
										<td align="center" width="4%" bgcolor="#EBEBEB" dir="ltr">
										<b>
										<font face="Tahoma" size="2">No.</font></b></td>
									</tr>
 <?php
include ("../config.php");
$result=mysqli_query($conn,"select* from subcategories,categories where category_ID=Sub_cat_ID");
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
							
<input   name="checkbox[]" type="checkbox" id="checkbox[]" value="<?php echo $i++;?>" style="width: 100%"    ></font></span></td>
										<td align="center" width="38%" dir="ltr">
										<font face="Droid Arabic Kufi" size="2">				 										
						
							<input  required="required"    name="T1[]" id="T2" size="20"     class="form-control" style="width: 100%; height:30; font-family:Droid Arabic Kufi; text-align:left" dir="ltr" required="required" placeholder="Menu Name" value="<?php echo $row['Sub_Name']; ?>" ></font></td>
										<td align="center" width="25%" dir="ltr" bgcolor="#EEEEEE">
										<?php echo $row['category_name']; ?></td>
										<td align="center" width="4%" dir="ltr" bgcolor="#EEEEEE">
										<font color="#FF0000">
										<font size="2" face="Tahoma">
									<?php echo $c; ?></font><font face="Tahoma"><font size="2">
										</font>
									
									<input  required="required"   type=hidden class=input2 id=roomno0 size=19 name=ID[] style="width: 243; height: 21" dir="rtl" value="	<?php echo $row['Sub_ID']; ?>"></font></font></td>
									</tr>
<?php
}
?>
									<tr>
										<td align="center" colspan="4" bgcolor="#EEEEEE">
										<input  required="required"   type="submit" value="Delete" name="B3"   class="btn btn-danger dropdown-toggle">&nbsp;&nbsp;&nbsp;
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
if("Save"=="$B2")
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


$sql="insert into subcategories set Sub_cat_ID='$Sub_cat_ID',Sub_Name='$T1'";
 

if(@mysqli_query($conn,$sql))
{
echo '<script>
function myFunction() {
document.getElementById("snackbar2").style.visibility = "hidden";
}
 document.getElementById("snackbar2").style.visibility = "visible";
 window.setTimeout("hideMsg()", 1000); </script>';
?><meta http-equiv="refresh" content="1;url=<?php echo( $self ); ?>"><?php

echo '<meta http-equiv="refresh" content="1;url=add_subcategories.php">';
}
}
 

elseif("Edit"=="$B4")
{
 
if($checkbox){ 
foreach($_POST['checkbox'] as $i) { 
$ID= mysqli_real_escape_string($conn,htmlspecialchars($_POST['ID'][$i], ENT_QUOTES, "utf-8"));
$T1= mysqli_real_escape_string($conn,htmlspecialchars($_POST['T1'][$i], ENT_QUOTES, "utf-8"));

$sql="UPDATE subcategories set Sub_Name='{$T1}' where Sub_ID='{$ID}'";
if(@mysqli_query($conn,$sql))
{
echo '<meta http-equiv="refresh" content="1;url=add_subcategories.php">';
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

$sql="delete from  subcategories where Sub_ID='{$_POST['ID'][$i]}'";
if(@mysqli_query($conn,$sql))
{
echo '<meta http-equiv="refresh" content="1;url=add_subcategories.php">';
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