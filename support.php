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
<?
$webmaster_email= $site_email; ; //بريد ادارة الموقع
?>



<?php
  require_once('include/phpmailer/PHPMailerAutoload.php');

   if(isset($_POST['contact'])){
   
   
      if(isset($_POST['g-recaptcha-response'])){
          $captcha=$_POST['g-recaptcha-response'];
        }
        if(!$captcha){
          echo '<h2>Please check the the captcha form.<br>You must choose I am not a robot<br>يجب اختيار أنا لست روبوتًا</h2>';
          exit;
        }
        $secretKey = "<?php echo $secretKey; ?>";
        $ip = $_SERVER['REMOTE_ADDR'];
        $response=file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret=".$secretKey."&response=".$captcha."&remoteip=".$ip);
        $responseKeys = json_decode($response,true);
         if($responseKeys["success"]  ) {
          echo '<h2>You are spammer ! Get the @$%K out</h2>';
        } else {  

	   	    $name = mysqli_real_escape_string($conn,htmlspecialchars($_POST['fullname'], ENT_QUOTES, "utf-8")); 
	       $phone= mysqli_real_escape_string($conn,htmlspecialchars($_POST['phone'], ENT_QUOTES, "utf-8")); 
	       $cors = mysqli_real_escape_string($conn,htmlspecialchars($_POST['cors'], ENT_QUOTES, "utf-8")); 
	        $message1= mysqli_real_escape_string($conn,htmlspecialchars($_POST['message'], ENT_QUOTES, "utf-8")); 
	   	    $company= mysqli_real_escape_string($conn,htmlspecialchars($_POST['company'], ENT_QUOTES, "utf-8")); 
	   	    $email= mysqli_real_escape_string($conn,htmlspecialchars($_POST['email'], ENT_QUOTES, "utf-8")); 


	   $message = "\nName    : ".$name.'<br>';  
	   $message .= "\nCompany    : ".$company.'<br>';                   
	   $message .= "\nEmail   : ".$email.'<br>'; 
	   $message .= "\nMobile Number   : ".$phone.'<br>';  
	   $message .= $message1.'<br>';
	   $message .= "\n<center>نشكرك على تواصلك مع  ".$site_name."<br>تم استلام رسالتك وسوف يتم الرد عليا<br>نتمنى لكم دوام الصحة والعافية</center>"  ;  
	    $message .= "<center><img src=".$site_url."/logo.png></center>" ;
	   $to =  $site_email; ;               
				 
	   $headers  = 'MIME-Version: 1.0' . "\r\n";
	   $headers .= 'Content-type: text/html; charset=utf-8' . "\r\n";
	   $subject = $site_name;
   
	   // Additional headers
	   $headers .= 'To: '.$name.' <'.$email.'>' . "\r\n";
	   $headers .= 'From: <'.$site_email.'>' . "\r\n";  

									   
	   @mail($to, $subject, $message, $headers);  
	    $sql="insert into eqt set  name='$name ',mobile='$phone',mail='$email',eqt='$message1',dates=CURDATE(),address='$company '";
if(mysqli_query($conn,$sql))
{
}

	   $message = "<div class='success'>تم ارسال الرسالة بنجاح</div>";                                                
   }
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
<title><?php echo $site_name; ?></title><script src="https://www.google.com/recaptcha/enterprise.js?render=<?php echo $sitKey; ?>"></script>
<script>
grecaptcha.enterprise.ready(function() {
    grecaptcha.enterprise.execute('<?php echo $sitKey; ?>', {action: 'login'}).then(function(token) {
       ...
    });
});
</script><script src='https://www.google.com/recaptcha/api.js'></script>


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
              <h2 class="text-theme-colored2 font-36">سياسة الدعم الفني والتعليمي
</h2>
              <ol class="breadcrumb   mt-10 white">
                <li><a href="index.php">الرئيسية</a></li>
                <li class="active">سياسة الدعم الفني والتعليمي
</li>
              </ol>
            </div>
          </div>
        </div>
      </div>
    </section>
    
    <!-- Divider: Contact -->
    <section class="divider">
      <div class="container">
        <div class="row pt-30">
                  <div class="col-md-12">
            <font size="2">نقدم المساعدة والدعم الفني المستمر للمدربين والمتدربين طوال مدة تنفيذ البرنامج التدريبي لضمان إتمام العملية التدريبية بأعلى جودة وكفاءة ممكنة، كما يلي:
            <br>
            <br>
  
            </font>
  
            <h3 class="line-bottom mt-0 mb-30"><font size="2">الدعم والمساندة الأكاديمية
			</font>
</h3>

          
            <font size="2">تقديم المساعدة الفنية والتعليمية للمدربين والمتدربين عند تنفيذ البرنامج عبر القاعات المباشرة “متزامن “ حيث يلتزم المركز بتوفير مدير للقاعة يقوم بعملية التنظيم والدعم وحل المشكلات.
يقوم المدربين بمساعدة المتدربين، فيما يتعلق ب تقديم الإجابات على الأسئلة والمادة العلمية
يقوم مدير القاعة بمساعدة المتدربين في الجوانب التقنية حتى يتمكنوا من الحضور في بداية المحاضرة لتحقيق الاستفادة القصوى من الدورة التدريبية.
يلزم المركز مدير القاعة التدريبة بتزويد المتدربين بالشروط اللازمة للتسجيل والتحضير وتعبئة البيانات الضرورية اللازمة لصدور الشهادة.
يبرز المركز وسائل التواصل الخاصة به لمساعدة ا لمتدربين في حل أي مشكلة تعترض حصولهم على الدورة أو – الشهادة.
			</font>
			<h3 style="box-sizing: border-box; font-weight: 700; line-height: 1.42857; font-size: 10pt; color: rgb(124, 102, 54); font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; letter-spacing: normal; orphans: 2; text-align: right; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; text-decoration-thickness: initial; text-decoration-style: initial; text-decoration-color: initial; margin-top: 0px; margin-bottom: 0.5rem">
			قنوات الدعم الفني</h3>
			<p>
			<font size="2">حرصامنا على تحقيق الأهداف التدريبية 
			والتطويرية، فقد تم توفير آليات اتصال تقنية للتواصل المدربين 
			والمتدربين مع فريق الدعم الفني للحصول على الإرشادات والحلول على مدار 
			الساعة.</font></p>
			<h3 style="box-sizing: border-box; font-weight: 700; line-height: 1.42857; font-size: 10pt; color: rgb(124, 102, 54); font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; letter-spacing: normal; orphans: 2; text-align: right; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; text-decoration-thickness: initial; text-decoration-style: initial; text-decoration-color: initial; margin-top: 0px; margin-bottom: 0.5rem">
			سياسة الدعم الفني</h3>
			<p>
			<font size="2">يعمل فريق الدعم الفني لتوفير خدماته لكافة مستخدمي المنصة الإلكترونية 
			بعدة طرق حتى تتناسب مع كافة الرغبات الأسهل للمستخدمين ومنها :</font></p>
			<ol style="box-sizing: border-box; margin: 0px 40px 10px 0px; list-style: decimal; padding: 0px; color: rgb(111, 112, 116); font-family: &quot;Open Sans&quot;, sans-serif; font-size: 15px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-align: right; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; text-decoration-thickness: initial; text-decoration-style: initial; text-decoration-color: initial;">
				<li style="box-sizing: border-box; color: black;">
				<p>
				<font size="2">دعم عبر برامج وتطبيقات الوصول لأجهزة المستخدمين مثل &quot;TeamViewer&quot;.</font></li>
				<li style="box-sizing: border-box; color: black;">
				<p>
				<font size="2">دعم عبر برامج محادثات التواصل الاجتماعي (واتساب – فيسبوك - تويتر).</font></li>
				<li style="box-sizing: border-box; color: black;">
				<p>
				<font size="2">دعم مباشر عبر الهاتف.</font></li>
				<li style="box-sizing: border-box; color: black;">
				<p>
				<font size="2">دعم داخل قاعة التدريب.</font></li>
				<li style="box-sizing: border-box; color: black;">
				<p>
				<font size="2">دعم عبر البريد الإلكتروني.</font></li>
				<li style="box-sizing: border-box; color: black;">
				<p>
				<font size="2">دعم عبر نموذج الدعم الفني بالموقع الإلكتروني.</font></li>
			</ol>
			&nbsp;<h3 style="box-sizing: border-box; font-weight: 700; line-height: 1.42857; font-size: 10pt; color: rgb(124, 102, 54); font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; letter-spacing: normal; orphans: 2; text-align: right; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; text-decoration-thickness: initial; text-decoration-style: initial; text-decoration-color: initial; margin-top: 0px; margin-bottom: 0.5rem">
			المستفيدين من خدمات الدعم الفني</h3>
			<ul style="box-sizing: border-box; margin: 0px 40px 10px 0px; padding: 0px; margin-inline-start: 0.2rem; list-style: disc; color: rgb(111, 112, 116); font-family: &quot;Open Sans&quot;, sans-serif; font-size: 15px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-align: right; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; text-decoration-thickness: initial; text-decoration-style: initial; text-decoration-color: initial;">
				<li style="box-sizing: border-box; color: black;">
				<p>
				<font size="2">مدربي المركز المسجلين بالمنصة الإلكترونية لغرض تقديم الدورات 
				التدريبية.</font></li>
				<li style="box-sizing: border-box; color: black;">
				<p>
				<font size="2">جميع المتدربين المنضمين للدورات التدريبية على منصتنا التدريبية.</font></li>
				<li style="box-sizing: border-box; color: black;">
				<p>
				<font size="2">مشرفي الجهات الحكومية ذات العلاقة مثل: المؤسسة العامة للتدريب 
				التقني والمهني والمركز الوطني للتعليم الإلكتروني.</font></li>
			</ul>
			&nbsp;<h3 style="box-sizing: border-box; font-weight: 700; line-height: 1.42857; font-size: 10pt; color: rgb(124, 102, 54); font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; letter-spacing: normal; orphans: 2; text-align: right; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; text-decoration-thickness: initial; text-decoration-style: initial; text-decoration-color: initial; margin-top: 0px; margin-bottom: 0.5rem">
			قنوات تقديم الدعم الفني</h3>
			<ul style="box-sizing: border-box; margin: 0px 40px 10px 0px; padding: 0px; margin-inline-start: 0.2rem; list-style: disc; color: rgb(111, 112, 116); font-family: &quot;Open Sans&quot;, sans-serif; font-size: 15px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-align: right; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; text-decoration-thickness: initial; text-decoration-style: initial; text-decoration-color: initial;">
				<li style="box-sizing: border-box; color: black;">
				<p>
				<font size="2">مركز الاتصال المباشر <?php echo $site_mobile; ?> خلال أوقات العمل الرسمي من الأحد 
				إلى الخميس من الساعة 8 صباحاً حتى 9 مساءاً وأثناء أوقات إقامة 
				الدورات التدريبية.</font></li>
				<li style="box-sizing: border-box; color: black;">
				<p>
				<font size="2">البريد الإلكتروني للخدمات والدعم الفني <?php echo $site_email; ?></font></li>
				<li style="box-sizing: border-box; color: black;">
				<p>
				<font size="2">تطبيقات التواصل الاجتماعي</font></li>
				<li style="box-sizing: border-box; color: black;">
				<p>
				<font size="2">واتس اب :</font></li>
			</ul>
			&nbsp;<h3 style="box-sizing: border-box; font-weight: 700; line-height: 1.42857; font-size: 10pt; color: rgb(124, 102, 54); font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; letter-spacing: normal; orphans: 2; text-align: right; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; text-decoration-thickness: initial; text-decoration-style: initial; text-decoration-color: initial; margin-top: 0px; margin-bottom: 0.5rem">
			الخدمات والأنظمة المشمولة بالدعم الفني</h3>
			<ul style="box-sizing: border-box; margin: 0px 40px 10px 0px; padding: 0px; margin-inline-start: 0.2rem; list-style: disc; color: rgb(111, 112, 116); font-family: &quot;Open Sans&quot;, sans-serif; font-size: 15px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-align: right; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; text-decoration-thickness: initial; text-decoration-style: initial; text-decoration-color: initial;">
				<li style="box-sizing: border-box; color: black;">
				<p>
				<font size="2">الالتحاق بالدورات وحل المشكلات التقنية التي تواجه المستخدمين.</font></li>
				<li style="box-sizing: border-box; color: black;">
				<p>
				<font size="2">التدريب على المنصة الإلكترونية واستخدامها والاستفادة من مزاياها.</font></li>
				<li style="box-sizing: border-box; color: black;">
				<p>
				<font size="2">التأهيل اللازم للمستخدمين.</font></li>
				<li style="box-sizing: border-box; color: black;">
				<p>
				<font size="2">تسجيل الدخول الى المنصة التعليمية و متابعة حساب للمتدرب تقنياً.</font></li>
				<li style="box-sizing: border-box; color: black;">
				<p>
				<font size="2">حضور الدورة واستخدام تطبيقات البث المباشر.</font></li>
				<li style="box-sizing: border-box; color: black;">
				<p>
				<font size="2">دخول المدرب للمنصة.</font></li>
				<li style="box-sizing: border-box; color: black;">
				<p>
				<font size="2">استخراج شهادة المتدرب من منصة منار.</font></li>
			</ul>
			&nbsp;<h3 style="box-sizing: border-box; font-weight: 700; line-height: 1.42857; font-size: 10pt; font-family: Nunito, sans-serif; color: rgb(124, 102, 54); font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; letter-spacing: normal; orphans: 2; text-align: right; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; text-decoration-thickness: initial; text-decoration-style: initial; text-decoration-color: initial; margin-top: 0px; margin-bottom: 0.5rem">
			الوقت<font face="Droid Arabic Kufi"> </font>المتوقع<font face="Droid Arabic Kufi">
			</font>للرد</h3>
			<p>
			<font size="2">في حال كان الدعم عن طريق الواتساب سواء من مدرب أو متدرب يتم الرد عليه خلال فترة زمنية قصيرة. تويتر وفيسبوك عادة ما يتم الرد خلال دقائق عبر المحادثة. البريد الإلكتروني قد يستغرق 30 دقيقة لاستلام البريد ومن ثم الرد عليه.</font></p>
			&nbsp;<h3 style="box-sizing: border-box; font-weight: 700; line-height: 1.42857; font-size: 10pt; font-family: Nunito, sans-serif; color: rgb(124, 102, 54); font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; letter-spacing: normal; orphans: 2; text-align: right; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; text-decoration-thickness: initial; text-decoration-style: initial; text-decoration-color: initial; margin-top: 0px; margin-bottom: 0.5rem">
			الأدوار<font face="Droid Arabic Kufi"> </font>والمسؤوليات<font face="Droid Arabic Kufi">
			</font>والصلاحيات</h3>
			<p>
			<font size="2">تنقسم الأدوار المطلوبة للقيام بالدعم الفني على عدة مستويات :</font></p>
			&nbsp;<h3 style="box-sizing: border-box; font-size: 10pt; font-weight: 700; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; letter-spacing: normal; orphans: 2; text-align: right; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; text-decoration-thickness: initial; text-decoration-style: initial; text-decoration-color: initial; color: rgb(124, 102, 54); font-family: Nunito, sans-serif; margin-top: 0px; margin-bottom: 0.5rem; line-height:1.42857">
			المستوى<font face="Droid Arabic Kufi"> </font>الأول<font face="Droid Arabic Kufi">:
			</font>مركز<font face="Droid Arabic Kufi"> </font>الاتصال<font face="Droid Arabic Kufi">
			</font>لخدمة<font face="Droid Arabic Kufi"> </font>العملاء</h3>
			<p>
			<font size="2">ويقوم باستقبال جميع الاتصالات الواردة وكذلك تقديم الدعم الفني الأولي لها حسب طبيعة الاستفسارات الواردة أو تحويلها للإدارة المختصة.</font></p>
			<h3 style="box-sizing: border-box; font-size: 10pt; font-weight: 700; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; letter-spacing: normal; orphans: 2; text-align: right; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; text-decoration-thickness: initial; text-decoration-style: initial; text-decoration-color: initial; color: rgb(124, 102, 54); font-family: Nunito, sans-serif; margin-top: 0px; margin-bottom: 0.5rem; line-height:1.42857">
			المستوى<font face="Droid Arabic Kufi"> </font>الثاني<font face="Droid Arabic Kufi">:
			</font>القسم<font face="Droid Arabic Kufi"> </font>التشغيلي<font face="Droid Arabic Kufi">
			</font>المساند</h3>
			<p>
			<font size="2">ويتم من خلال هذا القسم استكمال عملية الدعم الفني والتحقق من انتهائها.</font></p>
			&nbsp;<h3 style="box-sizing: border-box; font-weight: 700; line-height: 1.42857; font-size: 10pt; font-family: Nunito, sans-serif; color: rgb(124, 102, 54); font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; letter-spacing: normal; orphans: 2; text-align: right; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; text-decoration-thickness: initial; text-decoration-style: initial; text-decoration-color: initial; margin-top: 0px; margin-bottom: 0.5rem">
			ساعات<font face="Droid Arabic Kufi"> </font>العمل</h3>
			<p>
			<font size="2">من الأحد إلى الخميس من الساعة 
			8 صباحاً إلى 
			9 مساءاً</font></p>
			<br class="Apple-interchange-newline">
<br>

<br>
</div>
          <div class="col-md-6">
            <h3 class="line-bottom mt-0 mb-30">نحن دائماً على تواصل معك على مدار  <b>
			<font color="#800000">24 ساعة / 7 ايام</font></b></h3>
            
            <!-- Contact Form -->
               <?php if(isset($message)) echo $message;  ?> 
               <form action="contact.php" enctype="multipart/form-data" method="post">

              <div class="row">
                <div class="col-sm-6">
                  <div class="form-group">
                    <label>الاسم <small>*</small></label>
                    <input   class="form-control" type="text"  name='fullname' placeholder="الاسم" required="">
                  </div>
                </div>
                <div class="col-sm-6">
                  <div class="form-group">
                    <label>البريد الالكتروني <small>*</small></label>
                    <input  class="form-control required email" type="email"placeholder="البريد الالكتروني"  name="email" >
                  </div>
                </div>
              </div>
                
              <div class="row">
                <div class="col-sm-6">
                  <div class="form-group">
                    <label>جهة العمل<small>*</small></label>
                    <input placeholder="جهة العمل"   name="company"  class="form-control required" type="text"  >
                  </div>
                </div>
                <div class="col-sm-6">
                  <div class="form-group">
                    <label>وسيلة الاتصال</label>
                    <input placeholder="وسيلة الاتصال"  name="phone" class="form-control" type="text"  >
                  </div>
                </div>
              </div>

              <div class="form-group">
                <label>الرسالة</label>
                <textarea name="message" class="form-control required" rows="5" placeholder="الرسالة"></textarea>
                <div class="g-recaptcha" data-sitekey="<?php echo $sitKey; ?>" align="center"></div>
              </div>
              <div class="form-group">
                <input name="form_botcheck" class="form-control" type="hidden" value="" />
                <button type="submit" name='contact' class="btn btn-dark btn-theme-colored btn-flat mr-5" data-loading-text="Please wait...">ارسال</button>
                <button type="reset" class="btn btn-default btn-flat btn-theme-colored">الغاء</button>
              </div>
            </form>

            <!-- Contact Form Validation-->
            <script type="text/javascript">
              $("#contact_form").validate({
                submitHandler: function(form) {
                  var form_btn = $(form).find('button[type="submit"]');
                  var form_result_div = '#form-result';
                  $(form_result_div).remove();
                  form_btn.before('<div id="form-result" class="alert alert-success" role="alert" style="display: none;"></div>');
                  var form_btn_old_msg = form_btn.html();
                  form_btn.html(form_btn.prop('disabled', true).data("loading-text"));
                  $(form).ajaxSubmit({
                    dataType:  'json',
                    success: function(data) {
                      if( data.status == 'true' ) {
                        $(form).find('.form-control').val('');
                      }
                      form_btn.prop('disabled', false).html(form_btn_old_msg);
                      $(form_result_div).html(data.message).fadeIn('slow');
                      setTimeout(function(){ $(form_result_div).fadeOut('slow') }, 6000);
                    }
                  });
                }
              });
            </script>
          </div>
          <div class="col-md-6">
            <h3 class="line-bottom mt-0">نحن دائماً على تواصل معك</h3>
            <p>24 ساعة / 7 ايام</p>
            

            <div class="icon-box media mb-15"> <a class="media-left pull-left flip mr-20" href="#"> <i class="pe-7s-map-2 text-theme-colored"></i></a>
              <div class="media-body">
                <h5 class="mt-0">العنوان</h5>
                <p>المملكه العربيه السعوديه    
<br>
<?php echo $site_address; ?></p>
              </div>
            </div>
            <div class="icon-box media mb-15"> <a class="media-left pull-left flip mr-15" href="#"> <i class="pe-7s-call text-theme-colored"></i></a>
              <div class="media-body">
                <h5 class="mt-0">الهاتف</h5>
                <p><a href="tel:<?php echo $site_mobile; ?>"><?php echo $site_mobile; ?></a></p>
              </div>
            </div>
            <div class="icon-box media mb-15"> <a class="media-left pull-left flip mr-15" href="#"> <i class="pe-7s-mail text-theme-colored"></i></a>
              <div class="media-body">
                <h5 class="mt-0">البريد الالكتروني</h5>
                <p><a href="mailto:<?php echo $site_email; ?>"><?php echo $site_email; ?></a></p>
              </div>
            </div>
             
          </div>
        </div>
      </div>
    </section>
    
    <!-- Divider: Google Map -->
    <section>
      <div class="container-fluid pt-0 pb-0">
        <div class="row">

        <?php echo $site_map; ?>


        </div>
      </div>
    </section>
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