<?php
include('session.php'); 
include('font.php'); 
  
?>    
	<head>
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
    </head>   <? if($_SESSION['acount_type']==1) { ?>          
 <ul class="sidebar-menu" dir="rtl">
            <li class="header"></li>
 

 <li class="treeview">
<a href="#">
<i class="fa fa-gear"></i>
<span>الاعدادات</span>
<i class="fa fa-angle-left pull-left"></i>
</a>
<ul class="treeview-menu">
 <li dir="rtl" >	 <a href="users.php?aID=<? echo $row11[n.$i]; ?>#top" target=I1><font face="Droid Arabic Kufi" color="#ffffff" ><i class="fa fa-circle-o"></i>مستخدمين النظام</font></a></li>
 
</ul>
</li>



<li class="treeview">
<a href="#">
<i class="fa fa-pie-chart"></i>
<span>المواد الدراسية  </span>
<i class="fa fa-angle-left pull-left"></i>
</a>
<ul class="treeview-menu">
  <li dir="rtl" >	 <a href="add_cors.php?aID=<? echo $row11[n.$i]; ?>#top" target=I1><font face="Droid Arabic Kufi" color="#ffffff" ><i class="fa fa-circle-o"></i> تسجيل مواد جديدة</font></a></li>
  <li dir="rtl" >	 <a href="e_cors.php?aID=<? echo $row11[n.$i]; ?>#top" target=I1><font face="Droid Arabic Kufi" color="#ffffff" ><i class="fa fa-circle-o"></i> <i class="fa fa-pencil btn btn-info btn-sm "></i> المواد</font></a></li>
 
</ul>
</li>

<li class="treeview">
<a href="#">
<i class="fa fa-calendar-o"></i>
<span>  القاعات الدراسية</span>
<i class="fa fa-angle-left pull-left"></i>
</a>
<ul class="treeview-menu">
  <li dir="rtl" >	 <a href="add_class.php?aID=<? echo $row11[n.$i]; ?>#top" target=I1><font face="Droid Arabic Kufi" color="#ffffff" ><i class="fa fa-circle-o"></i> اضافة قاعات دراسية جديدة</font></a></li>
  <li dir="rtl" >	 <a href="e_bil.php?aID=<? echo $row11[n.$i]; ?>#top" target=I1><font face="Droid Arabic Kufi" color="#ffffff" ><i class="fa fa-circle-o"></i>   <i class="fa fa-pencil btn btn-info btn-sm "></i> القاعات دراسية</font></a></li>
</ul>
</li>

          
 <li class="treeview">
<a href="#">
<i class="fa fa-user"></i>
<span>الهيئة التدريبية والمحاضرين  </span>
<i class="fa fa-angle-left pull-left"></i>
</a>
<ul class="treeview-menu">
  <li dir="rtl" >	 <a href="add_teacher.php?aID=<? echo $row11[n.$i]; ?>#top" target=I1><font face="Droid Arabic Kufi" color="#ffffff" ><i class="fa fa-circle-o"></i>تسجيل محاضر جديد</font></a></li>
  <li dir="rtl" >	 <a href="e_teacher.php?aID=<? echo $row11[n.$i]; ?>#top" target=I1><font face="Droid Arabic Kufi" color="#ffffff" ><i class="fa fa-circle-o"></i>   <i class="fa fa-pencil btn btn-info btn-sm "></i> المحاضرين</font></a></li>
</ul>
</li>


 <li class="treeview">
<a href="#">
<i class="fa fa-bar-chart-o"></i>
<span>الدورات الدراسية</span>
<i class="fa fa-angle-left pull-left"></i>
</a>
<ul class="treeview-menu">
  <li dir="rtl" >	 <a href="mang_cors.php?aID=<? echo $row11[n.$i]; ?>#top" target=I1><font face="Droid Arabic Kufi" color="#ffffff" ><i class="fa fa-circle-o"></i>إدارة الدورات التأهيلية</font></a></li>
  <li dir="rtl" >	 <a href="mang_cors_tatwery.php?aID=<? echo $row11[n.$i]; ?>#top" target=I1><font face="Droid Arabic Kufi" color="#ffffff" ><i class="fa fa-circle-o"></i>إدارة الدورات التطويرية</font></a></li>
  <li dir="rtl" >	 <a href="mang_cors_eng.php?aID=<? echo $row11[n.$i]; ?>#top" target=I1><font face="Droid Arabic Kufi" color="#ffffff" ><i class="fa fa-circle-o"></i>إدارة دورات اللغات الأجنبية</font></a></li>

  <li dir="rtl" >	 <a href="a_teacher_cors.php?aID=<? echo $row11[n.$i]; ?>#top" target=I1><font face="Droid Arabic Kufi" color="#ffffff" ><i class="fa fa-circle-o"></i>إدارة الدورات التدريبية والمدرسين</font></a></li>
</ul>
</li>

 <li class="treeview">
<a href="#">
<i class="fa  fa-calendar"></i>
<span>المتدربين/ المتدريبات    </span>
<i class="fa fa-angle-left pull-left"></i>
</a>
<ul class="treeview-menu">
  <li dir="rtl" >	 <a href="stu.php?aID=<? echo $row11[n.$i]; ?>#top" target=I1><font face="Droid Arabic Kufi" color="#ffffff" ><i class="fa fa-circle-o"></i>تسجيل المتدربين والدورات</font></a></li>
 
 
</ul>
</li>




 <li class="treeview">
<a href="#">
<i class="fa  fa-desktop"></i>
<span> الجداول والقاعات الدراسية</span>
<i class="fa fa-angle-left pull-left"></i>
</a>
<ul class="treeview-menu">
<li dir="rtl" >	 <a href="table_cors_teacher.php?aID=<? echo $row11[n.$i]; ?>#top" target=I1><font face="Droid Arabic Kufi" color="#ffffff" ><i class="fa fa-circle-o"></i>جدول المدربين / المحاضرين</font><font face="Droid Arabic Kufi" color="#FF0000" ><b><small class="label pull-left bg-yellow"><? echo $noco; ?></small></b></font></a></li>
<li dir="rtl" >	 <a href="table_cors_stu.php?aID=<? echo $row11[n.$i]; ?>#top" target=I1><font face="Droid Arabic Kufi" color="#ffffff" ><i class="fa fa-circle-o"></i>جدول المتدربين / الطلاب</font><font face="Droid Arabic Kufi" color="#FF0000" ><b><small class="label pull-left bg-yellow"><? echo $co; ?></small></b></font></a></li>
<li dir="rtl" >	 <a href="table_class.php?aID=<? echo $row11[n.$i]; ?>#top" target=I1><font face="Droid Arabic Kufi" color="#ffffff" ><i class="fa fa-circle-o"></i>تقرير بالقاعات الدراسية</font><font face="Droid Arabic Kufi" color="#FF0000" ><b><small class="label pull-left bg-yellow"><? echo $co; ?></small></b></font></a></li>
</ul>
</li>


 <li class="treeview">
<a href="#">
<i class="fa fa-flag"></i>
<span>حضور وغياب المتدربين </span>
<i class="fa fa-angle-left pull-left"></i>
</a>
<ul class="treeview-menu">
 
  <li dir="rtl" >	 <a href="prepare.php?aID=<? echo $row11[n.$i]; ?>#top" target=_blank><font face="Droid Arabic Kufi" color="#ffffff" ><i class="fa fa-circle-o"></i>التحضير برقم الهوية /الباركود</font></a></li>
  
  
  <li dir="rtl" >	 <a href="amang_cors.php?aID=<? echo $row11[n.$i]; ?>#top" target=I1><font face="Droid Arabic Kufi" color="#ffffff" ><i class="fa fa-circle-o"></i>الدورات التأهيلية</font></a></li>
  <li dir="rtl" >	 <a href="amang_cors_tatwery.php?aID=<? echo $row11[n.$i]; ?>#top" target=I1><font face="Droid Arabic Kufi" color="#ffffff" ><i class="fa fa-circle-o"></i>الدورات التطويرية</font></a></li>
  <li dir="rtl" >	 <a href="amang_cors_eng.php?aID=<? echo $row11[n.$i]; ?>#top" target=I1><font face="Droid Arabic Kufi" color="#ffffff" ><i class="fa fa-circle-o"></i>دورات اللغات الأجنبية</font></a></li>
</ul>
</li>



 <li class="treeview">
<a href="#">
<i class="fa fa-flag"></i>
<span>تقرير الحصور والغياب </span>
<i class="fa fa-angle-left pull-left"></i>
</a>
<ul class="treeview-menu">
 
  <li dir="rtl" >	 <a href="rmang_cors.php?aID=<? echo $row11[n.$i]; ?>#top" target=I1><font face="Droid Arabic Kufi" color="#ffffff" ><i class="fa fa-circle-o"></i>تقرير الدورات التأهيلية</font></a></li>
  <li dir="rtl" >	 <a href="rmang_cors_tatwery.php?aID=<? echo $row11[n.$i]; ?>#top" target=I1><font face="Droid Arabic Kufi" color="#ffffff" ><i class="fa fa-circle-o"></i>تقرير الدورات التطويرية</font></a></li>
  <li dir="rtl" >	 <a href="rmang_cors_eng.php?aID=<? echo $row11[n.$i]; ?>#top" target=I1><font face="Droid Arabic Kufi" color="#ffffff" ><i class="fa fa-circle-o"></i>تقرير دورات اللغات الأجنبية</font></a></li>
</ul>
</li>





 <li class="treeview">
<a href="#">
<i class="fa fa-flag"></i>
<span>الدرجات وشهادات التخرج </span>
<i class="fa fa-angle-left pull-left"></i>
</a>
<ul class="treeview-menu">
  <li dir="rtl" >	 <a href="smang_iqama.php?aID=<? echo $row11[n.$i]; ?>#top" target=I1><font face="Droid Arabic Kufi" color="#ffffff" ><i class="fa fa-circle-o"></i>درجات المتدرب</font></a></li>

  <li dir="rtl" >	 <a href="smang_cors.php?aID=<? echo $row11[n.$i]; ?>#top" target=I1><font face="Droid Arabic Kufi" color="#ffffff" ><i class="fa fa-circle-o"></i>الدورات التأهيلية</font></a></li>
  <li dir="rtl" >	 <a href="smang_cors_tatwery.php?aID=<? echo $row11[n.$i]; ?>#top" target=I1><font face="Droid Arabic Kufi" color="#ffffff" ><i class="fa fa-circle-o"></i>الدورات التطويرية</font></a></li>
  <li dir="rtl" >	 <a href="smang_cors_eng.php?aID=<? echo $row11[n.$i]; ?>#top" target=I1><font face="Droid Arabic Kufi" color="#ffffff" ><i class="fa fa-circle-o"></i>دورات اللغات الأجنبية</font></a></li>
</ul>
</li>


 <li class="treeview">
<a href="#">
<i class="fa  fa-book"></i>
<span>التقارير والإحصائيات</span>
<i class="fa fa-angle-left pull-left"></i>
</a>
<ul class="treeview-menu">
<li dir="rtl" >	 <a href="rep1.php?aID=<? echo $row11[n.$i]; ?>#top" target=I1>		<font face="Droid Arabic Kufi" face="Droid Arabic Kufi" color="#ffffff" >  تقرير1    </font></a></li> 
<li dir="rtl" >	 <a href="rep1.php?aID=<? echo $row11[n.$i]; ?>#top" target=I1>		<font face="Droid Arabic Kufi" face="Droid Arabic Kufi" color="#ffffff" >  تقرير1    </font></a></li> 
<li dir="rtl" >	 <a href="rep1.php?aID=<? echo $row11[n.$i]; ?>#top" target=I1>		<font face="Droid Arabic Kufi" face="Droid Arabic Kufi" color="#ffffff" >  تقرير1    </font></a></li> 
<li dir="rtl" >	 <a href="rep1.php?aID=<? echo $row11[n.$i]; ?>#top" target=I1>		<font face="Droid Arabic Kufi" face="Droid Arabic Kufi" color="#ffffff" >  تقرير1    </font></a></li> 
<li dir="rtl" >	 <a href="rep1.php?aID=<? echo $row11[n.$i]; ?>#top" target=I1>		<font face="Droid Arabic Kufi" face="Droid Arabic Kufi" color="#ffffff" >  تقرير1    </font></a></li> 
<li dir="rtl" >	 <a href="rep1.php?aID=<? echo $row11[n.$i]; ?>#top" target=I1>		<font face="Droid Arabic Kufi" face="Droid Arabic Kufi" color="#ffffff" >  تقرير1    </font></a></li> 
 
</ul>
</li>


 
 


 


            
             
          </ul>
 
          <? }   ?>   
          
          
          
          
          
          <? if($_SESSION['acount_type']==3) { ?>          
 <ul class="sidebar-menu" dir="rtl">
            <li class="header"></li>
 

 <li class="treeview">
<a href="#">
<i class="fa fa-gear"></i>
<span>الاعدادات</span>
<i class="fa fa-angle-left pull-left"></i>
</a>
<ul class="treeview-menu">
 <li dir="rtl" >	 <a href="users.php?aID=<? echo $row11[n.$i]; ?>#top" target=I1><font face="Droid Arabic Kufi" color="#ffffff" ><i class="fa fa-circle-o"></i>مستخدمين النظام</font></a></li>
 
</ul>
</li>



 

 
          
 <li class="treeview">
<a href="#">
<i class="fa fa-user"></i>
<span>الهيئة التدريبية والمحاضرين  </span>
<i class="fa fa-angle-left pull-left"></i>
</a>
<ul class="treeview-menu">
  <li dir="rtl" >	 <a href="add_teacher.php?aID=<? echo $row11[n.$i]; ?>#top" target=I1><font face="Droid Arabic Kufi" color="#ffffff" ><i class="fa fa-circle-o"></i>تسجيل محاضر جديد</font></a></li>
  <li dir="rtl" >	 <a href="e_teacher.php?aID=<? echo $row11[n.$i]; ?>#top" target=I1><font face="Droid Arabic Kufi" color="#ffffff" ><i class="fa fa-circle-o"></i>   <i class="fa fa-pencil btn btn-info btn-sm "></i> المحاضرين</font></a></li>
</ul>
</li>


 <li class="treeview">
<a href="#">
<i class="fa fa-bar-chart-o"></i>
<span>الدورات الدراسية</span>
<i class="fa fa-angle-left pull-left"></i>
</a>
<ul class="treeview-menu">
  <li dir="rtl" >	 <a href="mang_cors.php?aID=<? echo $row11[n.$i]; ?>#top" target=I1><font face="Droid Arabic Kufi" color="#ffffff" ><i class="fa fa-circle-o"></i>إدارة الدورات التأهيلية</font></a></li>
  <li dir="rtl" >	 <a href="mang_cors_tatwery.php?aID=<? echo $row11[n.$i]; ?>#top" target=I1><font face="Droid Arabic Kufi" color="#ffffff" ><i class="fa fa-circle-o"></i>إدارة الدورات التطويرية</font></a></li>
  <li dir="rtl" >	 <a href="mang_cors_eng.php?aID=<? echo $row11[n.$i]; ?>#top" target=I1><font face="Droid Arabic Kufi" color="#ffffff" ><i class="fa fa-circle-o"></i>إدارة دورات اللغات الأجنبية</font></a></li>

  <li dir="rtl" >	 <a href="a_teacher_cors.php?aID=<? echo $row11[n.$i]; ?>#top" target=I1><font face="Droid Arabic Kufi" color="#ffffff" ><i class="fa fa-circle-o"></i>إدارة الدورات التدريبية والمدرسين</font></a></li>
</ul>
</li>

 <li class="treeview">
<a href="#">
<i class="fa  fa-calendar"></i>
<span>المتدربين/ المتدريبات    </span>
<i class="fa fa-angle-left pull-left"></i>
</a>
<ul class="treeview-menu">
  <li dir="rtl" >	 <a href="stu.php?aID=<? echo $row11[n.$i]; ?>#top" target=I1><font face="Droid Arabic Kufi" color="#ffffff" ><i class="fa fa-circle-o"></i>تسجيل المتدربين والدورات</font></a></li>
 
 
</ul>
</li>




 <li class="treeview">
<a href="#">
<i class="fa  fa-desktop"></i>
<span> الجداول والقاعات الدراسية</span>
<i class="fa fa-angle-left pull-left"></i>
</a>
<ul class="treeview-menu">
<li dir="rtl" >	 <a href="table_cors_teacher.php?aID=<? echo $row11[n.$i]; ?>#top" target=I1><font face="Droid Arabic Kufi" color="#ffffff" ><i class="fa fa-circle-o"></i>جدول المدربين / المحاضرين</font><font face="Droid Arabic Kufi" color="#FF0000" ><b><small class="label pull-left bg-yellow"><? echo $noco; ?></small></b></font></a></li>
<li dir="rtl" >	 <a href="table_cors_stu.php?aID=<? echo $row11[n.$i]; ?>#top" target=I1><font face="Droid Arabic Kufi" color="#ffffff" ><i class="fa fa-circle-o"></i>جدول المتدربين / الطلاب</font><font face="Droid Arabic Kufi" color="#FF0000" ><b><small class="label pull-left bg-yellow"><? echo $co; ?></small></b></font></a></li>
<li dir="rtl" >	 <a href="table_class.php?aID=<? echo $row11[n.$i]; ?>#top" target=I1><font face="Droid Arabic Kufi" color="#ffffff" ><i class="fa fa-circle-o"></i>تقرير بالقاعات الدراسية</font><font face="Droid Arabic Kufi" color="#FF0000" ><b><small class="label pull-left bg-yellow"><? echo $co; ?></small></b></font></a></li>
</ul>
</li>


 <li class="treeview">
<a href="#">
<i class="fa fa-flag"></i>
<span>حضور وغياب المتدربين </span>
<i class="fa fa-angle-left pull-left"></i>
</a>
<ul class="treeview-menu">
 
  <li dir="rtl" >	 <a href="prepare.php?aID=<? echo $row11[n.$i]; ?>#top" target=_blank><font face="Droid Arabic Kufi" color="#ffffff" ><i class="fa fa-circle-o"></i>التحضير برقم الهوية /الباركود</font></a></li>
  
  
  <li dir="rtl" >	 <a href="amang_cors.php?aID=<? echo $row11[n.$i]; ?>#top" target=I1><font face="Droid Arabic Kufi" color="#ffffff" ><i class="fa fa-circle-o"></i>الدورات التأهيلية</font></a></li>
  <li dir="rtl" >	 <a href="amang_cors_tatwery.php?aID=<? echo $row11[n.$i]; ?>#top" target=I1><font face="Droid Arabic Kufi" color="#ffffff" ><i class="fa fa-circle-o"></i>الدورات التطويرية</font></a></li>
  <li dir="rtl" >	 <a href="amang_cors_eng.php?aID=<? echo $row11[n.$i]; ?>#top" target=I1><font face="Droid Arabic Kufi" color="#ffffff" ><i class="fa fa-circle-o"></i>دورات اللغات الأجنبية</font></a></li>
</ul>
</li>



 <li class="treeview">
<a href="#">
<i class="fa fa-flag"></i>
<span>تقرير الحصور والغياب </span>
<i class="fa fa-angle-left pull-left"></i>
</a>
<ul class="treeview-menu">
 
  <li dir="rtl" >	 <a href="rmang_cors.php?aID=<? echo $row11[n.$i]; ?>#top" target=I1><font face="Droid Arabic Kufi" color="#ffffff" ><i class="fa fa-circle-o"></i>تقرير الدورات التأهيلية</font></a></li>
  <li dir="rtl" >	 <a href="rmang_cors_tatwery.php?aID=<? echo $row11[n.$i]; ?>#top" target=I1><font face="Droid Arabic Kufi" color="#ffffff" ><i class="fa fa-circle-o"></i>تقرير الدورات التطويرية</font></a></li>
  <li dir="rtl" >	 <a href="rmang_cors_eng.php?aID=<? echo $row11[n.$i]; ?>#top" target=I1><font face="Droid Arabic Kufi" color="#ffffff" ><i class="fa fa-circle-o"></i>تقرير دورات اللغات الأجنبية</font></a></li>
</ul>
</li>





 <li class="treeview">
<a href="#">
<i class="fa fa-flag"></i>
<span>الدرجات وشهادات التخرج </span>
<i class="fa fa-angle-left pull-left"></i>
</a>
<ul class="treeview-menu">
  <li dir="rtl" >	 <a href="smang_iqama.php?aID=<? echo $row11[n.$i]; ?>#top" target=I1><font face="Droid Arabic Kufi" color="#ffffff" ><i class="fa fa-circle-o"></i>درجات المتدرب</font></a></li>

  <li dir="rtl" >	 <a href="smang_cors.php?aID=<? echo $row11[n.$i]; ?>#top" target=I1><font face="Droid Arabic Kufi" color="#ffffff" ><i class="fa fa-circle-o"></i>الدورات التأهيلية</font></a></li>
  <li dir="rtl" >	 <a href="smang_cors_tatwery.php?aID=<? echo $row11[n.$i]; ?>#top" target=I1><font face="Droid Arabic Kufi" color="#ffffff" ><i class="fa fa-circle-o"></i>الدورات التطويرية</font></a></li>
  <li dir="rtl" >	 <a href="smang_cors_eng.php?aID=<? echo $row11[n.$i]; ?>#top" target=I1><font face="Droid Arabic Kufi" color="#ffffff" ><i class="fa fa-circle-o"></i>دورات اللغات الأجنبية</font></a></li>
</ul>
</li>


 <li class="treeview">
<a href="#">
<i class="fa  fa-book"></i>
<span>التقارير والإحصائيات</span>
<i class="fa fa-angle-left pull-left"></i>
</a>
<ul class="treeview-menu">
<li dir="rtl" >	 <a href="rep1.php?aID=<? echo $row11[n.$i]; ?>#top" target=I1>		<font face="Droid Arabic Kufi" face="Droid Arabic Kufi" color="#ffffff" >  تقرير1    </font></a></li> 
<li dir="rtl" >	 <a href="rep1.php?aID=<? echo $row11[n.$i]; ?>#top" target=I1>		<font face="Droid Arabic Kufi" face="Droid Arabic Kufi" color="#ffffff" >  تقرير1    </font></a></li> 
<li dir="rtl" >	 <a href="rep1.php?aID=<? echo $row11[n.$i]; ?>#top" target=I1>		<font face="Droid Arabic Kufi" face="Droid Arabic Kufi" color="#ffffff" >  تقرير1    </font></a></li> 
<li dir="rtl" >	 <a href="rep1.php?aID=<? echo $row11[n.$i]; ?>#top" target=I1>		<font face="Droid Arabic Kufi" face="Droid Arabic Kufi" color="#ffffff" >  تقرير1    </font></a></li> 
<li dir="rtl" >	 <a href="rep1.php?aID=<? echo $row11[n.$i]; ?>#top" target=I1>		<font face="Droid Arabic Kufi" face="Droid Arabic Kufi" color="#ffffff" >  تقرير1    </font></a></li> 
<li dir="rtl" >	 <a href="rep1.php?aID=<? echo $row11[n.$i]; ?>#top" target=I1>		<font face="Droid Arabic Kufi" face="Droid Arabic Kufi" color="#ffffff" >  تقرير1    </font></a></li> 
 
</ul>
</li>


 
 


 


            
             
          </ul>
 
          <? }   ?>