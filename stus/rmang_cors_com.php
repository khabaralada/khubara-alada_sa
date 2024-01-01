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
الدورات التدريبية -  <? echo $_SESSION['name']; ?>
 </small></h1>
</section>
 
<section class="content" dir=rtl>
<div class="box box-info">
<div class="box-body">
					  
 
                  <table id="example1" class="table table-bordered table-striped"  >
                    <thead>
                      <tr>
                         <th><p align=center>
						رقم الدورة</th>
                         <th><p align=center>اسم الدورة</th>
                         
                         <th><p align=center>بداية الدورة</th>
                         <th><p align=center>نهاية الدورة</th>
                         <th><p align=center>عدد الطلاب</th>
                        <th  width=1>كشف الحضور</th>
                      </tr>
                    </thead>
                    <tbody>
                     <?
include ("conn.php");
 
$query = "select * from cors,subjects,teacher,branches   where branches.Branches_ID=cors.Branches and  teacher.teacher_id=cors.traning_name and subjects.cors_ID=cors.cors_ID and com='$_SESSION[name]'  order by cors_no DESC";
 $result = mysqli_query($conn,$query);
$rows = mysqli_num_rows($result );
if($rows > 0 )
{
while($row=mysqli_fetch_array($result))
{
  $BranchesID=$row['1'];
  $teacher_id=$row['traning_name'];
?>
 <tr>
                        <td align="center" >
						<? echo $row['cors_no']; ?></td>
                        <td align="center" >
						<? echo $row['cors_name']; ?></td>
                        <td align="center" > 
						<? echo $row['start_date']; ?></td>
                        <td align="center" >
						<? echo $row['end_date']; ?></td>
                        <td align="center">
										<? 
$query1 = "select count(stu_id) as co    from stu_sec   where   section_Id='$row[0]'";
$result1 = mysqli_query($conn,$query1);
while($row1=mysqli_fetch_array($result1))
{
 ?>  <? echo $row1['co']; ?>  <?
 }
 ?></td>
                        <td width=1 align="center">
				<a href="print_report.php?section_Id=<? echo $row['ID']; ?>" target=_blank><i class="fa fa-print btn btn-Warning btn-sm "></i></a></td>
                      </tr>
                    <? }} ?>
                    </tbody>
                     
                  </table>
       
</div>
</section>


</div><!-- /.content-wrapper -->
<? include('footer.php'); ?>
    </div><!-- ./wrapper -->
  </body>
</html>

    