<?php include("../config.php");
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
  
}
  

 ?><?
$webmaster_email= $site_email; ; //بريد ادارة الموقع
?>

<?php
  require_once('../include/phpmailer/PHPMailerAutoload.php');
 
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
	   	    $iqama= mysqli_real_escape_string($conn,htmlspecialchars($_POST['phone'], ENT_QUOTES, "utf-8")); 
	   	    $nat= mysqli_real_escape_string($conn,htmlspecialchars($_POST['nat'], ENT_QUOTES, "utf-8")); 
	   	    $qualification= mysqli_real_escape_string($conn,htmlspecialchars($_POST['qualification'], ENT_QUOTES, "utf-8")); 
	   	    $reg_price= mysqli_real_escape_string($conn,htmlspecialchars($_POST['reg_price'], ENT_QUOTES, "utf-8")); 


$result=mysqli_query($conn,"select* from subjects,cors where cors.cors_ID=subjects.cors_ID AND cors.ID='$cors'");
while($row=mysqli_fetch_array($result))
{
$cors1=$row['cors_name'];
$cors_ID1=$row['cors_ID'];
}
 
 
	   $message = "\nالاسم    : ".$name.'<br>';  
	   $message .= "\nالجوال   : ".$phone.'<br>';  
	   $message .= "\n   : ".$cors1.'<br>';  
	   $message .= "\nالبريد الالكتروني   : ".$email.'<br>'; 
	   $message .= "\nالهوية الوطنية   : ".$iqama.'<br>'; 
	   $message .= "\nالجنسية   : ".$nat.'<br>'; 
	   $message .= "\nالمؤهل: ".$qualification.'<br>'; 
 
	   $message .= $message1.'<br>';
	   $message .= "\n<center>نشكرك على تواصلك مع ".$site_name."<br>تم استلام طلبك  وسوف يتم الرد عليك<br>نتمنى لكم دوام الصحة والعافية</center>"  ;  
	    $message .= "<<center><img src=".$site_url."/logo.png height=70px></center>" ;
	   $to =  $site_email; ;               
				 
	   $headers  = 'MIME-Version: 1.0' . "\r\n";
	   $headers .= 'Content-type: text/html; charset=utf-8' . "\r\n";
	   $subject = 'طلب الالتحاق بدورة جديدة';
   
	   // Additional headers
	   	   $name1=$site_name;

	   $headers .= 'To: '.$name.' <'.$email.'>' . "\r\n";
	    $headers .= 'From:'.$name1.' <'.$site_email.'>' . "\r\n";   

									   
	  // @mail($to, $subject, $message, $headers);  


$sql="insert into reg_cors set  name='$name',mobile='$phone',eqt='$message1',dates=CURDATE(),address='$cors',mail='$email',iqama='$iqama',nat='$nat',
	    qualification='$qualification',reg_price='$reg_price'";
if(mysqli_query($conn,$sql))
{
$last_id = mysqli_insert_id($conn);
//echo "<script language='javascript'>window.alert('تم التسجيل بنجاح')</script>";
?><meta http-equiv="refresh" content="0;url=../payments.php?order_ID=<?php echo $last_id; ?> "><?
 //$message = "<div class='success'>تم ارسال طلب الالتحاق بالدورة بنجاح</div>";
}

$sql="update   reg_cors set  name='$name',mobile='$phone',eqt='$message1',dates=CURDATE(),address='$cors',mail='$email',iqama='$iqama',nat='$nat',
	    qualification='$qualification',reg_price='$reg_price' where iqama='$iqama' and address='$cors'";
if(mysqli_query($conn,$sql))
{


$query111 = "SELECT no  FROM reg_cors where  iqama='$iqama' and address='$cors'";
$result111 = mysqli_query($conn,$query111);
while($row111=mysqli_fetch_array($result111))
{
$no=$row111['no'];
$last_id=$row111['no'];

}


?><meta http-equiv="refresh" content="0;url=../payments.php?order_ID=<?php echo $no; ?> "><?
}




$query11 = "SELECT count(user_ID)+cou,ID  FROM user_crm left  JOIN user_cors on user_crm.ID=user_cors.user_ID
where  acount_type=2  and Activation=1 and stop=0 and ID in (select user_ID from user_course where cors_ID='$cors_ID1') GROUP by ID  ORDER by count(user_ID)+cou ASC limit 1";
$result11 = mysqli_query($conn,$query11);
while($row11=mysqli_fetch_array($result11))
{
$user_ID=$row11['ID'];
 
 
  date_default_timezone_set('asia/riyadh');
  $time=date('H:i:s');




$sql="insert into user_cors set  cors_ID='$last_id',user_ID='$user_ID',time='$time',date=CURDATE()";
if(mysqli_query($conn,$sql))
{
}
}
		    $message = "";
   
                                                
   }
        }

?>
<!DOCTYPE html>
<html dir="ltr" lang="en">
<head>

 <script type="text/javascript" src="jquery.js"></script>
<script type="text/javascript">
function fetch_select1(val)
{
   $.ajax({
     type: 'post',
     url: '../fetch_data1.php',
     data: {
       get_option:val
     },
     success: function (response) {
       document.getElementById("new_select1").innerHTML=response; 
     }
   });
}

 


</script>
   <script src="https://www.google.com/recaptcha/enterprise.js?render=<?php echo $sitKey; ?>"></script>
<script>
grecaptcha.enterprise.ready(function() {
    grecaptcha.enterprise.execute('<?php echo $sitKey; ?>', {action: 'login'}).then(function(token) {
       ...
    });
});
</script><script src='https://www.google.com/recaptcha/api.js'></script>


<!-- Meta Tags -->
<meta name="viewport" content="width=device-width,initial-scale=1.0"/>
<meta http-equiv="content-type" content="text/html; charset=UTF-8"/>
<meta name="description" content="Learnpro - Education University School Kindergarten Learning HTML Template" />
<meta name="keywords" content="education,school,university,educational,learn,learning,teaching,workshop" />
<meta name="author" content="ThemeMascot" />

<!-- Page Title -->
<title><?php echo $site_name_en; ?></title>

<!-- Favicon and Touch Icons -->
<link href="../images/favicon.png" rel="shortcut icon" type="image/png">
<link href="../images/apple-touch-icon.png" rel="apple-touch-icon">
<link href="../images/apple-touch-icon-72x72.png" rel="apple-touch-icon" sizes="72x72">
<link href="../images/apple-touch-icon-114x114.png" rel="apple-touch-icon" sizes="114x114">
<link href="../images/apple-touch-icon-144x144.png" rel="apple-touch-icon" sizes="144x144">


<!-- Stylesheet -->
<link href="../css/bootstrap.min.css" rel="stylesheet" type="text/css">
<link href="../css/jquery-ui.min.css" rel="stylesheet" type="text/css">
<link href="../css/animate.css" rel="stylesheet" type="text/css">
<link href="../css/css-plugin-collections.css" rel="stylesheet"/>
<!-- CSS | menuzord megamenu skins -->
<link href="../css/menuzord-megamenu.css" rel="stylesheet"/>
<link id="../menuzord-menu-skins" href="css/menuzord-skins/menuzord-rounded-boxed.css" rel="stylesheet"/>
<!-- CSS | Main style file -->
<link href="../css/style-main.css" rel="stylesheet" type="text/css">
<!-- CSS | Preloader Styles -->
<link href="../css/preloader.css" rel="stylesheet" type="text/css">
<!-- CSS | Custom Margin Padding Collection -->
<link href="../css/custom-bootstrap-margin-padding.css" rel="stylesheet" type="text/css">
<!-- CSS | Responsive media queries -->
<link href="../css/responsive.css" rel="stylesheet" type="text/css">
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
<script src="../js/bootstrap.min.js"></script>
<!-- JS | jquery plugin collection for this theme -->
<script src="../js/jquery-plugin-collection.js"></script>

<!-- Revolution Slider 5.x SCRIPTS -->
<script src="../js/revolution-slider/js/jquery.themepunch.tools.min.js"></script>
<script src="../js/revolution-slider/js/jquery.themepunch.revolution.min.js"></script>

<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->
 

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
<body class="">

<a
        href="https://wa.me/<?php echo $site_mobile; ?>?text=<?php echo $site_name; ?>%0D%0Aالسلام عليكم ورحمه الله وبركاته"
        class="whatsapp_float"
        target="_blank"
        rel="noopener noreferrer"
      >
        <i class="fa fa-whatsapp whatsapp-icon"></i>
      </a> 
<div id="wrapper" class="clearfix">
  <!-- preloader -->
  <div id="preloader">
    <div id="spinner">
      <img alt="" src="../images/preloaders/5.gif">
    </div>
    <div id="disable-preloader" class="btn btn-default btn-sm">Disable Preloader</div>

  </div>
  <!-- Header -->
  <header id="header" class="header">
    <div class="header-top bg-theme-colored2 sm-text-center">
      <div class="container">
        <div class="row">
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
                                <li><a target="_blank" href="<? echo $facebook; ?>"><i class="fa fa-facebook text-white"></i></a></li>
                <li><a target="_blank" href="<? echo $twitter; ?>"><i class="fa fa-twitter text-white"></i></a></li>
                <li><a target="_blank" href="<? echo $whatsapp; ?>"><i class="fa fa-whatsapp text-white"></i></a></li>
                <li><a target="_blank" href="<? echo $youtube; ?>"><i class="fa fa-youtube text-white"></i></a></li>
                <li><a target="_blank" href="<? echo $instagram; ?>"><i class="fa fa-instagram text-white"></i></a></li>
                <li><a target="_blank" href="<? echo $linked; ?>"><i class="fa fa-snapchat text-white"></i></a></li>

              </ul>
            </div>
          </div>
          
          <div class="col-md-6">
             
          </div>          <div class="col-md-2">
            <ul class="list-inline sm-pull-none sm-text-center text-right text-white mb-sm-20 mt-10">
              <li class="m-0 pl-10"> <a href="../wp" class="text-white "><i class="fa fa-user-o mr-5 text-white"></i> CRM </a> </li>
              <li class="m-0 pl-0 pr-10"> 
 <ul>
                   <li><a href="#" title="" class="dropdown-toggle text-white" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                   <img src="../images/flag-1.png" alt=""/> 
					EN</a>
                     <ul class="dropdown-menu">
                           <li><a href="../index.php" title="">
							<img src="../images/flag-ar.png" alt=""/> 
							AR</a></li>
 
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
            <a class=" flip sm-pull-center mb-15" href="index.php">
			<img src="../images/logo-wide.png" style=" height:70px" alt=""></a>
          </div>
          
          <div class="col-xs-12 col-sm-12 col-md-9">
            <div class="row">
              <div class="col-xs-12 col-sm-4 col-md-4">
                <div class="widget no-border sm-text-center mt-10 mb-10 m-0">
                  <i class="pe-7s-phone text-theme-colored2 font-48 mt-0 mr-15 mr-sm-0 sm-display-block pull-left flip sm-pull-none"></i>
                  <a href="#" class="font-12 text-gray text-uppercase"> Contact Us  </a>
                  <h5 class="font-13 text-black m-0"> <?php echo $site_mobile; ?></h5>
                </div>
              </div>
              <div class="col-xs-12 col-sm-4 col-md-4">
                <div class="widget no-border sm-text-center mt-10 mb-10 m-0">
                  <i class="pe-7s-mail-open text-theme-colored2 font-48 mt-0 mr-15 mr-sm-0 sm-display-block pull-left flip sm-pull-none"></i>
                  <a href="#" class="font-12 text-gray text-uppercase">E-mail address</a>
                  <h5 class="font-13 text-black m-0"><?php echo $site_email; ?></h5>
                </div>
              </div>
              <div class="col-xs-12 col-sm-4 col-md-4">
           <a class=" flip sm-pull-center mb-15" href="index.php"><img src="../logo1.png" style=" height:70px" alt=""></a>
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

<li><a href="index.php">Home</a></li>
<?
$result2=mysqli_query($conn,"select * from mune where timer1=0 or timer1=1 order by ID ASC");
while($row2=mysqli_fetch_array($result2))
{
$m_ID=$row2['ID'];
if($row2['up']==1) { ?> 
              <li><a href="#home"><? echo $row2['mune_en']; ?></a>
                <ul class="dropdown">
 <?
$result22=mysqli_query($conn,"select * from sub where m_ID='$m_ID' order by sort1 ASC");
while($row22=mysqli_fetch_array($result22))
{
?>
<? if($row22['type']==1){ ?><li><a href="about.php?ID=<? echo $row22['sub_ID']; ?>"><? echo $row22['sub_en']; ?></a></li>  <? } ?>
<? if($row22['type']==2){ ?><li><a href="image.php?ID=<? echo $row22['sub_ID']; ?>"><? echo $row22['sub_en']; ?></a></li>  <? } ?>
<? if($row22['type']==3){ ?><li><a href="video.php?ID=<? echo $row22['sub_ID']; ?>"><? echo $row22['sub_en']; ?></a></li>  <? } ?>
<? if($row22['type']==4){ ?><li><a href="<? echo $row22['url']; ?>"><? echo $row22['sub_en']; ?></a></li>  <? } ?>
<? if($row22['type']==5){ ?><li><a href="research.php"><? echo $row22['sub_en']; ?></a></li>  <? } ?>
<? if($row22['type']==10){ ?><li><a href="articles.php"><? echo $row22['sub_en']; ?></a></li>  <? } ?>

<? if($row22['type']==6){ ?><li><a href="page3.php?ID=<? echo $row22['sub_ID']; ?>"><? echo $row22['sub_en']; ?></a></li>  <? } ?>
<? if($row22['type']==7){ ?><li><a href="page4.php?ID=<? echo $row22['sub_ID']; ?>"><? echo $row22['sub_en']; ?></a></li>  <? } ?>
<? } ?>
</ul>
</li>
<?
}
else
{
?>
<li><a href="mune_about.php?ID=<? echo $row2['ID']; ?>"><? echo $row2['mune_en']; ?></a></li>
<? }} ?>               
<li ><a href="contact.php">Contact Us  </a></li>
                      
                          
               
               
               

               
               
            </ul>
           <div class="pull-right sm-pull-none mb-sm-15">
                         <a class="btn btn-colored btn-theme-colored2 mt-15 mt-sm-10 pt-10 pb-10  " href="reg.php">Register Now</a>
            </div>
          </nav>
        </div>
      </div>
    </div>
  </header>
  
  <!-- Start main-content -->
  <div class="main-content">
    <!-- Section: inner-header -->
    <section class="inner-header divider layer-overlay overlay-theme-colored-7" data-bg-img="../images/we-provide-bg1.jpg">
      <div class="container pt-120 pb-60">
        <!-- Section Content -->
        <div class="section-content">
          <div class="row"> 
            <div class="col-md-12">
              <h2 class="text-theme-colored2 font-36">Register Now

</h2>
              <ol class="breadcrumb   mt-10 white">
                <li><a href="index.php">Home</a></li>
                <li class="active">  
Register Now


</li>
              </ol>
            </div>
          </div>
        </div>
      </div>
    </section>

 

<section class="layer-overlay overlay-white-9" data-bg-img="../images/bg/bg-pattern.png">
      <div class="container pb-40">
        <div class="section-content">
          <div class="row">
            <div class="col-md-3">
              <div class="icon-box hover-effect border-1px border-radius-10px text-center bg-white p-15 pt-40 pb-30">
                <a href="#" class="icon icon-circled icon-lg" data-bg-color="#FC9928">
                  <i class="pe-7s-medal  text-white font-48"></i>
                </a>
                <h4 class="icon-box-title text-uppercase letter-space-1 font-20 mt-15"><a href="#">Ease of use</a></h4>
                <p class=""> Learn through videos, e-books and practical projects with direct technical support from the Jeddah Chamber e-training platform</p>
              </div>
            </div>
            <div class="col-md-3">
              <div class="icon-box hover-effect border-1px border-radius-10px text-center bg-white p-15 pt-40 pb-30">
                <a href="#" class="icon icon-circled icon-lg" data-bg-color="#43B14B">
                  <i class="pe-7s-users text-white font-48"></i>
                </a>
                <h4 class="icon-box-title text-uppercase letter-space-1 font-20 mt-15"><a href="#">Trainers</a></h4>
                <p class="">A selection of trainers with accreditation certificates at the international and local levels, with long training experiences,</p>
              </div>
            </div>
            <div class="col-md-3">
              <div class="icon-box hover-effect border-1px border-radius-10px text-center bg-white p-15 pt-40 pb-30">
                <a href="#" class="icon icon-circled icon-lg" data-bg-color="#00C3CB">
                  <i class="pe-7s-notebook  text-white font-48"></i>
                </a>
                <h4 class="icon-box-title text-uppercase letter-space-1 font-20 mt-15"><a href="#">Dozens of specialties</a></h4>
                <p class="">Dozens of specializations in different fields of business, computer science, marketing, management and others,</p>
              </div>
            </div>
            <div class="col-md-3">
              <div class="icon-box hover-effect border-1px border-radius-10px text-center bg-white p-15 pt-40 pb-30">
                <a href="#" class="icon icon-circled icon-lg" data-bg-color="#EF5861">
                  <i class="pe-7s-study text-white font-48"></i>
                </a>
                <h4 class="icon-box-title text-uppercase letter-space-1 font-20 mt-15"><a href="#">Certificates</a></h4>
                <p class="">Professional platform that offers specialized and accredited certificates that enhance your skills and career opportunities</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    
        <section id="reservation" class="parallax layer-overlay overlay-theme-colored-9" data-bg-img="../images/we-provide-bg.jpg" data-parallax-ratio="0.4">
      <div class="container">
        <div class="row">
          <div class="col-md-8 sm-text-center">
 
            <h2 class="text-theme-colored2 font-54 mt-0">Register NOW</h2>
            <p class="text-gray-darkgray font-15  " align="justify">We provide training programs for organizations according to their training needs, and we also provide various consultations in all training fields
              To book appointments, we also have a group of the best trainers in the Kingdom, the Gulf and the Arab world, and spread awareness and education to build
              The development of positive thinking and the dissemination and sharing of knowledge to achieve integration and constructive cooperation in various fields of training and provision of advisory services


</p>
            <div class="row mt-30 sm-text-center">
  <?
$result=mysqli_query($conn,"select* from count_pro  ");
while($row=mysqli_fetch_array($result))
{
?>            
              <div class="col-xs-12 col-sm-6 col-md-3 mb-md-50">
                <div class="funfact">
                  <i class="pe-7s-<? echo $row['logo']; ?> mb-20 text-theme-colored2"></i>
                  <h2 data-animation-duration="2000" data-value="<? echo $row['num']; ?>" class="animate-number text-white font-38 font-weight-400 mt-0 mb-15">0</h2>
                  <h5 class="text-white text-uppercase"><? echo $row['name_en']; ?></h5>
                </div>
              </div>
           <? } ?>
               
            </div>
          </div>
          <div class="col-md-4">
             <div class="p-30 mt-0 bg-dark-transparent-2">
              <h3 class="title-pattern mt-0"><span class="text-white">Registration<span class="text-theme-colored2">Form</span></span></h3>
              <!-- Appilication Form Start-->     <?php if(isset($message)) echo $message;  ?> 
              <form id="reservation_form" name="reservation_form" class="reservation-form mt-20" method="post" action="" >
                <div class="row">
                   <div class="col-sm-12">
                    <div class="form-group mb-20">
                      <input placeholder="Name" id="reservation_name" name="fullname" required="" class="form-control" aria-required="true" type="text">
                    </div>
                  </div>
 
                      <input placeholder="الهوية الوطنية" pattern="[0-9]{10,10}"   title="الحقل يجب ان يحتوي علي رقم فقط ويحتوي علي 10 ارقام"  id="reservation_iqama" name="iqama" class="form-control" required="" aria-required="true" type="hidden">
 
                  
                  <div class="col-sm-12">
                    <div class="form-group mb-20">
                      <input placeholder="Mobile" id="reservation_phone"  pattern="[0]{1}[5]{1}[0-9]{8}"   title="الحقل يجب ان يحتوي علي رقم فقط ويحتوي علي 10 ارقام يبدء 05xxxxxxxx"   name="phone" class="form-control" required="" aria-required="true" type="text">
                    </div>
                  </div>
                  
                  
                  <div class="col-sm-12">
                    <div class="form-group mb-20">
                      <input placeholder="E mail" id="reservation_email" name="email" class="form-control" required="" aria-required="true" type="email">
                    </div>
                  </div>
                  
 
<input placeholder="الجنسية" type=hidden  value='سعودي' required  name="nat" class="form-control" type="text"  >
<input placeholder="الجنسية" type=hidden  value='جامعي' required  name="qualification" class="form-control" type="text"  >



                  <div class="col-sm-12">
                    <div class="form-group mb-20">
 
                        <select id="person_select" name="cors" class="form-control" required=""   onclick="fetch_select1(this.value);" onchange="fetch_select1(this.value); ">
                          <option value='' hidden>Training Course</option>
<?
$result=mysqli_query($conn,"select* from subjects,cors
 where cors.cors_ID=subjects.cors_ID and  show_reg=1 ");
while($row=mysqli_fetch_array($result))
{

?>
                          <option value="<? echo $row['ID']; ?>"><? echo $row['cors_name_en']; ?></option>
 <? } ?>
                        </select>
                      </div>
                    </div>
 
  

 

                  <div class="col-sm-12">
                    <div class="form-group mb-20">
 
<select id="new_select1" name="reg_price" class="form-control" required="">
                          <option value='' hidden>training pattern</option>
 
                        </select>
                      </div>
                    </div>
  
  
                  
                  <div class="col-sm-12">
                    <div class="form-group">
                      <textarea placeholder="Notes" rows="3" class="form-control required" name="message" id="form_message" aria-required="true"></textarea>
                                            <div class="g-recaptcha" data-sitekey="<?php echo $sitKey; ?>" align="center"></div>

                    </div>
                  </div>
                  <div class="col-sm-12">
                    <div class="form-group mb-0 mt-10">
                      <input name="form_botcheck" class="form-control" value="" type="hidden">
                <button type="submit" name="contact" class="btn btn-colored btn-theme-colored2 text-white btn-lg btn-block" data-loading-text="Please wait...">Pay Now</button>
                
                

                    </div>
                  </div>
                </div>
              </form>
              <!-- Application Form End-->

              <!-- Application Form Validation Start-->
             
              <!-- Application Form Validation Start -->
              </div>
           </div>
        </div>
      </div>
    </section>    
    <!-- Divider: Funfact -->
     

    <!-- Section: Team -->
     
  </div>
  <!-- end main-content -->
  
  <!-- Footer -->
  <footer id="footer" class="footer divider layer-overlay overlay-dark-9" data-bg-img="../images/we-provide-bg.jpg">
    <div class="container pt-70 pb-40">
      <div class="row">
        <div class="col-sm-6 col-md-3">
          <div class="widget dark">
            <img class="mt-5 mb-20" alt="" src="../images/logo-white-footer.png">
            <p> <?php echo $site_address_en; ?></p>
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
                                <li><a target="_blank" href="<? echo $facebook; ?>"><i class="fa fa-facebook text-white"></i></a></li>
                <li><a target="_blank" href="<? echo $twitter; ?>"><i class="fa fa-twitter text-white"></i></a></li>
                <li><a target="_blank" href="<? echo $whatsapp; ?>"><i class="fa fa-whatsapp text-white"></i></a></li>
                <li><a target="_blank" href="<? echo $youtube; ?>"><i class="fa fa-youtube text-white"></i></a></li>
                <li><a target="_blank" href="<? echo $instagram; ?>"><i class="fa fa-instagram text-white"></i></a></li>
                <li><a target="_blank" href="<? echo $linked; ?>"><i class="fa fa-snapchat text-white"></i></a></li>

            </ul>
          </div>
        </div>
        <div class="col-sm-6 col-md-3">
          <div class="widget dark">
            <h4 class="widget-title line-bottom-theme-colored-2">Useful Links</h4>
            <ul class="angle-double-right list-border">
 
<li><a href="../othyk-aladoar-oalmsoolyat.php">Roles and responsibilities document</a></li>
<li><a href="../staff-guide.pdf">Supervisory staff</a></li>
<li><a href="../help.php">How-to guides</a></li>
<li><a href="../support.php">Technical and educational support policy</a></li>

          </div>
        </div>
<div class="col-sm-6 col-md-3">
          <div class="widget dark">
<h4 class="widget-title line-bottom-theme-colored-2">Quick Links</h4>
            <ul class="angle-double-right list-border">
<li><a href="../stus">Trainees Affairs</a></li>
 
                 
                 <li>
                   <a href="../conditions.php">Terms and Conditions</a>
                 </li>
                 
                  <li>
                   <a href="../privacy.php">Privacy Policy</a>
                 </li>
               
                 <li>
                   <a href="../academic.php">Academic Integrity</a>
                 </li>
            </ul>          </div>
        </div>

        <div class="col-sm-6 col-md-3">
          <div class="widget dark">
            <h4 class="widget-title line-bottom-theme-colored-2">Opening Hours</h4>
            <div class="opening-ساعات">
              <ul class="list-border">
                <li class="clearfix"> <span> Sun - Tue :  </span>
                  <div class="value pull-right flip">08.00 am - 05.00 pm</div>
                </li>
                <li class="clearfix"> <span> Wed - Thurs :  </span>
                  <div class="value pull-right flip"> 08.00 am - 05.00 pm</div>
                </li>                <li class="clearfix"> <span> Friday : </span>
                  <div class="value pull-right flip bg-theme-colored2 text-white closed"> Closed</div>
                </li>
                <li class="clearfix"> <span> Saturday : </span>
                  <div class="value pull-right flip bg-theme-colored2 text-white closed"> Closed</div>
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
            <p class="font-12 text-black-777 m-0 sm-text-center">Copyright &copy;2023 <?php echo $site_url; ?>. All Rights Reserved</p>
          </div>
          <div class="col-md-6 text-right">
            <div class="widget no-border m-0">
              <ul class="list-inline sm-text-center mt-5 font-12">
                  <li>
                  <a href="../conditions.php">FAQ</a>
                </li>
                <li>|</li>
                <li>
                  <a href="../help.php">Help Desk</a>
                </li>
                <li>|</li>
                <li>
                  <a href="../support.php">Support</a>
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
<script src="../js/custom.js"></script>

</body>
</html>