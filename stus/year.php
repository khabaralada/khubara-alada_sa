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
العام التدريبي
 </small></h1>
</section>
 
<section class="content" dir=rtl>
<div class="box box-info">
<div class="box-body">
                  <form role="form" action="" method="post">
                    <!-- text input -->
                     
                    
                     
                    
          <div class="row">
           
<div class="form-group col-lg-6">
                      <label>  العام التدريبي  </label>
                      
                      <input  name="T1" id="T1" size="20"   required="required"   class="form-control"  >
 
                    </div>

 

                    <!-- input states -->
                     
<div class="form-group col-lg-6">
                      <label class="control-label" for="inputWarning">     اسم الربع / الفصل التدريبي</label>
 
                      
                      <select style="font-family: Arial"   style="font-family: Arial"   size="1" name="T2" class="form-control" >
						<option>الاول</option>
						<option>الثاني</option>
						<option>الثالث</option>
						<option>الرابع</option>
												<option>الصيفي</option>

						</select>
						
						
                    </div>
                    
                     
                    
                    
<div class="form-group col-lg-6">
 
<input type="submit" value="تسجيل" name="B122"  class="btn btn-primary" style="float: left">                    </div></div>
 
                  </form>
<br>
                  
                  <form role="form" action="" method="post">
                    <!-- text input -->
                     
                    
                     
                    
                    
                     

                    <!-- textarea -->
                     
                  <table class="table table-striped">
							<?

$query = "select * from  year where hid=0";
$result = mysqli_query($conn,$query);
$rows = mysqli_num_rows($result );
if($rows > 0 )
{
while($row=mysqli_fetch_array($result))
{
?>								<tr>
									<td height="25"  >
						<font face="Droid Arabic Kufi">
						
						<input  type=hidden name="no[]" size="20"  placeholder="رقم القاعة" class="form-control"   dir="rtl" value="<? echo $row['ID_year']; ?>">
						
						
						
						<input name="T1[]" size="20"  placeholder="رقم القاعة" class="form-control"   dir="rtl" value="<? echo $row['year']; ?>"></font></td>
									<td height="25"  >
							
						<font face="Droid Arabic Kufi">
						<input name="T2[]" size="20" placeholder="عدد المقاعد"  class="form-control"   dir="rtl" value="<? echo $row['name']; ?>"></font></td>
									<td height="25" width="28">
							
								<span lang="ar-sa">						
							
								<font face="Droid Arabic Kufi">						
							
<input name="checkbox[]" type="checkbox" id="checkbox[]" value="<?php echo $i++;?>"   ></font></span></td>
								</tr>
<?
}}
?>
							</table>               

                    <!-- input states -->
                     
                     
                    
                     
                    
                    
                    <div class="form-group has-error">
 
<input type="submit" value="&#xf040;"   class="btn btn-warning btn-icon fa fa-pencil" name="B1"  onclick="return confirm('هل تريد حفظ التغيرات ؟')" class="btn btn-warning " style="float: left">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

<input type="submit" value="&#xf014;" formnovalidate     class="btn btn-danger btn-icon fa fa-floppy-o " name="B2" onclick="return confirm('هل تريد الحذف البيانات ؟')"   class="btn btn-danger" style="float: left"> &nbsp;</p>
&nbsp;</div>
 
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
if (isset($_POST['B122'])) {

 $T1 = mysqli_real_escape_string($conn,htmlspecialchars($_POST['T1'], ENT_QUOTES, "utf-8"));
 $T2 = mysqli_real_escape_string($conn,htmlspecialchars($_POST['T2'], ENT_QUOTES, "utf-8")); 
 

$sql="insert into year set year='$T1',name='الربع/الفصل التدريبي $T2' ";
if(mysqli_query($conn,$sql))
{
echo '<script>
function myFunction() {
document.getElementById("snackbar").style.visibility = "hidden";
}
 document.getElementById("snackbar").style.visibility = "visible";
 window.setTimeout("hideMsg()", 2000); </script>';
?><meta http-equiv="refresh" content="2;url=<?php echo( $self ); ?>"><?
}
}


if (isset($_POST['B2'])) {


if($checkbox){ 
foreach($_POST['checkbox'] as $i) { 
 $no = mysqli_real_escape_string($conn,htmlspecialchars($_POST['no'][$i], ENT_QUOTES, "utf-8")); 

 
$sql="Delete from year where ID_year='$no'";
if(mysqli_query($conn,$sql))
{
?><meta http-equiv="refresh" content="2;url=<?php echo( $self ); ?>"><?
}
}
} 
echo '<script>
function myFunction() {
document.getElementById("snackbar3").style.visibility = "hidden";
}
 document.getElementById("snackbar3").style.visibility = "visible";
 window.setTimeout("hideMsg()", 2000); </script>';
}
if (isset($_POST['B1'])) {


if($checkbox){ 
foreach($_POST['checkbox'] as $i) { 
 $T1 = mysqli_real_escape_string($conn,htmlspecialchars($_POST['T1'][$i], ENT_QUOTES, "utf-8"));
 $T2 = mysqli_real_escape_string($conn,htmlspecialchars($_POST['T2'][$i], ENT_QUOTES, "utf-8")); 
 
 $no = mysqli_real_escape_string($conn,htmlspecialchars($_POST['no'][$i], ENT_QUOTES, "utf-8")); 

 
$sql="update year set year='$T1',name='$T2'  where ID_year='$no'";
if(mysqli_query($conn,$sql))
{
?><meta http-equiv="refresh" content="2;url=<?php echo( $self ); ?>"><?
}
 
}}
echo '<script>
function myFunction() {
document.getElementById("snackbar2").style.visibility = "hidden";
}
 document.getElementById("snackbar2").style.visibility = "visible";
 window.setTimeout("hideMsg()", 2000); </script>';
}


?>