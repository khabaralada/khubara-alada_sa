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
   $section_Id= mysqli_real_escape_string($conn,htmlspecialchars(intval($_GET['section_Id']), ENT_QUOTES, "utf-8")); 

$query = "select * from cors,subjects,teacher,branches   where branches.Branches_ID=cors.Branches and  teacher.teacher_id=cors.traning_name and subjects.cors_ID=cors.cors_ID and cors.ID='$section_Id'  order by cors_no DESC";
$result = mysqli_query($conn,$query);
while($row=mysqli_fetch_array($result))
{
$Branches_name=$row[Branches_name];
$cors_ID=$row[cors_ID];
?>
المتدربين لدورة رقم :<? echo $row['cors_no']; ?> -  باسم : <? echo $cors_name=$row['cors_name']; ?> - بداية الدورة : <? echo $start_date=$row['start_date']; ?>  - نهاية الدورة : <? echo $end_date=$row['end_date']; ?> 
<? } ?>
 
 </small></h1>
</section>
 
<section class="content" dir=rtl>
<div class="box box-info">
<div class="box-body">
 
                  <table id="example1" class="table table-bordered table-striped"  >
                    <thead>
                      <tr>
                         <th>#</th>
                         <th><p align=center>
						رقم الهوية</th>
                         <th><p align=center>اسم المتدرب</th>
                         
                         <th><p align=center>الجنسية</th>
                         <th><p align=center>الجوال</th>
                         <th><p align=center>الدورة      </th> 
                           <th><p align=center>نتيجة الاختبار</th>
                         <th><p align=center>التقدير</th>

 <th><p align=center>مبلغ الدورة</th>
                         <th><p align=center>المدفوع</th>
                         <th><p align=center>المتبقي </th>
                         <th><p align=center>المالية</th>

                         <th><p align=center>الاختبار</th>

                         <th><p align=center>&nbsp;</th>

                         <th><p align=center>حذف</span></th>
                         <th><p align=center>تعديل</th>
                      </tr>
                    </thead>
                    <tbody>
                     <?
include ("conn.php");
$query = "select * from student,cors,subjects,stu_sec where 
subjects.cors_ID=cors.cors_ID and 
stu_sec.section_Id=cors.ID and
 stu_sec.stu_id=student.stu_id and online='اونلاين' order by cors_name";
 
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
                        <form method="POST" action="">
 
                        <td>
						
						<? $D++; echo $D; ?> </td>
 
                        <td>
						
						<input type="hidden" name="ID_reg" size="20" value="<? echo $row['ID_reg']; ?>"><? echo $row['iqama']; ?></td>
                        <td>
						<a href="detalis.php?ID_reg=<? echo $row['ID_reg']; ?>"><? echo $row['stu_name_ar']; ?></a></td>
                        <td>
 <? echo $row['Nationality'];
?></td>
                        <td>
						 
<? 
echo $row['mobile'];

?></td>
                        <td> 
						<? echo $row['cors_name']; ?></td>    <td>
						<? echo $row['scor']; ?></td>
                        <td>
						<? echo $row['Rate']; ?></td>

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


                        <td>
						                        <?
 
$result14=mysqli_query($conn,"select * from questions where cors_ID='$cors_ID'  ");
 
$rows14 = mysqli_num_rows($result14 );
if($rows14 > 0 )
{
?>
                        <a href="test.php?ID_reg=<? echo $row['ID_reg']; ?>"  ><i class="fa fa-folder-open btn btn-Danger btn-sm "></i></a>
<?
}
?></td>


                        <td>
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


                        <td>
						<input type="submit" value="&#xf014;" formnovalidate     class="btn btn-danger btn-icon fa fa-floppy-o " name="B2"  onclick="return confirm('هل تريد الحذف البيانات ؟')" class="btn btn-danger" style="float: left"></td>
                        <td>
				<a href="edit_stu.php?NUM=<? echo $row[NUM];  ?>"><i class="fa fa-pencil btn btn-info btn-sm "></i></a></td>
                      	</form>
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

     
    <?
    if (isset($_POST['B2'])) {
$ID_reg= mysqli_real_escape_string($conn,htmlspecialchars($_POST['ID_reg'], ENT_QUOTES, "utf-8")); 
$sql="delete from   stu_sec where ID_reg='$ID_reg'  ";
if(mysqli_query($conn,$sql))
{
echo '<script>
function myFunction() {
document.getElementById("snackbar3").style.visibility = "hidden";
}
 document.getElementById("snackbar3").style.visibility = "visible";
 window.setTimeout("hideMsg()", 2000); </script>';
?><meta http-equiv="refresh" content="2;url=<?php echo( $self ); ?>"><?
}
}

?>