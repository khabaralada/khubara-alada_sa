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
<title>الدورات</title>
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
<h1><small>  الدورات
</small></h1>
</section>

 



 
<section class="content" dir=rtl>
<div class="box box-info">
<div class="box-body">


 
 
	 
		
<table id='example1'  class="table table-bordered table-striped"  dir=ltr >

								<form method="POST" name="form2" action="<?php echo( $self ); ?>" >
									<thead>
<tr>
										<th align="right"><p align=center>
										المسجلين 
										<th align="right"><p align=center>

										<th align="right"> <p align=center>
   Course name 
										<th align="right"><p align=center>

						المدة </td>
										<th align="right"><p align=center>
 بداية الدورة&nbsp;&nbsp;
										<th align="right"><p align=center>

						الدورة</font></b></td>
										<th align="right">#
									</tr></thead>
<tbody>
 <?php
include ("../config.php");
$result=mysqli_query($conn,"select* from subjects,cors
 where cors.cors_ID=subjects.cors_ID     order by ID DESC");
$i=0;
$c=0;
while($row=mysqli_fetch_array($result))
{
$c++;
?>
									<tr>
										<td align="right"   dir="rtl">
																	
								<font face="Droid Arabic Kufi" size="2"><b>
								<?php
$result1=mysqli_query($conn,"select count(*) as co from  reg_cors where address='$row[ID]'");
while($row1=mysqli_fetch_array($result1))
{
if($row1['co']>0) {
?>

<a href="show_contact1.php?ID=<?php echo $row['ID']; ?>">استعراض</a>
(
<?php
echo $row1['co'];
?>
 )


<?php } } ?></b></font></td>
										<td align="right"   dir="rtl">
										
										
										<?php if($row['show_reg']==1) { ?> <img border="0" src="2.png" width="18" height="23"><?php } else { ?>
										X<?php } ?>
										</td>
										<td align="right">
										 
										<?php echo $row['cors_name_en']; ?></font></td>
										<td align="right">
										<?php echo $row['contact_hours']; ?></font></td>
										<td align="right">
										<?php echo $row['start_date_en']; ?></font></td>
										<td align="right">
										<?php echo $row['cors_name']; ?></font></td>
										<td align="right">
									<?php echo $c; ?> 
									
									<input  required="required"   type=hidden class=input2 id=roomno0 size=19 name=ID[] style="width: 243; height: 21" dir="rtl" value="	<?php echo $row['ID']; ?>"></font></td>
									</tr>
<?php
}
?>
						</tbody>
			
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
 if("Edit"=="$B4")
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

$sql="UPDATE sponsors set name='$T1',web='$T2' where ID='$ID'";
if(@mysqli_query($conn,$sql))
{
echo '<meta http-equiv="refresh" content="1;url=edit_sponsors.php">';
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

$sql="DELETE FROM sponsors where ID='{$_POST['ID'][$i]}'";
if(@mysqli_query($conn,$sql))
{
echo '<meta http-equiv="refresh" content="1;url=edit_sponsors.php">';
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