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
              <h2 class="text-theme-colored2 font-36"> </h2>
              <ol class="breadcrumb   mt-10 white">
                <li><a href="index.php">الرئيسية</a></li>
                <li class="active">  
النزاهة الاكاديمية</li>
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
         <h2 class="text-uppercasetext-theme-colored mt-0 mt-sm-30"><br>النزاهة الاكاديمية

</h2> 
                          	<div class="double-line-bottom-theme-colored-2"></div>

           
            <p><p dir="RTL" style="box-sizing: inherit; color: rgb(68, 68, 68); font-family: Roboto, 'Droid Arabic Kufi', sans-serif; font-size: 14px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; text-decoration-thickness: initial; text-decoration-style: initial; text-decoration-color: initial; text-align: right; direction: rtl; unicode-bidi: embed; margin-left: 0in; margin-right: 0in; margin-top: 0in; margin-bottom: 22.5pt; background: white">
<span dir="LTR" style="box-sizing: inherit; font-size: 10pt; font-family: &quot;Droid Arabic Kufi&quot;, sans-serif; color: rgb(39, 48, 68);">
&nbsp;</span><span lang="AR-SA" style="box-sizing: inherit; font-size: 10pt; font-family: &quot;Droid Arabic Kufi&quot;, sans-serif; color: rgb(39, 48, 68);">من 
منطلق الحفاظ على القيم الأخلاقية العلمية والمهنية التي يحثنا عليها ديننا الحنيف، 
ويعمل <?php echo $site_name; ?> دوما علي تعزيزها في بيئته التدريبية من خلال 
التشديد الدائم علي الالتزام بأعلى معايير النزاهة الأكاديمية سواء من جهة المدربين 
والعاملين بالمركز أو المتدربين، حيث يتولى <?php echo $site_name; ?> مسئولية 
تهيئة بيئة تتوافر بها مستويات رفيعة من النزاهة الأكاديمية من خلال وضع معايير 
وضوابط للعملية التدريبية&nbsp; تعمل علي تحقيق النزاهة الأكاديمية في كافة مراحل 
العملية التدريبية بداية من تسجيل المتدربين بالبرامج التدريبية أو أثناء التدريب 
أو في مرحلة الاختبارات والنتائج، حيث يؤمن <?php echo $site_name; ?> بأن تعزيز 
النزاهة الأكاديمية تمثل جزءًا أساسيًا من النمو الشخصي والفكري للمتدرب، وأن زيادة 
وعي المتدرب والمدربون والموظفين بالقضايا ذات الصلة بالنزاهة الأكاديمية من خلال 
تعزيز مناخ تسوده روح الثقة والأمانة والمعايير الأخلاقية الرفيعة يساهم بدور رئيس 
في تقدم المجتمع وازدهاره من خلال تخريج كوادر قادرة علي تحمل مسئولية تقدم ورفعة 
الوطن نظرا لما تتمتع به من القيم الأخلاقية العالية</span><span dir="LTR" style="box-sizing: inherit; font-size: 10pt; font-family: &quot;Droid Arabic Kufi&quot;, sans-serif; color: rgb(39, 48, 68);">.</span></p>
<p dir="RTL" style="box-sizing: border-box; color: rgb(68, 68, 68); font-family: Roboto, 'Droid Arabic Kufi', sans-serif; font-size: 14px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; text-decoration-thickness: initial; text-decoration-style: initial; text-decoration-color: initial; direction: rtl; unicode-bidi: embed; margin-left: 0in; margin-right: 0in; margin-top: 0in; margin-bottom: 22.5pt; background: white">
<span lang="AR-SA" style="box-sizing: inherit; font-size: 10pt; font-family: &quot;Droid Arabic Kufi&quot;, sans-serif; color: rgb(39, 48, 68);">
ومن أشكال انتهاك قوانين النزاهة الأكاديمية ما يلي</span><span dir="LTR" style="box-sizing: inherit; font-size: 10pt; font-family: &quot;Droid Arabic Kufi&quot;, sans-serif; color: rgb(39, 48, 68);">:</span></p>
<ul type="disc" style="box-sizing: border-box; margin-top: 0px; margin-bottom: 0in; color: rgb(68, 68, 68); font-family: Roboto, &quot;Droid Arabic Kufi&quot;, sans-serif; font-size: 14px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255); text-decoration-thickness: initial; text-decoration-style: initial; text-decoration-color: initial;">
	<li class="MsoNormal" dir="RTL" style="box-sizing: border-box; line-height: normal; font-size: 11pt; font-family: Calibri, sans-serif; color: rgb(39, 48, 68); text-align: right; direction: rtl; unicode-bidi: embed; margin-left: 0in; margin-right: 0.5in; margin-top: 0in; margin-bottom: 6pt; background: white">
	<strong style="box-sizing: border-box; font-weight: bolder;">
	<span lang="AR-SA" style="box-sizing: inherit; font-size: 10pt; font-family: &quot;Droid Arabic Kufi&quot;, sans-serif; font-weight: normal;">
	الغش</span></strong><strong style="box-sizing: inherit; font-weight: bolder;"><span dir="LTR" style="box-sizing: inherit; font-size: 10pt; font-family: &quot;Droid Arabic Kufi&quot;, sans-serif; font-weight: normal;">:</span></strong><span dir="LTR" style="box-sizing: inherit; font-size: 10pt; font-family: &quot;Droid Arabic Kufi&quot;, sans-serif;">&nbsp;</span><strong style="box-sizing: border-box; font-weight: bolder;"><span lang="AR-SA" style="box-sizing: inherit; font-size: 10pt; font-family: &quot;Droid Arabic Kufi&quot;, sans-serif; font-weight: normal;">وهو 
	نقل أعمال الآخرين والاستخدام غير المصرح به لأي معلومات ومواد تدريبية في 
	الاختبارات الأكاديمية أو غيرها من المهام الموكلة للمتدربين</span><span dir="LTR" style="box-sizing: inherit; font-size: 10pt; font-family: &quot;Droid Arabic Kufi&quot;, sans-serif; font-weight: normal;">.</span></strong></li>
	<li class="MsoNormal" dir="RTL" style="box-sizing: border-box; line-height: normal; font-size: 11pt; font-family: Calibri, sans-serif; color: rgb(39, 48, 68); text-align: right; direction: rtl; unicode-bidi: embed; margin-left: 0in; margin-right: 0.5in; margin-top: 0in; margin-bottom: 6pt; background: white">
	<strong style="box-sizing: border-box; font-weight: bolder;">
	<span lang="AR-SA" style="box-sizing: inherit; font-size: 10pt; font-family: &quot;Droid Arabic Kufi&quot;, sans-serif; font-weight: normal;">
	الانتحال الأدبي والسرقة الفكرية</span></strong><strong style="box-sizing: inherit; font-weight: bolder;"><span dir="LTR" style="box-sizing: inherit; font-size: 10pt; font-family: &quot;Droid Arabic Kufi&quot;, sans-serif; font-weight: normal;">:</span></strong><span dir="LTR" style="box-sizing: inherit; font-size: 10pt; font-family: &quot;Droid Arabic Kufi&quot;, sans-serif;">&nbsp;</span><strong style="box-sizing: border-box; font-weight: bolder;"><span lang="AR-SA" style="box-sizing: inherit; font-size: 10pt; font-family: &quot;Droid Arabic Kufi&quot;, sans-serif; font-weight: normal;">وهي 
	استخدام</span></strong><span lang="AR-SA" style="box-sizing: inherit; font-size: 10pt; font-family: &quot;Droid Arabic Kufi&quot;, sans-serif;">&nbsp;<strong style="box-sizing: border-box; font-weight: bolder;"><span style="box-sizing: inherit; font-family: &quot;Droid Arabic Kufi&quot;, sans-serif; font-weight: normal;">عمل</span></strong>&nbsp;<strong style="box-sizing: border-box; font-weight: bolder;"><span style="box-sizing: inherit; font-family: &quot;Droid Arabic Kufi&quot;, sans-serif; font-weight: normal;">الأخرين</span></strong>&nbsp;<strong style="box-sizing: border-box; font-weight: bolder;"><span style="box-sizing: inherit; font-family: &quot;Droid Arabic Kufi&quot;, sans-serif; font-weight: normal;">كأنه</span></strong>&nbsp;<strong style="box-sizing: border-box; font-weight: bolder;"><span style="box-sizing: inherit; font-family: &quot;Droid Arabic Kufi&quot;, sans-serif; font-weight: normal;">عمل</span></strong>&nbsp;<strong style="box-sizing: border-box; font-weight: bolder;"><span style="box-sizing: inherit; font-family: &quot;Droid Arabic Kufi&quot;, sans-serif; font-weight: normal;">الشخص، 
	دون الإشارة إلي صاحب العمل الأصلي</span></strong></span><strong style="box-sizing: border-box; font-weight: bolder;"><span dir="LTR" style="box-sizing: inherit; font-size: 10pt; font-family: &quot;Droid Arabic Kufi&quot;, sans-serif; font-weight: normal;">.</span></strong></li>
	<li class="MsoNormal" dir="RTL" style="box-sizing: border-box; line-height: normal; font-size: 11pt; font-family: Calibri, sans-serif; color: rgb(39, 48, 68); text-align: right; direction: rtl; unicode-bidi: embed; margin-left: 0in; margin-right: 0.5in; margin-top: 0in; margin-bottom: 6pt; background: white">
	<strong style="box-sizing: border-box; font-weight: bolder;">
	<span lang="AR-SA" style="box-sizing: inherit; font-size: 10pt; font-family: &quot;Droid Arabic Kufi&quot;, sans-serif; font-weight: normal;">
	استغلال التعاون</span><span dir="LTR" style="box-sizing: inherit; font-size: 10pt; font-family: &quot;Droid Arabic Kufi&quot;, sans-serif; font-weight: normal;">:&nbsp;</span><span lang="AR-SA" style="box-sizing: inherit; font-size: 10pt; font-family: &quot;Droid Arabic Kufi&quot;, sans-serif; font-weight: normal;">اعتماد 
	المتدرب على متدرب</span></strong><span lang="AR-SA" style="box-sizing: inherit; font-size: 10pt; font-family: &quot;Droid Arabic Kufi&quot;, sans-serif;">&nbsp;<strong style="box-sizing: border-box; font-weight: bolder;"><span style="box-sizing: inherit; font-family: &quot;Droid Arabic Kufi&quot;, sans-serif; font-weight: normal;">آخر 
	ضمن مجموعته لإنجاز واجب أو عمل مشترك، أو استغلال متدرب آخر لإنجاز الواجبات 
	الفردية</span></strong></span><strong style="box-sizing: border-box; font-weight: bolder;"><span dir="LTR" style="box-sizing: inherit; font-size: 10pt; font-family: &quot;Droid Arabic Kufi&quot;, sans-serif; font-weight: normal;">.</span></strong></li>
	<li class="MsoNormal" dir="RTL" style="box-sizing: border-box; line-height: normal; font-size: 11pt; font-family: Calibri, sans-serif; color: rgb(39, 48, 68); text-align: right; direction: rtl; unicode-bidi: embed; margin-left: 0in; margin-right: 0.5in; margin-top: 0in; margin-bottom: 6pt; background: white">
	<strong style="box-sizing: border-box; font-weight: bolder;">
	<span lang="AR-SA" style="box-sizing: inherit; font-size: 10pt; font-family: &quot;Droid Arabic Kufi&quot;, sans-serif; font-weight: normal;">
	التلفيق والتزوير</span></strong><strong style="box-sizing: inherit; font-weight: bolder;"><span dir="LTR" style="box-sizing: inherit; font-size: 10pt; font-family: &quot;Droid Arabic Kufi&quot;, sans-serif; font-weight: normal;">:</span></strong><strong style="box-sizing: border-box; font-weight: bolder;"><span lang="AR-SA" style="box-sizing: inherit; font-size: 10pt; font-family: &quot;Droid Arabic Kufi&quot;, sans-serif; font-weight: normal;">إقدام 
	المتدرب على تغيير المعلومات المتاحة له أو تلفيقها في اختبار أو واجب أكاديمي، 
	أو إحضاره لشهادة طبية مزوّرة من أجل التغيب عن الحضور</span><span dir="LTR" style="box-sizing: inherit; font-size: 10pt; font-family: &quot;Droid Arabic Kufi&quot;, sans-serif; font-weight: normal;">.</span></strong></li>
	<li class="MsoNormal" dir="RTL" style="box-sizing: border-box; line-height: normal; font-size: 11pt; font-family: Calibri, sans-serif; color: rgb(39, 48, 68); text-align: right; direction: rtl; unicode-bidi: embed; margin-left: 0in; margin-right: 0.5in; margin-top: 0in; margin-bottom: 6pt; background: white">
	<strong style="box-sizing: border-box; font-weight: bolder;">
	<span lang="AR-SA" style="box-sizing: inherit; font-size: 10pt; font-family: &quot;Droid Arabic Kufi&quot;, sans-serif; font-weight: normal;">
	تلقي المتدرب</span></strong><span lang="AR-SA" style="box-sizing: inherit; font-size: 10pt; font-family: &quot;Droid Arabic Kufi&quot;, sans-serif;">&nbsp;<strong style="box-sizing: border-box; font-weight: bolder;"><span style="box-sizing: inherit; font-family: &quot;Droid Arabic Kufi&quot;, sans-serif; font-weight: normal;">ا&#1620;ي</span></strong>&nbsp;<strong style="box-sizing: border-box; font-weight: bolder;"><span style="box-sizing: inherit; font-family: &quot;Droid Arabic Kufi&quot;, sans-serif; font-weight: normal;">مساعدة 
	في الاختبارات</span></strong>&nbsp;<strong style="box-sizing: border-box; font-weight: bolder;"><span style="box-sizing: inherit; font-family: &quot;Droid Arabic Kufi&quot;, sans-serif; font-weight: normal;">ا&#1620;و</span></strong>&nbsp;<strong style="box-sizing: border-box; font-weight: bolder;"><span style="box-sizing: inherit; font-family: &quot;Droid Arabic Kufi&quot;, sans-serif; font-weight: normal;">تقديم</span></strong>&nbsp;<strong style="box-sizing: border-box; font-weight: bolder;"><span style="box-sizing: inherit; font-family: &quot;Droid Arabic Kufi&quot;, sans-serif; font-weight: normal;">معلومات</span></strong>&nbsp;<strong style="box-sizing: border-box; font-weight: bolder;"><span style="box-sizing: inherit; font-family: &quot;Droid Arabic Kufi&quot;, sans-serif; font-weight: normal;">لمتدرب</span></strong>&nbsp;<strong style="box-sizing: border-box; font-weight: bolder;"><span style="box-sizing: inherit; font-family: &quot;Droid Arabic Kufi&quot;, sans-serif; font-weight: normal;">ا&#1620;خر</span></strong>&nbsp;<strong style="box-sizing: border-box; font-weight: bolder;"><span style="box-sizing: inherit; font-family: &quot;Droid Arabic Kufi&quot;, sans-serif; font-weight: normal;">ا&#1620;و</span></strong>&nbsp;<strong style="box-sizing: border-box; font-weight: bolder;"><span style="box-sizing: inherit; font-family: &quot;Droid Arabic Kufi&quot;, sans-serif; font-weight: normal;">احضار</span></strong>&nbsp;<strong style="box-sizing: border-box; font-weight: bolder;"><span style="box-sizing: inherit; font-family: &quot;Droid Arabic Kufi&quot;, sans-serif; font-weight: normal;">أوراق</span></strong>&nbsp;<strong style="box-sizing: border-box; font-weight: bolder;"><span style="box-sizing: inherit; font-family: &quot;Droid Arabic Kufi&quot;, sans-serif; font-weight: normal;">خارجية</span></strong>&nbsp;<strong style="box-sizing: border-box; font-weight: bolder;"><span style="box-sizing: inherit; font-family: &quot;Droid Arabic Kufi&quot;, sans-serif; font-weight: normal;">في</span></strong>&nbsp;<strong style="box-sizing: border-box; font-weight: bolder;"><span style="box-sizing: inherit; font-family: &quot;Droid Arabic Kufi&quot;, sans-serif; font-weight: normal;">الاختبار</span></strong>&nbsp;<strong style="box-sizing: border-box; font-weight: bolder;"><span style="box-sizing: inherit; font-family: &quot;Droid Arabic Kufi&quot;, sans-serif; font-weight: normal;">والحصول</span></strong>&nbsp;<strong style="box-sizing: border-box; font-weight: bolder;"><span style="box-sizing: inherit; font-family: &quot;Droid Arabic Kufi&quot;, sans-serif; font-weight: normal;">على</span></strong>&nbsp;<strong style="box-sizing: border-box; font-weight: bolder;"><span style="box-sizing: inherit; font-family: &quot;Droid Arabic Kufi&quot;, sans-serif; font-weight: normal;">معلومات</span></strong>&nbsp;<strong style="box-sizing: border-box; font-weight: bolder;"><span style="box-sizing: inherit; font-family: &quot;Droid Arabic Kufi&quot;, sans-serif; font-weight: normal;">لم</span></strong>&nbsp;<strong style="box-sizing: border-box; font-weight: bolder;"><span style="box-sizing: inherit; font-family: &quot;Droid Arabic Kufi&quot;, sans-serif; font-weight: normal;">تقدم</span></strong>&nbsp;<strong style="box-sizing: border-box; font-weight: bolder;"><span style="box-sizing: inherit; font-family: &quot;Droid Arabic Kufi&quot;, sans-serif; font-weight: normal;">من</span></strong>&nbsp;<strong style="box-sizing: border-box; font-weight: bolder;"><span style="box-sizing: inherit; font-family: &quot;Droid Arabic Kufi&quot;, sans-serif; font-weight: normal;">قبل</span></strong>&nbsp;<strong style="box-sizing: border-box; font-weight: bolder;"><span style="box-sizing: inherit; font-family: &quot;Droid Arabic Kufi&quot;, sans-serif; font-weight: normal;">معدي</span></strong>&nbsp;<strong style="box-sizing: border-box; font-weight: bolder;"><span style="box-sizing: inherit; font-family: &quot;Droid Arabic Kufi&quot;, sans-serif; font-weight: normal;">الاختبار</span></strong></span><strong style="box-sizing: inherit; font-weight: bolder;"><span dir="LTR" style="box-sizing: inherit; font-size: 10pt; font-family: &quot;Droid Arabic Kufi&quot;, sans-serif; font-weight: normal;">.</span></strong></li>
	<li class="MsoNormal" dir="RTL" style="box-sizing: border-box; line-height: normal; font-size: 11pt; font-family: Calibri, sans-serif; color: rgb(39, 48, 68); text-align: right; direction: rtl; unicode-bidi: embed; margin-left: 0in; margin-right: 0.5in; margin-top: 0in; margin-bottom: 6pt; background: white">
	<strong style="box-sizing: border-box; font-weight: bolder;">
	<span lang="AR-SA" style="box-sizing: inherit; font-size: 10pt; font-family: &quot;Droid Arabic Kufi&quot;, sans-serif; font-weight: normal;">
	الحصول</span></strong><span lang="AR-SA" style="box-sizing: inherit; font-size: 10pt; font-family: &quot;Droid Arabic Kufi&quot;, sans-serif;">&nbsp;<strong style="box-sizing: border-box; font-weight: bolder;"><span style="box-sizing: inherit; font-family: &quot;Droid Arabic Kufi&quot;, sans-serif; font-weight: normal;">ا&#1620;و</span></strong>&nbsp;<strong style="box-sizing: border-box; font-weight: bolder;"><span style="box-sizing: inherit; font-family: &quot;Droid Arabic Kufi&quot;, sans-serif; font-weight: normal;">تقديم</span></strong>&nbsp;<strong style="box-sizing: border-box; font-weight: bolder;"><span style="box-sizing: inherit; font-family: &quot;Droid Arabic Kufi&quot;, sans-serif; font-weight: normal;">مساعدة</span></strong>&nbsp;<strong style="box-sizing: border-box; font-weight: bolder;"><span style="box-sizing: inherit; font-family: &quot;Droid Arabic Kufi&quot;, sans-serif; font-weight: normal;">غير</span></strong>&nbsp;<strong style="box-sizing: border-box; font-weight: bolder;"><span style="box-sizing: inherit; font-family: &quot;Droid Arabic Kufi&quot;, sans-serif; font-weight: normal;">مصرح</span></strong>&nbsp;<strong style="box-sizing: border-box; font-weight: bolder;"><span style="box-sizing: inherit; font-family: &quot;Droid Arabic Kufi&quot;, sans-serif; font-weight: normal;">بها</span></strong>&nbsp;<strong style="box-sizing: border-box; font-weight: bolder;"><span style="box-sizing: inherit; font-family: &quot;Droid Arabic Kufi&quot;, sans-serif; font-weight: normal;">في</span></strong>&nbsp;<strong style="box-sizing: border-box; font-weight: bolder;"><span style="box-sizing: inherit; font-family: &quot;Droid Arabic Kufi&quot;, sans-serif; font-weight: normal;">الامتحانات، 
	أو تلفيق</span></strong>&nbsp;<strong style="box-sizing: border-box; font-weight: bolder;"><span style="box-sizing: inherit; font-family: &quot;Droid Arabic Kufi&quot;, sans-serif; font-weight: normal;">المعلومات</span></strong>&nbsp;<strong style="box-sizing: border-box; font-weight: bolder;"><span style="box-sizing: inherit; font-family: &quot;Droid Arabic Kufi&quot;, sans-serif; font-weight: normal;">لدعم</span></strong>&nbsp;<strong style="box-sizing: border-box; font-weight: bolder;"><span style="box-sizing: inherit; font-family: &quot;Droid Arabic Kufi&quot;, sans-serif; font-weight: normal;">نتائج</span></strong>&nbsp;<strong style="box-sizing: border-box; font-weight: bolder;"><span style="box-sizing: inherit; font-family: &quot;Droid Arabic Kufi&quot;, sans-serif; font-weight: normal;">المختبر</span></strong>&nbsp;<strong style="box-sizing: border-box; font-weight: bolder;"><span style="box-sizing: inherit; font-family: &quot;Droid Arabic Kufi&quot;, sans-serif; font-weight: normal;">ا&#1620;و</span></strong>&nbsp;<strong style="box-sizing: border-box; font-weight: bolder;"><span style="box-sizing: inherit; font-family: &quot;Droid Arabic Kufi&quot;, sans-serif; font-weight: normal;">ا&#1620;ي</span></strong>&nbsp;<strong style="box-sizing: border-box; font-weight: bolder;"><span style="box-sizing: inherit; font-family: &quot;Droid Arabic Kufi&quot;, sans-serif; font-weight: normal;">من</span></strong>&nbsp;<strong style="box-sizing: border-box; font-weight: bolder;"><span style="box-sizing: inherit; font-family: &quot;Droid Arabic Kufi&quot;, sans-serif; font-weight: normal;">الأعمال</span></strong>&nbsp;<strong style="box-sizing: border-box; font-weight: bolder;"><span style="box-sizing: inherit; font-family: &quot;Droid Arabic Kufi&quot;, sans-serif; font-weight: normal;">الأكاديمية</span></strong>&nbsp;<strong style="box-sizing: border-box; font-weight: bolder;"><span style="box-sizing: inherit; font-family: &quot;Droid Arabic Kufi&quot;, sans-serif; font-weight: normal;">الأخرى</span></strong></span><strong style="box-sizing: border-box; font-weight: bolder;"><span dir="LTR" style="box-sizing: inherit; font-size: 10pt; font-family: &quot;Droid Arabic Kufi&quot;, sans-serif; font-weight: normal;">.</span></strong></li>
	<li class="MsoNormal" dir="RTL" style="box-sizing: border-box; line-height: normal; font-size: 11pt; font-family: Calibri, sans-serif; color: rgb(39, 48, 68); text-align: right; direction: rtl; unicode-bidi: embed; margin-left: 0in; margin-right: 0.5in; margin-top: 0in; margin-bottom: 6pt; background: white">
	<strong style="box-sizing: border-box; font-weight: bolder;">
	<span lang="AR-SA" style="box-sizing: inherit; font-size: 10pt; font-family: &quot;Droid Arabic Kufi&quot;, sans-serif; font-weight: normal;">
	انتحال شخصية الغير</span><span dir="LTR" style="box-sizing: inherit; font-size: 10pt; font-family: &quot;Droid Arabic Kufi&quot;, sans-serif; font-weight: normal;">:&nbsp;</span><span lang="AR-SA" style="box-sizing: inherit; font-size: 10pt; font-family: &quot;Droid Arabic Kufi&quot;, sans-serif; font-weight: normal;">ادعاء 
	المتدرب صفة غيره داخل الصف، أو في اختبار أو امتحان، أو في أي نوع من الواجبات 
	الأكاديمية</span><span dir="LTR" style="box-sizing: inherit; font-size: 10pt; font-family: &quot;Droid Arabic Kufi&quot;, sans-serif; font-weight: normal;">.&nbsp;</span><span lang="AR-SA" style="box-sizing: inherit; font-size: 10pt; font-family: &quot;Droid Arabic Kufi&quot;, sans-serif; font-weight: normal;">وفي 
	هذه الحالة، تتم معاقبة المتدرب المنتحل شخصية غيره، والمتدرب الدافع للانتحال</span></strong><strong style="box-sizing: inherit; font-weight: bolder;"><span dir="LTR" style="box-sizing: inherit; font-size: 10pt; font-family: &quot;Droid Arabic Kufi&quot;, sans-serif; font-weight: normal;">.</span></strong></li>
</ul>
			<h3 dir="RTL" style="text-align: right; direction: rtl; unicode-bidi: embed; margin-left: 0cm; margin-right: 0cm; margin-top: 0cm; margin-bottom: 22.5pt; background: white">
			<strong>
			<span lang="AR-SA" style="font-size:14.0pt;line-height:115%;
font-family:&quot;Sakkal Majalla&quot;;color:red;letter-spacing:-.25pt">
			الإجراءات المتخذة في الجهة حيال الأشكال المتعددة لانتهاك النزاهة</span><span lang="EN-US" dir="LTR" style="font-size:14.0pt;
line-height:115%;font-family:&quot;Sakkal Majalla&quot;;color:red;letter-spacing:-.25pt">:</span></strong></h3>
			<p class="MsoListParagraphCxSpFirst" dir="RTL" style="text-align: right; text-indent: -18.0pt; line-height: normal; direction: rtl; unicode-bidi: embed; margin-left: 0cm; margin-right: 54.0pt; margin-bottom: 6.0pt; background: white">
			<strong>
			<span lang="EN-US" style="font-size: 14.0pt; font-family: Symbol; color: #273044">
			·<span style="font:7.0pt &quot;Times New Roman&quot;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span>
			</span>
			<span lang="AR-SA" style="font-size:14.0pt;font-family:&quot;Sakkal Majalla&quot;;color:#273044">
			التوقيف المؤقت للحساب والحرمان من التمتع بخدمات المنصة</span></strong></p>
			<p class="MsoListParagraphCxSpMiddle" dir="RTL" style="text-align: right; text-indent: -18.0pt; line-height: normal; direction: rtl; unicode-bidi: embed; margin-left: 0cm; margin-right: 54.0pt; margin-bottom: 6.0pt; background: white">
			<strong>
			<span lang="EN-US" style="font-size: 14.0pt; font-family: Symbol; color: #273044">
			·<span style="font:7.0pt &quot;Times New Roman&quot;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span>
			</span>
			<span lang="AR-SA" style="font-size:14.0pt;font-family:&quot;Sakkal Majalla&quot;;color:#273044">
			إلغاء اختبار الدورة في حالات الغش</span><span lang="EN-US" dir="LTR" style="font-size:14.0pt;font-family:&quot;Sakkal Majalla&quot;;
color:#273044">.</span></strong></p>
			<p class="MsoListParagraphCxSpMiddle" dir="RTL" style="text-align: right; text-indent: -18.0pt; line-height: normal; direction: rtl; unicode-bidi: embed; margin-left: 0cm; margin-right: 54.0pt; margin-bottom: 6.0pt; background: white">
			<strong>
			<span lang="EN-US" style="font-size: 14.0pt; font-family: Symbol; color: #273044">
			·<span style="font:7.0pt &quot;Times New Roman&quot;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span>
			</span>
			<span lang="AR-SA" style="font-size:14.0pt;font-family:&quot;Sakkal Majalla&quot;;color:#273044">
			تعليق الحساب وجميع إنجازاته وشهاداته في المنصة</span></strong></p>
			<p class="MsoListParagraphCxSpMiddle" dir="RTL" style="text-align: right; text-indent: -18.0pt; line-height: normal; direction: rtl; unicode-bidi: embed; margin-left: 0cm; margin-right: 54.0pt; margin-bottom: 6.0pt; background: white">
			<strong>
			<span lang="EN-US" style="font-size: 14.0pt; font-family: Symbol; color: #273044">
			·<span style="font:7.0pt &quot;Times New Roman&quot;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span>
			</span>
			<span lang="AR-SA" style="font-size:14.0pt;font-family:&quot;Sakkal Majalla&quot;;color:#273044">
			تحرير محضر تفصيلي بجميع ما حدث مع ارفاق الأدلة ان وجدت</span><span lang="EN-US" dir="LTR" style="font-size:14.0pt;
font-family:&quot;Sakkal Majalla&quot;;color:#273044">.</span></strong></p>
			<p class="MsoListParagraphCxSpMiddle" dir="RTL" style="text-align: right; text-indent: -18.0pt; line-height: normal; direction: rtl; unicode-bidi: embed; margin-left: 0cm; margin-right: 54.0pt; margin-bottom: 6.0pt; background: white">
			<strong>
			<span lang="EN-US" style="font-size: 14.0pt; font-family: Symbol; color: #273044">
			·<span style="font:7.0pt &quot;Times New Roman&quot;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span>
			</span>
			<span lang="AR-SA" style="font-size:14.0pt;font-family:&quot;Sakkal Majalla&quot;;color:#273044">
			الحفاظ على سرية الحالة</span><span lang="EN-US" dir="LTR" style="font-size:14.0pt;font-family:&quot;Sakkal Majalla&quot;;
color:#273044">.</span></strong></p>
			<p class="MsoListParagraphCxSpLast" dir="RTL" style="text-align: right; text-indent: -18.0pt; line-height: normal; direction: rtl; unicode-bidi: embed; margin-left: 0cm; margin-right: 54.0pt; margin-bottom: 6.0pt; background: white">
			<strong>
			<span lang="EN-US" style="font-size: 14.0pt; font-family: Symbol; color: #273044">
			·<span style="font:7.0pt &quot;Times New Roman&quot;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span>
			</span>
			<span lang="AR-SA" style="font-size:14.0pt;font-family:&quot;Sakkal Majalla&quot;;color:#273044">
			إخبار المتدرب بالإجراء التأديبي قبل التنفيذ</span><span lang="EN-US" dir="LTR" style="font-size:14.0pt;
font-family:&quot;Sakkal Majalla&quot;;color:#273044">.</span></strong></p>
			<p>&nbsp;</p>
<h3 dir="RTL" style="box-sizing: inherit; font-family: Roboto, 'Droid Arabic Kufi', sans-serif; font-weight: 400; line-height: 1.1; color: rgb(68, 68, 68); font-size: 24px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; letter-spacing: normal; orphans: 2; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; text-decoration-thickness: initial; text-decoration-style: initial; text-decoration-color: initial; text-align: right; direction: rtl; unicode-bidi: embed; margin-left: 0in; margin-right: 0in; margin-top: 0in; margin-bottom: 22.5pt; background: white">
<strong style="box-sizing: inherit; font-weight: bolder;">
<span lang="AR-SA" style="box-sizing: inherit; font-size: 10pt; line-height: 15.3333px; font-family: &quot;Droid Arabic Kufi&quot;, sans-serif; color: red; letter-spacing: -0.25pt; font-weight: normal;">
آلية</span></strong><span lang="AR-SA" style="box-sizing: inherit; font-size: 10pt; line-height: 15.3333px; font-family: &quot;Droid Arabic Kufi&quot;, sans-serif; color: red; letter-spacing: -0.25pt;">&nbsp;<strong style="box-sizing: border-box; font-weight: bolder;"><span style="box-sizing: inherit; font-family: &quot;Droid Arabic Kufi&quot;, sans-serif; font-weight: normal;">فحص</span></strong>&nbsp;<strong style="box-sizing: border-box; font-weight: bolder;"><span style="box-sizing: inherit; font-family: &quot;Droid Arabic Kufi&quot;, sans-serif; font-weight: normal;">أعمال</span></strong>&nbsp;<strong style="box-sizing: border-box; font-weight: bolder;"><span style="box-sizing: inherit; font-family: &quot;Droid Arabic Kufi&quot;, sans-serif; font-weight: normal;">وأنشطة</span></strong>&nbsp;<strong style="box-sizing: border-box; font-weight: bolder;"><span style="box-sizing: inherit; font-family: &quot;Droid Arabic Kufi&quot;, sans-serif; font-weight: normal;">المتدرب</span></strong></span></h3>
<p dir="RTL" style="box-sizing: border-box; color: rgb(68, 68, 68); font-family: Roboto, 'Droid Arabic Kufi', sans-serif; font-size: 14px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; text-decoration-thickness: initial; text-decoration-style: initial; text-decoration-color: initial; direction: rtl; unicode-bidi: embed; margin-left: 0in; margin-right: 0in; margin-top: 0in; margin-bottom: 22.5pt; background: white">
<strong style="box-sizing: border-box; font-weight: bolder;">
<span lang="AR-SA" style="box-sizing: inherit; font-size: 10pt; font-family: &quot;Droid Arabic Kufi&quot;, sans-serif; color: rgb(39, 48, 68); font-weight: normal;">
يعتمد</span></strong><span lang="AR-SA" style="box-sizing: inherit; font-size: 10pt; font-family: &quot;Droid Arabic Kufi&quot;, sans-serif; color: rgb(39, 48, 68);">&nbsp;<strong style="box-sizing: border-box; font-weight: bolder;"><span style="box-sizing: inherit; font-family: &quot;Droid Arabic Kufi&quot;, sans-serif; font-weight: normal;">
<?php echo $site_name; ?></span></strong>&nbsp;<strong style="box-sizing: border-box; font-weight: bolder;"><span style="box-sizing: inherit; font-family: &quot;Droid Arabic Kufi&quot;, sans-serif; font-weight: normal;">على</span></strong>&nbsp;<strong style="box-sizing: border-box; font-weight: bolder;"><span style="box-sizing: inherit; font-family: &quot;Droid Arabic Kufi&quot;, sans-serif; font-weight: normal;">طريقة 
مميزة لمتابعة</span></strong>&nbsp;<strong style="box-sizing: border-box; font-weight: bolder;"><span style="box-sizing: inherit; font-family: &quot;Droid Arabic Kufi&quot;, sans-serif; font-weight: normal;">أداء</span></strong>&nbsp;<strong style="box-sizing: border-box; font-weight: bolder;"><span style="box-sizing: inherit; font-family: &quot;Droid Arabic Kufi&quot;, sans-serif; font-weight: normal;">وأنشطة</span></strong>&nbsp;<strong style="box-sizing: border-box; font-weight: bolder;"><span style="box-sizing: inherit; font-family: &quot;Droid Arabic Kufi&quot;, sans-serif; font-weight: normal;">المتدربين</span></strong>&nbsp;<strong style="box-sizing: border-box; font-weight: bolder;"><span style="box-sizing: inherit; font-family: &quot;Droid Arabic Kufi&quot;, sans-serif; font-weight: normal;">على</span></strong>&nbsp;<strong style="box-sizing: border-box; font-weight: bolder;"><span style="box-sizing: inherit; font-family: &quot;Droid Arabic Kufi&quot;, sans-serif; font-weight: normal;">المنصة</span></strong>&nbsp;<strong style="box-sizing: border-box; font-weight: bolder;"><span style="box-sizing: inherit; font-family: &quot;Droid Arabic Kufi&quot;, sans-serif; font-weight: normal;">الالكترونية</span></strong>&nbsp;<strong style="box-sizing: border-box; font-weight: bolder;"><span style="box-sizing: inherit; font-family: &quot;Droid Arabic Kufi&quot;, sans-serif; font-weight: normal;">من</span></strong>&nbsp;<strong style="box-sizing: border-box; font-weight: bolder;"><span style="box-sizing: inherit; font-family: &quot;Droid Arabic Kufi&quot;, sans-serif; font-weight: normal;">خلال</span></strong>&nbsp;<strong style="box-sizing: border-box; font-weight: bolder;"><span style="box-sizing: inherit; font-family: &quot;Droid Arabic Kufi&quot;, sans-serif; font-weight: normal;">أنظمة</span></strong>&nbsp;<strong style="box-sizing: border-box; font-weight: bolder;"><span style="box-sizing: inherit; font-family: &quot;Droid Arabic Kufi&quot;, sans-serif; font-weight: normal;">عالمية</span></strong>&nbsp;<strong style="box-sizing: border-box; font-weight: bolder;"><span style="box-sizing: inherit; font-family: &quot;Droid Arabic Kufi&quot;, sans-serif; font-weight: normal;">متخصصة</span></strong>&nbsp;<strong style="box-sizing: border-box; font-weight: bolder;"><span style="box-sizing: inherit; font-family: &quot;Droid Arabic Kufi&quot;, sans-serif; font-weight: normal;">تعمل</span></strong>&nbsp;<strong style="box-sizing: border-box; font-weight: bolder;"><span style="box-sizing: inherit; font-family: &quot;Droid Arabic Kufi&quot;, sans-serif; font-weight: normal;">بشكل</span></strong>&nbsp;<strong style="box-sizing: border-box; font-weight: bolder;"><span style="box-sizing: inherit; font-family: &quot;Droid Arabic Kufi&quot;, sans-serif; font-weight: normal;">متكامل</span></strong>&nbsp;<strong style="box-sizing: border-box; font-weight: bolder;"><span style="box-sizing: inherit; font-family: &quot;Droid Arabic Kufi&quot;, sans-serif; font-weight: normal;">لتقديم</span></strong>&nbsp;<strong style="box-sizing: border-box; font-weight: bolder;"><span style="box-sizing: inherit; font-family: &quot;Droid Arabic Kufi&quot;, sans-serif; font-weight: normal;">تقارير</span></strong>&nbsp;<strong style="box-sizing: border-box; font-weight: bolder;"><span style="box-sizing: inherit; font-family: &quot;Droid Arabic Kufi&quot;, sans-serif; font-weight: normal;">حول</span></strong>&nbsp;<strong style="box-sizing: border-box; font-weight: bolder;"><span style="box-sizing: inherit; font-family: &quot;Droid Arabic Kufi&quot;, sans-serif; font-weight: normal;">متابعة</span></strong>&nbsp;<strong style="box-sizing: border-box; font-weight: bolder;"><span style="box-sizing: inherit; font-family: &quot;Droid Arabic Kufi&quot;, sans-serif; font-weight: normal;">المتدربين 
وضبط</span></strong>&nbsp;<strong style="box-sizing: border-box; font-weight: bolder;"><span style="box-sizing: inherit; font-family: &quot;Droid Arabic Kufi&quot;, sans-serif; font-weight: normal;">المخالفات</span></strong>&nbsp;<strong style="box-sizing: border-box; font-weight: bolder;"><span style="box-sizing: inherit; font-family: &quot;Droid Arabic Kufi&quot;, sans-serif; font-weight: normal;">للضوابط</span></strong>&nbsp;<strong style="box-sizing: border-box; font-weight: bolder;"><span style="box-sizing: inherit; font-family: &quot;Droid Arabic Kufi&quot;, sans-serif; font-weight: normal;">الدراسية</span></strong>&nbsp;<strong style="box-sizing: border-box; font-weight: bolder;"><span style="box-sizing: inherit; font-family: &quot;Droid Arabic Kufi&quot;, sans-serif; font-weight: normal;">المعتمدة</span></strong>&nbsp;<strong style="box-sizing: border-box; font-weight: bolder;"><span style="box-sizing: inherit; font-family: &quot;Droid Arabic Kufi&quot;, sans-serif; font-weight: normal;">في 
المركز كما يلي</span></strong></span><strong style="box-sizing: border-box; font-weight: bolder;"><span dir="LTR" style="box-sizing: inherit; font-size: 10pt; font-family: &quot;Droid Arabic Kufi&quot;, sans-serif; color: rgb(39, 48, 68); font-weight: normal;">:&nbsp;</span></strong><strong style="box-sizing: inherit; font-weight: bolder;"><span dir="LTR" style="box-sizing: inherit; font-size: 10pt; font-family: Arial, sans-serif; color: rgb(39, 48, 68); font-weight: normal;">–</span></strong></p>
<ul type="disc" style="box-sizing: border-box; margin-top: 0px; margin-bottom: 0in; color: rgb(68, 68, 68); font-family: Roboto, &quot;Droid Arabic Kufi&quot;, sans-serif; font-size: 14px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255); text-decoration-thickness: initial; text-decoration-style: initial; text-decoration-color: initial;">
	<li class="MsoNormal" dir="RTL" style="box-sizing: border-box; line-height: normal; font-size: 11pt; font-family: Calibri, sans-serif; color: rgb(39, 48, 68); text-align: right; direction: rtl; unicode-bidi: embed; margin-left: 0in; margin-right: 0.5in; margin-top: 0in; margin-bottom: 6pt; background: white">
	<strong style="box-sizing: border-box; font-weight: bolder;">
	<span lang="AR-SA" style="box-sizing: inherit; font-size: 10pt; font-family: &quot;Droid Arabic Kufi&quot;, sans-serif; font-weight: normal;">
	يتم</span></strong><span lang="AR-SA" style="box-sizing: inherit; font-size: 10pt; font-family: &quot;Droid Arabic Kufi&quot;, sans-serif;">&nbsp;<strong style="box-sizing: border-box; font-weight: bolder;"><span style="box-sizing: inherit; font-family: &quot;Droid Arabic Kufi&quot;, sans-serif; font-weight: normal;">متابعة</span></strong>&nbsp;<strong style="box-sizing: border-box; font-weight: bolder;"><span style="box-sizing: inherit; font-family: &quot;Droid Arabic Kufi&quot;, sans-serif; font-weight: normal;">دخول</span></strong>&nbsp;<strong style="box-sizing: border-box; font-weight: bolder;"><span style="box-sizing: inherit; font-family: &quot;Droid Arabic Kufi&quot;, sans-serif; font-weight: normal;">المتدرب</span></strong>&nbsp;<strong style="box-sizing: border-box; font-weight: bolder;"><span style="box-sizing: inherit; font-family: &quot;Droid Arabic Kufi&quot;, sans-serif; font-weight: normal;">على</span></strong>&nbsp;<strong style="box-sizing: border-box; font-weight: bolder;"><span style="box-sizing: inherit; font-family: &quot;Droid Arabic Kufi&quot;, sans-serif; font-weight: normal;">المنصة</span></strong>&nbsp;<strong style="box-sizing: border-box; font-weight: bolder;"><span style="box-sizing: inherit; font-family: &quot;Droid Arabic Kufi&quot;, sans-serif; font-weight: normal;">الإلكترونية</span></strong>&nbsp;<strong style="box-sizing: border-box; font-weight: bolder;"><span style="box-sizing: inherit; font-family: &quot;Droid Arabic Kufi&quot;, sans-serif; font-weight: normal;">وتسجيل</span></strong>&nbsp;<strong style="box-sizing: border-box; font-weight: bolder;"><span style="box-sizing: inherit; font-family: &quot;Droid Arabic Kufi&quot;, sans-serif; font-weight: normal;">وقت</span></strong>&nbsp;<strong style="box-sizing: border-box; font-weight: bolder;"><span style="box-sizing: inherit; font-family: &quot;Droid Arabic Kufi&quot;, sans-serif; font-weight: normal;">حضور</span></strong>&nbsp;<strong style="box-sizing: border-box; font-weight: bolder;"><span style="box-sizing: inherit; font-family: &quot;Droid Arabic Kufi&quot;, sans-serif; font-weight: normal;">المحاضرات</span></strong>&nbsp;<strong style="box-sizing: border-box; font-weight: bolder;"><span style="box-sizing: inherit; font-family: &quot;Droid Arabic Kufi&quot;, sans-serif; font-weight: normal;">بشكل</span></strong>&nbsp;<strong style="box-sizing: border-box; font-weight: bolder;"><span style="box-sizing: inherit; font-family: &quot;Droid Arabic Kufi&quot;, sans-serif; font-weight: normal;">كامل</span></strong></span><strong style="box-sizing: inherit; font-weight: bolder;"><span dir="LTR" style="box-sizing: inherit; font-size: 10pt; font-family: &quot;Droid Arabic Kufi&quot;, sans-serif; font-weight: normal;">.</span></strong></li>
	<li class="MsoNormal" dir="RTL" style="box-sizing: border-box; line-height: normal; font-size: 11pt; font-family: Calibri, sans-serif; color: rgb(39, 48, 68); text-align: right; direction: rtl; unicode-bidi: embed; margin-left: 0in; margin-right: 0.5in; margin-top: 0in; margin-bottom: 6pt; background: white">
	<strong style="box-sizing: border-box; font-weight: bolder;">
	<span lang="AR-SA" style="box-sizing: inherit; font-size: 10pt; font-family: &quot;Droid Arabic Kufi&quot;, sans-serif; font-weight: normal;">
	يستخدم <?php echo $site_name; ?> نظام</span></strong><span lang="AR-SA" style="box-sizing: inherit; font-size: 10pt; font-family: &quot;Droid Arabic Kufi&quot;, sans-serif;">&nbsp;<strong style="box-sizing: border-box; font-weight: bolder;"><span style="box-sizing: inherit; font-family: &quot;Droid Arabic Kufi&quot;, sans-serif; font-weight: normal;">تحديد</span></strong>&nbsp;<strong style="box-sizing: border-box; font-weight: bolder;"><span style="box-sizing: inherit; font-family: &quot;Droid Arabic Kufi&quot;, sans-serif; font-weight: normal;">المواقع</span></strong>&nbsp;<strong style="box-sizing: border-box; font-weight: bolder;"><span style="box-sizing: inherit; font-family: &quot;Droid Arabic Kufi&quot;, sans-serif; font-weight: normal;">على</span></strong>&nbsp;<strong style="box-sizing: border-box; font-weight: bolder;"><span style="box-sizing: inherit; font-family: &quot;Droid Arabic Kufi&quot;, sans-serif; font-weight: normal;">خرائط</span></strong>&nbsp;<strong style="box-sizing: border-box; font-weight: bolder;"><span style="box-sizing: inherit; font-family: &quot;Droid Arabic Kufi&quot;, sans-serif; font-weight: normal;">جوجل&nbsp;</span></strong></span><strong style="box-sizing: inherit; font-weight: bolder;"><span dir="LTR" style="box-sizing: inherit; font-size: 10pt; font-family: &quot;Droid Arabic Kufi&quot;, sans-serif; font-weight: normal;">Google 
	Maps&nbsp;</span></strong><strong style="box-sizing: border-box; font-weight: bolder;"><span lang="AR-SA" style="box-sizing: inherit; font-size: 10pt; font-family: &quot;Droid Arabic Kufi&quot;, sans-serif; font-weight: normal;">لتحديد</span></strong><span lang="AR-SA" style="box-sizing: inherit; font-size: 10pt; font-family: &quot;Droid Arabic Kufi&quot;, sans-serif;">&nbsp;<strong style="box-sizing: border-box; font-weight: bolder;"><span style="box-sizing: inherit; font-family: &quot;Droid Arabic Kufi&quot;, sans-serif; font-weight: normal;">الأماكن</span></strong>&nbsp;<strong style="box-sizing: border-box; font-weight: bolder;"><span style="box-sizing: inherit; font-family: &quot;Droid Arabic Kufi&quot;, sans-serif; font-weight: normal;">التي</span></strong>&nbsp;<strong style="box-sizing: border-box; font-weight: bolder;"><span style="box-sizing: inherit; font-family: &quot;Droid Arabic Kufi&quot;, sans-serif; font-weight: normal;">يستخدم</span></strong>&nbsp;<strong style="box-sizing: border-box; font-weight: bolder;"><span style="box-sizing: inherit; font-family: &quot;Droid Arabic Kufi&quot;, sans-serif; font-weight: normal;">فيها</span></strong>&nbsp;<strong style="box-sizing: border-box; font-weight: bolder;"><span style="box-sizing: inherit; font-family: &quot;Droid Arabic Kufi&quot;, sans-serif; font-weight: normal;">المتدربين 
	صلاحيات</span></strong>&nbsp;<strong style="box-sizing: border-box; font-weight: bolder;"><span style="box-sizing: inherit; font-family: &quot;Droid Arabic Kufi&quot;, sans-serif; font-weight: normal;">الدخول</span></strong>&nbsp;<strong style="box-sizing: border-box; font-weight: bolder;"><span style="box-sizing: inherit; font-family: &quot;Droid Arabic Kufi&quot;, sans-serif; font-weight: normal;">على</span></strong>&nbsp;<strong style="box-sizing: border-box; font-weight: bolder;"><span style="box-sizing: inherit; font-family: &quot;Droid Arabic Kufi&quot;, sans-serif; font-weight: normal;">المنصة</span></strong>&nbsp;<strong style="box-sizing: border-box; font-weight: bolder;"><span style="box-sizing: inherit; font-family: &quot;Droid Arabic Kufi&quot;, sans-serif; font-weight: normal;">الالكترونية</span></strong>&nbsp;<strong style="box-sizing: border-box; font-weight: bolder;"><span style="box-sizing: inherit; font-family: &quot;Droid Arabic Kufi&quot;, sans-serif; font-weight: normal;">ويتم</span></strong>&nbsp;<strong style="box-sizing: border-box; font-weight: bolder;"><span style="box-sizing: inherit; font-family: &quot;Droid Arabic Kufi&quot;, sans-serif; font-weight: normal;">تسجيل</span></strong>&nbsp;<strong style="box-sizing: border-box; font-weight: bolder;"><span style="box-sizing: inherit; font-family: &quot;Droid Arabic Kufi&quot;, sans-serif; font-weight: normal;">ذلك</span></strong>&nbsp;<strong style="box-sizing: border-box; font-weight: bolder;"><span style="box-sizing: inherit; font-family: &quot;Droid Arabic Kufi&quot;, sans-serif; font-weight: normal;">في</span></strong>&nbsp;<strong style="box-sizing: border-box; font-weight: bolder;"><span style="box-sizing: inherit; font-family: &quot;Droid Arabic Kufi&quot;, sans-serif; font-weight: normal;">قواعد</span></strong>&nbsp;<strong style="box-sizing: border-box; font-weight: bolder;"><span style="box-sizing: inherit; font-family: &quot;Droid Arabic Kufi&quot;, sans-serif; font-weight: normal;">بيانات</span></strong>&nbsp;<strong style="box-sizing: border-box; font-weight: bolder;"><span style="box-sizing: inherit; font-family: &quot;Droid Arabic Kufi&quot;, sans-serif; font-weight: normal;">للرجوع</span></strong>&nbsp;<strong style="box-sizing: border-box; font-weight: bolder;"><span style="box-sizing: inherit; font-family: &quot;Droid Arabic Kufi&quot;, sans-serif; font-weight: normal;">اليها</span></strong>&nbsp;<strong style="box-sizing: border-box; font-weight: bolder;"><span style="box-sizing: inherit; font-family: &quot;Droid Arabic Kufi&quot;, sans-serif; font-weight: normal;">عند</span></strong>&nbsp;<strong style="box-sizing: border-box; font-weight: bolder;"><span style="box-sizing: inherit; font-family: &quot;Droid Arabic Kufi&quot;, sans-serif; font-weight: normal;">اللزوم</span></strong></span><strong style="box-sizing: border-box; font-weight: bolder;"><span dir="LTR" style="box-sizing: inherit; font-size: 10pt; font-family: &quot;Droid Arabic Kufi&quot;, sans-serif; font-weight: normal;">.</span></strong></li>
	<li class="MsoNormal" dir="RTL" style="box-sizing: border-box; line-height: normal; font-size: 11pt; font-family: Calibri, sans-serif; color: rgb(39, 48, 68); text-align: right; direction: rtl; unicode-bidi: embed; margin-left: 0in; margin-right: 0.5in; margin-top: 0in; margin-bottom: 6pt; background: white">
	<strong style="box-sizing: border-box; font-weight: bolder;">
	<span lang="AR-SA" style="box-sizing: inherit; font-size: 10pt; font-family: &quot;Droid Arabic Kufi&quot;, sans-serif; font-weight: normal;">
	يسجل</span></strong><span lang="AR-SA" style="box-sizing: inherit; font-size: 10pt; font-family: &quot;Droid Arabic Kufi&quot;, sans-serif;">&nbsp;<strong style="box-sizing: border-box; font-weight: bolder;"><span style="box-sizing: inherit; font-family: &quot;Droid Arabic Kufi&quot;, sans-serif; font-weight: normal;">قسم</span></strong>&nbsp;<strong style="box-sizing: border-box; font-weight: bolder;"><span style="box-sizing: inherit; font-family: &quot;Droid Arabic Kufi&quot;, sans-serif; font-weight: normal;">التعليم</span></strong>&nbsp;<strong style="box-sizing: border-box; font-weight: bolder;"><span style="box-sizing: inherit; font-family: &quot;Droid Arabic Kufi&quot;, sans-serif; font-weight: normal;">الالكتروني</span></strong>&nbsp;<strong style="box-sizing: border-box; font-weight: bolder;"><span style="box-sizing: inherit; font-family: &quot;Droid Arabic Kufi&quot;, sans-serif; font-weight: normal;">بالمركز</span></strong>&nbsp;<strong style="box-sizing: border-box; font-weight: bolder;"><span style="box-sizing: inherit; font-family: &quot;Droid Arabic Kufi&quot;, sans-serif; font-weight: normal;">جميع</span></strong>&nbsp;<strong style="box-sizing: border-box; font-weight: bolder;"><span style="box-sizing: inherit; font-family: &quot;Droid Arabic Kufi&quot;, sans-serif; font-weight: normal;">بيانات</span></strong>&nbsp;<strong style="box-sizing: border-box; font-weight: bolder;"><span style="box-sizing: inherit; font-family: &quot;Droid Arabic Kufi&quot;, sans-serif; font-weight: normal;">شبكة</span></strong>&nbsp;<strong style="box-sizing: border-box; font-weight: bolder;"><span style="box-sizing: inherit; font-family: &quot;Droid Arabic Kufi&quot;, sans-serif; font-weight: normal;">الإنترنت</span></strong>&nbsp;<strong style="box-sizing: border-box; font-weight: bolder;"><span style="box-sizing: inherit; font-family: &quot;Droid Arabic Kufi&quot;, sans-serif; font-weight: normal;">المتاحة</span></strong>&nbsp;<strong style="box-sizing: border-box; font-weight: bolder;"><span style="box-sizing: inherit; font-family: &quot;Droid Arabic Kufi&quot;, sans-serif; font-weight: normal;">التي 
	يستخدمها المتدرب</span></strong>&nbsp;<strong style="box-sizing: border-box; font-weight: bolder;"><span style="box-sizing: inherit; font-family: &quot;Droid Arabic Kufi&quot;, sans-serif; font-weight: normal;">للدخول</span></strong>&nbsp;<strong style="box-sizing: border-box; font-weight: bolder;"><span style="box-sizing: inherit; font-family: &quot;Droid Arabic Kufi&quot;, sans-serif; font-weight: normal;">على</span></strong>&nbsp;<strong style="box-sizing: border-box; font-weight: bolder;"><span style="box-sizing: inherit; font-family: &quot;Droid Arabic Kufi&quot;, sans-serif; font-weight: normal;">المنصة</span></strong>&nbsp;<strong style="box-sizing: border-box; font-weight: bolder;"><span style="box-sizing: inherit; font-family: &quot;Droid Arabic Kufi&quot;, sans-serif; font-weight: normal;">الالكترونية</span></strong>&nbsp;<strong style="box-sizing: border-box; font-weight: bolder;"><span style="box-sizing: inherit; font-family: &quot;Droid Arabic Kufi&quot;, sans-serif; font-weight: normal;">ويتحقق 
	حال</span></strong>&nbsp;<strong style="box-sizing: border-box; font-weight: bolder;"><span style="box-sizing: inherit; font-family: &quot;Droid Arabic Kufi&quot;, sans-serif; font-weight: normal;">دخول</span></strong>&nbsp;<strong style="box-sizing: border-box; font-weight: bolder;"><span style="box-sizing: inherit; font-family: &quot;Droid Arabic Kufi&quot;, sans-serif; font-weight: normal;">المتدرب</span></strong>&nbsp;<strong style="box-sizing: border-box; font-weight: bolder;"><span style="box-sizing: inherit; font-family: &quot;Droid Arabic Kufi&quot;, sans-serif; font-weight: normal;">من</span></strong>&nbsp;<strong style="box-sizing: border-box; font-weight: bolder;"><span style="box-sizing: inherit; font-family: &quot;Droid Arabic Kufi&quot;, sans-serif; font-weight: normal;">مكان</span></strong>&nbsp;<strong style="box-sizing: border-box; font-weight: bolder;"><span style="box-sizing: inherit; font-family: &quot;Droid Arabic Kufi&quot;, sans-serif; font-weight: normal;">آخر</span></strong>&nbsp;<strong style="box-sizing: border-box; font-weight: bolder;"><span style="box-sizing: inherit; font-family: &quot;Droid Arabic Kufi&quot;, sans-serif; font-weight: normal;">غير</span></strong>&nbsp;<strong style="box-sizing: border-box; font-weight: bolder;"><span style="box-sizing: inherit; font-family: &quot;Droid Arabic Kufi&quot;, sans-serif; font-weight: normal;">المستخدم</span></strong>&nbsp;<strong style="box-sizing: border-box; font-weight: bolder;"><span style="box-sizing: inherit; font-family: &quot;Droid Arabic Kufi&quot;, sans-serif; font-weight: normal;">منه، 
	ويفيد ذلك في كشف المتدربين الذين يذهبون</span></strong>&nbsp;<strong style="box-sizing: border-box; font-weight: bolder;"><span style="box-sizing: inherit; font-family: &quot;Droid Arabic Kufi&quot;, sans-serif; font-weight: normal;">إلى</span></strong>&nbsp;<strong style="box-sizing: border-box; font-weight: bolder;"><span style="box-sizing: inherit; font-family: &quot;Droid Arabic Kufi&quot;, sans-serif; font-weight: normal;">المكاتب</span></strong>&nbsp;<strong style="box-sizing: border-box; font-weight: bolder;"><span style="box-sizing: inherit; font-family: &quot;Droid Arabic Kufi&quot;, sans-serif; font-weight: normal;">لتأدية</span></strong>&nbsp;<strong style="box-sizing: border-box; font-weight: bolder;"><span style="box-sizing: inherit; font-family: &quot;Droid Arabic Kufi&quot;, sans-serif; font-weight: normal;">الأنشطة</span></strong>&nbsp;<strong style="box-sizing: border-box; font-weight: bolder;"><span style="box-sizing: inherit; font-family: &quot;Droid Arabic Kufi&quot;, sans-serif; font-weight: normal;">والواجبات 
	بدلاً</span></strong>&nbsp;<strong style="box-sizing: border-box; font-weight: bolder;"><span style="box-sizing: inherit; font-family: &quot;Droid Arabic Kufi&quot;, sans-serif; font-weight: normal;">منهم</span></strong></span><strong style="box-sizing: inherit; font-weight: bolder;"><span dir="LTR" style="box-sizing: inherit; font-size: 10pt; font-family: &quot;Droid Arabic Kufi&quot;, sans-serif; font-weight: normal;">.</span></strong></li>
	<li class="MsoNormal" dir="RTL" style="box-sizing: border-box; line-height: normal; font-size: 11pt; font-family: Calibri, sans-serif; color: rgb(39, 48, 68); text-align: right; direction: rtl; unicode-bidi: embed; margin-left: 0in; margin-right: 0.5in; margin-top: 0in; margin-bottom: 6pt; background: white">
	<strong style="box-sizing: border-box; font-weight: bolder;">
	<span lang="AR-SA" style="box-sizing: inherit; font-size: 10pt; font-family: &quot;Droid Arabic Kufi&quot;, sans-serif; font-weight: normal;">
	يلزم</span></strong><span lang="AR-SA" style="box-sizing: inherit; font-size: 10pt; font-family: &quot;Droid Arabic Kufi&quot;, sans-serif;">&nbsp;<strong style="box-sizing: border-box; font-weight: bolder;"><span style="box-sizing: inherit; font-family: &quot;Droid Arabic Kufi&quot;, sans-serif; font-weight: normal;">تقييد</span></strong>&nbsp;<strong style="box-sizing: border-box; font-weight: bolder;"><span style="box-sizing: inherit; font-family: &quot;Droid Arabic Kufi&quot;, sans-serif; font-weight: normal;">الاختبارات</span></strong>&nbsp;<strong style="box-sizing: border-box; font-weight: bolder;"><span style="box-sizing: inherit; font-family: &quot;Droid Arabic Kufi&quot;, sans-serif; font-weight: normal;">والواجبات</span></strong>&nbsp;<strong style="box-sizing: border-box; font-weight: bolder;"><span style="box-sizing: inherit; font-family: &quot;Droid Arabic Kufi&quot;, sans-serif; font-weight: normal;">بوقت</span></strong>&nbsp;<strong style="box-sizing: border-box; font-weight: bolder;"><span style="box-sizing: inherit; font-family: &quot;Droid Arabic Kufi&quot;, sans-serif; font-weight: normal;">معيّن</span></strong>&nbsp;<strong style="box-sizing: border-box; font-weight: bolder;"><span style="box-sizing: inherit; font-family: &quot;Droid Arabic Kufi&quot;, sans-serif; font-weight: normal;">للحل</span></strong>&nbsp;<strong style="box-sizing: border-box; font-weight: bolder;"><span style="box-sizing: inherit; font-family: &quot;Droid Arabic Kufi&quot;, sans-serif; font-weight: normal;">وبرقم</span></strong>&nbsp;<strong style="box-sizing: border-box; font-weight: bolder;"><span style="box-sizing: inherit; font-family: &quot;Droid Arabic Kufi&quot;, sans-serif; font-weight: normal;">مرور</span></strong>&nbsp;<strong style="box-sizing: border-box; font-weight: bolder;"><span style="box-sizing: inherit; font-family: &quot;Droid Arabic Kufi&quot;, sans-serif; font-weight: normal;">حتى</span></strong>&nbsp;<strong style="box-sizing: border-box; font-weight: bolder;"><span style="box-sizing: inherit; font-family: &quot;Droid Arabic Kufi&quot;, sans-serif; font-weight: normal;">لا</span></strong>&nbsp;<strong style="box-sizing: border-box; font-weight: bolder;"><span style="box-sizing: inherit; font-family: &quot;Droid Arabic Kufi&quot;, sans-serif; font-weight: normal;">يتم</span></strong>&nbsp;<strong style="box-sizing: border-box; font-weight: bolder;"><span style="box-sizing: inherit; font-family: &quot;Droid Arabic Kufi&quot;, sans-serif; font-weight: normal;">تناقل</span></strong>&nbsp;<strong style="box-sizing: border-box; font-weight: bolder;"><span style="box-sizing: inherit; font-family: &quot;Droid Arabic Kufi&quot;, sans-serif; font-weight: normal;">الأجوبة</span></strong></span><strong style="box-sizing: border-box; font-weight: bolder;"><span dir="LTR" style="box-sizing: inherit; font-size: 10pt; font-family: &quot;Droid Arabic Kufi&quot;, sans-serif; font-weight: normal;">.</span></strong></li>
	<li class="MsoNormal" dir="RTL" style="box-sizing: border-box; line-height: normal; font-size: 11pt; font-family: Calibri, sans-serif; color: rgb(39, 48, 68); text-align: right; direction: rtl; unicode-bidi: embed; margin-left: 0in; margin-right: 0.5in; margin-top: 0in; margin-bottom: 6pt; background: white">
	<strong style="box-sizing: border-box; font-weight: bolder;">
	<span lang="AR-SA" style="box-sizing: inherit; font-size: 10pt; font-family: &quot;Droid Arabic Kufi&quot;, sans-serif; font-weight: normal;">
	يتم</span></strong><span lang="AR-SA" style="box-sizing: inherit; font-size: 10pt; font-family: &quot;Droid Arabic Kufi&quot;, sans-serif;">&nbsp;<strong style="box-sizing: border-box; font-weight: bolder;"><span style="box-sizing: inherit; font-family: &quot;Droid Arabic Kufi&quot;, sans-serif; font-weight: normal;">متابعة</span></strong>&nbsp;<strong style="box-sizing: border-box; font-weight: bolder;"><span style="box-sizing: inherit; font-family: &quot;Droid Arabic Kufi&quot;, sans-serif; font-weight: normal;">ورصد</span></strong>&nbsp;<strong style="box-sizing: border-box; font-weight: bolder;"><span style="box-sizing: inherit; font-family: &quot;Droid Arabic Kufi&quot;, sans-serif; font-weight: normal;">أنشطة</span></strong>&nbsp;<strong style="box-sizing: border-box; font-weight: bolder;"><span style="box-sizing: inherit; font-family: &quot;Droid Arabic Kufi&quot;, sans-serif; font-weight: normal;">المتدربين</span></strong>&nbsp;<strong style="box-sizing: border-box; font-weight: bolder;"><span style="box-sizing: inherit; font-family: &quot;Droid Arabic Kufi&quot;, sans-serif; font-weight: normal;">أثناء</span></strong>&nbsp;<strong style="box-sizing: border-box; font-weight: bolder;"><span style="box-sizing: inherit; font-family: &quot;Droid Arabic Kufi&quot;, sans-serif; font-weight: normal;">الاختبار</span></strong>&nbsp;<strong style="box-sizing: border-box; font-weight: bolder;"><span style="box-sizing: inherit; font-family: &quot;Droid Arabic Kufi&quot;, sans-serif; font-weight: normal;">ورصد</span></strong>&nbsp;<strong style="box-sizing: border-box; font-weight: bolder;"><span style="box-sizing: inherit; font-family: &quot;Droid Arabic Kufi&quot;, sans-serif; font-weight: normal;">محاولات</span></strong>&nbsp;<strong style="box-sizing: border-box; font-weight: bolder;"><span style="box-sizing: inherit; font-family: &quot;Droid Arabic Kufi&quot;, sans-serif; font-weight: normal;">الغش</span></strong>&nbsp;<strong style="box-sizing: border-box; font-weight: bolder;"><span style="box-sizing: inherit; font-family: &quot;Droid Arabic Kufi&quot;, sans-serif; font-weight: normal;">عن</span></strong>&nbsp;<strong style="box-sizing: border-box; font-weight: bolder;"><span style="box-sizing: inherit; font-family: &quot;Droid Arabic Kufi&quot;, sans-serif; font-weight: normal;">طريق</span></strong>&nbsp;<strong style="box-sizing: border-box; font-weight: bolder;"><span style="box-sizing: inherit; font-family: &quot;Droid Arabic Kufi&quot;, sans-serif; font-weight: normal;">التقارير 
	والنماذج الخاصة بإثبات الحالة</span></strong></span><strong style="box-sizing: inherit; font-weight: bolder;"><span dir="LTR" style="box-sizing: inherit; font-size: 10pt; font-family: &quot;Droid Arabic Kufi&quot;, sans-serif; font-weight: normal;">.</span></strong></li>
</ul>
<h3 dir="RTL" style="box-sizing: inherit; font-family: Roboto, 'Droid Arabic Kufi', sans-serif; font-weight: 400; line-height: 1.1; color: rgb(68, 68, 68); font-size: 24px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; letter-spacing: normal; orphans: 2; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; text-decoration-thickness: initial; text-decoration-style: initial; text-decoration-color: initial; text-align: right; direction: rtl; unicode-bidi: embed; margin-left: 0in; margin-right: 0in; margin-top: 0in; margin-bottom: 22.5pt; background: white">
<strong style="box-sizing: inherit; font-weight: bolder;">
<span lang="AR-SA" style="box-sizing: inherit; font-size: 10pt; line-height: 15.3333px; font-family: &quot;Droid Arabic Kufi&quot;, sans-serif; color: red; letter-spacing: -0.25pt; font-weight: normal;">
إجراءات</span><span lang="AR-SA" style="box-sizing: inherit; font-size: 10pt; line-height: 15.3333px; font-family: &quot;Droid Arabic Kufi&quot;, sans-serif; color: red; font-weight: normal;">&nbsp;<span style="box-sizing: inherit; letter-spacing: -0.25pt;">الاختبارات</span></span></strong></h3>
<p dir="RTL" style="box-sizing: inherit; color: rgb(68, 68, 68); font-family: Roboto, 'Droid Arabic Kufi', sans-serif; font-size: 14px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; text-decoration-thickness: initial; text-decoration-style: initial; text-decoration-color: initial; text-align: right; direction: rtl; unicode-bidi: embed; margin-left: 0in; margin-right: 0in; margin-top: 0in; margin-bottom: 22.5pt; background: white">
<strong style="box-sizing: inherit; font-weight: bolder;">
<span lang="AR-SA" style="box-sizing: inherit; font-size: 10pt; font-family: &quot;Droid Arabic Kufi&quot;, sans-serif; color: rgb(39, 48, 68); font-weight: normal;">
ما</span></strong><span lang="AR-SA" style="box-sizing: inherit; font-size: 10pt; font-family: &quot;Droid Arabic Kufi&quot;, sans-serif; color: rgb(39, 48, 68);">&nbsp;<strong style="box-sizing: border-box; font-weight: bolder;"><span style="box-sizing: inherit; font-family: &quot;Droid Arabic Kufi&quot;, sans-serif; font-weight: normal;">قبل</span></strong>&nbsp;<strong style="box-sizing: border-box; font-weight: bolder;"><span style="box-sizing: inherit; font-family: &quot;Droid Arabic Kufi&quot;, sans-serif; font-weight: normal;">الاختبار</span></strong></span><strong style="box-sizing: border-box; font-weight: bolder;"><span dir="LTR" style="box-sizing: inherit; font-size: 10pt; font-family: &quot;Droid Arabic Kufi&quot;, sans-serif; color: rgb(39, 48, 68); font-weight: normal;">:</span></strong></p>
<p dir="RTL" style="box-sizing: border-box; color: rgb(68, 68, 68); font-family: Roboto, 'Droid Arabic Kufi', sans-serif; font-size: 14px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; text-decoration-thickness: initial; text-decoration-style: initial; text-decoration-color: initial; direction: rtl; unicode-bidi: embed; margin-left: 0in; margin-right: 0in; margin-top: 0in; margin-bottom: 22.5pt; background: white">
<strong style="box-sizing: border-box; font-weight: bolder;">
<span lang="AR-SA" style="box-sizing: inherit; font-size: 10pt; font-family: &quot;Droid Arabic Kufi&quot;, sans-serif; color: rgb(39, 48, 68); font-weight: normal;">
يتم</span></strong><span lang="AR-SA" style="box-sizing: inherit; font-size: 10pt; font-family: &quot;Droid Arabic Kufi&quot;, sans-serif; color: rgb(39, 48, 68);">&nbsp;<strong style="box-sizing: border-box; font-weight: bolder;"><span style="box-sizing: inherit; font-family: &quot;Droid Arabic Kufi&quot;, sans-serif; font-weight: normal;">فتح</span></strong>&nbsp;<strong style="box-sizing: border-box; font-weight: bolder;"><span style="box-sizing: inherit; font-family: &quot;Droid Arabic Kufi&quot;, sans-serif; font-weight: normal;">استقبال</span></strong>&nbsp;<strong style="box-sizing: border-box; font-weight: bolder;"><span style="box-sizing: inherit; font-family: &quot;Droid Arabic Kufi&quot;, sans-serif; font-weight: normal;">المتدربين</span></strong>&nbsp;<strong style="box-sizing: border-box; font-weight: bolder;"><span style="box-sizing: inherit; font-family: &quot;Droid Arabic Kufi&quot;, sans-serif; font-weight: normal;">للاختبار</span></strong>&nbsp;<strong style="box-sizing: border-box; font-weight: bolder;"><span style="box-sizing: inherit; font-family: &quot;Droid Arabic Kufi&quot;, sans-serif; font-weight: normal;">قبل 
بداية وقت الاختبار ب&nbsp;</span></strong></span><strong style="box-sizing: inherit; font-weight: bolder;"><span dir="LTR" style="box-sizing: inherit; font-size: 10pt; font-family: &quot;Droid Arabic Kufi&quot;, sans-serif; color: rgb(39, 48, 68); font-weight: normal;">30&nbsp;</span></strong><strong style="box-sizing: border-box; font-weight: bolder;"><span lang="AR-SA" style="box-sizing: inherit; font-size: 10pt; font-family: &quot;Droid Arabic Kufi&quot;, sans-serif; color: rgb(39, 48, 68); font-weight: normal;">دقيقة</span></strong><span lang="AR-SA" style="box-sizing: inherit; font-size: 10pt; font-family: &quot;Droid Arabic Kufi&quot;, sans-serif; color: rgb(39, 48, 68);">&nbsp;<strong style="box-sizing: border-box; font-weight: bolder;"><span style="box-sizing: inherit; font-family: &quot;Droid Arabic Kufi&quot;, sans-serif; font-weight: normal;">ولا</span></strong>&nbsp;<strong style="box-sizing: border-box; font-weight: bolder;"><span style="box-sizing: inherit; font-family: &quot;Droid Arabic Kufi&quot;, sans-serif; font-weight: normal;">يسمح</span></strong>&nbsp;<strong style="box-sizing: border-box; font-weight: bolder;"><span style="box-sizing: inherit; font-family: &quot;Droid Arabic Kufi&quot;, sans-serif; font-weight: normal;">للمتدرب</span></strong>&nbsp;<strong style="box-sizing: border-box; font-weight: bolder;"><span style="box-sizing: inherit; font-family: &quot;Droid Arabic Kufi&quot;, sans-serif; font-weight: normal;">الخروج</span></strong>&nbsp;<strong style="box-sizing: border-box; font-weight: bolder;"><span style="box-sizing: inherit; font-family: &quot;Droid Arabic Kufi&quot;, sans-serif; font-weight: normal;">إلا</span></strong>&nbsp;<strong style="box-sizing: border-box; font-weight: bolder;"><span style="box-sizing: inherit; font-family: &quot;Droid Arabic Kufi&quot;, sans-serif; font-weight: normal;">بعد</span></strong>&nbsp;<strong style="box-sizing: border-box; font-weight: bolder;"><span style="box-sizing: inherit; font-family: &quot;Droid Arabic Kufi&quot;, sans-serif; font-weight: normal;">مضي</span></strong>&nbsp;<strong style="box-sizing: border-box; font-weight: bolder;"><span style="box-sizing: inherit; font-family: &quot;Droid Arabic Kufi&quot;, sans-serif; font-weight: normal;">نصف</span></strong>&nbsp;<strong style="box-sizing: border-box; font-weight: bolder;"><span style="box-sizing: inherit; font-family: &quot;Droid Arabic Kufi&quot;, sans-serif; font-weight: normal;">الوقت</span></strong></span><strong style="box-sizing: border-box; font-weight: bolder;"><span dir="LTR" style="box-sizing: inherit; font-size: 10pt; font-family: &quot;Droid Arabic Kufi&quot;, sans-serif; color: rgb(39, 48, 68); font-weight: normal;">.</span></strong></p>
<p dir="RTL" style="box-sizing: inherit; color: rgb(68, 68, 68); font-family: Roboto, 'Droid Arabic Kufi', sans-serif; font-size: 14px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; text-decoration-thickness: initial; text-decoration-style: initial; text-decoration-color: initial; text-align: right; direction: rtl; unicode-bidi: embed; margin-left: 0in; margin-right: 0in; margin-top: 0in; margin-bottom: 22.5pt; background: white">
<strong style="box-sizing: inherit; font-weight: bolder;">
<span lang="AR-SA" style="box-sizing: inherit; font-size: 10pt; font-family: &quot;Droid Arabic Kufi&quot;, sans-serif; color: rgb(39, 48, 68); font-weight: normal;">
أثناء</span></strong><span lang="AR-SA" style="box-sizing: inherit; font-size: 10pt; font-family: &quot;Droid Arabic Kufi&quot;, sans-serif; color: rgb(39, 48, 68);">&nbsp;<strong style="box-sizing: border-box; font-weight: bolder;"><span style="box-sizing: inherit; font-family: &quot;Droid Arabic Kufi&quot;, sans-serif; font-weight: normal;">الاختبار</span></strong></span><strong style="box-sizing: border-box; font-weight: bolder;"><span dir="LTR" style="box-sizing: inherit; font-size: 10pt; font-family: &quot;Droid Arabic Kufi&quot;, sans-serif; color: rgb(39, 48, 68); font-weight: normal;">:</span></strong></p>
<p dir="RTL" style="box-sizing: border-box; color: rgb(68, 68, 68); font-family: Roboto, 'Droid Arabic Kufi', sans-serif; font-size: 14px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; text-decoration-thickness: initial; text-decoration-style: initial; text-decoration-color: initial; direction: rtl; unicode-bidi: embed; margin-left: 0in; margin-right: 0in; margin-top: 0in; margin-bottom: 22.5pt; background: white">
<strong style="box-sizing: border-box; font-weight: bolder;">
<span lang="AR-SA" style="box-sizing: inherit; font-size: 10pt; font-family: &quot;Droid Arabic Kufi&quot;, sans-serif; color: rgb(39, 48, 68); font-weight: normal;">
يطلب</span></strong><span lang="AR-SA" style="box-sizing: inherit; font-size: 10pt; font-family: &quot;Droid Arabic Kufi&quot;, sans-serif; color: rgb(39, 48, 68);">&nbsp;<strong style="box-sizing: border-box; font-weight: bolder;"><span style="box-sizing: inherit; font-family: &quot;Droid Arabic Kufi&quot;, sans-serif; font-weight: normal;">من</span></strong>&nbsp;<strong style="box-sizing: border-box; font-weight: bolder;"><span style="box-sizing: inherit; font-family: &quot;Droid Arabic Kufi&quot;, sans-serif; font-weight: normal;">جميع</span></strong>&nbsp;<strong style="box-sizing: border-box; font-weight: bolder;"><span style="box-sizing: inherit; font-family: &quot;Droid Arabic Kufi&quot;, sans-serif; font-weight: normal;">المتدربين</span></strong>&nbsp;<strong style="box-sizing: border-box; font-weight: bolder;"><span style="box-sizing: inherit; font-family: &quot;Droid Arabic Kufi&quot;, sans-serif; font-weight: normal;">وضع</span></strong>&nbsp;<strong style="box-sizing: border-box; font-weight: bolder;"><span style="box-sizing: inherit; font-family: &quot;Droid Arabic Kufi&quot;, sans-serif; font-weight: normal;">الحقائب</span></strong>&nbsp;<strong style="box-sizing: border-box; font-weight: bolder;"><span style="box-sizing: inherit; font-family: &quot;Droid Arabic Kufi&quot;, sans-serif; font-weight: normal;">والجوالات</span></strong>&nbsp;<strong style="box-sizing: border-box; font-weight: bolder;"><span style="box-sizing: inherit; font-family: &quot;Droid Arabic Kufi&quot;, sans-serif; font-weight: normal;">وأي</span></strong>&nbsp;<strong style="box-sizing: border-box; font-weight: bolder;"><span style="box-sizing: inherit; font-family: &quot;Droid Arabic Kufi&quot;, sans-serif; font-weight: normal;">أجهزة</span></strong>&nbsp;<strong style="box-sizing: border-box; font-weight: bolder;"><span style="box-sizing: inherit; font-family: &quot;Droid Arabic Kufi&quot;, sans-serif; font-weight: normal;">الكترونية</span></strong>&nbsp;<strong style="box-sizing: border-box; font-weight: bolder;"><span style="box-sizing: inherit; font-family: &quot;Droid Arabic Kufi&quot;, sans-serif; font-weight: normal;">في</span></strong>&nbsp;<strong style="box-sizing: border-box; font-weight: bolder;"><span style="box-sizing: inherit; font-family: &quot;Droid Arabic Kufi&quot;, sans-serif; font-weight: normal;">بداية</span></strong>&nbsp;<strong style="box-sizing: border-box; font-weight: bolder;"><span style="box-sizing: inherit; font-family: &quot;Droid Arabic Kufi&quot;, sans-serif; font-weight: normal;">قاعة</span></strong>&nbsp;<strong style="box-sizing: border-box; font-weight: bolder;"><span style="box-sizing: inherit; font-family: &quot;Droid Arabic Kufi&quot;, sans-serif; font-weight: normal;">الاختبار، 
وفي</span></strong>&nbsp;<strong style="box-sizing: border-box; font-weight: bolder;"><span style="box-sizing: inherit; font-family: &quot;Droid Arabic Kufi&quot;, sans-serif; font-weight: normal;">حال</span></strong>&nbsp;<strong style="box-sizing: border-box; font-weight: bolder;"><span style="box-sizing: inherit; font-family: &quot;Droid Arabic Kufi&quot;, sans-serif; font-weight: normal;">تم</span></strong>&nbsp;<strong style="box-sizing: border-box; font-weight: bolder;"><span style="box-sizing: inherit; font-family: &quot;Droid Arabic Kufi&quot;, sans-serif; font-weight: normal;">ضبط</span></strong>&nbsp;<strong style="box-sizing: border-box; font-weight: bolder;"><span style="box-sizing: inherit; font-family: &quot;Droid Arabic Kufi&quot;, sans-serif; font-weight: normal;">متدرب</span></strong>&nbsp;<strong style="box-sizing: border-box; font-weight: bolder;"><span style="box-sizing: inherit; font-family: &quot;Droid Arabic Kufi&quot;, sans-serif; font-weight: normal;">وبحوزته</span></strong>&nbsp;<strong style="box-sizing: border-box; font-weight: bolder;"><span style="box-sizing: inherit; font-family: &quot;Droid Arabic Kufi&quot;, sans-serif; font-weight: normal;">جوال</span></strong>&nbsp;<strong style="box-sizing: border-box; font-weight: bolder;"><span style="box-sizing: inherit; font-family: &quot;Droid Arabic Kufi&quot;, sans-serif; font-weight: normal;">يعتبر</span></strong>&nbsp;<strong style="box-sizing: border-box; font-weight: bolder;"><span style="box-sizing: inherit; font-family: &quot;Droid Arabic Kufi&quot;, sans-serif; font-weight: normal;">شروع</span></strong>&nbsp;<strong style="box-sizing: border-box; font-weight: bolder;"><span style="box-sizing: inherit; font-family: &quot;Droid Arabic Kufi&quot;, sans-serif; font-weight: normal;">بالغش</span></strong>&nbsp;<strong style="box-sizing: border-box; font-weight: bolder;"><span style="box-sizing: inherit; font-family: &quot;Droid Arabic Kufi&quot;, sans-serif; font-weight: normal;">حتى</span></strong>&nbsp;<strong style="box-sizing: border-box; font-weight: bolder;"><span style="box-sizing: inherit; font-family: &quot;Droid Arabic Kufi&quot;, sans-serif; font-weight: normal;">لو</span></strong>&nbsp;<strong style="box-sizing: border-box; font-weight: bolder;"><span style="box-sizing: inherit; font-family: &quot;Droid Arabic Kufi&quot;, sans-serif; font-weight: normal;">لم</span></strong>&nbsp;<strong style="box-sizing: border-box; font-weight: bolder;"><span style="box-sizing: inherit; font-family: &quot;Droid Arabic Kufi&quot;, sans-serif; font-weight: normal;">يتم</span></strong>&nbsp;<strong style="box-sizing: border-box; font-weight: bolder;"><span style="box-sizing: inherit; font-family: &quot;Droid Arabic Kufi&quot;, sans-serif; font-weight: normal;">استخدام</span></strong>&nbsp;<strong style="box-sizing: border-box; font-weight: bolder;"><span style="box-sizing: inherit; font-family: &quot;Droid Arabic Kufi&quot;, sans-serif; font-weight: normal;">الجوال،</span></strong>&nbsp;<strong style="box-sizing: border-box; font-weight: bolder;"><span style="box-sizing: inherit; font-family: &quot;Droid Arabic Kufi&quot;, sans-serif; font-weight: normal;">أما</span></strong>&nbsp;<strong style="box-sizing: border-box; font-weight: bolder;"><span style="box-sizing: inherit; font-family: &quot;Droid Arabic Kufi&quot;, sans-serif; font-weight: normal;">في</span></strong>&nbsp;<strong style="box-sizing: border-box; font-weight: bolder;"><span style="box-sizing: inherit; font-family: &quot;Droid Arabic Kufi&quot;, sans-serif; font-weight: normal;">حال</span></strong>&nbsp;<strong style="box-sizing: border-box; font-weight: bolder;"><span style="box-sizing: inherit; font-family: &quot;Droid Arabic Kufi&quot;, sans-serif; font-weight: normal;">استخدامه</span></strong>&nbsp;<strong style="box-sizing: border-box; font-weight: bolder;"><span style="box-sizing: inherit; font-family: &quot;Droid Arabic Kufi&quot;, sans-serif; font-weight: normal;">فيعتبر</span></strong>&nbsp;<strong style="box-sizing: border-box; font-weight: bolder;"><span style="box-sizing: inherit; font-family: &quot;Droid Arabic Kufi&quot;, sans-serif; font-weight: normal;">حالة</span></strong>&nbsp;<strong style="box-sizing: border-box; font-weight: bolder;"><span style="box-sizing: inherit; font-family: &quot;Droid Arabic Kufi&quot;, sans-serif; font-weight: normal;">غش</span></strong></span><strong style="box-sizing: border-box; font-weight: bolder;"><span dir="LTR" style="box-sizing: inherit; font-size: 10pt; font-family: &quot;Droid Arabic Kufi&quot;, sans-serif; color: rgb(39, 48, 68); font-weight: normal;">.</span></strong></p>
<h3 dir="RTL" style="box-sizing: inherit; font-family: Roboto, 'Droid Arabic Kufi', sans-serif; font-weight: 400; line-height: 1.1; color: rgb(68, 68, 68); font-size: 24px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; letter-spacing: normal; orphans: 2; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; text-decoration-thickness: initial; text-decoration-style: initial; text-decoration-color: initial; text-align: right; direction: rtl; unicode-bidi: embed; margin-left: 0in; margin-right: 0in; margin-top: 0in; margin-bottom: 22.5pt; background: white">
<strong style="box-sizing: border-box; font-weight: bolder;">
<span lang="AR-SA" style="box-sizing: inherit; font-size: 10pt; line-height: 15.3333px; font-family: &quot;Droid Arabic Kufi&quot;, sans-serif; color: red; letter-spacing: -0.25pt; font-weight: normal;">
إجراءات&nbsp;ضبط&nbsp;والتحقيق&nbsp;في&nbsp;واقعة&nbsp;الغش</span><span dir="LTR" style="box-sizing: inherit; font-size: 10pt; line-height: 15.3333px; font-family: &quot;Droid Arabic Kufi&quot;, sans-serif; color: red; letter-spacing: -0.25pt; font-weight: normal;">:</span></strong></h3>
<ul type="disc" style="box-sizing: inherit; margin-top: 0px; margin-bottom: 0in; color: rgb(68, 68, 68); font-family: Roboto, &quot;Droid Arabic Kufi&quot;, sans-serif; font-size: 14px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255); text-decoration-thickness: initial; text-decoration-style: initial; text-decoration-color: initial;">
	<li class="MsoNormal" dir="RTL" style="box-sizing: inherit; line-height: normal; font-size: 11pt; font-family: Calibri, sans-serif; color: rgb(39, 48, 68); text-align: right; direction: rtl; unicode-bidi: embed; margin-left: 0in; margin-right: 0.5in; margin-top: 0in; margin-bottom: 6pt; background: white">
	<strong style="box-sizing: inherit; font-weight: bolder;">
	<span lang="AR-SA" style="box-sizing: inherit; font-size: 10pt; font-family: &quot;Droid Arabic Kufi&quot;, sans-serif; font-weight: normal;">
	يطلب المراقب من المتدرب</span></strong><span lang="AR-SA" style="box-sizing: inherit; font-size: 10pt; font-family: &quot;Droid Arabic Kufi&quot;, sans-serif;">&nbsp;<strong style="box-sizing: border-box; font-weight: bolder;"><span style="box-sizing: inherit; font-family: &quot;Droid Arabic Kufi&quot;, sans-serif; font-weight: normal;">تسليم</span></strong>&nbsp;<strong style="box-sizing: border-box; font-weight: bolder;"><span style="box-sizing: inherit; font-family: &quot;Droid Arabic Kufi&quot;, sans-serif; font-weight: normal;">الاختبار</span></strong>&nbsp;<strong style="box-sizing: border-box; font-weight: bolder;"><span style="box-sizing: inherit; font-family: &quot;Droid Arabic Kufi&quot;, sans-serif; font-weight: normal;">الالكتروني</span></strong>&nbsp;<strong style="box-sizing: border-box; font-weight: bolder;"><span style="box-sizing: inherit; font-family: &quot;Droid Arabic Kufi&quot;, sans-serif; font-weight: normal;">واغلاق</span></strong>&nbsp;<strong style="box-sizing: border-box; font-weight: bolder;"><span style="box-sizing: inherit; font-family: &quot;Droid Arabic Kufi&quot;, sans-serif; font-weight: normal;">الجهاز</span></strong></span><strong style="box-sizing: border-box; font-weight: bolder;"><span dir="LTR" style="box-sizing: inherit; font-size: 10pt; font-family: &quot;Droid Arabic Kufi&quot;, sans-serif; font-weight: normal;">.</span></strong></li>
	<li class="MsoNormal" dir="RTL" style="box-sizing: border-box; line-height: normal; font-size: 11pt; font-family: Calibri, sans-serif; color: rgb(39, 48, 68); text-align: right; direction: rtl; unicode-bidi: embed; margin-left: 0in; margin-right: 0.5in; margin-top: 0in; margin-bottom: 6pt; background: white">
	<strong style="box-sizing: border-box; font-weight: bolder;">
	<span lang="AR-SA" style="box-sizing: inherit; font-size: 10pt; font-family: &quot;Droid Arabic Kufi&quot;, sans-serif; font-weight: normal;">
	في</span></strong><span lang="AR-SA" style="box-sizing: inherit; font-size: 10pt; font-family: &quot;Droid Arabic Kufi&quot;, sans-serif;">&nbsp;<strong style="box-sizing: border-box; font-weight: bolder;"><span style="box-sizing: inherit; font-family: &quot;Droid Arabic Kufi&quot;, sans-serif; font-weight: normal;">حال</span></strong>&nbsp;<strong style="box-sizing: border-box; font-weight: bolder;"><span style="box-sizing: inherit; font-family: &quot;Droid Arabic Kufi&quot;, sans-serif; font-weight: normal;">امتنع</span></strong>&nbsp;<strong style="box-sizing: border-box; font-weight: bolder;"><span style="box-sizing: inherit; font-family: &quot;Droid Arabic Kufi&quot;, sans-serif; font-weight: normal;">المتدرب</span></strong>&nbsp;<strong style="box-sizing: border-box; font-weight: bolder;"><span style="box-sizing: inherit; font-family: &quot;Droid Arabic Kufi&quot;, sans-serif; font-weight: normal;">عن</span></strong>&nbsp;<strong style="box-sizing: border-box; font-weight: bolder;"><span style="box-sizing: inherit; font-family: &quot;Droid Arabic Kufi&quot;, sans-serif; font-weight: normal;">التسليم</span></strong>&nbsp;<strong style="box-sizing: border-box; font-weight: bolder;"><span style="box-sizing: inherit; font-family: &quot;Droid Arabic Kufi&quot;, sans-serif; font-weight: normal;">يتم</span></strong>&nbsp;<strong style="box-sizing: border-box; font-weight: bolder;"><span style="box-sizing: inherit; font-family: &quot;Droid Arabic Kufi&quot;, sans-serif; font-weight: normal;">التواصل</span></strong>&nbsp;<strong style="box-sizing: border-box; font-weight: bolder;"><span style="box-sizing: inherit; font-family: &quot;Droid Arabic Kufi&quot;, sans-serif; font-weight: normal;">مع</span></strong>&nbsp;<strong style="box-sizing: border-box; font-weight: bolder;"><span style="box-sizing: inherit; font-family: &quot;Droid Arabic Kufi&quot;, sans-serif; font-weight: normal;">مشرف 
	المركز</span></strong></span><strong style="box-sizing: border-box; font-weight: bolder;"><span dir="LTR" style="box-sizing: inherit; font-size: 10pt; font-family: &quot;Droid Arabic Kufi&quot;, sans-serif; font-weight: normal;">.</span></strong></li>
	<li class="MsoNormal" dir="RTL" style="box-sizing: border-box; line-height: normal; font-size: 11pt; font-family: Calibri, sans-serif; color: rgb(39, 48, 68); text-align: right; direction: rtl; unicode-bidi: embed; margin-left: 0in; margin-right: 0.5in; margin-top: 0in; margin-bottom: 6pt; background: white">
	<strong style="box-sizing: border-box; font-weight: bolder;">
	<span lang="AR-SA" style="box-sizing: inherit; font-size: 10pt; font-family: &quot;Droid Arabic Kufi&quot;, sans-serif; font-weight: normal;">
	تعبئة</span></strong><span lang="AR-SA" style="box-sizing: inherit; font-size: 10pt; font-family: &quot;Droid Arabic Kufi&quot;, sans-serif;">&nbsp;<strong style="box-sizing: border-box; font-weight: bolder;"><span style="box-sizing: inherit; font-family: &quot;Droid Arabic Kufi&quot;, sans-serif; font-weight: normal;">نموذج</span></strong>&nbsp;<strong style="box-sizing: border-box; font-weight: bolder;"><span style="box-sizing: inherit; font-family: &quot;Droid Arabic Kufi&quot;, sans-serif; font-weight: normal;">محضر</span></strong>&nbsp;<strong style="box-sizing: border-box; font-weight: bolder;"><span style="box-sizing: inherit; font-family: &quot;Droid Arabic Kufi&quot;, sans-serif; font-weight: normal;">ضبط</span></strong>&nbsp;<strong style="box-sizing: border-box; font-weight: bolder;"><span style="box-sizing: inherit; font-family: &quot;Droid Arabic Kufi&quot;, sans-serif; font-weight: normal;">واقعة</span></strong>&nbsp;<strong style="box-sizing: border-box; font-weight: bolder;"><span style="box-sizing: inherit; font-family: &quot;Droid Arabic Kufi&quot;, sans-serif; font-weight: normal;">غش</span></strong>&nbsp;<strong style="box-sizing: border-box; font-weight: bolder;"><span style="box-sizing: inherit; font-family: &quot;Droid Arabic Kufi&quot;, sans-serif; font-weight: normal;">بالإجابة</span></strong>&nbsp;<strong style="box-sizing: border-box; font-weight: bolder;"><span style="box-sizing: inherit; font-family: &quot;Droid Arabic Kufi&quot;, sans-serif; font-weight: normal;">عن</span></strong>&nbsp;<strong style="box-sizing: border-box; font-weight: bolder;"><span style="box-sizing: inherit; font-family: &quot;Droid Arabic Kufi&quot;, sans-serif; font-weight: normal;">جميع</span></strong>&nbsp;<strong style="box-sizing: border-box; font-weight: bolder;"><span style="box-sizing: inherit; font-family: &quot;Droid Arabic Kufi&quot;, sans-serif; font-weight: normal;">الأسئلة</span></strong>&nbsp;<strong style="box-sizing: border-box; font-weight: bolder;"><span style="box-sizing: inherit; font-family: &quot;Droid Arabic Kufi&quot;, sans-serif; font-weight: normal;">ويتم</span></strong>&nbsp;<strong style="box-sizing: border-box; font-weight: bolder;"><span style="box-sizing: inherit; font-family: &quot;Droid Arabic Kufi&quot;, sans-serif; font-weight: normal;">رفعها</span></strong>&nbsp;<strong style="box-sizing: border-box; font-weight: bolder;"><span style="box-sizing: inherit; font-family: &quot;Droid Arabic Kufi&quot;, sans-serif; font-weight: normal;">مع</span></strong>&nbsp;<strong style="box-sizing: border-box; font-weight: bolder;"><span style="box-sizing: inherit; font-family: &quot;Droid Arabic Kufi&quot;, sans-serif; font-weight: normal;">ملف</span></strong>&nbsp;<strong style="box-sizing: border-box; font-weight: bolder;"><span style="box-sizing: inherit; font-family: &quot;Droid Arabic Kufi&quot;, sans-serif; font-weight: normal;">توقيع</span></strong>&nbsp;<strong style="box-sizing: border-box; font-weight: bolder;"><span style="box-sizing: inherit; font-family: &quot;Droid Arabic Kufi&quot;, sans-serif; font-weight: normal;">حضور</span></strong>&nbsp;<strong style="box-sizing: border-box; font-weight: bolder;"><span style="box-sizing: inherit; font-family: &quot;Droid Arabic Kufi&quot;, sans-serif; font-weight: normal;">الغياب</span></strong>&nbsp;<strong style="box-sizing: border-box; font-weight: bolder;"><span style="box-sizing: inherit; font-family: &quot;Droid Arabic Kufi&quot;, sans-serif; font-weight: normal;">ليتم</span></strong>&nbsp;<strong style="box-sizing: border-box; font-weight: bolder;"><span style="box-sizing: inherit; font-family: &quot;Droid Arabic Kufi&quot;, sans-serif; font-weight: normal;">تسجيل</span></strong>&nbsp;<strong style="box-sizing: border-box; font-weight: bolder;"><span style="box-sizing: inherit; font-family: &quot;Droid Arabic Kufi&quot;, sans-serif; font-weight: normal;">حرمان 
	المتدرب</span></strong>&nbsp;<strong style="box-sizing: border-box; font-weight: bolder;"><span style="box-sizing: inherit; font-family: &quot;Droid Arabic Kufi&quot;, sans-serif; font-weight: normal;">من</span></strong>&nbsp;<strong style="box-sizing: border-box; font-weight: bolder;"><span style="box-sizing: inherit; font-family: &quot;Droid Arabic Kufi&quot;, sans-serif; font-weight: normal;">المادة</span></strong></span><strong style="box-sizing: border-box; font-weight: bolder;"><span dir="LTR" style="box-sizing: inherit; font-size: 10pt; font-family: &quot;Droid Arabic Kufi&quot;, sans-serif; font-weight: normal;">.</span></strong></li>
</ul>
<h3 dir="RTL" style="box-sizing: border-box; font-family: Roboto, 'Droid Arabic Kufi', sans-serif; font-weight: 400; line-height: 1.1; color: rgb(68, 68, 68); font-size: 24px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; letter-spacing: normal; orphans: 2; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; text-decoration-thickness: initial; text-decoration-style: initial; text-decoration-color: initial; direction: rtl; unicode-bidi: embed; margin-left: 0in; margin-right: 0in; margin-top: 0in; margin-bottom: 22.5pt; background: white">
<strong style="box-sizing: border-box; font-weight: bolder;">
<span lang="AR-SA" style="box-sizing: inherit; font-size: 10pt; line-height: 15.3333px; font-family: &quot;Droid Arabic Kufi&quot;, sans-serif; color: red; letter-spacing: -0.25pt; font-weight: normal;">
الإبلاغ</span></strong><strong style="box-sizing: inherit; font-weight: bolder;"><span lang="AR-SA" style="box-sizing: inherit; font-size: 10pt; line-height: 15.3333px; font-family: &quot;Droid Arabic Kufi&quot;, sans-serif; color: red; font-weight: normal;">&nbsp;<span style="box-sizing: inherit; letter-spacing: -0.25pt;">عن</span>&nbsp;<span style="box-sizing: inherit; letter-spacing: -0.25pt;">رسوب</span>&nbsp;<span style="box-sizing: inherit; letter-spacing: -0.25pt;">بسبب</span>&nbsp;<span style="box-sizing: inherit; letter-spacing: -0.25pt;">الغياب</span></span></strong><strong style="box-sizing: border-box; font-weight: bolder;"><span dir="LTR" style="box-sizing: inherit; font-size: 10pt; line-height: 15.3333px; font-family: &quot;Droid Arabic Kufi&quot;, sans-serif; color: red; letter-spacing: -0.25pt; font-weight: normal;">:</span></strong></h3>
<ul type="disc" style="box-sizing: inherit; margin-top: 0px; margin-bottom: 0in; color: rgb(68, 68, 68); font-family: Roboto, &quot;Droid Arabic Kufi&quot;, sans-serif; font-size: 14px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255); text-decoration-thickness: initial; text-decoration-style: initial; text-decoration-color: initial;">
	<li class="MsoNormal" dir="RTL" style="box-sizing: inherit; line-height: normal; font-size: 11pt; font-family: Calibri, sans-serif; color: rgb(39, 48, 68); text-align: right; direction: rtl; unicode-bidi: embed; margin-left: 0in; margin-right: 0.5in; margin-top: 0in; margin-bottom: 6pt; background: white">
	<strong style="box-sizing: inherit; font-weight: bolder;">
	<span lang="AR-SA" style="box-sizing: inherit; font-size: 10pt; font-family: &quot;Droid Arabic Kufi&quot;, sans-serif; font-weight: normal;">
	يتم</span></strong><span lang="AR-SA" style="box-sizing: inherit; font-size: 10pt; font-family: &quot;Droid Arabic Kufi&quot;, sans-serif;">&nbsp;<strong style="box-sizing: border-box; font-weight: bolder;"><span style="box-sizing: inherit; font-family: &quot;Droid Arabic Kufi&quot;, sans-serif; font-weight: normal;">متابعة</span></strong>&nbsp;<strong style="box-sizing: border-box; font-weight: bolder;"><span style="box-sizing: inherit; font-family: &quot;Droid Arabic Kufi&quot;, sans-serif; font-weight: normal;">ورصد</span></strong>&nbsp;<strong style="box-sizing: border-box; font-weight: bolder;"><span style="box-sizing: inherit; font-family: &quot;Droid Arabic Kufi&quot;, sans-serif; font-weight: normal;">دخول</span></strong>&nbsp;<strong style="box-sizing: border-box; font-weight: bolder;"><span style="box-sizing: inherit; font-family: &quot;Droid Arabic Kufi&quot;, sans-serif; font-weight: normal;">المتدرب</span></strong>&nbsp;<strong style="box-sizing: border-box; font-weight: bolder;"><span style="box-sizing: inherit; font-family: &quot;Droid Arabic Kufi&quot;, sans-serif; font-weight: normal;">على</span></strong>&nbsp;<strong style="box-sizing: border-box; font-weight: bolder;"><span style="box-sizing: inherit; font-family: &quot;Droid Arabic Kufi&quot;, sans-serif; font-weight: normal;">المنصة</span></strong>&nbsp;<strong style="box-sizing: border-box; font-weight: bolder;"><span style="box-sizing: inherit; font-family: &quot;Droid Arabic Kufi&quot;, sans-serif; font-weight: normal;">بشكل 
	الكتروني</span></strong>&nbsp;<strong style="box-sizing: border-box; font-weight: bolder;"><span style="box-sizing: inherit; font-family: &quot;Droid Arabic Kufi&quot;, sans-serif; font-weight: normal;">وتسجيل</span></strong>&nbsp;<strong style="box-sizing: border-box; font-weight: bolder;"><span style="box-sizing: inherit; font-family: &quot;Droid Arabic Kufi&quot;, sans-serif; font-weight: normal;">وقت</span></strong>&nbsp;<strong style="box-sizing: border-box; font-weight: bolder;"><span style="box-sizing: inherit; font-family: &quot;Droid Arabic Kufi&quot;, sans-serif; font-weight: normal;">حضور</span></strong>&nbsp;<strong style="box-sizing: border-box; font-weight: bolder;"><span style="box-sizing: inherit; font-family: &quot;Droid Arabic Kufi&quot;, sans-serif; font-weight: normal;">المحاضرات</span></strong>&nbsp;<strong style="box-sizing: border-box; font-weight: bolder;"><span style="box-sizing: inherit; font-family: &quot;Droid Arabic Kufi&quot;, sans-serif; font-weight: normal;">المباشرة</span></strong>&nbsp;<strong style="box-sizing: border-box; font-weight: bolder;"><span style="box-sizing: inherit; font-family: &quot;Droid Arabic Kufi&quot;, sans-serif; font-weight: normal;">كاملة</span></strong>&nbsp;<strong style="box-sizing: border-box; font-weight: bolder;"><span style="box-sizing: inherit; font-family: &quot;Droid Arabic Kufi&quot;, sans-serif; font-weight: normal;">ويتم</span></strong>&nbsp;<strong style="box-sizing: border-box; font-weight: bolder;"><span style="box-sizing: inherit; font-family: &quot;Droid Arabic Kufi&quot;, sans-serif; font-weight: normal;">رصد</span></strong>&nbsp;<strong style="box-sizing: border-box; font-weight: bolder;"><span style="box-sizing: inherit; font-family: &quot;Droid Arabic Kufi&quot;, sans-serif; font-weight: normal;">المقررات 
	التي</span></strong>&nbsp;<strong style="box-sizing: border-box; font-weight: bolder;"><span style="box-sizing: inherit; font-family: &quot;Droid Arabic Kufi&quot;, sans-serif; font-weight: normal;">تم</span></strong>&nbsp;<strong style="box-sizing: border-box; font-weight: bolder;"><span style="box-sizing: inherit; font-family: &quot;Droid Arabic Kufi&quot;, sans-serif; font-weight: normal;">الدخول</span></strong>&nbsp;<strong style="box-sizing: border-box; font-weight: bolder;"><span style="box-sizing: inherit; font-family: &quot;Droid Arabic Kufi&quot;, sans-serif; font-weight: normal;">عليها</span></strong>&nbsp;<strong style="box-sizing: border-box; font-weight: bolder;"><span style="box-sizing: inherit; font-family: &quot;Droid Arabic Kufi&quot;, sans-serif; font-weight: normal;">والنشاط</span></strong>&nbsp;<strong style="box-sizing: border-box; font-weight: bolder;"><span style="box-sizing: inherit; font-family: &quot;Droid Arabic Kufi&quot;, sans-serif; font-weight: normal;">الذي</span></strong>&nbsp;<strong style="box-sizing: border-box; font-weight: bolder;"><span style="box-sizing: inherit; font-family: &quot;Droid Arabic Kufi&quot;, sans-serif; font-weight: normal;">قام</span></strong>&nbsp;<strong style="box-sizing: border-box; font-weight: bolder;"><span style="box-sizing: inherit; font-family: &quot;Droid Arabic Kufi&quot;, sans-serif; font-weight: normal;">به</span></strong>&nbsp;<strong style="box-sizing: border-box; font-weight: bolder;"><span style="box-sizing: inherit; font-family: &quot;Droid Arabic Kufi&quot;, sans-serif; font-weight: normal;">في</span></strong>&nbsp;<strong style="box-sizing: border-box; font-weight: bolder;"><span style="box-sizing: inherit; font-family: &quot;Droid Arabic Kufi&quot;, sans-serif; font-weight: normal;">كل</span></strong>&nbsp;<strong style="box-sizing: border-box; font-weight: bolder;"><span style="box-sizing: inherit; font-family: &quot;Droid Arabic Kufi&quot;, sans-serif; font-weight: normal;">مقرر</span></strong>&nbsp;<strong style="box-sizing: border-box; font-weight: bolder;"><span style="box-sizing: inherit; font-family: &quot;Droid Arabic Kufi&quot;, sans-serif; font-weight: normal;">وتحديد</span></strong>&nbsp;<strong style="box-sizing: border-box; font-weight: bolder;"><span style="box-sizing: inherit; font-family: &quot;Droid Arabic Kufi&quot;, sans-serif; font-weight: normal;">الوقت</span></strong>&nbsp;<strong style="box-sizing: border-box; font-weight: bolder;"><span style="box-sizing: inherit; font-family: &quot;Droid Arabic Kufi&quot;, sans-serif; font-weight: normal;">المستغرق</span></strong>&nbsp;<strong style="box-sizing: border-box; font-weight: bolder;"><span style="box-sizing: inherit; font-family: &quot;Droid Arabic Kufi&quot;, sans-serif; font-weight: normal;">لكل</span></strong>&nbsp;<strong style="box-sizing: border-box; font-weight: bolder;"><span style="box-sizing: inherit; font-family: &quot;Droid Arabic Kufi&quot;, sans-serif; font-weight: normal;">نشاط</span></strong></span><strong style="box-sizing: inherit; font-weight: bolder;"><span dir="LTR" style="box-sizing: inherit; font-size: 10pt; font-family: &quot;Droid Arabic Kufi&quot;, sans-serif; font-weight: normal;">.</span></strong></li>
	<li class="MsoNormal" dir="RTL" style="box-sizing: border-box; line-height: normal; font-size: 11pt; font-family: Calibri, sans-serif; color: rgb(39, 48, 68); text-align: right; direction: rtl; unicode-bidi: embed; margin-left: 0in; margin-right: 0.5in; margin-top: 0in; margin-bottom: 6pt; background: white">
	<strong style="box-sizing: border-box; font-weight: bolder;">
	<span lang="AR-SA" style="box-sizing: inherit; font-size: 10pt; font-family: &quot;Droid Arabic Kufi&quot;, sans-serif; font-weight: normal;">
	تم عملية رصد</span></strong><span lang="AR-SA" style="box-sizing: inherit; font-size: 10pt; font-family: &quot;Droid Arabic Kufi&quot;, sans-serif;">&nbsp;<strong style="box-sizing: border-box; font-weight: bolder;"><span style="box-sizing: inherit; font-family: &quot;Droid Arabic Kufi&quot;, sans-serif; font-weight: normal;">وتسجيل</span></strong>&nbsp;<strong style="box-sizing: border-box; font-weight: bolder;"><span style="box-sizing: inherit; font-family: &quot;Droid Arabic Kufi&quot;, sans-serif; font-weight: normal;">الحضور</span></strong>&nbsp;<strong style="box-sizing: border-box; font-weight: bolder;"><span style="box-sizing: inherit; font-family: &quot;Droid Arabic Kufi&quot;, sans-serif; font-weight: normal;">والغياب 
	يوميا</span></strong>&nbsp;<strong style="box-sizing: border-box; font-weight: bolder;"><span style="box-sizing: inherit; font-family: &quot;Droid Arabic Kufi&quot;, sans-serif; font-weight: normal;">في</span></strong>&nbsp;<strong style="box-sizing: border-box; font-weight: bolder;"><span style="box-sizing: inherit; font-family: &quot;Droid Arabic Kufi&quot;, sans-serif; font-weight: normal;">المحاضرات</span></strong>&nbsp;<strong style="box-sizing: border-box; font-weight: bolder;"><span style="box-sizing: inherit; font-family: &quot;Droid Arabic Kufi&quot;, sans-serif; font-weight: normal;">المباشرة</span></strong>&nbsp;<strong style="box-sizing: border-box; font-weight: bolder;"><span style="box-sizing: inherit; font-family: &quot;Droid Arabic Kufi&quot;, sans-serif; font-weight: normal;">والمحتوى</span></strong>&nbsp;<strong style="box-sizing: border-box; font-weight: bolder;"><span style="box-sizing: inherit; font-family: &quot;Droid Arabic Kufi&quot;, sans-serif; font-weight: normal;">والواجبات</span></strong>&nbsp;<strong style="box-sizing: border-box; font-weight: bolder;"><span style="box-sizing: inherit; font-family: &quot;Droid Arabic Kufi&quot;, sans-serif; font-weight: normal;">والتمارين</span></strong>&nbsp;<strong style="box-sizing: border-box; font-weight: bolder;"><span style="box-sizing: inherit; font-family: &quot;Droid Arabic Kufi&quot;, sans-serif; font-weight: normal;">والمناقشات</span></strong>&nbsp;<strong style="box-sizing: border-box; font-weight: bolder;"><span style="box-sizing: inherit; font-family: &quot;Droid Arabic Kufi&quot;, sans-serif; font-weight: normal;">في</span></strong>&nbsp;<strong style="box-sizing: border-box; font-weight: bolder;"><span style="box-sizing: inherit; font-family: &quot;Droid Arabic Kufi&quot;, sans-serif; font-weight: normal;">منتديات 
	الحوار</span></strong></span><strong style="box-sizing: border-box; font-weight: bolder;"><span dir="LTR" style="box-sizing: inherit; font-size: 10pt; font-family: &quot;Droid Arabic Kufi&quot;, sans-serif; font-weight: normal;">.</span></strong></li>
	<li class="MsoNormal" dir="RTL" style="box-sizing: border-box; line-height: normal; font-size: 11pt; font-family: Calibri, sans-serif; color: rgb(39, 48, 68); text-align: right; direction: rtl; unicode-bidi: embed; margin-left: 0in; margin-right: 0.5in; margin-top: 0in; margin-bottom: 6pt; background: white">
	<strong style="box-sizing: border-box; font-weight: bolder;">
	<span lang="AR-SA" style="box-sizing: inherit; font-size: 10pt; font-family: &quot;Droid Arabic Kufi&quot;, sans-serif; font-weight: normal;">
	توفير</span></strong><span lang="AR-SA" style="box-sizing: inherit; font-size: 10pt; font-family: &quot;Droid Arabic Kufi&quot;, sans-serif;">&nbsp;<strong style="box-sizing: border-box; font-weight: bolder;"><span style="box-sizing: inherit; font-family: &quot;Droid Arabic Kufi&quot;, sans-serif; font-weight: normal;">خدمة</span></strong>&nbsp;<strong style="box-sizing: border-box; font-weight: bolder;"><span style="box-sizing: inherit; font-family: &quot;Droid Arabic Kufi&quot;, sans-serif; font-weight: normal;">الاستعلام</span></strong>&nbsp;<strong style="box-sizing: border-box; font-weight: bolder;"><span style="box-sizing: inherit; font-family: &quot;Droid Arabic Kufi&quot;, sans-serif; font-weight: normal;">عن</span></strong>&nbsp;<strong style="box-sizing: border-box; font-weight: bolder;"><span style="box-sizing: inherit; font-family: &quot;Droid Arabic Kufi&quot;, sans-serif; font-weight: normal;">الحضور</span></strong>&nbsp;<strong style="box-sizing: border-box; font-weight: bolder;"><span style="box-sizing: inherit; font-family: &quot;Droid Arabic Kufi&quot;, sans-serif; font-weight: normal;">والغياب</span></strong>&nbsp;<strong style="box-sizing: border-box; font-weight: bolder;"><span style="box-sizing: inherit; font-family: &quot;Droid Arabic Kufi&quot;, sans-serif; font-weight: normal;">للمتدربين</span></strong>&nbsp;<strong style="box-sizing: border-box; font-weight: bolder;"><span style="box-sizing: inherit; font-family: &quot;Droid Arabic Kufi&quot;, sans-serif; font-weight: normal;">في</span></strong>&nbsp;<strong style="box-sizing: border-box; font-weight: bolder;"><span style="box-sizing: inherit; font-family: &quot;Droid Arabic Kufi&quot;, sans-serif; font-weight: normal;">المنصة</span></strong>&nbsp;<strong style="box-sizing: border-box; font-weight: bolder;"><span style="box-sizing: inherit; font-family: &quot;Droid Arabic Kufi&quot;, sans-serif; font-weight: normal;">الالكترونية</span></strong>&nbsp;<strong style="box-sizing: border-box; font-weight: bolder;"><span style="box-sizing: inherit; font-family: &quot;Droid Arabic Kufi&quot;, sans-serif; font-weight: normal;">من</span></strong>&nbsp;<strong style="box-sizing: border-box; font-weight: bolder;"><span style="box-sizing: inherit; font-family: &quot;Droid Arabic Kufi&quot;, sans-serif; font-weight: normal;">خلال</span></strong>&nbsp;<strong style="box-sizing: border-box; font-weight: bolder;"><span style="box-sizing: inherit; font-family: &quot;Droid Arabic Kufi&quot;, sans-serif; font-weight: normal;">أيقونة</span></strong>&nbsp;<strong style="box-sizing: border-box; font-weight: bolder;"><span style="box-sizing: inherit; font-family: &quot;Droid Arabic Kufi&quot;, sans-serif; font-weight: normal;">الحضور</span></strong>&nbsp;<strong style="box-sizing: border-box; font-weight: bolder;"><span style="box-sizing: inherit; font-family: &quot;Droid Arabic Kufi&quot;, sans-serif; font-weight: normal;">في</span></strong>&nbsp;<strong style="box-sizing: border-box; font-weight: bolder;"><span style="box-sizing: inherit; font-family: &quot;Droid Arabic Kufi&quot;, sans-serif; font-weight: normal;">كل</span></strong>&nbsp;<strong style="box-sizing: border-box; font-weight: bolder;"><span style="box-sizing: inherit; font-family: &quot;Droid Arabic Kufi&quot;, sans-serif; font-weight: normal;">مقرر</span></strong>&nbsp;<strong style="box-sizing: border-box; font-weight: bolder;"><span style="box-sizing: inherit; font-family: &quot;Droid Arabic Kufi&quot;, sans-serif; font-weight: normal;">دراسي</span></strong></span><strong style="box-sizing: border-box; font-weight: bolder;"><span dir="LTR" style="box-sizing: inherit; font-size: 10pt; font-family: &quot;Droid Arabic Kufi&quot;, sans-serif; font-weight: normal;">.</span></strong></li>
	<li class="MsoNormal" dir="RTL" style="box-sizing: border-box; line-height: normal; font-size: 11pt; font-family: Calibri, sans-serif; color: rgb(39, 48, 68); text-align: right; direction: rtl; unicode-bidi: embed; margin-left: 0in; margin-right: 0.5in; margin-top: 0in; margin-bottom: 6pt; background: white">
	<strong style="box-sizing: border-box; font-weight: bolder;">
	<span lang="AR-SA" style="box-sizing: inherit; font-size: 10pt; font-family: &quot;Droid Arabic Kufi&quot;, sans-serif; font-weight: normal;">
	تجاوز</span></strong><span lang="AR-SA" style="box-sizing: inherit; font-size: 10pt; font-family: &quot;Droid Arabic Kufi&quot;, sans-serif;">&nbsp;<strong style="box-sizing: border-box; font-weight: bolder;"><span style="box-sizing: inherit; font-family: &quot;Droid Arabic Kufi&quot;, sans-serif; font-weight: normal;">نسبة</span></strong>&nbsp;<strong style="box-sizing: border-box; font-weight: bolder;"><span style="box-sizing: inherit; font-family: &quot;Droid Arabic Kufi&quot;, sans-serif; font-weight: normal;">الغياب</span></strong>&nbsp;<strong style="box-sizing: border-box; font-weight: bolder;"><span style="box-sizing: inherit; font-family: &quot;Droid Arabic Kufi&quot;, sans-serif; font-weight: normal;">المسموح</span></strong>&nbsp;<strong style="box-sizing: border-box; font-weight: bolder;"><span style="box-sizing: inherit; font-family: &quot;Droid Arabic Kufi&quot;, sans-serif; font-weight: normal;">يؤدي</span></strong>&nbsp;<strong style="box-sizing: border-box; font-weight: bolder;"><span style="box-sizing: inherit; font-family: &quot;Droid Arabic Kufi&quot;, sans-serif; font-weight: normal;">إلى</span></strong>&nbsp;<strong style="box-sizing: border-box; font-weight: bolder;"><span style="box-sizing: inherit; font-family: &quot;Droid Arabic Kufi&quot;, sans-serif; font-weight: normal;">الحرمان</span></strong>&nbsp;<strong style="box-sizing: border-box; font-weight: bolder;"><span style="box-sizing: inherit; font-family: &quot;Droid Arabic Kufi&quot;, sans-serif; font-weight: normal;">من</span></strong>&nbsp;<strong style="box-sizing: border-box; font-weight: bolder;"><span style="box-sizing: inherit; font-family: &quot;Droid Arabic Kufi&quot;, sans-serif; font-weight: normal;">دخول</span></strong>&nbsp;<strong style="box-sizing: border-box; font-weight: bolder;"><span style="box-sizing: inherit; font-family: &quot;Droid Arabic Kufi&quot;, sans-serif; font-weight: normal;">الاختبار</span></strong>&nbsp;<strong style="box-sizing: border-box; font-weight: bolder;"><span style="box-sizing: inherit; font-family: &quot;Droid Arabic Kufi&quot;, sans-serif; font-weight: normal;">النهائي</span></strong>&nbsp;<strong style="box-sizing: border-box; font-weight: bolder;"><span style="box-sizing: inherit; font-family: &quot;Droid Arabic Kufi&quot;, sans-serif; font-weight: normal;">وهي&nbsp;</span></strong></span><strong style="box-sizing: inherit; font-weight: bolder;"><span dir="LTR" style="box-sizing: inherit; font-size: 10pt; font-family: &quot;Droid Arabic Kufi&quot;, sans-serif; font-weight: normal;">25 
	%&nbsp;</span></strong><strong style="box-sizing: border-box; font-weight: bolder;"><span lang="AR-SA" style="box-sizing: inherit; font-size: 10pt; font-family: &quot;Droid Arabic Kufi&quot;, sans-serif; font-weight: normal;">من</span></strong><span lang="AR-SA" style="box-sizing: inherit; font-size: 10pt; font-family: &quot;Droid Arabic Kufi&quot;, sans-serif;">&nbsp;<strong style="box-sizing: border-box; font-weight: bolder;"><span style="box-sizing: inherit; font-family: &quot;Droid Arabic Kufi&quot;, sans-serif; font-weight: normal;">ساعات</span></strong>&nbsp;<strong style="box-sizing: border-box; font-weight: bolder;"><span style="box-sizing: inherit; font-family: &quot;Droid Arabic Kufi&quot;, sans-serif; font-weight: normal;">ا</span></strong>&nbsp;<strong style="box-sizing: border-box; font-weight: bolder;"><span style="box-sizing: inherit; font-family: &quot;Droid Arabic Kufi&quot;, sans-serif; font-weight: normal;">لمقرر</span></strong>&nbsp;<strong style="box-sizing: border-box; font-weight: bolder;"><span style="box-sizing: inherit; font-family: &quot;Droid Arabic Kufi&quot;, sans-serif; font-weight: normal;">الدراسي</span></strong></span><strong style="box-sizing: border-box; font-weight: bolder;"><span dir="LTR" style="box-sizing: inherit; font-size: 10pt; font-family: &quot;Droid Arabic Kufi&quot;, sans-serif; font-weight: normal;">.</span></strong></li>
	<li class="MsoNormal" dir="RTL" style="box-sizing: border-box; line-height: normal; font-size: 11pt; font-family: Calibri, sans-serif; color: rgb(39, 48, 68); text-align: right; direction: rtl; unicode-bidi: embed; margin-left: 0in; margin-right: 0.5in; margin-top: 0in; margin-bottom: 6pt; background: white">
	<strong style="box-sizing: border-box; font-weight: bolder;">
	<span lang="AR-SA" style="box-sizing: inherit; font-size: 10pt; font-family: &quot;Droid Arabic Kufi&quot;, sans-serif; font-weight: normal;">
	في</span></strong><span lang="AR-SA" style="box-sizing: inherit; font-size: 10pt; font-family: &quot;Droid Arabic Kufi&quot;, sans-serif;">&nbsp;<strong style="box-sizing: border-box; font-weight: bolder;"><span style="box-sizing: inherit; font-family: &quot;Droid Arabic Kufi&quot;, sans-serif; font-weight: normal;">حال</span></strong>&nbsp;<strong style="box-sizing: border-box; font-weight: bolder;"><span style="box-sizing: inherit; font-family: &quot;Droid Arabic Kufi&quot;, sans-serif; font-weight: normal;">غياب</span></strong>&nbsp;<strong style="box-sizing: border-box; font-weight: bolder;"><span style="box-sizing: inherit; font-family: &quot;Droid Arabic Kufi&quot;, sans-serif; font-weight: normal;">المتدرب</span></strong>&nbsp;<strong style="box-sizing: border-box; font-weight: bolder;"><span style="box-sizing: inherit; font-family: &quot;Droid Arabic Kufi&quot;, sans-serif; font-weight: normal;">عن</span></strong>&nbsp;<strong style="box-sizing: border-box; font-weight: bolder;"><span style="box-sizing: inherit; font-family: &quot;Droid Arabic Kufi&quot;, sans-serif; font-weight: normal;">الاختبار</span></strong>&nbsp;<strong style="box-sizing: border-box; font-weight: bolder;"><span style="box-sizing: inherit; font-family: &quot;Droid Arabic Kufi&quot;, sans-serif; font-weight: normal;">النهائي</span></strong>&nbsp;<strong style="box-sizing: border-box; font-weight: bolder;"><span style="box-sizing: inherit; font-family: &quot;Droid Arabic Kufi&quot;, sans-serif; font-weight: normal;">بدون</span></strong>&nbsp;<strong style="box-sizing: border-box; font-weight: bolder;"><span style="box-sizing: inherit; font-family: &quot;Droid Arabic Kufi&quot;, sans-serif; font-weight: normal;">عذر</span></strong>&nbsp;<strong style="box-sizing: border-box; font-weight: bolder;"><span style="box-sizing: inherit; font-family: &quot;Droid Arabic Kufi&quot;, sans-serif; font-weight: normal;">رسمي</span></strong>&nbsp;<strong style="box-sizing: border-box; font-weight: bolder;"><span style="box-sizing: inherit; font-family: &quot;Droid Arabic Kufi&quot;, sans-serif; font-weight: normal;">مقبول</span></strong>&nbsp;<strong style="box-sizing: border-box; font-weight: bolder;"><span style="box-sizing: inherit; font-family: &quot;Droid Arabic Kufi&quot;, sans-serif; font-weight: normal;">يتم</span></strong>&nbsp;<strong style="box-sizing: border-box; font-weight: bolder;"><span style="box-sizing: inherit; font-family: &quot;Droid Arabic Kufi&quot;, sans-serif; font-weight: normal;">اشعاره</span></strong>&nbsp;<strong style="box-sizing: border-box; font-weight: bolder;"><span style="box-sizing: inherit; font-family: &quot;Droid Arabic Kufi&quot;, sans-serif; font-weight: normal;">بالرسوب</span></strong>&nbsp;<strong style="box-sizing: border-box; font-weight: bolder;"><span style="box-sizing: inherit; font-family: &quot;Droid Arabic Kufi&quot;, sans-serif; font-weight: normal;">في</span></strong>&nbsp;<strong style="box-sizing: border-box; font-weight: bolder;"><span style="box-sizing: inherit; font-family: &quot;Droid Arabic Kufi&quot;, sans-serif; font-weight: normal;">المادة</span></strong></span><strong style="box-sizing: border-box; font-weight: bolder;"><span dir="LTR" style="box-sizing: inherit; font-size: 10pt; font-family: &quot;Droid Arabic Kufi&quot;, sans-serif; font-weight: normal;">.</span></strong></li>
</ul>
</p>
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
    <section class="layer-overlay overlay-theme-colored-9" data-bg-img="images/we-provide-bg.webp" data-parallax-ratio="0.7">
      <div class="container pt-90 pb-90">
        <div class="row mt-30">
           
           
   <?
$result=mysqli_query($conn,"select* from count_pro  ");
while($row=mysqli_fetch_array($result))
{
?>           
          <div class="col-xs-12 col-sm-6 col-md-3 mb-md-50">
            <div class="funfact text-center">
              <i class="pe-7s-<? echo $row['logo']; ?> mb-20 text-theme-colored2"></i>
              <h2 data-animation-duration="2000" data-value="<? echo $row['num']; ?>" class="animate-number text-white font-38 font-weight-400 mt-0 mb-15">0</h2>
              <h5 class="text-white text-uppercase"><? echo $row['name']; ?></h5>
            </div>
          </div><? } ?>
          
        </div>
      </div>
    </section>

    <!-- Section: Team -->
   <?
  
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
           
           
<?
while($row=mysqli_fetch_array($result))
{
?>           <div class="col-xs-12 col-sm-6 col-md-3">
            <div class="team-members border-bottom-theme-colored2px text-center maxwidth400 mb-30">
              <div class="team-thumb">
                <img class="img-fullwidth" alt="" src="images/partners/<? echo $row['img']; ?>">
                <div class="team-overlay"></div>
                <ul class="styled-icons team-social icon-sm">
                  <li><a href="<? echo $row['facebook']; ?>"><i class="fa fa-facebook"></i></a></li>
                  <li><a href="<? echo $row['twitter']; ?>"><i class="fa fa-twitter"></i></a></li>
                  <li><a href="<? echo $row['instagram']; ?>"><i class="fa fa-instagram"></i></a></li>
                  <li><a href="<? echo $row['whatsapp']; ?>"><i class="fa fa-whatsapp"></i></a></li>
                </ul>
              </div>
              <div class="team-details">
                <h4 class=" font-weight-400  " ><? echo $row['name_ar']; ?></h4>
                <h6 class="text-gray font-13 font-weight-400 line-bottom-centered mt-0"><? echo $row['job_ar']; ?></h6>
                <p class="hidden-md"><? echo substr($row['details_ar'],0,150); ?></p>
              </div>
            </div>
          </div>
          <? } ?>
        </div>
      </div>
    </section>
          <? } ?>

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