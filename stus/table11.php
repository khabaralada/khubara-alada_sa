<!DOCTYPE html>
<html>
  <head>
 	 <?
 
 
include ("conn.php");
$query8 = "select * from branches where Branches_ID=1";
$result8 = mysqli_query($conn,$query8);
while($row8=mysqli_fetch_array($result8))
 {
    $Branches_title_sms=$row8['Branches_title'];
  $Branches_title_en_sms=$row8['Branches_title_en'];
  $branches_logo=$row8['branches_logo'];
 }
 ?>


<title><? echo $Branches_title_sms; ?>  </title>
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
    <!-- Bootstrap 3.3.2 -->
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />    
    <!-- FontAwesome 4.3.0 -->
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
    <!-- Ionicons 2.0.0 -->
    <link href="http://code.ionicframework.com/ionicons/2.0.0/css/ionicons.min.css" rel="stylesheet" type="text/css" />    
    <!-- Theme style -->
    <link href="dist/css/AdminLTE.min.css" rel="stylesheet" type="text/css" />
    <!-- AdminLTE Skins. Choose a skin from the css/skins 
         folder instead of downloading all of them to reduce the load. -->
    <link href="dist/css/skins/_all-skins.min.css" rel="stylesheet" type="text/css" />
    <!-- iCheck -->
    <link href="plugins/iCheck/flat/blue.css" rel="stylesheet" type="text/css" />
    <!-- Morris chart -->
    <link href="plugins/morris/morris.css" rel="stylesheet" type="text/css" />
    <!-- jvectormap -->
    <link href="plugins/jvectormap/jquery-jvectormap-1.2.2.css" rel="stylesheet" type="text/css" />
    <!-- Date Picker -->
    <link href="plugins/datepicker/datepicker3.css" rel="stylesheet" type="text/css" />
    <!-- Daterange picker -->
    <link href="plugins/daterangepicker/daterangepicker-bs3.css" rel="stylesheet" type="text/css" />
    <!-- bootstrap wysihtml5 - text editor -->
    <link href="plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css" rel="stylesheet" type="text/css" />

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
        <script src="plugins/jQuery/jQuery-2.1.3.min.js"></script>
    <!-- jQuery UI 1.11.2 -->
    <script src="http://code.jquery.com/ui/1.11.2/jquery-ui.min.js" type="text/javascript"></script>
    <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
    <script>
      $.widget.bridge('uibutton', $.ui.button);
    </script>
    <!-- Bootstrap 3.3.2 JS -->
    <script src="bootstrap/js/bootstrap.min.js" type="text/javascript"></script>    
    <!-- Morris.js charts -->
    <script src="http://cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
    <script src="plugins/morris/morris.min.js" type="text/javascript"></script>
    <!-- Sparkline -->
    <script src="plugins/sparkline/jquery.sparkline.min.js" type="text/javascript"></script>
    <!-- jvectormap -->
    <script src="plugins/jvectormap/jquery-jvectormap-1.2.2.min.js" type="text/javascript"></script>
    <script src="plugins/jvectormap/jquery-jvectormap-world-mill-en.js" type="text/javascript"></script>
    <!-- jQuery Knob Chart -->
    <script src="plugins/knob/jquery.knob.js" type="text/javascript"></script>
    <!-- daterangepicker -->
    <script src="plugins/daterangepicker/daterangepicker.js" type="text/javascript"></script>
    <!-- datepicker -->
    <script src="plugins/datepicker/bootstrap-datepicker.js" type="text/javascript"></script>
    <!-- Bootstrap WYSIHTML5 -->
    <script src="plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js" type="text/javascript"></script>
    <!-- iCheck -->
    <script src="plugins/iCheck/icheck.min.js" type="text/javascript"></script>
    <!-- Slimscroll -->
    <script src="plugins/slimScroll/jquery.slimscroll.min.js" type="text/javascript"></script>
    <!-- FastClick -->
    <script src='plugins/fastclick/fastclick.min.js'></script>
    <!-- AdminLTE App -->
    <script src="dist/js/app.min.js" type="text/javascript"></script>

    <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
    <script src="dist/js/pages/dashboard.js" type="text/javascript"></script>

    <!-- AdminLTE for demo purposes -->
    <script src="dist/js/demo.js" type="text/javascript"></script>
     <!-- page script -->
   
<style>
  *  {
 
 font-family: Droid Arabic Kufi; font-size:12px;
}

</style>
<style>
#snackbar {
    visibility: hidden;
    min-width: 250px;
    margin-left: -125px;
    background-color: green;
    color: #fff;
    text-align: center;
    border-radius: 5px;
    padding: 16px;
    position: fixed;
    z-index: 1;
    left: 50%;
    bottom: 50%;
    font-size: 12px;
}

#snackbar.show {
    visibility: visible;
    -webkit-animation: fadein 0.5s, fadeout 0.5s 2.5s;
    animation: fadein 0.5s, fadeout 0.5s 2.5s;
}
#snackbar2 {
    visibility: hidden;
    min-width: 250px;
    margin-left: -125px;
    background-color: #93cedc;
    color: #fff;
    text-align: center;
    border-radius: 5px;
    padding: 16px;
    position: fixed;
    z-index: 1;
    left: 50%;
    bottom: 50%;
    font-size: 12px;
}

#snackbar2.show {
    visibility: visible;
    -webkit-animation: fadein 0.5s, fadeout 0.5s 2.5s;
    animation: fadein 0.5s, fadeout 0.5s 2.5s;
}

#snackbar3 {
    visibility: hidden;
    min-width: 250px;
    margin-left: -125px;
    background-color: red;
    color: #fff;
    text-align: center;
    border-radius: 5px;
    padding: 16px;
    position: fixed;
    z-index: 1;
    left: 50%;
    bottom: 50%;
    font-size: 12px;
}

#snackbar3.show {
    visibility: visible;
    -webkit-animation: fadein 0.5s, fadeout 0.5s 2.5s;
    animation: fadein 0.5s, fadeout 0.5s 2.5s;
}

@-webkit-keyframes fadein {
    from {bottom: 0; opacity: 0;} 
    to {bottom: 30px; opacity: 1;}
}

@keyframes fadein {
    from {bottom: 0; opacity: 0;}
    to {bottom: 30px; opacity: 1;}
}

@-webkit-keyframes fadeout {
    from {bottom: 30px; opacity: 1;} 
    to {bottom: 0; opacity: 0;}
}

@keyframes fadeout {
    from {bottom: 30px; opacity: 1;}
    to {bottom: 0; opacity: 0;}
}
</style>

  </head>

<body bgcolor="#FFFFFF" leftmargin="0" topmargin="0" marginwidth="0" marginheight="0" style="text-align: right; direction:rtl"   >
<?php   

require 'arabicTools.class.php';
date_default_timezone_set('asia/riyadh');
  date('Y-m-d H:i:s'); 

$ar_date=ArabicTools::arabicDate('hj:Y-m-d',time()); 
?>
 
 

 
 <div class="box-header"><div class="box-body">
                    <label class="control-label" for="inputSuccess">
					<i class="fa fa-check"></i>
جدول الدورة/   

                     <?
include ("conn.php");
$section_Id= mysqli_real_escape_string($conn,htmlspecialchars(intval($_GET['section_Id']), ENT_QUOTES, "utf-8")); 

$query = "select * from cors,subjects    where  cors.cors_ID=subjects.cors_ID and   ID='$section_Id' ";
$result = mysqli_query($conn,$query);
while($row=mysqli_fetch_array($result))
{ ?>
<? echo $row['cors_name'];  ?> - رقم الدورة <? echo $row['cors_no'];  ?> - بداية الدورة <? echo $row['start_date'];  ?> -  نهاية الدورة  <? echo $row['end_date'];  ?>
<?
}
?> 
					   
                </div>  	<p style="text-align: center"> <img src="<? echo $branches_logo; ?>"   height="116"></p>

<div class="box  box-danger">
                <div class="box-header">
                   
                </div><!-- /.box-header -->
                <div class="box-body">
                  <table id="example1" class="table table-bordered table-striped"  >
                    <thead>
                      <tr>
                         <th><p align=center>
						 &nbsp;</th>
                        <th colspan="9"> <div align=center>
						 الفترة الصباحية </div></th>
                         
                        <th colspan="13"><div align=center>
						 الفترة المسائية </div></th>
                      </tr>
                      <tr>
                         <th><p align=center>
						 <span lang="ar-sa">الأيام</span></th>
                         <th><p align=center> <span lang="ar-sa">08:00</span></th>
                         
                         <th><p align=center>
                     
						 <span lang="ar-sa">08:30</span></th>
                         <th><p align=center>
                     
						 <span lang="ar-sa">09:00</span></th>
                         <th><p align=center>
                     
						 <span lang="ar-sa">08:30</span></th>
                         <th><p align=center>
                     
						 10:00</th>
                         <th><p align=center>
						10:30</th>
                         <th><p align=center>
						11:00</th>
                         <th><p align=center>
						11:30</th>
                         <th><p align=center>
						12:00</th>
                         <th><p align=center>
						04:00</th>
                         <th><p align=center>
						04:30</th>
                         <th><p align=center>
						05:00</th>
                         <th><p align=center>
						05:30</th>
                         <th><p align=center>
						06:00</th>
                         <th><p align=center>
						06:30</th>
                         <th><p align=center>
						07:00</th>
                         <th><p align=center>
						07:30</th>
                         <th><p align=center>
						08:00</th>
                         <th><p align=center>
						08:30</th>
                         <th><p align=center>
						09:00</th>
                         <th><p align=center>
						09:30</th>
                         <th><p align=center>
						10:30</th>
                      </tr>
                    </thead>
                    <tbody>

                      <?
include ("conn.php");
$query = "select * from days      ";
$result = mysqli_query($conn,$query);
while($row=mysqli_fetch_array($result))
{ 
$days_ID=$row['days_ID'];
?>
 <tr>
                        <td>
						<span lang="ar-sa"><? echo $row['day']; ?></span></td>
                        <td>
<span >
<?
include ("conn.php");

$section_Id= mysqli_real_escape_string($conn,htmlspecialchars(intval($_GET['section_Id']), ENT_QUOTES, "utf-8")); 
$query1 = "select * from cors,subjects,teacher,branches   where branches.Branches_ID=cors.Branches and  teacher.teacher_id=cors.traning_name 
and subjects.cors_ID=cors.cors_ID  and cors.ID='$section_Id' and end_date>='$ar_date' and '$days_ID'>=day1 and  '$days_ID'<=day2 and time1='08:00' order by cors_no DESC";
$result1 = mysqli_query($conn,$query1);
while($row1=mysqli_fetch_array($result1))
{
?>

<? echo $row1['class']; ?> : <? echo $row1['cors_name']; ?></a><hr>

<?
}
?></span></td>
                        <td>
<span >
<?
include ("conn.php");
$section_Id= mysqli_real_escape_string($conn,htmlspecialchars(intval($_GET['section_Id']), ENT_QUOTES, "utf-8")); 

$query1 = "select * from cors,subjects,teacher,branches   where branches.Branches_ID=cors.Branches and  teacher.teacher_id=cors.traning_name 
and subjects.cors_ID=cors.cors_ID  and cors.ID='$section_Id' and end_date>='$ar_date' and '$days_ID'>=day1 and  '$days_ID'<=day2 and time1='08:30' order by cors_no DESC";
$result1 = mysqli_query($conn,$query1);
while($row1=mysqli_fetch_array($result1))
{
?>

<? echo $row1['class']; ?> : <? echo $row1['cors_name']; ?></a><hr>

<?
}
?></span></td>
                        <td>
<span >
<?
include ("conn.php");
$section_Id= mysqli_real_escape_string($conn,htmlspecialchars(intval($_GET['section_Id']), ENT_QUOTES, "utf-8")); 

$query1 = "select * from cors,subjects,teacher,branches   where branches.Branches_ID=cors.Branches and  teacher.teacher_id=cors.traning_name 
and subjects.cors_ID=cors.cors_ID  and cors.ID='$section_Id' and end_date>='$ar_date' and '$days_ID'>=day1 and  '$days_ID'<=day2 and time1='09:00' order by cors_no DESC";
$result1 = mysqli_query($conn,$query1);
while($row1=mysqli_fetch_array($result1))
{
?>

<? echo $row1['class']; ?> : <? echo $row1['cors_name']; ?></a><hr>

<?
}
?></span></td>
                        <td> 
<span > 
<?
include ("conn.php");

$section_Id= mysqli_real_escape_string($conn,htmlspecialchars(intval($_GET['section_Id']), ENT_QUOTES, "utf-8")); 
$query1 = "select * from cors,subjects,teacher,branches   where branches.Branches_ID=cors.Branches and  teacher.teacher_id=cors.traning_name 
and subjects.cors_ID=cors.cors_ID  and cors.ID='$section_Id' and end_date>='$ar_date' and '$days_ID'>=day1 and  '$days_ID'<=day2 and time1='09:30' order by cors_no DESC";
$result1 = mysqli_query($conn,$query1);
while($row1=mysqli_fetch_array($result1))
{
?>

<? echo $row1['class']; ?> : <? echo $row1['cors_name']; ?></a><hr>

<?
}
?></span></td>
                        <td>
<span >
<?
include ("conn.php");
$section_Id= mysqli_real_escape_string($conn,htmlspecialchars(intval($_GET['section_Id']), ENT_QUOTES, "utf-8")); 

$query1 = "select * from cors,subjects,teacher,branches   where branches.Branches_ID=cors.Branches and  teacher.teacher_id=cors.traning_name 
and subjects.cors_ID=cors.cors_ID  and cors.ID='$section_Id' and end_date>='$ar_date' and '$days_ID'>=day1 and  '$days_ID'<=day2 and time1='10:00' order by cors_no DESC";
$result1 = mysqli_query($conn,$query1);
while($row1=mysqli_fetch_array($result1))
{
?>

<? echo $row1['class']; ?> : <? echo $row1['cors_name']; ?></a><hr>

<?
}
?></span></td>
                        <td>
<span >
<?
include ("conn.php");
$section_Id= mysqli_real_escape_string($conn,htmlspecialchars(intval($_GET['section_Id']), ENT_QUOTES, "utf-8")); 

$query1 = "select * from cors,subjects,teacher,branches   where branches.Branches_ID=cors.Branches and  teacher.teacher_id=cors.traning_name 
and subjects.cors_ID=cors.cors_ID  and cors.ID='$section_Id' and end_date>='$ar_date' and '$days_ID'>=day1 and  '$days_ID'<=day2 and time1='10:30' order by cors_no DESC";
$result1 = mysqli_query($conn,$query1);
while($row1=mysqli_fetch_array($result1))
{
?>

<? echo $row1['class']; ?> : <? echo $row1['cors_name']; ?></a><hr>

<?
}
?></span></td>
                        <td>
<span >
<?
include ("conn.php");
$section_Id= mysqli_real_escape_string($conn,htmlspecialchars(intval($_GET['section_Id']), ENT_QUOTES, "utf-8")); 

$query1 = "select * from cors,subjects,teacher,branches   where branches.Branches_ID=cors.Branches and  teacher.teacher_id=cors.traning_name 
and subjects.cors_ID=cors.cors_ID  and cors.ID='$section_Id' and end_date>='$ar_date' and '$days_ID'>=day1 and  '$days_ID'<=day2 and time1='11:00' order by cors_no DESC";
$result1 = mysqli_query($conn,$query1);
while($row1=mysqli_fetch_array($result1))
{
?>

<? echo $row1['class']; ?> : <? echo $row1['cors_name']; ?></a><hr>

<?
}
?></span></td>
                        <td>
<span >
<?
include ("conn.php");
$section_Id= mysqli_real_escape_string($conn,htmlspecialchars(intval($_GET['section_Id']), ENT_QUOTES, "utf-8")); 

$query1 = "select * from cors,subjects,teacher,branches   where branches.Branches_ID=cors.Branches and  teacher.teacher_id=cors.traning_name 
and subjects.cors_ID=cors.cors_ID  and cors.ID='$section_Id' and end_date>='$ar_date' and '$days_ID'>=day1 and  '$days_ID'<=day2 and time1='11:30' order by cors_no DESC";
$result1 = mysqli_query($conn,$query1);
while($row1=mysqli_fetch_array($result1))
{
?>

<? echo $row1['class']; ?> : <? echo $row1['cors_name']; ?></a><hr>

<?
}
?></span></td>
                        <td>
<span >
<?
include ("conn.php");
$section_Id= mysqli_real_escape_string($conn,htmlspecialchars(intval($_GET['section_Id']), ENT_QUOTES, "utf-8")); 

$query1 = "select * from cors,subjects,teacher,branches   where branches.Branches_ID=cors.Branches and  teacher.teacher_id=cors.traning_name 
and subjects.cors_ID=cors.cors_ID  and cors.ID='$section_Id' and end_date>='$ar_date' and '$days_ID'>=day1 and  '$days_ID'<=day2 and time1='12:00' order by cors_no DESC";
$result1 = mysqli_query($conn,$query1);
while($row1=mysqli_fetch_array($result1))
{
?>

<? echo $row1['class']; ?> : <? echo $row1['cors_name']; ?></a><hr>

<?
}
?></span></td>
                        <td>
<span >
<?
include ("conn.php");
$section_Id= mysqli_real_escape_string($conn,htmlspecialchars(intval($_GET['section_Id']), ENT_QUOTES, "utf-8")); 

$query1 = "select * from cors,subjects,teacher,branches   where branches.Branches_ID=cors.Branches and  teacher.teacher_id=cors.traning_name 
and subjects.cors_ID=cors.cors_ID  and cors.ID='$section_Id' and end_date>='$ar_date' and '$days_ID'>=day1 and  '$days_ID'<=day2 and time1='16:00' order by cors_no DESC";
$result1 = mysqli_query($conn,$query1);
while($row1=mysqli_fetch_array($result1))
{
?>

<? echo $row1['class']; ?> : <? echo $row1['cors_name']; ?></a><hr>

<?
}
?></span></td>
                        <td>
<span >
<?
include ("conn.php");
$section_Id= mysqli_real_escape_string($conn,htmlspecialchars(intval($_GET['section_Id']), ENT_QUOTES, "utf-8")); 

$query1 = "select * from cors,subjects,teacher,branches   where branches.Branches_ID=cors.Branches and  teacher.teacher_id=cors.traning_name 
and subjects.cors_ID=cors.cors_ID  and cors.ID='$section_Id' and end_date>='$ar_date' and '$days_ID'>=day1 and  '$days_ID'<=day2 and time1='16:30' order by cors_no DESC";
$result1 = mysqli_query($conn,$query1);
while($row1=mysqli_fetch_array($result1))
{
?>

<? echo $row1['class']; ?> : <? echo $row1['cors_name']; ?></a><hr>

<?
}
?></span></td>
                        <td>
<span >
<?
include ("conn.php");
$section_Id= mysqli_real_escape_string($conn,htmlspecialchars(intval($_GET['section_Id']), ENT_QUOTES, "utf-8")); 

$query1 = "select * from cors,subjects,teacher,branches   where branches.Branches_ID=cors.Branches and  teacher.teacher_id=cors.traning_name 
and subjects.cors_ID=cors.cors_ID  and cors.ID='$section_Id' and end_date>='$ar_date' and '$days_ID'>=day1 and  '$days_ID'<=day2 and time1='17:00' order by cors_no DESC";
$result1 = mysqli_query($conn,$query1);
while($row1=mysqli_fetch_array($result1))
{
?>

<? echo $row1['class']; ?> : <? echo $row1['cors_name']; ?></a><hr>
<?
}
?></span></td>
                        <td>
<span >
<?
include ("conn.php");
$section_Id= mysqli_real_escape_string($conn,htmlspecialchars(intval($_GET['section_Id']), ENT_QUOTES, "utf-8")); 

$query1 = "select * from cors,subjects,teacher,branches   where branches.Branches_ID=cors.Branches and  teacher.teacher_id=cors.traning_name 
and subjects.cors_ID=cors.cors_ID  and cors.ID='$section_Id' and end_date>='$ar_date' and '$days_ID'>=day1 and  '$days_ID'<=day2 and time1='17:30' order by cors_no DESC";
$result1 = mysqli_query($conn,$query1);
while($row1=mysqli_fetch_array($result1))
{
?>

<? echo $row1['class']; ?> : <? echo $row1['cors_name']; ?></a><hr>

<?
}
?></span></td>
                        <td>
<span >
<?
include ("conn.php");
$section_Id= mysqli_real_escape_string($conn,htmlspecialchars(intval($_GET['section_Id']), ENT_QUOTES, "utf-8")); 

$query1 = "select * from cors,subjects,teacher,branches   where branches.Branches_ID=cors.Branches and  teacher.teacher_id=cors.traning_name 
and subjects.cors_ID=cors.cors_ID  and cors.ID='$section_Id' and end_date>='$ar_date' and '$days_ID'>=day1 and  '$days_ID'<=day2 and time1='18:00' order by cors_no DESC";
$result1 = mysqli_query($conn,$query1);
while($row1=mysqli_fetch_array($result1))
{
?>

<? echo $row1['class']; ?> : <? echo $row1['cors_name']; ?></a><hr>

<?
}
?></span></td>
                        <td>
<span >
<?
include ("conn.php");
$section_Id= mysqli_real_escape_string($conn,htmlspecialchars(intval($_GET['section_Id']), ENT_QUOTES, "utf-8")); 

$query1 = "select * from cors,subjects,teacher,branches   where branches.Branches_ID=cors.Branches and  teacher.teacher_id=cors.traning_name 
and subjects.cors_ID=cors.cors_ID  and cors.ID='$section_Id' and end_date>='$ar_date' and '$days_ID'>=day1 and  '$days_ID'<=day2 and time1='18:30' order by cors_no DESC";
$result1 = mysqli_query($conn,$query1);
while($row1=mysqli_fetch_array($result1))
{
?>

<? echo $row1['class']; ?> : <? echo $row1['cors_name']; ?></a><hr>

<?
}
?></span></td>
                        <td>
<span >
<?
include ("conn.php");
$section_Id= mysqli_real_escape_string($conn,htmlspecialchars(intval($_GET['section_Id']), ENT_QUOTES, "utf-8")); 

$query1 = "select * from cors,subjects,teacher,branches   where branches.Branches_ID=cors.Branches and  teacher.teacher_id=cors.traning_name 
and subjects.cors_ID=cors.cors_ID  and cors.ID='$section_Id' and end_date>='$ar_date' and '$days_ID'>=day1 and  '$days_ID'<=day2 and time1='19:00' order by cors_no DESC";
$result1 = mysqli_query($conn,$query1);
while($row1=mysqli_fetch_array($result1))
{
?>

<? echo $row1['class']; ?> : <? echo $row1['cors_name']; ?></a><hr>

<?
}
?></span></td>
                        <td>
<span >
<?
include ("conn.php");
$section_Id= mysqli_real_escape_string($conn,htmlspecialchars(intval($_GET['section_Id']), ENT_QUOTES, "utf-8")); 

$query1 = "select * from cors,subjects,teacher,branches   where branches.Branches_ID=cors.Branches and  teacher.teacher_id=cors.traning_name 
and subjects.cors_ID=cors.cors_ID  and cors.ID='$section_Id' and end_date>='$ar_date' and '$days_ID'>=day1 and  '$days_ID'<=day2 and time1='19:30' order by cors_no DESC";
$result1 = mysqli_query($conn,$query1);
while($row1=mysqli_fetch_array($result1))
{
?>

<? echo $row1['class']; ?> : <? echo $row1['cors_name']; ?></a><hr>

<?
}
?></span></td>
                        <td>
<span >
<?
include ("conn.php");
$section_Id= mysqli_real_escape_string($conn,htmlspecialchars(intval($_GET['section_Id']), ENT_QUOTES, "utf-8")); 

$query1 = "select * from cors,subjects,teacher,branches   where branches.Branches_ID=cors.Branches and  teacher.teacher_id=cors.traning_name 
and subjects.cors_ID=cors.cors_ID  and cors.ID='$section_Id' and end_date>='$ar_date' and '$days_ID'>=day1 and  '$days_ID'<=day2 and time1='20:00' order by cors_no DESC";
$result1 = mysqli_query($conn,$query1);
while($row1=mysqli_fetch_array($result1))
{
?>

<? echo $row1['class']; ?> : <? echo $row1['cors_name']; ?></a><hr>

<?
}
?></span></td>
                        <td>
<span >
<?
include ("conn.php");
$section_Id= mysqli_real_escape_string($conn,htmlspecialchars(intval($_GET['section_Id']), ENT_QUOTES, "utf-8")); 

$query1 = "select * from cors,subjects,teacher,branches   where branches.Branches_ID=cors.Branches and  teacher.teacher_id=cors.traning_name 
and subjects.cors_ID=cors.cors_ID  and cors.ID='$section_Id' and end_date>='$ar_date' and '$days_ID'>=day1 and  '$days_ID'<=day2 and time1='20:30' order by cors_no DESC";
$result1 = mysqli_query($conn,$query1);
while($row1=mysqli_fetch_array($result1))
{
?>

<? echo $row1['class']; ?> : <? echo $row1['cors_name']; ?></a><hr>

<?
}
?></span></td>
                        <td>
<span >
<?
include ("conn.php");
$section_Id= mysqli_real_escape_string($conn,htmlspecialchars(intval($_GET['section_Id']), ENT_QUOTES, "utf-8")); 

$query1 = "select * from cors,subjects,teacher,branches   where branches.Branches_ID=cors.Branches and  teacher.teacher_id=cors.traning_name 
and subjects.cors_ID=cors.cors_ID  and cors.ID='$section_Id' and end_date>='$ar_date' and '$days_ID'>=day1 and  '$days_ID'<=day2 and time1='21:00' order by cors_no DESC";
$result1 = mysqli_query($conn,$query1);
while($row1=mysqli_fetch_array($result1))
{
?>

<? echo $row1['class']; ?> : <? echo $row1['cors_name']; ?></a><hr>

<?
}
?></span></td>
                        <td>
<span >
<?
include ("conn.php");
$section_Id= mysqli_real_escape_string($conn,htmlspecialchars(intval($_GET['section_Id']), ENT_QUOTES, "utf-8")); 

$query1 = "select * from cors,subjects,teacher,branches   where branches.Branches_ID=cors.Branches and  teacher.teacher_id=cors.traning_name 
and subjects.cors_ID=cors.cors_ID  and cors.ID='$section_Id' and end_date>='$ar_date' and '$days_ID'>=day1 and  '$days_ID'<=day2 and time1='21:30' order by cors_no DESC";
$result1 = mysqli_query($conn,$query1);
while($row1=mysqli_fetch_array($result1))
{
?>

<? echo $row1['class']; ?> : <? echo $row1['cors_name']; ?></a><hr>

<?
}
?></span></td>
                        <td>
<span >
<?
include ("conn.php");
$section_Id= mysqli_real_escape_string($conn,htmlspecialchars(intval($_GET['section_Id']), ENT_QUOTES, "utf-8")); 

$query1 = "select * from cors,subjects,teacher,branches   where branches.Branches_ID=cors.Branches and  teacher.teacher_id=cors.traning_name 
and subjects.cors_ID=cors.cors_ID  and cors.ID='$section_Id' and end_date>='$ar_date' and '$days_ID'>=day1 and  '$days_ID'<=day2 and time1='22:00' order by cors_no DESC";
$result1 = mysqli_query($conn,$query1);
while($row1=mysqli_fetch_array($result1))
{
?>

<? echo $row1['class']; ?> : <? echo $row1['cors_name']; ?></a><hr>

<?
}
?></span></td>
                      </tr><?   } ?> 
 
 
                    </tbody>
                     
                  </table>
       
</div>
</section>


</div><!-- /.content-wrapper -->
<? include('footer.php'); ?>
    </div><!-- ./wrapper -->
  </body>
</html>

     <!-- jQuery 2.1.3 -->
   