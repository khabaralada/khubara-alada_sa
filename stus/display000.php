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
 

					دورات المتدرب /                      <?
include ("conn.php");
   $stu_id= mysqli_real_escape_string($conn,htmlspecialchars(intval($_GET['stu_ID']), ENT_QUOTES, "utf-8")); 

$query = "select * from student  where  stu_id='$stu_id'  ";
$result = mysqli_query($conn,$query);
while($row=mysqli_fetch_array($result))
{
 echo $row['stu_name_ar'];
 
  
  }
?></small></h1>
</section>

 



 
<section class="content" dir=rtl>
<div class="box box-info">
<div class="box-body">
                  <table id="example1" class="table table-bordered table-striped"  >
                    <thead>
                      <tr>  <th><p align=center>
						#  </th>
                         <th><p align=center>
						اسم الطالب</th>
                         <th><p align=center>
						<span lang="ar-sa">رقم الهوية</span></th>
                         <th><p align=center>
						<span lang="ar-sa">الجوال</span></th>
                         <th><p align=center>
						رقم الدورة</th>
                         <th><p align=center>اسم الدورة</th>
                         
                         <th><p align=center>الفرع</th>
                         <th><p align=center>المدرس</th>
                         <th><p align=center>تاريخ بداية الدورة</th>
                         <th><p align=center>تاريخ نهاية الدورة</th>
                         <th><p align=center>نتيجة الاختبار</th>
                         <th><p align=center>التقدير</th>
                         <th><p align=center><span lang="ar-sa">ايام الحضور</span></th>
                         <th><p align=center>نسبة الغياب</th>
                      </tr>
                    </thead>
                    <tbody>
                     <?
include ("conn.php");
$query = "select * from cors,subjects,teacher,branches,stu_sec,student
   where stu_sec.section_Id=cors.ID    and branches.Branches_ID=cors.Branches and  teacher.teacher_id=cors.traning_name and 
   subjects.cors_ID=cors.cors_ID and cors.Branches=1 and cors.cors_type='لغة الإنجليزية'  and student.stu_id=stu_sec.stu_id   order by cors_no DESC";
$result = mysqli_query($conn,$query);
$rows = mysqli_num_rows($result );
if($rows > 0 )
{
while($row=mysqli_fetch_array($result))
{
  $BranchesID=$row['1'];
  $teacher_id=$row['traning_name'];
    $cors_type=$row['cors_type'];
    $absences_co=$row['absences'];
$end_date=$row['end_date'];

?>
 <tr>
                        <form method="POST" action="">
 <td>
						<? $C++; echo $C; ?></td>
						
						
						
                        <td>
						<? echo $row['stu_name_ar']; ?></td>
 
                        <td>
						<? echo $row['iqama']; ?></td>
 
                        <td>
						<? echo $row['mobile']; ?></td>
 
                        <td>
						<? echo $row['cors_no']; ?><input type="hidden" name="ID_reg" size="20" value="<? echo $row['ID_reg']; ?>"></td>
                        <td>
						<? echo $row['cors_name']; ?></td>
                        <td>
 <? echo $row['Branches_name'];
?></td>
                        <td>
						 
<? 
echo $row['teacher_name'];

?></td>
                        <td> 
						<? echo $row['start_date']; ?></td>
                        <td>
						<? echo $row['end_date']; ?></td>
                        <td>
						<? echo $row['scor']; ?></td>
                        <td>
						<? echo $row['Rate']; ?></td>
                        <td>
						<?
						 $aa=0;
						 $prs=0;
						 
$result1=mysqli_query($conn,"select count(type) as con from absence where ID_reg='$row[ID_reg]' and type='1'");
$c=0;
while($row1=mysqli_fetch_array($result1))
{
echo $con=$row1[con];
}
 
 
?> </td>
                        <td>
						<?
						 $aa=0;
						 $prs=0;
						 
$result1=mysqli_query($conn,"select count(type) as con from absence where ID_reg='$row[ID_reg]' and type='1'");
$c=0;
while($row1=mysqli_fetch_array($result1))
{
$con=$row1[con];
}
  $aa=$absences_co-$con;
echo $prs=round($aa/$absences_co*100);
?>%</td>
                      	</form>

                      </tr>
                    <? }} ?>
                    </tbody>
                     
                  </table>
                </div> 
 

                  </div>
</div>
</section>


</div><!-- /.content-wrapper -->
<? include('footer.php'); ?>
    </div><!-- ./wrapper -->
  </body>
</html>

 