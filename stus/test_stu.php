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
$query = "select * from student  where  stu_id=0";
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
  
 
<div class="form-group col-lg-12"><label>الاسم</label> : <? echo $row['stu_name_ar']; ?>  </div>
<div class="form-group col-lg-12"><label>رقم الهوية</label> : <? echo $row['iqama']; ?>  </div>
<div class="form-group col-lg-12"><label>الجنسية</label> :  <? echo $row['Nationality']; ?></div>
<div class="form-group col-lg-12"><label>الجوال</label> : <? echo $row['mobile']; ?> </div>
<div class="form-group col-lg-12"><label>البريد الالكتروني</label> : <? echo $row['email']; ?> </div>
 

 					<p align="center">

 <? }} ?>
 <a href="https://forms.gle/YxtgqeNN4KKKPeKS9"   class="  btn-Danger  btn-sm " target=_blank> <i class="fa fa-circle-o  btn btn-Warning btn-sm "> </i>  استمارة تقييم البرنامج التدريبي والمدرب
 
</a> <br>  <br>  <br>                
    <a href="https://forms.gle/SwpA16ovhGbGfE3k7"   class="  btn-Warning btn-sm " target=_blank> <i class="fa fa-circle-o  btn btn-Warning btn-sm "> </i> استبيان عن مستوى رضا المستفيدين عن الخدمات الإلكترونية المُقدمة</a> <br>                
                  <br>

             
 

		   
    <?
    $i=0;
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
$i++;

?> 




            
	<div  id="img<?php   echo $i; ?>" style="cursor:pointer;" /><img border="0" src="IcnPlusSignBoxedGreen.gif" width="16" height="16">
		<b><font size="2" color="#0000FF"> 	دورة : ( <? echo $row['cors_type']; ?> ) <? echo $row['cors_name']; ?></font></b></div> 
 
          
  	<div id="one<?php   echo $i; ?>"  style="  margin:0 auto; background-color:fffffffff; border:0px solid #FFCC00;"><div style="padding:10px;">


<div class="row">

<table id='example21'  class="table table-bordered table-striped"  >
                    <thead>
                    </thead>
                    <tbody>
 <tr>
 
                        <th align="right"><p align="center">رقم الدورة  </th >
						<td align="center"><p align="center"><? echo $row['cors_no']; ?></td>						
 
                      </tr> <tr>
 
                        <th align="right"><p align="center">تاريخ البداية</th >
						<td align="center"><p align="center"><? echo $row['start_date']; ?></td>						
 
                      </tr>
 <tr>
 
                        <th align="right"><p align="center">تاريخ النهاية</th >
						<td align="center"><p align="center"><? echo $row['end_date']; ?></td>						
 
                      </tr> <tr>
 
                        <th align="right"><p align="center">درجة الاختبار</th >
						<td align="center"><p align="center"><? if($row['scor']>0) echo $row['scor']; ?> <? if($row['scor']>=90) echo 'ممتاز';   
													  elseif($row['scor']>=80)  echo 'جيد جدا';
													  elseif($row['scor']>=70)  echo 'جيد';
													  elseif($row['scor']>=60)  echo 'مقبول';
													  else  echo '';
													  
 ?> 
</td>						
 
                      </tr> <tr>
 
                        <th align="right"><p align="center">تقرير بالحضور  </th >
						<td align="center"><a href="print_report_stu.php?ID_reg=<? echo $row['ID_reg']; ?>&section_Id=<? echo $row['section_Id']; ?>" target=_blank><i class="fa fa-print btn btn-Warning btn-sm "> </i></a>
</td>						
 
                      </tr> <tr>
 
                        <th align="right"><p align="center">الاختبارات  </th >
						<td align="center"><p align="center">  
 <?
 
$result14=mysqli_query($conn,"select * from questions where cors_ID='$row[cors_ID]'  ");
$rows14 = mysqli_num_rows($result14 );
if($rows14 > 0 )
{
?>
                        <a href="test1.php?ID_reg=<? echo $row['ID_reg']; ?>"  ><i class="fa fa-folder-open btn btn-Danger btn-sm "></i>الاختبار وعرض الدرجات</a>
<?
 }
?>
                        
                        
                        </td>						
 
                      </tr> <tr>
 
                        <th align="right"><p align="center">متابعة بث المحاضرة  </th >
						<td align="center"><p align="center"><? if($row['live']!="") {  ?>
 <? //echo $row['time1']; ?> <a href="<? echo $row['live']; ?>"   target=_blank><i class="fa fa-youtube-play btn btn-Success btn-sm "></i></a>
 <? } ?>
 

<?
$result14=mysqli_query($conn,"select * from classroom where cors_ID='$row[cors_ID]' and Branches_ID='$row[Branches_ID]'  ");
$rows14 = mysqli_num_rows($result14 );
if($rows14 > 0 )
{
while($row4=mysqli_fetch_array($result14 ))
{
?>
                        <? //echo $row4['time1']; ?><a href="<? echo $row4['URL']; ?>"   target=_blank><i class="fa fa-youtube-play btn btn-Success btn-sm "> </i></a>
<?
}}
?></td>						
 
                      </tr> <tr>
 
                        <th align="right"><p align="center">محتوي البرنامج  </th >
						<td align="center"><p align="center"><? 
$query1 = "select count(*) as co    from content   where   section_Id='$row[0]'";
$result1 = mysqli_query($conn,$query1);
while($row1=mysqli_fetch_array($result1))
{
 ?> <a href="content1.php?section_Id=<? echo $row['0']; ?>" class="      btn btn-Danger  btn-sm ">  <? echo $row1['co']; ?> - استعراض </a> <?
 }
 ?></td>						
 
                      </tr>
<tr>
 
                        <th align="right"><p align="center">الحقيبة/الخطة  </th >
						<td align="center"><p align="center"><? if($row['cors_files']!="") {  ?>
 <a href="cors_files/<? echo $row['cors_files']; ?>"   target=_blank><i class="fa fa-download btn btn-Warning btn-sm "> </i></a><? } ?>
 
   <? if($row['url2']!="") {  ?>
 <a href="<? echo $row['url2']; ?>"   target=_blank><i class="fa fa-download btn btn-Warning btn-sm "> </i></a><? } ?></td>						
 
                      </tr>
<tr>
 
                        <th align="right"><p align="center">شهادة التخرج  </th >
						<td align="center"><p align="center">
						
						<? if($row[cors_type]=="لغة الإنجليزية" and $row['scor']>=60 ) { ?> 
						<a href="c_com2.php?ID_reg=<? echo $row['ID_reg']; ?>"   target=_blank><i class="fa fa-print btn btn-Danger btn-sm "></i></a><? } ?>
						
       <? if($row[cors_type]=="لغة صينية" and $row['scor']>=60 ) { ?> 
       <a href="c_com22.php?ID_reg=<? echo $row['ID_reg']; ?>"   target=_blank><i class="fa fa-print btn btn-Danger btn-sm "></i></a><? } ?>
       
       
   						<? if($row[cors_type]=="تطويري"   ) { ?> 
						<a href="c_com.php?ID_reg=<? echo $row['ID_reg']; ?>"   target=_blank><i class="fa fa-print btn btn-Danger btn-sm "></i></a><? } ?>


						<? if($row[cors_type]=="دورة تأهلية" and $row['scor']>=60 ) { ?> 
						<a href="c_com1.php?ID_reg=<? echo $row['ID_reg']; ?>"   target=_blank><i class="fa fa-print btn btn-Danger btn-sm "></i></a><? } ?>


						<? if($row[cors_type]=="دبلوم" and $row['scor']>=60 ) { ?> 
						<a href="c_com11.php?ID_reg=<? echo $row['ID_reg']; ?>"   target=_blank><i class="fa fa-print btn btn-Danger btn-sm "></i></a><? } ?>
    
       
       
       </td>						
 
                      </tr>
<tr>
 
                        <th align="right"><p align="center">إفادة / مشهد بالتسجيل  </th >
						<td align="center"><p align="center"> 
   
   <a href="info.php?ID_reg=<? echo $row['ID_reg']; ?>&section_Id=<? echo $row['section_Id']; ?>" target=_blank><i class="fa fa-print btn btn-Warning btn-sm "></i></a>  </td>						
 
                      </tr>


                               

                    </tbody>
                     
                  </table>        
</div>          




</div>          
</div>          
                  <br>  <?  }} ?>
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