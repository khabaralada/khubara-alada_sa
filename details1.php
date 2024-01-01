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
	   	    $iqama= mysqli_real_escape_string($conn,htmlspecialchars($_POST['iqama'], ENT_QUOTES, "utf-8")); 
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
?><meta http-equiv="refresh" content="0;url=payments.php?order_ID=<?php echo $last_id; ?> "><?
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


?><meta http-equiv="refresh" content="0;url=payments.php?order_ID=<?php echo $no; ?> "><?
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
<html dir="rtl" lang="en">
<head>
 <script type="text/javascript" src="jquery.js"></script>


<script type="text/javascript">
function fetch_select1(val)
{
   $.ajax({
     type: 'post',
     url: 'fetch_data1.php',
     data: {
       get_option:val
     },
     success: function (response) {
       document.getElementById("new_select1").innerHTML=response; 
     }
   });
}

 


</script>

<!-- Meta Tags -->
<meta name="viewport" content="width=device-width,initial-scale=1.0"/>
<meta http-equiv="content-type" content="text/html; charset=UTF-8"/>
<meta name="description" content="Learnpro - التعليم University School Kindergarten Learning HTML Template" />
<meta name="keywords" content="التعليم,school,university,التعليمal,learn,learning,teaching,workshop" />
<meta name="author" content="ThemeMascot" />

<!-- Page Title -->
<title><?php echo $site_name; ?></title>    <script src="https://www.google.com/recaptcha/enterprise.js?render=<?php echo $sitKey; ?>"></script>
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
 

    <!-- Section: Courses -->
    
<section>
      <div class="container mt-30 mb-30 pt-30 pb-30">
        <div class="row">
        <?
 $ss= mysqli_real_escape_string($conn,htmlspecialchars(intval($_GET['ID']), ENT_QUOTES, "utf-8")); 
$result=mysqli_query($conn,"select* from subjects,cors
 where cors.cors_ID=subjects.cors_ID  and cors.ID='$ss' ");
$rows=mysqli_num_rows($result) ; 
if($rows > 0 )
{
while($row=mysqli_fetch_array($result))
{
 $Title=$row['cors_name'];
 $show_reg=$row['show_reg'];
?>   
 <div class="col-md-8">

            <div class="single-service">
                      <ul class="list-inline mb-15">
                 
                <li>
                  <i class="pe-7s-ribbon text-theme-colored2 font-40"></i>
                  <div class="pull-right ml-5">
                    <span>التصنيف</span>
                    <h5 class="mt-0"> <? echo $row['cors']; ?></h5>
                  </div>
                </li>
                <li>
                  <? if( $row['price']>0) { ?>  <i class="pe-7s-cash text-theme-colored2 font-40"></i>
                  <div class="pull-right ml-10">
                    <span>حضوري</span>
                    <h5 class="mt-0"><? echo $price1=$row['price']; ?> ريال</h5>
                  </div>
                </li><?php } ?>
                
                 
                
                
               <? if( $row['price1']>0) { ?>  
                <li>
                  <i class="pe-7s-id  text-theme-colored2 font-40"></i>
                  <div class="pull-right ml-10" style="width: 87px; height: 63px">
                    <span>اونلاين</span>
                    <h5 class="mt-0"><? echo $price2=$row['price1']; ?> ريال</h5>
                  </div>
                </li><?php } ?>

              </ul>
              
              <?
              
              if($row['photo']!="") {
              
              $imagePath = "stus/cors_files/".$row['photo'];
if(!file_exists($imagePath) or $row['photo']=="")
    $imagePath = "images/portfolio/default.jpg";
    else
              $imagePath = "stus/cors_files/".$row['photo'];
    ?>
              <img  alt="" src="<? echo $imagePath ; ?>" style="width:100%"><?php } ?>
                
                
 
        
                
                
                
              <h3 class="text-uppercase mt-30 mb-10"><? echo $row['cors_name']; ?></h3>
              <div class="double-line-bottom-theme-colored-2 mt-10"></div>
              <p><? echo  $row['short_desc_ar'] ; ?></p>
              
                            <h3 class="text-uppercase mt-30 mb-10">محتوى البرنامج المفتوح </h3>
              <div class="double-line-bottom-theme-colored-2 mt-10"></div>


              <h3 class="text-uppercase mt-30 mb-10"><a href="stus/cors_files/<? echo $row['cors_files']; ?>">اضغط هنا استعراض وتحميل المحتوى المفتوح </a></h3>




 <div id="grid" class="gallery-isotope default-animation-effect grid-3 gutter clearfix">
               
<?php
	    $ss= mysqli_real_escape_string($conn,htmlspecialchars(intval($_GET['ID']), ENT_QUOTES, "utf-8")); 

//$query1 = "select * from video_cors where cors_ID='$row[cors_ID]'limit 6 ";
$result1 = mysqli_query($conn,$query1);
while($row1=mysqli_fetch_array($result1))
{
?> 
<div class="gallery-item photography">
                  <div class="thumb">
                    <img class="img-fullwidth" src="v.jpg" alt="project"><?php echo $row1['video_cors']; ?>
                    <div class="overlay-shade"></div>
                    <div class="icons-holder">
                      <div class="icons-holder-inner">
                        <div class="styled-icons icon-sm icon-dark icon-circled icon-theme-colored">
                          <a class="popup-youtube" href="<? echo $row1['video_title']; ?>"><i class="fa fa-youtube-play"></i></a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
 <? } ?>
                
                <!-- Portfolio Item Start -->
                 
                <!-- Portfolio Item End -->

                <!-- Portfolio Item Start -->
                 
                <!-- Portfolio Item End -->

                <!-- Portfolio Item Start -->
                
                <!-- Portfolio Item End -->

                <!-- Portfolio Item Start -->
                 
                <!-- Portfolio Item End -->

                <!-- Portfolio Item Start -->
                 
                <!-- Portfolio Item End -->

                <!-- Portfolio Item Start -->
                 
                <!-- Portfolio Item End -->

                <!-- Portfolio Item Start -->
                 
                <!-- Portfolio Item End -->
                
                <!-- Portfolio Item Start -->
                 
                <!-- Portfolio Item End -->
              </div>
              <ul id="myTab" class="nav nav-tabs mt-30">
                <li class="active"><a href="#tab1" data-toggle="tab">التفاصيل</a></li>
                <li><a href="#tab2" data-toggle="tab">معلومات الدورة</a></li>
                <li><a href="#tab3" data-toggle="tab">المدرب</a></li>
 
 
              </ul>
              <div id="myTabContent" class="tab-content">
                <div class="tab-pane fade in active" id="tab1">
                  <h4 class="line-bottom-theme-colored-2 mb-15">تفاصيل الدورة</h4>
                  <img  alt="" src="stus/cors_files/<? echo $row['photo1'] ; ?>" style="width:100%">

                  <p><? echo  $row['word'] ; ?></p>
 
                   
                </div>
                <div class="tab-pane fade" id="tab2">
                  <h4 class="line-bottom-theme-colored-2 mb-15">معلومات الدورة</h4>
                  <ul class="course-info-list font-14 mt-20">
                    <li>
                      <span class="course-info-title">
                      <i class="pe-7s-date font-26 vertical-align-middle text-theme-colored2 mr-10"></i> تاريخ بداية الدورة  :</span>
                      <span class="course-info-details"><? echo $row['start_date_en']; ?></span>
                    </li>
                    <li>
                      <span class="course-info-title">
                      <i class="pe-7s-timer font-26 vertical-align-middle text-theme-colored2 mr-10"></i> مدة الدورة  :</span>
                      <span class="course-info-details"><? echo $row['contact_hours']; ?></span>
                    </li>
                     <li>
                      <span class="course-info-title">
                      <i class="pe-7s-timer font-26 vertical-align-middle text-theme-colored2 mr-10"></i> ساعات الدورة:</span>
                      <span class="course-info-details"><? echo $row['credits']; ?></span> 
                    </li>

                    <li>
                      <span class="course-info-title">
                      <i class="pe-7s-umbrella font-26 vertical-align-middle text-theme-colored2 mr-10"></i> عدد المقاعد:</span>
                      <span class="course-info-details"><? echo $row['size']; ?></span> 
                    </li>
                    <li>
                      <span class="course-info-title">
                      <i class="pe-7s-note2 font-26 vertical-align-middle text-theme-colored2 mr-10"></i> ايام الدراسة  :</span>
                      <span class="course-info-details">من    <?
include ("conn.php");
$query5 = "select * from days   where  days_ID='$row[day1]'  ";
$result5 = mysqli_query($conn,$query5);
while($row5=mysqli_fetch_array($result5))
{   echo $row5['day']; } ?>	 

 الي <?
include ("conn.php");
$query5 = "select * from days   where  days_ID='$row[day2]'  ";
$result5 = mysqli_query($conn,$query5);
while($row5=mysqli_fetch_array($result5))
{   echo $row5['day']; } ?>	</span>
                    </li>
                    <li>
                      <span class="course-info-title">
                      <i class="pe-7s-alarm font-26 vertical-align-middle text-theme-colored2 mr-10"></i> وقت الدورة :</span>
                      <span class="course-info-details"><? echo $row['time1']; ?> - <? echo $row['time2']; ?></span>
                    </li>
                     
                     <li>
                      <span class="course-info-title">
                      <i class="pe-7s-user font-26 vertical-align-middle text-theme-colored2 mr-10"></i> فترة التدريب:</span>
                      <span class="course-info-details">  <? echo $row['cors_time']; ?> </span>
                    </li>

                     
                     <li>
                      <span class="course-info-title">
                      <i class="pe-7s-alarm font-26 vertical-align-middle text-theme-colored2 mr-10"></i> نوع التدريب:</span>
                      <span class="course-info-details"> <? echo $row['cors_online']; ?> </span>
                    </li>


                  </ul>
                </div>
                <div class="tab-pane fade" id="tab3">
                  <h4 class="line-bottom-theme-colored-2 mb-20">مدربين الدورة</h4>
                  <div class="row">
                   
                 <?
$result1=mysqli_query($conn,"select* FROM user where ID='$row[traning_name]'");
while($row1=mysqli_fetch_array($result1))
{
?> <div class="col-md-12">
<?
if($row1['image']!="") { ?>
 <img src="stus/dist/img/<? echo $row1[image]; ?>" style="height:200px" alt="<? echo $row1[name]; ?>"  >
 <? } else { ?>  
            
                        <? if($row1['Branches']==3) { ?><img src="stus/dist/img/avatar2.png"   style="height:200px"   alt="<? echo $row1[name]; ?>"/><? } else { ?>
            <img src="stus/dist/img/avatar5.png"   style="height:200px"   alt="<? echo $row1[name]; ?>"/>
            <? } }?>



                      <img src="stus/emp/<? echo $row1['image']; ?>"   style="height:200px" alt=""  >
                      <h5 class="mb-0"><? echo $row1['name']; ?></h5>
                     <?  echo $row1['job_ar']; ?>
                      <p class="hidden-md"><? echo nl2br($row1['details_ar']); ?></p>

                                         </div><? } ?>  
                  </div>
                </div>
                 
                 
              </div>
 
            </div>
          </div><? }} ?>
         
		 <div class="col-sm-12 col-md-4">
            <div class="sidebar sidebar-left mt-sm-30 ml-30 ml-sm-0">
              
               <? if($show_reg==1) { ?>
              <div class="widget border-1px bg-silver-deep p-15">
                <h4 class="widget-title line-bottom-theme-colored-2">التسجيل بالدورة</h4>
                               <?php if(isset($message)) echo $message;  ?> 

       <form id="quick_contact_form_sidebar" name="footer_quick_contact_form" class="quick-contact-form" action="" method="post">
                  <div class="form-group">
                  <input   class="form-control" type="hidden"  name='cors'  value="<? echo $ss; ?>"  required="">
                   <input   class="form-control" type="text"  name='fullname' placeholder="الاسم" required="">
                  </div>
                  
                  
                  <div class="form-group">
<input placeholder="الهوية الوطنية"  required  pattern="[0-9]{10,10}"    title="الحقل يجب ان يحتوي علي رقم فقط ويحتوي علي 10 ارقام"  name="iqama" class="form-control" type="text"  >
</div>




                  <div class="form-group">
                   <input  class="form-control required email" type="email"placeholder="البريد الالكتروني"  name="email" >                  </div>

<div class="form-group">
                  <input placeholder="وسيلة الاتصال"  required   pattern="[0]{1}[5]{1}[0-9]{8}"   title="الحقل يجب ان يحتوي علي رقم فقط ويحتوي علي 10 ارقام يبدء 05xxxxxxxx"  name="phone" class="form-control" type="text"  >

                  </div>



<div class="form-group">
<select id="online" name="reg_price" class="form-control" required="">
<option value=''>نوع التدريب</option>
                        <? if( $price1>0) { ?>  <option value="<? echo $price1; ?>">حضوري ( <? echo $price1; ?> )ريال</option><?php } ?>
                        <? if( $price2>0) { ?>  <option value="<? echo $price2; ?>">اونلاين ( <? echo $price2; ?> )ريال</option><?php } ?>

                        </select>
</div>




 

 
<input placeholder="الجنسية" type=hidden  value='سعودي' required  name="nat" class="form-control" type="text"  >
<input placeholder="الجنسية" type=hidden  value='جامعي' required  name="qualification" class="form-control" type="text"  >
 


                  
                  
                  <div class="form-group">
                                        <input  type=hidden name="message" class="form-control"     placeholder="الملاحظات والاستفسارات ان وجد" > 
                      <div class="g-recaptcha" data-sitekey="<?php echo $sitKey; ?>" align="center"></div>

                  </div>
                  <div class="form-group">
                    <input name="form_botcheck" class="form-control" type="hidden" value="" />
                    <button type="submit" name="contact"  class="btn btn-colored btn-theme-colored2    " >ادفع الآن</button>
                  </div>
                </form>

                <!-- Quick Contact Form Validation-->
                
              </div><? } ?>
              
               
              <div class="widget border-1px bg-silver-deep p-15">
                <h4 class="widget-title line-bottom-theme-colored-2 mb-10">الدورات التدريبية</h4>
                <div class="categories">
                  <ul class="list-border">
                <?
  
 
$result=mysqli_query($conn,"select* from subjects,cors
 where cors.cors_ID=subjects.cors_ID and  show_reg=1   order by rand() limit 8 ");
$rows=mysqli_num_rows($result) ; 
if($rows > 0 )
{
while($row=mysqli_fetch_array($result))
{

?>  
<li><a href="details1.php?ID=<? echo $row['ID']; ?>"><? echo $row['cors_name']; ?></a></li>
<? }} ?>
                  </ul>
                </div>
              </div>
            </div>
          </div>
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