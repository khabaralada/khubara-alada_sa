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
?>
تحضير المتدربين لدورة رقم :<? echo $row['cors_no']; ?> -  باسم : <? echo $row['cors_name']; ?> - بداية الدورة : <? echo $row['start_date']; ?>  - نهاية الدورة : <? echo $row['end_date']; ?> 
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
                         <th><p align=center>عدد الطلاب</th>
                         <th><p align=center>كشف الحضور</th>
                      </tr>
                    </thead>
                    <tbody>
                     <?
include ("conn.php");
  $section_Id= mysqli_real_escape_string($conn,htmlspecialchars(intval($_GET['section_Id']), ENT_QUOTES, "utf-8"));

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
										<? 
$query1 = "select count(stu_id) as co    from stu_sec   where   section_Id='$row[0]'";
$result1 = mysqli_query($conn,$query1);
while($row1=mysqli_fetch_array($result1))
{
 ?>  <? echo $row1['co']; ?>  <?
 }
 ?></td>
                        <td>
				<a href="print_report.php?section_Id=<? echo $row['ID']; ?>" target=_blank><i class="fa fa-print btn btn-Warning btn-sm "></i></a></td>
                      </tr>
                    <? }} ?>
                    </tbody>
                     
                  </table>
                </div><!-- /.box-body --><div class="box-body">
                  <table id="example1" class="table table-bordered table-striped"  >
                    <form method="POST" action="">
 
                    <thead>
                      <tr>
                        <th colspan="7">
                        
                        
                       
                  
                  
						<div class="input-group input-group-sm  has-error">
                      <p align="justify">
                      <label><i class="fa fa-star"></i>
 
                      تحضير يوم 
                      <? 
                       if(isset($_POST['go']))
                       {
                        $nameOfDay = date('l', strtotime($date_en));
                      if($nameOfDay =="Saturday") echo "السبت";
                      if($nameOfDay =="Sunday") echo "الاحد";
                      if($nameOfDay =="Monday") echo "الاثنين";
                      if($nameOfDay =="Tuesday") echo "الثلاثاء";
                      if($nameOfDay =="Wednesday") echo "الاربعاء";
                      if($nameOfDay =="Thursday") echo "الخميس";
                      if($nameOfDay =="Friday") echo "الجمعة"; 
                      }
                       else
                       {
                      if(date('l')=="Saturday") echo "السبت";
                      if(date('l')=="Sunday") echo "الاحد";
                      if(date('l')=="Monday") echo "الاثنين";
                      if(date('l')=="Tuesday") echo "الثلاثاء";
                      if(date('l')=="Wednesday") echo "الاربعاء";
                      if(date('l')=="Thursday") echo "الخميس";
                      if(date('l')=="Friday") echo "الجمعة";  
                      
}
?>
 بتاريخ       <?
                      if(isset($_POST['go'])	) echo $date_en;
                      else
                      echo date('Y-m-d');
                      ?>
                      							
</label>
                      <div class="input-group input-group-sm has-error">
                    <input  type="date"   name="date_en" class="form-control" value="<?
                      if(isset($_POST['go'])	) echo $date_en;
                      else
                      echo date('Y-m-d');
                      ?>
"   min="<? echo date('Y-m-d'); ?>" >
                    <span class="input-group-btn">
                      <button class="btn btn-info btn-flat" type="submit" name="go">Go!</button>
                    </span>
                  </div>                   </div></th>
                      </tr>
                      <tr>
                         <th><p align=center>
						رقم الهوية</th>
                         <th><p align=center>اسم المتدرب</th>
                         
                         <th><p align=center>الجنسية</th>
                         <th><p align=center>الجوال</th>
                         <th><p align=center>عدد أيام الحضور</span></th>
                         <th><p align=center>
						<span lang="ar-sa">عدد أيام الغياب</span></th>
                         <th><p align=center><span lang="ar-sa">الحالة</span></th>
                      </tr>
                    </thead>
                    <tbody>
                     <?
include ("conn.php");
$i=0;
$co=0;
  $section_Id= mysqli_real_escape_string($conn,htmlspecialchars(intval($_GET['section_Id']), ENT_QUOTES, "utf-8"));

$query = "select * from student,stu_sec where  stu_sec.stu_id=student.stu_id and section_Id='$section_Id'";
$result = mysqli_query($conn,$query);
$rows = mysqli_num_rows($result );
if($rows > 0 )
{
while($row=mysqli_fetch_array($result))
{
  $BranchesID=$row['1'];
  $teacher_id=$row['traning_name'];
   $ID_reg=$row['ID_reg'];
  $co++;
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
						
						
						<? echo $row['iqama']; ?></td>
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
						 <select style="font-family: Arial"   style="font-family: Arial"   size="1" name="type[]"  <? if($z>=1) echo 'disabled'; ?> class="form-control">
								<?
 if(isset($_POST['go'])	)							
 $result1=mysqli_query($conn,"select * from absence    where ID_reg='$ID_reg' and date_en='$date_en'");
 else
$result1=mysqli_query($conn,"select * from absence    where ID_reg='$ID_reg' and date_en=CURDATE()");
while($row1=mysqli_fetch_array($result1))
{
if($row1['type']>=1)
echo '<option value="1">حضور';
else
echo '<option value="0">×';

}
?>
								
																<option value="0">×</option>
																<option value="1">حضور</option>

								</select></td>
 
                      </tr>
                    <? }} ?>
                    <tr>
 
                        <td colspan="6">
						&nbsp;</td>
                        <td><p align=center>
						<input type="submit" value="حفظ التغيرات" name="B1"  class="btn btn-primary" style="float: left"></td>
                      </tr>
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

 	<?
include ("conn.php");
if(isset($_POST[B1]))
{


$year = date('Y', strtotime($date_en));
$mm = date('m', strtotime($date_en));




//if($checkbox){ 
//foreach($_POST['checkbox'] as $i) { 
 for($i=0;$i<$co;$i++) { 

 

 $ID_reg= mysqli_real_escape_string($conn,htmlspecialchars($_POST['ID_reg'][$i], ENT_QUOTES, "utf-8")); 
 $day= mysqli_real_escape_string($conn,htmlspecialchars($_POST['day'], ENT_QUOTES, "utf-8")); 
 $date_en= mysqli_real_escape_string($conn,htmlspecialchars($_POST['date_en'], ENT_QUOTES, "utf-8")); 
 $type= mysqli_real_escape_string($conn,htmlspecialchars($_POST['type'][$i], ENT_QUOTES, "utf-8")); 
 $mm= mysqli_real_escape_string($conn,htmlspecialchars($_POST['mm'], ENT_QUOTES, "utf-8")); 
 $year= mysqli_real_escape_string($conn,htmlspecialchars($_POST['year'], ENT_QUOTES, "utf-8")); 
 $section_Id= mysqli_real_escape_string($conn,htmlspecialchars($_POST['section_Id'], ENT_QUOTES, "utf-8")); 


 
$nameOfDay = date('l', strtotime($date_en));
 
    if($nameOfDay =="Saturday") $days="السبت";
                      if($nameOfDay=="Sunday") $days="الاحد";
                      elseif($nameOfDay=="Monday") $days="الاثنين";
                      elseif($nameOfDay=="Tuesday") $days="الثلاثاء";
                      elseif($nameOfDay=="Wednesday") $days="الاربعاء";
                      elseif($nameOfDay=="Thursday") $days="الخميس";
                      elseif($nameOfDay=="Friday") $days="الجمعة";
$now= date('H:i:s');

$sql="insert into absence set ID_reg='$ID_reg',day='$days',date_en='$date_en',date_ar='$date_ar',type='$type',manth='$mm',section_Id='$section_Id',
year='$year',time='$now',teacher='$_SESSION[user_ID]'";


if(mysqli_query($conn,$sql))
{
?><meta http-equiv="refresh" content="2;url=<?php echo( $self ); ?>"><?
}


$sql="update absence  set  type='$type',teacher='$_SESSION[user_ID]'  where ID_reg='$ID_reg' and date_en='$date_en' ";
if(mysqli_query($conn,$sql))
{
?><meta http-equiv="refresh" content="2;url=<?php echo( $self ); ?>"><?
}
/*
$sql="update cors  set  traning_name='$_SESSION[user_ID]'  where ID='$_GET[section_Id]' ";
if(mysqli_query($conn,$sql))
{
?><meta http-equiv="refresh" content="2;url=<?php echo( $self ); ?>"><?
}
*/

}
echo '<script>
function myFunction() {
document.getElementById("snackbar").style.visibility = "hidden";
}
 document.getElementById("snackbar").style.visibility = "visible";
 window.setTimeout("hideMsg()", 2000); </script>';

//}
}
?>