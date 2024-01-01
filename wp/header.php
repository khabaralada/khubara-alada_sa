

<head>
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
 

<meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
    <!-- Bootstrap 3.3.2 -->
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />    
    <!-- FontAwesome 4.3.0 -->
        <link href="css/font-awesome.min.css" rel="stylesheet">

    <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css" />
    <!-- Ionicons 2.0.0 -->
    <link href="ionicons.min.css" rel="stylesheet" type="text/css" />    
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
 
        <link href="./css/bootstrap-datetimepicker.min.css" rel="stylesheet" />
    <link href="plugins/select2/css/select2.min.css" rel="stylesheet" type="text/css" />

    <!-- Daterange picker -->
    <link href="plugins/daterangepicker/daterangepicker-bs3.css" rel="stylesheet" type="text/css" />
    <!-- bootstrap wysihtml5 - text editor -->
    <link href="plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css" rel="stylesheet" type="text/css" />
    <link href=" plugins/datatables/dataTables.bootstrap.css" rel="stylesheet" type="text/css" />

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
    background-color: #53a7fc;
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



#snackbar1 {
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

#snackbar1.show {
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


#snackbar4 {
    visibility: hidden;
    min-width: 250px;
    margin-left: -125px;
    background-color:teal;
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

#snackbar4.show {
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



@media print {
    .noprint {
        display: none;
    }
}
*  {
 
 font-family: Droid Arabic Kufi;  
}
 .mobileHide { display: inline; } 

  /* Smartphone Portrait and Landscape */ 
  @media only screen 
    and (min-device-width : 320px) 
    and (max-device-width : 480px){ 
     .mobileHide { display: none;}
  }

 
</style>
 
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">

  </head>
 
<div id="snackbar"><b> <i class="fa  fa-check-circle  fa-4x text-green"></i><br><font face="Droid Arabic Kufi" size="3">تم حفظ البيانات بنجاح<br>The data was saved successfully</font></b></div>
<div id="snackbar2"><b><i class="fa  fa-check-circle  fa-4x text-green"></i><br><font face="Droid Arabic Kufi" size="3">تم حفظ التغيرات بنجاح<br>The data was saved successfully</font></b></div>
<div id="snackbar3"><b><i class="fa  fa-trash-o  fa-4x text-yellow"></i><br><font face="Droid Arabic Kufi" size="3">تم حذف البيانات بنجاح<br>The data has been deleted successfully</font></b></div>
<div id="snackbar4"><b><i class="fa fa-times  fa-4x text-red"></i><br><font face="Droid Arabic Kufi" size="3">مسجل مسبقاً بنفس الدورة<br>The record is already registered</font></b></div>

</head>

<header class="main-header"  dir="rtl">
        <!-- Logo -->
       <?php if($_SESSION['acount_type']!=6) { ?>
  <a href="login.php" class="logo"><b> </b><img src="logo.png" width=130> </a>
  
  <?php } else
  { ?>
  <a href="display_stu.php" class="logo"><b> </b><img src="logo.png" width=130> </a>
  <?php } ?>
        <nav class="navbar navbar-static-top" role="navigation">
          <!-- Sidebar toggle button-->
          <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
            <span class="sr-only">Toggle navigation</span>
          </a>
          <div class="navbar-custom-menu">
            <ul class="nav navbar-nav">
              <!-- Messages: style can be found in dropdown.less-->
              <li class="dropdown user user-menu">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
 
                  
                  
                   <?php if($_SESSION[image]!="") { ?> <img src="dist/img/<?php echo $_SESSION[image]; ?>" class="user-image" alt="User Image"/>
            <?php } else { ?>  
            
                        <?php if($_SESSION['Branches']==3) { ?><img src="dist/img/avatar2.png" class="user-image" alt="User Image"/><?php } else { ?>
            <img src="dist/img/avatar5.png" class="user-image" alt="User Image"/>
            <?php } ?>

<?php } ?>




                  <span class="hidden-xs"><?php echo $_SESSION['name']; ?></span>
                </a>
                <ul class="dropdown-menu">
                  <!-- User image -->
                  <li class="user-header">
                  
                  <?php if($_SESSION[image]!="") { ?> <img src="dist/img/<?php echo $_SESSION[image]; ?>" class="img-circle" alt="User Image" />
            <?php } else { ?> 
            
                        <?php if($_SESSION['Branches']==3) { ?><img src="dist/img/avatar2.png" class="img-circle" alt="User Image" /><?php } else { ?>
            <img src="dist/img/avatar5.png" class="img-circle" alt="User Image" />
            <?php } ?>

 <?php } ?>


 
                    <p>
                      <?php echo $nname=$_SESSION['name']; ?> <small><?php echo $_SESSION['email']; ?></small><small><?php echo $_SESSION['mobile']; ?></small>
                    </p>
                  </li>
                  <!-- Menu Body -->
                   
                  <!-- Menu Footer-->
                  <li class="user-footer">
                    <div class="pull-left">
                      <a href=""   data-target="#myupdate" data-toggle="modal" class="btn btn-default btn-flat">
						الملف الشخصي <br>Profile  </a>
						 

                    </div>
                    <div class="pull-right">
                      <a href="logout.php" class="btn btn-default btn-flat">
						تسجيل الخروج <br>Logout</a>
                    </div>
                  </li>
                </ul>
              </li>
 
                           <li class="dropdown messages-menu"><a href="javascript:history.go(-1)" onMouseOver="self.status=document.referrer;return true" ><i class="fa  fa-reply"></i></a></li>

                           <li class="dropdown messages-menu"><a href="login.php" ><i class="fa  fa-refresh"></i></a></li>

                           <li class="dropdown messages-menu">
                           
 <a href="javascript:window.print()"><i class="fa fa-print"></i></a></li>
 
 <?php if($_SESSION['acount_type']!=6) { ?>

                                                        <?php
include ("../config.php");
$query1 = "select count(Recepion)as Recepion from  inbox,user_crm where user_crm.ID=inbox.Recepion    and username='$_SESSION[username]' and msg_read=0 and msg_delete=0";
$result1 = mysqli_query($conn,$query1);
while($row1=mysqli_fetch_array($result1))
{
$co=$row1['Recepion'];
}
?>
              <li class="dropdown messages-menu">
              
              
              
              
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                  <i class="fa fa-envelope-o"></i>
                  <span class="label label-success"><?php echo $co; ?></span>
                </a>
                <ul class="dropdown-menu">
                  <li class="header">لديك <?php echo $co; ?> رسالة جديدة</li>
                  <li>
                    <!-- inner menu: contains the actual data -->
                    <ul class="menu">
                    
                    
                                          <?php
include ("../config.php");
$query1 = "select * from  inbox,user_crm where user_crm.ID=inbox.Recepion    and username='$_SESSION[username]' and   msg_delete=0 limit 3";
$result1 = mysqli_query($conn,$query1);
$rows1 = mysqli_num_rows($result1 );
if($rows1 > 0 )
{
while($row1=mysqli_fetch_array($result1))
{
?>
                      <li><!-- start message -->
                        <a href="read-mail.php?msg_ID=<?php echo $row1['msg_ID']; ?>" target="I1">
<?php
$query11 = "select * from user_crm   where ID='$row1[Sender]' ";
$result11 = mysqli_query($conn,$query11);
while($row11=mysqli_fetch_array($result11))
{
?>
                          <div class="pull-left">
 
                            
                            
                            
                               <?php if($row11['image']!="") { ?> <img src="dist/img/<?php echo $row11['image']; ?>" class="img-circle" alt="User Image"/>
            <?php } else { ?>  
            
                        <?php if($row11['Branches']==3) { ?><img src="dist/img/avatar2.png" class="img-circle" alt="User Image"/><?php } else { ?>
            <img src="dist/img/avatar5.png" class="img-circle" alt="User Image"/>
            <?php } }?>
            
            
            
                          </div>
                          <h4>
                           <p><?php echo $row11['name']; ?></p><?php } ?>
                            
                            
                          </h4>
                          <p><?php echo $row1['address']; ?></p>
                        </a>
                      </li><!-- end message -->
<?php } } ?>                      
                      
                      
                      
                       
                       
                       
                       
                    </ul>
                  </li>
                  <li class="footer"><a href="" target=I1>عرض جميع 
					الرسائل</a></li>
                </ul>
              </li>
              <!-- Notifications: style can be found in dropdown.less -->
                <li class="dropdown notifications-menu">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                  <i class="fa fa-bell-o"></i>
                  <span class="label label-warning">0</span>
                </a>
                <ul class="dropdown-menu">
                  <li class="header">You have 10 notifications</li>
                  <li>
                    <!-- inner menu: contains the actual data -->
                    <ul class="menu">
                      
                       
                    </ul>
                  </li>
                  <li class="footer"><a href="#">View all</a></li>
                </ul>
              </li>
              <!-- Tasks: style can be found in dropdown.less -->
              <li class="dropdown tasks-menu">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                  <i class="fa fa-flag-o"></i>
                  <span class="label label-danger">0</span>
                </a>
                <ul class="dropdown-menu">
                  <li class="header">You have 9 tasks</li>
                  <li>
                    <!-- inner menu: contains the actual data -->
                    <ul class="menu">
                          </ul>
                  </li>
                  <li class="footer">
                    <a href="#">View all tasks</a>
                  </li>
                </ul>
              </li><?php } ?>
              <!-- User Account: style can be found in dropdown.less -->
              
            </ul>
          </div>
        </nav>
        
        
<?php
 
$query = "select * from user_crm where ID='$_SESSION[user_ID]'";
$result = mysqli_query($conn,$query);
$rows = mysqli_num_rows($result );
if($rows > 0 )
{
while($row=mysqli_fetch_array($result))
{
?>


<div class="example-modal">
            <div class="modal" id="myupdate" role="dialog">
              <div class="modal-dialog">
                <div class="modal-content">                <form action="" method="post"  enctype="multipart/form-data">
                  <div class="modal-header">
					<b><font face="Droid Arabic Kufi" size="5">تحديث بيانات : <?php echo $row['name']; ?></font><font size="5"></font></b>
                  </div>
                  <div class="modal-body">
 
 					<input  type=hidden name="iddd"   size="20"   value="<?php echo $row['ID']; ?>" required="required"   class="form-control"  >

                  

<div class="row">
<div class="form-group col-lg-6">
                      <label>نوع الحساب</label>
                      <select style="font-family: Arial"  size="1" required="required" name="acount_type" class="form-control" >
				<?php if($row['acount_type']==1) echo "<option  value=1>مدير النظام</option>"; ?>
				<?php if($row['acount_type']==2) echo "<option  value=2>مسوق</option>"; ?>
				<?php if($row['acount_type']==3) echo "<option  value=3>الادارة  </option>"; ?>
 
 

 
						</select>
                    </div>
                    
                    
                    
                  
 
                    
                    
<div class="form-group col-lg-6">
                      <label>  الاسم</label>
                      
                      <input  name="T1" id="T1" size="20"   required="required"  value="<?php echo $row['name']; ?>" class="form-control"  >
 
                    </div>

                    <!-- textarea -->
 

                    <!-- input states -->
 
                     
                    
<div class="form-group col-lg-6">
                      <label class="control-label" for="inputSuccess">       الجوال</label>
 
                      
                      <input  name="T4" id="T5" size="20"  value="<?php echo $row['mobile']; ?>"  required="required"    class="form-control" >
                      
                      
                    </div>
                    
                    
                    
<div class="form-group col-lg-6">
                      <label class="control-label" for="inputSuccess">       البريد الالكتروني</label>
 
                      
                      <input type=email  name="T8"  size="20"   value="<?php echo $row['email']; ?>"  required="required"      class="form-control" >
                      
                      
                    </div>
                    
                    

                    <div class="form-group col-lg-6">
                      <label class="control-label" for="inputSuccess">       اسم المستخدم</label>
 
                      
                      <input  name="T5" id="T5" size="20"   readonly value="<?php echo $row['username']; ?>" required="required"    class="form-control" >
                      
                      
                    </div> 
                    <div class="form-group col-lg-6">
                      <label class="control-label" for="inputSuccess">       كلمة المرور</label>
 
                      
                      <input  name="T6" id="T5" size="20"   value="" required="required"    class="form-control" >
                      
                      
                    </div> 
  
   
<div class="form-group col-lg-12">
                      <label>الصورة الشخصية </label>
                      <input type="file" class="form-control"  name="image" size="20"></div>
 
                   
                     
                </div>
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-default pull-left" data-dismiss="modal">الغاء</button>
                    <input type="submit" class="btn btn-success " value="حفظ" name="edits">
                  </div></form>
                </div><!-- /.modal-content -->
              </div><!-- /.modal-dialog -->
            </div><!-- /.modal -->
          </div><?php } } ?>
      </header>
      
      
<?php

if(isset($_POST['edits'])) {
 $T1 = mysqli_real_escape_string($conn,$_POST['T1']);
 $T2 = mysqli_real_escape_string($conn,$_POST['T2']); 
 $T3 = mysqli_real_escape_string($conn,$_POST['T3']); 
 $T4 = mysqli_real_escape_string($conn,$_POST['T4']); 
 $T5 = mysqli_real_escape_string($conn,$_POST['T5']); 
 $T6 = mysqli_real_escape_string($conn,$_POST['T6']); 
 $T7 = mysqli_real_escape_string($conn,$_POST['T7']); 
 $T8 = mysqli_real_escape_string($conn,$_POST['T8']); 
 $iddd = mysqli_real_escape_string($conn,$_POST['iddd']); 
 
    if(is_array($_FILES)) {

        $file = $_FILES['image']['tmp_name']; 
        $sourceProperties = getimagesize($file);
        $fileNewName = time();
        $folderPath = "dist/img/";
        $ext = pathinfo($_FILES['image']['name'], PATHINFO_EXTENSION);
        $imageType = $sourceProperties[2];

        switch ($imageType) {

            case IMAGETYPE_PNG:
                $imageResourceId = imagecreatefrompng($file); 
                $targetLayer = imageResize($imageResourceId,$sourceProperties[0],$sourceProperties[1]);
                imagepng($targetLayer,$folderPath. $fileNewName. "_thump.". $ext);
                break;

            case IMAGETYPE_GIF:
                $imageResourceId = imagecreatefromgif($file); 
                $targetLayer = imageResize($imageResourceId,$sourceProperties[0],$sourceProperties[1]);
                imagegif($targetLayer,$folderPath. $fileNewName. "_thump.". $ext);
                break;

            case IMAGETYPE_JPEG:
                $imageResourceId = imagecreatefromjpeg($file); 
                $targetLayer = imageResize($imageResourceId,$sourceProperties[0],$sourceProperties[1]);
                imagejpeg($targetLayer,$folderPath. $fileNewName. "_thump.". $ext);
                break;

            default:
       // echo "<script language='javascript'>window.alert('صيغة الملف غير معروفة')</script>";
 
      //  exit;
                break;
        }
$nams=$fileNewName. "_thump.". $ext;
    $T6= md5($T6);

if($file!="")
$sql="update 	user set name='$T1',password='$T6',mobile='$T4',email='$T8',image='$nams' where ID='$iddd'";
else
$sql="update 	user set name='$T1',password='$T6',mobile='$T4',email='$T8' where ID='$iddd'";
if(mysqli_query($conn,$sql))
{
$last_id = mysqli_insert_id($conn);
echo '<script>
function myFunction() {
document.getElementById("snackbar2").style.visibility = "hidden";
}
 document.getElementById("snackbar2").style.visibility = "visible";
 window.setTimeout("hideMsg()", 1000); </script>';
?><meta http-equiv="refresh" content="2;url=<?php echo( $self ); ?>"><?php
}
}
}

function imageResize($imageResourceId,$width,$height) {

    $targetWidth =160;
    $targetHeight =85;

    $targetLayer=imagecreatetruecolor($targetWidth,$targetHeight);
    imagecopyresampled($targetLayer,$imageResourceId,0,0,0,0,$targetWidth,$targetHeight, $width,$height);

    return $targetLayer;
}

?>