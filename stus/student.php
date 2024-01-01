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
 
حضور المتدربين يوم :
<? 
 $date= mysqli_real_escape_string($conn,htmlspecialchars($_GET['date'], ENT_QUOTES, "utf-8"));

 
                      if(date('l', strtotime($date))=="Saturday") echo "السبت";
                      if(date('l', strtotime($date))=="Sunday") echo "الاحد";
                      if(date('l', strtotime($date))=="Monday") echo "الاثنين";
                      if(date('l', strtotime($date))=="Tuesday") echo "الثلاثاء";
                      if(date('l', strtotime($date))=="Wednesday") echo "الاربعاء";
                      if(date('l', strtotime($date))=="Thursday") echo "الخميس";
                      if(date('l', strtotime($date))=="Friday") echo "الجمعة";  ?>
                      
 -  بتايخ : <? echo $date; ?> - المدرب: 

 <?
include ("conn.php");
 $teacher_id1= mysqli_real_escape_string($conn,htmlspecialchars(intval($_GET['teacher_id1']), ENT_QUOTES, "utf-8"));

$query = "select *   from   teacher    where teacher_id='$teacher_id1'  ";
$result = mysqli_query($conn,$query);
while($row=mysqli_fetch_array($result))
{
echo $row['teacher_name'];
} ?> 
 
 
 </small></h1>
</section>
 
<section class="content" dir=rtl>
<div class="box box-info">
<div class="box-body">                  <table id="example1" class="table table-bordered table-striped"  >
                    <form method="POST" action="">
 
                    <thead>
                       
                      <tr>
                         <th><p align=center>
						<span lang="ar-sa">م</span></th>
                         <th><p align=center>
						رقم الهوية</th>
                         <th><p align=center>اسم المتدرب</th>
                         
                         <th><p align=center>الجنسية</th>
                         <th><p align=center>الجوال</th>
                         <th><p align=center>عدد أيام الحضور</span></th>
                         <th><p align=center>
						<span lang="ar-sa">عدد أيام الغياب</span></th>
                         <th><p align=center>رقم الدورة</th>
                         <th><p align=center>اسم الدورة</th>
                      </tr>
                    </thead>
                    <tbody>
                     <?
include ("conn.php");
$i=0;
 $teacher_id1= mysqli_real_escape_string($conn,htmlspecialchars(intval($_GET['teacher_id1']), ENT_QUOTES, "utf-8"));
 $date= mysqli_real_escape_string($conn,htmlspecialchars($date, ENT_QUOTES, "utf-8"));

$query = "select * from absence,stu_sec,cors,subjects where subjects.cors_ID=cors.cors_ID and cors.ID=stu_sec.section_Id and  stu_sec.ID_reg=absence.ID_reg and   
date_en='$date' and absence.teacher='$teacher_id1'  and absence.type='1'";
$result = mysqli_query($conn,$query);
$rows = mysqli_num_rows($result );
if($rows > 0 )
{
while($row=mysqli_fetch_array($result))
{
  $BranchesID=$row['1'];
  $teacher_id=$row['traning_name'];
   $ID_reg=$row['ID_reg'];


$query1 = "select * from student   where stu_id='$row[stu_id]'  ";
$result1 = mysqli_query($conn,$query1);
while($row1=mysqli_fetch_array($result1))
{

?>
 <tr>
 
 
                        <td>
						<? $C++; echo $C; ?></td>
 
 
                        <td>
						
 
						
						
						<? echo $row1['iqama']; ?></td>
                        <td>
						<a href="detalis.php?ID_reg=<? echo $row['ID_reg']; ?>"><? echo $row1['stu_name_ar']; ?></a></td>
                        <td>
 <? echo $row1['Nationality'];
?></td>
                        <td>
						 
<? 
echo $row1['mobile'];

?></td>
                        <td>  
							<a href="detalis.php?ID_reg=<? echo $row['ID_reg']; ?>"><?
$result1=mysqli_query($conn,"select* from absence where ID_reg='$ID_reg' and type='1'");
$c=0;
while($row1=mysqli_fetch_array($result1))
{
$c++;
}
echo $c;
?></a></td>
                        <td> 
							<a href="detalis.php?ID_reg=<? echo $row['ID_reg']; ?>"><?
$result1=mysqli_query($conn,"select* from absence where ID_reg='$ID_reg' and type='0'");
$c=0;
while($row1=mysqli_fetch_array($result1))
{
$c++;
}
echo $c;
?></a></td>
                        <td>
						 <? echo $row['cors_no']; ?></td>
                        <td>
				 <? echo $row['cors_name']; ?></td>
 
                      </tr>
                    <? }}} ?>
                     
                    </tbody>
                     
                  	</form>

                     
                  </table>
       
</div>
</section>


</div><!-- /.content-wrapper -->
<? include('footer.php'); ?>
    </div><!-- ./wrapper -->
  </body>
</html>

    