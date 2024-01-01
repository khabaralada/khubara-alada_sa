<?php
error_reporting(0);
include('session.php'); 
include('font.php'); 
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
  
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>ارسال بريد الكتروني  </title>

    <script src="https://www.google.com/recaptcha/enterprise.js?render=6LeVoWocAAAAAGvJd8tIFPw8WBZ9Wf6kwnHO03Og"></script>
<script>
grecaptcha.enterprise.ready(function() {
    grecaptcha.enterprise.execute('6LeVoWocAAAAAGvJd8tIFPw8WBZ9Wf6kwnHO03Og', {action: 'login'}).then(function(token) {
       ...
    });
});
</script><script src='https://www.google.com/recaptcha/api.js'></script>



<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<link rel="shortcut icon" href="favicon.ico"/>
<script type="text/javascript">
function framePrint(whichFrame){
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
<h1><small>ارسال بريد الكتروني       

</small></h1>
</section>

 

 
<section class="content" dir=rtl>
<div class="box box-info">
<div class="box-body">

                 
                   
                </div><br>
                <div class="box-body">

 <form role="form" action="" method="post">
                    <!-- text input -->
                     
                    
                     <div class="row">
 
                    
                    <div class="form-group col-lg-12">
                      <label><i class="fa fa-star"></i>عدد المرسل لهم  :  </label>
<?php
$result=mysqli_query($conn,"select count(*) as co from email  ");
while($row=mysqli_fetch_array($result))
{
echo $row['co']; } ?>
                    </div>
                    <div class="form-group col-lg-12">
                      <label><i class="fa fa-star"></i>عنوان الرسالة</label>
                     <input  name="address" size="20"   required       class="form-control"    >
 

                    </div>

                    
                    <div class="form-group col-xs-12">
                      <label><i class="fa fa-star"></i>الرسالة</label>
                      <textarea  name="msg"  required="required"  class="form-control" rows="5"    ></textarea>
                                            <div class="g-recaptcha" data-sitekey="6LeVoWocAAAAAGvJd8tIFPw8WBZ9Wf6kwnHO03Og" align="center"></div>

                    </div>
 
                    <div class="form-group col-xs-12">
                    <input type="submit" value="ارسال" name="send"  class="btn btn-primary" style="float: left">  <br>                  
                    </div>
                    
                    </div>

 
                  </form> 
                  
                  
                    <!-- text input -->
                     
                    
                     
                    
 

           

                    <!-- input states -->
                     
                     
                    
                     
                    
                    
 

 
 <p>&nbsp;</p>
 
 
                </div><!-- /.box-body -->
              </div>
                  </div>
</div>
</section>


</div><!-- /.content-wrapper -->
<?php include('footer.php'); ?>
    </div><!-- ./wrapper -->
  </body>
</html>
<?php
  require_once('../include/phpmailer/PHPMailerAutoload.php');


 

 
 if(isset($_POST['send'])) {
 
       if(isset($_POST['g-recaptcha-response'])){
          $captcha=$_POST['g-recaptcha-response'];
        }
        if(!$captcha){
          echo '<h2>Please check the the captcha form.<br>You must choose I am not a robot<br>يجب اختيار أنا لست روبوتًا</h2>';
          exit;
        }
        $secretKey = "6LeVoWocAAAAAKdiH51caRWbwmn0RxDGUlANDA9a";
        $ip = $_SERVER['REMOTE_ADDR'];
        $response=file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret=".$secretKey."&response=".$captcha."&remoteip=".$ip);
        $responseKeys = json_decode($response,true);
         /* if(intval($responseKeys["success"]) !== 1) {
          echo '<h2>You are spammer ! Get the @$%K out</h2>';
        } else { */

 
 
 $from= mysqli_real_escape_string($conn,$_POST['from']); 
 $address= mysqli_real_escape_string($conn,$_POST['address']); 
 $msg= mysqli_real_escape_string($conn,$_POST['msg']); 
 

 
 
$result=mysqli_query($conn,"select* from email  ");
while($row=mysqli_fetch_array($result))
{
$to=$row['email'];
$mail=$row['email'];
$name=$row['name'];

 
 	    $message .= "\n<center>".$msg.'</center><br>'; 
	    $message .= "\n<center>".<?php echo $site_name; ?>."<br>نتمنى لكم دوام الصحة والعافية</center>"  ;  
	    $message .= "<br><center><img src=".<?php echo $site_url; ?>."/logo.png></center>" ;
				 
				 
	   $headers  = 'MIME-Version: 1.0' . "\r\n";
	   $headers .= 'Content-type: text/html; charset=utf-8' . "\r\n";
	   $subject = $address;
   
	   // Additional headers
	   $name1=$site_name;
	   


 
	   $headers .= 'To: '.$name.' <'.$mail.'>' . "\r\n";
	   $headers .= 'From:'.$name1.' <'.$site_email.'>' . "\r\n";  

	    mail($to, $subject, $message, $headers);  
 
 
 
 echo '<script>
function myFunction() {
document.getElementById("snackbar2").style.visibility = "hidden";
}
 document.getElementById("snackbar2").style.visibility = "visible";
 window.setTimeout("hideMsg()", 1000); </script>';
?><meta http-equiv="refresh" content="0;url=<?php echo( $self ); ?>"><?php

 
}

 }
  //}

?>