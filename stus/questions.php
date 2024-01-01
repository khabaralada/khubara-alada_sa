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
الدورات التدريبية
</small></h1>
</section>

 



 
<section class="content" dir=rtl>
<div class="box box-info">
<div class="box-body">	
 
			<table id='example1'  class="table table-bordered table-striped"  >

								<form method="POST" action="s_news.php">
							                    <thead>
<tr>
						 <th><p align=center>المجال
						 <th><p align=center>الفرع</span>
						 <th><p align=center>اسم الدورة
						<th align="right" width=1>الاسئلة
												</thead>
                    <tbody>
																							
																																<?

include ("conn.php");
$result=mysqli_query($conn,"select * from subjects,branches where   Branches_ID=Branches  order by cors,Branches_ID ");
$i=0;
while($row=mysqli_fetch_array($result))
{
?>
																																<tr>
						<td>
						 
						 <? echo $row['cors']; ?><td>
						  <? echo $row['Branches_name']; ?><td>
						 <? echo $row['cors_name']; ?>
						 <td>
<?
$co=0;
						 include ("conn.php");
$result1=mysqli_query($conn,"select count(*) as co from questions where   cors_ID='$row[cors_ID]' ");
while($row1=mysqli_fetch_array($result1))
{
  $co=$row1[co];
}
if($co>=1) {
?>						
<a href="add_questions.php?cors_ID=<? echo $row['cors_ID']; ?>"><i class="fa fa-question-circle btn btn-info btn-sm "> <? echo $co; ?></i></a>
<? } else { ?>
<a href="add_questions.php?cors_ID=<? echo $row['cors_ID']; ?>"><i class="fa fa-question-circle btn btn-Warning btn-sm "> </i></a>
<? } ?>
						 <?
					}
					?>
					</form>

				</table></p><br> 

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

 $T1 = mysqli_real_escape_string($conn,htmlspecialchars($_POST['T1'], ENT_QUOTES, "utf-8"));
 $T2 = mysqli_real_escape_string($conn,htmlspecialchars($_POST['T2'], ENT_QUOTES, "utf-8")); 
 $T3 = mysqli_real_escape_string($conn,htmlspecialchars($_POST['T3'], ENT_QUOTES, "utf-8")); 
 $T4 = mysqli_real_escape_string($conn,htmlspecialchars($_POST['T4'], ENT_QUOTES, "utf-8")); 
 $T5 = mysqli_real_escape_string($conn,htmlspecialchars($_POST['T5'], ENT_QUOTES, "utf-8")); 
 $T6 = mysqli_real_escape_string($conn,htmlspecialchars($_POST['T6'], ENT_QUOTES, "utf-8")); 
 $T7 = mysqli_real_escape_string($conn,htmlspecialchars($_POST['T7'], ENT_QUOTES, "utf-8")); 
 $T8 = mysqli_real_escape_string($conn,htmlspecialchars($_POST['T8'], ENT_QUOTES, "utf-8")); 
 $cors= mysqli_real_escape_string($conn,htmlspecialchars($_POST['cors'], ENT_QUOTES, "utf-8")); 
$Branches=mysqli_real_escape_string($conn,htmlspecialchars($_POST['Branches'], ENT_QUOTES, "utf-8")); 

$sql="insert into subjects set cors_name='$T1',cors_code='$T2',contact_hours='$T3',credits='$T4',type='$T5',Semester='$T7',cors='$cors',Branches='$Branches'";
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
?>