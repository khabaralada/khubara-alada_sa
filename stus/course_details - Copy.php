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

<!-- external javascripts -->
<script src="../js/jquery-2.2.4.min.js"></script>
<script src="../js/jquery-ui.min.js"></script>
 
<!-- JS | jquery plugin collection for this theme -->
 

 

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
                 
                  
                  
                  
                </ul>                <div class="tab-content"><br>
 <div class="row">
  <div class="form-group col-lg-8">
   <label><? echo $row['cors_name']; ?></label><br>
<? echo  $row['word'] ; ?></div>                 

 <div class="form-group col-lg-4">
              <p align="center">
              <?
              
              if($row['photo']!="") {
              
              $imagePath = "cors_files/".$row['photo'];
if(!file_exists($imagePath) or $row['photo']=="")
    $imagePath = "../images/portfolio/default.jpg";
    else
              $imagePath = "cors_files/".$row['photo'];
    ?>
              <img  alt="" src="<? echo $imagePath ; ?>" style="width:100%"><?php } ?>
            

<br>
<br>
 
  <a href="trainee_evaluation.php?ID_reg=<? echo $row['ID_reg']; ?>"   class="btn btn-Success btn-sm"   ><i class="fa fa-thumbs-up  "></i> قياس رضا المتدربين عن تقديم البرامج</a>
 
 <br>

 
 
              </p>

 
 
              <div class="box box-solid">
                 
                <div class="box-body">
                  <div class="box-group" id="accordion">
                    <!-- we are adding the .panel class so bootstrap.js collapse plugin detects it -->
                    
  

<div class="panel box box-Warning">
                      <div class="box-header with-border">
                        <h4 class="box-title">
                          <a data-toggle="collapse" data-parent="#accordion" href="#collapset11">
                           <i class="fa  fa-tachometer"></i> <b>وسائل التواصل مع المدرب والرد علي الاستفسارات                        
							</b>                          </a>
                        </h4>
                      </div>
                      <div id="collapset11" class="panel-collapse collapse  in ">
                        <div class="box-body">



  <div class="row"> 
  <div class="form-group col-lg-10"><i class="fa  fa-circle"></i> التواصل عن طريق الواتسأب</div> 
   <div class="form-group col-lg-2"><a href="https://wa.me/<?php echo $site_mobile; ?>?text=<?php echo $site_name; ?>
   %0D%0Aالسلام عليكم ورحمه الله وبركاته 
   %0D%0Aدورة : <?php echo $row['cors_name']; ?>
   %0D%0Aالتواصل مع المدرب 
   %0D%0A<?php echo $row['teacher_name']; ?>"   target=_blank><i class="fa fa-whatsapp whatsapp-icon btn btn-Success btn-sm "> </i></a></div>


  <div class="form-group col-lg-10"><i class="fa  fa-circle"></i> التواصل مع عبر البريد الالكتروني   </div> 
   <div class="form-group col-lg-2"><a href="mailto:<?php echo $site_email; ?>"   target=_blank><i class="fa fa-envelope  btn btn-Danger btn-sm "> </i></a></div>

  <div class="form-group col-lg-10"><i class="fa  fa-circle"></i>  منتدى المناقشة </div> 
   <div class="form-group col-lg-2"><a href="show_mail.php?cors_ID=<? echo $row[cors_ID]; ?>"   ><i class="fa fa-comments btn btn-Warning btn-sm "> </i></a></div>

 
 </div> 
 



 

                        </div>
                      </div>
                    </div>
                    
                  
                    
                    <div class="panel box box-success">
                      <div class="box-header with-border">
                        <h4 class="box-title">
                          <a data-toggle="collapse" data-parent="#accordion" href="#collapset1">
                           <i class="fa  fa-tachometer"></i> <b>التعليمات والأدلة الإرشادية                         
							</b>                          </a>
                        </h4>
                      </div>
                      <div id="collapset1" class="panel-collapse collapse    ">
                        <div class="box-body">



  <div class="row"> 
 

  <div class="form-group col-lg-10"><i class="fa  fa-circle"></i> دليل طريقة دخول الدورة التدريبية   </div> 
   <div class="form-group col-lg-2"><a href="cors_files/file1.pdf"   target=_blank><i class="fa fa-download btn btn-Warning btn-sm "> </i></a></div>



    <div class="form-group col-lg-10"><i class="fa  fa-circle"></i>دليل سياسة وادأب التواصل للبرنامج التدريبي</div>
       <div class="form-group col-lg-2"><a href="cors_files/file2.pdf"   target=_blank><i class="fa fa-download btn btn-Warning btn-sm "> </i></a></div>


    <div class="form-group col-lg-10"><i class="fa  fa-circle"></i>سياسة التغذية الراجعة </div>
       <div class="form-group col-lg-2"><a href="cors_files/file3.pdf"   target=_blank><i class="fa fa-download btn btn-Warning btn-sm "> </i></a></div>


    <div class="form-group col-lg-10"><i class="fa  fa-circle"></i>سياسة الحضور </div>
   <div class="form-group col-lg-2"><a href="cors_files/file4.pdf"   target=_blank><i class="fa fa-download btn btn-Warning btn-sm "> </i></a></div>


    <div class="form-group col-lg-10"><i class="fa  fa-circle"></i> سياسة درجات تقييم الدورة التدريبية</div>
       <div class="form-group col-lg-2"><a href="cors_files/file5.pdf"   target=_blank><i class="fa fa-download btn btn-Warning btn-sm "> </i></a></div>

    <div class="form-group col-lg-10"><i class="fa  fa-circle"></i> دليل اختبار الدورات التأهيلية</div>
       <div class="form-group col-lg-2"><a href="cors_files/file6.pdf"   target=_blank><i class="fa fa-download btn btn-Warning btn-sm "> </i></a></div>


    <div class="form-group col-lg-10"><i class="fa  fa-circle"></i>دليل رفع الواجبات المنزلية</div>
       <div class="form-group col-lg-2"><a href="cors_files/file7.pdf"   target=_blank><i class="fa fa-download btn btn-Warning btn-sm "> </i></a></div>

 </div> 
 



 

                        </div>
                      </div>
                    </div>
                    
                    
                    
                    
                    
 <div class="panel box box-Danger">
                      <div class="box-header with-border">
                        <h4 class="box-title">
                          <a data-toggle="collapse" data-parent="#accordion" href="#collapset2">
                           <i class="fa  fa-tasks"></i> <b>تفاصيل البرنامج التدريبي                          
							</b>                          </a>
                        </h4>
                      </div>
                      <div id="collapset2" class="panel-collapse collapse    ">
                        <div class="box-body">




 <div class="row"> 
 <div class="form-group col-lg-12"><i class="fa  fa-circle"></i> تاريخ بداية البرنامج : <? echo $row['start_date']; ?></div>  
 <div class="form-group col-lg-12"><i class="fa  fa-circle"></i> تاريخ نهاية البرنامج : <? echo $row['end_date']; ?></div>  
 <div class="form-group col-lg-12"><i class="fa  fa-circle"></i> درجة الاختبار النهائي: <? if($row['scor']>0) echo $row['scor']; ?> <? if($row['scor']>=90) echo 'ممتاز';   
													  elseif($row['scor']>=80)  echo 'جيد جدا';
													  elseif($row['scor']>=70)  echo 'جيد';
													  elseif($row['scor']>=60)  echo 'مقبول';
													  else  echo '';
													  
 ?> 
 </div>
  <? if($row['cors_files']!="" or $row['cors_files']!="-1.") {  ?><div class="form-group col-lg-12"><i class="fa  fa-circle"></i> الخطة التدريبية : 
 <a href="cors_files/<? echo $row['cors_files']; ?>"   target=_blank><i class="fa fa-download btn btn-Warning btn-sm "> </i></a>
</div>  <? } ?>


<div class="form-group col-lg-12"><i class="fa  fa-circle"></i> حضور الدورة مباشر  : 
<? if($row['live']!="") {  ?>
 <? //echo $row['time1']; ?> <a href="<? echo $row['live']; ?>"   class="btn btn-Success btn-sm"  target=_blank><i class="fa fa-youtube-play  "></i> ابدء الان ZOOM</a>
 <? } ?>
 
</div>

<div class="form-group col-lg-12"><i class="fa  fa-circle"></i> تقرير بالحضور والغياب  : 

<a href="print_report_stu.php?ID_reg=<? echo $row['ID_reg']; ?>&section_Id=<? echo $row['section_Id']; ?>"  class="btn btn-Warning btn-sm " target=_blank><i class="fa fa-print "> </i> عرض التقرير</a>
</div>


</div>  
 
 



 

                        </div>
                      </div>
                    </div>
                    
                
                    
                    <div class="panel box box-success">
                      <div class="box-header with-border">
                        <h4 class="box-title">
                          <a data-toggle="collapse" data-parent="#accordion" href="#collapset3">
                           <i class="fa  fa-tachometer"></i> <b>متطلبات وتجهيزات البرنامج التدريبي                          
							</b>                          </a>
                        </h4>
                      </div>
                      <div id="collapset3" class="panel-collapse collapse    ">
                        <div class="box-body">





                     <?php
 
$query11 = "select * from  equipment where cors_ID='$row[cors_ID]' ";
$result11 = mysqli_query($conn,$query11);
$rows11 = mysqli_num_rows($result11 );
if($rows11 > 0 )
{
while($row11=mysqli_fetch_array($result11))
{
 echo ' <div class="row">';
echo '<div class="form-group col-lg-12"><i class="fa  fa-circle"></i> '.$row11['equipment'].'</div>';
 
 echo ' </div>';

}} 
?>



 

                        </div>
                      </div>
                    </div>
                     
 
                     
 <div class="panel box box-Warning">
                      <div class="box-header with-border">
                        <h4 class="box-title">
                          <a data-toggle="collapse" data-parent="#accordion" href="#collapset4 ">
                           <i class="fa   fa-gear"></i> <b>الوسائل التدريبية المستخدمة في البرنامج التدريبي                         
							</b>                         </a>
                        </h4>
                      </div>
                      <div id="collapset4" class="panel-collapse collapse    ">
                        <div class="box-body">





                     <?php
 
$query11 = "select * from  tools where cors_ID='$row[cors_ID]' ";
$result11 = mysqli_query($conn,$query11);
$rows11 = mysqli_num_rows($result11 );
if($rows11 > 0 )
{
while($row11=mysqli_fetch_array($result11))
{
 echo ' <div class="row">';
echo '<div class="form-group col-lg-12"><i class="fa  fa-circle"></i> '.$row11['tools'].'</div>';
 
 echo ' </div>';

}} 
?>



 

                        </div>
                      </div>
                    </div>                    
                     
  
                         <?php if($row['video']!="") { ?><iframe class="embed-responsive-item" src="<? echo str_replace('watch?v=','embed/',$row['video']); ?>" style="width:100%;height:250px " frameborder="0" allowfullscreen></iframe><?php } ?>
                   
                  </div>
                </div><!-- /.box-body -->
              </div><!-- /.box -->
 
            



 
              
                
 
 

 </div>                 
                
                
 </div>                 
                
                
                </div> 
                
                
                
                
              </div>

 


 

 

 


 


<div class="row">
            <div class="col-md-6">
              <div class="box box-solid">
                <div class="box-header with-border">
                  <h3 class="box-title"><b>محاور البرنامج (الدورة )</b></h3>
                </div><!-- /.box-header -->
                <div class="box-body">
                  <div class="box-group" id="accordion">
                    <!-- we are adding the .panel class so bootstrap.js collapse plugin detects it -->
                     <?php
 
$query1 = "select * from main_axes where cors_ID='$row[cors_ID]' ";
$result1 = mysqli_query($conn,$query1);
$rows1 = mysqli_num_rows($result1 );
if($rows1 > 0 )
{
while($row1=mysqli_fetch_array($result1))
{
$C++;
?>                    
                    
                    
                    <div class="panel box box-<?php if($C==1) echo 'primary'; else echo 'danger'; ?>">
                      <div class="box-header with-border">
                        <h4 class="box-title">
                          <a data-toggle="collapse" data-parent="#accordion" href="#collapse<?php echo $row1['Main_axes_ID']; ?> ">
                           <i class="fa  fa-plus-square"></i> <b> <?php echo $row1['Main_axes']; ?>
                          </b>
                          </a>
                        </h4>
                      </div>
                      <div id="collapse<?php echo $row1['Main_axes_ID']; ?>" class="panel-collapse collapse <?php if($C==1) echo 'in'; ?>">
                        <div class="box-body">





                     <?php
 
$query11 = "select * from  sub_axes where Main_axes_ID='$row1[Main_axes_ID]' ";
$result11 = mysqli_query($conn,$query11);
$rows11 = mysqli_num_rows($result11 );
if($rows11 > 0 )
{
while($row11=mysqli_fetch_array($result11))
{
 echo ' <div class="row">';
echo '<div class="form-group col-lg-10"><i class="fa  fa-circle"></i> '.$row11['sub_axes'].'</div>';
echo '<div class="form-group col-lg-2"><label>'.$row11['time'].'</label></div>';
 echo ' </div>';

}} 
?>



 

                        </div>
                      </div>
                    </div>
                     
                     <?php }} ?>
                     
                     
                     
                     
                  </div>
                </div><!-- /.box-body -->
              </div><!-- /.box -->
            </div><!-- /.col -->
            <div class="col-md-6">
              <div class="box box-solid">
                <div class="box-header with-border">
                  <h3 class="box-title"><font size="3">الوسائل تعليمية والخرائط الذهنية</font></h3>
                </div><!-- /.box-header -->
                <div class="box-body">
                  <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                    <ol class="carousel-indicators">
                      <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                      <li data-target="#carousel-example-generic" data-slide-to="1" class=""></li>
                      <li data-target="#carousel-example-generic" data-slide-to="2" class=""></li>
                    </ol>
                    <div class="carousel-inner">
                    
                       <?php
 
$query11 = "select * from  sub_photo where cors_ID='$row[cors_ID]' ";
$result11 = mysqli_query($conn,$query11);
$rows11 = mysqli_num_rows($result11 );
if($rows11 > 0 )
{
while($row11=mysqli_fetch_array($result11))
{
$CC++;
 
              $imagePath = "cors_files/".$row11['sub_photo'];
if(!file_exists($imagePath) or $row11['sub_photo']=="")
    $imagePath = "../images/portfolio/default.jpg";
    else
              $imagePath = "cors_files/".$row11['sub_photo'];
 
 
                


?>                  
                      <div class="item <?php if($CC==1) echo 'active'; ?> ">
                        <img src="<? echo $imagePath; ?>" alt="First slide" style="width:100%;height:350px">
                        <div class="carousel-caption">
                          First Slide
                        </div>
                      </div>
                       <?php }} ?>
                       
                    </div>
                    <a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
                      <span class="fa fa-angle-left"></span>
                    </a>
                    <a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
                      <span class="fa fa-angle-right"></span>
                    </a>
                  </div>
                </div><!-- /.box-body -->
              </div><!-- /.box -->
            </div><!-- /.col -->
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