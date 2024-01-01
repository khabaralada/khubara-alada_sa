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
الهئية التدريبية
</small></h1>
</section>

 



 
<section class="content" dir=rtl>
<div class="box box-info">
<div class="box-body">	
 
                  <table id="example1" class="table table-bordered table-striped"   >
								<form method="POST" action="s_news.php">
						 																								
							<tr>
						<td width="22%" dir="ltr" " bgcolor="#DDDDDD">
						<font  color="#000000">
						<span dir="RTL">الاسم</span></font></td>
						<td width="15%" dir="ltr" " bgcolor="#DDDDDD">
						<span lang="ar-sa" dir="RTL">
						<font >الهوية / الاقامة</font></span></td>
						<td width="14%" dir="ltr" " bgcolor="#DDDDDD">
						<font face="Droid Arabic Kufi" color="#000000" size="2">
						<span dir="RTL">الدرجة 
						العليمة</span></font></td>
						<td width="11%" dir="ltr" " bgcolor="#DDDDDD">
						<font face="Droid Arabic Kufi" color="#000000" size="2">
						<span dir="RTL">العنوان</span></font></td>
						<td width="14%" dir="ltr" " bgcolor="#DDDDDD">
						<font face="Droid Arabic Kufi" color="#000000" size="2">
						<span dir="RTL">الجوال</span></font></td>
						<td width="10%" dir="ltr" " bgcolor="#DDDDDD">
						<span lang="ar-sa" dir="RTL">
						<font >الفرع</font></span></td>
						<td width="9%" dir="ltr" " bgcolor="#DDDDDD">
						&nbsp;</td>
					</tr>																								
																																<?

include ("conn.php");
if($Branches==0)
$result=mysqli_query($conn,"select* from teacher order by Branches");
else
$result=mysqli_query($conn,"select* from teacher where  Branches='$Branches'order by Branches");
$i=0;
while($row=mysqli_fetch_array($result))
{
?>
																																<tr>
						<td width="22%" dir="ltr" ">
						
						<span >
						 

								 
						<font face="Droid Arabic Kufi" color="#000000" >
						 <? echo $row['teacher_name']; ?> </font></td>
						<td width="15%" dir="ltr" ">
						<font face="Droid Arabic Kufi" color="#000000" >
						<? echo $row['id_card']; ?> </font> </td>
						<td width="14%" dir="ltr" ">
						<font face="Droid Arabic Kufi" color="#000000" >
						<? echo $row['degree']; ?> </font> </td>
						<td width="11%" dir="ltr" ">
						<font face="Droid Arabic Kufi" color="#000000" >
						<? echo $row['address']; ?></font></td>
						<td width="14%" dir="ltr" ">
						<font face="Droid Arabic Kufi" color="#000000" >
						<? echo $row['phone']; ?></font></td>
						<td width="10%" dir="ltr" ">
							<font face="Droid Arabic Kufi" color="#000000" >
						<?   $Branches=$row['Branches']; 
						
						
 
 
$query1 = "select * from branches where Branches_ID='$Branches' ";
$result1 = mysqli_query($conn,$query1);
$rows1 = mysqli_num_rows($result1 );
 
while($row1=mysqli_fetch_array($result1))
{
 echo $row1['Branches_name'];
 
}
?>

 </font></td>
						<td width="9%" dir="ltr" ">
						<span lang="ar-sa">
						<font face="Droid Arabic Kufi" >
						<a href="edit_teacher.php?teacher_id=<? echo $row['teacher_id']; ?>"><i class="fa fa-pencil btn btn-info btn-sm "></i></a></font></span></td>
					</tr>
					<?
					}
					?>
					</form>

				</table>
</div>

 

</body>
                  </div>
</div>
</section>


</div><!-- /.content-wrapper -->
<? include('footer.php'); ?>
    </div><!-- ./wrapper -->
  </body>
</html>

                </div> 
 

</html>      