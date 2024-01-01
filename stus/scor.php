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
درجات المتدربين لدورة رقم :<? echo $row['cors_no']; ?> -  باسم : <? echo $row['cors_name']; ?> - بداية الدورة : <? echo $row['start_date']; ?>  - نهاية الدورة : <? echo $row['end_date']; ?> 
<? } ?>	
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
      $end_date=$row['end_date'];
    $absences_co=$row['absences'];
    $absences=$row['absences'];
$ors_ID=$row[cors_ID];
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
                  <table id="example1" class="table table-bordered table-striped"   >
                    <form method="POST" action="">
 
                    <thead>
                        
                      </tr>
                      <tr>
                        <th  >
						رقم الهوية</th>
                        <th  >اسم المتدرب</th>
                         
                        <th   >الجنسية</th>
                        <th   >الجوال</th>
                        <th   >عدد أيام الحضور</span></th>
                        <th   >
						نسبة الغياب</th>
                        <th  ><span lang="ar-sa">الدرجة</span></th>
                        <th  >تاريخ الاختبار هــ
</th>
                        <th  >تاريخ الاختبار م
                        <th  >التقدير</span></th>
                        <th   >الاختبار</th>
                        <th   ><span lang="ar-sa">الشهادة</span></th>
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
 
 
                        <td   >
						
						<input type="hidden" name="ID_reg[]" size="20" value="<? echo $row['ID_reg']; ?>">
						<input type="hidden" name="mobile[]" size="20" value="<? echo $row['mobile']; ?>">
  						<input type="hidden" name="section_Id" size="20" value="<? echo $section_Id; ?>">
                        <input type="hidden" name="date_ar" size="20" value="<? echo $xx=ArabicTools::arabicDate('hj:Y-m-d', time());  ?>" style="font-weight: 700; width: 96px;">
						<input type="hidden" name="mm" size="20" value="<? echo date('m');?>">
						<input type="hidden" name="year" size="20" value="<? echo date('Y');?>">
						<input type="hidden" name="day" size="20" value="<? echo date('l'); ?>" style="font-weight: 700">
						
						
						<? echo $row['iqama']; ?></td>
                        <td   >
						<a href="detalis.php?ID_reg=<? echo $row['ID_reg']; ?>"><? echo $row['stu_name_ar']; ?></a></td>
                        <td   >
 <? echo $row['Nationality'];
?></td>
                        <td   >
						 
<? 
echo $row['mobile'];

?></td>
                        <td   >  
							<a href="detalis.php?ID_reg=<? echo $row['ID_reg']; ?>"><?
$result1=mysqli_query($conn,"select* from absence where ID_reg='$ID_reg' and type='1'");
$c=0;
while($row1=mysqli_fetch_array($result1))
{
$c++;
}
echo $c;
?></a></td>
                        <td   > 
						 
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
                        <td   >
						 <input  name="scor[]"    size="3"      value="<? echo $row['scor']; ?>"    class="form-control"   ></td>
                        <td  > 
						<input  name="test_date[]"    size="12"      value="<? echo $row['test_date']; ?>"    class="form-control" style="text-align: center"   ></td>
                        <td  > 
						 <input  name="test_date_en[]"    size="12"      value="<? echo $row['test_date_en']; ?>"    class="form-control" style="text-align: center"   ></td>
                        <td  > 
						 <? echo $row['Rate']; ?></td>
                        <td  >                      <?
 
$result14=mysqli_query($conn,"select * from questions where cors_ID='$cors_ID'  ");
 
$rows14 = mysqli_num_rows($result14 );
if($rows14 > 0 )
{
?>
                        <a href="test.php?ID_reg=<? echo $row['ID_reg']; ?>"  ><i class="fa fa-folder-open btn btn-Danger btn-sm "></i></a>
<?
}
?></td>
 
                        <td  ><div align=center>
				                  <? 
				                  
				                      $cors_type=$row['cors_type']; 
				                      
         if($cors_type=="تطويري") {  	
                  if($row['scor']>=0 and $con>=$absences) { 
                 if($_SESSION['acount_type']==1 )  
                 { 
                 ?>
                 <a href="c_com.php?ID_reg=<? echo $row['ID_reg']; ?>"   target=_blank><i class="fa fa-print btn btn-Warning btn-sm "></i></a>
                 <?
                  }
                 else 
                 {
                 echo "لا تملك صلاحية الطباعة";
                 }
                 } else { ?><? if($row['scor']<0) echo 'لا يستحق شهادة الدرجة اقل من 60<br>'; ?> <font color="#FF0000"><? if($con<$absences) echo 'تجاوز نسبة الغياب '; ?></font><? } ?><? } ?>


					
 
                



                 <? if($cors_type=="لغة الإنجليزية") { ?>	
                 <?                   if($row['scor']>=60 and $con>=$absences) { 
                 if($_SESSION['acount_type']==1 )  
                 { 
                 ?>
                 <a href="c_com2.php?ID_reg=<? echo $row['ID_reg']; ?>"   target=_blank><i class="fa fa-print btn btn-Warning btn-sm "></i></a>
                 <?
                  }
                 else 
                 {
                 echo "لا تملك صلاحية الطباعة";
                 }
                 } else { ?><? if($row['scor']<60) echo 'لا يستحق شهادة الدرجة اقل من 60<br>'; ?> <font color="#FF0000"><? if($con<$absences) echo 'تجاوز نسبة الغياب '; ?></font><? } ?><? } ?>


<? if($cors_type=="لغة صينية") { ?>	
                 <?                   if($row['scor']>=60 and $con>=$absences) { 
                 if($_SESSION['acount_type']==1 )  
                 { 
                 ?>
                 <a href="c_com22.php?ID_reg=<? echo $row['ID_reg']; ?>"   target=_blank><i class="fa fa-print btn btn-Warning btn-sm "></i></a>
                 <?
                  }
                 else 
                 {
                 echo "لا تملك صلاحية الطباعة";
                 }
                 } else { ?><? if($row['scor']<60) echo 'الدرجة اقل من 60<br>'; ?> <font color="#FF0000"><? if($con<$absences) echo 'تجاوز نسبة الغياب '; ?></font><? } ?><? } ?>




                 <? if($cors_type=="دورة تأهلية") { ?>	
		         <?                   if($row['scor']>=60 and $con>=$absences) { 
 
                 if($_SESSION['acount_type']==1 )  
                 { 
                 ?>
                 <a href="c_com1.php?ID_reg=<? echo $row['ID_reg']; ?>"  target=_blank><i class="fa fa-print btn btn-Warning btn-sm "></i></a>
                 <?
                  }
                 else 
                 {
                 echo "لا تملك صلاحية الطباعة";
                 }
                 } else { ?><? if($row['scor']<60) echo 'لا يستحق شهادة الدرجة اقل من 60<br>'; ?> <font color="#FF0000"><? if($con<$absences) echo 'تجاوز نسبة الغياب '; ?></font><? } ?><? } ?>

 
 <? if($cors_type=="دبلوم") { ?>	
		         <?                   if($row['scor']>=60 and $con>=$absences) { 
 
                 if($_SESSION['acount_type']==1 )  
                 { 
                 ?>
                 <a href="c_com11.php?ID_reg=<? echo $row['ID_reg']; ?>"  target=_blank><i class="fa fa-print btn btn-Warning btn-sm "></i></a>
                 <?
                  }
                 else 
                 {
                 echo "لا تملك صلاحية الطباعة";
                 }
                 } else { ?><? if($row['scor']<60) echo 'لا يستحق شهادة الدرجة اقل من 60<br>'; ?> <font color="#FF0000"><? if($con<$absences) echo 'تجاوز نسبة الغياب '; ?></font><? } ?><? } ?>



</div></td>
 
                      </tr>
                    <? }} ?>
                    <tr>
 
                        <td colspan="6" >
						&nbsp;</td>
                        <td colspan="6" ><p align=center>
                        
                        
 
<input type="submit" value="حفظ التغيرات" name="B1"  class="btn btn-primary" style="float: left">
 

 
 



						</td>
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
 $scor= mysqli_real_escape_string($conn,htmlspecialchars($_POST['scor'][$i], ENT_QUOTES, "utf-8")); 
 $Rate= mysqli_real_escape_string($conn,htmlspecialchars($_POST['Rate'][$i], ENT_QUOTES, "utf-8")); 
 $test_date= mysqli_real_escape_string($conn,htmlspecialchars($_POST['test_date'][$i], ENT_QUOTES, "utf-8")); 
 $test_date_en= mysqli_real_escape_string($conn,htmlspecialchars($_POST['test_date_en'][$i], ENT_QUOTES, "utf-8")); 


 
  if($scor>=90) $Rate='ممتاز';   
 elseif($scor>=80) $Rate='جيد جدا'; 
 elseif($scor>=70) $Rate='جيد'; 
 elseif($scor>=60) $Rate='مقبول';
 else
 $Rate='راسب';


$sql="update stu_sec set scor='$scor',Rate='$Rate',user='$_SESSION[username]',test_date='$test_date',test_date_en='$test_date_en'    where ID_reg='$ID_reg' ";


if(mysqli_query($conn,$sql))
{
?><meta http-equiv="refresh" content="2;url=<?php echo( $self ); ?>"><?
}


 


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