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
</script><style>
#snackbar1 {
    visibility: hidden;
    min-width: 250px;
    margin-left: -125px;
    background-color: green;
    color: #fff;
    text-align: center;
    border-radius: 5px;
    padding: 16px;
    position: fixed;
    z-index: 1;
    left: 40%;
    bottom: 60%;
    font-size: 12px;
}

#snackbar1.show {
    visibility: visible;
    -webkit-animation: fadein 0.5s, fadeout 0.5s 2.5s;
    animation: fadein 0.5s, fadeout 0.5s 2.5s;
}
#snackbar22 {
    visibility: hidden;
    min-width: 250px;
    margin-left: -125px;
    background-color: #93cedc;
    color: #fff;
    text-align: center;
    border-radius: 5px;
    padding: 16px;
    position: fixed;
    z-index: 1;
    left: 50%;
    bottom: 50%;
    font-size: 12px;
}

#snackbar22.show {
    visibility: visible;
    -webkit-animation: fadein 0.5s, fadeout 0.5s 2.5s;
    animation: fadein 0.5s, fadeout 0.5s 2.5s;
}

#snackbar33 {
    visibility: hidden;
    min-width: 250px;
    margin-left: -125px;
    background-color: red;
    color: #fff;
    text-align: center;
    border-radius: 5px;
    padding: 16px;
    position: fixed;
    z-index: 1;
    left: 50%;
    bottom: 50%;
    font-size: 12px;
}

#snackbar33.show {
    visibility: visible;
    -webkit-animation: fadein 0.5s, fadeout 0.5s 2.5s;
    animation: fadein 0.5s, fadeout 0.5s 2.5s;
}

@-webkit-keyframes fadein {
    from {bottom: 0; opacity: 0;} 
    to {bottom: 30px; opacity: 1;}
}

@keyframes fadein {
    from {bottom: 0; opacity: 0;}
    to {bottom: 30px; opacity: 1;}
}

@-webkit-keyframes fadeout {
    from {bottom: 30px; opacity: 1;} 
    to {bottom: 0; opacity: 0;}
}

@keyframes fadeout {
    from {bottom: 30px; opacity: 1;}
    to {bottom: 0; opacity: 0;}
}
</style>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
 </head>
<body class="skin-blue">
 
<? include("header.php"); ?>
 

 

<section class="content-header" dir=rtl>
<h1><small>
<?
 
 
include ("conn.php");
$query8 = "select * from branches where Branches_ID=1";
$result8 = mysqli_query($conn,$query8);
while($row8=mysqli_fetch_array($result8))
 {
  echo $Branches_title_sms=$row8['Branches_title'];
  $Branches_title_en_sms=$row8['Branches_title_en'];
 }
 ?> 
</small></h1>
</section>
 
<section class="content" dir=rtl>
<div class="box box-info">
<div class="box-body">
<?php   

 
date_default_timezone_set('asia/riyadh');
  date('Y-m-d H:i:s'); 

$ar_date=ArabicTools::arabicDate('hj:Y-m-d',time()); 
?>

<div id="snackbar1"><b><font face="Droid Arabic Kufi" size="3">تم تسجيل حضورك اليوم بتاريخ <? echo date('Y-m-d'); ?> الساعة <? echo date('H:i:s'); ?> في الدورة التدريبية</font></b></div>
<div id="snackbar22"><b><font face="Droid Arabic Kufi" size="3">تم تسجيل حضورك اليوم في الدورة التدريبية</font></b></div>
<div id="snackbar33"><b><font face="Droid Arabic Kufi" size="3">رقم الهوية المدخل خطأ</font></b></div>
  <?
include ("conn.php");
$query = "select * from  teacher    where username='$_SESSION[username]'";
$result = mysqli_query($conn,$query);
while($row=mysqli_fetch_array($result))
{
  $cors=$row['cors'];
}

?>
<?
include ("conn.php");
if($cors=="الإدارة")
$query9 = "select * from  stu_sec,cors   where cors.ID=section_Id and   stu_id='$_POST[iqama_ID]'  order by ID_reg DESC limit 1 ";
elseif($cors=="لغة الإنجليزية")
$query9 = "select * from  stu_sec,cors   where cors.ID=section_Id and cors.cors_type='لغة الإنجليزية' and  stu_id='$_POST[iqama_ID]'  order by ID_reg DESC limit 1 ";
else
$query9 = "select * from  stu_sec,cors   where cors.ID=section_Id and cors.cors_type!='لغة الإنجليزية' and  stu_id='$_POST[iqama_ID]'  order by ID_reg DESC limit 1 ";
$result9 = mysqli_query($conn,$query9);
$rows9 = mysqli_num_rows($result9 );
if($rows9 > 0 )
{
?>




 
                  <h3 class="box-title"><font face="Droid Arabic Kufi"><label>  					  


<?
while($row9=mysqli_fetch_array($result9))
{
    $section_Id=$row9['section_Id'];
    $ID_reg=$row9['ID_reg'];

}
?>



  <?
include ("conn.php");
if($cors=="الإدارة")
$query = "select * from cors,subjects,teacher,branches   where branches.Branches_ID=cors.Branches and  teacher.teacher_id=cors.traning_name and  subjects.cors_ID=cors.cors_ID and cors.ID='$section_Id'  order by cors_no DESC";
elseif($cors=="لغة الإنجليزية")
$query = "select * from cors,subjects,teacher,branches   where branches.Branches_ID=cors.Branches and  teacher.teacher_id=cors.traning_name and  subjects.cors_ID=cors.cors_ID and cors.ID='$section_Id' and cors_type='لغة الإنجليزية' order by cors_no DESC";
else
$query = "select * from cors,subjects,teacher,branches   where branches.Branches_ID=cors.Branches and  teacher.teacher_id=cors.traning_name and  subjects.cors_ID=cors.cors_ID and cors.ID='$section_Id' and cors_type!='لغة الإنجليزية' order by cors_no DESC";
$result = mysqli_query($conn,$query);
while($row=mysqli_fetch_array($result))
{
?>
تحضير المتدرب لدورة رقم :<? echo $row['cors_no']; ?> -  باسم : <? echo $row['cors_name']; ?> - بداية الدورة : <? echo $row['start_date']; ?>  - نهاية الدورة : <? echo $row['end_date']; ?> 
<? } ?>	</label>
    </font></h3>
 
                </div>
                <div class="box-body">
					 
 
                    <!-- text input -->
                     
                    
                     
                    
                    
                    <div class="form-group">
                      <label>  					   



  تفاصيل الدورة	</label>
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
                      </tr>
                    </thead>
                    <tbody>
                     <?
include ("conn.php");
if($cors=="الإدارة")
$query = "select * from cors,subjects,teacher,branches   where branches.Branches_ID=cors.Branches and  teacher.teacher_id=cors.traning_name and subjects.cors_ID=cors.cors_ID and    cors.ID='$section_Id'  order by cors_no DESC";
elseif($cors=="لغة الإنجليزية")
$query = "select * from cors,subjects,teacher,branches   where branches.Branches_ID=cors.Branches and  teacher.teacher_id=cors.traning_name and subjects.cors_ID=cors.cors_ID and    cors.ID='$section_Id' and cors_type='لغة الإنجليزية'  order by cors_no DESC";
else
$query = "select * from cors,subjects,teacher,branches   where branches.Branches_ID=cors.Branches and  teacher.teacher_id=cors.traning_name and subjects.cors_ID=cors.cors_ID and    cors.ID='$section_Id' and cors_type!='لغة الإنجليزية'  order by cors_no DESC";
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
                      </tr>
                    <? }} ?>
                    </tbody>
                     
                  </table><br>
                  <table id="example1" class="table table-bordered table-striped"  >
                    <form method="POST" action="">
 
                    <thead>
                       
                      <tr>
                         <th><p align=center>
						رقم الهوية</th>
                         <th><p align=center>اسم المتدرب</th>
                         
                         <th><p align=center>الجنسية</th>
                         <th><p align=center>الجوال</th>
                         <th><p align=center>عدد أيام الحضور</span></th>
                         <th><p align=center>
						<span lang="ar-sa">عدد أيام الغياب</span></th>
                      </tr>
                    </thead>
                    <tbody>
                     <?
include ("conn.php");
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
 
                      </tr>
                    <? }} ?>
                    </tbody>
                     
                  	</form>

                     
                  </table>
 
 
 
 
  
                  
                  
                    </div>

                    <!-- textarea -->
                     
                     

                    <!-- input states -->
                     
                     
                    
                     
                    
                    
                    <div class="form-group has-error">
 
 
&nbsp;</div>
 
                   
                  	<p style="text-align: center"><b>يوم 
                  	<? if(date('l')=="Saturday") echo "السبت";
                      if(date('l')=="Sunday") echo "الاحد";
                      if(date('l')=="Monday") echo "الاثنين";
                      if(date('l')=="Tuesday") echo "الثلاثاء";
                      if(date('l')=="Wednesday") echo "الاربعاء";
                      if(date('l')=="Thursday") echo "الخميس";
                      if(date('l')=="Friday") echo "الجمعة";  
?>

 تاريخ <font color="#FF0000"> <? echo date('Y-m-d'); ?></font> م الموافق 
					<font color="#FF0000"> <? echo $xx=ArabicTools::arabicDate('hj:Y-m-d', time());  ?></font> هــ الساعة 
					<font color="#FF0000"> <? echo date('H:i:s'); ?></font>
					</b>
                </div><!-- /.box-body -->
              </div><div class="box-body">
					 
                  <form role="form" action="prepare_day.php" method="post">
                    <!-- text input -->
                     
                    
                     
                    
                    
                    <div class="form-group">
                      <label>  رقم الهوية المتدرب / المتدربة</label>
                      
 
 
 
 
 <div class="input-group input-group-sm">
                    <input name="iqama_ID"  autofocus  required="required"   class="form-control">
                    <span class="input-group-btn">
<input type="submit" value="موافق" name="B11"  class="btn btn-info btn-flat"  style="float: left">                    
                    </span>
                  </div>
                  
                  
                    </div>

                    <!-- textarea -->
                     
                     

                    <!-- input states -->
                     
                     
                    
                     
                    
                    
                    <div class="form-group has-error">
 
 
&nbsp;</div>
 
                  </form>

                  	 </div>
              <?

include ("conn.php");
 $day= date('l'); 
 $date_en= date('Y-m-d');
 $date_ar=ArabicTools::arabicDate('hj:Y-m-d', time());
 $mm= date('m');
 $year= date('Y'); 
 


 
 
 
                      if($day=="Saturday") $days="السبت";
                      if($day=="Sunday") $days="الاحد";
                      elseif($day=="Monday") $days="الاثنين";
                      elseif($day=="Tuesday") $days="الثلاثاء";
                      elseif($day=="Wednesday") $days="الاربعاء";
                      elseif($day=="Thursday") $days="الخميس";
                      elseif($day=="Friday") $days="الجمعة";
$now= date('H:i:s');
$sql="insert into absence set ID_reg='$ID_reg',day='$days',date_en='$date_en',date_ar='$date_ar',type='1',manth='$mm',section_Id='$section_Id',
year='$year',time='$now',teacher='$_SESSION[user_ID]'";
if(mysqli_query($conn,$sql))
{
echo '<script>
function myFunction() {
document.getElementById("snackbar1").style.visibility = "hidden";
}
 document.getElementById("snackbar1").style.visibility = "visible";
 window.setTimeout("hideMsg()", 2000); </script>';

//echo '<meta http-equiv="refresh" content="1;url=prepare.php">';
}

$sql="update absence  set  type='1',teacher='$_SESSION[user_ID]'  where ID_reg='$ID_reg' and date_en='$date_en' ";
if(mysqli_query($conn,$sql))
{
echo '<script>
function myFunction() {
document.getElementById("snackbar1").style.visibility = "hidden";
}
 document.getElementById("snackbar1").style.visibility = "visible";
 window.setTimeout("hideMsg()", 2000); </script>';
//echo '<meta http-equiv="refresh" content="1;url=prepare.php">';
}
?>
              
              <br><br>
              <label><i class="fa fa-copyright"></i> برمجة وتصميم م/أحمد عبدالسلام 0551397179</label>

              
 <?
 }
 else
 {
echo '<script>
function myFunction() {
document.getElementById("snackbar33").style.visibility = "hidden";
}
 document.getElementById("snackbar33").style.visibility = "visible";
 window.setTimeout("hideMsg()", 2000); </script>';


 echo '<meta http-equiv="refresh" content="2;url=prepare.php">';
 }
 ?></html>