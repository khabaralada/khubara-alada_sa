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
<title>نتائج استبيان المتدربين
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
<? include("header.php"); ?>
<? include("sidebar.php"); ?>

<div class="content-wrapper">

<section class="content-header" dir=rtl>
<h1><small>
نتائج استبيان المتدربين
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
						<th width=120>احصائيات الدورة
												</thead>
                    <tbody>
																							
																																<?

include ("conn.php");
$result=mysqli_query($conn,"select * from cors,subjects,teacher,branches   where branches.Branches_ID=cors.Branches and  
teacher.teacher_id=cors.traning_name and subjects.cors_ID=cors.cors_ID  and subjects.cors_ID in (select cors_ID from cors where traning_name='$_SESSION[user_ID]')  order by cors_no DESC
 ");

$i=0;
while($row=mysqli_fetch_array($result))
{
?>
																																<tr>
						<td>
						 
						 <? echo $row['cors']; ?><td>
						  <? echo $row['Branches_name']; ?><td>
						 <? echo $row['cors_name']; ?>
						 <td align="center">
				<a href="test_trainee_evaluation.php?ID=<? echo $row['ID']; ?>"><i class="fa fa-user btn btn-info btn-sm "></i></a></td>
				</tr><?php } ?>
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

 