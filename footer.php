<footer id="footer" class="footer divider layer-overlay overlay-dark-9" data-bg-img="images/we-provide-bg.jpg">
    <div class="container pt-70 pb-40">

      <div class="row">
        <div class="col-sm-6 col-md-3">
          <div class="widget dark">
            <img class="mt-5 mb-20" alt="" src="images/logo-white-footer.png">
            <p><?php echo $site_address; ?></p>
            <ul class="list-inline mt-5">
              <li class="m-0 pl-10 pr-10"> <i class="fa fa-phone text-theme-colored2 mr-5"></i> <a class="text-gray" target="_blank" href="#"><?php echo $site_mobile; ?></a> </li><br>
              <li class="m-0 pl-10 pr-10"> <i class="fa fa-envelope-o text-theme-colored2 mr-5"></i> <a class="text-gray" target="_blank" href="#"><?php echo $site_email; ?></a> </li><br>
              <li class="m-0 pl-10 pr-10"> <i class="fa fa-globe text-theme-colored2 mr-5"></i> <a class="text-gray" target="_blank" href="#"><?php echo $site_url; ?> </a> </li>
            </ul>   
            
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
 
              
         
            <ul class="styled-icons icon-sm icon-bordered icon-circled clearfix mt-10">
                                <li><a target="_blank" href="<? echo $facebook; ?>"><i class="fa fa-facebook text-white"></i></a></li>
                <li><a target="_blank" href="<? echo $twitter; ?>"><i class="fa fa-twitter text-white"></i></a></li>
                <li><a target="_blank" href="<? echo $whatsapp; ?>"><i class="fa fa-whatsapp text-white"></i></a></li>
                <li><a target="_blank" href="<? echo $youtube; ?>"><i class="fa fa-youtube text-white"></i></a></li>
                <li><a target="_blank" href="<? echo $instagram; ?>"><i class="fa fa-instagram text-white"></i></a></li>
                <li><a target="_blank" href="<? echo $tiktok; ?>"><svg xmlns="http://www.w3.org/2000/svg" height="13" width="13" viewBox="0 0 448 512"><!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.--><path fill="#ffffff" d="M448 209.9a210.1 210.1 0 0 1 -122.8-39.3V349.4A162.6 162.6 0 1 1 185 188.3V278.2a74.6 74.6 0 1 0 52.2 71.2V0l88 0a121.2 121.2 0 0 0 1.9 22.2h0A122.2 122.2 0 0 0 381 102.4a121.4 121.4 0 0 0 67 20.1z"/></svg></a></li>

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