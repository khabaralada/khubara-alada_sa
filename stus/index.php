<?php  
// Configure timeout to 15 minutes
//$timeout = 60×60×12;
$timeout = 60000*600000*24;

// Set the maxlifetime of session
ini_set( "session.gc_maxlifetime", $timeout );

// Also set the session cookie timeout
ini_set( "session.cookie_lifetime", $timeout );

session_start(); // Starting Session
$error=''; // Variable To Store Error Message
require ("conn.php");

if (isset($_POST['login'])) {
if (empty($_POST['username']) || empty($_POST['password'])) {
$error = "ادخل اسم المستخدم وكلمة المرور";
}
else
{

 
 $username = mysqli_real_escape_string($conn,htmlspecialchars($_POST['username'], ENT_QUOTES, "utf-8"));
 $password = mysqli_real_escape_string($conn,htmlspecialchars($_POST['password'], ENT_QUOTES, "utf-8")); 
 $login_type= mysqli_real_escape_string($conn,htmlspecialchars($_POST['login_type'], ENT_QUOTES, "utf-8")); 

if($login_type==1){

//*************************************
  $password = md5($password);
$query = "select * from user where  username='$username' and password='$password'";
$result = mysqli_query($conn,$query);
$rows = mysqli_num_rows($result );
if ($rows== 1) {
while($row=mysqli_fetch_array($result))
{

$_SESSION['user_ID']=mysqli_real_escape_string($conn,htmlspecialchars($row['ID'], ENT_QUOTES, "utf-8")); // Initializing Session
$_SESSION['username']=mysqli_real_escape_string($conn,htmlspecialchars($username, ENT_QUOTES, "utf-8")); // Initializing Session
$_SESSION['password']=mysqli_real_escape_string($conn,htmlspecialchars($password, ENT_QUOTES, "utf-8")); // Initializing Session
$_SESSION['Branches']=mysqli_real_escape_string($conn,htmlspecialchars($row['Branches'], ENT_QUOTES, "utf-8")); // Initializing Session
$_SESSION['email']=mysqli_real_escape_string($conn,htmlspecialchars($row['email'], ENT_QUOTES, "utf-8")); // Initializing Session
$_SESSION['name']=mysqli_real_escape_string($conn,htmlspecialchars($row['name'], ENT_QUOTES, "utf-8")); // Initializing Session
$_SESSION['updates']=mysqli_real_escape_string($conn,htmlspecialchars($row['updates'], ENT_QUOTES, "utf-8")); // Initializing Session
$_SESSION['mobile']=mysqli_real_escape_string($conn,htmlspecialchars($row['mobile'], ENT_QUOTES, "utf-8")); // Initializing Session
$_SESSION['image']=mysqli_real_escape_string($conn,htmlspecialchars($row['image'], ENT_QUOTES, "utf-8")); // Initializing Session


$_SESSION['acount_type']=mysqli_real_escape_string($conn,htmlspecialchars($row['acount_type'], ENT_QUOTES, "utf-8")); // Initializing Session
$_SESSION['login_type']=mysqli_real_escape_string($conn,htmlspecialchars($_POST['login_type'], ENT_QUOTES, "utf-8")); // Initializing Session
if($row[go]==0)
header("location: updatePW.php"); // Redirecting To Other Page
else
header("location: login.php"); // Redirecting To Other Page
}
} else {
$error = "خطأ باسم المستخدم او كلمة المرور";
}
//*************************************

}
else
{
//*************************************
$query = "select * from student where  iqama='$username' and mobile='$password'";
$result = mysqli_query($conn,$query);
$rows = mysqli_num_rows($result );
if ($rows== 1) {
while($row=mysqli_fetch_array($result))
{

$_SESSION['user_ID']=mysqli_real_escape_string($conn,htmlspecialchars($row['stu_id'], ENT_QUOTES, "utf-8")); // Initializing Session
$_SESSION['username']=mysqli_real_escape_string($conn,htmlspecialchars($username, ENT_QUOTES, "utf-8")); // Initializing Session
$_SESSION['password']=mysqli_real_escape_string($conn,htmlspecialchars($password, ENT_QUOTES, "utf-8")); // Initializing Session
$_SESSION['Branches']=mysqli_real_escape_string($conn,htmlspecialchars($row['Branches'], ENT_QUOTES, "utf-8")); // Initializing Session
$_SESSION['email']=mysqli_real_escape_string($conn,htmlspecialchars($row['email'], ENT_QUOTES, "utf-8")); // Initializing Session
$_SESSION['mobile']=mysqli_real_escape_string($conn,htmlspecialchars($row['mobile'], ENT_QUOTES, "utf-8")); // Initializing Session
$_SESSION['name']=mysqli_real_escape_string($conn,htmlspecialchars($row['stu_name_ar'], ENT_QUOTES, "utf-8")); // Initializing Session
$_SESSION['updates']=mysqli_real_escape_string($conn,htmlspecialchars($row['updates'], ENT_QUOTES, "utf-8")); // Initializing Session
$_SESSION['login_type']=0; // Initializing Session


$_SESSION['acount_type']=6; // Initializing Session
header("location: display_stu.php"); // Redirecting To Other Page
}
} else {
$error = "خطأ باسم المستخدم او كلمة المرور";
}
//*************************************
}


 
}
}
 
 

?> <!DOCTYPE html>
<html lang="en">
  <head>
  <style>
  
  </style>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	
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


<title>البرنامج الأكاديمي</title>
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

      <div class="login-box-body"><img border="0" src="<? echo $branches_logo; ?>" width="100%"  ><br><br>
 
<form class="form-login" action="" method=post >          <div class="form-group has-feedback">
            <input type="text" name="username" required="required" class="form-control" placeholder="ID No. & Username"/>
            <span class="glyphicon glyphicon-user form-control-feedback"></span>
          </div>
          <div class="form-group has-feedback">
            <input type="password"  name="password"  required="required"  class="form-control" placeholder="Password "/>
            <span class="glyphicon glyphicon-lock form-control-feedback"></span>
          </div>
          
          <div class="form-group has-user">
 
            <select name="login_type"  class="form-control" required="required"  placeholder="Password "/>
            <option></option>
            <option value=2>Student طالب</option>
            <option value=1>Other غير ذلك</option>
            </select>
            <span class="glyphicon glyphicon-lock form-control-feedback"></span>
          </div>
          
          
          <div class="row">
            <div class="col-xs-8">    
              <div class="checkbox icheck">
                <label>
                  <input type="checkbox"> Remember Me
                </label>
              </div>                        
            </div><!-- /.col -->
            <div class="col-xs-4">
              <button type="submit"  name="login" class="btn btn-primary btn-block btn-flat">
				Accept  </button>
            </div><!-- /.col -->
          </div>
        </form>

        <div class="social-auth-links text-center">
          <?php   echo $error; ?></p>
          
         


         
        </div><!-- /.social-auth-links -->

       <br>
 

      </div> <?php   
} else { 
 require ("conn.php");
 
 
 

 $sql = "SELECT * FROM user  WHERE username='" . $_SESSION["username"] . "' and passwoed='" . $_SESSION["passwoed"] . "'";
      $result = mysqli_query($conn,$sql);
      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
 
echo '<meta http-equiv="refresh" content="0;url=login.php">';

 



 } 
 
 
 
 
 ?>
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