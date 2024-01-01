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
$query = "select * from student  where  stu_id='$_SESSION[user_ID]'  ";
$result = mysqli_query($conn,$query);
while($row=mysqli_fetch_array($result))
{
 echo $row['stu_name_ar'];
 $mobile=$row['mobile'];
   $iqama=$row['iqama'];
  
  }
  
  $iqama2=0;
$query1 = "select * from open_test where  iqama='$iqama'  ";
$result1 = mysqli_query($conn,$query1);
while($row1=mysqli_fetch_array($result1))
{
   $iqama2=$row1['iqama'];
}


?></small></h1>
</section>

 



 
<section class="content" dir=rtl>
<div class="box box-info">
<div class="box-body">

 
                     <?
include ("conn.php");
$query = "select * from student  where  stu_id='$_SESSION[user_ID]'";
$result = mysqli_query($conn,$query);
$rows = mysqli_num_rows($result );
if($rows > 0 )
{
while($row=mysqli_fetch_array($result))
{
  $BranchesID=$row['1'];
  $teacher_id=$row['traning_name'];
?>
  
 
<div class="form-group col-lg-12"><label>الاسم</label><? echo $row['stu_name_ar']; ?>  </div>
<div class="form-group col-lg-12"><label>رقم الهوية</label><? echo $row['iqama']; ?>  </div>
<div class="form-group col-lg-12"><label>الجنسية</label><? echo $row['Nationality']; ?></div>
<div class="form-group col-lg-12"><label>الجوال</label><? echo $row['mobile']; ?> </div>
<div class="form-group col-lg-12"><label>البريد الالكتروني</label><? echo $row['email']; ?> </div>

 					<p align="center">

 <? }} ?>
 

             
<?
  $stud_inv=0;
  $stud_pay=0;
  $balance=0;
 
$query6 = "select * from stud_data_master where  stud_id='$_SESSION[user_ID]'  ";
$result6 = mysqli_query($conn,$query6);
$rows6 = mysqli_num_rows($result6 );
if($rows6 > 0 )
{
while($row6=mysqli_fetch_array($result6))
{
?><tr>
                        <?   $stud_inv=$row6['stud_inv']; ?>
                        <?   $stud_pay=$row6['stud_pay']; ?><?   $balance=$row6['balance']; ?> 
<?
} } else {
?> 
 <?   $stud_inv=$row6['stud_inv']; ?> <?   $stud_pay=$row6['stud_pay']; ?>  <? //echo $balance="1"."-غير مسجل"; ?> <? } ?>

		   
    <?
    include ("conn.php");
$query = "select * from cors,subjects,teacher,branches,stu_sec
   where stu_sec.section_Id=cors.ID    and branches.Branches_ID=cors.Branches and  teacher.teacher_id=cors.traning_name and 
   subjects.cors_ID=cors.cors_ID and stu_id='$_SESSION[user_ID]'  order by cors_no DESC";
$result = mysqli_query($conn,$query);
$rows = mysqli_num_rows($result );
if($rows > 0 )
{
while($row=mysqli_fetch_array($result))
{

?>           
                  </p>
                  <table id="example1f" class="table table-bordered table-striped" dir=rtl  >
                    <thead>
                      <tr>
                          <th  width=100><p align=center>
						رقم الدورة</th>
                         
                         <th  ><p align=center>
						الدورة</th>
                         
                         <th width=1><p align=center>محتوي الدورة</th>
                       
                      </tr>
                    </thead>
                    <tbody>
                     <?

  $BranchesID=$row['1'];
  $teacher_id=$row['traning_name'];
    $cors_type=$row['cors_type'];
    $absences_co=$row['absences'];
$end_date=$row['end_date'];
  $absences=$row['absences'];
?>
 
 <tr>
                        <form method="POST" action="">
 
                        <td align="center">
						<? echo $row['cors_no']; ?></td>
 
 
                        <td align="center">
						<? echo $row['cors_name']; ?><input type="hidden" name="ID_reg" size="20" value="<? echo $row['ID_reg']; ?>"></td>
 
 
   <td align="center">
  <? 
$query1 = "select count(*) as co    from content   where   section_Id='$row[0]'";
$result1 = mysqli_query($conn,$query1);
while($row1=mysqli_fetch_array($result1))
{
 ?> <a href="content1.php?section_Id=<? echo $row['0']; ?>" class="      btn btn-Danger  btn-sm ">  <? echo $row1['co']; ?> - استعراض </a> <?
 }
 ?></td>
 
 
                      	 </form>

                      </tr>
                  
						 
                    </tbody>
                     
                  </table> <br><br><br><br><?  }} ?>
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



$query = "select * from cors,subjects,teacher,branches,stu_sec
   where stu_sec.section_Id=cors.ID    and branches.Branches_ID=cors.Branches and  teacher.teacher_id=cors.traning_name and 
   subjects.cors_ID=cors.cors_ID and stu_id='$_SESSION[user_ID]'  and end_date_en>='$date_en' and start_date_en<='$date_en'";
$result = mysqli_query($conn,$query);
$rows = mysqli_num_rows($result );
if($rows > 0 )
{
while($row=mysqli_fetch_array($result))
{
  $ID_reg=$row['ID_reg'];
  $section_Id=$row['section_Id'];
  $traning_name=$row['traning_name'];
$sql="insert into absence set ID_reg='$ID_reg',day='$days',date_en='$date_en',date_ar='$date_ar',type='1',manth='$mm',section_Id='$section_Id',
year='$year',time='$now',teacher='$traning_name'";
if(mysqli_query($conn,$sql))
{
?><meta http-equiv="refresh" content="120;url=<?php echo( $self ); ?>"><?
}

$sql="update absence  set  type='1',teacher='$traning_name'  where ID_reg='$ID_reg' and date_en='$date_en' ";
if(mysqli_query($conn,$sql))
{
?><meta http-equiv="refresh" content="120;url=<?php echo( $self ); ?>"><?
}

}}


 
 

 
?>