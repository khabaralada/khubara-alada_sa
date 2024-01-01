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
<title>إدارة المحتوى</title>
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
<h1><small>  المستخدمين
</small></h1>
</section>

 



 
<section class="content" dir=rtl>
<div class="box box-info">
<div class="box-body">

<div align="center">
	<table border="1" dir=ltr width="487" id="table1" bordercolor="#E4E4E4" height="112" cellpadding="2" bordercolorlight="#FFFFFF" style="border-collapse: collapse">
								<form method="POST" name="form1" action="<?php echo( $self ); ?>" onSubmit="return check();">									
								

<?php
include ("../config.php");
$result=mysqli_query($conn,"select* from user_crm  where username='$_SESSION[username]'");
$sql=mysqli_query($conn,$result) ; 
$rows=mysqli_num_rows($result) ; 
if($rows > 0 )
{
while($row=mysqli_fetch_array($result))
{
?>
	<tr>
										<td dir="rtl" height="21" bgcolor="#E4E4E4" colspan="2">
										<p align="center"><b>تحديث البيانات (
										<font color="#FF0000"><?php echo $row['username']; ?></font><font color="#339900"> </font> )</b></td>

									</tr>

									<tr>
										<td dir="rtl" height="29" width="242" align="right">
											<?php echo $row['name']; ?></td>
										<td dir="rtl" height="29" width="243" align="right">
										الاسم</td>
									</tr>
								
									
									
									<tr>
										<td dir="rtl" height="30" width="242">
											<input  required="required"   name="password33"  id="password33" size="20" style="width: 321; border: 1px solid #6699FF; height:19" dir="rtl"   type="password"></td>
										<td dir="rtl" height="30" width="243" align="right">
											<span lang="ar-sa">كلمة المرور 
											الحالية</span></td>
									</tr>
									
									
									
									<tr>
										<td dir="rtl" height="30" width="242">
											<input  required="required"   name="password"  id="password" size="20" style="width: 321; border: 1px solid #6699FF; height:19" dir="rtl" type="password"></td>
										<td dir="rtl" height="30" width="243" align="right">
											كلمة المرور الجديدة</td>
									</tr>
									
<?php
}}
?>	
									<tr>
										<td dir="rtl" width="589" height="30" colspan="2">
																										<p align="center"><input  required="required"   type="submit" value="موافق" name="B1" style="font-weight: 700; border-style: solid; border-width: 1px"></td>
									</tr>
									</form>
									</table>
</div>
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
if("موافق"=="$B1")
{
$T88= mysqli_real_escape_string($conn,htmlspecialchars($_POST['T88'], ENT_QUOTES, "utf-8"));
$name= mysqli_real_escape_string($conn,htmlspecialchars($_POST['name'], ENT_QUOTES, "utf-8"));
$jawal= mysqli_real_escape_string($conn,htmlspecialchars($_POST['jawal'], ENT_QUOTES, "utf-8"));
$password= mysqli_real_escape_string($conn,htmlspecialchars($_POST['password'], ENT_QUOTES, "utf-8"));
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
$password33= mysqli_real_escape_string($conn,htmlspecialchars($_POST['password33'], ENT_QUOTES, "utf-8"));
$password= mysqli_real_escape_string($conn,htmlspecialchars($_POST['password'], ENT_QUOTES, "utf-8"));

$password33= md5($password33);

$result1=mysqli_query($conn,"select* from user_crm where username='$_SESSION[username]' and password='$password33'");
$sql=mysqli_query($conn,$result1) ; 
$rows=mysqli_num_rows($result1) ; 
if($rows > 0 )
{
 


$password22= md5($password);


$sql="update user_crm set  password='$password22',go='1' where username='$_SESSION[username]'";
if(@mysqli_query($conn,$sql))
{
echo "<script language='javascript'>window.alert('تم تحديث البيانات بنجاح يجب تسجيل الدخول من جديد')</script>";
echo '<meta http-equiv="refresh" content="1;url=logout.php">';
}
}
else
{
echo "<script language='javascript'>window.alert('كلمة المرور الحالية خطأ')</script>";
}

}
?>