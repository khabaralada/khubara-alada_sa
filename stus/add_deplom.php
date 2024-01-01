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
<h1><small>  					إضافة المجالات والدبلومات   

</small></h1>
</section>

 



 
<section class="content" dir=rtl>
<div class="box box-info">
<div class="box-body">



 
                  <form role="form" action="" method="post">
                    <!-- text input -->
                     
                    
                     
                    
                    
                    <div class="form-group">
                      <label>  المجال/الدبلوم </label>
                      
                      <input  name="T1" id="T1" size="20"   required="required"   class="form-control"  >
 
                    </div>

  <div class="form-group">
                      <label>  المدة  </label>
                      
                      <input  name="T2" id="T2" size="20"   required="required"   class="form-control"  >
 
                    </div>


                    <!-- input states -->
                     
                    <div class="form-group ">
                      <label>الفرع</label>
 <select style="font-family: Arial"   style="font-family: Arial"   size="1" name="T3"              class="form-control"  >
 <option></option> 
<?
$i=0;
include ("conn.php");
if($Branches==0)
$query = "select * from branches    ";
else
$query = "select * from branches where      Branches_ID='$Branches'";
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
                    
                     
                    
                    
                    <div class="form-group has-error">
 
<input type="submit" value="تسجيل" name="B122"  class="btn btn-primary" style="float: left">                    </div>
 
                  </form>

                  
                  <form role="form" action="" method="post">
                    <!-- text input -->
                     
                    
                     
                    
                    
                     

                    <!-- textarea -->
                     
                  <table id="example1" class="table table-bordered table-striped"  >
							<?
$i=0;
$query = "select * from catogry order by Branches";
$result = mysqli_query($conn,$query);
$rows = mysqli_num_rows($result );
if($rows > 0 )
{
while($row=mysqli_fetch_array($result))
{
?>								<tr>
									<td height="25"  >
						<font face="Droid Arabic Kufi">
						
						<input  type=hidden name="no[]" size="20"  placeholder="رقم القاعة" class="form-control"   dir="rtl" value="<? echo $row['catogry_ID']; ?>">
						<input  type=hidden name="noo[]" size="20"   class="form-control"   dir="rtl" value="<? echo $row['catogry']; ?>">
						
						
						
						<input name="T1[]" size="20"   class="form-control"   dir="rtl" value="<? echo $row['catogry']; ?>"></font></td>
									<td height="25"  >
							
						<font face="Droid Arabic Kufi">
						<input name="T2[]" size="20"    class="form-control"   dir="rtl" value="<? echo $row['cors']; ?>"></font></td>
						
						
						<td height="25"  >
							
						<font face="Droid Arabic Kufi">
						<select style="font-family: Arial"   style="font-family: Arial"   size="1" name="T3[]"              class="form-control"  >
 
<?
 
include ("conn.php");
$query2 = "select * from branches where      Branches_ID='$row[Branches]'";
$result2 = mysqli_query($conn,$query2);
$rows2 = mysqli_num_rows($result2 );
if($rows2 > 0 )
{
while($row2=mysqli_fetch_array($result2))
{
?>

<option value="<? echo $row2['Branches_ID']; ?>"><? echo $row2['Branches_name']; ?></option>
<?php } } ?>

<?
 
include ("conn.php");
if($Branches==0)
$query4 = "select * from branches    ";
else
$query4= "select * from branches where      Branches_ID='$Branches'";
$result4 = mysqli_query($conn,$query4);
$rows4 = mysqli_num_rows($result4 );
if($rows4 > 0 )
{
while($row4=mysqli_fetch_array($result4))
{
?>

<option value="<? echo $row['Branches_ID']; ?>"><? echo $row['Branches_name']; ?></option>
<?php } } ?>

					</select>
					
					
					
					</font></td>
						
						
						
						
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
 $T3 = mysqli_real_escape_string($conn,htmlspecialchars($_POST['T3'], ENT_QUOTES, "utf-8")); 
 

$sql="insert into catogry set catogry='$T1',cors='$T2',Branches='$T3' ";
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

 
$sql="Delete from catogry  where catogry_ID='$no'";
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
 $T3 = mysqli_real_escape_string($conn,htmlspecialchars($_POST['T3'][$i], ENT_QUOTES, "utf-8")); 
 
 $no = mysqli_real_escape_string($conn,htmlspecialchars($_POST['no'][$i], ENT_QUOTES, "utf-8")); 
 $noo = mysqli_real_escape_string($conn,htmlspecialchars($_POST['noo'][$i], ENT_QUOTES, "utf-8")); 

 
$sql="update catogry   set catogry='$T1',cors='$T2',Branches='$T3' where catogry_ID='$no'";
if(mysqli_query($conn,$sql))
{
?><meta http-equiv="refresh" content="2;url=<?php echo( $self ); ?>"><?
}
 
 $sql="update cors   set cors_type='$T1'  where cat_ID='$no'";
if(mysqli_query($conn,$sql))
{
?><meta http-equiv="refresh" content="2;url=<?php echo( $self ); ?>"><?
}

 $sql="update  stu_sec   set cors_type='$T1'  where cors_type='$noo'";
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