<?php
error_reporting(0);
include('session.php'); 
include('font.php'); 
include ("conn.php");

?>
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>البرنامج الأكاديمي</title>
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
<? include("header.php"); ?>
<? include("sidebar.php"); ?>

<div class="content-wrapper">

<section class="content-header" dir=rtl>
<h1><small>
القاعات الدراسية
 </small></h1>
</section>
 
<section class="content" dir=rtl>
<div class="box box-info">
<div class="box-body">
                  <form role="form" action="" method="post">
                    <!-- text input -->
                     
                    
                    <div class="form-group">
                      <label>المبني</label>
                      <select style="font-family: Arial"   style="font-family: Arial"   size="1" name="D2"   required    class="form-control"  >
							<option></option>
<?
$i=0;
include ("conn.php");
$query = "select * from branches ";
$result = mysqli_query($conn,$query);
$rows = mysqli_num_rows($result );
if($rows > 0 )
{
while($row=mysqli_fetch_array($result))
{
?>

<option value="<? echo $row['Branches_ID']; ?>"><? echo $row['Branches_name']; ?></option>
<?php } } ?>
					</select>
                    </div>
                    
                    
                     

                    <!-- textarea -->
                     
                  <table class="table table-striped">
								<?
	$i=0;
	for($k=1;$k<=10;$k++)
	{
	?>
								<tr>
									<td height="25"  >
						<font face="Droid Arabic Kufi">
						<input name="T1[]" size="20"  placeholder="رقم القاعة" class="form-control"   dir="rtl"></font></td>
									<td height="25" width="491">
									<font face="Droid Arabic Kufi">
									<select style="font-family: Arial"   style="font-family: Arial"   size="1" name="D1[]"  class="form-control"   dir="rtl"><option hidden>نوع القاعة</option>
									<option>نظري</option>
									<option>عملي</option>
									</select></font></td>
									<td height="25"  >
							
						<font face="Droid Arabic Kufi">
						<input name="T3[]" size="20" placeholder="عدد المقاعد"  class="form-control"   dir="rtl"></font></td>
									<td height="25" width="28">
							
								<span lang="ar-sa">						
							
								<font face="Droid Arabic Kufi">						
							
<input name="checkbox[]" type="checkbox" id="checkbox[]" value="<?php echo $i++;?>"   ></font></span></td>
								</tr>
<?
}
?>
							</table>               

                    <!-- input states -->
                     
                     
                    
                     
                    
                    
                    <div class="form-group has-error">
 
<input type="submit" value="تسجيل" name="B1"  class="btn btn-primary" style="float: left">                    </div>
 
                  </form>

                </div> 
 

                  </div>
</div>
</section>


</div><!-- /.content-wrapper -->
<? include('footer.php'); ?>
    </div><!-- ./wrapper -->
  </body>
</html>

<?

include ("conn.php");
if (isset($_POST['B1'])) {


if($checkbox){ 
foreach($_POST['checkbox'] as $i) { 
 $T1 = mysqli_real_escape_string($conn,htmlspecialchars($_POST['T1'][$i], ENT_QUOTES, "utf-8"));
 $T2 = mysqli_real_escape_string($conn,htmlspecialchars($_POST['D1'][$i], ENT_QUOTES, "utf-8")); 
 $T3 = mysqli_real_escape_string($conn,htmlspecialchars($_POST['T3'][$i], ENT_QUOTES, "utf-8")); 
 $D2 = mysqli_real_escape_string($conn,htmlspecialchars($_POST['D2'], ENT_QUOTES, "utf-8")); 

if($_POST['T1'][$i]=="" )
echo ("<script language='javascript'>window.alert('يوجد حقول فارغة يجب ان تملأ جميع الحقول')</script>");
ELSE
{
$sql="insert into building set Building='$D2',cou_class='$T1',type_room='$T2',cout_stu='$T3'";
if(mysqli_query($conn,$sql))
{
?><meta http-equiv="refresh" content="2;url=<?php echo( $self ); ?>"><?
}
}
}}
echo '<script>
function myFunction() {
document.getElementById("snackbar").style.visibility = "hidden";
}
 document.getElementById("snackbar").style.visibility = "visible";
 window.setTimeout("hideMsg()", 2000); </script>';
}
?>