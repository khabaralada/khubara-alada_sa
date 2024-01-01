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
الدورات التطويرية
</small></h1>
</section>
 
<section class="content" dir=rtl>
<div class="box box-info">
<div class="box-body">
 
 
                  <table id="example1" class="table table-bordered table-striped"  >
                    <thead>
                      <tr>
                         <th><p align=center>
						السؤال  </th>
                         <th><p align=center>ممتاز  </th>
                         
                         <th><p align=center>جيد جدا</th>
                         <th><p align=center>جيد</th>
                         <th><p align=center>مقبول </th>
                         <th><p align=center>سيئ جدا </th>
                      </tr>
                    </thead>
                    <tbody>
                     <?
include ("conn.php");
 
$query = "select * from  questions_student ";
$result = mysqli_query($conn,$query);
$rows = mysqli_num_rows($result );
if($rows > 0 )
{
while($row=mysqli_fetch_array($result))
{
 
?>
 <tr>
                        <td >
						<? echo $row['question']; ?></td>
                        <td >
 <?php
$query1 = "select count(*) as co from  	test_trainee_evaluation where question_ID='$row[question_ID]' and cors_ID='$_GET[ID]' and  stu_choice='ممتاز'";
$result1 = mysqli_query($conn,$query1);
$rows1 = mysqli_num_rows($result1 );
while($row1=mysqli_fetch_array($result1))
{
echo $row1['co'];
}
?> 
</td>
                        <td > <?php
$query1 = "select count(*) as co from  	test_trainee_evaluation where question_ID='$row[question_ID]' and cors_ID='$_GET[ID]' and  stu_choice='جيد جدا'";
$result1 = mysqli_query($conn,$query1);
$rows1 = mysqli_num_rows($result1 );
while($row1=mysqli_fetch_array($result1))
{
echo $row1['co'];
}
?> </td>
                        <td > <?php
$query1 = "select count(*) as co from  	test_trainee_evaluation where question_ID='$row[question_ID]' and cors_ID='$_GET[ID]' and  stu_choice='جيد'";
$result1 = mysqli_query($conn,$query1);
$rows1 = mysqli_num_rows($result1 );
while($row1=mysqli_fetch_array($result1))
{
echo $row1['co'];
}
?> </td>
                        <td > <?php
$query1 = "select count(*) as co from  	test_trainee_evaluation where question_ID='$row[question_ID]' and cors_ID='$_GET[ID]' and  stu_choice='مقبول'";
$result1 = mysqli_query($conn,$query1);
$rows1 = mysqli_num_rows($result1 );
while($row1=mysqli_fetch_array($result1))
{
echo $row1['co'];
}
?> </td>
                        <td > <?php
$query1 = "select count(*) as co from  	test_trainee_evaluation where question_ID='$row[question_ID]' and cors_ID='$_GET[ID]' and  stu_choice like '%سيئ جدا%'";
$result1 = mysqli_query($conn,$query1);
$rows1 = mysqli_num_rows($result1 );
while($row1=mysqli_fetch_array($result1))
{
echo $row1['co'];
}
?> </td>
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

    