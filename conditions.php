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
.auto-style1 {
	font-family: "Droid Arabic Kufi", sans-serif;
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
                                <li><a target="_blank" href="<? echo $facebook; ?>"><i class="fa fa-facebook text-white"></i></a></li>
                <li><a target="_blank" href="<? echo $twitter; ?>"><i class="fa fa-twitter text-white"></i></a></li>
                <li><a target="_blank" href="<? echo $whatsapp; ?>"><i class="fa fa-whatsapp text-white"></i></a></li>
                <li><a target="_blank" href="<? echo $youtube; ?>"><i class="fa fa-youtube text-white"></i></a></li>
                <li><a target="_blank" href="<? echo $instagram; ?>"><i class="fa fa-instagram text-white"></i></a></li>
                <li><a target="_blank" href="<? echo $tiktok; ?>"><svg xmlns="http://www.w3.org/2000/svg" height="13" width="13" viewBox="0 0 448 512"><!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.--><path fill="#ffffff" d="M448 209.9a210.1 210.1 0 0 1 -122.8-39.3V349.4A162.6 162.6 0 1 1 185 188.3V278.2a74.6 74.6 0 1 0 52.2 71.2V0l88 0a121.2 121.2 0 0 0 1.9 22.2h0A122.2 122.2 0 0 0 381 102.4a121.4 121.4 0 0 0 67 20.1z"/></svg></a></li>

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
الشروط والأحكام
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
         <h2 class="text-uppercasetext-theme-colored mt-0 mt-sm-30"><br>الشروط والأحكام 
</h2> 
                          	<div class="double-line-bottom-theme-colored-2"></div>

           
            <p><p class="MsoNormal" dir="RTL" style="box-sizing: inherit; color: rgb(68, 68, 68); font-family: Roboto, 'Droid Arabic Kufi', sans-serif; font-size: 14px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; text-decoration-thickness: initial; text-decoration-style: initial; text-decoration-color: initial; text-align: justify; line-height: normal; direction: rtl; unicode-bidi: embed; margin-top: 0px; margin-bottom: 1rem; background: white">
<b style="box-sizing: inherit; font-weight: bolder;">
<span lang="AR-SA" style="box-sizing: inherit; font-size: 10pt; font-family: &quot;Droid Arabic Kufi&quot;, sans-serif; color: black;">
فترات التسجيل</span></b></p>
<p class="MsoListParagraphCxSpFirst" dir="RTL" style="box-sizing: inherit; color: rgb(68, 68, 68); font-family: Roboto, 'Droid Arabic Kufi', sans-serif; font-size: 14px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; text-decoration-thickness: initial; text-decoration-style: initial; text-decoration-color: initial; text-align: justify; text-indent: -0.25in; line-height: normal; direction: rtl; unicode-bidi: embed; margin-left: 0in; margin-right: 0.75in; margin-top: 0px; margin-bottom: 1rem; background: white">
<span style="box-sizing: inherit; font-size: 10pt; font-family: Symbol; color: black;">
·<span style="box-sizing: inherit; font: 7pt &quot;Times New Roman&quot;;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span></span><span lang="AR-SA" style="box-sizing: inherit; font-size: 10pt; font-family: &quot;Droid Arabic Kufi&quot;, sans-serif; color: black;">يغلق 
التسجيل في البرامج التدريبية بعد آخر موعد للتسجيل فيها</span><span dir="LTR" style="box-sizing: inherit; font-size: 10pt; font-family: &quot;Droid Arabic Kufi&quot;, sans-serif; color: black;">.</span></p>
<p class="MsoListParagraphCxSpMiddle" dir="RTL" style="box-sizing: inherit; color: rgb(68, 68, 68); font-family: Roboto, 'Droid Arabic Kufi', sans-serif; font-size: 14px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; text-decoration-thickness: initial; text-decoration-style: initial; text-decoration-color: initial; text-align: justify; text-indent: -0.25in; line-height: normal; direction: rtl; unicode-bidi: embed; margin-left: 0in; margin-right: 0.75in; margin-top: 0px; margin-bottom: 1rem; background: white">
<span style="box-sizing: inherit; font-size: 10pt; font-family: Symbol; color: black;">
·<span style="box-sizing: inherit; font: 7pt &quot;Times New Roman&quot;;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span></span><span lang="AR-SA" style="box-sizing: inherit; font-size: 10pt; font-family: &quot;Droid Arabic Kufi&quot;, sans-serif; color: black;">آخر 
موعد للتسجيل&nbsp;بالبرنامج ليس هو&nbsp;تاريخ بداية البرنامج</span><span dir="LTR" style="box-sizing: inherit; font-size: 10pt; font-family: &quot;Droid Arabic Kufi&quot;, sans-serif; color: black;">.</span></p>
<p class="MsoListParagraphCxSpLast" dir="RTL" style="box-sizing: inherit; color: rgb(68, 68, 68); font-family: Roboto, 'Droid Arabic Kufi', sans-serif; font-size: 14px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; text-decoration-thickness: initial; text-decoration-style: initial; text-decoration-color: initial; text-align: justify; text-indent: -0.25in; line-height: normal; direction: rtl; unicode-bidi: embed; margin-left: 0in; margin-right: 0.75in; margin-top: 0px; margin-bottom: 1rem; background: white">
<span style="box-sizing: inherit; font-size: 10pt; font-family: Symbol; color: black;">
·<span style="box-sizing: inherit; font: 7pt &quot;Times New Roman&quot;;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span></span><span lang="AR-SA" style="box-sizing: inherit; font-size: 10pt; font-family: &quot;Droid Arabic Kufi&quot;, sans-serif; color: black;">بعد 
انتهاء آخر موعد للتسجيل يمكن للمتدرب طلب إعادة عقد البرنامج مرة أخرى</span><span dir="LTR" style="box-sizing: inherit; font-size: 10pt; font-family: &quot;Droid Arabic Kufi&quot;, sans-serif; color: black;">.</span></p>
<p class="MsoNormal" dir="RTL" style="box-sizing: inherit; color: rgb(68, 68, 68); font-family: Roboto, 'Droid Arabic Kufi', sans-serif; font-size: 14px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; text-decoration-thickness: initial; text-decoration-style: initial; text-decoration-color: initial; text-align: justify; line-height: normal; direction: rtl; unicode-bidi: embed; margin-top: 0px; margin-bottom: 1rem; background: white">
<b style="box-sizing: inherit; font-weight: bolder;">
<span lang="AR-SA" style="box-sizing: inherit; font-size: 10pt; font-family: &quot;Droid Arabic Kufi&quot;, sans-serif; color: black;">
سياسة المركز</span></b></p>
<p class="MsoListParagraphCxSpFirst" dir="RTL" style="box-sizing: inherit; color: rgb(68, 68, 68); font-family: Roboto, 'Droid Arabic Kufi', sans-serif; font-size: 14px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; text-decoration-thickness: initial; text-decoration-style: initial; text-decoration-color: initial; text-align: justify; text-indent: -0.25in; line-height: normal; direction: rtl; unicode-bidi: embed; margin-left: 0in; margin-right: 0.75in; margin-top: 0px; margin-bottom: 1rem; background: white">
<span style="box-sizing: inherit; font-size: 10pt; font-family: Symbol; color: black;">
·<span style="box-sizing: inherit; font: 7pt &quot;Times New Roman&quot;;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span></span><span lang="ar-sa"><span style="box-sizing: inherit; font-size: 10pt; color: black;"><span style="box-sizing: inherit; font-style: normal; font-variant: normal; font-weight: normal; line-height: normal;" class="auto-style1">يتم 
تقديم البرنامج التدريبي بنمط التدريب المدمج بما لا يزيد عن 25% من اجمالي عدد 
ساعات البرنامج التدريبي</span></span></span></p>
<p class="MsoNormal" dir="RTL" style="box-sizing: inherit; color: rgb(68, 68, 68); font-family: Roboto, 'Droid Arabic Kufi', sans-serif; font-size: 14px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; text-decoration-thickness: initial; text-decoration-style: initial; text-decoration-color: initial; text-align: justify; line-height: normal; direction: rtl; unicode-bidi: embed; margin-top: 0px; margin-bottom: 1rem; background: white">
<b style="box-sizing: inherit; font-weight: bolder;">
<span lang="AR-SA" style="box-sizing: inherit; font-size: 10pt; font-family: &quot;Droid Arabic Kufi&quot;, sans-serif; color: black;">
التسجيل بالبرامج التدريبية</span></b></p>
<p class="MsoListParagraphCxSpFirst" dir="RTL" style="box-sizing: inherit; color: rgb(68, 68, 68); font-family: Roboto, 'Droid Arabic Kufi', sans-serif; font-size: 14px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; text-decoration-thickness: initial; text-decoration-style: initial; text-decoration-color: initial; text-align: justify; text-indent: -0.25in; line-height: normal; direction: rtl; unicode-bidi: embed; margin-left: 0in; margin-right: 0.75in; margin-top: 0px; margin-bottom: 1rem; background: white">
<span style="box-sizing: inherit; font-size: 10pt; font-family: Symbol; color: black;">
·<span style="box-sizing: inherit; font: 7pt &quot;Times New Roman&quot;;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span></span><span lang="AR-SA" style="box-sizing: inherit; font-size: 10pt; font-family: &quot;Droid Arabic Kufi&quot;, sans-serif; color: black;">يمكن 
التسجيل&nbsp;</span><span lang="AR-SA" style="box-sizing: inherit; font-size: 10pt; color: black;">بالبرامج</span><span lang="AR-SA" style="box-sizing: inherit; font-size: 10pt; font-family: &quot;Droid Arabic Kufi&quot;, sans-serif; color: black;">&nbsp;التدريبية 
أثناء فترة التسجيل</span><span dir="LTR" style="box-sizing: inherit; font-size: 10pt; font-family: &quot;Droid Arabic Kufi&quot;, sans-serif; color: black;">.</span></p>
<p class="MsoListParagraphCxSpMiddle" dir="RTL" style="box-sizing: inherit; color: rgb(68, 68, 68); font-family: Roboto, 'Droid Arabic Kufi', sans-serif; font-size: 14px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; text-decoration-thickness: initial; text-decoration-style: initial; text-decoration-color: initial; text-align: justify; text-indent: -0.25in; line-height: normal; direction: rtl; unicode-bidi: embed; margin-left: 0in; margin-right: 0.75in; margin-top: 0px; margin-bottom: 1rem; background: white">
<span style="box-sizing: inherit; font-size: 10pt; font-family: Symbol; color: black;">
·<span style="box-sizing: inherit; font: 7pt &quot;Times New Roman&quot;;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span></span><span lang="AR-SA" style="box-sizing: inherit; font-size: 10pt; font-family: &quot;Droid Arabic Kufi&quot;, sans-serif; color: black;">بمجرد 
التسجيل تصبح حالة التسجيل&nbsp;بانتظار السداد، والتي تعني أن التسجيل&nbsp;غير مؤكد&nbsp;ولكن 
المقعد تم حجزه</span><span dir="LTR" style="box-sizing: inherit; font-size: 10pt; font-family: &quot;Droid Arabic Kufi&quot;, sans-serif; color: black;">.</span></p>
<p class="MsoListParagraphCxSpMiddle" dir="RTL" style="box-sizing: inherit; color: rgb(68, 68, 68); font-family: Roboto, 'Droid Arabic Kufi', sans-serif; font-size: 14px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; text-decoration-thickness: initial; text-decoration-style: initial; text-decoration-color: initial; text-align: justify; text-indent: -0.25in; line-height: normal; direction: rtl; unicode-bidi: embed; margin-left: 0in; margin-right: 0.75in; margin-top: 0px; margin-bottom: 1rem; background: white">
<span style="box-sizing: inherit; font-size: 10pt; font-family: Symbol; color: black;">
·<span style="box-sizing: inherit; font: 7pt &quot;Times New Roman&quot;;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span></span><span lang="AR-SA" style="box-sizing: inherit; font-size: 10pt; font-family: &quot;Droid Arabic Kufi&quot;, sans-serif; color: black;">يجب 
السداد بالطرق الموضحة أدناه ليصبح التسجيل مؤكداً</span><span dir="LTR" style="box-sizing: inherit; font-size: 10pt; font-family: &quot;Droid Arabic Kufi&quot;, sans-serif; color: black;">.</span></p>
<p class="MsoListParagraphCxSpMiddle" dir="RTL" style="box-sizing: inherit; color: rgb(68, 68, 68); font-family: Roboto, 'Droid Arabic Kufi', sans-serif; font-size: 14px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; text-decoration-thickness: initial; text-decoration-style: initial; text-decoration-color: initial; text-align: justify; text-indent: -0.25in; line-height: normal; direction: rtl; unicode-bidi: embed; margin-left: 0in; margin-right: 0.75in; margin-top: 0px; margin-bottom: 1rem; background: white">
<span style="box-sizing: inherit; font-size: 10pt; font-family: Symbol; color: black;">
·<span style="box-sizing: inherit; font: 7pt &quot;Times New Roman&quot;;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span></span><span lang="AR-SA" style="box-sizing: inherit; font-size: 10pt; font-family: &quot;Droid Arabic Kufi&quot;, sans-serif; color: black;">في 
حال كان البرنامج مجانياً، يتم&nbsp;تأكيد التسجيل&nbsp;مباشرة بمجرد التسجيل</span><span dir="LTR" style="box-sizing: inherit; font-size: 10pt; font-family: &quot;Droid Arabic Kufi&quot;, sans-serif; color: black;">.</span></p>
<p class="MsoListParagraphCxSpMiddle" dir="RTL" style="box-sizing: inherit; color: rgb(68, 68, 68); font-family: Roboto, 'Droid Arabic Kufi', sans-serif; font-size: 14px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; text-decoration-thickness: initial; text-decoration-style: initial; text-decoration-color: initial; text-align: justify; text-indent: -0.25in; line-height: normal; direction: rtl; unicode-bidi: embed; margin-left: 0in; margin-right: 0.75in; margin-top: 0px; margin-bottom: 1rem; background: white">
<span style="box-sizing: inherit; font-size: 10pt; font-family: Symbol; color: black;">
·<span style="box-sizing: inherit; font: 7pt &quot;Times New Roman&quot;;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span></span><span lang="AR-SA" style="box-sizing: inherit; font-size: 10pt; font-family: &quot;Droid Arabic Kufi&quot;, sans-serif; color: black;">في 
حال انتهاء فترة التسجيل قبل السداد، يتم إلغاء التسجيل ويحول النظام التسجيل 
إلى&nbsp;طلب إعادة عقد البرنامج</span><span dir="LTR" style="box-sizing: inherit; font-size: 10pt; font-family: &quot;Droid Arabic Kufi&quot;, sans-serif; color: black;">.</span></p>
<p class="MsoListParagraphCxSpMiddle" dir="RTL" style="box-sizing: inherit; color: rgb(68, 68, 68); font-family: Roboto, 'Droid Arabic Kufi', sans-serif; font-size: 14px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; text-decoration-thickness: initial; text-decoration-style: initial; text-decoration-color: initial; text-align: justify; text-indent: -0.25in; line-height: normal; direction: rtl; unicode-bidi: embed; margin-left: 0in; margin-right: 0.75in; margin-top: 0px; margin-bottom: 1rem; background: white">
<span style="box-sizing: inherit; font-size: 10pt; font-family: Symbol; color: black;">
·<span style="box-sizing: inherit; font: 7pt &quot;Times New Roman&quot;;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span></span><span lang="AR-SA" style="box-sizing: inherit; font-size: 10pt; font-family: &quot;Droid Arabic Kufi&quot;, sans-serif; color: black;">في 
حال نفاذ المقاعد، يمكن للمتدرب التسجيل&nbsp;على قوائم الانتظار</span><span dir="LTR" style="box-sizing: inherit; font-size: 10pt; font-family: &quot;Droid Arabic Kufi&quot;, sans-serif; color: black;">.</span></p>
<p class="MsoListParagraphCxSpMiddle" dir="RTL" style="box-sizing: inherit; color: rgb(68, 68, 68); font-family: Roboto, 'Droid Arabic Kufi', sans-serif; font-size: 14px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; text-decoration-thickness: initial; text-decoration-style: initial; text-decoration-color: initial; text-align: justify; text-indent: -0.25in; line-height: normal; direction: rtl; unicode-bidi: embed; margin-left: 0in; margin-right: 0.75in; margin-top: 0px; margin-bottom: 1rem; background: white">
<span style="box-sizing: inherit; font-size: 10pt; font-family: Symbol; color: black;">
·<span style="box-sizing: inherit; font: 7pt &quot;Times New Roman&quot;;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span></span><span lang="AR-SA" style="box-sizing: inherit; font-size: 10pt; font-family: &quot;Droid Arabic Kufi&quot;, sans-serif; color: black;">في 
حال إعادة عقد البرنامج تصل رسائل قصيرة</span><span dir="LTR" style="box-sizing: inherit; font-size: 10pt; font-family: &quot;Droid Arabic Kufi&quot;, sans-serif; color: black;">&nbsp;SMS&nbsp;</span><span lang="AR-SA" style="box-sizing: inherit; font-size: 10pt; font-family: &quot;Droid Arabic Kufi&quot;, sans-serif; color: black;">لجميع 
المهتمين به والذين سجلوا بعد نفاذ المقاعد أو طلبوا إعادة عقد البرنامج بعد انتهاء 
فترة التسجيل</span><span dir="LTR" style="box-sizing: inherit; font-size: 10pt; font-family: &quot;Droid Arabic Kufi&quot;, sans-serif; color: black;">.</span></p>
<p class="MsoListParagraphCxSpLast" dir="RTL" style="box-sizing: inherit; color: rgb(68, 68, 68); font-family: Roboto, 'Droid Arabic Kufi', sans-serif; font-size: 14px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; text-decoration-thickness: initial; text-decoration-style: initial; text-decoration-color: initial; text-align: justify; text-indent: -0.25in; line-height: normal; direction: rtl; unicode-bidi: embed; margin-left: 0in; margin-right: 0.75in; margin-top: 0px; margin-bottom: 1rem; background: white">
<span style="box-sizing: inherit; font-size: 10pt; font-family: Symbol; color: black;">
·<span style="box-sizing: inherit; font: 7pt &quot;Times New Roman&quot;;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span></span><span lang="AR-SA" style="box-sizing: inherit; font-size: 10pt; font-family: &quot;Droid Arabic Kufi&quot;, sans-serif; color: black;">يستخدم 
النظام الرسائل القصيرة</span><span dir="LTR" style="box-sizing: inherit; font-size: 10pt; font-family: &quot;Droid Arabic Kufi&quot;, sans-serif; color: black;">&nbsp;SMS&nbsp;</span><span lang="AR-SA" style="box-sizing: inherit; font-size: 10pt; font-family: &quot;Droid Arabic Kufi&quot;, sans-serif; color: black;">لتنبيه 
المتدرب بأي تغيير في&nbsp;حالة التسجيل، كما يمكنه معرفة حالة التسجيل من خلال لوحة 
التحكم الخاصة به</span><span dir="LTR" style="box-sizing: inherit; font-size: 10pt; font-family: &quot;Droid Arabic Kufi&quot;, sans-serif; color: black;">.</span></p>
<p class="MsoNormal" dir="RTL" style="box-sizing: inherit; color: rgb(68, 68, 68); font-family: Roboto, 'Droid Arabic Kufi', sans-serif; font-size: 14px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; text-decoration-thickness: initial; text-decoration-style: initial; text-decoration-color: initial; text-align: justify; line-height: normal; direction: rtl; unicode-bidi: embed; margin-top: 0px; margin-bottom: 1rem; background: white">
<b style="box-sizing: inherit; font-weight: bolder;">
<span lang="AR-SA" style="box-sizing: inherit; font-size: 10pt; font-family: &quot;Droid Arabic Kufi&quot;, sans-serif; color: black;">
الحضور والغياب</span></b></p>
<p class="MsoNormal" dir="RTL" style="box-sizing: inherit; margin-top: 0px; margin-bottom: 0in; color: rgb(68, 68, 68); font-family: Roboto, &quot;Droid Arabic Kufi&quot;, sans-serif; font-size: 14px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255); text-decoration-thickness: initial; text-decoration-style: initial; text-decoration-color: initial; text-align: justify; line-height: normal; direction: rtl; unicode-bidi: embed;">
<span lang="AR-SA" style="box-sizing: inherit; font-size: 10pt; font-family: &quot;Droid Arabic Kufi&quot;, sans-serif; color: black;">
يعامل الحضور الإلكتروني معاملة الحضور في قاعات التدريب التقليدية ويطبق على 
الحضور الإلكتروني اللوائح المنظمة للحضور والحرمان</span><span dir="LTR" style="box-sizing: inherit; font-size: 10pt; font-family: &quot;Droid Arabic Kufi&quot;, sans-serif; color: black;">.</span></p>
<p class="MsoNormal" dir="RTL" style="box-sizing: inherit; margin-top: 0px; margin-bottom: 0in; color: rgb(68, 68, 68); font-family: Roboto, &quot;Droid Arabic Kufi&quot;, sans-serif; font-size: 14px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255); text-decoration-thickness: initial; text-decoration-style: initial; text-decoration-color: initial; text-align: justify; line-height: normal; direction: rtl; unicode-bidi: embed;">
<b style="box-sizing: inherit; font-weight: bolder;">
<span lang="AR-SA" style="box-sizing: inherit; font-size: 10pt; font-family: &quot;Droid Arabic Kufi&quot;, sans-serif; color: black;">
بيئة التعلم الإلكترونية يجب ان تستوفي الشروط التالية</span><span dir="LTR" style="box-sizing: inherit; font-size: 10pt; font-family: &quot;Droid Arabic Kufi&quot;, sans-serif; color: black;">.</span></b></p>
<p class="MsoListParagraphCxSpFirst" dir="RTL" style="box-sizing: inherit; margin: 0in 1in 0in 0in; color: rgb(68, 68, 68); font-family: Roboto, &quot;Droid Arabic Kufi&quot;, sans-serif; font-size: 14px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255); text-decoration-thickness: initial; text-decoration-style: initial; text-decoration-color: initial; text-align: justify; text-indent: -0.25in; line-height: normal; direction: rtl; unicode-bidi: embed;">
<span style="box-sizing: inherit; font-size: 10pt; font-family: Symbol; color: black;">
·<span style="box-sizing: inherit; font: 7pt &quot;Times New Roman&quot;;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span></span><span lang="AR-SA" style="box-sizing: inherit; font-size: 10pt; font-family: &quot;Droid Arabic Kufi&quot;, sans-serif; color: black;">يجب 
الا تقل نسبة الحضور الإلكتروني في التعلم الإلكتروني عن 75 % من مجموع ساعات 
المقرر (في الفصل الدراسي. او ساعات الدورة او البرنامج التدريبي)</span><span dir="LTR" style="box-sizing: inherit; font-size: 10pt; font-family: &quot;Droid Arabic Kufi&quot;, sans-serif; color: black;">.</span></p>
<p class="MsoListParagraphCxSpMiddle" dir="RTL" style="box-sizing: inherit; margin: 0in 1in 0in 0in; color: rgb(68, 68, 68); font-family: Roboto, &quot;Droid Arabic Kufi&quot;, sans-serif; font-size: 14px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255); text-decoration-thickness: initial; text-decoration-style: initial; text-decoration-color: initial; text-align: justify; text-indent: -0.25in; line-height: normal; direction: rtl; unicode-bidi: embed;">
<span style="box-sizing: inherit; font-size: 10pt; font-family: Symbol; color: black;">
·<span style="box-sizing: inherit; font: 7pt &quot;Times New Roman&quot;;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span></span><span lang="AR-SA" style="box-sizing: inherit; font-size: 10pt; font-family: &quot;Droid Arabic Kufi&quot;, sans-serif; color: black;">يحرم 
المتدرب من دخول الاختبار النهائي للمقرر او الدورة التدريبية او البرنامج التدريبي 
في التعليم الالكتروني إذا تجاوزت نسبة غيابه 25% من المحاضرات التزامنية و غير المتزامن أو التعليم المدمج وذلك للبرامج التي تزيد مدتها عن شهر.</span></p>
<p class="MsoListParagraphCxSpLast" dir="RTL" style="box-sizing: inherit; margin: 0in 1in 0in 0in; color: rgb(68, 68, 68); font-family: Roboto, &quot;Droid Arabic Kufi&quot;, sans-serif; font-size: 14px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255); text-decoration-thickness: initial; text-decoration-style: initial; text-decoration-color: initial; text-align: justify; text-indent: -0.25in; line-height: normal; direction: rtl; unicode-bidi: embed;">
<span style="box-sizing: inherit; font-size: 10pt; font-family: Symbol; color: black;">
·<span style="box-sizing: inherit; font: 7pt &quot;Times New Roman&quot;;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span></span><span lang="AR-SA" style="box-sizing: inherit; font-size: 10pt; font-family: &quot;Droid Arabic Kufi&quot;, sans-serif; color: black;">يجب 
ان تحتوي صفحة المقرر او الدورة التدريبية او البرنامج التدريبي بالمنصة 
الإلكترونية للمركز على الآتي</span><span dir="LTR" style="box-sizing: inherit; font-size: 10pt; font-family: &quot;Droid Arabic Kufi&quot;, sans-serif; color: black;">:</span></p>
<p class="MsoNormal" dir="RTL" style="box-sizing: inherit; margin-top: 0px; margin-bottom: 0in; color: rgb(68, 68, 68); font-family: Roboto, &quot;Droid Arabic Kufi&quot;, sans-serif; font-size: 14px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255); text-decoration-thickness: initial; text-decoration-style: initial; text-decoration-color: initial; text-align: justify; line-height: normal; direction: rtl; unicode-bidi: embed;">
<span lang="AR-SA" style="box-sizing: inherit; font-size: 10pt; font-family: &quot;Droid Arabic Kufi&quot;, sans-serif; color: black;">
-&nbsp;</span><span lang="AR-SA" dir="LTR" style="box-sizing: inherit; font-size: 10pt; font-family: &quot;Droid Arabic Kufi&quot;, sans-serif; color: black;">&nbsp;</span><span lang="AR-SA" style="box-sizing: inherit; font-size: 10pt; font-family: &quot;Droid Arabic Kufi&quot;, sans-serif; color: black;">التوصيف 
العام للمقرر: ويشمل معلومات المقرر وأهدافه والخطة التدريسية</span></p>
<p class="MsoNormal" dir="RTL" style="box-sizing: inherit; margin-top: 0px; margin-bottom: 0in; color: rgb(68, 68, 68); font-family: Roboto, &quot;Droid Arabic Kufi&quot;, sans-serif; font-size: 14px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255); text-decoration-thickness: initial; text-decoration-style: initial; text-decoration-color: initial; text-align: justify; line-height: normal; direction: rtl; unicode-bidi: embed;">
<span lang="AR-SA" style="box-sizing: inherit; font-size: 10pt; font-family: &quot;Droid Arabic Kufi&quot;, sans-serif; color: black;">
ونواتج التعلم واستراتيجيات التدريس وأساليب التقويم والمراجع</span><span dir="LTR" style="box-sizing: inherit; font-size: 10pt; font-family: &quot;Droid Arabic Kufi&quot;, sans-serif; color: black;">.</span></p>
<p class="MsoNormal" dir="RTL" style="box-sizing: inherit; margin-top: 0px; margin-bottom: 0in; color: rgb(68, 68, 68); font-family: Roboto, &quot;Droid Arabic Kufi&quot;, sans-serif; font-size: 14px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255); text-decoration-thickness: initial; text-decoration-style: initial; text-decoration-color: initial; text-align: justify; line-height: normal; direction: rtl; unicode-bidi: embed;">
<span lang="AR-SA" style="box-sizing: inherit; font-size: 10pt; font-family: &quot;Droid Arabic Kufi&quot;, sans-serif; color: black;">
- الحقيبة التدريبية للدورات او البرامج التدريبية</span></p>
<p class="MsoNormal" dir="RTL" style="box-sizing: inherit; margin-top: 0px; margin-bottom: 0in; color: rgb(68, 68, 68); font-family: Roboto, &quot;Droid Arabic Kufi&quot;, sans-serif; font-size: 14px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255); text-decoration-thickness: initial; text-decoration-style: initial; text-decoration-color: initial; text-align: justify; line-height: normal; direction: rtl; unicode-bidi: embed;">
<span lang="AR-SA" style="box-sizing: inherit; font-size: 10pt; font-family: &quot;Droid Arabic Kufi&quot;, sans-serif; color: black;">
- معلومات عن المدرب ووسائل التواصل معه</span><span dir="LTR" style="box-sizing: inherit; font-size: 10pt; font-family: &quot;Droid Arabic Kufi&quot;, sans-serif; color: black;">.</span></p>
<p class="MsoNormal" dir="RTL" style="box-sizing: inherit; margin-top: 0px; margin-bottom: 0in; color: rgb(68, 68, 68); font-family: Roboto, &quot;Droid Arabic Kufi&quot;, sans-serif; font-size: 14px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255); text-decoration-thickness: initial; text-decoration-style: initial; text-decoration-color: initial; text-align: justify; line-height: normal; direction: rtl; unicode-bidi: embed;">
<span lang="AR-SA" style="box-sizing: inherit; font-size: 10pt; font-family: &quot;Droid Arabic Kufi&quot;, sans-serif; color: black;">
- تفعيل لوحة إعلانات المقرر، الدورة، البرنامج التدريبي من خلال الإعلان عن</span></p>
<p class="MsoNormal" dir="RTL" style="box-sizing: inherit; margin-top: 0px; margin-bottom: 0in; color: rgb(68, 68, 68); font-family: Roboto, &quot;Droid Arabic Kufi&quot;, sans-serif; font-size: 14px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255); text-decoration-thickness: initial; text-decoration-style: initial; text-decoration-color: initial; text-align: justify; line-height: normal; direction: rtl; unicode-bidi: embed;">
<span lang="AR-SA" style="box-sizing: inherit; font-size: 10pt; font-family: &quot;Droid Arabic Kufi&quot;, sans-serif; color: black;">
أنشطة المقرر او الدورة او البرنامج التدريبي والواجبات وتسليمها ومواعيد</span></p>
<p class="MsoNormal" dir="RTL" style="box-sizing: inherit; margin-top: 0px; margin-bottom: 1rem; color: rgb(68, 68, 68); font-family: Roboto, &quot;Droid Arabic Kufi&quot;, sans-serif; font-size: 14px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255); text-decoration-thickness: initial; text-decoration-style: initial; text-decoration-color: initial; text-align: justify; direction: rtl; unicode-bidi: embed;">
<span lang="AR-SA" style="box-sizing: inherit; font-size: 10pt; line-height: 14.2667px; font-family: &quot;Droid Arabic Kufi&quot;, sans-serif; color: black;">
الاختبارات وغيرها</span><span dir="LTR" style="box-sizing: inherit; font-size: 10pt; line-height: 14.2667px; font-family: &quot;Droid Arabic Kufi&quot;, sans-serif; color: black;">.</span></p>
<p class="MsoNormal" dir="RTL" style="box-sizing: inherit; color: rgb(68, 68, 68); font-family: Roboto, 'Droid Arabic Kufi', sans-serif; font-size: 14px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; text-decoration-thickness: initial; text-decoration-style: initial; text-decoration-color: initial; text-align: justify; line-height: normal; direction: rtl; unicode-bidi: embed; margin-top: 0px; margin-bottom: 1rem; background: white">
<b style="box-sizing: inherit; font-weight: bolder;">
<span lang="AR-SA" style="box-sizing: inherit; font-size: 10pt; font-family: &quot;Droid Arabic Kufi&quot;, sans-serif; color: black;">
السداد والأسعار والتخفيضات</span></b></p>
<p class="MsoListParagraphCxSpFirst" dir="RTL" style="box-sizing: inherit; color: rgb(68, 68, 68); font-family: Roboto, 'Droid Arabic Kufi', sans-serif; font-size: 14px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; text-decoration-thickness: initial; text-decoration-style: initial; text-decoration-color: initial; text-align: justify; text-indent: -0.25in; line-height: normal; direction: rtl; unicode-bidi: embed; margin-left: 0in; margin-right: 0.75in; margin-top: 0px; margin-bottom: 1rem; background: white">
<span style="box-sizing: inherit; font-size: 10pt; font-family: Symbol; color: black;">
·<span style="box-sizing: inherit; font: 7pt &quot;Times New Roman&quot;;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span></span><span lang="AR-SA" style="box-sizing: inherit; font-size: 10pt; font-family: &quot;Droid Arabic Kufi&quot;, sans-serif; color: black;">يمكن 
السداد بطرق ثلاثة: الدفع الإلكتروني&nbsp;ببطاقات الائتمان&nbsp;المختلفة، أو&nbsp;بطاقات مدى، 
أو&nbsp;التحويل البنكي&nbsp;المباشر</span><span dir="LTR" style="box-sizing: inherit; font-size: 10pt; font-family: &quot;Droid Arabic Kufi&quot;, sans-serif; color: black;">.</span></p>
<p class="MsoListParagraphCxSpMiddle" dir="RTL" style="box-sizing: inherit; color: rgb(68, 68, 68); font-family: Roboto, 'Droid Arabic Kufi', sans-serif; font-size: 14px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; text-decoration-thickness: initial; text-decoration-style: initial; text-decoration-color: initial; text-align: justify; text-indent: -0.25in; line-height: normal; direction: rtl; unicode-bidi: embed; margin-left: 0in; margin-right: 0.75in; margin-top: 0px; margin-bottom: 1rem; background: white">
<span style="box-sizing: inherit; font-size: 10pt; font-family: Symbol; color: black;">
·<span style="box-sizing: inherit; font: 7pt &quot;Times New Roman&quot;;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span></span><span lang="AR-SA" style="box-sizing: inherit; font-size: 10pt; font-family: &quot;Droid Arabic Kufi&quot;, sans-serif; color: black;">سعر 
البرنامج هو سعره عند&nbsp;السداد&nbsp;وليس عند&nbsp;التسجيل</span><span dir="LTR" style="box-sizing: inherit; font-size: 10pt; font-family: &quot;Droid Arabic Kufi&quot;, sans-serif; color: black;">.</span></p>
<p class="MsoListParagraphCxSpMiddle" dir="RTL" style="box-sizing: inherit; color: rgb(68, 68, 68); font-family: Roboto, 'Droid Arabic Kufi', sans-serif; font-size: 14px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; text-decoration-thickness: initial; text-decoration-style: initial; text-decoration-color: initial; text-align: justify; text-indent: -0.25in; line-height: normal; direction: rtl; unicode-bidi: embed; margin-left: 0in; margin-right: 0.75in; margin-top: 0px; margin-bottom: 1rem; background: white">
<span style="box-sizing: inherit; font-size: 10pt; font-family: Symbol; color: black;">
·<span style="box-sizing: inherit; font: 7pt &quot;Times New Roman&quot;;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span></span><span lang="AR-SA" style="box-sizing: inherit; font-size: 10pt; font-family: &quot;Droid Arabic Kufi&quot;, sans-serif; color: black;">إذا 
كان السداد بأحد&nbsp;الطرق الإلكترونية&nbsp;(البطاقات الائتمانية أو بطاقات مدى) يتم&nbsp;تأكيد 
التسجيل&nbsp;مباشرة ويصبح التسجيل&nbsp;مؤكداً</span><span dir="LTR" style="box-sizing: inherit; font-size: 10pt; font-family: &quot;Droid Arabic Kufi&quot;, sans-serif; color: black;">.</span></p>
<p class="MsoListParagraphCxSpMiddle" dir="RTL" style="box-sizing: inherit; color: rgb(68, 68, 68); font-family: Roboto, 'Droid Arabic Kufi', sans-serif; font-size: 14px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; text-decoration-thickness: initial; text-decoration-style: initial; text-decoration-color: initial; text-align: justify; text-indent: -0.25in; line-height: normal; direction: rtl; unicode-bidi: embed; margin-left: 0in; margin-right: 0.75in; margin-top: 0px; margin-bottom: 1rem; background: white">
<span style="box-sizing: inherit; font-size: 10pt; font-family: Symbol; color: black;">
·<span style="box-sizing: inherit; font: 7pt &quot;Times New Roman&quot;;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span></span><span lang="AR-SA" style="box-sizing: inherit; font-size: 10pt; font-family: &quot;Droid Arabic Kufi&quot;, sans-serif; color: black;">في 
حال كان التسجيل&nbsp;بالحوالات البنكية، تتحول حالة التسجيل إلى&nbsp;انتظار اعتماد الإدارة، 
والتي تعني أن أحد أخصائيي المبيعات سوف يقوم باعتماد التسجيل يدوياً بعد التأكد من 
تلقي المبلغ المحول</span><span dir="LTR" style="box-sizing: inherit; font-size: 10pt; font-family: &quot;Droid Arabic Kufi&quot;, sans-serif; color: black;">.</span></p>
<p class="MsoListParagraphCxSpMiddle" dir="RTL" style="box-sizing: inherit; color: rgb(68, 68, 68); font-family: Roboto, 'Droid Arabic Kufi', sans-serif; font-size: 14px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; text-decoration-thickness: initial; text-decoration-style: initial; text-decoration-color: initial; text-align: justify; text-indent: -0.25in; line-height: normal; direction: rtl; unicode-bidi: embed; margin-left: 0in; margin-right: 0.75in; margin-top: 0px; margin-bottom: 1rem; background: white">
<span style="box-sizing: inherit; font-size: 10pt; font-family: Symbol; color: black;">
·<span style="box-sizing: inherit; font: 7pt &quot;Times New Roman&quot;;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span></span><span lang="AR-SA" style="box-sizing: inherit; font-size: 10pt; font-family: &quot;Droid Arabic Kufi&quot;, sans-serif; color: black;">هناك 
ثمانية أنواع من التخفيضات يمكن أن تمنحها الإدارة اختيارياً على البرامج 
التدريبية. أنواع التخفيضات</span><span dir="LTR" style="box-sizing: inherit; font-size: 10pt; font-family: &quot;Droid Arabic Kufi&quot;, sans-serif; color: black;">:&nbsp;</span><span lang="AR-SA" style="box-sizing: inherit; font-size: 10pt; font-family: &quot;Droid Arabic Kufi&quot;, sans-serif; color: black;">تخفيض 
التسجيل المبكر،&nbsp;تخفيض المناسبات،&nbsp;تخفيض المجموعات،&nbsp;تخفيض دعم فئات المجتمع،&nbsp;تخفيض 
الشراكة والتعاون،&nbsp;التخفيض الخاص،&nbsp;تخفيض العضوية الدائم&nbsp;وتخفيض العضوية للبرنامج 
القادم</span><span dir="LTR" style="box-sizing: inherit; font-size: 10pt; font-family: &quot;Droid Arabic Kufi&quot;, sans-serif; color: black;">.</span></p>
<p class="MsoListParagraphCxSpMiddle" dir="RTL" style="box-sizing: inherit; color: rgb(68, 68, 68); font-family: Roboto, 'Droid Arabic Kufi', sans-serif; font-size: 14px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; text-decoration-thickness: initial; text-decoration-style: initial; text-decoration-color: initial; text-align: justify; text-indent: -0.25in; line-height: normal; direction: rtl; unicode-bidi: embed; margin-left: 0in; margin-right: 0.75in; margin-top: 0px; margin-bottom: 1rem; background: white">
<span style="box-sizing: inherit; font-size: 10pt; font-family: Symbol; color: black;">
·<span style="box-sizing: inherit; font: 7pt &quot;Times New Roman&quot;;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span></span><span lang="AR-SA" style="box-sizing: inherit; font-size: 10pt; font-family: &quot;Droid Arabic Kufi&quot;, sans-serif; color: black;">جميع 
التخفيضات لها تاريخ ووقت&nbsp;بداية سريان&nbsp;ونهاية سريان، للاستفادة من أي تخفيض يجب 
السداد خلال فترة سريانه. يستثنى من هذا تخفيضات العضوية فهي غير مرتبطة بفترة 
سريان</span><span dir="LTR" style="box-sizing: inherit; font-size: 10pt; font-family: &quot;Droid Arabic Kufi&quot;, sans-serif; color: black;">.</span></p>
<p class="MsoListParagraphCxSpMiddle" dir="RTL" style="box-sizing: inherit; color: rgb(68, 68, 68); font-family: Roboto, 'Droid Arabic Kufi', sans-serif; font-size: 14px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; text-decoration-thickness: initial; text-decoration-style: initial; text-decoration-color: initial; text-align: justify; text-indent: -0.25in; line-height: normal; direction: rtl; unicode-bidi: embed; margin-left: 0in; margin-right: 0.75in; margin-top: 0px; margin-bottom: 1rem; background: white">
<span style="box-sizing: inherit; font-size: 10pt; font-family: Symbol; color: black;">
·<span style="box-sizing: inherit; font: 7pt &quot;Times New Roman&quot;;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span></span><span lang="AR-SA" style="box-sizing: inherit; font-size: 10pt; font-family: &quot;Droid Arabic Kufi&quot;, sans-serif; color: black;">يعرض 
الموقع دائماً السعر&nbsp;الحالي&nbsp;للبرنامج، قد يتغير السعر في حال تصفح الموقع في فترة 
لاحقة وفقاً لسريان التخفيضات</span><span dir="LTR" style="box-sizing: inherit; font-size: 10pt; font-family: &quot;Droid Arabic Kufi&quot;, sans-serif; color: black;">.</span></p>
<p class="MsoListParagraphCxSpMiddle" dir="RTL" style="box-sizing: inherit; color: rgb(68, 68, 68); font-family: Roboto, 'Droid Arabic Kufi', sans-serif; font-size: 14px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; text-decoration-thickness: initial; text-decoration-style: initial; text-decoration-color: initial; text-align: justify; text-indent: -0.25in; line-height: normal; direction: rtl; unicode-bidi: embed; margin-left: 0in; margin-right: 0.75in; margin-top: 0px; margin-bottom: 1rem; background: white">
<span style="box-sizing: inherit; font-size: 10pt; font-family: Symbol; color: black;">
·<span style="box-sizing: inherit; font: 7pt &quot;Times New Roman&quot;;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span></span><span lang="AR-SA" style="box-sizing: inherit; font-size: 10pt; font-family: &quot;Droid Arabic Kufi&quot;, sans-serif; color: black;">يمكن 
للمتدرب معرفة جميع التخفيضات الممنوحة له من خلال زيارة&nbsp;ملفه الشخصي، سواء كانت 
التخفيضات سارية أو انتهى سريانها، وسواء استغلها لو لم يستغلها</span><span dir="LTR" style="box-sizing: inherit; font-size: 10pt; font-family: &quot;Droid Arabic Kufi&quot;, sans-serif; color: black;">.</span></p>
<p class="MsoListParagraphCxSpMiddle" dir="RTL" style="box-sizing: inherit; color: rgb(68, 68, 68); font-family: Roboto, 'Droid Arabic Kufi', sans-serif; font-size: 14px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; text-decoration-thickness: initial; text-decoration-style: initial; text-decoration-color: initial; text-align: justify; text-indent: -0.25in; line-height: normal; direction: rtl; unicode-bidi: embed; margin-left: 0in; margin-right: 0.75in; margin-top: 0px; margin-bottom: 1rem; background: white">
<span style="box-sizing: inherit; font-size: 10pt; font-family: Symbol; color: black;">
·<span style="box-sizing: inherit; font: 7pt &quot;Times New Roman&quot;;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span></span><span lang="AR-SA" style="box-sizing: inherit; font-size: 10pt; font-family: &quot;Droid Arabic Kufi&quot;, sans-serif; color: black;">يحق 
للإدارة إلغاء أو تغيير أي تخفيض تمنحه، ما عدا التخفيضات التي تمت الاستفادة منها 
عند السداد</span><span dir="LTR" style="box-sizing: inherit; font-size: 10pt; font-family: &quot;Droid Arabic Kufi&quot;, sans-serif; color: black;">.</span></p>
<p class="MsoListParagraphCxSpLast" dir="RTL" style="box-sizing: inherit; color: rgb(68, 68, 68); font-family: Roboto, 'Droid Arabic Kufi', sans-serif; font-size: 14px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; text-decoration-thickness: initial; text-decoration-style: initial; text-decoration-color: initial; text-align: justify; text-indent: -0.25in; line-height: normal; direction: rtl; unicode-bidi: embed; margin-left: 0in; margin-right: 0.75in; margin-top: 0px; margin-bottom: 1rem; background: white">
<span style="box-sizing: inherit; font-size: 10pt; font-family: Symbol; color: black;">
·<span style="box-sizing: inherit; font: 7pt &quot;Times New Roman&quot;;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span></span><span lang="AR-SA" style="box-sizing: inherit; font-size: 10pt; font-family: &quot;Droid Arabic Kufi&quot;, sans-serif; color: black;">نحن&nbsp;لا 
نحتفظ&nbsp;بالبيانات الائتمانية للمتدربين ولا نعرفها</span><span dir="LTR" style="box-sizing: inherit; font-size: 10pt; font-family: &quot;Droid Arabic Kufi&quot;, sans-serif; color: black;">.&nbsp;</span><span lang="AR-SA" style="box-sizing: inherit; font-size: 10pt; font-family: &quot;Droid Arabic Kufi&quot;, sans-serif; color: black;">عند 
إدخال هذه البيانات بالموقع فإننا فقط نقوم بتوجيهها إلى بوابة الدفع الإلكترونية. 
بوابة الدفع الإلكترونية&nbsp;آمنة 100</span><span dir="LTR" style="box-sizing: inherit; font-size: 10pt; font-family: &quot;Droid Arabic Kufi&quot;, sans-serif; color: black;">%.</span></p>
<p class="MsoNormal" dir="RTL" style="box-sizing: inherit; color: rgb(68, 68, 68); font-family: Roboto, 'Droid Arabic Kufi', sans-serif; font-size: 14px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; text-decoration-thickness: initial; text-decoration-style: initial; text-decoration-color: initial; text-align: justify; line-height: normal; direction: rtl; unicode-bidi: embed; margin-top: 0px; margin-bottom: 1rem; background: white">
<b style="box-sizing: inherit; font-weight: bolder;">
<span lang="AR-SA" style="box-sizing: inherit; font-size: 10pt; font-family: &quot;Droid Arabic Kufi&quot;, sans-serif; color: black;">
الاسترجاع</span></b></p>
<p class="MsoListParagraphCxSpFirst" dir="RTL" style="box-sizing: inherit; color: rgb(68, 68, 68); font-family: Roboto, 'Droid Arabic Kufi', sans-serif; font-size: 14px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; text-decoration-thickness: initial; text-decoration-style: initial; text-decoration-color: initial; text-align: justify; text-indent: -0.25in; line-height: normal; direction: rtl; unicode-bidi: embed; margin-left: 0in; margin-right: 0.75in; margin-top: 0px; margin-bottom: 1rem; background: white">
<span style="box-sizing: inherit; font-size: 10pt; font-family: Symbol; color: black;">
·<span style="box-sizing: inherit; font: 7pt &quot;Times New Roman&quot;;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span></span><span lang="AR-SA" style="box-sizing: inherit; font-size: 10pt; font-family: &quot;Droid Arabic Kufi&quot;, sans-serif; color: black;">يحق 
للمتدرب استرجاع المبلغ المدفوع بعد تأكيد التسجيل إذا طلب الاسترجاع قبل بدء 
البرنامج&nbsp;بخمسة&nbsp;أيام عمل كحد أدنى</span><span dir="LTR" style="box-sizing: inherit; font-size: 10pt; font-family: &quot;Droid Arabic Kufi&quot;, sans-serif; color: black;">.</span></p>
<p class="MsoListParagraphCxSpMiddle" dir="RTL" style="box-sizing: inherit; color: rgb(68, 68, 68); font-family: Roboto, 'Droid Arabic Kufi', sans-serif; font-size: 14px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; text-decoration-thickness: initial; text-decoration-style: initial; text-decoration-color: initial; text-align: justify; text-indent: -0.25in; line-height: normal; direction: rtl; unicode-bidi: embed; margin-left: 0in; margin-right: 0.75in; margin-top: 0px; margin-bottom: 1rem; background: white">
<span style="box-sizing: inherit; font-size: 10pt; font-family: Symbol; color: black;">
·<span style="box-sizing: inherit; font: 7pt &quot;Times New Roman&quot;;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span></span><span lang="AR-SA" style="box-sizing: inherit; font-size: 10pt; font-family: &quot;Droid Arabic Kufi&quot;, sans-serif; color: black;">في 
حال تعذر إقامة البرنامج&nbsp;بالكامل&nbsp;لأسباب&nbsp;لا تتعلق بالمتدرب، يحق للمتدرب المطالبة 
باسترجاع المبلغ</span><span dir="LTR" style="box-sizing: inherit; font-size: 10pt; font-family: &quot;Droid Arabic Kufi&quot;, sans-serif; color: black;">.</span></p>
<p class="MsoListParagraphCxSpMiddle" dir="RTL" style="box-sizing: inherit; color: rgb(68, 68, 68); font-family: Roboto, 'Droid Arabic Kufi', sans-serif; font-size: 14px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; text-decoration-thickness: initial; text-decoration-style: initial; text-decoration-color: initial; text-align: justify; text-indent: -0.25in; line-height: normal; direction: rtl; unicode-bidi: embed; margin-left: 0in; margin-right: 0.75in; margin-top: 0px; margin-bottom: 1rem; background: white">
<span style="box-sizing: inherit; font-size: 10pt; font-family: Symbol; color: black;">
·<span style="box-sizing: inherit; font: 7pt &quot;Times New Roman&quot;;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span></span><span lang="AR-SA" style="box-sizing: inherit; font-size: 10pt; font-family: &quot;Droid Arabic Kufi&quot;, sans-serif; color: black;">يحق 
للمتدرب&nbsp;تحويل&nbsp;مبلغ برنامج إلى&nbsp;برنامج آخر&nbsp;أو&nbsp;متدرب آخر، بشرط أن يطلب التحويل 
قبل&nbsp;ثلاثة&nbsp;أيام عمل من بدء البرنامج المدفوع كحد أدنى</span><span dir="LTR" style="box-sizing: inherit; font-size: 10pt; font-family: &quot;Droid Arabic Kufi&quot;, sans-serif; color: black;">.</span></p>
<p class="MsoListParagraphCxSpMiddle" dir="RTL" style="box-sizing: inherit; color: rgb(68, 68, 68); font-family: Roboto, 'Droid Arabic Kufi', sans-serif; font-size: 14px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; text-decoration-thickness: initial; text-decoration-style: initial; text-decoration-color: initial; text-align: justify; text-indent: -0.25in; line-height: normal; direction: rtl; unicode-bidi: embed; margin-left: 0in; margin-right: 0.75in; margin-top: 0px; margin-bottom: 1rem; background: white">
<span style="box-sizing: inherit; font-size: 10pt; font-family: Symbol; color: black;">
·<span style="box-sizing: inherit; font: 7pt &quot;Times New Roman&quot;;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span></span><span lang="AR-SA" style="box-sizing: inherit; font-size: 10pt; font-family: &quot;Droid Arabic Kufi&quot;, sans-serif; color: black;">يطلب 
المتدرب تحويل المبلغ لمتدرب آخر بتقديم&nbsp;مستند كتابي&nbsp;أو عبر&nbsp;بريده 
الإلكتروني&nbsp;المسجل لدينا</span><span dir="LTR" style="box-sizing: inherit; font-size: 10pt; font-family: &quot;Droid Arabic Kufi&quot;, sans-serif; color: black;">.</span></p>
<p class="MsoListParagraphCxSpMiddle" dir="RTL" style="box-sizing: inherit; color: rgb(68, 68, 68); font-family: Roboto, 'Droid Arabic Kufi', sans-serif; font-size: 14px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; text-decoration-thickness: initial; text-decoration-style: initial; text-decoration-color: initial; text-align: justify; text-indent: -0.25in; line-height: normal; direction: rtl; unicode-bidi: embed; margin-left: 0in; margin-right: 0.75in; margin-top: 0px; margin-bottom: 1rem; background: white">
<span style="box-sizing: inherit; font-size: 10pt; font-family: Symbol; color: black;">
·<span style="box-sizing: inherit; font: 7pt &quot;Times New Roman&quot;;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span></span><span lang="AR-SA" style="box-sizing: inherit; font-size: 10pt; font-family: &quot;Droid Arabic Kufi&quot;, sans-serif; color: black;">لا 
يحق&nbsp;للمتدرب استرجاع المبلغ ولا تحويله في حال&nbsp;تغيبه عن حضور&nbsp;برنامج تدريبي</span><span dir="LTR" style="box-sizing: inherit; font-size: 10pt; font-family: &quot;Droid Arabic Kufi&quot;, sans-serif; color: black;">.</span></p>
<p class="MsoListParagraphCxSpMiddle" dir="RTL" style="box-sizing: inherit; color: rgb(68, 68, 68); font-family: Roboto, 'Droid Arabic Kufi', sans-serif; font-size: 14px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; text-decoration-thickness: initial; text-decoration-style: initial; text-decoration-color: initial; text-align: justify; text-indent: -0.25in; line-height: normal; direction: rtl; unicode-bidi: embed; margin-left: 0in; margin-right: 0.75in; margin-top: 0px; margin-bottom: 1rem; background: white">
<span style="box-sizing: inherit; font-size: 10pt; font-family: Symbol; color: black;">
·<span style="box-sizing: inherit; font: 7pt &quot;Times New Roman&quot;;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span></span><span lang="AR-SA" style="box-sizing: inherit; font-size: 10pt; font-family: &quot;Droid Arabic Kufi&quot;, sans-serif; color: black;">لا 
يحق&nbsp;للمتدرب استرجاع مبلغ البرنامج في حال تعذر إقامة&nbsp;جلسة تدريبية&nbsp;من البرنامج لأي 
سبب، وإنما تلتزم الإدارة&nbsp;بإعادة عقد الجلسة&nbsp;في وقت لاحق إذا كان السبب لا يتعلق 
بالمتدرب</span><span dir="LTR" style="box-sizing: inherit; font-size: 10pt; font-family: &quot;Droid Arabic Kufi&quot;, sans-serif; color: black;">.</span></p>
<p class="MsoListParagraphCxSpLast" dir="RTL" style="box-sizing: inherit; color: rgb(68, 68, 68); font-family: Roboto, 'Droid Arabic Kufi', sans-serif; font-size: 14px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; text-decoration-thickness: initial; text-decoration-style: initial; text-decoration-color: initial; text-align: justify; text-indent: -0.25in; line-height: normal; direction: rtl; unicode-bidi: embed; margin-left: 0in; margin-right: 0.75in; margin-top: 0px; margin-bottom: 1rem; background: white">
<span style="box-sizing: inherit; font-size: 10pt; font-family: Symbol; color: black;">
·<span style="box-sizing: inherit; font: 7pt &quot;Times New Roman&quot;;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span></span><span lang="AR-SA" style="box-sizing: inherit; font-size: 10pt; font-family: &quot;Droid Arabic Kufi&quot;, sans-serif; color: black;">يتم 
استرجاع المبالغ&nbsp;بالتحويل البنكي&nbsp;المباشر لحساب العميل في مدة لا تزيد 
عن&nbsp;أسبوعين&nbsp;من تاريخ طلب الاسترجاع</span><span dir="LTR" style="box-sizing: inherit; font-size: 10pt; font-family: &quot;Droid Arabic Kufi&quot;, sans-serif; color: black;">.</span></p>
<p class="MsoNormal" dir="RTL" style="box-sizing: inherit; color: rgb(68, 68, 68); font-family: Roboto, 'Droid Arabic Kufi', sans-serif; font-size: 14px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; text-decoration-thickness: initial; text-decoration-style: initial; text-decoration-color: initial; text-align: justify; line-height: normal; direction: rtl; unicode-bidi: embed; margin-top: 0px; margin-bottom: 1rem; background: white">
<b style="box-sizing: inherit; font-weight: bolder;">
<span lang="AR-SA" style="box-sizing: inherit; font-family: &quot;Droid Arabic Kufi&quot;, sans-serif; color: black;">
شروط وأحكام عقد البرامج التدريبية</span></b></p>
<p class="MsoNormal" dir="RTL" style="box-sizing: inherit; color: rgb(68, 68, 68); font-family: Roboto, 'Droid Arabic Kufi', sans-serif; font-size: 14px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; text-decoration-thickness: initial; text-decoration-style: initial; text-decoration-color: initial; text-align: justify; line-height: normal; direction: rtl; unicode-bidi: embed; margin-top: 0px; margin-bottom: 1rem; background: white">
<b style="box-sizing: inherit; font-weight: bolder;">
<span lang="AR-SA" style="box-sizing: inherit; font-size: 10pt; font-family: &quot;Droid Arabic Kufi&quot;, sans-serif; color: black;">
انعقاد البرامج التدريبية</span></b></p>
<p class="MsoListParagraphCxSpFirst" dir="RTL" style="box-sizing: inherit; color: rgb(68, 68, 68); font-family: Roboto, 'Droid Arabic Kufi', sans-serif; font-size: 14px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; text-decoration-thickness: initial; text-decoration-style: initial; text-decoration-color: initial; text-align: justify; text-indent: -0.25in; line-height: normal; direction: rtl; unicode-bidi: embed; margin-left: 0in; margin-right: 0.75in; margin-top: 0px; margin-bottom: 1rem; background: white">
<span style="box-sizing: inherit; font-size: 10pt; font-family: Symbol; color: black;">
·<span style="box-sizing: inherit; font: 7pt &quot;Times New Roman&quot;;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span></span><span lang="AR-SA" style="box-sizing: inherit; font-size: 10pt; font-family: &quot;Droid Arabic Kufi&quot;, sans-serif; color: black;">عند 
الضرورة، يحق للإدارة تأجيل عقد برنامج تدريبي مدة لا تزيد عن&nbsp;أسبوع، وتلتزم بإخطار 
جميع المتدربين بذلك</span><span dir="LTR" style="box-sizing: inherit; font-size: 10pt; font-family: &quot;Droid Arabic Kufi&quot;, sans-serif; color: black;">.</span></p>
<p class="MsoListParagraphCxSpLast" dir="RTL" style="box-sizing: inherit; color: rgb(68, 68, 68); font-family: Roboto, 'Droid Arabic Kufi', sans-serif; font-size: 14px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; text-decoration-thickness: initial; text-decoration-style: initial; text-decoration-color: initial; text-align: justify; text-indent: -0.25in; line-height: normal; direction: rtl; unicode-bidi: embed; margin-left: 0in; margin-right: 0.75in; margin-top: 0px; margin-bottom: 1rem; background: white">
<span style="box-sizing: inherit; font-size: 10pt; font-family: Symbol; color: black;">
·<span style="box-sizing: inherit; font: 7pt &quot;Times New Roman&quot;;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span></span><span lang="AR-SA" style="box-sizing: inherit; font-size: 10pt; font-family: &quot;Droid Arabic Kufi&quot;, sans-serif; color: black;">عند 
الضرورة، يحق للإدارة تأجيل جلسة تدريبية مدة لا تزيد عن&nbsp;يومين، وتلتزم بإخطار جميع 
المتدربين بذلك</span><span dir="LTR" style="box-sizing: inherit; font-size: 10pt; font-family: &quot;Droid Arabic Kufi&quot;, sans-serif; color: black;">.</span></p>
<p class="MsoNormal" dir="RTL" style="box-sizing: inherit; color: rgb(68, 68, 68); font-family: Roboto, 'Droid Arabic Kufi', sans-serif; font-size: 14px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; text-decoration-thickness: initial; text-decoration-style: initial; text-decoration-color: initial; text-align: justify; line-height: normal; direction: rtl; unicode-bidi: embed; margin-top: 0px; margin-bottom: 1rem; background: white">
<b style="box-sizing: inherit; font-weight: bolder;">
<span lang="AR-SA" style="box-sizing: inherit; font-size: 10pt; font-family: &quot;Droid Arabic Kufi&quot;, sans-serif; color: black;">
انعقاد البرامج التدريبية عن بعد (عبر الإنترنت)</span></b></p>
<p class="MsoListParagraphCxSpFirst" dir="RTL" style="box-sizing: inherit; color: rgb(68, 68, 68); font-family: Roboto, 'Droid Arabic Kufi', sans-serif; font-size: 14px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; text-decoration-thickness: initial; text-decoration-style: initial; text-decoration-color: initial; text-align: justify; text-indent: -0.25in; line-height: normal; direction: rtl; unicode-bidi: embed; margin-left: 0in; margin-right: 0.75in; margin-top: 0px; margin-bottom: 1rem; background: white">
<span style="box-sizing: inherit; font-size: 10pt; font-family: Symbol; color: black;">
·<span style="box-sizing: inherit; font: 7pt &quot;Times New Roman&quot;;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span></span><span lang="AR-SA" style="box-sizing: inherit; font-size: 10pt; font-family: &quot;Droid Arabic Kufi&quot;, sans-serif; color: black;">يمكن 
للمتدرب معرفة روابط الغرف الافتراضية بمجرد زياته&nbsp;لصفحة البرنامج</span><span dir="LTR" style="box-sizing: inherit; font-size: 10pt; font-family: &quot;Droid Arabic Kufi&quot;, sans-serif; color: black;">.</span></p>
<p class="MsoListParagraphCxSpMiddle" dir="RTL" style="box-sizing: inherit; color: rgb(68, 68, 68); font-family: Roboto, 'Droid Arabic Kufi', sans-serif; font-size: 14px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; text-decoration-thickness: initial; text-decoration-style: initial; text-decoration-color: initial; text-align: justify; text-indent: -0.25in; line-height: normal; direction: rtl; unicode-bidi: embed; margin-left: 0in; margin-right: 0.75in; margin-top: 0px; margin-bottom: 1rem; background: white">
<span style="box-sizing: inherit; font-size: 10pt; font-family: Symbol; color: black;">
·<span style="box-sizing: inherit; font: 7pt &quot;Times New Roman&quot;;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span></span><span lang="AR-SA" style="box-sizing: inherit; font-size: 10pt; font-family: &quot;Droid Arabic Kufi&quot;, sans-serif; color: black;">تعمل 
هذه الروابط فقط أثناء فترة انعقاد البرامج</span><span dir="LTR" style="box-sizing: inherit; font-size: 10pt; font-family: &quot;Droid Arabic Kufi&quot;, sans-serif; color: black;">.</span></p>
<p class="MsoListParagraphCxSpLast" dir="RTL" style="box-sizing: inherit; color: rgb(68, 68, 68); font-family: Roboto, 'Droid Arabic Kufi', sans-serif; font-size: 14px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; text-decoration-thickness: initial; text-decoration-style: initial; text-decoration-color: initial; text-align: justify; text-indent: -0.25in; line-height: normal; direction: rtl; unicode-bidi: embed; margin-left: 0in; margin-right: 0.75in; margin-top: 0px; margin-bottom: 1rem; background: white">
<span style="box-sizing: inherit; font-size: 10pt; font-family: Symbol; color: black;">
·<span style="box-sizing: inherit; font: 7pt &quot;Times New Roman&quot;;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span></span><span lang="AR-SA" style="box-sizing: inherit; font-size: 10pt; font-family: &quot;Droid Arabic Kufi&quot;, sans-serif; color: black;">يحق 
للإدارة عند الضرورة تغيير&nbsp;منصة الفيديوكونفرنس، يقوم النظام آلياً&nbsp;بتحديث&nbsp;الروابط 
في&nbsp;صفحة البرنامج&nbsp;إلى الروابط الصحيحة</span><span dir="LTR" style="box-sizing: inherit; font-size: 10pt; font-family: &quot;Droid Arabic Kufi&quot;, sans-serif; color: black;">.</span></p>
<p class="MsoNormal" dir="RTL" style="box-sizing: inherit; color: rgb(68, 68, 68); font-family: Roboto, 'Droid Arabic Kufi', sans-serif; font-size: 14px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; text-decoration-thickness: initial; text-decoration-style: initial; text-decoration-color: initial; text-align: justify; line-height: normal; direction: rtl; unicode-bidi: embed; margin-top: 0px; margin-bottom: 1rem; background: white">
<b style="box-sizing: inherit; font-weight: bolder;">
<span lang="AR-SA" style="box-sizing: inherit; font-family: &quot;Droid Arabic Kufi&quot;, sans-serif; color: black;">
الالتزام بمبادئ حقــوق الملكيــة الفكــريـــة وحقـوق النشـــر</span></b></p>
<p class="MsoNormal" dir="RTL" style="box-sizing: inherit; color: rgb(68, 68, 68); font-family: Roboto, 'Droid Arabic Kufi', sans-serif; font-size: 14px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; text-decoration-thickness: initial; text-decoration-style: initial; text-decoration-color: initial; text-align: justify; line-height: normal; direction: rtl; unicode-bidi: embed; margin-top: 0px; margin-bottom: 1rem; background: white">
<b style="box-sizing: inherit; font-weight: bolder;">
<span lang="AR-SA" style="box-sizing: inherit; font-size: 10pt; font-family: &quot;Droid Arabic Kufi&quot;, sans-serif; color: black;">
التزام إدارة <?php echo $site_name; ?> بحقوق الملكية الفكرية عند النشر</span><span dir="LTR" style="box-sizing: inherit; font-size: 10pt; font-family: &quot;Droid Arabic Kufi&quot;, sans-serif; color: black;">:</span></b></p>
<p class="MsoNormal" dir="RTL" style="box-sizing: inherit; color: rgb(68, 68, 68); font-family: Roboto, 'Droid Arabic Kufi', sans-serif; font-size: 14px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; text-decoration-thickness: initial; text-decoration-style: initial; text-decoration-color: initial; text-align: justify; line-height: normal; direction: rtl; unicode-bidi: embed; margin-top: 0px; margin-bottom: 7.5pt; background: white">
<span lang="AR-SA" style="box-sizing: inherit; font-size: 10pt; font-family: &quot;Droid Arabic Kufi&quot;, sans-serif; color: black;">
تلتزم إدارة <?php echo $site_name; ?> بمبادئ حقوق الملكية الفكرية عند تصميم ورفع أي محتوى تدريبي 
على منصة <?php echo $site_name; ?>، مثل النصوص، أو الصور، أو البرامج، أو التصاميم، أو محتويات 
تدريبية، أو غيرها</span><span dir="LTR" style="box-sizing: inherit; font-size: 10pt; font-family: &quot;Droid Arabic Kufi&quot;, sans-serif; color: black;">.</span></p>
<p class="MsoNormal" dir="RTL" style="box-sizing: inherit; color: rgb(68, 68, 68); font-family: Roboto, 'Droid Arabic Kufi', sans-serif; font-size: 14px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; text-decoration-thickness: initial; text-decoration-style: initial; text-decoration-color: initial; text-align: justify; line-height: normal; direction: rtl; unicode-bidi: embed; margin-top: 0px; margin-bottom: 7.5pt; background: white">
<span lang="AR-SA" style="box-sizing: inherit; font-size: 10pt; font-family: &quot;Droid Arabic Kufi&quot;, sans-serif; color: black;">
وتعود إلى المركز الملكية الفكرية للمحتوى الرقمي المنشور على منصة المركز بما في 
ذلك المقالات والبرامج، والتصاميم، والصور، وغيرها</span><span dir="LTR" style="box-sizing: inherit; font-size: 10pt; font-family: &quot;Droid Arabic Kufi&quot;, sans-serif; color: black;">.</span></p>
<p class="MsoNormal" dir="RTL" style="box-sizing: inherit; color: rgb(68, 68, 68); font-family: Roboto, 'Droid Arabic Kufi', sans-serif; font-size: 14px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; text-decoration-thickness: initial; text-decoration-style: initial; text-decoration-color: initial; text-align: justify; line-height: normal; direction: rtl; unicode-bidi: embed; margin-top: 0px; margin-bottom: 1rem; background: white">
<b style="box-sizing: inherit; font-weight: bolder;">
<span lang="AR-SA" style="box-sizing: inherit; font-size: 10pt; font-family: &quot;Droid Arabic Kufi&quot;, sans-serif; color: black;">
التزام المدربين بحقوق الملكية الفكرية عند عرض المحتويات التدريبية على منصة 
المركز</span><span dir="LTR" style="box-sizing: inherit; font-size: 10pt; font-family: &quot;Droid Arabic Kufi&quot;, sans-serif; color: black;">:</span></b></p>
<p class="MsoNormal" dir="RTL" style="box-sizing: inherit; color: rgb(68, 68, 68); font-family: Roboto, 'Droid Arabic Kufi', sans-serif; font-size: 14px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; text-decoration-thickness: initial; text-decoration-style: initial; text-decoration-color: initial; text-align: justify; line-height: normal; direction: rtl; unicode-bidi: embed; margin-top: 0px; margin-bottom: 7.5pt; background: white">
<span lang="AR-SA" style="box-sizing: inherit; font-size: 10pt; font-family: &quot;Droid Arabic Kufi&quot;, sans-serif; color: black;">
يلتزم المدربين الذين يرغبون في رفع محتوياتهم التدريبية بمبادئ حقوق الملكية 
الفكرية والنشر. حيث يقوم المدرب بالتوقيع على نموذج تعهد وإقرار بأن المحتوى 
التدريبي المقدم في الدورات التدريبية يحترم فيه جميع قوانين الملكية الفكرية وحقوق 
النشر، والاستخدام، والتعديل، والمزج. كما يتعهد كذلك المدربين بالإشارة إلى 
المراجع العلمية والمصادر التي استفاد منها في إعداد المحتوى التدريبي، وفي حالة 
استخدام المدرب لمحتوى تدريبي لا يملك ملكيته الفكرية أو لا يذكر فيه المراجع 
والمصادر يتحمل المسؤولية النظامية عن ذلك.</span></p>
<p class="MsoNormal" dir="RTL" style="box-sizing: inherit; color: rgb(68, 68, 68); font-family: Roboto, 'Droid Arabic Kufi', sans-serif; font-size: 14px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; text-decoration-thickness: initial; text-decoration-style: initial; text-decoration-color: initial; text-align: justify; line-height: normal; direction: rtl; unicode-bidi: embed; margin-top: 0px; margin-bottom: 1rem; background: white">
<b style="box-sizing: inherit; font-weight: bolder;">
<span lang="AR-SA" style="box-sizing: inherit; font-size: 10pt; font-family: &quot;Droid Arabic Kufi&quot;, sans-serif; color: black;">
التزام المدرب عند رفع المحتوى التدريبي على منصة المركز</span><span dir="LTR" style="box-sizing: inherit; font-size: 10pt; font-family: &quot;Droid Arabic Kufi&quot;, sans-serif; color: black;">:</span></b></p>
<p class="MsoNormal" dir="RTL" style="box-sizing: inherit; color: rgb(68, 68, 68); font-family: Roboto, 'Droid Arabic Kufi', sans-serif; font-size: 14px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; text-decoration-thickness: initial; text-decoration-style: initial; text-decoration-color: initial; text-align: justify; line-height: normal; direction: rtl; unicode-bidi: embed; margin-top: 0px; margin-bottom: 7.5pt; background: white">
<span lang="AR-SA" style="box-sizing: inherit; font-size: 10pt; font-family: &quot;Droid Arabic Kufi&quot;, sans-serif; color: black;">
يقر المدربين أن كل محتوى تدريبي رقمي يتم رفعه على منصة المركز من محاضرات مسجلة 
أو تكليفات أو كائنات تعليمية مختلفة لا بد أن يراعى فيها احترام حقوق الملكية 
الفكرية ومبادئ حقوق النشر، كما يقر المدربين أن جميع المحتويات التدريبية المرفوعة 
على منصة المركز تصبح تحت تصرف المركز، والتي يمكن لها أن تستخدمها لأغراض بحثية أو 
أكاديمية</span><span dir="LTR" style="box-sizing: inherit; font-size: 10pt; font-family: &quot;Droid Arabic Kufi&quot;, sans-serif; color: black;">.</span></p>
<p class="MsoNormal" dir="RTL" style="box-sizing: inherit; color: rgb(68, 68, 68); font-family: Roboto, 'Droid Arabic Kufi', sans-serif; font-size: 14px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; text-decoration-thickness: initial; text-decoration-style: initial; text-decoration-color: initial; text-align: justify; line-height: normal; direction: rtl; unicode-bidi: embed; margin-top: 0px; margin-bottom: 7.5pt; background: white">
<b style="box-sizing: inherit; font-weight: bolder;">
<span lang="AR-SA" style="box-sizing: inherit; font-size: 10pt; font-family: &quot;Droid Arabic Kufi&quot;, sans-serif; color: black;">
ومن ضوابط حقوق النشر التي تلتزم بها إدارة <?php echo $site_name; ?> والموضحة لجميع المستفيدين ما 
يلي</span><span dir="LTR" style="box-sizing: inherit; font-size: 10pt; font-family: &quot;Droid Arabic Kufi&quot;, sans-serif; color: black;">:</span></b></p>
<p class="MsoNormal" dir="RTL" style="box-sizing: inherit; color: rgb(68, 68, 68); font-family: Roboto, 'Droid Arabic Kufi', sans-serif; font-size: 14px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; text-decoration-thickness: initial; text-decoration-style: initial; text-decoration-color: initial; text-align: justify; line-height: normal; direction: rtl; unicode-bidi: embed; margin-top: 0px; margin-bottom: 7.5pt; background: white">
<span lang="AR-SA" style="box-sizing: inherit; font-size: 10pt; font-family: &quot;Droid Arabic Kufi&quot;, sans-serif; color: black;">
1.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;يمنع نشر أي محتوى تدريبي يتعرض لأشخاص او مؤسسات يظهرهم فيه بطريقة سيئة</span><span dir="LTR" style="box-sizing: inherit; font-size: 10pt; font-family: &quot;Droid Arabic Kufi&quot;, sans-serif; color: black;">.</span></p>
<p class="MsoNormal" dir="RTL" style="box-sizing: inherit; color: rgb(68, 68, 68); font-family: Roboto, 'Droid Arabic Kufi', sans-serif; font-size: 14px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; text-decoration-thickness: initial; text-decoration-style: initial; text-decoration-color: initial; text-align: justify; line-height: normal; direction: rtl; unicode-bidi: embed; margin-top: 0px; margin-bottom: 7.5pt; background: white">
<span lang="AR-SA" style="box-sizing: inherit; font-size: 10pt; font-family: &quot;Droid Arabic Kufi&quot;, sans-serif; color: black;">
2.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;يمنع التعدي بنشر أو اقتباس محتوى ذو حقوق فكرية بدون تصريح أو موافقة</span><span dir="LTR" style="box-sizing: inherit; font-size: 10pt; font-family: &quot;Droid Arabic Kufi&quot;, sans-serif; color: black;">.</span></p>
<p class="MsoNormal" dir="RTL" style="box-sizing: inherit; color: rgb(68, 68, 68); font-family: Roboto, 'Droid Arabic Kufi', sans-serif; font-size: 14px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; text-decoration-thickness: initial; text-decoration-style: initial; text-decoration-color: initial; text-align: justify; line-height: normal; direction: rtl; unicode-bidi: embed; margin-top: 0px; margin-bottom: 7.5pt; background: white">
<span lang="AR-SA" style="box-sizing: inherit; font-size: 10pt; font-family: &quot;Droid Arabic Kufi&quot;, sans-serif; color: black;">
3.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;يمنع نشر أي محتوى مخالف للتعاليم الدينية او الأخلاقية السائدة في 
المجتمع.</span></p>
<p class="MsoNormal" dir="RTL" style="box-sizing: inherit; color: rgb(68, 68, 68); font-family: Roboto, 'Droid Arabic Kufi', sans-serif; font-size: 14px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; text-decoration-thickness: initial; text-decoration-style: initial; text-decoration-color: initial; text-align: justify; line-height: normal; direction: rtl; unicode-bidi: embed; margin-top: 0px; margin-bottom: 7.5pt; background: white">
<span lang="AR-SA" style="box-sizing: inherit; font-size: 10pt; font-family: &quot;Droid Arabic Kufi&quot;, sans-serif; color: black;">
4.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;يمنع نشر أي محتوى يؤثر على الوحدة الوطنية (عنصرية، طائفية، قبلية ....).</span></p>
<p class="MsoNormal" dir="RTL" style="box-sizing: inherit; color: rgb(68, 68, 68); font-family: Roboto, 'Droid Arabic Kufi', sans-serif; font-size: 14px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; text-decoration-thickness: initial; text-decoration-style: initial; text-decoration-color: initial; text-align: justify; line-height: normal; direction: rtl; unicode-bidi: embed; margin-top: 0px; margin-bottom: 7.5pt; background: white">
<span lang="AR-SA" style="box-sizing: inherit; font-size: 10pt; font-family: &quot;Droid Arabic Kufi&quot;, sans-serif; color: black;">
5.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;يمنع النشر أو الترويج لأي محتوى أو منتج ذو أهداف تجارية</span></p>
<p class="MsoNormal" dir="RTL" style="box-sizing: inherit; color: rgb(68, 68, 68); font-family: Roboto, 'Droid Arabic Kufi', sans-serif; font-size: 14px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; text-decoration-thickness: initial; text-decoration-style: initial; text-decoration-color: initial; text-align: justify; line-height: normal; direction: rtl; unicode-bidi: embed; margin-top: 0px; margin-bottom: 1rem; background: white">
<b style="box-sizing: inherit; font-weight: bolder;">
<span lang="AR-SA" style="box-sizing: inherit; font-family: &quot;Droid Arabic Kufi&quot;, sans-serif; color: black;">
تعهد بتحديث محتوى الموقع الالكتروني</span></b></p>
<p class="MsoNormal" dir="RTL" style="box-sizing: inherit; color: rgb(68, 68, 68); font-family: Roboto, 'Droid Arabic Kufi', sans-serif; font-size: 14px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; text-decoration-thickness: initial; text-decoration-style: initial; text-decoration-color: initial; text-align: justify; line-height: normal; direction: rtl; unicode-bidi: embed; margin-top: 0px; margin-bottom: 0in; background: white">
<span lang="AR-SA" style="box-sizing: inherit; font-size: 10pt; font-family: &quot;Droid Arabic Kufi&quot;, sans-serif; color: black;">
&nbsp;يقر المركز بأن محتوى الموقع الإلكتروني الخاص به م</span><span style="box-sizing: inherit; font-size: 10pt; font-family: &quot;Droid Arabic Kufi&quot;, sans-serif; color: black;">

<a style="box-sizing: inherit; background-color: transparent; color: rgb(5, 99, 193); text-decoration: underline; touch-action: manipulation; outline: none; transition: all 0.3s ease 0s;"><span lang="AR-SA" style="box-sizing: inherit; color: black; text-decoration: none;">لتزم 
بالقوانين والسياسات الوطنية</span></a></span><span lang="AR-SA" style="box-sizing: inherit; font-size: 10pt; font-family: &quot;Droid Arabic Kufi&quot;, sans-serif; color: black;">&nbsp;من 
خلال المسؤوليات التالية:</span></p>
<p class="MsoListParagraphCxSpFirst" dir="RTL" style="box-sizing: inherit; color: rgb(68, 68, 68); font-family: Roboto, 'Droid Arabic Kufi', sans-serif; font-size: 14px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; text-decoration-thickness: initial; text-decoration-style: initial; text-decoration-color: initial; text-align: justify; text-indent: -0.25in; line-height: normal; direction: rtl; unicode-bidi: embed; margin-left: 0in; margin-right: 0.5in; margin-top: 0in; margin-bottom: 0in; background: white">
<span style="box-sizing: inherit; font-size: 10pt; font-family: Symbol; color: black;">
·<span style="box-sizing: inherit; font: 7pt &quot;Times New Roman&quot;;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span></span><span lang="AR-SA" style="box-sizing: inherit; font-size: 10pt; font-family: &quot;Droid Arabic Kufi&quot;, sans-serif; color: black;">أن 
المحتوى المقدم للدورات والمتدربين محتوى تم التأكد من سلامته الفكرية وغير منسوخ 
من مواقع أخرى.</span></p>
<p class="MsoListParagraphCxSpMiddle" dir="RTL" style="box-sizing: inherit; color: rgb(68, 68, 68); font-family: Roboto, 'Droid Arabic Kufi', sans-serif; font-size: 14px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; text-decoration-thickness: initial; text-decoration-style: initial; text-decoration-color: initial; text-align: justify; text-indent: -0.25in; line-height: normal; direction: rtl; unicode-bidi: embed; margin-left: 0in; margin-right: 0.5in; margin-top: 0in; margin-bottom: 0in; background: white">
<span style="box-sizing: inherit; font-size: 10pt; font-family: Symbol; color: black;">
·<span style="box-sizing: inherit; font: 7pt &quot;Times New Roman&quot;;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span></span><span lang="AR-SA" style="box-sizing: inherit; font-size: 10pt; font-family: &quot;Droid Arabic Kufi&quot;, sans-serif; color: black;">أن 
المحتوى غير مخالف للأنظمة والقرارات السارية في المملكة العربية السعودية.</span></p>
<p class="MsoListParagraphCxSpMiddle" dir="RTL" style="box-sizing: inherit; color: rgb(68, 68, 68); font-family: Roboto, 'Droid Arabic Kufi', sans-serif; font-size: 14px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; text-decoration-thickness: initial; text-decoration-style: initial; text-decoration-color: initial; text-align: justify; text-indent: -0.25in; line-height: normal; direction: rtl; unicode-bidi: embed; margin-left: 0in; margin-right: 0.5in; margin-top: 0in; margin-bottom: 0in; background: white">
<span style="box-sizing: inherit; font-size: 10pt; font-family: Symbol; color: black;">
·<span style="box-sizing: inherit; font: 7pt &quot;Times New Roman&quot;;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span></span><span lang="AR-SA" style="box-sizing: inherit; font-size: 10pt; font-family: &quot;Droid Arabic Kufi&quot;, sans-serif; color: black;">أن 
المحتوى المقدم للدورات لا يخالف حقوق النشر ولا يتعدى على أية حقوق لأي طرف أو 
جهة.</span></p>
<p class="MsoListParagraphCxSpLast" dir="RTL" style="box-sizing: inherit; color: rgb(68, 68, 68); font-family: Roboto, 'Droid Arabic Kufi', sans-serif; font-size: 14px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; text-decoration-thickness: initial; text-decoration-style: initial; text-decoration-color: initial; text-align: justify; text-indent: -0.25in; line-height: normal; direction: rtl; unicode-bidi: embed; margin-left: 0in; margin-right: 0.5in; margin-top: 0in; margin-bottom: 0in; background: white">
<span style="box-sizing: inherit; font-size: 10pt; font-family: Symbol; color: black;">
·<span style="box-sizing: inherit; font: 7pt &quot;Times New Roman&quot;;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span></span><span lang="AR-SA" style="box-sizing: inherit; font-size: 10pt; font-family: &quot;Droid Arabic Kufi&quot;, sans-serif; color: black;">أن 
يتابع المركز&nbsp;حداثة المحتوى الرقمي المقدم وعدم مخالفته القوانين والسياسات 
الوطنية، وتكليف المشرفين على الموقع للمتابعة بشكل نصف سنوي.</span></p>
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
    <section class="layer-overlay overlay-theme-colored-9" data-bg-img="images/we-provide-bg.jpg" data-parallax-ratio="0.7">
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
    <?php include 'footer.php'; ?>
  
  
  <a class="scrollToTop" href="#"><i class="fa fa-angle-up"></i></a>
</div>
<!-- end wrapper -->

<!-- Footer Scripts -->
<!-- JS | Custom script for all pages -->
<script src="js/custom.js"></script>

</body>
</html>