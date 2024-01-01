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
 $stu_id= mysqli_real_escape_string($conn,htmlspecialchars(intval($_GET['stu_id']), ENT_QUOTES, "utf-8")); 

$query = "select * from student  where  stu_id='$_GET[stu_id]'  ";
$result = mysqli_query($conn,$query);
while($row=mysqli_fetch_array($result))
{
 echo $row['stu_name_ar'];
 
  
  }
?>
					   
</small></h1>
</section>
 
<section class="content" dir=rtl>
<div class="box box-info">
<div class="box-body">
                                          

					   
 
                  <table id="example1" class="table table-bordered table-striped"  >
                   
                    <tbody>
                     <?
include ("conn.php");
 $stu_id= mysqli_real_escape_string($conn,htmlspecialchars(intval($_GET['stu_id']), ENT_QUOTES, "utf-8")); 

$query4 = "select DISTINCT iqama,stu_name_ar,mobile,Branches_name,student.stu_id  from cors,subjects,teacher,branches,stu_sec,student
   where stu_sec.section_Id=cors.ID    and branches.Branches_ID=cors.Branches and  teacher.teacher_id=cors.traning_name and 
   subjects.cors_ID=cors.cors_ID   and student.stu_id=stu_sec.stu_id  and (student.stu_id='$stu_id' or student.stu_id='$stu_id')  order by cors_no DESC  ";
$result4 = mysqli_query($conn,$query4);
$rows4 = mysqli_num_rows($result4 );
if($rows4 > 0 )
{
while($row4=mysqli_fetch_array($result4))
{
$stu_id=$row4['stu_id'];

?>
 <tr>
                        <form method="POST" action="">
 <input type="hidden" name="ID_reg" size="20" value="<? echo $row['ID_reg']; ?>">
 <td>
						<? $C++; echo $C; ?></td>
						
						
						
                        <td>
						<? echo $row4['stu_name_ar']; ?></td>
 
                        <td>
						<? echo $row4['iqama']; ?></td>
 
                        <td>
						<? echo $row4['mobile']; ?></td>
 
                        <td>
 <? echo $row4['Branches_name'];
?></td>


                     <?
                     $xxx=0;
include ("conn.php");
 $stu_id= mysqli_real_escape_string($conn,htmlspecialchars(intval($_GET['stu_id']), ENT_QUOTES, "utf-8")); 

$query = "select *  from cors,subjects,teacher,branches,stu_sec,student
   where stu_sec.section_Id=cors.ID    and branches.Branches_ID=cors.Branches and  teacher.teacher_id=cors.traning_name and 
   subjects.cors_ID=cors.cors_ID and    student.stu_id=stu_sec.stu_id and student.stu_id='$stu_id'  order by cors_no DESC";
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
$xxx++;
?>

  <td >
المدرس:<? echo $row['teacher_name']; ?>
<br>رقم الدورة :<? echo $row['cors_no']; ?>
<br>الدورة:<? echo $row['cors_name']; ?>
<br>البداية:<? echo $row['start_date']; ?>
<br>النهاية:<? echo $row['end_date']; ?>
<br>الدرجة:<? echo $row['scor']; ?>
<br>التقدير:<? echo $row['Rate']; ?>
<br>الحضور:<?
						 $aa=0;
						 $prs=0;
						 
$result1=mysqli_query($conn,"select count(type) as con from absence where ID_reg='$row[ID_reg]' and type='1'");
$c=0;
while($row1=mysqli_fetch_array($result1))
{
echo $con=$row1[con];
}
 
 
?>
<br>الغياب:<?
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
?>%	</td><? } } ?>
	
 
                      	</form>

                      </tr>
                    <? }} ?>
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

 