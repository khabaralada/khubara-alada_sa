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
<!DOCTYPE html>
<html dir="ltr" lang="en">
<head>

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
              <h2 class="text-theme-colored2 font-36">  Events</h2>
              <ol class="breadcrumb   mt-10 white">
                <li><a href="index.php">Home</a></li>
                <li class="active">  
Events</li>
              </ol>
            </div>
          </div>
        </div>
      </div>
    </section>

<?
 
$ss= mysqli_real_escape_string($conn,$_GET['year']);
if($ss=="")
$result=mysqli_query($conn,"select* from  testimonial order by ID DESC  ");
else
$result=mysqli_query($conn,"select* from testimonial  where year='$ss' order by ID DESC  ");

$rows=mysqli_num_rows($result) ; 
if($rows > 0 )
{
?>  
<section>
      <div class="container pt-70 pb-40">
        <div class="section-content">
          <div class="row multi-row-clearfix">
             
<?
while($row=mysqli_fetch_array($result))
{
?>        
            <div class="col-sm-6 col-md-4">
              <article class="post clearfix mb-30">
                <div class="entry-header">
                  <div class="post-thumb thumb"> 
                    <img   src="../testimonial/<? echo $row['photo']; ?>"  style="width:372px;height:246px"  alt="" class="img-responsive img-fullwidth"> 
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
                      <div class="event-content pull-left flip">
                        <h4 class="entry-title text-white text-uppercase font-weight-600 m-0 mt-5"><a href="testimonial.php?ID=<? echo $row['ID']; ?>"><? echo  strip_tags(substr($row['address_en'],0,60)); ?> </a></h4>
                            <ul class="list-inline">
                              <li><i class="fa fa-user-o ml-5 text-theme-colored2"></i>BY professional</li>
                              <li><i class="fa fa-thumbs-o-up ml-5 text-theme-colored2"></i>Likes</li>
                              <li><i class="fa fa-share-alt ml-5 text-theme-colored2"></i> 895 Likes</li>

                            </ul>
                      </div>
                    </div>
                  </div>
                      <p class="mt-5"><? echo strip_tags(substr($row['news_en'],0,300)); ?></p>
											<a class="btn btn-default btn-flat font-12 mt-10 ml-5" href="testimonial.php?ID=<? echo $row['ID']; ?>">Read More</a>
                </div>
              </article>
            </div><? } ?>
            
          </div>
        </div>
      </div>
    </section>
<?php  } else { ?>
    <section>
      <div class="container">
        <div class="section-content">
          <div class="row">
            <div class="col-md-5">
              <img class="img-fullwidth" src="../under.png" alt="">
            </div>
            <div class="col-md-7">
              <h2 class="text-uppercasetext-theme-colored mt-0 mt-sm-30"> </h2>
              <div class="double-line-bottom-theme-colored-2"></div>
 
              <p class="hidden-md"></p>
 
            </div>
             
          </div>
        </div>
      </div>
    </section>
<? } ?>  


    
    
    
    
    <!-- Divider: Funfact -->
    <section class="layer-overlay overlay-theme-colored-9" data-bg-img="../images/we-provide-bg.jpg" data-parallax-ratio="0.7">
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
              <h5 class="text-white text-uppercase"><? echo $row['name_en']; ?></h5>
            </div>
          </div><? } ?>
          
        </div>
      </div>
    </section>

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
$result=mysqli_query($conn,"select* from teachers ");
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