<?php  



// Configure timeout to 15 minutes
//$timeout = 60×60×12;
$timeout = 60*60*24;

// Set the maxlifetime of session
ini_set( "session.gc_maxlifetime", $timeout );

// Also set the session cookie timeout
ini_set( "session.cookie_lifetime", $timeout );

// Now start the session 
session_start();

// Update the timeout of session cookie
$sessionName = session_name();

if( isset( $_COOKIE[ $sessionName ] ) ) {

	setcookie( $sessionName, $_COOKIE[ $sessionName ], time() + $timeout, '/' );
}


session_start(); // Starting Session
$error=''; // Variable To Store Error Message
require ("../config.php");

if (isset($_POST['login'])) {
if (empty($_POST['username']) || empty($_POST['password'])) {
$error = "ادخل اسم المستخدم وكلمة المرور";
}
else
{
 
 $username = mysqli_real_escape_string($conn,$_POST['username']);
 $password = mysqli_real_escape_string($conn,$_POST['password']); 

    $password = md5($password);

$query = "select * from user_crm where  username='$username' and password='$password'  and Activation=1";
$result = mysqli_query($conn,$query);
$rows = mysqli_num_rows($result );
if ($rows== 1) {
while($row=mysqli_fetch_array($result))
{

$_SESSION['user_ID']=$row['ID']; // Initializing Session
$_SESSION['username']=$username; // Initializing Session
$_SESSION['password']=$password; // Initializing Session
$_SESSION['Branches']=$row['Branches']; // Initializing Session
$_SESSION['email']=$row['email']; // Initializing Session
$_SESSION['name']=$row['name']; // Initializing Session
$_SESSION['updates']=$row['updates']; // Initializing Session


$_SESSION['acount_type']=$row['acount_type']; // Initializing Session
header("location: login.php"); // Redirecting To Other Page
}
} else {
$error = "خطأ باسم المستخدم او كلمة المرور";
}
 
}
}
 
include ("../config.php");


 
$query9 = "select * from web_settings";
$result9 = mysqli_query($conn,$query9);
while($row9=mysqli_fetch_array($result9))
{
 $site_name=$row9['site_name'];
 $site_name_en=$row9['site_name_en'];
 $site_mobile=$row9['site_mobile'];
 $site_email=$row9['site_email'];
 $site_address=$row9['site_address'];
 $site_address=$row9['site_address_en'];
 $site_url=$row9['site_url'];
 $secretKey=$row9['secretKey'];
 $sitKey=$row9['sitKey'];
 $site_map=$row9['site_map'];
  
}
  

?> <!DOCTYPE html>
<html lang="en">
  <head>
  <style>
  *  {
 
 font-family: Droid Arabic Kufi; font-size:12px;
}

</style>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>لوحة التحكم- <?php echo $site_name; ?></title>
    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
    <!-- Bootstrap 3.3.2 -->
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <!-- Font Awesome Icons -->
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
    <!-- Theme style -->
    <link href="dist/css/AdminLTE.min.css" rel="stylesheet" type="text/css" />
    <!-- iCheck -->
    <link href="plugins/iCheck/square/blue.css" rel="stylesheet" type="text/css" />

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
            <link rel="shortcut icon" href="favicon.ico"/>

  </head>
  <body class="login-page">
    <div class="login-box">
 <?php   if(empty($_SESSION["username"])) { ?>

      <div class="login-box-body"><img border="0" src="logo.jpg" width="100%"  ><br><br>
 
<form class="form-login" action="" method=post >          <div class="form-group has-feedback">
            <input type="text" name="username" class="form-control" placeholder="Username"/>
            <span class="glyphicon glyphicon-user form-control-feedback"></span>
          </div>
          <div class="form-group has-feedback">
            <input type="password"  name="password"  class="form-control" placeholder="Password "/>
            <span class="glyphicon glyphicon-lock form-control-feedback"></span>
          </div>
          <div class="row">
           <div class="col-lg-6">
              <button type="submit"  name="login" class="btn btn-primary btn-block btn-flat">
				تسجيل الدخول  </button>
            </div> 
            
            <div class="col-lg-6">    
                           
 
                    
            </div><!-- /.col -->
 
            
            
            <!-- /.col -->
          </div>     
             
        </form>
<div class="social-auth-links text-center"> <div class="col-lg-12">    
             <p align="center">    
                                     
            </div>
 <hr>
          
         


 
 
        </div>
        <div class="social-auth-links text-center">
          <p><font color="#FF0000"><?php   echo $error; ?></font></p>
          
         


          <p align="center">
          
         


 
           
        </div><!-- /.social-auth-links -->

        <br>
 

      </div> <?php   
} else { 
 require ("../config.php");
 $sql = "SELECT * from user_crm  WHERE username='" . $_SESSION["username"] . "' and passwoed='" . $_SESSION["passwoed"] . "'  and Activation=1";
      $result = mysqli_query($conn,$sql);
      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
header("location: login.php"); // Redirecting To Other Page

echo '<meta http-equiv="refresh" content="0;url=login.php">';
 } ?>
<!-- /.login-box-body -->
    </div><!-- /.login-box -->

    <!-- jQuery 2.1.3 -->
    <script src="plugins/jQuery/jQuery-2.1.3.min.js"></script>
    <!-- Bootstrap 3.3.2 JS -->
    <script src="bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
    <!-- iCheck -->
    <script src="plugins/iCheck/icheck.min.js" type="text/javascript"></script>
    <script>
      $(function () {
        $('input').iCheck({
          checkboxClass: 'icheckbox_square-blue',
          radioClass: 'iradio_square-blue',
          increaseArea: '20%' // optional
        });
      });
    </script>
  </body>
</html>