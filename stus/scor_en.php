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
  trainees for course no :<? echo $row['cors_no']; ?> -  Level : <? if($row['cors_name']=='التأسيسي 1') echo 'Foundation 1'; ?>
														<? if($row['cors_name']=='التأسيسي 2') echo 'Foundation 2'; ?>
														<? if($row['cors_name']=='التأسيسي')   echo 'Foundation'; ?>
														<? if($row['cors_name']=='الأول')   echo 'I'; ?>
														<? if($row['cors_name']=='الثاني')   echo 'II'; ?>
														<? if($row['cors_name']=='الثالث')   echo 'III'; ?>
														<? if($row['cors_name']=='الرابع')   echo 'IV'; ?>
														<? if($row['cors_name']=='الخامس')   echo 'V'; ?>
														<? if($row['cors_name']=='السادس')   echo 'VI'; ?>
														<? if($row['cors_name']=='السابع')   echo 'VII'; ?>
														<? if($row['cors_name']=='الثامن')   echo 'VIII'; ?>
														<? if($row['cors_name']=='التاسع')   echo 'IX'; ?>
														<? if($row['cors_name']=='العاشر')   echo 'X'; ?>
														<? if($row['cors_name']=='الحادي عشر')   echo 'XI'; ?>
														<? if($row['cors_name']=='الثاني عشر')   echo 'XII'; ?>
 - The starting date of the level : <? echo $row['start_date']; ?>  - Date of end of level : <? echo $row['end_date']; ?> 
<? } ?>					   
 
 </small></h1>
</section>
 
<section class="content" dir=rtl>
<div class="box box-info">
<div class="box-body">                  <table id="example1" class="table table-bordered table-striped" dir="ltr"  >
                    <thead>
                      <tr>
                         <th><p align=center>
						Course NO.</th>
                         <th><p align=center>
						level</th>
                         
                         <th><p align=center>Branch</th>
                         <th><p align=center>Teacher</th>
                         <th><p align=center> Start Date </th>
                         <th><p align=center>End Date
						 </th>
                         <th><p align=center>students</th>
                         <th><p align=center>Attendance
</th>
                      </tr>
                    </thead>
                    <tbody>
                     <?
include ("conn.php");
 $section_Id= mysqli_real_escape_string($conn,htmlspecialchars(intval($_GET['section_Id']), ENT_QUOTES, "utf-8")); 

if($_SESSION['Branches']==0)
$query = "select * from cors,subjects,teacher,branches   where branches.Branches_ID=cors.Branches and  teacher.teacher_id=cors.traning_name and subjects.cors_ID=cors.cors_ID and  cors.ID='$section_Id'   order by cors_no DESC";
else
$query = "select * from cors,subjects,teacher,branches   where branches.Branches_ID=cors.Branches and  teacher.teacher_id=cors.traning_name and subjects.cors_ID=cors.cors_ID and cors.Branches='$_SESSION[Branches]' and  cors.ID='$section_Id'  order by cors_no DESC";
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
$cors_ID=$row['cors_ID'];
?>
 <tr>
                        <td align="left">
						<? echo $row['cors_no']; ?></td>
                        <td align="left">
						
						
						<? if($row['cors_name']=='التأسيسي 1') echo 'Foundation 1'; ?>
														<? if($row['cors_name']=='التأسيسي 2') echo 'Foundation 2'; ?>
														<? if($row['cors_name']=='التأسيسي')   echo 'Foundation'; ?>
														<? if($row['cors_name']=='الأول')   echo 'I'; ?>
														<? if($row['cors_name']=='الثاني')   echo 'II'; ?>
														<? if($row['cors_name']=='الثالث')   echo 'III'; ?>
														<? if($row['cors_name']=='الرابع')   echo 'IV'; ?>
														<? if($row['cors_name']=='الخامس')   echo 'V'; ?>
														<? if($row['cors_name']=='السادس')   echo 'VI'; ?>
														<? if($row['cors_name']=='السابع')   echo 'VII'; ?>
														<? if($row['cors_name']=='الثامن')   echo 'VIII'; ?>
														<? if($row['cors_name']=='التاسع')   echo 'IX'; ?>
														<? if($row['cors_name']=='العاشر')   echo 'X'; ?>
														<? if($row['cors_name']=='الحادي عشر')   echo 'XI'; ?>
														<? if($row['cors_name']=='الثاني عشر')   echo 'XII'; ?>



<? //echo $row['cors_name']; ?></td>
                        <td align="left">
 <? echo $row['Branches_name_en'];
?></td>
                        <td align="left">
						 
<? 
echo $row['teacher_name'];

?></td>
                        <td align="left"> 
						<? echo $row['start_date']; ?></td>
                        <td align="left">
						<? echo $row['end_date']; ?></td>
                        <td align="left">
										<? 
$query1 = "select count(stu_id) as co    from stu_sec   where   section_Id='$row[0]'";
$result1 = mysqli_query($conn,$query1);
while($row1=mysqli_fetch_array($result1))
{
 ?>  <? echo $row1['co']; ?>  <?
 }
 ?></td>
                        <td align="left">
				<a href="print_report1.php?section_Id=<? echo $row['ID']; ?>" target=_blank>Printnt</a></td>
                      </tr>
                    <? }} ?>
                    </tbody>
                     
                  </table>
                </div><!-- /.box-body --><div class="box-body">
                  <table id="example1" class="table table-bordered table-striped" dir="ltr"     >
                    <form method="POST" action="">
 
                    <thead>
                       
                      <tr>
                        <th   >
						<span >Trainer's name</span></th>
                         
                        <th   ><span >Absence Rate</span></th>
                         
                        <th   ><span >Attendance<br>(10)</span></th>
                        <th   ><span >Quizzes<br>(4)</span></th>
                         <th><p align=center>
                    <label class="control-label" for="inputSuccess">
						<span >Participation<br>(4)</span></th>
                         <th><p align=center>
                    <label class="control-label" for="inputSuccess">
						<span >Listening<br>(5)</span></th>
                         <th><p align=center>
                    <label class="control-label" for="inputSuccess">
						<span >Reading<br>(3)</span></th>
                        <th   ><span >Workbook<br>(4)</span></th>
                        <th   > <span >Lab<br>(10)</span></span></th>
                        <th   ><span >Written <br>(60)</span></th>
                        <th   > <span >Total Marks </span> </th>
                        <th   >
						<span >Rate</span></th>
                         <th>Open Test....</th>
                         <th><p align=center>
						Test</th>
                         <th><p align=center>
						<span  lang="ar-sa">Certificate</span></th>
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
 
 
                        <td   >						<input type="hidden" name="ID_reg[]" size="20" value="<? echo $row['ID_reg']; ?>">
						<input type="hidden" name="mobile[]" size="20" value="<? echo $row['mobile']; ?>">
  						<input type="hidden" name="section_Id" size="20" value="<? echo $section_Id; ?>">
                        <input type="hidden" name="date_ar" size="20" value="<? echo $xx=ArabicTools::arabicDate('hj:Y-m-d', time());  ?>" style="font-weight: 700; width: 96px;">
						<input type="hidden" name="mm" size="20" value="<? echo date('m');?>">
						<input type="hidden" name="year" size="20" value="<? echo date('Y');?>">
						<input type="hidden" name="day" size="20" value="<? echo date('l'); ?>" style="font-weight: 700">
						

						<a href="detalis.php?ID_reg=<? echo $row['ID_reg']; ?>"><? echo $row['stu_name_ar']; ?><br><? echo $row['stu_name_en']; ?></a></td>
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
 
						 <input  name="Attendance[]"    type=number min="0" max="10" size="3"  maxlength=2      value="<? echo $row['Attendance']; ?>"    class="form-control" style="text-align: center"   ></td>
                        <td   >
						 <label class="control-label" for="inputSuccess">
 
						 <input  name="Quizzes[]"    size="3"     type=number min="0" max="4"  maxlength=1 value="<? echo $row['Quizzes']; ?>"    class="form-control" style="text-align: center"   ></td>
                        <td   >
						 <label class="control-label" for="inputSuccess">
 
						 <input  name="Participation[]"    size="3"  type=number min="0" max="4"  maxlength=1   value="<? echo $row['Participation']; ?>"    class="form-control" style="text-align: center"   ></td>
                        <td   >
						 <label class="control-label" for="inputSuccess">
 
						 <input  name="Listening[]"    size="3"  type=number min="0" max="5"  maxlength=1  value="<? echo $row['Listening']; ?>"    class="form-control" style="text-align: center"   ></td>
                        <td   >
						 <label class="control-label" for="inputSuccess">
 
						 <input  name="Reading[]"    size="3"   type=number min="0" max="3"  maxlength=1 value="<? echo $row['Reading']; ?>"    class="form-control" style="text-align: center"   ></td>
                        <td   >
						 <label class="control-label" for="inputSuccess">
 
						 <input  name="Workbook[]"    size="3"    type=number min="0" max="4"  maxlength=1 value="<? echo $row['Workbook']; ?>"    class="form-control" style="text-align: center"   ></td>
                        <td   >
						 <label class="control-label" for="inputSuccess">
 
						 <input  name="Lab[]"    size="3"    type=number min="0" max="10"  maxlength=2 value="<? echo $row['Lab']; ?>"    class="form-control" style="text-align: center"   ></td>
                        <td   >
						 <label class="control-label" for="inputSuccess">
 
						 <input  name="Written[]"    size="3"   type=number min="0" max="60"  maxlength=2  value="<? echo $row['Written']; ?>"    class="form-control" style="text-align: center"   ></td>
                        <td   >
                        <p align="center"> <? echo $row['scor']; ?>
						 </td>
                        <td   >
		 <? if($row['Rate']=='ممتاز') echo 'Excellent'; ?> 
													<? if($row['Rate']=='جيد جدا') echo 'V.Good'; ?> 
													<? if($row['Rate']=='جيد') echo 'Good'; ?> 
													<? if($row['Rate']=='مقبول') echo 'Pass'; ?>
													
 
													
													
													</td>
                        <td >
                        
                        <select style="font-family: Arial"   style="font-family: Arial"   size="1"  name="open_test[]" class="form-control" >
 <? if($row['open_test']=="Open") { ?><option>Open</option> <? } ?>
 <? if($row['open_test']=="Close") { ?><option>Close</option> <? } ?>

<option ></option> 
<option>Open</option>
<option>Close</option>


						</select>
						
						
						</td>
 
                        <td >                      <?
 
$result14=mysqli_query($conn,"select * from questions where cors_ID='$cors_ID'  ");
 
$rows14 = mysqli_num_rows($result14 );
if($rows14 > 0 )
{
?>
                        <a href="test.php?ID_reg=<? echo $row['ID_reg']; ?>"  ><i class="fa fa-folder-open btn btn-Danger btn-sm "></i></a>
<?
}
?></td>
 
                        <td ><div align=center>
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
 
                        <td>
						</td>
                        <td  ></td>
                        <td  ></td>
                        <td  ></td>
                        <td  ></td>
                        <td  ></td>
                        <td  ></td>
                        <td  ></td>
                        <td  ></td>
                        <td  ></td>
                        <td  ></td>
                        <td  ></td>
                        <td ><input type="submit" value="open test" name="B2"  class="btn btn-primary" style="float: left"></td>
                        <td ><input type="submit" value="close test" name="B3"  class="btn btn-primary" style="float: left"></td>
                        <td ><p align=center>
 
<input type="submit" value="Save changes" name="B1"  class="btn btn-primary" style="float: left">
 
 
 

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
 //$scor= mysqli_real_escape_string($conn,htmlspecialchars($_POST['scor'][$i], ENT_QUOTES, "utf-8")); 
 $Rate= mysqli_real_escape_string($conn,htmlspecialchars($_POST['Rate'][$i], ENT_QUOTES, "utf-8")); 


 $Attendance= mysqli_real_escape_string($conn,htmlspecialchars($_POST['Attendance'][$i], ENT_QUOTES, "utf-8")); 
 $Quizzes= mysqli_real_escape_string($conn,htmlspecialchars($_POST['Quizzes'][$i], ENT_QUOTES, "utf-8")); 
 $Participation= mysqli_real_escape_string($conn,htmlspecialchars($_POST['Participation'][$i], ENT_QUOTES, "utf-8")); 
 $Listening= mysqli_real_escape_string($conn,htmlspecialchars($_POST['Listening'][$i], ENT_QUOTES, "utf-8")); 
 $Reading= mysqli_real_escape_string($conn,htmlspecialchars($_POST['Reading'][$i], ENT_QUOTES, "utf-8")); 
 $Workbook= mysqli_real_escape_string($conn,htmlspecialchars($_POST['Workbook'][$i], ENT_QUOTES, "utf-8")); 
 $Lab= mysqli_real_escape_string($conn,htmlspecialchars($_POST['Lab'][$i], ENT_QUOTES, "utf-8")); 
 $Written= mysqli_real_escape_string($conn,htmlspecialchars($_POST['Written'][$i], ENT_QUOTES, "utf-8")); 
 $open_test= mysqli_real_escape_string($conn,htmlspecialchars($_POST['open_test'][$i], ENT_QUOTES, "utf-8")); 

 
$scor=$Attendance+$Quizzes+$Participation+$Listening+$Reading+$Workbook+$Lab+$Written;
 if($scor>=90) $Rate='ممتاز';   
 elseif($scor>=80) $Rate='جيد جدا'; 
 elseif($scor>=70) $Rate='جيد'; 
 elseif($scor>=60) $Rate='مقبول';
 else
 $Rate='راسب';

$sql="update stu_sec set scor='$scor',Rate='$Rate',user='$_SESSION[username]',
Attendance='$Attendance',Quizzes='$Quizzes',Participation='$Participation',Listening='$Listening',
Reading='$Reading',Workbook='$Workbook',Lab='$Lab',Written='$Written',open_test='$open_test'     where ID_reg='$ID_reg' ";


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

elseif(isset($_POST[B2]))
{
//if($checkbox){ 
//foreach($_POST['checkbox'] as $i) { 
 for($i=0;$i<$co;$i++) { 
 $ID_reg= mysqli_real_escape_string($conn,htmlspecialchars($_POST['ID_reg'][$i], ENT_QUOTES, "utf-8")); 
$sql="update stu_sec set open_test='Open'     where ID_reg='$ID_reg' ";
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
elseif(isset($_POST[B3]))
{
//if($checkbox){ 
//foreach($_POST['checkbox'] as $i) { 
 for($i=0;$i<$co;$i++) { 
 $ID_reg= mysqli_real_escape_string($conn,htmlspecialchars($_POST['ID_reg'][$i], ENT_QUOTES, "utf-8")); 
$sql="update stu_sec set open_test='Close'     where ID_reg='$ID_reg' ";
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