<?php
error_reporting(0);
include('session.php'); 
include('font.php'); 
include ("conn.php");
$query9 = "select * from web_settings";
$result9 = mysqli_query($conn,$query9);
while($row9=mysqli_fetch_array($result9))
{
 $site_name=$row9['site_name'];
 $site_name_en=$row9['site_name_en'];
 $site_mobile=$row9['site_mobile'];
 $site_email=$row9['site_email'];
 $site_address=$row9['site_address'];
 $site_address=$row9['site_address_en'];
 $site_url=$row9['site_url'];
 $secretKey=$row9['secretKey'];
 $sitKey=$row9['sitKey'];
 $site_map=$row9['site_map'];
  
}

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


 

 

<style>
<!--
 p.MsoNormal
	{mso-style-parent:"";
	margin-top:0cm;
	margin-right:0cm;
	margin-bottom:8.0pt;
	margin-left:0cm;
	line-height:107%;
	font-size:11.0pt;
	font-family:"Calibri",sans-serif;
	}
-->
</style>


 

 

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

 


                <?php
   $ID_reg= mysqli_real_escape_string($conn,htmlspecialchars(intval($_GET['ID_reg']), ENT_QUOTES, "utf-8")); 
$query = "select * from cors,subjects,teacher,branches,stu_sec
   where stu_sec.section_Id=cors.ID    and branches.Branches_ID=cors.Branches and  teacher.teacher_id=cors.traning_name and 
   subjects.cors_ID=cors.cors_ID and ID_reg='$ID_reg'  order by cors_no DESC";
$result = mysqli_query($conn,$query);
$rows = mysqli_num_rows($result );

$rows=mysqli_num_rows($result) ; 
if($rows > 0 )
{
while($row=mysqli_fetch_array($result))
{

?>
 
<section class="content" dir=rtl>
<div class="nav-tabs-custom">
<ul class="nav nav-tabs pull-right">
                  <li class="active"><a href="course_details.php?ID_reg=<? echo $row[ID_reg]; ?>&cors_ID=<? echo $row[cors_ID]; ?>"  >المقدمة </a></li>
                  <li><a href="viwe_lessons.php?cors_ID=<? echo $row[cors_ID]; ?>"  >المحاضرات </a></li>
                  <li  ><a href="download.php?cors_ID=<? echo $row[cors_ID]; ?>"  >المصادر ومحتوى البرنامج </a></li>
                  <li  ><a href="video.php?cors_ID=<? echo $row[cors_ID]; ?>"  >دليل الفيديو </a></li>
                  <li><a href="content1.php?cors_ID=<? echo $row[cors_ID]; ?>"  >الواجبات والأنشطة</a></li>
                  <li><a href="show_mail.php?cors_ID=<? echo $row[cors_ID]; ?>"  >المناقشات والرسائل </a></li>
                  <?
 
$result14=mysqli_query($conn,"select * from questions where cors_ID='$row[cors_ID]'  ");
$rows14 = mysqli_num_rows($result14 );
if($rows14 > 0 )
{
?> <li><a href="test1.php?ID_reg=<? echo $row['ID_reg']; ?>"  >الاختبار النهائي </a></li>
<?php } ?>
 
                  <li>
<? if($row[cors_type]=="لغة الإنجليزية" and $row['scor']>=60 ) { ?> 
						<a href="c_com2.php?ID_reg=<? echo $row['ID_reg']; ?>"   target=_blank>
شهادة التخرج</a><? } ?>
						
       <? if($row[cors_type]=="لغة صينية" and $row['scor']>=60 ) { ?> 
       <a href="c_com22.php?ID_reg=<? echo $row['ID_reg']; ?>"   target=_blank>
شهادة التخرج</a><? } ?>
       
       
   						<? if($row[cors_type]=="تطويري"   ) { ?> 
						<a href="c_com.php?ID_reg=<? echo $row['ID_reg']; ?>"   target=_blank>
شهادة التخرج</a><? } ?>


						<? if($row[cors_type]=="دورة تأهلية" and $row['scor']>=60 ) { ?> 
						<a href="c_com1.php?ID_reg=<? echo $row['ID_reg']; ?>"   target=_blank>
شهادة التخرج</a><? } ?>


						<? if($row[cors_type]=="دبلوم" and $row['scor']>=60 ) { ?> 
						<a href="c_com11.php?ID_reg=<? echo $row['ID_reg']; ?>"   target=_blank>
شهادة التخرج</a><? } ?>                  
                  
                  </li>
                  
                   <li><a href="info.php?ID_reg=<? echo $row['ID_reg']; ?>&section_Id=<? echo $row['section_Id']; ?>"  >
					افادة </a></li>
                 
                  
                </ul>                  
              </div>

 


  
          
          

 

 


 


<div class="row">
             <!-- /.col -->
             
            
                       <?php
 
$query11 = "select * from main_axes where cors_ID='$row[cors_ID]' ";
$result11 = mysqli_query($conn,$query11);
$rows11 = mysqli_num_rows($result11 );
if($rows11 > 0 )
{
while($row11=mysqli_fetch_array($result11))
{
$C++;
?>          
            <div class="col-md-12">
              <div class="box box-solid">
                <div class="box-header with-border">
                  <h3 class="box-title"><b><i class="fa   fa-plus text-red"></i> الموضوع الرئيسي :  <?php echo $row11['Main_axes']; ?></b></h3>
                </div><!-- /.box-header -->
                <div class="box-body">
                  <div class="box-group" id="accordion">
                    <!-- we are adding the .panel class so bootstrap.js collapse plugin detects it -->
                    
                    
                    
<table id="example11" class="table table-bordered table-striped"  >
                    <thead>
                      <tr>
                         <th align="right"   ><p align=center>
						الموضوعات الفرعية  </th>
                         <th><p align=center>الانشطة التدريبية</th>
                         <th><p align=center>الادوات</th>
                         <th><p align=center>اسلوب تقديم الموضوع (متزامن/ غير متزامن )  </th>
                      </tr>
                    </thead>
                    <tbody>
                     <?
include ("conn.php");
 
$query33 = "select * from  sub_axes where Main_axes_ID='$row11[Main_axes_ID]' ";
$result33 = mysqli_query($conn,$query33);
$rows33 = mysqli_num_rows($result33 );
if($rows33 > 0 )
{
while($row33=mysqli_fetch_array($result33))
{
  $query1 = "select count(*) as coo from  lessons  where cors_ID='$row[cors_ID]' and sub_axes_ID='$row33[sub_axes_ID]' ";
$result1 = mysqli_query($conn,$query1);
$rows1 = mysqli_num_rows($result1 );
while($row1=mysqli_fetch_array($result1))
{
  $coo= $row1['coo'];
}

$tim=$row33['time']/$coo;

if($tim>18)
{
$times=($tim/18);
  $times1=round($tim/$times,2);
 }
 else 
 {
$times=($tim);
  $times1=round($tim,2);
 }
 

?>
 <tr>
                        <td align="right" >
<table id="example11" class="table table-bordered table-striped"  >
                     <?
 
 
 $query1 = "select * from  lessons  where cors_ID='$row[cors_ID]' and sub_axes_ID='$row33[sub_axes_ID]' ";
$result1 = mysqli_query($conn,$query1);
$rows1 = mysqli_num_rows($result1 );
while($row1=mysqli_fetch_array($result1))
{
 $sum=0;

for($z=1;$z<=$times;$z++)
 {  


?> <tr>
 <td ><? echo $z; ?> - <? echo $row33['sub_axes']; ?></td>
 <td    ><? echo $row1['lessons']; ?></td>
 
 <td  width=70 ><?php echo $times1;  $sum=$sum+$times1; ?> دقيقة</td>
 
 </tr>
                    <?     } ?>
 <?php if($tim>18)
{ ?>
 					<tr>
 <td ><font color="#FF0000">مناقشات</font></td>
 <td  >&nbsp;</td>
 
 <td  ><?php echo round($tim-$sum); ?> دقيقة</td>
 
 </tr> <?php }} ?>
                     
 </table>
 


 </td>
                        <td align="center" >
 
إلقاء المحاضرة<p>مناقشات</p>
<p>عرض مرئي
<p>انشطة عملية  
</td>
                        <td align="center" >
						 
  حقيبة تدريبية<p>هاتف ذكي</p>
<p>جهاز كمبيوتر  
 
</td>
                        <td align="center" > 
						متزامن</td>
                      </tr>
                    <? }}  ?>
                    </tbody>
                     
                  </table>                     
 
                     
                     
                     
                     
                  </div>
                </div><!-- /.box-body -->
              </div><!-- /.box -->
            </div><?php }} ?><!-- /.col -->
          </div></section>

<?php }} ?>



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