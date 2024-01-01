<?php

	

		error_reporting(0);
 

?><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<?php
			  // التاكد من ادخال البيانات
			  $empt_title=" لم تكتب عنوان المقال";
                          $empt_file="لم تختار الصورة";
			  $empt_subject="لم تكتب موضوع المقال";
	                  $empt_name="لم تكتب الاسم";
			  $empt_country="لم تكتب الجنسية";
			  $empt_play_center="لم تكتب مركز اللعب";
			  $empt_club_curren="لم تحدد النادى الحالى";
			  $empt_blog_title="Did not write the address";
                          $empt_blog_subject="لم تكتب الموضوع";         				
			  $empt_news_title="Did not write the address";
			  $empt_news_subjecr="لم تكتب موضوع الخبر";
			  $empt_cont_subject="لم تكتب بيانات الاتصال";
			  $empt_gallery_title="لم تكتب اسم الصورة";
			  $empt_gallery_file="لم تختار الصورة";
			  $empt_titlee="لم تكتب اسم جهة المعلن";
                          $empt_type="لم تختر مكان الصورة";
                          $empt_titlee_video="لم تكتب اسم الملف";
                          $empt_link_video="لم تضع رابط الملف";
			  //تنسيق البيانات
			  $color="<font color=#666666 size=4> <b>";
			  $br="<br>";
			  $color2= "<font color=red size=5> <b>";
                          $color3= "<font color=#0066CC size=4> <b>";
			  $msg="تم ادخل البيانات بنجاح";
			  $wrnog="هذا الاخطاء موجودة لديك:";
			 
                         $msg1="<script language='javascript'>window.alert('تم الحفظ بنجاح')</script>";
			  
		
			  
			  //المتغيرات
			  
			  $stitle=$_POST["title"];
			  $ssubject=$_POST["subject"];
			  $sfile=$_POST["file"];
			  $sactive=$_POST["active"];
			  $sfeatures=$_POST["features"];
			 
			  $sname=$_POST["personal1"];
			  $sphoto=$_POST["personal2"];
			  $sday=$_POST["personal3_1"];
			  $smonth=$_POST["personal3_2"];
			  $syear=$_POST["personal3_3"];
			  $snational=$_POST["personal4"];
			  $spaly_center=$_POST["personal5"];
			  $sheight=$_POST["personal6"];
			  $swidth=$_POST["personal7"];
			  $sclub_curren=$_POST["personal8"];
			  $sprice=$_POST["personal9"];
			  $sgoal=$_POST["carreer1"];
			  $smatch=$_POST["carreer2"];
			  $scate=$_POST["carreer3"];
			  $scountry=$_POST["carreer4"];
			  $sseasons=$_POST["carreer5"];
			  $sclub=$_POST["carreer6"];
		          $sintel=$_POST["ability1"];
	                  $svision=$_POST["ability2"];
			  $sscroll=$_POST["ability3"];
			  $sspeed=$_POST["ability4"];
			  $scape=$_POST["ability5"];
			  $sPay=$_POST["ability6"];
			  $sskills=$_POST["ability7"];
			  $sawards=$_POST["istics12"];
			  
                          $sanalysis=$_POST["istics2"];
                          $empt_type="لم تحدد مكان الاعلان";
                        //التحقق من الايميل

function check_email($email) {
if (eregi("^[a-z0-9]+@([0-9a-z]+\.)+[a-z]{2,3}$","$email"))
{
return true;
}}


?>