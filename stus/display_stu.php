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
   subjects.cors_ID=cors.cors_ID and stu_id='$_SESSION[user_ID]'  and  ( cors_name like '%$_POST[find]%' or  short_desc_ar  like '%$_POST[find]%' ) order by cors_no ASC";

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
                <a href="course_details.php?ID_reg=<? echo $row[ID_reg]; ?>&cors_ID=<? echo $row[cors_ID]; ?>"><img class="img-fullwidth" alt="" src="<? echo $imagePath; ?>" style="width:360px;height:250px"></a>
                
                
                
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
                                                    <i class="fa fa-flag"></i> <font color="#FF0000">
                                                    <? echo $row['cors_online']; ?> </font> <i class="fa fa-clock-o"></i> <font color="#FF0000"><? echo $row['cors_time']; ?></font>
                                                    
                         
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