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
   $publishable_api_key=$row9['publishable_api_key'];

}
  

 ?>
<?php

   $OrderNo1= mysqli_real_escape_string($conn,htmlspecialchars( ($_GET['OrderNo']), ENT_QUOTES, "utf-8")); 
   $id1= mysqli_real_escape_string($conn,htmlspecialchars( ($_GET['id']), ENT_QUOTES, "utf-8")); 

$sql="update reg_cors set  status='$_GET[status]',message='$_GET[message]',payment='$id1' where no='$OrderNo1'";
if(mysqli_query($conn,$sql))
{                                              
   }
 
  require_once('include/phpmailer/PHPMailerAutoload.php');

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
 <!-- Other Tags -->

    <!-- Moyasar Styles -->
    <link rel="stylesheet" href="https://cdn.moyasar.com/mpf/1.7.3/moyasar.css">

    <!-- Moyasar Scripts -->
    <script src="https://polyfill.io/v3/polyfill.min.js?features=fetch"></script>
    <script src="https://cdn.moyasar.com/mpf/1.7.3/moyasar.js"></script>

    <!-- Download CSS and JS files in case you want to test it locally, but use CDN in production -->
   
</head>
<body class="rtl">

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
          <?
 
    $ss= mysqli_real_escape_string($conn,htmlspecialchars(intval($_GET['OrderNo']), ENT_QUOTES, "utf-8")); 

$result=mysqli_query($conn,"select* from subjects,cors,reg_cors
 where cors.cors_ID=subjects.cors_ID  and reg_cors.no='$ss' and  reg_cors.address=cors.ID ");
$rows=mysqli_num_rows($result) ; 
if($rows > 0 )
{
while($row=mysqli_fetch_array($result))
{
 $Title=$row['cors_name'];
 $show_reg=$row['show_reg'];
 
 
?>    
<section>
      <div class="container mt-30 mb-30 pt-30 pb-30">
        <div class="row">
 
 <div class="col-md-8">

            <div class="single-service">
               
              
              <?
              $imagePath = "stus/cors_files/".$row['photo'];
if(!file_exists($imagePath) or $row['photo']=="")
    $imagePath = "images/portfolio/default.jpg";
    else
              $imagePath = "stus/cors_files/".$row['photo'];
    ?>
              <img  alt="" src="<? echo $imagePath ; ?>" style="width:100%">
                
                
                
                
                
                
              <h3 class="text-uppercase mt-30 mb-10"><? echo $cors_name=$row['cors_name']; ?></h3>
              <div class="double-line-bottom-theme-colored-2 mt-10"></div>
              <p><? echo  $row['short_desc_ar'] ; ?></p>
 
               
              
 
            </div>
          </div>
         
		 <div class="col-sm-12 col-md-4">
            <div class="sidebar sidebar-left mt-sm-30 ml-30 ml-sm-0">
              
              
              <div class="widget border-1px bg-silver-deep p-15">
                <h4 class="widget-title line-bottom-theme-colored-2">التأكيد و بيانات الدفع</h4>
                               <b>
                               <p align="center">
                               
<?php 
  $status= mysqli_real_escape_string($conn,htmlspecialchars( ($_GET['status']), ENT_QUOTES, "utf-8")); 
if($status=="failed") echo $failed1='<font color="#FF0000">فشلت عملية الدفع</font>'; 
if($status=="paid")  echo  $failed1='<font color="green">عملية الدفع مقبولة <br> تم تاكيد تسجيلكم في الدورة التدريبية</font>';   
if(isset($message)) echo  $message11='<br><font color="blue">'.$message.'</font>';  



	   $message .= "<p  dir=rtl align=center>\n      ".$status.'<br>';  
	   $message .= "<p  dir=rtl align=center>\n      ".$failed1.'<br>';  
	   $message .= "<p align=center>\n      ".$message11.'<br>';  

	   $message .= "<p align=center>\nالاسم    : ".$row[name].'<br>';  
	   $message .= "<p align=center>\nالجوال   : ".$row[mobile].'<br>';  
	   $message .= "<p align=center>\n   : ".$row[cors_name].'<br>';  
	   $message .= "<p align=center>\nالبريد الالكتروني   : ".$row[mail].'<br>'; 
	   $message .= "<p align=center>\nالهوية الوطنية   : ".$row[iqama].'<br>'; 
	   $message .= "<p align=center>\nالجنسية   : ".$row[nat].'<br>'; 
	   $message .= "<p align=center>\nالمؤهل: ".$row[qualification].'<br>'; 
 
	   $message .= $message1.'<br>';
	   $message .= "\n<center>نشكرك على تواصلك مع ".$site_name."<br>تم استلام طلبك  وسوف يتم الرد عليك<br>نتمنى لكم دوام الصحة والعافية</center>"  ;  
	    $message .= "<<center><img src=".$site_url."/logo.png height=70px></center>" ;
	   $to =  $site_email; ;               
				 
	   $headers  = 'MIME-Version: 1.0' . "\r\n";
	   $headers .= 'Content-type: text/html; charset=utf-8' . "\r\n";
	   $subject = 'طلب الالتحاق بدورة جديدة';
   
	   // Additional headers
	   	   $name1=$site_name;

	   $headers .= 'To: '.$row[name].' <'.$row[mail].'>' . "\r\n";
	    $headers .= 'From:'.$name1.' <'.$site_email.'>' . "\r\n";   

									   
	   @mail($to, $subject, $message, $headers);  


?> 

                </b></font> 

                </p>

                <form id="quick_contact_form_sidebar" name="footer_quick_contact_form" class="quick-contact-form" action="" method="post">
 
 
 

<script>
    Moyasar.init({
        element: '.mysr-form',
        // Amount in the smallest currency unit.
        // For example:
        // 10 SAR = 10 * 100 Halalas
        // 10 KWD = 10 * 1000 Fils
        // 10 JPY = 10 JPY (Japanese Yen does not have fractions)
        amount: '<?php echo $row[price]*100; ?>',
        currency: 'SAR',
        description: '<?php echo $row[cors_name]; ?>',
        publishable_api_key: '<?php echo $publishable_api_key; ?>',
        callback_url: '<?php echo $site_url; ?>/thanks.php?OrderNo=<? echo $ss; ?>',
        methods: ['creditcard'],
        
         metadata: {
        "Order No":"<? echo $ss; ?>", 
        "Course name":"<? echo $row[cors_name]; ?>", 
        "Start Date":"<? echo $row[start_date_en]; ?>", 
        "End Date":"<? echo $row[end_date_en]; ?>", 
        "Course No":"<? echo $row[cors_no]; ?>", 
        "customer_email":"<? echo $row[mail]; ?>", 
        "customer_mobile":"<? echo $row[mobile]; ?>", 
        "customer_Nationality":"<? echo $row[nat]; ?>" , 
        "National Identity":"<? echo $row[iqama]; ?>", 
        "Qualification":"<? echo $row[qualification]; ?>"
        }, 
 
});


      

 
</script><hr>  <div class="form-group">
                  <input   class="form-control" type="hidden"  name='cors'  value="<? echo $ss; ?>"  required="">
                  <label>الاسم </label>: <? echo $row['name']; ?><hr>
                  </div>
                  <div class="form-group">
                                    <label>البريد الالكتروني </label>: <? echo $row['mail']; ?><hr>

</div>

<div class="form-group">
                                    <label>وسيلة الاتصال</label>: <? echo $row['mobile']; ?><hr>


 

                  </div>


<div class="form-group">
                                    <label>الهوية الوطنية</label>: <? echo $row['iqama']; ?><hr>


 
</div>

<div class="form-group">
 

                                    <label>الجنسية</label>: <? echo $row['nat']; ?><hr>


</div>

 
                  
                  
                 


 



               
                </form>

                <!-- Quick Contact Form Validation-->
                
              </div>            </div>
          </div>
        </div>
      </div>
    </section> <? }} ?>   
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