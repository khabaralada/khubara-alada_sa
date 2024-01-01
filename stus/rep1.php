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
اعداد الحضور
 </small></h1>
</section>
 
<section class="content" dir=rtl>
<div class="box box-info">
<div class="box-body">					 

                   <form method="POST" action="">
 <div class="row">

                    <!-- textarea -->
                    
                    <div class="form-group col-xs-6">
                      <label><i class="fa fa-star"></i> التاريخ الي</label>
                                            <div class="input-group input-group-sm has-error">

                      <input  name="date_to" type=date  size="20"    required="required"  class="form-control" value="<? echo $date_to; ?>" >
                      <span class="input-group-btn">
                      <button class="btn btn-info btn-flat" type="submit" name="go">بحث</button>
                    </span>
                    </div>
                    
                    
                    </div><div class="form-group col-xs-6">
                      <label class="control-label" ><i class="fa fa-star"></i> التاريخ من </label>
                      <input  name="date_from"  type=date size="20"     required="required"  class="form-control" value="<? echo $date_from; ?>" >
                    </div>
                    </div>
                  	</form>
                  <table id="example1" class="table table-bordered table-striped"  >
                    <thead>
                      <tr>
                        <th align="right" rowspan="2">
						<p align="left">رقم الهوية</th>
                        <th align="right" rowspan="2"><p align="left">المدرس</th>
                         
                        <th align="right" rowspan="2"><p align="left">الفرع</th>
<?
if(isset($_POST['go']))
{
$date_to = $_POST['date_to'];  
$date_from = $_POST['date_from'];  
}
else
{
$date_to = date('Y-m-d');  
$date_from = date('Y-m-d', strtotime($date_to. ' - 7 day')); 
}
 
$date_from = strtotime($date_from); // Convert date to a UNIX timestamp  
$date_to = strtotime($date_to); // Convert date to a UNIX timestamp  
for ($i=$date_from; $i<=$date_to; $i+=86400) {
$date=date("Y-m-d", $i); 
 if((date('l', strtotime($date))!="Friday") and    (date('l', strtotime($date))!="Saturday")) {
      ?>
    
                       <th align="center"> 
                      <? 
                      
                      if(date('l', strtotime($date))=="Saturday") echo "السبت";
                      if(date('l', strtotime($date))=="Sunday") echo "الاحد";
                      if(date('l', strtotime($date))=="Monday") echo "الاثنين";
                      if(date('l', strtotime($date))=="Tuesday") echo "الثلاثاء";
                      if(date('l', strtotime($date))=="Wednesday") echo "الاربعاء";
                      if(date('l', strtotime($date))=="Thursday") echo "الخميس";
                      if(date('l', strtotime($date))=="Friday") echo "الجمعة";  ?></th><?} } ?>
                       
                       
                       
                      </tr>
                      <tr>
<?
include "Hijri_GregorianConvert.class";

$DateConv=new Hijri_GregorianConvert;
 $format="yyyy-mm-dd";


if(isset($_POST['go']))
{
$date_to = $_POST['date_to'];  
$date_from = $_POST['date_from'];  
}
else
{
$date_to = date('Y-m-d');  
$date_from = date('Y-m-d', strtotime($date_to. ' - 7 day')); 
}$date_from = strtotime($date_from); // Convert date to a UNIX timestamp  
$date_to = strtotime($date_to); // Convert date to a UNIX timestamp  
for ($i=$date_from; $i<=$date_to; $i+=86400) {  
$date=date("Y-m-d", $i); 
 if((date('l', strtotime($date))!="Friday") and    (date('l', strtotime($date))!="Saturday")) {

      ?>                       <th align="center"><? echo $date; ?> <br><?      $date_ar=$DateConv->GregorianToHijri($date,$format); echo $date_ar; ?> </th><? } } ?>
                       
                       
                       
                      </tr>
                    </thead>
                    <tbody>

 <?
include ("conn.php");
if($_SESSION['acount_type']==2)
{
$query = "select DISTINCT teacher_name,id_card,Branches_name,phone,email,teacher_id  from absence,teacher,branches   where branches.Branches_ID=teacher.Branches and  teacher.teacher_id=absence.teacher   and teacher.username='$_SESSION[username]' order by Branches_name DESC";
}
else
{
if($_SESSION['Branches']==0)
$query = "select DISTINCT teacher_name,id_card,Branches_name,phone,email,teacher_id  from absence,teacher,branches   where branches.Branches_ID=teacher.Branches and  teacher.teacher_id=absence.teacher    order by Branches_name DESC";
else
$query = "select DISTINCT teacher_name,id_card,Branches_name,phone,email,teacher_id   from absence,teacher,branches   where branches.Branches_ID=teacher.Branches and  teacher.teacher_id=absence.teacher  and teacher.Branches='$_SESSION[Branches]'  order by Branches_name DESC";
}
$result = mysqli_query($conn,$query);
$rows = mysqli_num_rows($result );
if($rows > 0 )
{
while($row=mysqli_fetch_array($result))
{
  $BranchesID=$row['1'];
  $teacher_id=$row['traning_name'];
   $teacher_id1=$row['teacher_id'];
  
  

?>
 <tr>
                        <td align="right">
						<p align="right"><? echo $row['id_card']; ?></td>
                        <td align="right">
						<p align="right"><? echo $row['teacher_name']; ?></td>
                        <td align="right">
 <? echo $row['Branches_name'];
?></td>
 
<?
if(isset($_POST['go']))
{
$date_to = $_POST['date_to'];  
$date_from = $_POST['date_from'];  
}
else
{
$date_to = date('Y-m-d');  
$date_from = date('Y-m-d', strtotime($date_to. ' - 7 day')); 
}
$date_from = strtotime($date_from); // Convert date to a UNIX timestamp  
$date_to = strtotime($date_to); // Convert date to a UNIX timestamp  
for ($i=$date_from; $i<=$date_to; $i+=86400) {  
   $dd=date("Y-m-d", $i); 
  $date=date("Y-m-d", $i); 
 if((date('l', strtotime($date))!="Friday") and    (date('l', strtotime($date))!="Saturday")) {

      ?>
    
                       <td align="center">
						<table border="0" width="100%" style="border-collapse: collapse">
							<tr>
								<td><p align="right"> 
<?
$date_ar1=$DateConv->GregorianToHijri($dd,$format);  
 
$query11 = "select count(stu_id) as co    from stu_sec,cors   where   stu_sec.section_Id=cors.ID and end_date>='$date_ar1'   and traning_name='$teacher_id1'";
$result11 = mysqli_query($conn,$query11);
while($row11=mysqli_fetch_array($result11))
{
  echo $row11['co'];  
 
 }
 
 ?>
 
								
								</td><td><p align="center"> 
:</td>
								<td bgcolor="#99FF99">
								<p align="left"> <?

$query11 = "select count(absence.ID_reg) as co from absence,stu_sec    where    stu_sec.ID_reg=absence.ID_reg and   
date_en='$dd' and absence.teacher='$teacher_id1'  and absence.type='1'";
$result11 = mysqli_query($conn,$query11);
while($row11=mysqli_fetch_array($result11))
{
?> <a href="student.php?teacher_id1=<? echo $teacher_id1; ?>&date=<? echo $dd; ?>"><? echo $row11['co']; ?></a>
<?
}
?> </td>
							</tr>
						</table>
						</td><? } } ?>                      </tr>
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

     