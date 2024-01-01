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
<title>اضافة نص جديد في الصفحة</title>
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
<h1><small>  اضافة نص جديد في الصفحة
</small></h1>
</section>

 



 
<section class="content" dir=rtl>
<div class="box box-info">
<div class="box-body">


<div align="center">
 
	<table border="0" width="100%" cellspacing="0" cellpadding="0" height="18" bordercolordark="#FFFFFF" bordercolorlight="#EEEEEE" style="border-collapse: collapse">
		 
		<tr>
			<td bgcolor="#FFFFFF">
			<p align="center"> 
			<div align="center">
<table id='example1'  class="table table-bordered table-striped"  dir=rtl >

						<form method="POST" name="form1" action="<?php echo( $self ); ?>" enctype="multipart/form-data" onSubmit="return check();">
					<tr>
						<td align="right"   dir="rtl" height="32" width="18%" bgcolor="#EEEEEE">
						<p align="center"><span lang="ar-sa">
						<font face="Droid Arabic Kufi" size="2">الصفحة</font></span></td>
						<td align="right"  dir="rtl" height="32" width="78%" colspan="3">
							<p><select   required="required" size="1" name="page_no" class="form-control" style="font-family: Arial; width: 100%; height:30; font-family:Droid Arabic Kufi; text-align:right" dir="rtl"  ><option></option>
<?php $xx=5; ?>
                   
 
 
 
                     <?php
 
include ("../config.php");
$result2=mysqli_query($conn,"select * from mune where up=0");
while($row2=mysqli_fetch_array($result2))
{
?>  
<option value="<?php echo $row2['ID']; ?>">- <?php echo $row2['mune']; ?> - <?php echo $row2['mune_en']; ?></option>
 <?php } ?>
 
 
 <?php
 
include ("../config.php");
$result2=mysqli_query($conn,"select * from sub where type IN ('1', '8', '9')");
while($row2=mysqli_fetch_array($result2))
{
?>  
<option value="<?php echo $row2['sub_ID']; ?>">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $row2['sub']; ?> - <?php echo $row2['sub_en']; ?></option>
 <?php } ?>
							</select></td>
					</tr>
					<tr>
						<td align="right"   dir="rtl" height="32" width="18%" bgcolor="#EEEEEE">
						<p align="center">
						<font face="Droid Arabic Kufi" size="2">عنوان الصفحة (عربي)</font></td>
						<td align="right"  dir="rtl" height="32" width="32%">
							<p align="center">
							<font face="Droid Arabic Kufi" size="2">				 										
						
							<input   required="required"   name="T1" id="T1" size="20"     class="form-control" style="width: 100%; height:30; font-family:Droid Arabic Kufi; text-align:right" dir="rtl"  placeholder="ادخل العنوان" ></font></td>
						<td align="right"  dir="rtl" height="32" width="13%" bgcolor="#EEEEEE">
						<p align="center">
						<font face="Droid Arabic Kufi" size="2">عنوان الصفحة (English)</font></td>
						<td align="right"  dir="rtl" height="32" width="35%">
							<font face="Droid Arabic Kufi" size="2">				 										
						
							<input    required="required"  name="T2" id="T2" size="20"     class="form-control" style="width: 100%; height:30; font-family:Droid Arabic Kufi; text-align:right" dir="rtl"  placeholder="Enter Title Here" ></font></td>
					</tr>
					<tr>
						<td align="right"   dir="rtl" height="32" width="18%" bgcolor="#EEEEEE">
						<p align="center">
						<font face="Droid Arabic Kufi" size="2">ارفاق صورة</font></td>
						<td align="right"  dir="rtl" height="32" width="78%" colspan="3">
										<input   required="required"  type="file" accept="image/png, image/jpeg" name="myFile"   size="20" style="float: right"  ></td>
					</tr>
					<tr>
						<td align="right"   dir="rtl" height="32"   colspan="4">
										<font face="Tahoma" size="2">
										<script language="JavaScript" type="text/javascript" src="wysiwyg.js">
</script>
<textarea      rows="2" name="S1" cols="20" style="width: 100%; height: 64"   placeholder="اكتب النص هنا" id="textarea1"></textarea><script language="javascript1.2">
  generate_wysiwyg('textarea1');
</script></font></td>
					</tr>
					<tr>
						<td align="right"   dir="rtl" height="32" width="96%" colspan="4" bgcolor="#EEEEEE">
										<p align="center"><span lang="en-us">
										<font face="Droid Arabic Kufi" size="2">
										English</font></span></td>
					</tr>
					<tr>
						<td align="right"   dir="rtl" height="32" width="96%" colspan="4">
										<font face="Tahoma" size="2">
										<script language="JavaScript" type="text/javascript" src="wysiwyg.js">
</script>
<textarea     rows="2" name="S22" cols="20" style="width: 100%; height: 64"   placeholder="Enter Text Here" id="textarea2"></textarea><script language="javascript1.2">
  generate_wysiwyg('textarea2');
</script></font></td>
					</tr>
					<tr>
						<td align="right" dir="rtl" height="31" colspan="4" bgcolor="#EEEEEE">
										
						<p align="center">
	
	<font face="Droid Arabic Kufi" size="2">
	
	<input     type="submit" value="New Addition" name="B2" ></font></td>
					</tr>
					</form>
					</form>
					</table> </div>
			</span></td>
		</tr>
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
if("New Addition"=="$B2")
{
 
    // Check if we've uploaded a file
if (!empty($_FILES['myFile']) && $_FILES['myFile']['error'] == UPLOAD_ERR_OK) {
    // Be sure we're dealing with an upload
    if (is_uploaded_file($_FILES['myFile']['tmp_name']) === false) {
        throw new \Exception('Error on upload: Invalid file definition');
    }
if(basename( $_FILES['myFile']['name'])==".htaccess")
{
echo "invalid file";
exit;
}

    // Rename the uploaded file
    $uploadName = $_FILES['myFile']['name'];
    $ext = strtolower(substr($uploadName, strripos($uploadName, '.')+1));
    $name= round(microtime(true)).mt_rand().'.'.$ext;

    move_uploaded_file($_FILES['myFile']['tmp_name'], __DIR__.'../../images/portfolio/'.$name);
    // Insert it into our tracking along with the original name
}

 

 
 
$link='<img src=../images/portfolio/'.$name.'>';

$ID= mysqli_real_escape_string($conn,htmlspecialchars($_POST['ID'], ENT_QUOTES, "utf-8"));
$T1= mysqli_real_escape_string($conn,$_POST['T1']);
$IDD= mysqli_real_escape_string($conn,htmlspecialchars($_POST['IDD'], ENT_QUOTES, "utf-8"));
$ID= mysqli_real_escape_string($conn,htmlspecialchars($_POST['ID'], ENT_QUOTES, "utf-8"));

$T2= mysqli_real_escape_string($conn,$_POST['T2']);
$T3= mysqli_real_escape_string($conn,htmlspecialchars($_POST['T3'], ENT_QUOTES, "utf-8"));
$T4= mysqli_real_escape_string($conn,htmlspecialchars($_POST['T4'], ENT_QUOTES, "utf-8"));
$T5= mysqli_real_escape_string($conn,htmlspecialchars($_POST['T5'], ENT_QUOTES, "utf-8"));
$T6= mysqli_real_escape_string($conn,htmlspecialchars($_POST['T6'], ENT_QUOTES, "utf-8"));
$T7= mysqli_real_escape_string($conn,htmlspecialchars($_POST['T7'], ENT_QUOTES, "utf-8"));
$T8= mysqli_real_escape_string($conn,htmlspecialchars($_POST['T8'], ENT_QUOTES, "utf-8"));
$T9= mysqli_real_escape_string($conn,htmlspecialchars($_POST['T9'], ENT_QUOTES, "utf-8"));
$T10= mysqli_real_escape_string($conn,htmlspecialchars($_POST['T10'], ENT_QUOTES, "utf-8"));
$S1= mysqli_real_escape_string($conn,$_POST['S1']);
$S2= mysqli_real_escape_string($conn,htmlspecialchars($_POST['S2'], ENT_QUOTES, "utf-8"));
$S3= mysqli_real_escape_string($conn,htmlspecialchars($_POST['S3'], ENT_QUOTES, "utf-8"));
$S4= mysqli_real_escape_string($conn,htmlspecialchars($_POST['S4'], ENT_QUOTES, "utf-8"));
$S5= mysqli_real_escape_string($conn,htmlspecialchars($_POST['S5'], ENT_QUOTES, "utf-8"));
$S6= mysqli_real_escape_string($conn,htmlspecialchars($_POST['S6'], ENT_QUOTES, "utf-8"));
$C1= mysqli_real_escape_string($conn,htmlspecialchars($_POST['C1'], ENT_QUOTES, "utf-8"));
$C2= mysqli_real_escape_string($conn,htmlspecialchars($_POST['C2'], ENT_QUOTES, "utf-8"));

$S222= mysqli_real_escape_string($conn,htmlspecialchars($_POST['S222'], ENT_QUOTES, "utf-8"));
$S22= mysqli_real_escape_string($conn,$_POST['S22']);
$S2= mysqli_real_escape_string($conn,htmlspecialchars($_POST['S2'], ENT_QUOTES, "utf-8"));




$sql="insert into page_ar set page_no='$page_no',address='$T1',word='$S1',address_en='$T2',word_en='$S22',photo='$name',date=CURDATE() ";
 

if(@mysqli_query($conn,$sql))
{
echo '<script>
function myFunction() {
document.getElementById("snackbar2").style.visibility = "hidden";
}
 document.getElementById("snackbar2").style.visibility = "visible";
 window.setTimeout("hideMsg()", 1000); </script>';
?><meta http-equiv="refresh" content="1;url=<?php echo( $self ); ?>"><?php

echo '<meta http-equiv="refresh" content="1;url=add_page_ar.php">';
}
}
 

 

?>