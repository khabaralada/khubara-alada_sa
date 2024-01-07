<?php include("config.php");
$query9 = "select * from web_settings";
$result9 = mysqli_query($conn, $query9);
while ($row9 = mysqli_fetch_array($result9)) {
  $site_name = $row9['site_name'];
  $site_name_en = $row9['site_name_en'];
  $site_mobile = $row9['site_mobile'];
  $site_email = $row9['site_email'];
  $site_address = $row9['site_address'];
  $site_address_en = $row9['site_address_en'];
  $site_url = $row9['site_url'];
  $secretKey = $row9['secretKey'];
  $sitKey = $row9['sitKey'];
  $site_map = $row9['site_map'];
}


?>
<?
$webmaster_email = $site_email;; //بريد ادارة الموقع
?>

<?php
require_once('include/phpmailer/PHPMailerAutoload.php');

if (isset($_POST['contact'])) {

  if (isset($_POST['g-recaptcha-response'])) {
    $captcha = $_POST['g-recaptcha-response'];
  }


  if (!$captcha) {
    echo '<h2>Please check the the captcha form.<br>You must choose I am not a robot<br>يجب اختيار أنا لست روبوتًا</h2>';
    exit;
  }


  $secretKey = "<?php echo $secretKey; ?>";
  $ip = $_SERVER['REMOTE_ADDR'];
  $response = file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret=" . $secretKey . "&response=" . $captcha . "&remoteip=" . $ip);
  $responseKeys = json_decode($response, true);
  if ($responseKeys["success"]) {
    echo '<h2>You are spammer ! Get the @$%K out</h2>';
  } else {



    $name = mysqli_real_escape_string($conn, htmlspecialchars($_POST['fullname'], ENT_QUOTES, "utf-8"));
    $phone = mysqli_real_escape_string($conn, htmlspecialchars($_POST['phone'], ENT_QUOTES, "utf-8"));
    $cors = mysqli_real_escape_string($conn, htmlspecialchars($_POST['cors'], ENT_QUOTES, "utf-8"));
    $message1 = mysqli_real_escape_string($conn, htmlspecialchars($_POST['message'], ENT_QUOTES, "utf-8"));
    $company = mysqli_real_escape_string($conn, htmlspecialchars($_POST['company'], ENT_QUOTES, "utf-8"));
    $email = mysqli_real_escape_string($conn, htmlspecialchars($_POST['email'], ENT_QUOTES, "utf-8"));
    $iqama = mysqli_real_escape_string($conn, htmlspecialchars($_POST['iqama'], ENT_QUOTES, "utf-8"));
    $nat = mysqli_real_escape_string($conn, htmlspecialchars($_POST['nat'], ENT_QUOTES, "utf-8"));
    $qualification = mysqli_real_escape_string($conn, htmlspecialchars($_POST['qualification'], ENT_QUOTES, "utf-8"));
    $reg_price = mysqli_real_escape_string($conn, htmlspecialchars($_POST['reg_price'], ENT_QUOTES, "utf-8"));


    $result = mysqli_query($conn, "select* from subjects,cors where cors.cors_ID=subjects.cors_ID AND cors.ID='$cors'");
    while ($row = mysqli_fetch_array($result)) {
      $cors1 = $row['cors_name'];
      $cors_ID1 = $row['cors_ID'];
    }


    $message = "\nالاسم    : " . $name . '<br>';
    $message .= "\nالجوال   : " . $phone . '<br>';
    $message .= "\n   : " . $cors1 . '<br>';
    $message .= "\nالبريد الالكتروني   : " . $email . '<br>';
    $message .= "\nالهوية الوطنية   : " . $iqama . '<br>';
    $message .= "\nالجنسية   : " . $nat . '<br>';
    $message .= "\nالمؤهل: " . $qualification . '<br>';

    $message .= $message1 . '<br>';
    $message .= "\n<center>نشكرك على تواصلك مع " . $site_name . "<br>تم استلام طلبك  وسوف يتم الرد عليك<br>نتمنى لكم دوام الصحة والعافية</center>";
    $message .= "<<center><img src=" . $site_url . "/logo.png height=70px></center>";
    $to =  $site_email;;

    $headers  = 'MIME-Version: 1.0' . "\r\n";
    $headers .= 'Content-type: text/html; charset=utf-8' . "\r\n";
    $subject = 'طلب الالتحاق بدورة جديدة';

    // Additional headers
    $name1 = $site_name;

    $headers .= 'To: ' . $name . ' <' . $email . '>' . "\r\n";
    $headers .= 'From:' . $name1 . ' <' . $site_email . '>' . "\r\n";


    // @mail($to, $subject, $message, $headers);  


    $sql = "insert into reg_cors set  name='$name',mobile='$phone',eqt='$message1',dates=CURDATE(),address='$cors',mail='$email',iqama='$iqama',nat='$nat',
	    qualification='$qualification',reg_price='$reg_price'";
    if (mysqli_query($conn, $sql)) {
      $last_id = mysqli_insert_id($conn);
      //echo "<script language='javascript'>window.alert('تم التسجيل بنجاح')</script>";
?>
      <meta http-equiv="refresh" content="0;url=payments.php?order_ID=<?php echo $last_id; ?> "><?
                                                                                                //$message = "<div class='success'>تم ارسال طلب الالتحاق بالدورة بنجاح</div>";
                                                                                              }

                                                                                              $sql = "update   reg_cors set  name='$name',mobile='$phone',eqt='$message1',dates=CURDATE(),address='$cors',mail='$email',iqama='$iqama',nat='$nat',
	    qualification='$qualification',reg_price='$reg_price' where iqama='$iqama' and address='$cors'";
                                                                                              if (mysqli_query($conn, $sql)) {


                                                                                                $query111 = "SELECT no  FROM reg_cors where  iqama='$iqama' and address='$cors'";
                                                                                                $result111 = mysqli_query($conn, $query111);
                                                                                                while ($row111 = mysqli_fetch_array($result111)) {
                                                                                                  $no = $row111['no'];
                                                                                                  $last_id = $row111['no'];
                                                                                                }


                                                                                                ?>
      <meta http-equiv="refresh" content="0;url=payments.php?order_ID=<?php echo $no; ?> "><?
                                                                                              }




                                                                                              $query11 = "SELECT count(user_ID)+cou,ID  FROM user_crm left  JOIN user_cors on user_crm.ID=user_cors.user_ID
where  acount_type=2  and Activation=1 and stop=0 and ID in (select user_ID from user_course where cors_ID='$cors_ID1') GROUP by ID  ORDER by count(user_ID)+cou ASC limit 1";
                                                                                              $result11 = mysqli_query($conn, $query11);
                                                                                              while ($row11 = mysqli_fetch_array($result11)) {
                                                                                                $user_ID = $row11['ID'];


                                                                                                date_default_timezone_set('asia/riyadh');
                                                                                                $time = date('H:i:s');




                                                                                                $sql = "insert into user_cors set  cors_ID='$last_id',user_ID='$user_ID',time='$time',date=CURDATE()";
                                                                                                if (mysqli_query($conn, $sql)) {
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
    function fetch_select1(val) {
      $.ajax({
        type: 'post',
        url: 'fetch_data1.php',
        data: {
          get_option: val
        },
        success: function(response) {
          document.getElementById("new_select1").innerHTML = response;
        }
      });
    }
  </script>

  <!-- Meta Tags -->
  <meta name="viewport" content="width=device-width,initial-scale=1.0" />
  <meta http-equiv="content-type" content="text/html; charset=UTF-8" />
  <meta name="description" content="Learnpro - التعليم University School Kindergarten Learning HTML Template" />
  <meta name="keywords" content="التعليم,school,university,التعليمal,learn,learning,teaching,workshop" />
  <meta name="author" content="ThemeMascot" />

  <!-- Page Title -->
  <title><?php echo $site_name; ?></title>
  <script src="https://www.google.com/recaptcha/enterprise.js?render=<?php echo $sitKey; ?>"></script>
  <script>
    grecaptcha.enterprise.ready(function() {
      grecaptcha.enterprise.execute('<?php echo $sitKey; ?>', {
        action: 'login'
      }).then(function(token) {});
    });
  </script>
  <script src='https://www.google.com/recaptcha/api.js'></script>

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
  <link href="css/css-plugin-collections.css" rel="stylesheet" />
  <!-- CSS | menuzord megamenu skins -->
  <link href="css/menuzord-megamenu.css" rel="stylesheet" />
  <link id="menuzord-menu-skins" href="css/menuzord-skins/menuzord-border-bottom.css" rel="stylesheet" />
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
  <link href="js/revolution-slider/css/settings.css" rel="stylesheet" type="text/css" />
  <link href="js/revolution-slider/css/layers.css" rel="stylesheet" type="text/css" />
  <link href="js/revolution-slider/css/navigation.css" rel="stylesheet" type="text/css" />

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
    * {

      font-family: Droid Arabic Kufi;
    }

    .mobileHide {
      display: inline;
    }

    /* Smartphone Portrait and Landscape */
    @media only screen and (min-device-width : 320px) and (max-device-width : 480px) {
      .mobileHide {
        display: none;
      }
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

  <a href="https://wa.me/<?php echo $site_mobile; ?>?text=<?php echo $site_name; ?>%0D%0Aالسلام عليكم ورحمه الله وبركاته" class="whatsapp_float" target="_blank" rel="noopener noreferrer">
    <i class="fa fa-whatsapp whatsapp-icon"></i>
  </a>
  <div id="wrapper" class="clearfix">
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
            $result = mysqli_query($conn, "select* from media");
            while ($row = mysqli_fetch_array($result)) {
              $facebook = $row['facebook'];
              $twitter = $row['twitter'];
              $instagram = $row['instagram'];
              $youtube = $row['youtube'];
              $linked = $row['linked'];
              $whatsapp = $row['whatsapp'];
              $tiktok = $row['tiktok'];
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
                  <li><a target="_blank" href="<? echo $tiktok; ?>"><svg xmlns="http://www.w3.org/2000/svg" height="13" width="13" viewBox="0 0 448 512"><!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
                        <path fill="#ffffff" d="M448 209.9a210.1 210.1 0 0 1 -122.8-39.3V349.4A162.6 162.6 0 1 1 185 188.3V278.2a74.6 74.6 0 1 0 52.2 71.2V0l88 0a121.2 121.2 0 0 0 1.9 22.2h0A122.2 122.2 0 0 0 381 102.4a121.4 121.4 0 0 0 67 20.1z" />
                      </svg></a></li>

                </ul>
              </div>
            </div>

            <div class="col-md-6">

            </div>
            <div class="col-md-2">
              <ul class="list-inline sm-pull-none sm-text-center text-right text-white mb-sm-20 mt-10">
                <li class="m-0 pl-10"> <a href="wp" class="text-white "><i class="fa fa-user-o mr-5 text-white"></i> CRM </a> </li>
                <li class="m-0 pl-0 pr-10">
                  <ul>
                    <li><a href="#" title="" class="dropdown-toggle text-white" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                        <img src="images/flag-ar.png" alt="" />
                        AR</a>
                      <ul class="dropdown-menu">
                        <li><a href="en" title=""><img src="images/flag-1.png" alt="" />
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
          <div class="row ">
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
                $result2 = mysqli_query($conn, "select * from mune where timer1=0 or timer1=1 order by ID ASC");
                while ($row2 = mysqli_fetch_array($result2)) {
                  $m_ID = $row2['ID'];
                  if ($row2['up'] == 1) { ?>
                    <li><a href="#home"><? echo $row2['mune']; ?></a>
                      <ul class="dropdown">
                        <?
                        $result22 = mysqli_query($conn, "select * from sub where m_ID='$m_ID' order by sort1 ASC");
                        while ($row22 = mysqli_fetch_array($result22)) {
                        ?>
                          <? if ($row22['type'] == 1) { ?><li><a href="about.php?ID=<? echo $row22['sub_ID']; ?>"><? echo $row22['sub']; ?></a></li> <? } ?>
                          <? if ($row22['type'] == 2) { ?><li><a href="image.php?ID=<? echo $row22['sub_ID']; ?>"><? echo $row22['sub']; ?></a></li> <? } ?>
                          <? if ($row22['type'] == 3) { ?><li><a href="video.php?ID=<? echo $row22['sub_ID']; ?>"><? echo $row22['sub']; ?></a></li> <? } ?>
                          <? if ($row22['type'] == 4) { ?><li><a href="<? echo $row22['url']; ?>"><? echo $row22['sub']; ?></a></li> <? } ?>
                          <? if ($row22['type'] == 5) { ?><li><a href="research.php"><? echo $row22['sub']; ?></a></li> <? } ?>
                          <? if ($row22['type'] == 10) { ?><li><a href="articles.php"><? echo $row22['sub']; ?></a></li> <? } ?>
                          <? if ($row22['type'] == 6) { ?><li><a href="page3.php?ID=<? echo $row22['sub_ID']; ?>"><? echo $row22['sub']; ?></a></li> <? } ?>
                          <? if ($row22['type'] == 7) { ?><li><a href="page4.php?ID=<? echo $row22['sub_ID']; ?>"><? echo $row22['sub']; ?></a></li> <? } ?>
                        <? } ?>
                      </ul>
                    </li>
                  <?
                  } else {
                  ?>
                    <li><a href="mune_about.php?ID=<? echo $row2['ID']; ?>"><? echo $row2['mune']; ?></a></li>
                <? }
                } ?>
                <li><a href="contact.php">اتصل بنا</a></li>








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
      <!-- Section: home -->
      <section id="home">
        <div class="container-fluid p-0">

          <!-- START REVOLUTION SLIDER 5.0.7 -->
          <div id="rev_slider_home_wrapper" class="rev_slider_wrapper" data-alias="news-gallery34" style="margin:0px auto; background-color:#ffffff; padding:0px; margin-top:0px; margin-bottom:0px;">
            <!-- START REVOLUTION SLIDER 5.0.7 fullwidth mode -->
            <div id="rev_slider_home" class="rev_slider fullwidthabanner" style="display:none;" data-version="5.0.7">
              <ul>
                <!-- SLIDE 1 -->
                <li data-index="rs-1" data-transition="fade" data-slotamount="default" data-easein="default" data-easeout="default" data-masterspeed="default" data-thumb="images/slide-bg-1.jpg" data-rotate="0" data-fstransition="fade" data-saveperformance="off" data-title="Web Show" data-description="">
                  <!-- MAIN IMAGE -->
                  <img src="images/slide-bg-1.jpg" alt="" data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" data-bgparallax="10" class="rev-slidebg" data-no-retina>
                  <!-- LAYERS -->
                  <!-- LAYER NR. 1 -->
                  <div class="tp-caption tp-shape tp-shapewrapper tp-resizeme rs-parallaxlevel-0 bg-theme-colored-transparent-4" id="slide-1-layer-1" data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" data-y="['middle','middle','middle','middle']" data-voffset="['0','0','0','0']" data-width="full" data-height="full" data-whitespace="normal" data-transform_idle="o:1;" data-transform_in="opacity:0;s:1500;e:Power3.easeInOut;" data-transform_out="opacity:0;s:1000;e:Power3.easeInOut;s:1000;e:Power3.easeInOut;" data-start="500" data-basealign="slide" data-responsive_offset="on" style="z-index: 5;background-color:rgba(0, 0, 0, 0.35);border-color:rgba(0, 0, 0, 1.00);">
                  </div>
                  <!-- LAYER NR. 2 -->
                  <div class="tp-caption tp-resizeme rs-parallaxlevel-0 text-white text-uppercase font-roboto-slab font-weight-700" id="slide-1-layer-2" data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" data-y="['top','top','top','top']" data-voffset="['195','195','160','170']" data-fontsize="['58','48','42','36']" data-lineheight="['70','60','50','45']" data-fontweight="['800','700','700','700']" data-textalign="['center','center','center','center']" data-width="['700','650','600','420']" data-height="none" data-whitespace="normal" data-transform_idle="o:1;" data-transform_in="y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;s:1500;e:Power3.easeInOut;" data-transform_out="auto:auto;s:1000;e:Power3.easeInOut;" data-mask_in="x:0px;y:0px;s:inherit;e:inherit;" data-mask_out="x:0;y:0;s:inherit;e:inherit;" data-start="600" data-splitin="none" data-splitout="none" data-responsive_offset="on" style="z-index: 5; white-space: nowrap; font-weight:700;">لماذا نحن
                  </div>
                  <!-- LAYER NR. 3 -->
                  <div class="tp-caption tp-resizeme text-white rs-parallaxlevel-0" id="slide-1-layer-3" data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" data-y="['top','top','top','top']" data-voffset="['275','260','220','220']" data-fontsize="['16','16',18',16']" data-lineheight="['24','24','24','24']" data-fontweight="['400','400','400','400']" data-textalign="['center','center','center','center']" data-width="['800','650','600','460']" data-height="none" data-whitespace="nowrap" data-transform_idle="o:1;" data-transform_in="y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;s:1500;e:Power3.easeInOut;" data-transform_out="auto:auto;s:1000;e:Power3.easeInOut;" data-mask_in="x:0px;y:0px;s:inherit;e:inherit;" data-mask_out="x:0;y:0;s:inherit;e:inherit;" data-start="700" data-splitin="none" data-splitout="none" data-responsive_offset="on" style="z-index: 5; white-space: nowrap;">تتمحور أهدافنا حول الطالب ، الثقة ، الإيمان بالعمل الجماعي التناغم ، النمو البناء ، النمو المربح و الابتكار </div>
                  <!-- LAYER NR. 4 -->
                  <div class="tp-caption rs-parallaxlevel-0" id="slide-1-layer-4" data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" data-y="['top','top','top','top']" data-voffset="['350','330','290','290']" data-width="none" data-height="none" data-whitespace="nowrap" data-transform_idle="o:1;" data-transform_hover="o:1;rX:0;rY:0;rZ:0;z:0;s:300;e:Power1.easeInOut;" data-transform_in="y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;s:1500;e:Power3.easeInOut;" data-transform_out="auto:auto;s:1000;e:Power3.easeInOut;" data-mask_in="x:0px;y:0px;" data-mask_out="x:0;y:0;" data-start="800" data-splitin="none" data-splitout="none" data-responsive_offset="on" data-responsive="off" style="z-index: 5; white-space: nowrap; letter-spacing:1px;"><a class="btn btn-theme-colored2 btn-lg btn-flat text-white font-weight-600 pl-30 pr-30 mr-15" href="contact.php">اتصل بنا</a>
                  </div>
                </li>

                <!-- SLIDE 2 -->
                <li data-index="rs-2" data-transition="fade" data-slotamount="default" data-easein="default" data-easeout="default" data-masterspeed="default" data-thumb="images/slide-bg-2.jpg" data-rotate="0" data-fstransition="fade" data-saveperformance="off" data-title="Web Show" data-description="">
                  <!-- MAIN IMAGE -->
                  <img src="images/slide-bg-2.jpg" alt="" data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" data-bgparallax="10" class="rev-slidebg" data-no-retina>
                  <!-- LAYERS -->
                  <!-- LAYER NR. 1 -->
                  <div class="tp-caption tp-shape tp-shapewrapper tp-resizeme rs-parallaxlevel-0 bg-theme-colored-transparent-4" id="slide-2-layer-1" data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" data-y="['middle','middle','middle','middle']" data-voffset="['0','0','0','0']" data-width="full" data-height="full" data-whitespace="normal" data-transform_idle="o:1;" data-transform_in="opacity:0;s:1500;e:Power3.easeInOut;" data-transform_out="opacity:0;s:1000;e:Power3.easeInOut;s:1000;e:Power3.easeInOut;" data-start="500" data-basealign="slide" data-responsive_offset="on" style="z-index: 5;background-color:rgba(0, 0, 0, 0.35);border-color:rgba(0, 0, 0, 1.00);">
                  </div>
                  <!-- LAYER NR. 2 -->
                  <div class="tp-caption tp-resizeme rs-parallaxlevel-0 text-white text-uppercase font-roboto-slab font-weight-700" id="slide-2-layer-2" data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" data-y="['top','top','top','top']" data-voffset="['195','195','160','170']" data-fontsize="['58','48','42','36']" data-lineheight="['70','60','50','45']" data-fontweight="['800','700','700','700']" data-textalign="['center','center','center','center']" data-width="['700','650','600','420']" data-height="none" data-whitespace="normal" data-transform_idle="o:1;" data-transform_in="y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;s:1500;e:Power3.easeInOut;" data-transform_out="auto:auto;s:1000;e:Power3.easeInOut;" data-mask_in="x:0px;y:0px;s:inherit;e:inherit;" data-mask_out="x:0;y:0;s:inherit;e:inherit;" data-start="600" data-splitin="none" data-splitout="none" data-responsive_offset="on" style="z-index: 5; white-space: nowrap; font-weight:700;">مجالات التدريب
                  </div>
                  <!-- LAYER NR. 3 -->
                  <div class="tp-caption tp-resizeme text-white rs-parallaxlevel-0" id="slide-2-layer-3" data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" data-y="['top','top','top','top']" data-voffset="['275','260','220','220']" data-fontsize="['16','16',18',16']" data-lineheight="['24','24','24','24']" data-fontweight="['400','400','400','400']" data-textalign="['center','center','center','center']" data-width="['800','650','600','460']" data-height="none" data-whitespace="nowrap" data-transform_idle="o:1;" data-transform_in="y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;s:1500;e:Power3.easeInOut;" data-transform_out="auto:auto;s:1000;e:Power3.easeInOut;" data-mask_in="x:0px;y:0px;s:inherit;e:inherit;" data-mask_out="x:0;y:0;s:inherit;e:inherit;" data-start="700" data-splitin="none" data-splitout="none" data-responsive_offset="on" style="z-index: 5; white-space: nowrap;">التدريب الإداري والتربوي- الحاسب الآلي - الدورات الهندسية والفنية – اللغات الأجنبية
                  </div>
                  <!-- LAYER NR. 4 -->
                  <div class="tp-caption rs-parallaxlevel-0" id="slide-2-layer-4" data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" data-y="['top','top','top','top']" data-voffset="['350','330','290','290']" data-width="none" data-height="none" data-whitespace="nowrap" data-transform_idle="o:1;" data-transform_hover="o:1;rX:0;rY:0;rZ:0;z:0;s:300;e:Power1.easeInOut;" data-transform_in="y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;s:1500;e:Power3.easeInOut;" data-transform_out="auto:auto;s:1000;e:Power3.easeInOut;" data-mask_in="x:0px;y:0px;" data-mask_out="x:0;y:0;" data-start="800" data-splitin="none" data-splitout="none" data-responsive_offset="on" data-responsive="off" style="z-index: 5; white-space: nowrap; letter-spacing:1px;"><a class="btn btn-theme-colored2 btn-lg btn-flat text-white font-weight-600 pl-30 pr-30 mr-15" href="contact.php">اتصل بنا</a>
                  </div>
                </li>

                <!-- SLIDE 3 -->
                <li data-index="rs-3" data-transition="fade" data-slotamount="default" data-easein="default" data-easeout="default" data-masterspeed="default" data-thumb="images/slide-bg-3.jpg" data-rotate="0" data-fstransition="fade" data-saveperformance="off" data-title="Web Show" data-description="">
                  <!-- MAIN IMAGE -->
                  <img src="images/slide-bg-3.jpg" alt="" data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" data-bgparallax="10" class="rev-slidebg" data-no-retina>
                  <!-- LAYERS -->
                  <!-- LAYER NR. 1 -->
                  <div class="tp-caption tp-shape tp-shapewrapper tp-resizeme rs-parallaxlevel-0 bg-theme-colored-transparent-4" id="slide-3-layer-1" data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" data-y="['middle','middle','middle','middle']" data-voffset="['0','0','0','0']" data-width="full" data-height="full" data-whitespace="normal" data-transform_idle="o:1;" data-transform_in="opacity:0;s:1500;e:Power3.easeInOut;" data-transform_out="opacity:0;s:1000;e:Power3.easeInOut;s:1000;e:Power3.easeInOut;" data-start="500" data-basealign="slide" data-responsive_offset="on" style="z-index: 5;background-color:rgba(0, 0, 0, 0.35);border-color:rgba(0, 0, 0, 1.00);">
                  </div>
                  <!-- LAYER NR. 2 -->
                  <div class="tp-caption tp-resizeme rs-parallaxlevel-0 text-white text-uppercase font-roboto-slab font-weight-700" id="slide-3-layer-2" data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" data-y="['top','top','top','top']" data-voffset="['195','195','160','170']" data-fontsize="['58','48','42','36']" data-lineheight="['70','60','50','45']" data-fontweight="['800','700','700','700']" data-textalign="['center','center','center','center']" data-width="['700','650','600','420']" data-height="none" data-whitespace="normal" data-transform_idle="o:1;" data-transform_in="y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;s:1500;e:Power3.easeInOut;" data-transform_out="auto:auto;s:1000;e:Power3.easeInOut;" data-mask_in="x:0px;y:0px;s:inherit;e:inherit;" data-mask_out="x:0;y:0;s:inherit;e:inherit;" data-start="600" data-splitin="none" data-splitout="none" data-responsive_offset="on" style="z-index: 5; white-space: nowrap; font-weight:700;">شعارنا
                  </div>
                  <!-- LAYER NR. 3 -->
                  <div class="tp-caption tp-resizeme text-white rs-parallaxlevel-0" id="slide-3-layer-3" data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" data-y="['top','top','top','top']" data-voffset="['275','260','220','220']" data-fontsize="['16','16',18',16']" data-lineheight="['24','24','24','24']" data-fontweight="['400','400','400','400']" data-textalign="['center','center','center','center']" data-width="['800','650','600','460']" data-height="none" data-whitespace="nowrap" data-transform_idle="o:1;" data-transform_in="y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;s:1500;e:Power3.easeInOut;" data-transform_out="auto:auto;s:1000;e:Power3.easeInOut;" data-mask_in="x:0px;y:0px;s:inherit;e:inherit;" data-mask_out="x:0;y:0;s:inherit;e:inherit;" data-start="700" data-splitin="none" data-splitout="none" data-responsive_offset="on" style="z-index: 5; white-space: nowrap;">تدريب نوعي غايته التميز<br>
                    تقديم تعليم نوعي بجودة عالية ومعايير دولية يحقق أهداف المؤسسات التعليمية
                  </div>
                  <!-- LAYER NR. 4 -->
                  <div class="tp-caption rs-parallaxlevel-0" id="slide-3-layer-4" data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" data-y="['top','top','top','top']" data-voffset="['350','330','290','290']" data-width="none" data-height="none" data-whitespace="nowrap" data-transform_idle="o:1;" data-transform_hover="o:1;rX:0;rY:0;rZ:0;z:0;s:300;e:Power1.easeInOut;" data-transform_in="y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;s:1500;e:Power3.easeInOut;" data-transform_out="auto:auto;s:1000;e:Power3.easeInOut;" data-mask_in="x:0px;y:0px;" data-mask_out="x:0;y:0;" data-start="800" data-splitin="none" data-splitout="none" data-responsive_offset="on" data-responsive="off" style="z-index: 5; white-space: nowrap; letter-spacing:1px;"><a class="btn btn-theme-colored2 btn-lg btn-flat text-white font-weight-600 pl-30 pr-30 mr-15" href="contact.php">اتصل بنا</a>
                  </div>
                </li>


                <li data-index="rs-3" data-transition="fade" data-slotamount="default" data-easein="default" data-easeout="default" data-masterspeed="default" data-thumb="images/slide-bg-4.jpg" data-rotate="0" data-fstransition="fade" data-saveperformance="off" data-title="Web Show" data-description="">
                  <!-- MAIN IMAGE -->
                  <img src="images/slide-bg-4.jpg" alt="" data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" data-bgparallax="10" class="rev-slidebg" data-no-retina>
                  <!-- LAYERS -->
                  <!-- LAYER NR. 1 -->
                  <div class="tp-caption tp-shape tp-shapewrapper tp-resizeme rs-parallaxlevel-0 bg-theme-colored-transparent-4" id="slide-3-layer-1" data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" data-y="['middle','middle','middle','middle']" data-voffset="['0','0','0','0']" data-width="full" data-height="full" data-whitespace="normal" data-transform_idle="o:1;" data-transform_in="opacity:0;s:1500;e:Power3.easeInOut;" data-transform_out="opacity:0;s:1000;e:Power3.easeInOut;s:1000;e:Power3.easeInOut;" data-start="500" data-basealign="slide" data-responsive_offset="on" style="z-index: 5;background-color:rgba(0, 0, 0, 0.35);border-color:rgba(0, 0, 0, 1.00);">
                  </div>
                  <!-- LAYER NR. 2 -->
                  <div class="tp-caption tp-resizeme rs-parallaxlevel-0 text-white text-uppercase font-roboto-slab font-weight-700" id="slide-3-layer-2" data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" data-y="['top','top','top','top']" data-voffset="['195','195','160','170']" data-fontsize="['58','48','42','36']" data-lineheight="['70','60','50','45']" data-fontweight="['800','700','700','700']" data-textalign="['center','center','center','center']" data-width="['700','650','600','420']" data-height="none" data-whitespace="normal" data-transform_idle="o:1;" data-transform_in="y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;s:1500;e:Power3.easeInOut;" data-transform_out="auto:auto;s:1000;e:Power3.easeInOut;" data-mask_in="x:0px;y:0px;s:inherit;e:inherit;" data-mask_out="x:0;y:0;s:inherit;e:inherit;" data-start="600" data-splitin="none" data-splitout="none" data-responsive_offset="on" style="z-index: 5; white-space: nowrap; font-weight:700;">شعارنا
                  </div>
                  <!-- LAYER NR. 3 -->
                  <div class="tp-caption tp-resizeme text-white rs-parallaxlevel-0" id="slide-3-layer-3" data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" data-y="['top','top','top','top']" data-voffset="['275','260','220','220']" data-fontsize="['16','16',18',16']" data-lineheight="['24','24','24','24']" data-fontweight="['400','400','400','400']" data-textalign="['center','center','center','center']" data-width="['800','650','600','460']" data-height="none" data-whitespace="nowrap" data-transform_idle="o:1;" data-transform_in="y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;s:1500;e:Power3.easeInOut;" data-transform_out="auto:auto;s:1000;e:Power3.easeInOut;" data-mask_in="x:0px;y:0px;s:inherit;e:inherit;" data-mask_out="x:0;y:0;s:inherit;e:inherit;" data-start="700" data-splitin="none" data-splitout="none" data-responsive_offset="on" style="z-index: 5; white-space: nowrap;">تدريب نوعي غايته التميز<br>
                    تقديم تعليم نوعي بجودة عالية ومعايير دولية يحقق أهداف المؤسسات التعليمية
                  </div>
                  <!-- LAYER NR. 4 -->
                  <div class="tp-caption rs-parallaxlevel-0" id="slide-3-layer-4" data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" data-y="['top','top','top','top']" data-voffset="['350','330','290','290']" data-width="none" data-height="none" data-whitespace="nowrap" data-transform_idle="o:1;" data-transform_hover="o:1;rX:0;rY:0;rZ:0;z:0;s:300;e:Power1.easeInOut;" data-transform_in="y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;s:1500;e:Power3.easeInOut;" data-transform_out="auto:auto;s:1000;e:Power3.easeInOut;" data-mask_in="x:0px;y:0px;" data-mask_out="x:0;y:0;" data-start="800" data-splitin="none" data-splitout="none" data-responsive_offset="on" data-responsive="off" style="z-index: 5; white-space: nowrap; letter-spacing:1px;"><a class="btn btn-theme-colored2 btn-lg btn-flat text-white font-weight-600 pl-30 pr-30 mr-15" href="contact.php">اتصل بنا</a>
                  </div>
                </li>

                <li data-index="rs-3" data-transition="fade" data-slotamount="default" data-easein="default" data-easeout="default" data-masterspeed="default" data-thumb="images/slide-bg-5.jpg" data-rotate="0" data-fstransition="fade" data-saveperformance="off" data-title="Web Show" data-description="">
                  <!-- MAIN IMAGE -->
                  <img src="images/slide-bg-5.jpg" alt="" data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" data-bgparallax="10" class="rev-slidebg" data-no-retina>
                  <!-- LAYERS -->
                  <!-- LAYER NR. 1 -->
                  <div class="tp-caption tp-shape tp-shapewrapper tp-resizeme rs-parallaxlevel-0 bg-theme-colored-transparent-4" id="slide-3-layer-1" data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" data-y="['middle','middle','middle','middle']" data-voffset="['0','0','0','0']" data-width="full" data-height="full" data-whitespace="normal" data-transform_idle="o:1;" data-transform_in="opacity:0;s:1500;e:Power3.easeInOut;" data-transform_out="opacity:0;s:1000;e:Power3.easeInOut;s:1000;e:Power3.easeInOut;" data-start="500" data-basealign="slide" data-responsive_offset="on" style="z-index: 5;background-color:rgba(0, 0, 0, 0.35);border-color:rgba(0, 0, 0, 1.00);">
                  </div>
                  <!-- LAYER NR. 2 -->
                  <div class="tp-caption tp-resizeme rs-parallaxlevel-0 text-white text-uppercase font-roboto-slab font-weight-700" id="slide-3-layer-2" data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" data-y="['top','top','top','top']" data-voffset="['195','195','160','170']" data-fontsize="['58','48','42','36']" data-lineheight="['70','60','50','45']" data-fontweight="['800','700','700','700']" data-textalign="['center','center','center','center']" data-width="['700','650','600','420']" data-height="none" data-whitespace="normal" data-transform_idle="o:1;" data-transform_in="y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;s:1500;e:Power3.easeInOut;" data-transform_out="auto:auto;s:1000;e:Power3.easeInOut;" data-mask_in="x:0px;y:0px;s:inherit;e:inherit;" data-mask_out="x:0;y:0;s:inherit;e:inherit;" data-start="600" data-splitin="none" data-splitout="none" data-responsive_offset="on" style="z-index: 5; white-space: nowrap; font-weight:700;">شعارنا
                  </div>
                  <!-- LAYER NR. 3 -->
                  <div class="tp-caption tp-resizeme text-white rs-parallaxlevel-0" id="slide-3-layer-3" data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" data-y="['top','top','top','top']" data-voffset="['275','260','220','220']" data-fontsize="['16','16',18',16']" data-lineheight="['24','24','24','24']" data-fontweight="['400','400','400','400']" data-textalign="['center','center','center','center']" data-width="['800','650','600','460']" data-height="none" data-whitespace="nowrap" data-transform_idle="o:1;" data-transform_in="y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;s:1500;e:Power3.easeInOut;" data-transform_out="auto:auto;s:1000;e:Power3.easeInOut;" data-mask_in="x:0px;y:0px;s:inherit;e:inherit;" data-mask_out="x:0;y:0;s:inherit;e:inherit;" data-start="700" data-splitin="none" data-splitout="none" data-responsive_offset="on" style="z-index: 5; white-space: nowrap;">تدريب نوعي غايته التميز<br>
                    تقديم تعليم نوعي بجودة عالية ومعايير دولية يحقق أهداف المؤسسات التعليمية
                  </div>
                  <!-- LAYER NR. 4 -->
                  <div class="tp-caption rs-parallaxlevel-0" id="slide-3-layer-4" data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" data-y="['top','top','top','top']" data-voffset="['350','330','290','290']" data-width="none" data-height="none" data-whitespace="nowrap" data-transform_idle="o:1;" data-transform_hover="o:1;rX:0;rY:0;rZ:0;z:0;s:300;e:Power1.easeInOut;" data-transform_in="y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;s:1500;e:Power3.easeInOut;" data-transform_out="auto:auto;s:1000;e:Power3.easeInOut;" data-mask_in="x:0px;y:0px;" data-mask_out="x:0;y:0;" data-start="800" data-splitin="none" data-splitout="none" data-responsive_offset="on" data-responsive="off" style="z-index: 5; white-space: nowrap; letter-spacing:1px;"><a class="btn btn-theme-colored2 btn-lg btn-flat text-white font-weight-600 pl-30 pr-30 mr-15" href="contact.php">اتصل بنا</a>
                  </div>
                </li>


              </ul>
              <div class="tp-bannertimer tp-bottom" style="height: 5px; background-color: rgba(255, 255, 255, 0.2);"></div>
            </div>
          </div>

          <!-- END REVOLUTION SLIDER -->
          <script type="text/javascript">
            var tpj = jQuery;
            var revapi34;
            tpj(document).ready(function() {
              if (tpj("#rev_slider_home").revolution == undefined) {
                revslider_showDoubleJqueryError("#rev_slider_home");
              } else {
                revapi34 = tpj("#rev_slider_home").show().revolution({
                  sliderType: "standard",
                  jsFileLocation: "js/revolution-slider/js/",
                  sliderLayout: "fullwidth",
                  dottedOverlay: "none",
                  delay: 5000,
                  navigation: {
                    keyboardNavigation: "on",
                    keyboard_direction: "horizontal",
                    mouseScrollNavigation: "off",
                    onHoverStop: "on",
                    touch: {
                      touchenabled: "on",
                      swipe_threshold: 75,
                      swipe_min_touches: 1,
                      swipe_direction: "horizontal",
                      drag_block_vertical: false
                    },
                    arrows: {
                      style: "zeus",
                      enable: true,
                      hide_onmobile: true,
                      hide_under: 600,
                      hide_onleave: true,
                      hide_delay: 200,
                      hide_delay_mobile: 1200,
                      tmp: '<div class="tp-title-wrap">    <div class="tp-arr-imgholder"></div> </div>',
                      left: {
                        h_align: "left",
                        v_align: "center",
                        h_offset: 30,
                        v_offset: 0
                      },
                      right: {
                        h_align: "right",
                        v_align: "center",
                        h_offset: 30,
                        v_offset: 0
                      }
                    },
                    bullets: {
                      enable: true,
                      hide_onmobile: true,
                      hide_under: 600,
                      style: "metis",
                      hide_onleave: true,
                      hide_delay: 200,
                      hide_delay_mobile: 1200,
                      direction: "horizontal",
                      h_align: "center",
                      v_align: "bottom",
                      h_offset: 0,
                      v_offset: 30,
                      space: 5,
                      tmp: '<span class="tp-bullet-img-wrap"><span class="tp-bullet-image"></span></span>'
                    }
                  },
                  viewPort: {
                    enable: true,
                    outof: "pause",
                    visible_area: "80%"
                  },
                  responsiveLevels: [1240, 1024, 778, 480],
                  gridwidth: [1240, 1024, 778, 480],
                  gridheight: [600, 550, 500, 450],
                  lazyType: "none",
                  parallax: {
                    type: "scroll",
                    origo: "enterpoint",
                    speed: 400,
                    levels: [5, 10, 15, 20, 25, 30, 35, 40, 45, 50],
                  },
                  shadow: 0,
                  spinner: "off",
                  stopLoop: "off",
                  stopAfterLoops: -1,
                  stopAtSlide: -1,
                  shuffle: "off",
                  autoHeight: "off",
                  hideThumbsOnMobile: "off",
                  hideSliderAtLimit: 0,
                  hideCaptionAtLimit: 0,
                  hideAllCaptionAtLilmit: 0,
                  debugMode: false,
                  fallbacks: {
                    simplifyAll: "off",
                    nextSlideOnWindowFocus: "off",
                    disableFocusListener: false,
                  }
                });
              }
            }); /*ready*/
          </script>
          <!-- END REVOLUTION SLIDER -->

        </div>
      </section>



      <?

      $result = mysqli_query($conn, "select* from subjects,cors
 where cors.cors_ID=subjects.cors_ID and  show_reg=1   order by rand() limit 10 ");
      $rows = mysqli_num_rows($result);
      if ($rows > 0) {
      ?>
        <!-- Section: Courses -->
        <section id="courses" class="bg-silver-deep">
          <div class="container pb-40">
            <div class="section-title">
              <div class="row">
                <div class="col-md-12">
                  <h2 class="text-uppercase title">الدورات<span class="text-theme-colored2"> التدريبية</span></h2>
                  <p class="text-uppercase mb-0">مستقبلك الواعد يبدأ من تطويرك المهني والعلمي</p>
                  <div class="double-line-bottom-theme-colored-2"></div>
                </div>
              </div>
            </div>
            <div class="row mtli-row-clearfix">
              <div class="owl-carousel-3col" data-nav="true">
                <?
                while ($row = mysqli_fetch_array($result)) {

                ?>


                  <div class="item">
                    <div class="course-single-item style2 bg-white border-1px text-center mb-30">
                      <div class="course-thumb">
                        <?
                        $imagePath = "stus/cors_files/" . $row['photo'];
                        if (!file_exists($imagePath) or $row['photo'] == "")
                          $imagePath = "images/portfolio/default.jpg";
                        else
                          $imagePath = "stus/cors_files/" . $row['photo'];
                        ?>
                        <a href="details1.php?ID=<? echo $row['ID']; ?>"><img class="img-fullwidth" alt="" src="<? echo $imagePath; ?>" style="width:360px;height:auto"></a>



                        <? if ($row['price'] > 0) { ?> <div class="price-tag"> حضوري <? echo $row['price']; ?> SAR</div><?php } ?>
                        <? if ($row['price1'] > 0) { ?> <div class="order-btn btn btn-xs btn-theme-colored2" style="right: 15px; top: 15px"> اونلاين <? echo $row['price1']; ?> SAR</div><?php } ?>

                      </div>
                      <div class="course-details border-1px clearfix p-15 pt-15">
                        <div class="course-top-part">
                          <a href="details1.php?ID=<? echo $row['ID']; ?>">
                            <h5 class="line-bottom-centered mt-20 mb-30"><? echo $row['cors_name'];
                                                                          //echo strlen($row['cors_name']);
                                                                          if (strlen($row['cors_name']) <= 110) echo "<p>&nbsp;</p>";
                                                                          ?></h5>
                          </a>
                          <ul class="list-inline">
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
                          $result1 = mysqli_query($conn, "select* FROM user  where ID='$row[traning_name]'");
                          while ($row1 = mysqli_fetch_array($result1)) {

                            if ($row1['image'] != "") { ?>
                              <img src="stus/dist/img/<? echo $row1['image']; ?>" style="width:54px;height:54px" alt="<? echo $row1['name']; ?>" class="img-circle">
                            <? } else { ?>

                              <? if ($row1['Branches'] == 3) { ?><img src="stus/dist/img/avatar2.png" class="img-circle" style="width:54px;height:54px" alt="<? echo $row1['name']; ?>" /><? } else { ?>
                                <img src="stus/dist/img/avatar5.png" class="img-circle" style="width:54px;height:54px" alt="<? echo $row1['name']; ?>" />
                            <? }
                                                                                                                                                                                      } ?>


                          <? } ?>
                        </div>
                        <p class="course-description mt-5"><? echo substr($row['short_desc_ar'], 0, 180); ?></p>
                        <i class="fa fa-flag"></i>
                        <font color="#FF0000"><? echo $row['cors_online']; ?> </font> <i class="fa fa-clock-o"></i>
                        <font color="#FF0000"><? echo $row['cors_time']; ?></font>

                      </div>
                      <div class="course-meta bg-silver-deep">
                        <ul class="list-inline">
                          <li><i class="fa fa-calendar text-theme-colored2 mr-5"></i> <? echo $row['credits']; ?> ساعة</li>
                          <li><i class="fa fa-book text-theme-colored2 mr-5"></i> <? echo $row['contact_hours']; ?> </li>
                          <li><a href="details1.php?ID=<? echo $row['ID']; ?>" class="btn  btn-theme-colored2    ">سجل الآن</a></li>
                        </ul>
                      </div>
                    </div>
                  </div>
                <? } ?>
              </div>
            </div>
          </div>
        </section><? } ?>
      <!-- Section: Features -->
      <section class="mobileHide">
        <div class="container pb-70">
          <div class="section-content">
            <div class="row">
              <div class="col-md-3">
                <img class="img-fullwidth maxwidth500" src="logo.jpg" style="width:460px " alt="">
              </div>
              <div class="col-md-9">
                <h2 class="text-uppercasetext-theme-colored mt-0 mt-sm-30"><span class="text-theme-colored2"><?php echo $site_name; ?></span></h2>
                <div class="double-line-bottom-theme-colored-2"></div>
                <p align="justify">
                  شركة سعودية تسعى لتحقيق الكفاءة والفاعلية في التدريب من حيث تقديم بيئة إيجابية للمدرب والمتدرب وفريق العمل.
                  اعتمادنا على خبراء ومستشارين في عالم التدريب سواء على مستوى المملكة أو العالم، وفي شتى المجالات. يتم اختيار الخبراء وفقاً لأسس عالية الجودة، كما يتم تقييمهم باستمرار.<br>
                  الخبرة والاحترافية في اختيار وتطوير وتصميم البرامج التدريبية واتصافها بالمرونة وتطابقها مع الاحتياجات الفعلية للفئة المستهدفة من التدريب.
                  تربطنا علاقات تعاون مع بيوت الخبرة العالمية من أجل تقديم الاستشارات مع بعض الشركات في جوانب الإدارة والقوى البشرية. نستقدم المدربين العالميين للتدريب بالمملكة وننفذ الدورات التدريبية خارج المملكة.<br>
                  نتميز باختيارنا للبيئة التدريبية بعناية بحيث تتوافق مع عناصر التدريب.
                  تتميز برامجنا التدريبية بأنها تتفق مع الأسس العلمية ونراعي تجهيزات ما قبل التدريب، وتوفير التقنيات والأدوات المساعد للتدريب.
                  <a href="about.php?ID=54" class="btn-colored btn-theme-colored2 text-whit ">المزيد</a>
                </p>

              </div>

            </div>
          </div>
        </div>
      </section>


      <section class="layer-overlay overlay-white-9" data-bg-img="images/bg/bg-pattern.png">
        <div class="container pb-40">
          <div class="section-content">
            <div class="row">
              <div class="col-md-3">
                <div class="icon-box hover-effect border-1px border-radius-10px text-center bg-white p-15 pt-40 pb-30">
                  <a href="#" class="icon icon-circled icon-lg" data-bg-color="#FC9928">
                    <i class="pe-7s-medal  text-white font-48"></i>
                  </a>
                  <h4 class="icon-box-title text-uppercase letter-space-1 font-20 mt-15"><a href="#">سهولة الاستخدام
                    </a></h4>
                  <p class="">تعلم عبر الفیدیو والكتب الإلكترونیة والمشاریع العملیة مع دعم تقني مباشر من منصة غرفة جدة للتدريب الإلكتروني بالتعاون مع رؤية صلة لكل ما یتعلق باحتیاجاتك على المنصة</p>
                </div>
              </div>
              <div class="col-md-3">
                <div class="icon-box hover-effect border-1px border-radius-10px text-center bg-white p-15 pt-40 pb-30">
                  <a href="#" class="icon icon-circled icon-lg" data-bg-color="#43B14B">
                    <i class="pe-7s-users text-white font-48"></i>
                  </a>
                  <h4 class="icon-box-title text-uppercase letter-space-1 font-20 mt-15"><a href="#">مدربون احترافيون
                    </a></h4>
                  <p class="">نخبة من المدربین بشھادات اعتماد على مستوى عالمي ومحلي، من ذوي الخبرات التدربيبة الطويلة، بالإضافة إلى إمكانية تبادل الأفكار مع مجتمع منصة قمم في بیئة تدريبية مهنيـة متكاملة
                  </p>
                </div>
              </div>
              <div class="col-md-3">
                <div class="icon-box hover-effect border-1px border-radius-10px text-center bg-white p-15 pt-40 pb-30">
                  <a href="#" class="icon icon-circled icon-lg" data-bg-color="#00C3CB">
                    <i class="pe-7s-notebook  text-white font-48"></i>
                  </a>
                  <h4 class="icon-box-title text-uppercase letter-space-1 font-20 mt-15"><a href="#">عشرات التخصصات
                    </a></h4>
                  <p class="">عشرات التخصصات في مجالات مختلفة في الأعمال وعلوم الحاسب والتسویق والإدارة وغیرھا، تم تصمیمھا بعنایة على أعلى المستویات لتطویر مھارات تنافسیة في سوق العمل
                  </p>
                </div>
              </div>
              <div class="col-md-3">
                <div class="icon-box hover-effect border-1px border-radius-10px text-center bg-white p-15 pt-40 pb-30">
                  <a href="#" class="icon icon-circled icon-lg" data-bg-color="#EF5861">
                    <i class="pe-7s-study text-white font-48"></i>
                  </a>
                  <h4 class="icon-box-title text-uppercase letter-space-1 font-20 mt-15"><a href="#">شهادات معتمدة
                    </a></h4>
                  <p class="">
                    منصة <?php echo $site_name; ?> تقدم شھادات متخصصة ومعتمدة تعزز مھاراتك وفرصك الوظيفيـة وتمكنك من بناء مستقبلاً مھنیاً وفقاً لمتطلبات سوق العمل السعودي

                  </p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

      <!-- Section: About -->



      <!-- Divider: Why Choose Us -->
      <section id="reservation" class="parallax layer-overlay overlay-theme-colored-8" data-bg-img="images/we-provide-bg.jpg" data-parallax-ratio="0.4">
        <div class="container">
          <div class="row">
            <div class="col-md-8 sm-text-center">
              <h3 class="text-white mt-30 mb-0">توفير برامج للشركات والجهات التي تلبي حاجاتها وطموحاتها.</h3>
              <h2 class="text-theme-colored2 font-54 mt-0">التسجيل في الدورات</h2>
              <p class="text-gray-darkgray font-15  " align="justify">
                نقدم البرامج التدريبية للمنظمات وفق الاحتياجات التدريبية كما نقدم استشارات متنوعة في كافة المجالات التدريبية
                لحجز المواعيد كما يوجد لدينا مجموعة من أفضل المدربين على مستوى المملكة والخليج والوطن العربي و نشر التوعية والتثقيف لبناء
                وتنمية الفكر الايجابي ونشر المعرفة ومشاركتها لتحقيق التكامل والتعاون البناء في شتى المجالات التدريبية وتقديم خدمات استشارية




              </p>
              <div class="row mt-30 sm-text-center">
                <?
                $result = mysqli_query($conn, "select* from count_pro  ");
                while ($row = mysqli_fetch_array($result)) {
                ?>
                  <div class="col-xs-12 col-sm-6 col-md-3 mb-md-50">
                    <div class="funfact">
                      <i class="pe-7s-<? echo $row['logo']; ?> mb-20 text-theme-colored2"></i>
                      <h2 data-animation-duration="2000" data-value="<? echo $row['num']; ?>" class="animate-number text-white font-38 font-weight-400 mt-0 mb-15">0</h2>
                      <h5 class="text-white text-uppercase"><? echo $row['name']; ?></h5>
                    </div>
                  </div>
                <? } ?>

              </div>
            </div>
            <div class="col-md-4">
              <div class="p-30 mt-0 bg-dark-transparent-2">
                <h3 class="title-pattern mt-0"><span class="text-white">نموذج <span class="text-theme-colored2">التسجيل</span></span></h3>
                <!-- Appilication Form Start--> <?php if (isset($message)) echo $message;  ?>
                <form id="reservation_form" name="reservation_form" class="reservation-form mt-20" method="post" action="">
                  <div class="form-group">
                    <input class="form-control" type="hidden" name='cors' value="<? echo $ss; ?>" required="">
                    <input class="form-control" type="text" name='fullname' id="fullname" placeholder="الاسم" required="">
                  </div>

                  <div class="form-group">
                    <input placeholder="اسم المستخدم" required name="iqama" id="username" class="form-control" type="text">
                  </div>
                  <!-- title="الحقل يجب ان يحتوي علي رقم فقط ويحتوي علي 10 ارقام" -->
                  <!-- <div class="form-group">
                        <input class="form-control required email" type="email" placeholder="البريد الالكتروني" name="email">
                      </div> -->

                  <div class="form-group">
                    <input placeholder="رقم الجوال" required pattern="[0]{1}[5]{1}[0-9]{8}" title="الحقل يجب ان يحتوي علي رقم فقط ويحتوي علي 10 ارقام يبدء 05xxxxxxxx" name="phone" class="form-control" type="text">

                  </div>

                  <div class="form-group" style="display: none;">
                    <select id="online" name="reg_price" class="form-control" required="">
                      <option value=''>نوع التدريب</option>
                      <? if ($price1 > 0) { ?> <option selected value="<? echo $price1; ?>">حضوري ( <? echo $price1; ?> )ريال</option><?php } ?>
                      <? if ($price2 > 0) { ?> <option value="<? echo $price2; ?>">اونلاين ( <? echo $price2; ?> )ريال</option><?php } ?>

                    </select>
                  </div>

                  <input placeholder="الجنسية" type=hidden value='سعودي' required name="nat" class="form-control" type="text">
                  <input placeholder="الجنسية" type=hidden value='جامعي' required name="qualification" class="form-control" type="text">

                  <div class="form-group">
                    <input type=hidden name="message" class="form-control" placeholder="الملاحظات والاستفسارات ان وجد">
                    <!-- <div class="g-recaptcha" data-sitekey="<?php echo $sitKey; ?>" align="center"></div> -->

                  </div>
                  <div class="form-group">
                    <input name="form_botcheck" class="form-control" type="hidden" value="" />
                    <input type="hidden" name="social_media" value="<?php echo @$_GET['social']; ?>">
                    <input type="hidden" name="sponsor" value="<?php echo @$_GET['sponsor']; ?>">

                    <button type="submit" name="contact" class="btn btn-colored btn-theme-colored2    ">سجل الآن</button>
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
                <h3 class="text-uppercase line-bottom-theme-colored-2 mt-0 line-height-1"><i class="fa fa-calendar mr-10"></i> الآحداث <span class="text-theme-colored2">والفعاليات</span></h3>

                <?php
                $CC = 0;
                $result = mysqli_query($conn, "select * from testimonial ORDER BY ID DESC limit 2 ");
                while ($row = mysqli_fetch_array($result)) {
                  $CC++;
                  if ($CC == 1) $can = "One";
                  if ($CC == 2) $can = "Two";
                  if ($CC == 3) $can = "Three";
                ?>
                  <article>
                    <div class="event-block">
                      <div class="event-date text-center">
                        <ul class="text-white font-18 font-weight-600">
                          <li class="border-bottom"><? echo $row['day']; ?></li>
                          <li class=""><? $monthNum  = $row['mans'];
                                        echo $monthName = date('M', mktime(0, 0, 0, $monthNum, 10));  ?></li>
                        </ul>
                      </div>
                      <div class="event-meta border-1px pl-40">
                        <div class="event-content pull-left flip">
                          <h4 class="event-title media-heading font-roboto-slab font-weight-700 mr-30"><a href="testimonial.php?ID=<? echo $row['ID']; ?>"> <? echo substr($row['address'], 0, 100); ?></a></h4>
                          <span class="mb-10 text-gray-darkgray mr-30"><i class="fa fa-clock-o mr-5 text-theme-colored2"></i> <? echo $row['time']; ?></span>

                          <p class="mr-30"><? echo strip_tags(substr($row['news'], 0, 210)); ?></p>
                        </div>
                      </div>
                    </div>
                  </article>
                <? } ?>
              </div>
              <div class="col-md-6">
                <h3 class="text-uppercase line-bottom-theme-colored-2 line-height-1 mt-0 mt-sm-30"><i class="fa fa-question-circle-o mr-10"></i> خدمات التدريب والشركات</h3>
                <div class="panel-group accordion-stylished-left-border accordion-icon-filled accordion-no-border accordion-icon-left accordion-icon-filled-theme-colored2" id="accordion6" role="tablist" aria-multiselectable="true">
                  <div class="panel panel-default">
                    <div class="panel-heading" role="tab" id="headin1">
                      <h6 class="panel-title">
                        <a role="button" data-toggle="collapse" data-parent="#accordion6" href="#collaps1" aria-expanded="true" aria-controls="collaps1">
                          الاستشــــارات والتـــدريب الوظـــيفي

                        </a>
                      </h6>
                    </div>
                    <div id="collaps1" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headin1">
                      <div class="panel-body">
                        <p align="justify">إعداد وتأهيل جميع المنظمات الخدمية والإنتاجية للحصول على مختلف انواع شهادات الايزو في قطاعات خدمات الضيافة و التدريب بداية من تدريب فريق العمل وإعداد النظام كاملا وحتى الحصول على الشهادة

                      </div>
                    </div>
                  </div>


                  <div class="panel panel-default">
                    <div class="panel-heading" role="tab" id="heading2">
                      <h6 class="panel-title">
                        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion6" href="#collapse2" aria-expanded="false" aria-controls="collapse2">
                          تحــليل الحــاجــات التدريبية للشــركـات
                        </a>
                      </h6>
                    </div>
                    <div id="collapse2" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading2">
                      <div class="panel-body">
                        <p align="justify">نوفر العديد من تقييمات الاحتياجات في سياقات التوظيف المختلفة التي تتطلبها بيئة العمل من الموظفين أن يكونوا مهرة في أداء المهام المُعقدة بطريقة تتسم بالكفاءة و الفعالية من حيث التكلفة
                      </div>
                    </div>
                  </div>


                  <div class="panel panel-default">
                    <div class="panel-heading" role="tab" id="heading3">
                      <h6 class="panel-title">
                        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion6" href="#collapse3" aria-expanded="false" aria-controls="collapse3">
                          الدورات الإدارية والتربوية والقانوينة
                        </a>
                      </h6>
                    </div>
                    <div id="collapse3" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading3">
                      <div class="panel-body">
                        <p align="justify">لا يستطيع المرء أن يتجاهل المزايا المتعددة للدورات التدريبية أو يقلل من شأنها، حيث أصبحت تشكل أهمية كبرى في سُمو النفس والبحث عن ما هو أجود وأفضل
                      </div>
                    </div>
                  </div>



                  <div class="panel panel-default">
                    <div class="panel-heading" role="tab" id="heading4">
                      <h6 class="panel-title">
                        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion6" href="#collapse4" aria-expanded="false" aria-controls="collapse4">
                          دورات الحاسب الآلي وتطويــر الــذات

                        </a>
                      </h6>
                    </div>
                    <div id="collapse4" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading4">
                      <div class="panel-body">
                        <p align="justify">مجموعة من حلول التدريب المتخصصة في مجال تقنية الحاسب الآلي والتي تتلاءم مع احتياجات التدريب المختلفة لعملائها، من دبلومات دورات وبرامج تأهلية وتطويرية مختلفة.

                      </div>
                    </div>
                  </div>

                </div>
              </div>
            </div>
          </div>
      </section>

      <?

      $result = mysqli_query($conn, "select* from teachers order by rand() limit 4");
      $rows = mysqli_num_rows($result);
      if ($rows > 0) {
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
              while ($row = mysqli_fetch_array($result)) {
              ?> <div class="col-xs-12 col-sm-6 col-md-3">
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
                      <h4 class=" font-weight-400  "><? echo $row['name_ar']; ?></h4>
                      <h6 class="text-gray font-13 font-weight-400 line-bottom-centered mt-0"><? echo $row['job_ar']; ?></h6>
                      <p class="hidden-md"><? echo substr($row['details_ar'], 0, 150); ?></p>
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
      <section class="parallax divider layer-overlay overlay-theme-colored-9" data-bg-img="images/we-provide-bg1.jpg" data-parallax-ratio="0.4">
        <div class="container pt-60 pb-90">
          <div class="row">
            <div class="col-md-12 text-center">
              <h2 class="text-white text-uppercase font-46 font-weight-700 mb-10">برامج التعليم والتدريب الإلكتروني</h2>
              <p class="font-16 text-white mb-20">
                تساعد الحصول على نتائج من الآخرين في المؤسسة، وبطريقة ما يظهرون قدرة كبيرة على تحقيق النتائج رغماً عن التحديات الزمنية والموارد الشحيحة </p>
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
                <h2 class="text-uppercase title">مجالات<span class="text-theme-colored2"> التدريب </span></h2>
                <p class="text-uppercase mb-0">التميز في تقديم التدريب والتنمية البشرية والتعليم ، محلياً و إقليمياً</p>
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
                      <img class="img-thumbnail img-circle" alt="" src="images/blog-bg-4.jpg" width="100" style="width:100px;height:100px">
                    </div>
                    <div class="testimonial-content">
                      <h4 class="mt-10 font-16 mb-0"><span class="text-theme-colored2">استشارات رأس المال البشري</span></h4>
                      <h6 class="mt-0 font-weight-300">بصفتنا شركة استشارية، نسعى لبناء جهود مستمرة في إنشاء إطار داخلي للمعايير والإجراءات للمؤسسات التي من شأنها إشراك موظفيك وإلهامهم لتقديم الحلول والخدمات التي تلبي احتياجات عميلك مع تلبية التوقعات وأعلى معايير التميّز المؤسسي.
                        .
                        .</h6>
                    </div>
                  </div>
                </div>
                <div class="item">
                  <div class="testimonial pt-10">
                    <div class="thumb pull-left flip mb-0 mr-0">
                      <img class="img-thumbnail img-circle" alt="" src="images/blog-bg-3.jpg" width="100" style="width:100px;height:100px">
                    </div>
                    <div class="testimonial-content">
                      <h4 class="mt-10 font-16 mb-0"><span class="text-theme-colored2">استشارات التميز المؤسسي</span></h4>
                      <h6 class="mt-0 font-weight-300">تقديم برنامج أكاديمي متميز عالي الجودة مماثل لتلك البرامج التي تقدمها أفضل الأكاديميات العالمية وتحويل القسم إلى اكاديمية متميز في التدريس و التدريب الفعال</h6>
                    </div>
                  </div>
                </div>
                <div class="item">
                  <div class="testimonial pt-10">
                    <div class="thumb pull-left flip mb-0 mr-0">
                      <img class="img-thumbnail img-circle" alt="" src="images/blog-bg-2.jpg" width="100" style="width:100px;height:100px">
                    </div>
                    <div class="testimonial-content">
                      <h4 class="mt-10 font-16 mb-0"><span class="text-theme-colored2">الدورات الإدارية والتربوية</span></h4>
                      <h6 class="mt-0 font-weight-300">لا يستطيع المرء أن يتجاهل المزايا المتعددة للدورات التدريبية أو يقلل من شأنها، حيث أصبحت تشكل أهمية كبرى في سُمو النفس والبحث عن ما هو أجود وأفضل .</h6>
                    </div>
                  </div>
                </div>
                <div class="item">
                  <div class="testimonial pt-10">
                    <div class="thumb pull-left flip mb-0 mr-0">
                      <img class="img-thumbnail img-circle" alt="" src="images/blog-bg-1.jpg" width="100" style="width:100px;height:100px">
                    </div>
                    <div class="testimonial-content">
                      <h4 class="mt-10 font-16 mb-0"><span class="text-theme-colored2">الضيافة والفندقة</span></h4>
                      <h6 class="mt-0 font-weight-300">تهدف هذه الدبلومة التدريبية إلى تعريف الطلاب بمفاهيم ومبادئ إدارة الفنادق والمبادئ الأساسية في التعامل مع النزلاء وتزويدهم بالخدمات الفندقية المتكاملة وتطبيق الإجراءات الإدارية والفنية للضيافة.</h6>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

      <?
      $C = 0;
      $result = mysqli_query($conn, "select * from news ORDER BY ID DESC  ");
      $rows = mysqli_num_rows($result);
      if ($rows > 0) {

      ?>
        <!-- Section: blog -->
        <section id="blog">
          <div class="container pb-40">
            <div class="section-title">
              <div class="row">
                <div class="col-md-12">
                  <h2 class="text-uppercase title">آخر <span class="text-theme-colored2">الآخبار</span></h2>
                  <p class="text-uppercase mb-0">آخر أخبار <?php echo $site_name; ?></p>
                  <div class="double-line-bottom-theme-colored-2"></div>
                </div>
              </div>
            </div>
            <div class="section-content">
              <div class="row">
                <div class="col-md-12">
                  <div class="owl-carousel-3col owl-nav-top" data-nav="true">


                    <?php
                    while ($row = mysqli_fetch_array($result)) {
                      $C++;
                    ?> <div class="item">
                        <article class="post clearfix mb-30">
                          <div class="entry-header">
                            <div class="post-thumb thumb">
                              <img src="news/<? echo $row['photo']; ?>" style="width:372px;height:246px" alt="" class="img-responsive img-fullwidth">
                            </div>
                            <div class="entry-date media-left text-center flip bg-theme-colored border-top-theme-colored2-3px pt-5 pr-15 pb-5 pl-15">
                              <ul>
                                <li class="font-16 text-white font-weight-600"><? echo $row['day']; ?></li>
                                <li class="font-12 text-white text-uppercase"><? $monthNum  = $row['mans'];
                                                                              echo $monthName = date('M', mktime(0, 0, 0, $monthNum, 10));  ?></li>
                              </ul>
                            </div>
                          </div>
                          <div class="entry-content p-15">
                            <div class="entry-meta media no-bg no-border mt-0 mb-10">
                              <div class="media-body pl-0">
                                <div class="event-content">
                                  <h4 class="entry-title text-white text-uppercase font-weight-600 m-0 mt-5"><a href="news.php?ID=<? echo $row['ID']; ?>"><? echo  strip_tags(substr($row['address'], 0, 60)); ?> </a></h4>
                                  <ul class="list-inline">
                                    <li><i class="fa fa-user-o ml-5 text-theme-colored2"></i>بواسطة professional</li>
                                    <li><i class="fa fa-thumbs-o-up ml-5 text-theme-colored2"></i>الإعجابات</li>
                                    <li><i class="fa fa-share-alt ml-5 text-theme-colored2"></i> 895 الإعجابات</li>
                                  </ul>
                                </div>
                              </div>
                            </div>
                            <p class="mt-5"><? echo strip_tags(substr($row['news'], 0, 410)); ?></p>
                            <a class="btn btn-default btn-flat font-12 mt-10 ml-5" href="news.php?ID=<? echo $row['ID']; ?>">إقرأ المزيد</a>
                          </div>
                        </article>
                      </div>

                    <? } ?>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section><? } ?>


      <!-- Divider: Clients جهات الاعتماد المحلي -->
      <section class="clients bg-theme-colored2 ">
        <div class="container pt-10 pb-10">
          <div class="section-title">
            <div class="row">
              <div class="col-md-12 text-center pt-2">
                <h2 class="text-uppercase title text-white pt-30">جهات الاعتماد <span class="text-theme-colored2"> المحلي</span></h2>
                <!--<div class="double-line-bottom-theme-colored-2"></div>-->
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-12">
              <!-- Section: Clients -->
              <div class="owl-carousel-6col clients-logo transparent text-center">
                <?php
                for ($i = 1; $i <= 10; $i++) {
                  $filePath = "Logos_Local/" . $i . ".png";
                  if (!file_exists($filePath)) {
                    $filePath = "Logos_Local/" . $i . ".jpg";
                    if (!file_exists($filePath)) {
                      break;
                    }
                  }
                ?>
                  <div class="item"> <a href="#"><img src="<?php echo $filePath; ?>" alt="" / style="width:auto;height:auto"></a></div>
                <?php
                }
                ?>

              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- End Divider: Clients جهات الاعتماد المحلي -->


      <!-- Divider: Clients جهات الاعتماد الدولي -->
      <section class="clients bg-theme-colored2 ">
        <div class="container pt-10 pb-10">
          <div class="section-title">
            <div class="row">
              <div class="col-md-12 text-center pt-2">
                <h2 class="text-uppercase title text-white pt-30">جهات الاعتماد <span class="text-theme-colored2"> الدولي</span></h2>
                <!--<div class="double-line-bottom-theme-colored-2"></div>-->
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-12">
              <!-- Section: Clients -->
              <div class="owl-carousel-6col clients-logo transparent text-center">
                <?php
                for ($i = 1; $i <= 47; $i++) {
                  $filePath = "Logos_International/" . $i . ".png";
                  if (!file_exists($filePath)) {
                    $filePath = "Logos_International/" . $i . ".jpg";
                    if (!file_exists($filePath)) {
                      break;
                    }
                  }
                ?>
                  <div class="item"> <a href="#"><img src="<?php echo $filePath; ?>" alt="" / style="width:auto;height:auto"></a></div>
                <?php
                }
                ?>

              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- End Divider: Clients جهات الاعتماد الدولي -->



      <!-- Divider: Clients شركائنا-->
      <section class="clients bg-theme-colored2 ">
        <div class="container pt-10 pb-10">
          <div class="section-title">
            <div class="row">
              <div class="col-md-12 text-center pt-2">
                <h2 class="text-uppercase title text-white pt-30"> شركائنا</h2>
                <!--<div class="double-line-bottom-theme-colored-2"></div>-->
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-12">
              <!-- Section: Clients -->
              <div class="owl-carousel-6col clients-logo transparent text-center">
                <?php
                $result = mysqli_query($conn, "select * from partners ORDER BY RAND()");
                while ($row = mysqli_fetch_array($result)) {
                ?>
                  <div class="item"> <a href="#"><img src="images/partners/<?php echo $row['Partners']; ?>" alt="" / style="width:auto;height:auto"></a></div>
                <?php  } ?>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- End  شرمائنا -->

      <!-- Divider: Clients عملائنا -->
      <section class="clients bg-theme-colored2 ">
        <div class="container pt-10 pb-10">
          <div class="section-title">
            <div class="row">
              <div class="col-md-12 text-center pt-2">
                <h2 class="text-uppercase title text-white pt-30">عملائنا</h2>
                <!--<div class="double-line-bottom-theme-colored-2"></div>-->
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-12">
              <!-- Section: Clients -->
              <div class="owl-carousel-6col clients-logo transparent text-center">
                <?php
                for ($i = 1; $i <= 10; $i++) {
                  $filePath = "Logos_our_clients/" . $i . ".png";
                  if (!file_exists($filePath)) {
                    $filePath = "Logos_our_clients/" . $i . ".jpg";
                    if (!file_exists($filePath)) {
                      break;
                    }
                  }
                ?>
                  <div class="item"> <a href="#"><img src="<?php echo $filePath; ?>" alt="" / style="width:auto;height:auto"></a></div>
                <?php
                }
                ?>

              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- End Divider: Clients عملائنا -->


      <!-- end main-content -->



      <style>
        .owl-stage-outer {
          background: white;
          border-radius: 20px;
        }

        .clients .owl-stage {
          display: flex;
          align-items: center;
        }
      </style>


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
  <?php include 'footer.php'; ?>


  <a class="scrollToTop" href="#"><i class="fa fa-angle-up"></i></a>
  </div>
  <!-- end wrapper -->

  <!-- Footer Scripts -->
  <!-- JS | Custom script for all pages -->
  <script src="js/custom.js"></script>

  <!-- SLIDER REVOLUTION 5.0 EXTENSIONS  
      (Load Extensions only on Local File Systems ! 
       The following part can be removed on Server for On Demand Loading) -->
  <script type="text/javascript" src="js/revolution-slider/js/extensions/revolution.extension.actions.min.js"></script>
  <script type="text/javascript" src="js/revolution-slider/js/extensions/revolution.extension.carousel.min.js"></script>
  <script type="text/javascript" src="js/revolution-slider/js/extensions/revolution.extension.kenburn.min.js"></script>
  <script type="text/javascript" src="js/revolution-slider/js/extensions/revolution.extension.layeranimation.min.js"></script>
  <script type="text/javascript" src="js/revolution-slider/js/extensions/revolution.extension.migration.min.js"></script>
  <script type="text/javascript" src="js/revolution-slider/js/extensions/revolution.extension.navigation.min.js"></script>
  <script type="text/javascript" src="js/revolution-slider/js/extensions/revolution.extension.parallax.min.js"></script>
  <script type="text/javascript" src="js/revolution-slider/js/extensions/revolution.extension.slideanims.min.js"></script>
  <script type="text/javascript" src="js/revolution-slider/js/extensions/revolution.extension.video.min.js"></script>

</body>

</html>