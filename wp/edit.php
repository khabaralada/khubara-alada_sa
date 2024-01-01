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
<title>الهيئة الإدارية و التدريبية
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
<h1><small>  الهيئة الإدارية و التدريبية

</small></h1>
</section>

 



 
<section class="content" dir=rtl>
<div class="box box-info">
<div class="box-body">


<div align="center">
 
 <?php
include ("../config.php");
	    $ID=mysqli_real_escape_string($conn,htmlspecialchars(intval($_GET['ID']), ENT_QUOTES, "utf-8")); 

$result=mysqli_query($conn,"select* from   teachers where ID='$ID'");
while($row=mysqli_fetch_array($result))
{
$c++;
?><table border="1" width="100%" cellspacing="0" cellpadding="0" height="18" bordercolordark="#FFFFFF" bordercolorlight="#EEEEEE" style="border-collapse: collapse">
		 
		<tr>
			<td bgcolor="#FFFFFF">
			<p align="center"> 
			<div align="center">
<table id='example1'  class="table table-bordered table-striped"  dir=rtl >

						<form method="POST" name="form1" action="<?php echo( $self ); ?>" enctype="multipart/form-data" onSubmit="return check();">
					<tr>
						<td align="right"   dir="rtl" height="32" width="18%" bgcolor="#EEEEEE">
						<p align="center">
						<font face="Droid Arabic Kufi" size="2">النوع Type</font></td>
						<td align="right"  dir="rtl" height="32" width="80%" colspan="3">
							<select required="required"   style="font-family: Arial; width: 100%; height:30; font-family:Droid Arabic Kufi; text-align:right"  size="1" name="teachers_type"  class="form-control" style="width: 100%; height:30; font-family:Droid Arabic Kufi; text-align:right" dir="rtl" required="required">
						<option ><?php echo $row['teachers_type']; ?></option>
						<option value=1 >Teachers</option>
						<option value=2 >Management</option>
 
										</select></td>
					</tr>
					<tr>
						<td align="right"   dir="rtl" height="32" width="18%" bgcolor="#EEEEEE">
						<p align="center">
						<font face="Droid Arabic Kufi" size="2">اسم المدرب</font></td>
						<td align="right"  dir="rtl" height="32" width="26%">
							<p align="center">
							<font face="Droid Arabic Kufi" size="2">				 										
						
							<input  required="required"    name="T1" id="T1" size="20"     class="form-control" style="width: 100%; height:30; font-family:Droid Arabic Kufi; text-align:right" dir="rtl" required="required" value="<?php echo $row['name_ar']; ?>"  ></font></td>
						<td align="right"  dir="rtl" height="32" width="18%" bgcolor="#EEEEEE">
							<p align="center">
							<font face="Droid Arabic Kufi" size="2">Name</font></td>
						<td align="right"  dir="rtl" height="32" width="36%">
							<p align="center">
							<font face="Droid Arabic Kufi" size="2">				 										
						
							<input  required="required"    name="T2" id="T5" size="20"     class="form-control" style="width: 100%; height:30; font-family:Droid Arabic Kufi; text-align:right" dir="rtl" required="required" value="<?php echo $row['name_en']; ?>"  ></font></td>
					</tr>
					<tr>
						<td align="right"   dir="rtl" height="32" width="18%" bgcolor="#EEEEEE">
						<p align="center">
						<font face="Droid Arabic Kufi" size="2">الوظيفة</font></td>
						<td align="right"  dir="rtl" height="32" width="26%">
							<p align="center">
							<font face="Droid Arabic Kufi" size="2">				 										
						
							<input  required="required"    name="T3" id="T6" size="20"     class="form-control" style="width: 100%; height:30; font-family:Droid Arabic Kufi; text-align:right" dir="rtl" required="required" value="<?php echo $row['job_ar']; ?>"  ></font></td>
						<td align="right"  dir="rtl" height="32" width="18%" bgcolor="#EEEEEE">
							<p align="center">
							<font face="Droid Arabic Kufi" size="2">Job</font></td>
						<td align="right"  dir="rtl" height="32" width="36%">
							<font face="Droid Arabic Kufi" size="2">				 										
						
							<input  required="required"    name="T4" id="T7" size="20"     class="form-control" style="width: 100%; height:30; font-family:Droid Arabic Kufi; text-align:right" dir="rtl" required="required" value="<?php echo $row['job_en']; ?>"  ></font></td>
					</tr>
					<tr>
						<td align="right"   dir="rtl" height="32" width="18%" bgcolor="#EEEEEE">
						<p align="center">
						<font face="Droid Arabic Kufi" size="2">التفاصيل</font></td>
						<td align="right"  dir="rtl" height="32" width="26%">
							<p align="center">
										<font face="Tahoma" size="2">
<textarea   required="required"  rows="2" name="T5" cols="20" style="width: 100%; height: 64"   id="textarea3"><?php echo $row['details_ar']; ?></textarea></font></td>
						<td align="right"  dir="rtl" height="32" width="18%" bgcolor="#EEEEEE">
							<p align="center">
							<font face="Droid Arabic Kufi" size="2">Details</font></td>
						<td align="right"  dir="rtl" height="32" width="36%">
										<font face="Tahoma" size="2">
<textarea   required="required"  rows="2" name="T6" cols="20" style="width: 100%; height: 64"   id="textarea4"><?php echo $row['details_en']; ?></textarea></font></td>
					</tr>
					<tr>
						<td align="right"   dir="rtl" height="32" width="18%" bgcolor="#EEEEEE">
						<p align="center">
						<font face="Droid Arabic Kufi" size="2">Facebook</font></td>
						<td align="right"  dir="rtl" height="32" width="26%">
							<p align="center">
							<font face="Droid Arabic Kufi" size="2">				 										
						
							<input  required="required"    name="T7" id="T10" size="20"     class="form-control" style="width: 100%; height:30; font-family:Droid Arabic Kufi; text-align:right" dir="rtl" required="required" value="<?php echo $row['facebook']; ?>"  ></font></td>
						<td align="right"  dir="rtl" height="32" width="18%" bgcolor="#EEEEEE">
							<p align="center">
							<font face="Droid Arabic Kufi" size="2">Twitter</font></td>
						<td align="right"  dir="rtl" height="32" width="36%">
							<font face="Droid Arabic Kufi" size="2">				 										
						
							<input  required="required"    name="T8" id="T11" size="20"     class="form-control" style="width: 100%; height:30; font-family:Droid Arabic Kufi; text-align:right" dir="rtl" required="required" value="<?php echo $row['twitter']; ?>"  ></font></td>
					</tr>
					<tr>
						<td align="right"   dir="rtl" height="32" width="18%" bgcolor="#EEEEEE">
						<p align="center">
						<font face="Droid Arabic Kufi" size="2">Instagram</font></td>
						<td align="right"  dir="rtl" height="32" width="26%">
							<p align="center">
							<font face="Droid Arabic Kufi" size="2">				 										
						
							<input  required="required"    name="T9" id="T12" size="20"     class="form-control" style="width: 100%; height:30; font-family:Droid Arabic Kufi; text-align:right" dir="rtl" required="required" value="<?php echo $row['instagram']; ?>"  ></font></td>
						<td align="right"  dir="rtl" height="32" width="18%" bgcolor="#EEEEEE">
							<p align="center">
							<font face="Droid Arabic Kufi" size="2">Whatsapp</font></td>
						<td align="right"  dir="rtl" height="32" width="36%">
							<font face="Droid Arabic Kufi" size="2">				 										
						
							<input  required="required"    name="T10" id="T13" size="20"     class="form-control" style="width: 100%; height:30; font-family:Droid Arabic Kufi; text-align:right" dir="rtl" required="required" value="<?php echo $row['whatsapp']; ?>"  ></font></td>
					</tr>
					<tr>
						<td align="right"   dir="rtl" height="32" width="18%" bgcolor="#EEEEEE">
						<p align="center">
						<font face="Droid Arabic Kufi" size="2">الصورة</font></td>
						<td align="right"  dir="rtl" height="32" width="80%" colspan="3">
							<p align="center"><input   type="file" accept="image/png, image/jpeg" name="myFile"   size="20" style="float: right"  ></td>
					</tr>
					<tr>
						<td align="right" dir="rtl" height="31" colspan="4" bgcolor="#EEEEEE">
										
						<p align="center">
	
	<font face="Droid Arabic Kufi" size="2">
	
	<input  required="required"   type="submit" value="Update" name="B2"   >
	
	<input  required="required"   type="submit" value="Delete" name="B3"    >
	<input     type="submit" value="Save Photo" name="B4"  >
	</font></td>
					</tr>
					</form>
					</form>
					</table> </div>
			</span></td>
		</tr>
		</table>
<?php }   ?>
<table id='example1'  class="table table-bordered table-striped"  dir=ltr >

								<form method="POST" name="form2" action="<?php echo( $self ); ?>" >
									<tr>
										<td align="center" width="1%" bgcolor="#EBEBEB" dir="rtl">
										&nbsp;</td>
										<td align="center"   bgcolor="#EBEBEB" dir="rtl" width="5%"  >
						<font face="Droid Arabic Kufi" size="2">الصورة</font></td>
						<!--				<td align="center"   bgcolor="#EBEBEB" dir="rtl" width="9%"  >
							<font face="Droid Arabic Kufi" size="2">whatsapp</font></td>
										<td align="center"   bgcolor="#EBEBEB" dir="rtl" width="9%"  >
						<font face="Droid Arabic Kufi" size="2">instagram</font></td>
										<td align="center"   bgcolor="#EBEBEB" dir="rtl" width="9%">
							<font face="Droid Arabic Kufi" size="2">twitter</font></td>
										<td align="center"   bgcolor="#EBEBEB" dir="rtl" width="9%">
						<font face="Droid Arabic Kufi" size="2">facebook</font></td> 
						-->
										<td align="center"   bgcolor="#EBEBEB" dir="rtl" width="25%">
						<font face="Droid Arabic Kufi" size="2">Details</font></td>
										<td align="center"   bgcolor="#EBEBEB" dir="rtl" width="25%">
						<font face="Droid Arabic Kufi" size="2">التفاصيل</font></td>
										<td align="center"   bgcolor="#EBEBEB" dir="rtl" width="9%">
							<font face="Droid Arabic Kufi" size="2">Job</font></td>
										<td align="center"   bgcolor="#EBEBEB" dir="rtl" width="9%">
						<font face="Droid Arabic Kufi" size="2">الوظيفة</font></td>
										<td align="center"   bgcolor="#EBEBEB" dir="rtl" width="9%">
							<font face="Droid Arabic Kufi" size="2">Name</font></td>
										<td align="center"   bgcolor="#EBEBEB" dir="rtl" width="9%">
						<p align="center">
						<font face="Droid Arabic Kufi" size="2">اسم المدرب</font></td>
										<td align="center"   bgcolor="#EBEBEB" dir="rtl" width="3%">
										<b>
										<font face="Tahoma" size="2">No.</font></b></td>
									</tr>
 <?php
include ("../config.php");
$result=mysqli_query($conn,"select* from   teachers");
$i=0;
$c=0;
while($row=mysqli_fetch_array($result))
{
$c++;
?>
									<tr>
										<td align="center"   dir="rtl">
																	
								<span lang="ar-sa">						
							
								<a href="edit.php?ID=<?php echo $row['ID']; ?>">Edit</a></td>
										<td align="center"   dir="rtl" width="5%"   >
										<img border="0" src="../images/partners/<?php echo $row['img']; ?>"   height="75"></td>
								<!--	<td align="center"   dir="rtl" width="9%"    >
										<?php echo $row['whatsapp']; ?></td>
										<td align="center"   dir="rtl" width="9%"   >
										<?php echo $row['instagram']; ?></td>
										<td align="center"   dir="rtl" width="9%" >
										<font face="Droid Arabic Kufi" size="2">				 										
            							<?php echo $row['twitter']; ?></font></td>
										<td align="center"   dir="rtl" width="9%" >
										<?php echo $row['facebook']; ?></td>  
								-->
										<td align="center"   dir="rtl" width="25%" >
										<?php echo $row['details_en']; ?></td>
										<td align="center"   dir="rtl" width="25%" >
										<?php echo $row['details_ar']; ?></td>										
										<td align="center"   dir="rtl" width="9%" >
										<?php echo $row['job_en']; ?></td>
										<td align="center"   dir="rtl" width="9%" >
										<?php echo $row['job_ar']; ?></td>
										<td align="center"   dir="rtl" width="9%" >
										<?php echo $row['name_en']; ?></td>
										<td align="center"   dir="rtl" width="9%" >
										<?php echo $row['name_ar']; ?></td>
										<td align="center"  dir="rtl" bgcolor="#EEEEEE" width="3%">
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
										<td align="center" colspan="11" bgcolor="#EEEEEE">
										</td>
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
if("Update"=="$B2")
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
$teachers_type= mysqli_real_escape_string($conn,htmlspecialchars($_POST['teachers_type'], ENT_QUOTES, "utf-8"));




$sql="update teachers set  name_ar='$T1',name_en='$T2',job_ar='$T3',job_en='$T4',details_ar='$T5',details_en='$T6',
facebook='$T7',twitter='$T8',instagram='$T9',whatsapp='$T10',teachers_type='$teachers_type' where ID='$_GET[ID]'";
 

if(@mysqli_query($conn,$sql))
{
echo '<script>
function myFunction() {
document.getElementById("snackbar2").style.visibility = "hidden";
}
 document.getElementById("snackbar2").style.visibility = "visible";
 window.setTimeout("hideMsg()", 1000); </script>';
?><meta http-equiv="refresh" content="1;url=<?php echo( $self ); ?>"><?php

?><meta http-equiv="refresh" content="2;url=<?php echo( $self ); ?>"><?php
}
}
 

 

elseif("Delete"=="$B3")
{
$sql="DELETE FROM teachers   where ID='$_GET[ID]'";
if(@mysqli_query($conn,$sql))
{
?><meta http-equiv="refresh" content="2;url=<?php echo( $self ); ?>"><?php
echo '<script>
function myFunction() {
document.getElementById("snackbar3").style.visibility = "hidden";
}
 document.getElementById("snackbar3").style.visibility = "visible";
 window.setTimeout("hideMsg()", 2000); </script>';

}}

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

    move_uploaded_file($_FILES['myFile']['tmp_name'], __DIR__.'../../images/partners/'.$name);
    // Insert it into our tracking along with the original name
}

 
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
$teachers_type= mysqli_real_escape_string($conn,htmlspecialchars($_POST['teachers_type'], ENT_QUOTES, "utf-8"));




$sql="update teachers set  name_ar='$T1',name_en='$T2',job_ar='$T3',job_en='$T4',details_ar='$T5',details_en='$T6',
facebook='$T7',twitter='$T8',instagram='$T9',whatsapp='$T10',img='$name',teachers_type='$teachers_type' where ID='$_GET[ID]'";
 

if(@mysqli_query($conn,$sql))
{
echo '<script>
function myFunction() {
document.getElementById("snackbar2").style.visibility = "hidden";
}
 document.getElementById("snackbar2").style.visibility = "visible";
 window.setTimeout("hideMsg()", 1000); </script>';
?><meta http-equiv="refresh" content="1;url=<?php echo( $self ); ?>"><?php

?><meta http-equiv="refresh" content="2;url=<?php echo( $self ); ?>"><?php
}
}
?>