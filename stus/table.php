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
جداول قسم الحاسب الآلي
 </small></h1>
</section>
 
<section class="content" dir=rtl>
<div class="box box-info">
<div class="box-body">
                  <table id="example1" class="table table-bordered table-striped"  >
                    <thead>
                      <tr>
                         <th><p align=center>
						 المدرس </th>
<?
include ("conn.php");
 $teacher_id= mysqli_real_escape_string($conn,htmlspecialchars(intval($_GET['teacher_id']), ENT_QUOTES, "utf-8"));
$query1  = "select DISTINCT cors.time1,am,time.time1 from time,cors where  traning_name='$teacher_id' and end_date>='$ar_date' and   cors.time1=time.time   order by time.time";
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
 $teacher_id= mysqli_real_escape_string($conn,htmlspecialchars(intval($_GET['teacher_id']), ENT_QUOTES, "utf-8"));

$query = "select *  from teacher   where  teacher_id='$teacher_id'    order by Branches DESC";
$result = mysqli_query($conn,$query);
while($row=mysqli_fetch_array($result))
{ 
$teacher_id=$row['teacher_id'];
?>
 <tr>
                        <td>
						<span lang="ar-sa"><font size="2"><? echo $row['teacher_name']; ?></font></span></td>
    <?
include ("conn.php");
 $teacher_id= mysqli_real_escape_string($conn,htmlspecialchars(intval($_GET['teacher_id']), ENT_QUOTES, "utf-8"));
$query12  = "select DISTINCT cors.time1,am,time.time1,time.time  from time,cors where   traning_name='$teacher_id' and  end_date>='$ar_date' and   cors.time1=time.time   order by time.time";
$result12 = mysqli_query($conn,$query12);
while($row12=mysqli_fetch_array($result12))
{ 
$time1=$row12['3'];
?>
<?
 
include ("conn.php");
 $teacher_id= mysqli_real_escape_string($conn,htmlspecialchars(intval($_GET['teacher_id']), ENT_QUOTES, "utf-8"));

$query1 = "select * from cors,subjects,teacher,branches   where  traning_name='$teacher_id' and branches.Branches_ID=cors.Branches and  teacher.teacher_id=cors.traning_name and subjects.cors_ID=cors.cors_ID  and  end_date>='$ar_date' and teacher_id='$teacher_id' and time1='$time1'  order by cors_no DESC";
$result1 = mysqli_query($conn,$query1);
$rows1 = mysqli_num_rows($result1 );
if($rows1 > 0 )
{

?>
 <td>
<font size="2">
<?
while($row1=mysqli_fetch_array($result1))
{
  $cors_ID=$row1['ID'];
 
?>
</font>

<font size="2">
<? //echo $row1['class']; ?>  
 <font color="#0000FF"><b>  
 <? echo $row1['cors_name']; ?><br></b></font></font> <span ><font color=red>( رقم<? echo $row1['cors_no']; ?> )</font>
 <br> <? 
$query11 = "select count(stu_id) as co    from stu_sec   where   section_Id='$cors_ID'";
$result11 = mysqli_query($conn,$query11);
while($row11=mysqli_fetch_array($result11))
{
 ?> عدد الطلاب <? echo $row11['co']; ?><?
 }
 
 ?> 
 <br>بداية الدورة : <? echo $row1['start_date']; ?>
 <br>نهاية الدورة : <? echo $row1['end_date']; ?>
</p>
</span><font size="2">

<?
}
?></font></td><? } else { ?>

<td bgcolor=#666666></td>


<? }  ?>


<? } ?>
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
   