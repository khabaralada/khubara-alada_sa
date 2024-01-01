 <?php

		error_reporting(0);
 include('session.php');
	 $ID= mysqli_real_escape_string($conn,intval($_GET[ID]));
 $IDD= mysqli_real_escape_string($conn,intval($_GET[IDD]));

?>   
	<head>
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	 <style>
 

</style>
<link href="https://fonts.googleapis.com/css?family=Amiri|Katibeh|Lateef|Scheherazade" rel="stylesheet">
<link href='https://fonts.googleapis.com/css?family=Droid%20Arabic%20Kufi' rel='stylesheet' type='text/css'>

    </head>
 

      <?php
$i=0;
include ("../config.php");
$result11=mysqli_query($conn,"select* from user_crm where  username='$_SESSION[username]'");
while($row11=mysqli_fetch_array($result11))
{
$users=$row11['type'];
}
?>  


 
 
     <?php
$i=0;
include ("../config.php");
$result11=mysqli_query($conn,"select* from user_crm_button where  username='$_SESSION[username]'");
while($row11=mysqli_fetch_array($result11))
{
?>  
 
 <?php if($users=="admin") { ?>
        </li>
        
 


 

 
            <li id="submenu-active">
			<p align="right"><a href="">التواصل الاجتماعي</a>
          <!-- Active -->
          <ul>
           <li>
			<p align="right"><a href="media.php" >التواصل الاجتماعي</a></li>
 
          </ul>
        </li>


 
             

               <li id="submenu-active">
				<p align="right"><a href="">القوائم الرئيسية</a>
          <!-- Active -->
          <ul>
            <?php $i++; if($row11[n.$i]>=1) { ?><li>
			<p align="right"><a href="add_menu.php" >القوائم الرئيسية</a></li><?php } ?>
            <?php $i++; if($row11[n.$i]>=1) { ?><li>
			<p align="right"><a href="sub_menu.php" >القوائم الفرعية</a></li><?php } ?>
 
          </ul>
        </li>
        

                 <li id="submenu-active">
					<p align="right"><a href="">الصفحات</a>
          <!-- Active -->
          <ul>
  
 
            <?php $i++; if($row11[n.$i]>=1) { ?><li>
			<p align="right"><a href="add_page_ar.php" >صفحة جديدة</a></li><?php } ?>

            <?php $i++; if($row11[n.$i]>=1) { ?><li>
			<p align="right"><a href="s_page_ar.php" >تعديل الصفحات</a></li><?php } ?>
          </ul>
        </li>

     
     
     <li id="submenu-active">
					<p align="right"><a href="">المدربين</a>
          <!-- Active -->
          <ul>
  
 
 
            <?php $i++; if($row11[n.$i]>=1) { ?><li>
			<p align="right"><a href="teacher.php" >الهيئة التدريبية</a></li><?php } ?>



 
          </ul>
        </li>



    <?php if($fdfd==55) { ?> 
     <li id="submenu-active">
					<p align="right"><a href="">الدورات</a>
          <!-- Active -->
          <ul>
  
 
 
            <?php $i++; if($row11[n.$i]>=1) { ?><li>
			<p align="right"><a href="add_articles.php" >اضافة الدورات</a></li><?php } ?>



            <?php $i++; if($row11[n.$i]>=1) { ?><li>
			<p align="right"><a href="s_research.php" >إدارة الدورات</a></li><?php } ?>
          </ul>
        </li>
        
        
        <?php } ?>
        
        
                           <li id="submenu-active">
							<p align="right"><a href=""> الشركاء والعملاء</a>
          <!-- Active -->
          <ul>
            <?php $i++; if($row11[n.$i]>=1) { ?><li><p align="right"><a href="add_partners.php" >العملاء وشركاء النجاح</a></li><?php } ?>
 


          </ul>
        </li>

 
                
                


 
                


  


                     <li id="submenu-active">
					<p align="right"><a href="">الاعداد</a>
          <!-- Active -->
          <ul>
            <?php $i++; if($row11[n.$i]>=1) { ?><li>			<p align="right"><a href="add_count.php" >إدارة الأعداد</a></li><?php } ?>
 

          </ul>
        </li>

        
  
                    <li id="submenu-active">
					<p align="right"><a href="">آلبوم الصور والفيديو  </a>
          <!-- Active -->
          <ul>
            <?php $i++; if($row11[n.$i]>=1) { ?><li><p align="right"><a href="add_photo.php" >آلبوم الصور</a></li><?php } ?>
			 <?php $i++; if($row11[n.$i]>=1) { ?><li><p align="right"><a href="add_video.php" >الفيديوهات </a></li><?php } ?>
            
          </ul>
        </li>


  


                    <li id="submenu-active">
					<p align="right"><a href="">اخر الاخبار </a>
          <!-- Active -->
          <ul>
            <?php $i++; if($row11[n.$i]>=1) { ?><li><p align="right"><a href="add_news.php" >اضافة الاخبار  </a></li><?php } ?>
			 <?php $i++; if($row11[n.$i]>=1) { ?><li><p align="right"><a href="s_news.php" >تعديل وحذف الاخبار</a></li><?php } ?>
            
          </ul>
        </li>


                    <li id="submenu-active">
					<p align="right"><a href="">الإعتمادات والشهادات  </a>
          <!-- Active -->
          <ul>
            <?php  if($row11[n.$i]>=1) { ?><li><p align="right"><a href="add_orgn.php" >اضافة جديد  </a></li><?php } ?>
			 <?php   if($row11[n.$i]>=1) { ?><li><p align="right"><a href="s_orgn.php" >تعديل وحذف </a></li><?php } ?>
            
          </ul>
        </li>


                    <li id="submenu-active">
					<p align="right"><a href="">المؤتمرات والفعاليات   </a>
          <!-- Active -->
          <ul>
            <?php $i++; if($row11[n.$i]>=1) { ?><li><p align="right"><a href="add_event.php" >اضافةالمؤتمرات والفعاليات </a></li><?php } ?>
			 <?php $i++; if($row11[n.$i]>=1) { ?><li><p align="right"><a href="s_event.php" >إدارة المؤتمرات والفعاليات </a></li><?php } ?>
            
          </ul>
        </li>
 

        
         <li id="submenu-active">
						<p align="right"><a href="">التسجيل بالدورات</a>
          <!-- Active -->
          <ul>
             <li><p align="right"><a href="reg.php" >طلبات التسجيل</a></li> 
 


          </ul>
        </li>
     



        
                      <li id="submenu-active">
						<p align="right"><a href="">الاتصال بنا والإحصائيات</a>
          <!-- Active -->
          <ul>
            <?php if($row11[n.$i]>=1) { ?><li><p align="right"><a href="show_contact.php" >طلبات الاتصال </a></li><?php } ?>
            <li><p align="right"><a href="si.php" >زوار اليوم</a></li>
        <li><p align="right"><a href="si1.php" >احصائيات الزوار</a></li>


          </ul>
        </li>
     
        
        
        
           
             
 
      
  
          <!-- Active -->
          <ul>
           
 

  
       
 



<?php
 }
 else
 {
 ?><?php } 
}?>