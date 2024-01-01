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
   $stu_id= mysqli_real_escape_string($conn,htmlspecialchars(intval($_GET['stu_id']), ENT_QUOTES, "utf-8")); 

$query = "select * from student  where  stu_id='$stu_id'  ";
$result = mysqli_query($conn,$query);
while($row=mysqli_fetch_array($result))
{
 echo $row['stu_name_ar'];
 $mobile=$row['mobile'];
  
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
                         <th><p align=center>نتيجة الاختبار</th>
                         <th><p align=center>نسبة الغياب</th>
                         <th><p align=center>&nbsp;</th>
                         <th><p align=center>مبلغ الدورة</span></th>
                         <th><p align=center>المدفوع</span></th>
                         <th><p align=center>المتبقي</span></th>
                         <th><p align=center>&nbsp;</th>
                      </tr>
                    </thead>
                    <tbody>
                     <?
include ("conn.php");
$i=0;

if($_SESSION['Branches']==0)
$query = "select * from cors,subjects,teacher,branches,stu_sec
   where stu_sec.section_Id=cors.ID    and branches.Branches_ID=cors.Branches and  teacher.teacher_id=cors.traning_name and 
   subjects.cors_ID=cors.cors_ID and stu_id='$stu_id'  order by cors_no DESC";
 else
$query = "select * from cors,subjects,teacher,branches,stu_sec
   where stu_sec.section_Id=cors.ID    and branches.Branches_ID=cors.Branches and  teacher.teacher_id=cors.traning_name and 
   subjects.cors_ID=cors.cors_ID and stu_id='$stu_id' and branches.Branches_ID='$_SESSION[Branches]' order by cors_no DESC";
   
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
						<? echo $row['cors_no']; ?> </td>
                        <td>
						<a href="detalis.php?ID_reg=<? echo $row['ID_reg']; ?>"><? echo $row['cors_name']; ?></a></td>
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
						 
						
						<input  name="ID_reg"    size="3"    type=hidden   value="<? echo $row['ID_reg']; ?>"    class="form-control" style="text-align: center"   >
						<? echo $row['scor']; ?></td>
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
                        <td>
						<a  target=_blank href="https://wa.me/966<? echo $mobile; ?>?text=
 
<? echo $Branches_title_sms; ?>%20%0D%0A
<? echo $Branches_title_en_sms; ?>%20%0D%0A
%20%0D%0A

اسم الدورة%20  :<? echo nl2br($row[cors_name]); ?>%0D%0A
%20<? echo nl2br($row[Branches_name]); ?>%0D%0A
تاريخ بداية الدورة %20  :<? echo nl2br($row[start_date]); ?>%0D%0A
تاريخ نهاية الدورة %20  :<? echo nl2br($row['end_date']); ?>%0D%0A
مبلغ الدورة%20  :<? echo nl2br($row[Course_amount]); ?>%0D%0A
المبلغ المدفوع%20  :<? echo nl2br($Amount); ?>%0D%0A
المبلغ المتبقي%20  :<? echo nl2br($row[Course_amount]-$Amount); ?>%0D%0A
 
" data-action="share/whatsapp/share"  class="btn btn-Success btn-sm   "><i class="fa fa-whatsapp"></i></td>
 
                        <td>
						<? echo $row['Course_amount']; ?></td>
 
                        <td >
<?
$result1=mysqli_query($conn,"select sum(Amount) as Amount from paid where ID_reg='$row[ID_reg]'  ");
while($row1=mysqli_fetch_array($result1))
{
echo $Amount=$row1[Amount];
}
?></td>
 
                        <td >
<? echo $row['Course_amount']-$Amount; ?></td>
 
                        <td >
                        

<a href="Payments_stu.php?ID_reg=<? echo $row['ID_reg']; ?>" class="btn btn-warning btn-flat"  >الأقساط</a>  
 
                
                  </td>
 
                      	</form>

 
                      </tr>
                    <? }} ?>
                    <tr>
 
                        <td colspan="13">
                     
                        
                  </td>
                      </tr>
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



 