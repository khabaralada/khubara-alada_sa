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
 دورات اللغة الإنجليزية English courses
</small></h1>
</section>

 



 
<section class="content" dir=rtl>
<div class="box box-info">
<div class="box-body">
					   
 
                  <table id="example1" class="table table-bordered table-striped"  >
                    <thead>
                      <tr>
                         <th><p align=center>
						Course NO.</th>
                         <th><p align=center>
						level</th>
                         
                         <th><p align=center>Branch</th>
                         <th><p align=center>Teacher</th>
                         <th><p align=center> Start Date Level</th>
                         <th><p align=center>End Date Level
                    <label class="control-label" for="inputSuccess">
						 </th>
                         <th><p align=center>Time</th>
                         <th><p align=center>Number of students</th>
                         <th><p align=center>Attendance sheet
</th>
                         <th><p align=center>Attendees</th>
                      </tr>
                    </thead>
                    <tbody>
                     <?
include ("conn.php");



if($_SESSION['acount_type']==2)
{
$query = "select * from cors,subjects,teacher,branches   where branches.Branches_ID=cors.Branches and  teacher.teacher_id=cors.traning_name and subjects.cors_ID=cors.cors_ID and cors_type='لغة الإنجليزية' and teacher.username='$_SESSION[username]' and end_date>='$ar_date' order by cors_no DESC";
}
else
{
if($_SESSION['Branches']==0)
$query = "select * from cors,subjects,teacher,branches   where branches.Branches_ID=cors.Branches and  teacher.teacher_id=cors.traning_name and subjects.cors_ID=cors.cors_ID and cors_type='لغة الإنجليزية' and end_date>='$ar_date' order by cors_no DESC";
else
$query = "select * from cors,subjects,teacher,branches   where branches.Branches_ID=cors.Branches and  teacher.teacher_id=cors.traning_name and subjects.cors_ID=cors.cors_ID and cors.Branches='$_SESSION[Branches]' and cors_type='لغة الإنجليزية'  and end_date>='$ar_date' order by cors_no DESC";
}
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
                        <td align="left">
						<? echo $row['cors_no']; ?></td>
                        <td align="left">
						
						
						                                <? if($row['cors_name']=='التأسيسي 1') echo 'Foundation 1';  
														  elseif($row['cors_name']=='التأسيسي 2') echo 'Foundation 2'; 
														  elseif($row['cors_name']=='التأسيسي')   echo 'Foundation'; 
														 elseif($row['cors_name']=='الأول')   echo 'I'; 
														 elseif($row['cors_name']=='الثاني')   echo 'II'; 
														 elseif($row['cors_name']=='الثالث')   echo 'III'; 
														 elseif($row['cors_name']=='الرابع')   echo 'IV'; 
														 elseif($row['cors_name']=='الخامس')   echo 'V'; 
														 elseif($row['cors_name']=='السادس')   echo 'VI'; 
														 elseif($row['cors_name']=='السابع')   echo 'VII'; 
														 elseif($row['cors_name']=='الثامن')   echo 'VIII'; 
														 elseif($row['cors_name']=='التاسع')   echo 'IX'; 
														 elseif($row['cors_name']=='العاشر')   echo 'X'; 
														 elseif($row['cors_name']=='الحادي عشر')   echo 'XI'; 
														 elseif($row['cors_name']=='الثاني عشر')   echo 'XII'; 
														 else echo $row['cors_name']; ?>



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
										<? echo $row['time1']; ?> - <? echo $row['time2']; ?></td>
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
				<a href="print_report1.php?section_Id=<? echo $row['ID']; ?>" target=_blank>Print</a></td>
                        <td align="left">
				<a href="attendees_en.php?section_Id=<? echo $row['ID']; ?>" >Attendees</a></td>
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

    