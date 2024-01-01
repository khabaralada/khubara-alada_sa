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
   $stu_id= mysqli_real_escape_string($conn,htmlspecialchars(intval($_GET['stu_ID']), ENT_QUOTES, "utf-8")); 

$query = "select * from student  where  stu_id='$stu_id'  ";
$result = mysqli_query($conn,$query);
while($row=mysqli_fetch_array($result))
{
 echo $row['stu_name_ar'];
 
  
  }
?></small></h1>
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
                        <th  >تاريخ الاختبار هــ
</th>
                        <th  >تاريخ الاختبار م
                         <th><p align=center>التقدير</th>
                         <th><p align=center>نسبة الغياب</th>
                         <th><p align=center>جدول المحاضرات    </th>
                         <th><p align=center>الشهادة</th>
                         <th><p align=center>&nbsp;</th>
                      </tr>
                    </thead>
                    <tbody>
                     <?
include ("conn.php");
$i=0;
$query = "select * from cors,subjects,teacher,branches,stu_sec
   where stu_sec.section_Id=cors.ID    and branches.Branches_ID=cors.Branches and  teacher.teacher_id=cors.traning_name and 
   subjects.cors_ID=cors.cors_ID and stu_id='$stu_id'  order by cors_no DESC";
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
  $absences=$row['absences'];

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
						<input  name="scor"    size="3"      value="<? echo $row['scor']; ?>"    class="form-control" style="text-align: center"   ></td>
                        <td>
						<input  name="test_date"    size="12"      value="<? echo $row['test_date']; ?>"    class="form-control" style="text-align: center"   ></td>
                        <td>
						<input  name="test_date_en"    size="12"      value="<? echo $row['test_date_en']; ?>"    class="form-control" style="text-align: center"   ></td>
                        <td>
						<? echo $row['Rate']; ?></td>
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
						<a href="table1.php?section_Id=<? echo $row['0']; ?>">استعراض</a></td>
                        <td>
                        
                  


				
	
				                  <? 
				                  
 
				                      
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



						</td>
 
                        <td >
                        <?
                                         if($_SESSION['acount_type']==1 )  
{
?>

<input type="submit" value="حفظ" name="B1"  class="btn btn-primary" style="float: left">  
<?
}
else
{
  if($end_date<=$ar_date) { ?>
<input type="submit" value="حفظ" name="B1"  class="btn btn-primary" style="float: left">  
<? } else { ?>
<input type="submit"  disabled value="لم تنتهي الدورة" name="B1"  class="btn btn-primary" style="float: left">
<? }} ?>
                
                  </td>
 
                       </form>

 
                      </tr>
                    <? }} ?>
                    <tr>
 
                        <td colspan="14">
                     
                        
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



 	<?

include ("conn.php");
if(isset($_POST[B1]))
{


$year = date('Y', strtotime($date_en));
$mm = date('m', strtotime($date_en));




 

 

 $ID_reg= mysqli_real_escape_string($conn,htmlspecialchars($_POST['ID_reg'], ENT_QUOTES, "utf-8")); 
 
 $scor= mysqli_real_escape_string($conn,htmlspecialchars($_POST['scor'], ENT_QUOTES, "utf-8")); 
 $test_date= mysqli_real_escape_string($conn,htmlspecialchars($_POST['test_date'], ENT_QUOTES, "utf-8")); 
 $test_date_en= mysqli_real_escape_string($conn,htmlspecialchars($_POST['test_date_en'], ENT_QUOTES, "utf-8")); 
 


 
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


 


 
echo '<script>
function myFunction() {
document.getElementById("snackbar").style.visibility = "hidden";
}
 document.getElementById("snackbar").style.visibility = "visible";
 window.setTimeout("hideMsg()", 2000); </script>';

 
}
?>