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
<title>التصنيفات الرئيسية</title>
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
<h1><small>  التصنيفات الرئيسية

</small></h1>
</section>

 



 
<section class="content" dir=rtl>
<div class="box box-info">
<div class="box-body">



<div align="center">
	<table border="1" width="100%" cellspacing="0" cellpadding="0" height="141" bordercolordark="#FFFFFF" bordercolorlight="#EEEEEE" style="border-left-width: 0px; border-right-width: 0px; border-bottom-width: 0px">
		<tr>
			<td bgcolor="#FFFFFF" style="border-style: none; border-width: medium">
			<p align="center">
			<div align="center">
<table border="1" width="48%" bordercolorlight="#E4E4E4" cellspacing="1" bordercolordark="#FFFFFF" dir="rtl">
						<form method="POST" name="form1" action="<?php echo( $self ); ?>" enctype="multipart/form-data" onSubmit="return check();">
					<tr>
						<td align="right" width="629" dir="ltr" height="24" colspan="2" bgcolor="#EEEEEE">
			<p align="center">
			<font face="Droid Arabic Kufi" color="#3333CC" size="2"><b>التصنيفات الرئيسية</b></font></td>
					</tr>
					<tr>
						<td align="right" width="20%" dir="ltr" height="24">
						<p align="center">
						<font face="Droid Arabic Kufi" size="2">اسم التصنيف</font></td>
						<td align="right" width="78%" dir="ltr" height="24">
							<p>
							<font face="Droid Arabic Kufi">
							<input  required="required"    name="T1" size="20"  style="width:100%; height:30; font-family:Droid Arabic Kufi; text-align:right" dir="rtl"></font></td>
					</tr>
					<tr>
						<td align="right" width="629" dir="ltr" height="31" colspan="2">
										
						<p align="center">
	
	<input  required="required"   type="submit" value="إضـــافة" name="B2"  "></td>
					</tr>
					</form>
					</table>&nbsp;<table border="1" width="48%" bordercolorlight="#E4E4E4" cellspacing="1" bordercolordark="#FFFFFF" dir="ltr">
		<tr>


											<td width="70%" align="center" colspan="2" bgcolor="#E4E4E4">

											&nbsp;</td>

											


											
											

										</tr>
																	

										<?php

					include ("../config.php");



$result=mysqli_query($conn,"select* from categories  ");
$i=0;
while($row=mysqli_fetch_array($result))

{

?>

										<form method="POST" action="">
 

								


										<tr>


											<td width="20%" align="center">

											<span lang="ar-sa">						
							
											<font face="Droid Arabic Kufi" color="#FF0000">						
							
<input      name="checkbox[]" type="checkbox" id="checkbox[]" value="<?php echo $i++;?>"  ></font></span></td>

											<td width="78%" align="center">

																						

																				<b><font face="Tahoma">

																				<font face="Droid Arabic Kufi">

												<input  required="required"   type="hidden" name="ID[]" size="37" style="border: 1px solid #000000; width:51; height:18" dir="rtl" value="<?php echo $row['category_ID']; ?>" >

																				</font><font face="Droid Arabic Kufi">

																				<textarea  required="required"   rows="1" name="T2[]" cols="45" dir="rtl" style="width: 100%"><?php echo $row['category_name']; ?></textarea></font></font></b></td>

											


											
											

										</tr>

									<?php

}

?>


										<tr>

											<td width="41%" align="center" colspan="2">

											<span lang="ar-sa">							
											<font face="Droid Arabic Kufi">							
										<input  required="required"   type="submit" value="حذف" name="B2"  <?php if($_SESSION[username]!='admin') echo 'disabled'; ?> ></font><font size="2" face="Droid Arabic Kufi">&nbsp;
										</font>
										<input  required="required"   type="submit" value="تعديل" name="B1" ></td>

										</tr>
 
									

										</form>
 
									

								</table></div>
			<div align="center">
				
				<p>&nbsp;</div>
			<font face="Droid Arabic Kufi" size="2">
			</span></font></td>
		</tr>
		</table>
</div>

<font face="Droid Arabic Kufi" size="2">

<?php
	?>

</font>

                 
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
if("إضـــافة"=="$B2")
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

$sql="insert into categories set category_name='$T1'";

if(@mysqli_query($conn,$sql))
{
echo "<script language='javascript'>window.alert('تم الاضافة بنجاح')</script>";
echo '<meta http-equiv="refresh" content="1;url=add_cat.php">';
}
}
elseif("تعديل"=="$B1")

{

$ID=$_POST['ID']; 
$T1=$_POST['T1']; 
$T2=$_POST['T2']; 

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

$sql="UPDATE categories  set  category_name='$T2' where category_ID='$ID'";
if(@mysqli_query($conn,$sql))
{
echo '<meta http-equiv="refresh" content="1;url=add_cat.php">';

}

}

echo "<script language='javascript'>window.alert('تم التعديل بنجاح')</script>";

}}



elseif("حذف"=="$B2")
{
$ID=$_POST['ID']; 

if($checkbox){ 
foreach($_POST['checkbox'] as $i) { 

$sql="DELETE FROM categories  where category_ID='{$_POST['ID'][$i]}'";
if(@mysqli_query($conn,$sql))
{
echo '<meta http-equiv="refresh" content="1;url=add_cat.php">';

}

}

echo "<script language='javascript'>window.alert('تم الحذف بنجاح')</script>";

}}


?>