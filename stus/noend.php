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

الدورات التدريبية القائمة للمدرس/ 
<?
include ("conn.php");
    $teacher_id= mysqli_real_escape_string($conn,htmlspecialchars(intval($_GET['teacher_id']), ENT_QUOTES, "utf-8")); 

$query = "select * from teacher   where  teacher_id='$teacher_id'";
$result = mysqli_query($conn,$query);
while($row=mysqli_fetch_array($result))
{
echo $row['teacher_name'];
}
?>
 
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
                         
                         <th><p align=center>الفرع</th>
                         <th><p align=center>المدرس</th>
                         <th><p align=center>تاريخ بداية الدورة</th>
                         <th><p align=center>تاريخ نهاية الدورة</th>
                         <th><p align=center>عدد الطلاب</th>
                         <th><p align=center>تعديل</th>
                      </tr>
                    </thead>
                    <tbody>
                     <?
include ("conn.php");
    $teacher_id= mysqli_real_escape_string($conn,htmlspecialchars(intval($_GET['teacher_id']), ENT_QUOTES, "utf-8")); 

if($_SESSION['Branches']==0)
$query = "select * from cors,subjects,teacher,branches   where branches.Branches_ID=cors.Branches and  teacher.teacher_id=cors.traning_name and subjects.cors_ID=cors.cors_ID and teacher_id='$teacher_id' and end_date>='$ar_date' order by cors_no DESC";
else
$query = "select * from cors,subjects,teacher,branches   where branches.Branches_ID=cors.Branches and  teacher.teacher_id=cors.traning_name and subjects.cors_ID=cors.cors_ID and cors.Branches='$_SESSION[Branches]' and teacher_id='$teacher_id' and end_date>='$ar_date' order by cors_no DESC";
$result = mysqli_query($conn,$query);
$rows = mysqli_num_rows($result );
if($rows > 0 )
{
while($row=mysqli_fetch_array($result))
{
  $BranchesID=$row['1'];
  $teacher_id=$row['traning_name'];
    $cors_type=$row['cors_type'];

?>
 <tr>
                        <td >
						<? echo $row['cors_no']; ?></td>
                        <td >
						<? echo $row['cors_name']; ?></td>
                        <td >
 <? echo $row['Branches_name'];
?></td>
                        <td >
						 
<? 
echo $row['teacher_name'];

?></td>
                        <td > 
						<? echo $row['start_date']; ?></td>
                        <td >
						<? echo $row['end_date']; ?></td>
                        <td >
						<? 
$query1 = "select count(stu_id) as co    from stu_sec   where   section_Id='$row[0]'";
$result1 = mysqli_query($conn,$query1);
while($row1=mysqli_fetch_array($result1))
{
 ?> <a href="show_stu.php?section_Id=<? echo $row['0']; ?>"><? echo $row1['co']; ?></a> <?
 }
 ?></td>
                        <td>
				 <? if($cors_type=="لغة الإنجليزية") { ?>	<a href="edit_tahely_eng.php?ID=<? echo $row['ID']; ?>"  <i class="fa fa-pencil btn btn-info btn-sm "></i></a><? } ?>
                 <? if($cors_type=="دورة تأهلية") { ?>	<a href="edit_tahely.php?ID=<? echo $row['ID']; ?>"  ><i class="fa fa-pencil btn btn-warning btn-sm "></i></a><? } ?>
                 <? if($cors_type=="تطويري") { ?>	<a href="edit_tahely_tatwery.php?ID=<? echo $row['ID']; ?>"  ><i class="fa fa-pencil btn btn-danger btn-sm "></i></a><? } ?>
                 <? if($cors_type=="اللغة الصينية") { ?>	<a href="edit_tahely_ch.php?ID=<? echo $row['ID']; ?>"><i class="fa fa-pencil btn btn-info btn-sm "></i></a><? } ?>
                 <? if($cors_type=="دبلوم") { ?>	<a href="edit_deplome.php?ID=<? echo $row['ID']; ?>"><i class="fa fa-pencil btn btn-info btn-sm "></i></a><? } ?>
</td>
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

    