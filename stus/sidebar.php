
<head>
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
</head>
 
 <aside class="main-sidebar"><!-- The Right Sidebar -->
      <aside class="control-sidebar control-sidebar-dark">
        <!-- Content of the sidebar goes here -->
      </aside>
      <!-- The sidebar's background -->
      <!-- This div must placed right after the sidebar for it to work-->
      <div class="control-sidebar-bg"></div>
        <!-- sidebar: style can be found in sidebar.less -->
        <section class="sidebar"> 
          <!-- Sidebar user panel -->
          <div class="user-panel">
            <div class="pull-left image">
            <? if($_SESSION[image]!="") { ?> <img src="dist/img/<? echo $_SESSION[image]; ?>" class="img-circle" alt="User Image" />
            <? } else { ?> 
            <? if($_SESSION['Branches']==3) { ?><img src="dist/img/avatar2.png" class="img-circle" alt="User Image" /><? } else { ?>
            <img src="dist/img/avatar5.png" class="img-circle" alt="User Image" />
            <? } ?>
            
            <? } ?>
            </div>
            <div  >
              <p align="center">  <font color="#FFFFFF">  <?   echo $name; ?></font></p>

              <p align="center">

              <a href="#"> متصل <i class="fa fa-circle text-success  fa-2x"></i>&nbsp;&nbsp;</a>
            </div>
          </div>
          <!-- search form -->
 
<? if($_SESSION['acount_type']!=6) { ?>          

         <form action="find.php" method="post" class="sidebar-form" >
            <div class="input-group">
               <span class="input-group-btn">
                <button type='submit' name='search' id='search-btn' class="btn btn-flat"><i class="fa fa-search  fa-2x"></i>&nbsp;&nbsp;</button>
              </span>
              <input type="text" name="find" class="form-control" placeholder="Search for trainee" dir="rtl"/ >
             
            </div>
          </form> <? } ?>
          
         

          <!-- /.search form -->
          <!-- sidebar menu: : style can be found in sidebar.less -->
          

     <? 
$query1 = "select *   from teacher  where   username='$_SESSION[username]'";
$result1 = mysqli_query($conn,$query1);
while($row1=mysqli_fetch_array($result1))
{
  $cors=$row1['cors'];
}
 ?>
         
<? if($_SESSION['acount_type']==1) { ?>          
 <ul class="sidebar-menu" dir="rtl">
            <li class="header"></li>
 
  
<li class="treeview">
<a href="#">
<i class="fa fa-envelope-o  fa-2x"></i>&nbsp;&nbsp;
<span>البريد الالكتروني   E-Mail</span>
<i class="fa fa-angle-left pull-left  fa-2x"></i>&nbsp;&nbsp;
</a>
<ul class="treeview-menu">
 <li dir="rtl" align="right">	 <a href="mailbox.php?aID=<? echo $row11[n.$i]; ?>#top" ><font face="Droid Arabic Kufi" color="#ffffff" ><i class="fa fa-circle-o  fa-2x"></i>&nbsp;&nbsp; الوارد Inbox  
 
 <span class="label    bg-Teal pull-left">
<?
$query1 = "select count(*) as Research_ID from  inbox,user   where user.ID=inbox.Recepion    and username='$_SESSION[username]'  and msg_delete=0";
$result1 = mysqli_query($conn,$query1);
while($row1=mysqli_fetch_array($result1))
{
echo $row1['Research_ID'];
}
?></span></font></a></li>
 <li dir="rtl" align="right">	 <a href="sent.php?aID=<? echo $row11[n.$i]; ?>#top" ><font face="Droid Arabic Kufi" color="#ffffff" ><i class="fa fa-envelope-o  fa-2x"></i>&nbsp;&nbsp;  Sent - الرسائل المرسلة 
  <span class="label    bg-Teal pull-left">
<?
$query1 = "select count(*) as Research_ID from  inbox,user   where user.ID=inbox.Sender and username='$_SESSION[username]' and send_delete=0";
$result1 = mysqli_query($conn,$query1);
while($row1=mysqli_fetch_array($result1))
{
echo $row1['Research_ID'];
}
?></span></font></a></li>
 <li dir="rtl" align="right">	 <a href="trash.php?aID=<? echo $row11[n.$i]; ?>#top" ><font face="Droid Arabic Kufi" color="#ffffff" ><i class="fa fa fa-trash-o  fa-2x"></i>&nbsp;&nbsp;  Trash - المحذوفات 
  <span class="label    bg-Teal pull-left">
<?
$query1 = "select count(*) as Research_ID from  inbox,user   where user.ID=inbox.Recepion    and username='$_SESSION[username]'  and msg_delete=1";
$result1 = mysqli_query($conn,$query1);
while($row1=mysqli_fetch_array($result1))
{
echo $row1['Research_ID'];
}
?></span></font></a></li>
</ul>
</li>

 

 <li class="treeview">
<a href="#">
<i class="fa  fa-users  fa-2x"></i>&nbsp;&nbsp;
<span>الإعدادات   Settings</span>
<i class="fa fa-angle-left pull-left  fa-2x"></i>&nbsp;&nbsp;
</a>
<ul class="treeview-menu">
 <li dir="rtl" align="right">	 <a href="setting.php?aID=<? echo $row11[n.$i]; ?>#top" ><font face="Droid Arabic Kufi" color="#ffffff" ><i class="fa fa-circle-o  fa-2x"></i>&nbsp;&nbsp;الإعدادات العامة<br> General Settings</font></a></li>
  <li dir="rtl" align="right">	 <a href="regcatogry.php?aID=<? echo $row11[n.$i]; ?>#top" ><font face="Droid Arabic Kufi" color="#ffffff" ><i class="fa fa-circle-o  fa-2x"></i>&nbsp;&nbsp;بيانات الدفع <br> Payment data</font></a></li>

</ul>
</li>


 <li class="treeview">
<a href="#">
<i class="fa  fa-users  fa-2x"></i>&nbsp;&nbsp;
<span>المستخدمين والشركات <br> Users and Companies</span>
<i class="fa fa-angle-left pull-left  fa-2x"></i>&nbsp;&nbsp;
</a>
<ul class="treeview-menu">
 <li dir="rtl" align="right">	 <a href="users.php?aID=<? echo $row11[n.$i]; ?>#top" ><font face="Droid Arabic Kufi" color="#ffffff" ><i class="fa fa-circle-o  fa-2x"></i>&nbsp;&nbsp;مستخدمين النظام<br>System users</font></a></li>
 <li dir="rtl" align="right">	 <a href="com.php?aID=<? echo $row11[n.$i]; ?>#top" ><font face="Droid Arabic Kufi" color="#ffffff" ><i class="fa fa-circle-o  fa-2x"></i>&nbsp;&nbsp;الشركات الداعمة<br>Supporting companies</font></a></li>
</ul>
</li>

<? if($dsdsds==32) { ?>
 <li class="treeview">
<a href="#">
<i class="fa fa-certificate  fa-2x"></i>&nbsp;&nbsp;
<span>شهادات اللغات الاجنبية<br>Foreign language certificates  </span>
<i class="fa fa-angle-left pull-left  fa-2x"></i>&nbsp;&nbsp;
</a>
<ul class="treeview-menu">
<li dir="rtl" align="right">	 <a href="cer_eng1.php?aID=<? echo $row11[n.$i]; ?>#top" ><font face="Droid Arabic Kufi" color="#ffffff" ><i class="fa fa-circle-o  fa-2x"></i>&nbsp;&nbsp;شهادات اللغات<br>English language </font></a></li>
</ul>
</li>
<? } ?>



<li class="treeview">
<a href="#">
<i class="fa fa-calendar-o  fa-2x"></i>&nbsp;&nbsp;
<span>الدورات والمستويات<br>Courses and levels</span>
<i class="fa fa-angle-left pull-left  fa-2x"></i>&nbsp;&nbsp;
</a>
<ul class="treeview-menu">
  <li dir="rtl" align="right">	 <a href="add_deplom.php?aID=<? echo $row11[n.$i]; ?>#top" ><font face="Droid Arabic Kufi" color="#ffffff" ><i class="fa fa-circle-o  fa-2x"></i>&nbsp;&nbsp;المجالات والدبلومات<br>Domains and Diplomas</font></a></li>
  <li dir="rtl" align="right">	 <a href="add_cors.php?aID=<? echo $row11[n.$i]; ?>#top" ><font face="Droid Arabic Kufi" color="#ffffff" ><i class="fa fa-circle-o  fa-2x"></i>&nbsp;&nbsp; تسجيل مواد جديدة<br>Register a new course</font></a></li>
  <li dir="rtl" align="right">	 <a href="e_cors.php?aID=<? echo $row11[n.$i]; ?>#top" ><font face="Droid Arabic Kufi" color="#ffffff" ><i class="fa fa-circle-o  fa-2x"></i>&nbsp;&nbsp; إدارة  المواد<br>Modify and delete the course</font></a></li>
</ul>
</li>


  <li dir="rtl" align="right">	 <a href="test_teacher_evaluation.php?aID=<? echo $row11[n.$i]; ?>#top" ><font face="Droid Arabic Kufi"  ><i class="fa fa-circle-o  fa-2x"></i>&nbsp;&nbsp; نتائج الاستبيان وتقييم المدربين<br>Evaluation results</font></a></li>


<li class="treeview">
<a href="#">
<i class="fa fa-calendar-o  fa-2x"></i>&nbsp;&nbsp;
<span>اسئلة الاستبيان   </span>
<i class="fa fa-angle-left pull-left  fa-2x"></i>&nbsp;&nbsp;
</a>
<ul class="treeview-menu">
  <li dir="rtl" align="right">	 <a href="questions_teacher.php?aID=<? echo $row11[n.$i]; ?>#top" ><font face="Droid Arabic Kufi" color="#ffffff" ><i class="fa fa-circle-o  fa-2x"></i>&nbsp;&nbsp;إستبيان المدرب</font></a></li>

  <li dir="rtl" align="right">	 <a href="questions_student.php?aID=<? echo $row11[n.$i]; ?>#top" ><font face="Droid Arabic Kufi" color="#ffffff" ><i class="fa fa-circle-o  fa-2x"></i>&nbsp;&nbsp;استبيان المتدرب</font></a></li>
 
</ul>
</li>


<li class="treeview">
<a href="#">
<i class="fa fa-calendar-o  fa-2x"></i>&nbsp;&nbsp;
<span>اسئلة الاختبارات  <br>Test questions</span>
<i class="fa fa-angle-left pull-left  fa-2x"></i>&nbsp;&nbsp;
</a>
<ul class="treeview-menu">
  <li dir="rtl" align="right">	 <a href="cat_questions.php?aID=<? echo $row11[n.$i]; ?>#top" ><font face="Droid Arabic Kufi" color="#ffffff" ><i class="fa fa-circle-o  fa-2x"></i>&nbsp;&nbsp;إعدادات الاختبارات<br>Test settings</font></a></li>

  <li dir="rtl" align="right">	 <a href="questions.php?aID=<? echo $row11[n.$i]; ?>#top" ><font face="Droid Arabic Kufi" color="#ffffff" ><i class="fa fa-circle-o  fa-2x"></i>&nbsp;&nbsp;ادارة اسئلة الاختبارات<br>Managing test questions</font></a></li>
 
</ul>
</li>



<li class="treeview">
<a href="#">
<i class="fa fa-tasks  fa-2x"></i>&nbsp;&nbsp;
<span>  القاعات الدراسية<br>Classrooms</span>
<i class="fa fa-angle-left pull-left  fa-2x"></i>&nbsp;&nbsp;
</a>
<ul class="treeview-menu">
  <li dir="rtl" align="right">	 <a href="add_class.php?aID=<? echo $row11[n.$i]; ?>#top" ><font face="Droid Arabic Kufi" color="#ffffff" ><i class="fa fa-circle-o  fa-2x"></i>&nbsp;&nbsp; اضافة قاعات دراسية جديدة<br>Add new classrooms</font></a></li>
  <li dir="rtl" align="right">	 <a href="e_bil.php?aID=<? echo $row11[n.$i]; ?>#top" ><font face="Droid Arabic Kufi" color="#ffffff" ><i class="fa fa-circle-o  fa-2x"></i>&nbsp;&nbsp;   إدارة  القاعات دراسية<br>Modification and deletion of classrooms</font></a></li>
</ul>
</li>

          
<li class="treeview">
<a href="#">
<i class="fa fa-bar-chart-o  fa-2x"></i>&nbsp;&nbsp;
<span>الشعب الدراسية <br> Section </span>
<i class="fa fa-angle-left pull-left  fa-2x"></i>&nbsp;&nbsp;
</a>
<ul class="treeview-menu">
  <li dir="rtl" align="right">	 <a href="mang_cors.php?aID=<? echo $row11[n.$i]; ?>#top" ><font face="Droid Arabic Kufi" color="#ffffff" ><i class="fa fa-circle-o  fa-2x"></i>&nbsp;&nbsp;إدارة الدورات التأهيلية<br>Qualifying courses </font></a></li>
  <li dir="rtl" align="right">	 <a href="mang_cors_tatwery.php?aID=<? echo $row11[n.$i]; ?>#top" ><font face="Droid Arabic Kufi" color="#ffffff" ><i class="fa fa-circle-o  fa-2x"></i>&nbsp;&nbsp;إدارة الدورات التطويرية<br>Development courses</font></a></li>
  <li dir="rtl" align="right">	 <a href="mang_cors_eng.php?aID=<? echo $row11[n.$i]; ?>#top" ><font face="Droid Arabic Kufi" color="#ffffff" ><i class="fa fa-circle-o  fa-2x"></i>&nbsp;&nbsp;إدارة دورات اللغات الأجنبية<br>English Language</font></a></li>
  <? if($dsdsds==32) { ?><li dir="rtl" align="right">	 <a href="mang_cors_ch.php?aID=<? echo $row11[n.$i]; ?>#top" ><font face="Droid Arabic Kufi" color="#ffffff" ><i class="fa fa-circle-o  fa-2x"></i>&nbsp;&nbsp;إدارة دورات اللفة الصينية<br>Chinese Language</font></a></li><? } ?>
  <li dir="rtl" align="right">	 <a href="mang_cors_deplome.php?aID=<? echo $row11[n.$i]; ?>#top" ><font face="Droid Arabic Kufi" color="#ffffff" ><i class="fa fa-circle-o  fa-2x"></i>&nbsp;&nbsp;إدارة الدبلوم والبرنامج التدريبي<br>Diploma and training program</font></a></li>
  <li dir="rtl" align="right">	 <a href="a_teacher_cors.php?aID=<? echo $row11[n.$i]; ?>#top" ><font face="Droid Arabic Kufi" color="#ffffff" ><i class="fa fa-circle-o  fa-2x"></i>&nbsp;&nbsp;إدارة الدورات التدريبية والمدرسين<br>Training courses and teachers</font></a></li>
</ul>
</li>


<? if($dsdsds==32) { ?>

<li class="treeview">
<a href="#">
<i class="fa fa-bar-chart-o  fa-2x"></i>&nbsp;&nbsp;
<span>دورات الاونلاين<br> Online </span>
<i class="fa fa-angle-left pull-left  fa-2x"></i>&nbsp;&nbsp;
</a>
<ul class="treeview-menu">
  <li dir="rtl" align="right">	 <a href="online.php?aID=<? echo $row11[n.$i]; ?>#top" ><font face="Droid Arabic Kufi" color="#ffffff" ><i class="fa fa-circle-o  fa-2x"></i>&nbsp;&nbsp;الدورات الاونلاين<br>Online</font></a></li>
</ul>
</li>
<? } ?>



  <li dir="rtl" align="right">	 <a href="amang_corss.php?aID=<? echo $row11[n.$i]; ?>#top" ><font face="Droid Arabic Kufi" color="#ffffff" ><i class="fa fa-circle-o  fa-2x"></i>&nbsp;&nbsp;الواجبات والمحتوي <br>  Courses educational content</font></a></li>

 <li dir="rtl" align="right">	 <a href="mail_teacher.php?aID=<? echo $row11[n.$i]; ?>#top" ><font face="Droid Arabic Kufi" color="#ffffff" ><i class="fa fa-envelope-o  fa-2x"></i>&nbsp;&nbsp;النقاشات الرسائل والتعليقات<br>        Messages and comments</font></a></li>




 <li class="treeview">
<a href="#">
<i class="fa  fa-calendar  fa-2x"></i>&nbsp;&nbsp;
<span>تسجيل المتدربين<br>Registration of trainees </span>
<i class="fa fa-angle-left pull-left  fa-2x"></i>&nbsp;&nbsp;
</a>
<ul class="treeview-menu">
  <li dir="rtl" align="right">	 <a href="stu.php?aID=<? echo $row11[n.$i]; ?>#top" ><font face="Droid Arabic Kufi" color="#ffffff" ><i class="fa fa-circle-o  fa-2x"></i>&nbsp;&nbsp;تسجيل المتدربين والدورات<br>Registration of trainees and courses</font></a></li>
  <li dir="rtl" align="right">	 <a href="Payments.php?aID=<? echo $row11[n.$i]; ?>#top" ><font face="Droid Arabic Kufi" color="#ffffff" ><i class="fa fa-circle-o  fa-2x"></i>&nbsp;&nbsp;التحصيل والأقساط <br>Collection and installments</font></a></li> 
  <li dir="rtl" align="right">	 <a href="Payments_cors.php?aID=<? echo $row11[n.$i]; ?>#top" ><font face="Droid Arabic Kufi" color="#ffffff" ><i class="fa fa-circle-o  fa-2x"></i>&nbsp;&nbsp;الايرادات اليومية<br>  Daily revenue</font></a></li> 
 
</ul>
</li>




 <li class="treeview">
<a href="#">
<i class="fa  fa-desktop  fa-2x"></i>&nbsp;&nbsp;
<span> الجداول والقاعات الدراسية<br>Tables and classrooms</span>
<i class="fa fa-angle-left pull-left  fa-2x"></i>&nbsp;&nbsp;
</a>
<ul class="treeview-menu">
<li dir="rtl" align="right">	 <a href="tables2.php?aID=<? echo $row11[n.$i]; ?>#top" ><font face="Droid Arabic Kufi" color="#ffffff" ><i class="fa fa-circle-o  fa-2x"></i>&nbsp;&nbsp;جدول قسم الحاسب الالي<br>Computer department table</font><font face="Droid Arabic Kufi" color="#FF0000" ><b><small class="label pull-left bg-yellow"><? echo $noco; ?></small></b></font></a></li>
<li dir="rtl" align="right">	 <a href="tables.php?aID=<? echo $row11[n.$i]; ?>#top" ><font face="Droid Arabic Kufi" color="#ffffff" ><i class="fa fa-circle-o  fa-2x"></i>&nbsp;&nbsp;قسم اللغة الانجليزية <br>English department  </font><font face="Droid Arabic Kufi" color="#FF0000" ><b><small class="label pull-left bg-yellow"><? echo $noco; ?></small></b></font></a></li>
<li dir="rtl" align="right">	 <a href="table_cors_teacher.php?aID=<? echo $row11[n.$i]; ?>#top" ><font face="Droid Arabic Kufi" color="#ffffff" ><i class="fa fa-circle-o  fa-2x"></i>&nbsp;&nbsp;جدول المدربين / المحاضرين<br>Schedule of trainers / lecturers </font><font face="Droid Arabic Kufi" color="#FF0000" ><b><small class="label pull-left bg-yellow"><? echo $noco; ?></small></b></font></a></li>
<li dir="rtl" align="right">	 <a href="table_cors_stu.php?aID=<? echo $row11[n.$i]; ?>#top" ><font face="Droid Arabic Kufi" color="#ffffff" ><i class="fa fa-circle-o  fa-2x"></i>&nbsp;&nbsp;جدول المتدربين / الطلاب<br>Schedule of trainees / students</font><font face="Droid Arabic Kufi" color="#FF0000" ><b><small class="label pull-left bg-yellow"><? echo $co; ?></small></b></font></a></li>
<li dir="rtl" align="right">	 <a href="table_class.php?aID=<? echo $row11[n.$i]; ?>#top" ><font face="Droid Arabic Kufi" color="#ffffff" ><i class="fa fa-circle-o  fa-2x"></i>&nbsp;&nbsp;تقرير بالقاعات الدراسية<br>Classroom report</font><font face="Droid Arabic Kufi" color="#FF0000" ><b><small class="label pull-left bg-yellow"><? echo $co; ?></small></b></font></a></li>
</ul>
</li>


 <li class="treeview">
<a href="#">
<i class="fa fa-user  fa-2x"></i>&nbsp;&nbsp;
<span>حضور وغياب المتدربين <br>Attendance and absence of trainees</span>
<i class="fa fa-angle-left pull-left  fa-2x"></i>&nbsp;&nbsp;
</a>
<ul class="treeview-menu">
 
  <li dir="rtl" align="right">	 <a href="prepare.php?aID=<? echo $row11[n.$i]; ?>#top" target=_blank><font face="Droid Arabic Kufi" color="#ffffff" ><i class="fa fa-circle-o  fa-2x"></i>&nbsp;&nbsp;التحضير برقم الهوية /الباركود<br> Preparation with ID / barcode number</font></a></li>
  <li dir="rtl" align="right">	 <a href="amang_cors_deplome.php?aID=<? echo $row11[n.$i]; ?>#top" ><font face="Droid Arabic Kufi" color="#ffffff" ><i class="fa fa-circle-o  fa-2x"></i>&nbsp;&nbsp;الدبلوم التدريبي<br>Training Diploma</font></a></li>
  <li dir="rtl" align="right">	 <a href="amang_cors.php?aID=<? echo $row11[n.$i]; ?>#top" ><font face="Droid Arabic Kufi" color="#ffffff" ><i class="fa fa-circle-o  fa-2x"></i>&nbsp;&nbsp;الدورات التأهيلية<br>Qualifying courses</font></a></li>
  <li dir="rtl" align="right">	 <a href="amang_cors_tatwery.php?aID=<? echo $row11[n.$i]; ?>#top" ><font face="Droid Arabic Kufi" color="#ffffff" ><i class="fa fa-circle-o  fa-2x"></i>&nbsp;&nbsp;الدورات التطويرية<br>Development courses</font></a></li>
  <li dir="rtl" align="right">	 <a href="amang_cors_eng.php?aID=<? echo $row11[n.$i]; ?>#top" ><font face="Droid Arabic Kufi" color="#ffffff" ><i class="fa fa-circle-o  fa-2x"></i>&nbsp;&nbsp;دورات اللغات الأجنبية<br>English language courses</font></a></li>
</ul>
</li>



 <li class="treeview">
<a href="#">
<i class="fa fa-file  fa-2x"></i>&nbsp;&nbsp;
<span>تقرير الحصور والغياب <br>Attendance and absence report </span>
<i class="fa fa-angle-left pull-left  fa-2x"></i>&nbsp;&nbsp;
</a>
<ul class="treeview-menu">
  <li dir="rtl" align="right">	 <a href="rmang_cors_deplome.php?aID=<? echo $row11[n.$i]; ?>#top" ><font face="Droid Arabic Kufi" color="#ffffff" ><i class="fa fa-circle-o  fa-2x"></i>&nbsp;&nbsp;الدبلوم التدريبي<br>Training Diploma</font></a></li>
  <li dir="rtl" align="right">	 <a href="rmang_cors.php?aID=<? echo $row11[n.$i]; ?>#top" ><font face="Droid Arabic Kufi" color="#ffffff" ><i class="fa fa-circle-o  fa-2x"></i>&nbsp;&nbsp;تقرير الدورات التأهيلية<br>Report of qualifying courses</font></a></li>
  <li dir="rtl" align="right">	 <a href="rmang_cors_tatwery.php?aID=<? echo $row11[n.$i]; ?>#top" ><font face="Droid Arabic Kufi" color="#ffffff" ><i class="fa fa-circle-o  fa-2x"></i>&nbsp;&nbsp;تقرير الدورات التطويرية<br>Report of development courses</font></a></li>
  <li dir="rtl" align="right">	 <a href="rmang_cors_eng.php?aID=<? echo $row11[n.$i]; ?>#top" ><font face="Droid Arabic Kufi" color="#ffffff" ><i class="fa fa-circle-o  fa-2x"></i>&nbsp;&nbsp;تقرير دورات اللغات الأجنبية<br>English Language Courses Report</font></a></li>
</ul>
</li>


<li class="treeview">
<a href="#">
<i class="fa fa-flag  fa-2x"></i>&nbsp;&nbsp;
<span>الدرجات وشهادات التخرج <br>Degrees and graduation certificates </span>
<i class="fa fa-angle-left pull-left  fa-2x"></i>&nbsp;&nbsp;
</a>
<ul class="treeview-menu">
   <li dir="rtl" align="right">	 <a href="smang_iqama.php?aID=<? echo $row11[n.$i]; ?>#top" ><font face="Droid Arabic Kufi" color="#ffffff" ><i class="fa fa-circle-o  fa-2x"></i>&nbsp;&nbsp;درجات المتدرب<br>Trainee degrees</font></a></li>
   <li dir="rtl" align="right">	 <a href="smang_cors_deplome.php?aID=<? echo $row11[n.$i]; ?>#top" ><font face="Droid Arabic Kufi" color="#ffffff" ><i class="fa fa-circle-o  fa-2x"></i>&nbsp;&nbsp;الدبلوم التدريبي<br>Training Diploma</font></a></li>
   <li dir="rtl" align="right">	 <a href="smang_cors.php?aID=<? echo $row11[n.$i]; ?>#top" ><font face="Droid Arabic Kufi" color="#ffffff" ><i class="fa fa-circle-o  fa-2x"></i>&nbsp;&nbsp;الدورات التأهيلية<br>Qualifying courses</font></a></li>
   <li dir="rtl" align="right">	 <a href="smang_cors_tatwery.php?aID=<? echo $row11[n.$i]; ?>#top" ><font face="Droid Arabic Kufi" color="#ffffff" ><i class="fa fa-circle-o  fa-2x"></i>&nbsp;&nbsp;الدورات التطويرية<br>Development courses</font></a></li>
   <li dir="rtl" align="right">	 <a href="smang_cors_eng.php?aID=<? echo $row11[n.$i]; ?>#top" ><font face="Droid Arabic Kufi" color="#ffffff" ><i class="fa fa-circle-o  fa-2x"></i>&nbsp;&nbsp;دورات اللغات الأجنبية<br>English language courses</font></a></li>
</ul>
</li>


 <li class="treeview">
<a href="#">
<i class="fa  fa-book  fa-2x"></i>&nbsp;&nbsp;
<span>التقارير والإحصائيات<br>Reports and statistics</span>
<i class="fa fa-angle-left pull-left  fa-2x"></i>&nbsp;&nbsp;
</a>
<ul class="treeview-menu">

<li dir="rtl" align="right">	 <a href="rep1.php?aID=<? echo $row11[n.$i]; ?>#top" >		<font face="Droid Arabic Kufi" face="Droid Arabic Kufi" color="#ffffff" ><i class="fa fa-circle-o  fa-2x"></i>&nbsp;&nbsp;  تقرير بأعداد الحضور <br>Report of attendance numbers </font></a></li> 
<li dir="rtl" align="right">	 <a href="rep2.php?aID=<? echo $row11[n.$i]; ?>#top" >		<font face="Droid Arabic Kufi" face="Droid Arabic Kufi" color="#ffffff" ><i class="fa fa-circle-o  fa-2x"></i>&nbsp;&nbsp;  تقرير بتفعيل النظام<br>System activation report</font></a></li> 
<li dir="rtl" align="right">	 <a href="all_rep2.php?aID=<? echo $row11[n.$i]; ?>#top" >		<font face="Droid Arabic Kufi" face="Droid Arabic Kufi" color="#ffffff" ><i class="fa fa-circle-o  fa-2x"></i>&nbsp;&nbsp;تقرير بالمدرسين<br>Report for teachers</font></a></li> 
</ul>
</li>

</ul>
 
 <? }   ?>   
          


<? if($_SESSION['acount_type']==7) { ?>          
 <ul class="sidebar-menu" dir="rtl">
            <li class="header"></li>
 
  
<li class="treeview">
<a href="#">
<i class="fa fa-envelope-o  fa-2x"></i>&nbsp;&nbsp;
<span>البريد الالكتروني   E-Mail</span>
<i class="fa fa-angle-left pull-left  fa-2x"></i>&nbsp;&nbsp;
</a>
<ul class="treeview-menu">
 <li dir="rtl" align="right">	 <a href="mailbox.php?aID=<? echo $row11[n.$i]; ?>#top" ><font face="Droid Arabic Kufi" color="#ffffff" ><i class="fa fa-circle-o  fa-2x"></i>&nbsp;&nbsp; الوارد Inbox  
 
 <span class="label    bg-Teal pull-left">
<?
$query1 = "select count(*) as Research_ID from  inbox,user   where user.ID=inbox.Recepion    and username='$_SESSION[username]'  and msg_delete=0";
$result1 = mysqli_query($conn,$query1);
while($row1=mysqli_fetch_array($result1))
{
echo $row1['Research_ID'];
}
?></span></font></a></li>
 <li dir="rtl" align="right">	 <a href="sent.php?aID=<? echo $row11[n.$i]; ?>#top" ><font face="Droid Arabic Kufi" color="#ffffff" ><i class="fa fa-envelope-o  fa-2x"></i>&nbsp;&nbsp;  Sent - الرسائل المرسلة 
  <span class="label    bg-Teal pull-left">
<?
$query1 = "select count(*) as Research_ID from  inbox,user   where user.ID=inbox.Sender and username='$_SESSION[username]' and send_delete=0";
$result1 = mysqli_query($conn,$query1);
while($row1=mysqli_fetch_array($result1))
{
echo $row1['Research_ID'];
}
?></span></font></a></li>
 <li dir="rtl" align="right">	 <a href="trash.php?aID=<? echo $row11[n.$i]; ?>#top" ><font face="Droid Arabic Kufi" color="#ffffff" ><i class="fa fa fa-trash-o  fa-2x"></i>&nbsp;&nbsp;  Trash - المحذوفات 
  <span class="label    bg-Teal pull-left">
<?
$query1 = "select count(*) as Research_ID from  inbox,user   where user.ID=inbox.Recepion    and username='$_SESSION[username]'  and msg_delete=1";
$result1 = mysqli_query($conn,$query1);
while($row1=mysqli_fetch_array($result1))
{
echo $row1['Research_ID'];
}
?></span></font></a></li>
</ul>
</li>

 



  <li dir="rtl" align="right">	 <a href="stu.php?aID=<? echo $row11[n.$i]; ?>#top" ><font face="Droid Arabic Kufi" color="#ffffff" ><i class="fa fa-circle-o  fa-2x"></i>&nbsp;&nbsp;تسجيل المتدربين والدورات<br>Registration of trainees and courses</font></a></li>
  <li dir="rtl" align="right">	 <a href="Payments.php?aID=<? echo $row11[n.$i]; ?>#top" ><font face="Droid Arabic Kufi" color="#ffffff" ><i class="fa fa-circle-o  fa-2x"></i>&nbsp;&nbsp;التحصيل والأقساط <br>Collection and installments</font></a></li> 
  <li dir="rtl" align="right">	 <a href="Payments_cors.php?aID=<? echo $row11[n.$i]; ?>#top" ><font face="Droid Arabic Kufi" color="#ffffff" ><i class="fa fa-circle-o  fa-2x"></i>&nbsp;&nbsp;الايرادات اليومية<br>  Daily revenue</font></a></li> 

 
</ul>
 
 <? }   ?>  
 

          
<? if($_SESSION['acount_type']==3) { ?>  
 <ul class="sidebar-menu" dir="rtl">
  <li class="header"></li>
 
  
<li class="treeview">
<a href="#">
<i class="fa fa-envelope-o  fa-2x"></i>&nbsp;&nbsp;
<span>البريد الالكتروني   E-Mail</span>
<i class="fa fa-angle-left pull-left  fa-2x"></i>&nbsp;&nbsp;
</a>
<ul class="treeview-menu">
 <li dir="rtl" align="right">	 <a href="mailbox.php?aID=<? echo $row11[n.$i]; ?>#top" ><font face="Droid Arabic Kufi" color="#ffffff" ><i class="fa fa-circle-o  fa-2x"></i>&nbsp;&nbsp; الوارد Inbox  
 
 <span class="label    bg-Teal pull-left">
<?
$query1 = "select count(*) as Research_ID from  inbox,user   where user.ID=inbox.Recepion    and username='$_SESSION[username]'  and msg_delete=0";
$result1 = mysqli_query($conn,$query1);
while($row1=mysqli_fetch_array($result1))
{
echo $row1['Research_ID'];
}
?></span></font></a></li>
 <li dir="rtl" align="right">	 <a href="sent.php?aID=<? echo $row11[n.$i]; ?>#top" ><font face="Droid Arabic Kufi" color="#ffffff" ><i class="fa fa-envelope-o  fa-2x"></i>&nbsp;&nbsp;  Sent - الرسائل المرسلة 
  <span class="label    bg-Teal pull-left">
<?
$query1 = "select count(*) as Research_ID from  inbox,user   where user.ID=inbox.Sender and username='$_SESSION[username]' and send_delete=0";
$result1 = mysqli_query($conn,$query1);
while($row1=mysqli_fetch_array($result1))
{
echo $row1['Research_ID'];
}
?></span></font></a></li>
 <li dir="rtl" align="right">	 <a href="trash.php?aID=<? echo $row11[n.$i]; ?>#top" ><font face="Droid Arabic Kufi" color="#ffffff" ><i class="fa fa fa-trash-o  fa-2x"></i>&nbsp;&nbsp;  Trash - المحذوفات 
  <span class="label    bg-Teal pull-left">
<?
$query1 = "select count(*) as Research_ID from  inbox,user   where user.ID=inbox.Recepion    and username='$_SESSION[username]'  and msg_delete=1";
$result1 = mysqli_query($conn,$query1);
while($row1=mysqli_fetch_array($result1))
{
echo $row1['Research_ID'];
}
?></span></font></a></li>
</ul>
</li>


<li class="treeview">
<a href="#">
<i class="fa fa-caret-square-o-left  fa-2x"></i>&nbsp;&nbsp;
<span>البث المباشر وموعيد الدورات<br>
Courses and live appointment
</span>
<i class="fa fa-angle-left pull-left  fa-2x"></i>&nbsp;&nbsp;
</a>
<ul class="treeview-menu">
 <li dir="rtl" align="right">	 <a href="live.php?aID=<? echo $row11[n.$i]; ?>#top" ><font face="Droid Arabic Kufi" color="#ffffff" ><i class="fa fa-circle-o  fa-2x"></i>&nbsp;&nbsp;  البث المباشر وموعيد الدورات <br> Courses and live appointment
</font></a></li>
</ul>
</li>
 
<? if($cors=="لغة الإنجليزية") { ?> 
 <li class="treeview">
<a href="#">
<i class="fa fa-certificate  fa-2x"></i>&nbsp;&nbsp;
<span>شهادات اللغة الانجليزية <br>English language certificates  </span>
<i class="fa fa-angle-left pull-left  fa-2x"></i>&nbsp;&nbsp;
</a>
<ul class="treeview-menu">
<li dir="rtl" align="right">	 <a href="cer_eng1.php?aID=<? echo $row11[n.$i]; ?>#top" ><font face="Droid Arabic Kufi" color="#ffffff" ><i class="fa fa-circle-o  fa-2x"></i>&nbsp;&nbsp;شهادات اللغة الانجليزية <br>English language certificates </font></a></li>
</ul>
</li>
 <? } ?>
          
  


<li class="treeview">
<a href="#">
<i class="fa fa-bar-chart-o  fa-2x"></i>&nbsp;&nbsp;
<span>الشعب الدراسية <br> Section </span>
<i class="fa fa-angle-left pull-left  fa-2x"></i>&nbsp;&nbsp;
</a>
<ul class="treeview-menu">
  <li dir="rtl" align="right">	 <a href="mang_cors.php?aID=<? echo $row11[n.$i]; ?>#top" ><font face="Droid Arabic Kufi" color="#ffffff" ><i class="fa fa-circle-o  fa-2x"></i>&nbsp;&nbsp;إدارة الدورات التأهيلية<br>Qualifying courses </font></a></li>
  <li dir="rtl" align="right">	 <a href="mang_cors_tatwery.php?aID=<? echo $row11[n.$i]; ?>#top" ><font face="Droid Arabic Kufi" color="#ffffff" ><i class="fa fa-circle-o  fa-2x"></i>&nbsp;&nbsp;إدارة الدورات التطويرية<br>Development courses</font></a></li>
  <li dir="rtl" align="right">	 <a href="mang_cors_eng.php?aID=<? echo $row11[n.$i]; ?>#top" ><font face="Droid Arabic Kufi" color="#ffffff" ><i class="fa fa-circle-o  fa-2x"></i>&nbsp;&nbsp;إدارة دورات اللغات الأجنبية<br>English Language</font></a></li>
<? if($dsdsds==32) { ?>    <li dir="rtl" align="right">	 <a href="mang_cors_ch.php?aID=<? echo $row11[n.$i]; ?>#top" ><font face="Droid Arabic Kufi" color="#ffffff" ><i class="fa fa-circle-o  fa-2x"></i>&nbsp;&nbsp;إدارة دورات اللفة الصينية<br>Chinese Language</font></a></li><? } ?>

  <li dir="rtl" align="right">	 <a href="mang_cors_deplome.php?aID=<? echo $row11[n.$i]; ?>#top" ><font face="Droid Arabic Kufi" color="#ffffff" ><i class="fa fa-circle-o  fa-2x"></i>&nbsp;&nbsp;إدارة الدبلوم والبرنامج التدريبي<br>Diploma and training program</font></a></li>
  <li dir="rtl" align="right">	 <a href="a_teacher_cors.php?aID=<? echo $row11[n.$i]; ?>#top" ><font face="Droid Arabic Kufi" color="#ffffff" ><i class="fa fa-circle-o  fa-2x"></i>&nbsp;&nbsp;إدارة الدورات التدريبية والمدرسين<br>Training courses and teachers</font></a></li>
</ul>
</li>
<? if($dsdsds==32) { ?>

<li class="treeview">
<a href="#">
<i class="fa fa-bar-chart-o  fa-2x"></i>&nbsp;&nbsp;
<span>دورات الاونلاين<br> Online </span>
<i class="fa fa-angle-left pull-left  fa-2x"></i>&nbsp;&nbsp;
</a>
<ul class="treeview-menu">
  <li dir="rtl" align="right">	 <a href="online.php?aID=<? echo $row11[n.$i]; ?>#top" ><font face="Droid Arabic Kufi" color="#ffffff" ><i class="fa fa-circle-o  fa-2x"></i>&nbsp;&nbsp;الدورات الاونلاين<br>Online</font></a></li>
</ul>
</li>
<? } ?>

  <li class="treeview">
<a href="#">
<i class="fa  fa-calendar  fa-2x"></i>&nbsp;&nbsp;
<span>تسجيل المتدربين<br>Registration of trainees </span>
<i class="fa fa-angle-left pull-left  fa-2x"></i>&nbsp;&nbsp;
</a>
<ul class="treeview-menu">
  <li dir="rtl" align="right">	 <a href="stu.php?aID=<? echo $row11[n.$i]; ?>#top" ><font face="Droid Arabic Kufi" color="#ffffff" ><i class="fa fa-circle-o  fa-2x"></i>&nbsp;&nbsp;تسجيل المتدربين والدورات<br>Registration of trainees and courses</font></a></li>
  <li dir="rtl" align="right">	 <a href="Payments.php?aID=<? echo $row11[n.$i]; ?>#top" ><font face="Droid Arabic Kufi" color="#ffffff" ><i class="fa fa-circle-o  fa-2x"></i>&nbsp;&nbsp;التحصيل والأقساط <br>Collection and installments</font></a></li> 
  <li dir="rtl" align="right">	 <a href="Payments_cors.php?aID=<? echo $row11[n.$i]; ?>#top" ><font face="Droid Arabic Kufi" color="#ffffff" ><i class="fa fa-circle-o  fa-2x"></i>&nbsp;&nbsp;الايرادات اليومية<br>  Daily revenue</font></a></li> 
 
</ul>
</li>



<li class="treeview">
<a href="#">
<i class="fa  fa-desktop  fa-2x"></i>&nbsp;&nbsp;
<span> الجداول والقاعات الدراسية<br>Tables and classrooms</span>
<i class="fa fa-angle-left pull-left  fa-2x"></i>&nbsp;&nbsp;
</a>
<ul class="treeview-menu">
<? if($cors!="لغة الإنجليزية") { ?> 
<li dir="rtl" align="right">	 <a href="tables2.php?aID=<? echo $row11[n.$i]; ?>#top" ><font face="Droid Arabic Kufi" color="#ffffff" ><i class="fa fa-circle-o  fa-2x"></i>&nbsp;&nbsp;جدول قسم الحاسب الالي<br>Computer department table</font><font face="Droid Arabic Kufi" color="#FF0000" ><b><small class="label pull-left bg-yellow"><? echo $noco; ?></small></b></font></a></li>
<? } else { ?>
<li dir="rtl" align="right">	 <a href="tables.php?aID=<? echo $row11[n.$i]; ?>#top" ><font face="Droid Arabic Kufi" color="#ffffff" ><i class="fa fa-circle-o  fa-2x"></i>&nbsp;&nbsp;قسم اللغة الانجليزية <br>English department  </font><font face="Droid Arabic Kufi" color="#FF0000" ><b><small class="label pull-left bg-yellow"><? echo $noco; ?></small></b></font></a></li>
<? } ?>
<li dir="rtl" align="right">	 <a href="table_cors_teacher.php?aID=<? echo $row11[n.$i]; ?>#top" ><font face="Droid Arabic Kufi" color="#ffffff" ><i class="fa fa-circle-o  fa-2x"></i>&nbsp;&nbsp;جدول المدربين / المحاضرين<br>Schedule of trainers / lecturers </font><font face="Droid Arabic Kufi" color="#FF0000" ><b><small class="label pull-left bg-yellow"><? echo $noco; ?></small></b></font></a></li>
<li dir="rtl" align="right">	 <a href="table_cors_stu.php?aID=<? echo $row11[n.$i]; ?>#top" ><font face="Droid Arabic Kufi" color="#ffffff" ><i class="fa fa-circle-o  fa-2x"></i>&nbsp;&nbsp;جدول المتدربين / الطلاب<br>Schedule of trainees / students</font><font face="Droid Arabic Kufi" color="#FF0000" ><b><small class="label pull-left bg-yellow"><? echo $co; ?></small></b></font></a></li>
<li dir="rtl" align="right">	 <a href="table_class.php?aID=<? echo $row11[n.$i]; ?>#top" ><font face="Droid Arabic Kufi" color="#ffffff" ><i class="fa fa-circle-o  fa-2x"></i>&nbsp;&nbsp;تقرير بالقاعات الدراسية<br>Classroom report</font><font face="Droid Arabic Kufi" color="#FF0000" ><b><small class="label pull-left bg-yellow"><? echo $co; ?></small></b></font></a></li>
</ul>
</li>


<li class="treeview">
<a href="#">
<i class="fa fa-user  fa-2x"></i>&nbsp;&nbsp;
<span>حضور وغياب المتدربين <br>Attendance and absence of trainees</span>
<i class="fa fa-angle-left pull-left  fa-2x"></i>&nbsp;&nbsp;
</a>
<ul class="treeview-menu">
   <li dir="rtl" align="right">	 <a href="prepare.php?aID=<? echo $row11[n.$i]; ?>#top" target=_blank><font face="Droid Arabic Kufi" color="#ffffff" ><i class="fa fa-circle-o  fa-2x"></i>&nbsp;&nbsp;التحضير برقم الهوية /الباركود<br> Preparation with ID / barcode number</font></a></li>
   <? if($cors!="لغة الإنجليزية") { ?> 
  <li dir="rtl" align="right">	 <a href="amang_cors_deplome.php?aID=<? echo $row11[n.$i]; ?>#top" ><font face="Droid Arabic Kufi" color="#ffffff" ><i class="fa fa-circle-o  fa-2x"></i>&nbsp;&nbsp;الدبلوم التدريبي<br>Training Diploma</font></a></li>
  <li dir="rtl" align="right">	 <a href="amang_cors.php?aID=<? echo $row11[n.$i]; ?>#top" ><font face="Droid Arabic Kufi" color="#ffffff" ><i class="fa fa-circle-o  fa-2x"></i>&nbsp;&nbsp;الدورات التأهيلية<br>Qualifying courses</font></a></li>
  <li dir="rtl" align="right">	 <a href="amang_cors_tatwery.php?aID=<? echo $row11[n.$i]; ?>#top" ><font face="Droid Arabic Kufi" color="#ffffff" ><i class="fa fa-circle-o  fa-2x"></i>&nbsp;&nbsp;الدورات التطويرية<br>Development courses</font></a></li>
  <? } 
  else
  { 
  ?>
  <li dir="rtl" align="right">	 <a href="amang_cors_eng.php?aID=<? echo $row11[n.$i]; ?>#top" ><font face="Droid Arabic Kufi" color="#ffffff" ><i class="fa fa-circle-o  fa-2x"></i>&nbsp;&nbsp;دورات اللغات الأجنبية<br>English language courses</font></a></li>
  <? } ?>
</ul>
</li>



 <li class="treeview">
<a href="#">
<i class="fa fa-file  fa-2x"></i>&nbsp;&nbsp;
<span>تقرير الحضور والغياب <br>Attendance and absence report </span>
<i class="fa fa-angle-left pull-left  fa-2x"></i>&nbsp;&nbsp;
</a>
<ul class="treeview-menu">
<? if($cors!="لغة الإنجليزية") { ?> 
  <li dir="rtl" align="right">	 <a href="rmang_cors_deplome.php?aID=<? echo $row11[n.$i]; ?>#top" ><font face="Droid Arabic Kufi" color="#ffffff" ><i class="fa fa-circle-o  fa-2x"></i>&nbsp;&nbsp;الدبلوم التدريبي<br>Training Diploma</font></a></li>
  <li dir="rtl" align="right">	 <a href="rmang_cors.php?aID=<? echo $row11[n.$i]; ?>#top" ><font face="Droid Arabic Kufi" color="#ffffff" ><i class="fa fa-circle-o  fa-2x"></i>&nbsp;&nbsp;تقرير الدورات التأهيلية<br>Report of qualifying courses</font></a></li>
  <li dir="rtl" align="right">	 <a href="rmang_cors_tatwery.php?aID=<? echo $row11[n.$i]; ?>#top" ><font face="Droid Arabic Kufi" color="#ffffff" ><i class="fa fa-circle-o  fa-2x"></i>&nbsp;&nbsp;تقرير الدورات التطويرية<br>Report of development courses</font></a></li>
  <? } else { ?>
  <li dir="rtl" align="right">	 <a href="rmang_cors_eng.php?aID=<? echo $row11[n.$i]; ?>#top" ><font face="Droid Arabic Kufi" color="#ffffff" ><i class="fa fa-circle-o  fa-2x"></i>&nbsp;&nbsp;تقرير دورات اللغات الأجنبية<br>English Language Courses Report</font></a></li>
  <? } ?>
</ul>
</li>

<li class="treeview">
<a href="#">
<i class="fa fa-flag  fa-2x"></i>&nbsp;&nbsp;
<span>الدرجات وشهادات التخرج <br>Degrees and graduation certificates </span>
<i class="fa fa-angle-left pull-left  fa-2x"></i>&nbsp;&nbsp;
</a>
<ul class="treeview-menu">
   <li dir="rtl" align="right">	 <a href="smang_iqama.php?aID=<? echo $row11[n.$i]; ?>#top" ><font face="Droid Arabic Kufi" color="#ffffff" ><i class="fa fa-circle-o  fa-2x"></i>&nbsp;&nbsp;درجات المتدرب<br>Trainee degrees</font></a></li>
    <? if($cors!="لغة الإنجليزية") { ?> 
   <li dir="rtl" align="right">	 <a href="smang_cors_deplome.php?aID=<? echo $row11[n.$i]; ?>#top" ><font face="Droid Arabic Kufi" color="#ffffff" ><i class="fa fa-circle-o  fa-2x"></i>&nbsp;&nbsp;الدبلوم التدريبي<br>Training Diploma</font></a></li>
   <li dir="rtl" align="right">	 <a href="smang_cors.php?aID=<? echo $row11[n.$i]; ?>#top" ><font face="Droid Arabic Kufi" color="#ffffff" ><i class="fa fa-circle-o  fa-2x"></i>&nbsp;&nbsp;الدورات التأهيلية<br>Qualifying courses</font></a></li>
   <li dir="rtl" align="right">	 <a href="smang_cors_tatwery.php?aID=<? echo $row11[n.$i]; ?>#top" ><font face="Droid Arabic Kufi" color="#ffffff" ><i class="fa fa-circle-o  fa-2x"></i>&nbsp;&nbsp;الدورات التطويرية<br>Development courses</font></a></li>
    <? } else { ?>
   <li dir="rtl" align="right">	 <a href="smang_cors_eng.php?aID=<? echo $row11[n.$i]; ?>#top" ><font face="Droid Arabic Kufi" color="#ffffff" ><i class="fa fa-circle-o  fa-2x"></i>&nbsp;&nbsp;دورات اللغات الأجنبية<br>English language courses</font></a></li>
  <? } ?>
</ul>
</li>


 <li class="treeview">
<a href="#">
<i class="fa  fa-book  fa-2x"></i>&nbsp;&nbsp;
<span>التقارير والإحصائيات<br>Reports and statistics</span>
<i class="fa fa-angle-left pull-left  fa-2x"></i>&nbsp;&nbsp;
</a>
<ul class="treeview-menu">

<li dir="rtl" align="right">	 <a href="rep1.php?aID=<? echo $row11[n.$i]; ?>#top" >		<font face="Droid Arabic Kufi" face="Droid Arabic Kufi" color="#ffffff" ><i class="fa fa-circle-o  fa-2x"></i>&nbsp;&nbsp;  تقرير بأعداد الحضور <br>Report of attendance numbers </font></a></li> 
<li dir="rtl" align="right">	 <a href="rep2.php?aID=<? echo $row11[n.$i]; ?>#top" >		<font face="Droid Arabic Kufi" face="Droid Arabic Kufi" color="#ffffff" ><i class="fa fa-circle-o  fa-2x"></i>&nbsp;&nbsp;  تقرير بتفعيل النظام<br>System activation report</font></a></li> 
<li dir="rtl" align="right">	 <a href="all_rep2.php?aID=<? echo $row11[n.$i]; ?>#top" >		<font face="Droid Arabic Kufi" face="Droid Arabic Kufi" color="#ffffff" ><i class="fa fa-circle-o  fa-2x"></i>&nbsp;&nbsp;تقرير بالمدرسين<br>Report for teachers</font></a></li> 
</ul>
</li>

 </ul>
 
 <? }   ?>   
          
          

<? if($_SESSION['acount_type']==2) { ?>          
 <ul class="sidebar-menu" dir="rtl">
            <li class="header"></li>
 

 
  <li dir="rtl" align="right">	 <a href="mailbox.php?aID=<? echo $row11[n.$i]; ?>#top" ><font face="Droid Arabic Kufi" color="#ffffff" ><i class="fa fa-circle-o  fa-2x"></i>&nbsp;&nbsp; الوارد Inbox  
 
 <span class="label    bg-Teal pull-left">
<?
$query1 = "select count(*) as Research_ID from  inbox,user   where user.ID=inbox.Recepion    and username='$_SESSION[username]'  and msg_delete=0";
$result1 = mysqli_query($conn,$query1);
while($row1=mysqli_fetch_array($result1))
{
echo $row1['Research_ID'];
}
?></span></font></a></li>
 <li dir="rtl" align="right">	 <a href="sent.php?aID=<? echo $row11[n.$i]; ?>#top" ><font face="Droid Arabic Kufi" color="#ffffff" ><i class="fa fa-envelope-o  fa-2x"></i>&nbsp;&nbsp;  Sent - الرسائل المرسلة 
  <span class="label    bg-Teal pull-left">
<?
$query1 = "select count(*) as Research_ID from  inbox,user   where user.ID=inbox.Sender and username='$_SESSION[username]' and send_delete=0";
$result1 = mysqli_query($conn,$query1);
while($row1=mysqli_fetch_array($result1))
{
echo $row1['Research_ID'];
}
?></span></font></a></li>
 <li dir="rtl" align="right">	 <a href="trash.php?aID=<? echo $row11[n.$i]; ?>#top" ><font face="Droid Arabic Kufi" color="#ffffff" ><i class="fa fa fa-trash-o  fa-2x"></i>&nbsp;&nbsp;  Trash - المحذوفات 
  <span class="label    bg-Teal pull-left">
<?
$query1 = "select count(*) as Research_ID from  inbox,user   where user.ID=inbox.Recepion    and username='$_SESSION[username]'  and msg_delete=1";
$result1 = mysqli_query($conn,$query1);
while($row1=mysqli_fetch_array($result1))
{
echo $row1['Research_ID'];
}
?></span></font></a></li>
 

 
 <? 
$query1 = "select *   from teacher  where   username='$_SESSION[username]'";
$result1 = mysqli_query($conn,$query1);
while($row1=mysqli_fetch_array($result1))
{
  $cors=$row1['cors'];
}
 ?>
 
<li class="treeview">
<a href="#">
<i class="fa  fa-desktop  fa-2x"></i>&nbsp;&nbsp;
<span> الجداول والقاعات الدراسية<br>Tables and classrooms</span>
<i class="fa fa-angle-left pull-left  fa-2x"></i>&nbsp;&nbsp;
</a>
<ul class="treeview-menu">
<li dir="rtl" align="right">	 <a href="mytable_cors_teacher.php?aID=<? echo $row11[n.$i]; ?>#top" ><font face="Droid Arabic Kufi" color="#ffffff" ><i class="fa fa-circle-o  fa-2x"></i>&nbsp;&nbsp;جدول المدربين / المحاضرين<br>Table of trainers / lecturers</font><font face="Droid Arabic Kufi" color="#FF0000" ><b><small class="label pull-left bg-yellow"><? echo $noco; ?></small></b></font></a></li>
<li dir="rtl" align="right">	 <a href="table_cors_stu.php?aID=<? echo $row11[n.$i]; ?>#top" ><font face="Droid Arabic Kufi" color="#ffffff" ><i class="fa fa-circle-o  fa-2x"></i>&nbsp;&nbsp;جدول المتدربين / الطلاب<br>Table of trainees / students</font><font face="Droid Arabic Kufi" color="#FF0000" ><b><small class="label pull-left bg-yellow"><? echo $co; ?></small></b></font></a></li>
</ul>
</li>

  <li dir="rtl" align="right">	 <a href="teacher_evaluation.php?aID=<? echo $row11[n.$i]; ?>#top" ><font face="Droid Arabic Kufi" ><i class="fa fa-users  fa-2x"></i>&nbsp;&nbsp;قياس رضا المدربين عن تقديم البرامج</font></a></li>



  <li dir="rtl" align="right">	 <a href="all_cors.php?aID=<? echo $row11[n.$i]; ?>#top" ><font face="Droid Arabic Kufi" color="#fff" ><i class="fa fa-circle-o  fa-2x"></i>&nbsp;&nbsp; احصائيات الدورة ونتائج الاستبيان <br>Evaluation results</font></a></li>
  <li dir="rtl" align="right">	 <a href="e_cors.php?aID=<? echo $row11[n.$i]; ?>#top" ><font face="Droid Arabic Kufi"  ><i class="fa fa-circle-o  fa-2x"></i>&nbsp;&nbsp; إدارة  الدورات والمحتوي التعليمي<br>Modify and delete the course</font></a></li>


  <li dir="rtl" align="right">	 <a href="questions1.php?aID=<? echo $row11[n.$i]; ?>#top" ><font face="Droid Arabic Kufi" ><i class="fa fa-circle-o  fa-2x"></i>&nbsp;&nbsp;ادارة اسئلة الاختبارات النهائية<br>Managing test questions</font></a></li>



  <li dir="rtl" align="right">	 <a href="amang_corss.php?aID=<? echo $row11[n.$i]; ?>#top" ><font face="Droid Arabic Kufi" color="#ffffff" ><i class="fa fa-circle-o  fa-2x"></i>&nbsp;&nbsp;الواجبات والمحتوي <br>  Courses educational content</font></a></li>

 <li dir="rtl" align="right">	 <a href="mail_teacher.php?aID=<? echo $row11[n.$i]; ?>#top" ><font face="Droid Arabic Kufi" ><i class="fa fa-envelope-o  fa-2x"></i>&nbsp;&nbsp;النقاشات الرسائل والتعليقات<br>        Messages and comments</font></a></li>

<li dir="rtl" align="right">	 <a href="../file.pdf" target=_blank >		<font face="Droid Arabic Kufi" face="Droid Arabic Kufi" color="#ffffff" >
<i class="fa fa-print fa-2x "></i>&nbsp;&nbsp; المعارف والمهارات والكفايات المطلوبة</font></a></li> 


<li class="treeview">
<a href="#">
<i class="fa fa-user  fa-2x"></i>&nbsp;&nbsp;
<span>حضور وغياب المتدربين <br>Attendance and absence of trainees</span>
<i class="fa fa-angle-left pull-left  fa-2x"></i>&nbsp;&nbsp;
</a>
<ul class="treeview-menu">
  <li dir="rtl" align="right">	 <a href="prepare.php?aID=<? echo $row11[n.$i]; ?>#top" target=_blank><font face="Droid Arabic Kufi" color="#ffffff" ><i class="fa fa-circle-o  fa-2x"></i>&nbsp;&nbsp;التحضير برقم الهوية /الباركود<br> Preparation with ID / barcode number</font></a></li>
   <? if($cors!="لغة الإنجليزية") { ?> 
  <li dir="rtl" align="right">	 <a href="amang_cors_deplome.php?aID=<? echo $row11[n.$i]; ?>#top" ><font face="Droid Arabic Kufi" color="#ffffff" ><i class="fa fa-circle-o  fa-2x"></i>&nbsp;&nbsp;الدبلوم التدريبي<br>Training Diploma</font></a></li>
  <li dir="rtl" align="right">	 <a href="amang_cors.php?aID=<? echo $row11[n.$i]; ?>#top" ><font face="Droid Arabic Kufi" color="#ffffff" ><i class="fa fa-circle-o  fa-2x"></i>&nbsp;&nbsp;الدورات التأهيلية<br>Qualifying courses</font></a></li>
  <li dir="rtl" align="right">	 <a href="amang_cors_tatwery.php?aID=<? echo $row11[n.$i]; ?>#top" ><font face="Droid Arabic Kufi" color="#ffffff" ><i class="fa fa-circle-o  fa-2x"></i>&nbsp;&nbsp;الدورات التطويرية<br>Development courses</font></a></li>
  <? } else { ?>
  <li dir="rtl" align="right">	 <a href="amang_cors_eng.php?aID=<? echo $row11[n.$i]; ?>#top" ><font face="Droid Arabic Kufi" color="#ffffff" ><i class="fa fa-circle-o  fa-2x"></i>&nbsp;&nbsp;دورات اللغات الأجنبية<br>English language courses</font></a></li>
  <? } ?>
</ul>
</li>



 <li class="treeview">
<a href="#">
<i class="fa fa-file  fa-2x"></i>&nbsp;&nbsp;
<span>تقرير الحصور والغياب <br>Attendance and absence report </span>
<i class="fa fa-angle-left pull-left  fa-2x"></i>&nbsp;&nbsp;
</a>
<ul class="treeview-menu">
 <? if($cors!="لغة الإنجليزية") { ?> 
  <li dir="rtl" align="right">	 <a href="rmang_cors_deplome.php?aID=<? echo $row11[n.$i]; ?>#top" ><font face="Droid Arabic Kufi" color="#ffffff" ><i class="fa fa-circle-o  fa-2x"></i>&nbsp;&nbsp;الدبلوم التدريبي<br>Training Diploma</font></a></li>
  <li dir="rtl" align="right">	 <a href="rmang_cors.php?aID=<? echo $row11[n.$i]; ?>#top" ><font face="Droid Arabic Kufi" color="#ffffff" ><i class="fa fa-circle-o  fa-2x"></i>&nbsp;&nbsp;تقرير الدورات التأهيلية<br>Report of qualifying courses</font></a></li>
  <li dir="rtl" align="right">	 <a href="rmang_cors_tatwery.php?aID=<? echo $row11[n.$i]; ?>#top" ><font face="Droid Arabic Kufi" color="#ffffff" ><i class="fa fa-circle-o  fa-2x"></i>&nbsp;&nbsp;تقرير الدورات التطويرية<br>Report of development courses</font></a></li>
  <? } else { ?>
  <li dir="rtl" align="right">	 <a href="rmang_cors_eng.php?aID=<? echo $row11[n.$i]; ?>#top" ><font face="Droid Arabic Kufi" color="#ffffff" ><i class="fa fa-circle-o  fa-2x"></i>&nbsp;&nbsp;تقرير دورات اللغات الأجنبية<br>English Language Courses Report</font></a></li>
    <? } ?>

</ul>
</li>

 <li class="treeview">
<a href="#">
<i class="fa fa-flag  fa-2x"></i>&nbsp;&nbsp;
<span>الدرجات وشهادات التخرج <br>Degrees and graduation certificates </span>
<i class="fa fa-angle-left pull-left  fa-2x"></i>&nbsp;&nbsp;
</a>
<ul class="treeview-menu">
   <li dir="rtl" align="right">	 <a href="smang_iqama.php?aID=<? echo $row11[n.$i]; ?>#top" ><font face="Droid Arabic Kufi" color="#ffffff" ><i class="fa fa-circle-o  fa-2x"></i>&nbsp;&nbsp;درجات المتدرب<br>Trainee degrees</font></a></li>
   <? if($cors!="لغة الإنجليزية") { ?> 
   <li dir="rtl" align="right">	 <a href="smang_cors_deplome.php?aID=<? echo $row11[n.$i]; ?>#top" ><font face="Droid Arabic Kufi" color="#ffffff" ><i class="fa fa-circle-o  fa-2x"></i>&nbsp;&nbsp;الدبلوم التدريبي<br>Training Diploma</font></a></li>
   <li dir="rtl" align="right">	 <a href="smang_cors.php?aID=<? echo $row11[n.$i]; ?>#top" ><font face="Droid Arabic Kufi" color="#ffffff" ><i class="fa fa-circle-o  fa-2x"></i>&nbsp;&nbsp;الدورات التأهيلية<br>Qualifying courses</font></a></li>
   <li dir="rtl" align="right">	 <a href="smang_cors_tatwery.php?aID=<? echo $row11[n.$i]; ?>#top" ><font face="Droid Arabic Kufi" color="#ffffff" ><i class="fa fa-circle-o  fa-2x"></i>&nbsp;&nbsp;الدورات التطويرية<br>Development courses</font></a></li>
   <? } else { ?>
   <li dir="rtl" align="right">	 <a href="smang_cors_eng.php?aID=<? echo $row11[n.$i]; ?>#top" ><font face="Droid Arabic Kufi" color="#ffffff" ><i class="fa fa-circle-o  fa-2x"></i>&nbsp;&nbsp;دورات اللغات الأجنبية<br>English language courses</font></a></li>
   <? } ?>

</ul>
</li>

 </ul>
 
          <? }   ?>  
          
          
                    <? if($_SESSION['acount_type']==4) { ?>          
 <ul class="sidebar-menu" dir="rtl">
 <li class="header"></li>
 
 

<li class="treeview">
<a href="#">
<i class="fa fa-envelope-o  fa-2x"></i>&nbsp;&nbsp;
<span>البريد الالكتروني   E-Mail</span>
<i class="fa fa-angle-left pull-left  fa-2x"></i>&nbsp;&nbsp;
</a>
<ul class="treeview-menu">
 <li dir="rtl" align="right">	 <a href="mailbox.php?aID=<? echo $row11[n.$i]; ?>#top" ><font face="Droid Arabic Kufi" color="#ffffff" ><i class="fa fa-circle-o  fa-2x"></i>&nbsp;&nbsp; الوارد Inbox  
 
 <span class="label    bg-Teal pull-left">
<?
$query1 = "select count(*) as Research_ID from  inbox,user   where user.ID=inbox.Recepion    and username='$_SESSION[username]'  and msg_delete=0";
$result1 = mysqli_query($conn,$query1);
while($row1=mysqli_fetch_array($result1))
{
echo $row1['Research_ID'];
}
?></span></font></a></li>
 <li dir="rtl" align="right">	 <a href="sent.php?aID=<? echo $row11[n.$i]; ?>#top" ><font face="Droid Arabic Kufi" color="#ffffff" ><i class="fa fa-envelope-o  fa-2x"></i>&nbsp;&nbsp;  Sent - الرسائل المرسلة 
  <span class="label    bg-Teal pull-left">
<?
$query1 = "select count(*) as Research_ID from  inbox,user   where user.ID=inbox.Sender and username='$_SESSION[username]' and send_delete=0";
$result1 = mysqli_query($conn,$query1);
while($row1=mysqli_fetch_array($result1))
{
echo $row1['Research_ID'];
}
?></span></font></a></li>
 <li dir="rtl" align="right">	 <a href="trash.php?aID=<? echo $row11[n.$i]; ?>#top" ><font face="Droid Arabic Kufi" color="#ffffff" ><i class="fa fa fa-trash-o  fa-2x"></i>&nbsp;&nbsp;  Trash - المحذوفات 
  <span class="label    bg-Teal pull-left">
<?
$query1 = "select count(*) as Research_ID from  inbox,user   where user.ID=inbox.Recepion    and username='$_SESSION[username]'  and msg_delete=1";
$result1 = mysqli_query($conn,$query1);
while($row1=mysqli_fetch_array($result1))
{
echo $row1['Research_ID'];
}
?></span></font></a></li>
</ul>
</li>



 <li class="treeview">
<a href="#">
<i class="fa  fa-desktop  fa-2x"></i>&nbsp;&nbsp;
<span> الجداول والقاعات الدراسية<br>Tables and classrooms</span>
<i class="fa fa-angle-left pull-left  fa-2x"></i>&nbsp;&nbsp;
</a>
<ul class="treeview-menu">
<li dir="rtl" align="right">	 <a href="tables2.php?aID=<? echo $row11[n.$i]; ?>#top" ><font face="Droid Arabic Kufi" color="#ffffff" ><i class="fa fa-circle-o  fa-2x"></i>&nbsp;&nbsp;جدول قسم الحاسب الالي<br>Computer department table</font><font face="Droid Arabic Kufi" color="#FF0000" ><b><small class="label pull-left bg-yellow"><? echo $noco; ?></small></b></font></a></li>
<li dir="rtl" align="right">	 <a href="tables.php?aID=<? echo $row11[n.$i]; ?>#top" ><font face="Droid Arabic Kufi" color="#ffffff" ><i class="fa fa-circle-o  fa-2x"></i>&nbsp;&nbsp;قسم اللغة الانجليزية <br>English department  </font><font face="Droid Arabic Kufi" color="#FF0000" ><b><small class="label pull-left bg-yellow"><? echo $noco; ?></small></b></font></a></li>
<li dir="rtl" align="right">	 <a href="table_cors_teacher.php?aID=<? echo $row11[n.$i]; ?>#top" ><font face="Droid Arabic Kufi" color="#ffffff" ><i class="fa fa-circle-o  fa-2x"></i>&nbsp;&nbsp;جدول المدربين / المحاضرين<br>Schedule of trainers / lecturers </font><font face="Droid Arabic Kufi" color="#FF0000" ><b><small class="label pull-left bg-yellow"><? echo $noco; ?></small></b></font></a></li>
<li dir="rtl" align="right">	 <a href="table_cors_stu.php?aID=<? echo $row11[n.$i]; ?>#top" ><font face="Droid Arabic Kufi" color="#ffffff" ><i class="fa fa-circle-o  fa-2x"></i>&nbsp;&nbsp;جدول المتدربين / الطلاب<br>Schedule of trainees / students</font><font face="Droid Arabic Kufi" color="#FF0000" ><b><small class="label pull-left bg-yellow"><? echo $co; ?></small></b></font></a></li>
<li dir="rtl" align="right">	 <a href="table_class.php?aID=<? echo $row11[n.$i]; ?>#top" ><font face="Droid Arabic Kufi" color="#ffffff" ><i class="fa fa-circle-o  fa-2x"></i>&nbsp;&nbsp;تقرير بالقاعات الدراسية<br>Classroom report</font><font face="Droid Arabic Kufi" color="#FF0000" ><b><small class="label pull-left bg-yellow"><? echo $co; ?></small></b></font></a></li>
</ul>
</li>

  


 <li class="treeview">
<a href="#">
<i class="fa fa-file  fa-2x"></i>&nbsp;&nbsp;
<span>تقرير الحصور والغياب <br>Attendance and absence report </span>
<i class="fa fa-angle-left pull-left  fa-2x"></i>&nbsp;&nbsp;
</a>
<ul class="treeview-menu">
  <li dir="rtl" align="right">	 <a href="rmang_cors_deplome.php?aID=<? echo $row11[n.$i]; ?>#top" ><font face="Droid Arabic Kufi" color="#ffffff" ><i class="fa fa-circle-o  fa-2x"></i>&nbsp;&nbsp;الدبلوم التدريبي<br>Training Diploma</font></a></li>
  <li dir="rtl" align="right">	 <a href="rmang_cors.php?aID=<? echo $row11[n.$i]; ?>#top" ><font face="Droid Arabic Kufi" color="#ffffff" ><i class="fa fa-circle-o  fa-2x"></i>&nbsp;&nbsp;تقرير الدورات التأهيلية<br>Report of qualifying courses</font></a></li>
  <li dir="rtl" align="right">	 <a href="rmang_cors_tatwery.php?aID=<? echo $row11[n.$i]; ?>#top" ><font face="Droid Arabic Kufi" color="#ffffff" ><i class="fa fa-circle-o  fa-2x"></i>&nbsp;&nbsp;تقرير الدورات التطويرية<br>Report of development courses</font></a></li>
  <li dir="rtl" align="right">	 <a href="rmang_cors_eng.php?aID=<? echo $row11[n.$i]; ?>#top" ><font face="Droid Arabic Kufi" color="#ffffff" ><i class="fa fa-circle-o  fa-2x"></i>&nbsp;&nbsp;تقرير دورات اللغات الأجنبية<br>English Language Courses Report</font></a></li>
</ul>
</li>



 <li class="treeview">
<a href="#">
<i class="fa  fa-book  fa-2x"></i>&nbsp;&nbsp;
<span>التقارير والإحصائيات<br>Reports and statistics</span>
<i class="fa fa-angle-left pull-left  fa-2x"></i>&nbsp;&nbsp;
</a>
<ul class="treeview-menu">

<li dir="rtl" align="right">	 <a href="rep1.php?aID=<? echo $row11[n.$i]; ?>#top" >		<font face="Droid Arabic Kufi" face="Droid Arabic Kufi" color="#ffffff" ><i class="fa fa-circle-o  fa-2x"></i>&nbsp;&nbsp;  تقرير بأعداد الحضور <br>Report of attendance numbers </font></a></li> 
<li dir="rtl" align="right">	 <a href="rep2.php?aID=<? echo $row11[n.$i]; ?>#top" >		<font face="Droid Arabic Kufi" face="Droid Arabic Kufi" color="#ffffff" ><i class="fa fa-circle-o  fa-2x"></i>&nbsp;&nbsp;  تقرير بتفعيل النظام<br>System activation report</font></a></li> 
<li dir="rtl" align="right">	 <a href="all_rep2.php?aID=<? echo $row11[n.$i]; ?>#top" >		<font face="Droid Arabic Kufi" face="Droid Arabic Kufi" color="#ffffff" ><i class="fa fa-circle-o  fa-2x"></i>&nbsp;&nbsp;تقرير بالمدرسين<br>Report for teachers</font></a></li> 
</ul>
</li>
  
</ul>
 
          <? }   ?>
          
            
          
           <? if($_SESSION['acount_type']==5) { ?>          
 <ul class="sidebar-menu" dir="rtl">
 <li class="header"></li>
 
 

<li class="treeview">
<a href="#">
<i class="fa fa-envelope-o  fa-2x"></i>&nbsp;&nbsp;
<span>البريد الالكتروني   E-Mail</span>
<i class="fa fa-angle-left pull-left  fa-2x"></i>&nbsp;&nbsp;
</a>
<ul class="treeview-menu">
 <li dir="rtl" align="right">	 <a href="mailbox.php?aID=<? echo $row11[n.$i]; ?>#top" ><font face="Droid Arabic Kufi" color="#ffffff" ><i class="fa fa-circle-o  fa-2x"></i>&nbsp;&nbsp; الوارد Inbox  
 
 <span class="label    bg-Teal pull-left">
<?
$query1 = "select count(*) as Research_ID from  inbox,user   where user.ID=inbox.Recepion    and username='$_SESSION[username]'  and msg_delete=0";
$result1 = mysqli_query($conn,$query1);
while($row1=mysqli_fetch_array($result1))
{
echo $row1['Research_ID'];
}
?></span></font></a></li>
 <li dir="rtl" align="right">	 <a href="sent.php?aID=<? echo $row11[n.$i]; ?>#top" ><font face="Droid Arabic Kufi" color="#ffffff" ><i class="fa fa-envelope-o  fa-2x"></i>&nbsp;&nbsp;  Sent - الرسائل المرسلة 
  <span class="label    bg-Teal pull-left">
<?
$query1 = "select count(*) as Research_ID from  inbox,user   where user.ID=inbox.Sender and username='$_SESSION[username]' and send_delete=0";
$result1 = mysqli_query($conn,$query1);
while($row1=mysqli_fetch_array($result1))
{
echo $row1['Research_ID'];
}
?></span></font></a></li>
 <li dir="rtl" align="right">	 <a href="trash.php?aID=<? echo $row11[n.$i]; ?>#top" ><font face="Droid Arabic Kufi" color="#ffffff" ><i class="fa fa fa-trash-o  fa-2x"></i>&nbsp;&nbsp;  Trash - المحذوفات 
  <span class="label    bg-Teal pull-left">
<?
$query1 = "select count(*) as Research_ID from  inbox,user   where user.ID=inbox.Recepion    and username='$_SESSION[username]'  and msg_delete=1";
$result1 = mysqli_query($conn,$query1);
while($row1=mysqli_fetch_array($result1))
{
echo $row1['Research_ID'];
}
?></span></font></a></li>
</ul>
</li>



  


  <li dir="rtl" align="right">	 <a href="rmang_cors_com.php?aID=<? echo $row11[n.$i]; ?>#top" ><font face="Droid Arabic Kufi" color="#ffffff" ><i class="fa fa-circle-o  fa-2x"></i>&nbsp;&nbsp;تقرير الدورات <br>Report of courses</font></a></li>

  <li dir="rtl" align="right">	 <a href="print_report_com2.php?aID=<? echo $row11[n.$i]; ?>#top" ><font face="Droid Arabic Kufi" color="#ffffff" ><i class="fa fa-file  fa-2x"></i>&nbsp;&nbsp;تقرير بحضور الطلاب<br>Student attendance report</font></a></li>



  
</ul>
 
          <? }   ?>
           <? if($_SESSION['acount_type']==6) { ?>          
 <ul class="sidebar-menu" dir="rtl">
 <li class="header"></li>
 
 
 

                 <?php
 
   echo $cors_ID= mysqli_real_escape_string($conn,htmlspecialchars(intval($_GET['cors_ID']), ENT_QUOTES, "utf-8")); 
 
 $query = "select * from cors,subjects,teacher,branches,stu_sec
   where stu_sec.section_Id=cors.ID    and branches.Branches_ID=cors.Branches and  teacher.teacher_id=cors.traning_name and 
   subjects.cors_ID=cors.cors_ID and subjects.cors_ID='$cors_ID'  order by cors_no DESC";
  
$result = mysqli_query($conn,$query);
$rows = mysqli_num_rows($result );

$rows=mysqli_num_rows($result) ; 
if($rows > 0 )
{
while($row=mysqli_fetch_array($result))
{

?>
 
 
 

 
 
 <li dir="rtl" align="right">	 <a href="display_stu.php?aID=<? echo $row11[n.$i]; ?>#top" ><font face="Droid Arabic Kufi" color="#ffffff" ><i class="fa fa-home  fa-2x"></i>&nbsp;&nbsp;دوراتي التدريبية</font></a></li>
 
  <li dir="rtl" align="right">	 <a href="course_details.php?ID_reg=<? echo $row[ID_reg]; ?>&cors_ID=<? echo $row[cors_ID]; ?>#top" ><font face="Droid Arabic Kufi" color="#ffffff" ><i class="fa fa-circle-o  fa-2x  text-yellow"></i>&nbsp;&nbsp;مقدمة عن البرنامج  </font></a></li>
  <li dir="rtl" align="right">	 <a href="viwe_lessons.php?cors_ID=<? echo $row[cors_ID]; ?>#top" ><font face="Droid Arabic Kufi" color="#ffffff" ><i class="fa  fa-file  fa-2x  text-yellow"></i>&nbsp;&nbsp;الدروس والمحاضرات</font></a></li>
  <li dir="rtl" align="right">	 <a href="download.php?cors_ID=<? echo $row[cors_ID]; ?>#top" ><font face="Droid Arabic Kufi" color="#ffffff" ><i class="fa fa-cloud-download  fa-2x    text-yellow"></i>&nbsp;&nbsp;  المصادر ومحتوى البرنامج</font></a></li>
  <li dir="rtl" align="right">	 <a href="video.php?cors_ID=<? echo $row[cors_ID]; ?>#top" ><font face="Droid Arabic Kufi" color="#ffffff" ><i class="fa  fa-video-camera   fa-2x  text-yellow"></i>&nbsp;&nbsp;  دليل الفيديو</font></a></li>
  <li dir="rtl" align="right">	 <a href="content1.php?cors_ID=<? echo $row[cors_ID]; ?>#top" ><font face="Droid Arabic Kufi" color="#ffffff" ><i class="fa fa-list-alt   fa-2x text-yellow"></i>&nbsp;&nbsp;    الواجبات والأنشطة</font></a></li>
  <li dir="rtl" align="right">	 <a href="show_mail.php?cors_ID=<? echo $row[cors_ID]; ?>#top" ><font face="Droid Arabic Kufi" color="#ffffff" ><i class="fa  fa-comments-o  fa-2x  text-yellow"></i>&nbsp;&nbsp;  المناقشات والرسائل</font></a></li>

 


 
 <li class="treeview">
<a href="#">
<i class="fa  fa-users fa-2x"></i>&nbsp;&nbsp;
<span>  تفاصيل البرنامج التدريبي </span>
<i class="fa fa-angle-left pull-left  fa-2x"></i>&nbsp;&nbsp;
</a>
<ul class="treeview-menu in">

<li dir="rtl" align="right">	 <a href="plan.php?ID_reg=<? echo $row[ID_reg]; ?>&cors_ID=<? echo $row[cors_ID]; ?>#top" target=_blank >		<font face="Droid Arabic Kufi" face="Droid Arabic Kufi" color="#ffffff" >
<i class="fa fa-download fa-2x text-yellow"></i>&nbsp;&nbsp; الخطة الزمنية للبرنامج</font></a></li> 

<?php if($xxxx==55554) { ?>
<li dir="rtl" align="right">	 <a href="cors_files/<? echo $row['cors_files']; ?>" target=_blank >		<font face="Droid Arabic Kufi" face="Droid Arabic Kufi" color="#ffffff" >
<i class="fa fa-download fa-2x text-yellow"></i>&nbsp;&nbsp; الخطة الزمنية للبرنامج</font></a></li> 
<?php } ?>
<li dir="rtl" align="right">	 <a href="<? echo $row['live']; ?>" target=_blank >		<font face="Droid Arabic Kufi" face="Droid Arabic Kufi" color="#ffffff" >
<i class="fa fa-youtube-play fa-2x text-green"></i>&nbsp;&nbsp; حضور الدورة الان ZOOM</font></a></li> 

 <li dir="rtl" align="right">	 <a href="print_report_stu.php?ID_reg=<? echo $row['ID_reg']; ?>&section_Id=<? echo $row['section_Id']; ?>" target=_blank >		<font face="Droid Arabic Kufi" face="Droid Arabic Kufi" color="#ffffff" >
<i class="fa fa-print fa-2x text-red"></i>&nbsp;&nbsp; تقرير بحضور وغياب الدورة</font></a></li> 



</ul>
</li>





<li class="treeview">
<a href="#">
<i class="fa  fa-phone fa-2x"></i>&nbsp;&nbsp;
<span>  وسائل التواصل مع المدرب والاستفسارات </span>
<i class="fa fa-angle-left pull-left  fa-2x"></i>&nbsp;&nbsp;
</a>
<ul class="treeview-menu">

<li dir="rtl" align="right">	 <a href="https://wa.me/<?php echo $site_mobile; ?>?text=<?php echo $site_name; ?>
   %0D%0Aالسلام عليكم ورحمه الله وبركاته 
   %0D%0Aدورة : <?php echo $row['cors_name']; ?>
   %0D%0Aالتواصل مع المدرب 
   %0D%0A<?php echo $row['teacher_name']; ?>" >		<font face="Droid Arabic Kufi" face="Droid Arabic Kufi" color="#ffffff" ><i class="fa fa-whatsapp whatsapp-icon       fa-2x"></i>&nbsp;&nbsp;  التواصل عن طريق الواتسأب</font></a></li> 
<li dir="rtl" align="right">	 <a href="mailto:<?php echo $site_email; ?>" >		<font face="Droid Arabic Kufi" face="Droid Arabic Kufi" color="#ffffff" ><i class="fa fa-envelope    fa-2x"></i>&nbsp;&nbsp; التواصل مع عبر البريد الالكتروني</font></a></li> 
<li dir="rtl" align="right">	 <a href="show_mail.php?cors_ID=<? echo $row[cors_ID]; ?>" >		<font face="Droid Arabic Kufi" face="Droid Arabic Kufi" color="#ffffff" ><i class="fa fa-comments  fa-2x"></i>&nbsp;&nbsp;منتدى المناقشة</font></a></li> 

<li dir="rtl" align="right">	 <a href="cors_files/file8.pdf" >		<font face="Droid Arabic Kufi" face="Droid Arabic Kufi" color="#ffffff" ><i class="fa fa-graduation-cap text-red  fa-2x"></i>&nbsp;&nbsp;المدة الزمنية للاجابة علي استفسار المتدرب</font></a></li> 

</ul>
</li>



<li class="treeview">
<a href="#">
<i class="fa  fa-download fa-2x"></i>&nbsp;&nbsp;
<span>  التعليمات والأدلة الإرشادية </span>
<i class="fa fa-angle-left pull-left  fa-2x"></i>&nbsp;&nbsp;
</a>
<ul class="treeview-menu">

 
<li dir="rtl" align="right">	 <a href="cors_files/file1.pdf" target=_blank >		<font face="Droid Arabic Kufi" face="Droid Arabic Kufi" color="#ffffff" >
<i class="fa fa-user fa-2x text-blu"></i>&nbsp;&nbsp; دليل طريقة دخول الدورة التدريبية</font></a></li> 

<li dir="rtl" align="right">	 <a href="cors_files/file2.pdf" target=_blank >		<font face="Droid Arabic Kufi" face="Droid Arabic Kufi" color="#ffffff" >
<i class="fa fa-phone fa-2x text-yellow"></i>&nbsp;&nbsp; سياسة وادأب التواصل والإجراءات المتخذة</font></a></li> 


<li dir="rtl" align="right">	 <a href="cors_files/file3.pdf" target=_blank >		<font face="Droid Arabic Kufi" face="Droid Arabic Kufi" color="#ffffff" >
<i class="fa fa-download fa-2x text-blu"></i>&nbsp;&nbsp;سياسة التغذية الراجعة </font></a></li> 


<li dir="rtl" align="right">	 <a href="cors_files/file4.pdf" target=_blank >		<font face="Droid Arabic Kufi" face="Droid Arabic Kufi" color="#ffffff" >
<i class="fa fa-download fa-2x text-yellow"></i>&nbsp;&nbsp; سياسة الحضور</font></a></li> 


<li dir="rtl" align="right">	 <a href="cors_files/file5.pdf" target=_blank >		<font face="Droid Arabic Kufi" face="Droid Arabic Kufi" color="#ffffff" >
<i class="fa fa-bookmark-o fa-2x text-blu"></i>&nbsp;&nbsp; سياسة درجات تقييم الدورة التدريبية</font></a></li> 


<li dir="rtl" align="right">	 <a href="cors_files/file6.pdf" target=_blank >		<font face="Droid Arabic Kufi" face="Droid Arabic Kufi" color="#ffffff" >
<i class="fa fa-folder-open fa-2x text-yellow"></i>&nbsp;&nbsp; دليل اختبار الدورات التأهيلية</font></a></li> 


<li dir="rtl" align="right">	 <a href="cors_files/file7.pdf" target=_blank >		<font face="Droid Arabic Kufi" face="Droid Arabic Kufi" color="#ffffff" >
<i class="fa fa-laptop fa-2x text-blue"></i>&nbsp;&nbsp; دليل رفع الواجبات المنزلية</font></a></li> 

<li dir="rtl" align="right">	 <a href="cors_files/file9.pdf" target=_blank >		<font face="Droid Arabic Kufi" face="Droid Arabic Kufi" color="#ffffff" >
<i class="fa fa-print fa-2x text-blue"></i>&nbsp;&nbsp; المعارف والمهارات والكفايات المطلوبة</font></a></li> 
 
 <li dir="rtl" align="right">	 <a href="../zoom.pdf" target=_blank >		<font face="Droid Arabic Kufi" face="Droid Arabic Kufi" color="#ffffff" >
<i class="fa fa-youtube-play fa-2x text-blue"></i>&nbsp;&nbsp; دليل كيفية استخدام برنامج zoom</font></a></li> 



</ul>
</li>


<li class="treeview">
<a href="#">
<i class="fa  fa-book fa-2x"></i>&nbsp;&nbsp;
<span> متطلبات وتجهيزات البرنامج </span>
<i class="fa fa-angle-left pull-left  fa-2x"></i>&nbsp;&nbsp;
</a>
<ul class="treeview-menu">

 
 
 

                     <?php
 

$query11 = "select * from  equipment where cors_ID='$row[cors_ID]' ";
$result11 = mysqli_query($conn,$query11);
$rows11 = mysqli_num_rows($result11 );
while($row11=mysqli_fetch_array($result11))

{
?> 
<li dir="rtl" align="right">	   <a href="" >			<font face="Droid Arabic Kufi" face="Droid Arabic Kufi" color="#ffffff" >
<i class="fa fa-circle   fa-2x text-green"></i>&nbsp;&nbsp; <?php echo $row11['equipment']; ?></font></a> </li> 
<? } ?> 


 

</ul>
</li>



<li class="treeview">
<a href="#">
<i class="fa  fa-gear fa-2x"></i>&nbsp;&nbsp;
<span> الوسائل التدريبية المستخدمة</span>
<i class="fa fa-angle-left pull-left  fa-2x"></i>&nbsp;&nbsp;
</a>
<ul class="treeview-menu">

 
 
 

                     <?php
 

$query11 = "select * from  tools where cors_ID='$row[cors_ID]' ";
$result11 = mysqli_query($conn,$query11);
$rows11 = mysqli_num_rows($result11 );
while($row11=mysqli_fetch_array($result11))

{
?> 
<li dir="rtl" align="right">	  	<a href="" >	<font face="Droid Arabic Kufi" face="Droid Arabic Kufi" color="#ffffff" >
<i class="fa fa-circle   fa-2x  text-yellow"></i>&nbsp;&nbsp; <?php echo $row11['tools']; ?></font></a> </li> 
<? } ?> 


 

</ul>
</li>



<? }} ?>



  
</ul>
 
          <? }   ?>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
          
          </section><!-- /.sidebar --></aside>