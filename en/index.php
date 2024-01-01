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
  

 ?>
<?
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
    <!-- Section: home -->
    <section id="home">
      <div class="container-fluid p-0">
        
        <!-- START REVOLUTION SLIDER 5.0.7 -->
        <div id="rev_slider_home_wrapper" class="rev_slider_wrapper" data-alias="news-gallery34" style="margin:0px auto; background-color:#ffffff; padding:0px; margin-top:0px; margin-bottom:0px;">
          <!-- START REVOLUTION SLIDER 5.0.7 fullwidth mode -->
          <div id="rev_slider_home" class="rev_slider fullwidthabanner" style="display:none;" data-version="5.0.7">
            <ul>
              <!-- SLIDE 1 -->
              <li data-index="rs-1" data-transition="fade" data-slotamount="default" data-easein="default" data-easeout="default" data-masterspeed="default" data-thumb="../images/slide-bg-1.webp" data-rotate="0"  data-fstransition="fade" data-saveperformance="off" data-title="Web Show" data-description="">
                <!-- MAIN IMAGE -->
                <img src="../images/slide-bg-1.webp" alt="" data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" data-bgparallax="10" class="rev-slidebg" data-no-retina>
                <!-- LAYERS -->
                <!-- LAYER NR. 1 -->
                <div class="tp-caption tp-shape tp-shapewrapper tp-resizeme rs-parallaxlevel-0 bg-theme-colored-transparent-4" 
                  id="slide-1-layer-1" 
                  data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" 
                  data-y="['middle','middle','middle','middle']" data-voffset="['0','0','0','0']" 
                  data-width="full"
                  data-height="full"
                  data-whitespace="normal"
                  data-transform_idle="o:1;"
                  data-transform_in="opacity:0;s:1500;e:Power3.easeInOut;" 
                  data-transform_out="opacity:0;s:1000;e:Power3.easeInOut;s:1000;e:Power3.easeInOut;" 
                  data-start="500" 
                  data-basealign="slide" 
                  data-responsive_offset="on" 
                  style="z-index: 5;background-color:rgba(0, 0, 0, 0.35);border-color:rgba(0, 0, 0, 1.00);"> 
                </div>
                <!-- LAYER NR. 2 -->
                <div class="tp-caption tp-resizeme rs-parallaxlevel-0 text-white text-uppercase font-roboto-slab font-weight-700" 
                  id="slide-1-layer-2" 
                  data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" 
                  data-y="['top','top','top','top']" data-voffset="['195','195','160','170']" 
                  data-fontsize="['58','48','42','36']"
                  data-lineheight="['70','60','50','45']"
                  data-fontweight="['800','700','700','700']"
                  data-textalign="['center','center','center','center']"
                  data-width="['700','650','600','420']"
                  data-height="none"
                  data-whitespace="normal"
                  data-transform_idle="o:1;"
                  data-transform_in="y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;s:1500;e:Power3.easeInOut;" 
                  data-transform_out="auto:auto;s:1000;e:Power3.easeInOut;" 
                  data-mask_in="x:0px;y:0px;s:inherit;e:inherit;" 
                  data-mask_out="x:0;y:0;s:inherit;e:inherit;" 
                  data-start="600" 
                  data-splitin="none" 
                  data-splitout="none" 
                  data-responsive_offset="on" 
                  style="z-index: 5; white-space: nowrap; font-weight:700;">Why choose us

                </div>
                <!-- LAYER NR. 3 -->
                <div class="tp-caption tp-resizeme text-white rs-parallaxlevel-0" 
                  id="slide-1-layer-3" 
                  data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" 
                  data-y="['top','top','top','top']" data-voffset="['275','260','220','220']"
                  data-fontsize="['16','16',18',16']"
                  data-lineheight="['24','24','24','24']"
                  data-fontweight="['400','400','400','400']"
                  data-textalign="['center','center','center','center']"
                  data-width="['800','650','600','460']"
                  data-height="none"
                  data-whitespace="nowrap"
                  data-transform_idle="o:1;"
                  data-transform_in="y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;s:1500;e:Power3.easeInOut;" 
                  data-transform_out="auto:auto;s:1000;e:Power3.easeInOut;" 
                  data-mask_in="x:0px;y:0px;s:inherit;e:inherit;" 
                  data-mask_out="x:0;y:0;s:inherit;e:inherit;" 
                  data-start="700" 
                  data-splitin="none" 
                  data-splitout="none" 
                  data-responsive_offset="on" 
                  style="z-index: 5; white-space: nowrap;">Our goals revolve around the student, confidence, belief in teamwork, harmony, constructive growth, profitable growth and innovation.                </div>
                <!-- LAYER NR. 4 -->
                <div class="tp-caption rs-parallaxlevel-0" 
                  id="slide-1-layer-4" 
                  data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" 
                  data-y="['top','top','top','top']" data-voffset="['350','330','290','290']" 
                  data-width="none"
                  data-height="none"
                  data-whitespace="nowrap"
                  data-transform_idle="o:1;"
                  data-transform_hover="o:1;rX:0;rY:0;rZ:0;z:0;s:300;e:Power1.easeInOut;"
                  data-transform_in="y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;s:1500;e:Power3.easeInOut;" 
                  data-transform_out="auto:auto;s:1000;e:Power3.easeInOut;" 
                  data-mask_in="x:0px;y:0px;" 
                  data-mask_out="x:0;y:0;" 
                  data-start="800"
                  data-splitin="none" 
                  data-splitout="none" 
                  data-responsive_offset="on" 
                  data-responsive="off"
                  style="z-index: 5; white-space: nowrap; letter-spacing:1px;"><a class="btn btn-theme-colored2 btn-lg btn-flat text-white font-weight-600 pl-30 pr-30 mr-15" href="contact.php">Contact Us  </a>
                </div>
              </li>

              <!-- SLIDE 2 -->
              <li data-index="rs-2" data-transition="fade" data-slotamount="default" data-easein="default" data-easeout="default" data-masterspeed="default" data-thumb="../images/slide-bg-2.webp" data-rotate="0"  data-fstransition="fade" data-saveperformance="off" data-title="Web Show" data-description="">
                <!-- MAIN IMAGE -->
                <img src="../images/slide-bg-2.webp" alt="" data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" data-bgparallax="10" class="rev-slidebg" data-no-retina>
                <!-- LAYERS -->
                <!-- LAYER NR. 1 -->
                <div class="tp-caption tp-shape tp-shapewrapper tp-resizeme rs-parallaxlevel-0 bg-theme-colored-transparent-4" 
                  id="slide-2-layer-1" 
                  data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" 
                  data-y="['middle','middle','middle','middle']" data-voffset="['0','0','0','0']" 
                  data-width="full"
                  data-height="full"
                  data-whitespace="normal"
                  data-transform_idle="o:1;"
                  data-transform_in="opacity:0;s:1500;e:Power3.easeInOut;" 
                  data-transform_out="opacity:0;s:1000;e:Power3.easeInOut;s:1000;e:Power3.easeInOut;" 
                  data-start="500" 
                  data-basealign="slide" 
                  data-responsive_offset="on" 
                  style="z-index: 5;background-color:rgba(0, 0, 0, 0.35);border-color:rgba(0, 0, 0, 1.00);"> 
                </div>
                <!-- LAYER NR. 2 -->
                <div class="tp-caption tp-resizeme rs-parallaxlevel-0 text-white text-uppercase font-roboto-slab font-weight-700" 
                  id="slide-2-layer-2" 
                  data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" 
                  data-y="['top','top','top','top']" data-voffset="['195','195','160','170']" 
                  data-fontsize="['58','48','42','36']"
                  data-lineheight="['70','60','50','45']"
                  data-fontweight="['800','700','700','700']"
                  data-textalign="['center','center','center','center']"
                  data-width="['700','650','600','420']"
                  data-height="none"
                  data-whitespace="normal"
                  data-transform_idle="o:1;"
                  data-transform_in="y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;s:1500;e:Power3.easeInOut;" 
                  data-transform_out="auto:auto;s:1000;e:Power3.easeInOut;" 
                  data-mask_in="x:0px;y:0px;s:inherit;e:inherit;" 
                  data-mask_out="x:0;y:0;s:inherit;e:inherit;" 
                  data-start="600" 
                  data-splitin="none" 
                  data-splitout="none" 
                  data-responsive_offset="on" 
                  style="z-index: 5; white-space: nowrap; font-weight:700;">Training areas
                </div>
                <!-- LAYER NR. 3 -->
                <div class="tp-caption tp-resizeme text-white rs-parallaxlevel-0" 
                  id="slide-2-layer-3" 
                  data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" 
                  data-y="['top','top','top','top']" data-voffset="['275','260','220','220']"
                  data-fontsize="['16','16',18',16']"
                  data-lineheight="['24','24','24','24']"
                  data-fontweight="['400','400','400','400']"
                  data-textalign="['center','center','center','center']"
                  data-width="['800','650','600','460']"
                  data-height="none"
                  data-whitespace="nowrap"
                  data-transform_idle="o:1;"
                  data-transform_in="y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;s:1500;e:Power3.easeInOut;" 
                  data-transform_out="auto:auto;s:1000;e:Power3.easeInOut;" 
                  data-mask_in="x:0px;y:0px;s:inherit;e:inherit;" 
                  data-mask_out="x:0;y:0;s:inherit;e:inherit;" 
                  data-start="700" 
                  data-splitin="none" 
                  data-splitout="none" 
                  data-responsive_offset="on" 
                  style="z-index: 5; white-space: nowrap;">Administrative and educational training - computer - engineering and technical courses - foreign languages                </div>
                <!-- LAYER NR. 4 -->
                <div class="tp-caption rs-parallaxlevel-0" 
                  id="slide-2-layer-4" 
                  data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" 
                  data-y="['top','top','top','top']" data-voffset="['350','330','290','290']" 
                  data-width="none"
                  data-height="none"
                  data-whitespace="nowrap"
                  data-transform_idle="o:1;"
                  data-transform_hover="o:1;rX:0;rY:0;rZ:0;z:0;s:300;e:Power1.easeInOut;"
                  data-transform_in="y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;s:1500;e:Power3.easeInOut;" 
                  data-transform_out="auto:auto;s:1000;e:Power3.easeInOut;" 
                  data-mask_in="x:0px;y:0px;" 
                  data-mask_out="x:0;y:0;" 
                  data-start="800"
                  data-splitin="none" 
                  data-splitout="none" 
                  data-responsive_offset="on" 
                  data-responsive="off"
                  style="z-index: 5; white-space: nowrap; letter-spacing:1px;"><a class="btn btn-theme-colored2 btn-lg btn-flat text-white font-weight-600 pl-30 pr-30 mr-15" href="contact.php">Contact Us  </a>
                </div>
              </li>

              <!-- SLIDE 3 -->
              <li data-index="rs-3" data-transition="fade" data-slotamount="default" data-easein="default" data-easeout="default" data-masterspeed="default" data-thumb="../images/slide-bg-3.webp" data-rotate="0"  data-fstransition="fade" data-saveperformance="off" data-title="Web Show" data-description="">
                <!-- MAIN IMAGE -->
                <img src="../images/slide-bg-3.webp" alt="" data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" data-bgparallax="10" class="rev-slidebg" data-no-retina>
                <!-- LAYERS -->
                <!-- LAYER NR. 1 -->
                <div class="tp-caption tp-shape tp-shapewrapper tp-resizeme rs-parallaxlevel-0 bg-theme-colored-transparent-4" 
                  id="slide-3-layer-1" 
                  data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" 
                  data-y="['middle','middle','middle','middle']" data-voffset="['0','0','0','0']" 
                  data-width="full"
                  data-height="full"
                  data-whitespace="normal"
                  data-transform_idle="o:1;"
                  data-transform_in="opacity:0;s:1500;e:Power3.easeInOut;" 
                  data-transform_out="opacity:0;s:1000;e:Power3.easeInOut;s:1000;e:Power3.easeInOut;" 
                  data-start="500" 
                  data-basealign="slide" 
                  data-responsive_offset="on" 
                  style="z-index: 5;background-color:rgba(0, 0, 0, 0.35);border-color:rgba(0, 0, 0, 1.00);"> 
                </div>
                <!-- LAYER NR. 2 -->
                <div class="tp-caption tp-resizeme rs-parallaxlevel-0 text-white text-uppercase font-roboto-slab font-weight-700" 
                  id="slide-3-layer-2" 
                  data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" 
                  data-y="['top','top','top','top']" data-voffset="['195','195','160','170']" 
                  data-fontsize="['58','48','42','36']"
                  data-lineheight="['70','60','50','45']"
                  data-fontweight="['800','700','700','700']"
                  data-textalign="['center','center','center','center']"
                  data-width="['700','650','600','420']"
                  data-height="none"
                  data-whitespace="normal"
                  data-transform_idle="o:1;"
                  data-transform_in="y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;s:1500;e:Power3.easeInOut;" 
                  data-transform_out="auto:auto;s:1000;e:Power3.easeInOut;" 
                  data-mask_in="x:0px;y:0px;s:inherit;e:inherit;" 
                  data-mask_out="x:0;y:0;s:inherit;e:inherit;" 
                  data-start="600" 
                  data-splitin="none" 
                  data-splitout="none" 
                  data-responsive_offset="on" 
                  style="z-index: 5; white-space: nowrap; font-weight:700;">Our motto
                </div>
                <!-- LAYER NR. 3 -->
                <div class="tp-caption tp-resizeme text-white rs-parallaxlevel-0" 
                  id="slide-3-layer-3" 
                  data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" 
                  data-y="['top','top','top','top']" data-voffset="['275','260','220','220']"
                  data-fontsize="['16','16',18',16']"
                  data-lineheight="['24','24','24','24']"
                  data-fontweight="['400','400','400','400']"
                  data-textalign="['center','center','center','center']"
                  data-width="['800','650','600','460']"
                  data-height="none"
                  data-whitespace="nowrap"
                  data-transform_idle="o:1;"
                  data-transform_in="y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;s:1500;e:Power3.easeInOut;" 
                  data-transform_out="auto:auto;s:1000;e:Power3.easeInOut;" 
                  data-mask_in="x:0px;y:0px;s:inherit;e:inherit;" 
                  data-mask_out="x:0;y:0;s:inherit;e:inherit;" 
                  data-start="700" 
                  data-splitin="none" 
                  data-splitout="none" 
                  data-responsive_offset="on" 
                  style="z-index: 5; white-space: nowrap;">Quality training aimed at excellence<br>
                 Providing quality education with high quality and international standards that achieve the goals of educational institutions 
                </div>
                <!-- LAYER NR. 4 -->
                <div class="tp-caption rs-parallaxlevel-0" 
                  id="slide-3-layer-4" 
                  data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" 
                  data-y="['top','top','top','top']" data-voffset="['350','330','290','290']" 
                  data-width="none"
                  data-height="none"
                  data-whitespace="nowrap"
                  data-transform_idle="o:1;"
                  data-transform_hover="o:1;rX:0;rY:0;rZ:0;z:0;s:300;e:Power1.easeInOut;"
                  data-transform_in="y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;s:1500;e:Power3.easeInOut;" 
                  data-transform_out="auto:auto;s:1000;e:Power3.easeInOut;" 
                  data-mask_in="x:0px;y:0px;" 
                  data-mask_out="x:0;y:0;" 
                  data-start="800"
                  data-splitin="none" 
                  data-splitout="none" 
                  data-responsive_offset="on" 
                  data-responsive="off"
                  style="z-index: 5; white-space: nowrap; letter-spacing:1px;"><a class="btn btn-theme-colored2 btn-lg btn-flat text-white font-weight-600 pl-30 pr-30 mr-15" href="contact.php">Contact Us  </a>
                </div>
              </li>
            </ul>
            <div class="tp-bannertimer tp-bottom" style="height: 5px; background-color: rgba(255, 255, 255, 0.2);"></div>
          </div>
        </div>

        <!-- END REVOLUTION SLIDER -->
        <script type="text/javascript">
          var tpj=jQuery;
          var revapi34;
          tpj(document).ready(function() {
            if(tpj("#rev_slider_home").revolution == undefined){
              revslider_showDoubleJqueryError("#rev_slider_home");
            }else{
              revapi34 = tpj("#rev_slider_home").show().revolution({
                sliderType:"standard",
                jsFileLocation:"js/revolution-slider/js/",
                sliderLayout:"fullwidth",
                dottedOverlay:"none",
                delay:5000,
                navigation: {
                  keyboardNavigation:"on",
                  keyboard_direction: "horizontal",
                  mouseScrollNavigation:"off",
                  onHoverStop:"on",
                  touch:{
                    touchenabled:"on",
                    swipe_threshold: 75,
                    swipe_min_touches: 1,
                    swipe_direction: "horizontal",
                    drag_block_vertical: false
                  }
                  ,
                  arrows: {
                    style:"zeus",
                    enable:true,
                    hide_onmobile:true,
                    hide_under:600,
                    hide_onleave:true,
                    hide_delay:200,
                    hide_delay_mobile:1200,
                    tmp:'<div class="tp-title-wrap">    <div class="tp-arr-imgholder"></div> </div>',
                    left: {
                      h_align:"left",
                      v_align:"center",
                      h_offset:30,
                      v_offset:0
                    },
                    right: {
                      h_align:"right",
                      v_align:"center",
                      h_offset:30,
                      v_offset:0
                    }
                  },
                  bullets: {
                    enable:true,
                    hide_onmobile:true,
                    hide_under:600,
                    style:"metis",
                    hide_onleave:true,
                    hide_delay:200,
                    hide_delay_mobile:1200,
                    direction:"horizontal",
                    h_align:"center",
                    v_align:"bottom",
                    h_offset:0,
                    v_offset:30,
                    space:5,
                    tmp:'<span class="tp-bullet-img-wrap"><span class="tp-bullet-image"></span></span>'
                  }
                },
                viewPort: {
                  enable:true,
                  outof:"pause",
                  visible_area:"80%"
                },
                responsiveLevels:[1240,1024,778,480],
                gridwidth:[1240,1024,778,480],
                gridheight:[600,550,500,450],
                lazyType:"none",
                parallax: {
                  type:"scroll",
                  origo:"enterpoint",
                  speed:400,
                  levels:[5,10,15,20,25,30,35,40,45,50],
                },
                shadow:0,
                spinner:"off",
                stopLoop:"off",
                stopAfterLoops:-1,
                stopAtSlide:-1,
                shuffle:"off",
                autoHeight:"off",
                hideThumbsOnMobile:"off",
                hideSliderAtLimit:0,
                hideCaptionAtLimit:0,
                hideAllCaptionAtLilmit:0,
                debugMode:false,
                fallbacks: {
                  simplifyAll:"off",
                  nextSlideOnWindowFocus:"off",
                  disableFocusListener:false,
                }
              });
            }
          }); /*ready*/
        </script>
      <!-- END REVOLUTION SLIDER -->

      </div>
    </section>


 <?
  
$result=mysqli_query($conn,"select* from subjects,cors
 where cors.cors_ID=subjects.cors_ID and  show_reg=1   order by rand() limit 10 ");
$rows=mysqli_num_rows($result) ; 
if($rows > 0 )
{
?>
    <!-- Section: Courses -->
    <section id="courses" class="bg-silver-deep">
      <div class="container pb-40">
        <div class="section-title">
          <div class="row">
            <div class="col-md-12">
<h2 class="text-uppercase title">Courses<span class="text-theme-colored2"> Training</span></h2>
<p class="text-uppercase mb-0">Your promising future starts with your professional and scientific development</p>
					  	<div class="double-line-bottom-theme-colored-2"></div>
						</div>
          </div>
        </div>
        <div class="row mtli-row-clearfix">
          <div class="owl-carousel-3col" data-nav="true">
               <?
  

while($row=mysqli_fetch_array($result))
{

?>   
    <div class="item">
              <div class="course-single-item style2 bg-white border-1px text-center mb-30">
              <div class="course-thumb">
 
                
                              <?
              $imagePath = "../stus/cors_files/".$row['photo'];
if(!file_exists($imagePath) or $row['photo']=="")
    $imagePath = "../images/portfolio/default.webp";
    else
              $imagePath = "../stus/cors_files/".$row['photo'];
    ?>
                 <a href="details1.php?ID=<? echo $row['ID']; ?>"> <img class="img-fullwidth" alt="" src="<? echo $imagePath; ?>" style="width:360px;height:250px"></a>
                

                <div class="price-tag"> <? echo $row['price']; ?></div>

 
              </div>
              <div class="course-details border-1px clearfix p-15 pt-15">
                <div class="course-top-part">
                   <a href="details1.php?ID=<? echo $row['ID']; ?>"><h5 class="line-bottom-centered mt-20 mb-30">
                   <? echo $row['cors_name_en'];
                   //echo strlen($row['cors_name_en']);
                   if(strlen($row['cors_name_en'])<=50) echo "<p>&nbsp;</p>";
                    ?></h5></a><ul class="list-inline">
                      <li class="review-stars">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                      </li>
                      <li>25 <i class="fa fa-comments-o text-theme-colored2"></i></li>
                      <li>68 <i class="fa fa-thumbs-o-up text-theme-colored2"></i></li>
                    </ul>
                </div>
                <div class="author-thumb">
                 <?
$result1=mysqli_query($conn,"select* FROM user  where ID='$row[traning_name]'");
while($row1=mysqli_fetch_array($result1))
{

 if($row1['image']!="") { ?>
 <img src="../stus/dist/img/<? echo $row1[image]; ?>" style="width:54px;height:54px" alt="<? echo $row1[name]; ?>" class="img-circle">
 <? } else { ?>  
            
                        <? if($row1['Branches']==3) { ?><img src="../stus/dist/img/avatar2.png" class="img-circle" style="width:54px;height:54px"   alt="<? echo $row1[name]; ?>"/><? } else { ?>
            <img src="../stus/dist/img/avatar5.png" class="img-circle" style="width:54px;height:54px"   alt="<? echo $row1[name]; ?>"/>
            <? } }?>

 
 <? } ?>
                </div>
                <p class="course-description mt-5"><? echo substr($row['short_desc_en'],0,120); ?></p>
                                <i class="fa fa-flag"></i> <font color="#FF0000"><? echo $row['cors_online']; ?> </font> <i class="fa fa-clock-o"></i> <font color="#FF0000"><? echo $row['cors_time']; ?></font>

              </div>
              <div class="course-meta bg-silver-deep">
                <ul class="list-inline">
                  <li><i class="fa fa-calendar text-theme-colored2 mr-5"></i> <? echo $row['credits']; ?> Hours</li>
                  <li><i class="fa fa-book text-theme-colored2 mr-5"></i> Duration: <? echo $row['contact_hours_en']; ?> </li>
 
                  
                                    <li><a href="details1.php?ID=<? echo $row['ID']; ?>"  class="btn  btn-theme-colored2    ">Register</a></li>

                </ul>
              </div>
            </div>
            </div>
                    
            
            
            <? }  ?>
          </div>
        </div>
      </div>
    </section><? } ?>


 
    <!-- Section: About -->
    <section>
      <div class="container pb-70">
        <div class="section-content">
          <div class="row">
            <div class="col-md-3">
              <img class="img-fullwidth maxwidth500" src="../logo.webp"  style="width:460px " alt="">
            </div>
            <div class="col-md-9">
              <h2 class="text-uppercasetext-theme-colored mt-0 mt-sm-30"><span class="text-theme-colored2"><?php echo $site_name_en; ?> </span></h2>
              <div class="double-line-bottom-theme-colored-2"></div>
              <p align="justify"> Taqat Accredited Training Institute was established in 2015 in Taif Governorate, and it is one of the official institutes approved by the Technical and Vocational Training Corporation. To push the wheel of economic development to achieve the Kingdom’s Vision 2030 and to empower young men and women through training and qualifying them for job opportunities that match their competencies and skills.  </p>
<a href="about.php?ID=54" class="btn btn-colored btn-theme-colored2 text-white btn-lg pl-40 pr-40 mt-15">Read More</a> 
 
            </div>
             
          </div>
        </div>
      </div>
    </section>

   <!-- Section: Features -->
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

    <!-- Divider: Why Choose Us -->
    <section id="reservation" class="parallax layer-overlay overlay-theme-colored-9" data-bg-img="../images/we-provide-bg.webp" data-parallax-ratio="0.4">
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

    <!-- Section: Team -->
    <section>
      <div class="container pb-50">
        <div class="section-content">
          <div class="row">
            <div class="col-md-6">
              <h3 class="text-uppercase line-bottom-theme-colored-2 mt-0 line-height-1"><i class="fa fa-calendar mr-10"></i> UPCOMING <span class="text-theme-colored2">EVENTS</span></h3>
               
             <?php
$CC=0;
$result=mysqli_query($conn,"select * from testimonial ORDER BY ID DESC limit 2 ");
while($row=mysqli_fetch_array($result))
{
$CC++;
 if($CC==1) $can="One";
 if($CC==2) $can="Two";
 if($CC==3) $can="Three";
?>              
              <article>
              	<div class="event-block">
	                <div class="event-date text-center">
	                  <ul class="text-white font-18 font-weight-600">
	                    <li class="border-bottom"><? echo $row['day']; ?></li>
	                    <li class=""><? $monthNum  = $row['mans'];  echo $monthName = date('M', mktime(0, 0, 0, $monthNum, 10));  ?></li>
	                  </ul>
	                </div>
	                <div class="event-meta border-1px pl-40">
	                  <div class="event-content pull-left flip">
	                    <h4 class="event-title media-heading font-roboto-slab font-weight-700 mr-30"><a href="testimonial.php?ID=<? echo $row['ID']; ?>"> <? echo substr($row['address_en'],0,100); ?></a></h4>
	                    <span class="mb-10 text-gray-darkgray mr-30"><i class="fa fa-clock-o mr-5 text-theme-colored2"></i> <? echo $row['time']; ?></span>
	                    
	                    <p class="mr-30"><? echo strip_tags(substr($row['news_en'],0,110)); ?></p>
	                  </div>
	                </div>
	              </div>
              </article>
              <? } ?>
            </div>
            <div class="col-md-6">
              <h3 class="text-uppercase line-bottom-theme-colored-2 line-height-1 mt-0 mt-sm-30"><i class="fa fa-question-circle-o mr-10"></i>  Training company services</h3>
              <div class="panel-group accordion-stylished-left-border accordion-icon-filled accordion-no-border accordion-icon-left accordion-icon-filled-theme-colored2" id="accordion6" role="tablist" aria-multiselectable="true">
                <div class="panel panel-default">
                  <div class="panel-heading" role="tab" id="headin1">
                    <h6 class="panel-title">
                      <a role="button" data-toggle="collapse" data-parent="#accordion6" href="#collaps1" aria-expanded="true" aria-controls="collaps1">
Training with employment
                      </a>
                    </h6>
                  </div>
                  <div id="collaps1" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headin1">
                    <div class="panel-body">
<p align="justify"> Preparing and qualifying all service and production organizations to obtain various types of ISO certificates in the sectors of hospitality services and training, starting from training the work team and preparing the complete system until obtaining the certificate.

                    </div>
                  </div>
                </div>
                
                
                <div class="panel panel-default">
                  <div class="panel-heading" role="tab" id="heading2">
                    <h6 class="panel-title">
                      <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion6" href="#collapse2" aria-expanded="false" aria-controls="collapse2">
Analyzing the training needs of companies                      </a>
                    </h6>
                  </div>
                  <div id="collapse2" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading2">
                    <div class="panel-body">
                    <p align="justify">We provide many needs assessments in different employment contexts where the work environment requires employees to be skilled in performing complex tasks in an efficient and cost-effective manner.


                    </div>
                  </div>
                </div>
                
                
                <div class="panel panel-default">
                  <div class="panel-heading" role="tab" id="heading3">
                    <h6 class="panel-title">
                      <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion6" href="#collapse3" aria-expanded="false" aria-controls="collapse3">
Administrative and educational courses                 </a>
                    </h6>
                  </div>
                  <div id="collapse3" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading3">
                    <div class="panel-body"><p align="justify">One cannot ignore or underestimate the many advantages of training courses, as they have become of great importance in self-improvement and the search for what is better and better.


                    </div>
                  </div>
                </div>
                
                
                
                <div class="panel panel-default">
                  <div class="panel-heading" role="tab" id="heading4">
                    <h6 class="panel-title">
                      <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion6" href="#collapse4" aria-expanded="false" aria-controls="collapse4">
Computer Courses                      </a>
                    </h6>
                  </div>
                  <div id="collapse4" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading4">
                    <div class="panel-body">
<p align="justify">
A group of specialized training solutions in the field of computer technology that suit the different training needs of its clients, including diplomas, courses and various qualification and development programs                    </div>
                  </div>
                </div>
                 
          </div>
        </div>
      </div>
    </section>
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
              <h2 class="text-uppercase title">QUALIFIED <span class="text-theme-colored2">TEACHERS</span></h2>              
              <p class="text-uppercase mb-0">WE HAVE HIGHLY QUALIFIED TEACHERS</p>
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
                <img class="img-fullwidth" alt="" src="../images/partners/<? echo $row['img']; ?>">
                <div class="team-overlay"></div>
                <ul class="styled-icons team-social icon-sm">
                  <li><a href="<? echo $row['facebook']; ?>"><i class="fa fa-facebook"></i></a></li>
                  <li><a href="<? echo $row['twitter']; ?>"><i class="fa fa-twitter"></i></a></li>
                  <li><a href="<? echo $row['instagram']; ?>"><i class="fa fa-instagram"></i></a></li>
                  <li><a href="<? echo $row['whatsapp']; ?>"><i class="fa fa-whatsapp"></i></a></li>
                </ul>
              </div>
              <div class="team-details">
                <h4 class=" font-weight-400  " ><? echo $row['name_en']; ?></h4>
                <h6 class="text-gray font-13 font-weight-400 line-bottom-centered mt-0"><? echo $row['job_en']; ?></h6>
                <p class="hidden-md"><? echo substr($row['details_en'],0,80); ?></p>
              </div>
            </div>
          </div>
          <? } ?>
        </div>
      </div>
    </section>
<? } ?>
    <!-- Section: Gallery -->
    

 


    <!-- Divider: Divider -->
    <section class="parallax divider layer-overlay overlay-theme-colored-9" data-bg-img="../images/we-provide-bg1.webp" data-parallax-ratio="0.4">
      <div class="container pt-60 pb-90">
        <div class="row">
          <div class="col-md-12 text-center">
            <h2 class="text-white text-uppercase font-46 font-weight-700 mb-10">E-learning and training programs</h2>
            <p class="font-16 text-white mb-20">
It helps to get results from others in the organization, and in a way they show a great ability to achieve results despite the challenges of time and scarce resources.    </p>
            <a href="https://www.youtube.com/watch?v=8nTKtGhn77g" data-lightbox-gallery="youtube-video"><i class="fa fa-play-circle text-theme-colored2 play-btn"></i></a>
          </div>
        </div>
      </div>
    </section>
    
    
    <!-- Divider: Testimonials -->
    <section class="bg-silver-deep">
      <div class="container pt-70 pb-30">
        <div class="section-title">
          <div class="row">
            <div class="col-md-12">
              <h2 class="text-uppercase title">Training <span class="text-theme-colored2"> Sectors</span></h2>              
              <p class="text-uppercase mb-0">Providing training and educational development, locally and regionally</p>
					  	<div class="double-line-bottom-theme-colored-2"></div>
						</div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12 mb-30">
            <div class="owl-carousel-2col boxed" data-dots="true">
              <div class="item">
                <div class="testimonial pt-10">
                  <div class="thumb pull-left flip mb-0 mr-0">
                    <img class="img-thumbnail img-circle" alt="" src="../images/blog-bg-4.webp" width="100"style="width:100px;height:100px" >
                  </div>
                  <div class="testimonial-content">
                    <h4 class="mt-10 font-16 mb-0"><span class="text-theme-colored2">computer</span></h4>
                    <h6 class="mt-0 font-weight-300">A group of specialized training solutions in the field of computer technology that suit the different training needs of its clients, including diplomas, courses and various qualification and development programs.</h6>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="testimonial pt-10">
                  <div class="thumb pull-left flip mb-0 mr-0">
                    <img class="img-thumbnail img-circle" alt="" src="../images/blog-bg-3.webp" width="100"style="width:100px;height:100px" >
                  </div>
                  <div class="testimonial-content">
                    <h4 class="mt-10 font-16 mb-0"><span class="text-theme-colored2">English language</span></h4>
                    <h6 class="mt-0 font-weight-300">Providing a distinguished high-quality academic program similar to those offered by the best international academies and transforming the department into a distinguished academy in effective teaching and training</h6>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="testimonial pt-10">
                  <div class="thumb pull-left flip mb-0 mr-0">
                    <img class="img-thumbnail img-circle" alt="" src="../images/blog-bg-2.webp" width="100"style="width:100px;height:100px" >
                  </div>
                  <div class="testimonial-content">
                    <h4 class="mt-10 font-16 mb-0"><span class="text-theme-colored2">Administrative and educational courses</span></h4>
                    <h6 class="mt-0 font-weight-300">One cannot ignore the many advantages of training courses or underestimate them, as they have become of great importance in self-improvement and the search for what is better and better.</h6>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="testimonial pt-10">
                  <div class="thumb pull-left flip mb-0 mr-0">
                    <img class="img-thumbnail img-circle" alt="" src="../images/blog-bg-1.webp" width="100"style="width:100px;height:100px" >
                  </div>
                  <div class="testimonial-content">
                    <h4 class="mt-10 font-16 mb-0"><span class="text-theme-colored2">Hospitality and hotel</span></h4>
                    <h6 class="mt-0 font-weight-300">This training diploma aims to introduce students to the concepts and principles of hotel management and the basic principles in dealing with guests, providing them with integrated hotel services, and applying administrative and technical procedures for hospitality.</h6>
                  </div>
                </div>
              </div>
            </div> 
          </div>
        </div>
      </div>
    </section>


    <!-- Section: blog -->
    <section id="blog">
      <div class="container pb-40">
        <div class="section-title">
          <div class="row">
            <div class="col-md-12">
              <h2 class="text-uppercase title">LATEST <span class="text-theme-colored2">NEWS</span></h2>              
              <p class="text-uppercase mb-0">professional Latest News</p>
					  	<div class="double-line-bottom-theme-colored-2"></div>
						</div>
          </div>
        </div>
        <div class="section-content">
          <div class="row">
            <div class="col-md-12">
              <div class="owl-carousel-3col owl-nav-top" data-nav="true">
                 
                 
                                      <?php
$C=0;
$result=mysqli_query($conn,"select * from news ORDER BY ID DESC  ");
while($row=mysqli_fetch_array($result))
{
$C++;
?>                 <div class="item">
                  <article class="post clearfix mb-30">
                    <div class="entry-header">
                      <div class="post-thumb thumb"> 
                        <img src="../news/<? echo $row['photo']; ?>"  style="width:372px;height:246px" alt="" class="img-responsive img-fullwidth"> 
                      </div>                    
                      <div class="entry-date media-left text-center flip bg-theme-colored border-top-theme-colored2-3px pt-5 pr-15 pb-5 pl-15">
                        <ul>
                          <li class="font-16 text-white font-weight-600"><? echo $row['day']; ?></li>
                          <li class="font-12 text-white text-uppercase"><? $monthNum  = $row['mans'];  echo $monthName = date('M', mktime(0, 0, 0, $monthNum, 10));  ?></li>
                        </ul>
                      </div>
                    </div>
                    <div class="entry-content p-15">
                      <div class="entry-meta media no-bg no-border mt-0 mb-10">
                        <div class="media-body pl-0">
                          <div class="event-content">
                            <h4 class="entry-title text-white text-uppercase font-weight-600 m-0 mt-5"><a href="news.php?ID=<? echo $row['ID']; ?>"><? echo  strip_tags(substr($row['address_en'],0,60)); ?> </a></h4>
                            <ul class="list-inline">
                              <li><i class="fa fa-user-o ml-5 text-theme-colored2"></i>By professional</li>
                              <li><i class="fa fa-thumbs-o-up ml-5 text-theme-colored2"></i>Likes</li>
                              <li><i class="fa fa-share-alt ml-5 text-theme-colored2"></i> 895 Likes</li>
                            </ul>
                          </div>
                        </div>
                      </div>
                      <p class="mt-5"><? echo strip_tags(substr($row['news_en'],0,250)); ?></p>
											<a class="btn btn-default btn-flat font-12 mt-10 ml-5" href="news.php?ID=<? echo $row['ID']; ?>">Read More</a>
                    </div>
                  </article>
                </div>
                
                <? } ?>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Divider: Clients -->
    <section class="clients bg-theme-colored2">
      <div class="container pt-10 pb-10">
        <div class="row">
          <div class="col-md-12">
            <!-- Section: Clients -->
            <div class="owl-carousel-6col clients-logo transparent text-center">
<?php
$result=mysqli_query($conn,"select * from partners ORDER BY RAND()");
while($row=mysqli_fetch_array($result))
{
?> 
<div class="item"> <a href="#">
	<img src="../images/partners/<? echo $row['Partners']; ?>" alt=""/  style="width:200px;height:120px"></a></div>
<?php } ?>            
            </div>
          </div>
        </div>
      </div>
    </section>
  <!-- end main-content -->
  </div>

    <!-- Section: Gallery -->
    

    <!-- Divider: Divider -->
    

    <!-- Section: Pricing -->
    

    <!-- Divider: Testimonials -->
    

    <!-- Section: blog -->
    

    <!-- Divider: Clients -->
    
  <!-- end main-content -->
  </div>
  <!-- Footer -->
  <footer id="footer" class="footer divider layer-overlay overlay-dark-9" data-bg-img="../images/we-provide-bg.webp">
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

<!-- SLIDER REVOLUTION 5.0 EXTENSIONS  
      (Load Extensions only on Local File Systems ! 
       The following part can be removed on Server for On Demand Loading) -->
<script type="text/javascript" src="../js/revolution-slider/js/extensions/revolution.extension.actions.min.js"></script>
<script type="text/javascript" src="../js/revolution-slider/js/extensions/revolution.extension.carousel.min.js"></script>
<script type="text/javascript" src="../js/revolution-slider/js/extensions/revolution.extension.kenburn.min.js"></script>
<script type="text/javascript" src="../js/revolution-slider/js/extensions/revolution.extension.layeranimation.min.js"></script>
<script type="text/javascript" src="../js/revolution-slider/js/extensions/revolution.extension.migration.min.js"></script>
<script type="text/javascript" src="../js/revolution-slider/js/extensions/revolution.extension.navigation.min.js"></script>
<script type="text/javascript" src="../js/revolution-slider/js/extensions/revolution.extension.parallax.min.js"></script>
<script type="text/javascript" src="../js/revolution-slider/js/extensions/revolution.extension.slideanims.min.js"></script>
<script type="text/javascript" src="../js/revolution-slider/js/extensions/revolution.extension.video.min.js"></script>

</body>
</html>