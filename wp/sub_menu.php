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
<title>القوائم الفرعية
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
<h1><small>  القوائم الفرعية

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
						<p align="center">
						<font face="Droid Arabic Kufi" size="2">
						<span lang="ar-sa">
						القائمة الرئيسية</span><span lang="en-us">Main Menu
						</span></font></td>
						<td align="right"  dir="rtl" height="32" width="78%" colspan="3">
							<p align="left">
						<span lang="ar-sa">
										<font face="Tahoma" size="2">
										<select required="required"   style="font-family: Arial; width: 100%; height:30; font-family:Droid Arabic Kufi; text-align:right"  size="1" name="S1"  class="form-control" style="width: 100%; height:30; font-family:Droid Arabic Kufi; text-align:right" dir="rtl" required="required">
						<option ></option>
<?php
include ("../config.php");
$result1=mysqli_query($conn,"select* from mune where up=1");
while($row1=mysqli_fetch_array($result1))
{
echo '<option value='.$row1['ID'].'>'.$row1['mune_en'].' - '.$row1['mune'];
}
?>
										</select></font></span></td>
					</tr>
					<tr>
						<td align="right"   dir="rtl" height="32" width="18%" bgcolor="#EEEEEE">
						<p align="center">
						<font face="Droid Arabic Kufi" size="2">
						<span lang="en-us">&nbsp;Sub Menu </span>اسم القائمة 
						الفرعية</font></td>
						<td align="right"  dir="rtl" height="32" width="34%">
							<p align="center">
							<font face="Droid Arabic Kufi" size="2">				 										
						
							<input  required="required"    name="T1" id="T1" size="20"     class="form-control" style="width: 100%; height:30; font-family:Droid Arabic Kufi; text-align:right" dir="rtl" required="required" placeholder="Menu Name" ></font></td>
						<td align="right"  dir="rtl" height="32" width="13%" bgcolor="#EEEEEE">
							<p align="center">
							<font face="Droid Arabic Kufi" size="2">English</font></td>
						<td align="right"  dir="rtl" height="32" width="34%">
							<p align="center">
							<font face="Droid Arabic Kufi" size="2">				 										
						
							<input  required="required"    name="T2" id="T3" size="20"     class="form-control" style="width: 100%; height:30; font-family:Droid Arabic Kufi; text-align:right" dir="rtl" required="required" placeholder="Menu Name" ></font></td>
					</tr>
					<tr>
						<td align="right"   dir="rtl" height="32" width="18%" bgcolor="#EEEEEE">
						<p align="center">
						<font face="Droid Arabic Kufi" size="2">رابط URL</font></td>
						<td align="right"  dir="rtl" height="32" width="78%" colspan="3">
							<font face="Droid Arabic Kufi" size="2">				 										
						
							<input     name="url" id="T6" size="20"     class="form-control" style="width: 100%; height:30; font-family:Droid Arabic Kufi; text-align:right" dir="rtl"   ></font></td>
					</tr>
					<tr>
						<td align="right"   dir="rtl" height="32" width="18%" bgcolor="#EEEEEE">
						<p align="center">
						<font face="Droid Arabic Kufi" size="2">نوع الصفحة<span lang="en-us">Page 
						Type</span></font></td>
						<td align="right"  dir="rtl" height="32" width="78%" colspan="3">
							<p dir="rtl">
							<font face="Droid Arabic Kufi" size="2">
							<input  required="required"   type="radio" value="1" name="R1" checked> 
							نصوص وصور وفيديو <span lang="en-us">About NAHT Text</span><br>
							<input  required="required"   type="radio" value="2" name="R1"> صور فقط 
							<span lang="en-us">&nbsp;Images Page </span> <br>
							<input  required="required"   type="radio" value="3" name="R1"> فيديو فقط  
							<span lang="en-us">&nbsp;Video Page</span><br>
							
							<input  required="required"   type="radio" value="4" name="R1"> رابط URL <br>
							<input  required="required"   type="radio" value="5" name="R1"> أبحاث Research<br>



							<input  required="required"   type="radio" value="10" name="R1">مقالات Articles<span lang="en-us"> 
							 </span><br>
							 
							 							<input  required="required"   type="radio" value="6" name="R1">  الدورات التدريبية<span lang="en-us"> 
							 </span><br>
							 
							 
							<input  required="required"   type="radio" value="7" name="R1">الاعتمادات <br>
							<input  required="required"   type="radio" value="8" name="R1">Training Services  <span lang="en-us"> 
							Text</span><br>
							<input  required="required"   type="radio" value="9" name="R1">Careers  <span lang="en-us"> 
							Text</span>
							</font></td>
					</tr>
					<tr>
						<td align="right" dir="rtl" height="31" colspan="4" bgcolor="#EEEEEE">
										
						<p align="center">
	
	<font face="Droid Arabic Kufi" size="2">
	
	<input  required="required"   type="submit" value="New addition" name="B2"  ></font></td>
					</tr>
					</form>
					</form>
					</table> </div>
			</span></td>
		</tr>
		</table>
		
		<table  width=100% class="table table-striped table-bordered table-condensed"  style="border-collapse: collapse" border="1">
								<form method="POST" name="form2" action="<?php echo( $self ); ?>" >
									<tr>
										<td align="center" width="4%" bgcolor="#EBEBEB" dir="rtl">
										&nbsp;</td>
										<td align="center"   bgcolor="#EBEBEB" dir="rtl">
						<p align="center">
						<font face="Droid Arabic Kufi" size="2">رابط URL</font></td>
										<td align="center"   bgcolor="#EBEBEB" dir="rtl">
			<p align="center"><font face="Droid Arabic Kufi" size="2">النوع</font></td>
										<td align="center"   bgcolor="#EBEBEB" dir="rtl" colspan="2">
			<p align="center">
			<font face="Droid Arabic Kufi" size="2">اسم القائمة الفرعية</font></td>
										<td align="center" width="16%" bgcolor="#EBEBEB" dir="rtl">
			<p align="center">
			<font face="Droid Arabic Kufi" size="2">القائمة الرئيسية</font></td>
										<td align="center" width="4%" bgcolor="#EBEBEB" dir="rtl">
										<p align="center">
										<font face="Droid Arabic Kufi" size="2">No.</font></td>
									</tr>
 <?php
include ("../config.php");
$result=mysqli_query($conn,"select* from  mune,sub where ID=m_ID order by mune");
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
										<td align="center" width="23%" dir="rtl">
										<font face="Droid Arabic Kufi" size="2">				 										
						
							<input       name="url[]" id="T5" size="20"     class="form-control" style="width: 100%; height:30; font-family:Droid Arabic Kufi; text-align:right" dir="rtl"    value="<?php echo $row['url']; ?>" ></font></td>
										<td align="center" width="16%" dir="rtl">
										<select required="required"   style="font-family: Arial; width: 100%; height:30; font-family:Droid Arabic Kufi; text-align:right"  size="1" name="D1[]">
										<?php if($row['type']==1) { ?><option value="1">نصوص وصور وفيديو</option><?php } ?>
										<?php if($row['type']==2) { ?><option value="2">صور فقط</option><?php } ?>
										<?php if($row['type']==3) { ?><option value="3">فيديو فقط</option><?php } ?>
										<?php if($row['type']==4) { ?><option value="4">رابط URL</option><?php } ?>
										<?php if($row['type']==5) { ?><option value="5">أبحاث</option><?php } ?>
										<?php if($row['type']==10) { ?><option value="10">مقالات</option><?php } ?>
										<?php if($row['type']==7) { ?><option value="7">الاعتمادات</option><?php } ?>
										<?php if($row['type']==8) { ?><option value="8">Training Services</option><?php } ?>
										<?php if($row['type']==9) { ?><option value="9">Careers</option><?php } ?>
										<?php if($row['type']==6) { ?><option value="9">الدورات التدريبية</option><?php } ?>
 
 


										 <option value="1">نصوص وصور وفيديو</option> 
										 <option value="2">صور فقط</option> 
										 <option value="3">فيديو فقط</option> 
										 <option value="4">رابط URL</option>
										 <option value="5">أبحاث</option>
										 <option value="10">مقالات</option>
										 <option value="7">الاعتمادات</option>
										 <option value="8">Training Services</option>
										 <option value="9">Careers</option>
										 <option value="6">الدورات التدريبية</option>
 
										</select></td>
										<td align="center" width="18%" dir="rtl">
										<font face="Droid Arabic Kufi" size="2">				 										
						
							<input  required="required"    name="T2[]" id="T4" size="20"     class="form-control" style="width: 100%; height:30; font-family:Droid Arabic Kufi; text-align:right" dir="rtl"    value="<?php echo $row['sub_en']; ?>" ></font></td>
										<td align="center" width="18%" dir="rtl">
										<font face="Droid Arabic Kufi" size="2">				 										
						
							<input  required="required"    name="T1[]" id="T2" size="20"     class="form-control" style="width: 100%; height:30; font-family:Droid Arabic Kufi; text-align:right" dir="rtl"     value="<?php echo $row['sub']; ?>" ></font></td>
										<td align="center" width="16%" dir="rtl" bgcolor="#EEEEEE">
										<font face="Droid Arabic Kufi" size="2">
										<?php echo $row['mune']; ?></font></td>
										<td align="center" width="4%" dir="rtl" bgcolor="#EEEEEE">
										<font color="#FF0000">
										<font size="2" face="Tahoma">
									<?php echo $c; ?></font><font face="Tahoma"><font size="2">
										</font>
									
									<input  required="required"   type=hidden class=input2 id=roomno0 size=19 name=ID[] style="width: 243; height: 21" dir="rtl" value="	<?php echo $row['sub_ID']; ?>"></font></font></td>
									</tr>
<?php
}
?>
									<tr>
										<td align="center" colspan="7" bgcolor="#EEEEEE">
										<input      type="submit" value="Delete" name="B3"   class="btn btn-danger dropdown-toggle">&nbsp;&nbsp;&nbsp;
										<input      type="submit" value="Saving changes" name="B4" class="btn btn-primary dropdown-toggle"></td>
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
$R1= mysqli_real_escape_string($conn,htmlspecialchars($_POST['R1'], ENT_QUOTES, "utf-8"));
$url= mysqli_real_escape_string($conn,htmlspecialchars($_POST['url'], ENT_QUOTES, "utf-8"));



$sql="insert into sub set  m_ID='$S1',sub='$T1',type='$R1',sub_en='$T2',sort1='0',url='$url'  ";
 

if(@mysqli_query($conn,$sql))
{
echo '<script>
function myFunction() {
document.getElementById("snackbar2").style.visibility = "hidden";
}
 document.getElementById("snackbar2").style.visibility = "visible";
 window.setTimeout("hideMsg()", 1000); </script>';
?><meta http-equiv="refresh" content="1;url=<?php echo( $self ); ?>"><?php

echo '<meta http-equiv="refresh" content="1;url=sub_menu.php">';
}
}
 

elseif("Saving changes"=="$B4")
{
 
if($checkbox){ 
foreach($_POST['checkbox'] as $i) { 

$sub= mysqli_real_escape_string($conn,htmlspecialchars($_POST['T1'][$i], ENT_QUOTES, "utf-8"));
$sub_en= mysqli_real_escape_string($conn,htmlspecialchars($_POST['T2'][$i], ENT_QUOTES, "utf-8"));
$type= mysqli_real_escape_string($conn,htmlspecialchars($_POST['D1'][$i], ENT_QUOTES, "utf-8"));
$url= mysqli_real_escape_string($conn,htmlspecialchars($_POST['url'][$i], ENT_QUOTES, "utf-8"));
$ID= mysqli_real_escape_string($conn,htmlspecialchars($_POST['ID'][$i], ENT_QUOTES, "utf-8"));
 

$sql="UPDATE sub set sub='$sub',sub_en='$sub_en',type='$type',sort1='0',url='$url'  where sub_ID='$ID'";
if(@mysqli_query($conn,$sql))
{
echo '<meta http-equiv="refresh" content="1;url=sub_menu.php">';
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

$sql="DELETE FROM sub where sub_ID='{$_POST['ID'][$i]}'";
if(@mysqli_query($conn,$sql))
{
echo '<meta http-equiv="refresh" content="1;url=sub_menu.php">';
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