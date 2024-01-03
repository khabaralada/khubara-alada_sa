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
        <?php if ($row['image'] != "") { ?> <img src="dist/img/<?php echo $row['image']; ?>" class="img-circle" alt="User Image" />
        <?php } else { ?>
          <?php if ($_SESSION['Branches'] == 3) { ?><img src="dist/img/avatar2.png" class="img-circle" alt="User Image" /><?php } else { ?>
            <img src="dist/img/avatar5.png" class="img-circle" alt="User Image" />
          <?php } ?>

        <?php } ?>
      </div>
      <div>
        <p align="center">
          <font color="#FFFFFF"> <?php echo $nname; ?></font>
        </p>

        <p align="center">

          <a href="#"> متصل <i class="fa fa-circle text-success"></i></a>
      </div>
    </div>
    <!-- search form -->
    <?php if ($_SESSION['acount_type'] != 8) { ?>
      <form action="find.php" method="post" class="sidebar-form">
        <div class="input-group">

          <span class="input-group-btn">
            <button type='submit' name='search' id='search-btn' class="btn btn-flat"><i class="fa fa-search"></i></button>
          </span>
          <input type="text" name="find" class="form-control" placeholder="البحث والاستعلام" dir="RTL" />

        </div>
      </form><?php } ?>
    <!-- /.search form -->
    <!-- sidebar menu: : style can be found in sidebar.less -->




    <ul class="sidebar-menu" dir="rtl">
      <li class="header"></li>







      <?php if ($_SESSION['acount_type'] == 1) { ?>

        <li dir="rtl" align="right"> <a href="settinig.php#top">
            <font face="Droid Arabic Kufi" color="#ffffff" style="font-size: 9pt"><i class="fa fa-home  fa-2x"></i>&nbsp;&nbsp;اعدادات المتجر</font>
          </a></li>
        <li dir="rtl" align="right"> <a href="branches.php#top">
            <font face="Droid Arabic Kufi" color="#ffffff" style="font-size: 9pt"><i class="fa fa-cog  fa-2x"></i>&nbsp;&nbsp;الفروع والإدارات</font>
          </a></li>



        <li class="treeview">
          <a href="#">
            <i class="fa fa-users  fa-2x"></i>
            <span>&nbsp;&nbsp;المستخدمين والصلاحيات</span>
            <i class="fa fa-angle-left pull-left"></i>
          </a>
          <ul class="treeview-menu">
            <li dir="rtl" align="right"> <a href="users.php#top">
                <font face="Droid Arabic Kufi" color="#ffffff" style="font-size: 9pt"><i class="fa fa-user text-red"></i>&nbsp;&nbsp;مستخدمين النظام </font>
              </a></li>

          </ul>
        </li>

        <li class="treeview">
          <a href="#">
            <i class="fa fa-table fa-2x"></i>
            <span>&nbsp;&nbsp;التواصل الاجتماعي</span>
            <i class="fa fa-angle-left pull-left"></i>
          </a>
          <ul class="treeview-menu">
            <li dir="rtl" align="right"> <a href="media.php#top">
                <font face="Droid Arabic Kufi" color="#ffffff" style="font-size: 9pt"><i class="fa fa-cog  text-red"></i>&nbsp;&nbsp;التواصل الاجتماعي</font>
              </a></li>
          </ul>
        </li>



        <li class="treeview">
          <a href="#">
            <i class="fa fa-table fa-2x"></i>
            <span>&nbsp;&nbsp;القوائم والروابط</span>
            <i class="fa fa-angle-left pull-left"></i>
          </a>
          <ul class="treeview-menu">
            <li dir="rtl" align="right"> <a href="add_menu.php#top">
                <font face="Droid Arabic Kufi" color="#ffffff" style="font-size: 9pt"><i class="fa fa-check-circle-o text-red"></i>&nbsp;&nbsp;القوائم الرئيسية</font>
              </a></li>
            <li dir="rtl" align="right"> <a href="sub_menu.php#top">
                <font face="Droid Arabic Kufi" color="#ffffff" style="font-size: 9pt"><i class="fa fa-eye text-red"></i>&nbsp;&nbsp;القوائم الفرعية</font>
              </a></li>
          </ul>
        </li>


        <li class="treeview">
          <a href="#">
            <i class="fa fa-table fa-2x"></i>
            <span>&nbsp;&nbsp;الصفحات</span>
            <i class="fa fa-angle-left pull-left"></i>
          </a>
          <ul class="treeview-menu">
            <li dir="rtl" align="right"> <a href="add_page_ar.php?ID_user=<?php echo $ID_user; ?>#top">
                <font face="Droid Arabic Kufi" color="#ffffff" style="font-size: 9pt"><i class="fa fa-bookmark text-red"></i>&nbsp;&nbsp;صفحة جديدة</font>
              </a></li>
            <li dir="rtl" align="right"> <a href="s_page_ar.php?ID_user=<?php echo $ID_user; ?>#top">
                <font face="Droid Arabic Kufi" color="#ffffff" style="font-size: 9pt"><i class="fa fa-bookmark text-red"></i>&nbsp;&nbsp;تعديل الصفحات</font>
              </a></li>
          </ul>
        </li>


        <li class="treeview">
          <a href="#">
            <i class="fa fa-table fa-2x"></i>
            <span>&nbsp;&nbsp;الأبحاث والمقالات</span>
            <i class="fa fa-angle-left pull-left"></i>
          </a>
          <ul class="treeview-menu">
            <li dir="rtl" align="right"> <a href="add_research.php?ID_user=<?php echo $ID_user; ?>#top">
                <font face="Droid Arabic Kufi" color="#ffffff" style="font-size: 9pt"><i class="fa fa-bookmark text-red"></i>&nbsp;&nbsp;اضافة الابحاث</font>
              </a></li>
            <li dir="rtl" align="right"> <a href="add_articles.php?ID_user=<?php echo $ID_user; ?>#top">
                <font face="Droid Arabic Kufi" color="#ffffff" style="font-size: 9pt"><i class="fa fa-bookmark text-red"></i>&nbsp;&nbsp;اضافة مقالات</font>
              </a></li>
            <li dir="rtl" align="right"> <a href="s_research.php?ID_user=<?php echo $ID_user; ?>#top">
                <font face="Droid Arabic Kufi" color="#ffffff" style="font-size: 9pt"><i class="fa fa-bookmark text-red"></i>&nbsp;&nbsp;إدارة الابحاث والمقالات</font>
              </a></li>
          </ul>
        </li>


        <li class="treeview">
          <a href="#">
            <i class="fa fa-table fa-2x"></i>
            <span>&nbsp;&nbsp;المدربين</span>
            <i class="fa fa-angle-left pull-left"></i>
          </a>
          <ul class="treeview-menu">
            <li dir="rtl" align="right"> <a href="teacher.php?ID_user=<?php echo $ID_user; ?>#top">
                <font face="Droid Arabic Kufi" color="#ffffff" style="font-size: 9pt"><i class="fa fa-check-square text-red"></i>&nbsp;&nbsp;الهيئة التدريبية</font>
              </a></li>
          </ul>
        </li>


        <li class="treeview">
          <a href="#">
            <i class="fa fa-table fa-2x"></i>
            <span>&nbsp;&nbsp;الشركاء والعملاء</span>
            <i class="fa fa-angle-left pull-left"></i>
          </a>
          <ul class="treeview-menu">
            <li dir="rtl" align="right"> <a href="add_partners.php?ID_user=<?php echo $ID_user; ?>#top">
                <font face="Droid Arabic Kufi" color="#ffffff" style="font-size: 9pt"><i class="fa fa-check-square text-red"></i>&nbsp;&nbsp; العملاء وشركاء النجاح</font>
              </a></li>
          </ul>
        </li>


        <li class="treeview">
          <a href="#">
            <i class="fa fa-table fa-2x"></i>
            <span>&nbsp;&nbsp;الاعداد</span>
            <i class="fa fa-angle-left pull-left"></i>
          </a>
          <ul class="treeview-menu">
            <li dir="rtl" align="right"> <a href="add_count.php?ID_user=<?php echo $ID_user; ?>#top">
                <font face="Droid Arabic Kufi" color="#ffffff" style="font-size: 9pt"><i class="fa fa-check-square text-red"></i>&nbsp;&nbsp; إدارة الأعداد</font>
              </a></li>
          </ul>
        </li>

        <li class="treeview">
          <a href="#">
            <i class="fa fa-table fa-2x"></i>
            <span>&nbsp;&nbsp;آلبوم الصور والفيديو</span>
            <i class="fa fa-angle-left pull-left"></i>
          </a>
          <ul class="treeview-menu">
            <li dir="rtl" align="right"> <a href="add_photo.php?ID_user=<?php echo $ID_user; ?>#top">
                <font face="Droid Arabic Kufi" color="#ffffff" style="font-size: 9pt"><i class="fa fa-check-square text-red"></i>&nbsp;&nbsp; آلبوم الصور</font>
              </a></li>
            <li dir="rtl" align="right"> <a href="add_video.php?ID_user=<?php echo $ID_user; ?>#top">
                <font face="Droid Arabic Kufi" color="#ffffff" style="font-size: 9pt"><i class="fa fa-check-square text-red"></i>&nbsp;&nbsp; الفيديوهات </font>
              </a></li>
          </ul>
        </li>

        <li class="treeview">
          <a href="#">
            <i class="fa fa-table fa-2x"></i>
            <span>&nbsp;&nbsp;اخر الاخبار</span>
            <i class="fa fa-angle-left pull-left"></i>
          </a>
          <ul class="treeview-menu">
            <li dir="rtl" align="right"> <a href="add_news.php?ID_user=<?php echo $ID_user; ?>#top">
                <font face="Droid Arabic Kufi" color="#ffffff" style="font-size: 9pt"><i class="fa fa-check-square text-red"></i>&nbsp;&nbsp; اضافة الاخبار</font>
              </a></li>
            <li dir="rtl" align="right"> <a href="s_news.php?ID_user=<?php echo $ID_user; ?>#top">
                <font face="Droid Arabic Kufi" color="#ffffff" style="font-size: 9pt"><i class="fa fa-check-square text-red"></i>&nbsp;&nbsp; تعديل وحذف الاخبار</font>
              </a></li>
          </ul>
        </li>

        <li class="treeview">
          <a href="#">
            <i class="fa fa-table fa-2x"></i>
            <span>&nbsp;&nbsp;الإعتمادات والشهادات </span>
            <i class="fa fa-angle-left pull-left"></i>
          </a>
          <ul class="treeview-menu">
            <li dir="rtl" align="right"> <a href="add_orgn.php?ID_user=<?php echo $ID_user; ?>#top">
                <font face="Droid Arabic Kufi" color="#ffffff" style="font-size: 9pt"><i class="fa fa-check-square text-red"></i>&nbsp;&nbsp; اضافة جديد</font>
              </a></li>
            <li dir="rtl" align="right"> <a href="s_orgn.php?ID_user=<?php echo $ID_user; ?>#top">
                <font face="Droid Arabic Kufi" color="#ffffff" style="font-size: 9pt"><i class="fa fa-check-square text-red"></i>&nbsp;&nbsp; تعديل وحذف</font>
              </a></li>
          </ul>
        </li>

        <li class="treeview">
          <a href="#">
            <i class="fa fa-table fa-2x"></i>
            <span>&nbsp;&nbsp;المؤتمرات والفعاليات</span>
            <i class="fa fa-angle-left pull-left"></i>
          </a>
          <ul class="treeview-menu">
            <li dir="rtl" align="right"> <a href="add_event.php?ID_user=<?php echo $ID_user; ?>#top">
                <font face="Droid Arabic Kufi" color="#ffffff" style="font-size: 9pt"><i class="fa fa-check-square text-red"></i>&nbsp;&nbsp; اضافةالمؤتمرات والفعاليات</font>
              </a></li>
            <li dir="rtl" align="right"> <a href="s_event.php?ID_user=<?php echo $ID_user; ?>#top">
                <font face="Droid Arabic Kufi" color="#ffffff" style="font-size: 9pt"><i class="fa fa-check-square text-red"></i>&nbsp;&nbsp; إدارة المؤتمرات والفعاليات</font>
              </a></li>
          </ul>
        </li>

        <li class="treeview">
          <a href="#">
            <i class="fa fa-phone fa-2x"></i>
            <span>&nbsp;&nbsp;طلبات الاتصال والاستفسار</span>
            <i class="fa fa-angle-left pull-left"></i>
          </a>
          <ul class="treeview-menu">
            <li dir="rtl" align="right"> <a href="show_contact.php?ID_user=<?php echo $ID_user; ?>#top">
                <font face="Droid Arabic Kufi" color="#ffffff" style="font-size: 9pt"><i class="fa fa-check-square text-red"></i>&nbsp;&nbsp; طلبات الاتصال <span class="label    bg-Teal pull-left">
                    <?php
                    $query1 = "select count(*) as Research_ID from eqt ";
                    $result1 = mysqli_query($conn, $query1);
                    while ($row1 = mysqli_fetch_array($result1)) {
                      echo $row1['Research_ID'];
                    }
                    ?></span></font>
              </a></li>
          </ul>
        </li>


        <li class="treeview">
          <a href="#">
            <i class="fa fa-users fa-2x"></i>
            <span>&nbsp;&nbsp;المسجلين بالدورات التدريبية</span>
            <i class="fa fa-angle-left pull-left"></i>
          </a>
          <ul class="treeview-menu">
            <li dir="rtl" align="right"> <a href="reg.php?ID_user=<?php echo $ID_user; ?>#top">
                <font face="Droid Arabic Kufi" color="#ffffff" style="font-size: 9pt"><i class="fa fa-check-square text-red"></i>&nbsp;&nbsp; المسجلين بالدورات التدريبية</font>
              </a></li>
          </ul>
        </li>

        <li class="treeview">
          <a href="#">
            <i class="fa fa-cog fa-2x"></i>
            <span>&nbsp;&nbsp;إدارة المسجلين CRM</span>
            <i class="fa fa-angle-left pull-left"></i>
          </a>
          <ul class="treeview-menu">

            <li dir="rtl" align="right"> <a href="research.php?ID_user=<?php echo $ID_user; ?>#top">
                <font face="Droid Arabic Kufi" color="#ffffff" style="font-size: 9pt"><i class="fa fa-check-square text-red"></i>&nbsp;&nbsp; توزيع الحالات<span class="label    bg-Teal pull-left">
                    <?php
                    $query1 = "select count(*) as Research_ID from reg_cors1 where ok=0";
                    $result1 = mysqli_query($conn, $query1);
                    while ($row1 = mysqli_fetch_array($result1)) {
                      echo $row1['Research_ID'];
                    }
                    ?></span></font>
              </a></li>





            <li dir="rtl" align="right"> <a href="rep2.php?ID_user=<?php echo $ID_user; ?>#top">
                <font face="Droid Arabic Kufi" color="#ffffff" style="font-size: 9pt"><i class="fa fa-check-square text-red"></i>&nbsp;&nbsp; تقرير بالمسجلين </font>
              </a></li>




            <li dir="rtl" align="right"> <a href="find.php?ID_user=<?php echo $ID_user; ?>#top">
                <font face="Droid Arabic Kufi" color="#ffffff" style="font-size: 9pt"><i class="fa fa-check-square text-red"></i>&nbsp;&nbsp; البحث عن عميل</font>
              </a></li>
            <li dir="rtl" align="right"> <a href="convert.php?ID_user=<?php echo $ID_user; ?>#top">
                <font face="Droid Arabic Kufi" color="#ffffff" style="font-size: 9pt"><i class="fa fa-check-square text-red"></i>&nbsp;&nbsp; تحويل الحالات</font>
              </a></li>

            <li dir="rtl" align="right"> <a href="new_research.php?ID=0">
                <font face="Droid Arabic Kufi" color="#ffffff" style="font-size: 9pt"><i class="fa fa-circle"></i>&nbsp;&nbsp;الحالات الجديدة<span class="label    bg-Teal pull-left">
                    <?php
                    if ($_SESSION['acount_type'] == 1)
                      $query1 = "select count(*) as Research_ID from reg_cors,user_cors where user_cors.cors_ID=reg_cors.no and   Supervisor=0";
                    else
                      $query1 = "select count(*) as Research_ID from reg_cors,user_cors where user_cors.cors_ID=reg_cors.no AND (user_ID = '$_SESSION[user_ID]' OR user_ID IS NULL)  and  Supervisor=0";
                    $result1 = mysqli_query($conn, $query1);
                    while ($row1 = mysqli_fetch_array($result1)) {
                      echo $row1['Research_ID'];
                    }
                    ?></span></font>
              </a></li>


            <li dir="rtl" align="right"> <a href="new_research.php?ID=1">
                <font face="Droid Arabic Kufi" color="#ffffff" style="font-size: 9pt"><i class="fa fa-thumbs-up"></i>&nbsp;&nbsp;مهتم ويرغب بالتسجيل<span class="label    bg-green pull-left">
                    <?php
                    if ($_SESSION['acount_type'] == 1)
                      $query1 = "select count(*) as Research_ID from reg_cors,user_cors where user_cors.cors_ID=reg_cors.no and   Supervisor=1";
                    else
                      $query1 = "select count(*) as Research_ID from reg_cors,user_cors where user_cors.cors_ID=reg_cors.no AND (user_ID = '$_SESSION[user_ID]' OR user_ID IS NULL)  and  Supervisor=1";
                    $result1 = mysqli_query($conn, $query1);
                    while ($row1 = mysqli_fetch_array($result1)) {
                      echo $row1['Research_ID'];
                    }
                    ?></span></font>
              </a></li>
            <li dir="rtl" align="right"> <a href="new_research.php?ID=2">
                <font face="Droid Arabic Kufi" color="#ffffff" style="font-size: 9pt"><i class="fa fa-thumbs-down"></i>&nbsp;&nbsp;مهتم ولا يرغب بالتسجيل<span class="label    bg-red pull-left">
                    <?php
                    if ($_SESSION['acount_type'] == 1)
                      $query1 = "select count(*) as Research_ID from reg_cors,user_cors where user_cors.cors_ID=reg_cors.no and   Supervisor=2";
                    else
                      $query1 = "select count(*) as Research_ID from reg_cors,user_cors where user_cors.cors_ID=reg_cors.no AND (user_ID = '$_SESSION[user_ID]' OR user_ID IS NULL)  and  Supervisor=2";
                    $result1 = mysqli_query($conn, $query1);
                    while ($row1 = mysqli_fetch_array($result1)) {
                      echo $row1['Research_ID'];
                    }
                    ?></span></font>
              </a></li>
            <li dir="rtl" align="right"> <a href="new_research.php?ID=3">
                <font face="Droid Arabic Kufi" color="#ffffff" style="font-size: 9pt"><i class="fa fa-times"></i>&nbsp;&nbsp;غير مهتم<span class="label    bg-blue pull-left">
                    <?php
                    if ($_SESSION['acount_type'] == 1)
                      $query1 = "select count(*) as Research_ID from reg_cors,user_cors where user_cors.cors_ID=reg_cors.no and   Supervisor=3";
                    else
                      $query1 = "select count(*) as Research_ID from reg_cors,user_cors where user_cors.cors_ID=reg_cors.no AND (user_ID = '$_SESSION[user_ID]' OR user_ID IS NULL)  and  Supervisor=3";
                    $result1 = mysqli_query($conn, $query1);
                    while ($row1 = mysqli_fetch_array($result1)) {
                      echo $row1['Research_ID'];
                    }
                    ?></span></font>
              </a></li>
            <li dir="rtl" align="right"> <a href="new_research.php?ID=4">
                <font face="Droid Arabic Kufi" color="#ffffff" style="font-size: 9pt"><i class="fa fa-phone"></i>&nbsp;&nbsp;لم يتم الرد علي الاتصال<span class="label    bg-red pull-left">
                    <?php
                    if ($_SESSION['acount_type'] == 1)
                      $query1 = "select count(*) as Research_ID from reg_cors,user_cors where user_cors.cors_ID=reg_cors.no and   Supervisor=4";
                    else
                      $query1 = "select count(*) as Research_ID from reg_cors,user_cors where user_cors.cors_ID=reg_cors.no AND (user_ID = '$_SESSION[user_ID]' OR user_ID IS NULL)  and  Supervisor=4";
                    $result1 = mysqli_query($conn, $query1);
                    while ($row1 = mysqli_fetch_array($result1)) {
                      echo $row1['Research_ID'];
                    }
                    ?></span></font>
              </a></li>





            <li dir="rtl" align="right"> <a href="new_research.php?ID=5">
                <font face="Droid Arabic Kufi" color="#ffffff" style="font-size: 9pt"><i class="fa fa-ban"></i>&nbsp;&nbsp;الجوال مغلق<span class="label    bg-Maroon pull-left">
                    <?php
                    if ($_SESSION['acount_type'] == 1)
                      $query1 = "select count(*) as Research_ID from reg_cors,user_cors where user_cors.cors_ID=reg_cors.no and   Supervisor=5";
                    else
                      $query1 = "select count(*) as Research_ID from reg_cors,user_cors where user_cors.cors_ID=reg_cors.no AND (user_ID = '$_SESSION[user_ID]' OR user_ID IS NULL)  and  Supervisor=5";
                    $result1 = mysqli_query($conn, $query1);
                    while ($row1 = mysqli_fetch_array($result1)) {
                      echo $row1['Research_ID'];
                    }
                    ?></span></font>
              </a></li>


            <li dir="rtl" align="right"> <a href="new_research.php?ID=7">
                <font face="Droid Arabic Kufi" color="#ffffff" style="font-size: 9pt"><i class="fa fa-user"></i>&nbsp;&nbsp;متردد بالتسجيل<span class="label    bg-green pull-left">
                    <?php
                    if ($_SESSION['acount_type'] == 1)
                      $query1 = "select count(*) as Research_ID from reg_cors,user_cors where user_cors.cors_ID=reg_cors.no and   Supervisor=7";
                    else
                      $query1 = "select count(*) as Research_ID from reg_cors,user_cors where user_cors.cors_ID=reg_cors.no AND (user_ID = '$_SESSION[user_ID]' OR user_ID IS NULL)  and  Supervisor=7";
                    $result1 = mysqli_query($conn, $query1);
                    while ($row1 = mysqli_fetch_array($result1)) {
                      echo $row1['Research_ID'];
                    }
                    ?></span></font>
              </a></li>


            <li dir="rtl" align="right"> <a href="new_research.php?ID=8">
                <font face="Droid Arabic Kufi" color="#ffffff" style="font-size: 9pt"><i class="fa fa-inbox"></i>&nbsp;&nbsp;ارسلت للصندوق<span class="label    bg-red pull-left">
                    <?php
                    if ($_SESSION['acount_type'] == 1)
                      $query1 = "select count(*) as Research_ID from reg_cors,user_cors where user_cors.cors_ID=reg_cors.no and   Supervisor=8";
                    else
                      $query1 = "select count(*) as Research_ID from reg_cors,user_cors where user_cors.cors_ID=reg_cors.no AND (user_ID = '$_SESSION[user_ID]' OR user_ID IS NULL)  and  Supervisor=8";
                    $result1 = mysqli_query($conn, $query1);
                    while ($row1 = mysqli_fetch_array($result1)) {
                      echo $row1['Research_ID'];
                    }
                    ?></span></font>
              </a></li>






            <li dir="rtl" align="right"> <a href="new_research2.php?ID=6">
                <font face="Droid Arabic Kufi" color="#ffffff" style="font-size: 9pt"><i class="fa fa-money"></i>&nbsp;&nbsp;المسددين رسوم التدريب<span class="label    bg-red pull-left">
                    <?php
                    if ($_SESSION['acount_type'] == 1)
                      $query1 = "select count(*) as Research_ID from reg_cors,user_cors where user_cors.cors_ID=reg_cors.no and   Supervisor=6";
                    else
                      $query1 = "select count(*) as Research_ID from reg_cors,user_cors where user_cors.cors_ID=reg_cors.no AND (user_ID = '$_SESSION[user_ID]' OR user_ID IS NULL)  and  Supervisor=6";
                    $result1 = mysqli_query($conn, $query1);
                    while ($row1 = mysqli_fetch_array($result1)) {
                      echo $row1['Research_ID'];
                    }
                    ?></span></font>
              </a></li>








          </ul>
        </li>

        <li class="treeview">
          <a href="#">
            <i class="fa fa-users fa-2x"></i>
            <span>&nbsp;&nbsp;التقارير </span>
            <i class="fa fa-angle-left pull-left"></i>
          </a>
          <ul class="treeview-menu">
            <li dir="rtl" align="right"> <a href="rep_user.php?ID_user=<?php echo $ID_user; ?>#top">
                <font face="Droid Arabic Kufi" color="#ffffff" style="font-size: 9pt"><i class="fa fa-check-square text-red"></i>&nbsp;&nbsp; تقرير مفصل بالمستخدم</font>
              </a></li>
            <li dir="rtl" align="right"> <a href="rep_user1.php?ID_user=<?php echo $ID_user; ?>#top">
                <font face="Droid Arabic Kufi" color="#ffffff" style="font-size: 9pt"><i class="fa fa-check-square text-red"></i>&nbsp;&nbsp; تقرير مجمع بالمستخدم</font>
              </a></li>
          </ul>
        </li>

        <br><br>
        <br><br>
        <br><br>

      <?php } elseif ($_SESSION['acount_type'] == 2) {  ?>

        <li class="treeview">
          <a href="#">
            <i class="fa fa-users fa-2x"></i>
            <span>&nbsp;&nbsp;المسجلين بالدورات التدريبية</span>
            <i class="fa fa-angle-left pull-left"></i>
          </a>
          <ul class="treeview-menu">
            <li dir="rtl" align="right"> <a href="reg.php?ID_user=<?php echo $ID_user; ?>#top">
                <font face="Droid Arabic Kufi" color="#ffffff" style="font-size: 9pt"><i class="fa fa-check-square text-red"></i>&nbsp;&nbsp; المسجلين بالدورات التدريبية</font>
              </a></li>
          </ul>
        </li>

        <li class="treeview">
          <a href="#">
            <i class="fa fa-cog fa-2x"></i>
            <span>&nbsp;&nbsp;إدارة المسجلين CRM</span>
            <i class="fa fa-angle-left pull-left"></i>
          </a>
          <ul class="treeview-menu">

            <li dir="rtl" align="right"> <a href="research.php?ID_user=<?php echo $ID_user; ?>#top">
                <font face="Droid Arabic Kufi" color="#ffffff" style="font-size: 9pt"><i class="fa fa-check-square text-red"></i>&nbsp;&nbsp; توزيع الحالات<span class="label    bg-Teal pull-left">
                    <?php
                    $query1 = "select count(*) as Research_ID from reg_cors1 where ok=0";
                    $result1 = mysqli_query($conn, $query1);
                    while ($row1 = mysqli_fetch_array($result1)) {
                      echo $row1['Research_ID'];
                    }
                    ?></span></font>
              </a></li>





            <li dir="rtl" align="right"> <a href="rep2.php?ID_user=<?php echo $ID_user; ?>#top">
                <font face="Droid Arabic Kufi" color="#ffffff" style="font-size: 9pt"><i class="fa fa-check-square text-red"></i>&nbsp;&nbsp; تقرير بالمسجلين </font>
              </a></li>




            <li dir="rtl" align="right"> <a href="find.php?ID_user=<?php echo $ID_user; ?>#top">
                <font face="Droid Arabic Kufi" color="#ffffff" style="font-size: 9pt"><i class="fa fa-check-square text-red"></i>&nbsp;&nbsp; البحث عن عميل</font>
              </a></li>
            <li dir="rtl" align="right"> <a href="convert.php?ID_user=<?php echo $ID_user; ?>#top">
                <font face="Droid Arabic Kufi" color="#ffffff" style="font-size: 9pt"><i class="fa fa-check-square text-red"></i>&nbsp;&nbsp; تحويل الحالات</font>
              </a></li>

            <li dir="rtl" align="right"> <a href="new_research.php?ID=0">
                <font face="Droid Arabic Kufi" color="#ffffff" style="font-size: 9pt"><i class="fa fa-circle"></i>&nbsp;&nbsp;الحالات الجديدة<span class="label    bg-Teal pull-left">
                    <?php
                    if ($_SESSION['acount_type'] == 1)
                      $query1 = "select count(*) as Research_ID from reg_cors,user_cors where user_cors.cors_ID=reg_cors.no and   Supervisor=0";
                    else
                      $query1 = "select count(*) as Research_ID from reg_cors,user_cors where user_cors.cors_ID=reg_cors.no AND (user_ID = '$_SESSION[user_ID]' OR user_ID IS NULL)  and  Supervisor=0";
                    $result1 = mysqli_query($conn, $query1);
                    while ($row1 = mysqli_fetch_array($result1)) {
                      echo $row1['Research_ID'];
                    }
                    ?></span></font>
              </a></li>


            <li dir="rtl" align="right"> <a href="new_research.php?ID=1">
                <font face="Droid Arabic Kufi" color="#ffffff" style="font-size: 9pt"><i class="fa fa-thumbs-up"></i>&nbsp;&nbsp;مهتم ويرغب بالتسجيل<span class="label    bg-green pull-left">
                    <?php
                    if ($_SESSION['acount_type'] == 1)
                      $query1 = "select count(*) as Research_ID from reg_cors,user_cors where user_cors.cors_ID=reg_cors.no and   Supervisor=1";
                    else
                      $query1 = "select count(*) as Research_ID from reg_cors,user_cors where user_cors.cors_ID=reg_cors.no AND (user_ID = '$_SESSION[user_ID]' OR user_ID IS NULL)  and  Supervisor=1";
                    $result1 = mysqli_query($conn, $query1);
                    while ($row1 = mysqli_fetch_array($result1)) {
                      echo $row1['Research_ID'];
                    }
                    ?></span></font>
              </a></li>
            <li dir="rtl" align="right"> <a href="new_research.php?ID=2">
                <font face="Droid Arabic Kufi" color="#ffffff" style="font-size: 9pt"><i class="fa fa-thumbs-down"></i>&nbsp;&nbsp;مهتم ولا يرغب بالتسجيل<span class="label    bg-red pull-left">
                    <?php
                    if ($_SESSION['acount_type'] == 1)
                      $query1 = "select count(*) as Research_ID from reg_cors,user_cors where user_cors.cors_ID=reg_cors.no and   Supervisor=2";
                    else
                      $query1 = "select count(*) as Research_ID from reg_cors,user_cors where user_cors.cors_ID=reg_cors.no AND (user_ID = '$_SESSION[user_ID]' OR user_ID IS NULL)  and  Supervisor=2";
                    $result1 = mysqli_query($conn, $query1);
                    while ($row1 = mysqli_fetch_array($result1)) {
                      echo $row1['Research_ID'];
                    }
                    ?></span></font>
              </a></li>
            <li dir="rtl" align="right"> <a href="new_research.php?ID=3">
                <font face="Droid Arabic Kufi" color="#ffffff" style="font-size: 9pt"><i class="fa fa-times"></i>&nbsp;&nbsp;غير مهتم<span class="label    bg-blue pull-left">
                    <?php
                    if ($_SESSION['acount_type'] == 1)
                      $query1 = "select count(*) as Research_ID from reg_cors,user_cors where user_cors.cors_ID=reg_cors.no and   Supervisor=3";
                    else
                      $query1 = "select count(*) as Research_ID from reg_cors,user_cors where user_cors.cors_ID=reg_cors.no AND (user_ID = '$_SESSION[user_ID]' OR user_ID IS NULL)  and  Supervisor=3";
                    $result1 = mysqli_query($conn, $query1);
                    while ($row1 = mysqli_fetch_array($result1)) {
                      echo $row1['Research_ID'];
                    }
                    ?></span></font>
              </a></li>
            <li dir="rtl" align="right"> <a href="new_research.php?ID=4">
                <font face="Droid Arabic Kufi" color="#ffffff" style="font-size: 9pt"><i class="fa fa-phone"></i>&nbsp;&nbsp;لم يتم الرد علي الاتصال<span class="label    bg-red pull-left">
                    <?php
                    if ($_SESSION['acount_type'] == 1)
                      $query1 = "select count(*) as Research_ID from reg_cors,user_cors where user_cors.cors_ID=reg_cors.no and   Supervisor=4";
                    else
                      $query1 = "select count(*) as Research_ID from reg_cors,user_cors where user_cors.cors_ID=reg_cors.no AND (user_ID = '$_SESSION[user_ID]' OR user_ID IS NULL)  and  Supervisor=4";
                    $result1 = mysqli_query($conn, $query1);
                    while ($row1 = mysqli_fetch_array($result1)) {
                      echo $row1['Research_ID'];
                    }
                    ?></span></font>
              </a></li>





            <li dir="rtl" align="right"> <a href="new_research.php?ID=5">
                <font face="Droid Arabic Kufi" color="#ffffff" style="font-size: 9pt"><i class="fa fa-ban"></i>&nbsp;&nbsp;الجوال مغلق<span class="label    bg-Maroon pull-left">
                    <?php
                    if ($_SESSION['acount_type'] == 1)
                      $query1 = "select count(*) as Research_ID from reg_cors,user_cors where user_cors.cors_ID=reg_cors.no and   Supervisor=5";
                    else
                      $query1 = "select count(*) as Research_ID from reg_cors,user_cors where user_cors.cors_ID=reg_cors.no AND (user_ID = '$_SESSION[user_ID]' OR user_ID IS NULL)  and  Supervisor=5";
                    $result1 = mysqli_query($conn, $query1);
                    while ($row1 = mysqli_fetch_array($result1)) {
                      echo $row1['Research_ID'];
                    }
                    ?></span></font>
              </a></li>


            <li dir="rtl" align="right"> <a href="new_research.php?ID=7">
                <font face="Droid Arabic Kufi" color="#ffffff" style="font-size: 9pt"><i class="fa fa-user"></i>&nbsp;&nbsp;متردد بالتسجيل<span class="label    bg-green pull-left">
                    <?php
                    if ($_SESSION['acount_type'] == 1)
                      $query1 = "select count(*) as Research_ID from reg_cors,user_cors where user_cors.cors_ID=reg_cors.no and   Supervisor=7";
                    else
                      $query1 = "select count(*) as Research_ID from reg_cors,user_cors where user_cors.cors_ID=reg_cors.no AND (user_ID = '$_SESSION[user_ID]' OR user_ID IS NULL)  and  Supervisor=7";
                    $result1 = mysqli_query($conn, $query1);
                    while ($row1 = mysqli_fetch_array($result1)) {
                      echo $row1['Research_ID'];
                    }
                    ?></span></font>
              </a></li>


            <li dir="rtl" align="right"> <a href="new_research.php?ID=8">
                <font face="Droid Arabic Kufi" color="#ffffff" style="font-size: 9pt"><i class="fa fa-inbox"></i>&nbsp;&nbsp;ارسلت للصندوق<span class="label    bg-red pull-left">
                    <?php
                    if ($_SESSION['acount_type'] == 1)
                      $query1 = "select count(*) as Research_ID from reg_cors,user_cors where user_cors.cors_ID=reg_cors.no and   Supervisor=8";
                    else
                      $query1 = "select count(*) as Research_ID from reg_cors,user_cors where user_cors.cors_ID=reg_cors.no AND (user_ID = '$_SESSION[user_ID]' OR user_ID IS NULL)  and  Supervisor=8";
                    $result1 = mysqli_query($conn, $query1);
                    while ($row1 = mysqli_fetch_array($result1)) {
                      echo $row1['Research_ID'];
                    }
                    ?></span></font>
              </a></li>






            <li dir="rtl" align="right"> <a href="new_research2.php?ID=6">
                <font face="Droid Arabic Kufi" color="#ffffff" style="font-size: 9pt"><i class="fa fa-money"></i>&nbsp;&nbsp;المسددين رسوم التدريب<span class="label    bg-red pull-left">
                    <?php
                    if ($_SESSION['acount_type'] == 1)
                      $query1 = "select count(*) as Research_ID from reg_cors,user_cors where user_cors.cors_ID=reg_cors.no and   Supervisor=6";
                    else
                      $query1 = "select count(*) as Research_ID from reg_cors,user_cors where user_cors.cors_ID=reg_cors.no AND (user_ID = '$_SESSION[user_ID]' OR user_ID IS NULL)  and  Supervisor=6";
                    $result1 = mysqli_query($conn, $query1);
                    while ($row1 = mysqli_fetch_array($result1)) {
                      echo $row1['Research_ID'];
                    }
                    ?></span></font>
              </a></li>

          </ul>
        </li>



      <?php } elseif ($_SESSION['acount_type'] == 3) { ?>

        <li class="treeview">
          <a href="#">
            <i class="fa fa-users fa-2x"></i>
            <span>&nbsp;&nbsp;المسجلين بالدورات التدريبية</span>
            <i class="fa fa-angle-left pull-left"></i>
          </a>
          <ul class="treeview-menu">
            <li dir="rtl" align="right"> <a href="reg.php?ID_user=<?php echo $ID_user; ?>#top">
                <font face="Droid Arabic Kufi" color="#ffffff" style="font-size: 9pt"><i class="fa fa-check-square text-red"></i>&nbsp;&nbsp; المسجلين بالدورات التدريبية</font>
              </a></li>
          </ul>
        </li>

        <li class="treeview">
          <a href="#">
            <i class="fa fa-cog fa-2x"></i>
            <span>&nbsp;&nbsp;إدارة المسجلين CRM</span>
            <i class="fa fa-angle-left pull-left"></i>
          </a>
          <ul class="treeview-menu">

            <li dir="rtl" align="right"> <a href="research.php?ID_user=<?php echo $ID_user; ?>#top">
                <font face="Droid Arabic Kufi" color="#ffffff" style="font-size: 9pt"><i class="fa fa-check-square text-red"></i>&nbsp;&nbsp; توزيع الحالات<span class="label    bg-Teal pull-left">
                    <?php
                    $query1 = "select count(*) as Research_ID from reg_cors1 where ok=0";
                    $result1 = mysqli_query($conn, $query1);
                    while ($row1 = mysqli_fetch_array($result1)) {
                      echo $row1['Research_ID'];
                    }
                    ?></span></font>
              </a></li>





            <li dir="rtl" align="right"> <a href="rep2.php?ID_user=<?php echo $ID_user; ?>#top">
                <font face="Droid Arabic Kufi" color="#ffffff" style="font-size: 9pt"><i class="fa fa-check-square text-red"></i>&nbsp;&nbsp; تقرير بالمسجلين </font>
              </a></li>




            <li dir="rtl" align="right"> <a href="find.php?ID_user=<?php echo $ID_user; ?>#top">
                <font face="Droid Arabic Kufi" color="#ffffff" style="font-size: 9pt"><i class="fa fa-check-square text-red"></i>&nbsp;&nbsp; البحث عن عميل</font>
              </a></li>
            <li dir="rtl" align="right"> <a href="convert.php?ID_user=<?php echo $ID_user; ?>#top">
                <font face="Droid Arabic Kufi" color="#ffffff" style="font-size: 9pt"><i class="fa fa-check-square text-red"></i>&nbsp;&nbsp; تحويل الحالات</font>
              </a></li>

            <li dir="rtl" align="right"> <a href="new_research.php?ID=0">
                <font face="Droid Arabic Kufi" color="#ffffff" style="font-size: 9pt"><i class="fa fa-circle"></i>&nbsp;&nbsp;الحالات الجديدة<span class="label    bg-Teal pull-left">
                    <?php
                    if ($_SESSION['acount_type'] == 1)
                      $query1 = "select count(*) as Research_ID from reg_cors,user_cors where user_cors.cors_ID=reg_cors.no and   Supervisor=0";
                    else
                      $query1 = "select count(*) as Research_ID from reg_cors,user_cors where user_cors.cors_ID=reg_cors.no AND (user_ID = '$_SESSION[user_ID]' OR user_ID IS NULL)  and  Supervisor=0";
                    $result1 = mysqli_query($conn, $query1);
                    while ($row1 = mysqli_fetch_array($result1)) {
                      echo $row1['Research_ID'];
                    }
                    ?></span></font>
              </a></li>


            <li dir="rtl" align="right"> <a href="new_research.php?ID=1">
                <font face="Droid Arabic Kufi" color="#ffffff" style="font-size: 9pt"><i class="fa fa-thumbs-up"></i>&nbsp;&nbsp;مهتم ويرغب بالتسجيل<span class="label    bg-green pull-left">
                    <?php
                    if ($_SESSION['acount_type'] == 1)
                      $query1 = "select count(*) as Research_ID from reg_cors,user_cors where user_cors.cors_ID=reg_cors.no and   Supervisor=1";
                    else
                      $query1 = "select count(*) as Research_ID from reg_cors,user_cors where user_cors.cors_ID=reg_cors.no AND (user_ID = '$_SESSION[user_ID]' OR user_ID IS NULL)  and  Supervisor=1";
                    $result1 = mysqli_query($conn, $query1);
                    while ($row1 = mysqli_fetch_array($result1)) {
                      echo $row1['Research_ID'];
                    }
                    ?></span></font>
              </a></li>
            <li dir="rtl" align="right"> <a href="new_research.php?ID=2">
                <font face="Droid Arabic Kufi" color="#ffffff" style="font-size: 9pt"><i class="fa fa-thumbs-down"></i>&nbsp;&nbsp;مهتم ولا يرغب بالتسجيل<span class="label    bg-red pull-left">
                    <?php
                    if ($_SESSION['acount_type'] == 1)
                      $query1 = "select count(*) as Research_ID from reg_cors,user_cors where user_cors.cors_ID=reg_cors.no and   Supervisor=2";
                    else
                      $query1 = "select count(*) as Research_ID from reg_cors,user_cors where user_cors.cors_ID=reg_cors.no AND (user_ID = '$_SESSION[user_ID]' OR user_ID IS NULL)  and  Supervisor=2";
                    $result1 = mysqli_query($conn, $query1);
                    while ($row1 = mysqli_fetch_array($result1)) {
                      echo $row1['Research_ID'];
                    }
                    ?></span></font>
              </a></li>
            <li dir="rtl" align="right"> <a href="new_research.php?ID=3">
                <font face="Droid Arabic Kufi" color="#ffffff" style="font-size: 9pt"><i class="fa fa-times"></i>&nbsp;&nbsp;غير مهتم<span class="label    bg-blue pull-left">
                    <?php
                    if ($_SESSION['acount_type'] == 1)
                      $query1 = "select count(*) as Research_ID from reg_cors,user_cors where user_cors.cors_ID=reg_cors.no and   Supervisor=3";
                    else
                      $query1 = "select count(*) as Research_ID from reg_cors,user_cors where user_cors.cors_ID=reg_cors.no AND (user_ID = '$_SESSION[user_ID]' OR user_ID IS NULL)  and  Supervisor=3";
                    $result1 = mysqli_query($conn, $query1);
                    while ($row1 = mysqli_fetch_array($result1)) {
                      echo $row1['Research_ID'];
                    }
                    ?></span></font>
              </a></li>
            <li dir="rtl" align="right"> <a href="new_research.php?ID=4">
                <font face="Droid Arabic Kufi" color="#ffffff" style="font-size: 9pt"><i class="fa fa-phone"></i>&nbsp;&nbsp;لم يتم الرد علي الاتصال<span class="label    bg-red pull-left">
                    <?php
                    if ($_SESSION['acount_type'] == 1)
                      $query1 = "select count(*) as Research_ID from reg_cors,user_cors where user_cors.cors_ID=reg_cors.no and   Supervisor=4";
                    else
                      $query1 = "select count(*) as Research_ID from reg_cors,user_cors where user_cors.cors_ID=reg_cors.no AND (user_ID = '$_SESSION[user_ID]' OR user_ID IS NULL)  and  Supervisor=4";
                    $result1 = mysqli_query($conn, $query1);
                    while ($row1 = mysqli_fetch_array($result1)) {
                      echo $row1['Research_ID'];
                    }
                    ?></span></font>
              </a></li>





            <li dir="rtl" align="right"> <a href="new_research.php?ID=5">
                <font face="Droid Arabic Kufi" color="#ffffff" style="font-size: 9pt"><i class="fa fa-ban"></i>&nbsp;&nbsp;الجوال مغلق<span class="label    bg-Maroon pull-left">
                    <?php
                    if ($_SESSION['acount_type'] == 1)
                      $query1 = "select count(*) as Research_ID from reg_cors,user_cors where user_cors.cors_ID=reg_cors.no and   Supervisor=5";
                    else
                      $query1 = "select count(*) as Research_ID from reg_cors,user_cors where user_cors.cors_ID=reg_cors.no AND (user_ID = '$_SESSION[user_ID]' OR user_ID IS NULL)  and  Supervisor=5";
                    $result1 = mysqli_query($conn, $query1);
                    while ($row1 = mysqli_fetch_array($result1)) {
                      echo $row1['Research_ID'];
                    }
                    ?></span></font>
              </a></li>


            <li dir="rtl" align="right"> <a href="new_research.php?ID=7">
                <font face="Droid Arabic Kufi" color="#ffffff" style="font-size: 9pt"><i class="fa fa-user"></i>&nbsp;&nbsp;متردد بالتسجيل<span class="label    bg-green pull-left">
                    <?php
                    if ($_SESSION['acount_type'] == 1)
                      $query1 = "select count(*) as Research_ID from reg_cors,user_cors where user_cors.cors_ID=reg_cors.no and   Supervisor=7";
                    else
                      $query1 = "select count(*) as Research_ID from reg_cors,user_cors where user_cors.cors_ID=reg_cors.no AND (user_ID = '$_SESSION[user_ID]' OR user_ID IS NULL)  and  Supervisor=7";
                    $result1 = mysqli_query($conn, $query1);
                    while ($row1 = mysqli_fetch_array($result1)) {
                      echo $row1['Research_ID'];
                    }
                    ?></span></font>
              </a></li>


            <li dir="rtl" align="right"> <a href="new_research.php?ID=8">
                <font face="Droid Arabic Kufi" color="#ffffff" style="font-size: 9pt"><i class="fa fa-inbox"></i>&nbsp;&nbsp;ارسلت للصندوق<span class="label    bg-red pull-left">
                    <?php
                    if ($_SESSION['acount_type'] == 1)
                      $query1 = "select count(*) as Research_ID from reg_cors,user_cors where user_cors.cors_ID=reg_cors.no and   Supervisor=8";
                    else
                      $query1 = "select count(*) as Research_ID from reg_cors,user_cors where user_cors.cors_ID=reg_cors.no AND (user_ID = '$_SESSION[user_ID]' OR user_ID IS NULL)  and  Supervisor=8";
                    $result1 = mysqli_query($conn, $query1);
                    while ($row1 = mysqli_fetch_array($result1)) {
                      echo $row1['Research_ID'];
                    }
                    ?></span></font>
              </a></li>






            <li dir="rtl" align="right"> <a href="new_research2.php?ID=6">
                <font face="Droid Arabic Kufi" color="#ffffff" style="font-size: 9pt"><i class="fa fa-money"></i>&nbsp;&nbsp;المسددين رسوم التدريب<span class="label    bg-red pull-left">
                    <?php
                    if ($_SESSION['acount_type'] == 1)
                      $query1 = "select count(*) as Research_ID from reg_cors,user_cors where user_cors.cors_ID=reg_cors.no and   Supervisor=6";
                    else
                      $query1 = "select count(*) as Research_ID from reg_cors,user_cors where user_cors.cors_ID=reg_cors.no AND (user_ID = '$_SESSION[user_ID]' OR user_ID IS NULL)  and  Supervisor=6";
                    $result1 = mysqli_query($conn, $query1);
                    while ($row1 = mysqli_fetch_array($result1)) {
                      echo $row1['Research_ID'];
                    }
                    ?></span></font>
              </a></li>

          </ul>
        </li>






      <?php } elseif ($_SESSION['acount_type'] == 4) { ?>

      <?php } elseif ($_SESSION['acount_type'] == 5) { ?>

      <?php } ?>









    </ul>













  </section>


  <!-- /.sidebar -->
</aside>