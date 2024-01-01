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
<?
include ("conn.php");
   $ID_reg= mysqli_real_escape_string($conn,htmlspecialchars(intval($_GET['ID_reg']), ENT_QUOTES, "utf-8")); 

$query = "select * from  stu_sec  where ID_reg='$ID_reg'   ";
$result = mysqli_query($conn,$query);
while($row=mysqli_fetch_array($result))
{
$section_Id=$row['section_Id'];

}
?>



  <?
include ("conn.php");
$query = "select * from cors,subjects,teacher,branches   where branches.Branches_ID=cors.Branches and  teacher.teacher_id=cors.traning_name and subjects.cors_ID=cors.cors_ID and cors.ID='$section_Id'  order by cors_no DESC";
$result = mysqli_query($conn,$query);
while($row=mysqli_fetch_array($result))
{
?>
تحضير المتدربين لدورة رقم :<? echo $row['cors_no']; ?> -  باسم : 
<? echo $cors_name=$row['cors_name']; ?> - بداية الدورة :
 <? echo $start_date=$row['start_date']; ?>  - نهاية الدورة : 
 <? echo $end_date=$row['end_date']; ?> 
<? } ?>	</small></h1>
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
                         <th><p align=center>التقدير</th>

                         <th><p align=center>كشف الحضور</th>
                      </tr>
                    </thead>
                    <tbody>
                     <?
include ("conn.php");
if($_SESSION['Branches']==0)
$query = "select * from cors,subjects,teacher,branches   where branches.Branches_ID=cors.Branches and  teacher.teacher_id=cors.traning_name and subjects.cors_ID=cors.cors_ID and   cors.ID='$section_Id'   order by cors_no DESC";
else
$query = "select * from cors,subjects,teacher,branches   where branches.Branches_ID=cors.Branches and  teacher.teacher_id=cors.traning_name and subjects.cors_ID=cors.cors_ID and cors.Branches='$_SESSION[Branches]' and    cors.ID='$section_Id'   order by cors_no DESC";
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
						<? echo $row['cors_no']; ?></td>
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

                        <td>
				<a href="print_report.php?section_Id=<? echo $row['ID']; ?>" target=_blank><i class="fa fa-print btn btn-Warning btn-sm "></i></a></td>
                      </tr>
                    <? }} ?>
                    </tbody>
                     
                  </table>
                </div><!-- /.box-body --><div class="box-body">
                <br>  <table id="example1" class="table table-bordered table-striped"  >
                    <form method="POST" action="">
 
                    <thead>
                       
                      <tr>
                         <th><p align=center>
						رقم الهوية</th>
                         <th><p align=center>اسم المتدرب</th>
                         
                         <th><p align=center>الجنسية</th>
                         <th><p align=center>الجوال</th>
                        <th><p align=center>مبلغ الدورة</th>
                         <th><p align=center>المدفوع</th>
                         <th><p align=center>المتبقي </th>
                         <th><p align=center>المالية</th>

                         <th><p align=center>&nbsp;</th>
                         <th><p align=center>عدد أيام الحضور</span></th>
                         <th><p align=center>
						<span lang="ar-sa">عدد أيام الغياب</span></th>
                      </tr>
                    </thead>
                    <tbody>
                     <?
include ("conn.php");
   $ID_reg= mysqli_real_escape_string($conn,htmlspecialchars(intval($_GET['ID_reg']), ENT_QUOTES, "utf-8")); 

$i=0;
$query = "select * from student,stu_sec where  stu_sec.stu_id=student.stu_id and ID_reg='$ID_reg'";
$result = mysqli_query($conn,$query);
$rows = mysqli_num_rows($result );
if($rows > 0 )
{
while($row=mysqli_fetch_array($result))
{
  $BranchesID=$row['1'];
  $teacher_id=$row['traning_name'];
   $ID_reg=$row['ID_reg'];

?>
 <tr>
 
 
                        <td align="center">
						
						<input type="hidden" name="ID_reg[]" size="20" value="<? echo $row['ID_reg']; ?>">
						<input type="hidden" name="mobile[]" size="20" value="<? echo $row['mobile']; ?>">
  						<input type="hidden" name="section_Id" size="20" value="<? echo $section_Id; ?>">
                        <input type="hidden" name="date_ar" size="20" value="<? echo $xx=ArabicTools::arabicDate('hj:Y-m-d', time());  ?>" style="font-weight: 700; width: 96px;">
						<input type="hidden" name="mm" size="20" value="<? echo date('m');?>">
						<input type="hidden" name="year" size="20" value="<? echo date('Y');?>">
						<input type="hidden" name="day" size="20" value="<? echo date('l'); ?>" style="font-weight: 700">
						
						
						<? echo $row['iqama']; ?></td>
                        <td align="center">
						<a href="detalis.php?ID_reg=<? echo $row['ID_reg']; ?>"><? echo $row['stu_name_ar']; ?></a></td>
                        <td align="center">
 <? echo $row['Nationality'];
?></td>
                        <td align="center">
						 
<? 
echo $row['mobile'];

?></td>
                        						<td align="center"><? echo $row['Course_amount']; ?>
						 <td align="center">
						 <?
$result1=mysqli_query($conn,"select sum(Amount) as Amount from paid where ID_reg='$row[ID_reg]'  ");
while($row1=mysqli_fetch_array($result1))
{
 echo $Amount=$row1[Amount];
}
?>
						 <td align="center"><font color="#FF0000"><? echo $row['Course_amount']-$Amount; ?> 
							</font>
						<td align="center"><a href="Payments_stu1.php?ID_reg=<? echo $row['ID_reg']; ?>"  ><i class="fa fa-money btn btn-info btn-sm "></i></a>


                        <td align="center">
						<a  target=_blank href="https://wa.me/966<? echo $row[mobile]; ?>?text=
 
<? echo $Branches_title_sms; ?>%20%0D%0A
<? echo $Branches_title_en_sms; ?>%20%0D%0A
%20%0D%0A

اسم الدورة%20  :<? echo nl2br($cors_name); ?>%0D%0A
%20<? echo nl2br($Branches_name); ?>%0D%0A
تاريخ بداية الدورة %20  :<? echo nl2br($start_date); ?>%0D%0A
تاريخ نهاية الدورة %20  :<? echo nl2br($end_date); ?>%0D%0A
مبلغ الدورة%20  :<? echo nl2br($row[Course_amount]); ?>%0D%0A
المبلغ المدفوع%20  :<? echo nl2br($Amount); ?>%0D%0A
المبلغ المتبقي%20  :<? echo nl2br($row[Course_amount]-$Amount); ?>%0D%0A
 
" data-action="share/whatsapp/share"  class="btn btn-Success btn-sm   "><i class="fa fa-whatsapp"></i></td>
                        <td align="center">  
							<a href="detalis.php?ID_reg=<? echo $row['ID_reg']; ?>"><?
$result1=mysqli_query($conn,"select* from absence where ID_reg='$ID_reg' and type='1'");
$c=0;
while($row1=mysqli_fetch_array($result1))
{
$c++;
}
echo $c;
?> </a></td>
                        <td align="center"> 
							<a href="detalis.php?ID_reg=<? echo $row['ID_reg']; ?>"><?
$result1=mysqli_query($conn,"select* from absence where ID_reg='$ID_reg' and type='0'");
$c=0;
while($row1=mysqli_fetch_array($result1))
{
$c++;
}
echo $c;
?></a></td>
 
                      </tr>
                    <? }} ?>
                    </tbody>
                     
                  	</form>

                     
                  </table><br>
                  <br> <table id="example1" class="table table-bordered table-striped"  >
                    <form method="POST" action="">
 
                    <thead>
                       
                      <tr>
                         <th><p align=center>
						<span lang="ar-sa">م</span></th>
                         <th><p align=center>
						<span lang="ar-sa">اليوم</span></th>
                         
                         <th><p align=center>
						<span lang="ar-sa">التاريخ</span></th>
                         <th><p align=center>
						<span lang="ar-sa">الحالة</span></th>
                      </tr>
                    </thead>
                    <tbody>
                     <?
include ("conn.php");
$i=0;
   $ID_reg= mysqli_real_escape_string($conn,htmlspecialchars(intval($_GET['ID_reg']), ENT_QUOTES, "utf-8")); 

$query = "select * from absence  where    ID_reg='$ID_reg'";
$result = mysqli_query($conn,$query);
$rows = mysqli_num_rows($result );
if($rows > 0 )
{
while($row=mysqli_fetch_array($result))
{
  $BranchesID=$row['1'];
  $teacher_id=$row['traning_name'];
   $ID_reg=$row['ID_reg'];

?>
 <tr>
 
 
                        <td>
						
						<input type="hidden" name="ID_reg[]" size="20" value="<? echo $row['ID_reg']; ?>">
						<input type="hidden" name="mobile[]" size="20" value="<? echo $row['mobile']; ?>">
  						<input type="hidden" name="section_Id" size="20" value="<? echo $section_Id; ?>">
                        <input type="hidden" name="date_ar" size="20" value="<? echo $xx=ArabicTools::arabicDate('hj:Y-m-d', time());  ?>" style="font-weight: 700; width: 96px;">
						<input type="hidden" name="mm" size="20" value="<? echo date('m');?>">
						<input type="hidden" name="year" size="20" value="<? echo date('Y');?>">
						<input type="hidden" name="day" size="20" value="<? echo date('l'); ?>" style="font-weight: 700">
						
						
						<? $C++; echo $C;; ?></td>
                        <td>
						
						
						<?
						if($row['day']=="Saturday") echo "السبت";
                      elseif($row['day']=="Sunday") echo "الاحد";
                      elseif($row['day']=="Monday") echo "الاثنين";
                      elseif($row['day']=="Tuesday") echo "الثلاثاء";
                      elseif($row['day']=="Wednesday") echo "الاربعاء";
                      elseif($row['day']=="Thursday") echo "الخميس";
                      elseif($row['day']=="Friday") echo "الجمعة"; 
                      else
                      echo $row['day'];
                      
                      
                      
                      ?>
                      
                      
                      </td>
                        <td>
 <? echo $row['date_en'];
?><br> <? echo $row['time']; ?></td>
                        <td>
						 
<?
							if($row['type']>=1)
echo 'حضور';
else
echo '×';

?><span lang="ar-sa"> </span></td>
 
                      </tr>
                    <? }} ?>
                    </tbody>
                     
                  	</form>

                     
                  </table>
                </div>
              </div>
                  </div>
</div>
</section>


</div><!-- /.content-wrapper -->
<? include('footer.php'); ?>
    </div><!-- ./wrapper -->
  </body>
</html>

 