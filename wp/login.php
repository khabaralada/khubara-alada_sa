<?php
error_reporting(0);
include('session.php');
include('font.php');
include("../config.php");



$query9 = "select * from web_settings";
$result9 = mysqli_query($conn, $query9);
while ($row9 = mysqli_fetch_array($result9)) {
  $site_name = $row9['site_name'];
  $site_name_en = $row9['site_name_en'];
  $site_mobile = $row9['site_mobile'];
  $site_email = $row9['site_email'];
  $site_address = $row9['site_address'];
  $site_address = $row9['site_address_en'];
  $site_url = $row9['site_url'];
  $secretKey = $row9['secretKey'];
  $sitKey = $row9['sitKey'];
  $site_map = $row9['site_map'];
}


?>
<!DOCTYPE html>
<html>

<head>
  <meta charset="UTF-8">
  <title>ادارة المحتوي - <?php echo $site_name; ?></title>
  <meta http-equiv="content-type" content="text/html; charset=utf-8" />
  <link rel="shortcut icon" href="favicon.ico" />
  <script type="text/javascript">
    function framePrint(whichFrame) {
      parent[whichFrame].focus();
      parent[whichFrame].print();
    }
  </script>

  <link href="https://fonts.googleapis.com/css?family=Amiri|Katibeh|Lateef|Scheherazade" rel="stylesheet">
  <link href='https://fonts.googleapis.com/css?family=Droid%20Arabic%20Kufi' rel='stylesheet' type='text/css'>


  <script type="text/javascript" src="jquery.js"></script>



</head>

<body class="skin-blue">
  <div class="wrapper">
    <?php include("header.php"); ?>
    <?php include("sidebar.php"); ?>

    <div class="content-wrapper">
      <section class="content-header" dir=rtl>
        <h1><small>
            الإحصائيات CRM
          </small></h1>
      </section>

      <section class="content" dir=rtl>
        <div class="box box-info">
          <div class="box-body">


            <div class="row">


              <div class="col-lg-3 col- lg-3">
                <div class="small-box bg-aqua">
                  <div class="inner">
                    <h3>
                      <?php
                      if ($_SESSION['acount_type'] == 1)
                        $query = "select count(*) as co1 from reg_cors,user_cors where user_cors.cors_ID=reg_cors.no   and Supervisor=0";
                      elseif ($_SESSION['acount_type'] == 2)
                        $query = "select count(*) as co1 from reg_cors,user_cors where user_cors.cors_ID=reg_cors.no AND (user_ID = '$_SESSION[user_ID]' OR user_ID IS NULL) and Supervisor=0";
                      elseif ($_SESSION['acount_type'] == 3)
                        $query = "select count(*) as co1 from reg_cors,user_cors,user where user_cors.cors_ID=reg_cors.no and  Supervisor=0 and  user_crm.ID=user_cors.user_ID and  Branches='$_SESSION[Branches]'  ";




                      $result = mysqli_query($conn, $query);
                      while ($row = mysqli_fetch_array($result)) {
                        echo $row['co1'];
                      }
                      ?>
                    </h3>

                    حالات التسجيل

                  </div>
                  <div class="icon">
                    <i class="fa fa-circle "></i>
                  </div>
                  <a href="rep1.php?ID=0" class="small-box-footer"><i class="fa fa-arrow-circle-left"></i>
                    عرض التفاصيل
                  </a>
                </div>
              </div>

              <div class="col-lg-3 col- lg-3">
                <div class="small-box bg-aqua">
                  <div class="inner">
                    <h3>
                      <?php
                      if ($_SESSION['acount_type'] == 1)
                        $query = "select count(*) as co1 from reg_cors,user_cors where user_cors.cors_ID=reg_cors.no   and Supervisor=0 and added_new =1";
                      elseif ($_SESSION['acount_type'] == 2)
                        $query = "select count(*) as co1 from reg_cors,user_cors where user_cors.cors_ID=reg_cors.no and Supervisor=0 and added_new =1";
                      elseif ($_SESSION['acount_type'] == 3)
                        $query = "select count(*) as co1 from reg_cors,user_cors,user where user_cors.cors_ID=reg_cors.no and  Supervisor=0 and  user_crm.ID=user_cors.user_ID and  Branches='$_SESSION[Branches]' and added_new =1 ";




                      $result = mysqli_query($conn, $query);
                      while ($row = mysqli_fetch_array($result)) {
                        echo $row['co1'];
                      }
                      ?>
                    </h3>

                    حالات التسجيل الجديده

                  </div>
                  <div class="icon">
                    <i class="fa fa-circle "></i>
                  </div>
                  <a href="rep_new.php?ID=0" class="small-box-footer"><i class="fa fa-arrow-circle-left"></i>
                    عرض التفاصيل
                  </a>
                </div>
              </div>



              <div class="col-lg-3 col- lg-3">
                <div class="small-box bg-yellow">
                  <div class="inner">
                    <h3>
                      <?php
                      if ($_SESSION['acount_type'] == 1)
                        $query = "select count(*) as co1 from reg_cors,user_cors where user_cors.cors_ID=reg_cors.no   and Supervisor=1";
                      elseif ($_SESSION['acount_type'] == 2)
                        $query = "select count(*) as co1 from reg_cors,user_cors where user_cors.cors_ID=reg_cors.no AND (user_ID = '$_SESSION[user_ID]' OR user_ID IS NULL) and Supervisor=1";
                      elseif ($_SESSION['acount_type'] == 3)
                        $query = "select count(*) as co1 from reg_cors,user_cors,user where user_cors.cors_ID=reg_cors.no and  Supervisor=1 and  user_crm.ID=user_cors.user_ID and  Branches='$_SESSION[Branches]'  ";


                      $result = mysqli_query($conn, $query);
                      while ($row = mysqli_fetch_array($result)) {
                        echo $row['co1'];
                      }
                      ?>
                    </h3>

                    مهتم ويرغب بالتسجيل
                  </div>
                  <div class="icon">
                    <i class="fa fa-thumbs-up"></i>
                  </div>
                  <a href="rep1.php?ID=1" class="small-box-footer"><i class="fa fa-arrow-circle-left"></i>
                    عرض التفاصيل
                  </a>
                </div>
              </div>

              <div class="col-lg-3 col- lg-3">
                <div class="small-box bg-blue">
                  <div class="inner">
                    <h3>
                      <?php
                      if ($_SESSION['acount_type'] == 1)
                        $query = "select count(*) as co1 from reg_cors,user_cors where user_cors.cors_ID=reg_cors.no   and Supervisor=2";
                      elseif ($_SESSION['acount_type'] == 2)
                        $query = "select count(*) as co1 from reg_cors,user_cors where user_cors.cors_ID=reg_cors.no AND (user_ID = '$_SESSION[user_ID]' OR user_ID IS NULL) and Supervisor=2";
                      elseif ($_SESSION['acount_type'] == 3)
                        $query = "select count(*) as co1 from reg_cors,user_cors,user where user_cors.cors_ID=reg_cors.no and  Supervisor=2 and  user_crm.ID=user_cors.user_ID and  Branches='$_SESSION[Branches]'  ";

                      $result = mysqli_query($conn, $query);
                      while ($row = mysqli_fetch_array($result)) {
                        echo $row['co1'];
                      }
                      ?>
                    </h3>

                    مهتم ولا يرغب بالتسجيل
                  </div>
                  <div class="icon">
                    <i class="fa  fa-thumbs-down"></i>
                  </div>
                  <a href="rep1.php?ID=2" class="small-box-footer"><i class="fa fa-arrow-circle-left"></i>
                    عرض التفاصيل
                  </a>
                </div>
              </div>



              <div class="col-lg-3 col- lg-3">
                <div class="small-box bg-Orange">
                  <div class="inner">
                    <h3>
                      <?php
                      if ($_SESSION['acount_type'] == 1)
                        $query = "select count(*) as co1 from reg_cors,user_cors where user_cors.cors_ID=reg_cors.no   and Supervisor=3";
                      elseif ($_SESSION['acount_type'] == 2)
                        $query = "select count(*) as co1 from reg_cors,user_cors where user_cors.cors_ID=reg_cors.no AND (user_ID = '$_SESSION[user_ID]' OR user_ID IS NULL) and Supervisor=3";
                      elseif ($_SESSION['acount_type'] == 3)
                        $query = "select count(*) as co1 from reg_cors,user_cors,user where user_cors.cors_ID=reg_cors.no and  Supervisor=3 and  user_crm.ID=user_cors.user_ID and  Branches='$_SESSION[Branches]'  ";

                      $result = mysqli_query($conn, $query);
                      while ($row = mysqli_fetch_array($result)) {
                        echo $row['co1'];
                      }
                      ?>
                    </h3>

                    غير مهتم
                  </div>
                  <div class="icon">
                    <i class="fa   fa-times"></i>
                  </div>
                  <a href="rep1.php?ID=3" class="small-box-footer"><i class="fa fa-arrow-circle-left"></i>
                    عرض التفاصيل
                  </a>
                </div>
              </div>


              <div class="col-lg-3 col- lg-3">
                <div class="small-box bg-Maroon">
                  <div class="inner">
                    <h3>
                      <?php
                      if ($_SESSION['acount_type'] == 1)
                        $query = "select count(*) as co1 from reg_cors,user_cors where user_cors.cors_ID=reg_cors.no   and Supervisor=4";
                      elseif ($_SESSION['acount_type'] == 2)
                        $query = "select count(*) as co1 from reg_cors,user_cors where user_cors.cors_ID=reg_cors.no AND (user_ID = '$_SESSION[user_ID]' OR user_ID IS NULL) and Supervisor=4";
                      elseif ($_SESSION['acount_type'] == 3)
                        $query = "select count(*) as co1 from reg_cors,user_cors,user where user_cors.cors_ID=reg_cors.no and  Supervisor=4 and  user_crm.ID=user_cors.user_ID and  Branches='$_SESSION[Branches]'  ";

                      $result = mysqli_query($conn, $query);
                      while ($row = mysqli_fetch_array($result)) {
                        echo $row['co1'];
                      }
                      ?>
                    </h3>

                    لم يتم الرد علي الاتصال
                  </div>
                  <div class="icon">
                    <i class="fa     fa-phone"></i>
                  </div>
                  <a href="rep1.php?ID=4" class="small-box-footer"><i class="fa fa-arrow-circle-left"></i>
                    عرض التفاصيل
                  </a>
                </div>
              </div>


              <div class="col-lg-3 col- lg-3">
                <div class="small-box bg-Teal">
                  <div class="inner">
                    <h3>
                      <?php
                      if ($_SESSION['acount_type'] == 1)
                        $query = "select count(*) as co1 from reg_cors,user_cors where user_cors.cors_ID=reg_cors.no   and Supervisor=5";
                      elseif ($_SESSION['acount_type'] == 2)
                        $query = "select count(*) as co1 from reg_cors,user_cors where user_cors.cors_ID=reg_cors.no AND (user_ID = '$_SESSION[user_ID]' OR user_ID IS NULL) and Supervisor=5";
                      elseif ($_SESSION['acount_type'] == 3)
                        $query = "select count(*) as co1 from reg_cors,user_cors,user where user_cors.cors_ID=reg_cors.no and  Supervisor=5 and  user_crm.ID=user_cors.user_ID and  Branches='$_SESSION[Branches]'  ";

                      $result = mysqli_query($conn, $query);
                      while ($row = mysqli_fetch_array($result)) {
                        echo $row['co1'];
                      }
                      ?>
                    </h3>

                    الجوال مغلق
                  </div>
                  <div class="icon">
                    <i class="fa fa-ban"></i>
                  </div>
                  <a href="rep1.php?ID=5" class="small-box-footer"><i class="fa fa-arrow-circle-left"></i>
                    عرض التفاصيل
                  </a>
                </div>
              </div>



              <div class="col-lg-3 col- lg-3">
                <div class="small-box bg-Danger">
                  <div class="inner">
                    <h3>
                      <?php
                      if ($_SESSION['acount_type'] == 1)
                        $query = "select count(*) as co1 from reg_cors,user_cors where user_cors.cors_ID=reg_cors.no  and Supervisor=6";
                      elseif ($_SESSION['acount_type'] == 2)
                        $query = "select count(*) as co1 from reg_cors,user_cors where user_cors.cors_ID=reg_cors.no AND (user_ID = '$_SESSION[user_ID]' OR user_ID IS NULL) and Supervisor=6";
                      elseif ($_SESSION['acount_type'] == 3)
                        $query = "select count(*) as co1 from reg_cors,user_cors,user where user_cors.cors_ID=reg_cors.no and  Supervisor=6 and  user_crm.ID=user_cors.user_ID and  Branches='$_SESSION[Branches]'  ";

                      $result = mysqli_query($conn, $query);
                      while ($row = mysqli_fetch_array($result)) {
                        echo $row['co1'];
                      }
                      ?>
                    </h3>
                    عدد المؤكد سددهم


                  </div>
                  <div class="icon">
                    <i class="fa  fa-graduation-cap"></i>
                  </div>
                  <a href="new_research2.php?ID=6" class="small-box-footer"><i class="fa fa-arrow-circle-left"></i>
                    عرض التفاصيل
                  </a>
                </div>
              </div>



              <div class="col-lg-3 col- lg-3">
                <div class="small-box bg-green">
                  <div class="inner">
                    <h3>
                      <?php
                      if ($_SESSION['acount_type'] == 1)
                        $query = "select count(*) as co1 from reg_cors,user_cors where user_cors.cors_ID=reg_cors.no   and Supervisor=7";
                      elseif ($_SESSION['acount_type'] == 2)
                        $query = "select count(*) as co1 from reg_cors,user_cors where user_cors.cors_ID=reg_cors.no AND (user_ID = '$_SESSION[user_ID]' OR user_ID IS NULL) and Supervisor=7";
                      elseif ($_SESSION['acount_type'] == 3)
                        $query = "select count(*) as co1 from reg_cors,user_cors,user where user_cors.cors_ID=reg_cors.no and  Supervisor=7 and  user_crm.ID=user_cors.user_ID and  Branches='$_SESSION[Branches]'  ";

                      $result = mysqli_query($conn, $query);
                      while ($row = mysqli_fetch_array($result)) {
                        echo $row['co1'];
                      }
                      ?>
                    </h3>

                    متردد للتسجيل
                  </div>
                  <div class="icon">
                    <i class="fa     fa-user"></i>
                  </div>
                  <a href="rep1.php?ID=7" class="small-box-footer"><i class="fa fa-arrow-circle-left"></i>
                    عرض التفاصيل
                  </a>
                </div>
              </div>

              <div class="col-lg-3 col- lg-3">
                <div class="small-box bg-Maroon">
                  <div class="inner">
                    <h3>
                      <?php
                      if ($_SESSION['acount_type'] == 1)
                        $query = "select count(*) as co1 from reg_cors,user_cors where user_cors.cors_ID=reg_cors.no   and Supervisor=8";
                      elseif ($_SESSION['acount_type'] == 2)
                        $query = "select count(*) as co1 from reg_cors,user_cors where user_cors.cors_ID=reg_cors.no AND (user_ID = '$_SESSION[user_ID]' OR user_ID IS NULL) and Supervisor=8";
                      elseif ($_SESSION['acount_type'] == 3)
                        $query = "select count(*) as co1 from reg_cors,user_cors,user where user_cors.cors_ID=reg_cors.no and  Supervisor=8 and  user_crm.ID=user_cors.user_ID and  Branches='$_SESSION[Branches]'  ";

                      $result = mysqli_query($conn, $query);
                      while ($row = mysqli_fetch_array($result)) {
                        echo $row['co1'];
                      }
                      ?>
                    </h3>
                    ارسلت للصندوق
                  </div>
                  <div class="icon">
                    <i class="fa    fa-inbox"></i>
                  </div>
                  <a href="rep1.php?ID=8" class="small-box-footer"><i class="fa fa-arrow-circle-left"></i>
                    عرض التفاصيل
                  </a>
                </div>




              </div>



              <?php
              if ($_SESSION['acount_type'] == 1 or $_SESSION['acount_type'] == 3) { ?>

                <div class="col-lg-3 col- lg-3">
                  <div class="small-box bg-yellow">
                    <div class="inner">
                      <h3>
                        <?php
                        $co1 = 0;
                        if ($_SESSION['acount_type'] == 1)
                          $query = "select sum(amount) as co1 from reg_cors,user_cors where user_cors.cors_ID=reg_cors.no   and Supervisor=6 ";
                        elseif ($_SESSION['acount_type'] == 2)
                          $query = "select count(*) as co1 from reg_cors,user_cors where user_cors.cors_ID=reg_cors.no AND (user_ID = '$_SESSION[user_ID]' OR user_ID IS NULL) and Supervisor=6  ";
                        elseif ($_SESSION['acount_type'] == 3)
                          $query = "select sum(amount) as co1 from reg_cors,user_cors,user where user_cors.cors_ID=reg_cors.no and  user_crm.ID=user_cors.user_ID and Branches='$_SESSION[Branches]' and Supervisor=6  ";


                        $result = mysqli_query($conn, $query);
                        while ($row = mysqli_fetch_array($result)) {
                          $co1 = $row['co1'];
                        }
                        if ($co1 <= 0) echo 0;
                        else echo $co1;
                        ?> SR
                      </h3>
                      اجمالي المبيعات


                    </div>
                    <div class="icon">
                      <i class="fa  fa-money "></i>
                    </div>
                    <a href="rep1.php?ID=6" class="small-box-footer"><i class="fa fa-arrow-circle-left"></i>
                      عرض التفاصيل
                    </a>
                  </div>
                </div>
              <?php } ?>

            </div>


            <?php if ($_SESSION['acount_type'] == 1 or $_SESSION['acount_type'] == 3) { ?>
              <div class="row">

                <div class="col-lg-3 col- lg-3">
                  <div class="small-box bg-blue">
                    <div class="inner">
                      <h3>
                        <?php
                        $co1 = 0;
                        if ($_SESSION['acount_type'] == 1)
                          $query = "select sum(amount) as co1 from reg_cors,user_cors where user_cors.cors_ID=reg_cors.no   and Supervisor=6   and com=1";
                        elseif ($_SESSION['acount_type'] == 2)
                          $query = "select count(*) as co1 from reg_cors,user_cors where user_cors.cors_ID=reg_cors.no AND (user_ID = '$_SESSION[user_ID]' OR user_ID IS NULL) and Supervisor=6    and com=1";
                        elseif ($_SESSION['acount_type'] == 3)
                          $query = "select sum(amount) as co1 from reg_cors,user_cors,user where user_cors.cors_ID=reg_cors.no and  user_crm.ID=user_cors.user_ID and Branches='$_SESSION[Branches]' and Supervisor=6    and com=1 ";


                        $result = mysqli_query($conn, $query);
                        while ($row = mysqli_fetch_array($result)) {
                          $co1 = $row['co1'];
                        }
                        if ($co1 <= 0) echo 0;
                        else echo $co1;
                        ?> SR
                      </h3>
                      مبالغ التسجيل بالفرع


                    </div>
                    <div class="icon">
                      <i class="fa  fa-signal"></i>
                    </div>
                    <a href="rep3.php?ID=6&cash=1&com=1" class="small-box-footer"><i class="fa fa-arrow-circle-left"></i>
                      عرض التفاصيل
                    </a>
                  </div>
                </div>


                <div class="col-lg-3 col- lg-3">
                  <div class="small-box bg-blue">
                    <div class="inner">
                      <h3>
                        <?php
                        $co1 = 0;

                        if ($_SESSION['acount_type'] == 1)
                          $query = "select sum(amount) as co1 from reg_cors,user_cors where user_cors.cors_ID=reg_cors.no   and Supervisor=6   and com=2";
                        elseif ($_SESSION['acount_type'] == 2)
                          $query = "select count(*) as co1 from reg_cors,user_cors where user_cors.cors_ID=reg_cors.no AND (user_ID = '$_SESSION[user_ID]' OR user_ID IS NULL) and Supervisor=6    and com=2";
                        elseif ($_SESSION['acount_type'] == 3)
                          $query = "select sum(amount) as co1 from reg_cors,user_cors,user where user_cors.cors_ID=reg_cors.no and  user_crm.ID=user_cors.user_ID and Branches='$_SESSION[Branches]' and Supervisor=6    and com=2 ";



                        $result = mysqli_query($conn, $query);
                        while ($row = mysqli_fetch_array($result)) {
                          $co1 = $row['co1'];
                        }
                        if ($co1 <= 0) echo 0;
                        else echo $co1;
                        ?> SR
                      </h3>
                      مبالغ تحويل علي الشركة

                    </div>
                    <div class="icon">
                      <i class="fa  fa-signal"></i>
                    </div>
                    <a href="rep3.php?ID=6&cash=1&com=2" class="small-box-footer"><i class="fa fa-arrow-circle-left"></i>
                      عرض التفاصيل
                    </a>
                  </div>
                </div>






                <div class="col-lg-3 col- lg-3">
                  <div class="small-box bg-Danger">
                    <div class="inner">
                      <h3>
                        <?php
                        $co1 = 0;

                        if ($_SESSION['acount_type'] == 1)
                          $query = "select sum(amount) as co1 from reg_cors,user_cors where user_cors.cors_ID=reg_cors.no   and Supervisor=6   and com=3";
                        elseif ($_SESSION['acount_type'] == 2)
                          $query = "select count(*) as co1 from reg_cors,user_cors where user_cors.cors_ID=reg_cors.no AND (user_ID = '$_SESSION[user_ID]' OR user_ID IS NULL) and Supervisor=6    and com=3";
                        elseif ($_SESSION['acount_type'] == 3)
                          $query = "select sum(amount) as co1 from reg_cors,user_cors,user where user_cors.cors_ID=reg_cors.no and  user_crm.ID=user_cors.user_ID and Branches='$_SESSION[Branches]' and Supervisor=6    and com=3 ";



                        $result = mysqli_query($conn, $query);
                        while ($row = mysqli_fetch_array($result)) {
                          $co1 = $row['co1'];
                        }
                        if ($co1 <= 0) echo 0;
                        else echo $co1;
                        ?> SR
                      </h3>
                      مبالغ الدفع الالكتروني

                    </div>
                    <div class="icon">
                      <i class="fa  fa-thumbs-up"></i>
                    </div>
                    <a href="rep3.php?ID=6&cash=2&com=3" class="small-box-footer"><i class="fa fa-arrow-circle-left"></i>
                      عرض التفاصيل
                    </a>
                  </div>
                </div>






              </div>



            <?php  } ?>






          </div>
        </div>
      </section>

      <section class="content" dir=rtl>
        <div class="box box-info">
          <div class="box-body">
            <table border="0" width="100%" cellspacing="0" cellpadding="0" style="border-collapse: collapse">
              <tr>
                <td>نسبة الانجاز اليومي <?php

                                        $query = "select count(*) as co,name,Branches from user_crm,user_login 
where user_crmusername=user_login.username  and date>=CURDATE() and date<=CURDATE() and user_crm.ID='$_SESSION[user_ID]'  
GROUP by user_crm.ID


order by count(*)   DESC   ";



                                        $result = mysqli_query($conn, $query);
                                        $rows = mysqli_num_rows($result);
                                        if ($rows > 0) {

                                          while ($row = mysqli_fetch_array($result)) {



                                            echo $tot = round($row['co'] / 70 * 100);
                                          }
                                        }




                                        ?> %</td>
              </tr>
              <tr>
                <td bgcolor="#F0F0F0">
                  <div>
                    <div class="progress-bar progress-bar-<?php if ($tot >= 100) echo 'info';
                                                          elseif ($tot >= 75) echo 'warning ';
                                                          elseif ($tot >= 50) echo 'info';
                                                          elseif ($tot > 25) echo 'Info';
                                                          else  echo 'danger '; ?> progress-bar-striped" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: <?php echo $tot; ?>%">
                      <?php echo $tot; ?>% <span class="sr-only"></span>
                    </div>
                  </div>
                </td>
              </tr>
            </table>

            <table id='example1' class="table table-bordered table-striped">
              <thead>
                <tr>
                  <th align="right">
                    <p align="center">#
                  </th>
                  <th align="right">
                    <p align="center">اسم المسوق
                  </th>
                  <th align="right">
                    <p align="center">الحالات الجديدة
                  </th>
                  <th align="right">
                    <p align="center">يرغب بالتسجيل
                  </th>
                  <th align="right">
                    <p align="center">لايرغب بالتسجيل
                  </th>
                  <th align="right">
                    <p align="center">غير مهتم
                  </th>
                  <th align="right">
                    <p align="center">لم يتم الرد
                  </th>
                  <th align="right">
                    <p align="center">الجوال مغلق
                  </th>
                  <th align="right">
                    <p align="center">متردد
                  </th>
                  <th align="right">
                    <p align="center">ارسلت للصندوق
                  </th>
                  <th align="right">
                    <p align="center">المسددين
                  </th>

                  <th align="right">
                    <p align="center">المباع
                  </th>

                  <th align="right">
                    <p align="center">مبالغ التسجيل بالفرع
                  </th>
                  <th align="right">
                    <p align="center">مبالغ تحويل علي الشركة
                  </th>
                  <th align="right">
                    <p align="center">مبالغ الدفع الالكتروني
                  </th>



                </tr>
              </thead>
              <tbody>
                <?php
                include("../config.php");

                if ($_SESSION['acount_type'] == 1)
                  $query = "select * from user_crm";
                elseif ($_SESSION['acount_type'] == 2)
                  $query = "select * from user_crm where  ID='$_SESSION[user_ID]'  ";
                elseif ($_SESSION['acount_type'] == 3)
                  $query = "select * from user_crm where  Branches='$_SESSION[Branches]'  ";



                $result = mysqli_query($conn, $query);
                $rows = mysqli_num_rows($result);
                if ($rows > 0) {
                  while ($row = mysqli_fetch_array($result)) {
                ?>
                    <tr>
                      <form method="POST" action="">
                        <td align="center">
                          <p align="center"><?php $c++;
                                            echo $c; ?>
                        </td>
                        <td align="center">
                          <p align="center"><?php echo $row['name']; ?>
                        </td>
                        <td align="center">
                          <p align="center"><?php
                                            $query1 = "select count(*) as Research_ID from reg_cors,user_cors where user_cors.cors_ID=reg_cors.no and user_ID='$row[ID]' and Supervisor=0";
                                            $result1 = mysqli_query($conn, $query1);
                                            while ($row1 = mysqli_fetch_array($result1)) {
                                              echo $row1['Research_ID'];
                                            }
                                            ?>
                        </td>
                        <td align="center">
                          <p align="center"><?php
                                            $query1 = "select count(*) as Research_ID from reg_cors,user_cors where user_cors.cors_ID=reg_cors.no and user_ID='$row[ID]' and Supervisor=1";
                                            $result1 = mysqli_query($conn, $query1);
                                            while ($row1 = mysqli_fetch_array($result1)) {
                                              echo $row1['Research_ID'];
                                            }
                                            ?>
                        </td>

                        <td align="center">
                          <p align="center"><?php
                                            $query1 = "select count(*) as Research_ID from reg_cors,user_cors where user_cors.cors_ID=reg_cors.no and user_ID='$row[ID]' and Supervisor=2";
                                            $result1 = mysqli_query($conn, $query1);
                                            while ($row1 = mysqli_fetch_array($result1)) {
                                              echo $row1['Research_ID'];
                                            }
                                            ?>


                        </td>
                        <td align="center">
                          <p align="center"><?php
                                            $query1 = "select count(*) as Research_ID from reg_cors,user_cors where user_cors.cors_ID=reg_cors.no and user_ID='$row[ID]' and Supervisor=3";
                                            $result1 = mysqli_query($conn, $query1);
                                            while ($row1 = mysqli_fetch_array($result1)) {
                                              echo $row1['Research_ID'];
                                            }
                                            ?>


                        </td>
                        <td align="center">
                          <p align="center"><?php
                                            $query1 = "select count(*) as Research_ID from reg_cors,user_cors where user_cors.cors_ID=reg_cors.no and user_ID='$row[ID]' and Supervisor=4";
                                            $result1 = mysqli_query($conn, $query1);
                                            while ($row1 = mysqli_fetch_array($result1)) {
                                              echo $row1['Research_ID'];
                                            }
                                            ?>


                        </td>
                        <td align="center">
                          <p align="center"><?php
                                            $query1 = "select count(*) as Research_ID from reg_cors,user_cors where user_cors.cors_ID=reg_cors.no and user_ID='$row[ID]' and Supervisor=5";
                                            $result1 = mysqli_query($conn, $query1);
                                            while ($row1 = mysqli_fetch_array($result1)) {
                                              echo $row1['Research_ID'];
                                            }
                                            ?>


                        </td>


                        </td>


                        <td align="center">
                          <p align="center"><?php
                                            $query1 = "select count(*) as Research_ID from reg_cors,user_cors where user_cors.cors_ID=reg_cors.no and user_ID='$row[ID]' and Supervisor=7";
                                            $result1 = mysqli_query($conn, $query1);
                                            while ($row1 = mysqli_fetch_array($result1)) {
                                              echo $row1['Research_ID'];
                                            }
                                            ?>


                        </td>


                        <td align="center">
                          <p align="center"><?php
                                            $query1 = "select count(*) as Research_ID from reg_cors,user_cors where user_cors.cors_ID=reg_cors.no and user_ID='$row[ID]' and Supervisor=8";
                                            $result1 = mysqli_query($conn, $query1);
                                            while ($row1 = mysqli_fetch_array($result1)) {
                                              echo $row1['Research_ID'];
                                            }
                                            ?>


                        </td>

                        <td align="center">
                          <p align="center"> <?php
                                              $query1 = "select count(*) as Research_ID from reg_cors,user_cors where user_cors.cors_ID=reg_cors.no and user_ID='$row[ID]' and Supervisor=6";
                                              $result1 = mysqli_query($conn, $query1);
                                              while ($row1 = mysqli_fetch_array($result1)) {
                                                echo $row1['Research_ID'];
                                              }
                                              ?>


                        </td>



                        <td align="center"><?php
                                            $co1 = 0;
                                            $query1 = "select sum(amount) as co1 from reg_cors,user_cors where user_cors.cors_ID=reg_cors.no and user_ID='$row[ID]' and Supervisor=6";
                                            $result1 = mysqli_query($conn, $query1);
                                            while ($row1 = mysqli_fetch_array($result1)) {
                                              $co1 = $row1['co1'];
                                            }
                                            if ($co1 <= 0) echo 0;
                                            else echo $co1;
                                            ?></td>



                        <td align="center"><?php
                                            $query1 = "select sum(amount) as co1 from reg_cors,user_cors where user_cors.cors_ID=reg_cors.no and user_ID='$row[ID]' and Supervisor=6 and   com=1";
                                            $result1 = mysqli_query($conn, $query1);
                                            while ($row1 = mysqli_fetch_array($result1)) {
                                              echo $co1 = $row1['co1'];
                                            }
                                            ?></td>

                        <td align="center"><?php
                                            $query1 = "select sum(amount) as co1 from reg_cors,user_cors where user_cors.cors_ID=reg_cors.no and user_ID='$row[ID]' and Supervisor=6 and   com=2";
                                            $result1 = mysqli_query($conn, $query1);
                                            while ($row1 = mysqli_fetch_array($result1)) {
                                              echo $co1 = $row1['co1'];
                                            }
                                            ?></td>
                        <td align="center"><?php
                                            $query1 = "select sum(amount) as co1 from reg_cors,user_cors where user_cors.cors_ID=reg_cors.no and user_ID='$row[ID]' and Supervisor=6 and  com=3";
                                            $result1 = mysqli_query($conn, $query1);
                                            while ($row1 = mysqli_fetch_array($result1)) {
                                              echo $co1 = $row1['co1'];
                                            }
                                            ?></td>





                      </form>
                    </tr>



                <?php
                  }
                }
                ?>
              </tbody>

            </table>
          </div>
        </div>
      </section>

    </div><!-- /.content-wrapper -->
    <?php include('footer.php'); ?>
  </div><!-- ./wrapper -->
</body>

</html>