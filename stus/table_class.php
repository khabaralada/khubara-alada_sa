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
تقرير بالقاعات الدراسية
 </small></h1>
</section>
 
<section class="content" dir=rtl>
<div class="box box-info">
<div class="box-body">
					   
 
                  <table id="example1" class="table table-bordered table-striped"  >
                    <thead>
                      <tr>
                         <th><p align=center>
						 <span lang="ar-sa">الفرع</span></th>
                         <th><p align=center>
						 <span lang="ar-sa">القاعات</span></th>
<?
include ("conn.php");
$query1  = "select DISTINCT cors.time1,am,time.time1 from time,cors where  end_date>='$ar_date' and   cors.time1=time.time   order by time.time";
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
if($Branches==0)
$query = "select * from building,branches where branches.Branches_ID=Building order by Branches_ID";
else
$query = "select * from building,branches where     branches.Branches_ID=Building and  Building='$Branches' order by Branches_ID";
$result = mysqli_query($conn,$query);
while($row=mysqli_fetch_array($result))
{ 
$days_ID=$row['Building'];
$cou_class=$row['cou_class'];
?>
 <tr>
                        <td <? if($days_ID==3) echo 'bgcolor=#FFCCFF'; ?><? if($days_ID==2) echo 'bgcolor=#FFFF99'; ?><? if($days_ID==1) echo 'bgcolor=#CCFFCC'; ?> >
						<? echo $row['Branches_name']; ?></td>
                        <td>
						<span lang="ar-sa"><? echo $row['cou_class']; ?></span></td>
                       


                      <?
include ("conn.php");
$query12  = "select DISTINCT cors.time1,am,time.time1,time.time  from time,cors where  end_date>='$ar_date' and   cors.time1=time.time   order by time.time";
$result12 = mysqli_query($conn,$query12);
while($row12=mysqli_fetch_array($result12))
{ 
$time1=$row12['3'];
?>
 <td  >
<span >
<?
include ("conn.php");
$query1 = "select * from cors,subjects,teacher,branches   where branches.Branches_ID=cors.Branches and  teacher.teacher_id=cors.traning_name 
and subjects.cors_ID=cors.cors_ID  and cors.class='$cou_class' and end_date>='$ar_date' and   time1='$time1' order by cors_no DESC";
$result1 = mysqli_query($conn,$query1);
while($row1=mysqli_fetch_array($result1))
{
?>
<a href="show_stu.php?section_Id=<? echo $row1['0']; ?>"    title="<? echo $row1['cors_name']; ?>">
<? echo $row1['cors_name']; ?> : <? echo $row1['cors_no']; ?></a><br>رقم الدورة / المستوي <? echo $row1['cors_no']; ?><br><font color=red><? echo $row1['teacher_name']; ?></font><hr>



<?
}
?></span></td><?   } ?> 
                      </tr><?   } ?> 
 
 
                    </tbody>
                     
                  </table>
       
</div>
</section>


</div><!-- /.content-wrapper -->
<? include('footer.php'); ?>
    </div><!-- ./wrapper -->
  </body>
</html>

     <!-- jQuery 2.1.3 -->
   