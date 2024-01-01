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
<title>مكتبة الصور
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
<h1><small>  مكتبة الصور

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
						<p align="center">
						<font face="Droid Arabic Kufi" size="2">اسم الصورة
						<span lang="ar-sa">عربي</span></font></td>
						<td align="right"  dir="ltr" height="32" width="26%">
							<p align="center">
							<font face="Droid Arabic Kufi" size="2">				 										
						
							<input      name="T1" id="T1" size="20"    required="required" class="form-control" style="width: 100%; height:30; font-family:Droid Arabic Kufi; text-align:right" dir="rtl"  placeholder=" " ></font></td>
						<td align="right"   dir="ltr" height="32" width="20%" bgcolor="#EEEEEE">
							<p align="center"><span lang="ar-sa">
							<font face="Droid Arabic Kufi" size="2">اسم الصورة 
							انجليزي</font></span></td>
						<td align="right" dir="ltr" height="32" width="36%">
							<p align="center">
							<font face="Droid Arabic Kufi" size="2">				 										
						
							<input      name="T2" id="T2" size="20"   required="required"  class="form-control" style="width: 100%; height:30; font-family:Droid Arabic Kufi; text-align:right" dir="rtl"   placeholder=" " ></font></td>
					</tr>
					<tr>
						<td align="right"   dir="ltr" height="32" width="18%" bgcolor="#EEEEEE">
						<p align="center"><span lang="ar-sa">
						<font face="Droid Arabic Kufi" size="2">ارفاق الصورة</font></span></td>
						<td align="right"  dir="ltr" height="32" width="26%">
										<p dir="rtl">
										<input    required="required" type="file" accept="image/png, image/jpeg" name="myFile"  size="20" style="float: right"  dir="rtl" ></td>
						<td align="right"   dir="ltr" height="32" width="20%" bgcolor="#EEEEEE">
							<p align="center">
							<font face="Droid Arabic Kufi" size="2">&nbsp; 
							<span lang="ar-sa">الصفحة</span></font></td>
						<td align="right"   dir="ltr" height="32" width="36%" bgcolor="#EEEEEE">
										<select   required="required" style="font-family: Arial; width: 100%; height:30; font-family:Droid Arabic Kufi; text-align:right"  size="1" name="page_no" class="form-control" style="width: 100%; height:30; font-family:Droid Arabic Kufi; text-align:right" dir="rtl"  ><option></option>
<?php $xx=5; ?>
                   
 
 <?php
 
include ("../config.php");
$result2=mysqli_query($conn,"select * from sub where type=2");
while($row2=mysqli_fetch_array($result2))
{
?>  
<option value="<?php echo $row2['sub_ID']; ?>"><?php echo $row2['sub']; ?></option>
 <?php } ?>
							</select></td>
					</tr>
					<tr>
						<td align="right" dir="ltr" height="31" colspan="4" bgcolor="#EEEEEE">
										
						<p align="center">
	
	<font face="Droid Arabic Kufi" size="2">
	
	<input     type="submit" value="اضافة" name="B2" style="color: #FFFFFF; font-family: Tahoma; font-size: 8pt; border: 1px dashed #FFFFFF; background-color: #737375; height:29; width:131"></font></td>
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
						<span lang="ar-sa"><b>
						<font face="Droid Arabic Kufi" size="2">الصورة</font></b></span></td>
										<td align="center"   bgcolor="#EBEBEB" dir="ltr">
							&nbsp;</td>
										<td align="center"   bgcolor="#EBEBEB" dir="ltr">
							<span lang="ar-sa"><b>
						<font face="Droid Arabic Kufi" size="2">اسم الصورة 
							انجليزي</font></b></span></td>
										<td align="center"   bgcolor="#EBEBEB" dir="ltr">
						<span lang="ar-sa"><b>
						<font face="Droid Arabic Kufi" size="2">اسم الصورة عربي</font></b></span></td>
										<td align="center" width="4%" bgcolor="#EBEBEB" dir="ltr">
										<span lang="ar-sa"><b>
										<font face="Tahoma" size="2">م</font></b></span><b><font face="Tahoma" size="2">.</font></b></td>
									</tr>
 <?php
include ("../config.php");
$result=mysqli_query($conn,"select* from  photo where img_type=1");
$i=0;
$c=0;
while($row=mysqli_fetch_array($result))
{
$c++;
  $page=$row['page'];

?>
									<tr>
										<td align="center"   dir="ltr">
																	
								<span lang="ar-sa">						
							
								<font face="Tahoma" color="#FF0000">						
							
<input     name="checkbox[]" type="checkbox" id="checkbox[]" value="<?php echo $i++;?>" style="width: 100%"    ></font></span></td>
										<td align="center" width="14%" dir="ltr">
										<img border="0" src="../images/portfolio/<?php echo $row['photo']; ?>" width="81" height="41"></td>
										<td align="center" width="17%" dir="ltr">
										<select    style="font-family: Arial; width: 100%; height:30; font-family:Droid Arabic Kufi; text-align:right"  size="1" name="page[]" class="form-control" style="width: 100%; height:30; font-family:Droid Arabic Kufi; text-align:right" dir="rtl"  > 
 
 <?php
if($page==1)
{
?>
 
<?php
}
else
{
$result2=mysqli_query($conn,"select * from sub where sub_ID='$page'");
while($row2=mysqli_fetch_array($result2))
{
?>  
<option value="<?php echo $row2['sub_ID']; ?>"><?php echo $row2['sub']; ?></option>
 <?php } } ?>
		

                   
 <?php
 
include ("../config.php");
$result2=mysqli_query($conn,"select * from sub where type=2");
while($row2=mysqli_fetch_array($result2))
{
?>  
<option value="<?php echo $row2['sub_ID']; ?>"><?php echo $row2['sub']; ?></option>
 <?php } ?>
							</select></td>
										<td align="center" width="33%" dir="ltr">
										<font face="Tahoma" size="2">
										 <textarea     rows="2" name="T2[]" cols="20" style="width: 100%; height: 40" dir="rtl"><?php echo $row['Description']; ?></textarea></font></td>
										<td align="center" width="30%" dir="ltr">
										<font face="Tahoma" size="2">
										<textarea     rows="2" name="T1[]" cols="20" style="width: 100%; height: 40" dir="rtl"><?php echo $row['name']; ?></textarea></font></td>
										<td align="center" width="4%" dir="ltr" bgcolor="#EEEEEE">
										<font color="#FF0000">
										<font size="2" face="Tahoma">
									<?php echo $c; ?></font><font face="Tahoma"><font size="2">
										</font>
									
									<input     type=hidden class=input2 id=roomno0 size=19 name=ID[] style="width: 243; height: 21" dir="rtl" value="	<?php echo $row['ID']; ?>"></font></font></td>
									</tr>
<?php
}
?>
									<tr>
										<td align="center" colspan="6" bgcolor="#EEEEEE">
										<input     type="submit" value="حذف" name="B3"   class="btn btn-danger dropdown-toggle">&nbsp;&nbsp;&nbsp;
										<input     type="submit" value="تعديل" name="B4" class="btn btn-primary dropdown-toggle"></td>
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
if("اضافة"=="$B2")
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

$page_no= mysqli_real_escape_string($conn,htmlspecialchars($_POST['page_no'], ENT_QUOTES, "utf-8"));
 




$sql="insert into photo set Description='$T2',name='$T1',photo='$name',page='$page_no',img_type=1 ";
 

if(@mysqli_query($conn,$sql))
{
echo '<script>
function myFunction() {
document.getElementById("snackbar2").style.visibility = "hidden";
}
 document.getElementById("snackbar2").style.visibility = "visible";
 window.setTimeout("hideMsg()", 1000); </script>';
?><meta http-equiv="refresh" content="1;url=<?php echo( $self ); ?>"><?php

echo '<meta http-equiv="refresh" content="1;url=add_photo.php">';
}
}
 

elseif("تعديل"=="$B4")
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

$sql="UPDATE photo set name='$T1',Description='$T2',page='$T3'  where ID='$ID'";
if(@mysqli_query($conn,$sql))
{
echo '<meta http-equiv="refresh" content="1;url=add_photo.php">';
}

}

echo '<script>
function myFunction() {
document.getElementById("snackbar").style.visibility = "hidden";
}
 document.getElementById("snackbar").style.visibility = "visible";
 window.setTimeout("hideMsg()", 2000); </script>';
}}

elseif("حذف"=="$B3")
{
 

if($checkbox){ 
foreach($_POST['checkbox'] as $i) { 

$sql="DELETE FROM photo where ID='{$_POST['ID'][$i]}'";
if(@mysqli_query($conn,$sql))
{
echo '<meta http-equiv="refresh" content="1;url=add_photo.php">';
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