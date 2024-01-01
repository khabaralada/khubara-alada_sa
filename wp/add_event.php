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
<title>الفعاليات</title>
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
<h1>الفعاليات</h1>
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
						<p align="center">
						<font face="Droid Arabic Kufi" size="2">عنوان
						(عربي)</font></td>
						<td align="right"  dir="rtl" height="32" width="32%" colspan="3">
							<p align="center">
							<font face="Droid Arabic Kufi" size="2">				 										
						
							<input      name="T1" id="T1" size="20"  required   class="form-control" style="width: 100%; height:30; font-family:Droid Arabic Kufi; text-align:right" dir="rtl"  placeholder="    ادخل عنوان الخبر" ></font></td>
						<td align="right"  dir="rtl" height="32" width="13%" bgcolor="#EEEEEE">
						<p align="center">
						<font face="Droid Arabic Kufi" size="2">عنوان
						(English)</font></td>
						<td align="right"  dir="rtl" height="32" width="35%">
							<font face="Droid Arabic Kufi" size="2">				 										
						
							<input      name="T2" id="T2" size="20" required      class="form-control" style="width: 100%; height:30; font-family:Droid Arabic Kufi; text-align:right" dir="rtl"  placeholder="Enter Title Here" ></font></td>
					</tr>
					<tr>
						<td align="right"   dir="rtl" height="32" width="18%" bgcolor="#EEEEEE">
						<p align="center">
						<font face="Droid Arabic Kufi" size="2">تاريخ </font></td>
						<td align="right"  dir="rtl" height="32" width="11%">
							<font face="Droid Arabic Kufi" size="2">				 										
						
							<input   required     name="day" id="T3" size="20"     class="form-control" style="width: 100%; height:30; font-family:Droid Arabic Kufi; text-align:right" dir="rtl"  placeholder="اليوم" value="<?php echo $row['day']; ?>" ></font></td>
						<td align="right"  dir="rtl" height="32" width="11%">
							<font face="Droid Arabic Kufi" size="2">				 										
						
							<input    required    name="mans" id="T4" size="20"     class="form-control" style="width: 100%; height:30; font-family:Droid Arabic Kufi; text-align:right" dir="rtl"  placeholder="الشهر" value="<?php echo $row['mans']; ?>" ></font></td>
						<td align="right"  dir="rtl" height="32" width="10%">
							<font face="Droid Arabic Kufi" size="2">				 										
						
							<input     required   name="year" id="T5" size="20"     class="form-control" style="width: 100%; height:30; font-family:Droid Arabic Kufi; text-align:right" dir="rtl"  placeholder="السنة" value="<?php echo $row['year']; ?>" ></font></td>
						<td align="right"  dir="rtl" height="32" width="13%" bgcolor="#EEEEEE">
						<p align="center">
						<font face="Droid Arabic Kufi" size="2">مصدر </font></td>
						<td align="right"  dir="rtl" height="32" width="35%">
							<font face="Droid Arabic Kufi" size="2">				 										
						
							<input      name="T3"   size="20"  required     class="form-control" style="width: 100%; height:30; font-family:Droid Arabic Kufi; text-align:right" dir="rtl"  placeholder="    ادخل مصدر الخبر" ></font></td>
					</tr>
					<tr>
						<td align="right"   dir="rtl" height="32" width="18%" bgcolor="#EEEEEE">
						<p align="center">
						<font face="Droid Arabic Kufi" size="2">وقت الفعالية</font></td>
						<td align="right"  dir="rtl" height="32" width="32%" colspan="3">
							<font face="Droid Arabic Kufi" size="2">				 										
						
							<input      name="T4"   size="20"  required     class="form-control" style="width: 100%; height:30; font-family:Droid Arabic Kufi; text-align:right" dir="rtl"  placeholder="time " ></font></td>
						<td align="right"  dir="rtl" height="32" width="13%" bgcolor="#EEEEEE">
						&nbsp;</td>
						<td align="right"  dir="rtl" height="32" width="35%">
							&nbsp;</td>
					</tr>
					<tr>
						<td align="right"   dir="rtl" height="32" width="18%" bgcolor="#EEEEEE">
						<p align="center">
						<font face="Droid Arabic Kufi" size="2">ارفاق صورة</font></td>
						<td align="right"  dir="rtl" height="32" width="78%" colspan="5">
										<input  required     type="file" accept="image/png, image/jpeg" name="myFile"   size="20" style="float: right"  ></td>
					</tr>
					<tr>
						<td align="right"   dir="rtl" height="32" width="96%" colspan="6">
										<font face="Tahoma" size="2">
										<script language="JavaScript" type="text/javascript" src="wysiwyg.js">
</script>
<textarea         rows="2" name="S1" cols="20" style="width: 100%; height: 64"  id="textarea1"></textarea><script language="javascript1.2">
  generate_wysiwyg('textarea1');
</script></font></td>
					</tr>
					<tr>
						<td align="right"   dir="rtl" height="32" width="96%" colspan="6" bgcolor="#EEEEEE">
										<p align="center">
							<span lang="ar-sa">
							<font face="Droid Arabic Kufi" size="2">النص باللغة 
							الانجليزية</font></span></td>
					</tr>
					<tr>
						<td align="right"   dir="rtl" height="32" width="96%" colspan="6">
										<font face="Tahoma" size="2">
										<script language="JavaScript" type="text/javascript" src="wysiwyg.js">
</script>
<textarea        rows="2" name="S22" cols="20" style="width: 100%; height: 64"  id="textarea2"></textarea><script language="javascript1.2">
  generate_wysiwyg('textarea2');
</script></font></td>
					</tr>
					<tr>
						<td align="right" dir="rtl" height="31" colspan="6" bgcolor="#EEEEEE">
										
						<p align="center">
	
	<font face="Droid Arabic Kufi" size="2">
	
	<input     type="submit" value="Save" name="B2" style="color: #FFFFFF; font-family: Tahoma; font-size: 8pt; border: 1px dashed #FFFFFF; background-color: #737375; height:29; width:131"></font></td>
					</tr>
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
if("Save"=="$B2")
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

    move_uploaded_file($_FILES['myFile']['tmp_name'], __DIR__.'../../testimonial/'.$name);
    // Insert it into our tracking along with the original name
}


 
 
$link='<img src=../images/portfolio/'.$name.'>';

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


 
$sql="insert into testimonial set  address='$T1',news='$S1',address_en='$T2',news_en='$S22',photo='$name',day='$day',mans='$mans',year='$year',sorc='$T3',time='$T4'  ";
 

if(@mysqli_query($conn,$sql))
{
echo '<script>
function myFunction() {
document.getElementById("snackbar2").style.visibility = "hidden";
}
 document.getElementById("snackbar2").style.visibility = "visible";
 window.setTimeout("hideMsg()", 1000); </script>';
?><meta http-equiv="refresh" content="1;url=<?php echo( $self ); ?>"><?php

echo '<meta http-equiv="refresh" content="1;url=add_event.php">';
}
}
 

 

?>