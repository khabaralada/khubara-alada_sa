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
دورات اللغة الانجليزية
</small></h1>
</section>
 
<section class="content" dir=rtl>
<div class="box box-info">
<div class="box-body">
<p style="text-align: left"> <a href="add_Section_eng.php" class="btn btn-info btn-flat">فتح دورات اللغة الانجليزية جديدة</a></p>
 
                  <table id="example1" class="table table-bordered table-striped"  >
                    <thead>
                      <tr>
                         <th><p align=center>
						رقم الدورة</th>
                         <th><p align=center>اسم الدورة</th>
                         
                         <th><p align=center>الفرع</th>
                         <th><p align=center>المدرس</th>
                         <th><p align=center>النوع/الفترة</th>
                         <th><p align=center>تاريخ نهاية الدورة</th>
                         <th><p align=center><span lang="ar-sa">الوقت</span></th>
                         <th><p align=center>عددالطلاب</th>
                         <th><p align=center>نتائج الاستبيان  </th>
                         <th><p align=center>تعديل</th>
                      </tr>
                    </thead>
                    <tbody>
                     <?
include ("conn.php");
if($_SESSION['Branches']==0)
$query = "select * from cors,subjects,teacher,branches   where branches.Branches_ID=cors.Branches and  teacher.teacher_id=cors.traning_name and subjects.cors_ID=cors.cors_ID and cors_type='لغة الإنجليزية' order by cors_no DESC ";
else
$query = "select * from cors,subjects,teacher,branches   where branches.Branches_ID=cors.Branches and  teacher.teacher_id=cors.traning_name and subjects.cors_ID=cors.cors_ID and cors.Branches='$_SESSION[Branches]' and cors_type='لغة الإنجليزية' order by cors_no DESC ";
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
						<? if($row['cors_name']=='التأسيسي 1') echo 'Foundation 1'; 
														  elseif($row['cors_name']=='التأسيسي 2') echo 'Foundation 2'; 
														  elseif($row['cors_name']=='التأسيسي')   echo 'Foundation'; 
														  elseif($row['cors_name']=='الأول')   echo 'I'; 
														  elseif($row['cors_name']=='الثاني')   echo 'II'; 
														  elseif($row['cors_name']=='الثالث')   echo 'III'; 
														  elseif($row['cors_name']=='الرابع')   echo 'IV'; 
														  elseif($row['cors_name']=='الخامس')   echo 'V'; 
														 elseif($row['cors_name']=='السادس')   echo 'VI'; 
														  elseif($row['cors_name']=='السابع')   echo 'VII'; 
														  elseif($row['cors_name']=='الثامن')   echo 'VIII'; 
														  elseif($row['cors_name']=='التاسع')   echo 'IX'; 
														  elseif($row['cors_name']=='العاشر')   echo 'X'; 
														  elseif($row['cors_name']=='الحادي عشر')   echo 'XI'; 
														  elseif($row['cors_name']=='الثاني عشر')   echo 'XII'; 
														 echo " - ";
														echo $row['cors_name'];
														?></td>
                        <td >
 <? echo $row['Branches_name'];
?></td>
                        <td >
						 
<? 
echo $row['teacher_name'];

?></td>
                        <td > 
						<? echo $row['cors_online']; ?> - <? echo $row['cors_time']; ?></td>
                        <td >
						<? echo $row['end_date']; ?></td>
                        <td>
										<? echo $row['time1']; ?> - <? echo $row['time2']; ?></td>
                        <td>
										<? 
$query1 = "select count(stu_id) as co    from stu_sec   where   section_Id='$row[0]'";
$result1 = mysqli_query($conn,$query1);
while($row1=mysqli_fetch_array($result1))
{
 ?> <a href="show_stu.php?section_Id=<? echo $row['0']; ?>"><? echo $row1['co']; ?></a> <?
 }
 ?></td>
                        <td>
				<a href="test_trainee_evaluation.php?ID=<? echo $row['ID']; ?>"><i class="fa fa-user btn btn-info btn-sm "></i></a></td>
                        <td>
				<a href="edit_tahely_eng.php?ID=<? echo $row['ID']; ?>"><i class="fa fa-pencil btn btn-info btn-sm "></i></a></td>
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

    