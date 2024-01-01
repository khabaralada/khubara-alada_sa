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
دورات المدرسين
 </small></h1>
</section>
 
<section class="content" dir=rtl>
<div class="box box-info">
<div class="box-body">
                  <table id="example1" class="table table-bordered table-striped"  >
                    <thead>
                      <tr>
                        <th  rowspan="2">
						رقم الهوية</th>
                        <th  rowspan="2">المدرس</th>
                         
                        <th  rowspan="2">الفرع</th>
                        <th  rowspan="2">الجوال</th>
                        <th  rowspan="2">
						البريد الالكتروني</th>
                        <th align="left" colspan="3">
						<span lang="ar-sa">الدورات</span></th>
                        <th align="left" rowspan="2">
						الجداول</th>
                      </tr>
                      <tr>
                        <th align="left"><span lang="ar-sa">الإجمالي</span></th>
                        <th align="left">
                    <label class="control-label" for="inputSuccess">
						<span lang="ar-sa">القائمة</span></th>
                        <th align="left">
                    <label class="control-label" for="inputSuccess">
						<span lang="ar-sa">المنتهية</span></th>
                      </tr>
                    </thead>
                    <tbody>
 <? 
$query1 = "select *   from teacher  where   username='$_SESSION[username]'";
$result1 = mysqli_query($conn,$query1);
while($row1=mysqli_fetch_array($result1))
{
  $cors=$row1['cors'];
}
 ?>
 <?
include ("conn.php");
if($_SESSION['Branches']==0)
$query = "select DISTINCT teacher_name,id_card,Branches_name,phone,email,teacher_id  from cors,subjects,teacher,branches   where branches.Branches_ID=cors.Branches and  teacher.teacher_id=cors.traning_name and subjects.cors_ID=cors.cors_ID   order by cors_no DESC";
else
{
if($_SESSION['acount_type']==3)
{
if($cors!="لغة الإنجليزية")
$query = "select DISTINCT teacher_name,id_card,Branches_name,phone,email,teacher_id   from cors,subjects,teacher,branches   where cors_type!='لغة الإنجليزية' and branches.Branches_ID=cors.Branches and  teacher.teacher_id=cors.traning_name and subjects.cors_ID=cors.cors_ID and cors.Branches='$_SESSION[Branches]'  order by cors_no DESC";
else
$query = "select DISTINCT teacher_name,id_card,Branches_name,phone,email,teacher_id   from cors,subjects,teacher,branches   where cors_type='لغة الإنجليزية' and branches.Branches_ID=cors.Branches and  teacher.teacher_id=cors.traning_name and subjects.cors_ID=cors.cors_ID and cors.Branches='$_SESSION[Branches]'  order by cors_no DESC";
}
else
$query = "select DISTINCT teacher_name,id_card,Branches_name,phone,email,teacher_id   from cors,subjects,teacher,branches   where branches.Branches_ID=cors.Branches and  teacher.teacher_id=cors.traning_name and subjects.cors_ID=cors.cors_ID and cors.Branches='$_SESSION[Branches]'  order by cors_no DESC";
}
$result = mysqli_query($conn,$query);
$rows = mysqli_num_rows($result );
if($rows > 0 )
{
while($row=mysqli_fetch_array($result))
{
  $BranchesID=$row['1'];
  $teacher_id=$row['traning_name'];
  $teacher_id1=$row['teacher_id'];
  
  

?>
 <tr>
                        <td >
						<? echo $row['id_card']; ?></td>
                        <td >
						<? echo $row['teacher_name']; ?></td>
                        <td >
 <? echo $row['Branches_name'];
?></td>
                        <td >
						 
<? 
echo $row['phone'];

?></td>
                        <td > 
						<? echo $row['email']; ?></td>
                        <td >
						
<? 
if($_SESSION['Branches']==0)
$query1 = "select count(cors_no) as co    from cors,subjects,teacher,branches   where branches.Branches_ID=cors.Branches and  teacher.teacher_id=cors.traning_name and subjects.cors_ID=cors.cors_ID and  traning_name='$teacher_id1'";
else
$query1 = "select count(cors_no) as co    from cors,subjects,teacher,branches   where cors.Branches='$_SESSION[Branches]' and branches.Branches_ID=cors.Branches and  teacher.teacher_id=cors.traning_name and subjects.cors_ID=cors.cors_ID and  traning_name='$teacher_id1'";
$result1 = mysqli_query($conn,$query1);
while($row1=mysqli_fetch_array($result1))
{
?> <a href="all.php?teacher_id=<? echo $teacher_id1; ?>"><? echo $row1['co']; ?> </a>
<?
}
 ?></td>
                        <td>
<? 
if($_SESSION['Branches']==0)
$query1 = "select count(cors_no) as co    from cors,subjects,teacher,branches   where end_date>='$ar_date' and branches.Branches_ID=cors.Branches and  teacher.teacher_id=cors.traning_name and subjects.cors_ID=cors.cors_ID and  traning_name='$teacher_id1'";
else
$query1 = "select count(cors_no) as co    from cors,subjects,teacher,branches   where end_date>='$ar_date' and cors.Branches='$_SESSION[Branches]' and branches.Branches_ID=cors.Branches and  teacher.teacher_id=cors.traning_name and subjects.cors_ID=cors.cors_ID and  traning_name='$teacher_id1'";
$result1 = mysqli_query($conn,$query1);
while($row1=mysqli_fetch_array($result1))
{
?> <a href="noend.php?teacher_id=<? echo $teacher_id1; ?>"><? echo $row1['co']; ?> </a>
<?
}
 ?></td>
                        <td>
<? 
if($_SESSION['Branches']==0)
$query1 = "select count(cors_no) as co    from cors,subjects,teacher,branches   where end_date<'$ar_date' and branches.Branches_ID=cors.Branches and  teacher.teacher_id=cors.traning_name and subjects.cors_ID=cors.cors_ID and  traning_name='$teacher_id1'";
else
$query1 = "select count(cors_no) as co    from cors,subjects,teacher,branches   where end_date<'$ar_date' and cors.Branches='$_SESSION[Branches]' and branches.Branches_ID=cors.Branches and  teacher.teacher_id=cors.traning_name and subjects.cors_ID=cors.cors_ID and  traning_name='$teacher_id1'";
$result1 = mysqli_query($conn,$query1);
while($row1=mysqli_fetch_array($result1))
{
?> <a href="end.php?teacher_id=<? echo $teacher_id1; ?>"><? echo $row1['co']; ?> </a>
<?
}
 ?></td>
                        <td>
<a href="table.php?teacher_id=<? echo $row['teacher_id']; ?>">استعراض</a></td>
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

    