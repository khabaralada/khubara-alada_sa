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
<title>تعديل الابحاث والمقالات
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
<h1><small>  تعديل الابحاث والمقالات

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
	    $ID=mysqli_real_escape_string($conn,htmlspecialchars(intval($_GET['ID']), ENT_QUOTES, "utf-8")); 

$result=mysqli_query($conn,"select* from  research where ID='$ID'");
while($row=mysqli_fetch_array($result))
{
 
?>

<table id='example1'  class="table table-bordered table-striped"  dir=rtl >

						<form method="POST" name="form1" action="<?php echo( $self ); ?>" enctype="multipart/form-data" onSubmit="return check();">
					<input       type=hidden name="IDD"   size="20"     class="form-control" style="width: 100%; height:30; font-family:Droid Arabic Kufi; text-align:right" dir="rtl"  placeholder="Enter Title Here" value="<?php echo $row['ID']; ?>" >
					<tr>
						<td align="right"   dir="rtl" height="32" width="18%" bgcolor="#EEEEEE">
						<p align="center">
						<font face="Droid Arabic Kufi" size="2">عنوان
						البحث والمقال (عربي)</font></td>
						<td align="right"  dir="rtl" height="32" width="26%" colspan="3">
							<p align="center">
							<font face="Droid Arabic Kufi" size="2">				 										
						
							<input    required="required"  name="T1" id="T1" size="20"     class="form-control" style="width: 100%; height:30; font-family:Droid Arabic Kufi; text-align:right" dir="rtl"  placeholder="Enter Title Here" value="<?php echo $row['address']; ?>" ></font></td>
						<td align="right"  dir="rtl" height="32" width="14%" bgcolor="#EEEEEE">
						<p align="center">
						<font face="Droid Arabic Kufi" size="2">عنوان
						<span lang="ar-sa">البحث والمقال</span> (English)</font></td>
						<td align="right"  dir="rtl" height="32" width="40%">
							<font face="Droid Arabic Kufi" size="2">				 										
						
							<input    required="required"  name="T2" id="T2" size="20"     class="form-control" style="width: 100%; height:30; font-family:Droid Arabic Kufi; text-align:right" dir="rtl"  placeholder="Enter Title Here" value="<?php echo $row['address_en']; ?>" ></font></td>
					</tr>
					<tr>
						<td align="right"   dir="rtl" height="32" width="18%" bgcolor="#EEEEEE">
						<p align="center">
						<font face="Droid Arabic Kufi" size="2">تاريخ البحث والمقال</font></td>
						<td align="right"  dir="rtl" height="32" width="9%">
							<font face="Droid Arabic Kufi" size="2">				 										
						
							<input    required="required"  name="day" id="T3" size="20"     class="form-control" style="width: 100%; height:30; font-family:Droid Arabic Kufi; text-align:right" dir="rtl"  placeholder="اليوم" value="<?php echo $row['day']; ?>" ></font></td>
						<td align="right"  dir="rtl" height="32" width="9%">
							<font face="Droid Arabic Kufi" size="2">				 										
						
							<input    required="required"  name="mans" id="T4" size="20"     class="form-control" style="width: 100%; height:30; font-family:Droid Arabic Kufi; text-align:right" dir="rtl"  placeholder="الشهر" value="<?php echo $row['mans']; ?>" ></font></td>
						<td align="right"  dir="rtl" height="32" width="8%">
							<font face="Droid Arabic Kufi" size="2">				 										
						
							<input   required="required"   name="year" id="T5" size="20"     class="form-control" style="width: 100%; height:30; font-family:Droid Arabic Kufi; text-align:right" dir="rtl"  placeholder="السنة" value="<?php echo $row['year']; ?>" ></font></td>
						<td align="right"  dir="rtl" height="32" width="14%" bgcolor="#EEEEEE">
						<p align="center">
						<font face="Droid Arabic Kufi" size="2">مصدر البحث والمقال</font></td>
						<td align="right"  dir="rtl" height="32" width="40%">
							<font face="Droid Arabic Kufi" size="2">				 										
						
							<input   required="required"   name="T3"   size="20"     class="form-control" style="width: 100%; height:30; font-family:Droid Arabic Kufi; text-align:right" dir="rtl"  placeholder="Enter Title Here" value="<?php echo $row['sorc']; ?>" ></font></td>
					</tr>
					<tr>
						<td align="right"   dir="rtl" height="32" width="96%" colspan="6">
										<font face="Tahoma" size="2">
										<script language="JavaScript" type="text/javascript" src="wysiwyg.js">
</script>
<textarea      rows="2" name="S1" cols="20" style="width: 100%; height: 64"  id="textarea1"><?php echo $row['news']; ?></textarea><script language="javascript1.2">
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
<textarea     rows="2" name="S22" cols="20" style="width: 100%; height: 64"  id="textarea2"><?php echo $row['news_en']; ?></textarea><script language="javascript1.2">
  generate_wysiwyg('textarea2');
</script></font></td>
					</tr>
					<tr>
						<td align="right" dir="rtl" height="31" colspan="6">
										
						<div align="left">
							<table border="0" width="100%" dir="rtl" cellspacing="0" cellpadding="0">
								<tr>
									<td>
									<img border="0" src="../news/<?php echo $row['photo']; ?>" width="300" ></td>
								</tr>
								<tr>
									<td>
										<input      type="file" accept="image/png, image/jpeg" name="myFile" size="20" style="float: right"   ></td>
								</tr>
								<tr>
									<td>
									<p align="center">
	
	<font face="Droid Arabic Kufi" size="2">
	
	</font></td>
								</tr>
							</table>
						</div>
						</td>
					</tr>
					<tr>
						<td align="right" dir="rtl" height="31" colspan="6" bgcolor="#EEEEEE">
										
						<p align="center">
	
	<font face="Droid Arabic Kufi" size="2">
	
	<input     type="submit" value="Edit" name="B2" style="color: #FFFFFF; font-family: Tahoma; font-size: 8pt; border: 1px dashed #FFFFFF; background-color: #737375; height:29; width:131">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	
	<input     type="submit" value="Delete" name="B3" style="color: #FFFFFF; font-family: Tahoma; font-size: 8pt; border: 1px dashed #FFFFFF; background-color: #737375; height:29; width:131">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	
	<input     type="submit" value="Save Photo" name="B4" style="color: #FFFFFF; font-family: Tahoma; font-size: 8pt; border: 1px dashed #FFFFFF; background-color: #737375; height:29; width:131"></font></td>
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
$S1= mysqli_real_escape_string($conn,$_POST['S1']);
$S2= mysqli_real_escape_string($conn,htmlspecialchars($_POST['S2'], ENT_QUOTES, "utf-8"));
$S3= mysqli_real_escape_string($conn,htmlspecialchars($_POST['S3'], ENT_QUOTES, "utf-8"));
$S4= mysqli_real_escape_string($conn,htmlspecialchars($_POST['S4'], ENT_QUOTES, "utf-8"));
$S5= mysqli_real_escape_string($conn,htmlspecialchars($_POST['S5'], ENT_QUOTES, "utf-8"));
$S6= mysqli_real_escape_string($conn,htmlspecialchars($_POST['S6'], ENT_QUOTES, "utf-8"));
$C1= mysqli_real_escape_string($conn,htmlspecialchars($_POST['C1'], ENT_QUOTES, "utf-8"));
$C2= mysqli_real_escape_string($conn,htmlspecialchars($_POST['C2'], ENT_QUOTES, "utf-8"));
$S22= mysqli_real_escape_string($conn,$_POST['S22']);



$sql="update research set  address='$T1',news='$S1',address_en='$T2',news_en='$S22',day='$day',mans='$mans',year='$year',sorc='$T3' where ID='$IDD'";
 

if(@mysqli_query($conn,$sql))
{
echo "<script language='javascript'>window.alert('Successfully Updaye')</script>";
?><meta http-equiv="refresh" content="1;url=<?php echo( $self ); ?>"><?php
}
}
 elseif("Save Photo"=="$B4")
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

    move_uploaded_file($_FILES['myFile']['tmp_name'], __DIR__.'../../news/'.$name);
    // Insert it into our tracking along with the original name
}


$IDD= mysqli_real_escape_string($conn,htmlspecialchars($_POST['IDD'], ENT_QUOTES, "utf-8"));

$sql="update research set  photo='$name'  where ID='$IDD'";
 

if(@mysqli_query($conn,$sql))
{
echo "<script language='javascript'>window.alert('Successfully Updaye')</script>";
?><meta http-equiv="refresh" content="1;url=<?php echo( $self ); ?>"><?php
}
}
 

elseif("Delete"=="$B3")
{
 
 
$IDD= mysqli_real_escape_string($conn,htmlspecialchars($_POST['IDD'], ENT_QUOTES, "utf-8"));


$sql="delete from research where ID='$IDD'";
 

if(@mysqli_query($conn,$sql))
{
echo "<script language='javascript'>window.alert('Successfully Delete')</script>";
echo '<meta http-equiv="refresh" content="1;url=s_news.php">';
}
}
 

 

?>