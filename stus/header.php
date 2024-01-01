

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
<div id="snackbar4"><b><i class="fa fa-times  fa-4x text-red"></i><br><font face="Droid Arabic Kufi" size="3">رقم الهوية او الرقم العسكري مسجل مسبقاَ<br>The record is already registered</font></b></div>

</head>

<header class="main-header"  dir="rtl">
        <!-- Logo -->
       <? if($_SESSION['acount_type']!=6) { ?>
  <a href="login.php" class="logo"><b> </b><img src="logo.png" width=130> </a>
  
  <? } else
  { ?>
  <a href="display_stu.php" class="logo"><b> </b><img src="logo.png" width=130> </a>
  <? } ?>
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
 
                  
                  
                   <? if($_SESSION[image]!="") { ?> <img src="dist/img/<? echo $_SESSION[image]; ?>" class="user-image" alt="User Image"/>
            <? } else { ?>  
            
                        <? if($_SESSION['Branches']==3) { ?><img src="dist/img/avatar2.png" class="user-image" alt="User Image"/><? } else { ?>
            <img src="dist/img/avatar5.png" class="user-image" alt="User Image"/>
            <? } ?>

<? } ?>




                  <span class="hidden-xs"><? echo $_SESSION['name']; ?></span>
                </a>
                <ul class="dropdown-menu">
                  <!-- User image -->
                  <li class="user-header">
                  
                  <? if($_SESSION[image]!="") { ?> <img src="dist/img/<? echo $_SESSION[image]; ?>" class="img-circle" alt="User Image" />
            <? } else { ?> 
            
                        <? if($_SESSION['Branches']==3) { ?><img src="dist/img/avatar2.png" class="img-circle" alt="User Image" /><? } else { ?>
            <img src="dist/img/avatar5.png" class="img-circle" alt="User Image" />
            <? } ?>

 <? } ?>


 
                    <p>
                      <? echo $nname=$_SESSION['name']; ?> <small><? echo $_SESSION['email']; ?></small><small><? echo $_SESSION['mobile']; ?></small>
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
 
 

                                                        <?
include ("conn.php");
$query1 = "select count(Recepion)as Recepion from  inbox,user   where user.ID=inbox.Recepion    and username='$_SESSION[username]' and msg_read=0 and msg_delete=0";
$result1 = mysqli_query($conn,$query1);
while($row1=mysqli_fetch_array($result1))
{
$co=$row1['Recepion'];
}
?>
              <li class="dropdown messages-menu">
              
              
              
              
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                  <i class="fa fa-envelope-o"></i>
                  <span class="label label-success"><? echo $co; ?></span>
                </a>
                <ul class="dropdown-menu">
                  <li class="header">لديك <? echo $co; ?> رسالة جديدة</li>
                  <li>
                    <!-- inner menu: contains the actual data -->
                    <ul class="menu">
                    
                    
                                          <?
include ("conn.php");
$query1 = "select * from  inbox,user   where user.ID=inbox.Recepion    and username='$_SESSION[username]' and   msg_delete=0 limit 3";
$result1 = mysqli_query($conn,$query1);
$rows1 = mysqli_num_rows($result1 );
if($rows1 > 0 )
{
while($row1=mysqli_fetch_array($result1))
{
?>
                      <li><!-- start message -->
                        <a href="read-mail.php?msg_ID=<? echo $row1['msg_ID']; ?>" target="I1">
<?
$query11 = "select * from  user   where ID='$row1[Sender]' ";
$result11 = mysqli_query($conn,$query11);
while($row11=mysqli_fetch_array($result11))
{
?>
                          <div class="pull-left">
 
                            
                            
                            
                               <? if($row11['image']!="") { ?> <img src="dist/img/<? echo $row11['image']; ?>" class="img-circle" alt="User Image"/>
            <? } else { ?>  
            
                        <? if($row11['Branches']==3) { ?><img src="dist/img/avatar2.png" class="img-circle" alt="User Image"/><? } else { ?>
            <img src="dist/img/avatar5.png" class="img-circle" alt="User Image"/>
            <? } }?>
            
            
            
                          </div>
                          <h4>
                           <p><? echo $row11['name']; ?></p><? } ?>
                            
                            
                          </h4>
                          <p><? echo $row1['address']; ?></p>
                        </a>
                      </li><!-- end message -->
<? } } ?>                      
                      
                      
                      
                       
                       
                       
                       
                    </ul>
                  </li>
                  <li class="footer"><a href="mailbox.php" target=I1>عرض جميع 
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
              </li> 
              <!-- User Account: style can be found in dropdown.less -->
              
            </ul>
          </div>
        </nav>
        
        
        <?
include ("conn.php");
 

$result=mysqli_query($conn,"select* from teacher,user where teacher.teacher_id=user.ID and user.ID='$_SESSION[user_ID]' order by teacher.Branches");

 
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
					<b><font face="Droid Arabic Kufi" size="5">تحديث بيانات : <? echo $row['name']; ?></font><font size="5"></font></b>
                  </div>
                  <div class="modal-body">
 
 					<input  type=hidden name="iddd"   size="20"   value="<? echo $row['ID']; ?>" required="required"   class="form-control"  >

                  

<div class="row">
 
 

                      
  
   
<div class="form-group col-lg-12">
                      <label>الصورة الشخصية (<font color="#FF0000">اختياري</font>)</label>
                      <input    type="file" class="form-control"  name="image" size="20"></div>
                    
                    <div class="form-group col-lg-6">

                      <label> المجال / التخصص</label>
                      <select style="font-family: Arial"   style="font-family: Arial"   size="1" required="required" name="cors" class="form-control" >
                               <option ><? echo $row['cors']; ?></option> 
                               <option>الإدارة</option>
<?
include ("conn.php");
$query9 = "select * from catogry";
$result9 = mysqli_query($conn,$query9);
while($row9=mysqli_fetch_array($result9))
{
?>
<option ><? echo $row9['catogry']; ?></option>
<? } ?>

						</select>
                    </div>
                    
                    <div class="form-group col-lg-6">

                      <label>الفرع</label>
                      <select style="font-family: Arial"   style="font-family: Arial"   size="1" name="Branches"   required    class="form-control"  >
						<?   $Branches=$row['Branches']; 
						
						
 
 
$query1 = "select * from branches where Branches_ID='$Branches' ";
$result1 = mysqli_query($conn,$query1);
$rows1 = mysqli_num_rows($result1 );
 
while($row1=mysqli_fetch_array($result1))
{
?>

<option value="<? echo $row1['Branches_ID']; ?>"><? echo $row1['Branches_name']; ?></option>
<?php 
}
?>


 
					</select>
                    </div>
                    
                    
                    <div class="form-group col-lg-6">

                      <label>  اسم المحاضر / المدرب</label>
                      
                      <input  name="T1" id="T1" size="20"   required="required"   class="form-control" value="<? echo $row['teacher_name']; ?>"  >
 
                    </div>

                    <!-- textarea -->
                    <div class="form-group col-lg-6">

                      <label> رقم بطاقة الأحوال /الرقم الوظيفي</label>
                      <input  name="T7" id="T2" size="20"    required="required"  class="form-control" value="<? echo $row['id_card']; ?>" >
                    </div>
                    <div class="form-group col-lg-6">

                      <label class="control-label" >الدرجة العليمة</label>
                      <input  name="T2" id="T3" size="20"     required="required"  class="form-control" value="<? echo $row['degree']; ?>" >
                    </div>

                    <!-- input states -->
                    <div class="form-group col-lg-6">

                      <label class="control-label" for="inputSuccess">       العنوان</label>
 
                      
                      <input  name="T3" id="T5" size="20"    required="required"    class="form-control" value="<? echo $row['address']; ?>" >
                      
                      
                    </div>
                     
                    
                     <div class="form-group col-lg-6">

                      <label class="control-label" for="inputSuccess">       الجوال (<font color="#FF0000">اجباري</font>)</label>
 
                      
                      <input  name="T4" id="T5" size="20"    required="required"    class="form-control" value="<? echo $row['phone']; ?>" >
                      
                      
                    </div>
                    
                    
                    
                    <div class="form-group col-lg-6">

                      <label class="control-label" for="inputSuccess">       البريد الالكتروني  </label>
 
                      
                      <input type=email  name="T8"  size="20"      required="required"    class="form-control" value="<? echo $row['email']; ?>" >
                      
                      
                    </div>
                    
                    
                    <div class="form-group col-lg-6">

                      <label class="control-label" for="inputSuccess">       اسم المستخدم</label>
 
                      
                      <input  name="T5" id="T5" size="20"    readonly required="required"    class="form-control" value="<? echo $row['username']; ?>" >
                      
                      
                    </div><div class="form-group col-lg-6">

                      <label class="control-label" for="inputSuccess">       كلمة المرور</label>
 
                      
                      <input  name="T6" id="T5" size="20"    required="required"    class="form-control" value="<? echo $row['password']; ?>" type="password" >
                      
                     <input   type=hidden name="teacher_id"   size="20"    required="required"    class="form-control" value="<? echo $row['teacher_id']; ?>" > 
                    </div>

 
                   
                     
                </div>
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-default pull-left" data-dismiss="modal">الغاء</button>
                    <input type="submit" class="btn btn-success " value="حفظ" name="edits">
                  </div></form>
                </div><!-- /.modal-content -->
              </div><!-- /.modal-dialog -->
            </div><!-- /.modal -->
          </div><? } } ?>
      </header>
      
      
      
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



<?

if(isset($_POST['edits'])) {
 $T1 = mysqli_real_escape_string($conn,htmlspecialchars($_POST['T1'], ENT_QUOTES, "utf-8"));
 $T2 = mysqli_real_escape_string($conn,htmlspecialchars($_POST['T2'], ENT_QUOTES, "utf-8")); 
 $T3 = mysqli_real_escape_string($conn,htmlspecialchars($_POST['T3'], ENT_QUOTES, "utf-8")); 
 $T4 = mysqli_real_escape_string($conn,htmlspecialchars($_POST['T4'], ENT_QUOTES, "utf-8")); 
 $T5 = mysqli_real_escape_string($conn,htmlspecialchars($_POST['T5'], ENT_QUOTES, "utf-8")); 
 $T6 = mysqli_real_escape_string($conn,htmlspecialchars($_POST['T6'], ENT_QUOTES, "utf-8")); 
 $T7 = mysqli_real_escape_string($conn,htmlspecialchars($_POST['T7'], ENT_QUOTES, "utf-8")); 
 $T8 = mysqli_real_escape_string($conn,htmlspecialchars($_POST['T8'], ENT_QUOTES, "utf-8")); 
 $iddd = mysqli_real_escape_string($conn,htmlspecialchars($_POST['iddd'], ENT_QUOTES, "utf-8")); 
 
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
/*
if($file!="")
$sql="update 	user set name='$T1',password='$T6',mobile='$T4',email='$T8',image='$nams' where ID='$iddd'";
else
$sql="update 	user set name='$T1',password='$T6',mobile='$T4',email='$T8' where ID='$iddd'";
*/


if($file!="")
$sql="update user set name='$T1',username='$T5',password='$T6',mobile='$T4',email='$T8',Branches='$Branches',image='$nams',updates=1  where ID='$iddd'";
else
$sql="update user set name='$T1',username='$T5',password='$T6',mobile='$T4',email='$T8',Branches='$Branches',updates=1   where ID='$iddd'";




if(mysqli_query($conn,$sql))
{
$last_id = mysqli_insert_id($conn);
echo '<script>
function myFunction() {
document.getElementById("snackbar2").style.visibility = "hidden";
}
 document.getElementById("snackbar2").style.visibility = "visible";
 window.setTimeout("hideMsg()", 1000); </script>';
?><meta http-equiv="refresh" content="2;url=<?php echo( $self ); ?>"><?
}

 $T6= mysqli_real_escape_string($conn,$_POST['T6']); 
$password33= md5($psw);

$sql="update teacher set teacher_name='$T1',degree='$T2',address='$T3',phone='$T4',username='$T5',password='$password33',id_card='$T7',count_h='2000',Branches='$Branches',cors='$cors',
email='$T8',updates=1  where teacher_id='$iddd'";
if(mysqli_query($conn,$sql))
{ }


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