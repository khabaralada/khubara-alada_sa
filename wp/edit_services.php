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
<title>تعديل المشروع
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
<h1><small>  تعديل المشروع

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
			
			 <?php
include ("../config.php");
$result=mysqli_query($conn,"select* from  services where ID='$ID'");
while($row=mysqli_fetch_array($result))
{
 
?>

<table id='example1'  class="table table-bordered table-striped"  dir=rtl >

						<form method="POST" name="form1" action="<?php echo( $self ); ?>" enctype="multipart/form-data" onSubmit="return check();">
					<input  required="required"     type=hidden name="IDD"   size="20"     class="form-control" style="width: 100%; height:30; font-family:Droid Arabic Kufi; text-align:left" dir="ltr" required="required" placeholder="Enter Title Here" value="<?php echo $row['ID']; ?>" >
					<tr>
						<td align="right"   dir="ltr" height="32" width="18%" bgcolor="#EEEEEE">
						<p align="center"><span lang="ar-sa">
						<font face="Droid Arabic Kufi" size="2">العنوان</font></span></td>
						<td align="right"  dir="ltr" height="32" width="33%">
							<p align="center">
							<font face="Droid Arabic Kufi" size="2">				 										
						
							<input  required="required"    name="T1" id="T1" size="20"     class="form-control" style="width: 100%; height:30; font-family:Droid Arabic Kufi; text-align:left" dir="ltr" required="required" placeholder="Enter Title Here" value="<?php echo $row['address']; ?>" ></font></td>
						<td align="center"  dir="ltr" height="32" width="13%">
							<font face="Droid Arabic Kufi" size="2">Address</font></td>
						<td align="right"  dir="ltr" height="32" width="35%">
							<font face="Droid Arabic Kufi" size="2">				 										
						
							<input  required="required"    name="T2" id="T2" size="20"     class="form-control" style="width: 100%; height:30; font-family:Droid Arabic Kufi; text-align:left" dir="ltr" required="required" placeholder="Enter Title Here" value="<?php echo $row['address_en']; ?>" ></font></td>
					</tr>
					<tr>
						<td align="right"   dir="ltr" height="32" width="18%" bgcolor="#EEEEEE">
						<p align="center">
						<font face="Droid Arabic Kufi" size="2">نبذة عن
						<span lang="ar-sa">المشروع</span></font></td>
						<td align="right"  dir="ltr" height="32" width="33%">
										<textarea  required="required"   rows="2" name="S2"   maxlength="200" style="width: 100%; height: 64" cols="20"><?php echo $row['short_text']; ?></textarea></td>
						<td align="center"  dir="ltr" height="32" width="13%">
										<p align="center">
							About the service</td>
						<td align="right"  dir="ltr" height="32" width="35%">
										<textarea  required="required"   rows="2" name="S3"   maxlength="200" style="width: 100%; height: 64" cols="20"><?php echo $row['short_text_en']; ?></textarea></td>
					</tr>
					<tr>
						<td align="right"   dir="ltr" height="32" width="96%" colspan="4" bgcolor="#EEEEEE">
										<p align="center">
										<font face="Droid Arabic Kufi" size="2">
										التفاصيل</font></td>
					</tr>
					
					<tr>
						<td align="right"   dir="ltr" height="32" width="96%" colspan="4">
										<font face="Tahoma" size="2">
										<script language="JavaScript" type="text/javascript" src="wysiwyg.js">
</script>
<textarea  required="required"   rows="2" name="S1" cols="20" style="width: 100%; height: 64"  id="textarea1"><?php echo $row['word']; ?></textarea><script language="javascript1.2">
  generate_wysiwyg('textarea1');
</script></font></td>
					</tr>
					
					<tr>
						<td align="right"   dir="ltr" height="32" width="96%" colspan="4" bgcolor="#EEEEEE">
										<p align="center">Description</td>
					</tr>



					<tr>
						<td align="right"   dir="ltr" height="32" width="96%" colspan="4" bgcolor="#EEEEEE">
										<font face="Tahoma" size="2">
										<script language="JavaScript" type="text/javascript" src="wysiwyg.js">
</script>
<textarea  required="required"   rows="2" name="S4" cols="20" style="width: 100%; height: 64"  id="textarea2"><?php echo $row['word_en']; ?></textarea><script language="javascript1.2">
  generate_wysiwyg('textarea2');
</script></font></td>
					</tr>



					<tr>
						<td align="right" dir="ltr" height="31" colspan="4">
										
						<div align="left">
							<table border="0" width="16%" dir="ltr" cellspacing="0" cellpadding="0">
								<tr>
									<td>
									<img border="0" src="../images/resource/<?php echo $row['photo']; ?>" width="100%" ></td>
								</tr>
								<tr>
									<td>
										<input  required="required"   type="file" accept="image/*" name="myFile" size="20" style="float: left"   ></td>
								</tr>
								<tr>
									<td>
									<p align="center">
	
	<font face="Droid Arabic Kufi" size="2">
	
	<input  required="required"   type="submit" value="Save Photo" name="B4" style="color: #FFFFFF; font-family: Tahoma; font-size: 8pt; border: 1px dashed #FFFFFF; background-color: #737375; height:29; width:131"></font></td>
								</tr>
							</table>
						</div>
						</td>
					</tr>
					<tr>
						<td align="right" dir="ltr" height="31" colspan="4" bgcolor="#EEEEEE">
										
						<p align="center">
	
	<font face="Droid Arabic Kufi" size="2">
	
	<input  required="required"   type="submit" value="Edit" name="B2" style="color: #FFFFFF; font-family: Tahoma; font-size: 8pt; border: 1px dashed #FFFFFF; background-color: #737375; height:29; width:131">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	
	<input  required="required"   type="submit" value="Delete" name="B3" style="color: #FFFFFF; font-family: Tahoma; font-size: 8pt; border: 1px dashed #FFFFFF; background-color: #737375; height:29; width:131"></font></td>
					</tr>
					</form>
					</form>
					</table><?php } ?> </div>
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
if("Edit"=="$B2")
{
 
 

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

$sql="update services  set  address='$T1',word='$S1',short_text='$S2',address_en='$T2',word_en='$S4',short_text_en='$S3' where ID='$IDD'";
 

if(@mysqli_query($conn,$sql))
{
echo "<script language='javascript'>window.alert('Successfully Updaye')</script>";
echo '<meta http-equiv="refresh" content="1;url=s_services.php">';
}
}
 elseif("Save Photo"=="$B4")
{
 
  
 define("UPLOAD_DIR", "../images/resource/");
if (!empty($_FILES["myFile"])) {
    $myFile = $_FILES["myFile"];
    
 
            if ($myFile["error"] !== UPLOAD_ERR_OK) {
        echo "<p>An error occurred.</p>";
        exit;
    }

     
    if ($myFile["error"] !== UPLOAD_ERR_OK) {
        echo "<p>An error occurred.</p>";
        exit;
    }
 
    $name = preg_replace("/[^A-Z0-9._-]/i", "_", $myFile["name"]);
    $i = 0;
    $parts = pathinfo($name);
    while (file_exists(UPLOAD_DIR . $name)) {
        $i++;
        $name = $parts["filename"] . "-" . $i . "." . $parts["extension"];
    }
    $success = move_uploaded_file($myFile["tmp_name"],UPLOAD_DIR . $name);
   // chmod(UPLOAD_DIR . $name, 755);
}
 

$IDD= mysqli_real_escape_string($conn,htmlspecialchars($_POST['IDD'], ENT_QUOTES, "utf-8"));


$sql="update services set  photo='$name'  where ID='$IDD'";
 

if(@mysqli_query($conn,$sql))
{
echo "<script language='javascript'>window.alert('Successfully Updaye')</script>";
echo '<meta http-equiv="refresh" content="1;url=s_services.php">';
}
}
 

elseif("Delete"=="$B3")
{
 
 
$IDD= mysqli_real_escape_string($conn,htmlspecialchars($_POST['IDD'], ENT_QUOTES, "utf-8"));


$sql="delete from services  where ID='$IDD'";
 

if(@mysqli_query($conn,$sql))
{
echo "<script language='javascript'>window.alert('Successfully Delete')</script>";
echo '<meta http-equiv="refresh" content="1;url=s_services.php">';
}
}
 

 

?>