<?php
error_reporting(0);
include('session.php'); 
include('font.php'); 
include ("conn.php");
include ("conn.php");




 $day= date('l'); 
 $date_en= date('Y-m-d');
 $date_ar=ArabicTools::arabicDate('hj:Y-m-d', time());
 $mm= date('m');
 $year= date('Y'); 
 
                      if($day=="Saturday") $days="السبت";
                      elseif($day=="Sunday") $days="الاحد";
                      elseif($day=="Monday") $days="الاثنين";
                      elseif($day=="Tuesday") $days="الثلاثاء";
                      elseif($day=="Wednesday")   $days="الاربعاء";
                      elseif($day=="Thursday") $days="الخميس";
                      elseif($day=="Friday") $days="الجمعة";
                      else
                       $days= date('l'); 

$now= date('H:i:s');



$query = "select * from cors,subjects,teacher,branches,stu_sec
   where stu_sec.section_Id=cors.ID    and branches.Branches_ID=cors.Branches and  teacher.teacher_id=cors.traning_name and 
   subjects.cors_ID=cors.cors_ID and stu_id='$_SESSION[user_ID]'  ";
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
 
}

$sql="update absence  set   day='$days',date_en='$date_en',date_ar='$date_ar',type='1',manth='$mm',section_Id='$section_Id',
year='$year',time='$now',teacher='$traning_name'  where ID_reg='$ID_reg' and date_en='$date_en' ";
if(mysqli_query($conn,$sql))
{
 
}

}}
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

 <link href="https://fonts.googleapis.com/css?family=Amiri|Katibeh|Lateef|Scheherazade" rel="stylesheet">
<link href='https://fonts.googleapis.com/css?family=Droid%20Arabic%20Kufi' rel='stylesheet' type='text/css'>


<script type="text/javascript" src="jquery.js"></script>

 <SCRIPT src="jquery-1.3.2.min.js" type=text/javascript></SCRIPT>

<script type="text/javascript">

	$(document).ready(function(){
<?php   for($x=1;$x<=100;$x++) { ?>
		
		<?php if($x==1) { ?>		$("#one<?php   echo $x; ?>").slideDown(); <? } else { ?>		$("#one<?php   echo $x; ?>").hide();  <? } ?>
		<?php   } ?>
 

	<?php   for($x=1;$x<=100;$x++) { ?>
	$("#img<?php   echo $x; ?>").click(function(){

<?php   for($xx=1;$xx<=100;$xx++) { ?>

$("#one<?php   if($xx!=$x)echo $xx; ?>").hide();
<?php   } ?>
 

			if ($("#one<?php   echo $x; ?>").is(":hidden")){
				$("#one<?php   echo $x; ?>").slideDown();
			}
			else
			{
				$("#one<?php   echo $x; ?>").slideUp();
			}
		});

		<?php   } ?>
		
		

 
		
 
 


});
	</script>

<!-- Stylesheet -->
<link href="../css/bootstrap.min.css" rel="stylesheet" type="text/css">
<link href="../css/jquery-ui.min.css" rel="stylesheet" type="text/css">
<link href="../css/animate.css" rel="stylesheet" type="text/css">
<link href="../css/css-plugin-collections.css" rel="stylesheet"/>
<!-- CSS | menuzord megamenu skins -->
<link href="../css/menuzord-megamenu.css" rel="stylesheet"/>
<link id="menuzord-menu-skins" href="../css/menuzord-skins/menuzord-border-bottom.css" rel="stylesheet"/>
<!-- CSS | Main style file -->
<link href="../css/style-main-rtl.css" rel="stylesheet" type="text/css">
<!-- CSS | Preloader Styles -->
<link href="../css/preloader.css" rel="stylesheet" type="text/css">
<!-- CSS | Custom Margin Padding Collection -->
<link href="../css/custom-bootstrap-margin-padding.css" rel="stylesheet" type="text/css">
<!-- CSS | Responsive media queries -->
<link href="../css/responsive.css" rel="stylesheet" type="text/css">
<!-- CSS | RTL Layout -->
<link href="../css/bootstrap-rtl.min.css" rel="stylesheet" type="text/css">
<link href="../css/style-main-rtl-extra.css" rel="stylesheet" type="text/css">
<!-- CSS | Style css. This is the file where you can place your own custom css code. Just uncomment it and use it. -->
<!-- <link href="css/style.css" rel="stylesheet" type="text/css"> -->

<!-- Revolution Slider 5.x CSS settings -->
<link  href="../js/revolution-slider/css/settings.css" rel="stylesheet" type="text/css"/>
<link  href="../js/revolution-slider/css/layers.css" rel="stylesheet" type="text/css"/>
<link  href="../js/revolution-slider/css/navigation.css" rel="stylesheet" type="text/css"/>

<!-- CSS | Theme Color -->
<link href="../css/colors/theme-skin-color-set1.css" rel="stylesheet" type="text/css">

 

 
</head>
<body class="skin-blue">
<div class="wrapper">      
<? include("header.php"); ?>
<? include("sidebar.php"); ?>
<?
 
 include "Hijri_GregorianConvert.class";

$DateConv=new Hijri_GregorianConvert;


require ("conn.php");
if($_SESSION['login_type']==1) { 
$query = "select * from user where  username='$_SESSION[username]' and password='$_SESSION[password]' and go=1";
$result = mysqli_query($conn,$query);
$rows = mysqli_num_rows($result );
if ($rows== 1) {
while($row=mysqli_fetch_array($result))
{
}}
else {
?><meta http-equiv="refresh" content="0;url=updatePW.php"><?
}}
?>
<div class="content-wrapper">

<? if($_SESSION['acount_type']<=4) { ?>          

 <section class="content-header" dir=rtl>
<h1><small>   
الإحصائيات
</small></h1>
</section>

<section class="content" dir=rtl>
<div class="box box-info">
<div class="box-body">
      <?php if($cccc==77){ ?>
 <?  if($_SESSION['acount_type']!=2) { ?>
<form method="POST" action="">
 
       <div class="row">
 <div class="form-group col-lg-6    ">
<select  name="find"       style="font-family: Arial"  class="form-control" >
<option><? echo $_POST['find']; ?></option>
<option></option>
<option>دبلوم</option>
<option>دورة تأهلية</option>
<option>تطويري</option>
<option>لغة الإنجليزية</option>

</select>  
</div>


<div class="form-group col-lg-6    ">
<select style="font-family: Arial"   style="font-family: Arial"   size="1" name="Branches"          class="form-control"  >
 <option></option> 
<?
$query = "select * from branches    ";
$result = mysqli_query($conn,$query);
$rows = mysqli_num_rows($result );
if($rows > 0 )
{
while($row=mysqli_fetch_array($result))
{
?>

<option value="<? echo $row['Branches_ID']; ?>"><? echo $row['Branches_name']; ?></option>
<?php } } ?>
					</select>
					
					</div>
<div class="form-group col-lg-12    ">
                      <button class="btn btn-info btn-flat" type="submit">Go!</button>
</div>

</div>
 

 		</form><? }} ?>
 

 <div class="row">
 

            <div class="col-lg-3 col- lg-3">
              <div class="small-box bg-aqua">
                <div class="inner">
                  <h3> 
<?

 if($_POST[Branches]!='')            $xx=' and cors.Branches='.$_POST[Branches]; else $xx='';
 if($_POST[Branches]!='')            $xxx=' and stu_sec.Branches='.$_POST[Branches]; else $xxx='';


 if($_POST[Branches]!='')            $bre=1; else $bre=0;
 if($_POST[Branches]!='')            $bre=1; else $bre=0;
 if($_POST[find]!='')                $cor=1; else $cor=0;


include ("conn.php");
if($_SESSION['acount_type']==2)
{
$query = "select count(*) as co1 from cors where traning_name='$_SESSION[user_ID]' and ID>=0 $xx";
}
else
{
if($_POST['find']=="")
$query = "select count(*) as co1 from cors where ID>=0 $xx";
else
$query = "select count(*) as co1 from cors where   cors.cors_type='$_POST[find]' $xx";
}

$result = mysqli_query($conn,$query);
while($row=mysqli_fetch_array($result))
{
echo $en1=$row['co1'];
}
?>
                  </h3>
 
عددالدورات التدريبية
 
                </div>
                <div class="icon">
                  <i class="fa fa-bar-chart-o"></i>
                </div>
                .
              </div>
            </div>



<div class="col-lg-3 col- lg-3">
              <div class="small-box bg-yellow">
                <div class="inner">
                  <h3> 
<?
if($_SESSION['acount_type']==2)
{
$query = "select count(*) as co1 from cors where traning_name='$_SESSION[user_ID]' and end_date<'$ar_date' $xx";
}
else
{
if($_POST[find]=="")
$query = "select count(*) as co1 from cors where end_date<'$ar_date'   $xx ";
else
$query = "select count(*) as co1 from cors where end_date<'$ar_date' and cors.cors_type='$_POST[find]'   $xx";
}
$result = mysqli_query($conn,$query);
while($row=mysqli_fetch_array($result))
{
echo $en3=$row['co1'];
}
?>
                  </h3>
 
عددالدورات المنتهية
 
                </div>
                <div class="icon">
                  <i class="fa fa-bars"></i>
                </div>
                .
              </div>
            </div>
            
 <div class="col-lg-3 col- lg-3">
              <div class="small-box bg-blue">
                <div class="inner">
                  <h3> 
<?
if($_SESSION['acount_type']==2)
{
$query = "select count(*) as co1 from cors where traning_name='$_SESSION[user_ID]' and end_date>='$ar_date' $xx";
}
else
{
if($_POST[find]=="")
$query = "select count(*) as co1 from cors where end_date>='$ar_date'   $xx ";
else
$query = "select count(*) as co1 from cors where end_date>='$ar_date'  and cors.cors_type='$_POST[find]'   $xx";
}
$result = mysqli_query($conn,$query);
while($row=mysqli_fetch_array($result))
{
echo $en2=$row['co1'];
}
?>
                  </h3>
 
عددالدورات القائمة
 
                </div>
                <div class="icon">
                  <i class="fa  fa-th"></i>
                </div>
                .
              </div>
            </div>
            

 
<div class="col-lg-3 col- lg-3">
              <div class="small-box bg-Orange">
                <div class="inner">
                  <h3> 
<?
if($_SESSION['acount_type']==2)
{
$query = "select count(*) as co1 from cors,stu_sec where ID=section_Id and  traning_name='$_SESSION[user_ID]'   $xx";
}
else
{
if($_POST[find]=="")
$query = "select count(*) as co1 from cors,stu_sec where ID=section_Id    $xx ";
else
$query = "select count(*) as co1 from cors,stu_sec where ID=section_Id  and cors.cors_type='$_POST[find]'   $xx";
}
$result = mysqli_query($conn,$query);
while($row=mysqli_fetch_array($result))
{
echo $row['co1'];
}
?>
                  </h3>
 
عدد المتدربين
 
                </div>
                <div class="icon">
                  <i class="fa   fa-users"></i>
                </div>
                .
              </div>
            </div>


<div class="col-lg-3 col- lg-3">
              <div class="small-box bg-Maroon">
                <div class="inner">
                  <h3> 
<?
if($_SESSION['acount_type']==2)
{
$query = "select count(*) as co1 from cors,stu_sec where traning_name='$_SESSION[user_ID]' and ID=section_Id and end_date<'$ar_date'   $xx";
}
else
{
if($_POST[find]=="")
$query = "select count(*) as co1 from cors,stu_sec where ID=section_Id and end_date<'$ar_date'   $xx ";
else
$query = "select count(*) as co1 from cors,stu_sec where ID=section_Id and end_date<'$ar_date' and cors.cors_type='$_POST[find]'   $xx";
}
$result = mysqli_query($conn,$query);
while($row=mysqli_fetch_array($result))
{
echo $row['co1'];
}
?>
                  </h3>
 
عدد المتدربين المنتهي دوراتهم
 
                </div>
                <div class="icon">
                  <i class="fa   fa-user"></i>
                </div>
                .
              </div>
            </div>
            

<div class="col-lg-3 col- lg-3">
              <div class="small-box bg-Teal">
                <div class="inner">
                  <h3> 
<?
if($_SESSION['acount_type']==2)
{
$query = "select count(*) as co1 from cors,stu_sec where traning_name='$_SESSION[user_ID]' and  ID=section_Id and end_date>='$ar_date'   $xx";
}
else
{
if($_POST[find]=="")
$query = "select count(*) as co1 from cors,stu_sec where ID=section_Id and end_date>='$ar_date'   $xx ";
else
$query = "select count(*) as co1 from cors,stu_sec where ID=section_Id and end_date>='$ar_date'  and cors.cors_type='$_POST[find]'  $xx";
}
$result = mysqli_query($conn,$query);
while($row=mysqli_fetch_array($result))
{
echo $row['co1'];
}
?>
                  </h3>
 
عدد المتدربين القائم دوراتهم
 
                </div>
                <div class="icon">
                  <i class="fa   fa-child"></i>
                </div>
                .              </div>
            </div>
            
            
 
<div class="col-lg-3 col- lg-3">
              <div class="small-box bg-Danger">
                <div class="inner">
                  <h3> 
<?
if($_SESSION['acount_type']==2)
{
$query = "select count(*) as co1 from cors,stu_sec where traning_name='$_SESSION[user_ID]' and ID=section_Id and scor>=60   $xx";
}
else
{
if($_POST[find]=="")
$query = "select count(*) as co1 from cors,stu_sec where ID=section_Id and scor>=60   $xx";
else
$query = "select count(*) as co1 from cors,stu_sec where ID=section_Id and scor>=60 and cors.cors_type='$_POST[find]'   $xx";
}
$result = mysqli_query($conn,$query);
while($row=mysqli_fetch_array($result))
{
echo $row['co1'];
}
?>
                  </h3>
 عدد الخريجين

 
                </div>
                <div class="icon">
                  <i class="fa  fa-graduation-cap"></i>
                </div>
                .
              </div>
            </div>
            

<div class="col-lg-3 col- lg-3">
              <div class="small-box bg-olive">
                <div class="inner">
                  <h3> 
<?
if($_SESSION['acount_type']==2)
{
$query = "select count(*) as co1 from absence,stu_sec where teacher='$_SESSION[user_ID]' and date_en=CURDATE() and stu_sec.ID_reg=absence.ID_reg 
 $xxx";
}
else
{
if($_POST[find]=="")
$query = "select count(*) as co1 from absence,stu_sec where date_en=CURDATE() and stu_sec.ID_reg=absence.ID_reg   $xxx ";
else
$query = "select count(*) as co1 from absence,stu_sec where date_en=CURDATE() and stu_sec.ID_reg=absence.ID_reg and stu_sec.cors_type='$_POST[find]'   $xxx";
}
$result = mysqli_query($conn,$query);
while($row=mysqli_fetch_array($result))
{
echo $row['co1'];
}
?>
                  </h3>
 
عدد الحضور اليوم
 
                </div>
                <div class="icon">
                  <i class="fa  fa-calendar-check-o"></i>
                </div>
                .
              </div>
            </div>
            
            
  


          
            
            
            
          
            </div>
            </div>
            </div>
</section>


<section class="content">
           
          <div class="row">
            <div class="col-md-6">
              <!-- AREA CHART -->
              <div class="box box-primary">
                <div class="box-header">
                  <h3 class="box-title">رسم توضيحي لإجمالي الحضور والغياب من إجمالي المسجلين</h3>
                </div>
                <div class="box-body chart-responsive">
                  <div class="chart" id="revenue-chart" style="height: 300px;"></div>
                </div><!-- /.box-body -->
              </div><!-- /.box -->
              </div><!-- /.box -->

              <!-- DONUT CHART -->
              <div class="col-md-6">
              <div class="box box-danger">
                <div class="box-header">
                  <h3 class="box-title">الدورات التدريبية </h3>
                </div>
                <div class="box-body chart-responsive">
                  <div class="chart" id="sales-chart" style="height: 300px; position: relative;"></div>
                </div><!-- /.box-body -->
              </div><!-- /.box -->
              </div><!-- /.box -->

            </div><!-- /.col (LEFT) -->
            
                  <div class="row">
    
            <div class="col-md-6">
              <!-- LINE CHART -->
              <div class="box box-info">
                <div class="box-header">
                  <h3 class="box-title">    تقييم المتدربين</h3>
                </div>
                <div class="box-body chart-responsive">
                  <div class="chart" id="line-chart" style="height: 300px;"></div>
                </div><!-- /.box-body -->
              </div><!-- /.box -->
              </div><!-- /.box -->
              
              
              <div class="col-md-6">
              <!-- LINE CHART -->
              <div class="box box-info">
                <div class="box-header">
                  <h3 class="box-title">    تقيميات المدربين</h3>
                </div>
                <div class="box-body chart-responsive">
                  <div class="chart" id="line-chart1" style="height: 300px;"></div>
                </div><!-- /.box-body -->
              </div><!-- /.box -->
              </div>
              
              
              
            <!-- /.col (RIGHT) -->
          </div><!-- /.row -->



<div class="row">
    
           <div class="col-md-6">
              <!-- BAR CHART -->
              <div class="box box-success">
                <div class="box-header">
                  <h3 class="box-title">نتائج الاستبيان ( المتدربين)</h3>
                </div>
                <div class="box-body chart-responsive">
                  <div class="chart" id="bar-chart" style="height: 300px;"></div>  
                  <?php
$query = "select * from  questions_student ";
$result = mysqli_query($conn,$query);
$rows = mysqli_num_rows($result );
while($row=mysqli_fetch_array($result))
{
echo 'Q'.$row['question_ID'].' - '.$row['question'].'<br>';
}
?>
                </div><!-- /.box-body -->
              </div><!-- /.box -->
 
            </div><!-- /.box -->
            <div class="col-md-6">
              <!-- BAR CHART -->
              <div class="box box-success">
                <div class="box-header">
                  <h3 class="box-title">نتائج الاستبيان ( المدربين)</h3>
                </div>
                <div class="box-body chart-responsive">
                  <div class="chart" id="bar-chart1" style="height: 300px;"></div>  
                  <?php
$query = "select * from  questions_teacher ";
$result = mysqli_query($conn,$query);
$rows = mysqli_num_rows($result );
while($row=mysqli_fetch_array($result))
{
echo 'Q'.$row['question_ID'].' - '.$row['question'].'<br>';
}
?>
                </div><!-- /.box-body -->
              </div><!-- /.box -->
 
            </div><!-- /.col (RIGHT) -->
          </div>
          
 
<div class="row">

<div class="col-md-6">
              <!-- LINE CHART -->
              <div class="box box-info">
                <div class="box-header">
                  <h3 class="box-title">اعداد المسجلين </h3>
                </div>
                <div class="box-body chart-responsive">
                  <div class="chart" id="line-chart2" style="height: 300px;"></div>
                </div><!-- /.box-body -->
              </div><!-- /.box -->
</div>

<div class="col-md-6">

              <!-- BAR CHART -->
              <div class="box box-success">
                <div class="box-header">
                  <h3 class="box-title">الاختبارات</h3>
                </div>
                <div class="box-body chart-responsive">
                  <div class="chart" id="bar-chart2" style="height: 300px;"></div>
                </div><!-- /.box-body -->
              </div><!-- /.box -->

            </div>
            </div>
            
         
          
        </section>
        
        
        
<? if($_SESSION['acount_type']!=1) { ?>
<section class="content" dir=rtl>
<div class="box box-info">
<div class="box-body">
       <form method="POST" action="">
 
       <div class="row">
 
 <div class="form-group col-lg-12    ">
 <?
 $query1 = "select *   from teacher  where   username='$_SESSION[username]'";
$result1 = mysqli_query($conn,$query1);
while($row1=mysqli_fetch_array($result1))
{
  $cors=$row1['cors'];
}
 ?>
 <?
 
include ("conn.php");
if($_SESSION['acount_type']==2)
$query = "select *  from teacher,branches      where   branches.Branches_ID=teacher.Branches   and teacher.username='$_SESSION[username]' order by Branches_name DESC";
elseif($_SESSION['acount_type']==3)
$query = "select *   from teacher,branches   where branches.Branches_ID=teacher.Branches and teacher.Branches='$_SESSION[Branches]' ";
 


$result = mysqli_query($conn,$query);
$rows = mysqli_num_rows($result );
if($rows > 0 )
{
?>
 <table id="example1" class="table table-bordered table-striped"  >
                    <thead>
                      <tr>
                        <th align="right" rowspan="2" style="text-align: center"><p align="center">المدرس</th>
                         
<?
$date_to = date('Y-m-d');  

$date_from = date('Y-m-d', strtotime($date_to. ' - 7 day')); 
$date_from = strtotime($date_from); // Convert date to a UNIX timestamp  
$date_to = strtotime($date_to); // Convert date to a UNIX timestamp  
for ($i=$date_from; $i<=$date_to; $i+=86400) {
$date=date("Y-m-d", $i); 
 if((date('l', strtotime($date))!="Friday") and    (date('l', strtotime($date))!="Saturday")) {
      ?>
    
                       <th align="center"><p align="center">
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
$date_to = date('Y-m-d');  

$date_from = date('Y-m-d', strtotime($date_to. ' - 7 day')); 
$date_from = strtotime($date_from); // Convert date to a UNIX timestamp  
$date_to = strtotime($date_to); // Convert date to a UNIX timestamp  
for ($i=$date_from; $i<=$date_to; $i+=86400) {  
$date=date("Y-m-d", $i); 
 if((date('l', strtotime($date))!="Friday") and    (date('l', strtotime($date))!="Saturday")) {

      ?>                       <th align="center"><p align="center"><? echo $date; ?></th><? } } ?>
                       
                       
                       
                      </tr>
                    </thead>
                    <tbody>
 <? 

while($row=mysqli_fetch_array($result))
{
  $BranchesID=$row['1'];
   $teacher_id=$row['traning_name'];
  $teacher_id1=$row['teacher_id'];
  
  

?>
 <tr>
                        <td align="center">
						<p align="center"><? echo $row['teacher_name']; ?></td>
 
<?
$date_to = date('Y-m-d');  

$date_from = date('Y-m-d', strtotime($date_to. ' - 7 day')); 

$date_from = strtotime($date_from); // Convert date to a UNIX timestamp  
$date_to = strtotime($date_to); // Convert date to a UNIX timestamp  
for ($i=$date_from; $i<=$date_to; $i+=86400) {  
  $dd=date("Y-m-d", $i); 
  $date=date("Y-m-d", $i); 
 if((date('l', strtotime($date))!="Friday") and    (date('l', strtotime($date))!="Saturday")) {

      ?>
    
                       <td align="center">
<?
$query11 = "select count(absence.ID_reg) as co from absence,stu_sec   where    stu_sec.ID_reg=absence.ID_reg and   
date_en='$dd' and absence.teacher='$teacher_id1' and absence.type='1'";
$result11 = mysqli_query($conn,$query11);
while($row11=mysqli_fetch_array($result11))
{
?> <a href="student.php?teacher_id1=<? echo $teacher_id1; ?>&date=<? echo $dd; ?>"><? echo $row11['co']; ?></a>
<?
}
?> </td><? } } ?>                      </tr>
                    <? }  ?>
                    </tbody>
                     
                  </table><? } ?>
</div>
</div>
</div>
</div>
<? }} ?>
 
 
 






<?
if($_SESSION['acount_type']==6)
{
?>

 
 

 



 
  
 
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

 <form action="" method=post>
<div class="input-group input-group-sm col-lg-4" dir=ltr>
                    <div class="input-group-btn">
                      <button type="submit" class="btn btn-Warning btn-sm"><i class='fa fa-filter btn-sm' dir=ltr></i></button>
                    </div><!-- /btn-group -->
                    <input type="text" class="form-control"   required="required"  value="<?php echo $_POST['find']; ?>" name="find" dir=rtl 
                    placeholder="بحث في المحتوي الرقمي">
                  </div>
</form>


<div class="row mtli-row-clearfix"> 
                 
                <?
                
$find=$_POST['find'];
 if($_POST['find']=="")                 
$query = "select * from cors,subjects,teacher,branches,stu_sec
   where stu_sec.section_Id=cors.ID    and branches.Branches_ID=cors.Branches and  teacher.teacher_id=cors.traning_name and 
   subjects.cors_ID=cors.cors_ID and stu_id='$_SESSION[user_ID]'  order by cors_no ASC";
   else
$query = "select * from cors,subjects,teacher,branches,stu_sec
   where stu_sec.section_Id=cors.ID    and branches.Branches_ID=cors.Branches and  teacher.teacher_id=cors.traning_name and 
   subjects.cors_ID=cors.cors_ID and stu_id='$_SESSION[user_ID]'  and  ( cors_name like '%$_POST[find]%' or   short_desc_ar  like '%$_POST[find]%' ) order by cors_no ASC";

   
$result = mysqli_query($conn,$query);
$rows = mysqli_num_rows($result );

$rows=mysqli_num_rows($result) ; 
if($rows > 0 )
{
while($row=mysqli_fetch_array($result))
{

?>  
 
          <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4">
            <div class="course-single-item style2 text-center mb-40">
              <div class="course-thumb">
              <?
              $imagePath = "cors_files/".$row['photo'];
if(!file_exists($imagePath) or $row['photo']=="")
    $imagePath = "../images/portfolio/default.webp";
    else
              $imagePath = "cors_files/".$row['photo'];
    ?>
                <a href="course_details.php?ID_reg=<? echo $row['ID_reg']; ?>"><img class="img-fullwidth" alt="" src="<? echo $imagePath; ?>" style="width:360px;height:250px"></a>
                
                
                
                <div class="price-tag"> رقم الدورة : <?  echo $row['cors_no']; ?> </div>
 
 
              </div>
              <div class="course-details border-1px clearfix p-15 pt-15">
                <div class="course-top-part">
                   <a href="course_details.php?ID_reg=<? echo $row['ID_reg']; ?>"> 
					<font size="3"> <? echo $row['cors_name'];
                   //echo strlen($row['cors_name']);
                   if(strlen($row['cors_name'])<=100) echo "<p>&nbsp;</p>";
                    ?></font></h5></a> 

                </div>
                <div class="author-thumb">
                 <?
$result1=mysqli_query($conn,"select* FROM user_crmwhere ID='$row[traning_name]'");
while($row1=mysqli_fetch_array($result1))
{
 ?><img src="stus/emp/<? echo $row1['image']; ?>" style="width:54px;height:54px" alt="" class="img-circle"><? } ?>
 
                </div>
                <p class="course-description mt-5"><? echo substr($row['short_desc_ar'],0,180); ?></p>
                                                    <i class="fa fa-flag"></i> <font color="#FF0000"><? echo $row['cors_online']; ?> </font> <i class="fa fa-clock-o"></i> <font color="#FF0000"><? echo $row['cors_time']; ?></font>

             <?php 
$query3 = "select count(*) as co from lesson_questions,lessons where lessons.cors_ID='$row[cors_ID]' and lessons.lessons_ID=lesson_questions.cors_ID ORDER BY rand()";
$result3 = mysqli_query($conn,$query3);
$rows3 = mysqli_num_rows($result3 );
while($row3=mysqli_fetch_array($result3))
{
  $C1=$row3['co'];
}


$query3 = "select count(*) as co1 from test_lessons,lesson_questions,lessons   where
 lessons.cors_ID='$row[cors_ID]' and ID_reg='$row[ID_reg]' and test_lessons.question_ID=lesson_questions.question_ID  and lessons.lessons_ID=lesson_questions.cors_ID";
$result3 = mysqli_query($conn,$query3);
$rows3 = mysqli_num_rows($result3 );
while($row3=mysqli_fetch_array($result3))
{
     $C2=$row3['co1'];
}
   $all=$C2/$C1*100
?>  
                         <div class="clearfix">
                        <span class="pull-left">نسبة التقدم</span>
                        <small class="pull-right"><?php echo $all; ?>%</small>
                      </div>
                      <div class="progress xs">
                        <div class="progress-bar progress-bar-green" style="width: <?php echo $all; ?>%;"></div>
                      </div>
 </div>
              <div class="course-meta bg-silver-deep">
                <ul class="list-inline">
                  <li><i class="fa fa-calendar text-theme-colored2 mr-5"></i>  <? echo $row['credits']; ?> ساعة</li>
                  <li><i class="fa fa-book text-theme-colored2 mr-5"></i> <? echo $row['contact_hours']; ?> </li>
                  <li><a href="course_details.php?ID_reg=<? echo $row[ID_reg]; ?>&cors_ID=<? echo $row[cors_ID]; ?>"  class="btn  btn-theme-colored2    ">  استئناف الدورة <i class="fa fa-play-circle"></i></a></li>
                </ul>
              </div>
            </div>
          </div>
 
<? } } ?>           
        </div>
                </div> 
 

                  </div>
</div>
</section>
 



<? } ?>

<!-- /.content-wrapper -->
<?  //include('footer.php'); ?>
    <!-- jQuery 2.1.3 -->
    <script src="plugins/jQuery/jQuery-2.1.3.min.js"></script>
    <!-- Bootstrap 3.3.2 JS -->
    <script src="bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
    <!-- Morris.js charts -->
    <script src="http://cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
    <script src="plugins/morris/morris.min.js" type="text/javascript"></script>
    <!-- FastClick -->
    <script src='plugins/fastclick/fastclick.min.js'></script>
    <!-- AdminLTE App -->
    <script src="dist/js/app.min.js" type="text/javascript"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="dist/js/demo.js" type="text/javascript"></script>
    <!-- page script -->
    <script type="text/javascript">
      $(function () {
        "use strict";

        // AREA CHART
        var area = new Morris.Area({
          element: 'revenue-chart',
          resize: true,
          data: [
          
<?
$date_to = date('Y-m-d');  

$date_from = date('Y-m-d', strtotime($date_to. ' - 7 day')); 
$date_from = strtotime($date_from); // Convert date to a UNIX timestamp  
$date_to = strtotime($date_to); // Convert date to a UNIX timestamp  
for ($i=$date_from; $i<=$date_to; $i+=86400) { 
   $dd=date("Y-m-d", $i); 
 
 
$date=date("Y-m-d", $i); 
 /* if((date('l', strtotime($date))!="Friday") and    (date('l', strtotime($date))!="Saturday")) { */

$CC1=0;
if($_SESSION['acount_type']==2)
$query11 = "select count(absence.ID_reg) as co from absence,stu_sec   where    stu_sec.ID_reg=absence.ID_reg and   
date_en='$date' and absence.teacher='$teacher_id1' and absence.type='1'";
else
$query11 = "select count(absence.ID_reg) as co from absence,stu_sec   where    stu_sec.ID_reg=absence.ID_reg and   
date_en='$date' and   absence.type='1'";

$result11 = mysqli_query($conn,$query11);
while($row11=mysqli_fetch_array($result11))
{
$CC1=$row11['co'];
}

 
$CC2=0;
 
if($_SESSION['acount_type']==2)
$query11 = "select count(stu_id) as co    from stu_sec,cors   where   stu_sec.section_Id=cors.ID  and end_date>='$ar_date'    and traning_name='$teacher_id1'";
else
$query11 = "select count(stu_id) as co    from stu_sec,cors   where   stu_sec.section_Id=cors.ID  and end_date>='$ar_date'    ";
$result11 = mysqli_query($conn,$query11);
while($row11=mysqli_fetch_array($result11))
{
$CC2=$row11['co'];  
 
}
 

      ?> 
            {y: '<?php echo $date; ?>', item1: <?php echo $CC2; ?>, item2: <?php echo $CC1; ?> , item3: <?php echo $CC2-$CC1; ?>},

<?} /* } */ ?>
 
          ],
          xkey: 'y',
          ykeys: ['item1', 'item2', 'item3'],
          labels: ['الاجمالي', 'الحضور', 'الغياب'],
          lineColors: ['#a0d0e0', '#3c8dbc', '#ffcfcf'],
          hideHover: 'auto'
        });

        // LINE CHART
        var line = new Morris.Line({
          element: 'line-chart2',
          resize: true,
          data: [
<?php
if($_SESSION['acount_type']==2)
$query11 = "SELECT  DISTINCT DATE_FORMAT(`reg_date`, '%Y-%m') as 'date',count(*) as num FROM stu_sec,cors where cors.ID=stu_sec.section_Id and  traning_name='$teacher_id1' GROUP by date";
else
$query11 = "SELECT  DISTINCT DATE_FORMAT(`reg_date`, '%Y-%m') as 'date',count(*) as num FROM stu_sec,cors where cors.ID=stu_sec.section_Id GROUP by date ";
$result11 = mysqli_query($conn,$query11);
while($row11=mysqli_fetch_array($result11))
{
?>

            {y: '<?php echo $row11[date]; ?>', item1: <?php echo $row11[num]; ?>},
<?php } ?>
 
 
          ],
          xkey: 'y',
          ykeys: ['item1'],
          labels: ['اعداد المسجلي'],
          lineColors: ['#3ea600'],
          hideHover: 'auto'
        });
        
        
        
        // LINE CHART
        var line = new Morris.Bar({
          element: 'line-chart',
          resize: true,
          data: [
          
           <?php
           
if($_SESSION['acount_type']==2)
$query1 = "select DISTINCT stu_choice,count(*) as co from  	test_trainee_evaluation,cors  where cors.ID=test_trainee_evaluation.cors_ID and  stu_choice!='' and traning_name='$teacher_id1' GROUP by stu_choice";
else
$query1 = "select DISTINCT stu_choice,count(*) as co from  	test_trainee_evaluation       where  stu_choice!='' GROUP by stu_choice";
$result1 = mysqli_query($conn,$query1);
$rows1 = mysqli_num_rows($result1 );
while($row1=mysqli_fetch_array($result1))
{
?>
            {y: '<?php echo $row1[stu_choice]; ?>', item1: <?php echo $row1[co]; ?>},

<?php
}
?> 
 
          ],
          xkey: 'y',
          ykeys: ['item1'],
          labels: ['عدد التقيمات'],
          lineColors: ['#fcff00'],
          hideHover: 'auto'
        });


        // LINE CHART
        var line = new Morris.Bar({
          element: 'line-chart1',
          resize: true,
          data: [
          
           <?php
if($_SESSION['acount_type']==2)
$query1 = "select DISTINCT stu_choice,count(*) as co from  	test_teacher_evaluation  where  stu_choice!='' and ID_reg='$_SESSION[user_ID]' GROUP by stu_choice";
else
$query1 = "select DISTINCT stu_choice,count(*) as co from  	test_teacher_evaluation  where  stu_choice!='' GROUP by stu_choice";
$result1 = mysqli_query($conn,$query1);
$rows1 = mysqli_num_rows($result1 );
while($row1=mysqli_fetch_array($result1))
{
?>
            {y: '<?php echo $row1[stu_choice]; ?>', item1: <?php echo $row1[co]; ?>},

<?php
}
?> 
 
          ],
 

          xkey: 'y',
          ykeys: ['item1'],
          labels: ['عدد التقيمات'],
          lineColors: ['#f56954'],
          hideHover: 'auto'
        });
        
        
        
        //DONUT CHART
        var donut = new Morris.Donut({
          element: 'sales-chart',
          resize: true,
          colors: ["#3c8dbc", "#f56954", "#00a65a", "#00b65a", "#03a65a"],
          data: [
            {label: "عددالدورات التدريبية", value: <?php echo $en1; ?>},
            {label: "عددالدورات المنتهية", value: <?php echo $en3; ?>},
            {label: "عددالدورات القائمة", value: <?php echo $en2; ?>}
 
          ],
          hideHover: 'auto'
        });
        
        //BAR CHART
        var bar = new Morris.Bar({
          element: 'bar-chart2',
          resize: true,
          data: [
          
           <?php
           $G1=0;
           $G2=0;
           $G3=0;
           $G4=0;
           $G5=0;
if($_SESSION['acount_type']==2)
$query1 = "select ID_reg, lessons.cors_ID 'Cors', (select count(*) from lesson_questions,lessons where lessons.lessons_ID=lesson_questions.cors_ID and lessons.cors_ID=Cors) as 'alltotal',
 sum(scor) 'Stu_scor', (sum(scor)/(select count(*) from lesson_questions,lessons where lessons.lessons_ID=lesson_questions.cors_ID and lessons.cors_ID=Cors)*100) as 'Ratio' 
 from test_lessons,lesson_questions,lessons where test_lessons.question_ID=lesson_questions.question_ID and lessons.lessons_ID=lesson_questions.cors_ID and
 lessons.cors_ID in (select ID from cors where traning_name='$_SESSION[user_ID]') GROUP by ID_reg, lessons.cors_ID";

 
else
$query1 = "select ID_reg, lessons.cors_ID 'Cors', (select count(*) from lesson_questions,lessons where lessons.lessons_ID=lesson_questions.cors_ID and lessons.cors_ID=Cors) as 'alltotal',
 sum(scor) 'Stu_scor', (sum(scor)/(select count(*) from lesson_questions,lessons where lessons.lessons_ID=lesson_questions.cors_ID and lessons.cors_ID=Cors)*100) as 'Ratio' 
 from test_lessons,lesson_questions,lessons where test_lessons.question_ID=lesson_questions.question_ID and lessons.lessons_ID=lesson_questions.cors_ID GROUP by ID_reg, lessons.cors_ID";
 
$result1 = mysqli_query($conn,$query1);
$rows1 = mysqli_num_rows($result1 );
while($row1=mysqli_fetch_array($result1))
{
if($row1['Ratio']>=90) $G1++;
elseif($row1['Ratio']>=80) $G2++;
elseif($row1['Ratio']>=70) $G3++;
elseif($row1['Ratio']>=60) $G4++;
else
$G5++;
}
?>            

{y: 'ممتاز', a: '<?php echo $G1; ?>', b: 0},
{y: 'جيد جدا', a: '<?php echo $G2; ?>', b: 0},
{y: 'جيد', a: '<?php echo $G3; ?>', b: 0},
{y: 'مقبول', a: '<?php echo $G4; ?>', b: 0},
{y: 'راسب', a: '<?php echo $G5; ?>', b: 0},

 
          ],
 
          xkey: 'y',
          ykeys: ['a' ],
          labels: ['العدد' ],
          hideHover: 'auto'
        });



        //BAR CHART
        var bar = new Morris.Bar({
          element: 'bar-chart',
          resize: true,
          data: [

<?php
$query = "select * from  questions_student ";
$result = mysqli_query($conn,$query);
$rows = mysqli_num_rows($result );
while($row=mysqli_fetch_array($result))
{
$C1=0;

if($_SESSION['acount_type']==2)
$query1 = "select count(*) as co from  	test_trainee_evaluation,cors  where  question_ID='$row[question_ID]'   and  cors.ID=test_trainee_evaluation.cors_ID and  stu_choice='ممتاز' and traning_name='$teacher_id1' ";
else
$query1 = "select count(*) as co from  	test_trainee_evaluation where question_ID='$row[question_ID]'   and  stu_choice='ممتاز'";
$result1 = mysqli_query($conn,$query1);
$rows1 = mysqli_num_rows($result1 );
while($row1=mysqli_fetch_array($result1))
{
$C1=$row1['co'];
}

$C2=0;
if($_SESSION['acount_type']==2)
$query1 = "select count(*) as co from  	test_trainee_evaluation,cors  where  question_ID='$row[question_ID]'   and  cors.ID=test_trainee_evaluation.cors_ID and  stu_choice='جيد جدا' and traning_name='$teacher_id1' ";
else
$query1 = "select count(*) as co from  	test_trainee_evaluation where question_ID='$row[question_ID]'   and  stu_choice='جيد جدا'";
$result1 = mysqli_query($conn,$query1);
$rows1 = mysqli_num_rows($result1 );
while($row1=mysqli_fetch_array($result1))
{
$C2=$row1['co'];
}


$C3=0;
if($_SESSION['acount_type']==2)
$query1 = "select count(*) as co from  	test_trainee_evaluation,cors  where  question_ID='$row[question_ID]'   and  cors.ID=test_trainee_evaluation.cors_ID and  stu_choice='جيد' and traning_name='$teacher_id1' ";
else
$query1 = "select count(*) as co from  	test_trainee_evaluation where question_ID='$row[question_ID]'   and  stu_choice='جيد'";
$result1 = mysqli_query($conn,$query1);
$rows1 = mysqli_num_rows($result1 );
while($row1=mysqli_fetch_array($result1))
{
$C3=$row1['co'];
}

$C4=0;
if($_SESSION['acount_type']==2)
$query1 = "select count(*) as co from  	test_trainee_evaluation,cors  where  question_ID='$row[question_ID]'   and  cors.ID=test_trainee_evaluation.cors_ID and  stu_choice='مقبول' and traning_name='$teacher_id1' ";
else
$query1 = "select count(*) as co from  	test_trainee_evaluation where question_ID='$row[question_ID]'   and  stu_choice='مقبول'";
$result1 = mysqli_query($conn,$query1);
$rows1 = mysqli_num_rows($result1 );
while($row1=mysqli_fetch_array($result1))
{
$C4=$row1['co'];
}


$C5=0;
if($_SESSION['acount_type']==2)
$query1 = "select count(*) as co from  	test_trainee_evaluation,cors  where  question_ID='$row[question_ID]'   and  cors.ID=test_trainee_evaluation.cors_ID and  stu_choice='سيئ جدا' and traning_name='$teacher_id1' ";
else
$query1 = "select count(*) as co from  	test_trainee_evaluation where question_ID='$row[question_ID]'   and  stu_choice='سيئ جدا'";
$result1 = mysqli_query($conn,$query1);
$rows1 = mysqli_num_rows($result1 );
while($row1=mysqli_fetch_array($result1))
{
$C5=$row1['co'];
}


?>            {y: 'Q<?php echo $row[question_ID]; ?>', a: <?php echo $C1; ?>, b: <?php echo $C2; ?>, c: <?php echo $C3; ?>, d: <?php echo $C4; ?>, e: <?php echo $C5; ?>},

<?php } ?> 
          ],
 
          xkey: 'y',
          ykeys: ['a', 'b', 'c', 'd', 'e'],
          labels: ['ممتاز', 'جيد جدا','جيد','مقبول','سيئ جدا'],
          hideHover: 'auto'
        });
        
        
        
         //BAR CHART
        var bar = new Morris.Bar({
          element: 'bar-chart1',
          resize: true,
          data: [

<?php
$query = "select * from  questions_teacher";
$result = mysqli_query($conn,$query);
$rows = mysqli_num_rows($result );
while($row=mysqli_fetch_array($result))
{
$C1=0;

if($_SESSION['acount_type']==2)
$query1 = "select count(*) as co from  	test_teacher_evaluation where question_ID='$row[question_ID]'   and  stu_choice='ممتاز' and ID_reg='$_SESSION[user_ID]'  ";
else
$query1 = "select count(*) as co from  	test_teacher_evaluation where question_ID='$row[question_ID]'   and  stu_choice='ممتاز'";
$result1 = mysqli_query($conn,$query1);
$rows1 = mysqli_num_rows($result1 );
while($row1=mysqli_fetch_array($result1))
{
$C1=$row1['co'];
}

$C2=0;
if($_SESSION['acount_type']==2)
$query1 = "select count(*) as co from  	test_teacher_evaluation where question_ID='$row[question_ID]'   and  stu_choice='جيد جدا' and ID_reg='$_SESSION[user_ID]'  ";
else
$query1 = "select count(*) as co from  	test_teacher_evaluation where question_ID='$row[question_ID]'   and  stu_choice='جيد جدا'";
$result1 = mysqli_query($conn,$query1);
$rows1 = mysqli_num_rows($result1 );
while($row1=mysqli_fetch_array($result1))
{
$C2=$row1['co'];
}


$C3=0;
if($_SESSION['acount_type']==2)
$query1 = "select count(*) as co from  	test_teacher_evaluation where question_ID='$row[question_ID]'   and  stu_choice='جيد' and ID_reg='$_SESSION[user_ID]'  ";
else
$query1 = "select count(*) as co from  	test_teacher_evaluation where question_ID='$row[question_ID]'   and  stu_choice='جيد'";
$result1 = mysqli_query($conn,$query1);
$rows1 = mysqli_num_rows($result1 );
while($row1=mysqli_fetch_array($result1))
{
$C3=$row1['co'];
}

$C4=0;
if($_SESSION['acount_type']==2)
$query1 = "select count(*) as co from  	test_teacher_evaluation where question_ID='$row[question_ID]'   and  stu_choice='مقبول' and ID_reg='$_SESSION[user_ID]'  ";
else
$query1 = "select count(*) as co from  	test_teacher_evaluation where question_ID='$row[question_ID]'   and  stu_choice='مقبول'";
$result1 = mysqli_query($conn,$query1);
$rows1 = mysqli_num_rows($result1 );
while($row1=mysqli_fetch_array($result1))
{
$C4=$row1['co'];
}


$C5=0;
if($_SESSION['acount_type']==2)
$query1 = "select count(*) as co from  	test_teacher_evaluation where question_ID='$row[question_ID]'   and  stu_choice='سيئ جدا' and ID_reg='$_SESSION[user_ID]'  ";
else
$query1 = "select count(*) as co from  	test_teacher_evaluation where question_ID='$row[question_ID]'   and  stu_choice='سيئ جدا'";
$result1 = mysqli_query($conn,$query1);
$rows1 = mysqli_num_rows($result1 );
while($row1=mysqli_fetch_array($result1))
{
$C5=$row1['co'];
}


?>            {y: 'Q<?php echo $row[question_ID]; ?>', a: <?php echo $C1; ?>, b: <?php echo $C2; ?>, c: <?php echo $C3; ?>, d: <?php echo $C4; ?>, e: <?php echo $C5; ?>},

<?php } ?> 
          ],
 

          xkey: 'y',
          ykeys: ['a', 'b', 'c', 'd', 'e'],
          labels: ['ممتاز', 'جيد جدا','جيد','مقبول','سيئ جدا'],
          hideHover: 'auto'
        });



      });
    </script>    </div><!-- ./wrapper -->

<footer class="main-footer  ">
        <div class="pull-right hidden-xs">
          <b>Version</b> 2.0
        </div>
        <strong>Copyright © 2021 .</strong> All rights reserved.
      </footer>
  </body>
</html>

    