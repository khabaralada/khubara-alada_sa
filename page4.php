<?php include("config.php");
$query9 = "select * from web_settings";
$result9 = mysqli_query($conn,$query9);
while($row9=mysqli_fetch_array($result9))
{
 $site_name=$row9['site_name'];
 $site_name_en=$row9['site_name_en'];
 $site_mobile=$row9['site_mobile'];
 $site_email=$row9['site_email'];
 $site_address=$row9['site_address'];
 $site_address_en=$row9['site_address_en'];
 $site_url=$row9['site_url'];
 $secretKey=$row9['secretKey'];
 $sitKey=$row9['sitKey'];
 $site_map=$row9['site_map'];
  
}
  

 ?>
<!DOCTYPE html>
<html dir="rtl" lang="en">
<head>

<!-- Meta Tags -->
<meta name="viewport" content="width=device-width,initial-scale=1.0"/>
<meta http-equiv="content-type" content="text/html; charset=UTF-8"/>
<meta name="description" content="Learnpro - التعليم University School Kindergarten Learning HTML Template" />
<meta name="keywords" content="التعليم,school,university,التعليمal,learn,learning,teaching,workshop" />
<meta name="author" content="ThemeMascot" />

<!-- Page Title -->
<title><?php echo $site_name; ?></title>
<!-- Favicon and Touch Icons -->
<link href="images/favicon.png" rel="shortcut icon" type="image/png">
<link href="images/apple-touch-icon.png" rel="apple-touch-icon">
<link href="images/apple-touch-icon-72x72.png" rel="apple-touch-icon" sizes="72x72">
<link href="images/apple-touch-icon-114x114.png" rel="apple-touch-icon" sizes="114x114">
<link href="images/apple-touch-icon-144x144.png" rel="apple-touch-icon" sizes="144x144">

<!-- Stylesheet -->
<link href="css/bootstrap.min.css" rel="stylesheet" type="text/css">
<link href="css/jquery-ui.min.css" rel="stylesheet" type="text/css">
<link href="css/animate.css" rel="stylesheet" type="text/css">
<link href="css/css-plugin-collections.css" rel="stylesheet"/>
<!-- CSS | menuzord megamenu skins -->
<link href="css/menuzord-megamenu.css" rel="stylesheet"/>
<link id="menuzord-menu-skins" href="css/menuzord-skins/menuzord-border-bottom.css" rel="stylesheet"/>
<!-- CSS | Main style file -->
<link href="css/style-main-rtl.css" rel="stylesheet" type="text/css">
<!-- CSS | Preloader Styles -->
<link href="css/preloader.css" rel="stylesheet" type="text/css">
<!-- CSS | Custom Margin Padding Collection -->
<link href="css/custom-bootstrap-margin-padding.css" rel="stylesheet" type="text/css">
<!-- CSS | Responsive media queries -->
<link href="css/responsive.css" rel="stylesheet" type="text/css">
<!-- CSS | RTL Layout -->
<link href="css/bootstrap-rtl.min.css" rel="stylesheet" type="text/css">
<link href="css/style-main-rtl-extra.css" rel="stylesheet" type="text/css">
<!-- CSS | Style css. This is the file where you can place your own custom css code. Just uncomment it and use it. -->
<!-- <link href="css/style.css" rel="stylesheet" type="text/css"> -->

<!-- Revolution Slider 5.x CSS settings -->
<link  href="js/revolution-slider/css/settings.css" rel="stylesheet" type="text/css"/>
<link  href="js/revolution-slider/css/layers.css" rel="stylesheet" type="text/css"/>
<link  href="js/revolution-slider/css/navigation.css" rel="stylesheet" type="text/css"/>

<!-- CSS | Theme Color -->
<link href="css/colors/theme-skin-color-set1.css" rel="stylesheet" type="text/css">

<!-- external javascripts -->
<script src="js/jquery-2.2.4.min.js"></script>
<script src="js/jquery-ui.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<!-- JS | jquery plugin collection for this theme -->
<script src="js/jquery-plugin-collection.js"></script>

<!-- Revolution Slider 5.x SCRIPTS -->
<script src="js/revolution-slider/js/jquery.themepunch.tools.min.js"></script>
<script src="js/revolution-slider/js/jquery.themepunch.revolution.min.js"></script>

<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->
 
<link href="https://fonts.googleapis.com/css?family=Amiri|Katibeh|Lateef|Scheherazade" rel="stylesheet">
<link href='https://fonts.googleapis.com/css?family=Droid%20Arabic%20Kufi' rel='stylesheet' type='text/css'>
<style>
*  {
 
 font-family: Droid Arabic Kufi; 
}
 .mobileHide { display: inline; } 
  /* Smartphone Portrait and Landscape */ 
  @media only screen 
    and (min-device-width : 320px) 
    and (max-device-width : 480px){ 
     .mobileHide { display: none;}
  }

</style>

<style>
  /* for desktop */
      .whatsapp_float {
          position: fixed;
          width: 60px;
          height: 60px;
          bottom: 200px;
          right: 40px;
          background-color: #25d366;
          color: #FFF;
          border-radius: 50px;
          text-align: center;
          font-size: 30px;
          box-shadow: 2px 2px 3px #999;
          z-index: 100;
      }

      .whatsapp-icon {
          margin-top: 16px;
      }

      /* for mobile */
      @media screen and (max-width: 767px) {
          .whatsapp-icon {
              margin-top: 10px;
          }

          .whatsapp_float {
              width: 40px;
              height: 40px;
              bottom: 20px;
              right: 10px;
              font-size: 22px;
          }
      }
</style>
</head>
<body class="rtl">

<a
        href="https://wa.me/<?php echo $site_mobile; ?>?text=<?php echo $site_name; ?>%0D%0Aالسلام عليكم ورحمه الله وبركاته"
        class="whatsapp_float"
        target="_blank"
        rel="noopener noreferrer"
      >
        <i class="fa fa-whatsapp whatsapp-icon"></i>
      </a><div id="wrapper" class="clearfix">
  <!-- preloader -->
  <div id="preloader">
    <div id="spinner">
      <img alt="" src="images/preloaders/5.gif">
    </div>
    <div id="disable-preloader" class="btn btn-default btn-sm">تعطيل أداة التحميل المسبق</div>

  </div>
  <!-- Header -->
  <header id="header" class="header">
    <div class="header-top bg-theme-colored2 sm-text-center">
      <div class="container">
        <div class="row">
           </style>
<?
$result=mysqli_query($conn,"select* from media");
while($row=mysqli_fetch_array($result))
{
$facebook=$row['facebook'];
$twitter=$row['twitter'];
$instagram=$row['instagram'];
$youtube=$row['youtube'];
$linked=$row['linked'];
$whatsapp=$row['whatsapp'];
}
?>
          
          <div class="col-md-4  ">
            <div class="widget">
              <ul class="styled-icons icon-sm pull-left flip sm-pull-none sm-text-center mt-5">
                                <li><a href="<? echo $facebook; ?>"><i class="fa fa-facebook text-white"></i></a></li>
                <li><a href="<? echo $twitter; ?>"><i class="fa fa-twitter text-white"></i></a></li>
                <li><a href="<? echo $whatsapp; ?>"><i class="fa fa-whatsapp text-white"></i></a></li>
                <li><a href="<? echo $youtube; ?>"><i class="fa fa-youtube text-white"></i></a></li>
                <li><a href="<? echo $instagram; ?>"><i class="fa fa-instagram text-white"></i></a></li>
                <li><a href="<? echo $linked; ?>"><i class="fa fa-snapchat text-white"></i></a></li>

              </ul>
            </div>
          </div>
          
          <div class="col-md-6">
             
          </div>          <div class="col-md-2">
            <ul class="list-inline sm-pull-none sm-text-center text-right text-white mb-sm-20 mt-10">
              <li class="m-0 pl-10"> <a href="wp" class="text-white "><i class="fa fa-user-o mr-5 text-white"></i> CRM </a> </li>
              <li class="m-0 pl-0 pr-10"> 
 <ul>
                   <li><a href="#" title="" class="dropdown-toggle text-white" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                   <img src="images/flag-ar.png" alt=""/> 
					AR</a>
                     <ul class="dropdown-menu">
                           <li><a href="en" title=""><img src="images/flag-1.png" alt=""/> 
							EN</a></li>
 
                        </ul>

                
                 
                
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
    <div class="header-middle p-0 bg-lightest xs-text-center">
      <div class="container pt-20 pb-20">
        <div class="row">
         <div class="col-xs-12 col-sm-12 col-md-3">
            <a class=" flip sm-pull-center mb-15" href="index.php"><img src="images/logo-wide.png" style=" height:70px" alt=""></a>
          </div>
          
           <div class="col-xs-12 col-sm-12 col-md-9 mobileHide">
            <div class="row">
              <div class="col-xs-12 col-sm-4 col-md-4">
                <div class="widget no-border sm-text-center mt-10 mb-10 m-0">
                  <i class="pe-7s-phone text-theme-colored2 font-48 mt-0 mr-15 mr-sm-0 sm-display-block pull-left flip sm-pull-none"></i>
                  <a href="#" class="font-12 text-gray text-uppercase"> اتصل بنا</a>
                  <h5 class="font-13 text-black m-0"> <?php echo $site_mobile; ?></h5>
                </div>

              </div>
              <div class="col-xs-12 col-sm-4 col-md-4">
                <div class="widget no-border sm-text-center mt-10 mb-10 m-0">
                  <i class="pe-7s-mail text-theme-colored2 font-48 mt-0 mr-15 mr-sm-0 sm-display-block pull-left flip sm-pull-none"></i>
                  <a href="#" class="font-12 text-gray text-uppercase">البريد الالكتروني</a>
                  <h5 class="font-13 text-black m-0"><?php echo $site_email; ?></h5>
                </div>
              </div>
              <div class="col-xs-12 col-sm-4 col-md-4">
           <a class=" flip sm-pull-center mb-15" href="index.php"><img src="logo1.png" style=" height:70px" alt=""></a>
  </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="header-nav">
      <div class="header-nav-wrapper navbar-scrolltofixed bg-white">
        <div class="container">
          <nav id="menuzord" class="menuzord default menuzord-responsive">
            <ul class="menuzord-menu">

<li><a href="index.php">الرئيسية</a></li>
<?
$result2=mysqli_query($conn,"select * from mune where timer1=0 or timer1=1 order by ID ASC");
while($row2=mysqli_fetch_array($result2))
{
$m_ID=$row2['ID'];
if($row2['up']==1) { ?> 
              <li><a href="#home"><? echo $row2['mune']; ?></a>
                <ul class="dropdown">
 <?
$result22=mysqli_query($conn,"select * from sub where m_ID='$m_ID' order by sort1 ASC");
while($row22=mysqli_fetch_array($result22))
{
?>
<? if($row22['type']==1){ ?><li><a href="about.php?ID=<? echo $row22['sub_ID']; ?>"><? echo $row22['sub']; ?></a></li>  <? } ?>
<? if($row22['type']==2){ ?><li><a href="image.php?ID=<? echo $row22['sub_ID']; ?>"><? echo $row22['sub']; ?></a></li>  <? } ?>
<? if($row22['type']==3){ ?><li><a href="video.php?ID=<? echo $row22['sub_ID']; ?>"><? echo $row22['sub']; ?></a></li>  <? } ?>
<? if($row22['type']==4){ ?><li><a href="<? echo $row22['url']; ?>"><? echo $row22['sub']; ?></a></li>  <? } ?>
<? if($row22['type']==5){ ?><li><a href="research.php"><? echo $row22['sub']; ?></a></li>  <? } ?>
<? if($row22['type']==10){ ?><li><a href="articles.php"><? echo $row22['sub']; ?></a></li>  <? } ?>
<? if($row22['type']==6){ ?><li><a href="page3.php?ID=<? echo $row22['sub_ID']; ?>"><? echo $row22['sub']; ?></a></li>  <? } ?>
<? if($row22['type']==7){ ?><li><a href="page4.php?ID=<? echo $row22['sub_ID']; ?>"><? echo $row22['sub']; ?></a></li>  <? } ?>
<? } ?>
</ul>
</li>
<?
}
else
{
?>
<li><a href="mune_about.php?ID=<? echo $row2['ID']; ?>"><? echo $row2['mune']; ?></a></li>
<? }} ?>               
<li ><a href="contact.php">اتصل بنا</a></li>
                      
                          
               
               
               

               
               
            </ul>
            <div class="pull-left sm-pull-none mb-sm-15">
              <a class="btn btn-colored btn-theme-colored2 mt-15 mt-sm-10 pt-10 pb-10  " href="reg.php">سجل الان</a>
            </div>
          </nav>
        </div>
      </div>
    </div>
  </header>
  
  <!-- Start main-content -->
  <div class="main-content">
    <!-- Section: inner-header -->
    <section class="inner-header divider layer-overlay overlay-theme-colored-7" data-bg-img="images/we-provide-bg1.webp">
      <div class="container pt-120 pb-60">
        <!-- Section Content -->
        <div class="section-content">
          <div class="row"> 
            <div class="col-md-12">
              <h2 class="text-theme-colored2 font-36"><?php
	    $ss= mysqli_real_escape_string($conn,htmlspecialchars(intval($_GET['ID']), ENT_QUOTES, "utf-8")); 
$result=mysqli_query($conn,"select* from sub where 	sub_ID='$ss' ");
while($row=mysqli_fetch_array($result))
{
echo $row['sub'];
}
	    $ss= mysqli_real_escape_string($conn,htmlspecialchars(intval($_GET['ID']), ENT_QUOTES, "utf-8")); 
$result=mysqli_query($conn,"select* from mune where ID='$ss' ");
while($row=mysqli_fetch_array($result))
{
echo $row['mune'];
}
?></h2>
              <ol class="breadcrumb   mt-10 white">
                <li><a href="index.php">الرئيسية</a></li>
                <li class="active">  
<?php
	    $ss= mysqli_real_escape_string($conn,htmlspecialchars(intval($_GET['ID']), ENT_QUOTES, "utf-8")); 
$result=mysqli_query($conn,"select* from sub where 	sub_ID='$ss' ");
while($row=mysqli_fetch_array($result))
{
echo $row['sub'];
}
 
?>
</li>
              </ol>
            </div>
          </div>
        </div>
      </div>
    </section>

<section>
      <div class="container pt-70 pb-40">
        <div class="section-content">
          <div class="row multi-row-clearfix">
             
             
             
             
             
 <?
 
$result=mysqli_query($conn,"select* from orgn ");
$rows=mysqli_num_rows($result) ; 
if($rows > 0 )
{
while($row=mysqli_fetch_array($result))
{
?>            
            
            <div class="col-sm-6 col-md-3">
              <article class="post clearfix mb-30">
                <div class="entry-header">
                  <div class="post-thumb thumb"> 
                    <img  src="news/<? echo $row['photo']; ?>" style="width:372px;height:246px"  class="img-responsive img-fullwidth"> 
                  </div>                    
                  <div class="entry-date media-left text-center flip bg-theme-colored border-top-theme-colored2-3px pt-5 pr-15 pb-5 pl-15">
                    <ul>
                      <li class="font-16 text-white font-weight-600"><?  echo $row['day']; ?></li>
                      <li class="font-12 text-white text-uppercase"><? $monthNum  = $row['mans'];  echo $monthName = date('M', mktime(0, 0, 0, $monthNum, 10));  ?></li>
                    </ul>
                  </div>
                </div>
                <div class="entry-content p-15">
                  <div class="entry-meta media no-bg no-border mt-0 mb-10">
                    <div class="media-body pl-0">
                      <div class="event-content pull-left flip">
                        <h6 class="entry-title text-white text-uppercase font-weight-600 m-0 mt-5"><a  href="news1.php?ID=<? echo $row['ID']; ?>" ><?  echo $row['address']; ?></a></h6>
                             
                      </div>
                    </div>
                  </div>
                  <p class="mt-5"><? //echo strip_tags(substr($row['news'],0,510)); ?></p>
                  <a class="btn btn-default btn-flat font-12 mt-10 ml-5" href="news1.php?ID=<? echo $row['ID']; ?>"> المزيد</a>
                </div>
              </article>
            </div>
            <? }} ?>
          </div>
        </div>
      </div>
    </section>

    
    
    
    
    <!-- Divider: Funfact -->
     

    <!-- Section: Team -->
     
  </div>
  <!-- end main-content -->
  
  <!-- Footer -->
    <footer id="footer" class="footer divider layer-overlay overlay-dark-9" data-bg-img="images/we-provide-bg.webp">
    <div class="container pt-70 pb-40">

      <div class="row">
        <div class="col-sm-6 col-md-3">
          <div class="widget dark">
            <img class="mt-5 mb-20" alt="" src="images/logo-white-footer.png">
            <p><?php echo $site_address; ?></p>
            <ul class="list-inline mt-5">
              <li class="m-0 pl-10 pr-10"> <i class="fa fa-phone text-theme-colored2 mr-5"></i> <a class="text-gray" href="#"><?php echo $site_mobile; ?></a> </li><br>
              <li class="m-0 pl-10 pr-10"> <i class="fa fa-envelope-o text-theme-colored2 mr-5"></i> <a class="text-gray" href="#"><?php echo $site_email; ?></a> </li><br>
              <li class="m-0 pl-10 pr-10"> <i class="fa fa-globe text-theme-colored2 mr-5"></i> <a class="text-gray" href="#"><?php echo $site_url; ?> </a> </li>
            </ul>   
            
<?
$result=mysqli_query($conn,"select* from media");
while($row=mysqli_fetch_array($result))
{
$facebook=$row['facebook'];
$twitter=$row['twitter'];
$instagram=$row['instagram'];
$youtube=$row['youtube'];
$linked=$row['linked'];
$whatsapp=$row['whatsapp'];
}
?>
 
              
         
            <ul class="styled-icons icon-sm icon-bordered icon-circled clearfix mt-10">
                                <li><a href="<? echo $facebook; ?>"><i class="fa fa-facebook text-white"></i></a></li>
                <li><a href="<? echo $twitter; ?>"><i class="fa fa-twitter text-white"></i></a></li>
                <li><a href="<? echo $whatsapp; ?>"><i class="fa fa-whatsapp text-white"></i></a></li>
                <li><a href="<? echo $youtube; ?>"><i class="fa fa-youtube text-white"></i></a></li>
                <li><a href="<? echo $instagram; ?>"><i class="fa fa-instagram text-white"></i></a></li>
                <li><a href="<? echo $linked; ?>"><i class="fa fa-snapchat text-white"></i></a></li>

            </ul>
          </div>
        </div>
        <div class="col-sm-6 col-md-3">
          <div class="widget dark">
            <h4 class="widget-title line-bottom-theme-colored-2">القائمة الرئيسية</h4>
            <ul class="angle-double-right list-border">
 
                            
                            
 
                    <li><a href="othyk-aladoar-oalmsoolyat.php">وثيقة الادوار والمسؤوليات</a></li>
                    <li><a href="staff-guide.pdf">الكادر الاشرافي على البيئة التدريبية</a></li>
                    <li><a href="help.php">الأدلة الارشادية</a></li>
                    
                    <li><a href="support.php">سياسة الدعم الفني والتعليمي</a></li>



 
             
            </ul>
          </div>
        </div>
        <div class="col-sm-6 col-md-3">
          <div class="widget dark">
            <h4 class="widget-title line-bottom-theme-colored-2">روابط سريعة</h4>
            <ul class="angle-double-right list-border">
                            <li><a href="stus">شؤون المتدربين  </a></li>
 
                 
                <li>
                  <a href="conditions.php">الشروط والأحكام </a>
                </li>
                 
                 <li>
                  <a href="privacy.php">سياسة الخصوصية</a>
                </li>
               
                <li>
                  <a href="academic.php">النزاهة الاكاديمية</a>
                </li>

            </ul>          </div>
        </div>
        <div class="col-sm-6 col-md-3">
          <div class="widget dark">
            <h4 class="widget-title line-bottom-theme-colored-2">اوقات الدوام</h4>
            <div class="opening-ساعات">
              <ul class="list-border">
                <li class="clearfix"> <span> الاحد - الثلاثاء :  </span>
                  <div class="value pull-right flip"> 08.00 ص- 05.00م</div>
                </li>
                <li class="clearfix"> <span> الاربعاء - الخميس :  </span>
                  <div class="value pull-right flip"> 08.00 ص- 05.00م</div>
                </li>                <li class="clearfix"> <span> الجمعة : </span>
                  <div class="value pull-right flip bg-theme-colored2 text-white closed"> مغلق </div>
                </li>
                <li class="clearfix"> <span> السبت : </span>
                  <div class="value pull-right flip bg-theme-colored2 text-white closed"> مغلق </div>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="footer-bottom" data-bg-color="#2b2d3b">
      <div class="container pt-20 pb-20">
        <div class="row">
          <div class="col-md-6">
            <p class="font-12 text-black-777 m-0 sm-text-center">@ كل الحقوق محفوظة ل<?php echo $site_name; ?></p>
          </div>
          <div class="col-md-6 text-right">
            <div class="widget no-border m-0">
              <ul class="list-inline sm-text-center mt-5 font-12" style="text-align: left">
                <li>
                  <a href="conditions.php">التعليمات</a>
                </li>
                <li>|</li>
                <li>
                  <a href="help.php">المساعدة</a>
                </li>
                <li>|</li>
                <li>
                  <a href="support.php">الدعم</a>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
  </footer>
  <a class="scrollToTop" href="#"><i class="fa fa-angle-up"></i></a>
</div>
<!-- end wrapper -->

<!-- Footer Scripts -->
<!-- JS | Custom script for all pages -->
<script src="js/custom.js"></script>

</body>
</html>