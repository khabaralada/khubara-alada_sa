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
  <title> <?php
          $ss = mysqli_real_escape_string($conn, htmlspecialchars(intval($_GET['ID']), ENT_QUOTES, "utf-8"));
          $cash = mysqli_real_escape_string($conn, htmlspecialchars(intval($_GET['cash']), ENT_QUOTES, "utf-8"));
          $com = mysqli_real_escape_string($conn, htmlspecialchars(intval($_GET['com']), ENT_QUOTES, "utf-8"));

          if ($cash == 1 and $com == 1) echo 'مبالغ الكاش (الصندوق )'; ?>
    <?php if ($cash == 1 and $com == 2) echo 'مبالغ الكاش (شركات)'; ?>
    <?php if ($cash == 2 and $com == 1) echo 'مبالغ الاقساط (الصندوق )'; ?>
    <?php if ($cash == 2 and $com == 2) echo 'مبالغ الاقساط (شركات)'; ?>


  </title>
  <meta http-equiv="content-type" content="text/html; charset=utf-8" />
  <link rel="shortcut icon" href="favicon.ico" />
  <script type="text/javascript">
    function framePrint(whichFrame) {
      parent[whichFrame].focus();
      parent[whichFrame].print();
    }
  </script>





</head>

<body class="skin-blue">
  <div class="wrapper">
    <?php include("header.php"); ?>
    <?php include("sidebar.php"); ?>

    <div class="content-wrapper">

      <section class="content-header" dir=rtl>
        <h1><small>
            <?php
            $ss = mysqli_real_escape_string($conn, htmlspecialchars(intval($_GET['ID']), ENT_QUOTES, "utf-8"));
            $cash = mysqli_real_escape_string($conn, htmlspecialchars(intval($_GET['cash']), ENT_QUOTES, "utf-8"));
            $com = mysqli_real_escape_string($conn, htmlspecialchars(intval($_GET['com']), ENT_QUOTES, "utf-8"));

            if ($cash == 1 and $com == 1) echo 'مبالغ الكاش (الصندوق )'; ?>
            <?php if ($cash == 1 and $com == 2) echo 'مبالغ الكاش (شركات)'; ?>
            <?php if ($cash == 2 and $com == 1) echo 'مبالغ الاقساط (الصندوق )'; ?>
            <?php if ($cash == 2 and $com == 2) echo 'مبالغ الاقساط (شركات)'; ?>


          </small></h1>
      </section>






      <section class="content" dir=rtl>
        <div class="box box-info" style="overflow: auto;">
          <div class="box-body">










            <table id="example1" class="table table-bordered table-striped">
              <thead>
                <tr>


                  <th align="right">
                    <p align="center">#
                  </th>
                  <th align="right">
                    <p align="center">الدورة
                  </th>
                  <th align="right">
                    <p align="center">المدة
                  </th>
                  <th align="right">
                    <p align="center">
                      <font color="#FF0000">مبلغ الدورة</font>
                  </th>
                  <th align="right">
                    <p align="center">المتدرب
                  </th>
                  <th align="right">
                    <p align="center">الجوال
                  </th>
                  <th align="right">&nbsp;</th>
                  <th align="right">
                    <p align="center">الجنسية
                  </th>
                  <th align="right">
                    <p align="center">المؤهل
                  </th>

                  <th align="right">
                    <p align="center">الحالة
                  </th>
                  <th align="right">
                    <p align="center">التاريخ
                  </th>
                  <th align="right">
                    <p align="center">الوقت
                  </th>
                  <th align="right">
                    <p align="center">المسوق
                  </th>

                  <th>
                    <p align="center">الحالة
                  <th>
                    <p align="center">حالة الدفع
                  <th>
                    <p align="center">رقم العملية

                  <th align="right">
                    <p align="center">&nbsp;
                  </th>
                  <th align="right">
                    <p align="center">تحويل
                  </th>



                </tr>
              </thead>
              <tbody>
                <?php
                include("../config.php");
                $ss = mysqli_real_escape_string($conn, htmlspecialchars(intval($_GET['ID']), ENT_QUOTES, "utf-8"));





                if ($_SESSION['acount_type'] == 1)
                  $query = "select * from reg_cors,user_cors,subjects,cors 
where user_cors.cors_ID=reg_cors.no and   cors.cors_ID=subjects.cors_ID and address=cors.ID  and Supervisor='$ss' order by reg_cors.no DESC limit 500";
                elseif ($_SESSION['acount_type'] == 2)
                  $query = "select * from reg_cors,user_cors,subjects,cors 
where user_cors.cors_ID=reg_cors.no AND (user_ID='$_SESSION[user_ID]' OR user_ID IS NULL) and cors.cors_ID=subjects.cors_ID and address=cors.ID  and Supervisor='$ss' order by reg_cors.no DESC limit 500";

                elseif ($_SESSION['acount_type'] == 3)
                  $query = "select * from user_crm,reg_cors,user_cors,subjects,cors
where user_cors.cors_ID=reg_cors.no and  cors.cors_ID=subjects.cors_ID and address=cors.ID  and Supervisor='$ss' and user_crm.ID=user_cors.user_ID and user_crmBranches='$_SESSION[Branches]' order by reg_cors.no DESC limit 500";



                $result = mysqli_query($conn, $query);
                $rows = mysqli_num_rows($result);
                if ($rows > 0) {
                  while ($row = mysqli_fetch_array($result)) {
                ?>
                    <tr>

                      <td align="right">
                        <p align="center"><?php $C++;
                                          echo $C; ?>
                      </td>
                      <td align="right">
                        <p align="center"><?php echo $row['cors_name']; ?>
                      </td>
                      <td align="right">
                        <p align="center"><?php echo $row['contact_hours']; ?>
                      </td>
                      <td align="right">
                        <p align="center">
                          <font color="#FF0000"><?php echo $row['reg_price']; ?></font>
                      </td>
                      <td align="right">
                        <p align="center"><?php echo $row['name']; ?>
                      </td>
                      <td align="right">
                        <p align="center"><a href="tel:<?php echo $row['mobile']; ?>"><?php echo $row['mobile']; ?></a>
                      </td>
                      <td align="right"><a target=_blank href="https://wa.me/966<?php echo $row[mobile]; ?>?text=
 
<?php echo $site_name; ?>%20%0D%0A
 
%20%0D%0A

اسم الدورة%20  :<?php echo nl2br($row[cors_name]); ?>%0D%0A
مرحبا%20  <?php echo nl2br($row[name]); ?>%0D%0A
السلام عليكم ورحمه الله وبركاته%20  %0D%0A
 
 
" data-action="share/whatsapp/share" class="btn btn-Success btn-sm   "><i class="fa fa-whatsapp"></i>
                      </td>
                      <td align="right">
                        <p align="center"><?php echo $row['nat']; ?>
                      </td>
                      <td align="right">
                        <p align="center"><?php echo $row['qualification']; ?>
                      </td>

                      <td align="right">
                        <p align="center">
                          <?php if ($row['Supervisor'] == 0) echo '<font color=#00ffdd><i class="fa fa-circle fa-2x" aria-hidden="true" ></i></font>'; ?>
                          <?php if ($row['Supervisor'] == 1) echo '<font color=green><i class="fa fa-thumbs-up  fa-2x" aria-hidden="true" ></i></font>'; ?>
                          <?php if ($row['Supervisor'] == 2) echo '<font color=red><i class="fa fa-thumbs-down fa-2x" aria-hidden="true" ></i></font>'; ?>
                          <?php if ($row['Supervisor'] == 3) echo '<font color=blue><i class="fa  fa-times fa-2x" aria-hidden="true" ></i></font>'; ?>
                          <?php if ($row['Supervisor'] == 4) echo '<font color=red><i class="fa fa-phone fa-2x" aria-hidden="true" ></i></font>'; ?>
                          <?php if ($row['Supervisor'] == 5) echo '<font color=#8e0000><i class="fa fa-ban fa-2x" aria-hidden="true" ></i></font>'; ?>
                          <?php if ($row['Supervisor'] == 6) echo '<font color=red><i class="fa fa-money fa-2x" aria-hidden="true" ></i></font>'; ?>
                      </td>
                      <?php
                      $now = date('Y-m-d H:i:s');
                      $cdate = $row['date'] . ' ' . $row['time'];
                      $end_date = date("Y-m-d H:i:s", strtotime('+2 days', strtotime($cdate)));
                      if ($end_date >= $now) { ?>

                        <td align="right" bgcolor=#99FF99>
                          <p align="center"><?php echo $row['date']; ?>
                        </td>
                        <td align="right" bgcolor=#99FF99>
                          <p align="center"><?php echo $row['time']; ?>
                        </td>
                      <?php } else { ?>
                        <td align="right" bgcolor=#FF0066>
                          <p align="center"><?php echo $row['date']; ?>
                        </td>
                        <td align="right" bgcolor=#FF0066>
                          <p align="center"><?php echo $row['time']; ?>
                        </td>
                      <?php } ?>
                      <td align="right">
                        <p align="center">
                          <?php
                          $query1 = "select * from user_crm where user_crm.ID='$row[user_ID]' ";
                          $result1 = mysqli_query($conn, $query1);
                          while ($row1 = mysqli_fetch_array($result1)) {
                            echo $row1['name'];
                          }
                          ?>
                      </td>


                      <td align="center">

                        <?php echo $row['message']; ?></td>




                      <td align="center">
                        <?php
                        if ($row['status'] == "failed") echo '<font color="#FF0000">فشلت عملية الدفع</font>';
                        if ($row['status'] == "paid") echo '<font color="green">عملية الدفع مقبولة</font>';  ?>

                      </td>




                      <td align="center">

                        <?php echo $row['payment']; ?></td>


                      <td>
                        <a href="notes.php?no=<?php echo $row['no']; ?>" target=_blank>
                          <i class="fa fa-pencil btn btn-info btn-sm"> <?php
                                                                        $query1 = "select count(*) as co from notes where Research_ID='$row[no]' ";
                                                                        $result1 = mysqli_query($conn, $query1);
                                                                        while ($row1 = mysqli_fetch_array($result1)) {
                                                                          echo $row1['co'];
                                                                        }
                                                                        ?></i></a>

                      </td>
                      <td width=2>
                        <p align="center">
                          <a href="" data-id="<?php echo $row['no']; ?>" data-target="#myModaEdit<?php echo $row['no']; ?>" data-toggle="modal" class="btn btn-Warning  btn-sm   "><i class="fa fa-plus"></i> </a>


                      </td>


                    </tr>
                    <div class="example-modal">
                      <div class="modal" id="myModaEdit<?php echo $row['no']; ?>" role="dialog">
                        <div class="modal-dialog">
                          <div class="modal-content">
                            <form action="" method="post">
                              <div class="modal-header">
                                <b>
                                  <font face="Droid Arabic Kufi" size="5">بيانات المتدرب : <?php echo $row['name']; ?></font>
                                  <font size="5"></font>
                                </b>
                              </div>
                              <div class="modal-body">

                                <input type=text name="id1" size="20" value="<?php echo $row['no']; ?>" required="required" class="form-control">



                                <div class="row">
                                  <div class="form-group col-lg-6">
                                    <label>اسم المتدرب</label> <input name="fullname" size="20" value="<?php echo $row['name']; ?>" class="form-control">
                                  </div>




                                  <div class="form-group col-lg-6">
                                    <label>الهوية الوطنية</label><input name="iqama" size="20" value="<?php echo $row['iqama']; ?>" class="form-control">
                                  </div>

                                  <div class="form-group col-lg-6">
                                    <label>المؤهل</label><input name="qualification" size="20" value="<?php echo $row['qualification']; ?>" class="form-control">
                                  </div>




                                  <div class="form-group col-lg-6">
                                    <label>الجنسية</label> <input name="nat" size="20" value="<?php echo $row['nat']; ?>" class="form-control">
                                  </div>

                                  <div class="form-group col-lg-6">
                                    <label>البريد الالكتروني</label> <input name="email" size="20" value="<?php echo $row['mail']; ?>" class="form-control">
                                  </div>

                                  <div class="form-group col-lg-6">
                                    <label>الجوال</label><input name="phone" size="20" value="<?php echo $row['mobile']; ?>" class="form-control">
                                  </div>

                                  <div class="form-group col-lg-12">
                                    <label>الدورة </label>
                                    <select name="cors" class="form-control" required="">
                                      <option value="<?php echo $row['ID']; ?>"><?php echo $row['cors_name']; ?></option>

                                      <option value="">الدورة التدريبية</option>
                                      <?php
                                      $result1 = mysqli_query($conn, "select* from subjects,cors
 where cors.cors_ID=subjects.cors_ID and  show_reg=1 ");
                                      while ($row1 = mysqli_fetch_array($result1)) {

                                      ?>
                                        <option value="<?php echo $row1['ID']; ?>"><?php echo $row1['cors_name']; ?></option>
                                      <?php } ?>
                                    </select>

                                  </div>
                                  <div class="form-group col-lg-6">
                                    <label>تاريخ بداية الدورة </label> : <br> <?php echo $row['start_date_en']; ?> م - (<?php echo $row['start_date']; ?> هـ )
                                  </div>


                                  <div class="form-group col-lg-6">
                                    <label>تاريخ نهاية الدورة </label> : <br> <?php echo $row['end_date_en']; ?> م - (<?php echo $row['end_date']; ?> هـ )
                                  </div>



                                  <div class="form-group col-lg-6">
                                    <label>تاريخ التسجيل</label> : <br> <?php echo $row['dates']; ?>
                                  </div>
                                  <div class="form-group col-lg-12">
                                    <label>ملاحظات </label> <input name="eqt" size="20" value="<?php echo $row['eqt']; ?>" class="form-control">
                                  </div>

                                  <div class="form-group col-lg-12">
                                    <label>المسوق </label>

                                    <select name="user_cors" class="form-control" required="">
                                      <option value="<?php echo $row[user_ID]; ?>"><?php echo $names; ?></option>

                                      <option></option>
                                      <?php

                                      $result1 = mysqli_query($conn, "select* from user_crm  ");
                                      while ($row1 = mysqli_fetch_array($result1)) {

                                      ?>
                                        <option value="<?php echo $row1['ID']; ?>"><?php echo $row1['name']; ?></option>
                                      <?php } ?>
                                    </select>


                                  </div>




                                </div>
                              </div>
                              <div class="modal-footer">
                                <button type="button" class="btn btn-default pull-left" data-dismiss="modal">الغاء</button>

                                <input type="submit" class="btn btn-success " value="تعديل" name="edit1">
                              </div>
                            </form>
                          </div><!-- /.modal-content -->
                        </div><!-- /.modal-dialog -->
                      </div><!-- /.modal -->
                    </div>
                <?php }
                } ?>
              </tbody>

            </table>الاجمالي : <?php echo $amount; ?>
          </div><!-- /.box-body -->
        </div>
    </div>
  </div>
  </section>


  </div><!-- /.content-wrapper -->
  </div>
  </div>
  </section>


  </div><!-- /.content-wrapper -->
  </div>
  </div>
  </section>


  </div><!-- /.content-wrapper -->
  <?php include('footer.php'); ?>
  </div><!-- ./wrapper -->
</body>

</html>

</div><!-- ./wrapper -->
</body>

</html>
</div><!-- ./wrapper -->
</body>

</html>

<?php
if (isset($_POST['edit1'])) {
  $name = mysqli_real_escape_string($conn, htmlspecialchars($_POST['fullname'], ENT_QUOTES, "utf-8"));
  $phone = mysqli_real_escape_string($conn, htmlspecialchars($_POST['phone'], ENT_QUOTES, "utf-8"));
  $cors = mysqli_real_escape_string($conn, htmlspecialchars($_POST['cors'], ENT_QUOTES, "utf-8"));
  $eqt = mysqli_real_escape_string($conn, htmlspecialchars($_POST['eqt'], ENT_QUOTES, "utf-8"));
  $company = mysqli_real_escape_string($conn, htmlspecialchars($_POST['company'], ENT_QUOTES, "utf-8"));
  $email = mysqli_real_escape_string($conn, htmlspecialchars($_POST['email'], ENT_QUOTES, "utf-8"));
  $iqama = mysqli_real_escape_string($conn, htmlspecialchars($_POST['iqama'], ENT_QUOTES, "utf-8"));
  $nat = mysqli_real_escape_string($conn, htmlspecialchars($_POST['nat'], ENT_QUOTES, "utf-8"));
  $qualification = mysqli_real_escape_string($conn, htmlspecialchars($_POST['qualification'], ENT_QUOTES, "utf-8"));

  $id1 = mysqli_real_escape_string($conn, $_POST['id1']);


  $com = mysqli_real_escape_string($conn, htmlspecialchars($_POST['com'], ENT_QUOTES, "utf-8"));
  $user_cors = mysqli_real_escape_string($conn, htmlspecialchars($_POST['user_cors'], ENT_QUOTES, "utf-8"));


  $sql = "update reg_cors set  name='$name',mobile='$phone',eqt='$eqt',address='$cors',mail='$email',iqama='$iqama',
	    nat='$nat',qualification='$qualification' where no='$id1'";

  if (mysqli_query($conn, $sql)) {
    echo '<script>
function myFunction() {
document.getElementById("snackbar").style.visibility = "hidden";
}
 document.getElementById("snackbar").style.visibility = "visible";
 window.setTimeout("hideMsg()", 2000); </script>';
?>
    <meta http-equiv="refresh" content="2;url=<?php echo ($self); ?>"><?php
                                                                    }

                                                                    $sql = "update user_cors set  user_ID='$user_cors'  where cors_ID='$id1'";
                                                                    if (mysqli_query($conn, $sql)) {
                                                                    }
                                                                  }
                                                                      ?>