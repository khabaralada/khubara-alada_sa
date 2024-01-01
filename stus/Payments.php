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

العمليات المالية
 
</small></h1>
</section>
 
<section class="content" dir=rtl>
<div class="box box-info">
<div class="box-body">
                  <form role="form" action="" method="post">
                    <!-- text input -->
                     
                    
                     
                    
                    
                    <div class="form-group">
                      <label>  رقم الهوية / اسم  المتدرب/ة</label>
                      
                      <input  name="find"   size="20"  autofocus  required="required"   placeholder="رقم الهوية / الاسم / الجوال" class="form-control"  >
 
                    </div>

                    <!-- textarea -->
                     
                     

                    <!-- input states -->
                     
                     
                    
                     
                    
                    
                    <div class="form-group has-error">
 
<input type="submit" value="بحث" name="B11"  class="btn btn-primary" style="float: left">                    
<? if(isset($_POST['B11'])) { ?>
<table id="example1" class="table table-bordered table-striped"  >
                    <thead>
                      <tr>
                         <th><p align=center>
						رقم الهوية</th>
                         <th><p align=center>اسم المتدرب</th>
                         
                         <th><p align=center>الجنسية</th>
                         <th><p align=center>الجوال</th>
                         <th><p align=center>الفرع  </th>
 
                         <th><p align=center>البريد الالكتروني    </th>
 
                         <th><p align=center>الدورات التدريبية</th>
 
                      </tr>
                    </thead>
                    <tbody>
                     <?
include ("conn.php");
if($_SESSION['Branches']==0)
$query = "select * from student  where  iqama='$_POST[find]' or mobile='$_POST[find]' or stu_name_ar like '%$_POST[find]%'";
else
$query = "select * from student  where  iqama='$_POST[find]' or mobile='$_POST[find]' or stu_name_ar like '%$_POST[find]%' and Branches='$_SESSION[Branches]'";

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
 
 
                        <td>
						
						<input type="hidden" name="ID_reg" size="20" value="<? echo $row['ID_reg']; ?>"><? echo $row['iqama']; ?></td>
                        <td>
						<? echo $row['stu_name_ar']; ?></td>
                        <td>
 <? echo $row['Nationality'];
?></td>
                        <td>
						 
<? 
echo $row['mobile'];

?></td>
                        <td> 
<?
$query1 = "select * from  branches   where Branches_ID='$row[Branches]' ";
$result1 = mysqli_query($conn,$query1);
while($row1=mysqli_fetch_array($result1))
{
echo $row1['Branches_name'];
}
?></td>
                     
 
                        <td> 
						<? echo $row['email']; ?></td>
                     
 
                        <td> 
						<a href="Payments_scor.php?stu_id=<? echo $row['stu_id']; ?>">استعراض</a></td>
                     
 
                      </tr>
                    <? }} ?>
                    </tbody>
                     
                  </table><? } ?>
&nbsp;</div>
 
 

                </div> 
 

                  </div>
</div>
</section>


</div><!-- /.content-wrapper -->
<? include('footer.php'); ?>
    </div><!-- ./wrapper -->
  </body>
</html>

 