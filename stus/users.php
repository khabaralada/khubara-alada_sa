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
المستخدمين
 </small></h1>
</section>
 
<section class="content" dir=rtl>
<div class="box box-info">
<div class="box-body">
 <p style="text-align: left"> <a href="add_user.php" class="btn btn-warning btn-flat">اضافة مستخدم جديد</a></p>

                  <table id="example1" class="table table-bordered table-striped"  >
                    <thead>
                      <tr>
                         <th><p align=center>
						رقم المستخدم</th>
                         <th><p align=center>الاسم</th>
                         <th><p align=center>الفرع</th>
                         <th><p align=center>الجوال</th>
                         <th><p align=center>البريد الالكتروني</th>
                         <th><p align=center>نوع الحساب</th>
                         <th><p align=center>تعديل</th>
                      </tr>
                    </thead>
                    <tbody>
                     <?
include ("conn.php");
if($_SESSION['Branches']==0)
$query = "select * from user,branches   where branches.Branches_ID=user.Branches and acount_type!=5  ";
else
$query = "select * from user,branches   where branches.Branches_ID=user.Branches  and user.Branches='$_SESSION[Branches]' and acount_type!=5  ";
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
                        <td >
						<? echo $row['ID']; ?></td>
                        <td >
						<? echo $row['name']; ?></td>
                        <td >
 <? echo $row['Branches_name'];
?></td>
                        <td >
						 
<? 
echo $row['mobile'];

?></td>
                        <td > 
						<? echo $row['email']; ?></td>
                        <td>
				<? if($row['acount_type']==1) echo "مدير النظام"; ?>
				<? if($row['acount_type']==3) echo "مشرف فرع"; ?>
				<? if($row['acount_type']==2) echo "مدرس"; ?>
				<? if($row['acount_type']==4) echo "اطلاع"; ?>
				<? if($row['acount_type']==7) echo "القبول والتسجيل"; ?>

				</td>
                       <td><a href="edit_teacher.php?teacher_id=<? echo $row['ID']; ?>"><i class="fa fa-pencil btn btn-info btn-sm "></i></a></td>
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

    