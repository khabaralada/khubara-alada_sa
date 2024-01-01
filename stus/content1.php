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

 


                <?php
   $cors_ID= mysqli_real_escape_string($conn,htmlspecialchars(intval($_GET['cors_ID']), ENT_QUOTES, "utf-8")); 
$query = "select * from cors,subjects,teacher,branches,stu_sec
   where stu_sec.section_Id=cors.ID    and branches.Branches_ID=cors.Branches and  teacher.teacher_id=cors.traning_name and 
   subjects.cors_ID=cors.cors_ID and subjects.cors_ID='$cors_ID'  order by cors_no DESC";
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
                  <li ><a href="course_details.php?ID_reg=<? echo $row[ID_reg]; ?>&cors_ID=<? echo $row[cors_ID]; ?>"  >المقدمة </a></li>
                  <li><a href="viwe_lessons.php?cors_ID=<? echo $row[cors_ID]; ?>"  >المحاضرات </a></li>
                  <li ><a href="download.php?cors_ID=<? echo $row[cors_ID]; ?>"  >المصادر ومحتوى البرنامج </a></li>
                  <li><a href="video.php?cors_ID=<? echo $row[cors_ID]; ?>"  >دليل الفيديو </a></li>
                  <li class="active"><a href="content1.php?cors_ID=<? echo $row[cors_ID]; ?>"  > الواجبات والأنشطة</a></li>
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
            <div class="col-md-12">
              <div class="box box-solid">
                <div class="box-header with-border">
                  <h3 class="box-title"><b><? echo $row['cors_name']; ?></b></h3>
                </div><!-- /.box-header -->
                <div class="box-body">
                  <div class="box-group" id="accordion">
                    <!-- we are adding the .panel class so bootstrap.js collapse plugin detects it -->
                     <?php
 
$query1 = "select * from content where section_Id='$row[section_Id]'";
$result1 = mysqli_query($conn,$query1);
$rows1 = mysqli_num_rows($result1 );
if($rows1 > 0 )
{
while($row1=mysqli_fetch_array($result1))
{
$C++;
?>                    
                    
                    
                    <div class="panel box  ">
                      <div class="box-header with-border">
                        <h4 class="box-title">
                          <a data-toggle="collapse" data-parent="#accordion" href="#collapse<?php echo $row1['ID']; ?> ">
                           <i class="fa  fa-plus-square"></i> <b> <?php echo $row1['content_title']; ?>
                          </b>
                          </a>
                        </h4>
                      </div>
                      <div id="collapse<?php echo $row1['ID']; ?>" class="panel-collapse collapse <?php if($C==1) echo 'in'; ?>">
                        <div class="box-body">




   <div class="row"> 
 <div class="form-group col-lg-12"> <?php echo $row1['description']; ?><br>
</div> 
 <div class="form-group col-lg-12"><?php if($row1['pdf']!="-1.") { ?><label><a href="attachment/<?php echo $row1['pdf']; ?>"  ><i class="fa fa-download    "></i> تحميل الملف المرفق</a></label><?php } ?></div> 
 <div class="form-group col-lg-12"><?php if($row1['url']!=" ") { ?> <label><a href="<?php echo $row1['url']; ?>"  ><i class="fa fa-paperclip    "></i> فتح الرابط </a></label><?php } ?></div> 

<div class="form-group col-lg-10">
<label>رفع الواجب  </label>
<input      type="file"  name="myFile1"  required="required"  >
</div> 
<div class="form-group col-lg-2">

<input type="submit" class="btn btn-success " value="خفظ وارسال المرفق" name="add">
</div> 

   </div> 





 

                        </div>
                      </div>
                    </div>
                     
                     <?php }} ?>
                     
                     
                     
                     
                  </div>
                </div><!-- /.box-body -->
              </div><!-- /.box -->
            </div><!-- /.col -->
             <!-- /.col -->
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