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
 $site_address=$row9['site_address_en'];
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
<meta name="description" content="professional - Vocational Training Institute" />
<meta name="keywords" content="professional,sthtc,education,training,hospitality,courses,saudi,vocational,diplomas,educational,learn,learning,teaching,workshop" />
<meta name="author" content="professional" />

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
<?php
$result=mysqli_query($conn,"select * from media");
while($row=mysqli_fetch_array($result))
{
$facebook=$row['facebook'];
$twitter=$row['twitter'];
$instagram=$row['instagram'];
$youtube=$row['youtube'];
$linked=$row['linked'];
$whatsapp=$row['whatsapp'];
$tiktok=$row['tiktok'];
}
?>
          
          <div class="col-md-4  ">
            <div class="widget">
              <ul class="styled-icons icon-sm pull-left flip sm-pull-none sm-text-center mt-5">
                                <li><a href="<?php echo $facebook; ?>"><i class="fa fa-facebook text-white"></i></a></li>
                <li><a href="<?php echo $twitter; ?>"><i class="fa fa-twitter text-white"></i></a></li>
                <li><a href="<?php echo $whatsapp; ?>"><i class="fa fa-whatsapp text-white"></i></a></li>
                <li><a href="<?php echo $youtube; ?>"><i class="fa fa-youtube text-white"></i></a></li>
                <li><a href="<?php echo $instagram; ?>"><i class="fa fa-instagram text-white"></i></a></li>
                <li><a href="<?php echo $linked; ?>"><i class="fa fa-snapchat text-white"></i></a></li>

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
<?php
$result2=mysqli_query($conn,"select * from mune where timer1=0 or timer1=1 order by ID ASC");
while($row2=mysqli_fetch_array($result2))
{
$m_ID=$row2['ID'];
if($row2['up']==1) { ?> 
              <li><a href="#home"><?php echo $row2['mune']; ?></a>
                <ul class="dropdown">
 <?php
$result22=mysqli_query($conn,"select * from sub where m_ID='$m_ID' order by sort1 ASC");
while($row22=mysqli_fetch_array($result22))
{
?>
<?php if($row22['type']==1){ ?><li><a href="about.php?ID=<?php echo $row22['sub_ID']; ?>"><?php echo $row22['sub']; ?></a></li>  <?php } ?>
<?php if($row22['type']==2){ ?><li><a href="image.php?ID=<?php echo $row22['sub_ID']; ?>"><?php echo $row22['sub']; ?></a></li>  <?php } ?>
<?php if($row22['type']==3){ ?><li><a href="video.php?ID=<?php echo $row22['sub_ID']; ?>"><?php echo $row22['sub']; ?></a></li>  <?php } ?>
<?php if($row22['type']==4){ ?><li><a href="<?php echo $row22['url']; ?>"><?php echo $row22['sub']; ?></a></li>  <?php } ?>
<?php if($row22['type']==5){ ?><li><a href="page2.php?ID=<?php echo $row22['sub_ID']; ?>"><?php echo $row22['sub']; ?></a></li>  <?php } ?>
<?php if($row22['type']==6){ ?><li><a href="page3.php?ID=<?php echo $row22['sub_ID']; ?>"><?php echo $row22['sub']; ?></a></li>  <?php } ?>
<?php if($row22['type']==7){ ?><li><a href="page4.php?ID=<?php echo $row22['sub_ID']; ?>"><?php echo $row22['sub']; ?></a></li>  <?php } ?>
<?php } ?>
</ul>
</li>
<?php
}
else
{
?>
<li><a href="mune_about.php?ID=<?php echo $row2['ID']; ?>"><?php echo $row2['mune']; ?></a></li>
<?php }} ?>               
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
    <section class="inner-header divider layer-overlay overlay-theme-colored-7" data-bg-img="images/we-provide-bg1.jpg">
      <div class="container pt-120 pb-60">
        <!-- Section Content -->
        <div class="section-content">
          <div class="row"> 
            <div class="col-md-12">
              <h2 class="text-theme-colored2 font-36"> </h2>
              <ol class="breadcrumb   mt-10 white">
                <li><a href="index.php">الرئيسية</a></li>
                <li class="active">  
وثيقة الادوار والمسؤوليات والاعداد للفنيين والاداريين والتقنيين الذين يقومون بالوظائف لتنفيذ التعليم الالكتروني

</li>
              </ol>
            </div>
          </div>
        </div>
      </div>
    </section>

  
        <!-- Section About -->
<section>
      <div class="container">
        <div class="row">
          <div class="col-md-12">
         <h2 class="text-uppercasetext-theme-colored mt-0 mt-sm-30"><br>وثيقة الادوار والمسؤوليات والاعداد للفنيين والاداريين والتقنيين الذين يقومون بالوظائف لتنفيذ التعليم الالكتروني
</h2> 
                          	<div class="double-line-bottom-theme-colored-2"></div>

           
            <p>
            
            
	<table border="1" width="100%" style="border-collapse: collapse">
		<tbody style="box-sizing: border-box;">
			<tr style="box-sizing: border-box;">
				<td style="box-sizing: border-box; padding: 1rem; vertical-align: top; border: 1px solid rgb(237, 237, 237); text-align: center; background-color: rgb(252, 252, 252); min-width: 20px;">
				<font face="Droid Arabic Kufi" size="2" style="box-sizing: inherit;">
				الإدارة</font></td>
				<td style="box-sizing: border-box; padding: 1rem; vertical-align: top; border: 1px solid rgb(237, 237, 237); text-align: center; background-color: rgb(252, 252, 252); min-width: 20px;">
				<font face="Droid Arabic Kufi" size="2" style="box-sizing: inherit;">
				العدد</font></td>
				<td width="507" style="box-sizing: border-box; padding: 1rem; vertical-align: top; border: 1px solid rgb(237, 237, 237); text-align: center; background-color: rgb(252, 252, 252); min-width: 20px;">
				<font face="Droid Arabic Kufi" size="2" style="box-sizing: inherit;">
				المهام</font></td>
			</tr>
			<tr style="box-sizing: border-box;">
				<td style="box-sizing: border-box; padding: 1rem; vertical-align: top; border: 1px solid rgb(237, 237, 237); text-align: right; background-color: rgb(240, 240, 240); min-width: 20px;">
				<font face="Droid Arabic Kufi" size="2" style="box-sizing: inherit;">
				<span lang="AR-SA" dir="RTL" style="box-sizing: border-box; line-height: 18.4px;">
				إدارة نظام التعلم</span><br style="box-sizing: border-box;">
				</font></td>
				<td style="box-sizing: border-box; padding: 1rem; vertical-align: top; border: 1px solid rgb(237, 237, 237); text-align: center; background-color: rgb(240, 240, 240); min-width: 20px;">
				<font face="Droid Arabic Kufi" size="2" style="box-sizing: inherit;">
				1</font></td>
				<td width="507" style="box-sizing: border-box; padding: 1rem; vertical-align: top; border: 1px solid rgb(237, 237, 237); text-align: right; background-color: rgb(240, 240, 240); min-width: 20px;">
				<p class="MsoListParagraphCxSpFirst" dir="RTL" style="box-sizing: border-box; margin: 0px 10.9pt 0px auto; display: block; font-size: 10pt; color: inherit; font-family: &quot;Droid Arabic Kufi&quot;; line-height: 27px; text-align: right;">
				<span style="box-sizing: border-box; line-height: 17.25px;">1.<span style="box-sizing: border-box; font-variant-numeric: normal; font-variant-east-asian: normal; font-stretch: normal; line-height: normal;">&nbsp;</span></span><span lang="AR-SA" style="box-sizing: border-box; line-height: 17.25px;">الاشراف 
				على سير العمل في قسم التعليم الالكتروني&nbsp; &nbsp;( المنصة الالكترونية ، 
				القسم التقني ، مشرفين ، مدربين ، متدربين)</span></p>
				<p class="MsoListParagraphCxSpLast" dir="RTL" style="box-sizing: border-box; margin: 0px 10.9pt 0px auto; display: block; font-size: 10pt; color: inherit; font-family: &quot;Droid Arabic Kufi&quot;; line-height: 27px; text-align: right;">
				<span style="box-sizing: border-box; line-height: 17.25px;">2.<span style="box-sizing: border-box; font-variant-numeric: normal; font-variant-east-asian: normal; font-stretch: normal; line-height: normal;">&nbsp;</span></span><span lang="AR-SA" style="box-sizing: border-box; line-height: 17.25px;">تجهيز 
				خطة&nbsp; سير العمل بداية كل ربع</span></p>
				<span lang="AR-SA" dir="RTL" style="box-sizing: border-box; line-height: 18.4px;">
				<div style="box-sizing: border-box; text-align: right;">
					<font face="Droid Arabic Kufi" style="box-sizing: inherit;">
					<span style="box-sizing: border-box; text-align: center; font-size: 10pt;">
					تفعيل الاستثمار في برامج التدريب الالكتروني</span></font></div>
				</span></td>
			</tr>
			<tr style="box-sizing: border-box;">
				<td style="box-sizing: border-box; padding: 1rem; vertical-align: top; border: 1px solid rgb(237, 237, 237); text-align: right; background-color: rgb(252, 252, 252); min-width: 20px;">
				<font face="Droid Arabic Kufi" size="2" style="box-sizing: inherit;">
				ادارة خدمات الطالب</font></td>
				<td style="box-sizing: border-box; padding: 1rem; vertical-align: top; border: 1px solid rgb(237, 237, 237); text-align: center; background-color: rgb(252, 252, 252); min-width: 20px;">
				<font face="Droid Arabic Kufi" size="2" style="box-sizing: inherit;">
				1</font></td>
				<td width="507" style="box-sizing: border-box; padding: 1rem; vertical-align: top; border: 1px solid rgb(237, 237, 237); text-align: right; background-color: rgb(252, 252, 252); min-width: 20px;">
				<p class="MsoListParagraph" dir="RTL" style="box-sizing: border-box; margin: 0px 15.85pt 0px auto; display: block; font-size: 10pt; color: inherit; font-family: &quot;Droid Arabic Kufi&quot;; line-height: 27px; text-align: right;">
				1.<span style="box-sizing: border-box; line-height: 17.25px">&nbsp;&nbsp;&nbsp;العمل 
				على متابعة كل ما يخص المتعلمين (الحضور ورفع أعذار الغياب ،اصدار 
				الافادات ، تسجيل المواد )</span></p>
				<div style="box-sizing: border-box; text-align: right;">
					<p class="MsoListParagraph" dir="RTL" style="box-sizing: border-box; margin: 0px 15.85pt 0px auto; display: block; font-size: 10pt; color: inherit; font-family: &quot;Droid Arabic Kufi&quot;; line-height: 27px; text-align: right;">
					<span style="box-sizing: border-box; line-height: 17.25px;">
					2. رفع طلبات التأجيل والحرمان والانسحاب ، معالجة مشاكلهم&nbsp;</span></div>
				</td>
			</tr>
			<tr style="box-sizing: border-box;">
				<td style="box-sizing: border-box; padding: 1rem; vertical-align: top; border: 1px solid rgb(237, 237, 237); text-align: right; background-color: rgb(240, 240, 240); min-width: 20px;">
				<font face="Droid Arabic Kufi" size="2" style="box-sizing: inherit;">
				<span lang="AR-SA" dir="RTL" style="box-sizing: border-box; line-height: 18.4px;">
				ادارة تطوير وإدارة التطبيقات</span><br style="box-sizing: border-box;">
				</font></td>
				<td style="box-sizing: border-box; padding: 1rem; vertical-align: top; border: 1px solid rgb(237, 237, 237); text-align: center; background-color: rgb(240, 240, 240); min-width: 20px;">
				<font face="Droid Arabic Kufi" size="2" style="box-sizing: inherit;">
				1</font></td>
				<td width="507" style="box-sizing: border-box; padding: 1rem; vertical-align: top; border: 1px solid rgb(237, 237, 237); text-align: right; background-color: rgb(240, 240, 240); min-width: 20px;">
				<p class="MsoListParagraph" dir="RTL" style="box-sizing: border-box; margin: 0px 15.85pt 0px auto; display: block; font-size: 10pt; color: inherit; font-family: &quot;Droid Arabic Kufi&quot;; line-height: 27px; text-align: right;">
				<span style="box-sizing: inherit; line-height: 17.25px;">1.<span style="box-sizing: border-box; line-height: 17.25px;">&nbsp;تجهيز 
				خطة سير العمل بداية كل ربع</span></span></p>
				<p class="MsoListParagraph" dir="RTL" style="box-sizing: border-box; margin: 0px 15.85pt 0px auto; display: block; font-size: 10pt; color: inherit; font-family: &quot;Droid Arabic Kufi&quot;; line-height: 27px; text-align: right;">
				<span style="box-sizing: border-box; line-height: 17.25px;">2. 
				الاشراف على المشاريع التشغيلية والتطويرية في القسم</span></td>
			</tr>
			<tr style="box-sizing: border-box;">
				<td style="box-sizing: border-box; padding: 1rem; vertical-align: top; border: 1px solid rgb(237, 237, 237); text-align: right; background-color: rgb(252, 252, 252); min-width: 20px;">
				<font face="Droid Arabic Kufi" size="2" style="box-sizing: inherit;">
				<span lang="AR-SA" dir="RTL" style="box-sizing: border-box; line-height: 18.4px;">
				ادارة الدعم الفني والتقني</span><br style="box-sizing: border-box;">
				</font></td>
				<td style="box-sizing: border-box; padding: 1rem; vertical-align: top; border: 1px solid rgb(237, 237, 237); text-align: center; background-color: rgb(252, 252, 252); min-width: 20px;">
				<font face="Droid Arabic Kufi" size="2" style="box-sizing: inherit;">
				1</font></td>
				<td width="507" style="box-sizing: border-box; padding: 1rem; vertical-align: top; border: 1px solid rgb(237, 237, 237); text-align: right; background-color: rgb(252, 252, 252); min-width: 20px;">
				<p class="MsoListParagraph" dir="RTL" style="box-sizing: border-box; margin: 0px 18pt 0px auto; display: block; font-size: 10pt; color: inherit; font-family: &quot;Droid Arabic Kufi&quot;; line-height: 27px;">
				<span style="box-sizing: border-box; line-height: 17.25px;">1.<span style="box-sizing: border-box; font-variant-numeric: normal; font-variant-east-asian: normal; font-stretch: normal; line-height: normal;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span></span><span lang="AR-SA" style="box-sizing: border-box; line-height: 17.25px;">تقديم 
				الدعم الفني في البيئة الاكاديمية</span></p>
				<font face="Droid Arabic Kufi" size="2" style="box-sizing: inherit;">
				<span dir="RTL" style="box-sizing: border-box; line-height: 18.4px;">
				&nbsp;</span><span lang="AR-SA" dir="RTL" style="box-sizing: border-box; line-height: 18.4px;">&nbsp; 
				&nbsp; &nbsp;2. متابعة سير عمل المنصة الالكترونية بصورة يومية</span></font></td>
			</tr>
	</table></p>
	
	
	<table border="1" width="100%" style="border-collapse: collapse">
					<tr>
						<td colspan="3" bgcolor="#EDEDED">
						<p align="center">معلومات كاملة لكل فريق وآلية التواصل معهم

</td>
					</tr>
					<tr>
						<td align="center" bgcolor="#EDEDED" style="height: 23px">الاسم</td>
						<td align="center" bgcolor="#EDEDED" style="height: 23px">وسيلة الاتصال</td>
						<td align="center" bgcolor="#EDEDED" style="height: 23px">الادارة</td>
					</tr>
					<tr>
						<td align="center">عماد زهير عبدالقادر حاف	</td>
						<td align="center">Emad@khubara-alada.sa</td>
						<td align="center">إدارة نظام التعلم

</td>
					</tr>
					<tr>
						<td align="center">محمود سعود محمود الشريف</td>
						<td align="center">Mahmoud@khubara-alada.sa</td>
						<td align="center">إدارة خدمات الطالب

</td>
					</tr>
					<tr>
						<td align="center">محمد بن عبدالله
</td>
						<td align="center">Muhammad@khubara-alada.sa</td>
						<td align="center">إدارة تطوير وإدارة التطبيقات

</td>
					</tr>
					<tr>
						<td align="center" style="height: 22px">مصعب بن عمر 	</td>
						<td align="center" style="height: 22px">Musab@khubara-alada.sa

</td>
						<td align="center" style="height: 22px">إدارة الدعم الفني والتقني

</td>
					</tr>
				</table>

            <div class="clearfix"></div>
 
     <!--       <div class="separator separator-rouned">
              <i class="fa fa-cog fa-spin"></i>
            </div>
             
          -->  
           
          </div>
        </div>
      </div>
    </section>
 


    
    
    
    
    <!-- Divider: Funfact -->
    <section class="layer-overlay overlay-theme-colored-9" data-bg-img="images/we-provide-bg.jpg" data-parallax-ratio="0.7">
      <div class="container pt-90 pb-90">
        <div class="row mt-30">
           
           
   <?php
$result=mysqli_query($conn,"select* from count_pro  ");
while($row=mysqli_fetch_array($result))
{
?>           
          <div class="col-xs-12 col-sm-6 col-md-3 mb-md-50">
            <div class="funfact text-center">
              <i class="pe-7s-<?php echo $row['logo']; ?> mb-20 text-theme-colored2"></i>
              <h2 data-animation-duration="2000" data-value="<?php echo $row['num']; ?>" class="animate-number text-white font-38 font-weight-400 mt-0 mb-15">0</h2>
              <h5 class="text-white text-uppercase"><?php echo $row['name']; ?></h5>
            </div>
          </div><?php } ?>
          
        </div>
      </div>
    </section>

    <!-- Section: Team -->
   <?php
  
$result=mysqli_query($conn,"select* from teachers order by rand() limit 4");
$rows=mysqli_num_rows($result) ; 
if($rows > 0 )
{
?>
<!-- Section: Team -->
    <section id="team" class="bg-silver-deep">
      <div class="container pb-40">
        <div class="section-title">
          <div class="row">
            <div class="col-md-12">
              <h2 class="text-uppercase title">الهيئة <span class="text-theme-colored2">التدريبية</span></h2>              
              <p class="text-uppercase mb-0">لدينا معلمين مؤهلين تأهيلاً عالياً</p>
					  	<div class="double-line-bottom-theme-colored-2"></div>
						</div>
          </div>
        </div>
        <div class="row mtli-row-clearfix">
           
           
<?php
while($row=mysqli_fetch_array($result))
{
?>           <div class="col-xs-12 col-sm-6 col-md-3">
            <div class="team-members border-bottom-theme-colored2px text-center maxwidth400 mb-30">
              <div class="team-thumb">
                <img class="img-fullwidth" alt="" src="images/partners/<?php echo $row['img']; ?>">
                <div class="team-overlay"></div>
                <ul class="styled-icons team-social icon-sm">
                  <li><a href="<?php echo $row['facebook']; ?>"><i class="fa fa-facebook"></i></a></li>
                  <li><a href="<?php echo $row['twitter']; ?>"><i class="fa fa-twitter"></i></a></li>
                  <li><a href="<?php echo $row['instagram']; ?>"><i class="fa fa-instagram"></i></a></li>
                  <li><a href="<?php echo $row['whatsapp']; ?>"><i class="fa fa-whatsapp"></i></a></li>
                </ul>
              </div>
              <div class="team-details">
                <h4 class=" font-weight-400  " ><?php echo $row['name_ar']; ?></h4>
                <h6 class="text-gray font-13 font-weight-400 line-bottom-centered mt-0"><?php echo $row['job_ar']; ?></h6>
                <p class="hidden-md"><?php echo substr($row['details_ar'],0,150); ?></p>
              </div>
            </div>
          </div>
          <?php } ?>
        </div>
      </div>
    </section>
          <?php } ?>

  </div>
  <!-- end main-content -->
  
  <!-- Footer -->
    <?php include 'footer.php'; ?>
  
  
  <a class="scrollToTop" href="#"><i class="fa fa-angle-up"></i></a>
</div>
<!-- end wrapper -->

<!-- Footer Scripts -->
<!-- JS | Custom script for all pages -->
<script src="js/custom.js"></script>

</body>
</html>