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
                  <?

 
 
include ("conn.php");
if($Branches==0)
$result1=mysqli_query($conn,"select distinct Branches from subjects    ");
else
$result1=mysqli_query($conn,"select distinct Branches from subjects  where      Branches='$Branches' ");
while($row1=mysqli_fetch_array($result1))
{
$corss=$row1['Branches'];


$result11=mysqli_query($conn,"select distinct cors from subjects  where      Branches='$corss' ");
while($row11=mysqli_fetch_array($result11))
{
$cors=$row11['cors'];
?>
			<table id='example1'  class="table table-bordered table-striped"  >

								<form method="POST" action="s_news.php">
							                    <thead>
<tr>
						 <th height="26"><p align=center>المجال
						 <th height="26"><p align=center>الفرع</span>
						 <th height="26"><p align=center>اسم الدورة
						 <th height="26"><p align=center>رقم الاعتماد / الرمز
						 <th height="26"><p align=center>عدد الساعات 
						 <th height="26"><p align=center>الايام 

						 <th height="26"><p align=center>المحاور الرئيسة 
						 <th height="26"><p align=center>المحاور الفرعية 
						 <th height="26"><p align=center>التجهزات   
						 <th height="26"><p align=center>الوسائل التدريبية
						 <th height="26"><p align=center>المصادر والمحتوي   
						 
						 						 <th height="26"><p align=center>الفديوهات 

<th height="26"><p align=center>الصور  
<th height="26"><p align=center>الدروس  
						 <th height="26"><p align=center>
					</tr>	 </thead>
                    <tbody>
																							
																																<?

include ("conn.php");
$result=mysqli_query($conn,"select * from subjects,branches where Branches='$corss' and Branches_ID=Branches and cors='$cors'");
$i=0;
while($row=mysqli_fetch_array($result))
{
?>
																																<tr>
						<td>
						 
						 <? echo $row['cors']; ?><td>
						  <? echo $row['Branches_name']; ?><td>
						 <? echo $row['cors_name']; ?>
						 <td>						<? echo $row['cors_code']; ?> 
						 <td>						<? echo $row['contact_hours']; ?>
						 <td>						<? echo $row['credits']; ?>
						 <td>						
						 <a href="main_axes.php?cors_ID=<? echo $row['cors_ID']; ?>"  class="btn btn-Warning btn-sm   "><i class="fa fa-plus">
                       <?
$query1 = "select count(*) as co from  main_axes where cors_ID='$row[cors_ID]' ";
$result1 = mysqli_query($conn,$query1);
while($row1=mysqli_fetch_array($result1))
{
echo $row1['co'];
}
?>
</i></a><td>						


			 <a href="sub_axes.php?cors_ID=<? echo $row['cors_ID']; ?>"  class="btn btn-Warning btn-sm   "><i class="fa fa-plus">
                       <?
$query1 = "select count(*) as co from  sub_axes where cors_ID='$row[cors_ID]' ";
$result1 = mysqli_query($conn,$query1);
while($row1=mysqli_fetch_array($result1))
{
echo $row1['co'];
}
?>
</i></a>


	

<td>						


			 <a href="equipment.php?cors_ID=<? echo $row['cors_ID']; ?>"  class="btn btn-Warning btn-sm   "><i class="fa fa-plus">
                       <?
$query1 = "select count(*) as co from  equipment where cors_ID='$row[cors_ID]' ";
$result1 = mysqli_query($conn,$query1);
while($row1=mysqli_fetch_array($result1))
{
echo $row1['co'];
}
?>
</i></a>


<td>						


			 <a href="tools.php?cors_ID=<? echo $row['cors_ID']; ?>"  class="btn btn-Warning btn-sm   "><i class="fa fa-plus">
                       <?
$query1 = "select count(*) as co from  tools where cors_ID='$row[cors_ID]' ";
$result1 = mysqli_query($conn,$query1);
while($row1=mysqli_fetch_array($result1))
{
echo $row1['co'];
}
?>
</i></a>						 


 


<td>						


			 <a href="cors_file.php?cors_ID=<? echo $row['cors_ID']; ?>"  class="btn btn-Warning btn-sm   "><i class="fa  fa-download">
                       <?
$query1 = "select count(*) as co from  cors_file where cors_ID='$row[cors_ID]' ";
$result1 = mysqli_query($conn,$query1);
while($row1=mysqli_fetch_array($result1))
{
echo $row1['co'];
}
?>
</i></a>


<td>						


			 <a href="cors_video.php?cors_ID=<? echo $row['cors_ID']; ?>"  class="btn btn-Warning btn-sm   "><i class="fa fa-video-camera">
                       <?
$query1 = "select count(*) as co from  video_cors where cors_ID='$row[cors_ID]' ";
$result1 = mysqli_query($conn,$query1);
while($row1=mysqli_fetch_array($result1))
{
echo $row1['co'];
}
?>
</i></a>


<td>						


			 <a href="sub_photo.php?cors_ID=<? echo $row['cors_ID']; ?>"  class="btn btn-Warning btn-sm   "><i class="fa fa-picture-o">
                       <?
$query1 = "select count(*) as co from  sub_photo where cors_ID='$row[cors_ID]' ";
$result1 = mysqli_query($conn,$query1);
while($row1=mysqli_fetch_array($result1))
{
echo $row1['co'];
}
?>
</i></a>						 



<td>						


			 <a href="lessons.php?cors_ID=<? echo $row['cors_ID']; ?>"  class="btn btn-Warning btn-sm   "><i class="fa fa-picture-o">
                       <?
$query1 = "select count(*) as co from  lessons  where cors_ID='$row[cors_ID]' ";
$result1 = mysqli_query($conn,$query1);
while($row1=mysqli_fetch_array($result1))
{
echo $row1['co'];
}
?>
</i></a>





					 <td>						<a href="edit_cors.php?ID=<? echo $row['cors_ID']; ?>"><i class="fa fa-pencil btn btn-info btn-sm "></i></a>
					</tr>
					<?
					}
					?>
					</form>

				</table></p><br><?  } } ?>

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