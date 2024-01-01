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

جدول الدورة/   

                     <?
include ("conn.php");
$section_Id= mysqli_real_escape_string($conn,htmlspecialchars(intval($_GET['section_Id']), ENT_QUOTES, "utf-8")); 

$query = "select * from cors,subjects    where  cors.cors_ID=subjects.cors_ID and   ID='$section_Id' ";
$result = mysqli_query($conn,$query);
while($row=mysqli_fetch_array($result))
{ ?>
<? echo $row['cors_name'];  ?> - رقم الدورة <? echo $row['cors_no'];  ?> - بداية الدورة <? echo $row['start_date'];  ?> -  نهاية الدورة  <? echo $row['end_date'];  ?>
<?
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
						 <span lang="ar-sa"><font size="2">الأيام</font></span></th>
                      <?
include ("conn.php");
$section_Id= mysqli_real_escape_string($conn,htmlspecialchars(intval($_GET['section_Id']), ENT_QUOTES, "utf-8")); 

$query1  = "select * from time,cors where    cors.time1=time.time  and   cors.ID='$section_Id' order by time.time";
$result1 = mysqli_query($conn,$query1);
while($row1=mysqli_fetch_array($result1))
{ 
?> <th><p align=center> <span lang="ar-sa"><font size="2"><? echo $row1['2']; ?> <? echo $row1['am']; ?> 
						</font></span></th><?  } ?>


                         
                      </tr>
                    </thead>
                    <tbody>

                      <?
include ("conn.php");
$query = "select * from days      ";
$result = mysqli_query($conn,$query);
while($row=mysqli_fetch_array($result))
{ 
$days_ID=$row['days_ID'];
?>
 <tr>
                        <td>
						<span lang="ar-sa"><font size="2"><? echo $row['day']; ?></font></span></td>
                      <?
include ("conn.php");
$section_Id= mysqli_real_escape_string($conn,htmlspecialchars(intval($_GET['section_Id']), ENT_QUOTES, "utf-8")); 

$query12 = "select * from time,cors where    cors.time1=time.time  and    cors.ID='$section_Id' order by time.time";
$result12 = mysqli_query($conn,$query12);
while($row12=mysqli_fetch_array($result12))
{ 
$time1=$row12['1'];
?>

 <td>
<font size="2">
<?
include ("conn.php");
$section_Id= mysqli_real_escape_string($conn,htmlspecialchars(intval($_GET['section_Id']), ENT_QUOTES, "utf-8")); 

$query1 = "select * from cors,subjects,teacher,branches   where branches.Branches_ID=cors.Branches and  teacher.teacher_id=cors.traning_name 
and subjects.cors_ID=cors.cors_ID  and cors.ID='$section_Id' and  '$days_ID'>=day1 and  '$days_ID'<=day2 and time1='$time1' order by cors_no DESC";
$result1 = mysqli_query($conn,$query1);
while($row1=mysqli_fetch_array($result1))
{
?>
<a href="show_stu.php?section_Id=<? echo $row1['0']; ?>"    title="<? echo $row1['cors_name']; ?>">
<? echo $row1['class']; ?> : <? echo $row1['cors_name']; ?></a><br>رقم الدورة / المستوي <? echo $row1['cors_no']; ?>

<?
}
?></font></td><? } ?>
                      </tr><?   } ?> 
 
 
                    </tbody>
                     
                  </table>
                </div><font size="2"><!-- /.box-body -->
              	</font>
              </div>
	<font size="2">
                  </div>
</div>
</section>


</div><!-- /.content-wrapper -->
<? include('footer.php'); ?>
    </div><!-- ./wrapper -->
  </body>
</html>

     <!-- jQuery 2.1.3 -->
   </font>
   