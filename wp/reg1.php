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
<title>                           تسجيل عميل جديد


</title>
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
<h1><small>                           تسجيل عميل جديد

</small></h1>
</section>

 



 
<section class="content" dir=rtl>
<div class="box box-info">
<div class="box-body">


 
 

 
 
 
                
                
                   <form id="reservation_form" name="reservation_form" class="reservation-form mt-20" method="post" action="" >
                <div class="row">
                  <div class="col-sm-12">
                    <div class="form-group mb-20">
                      <input placeholder="الاسم" id="reservation_name" name="fullname" required="" class="form-control" aria-required="true" type="text">
                    </div>
                  </div>
                  <div class="col-sm-6">
                    <div class="form-group mb-20">
                      <input placeholder="الهوية الوطنية" pattern="[0-9]{10,10}"   title="الحقل يجب ان يحتوي علي رقم فقط ويحتوي علي 10 ارقام"  id="reservation_iqama" name="iqama" class="form-control" required="" aria-required="true" type="text">
                    </div>
                  </div>
                  
                  <div class="col-sm-6">
                    <div class="form-group mb-20">
                      <input placeholder="الجوال" id="reservation_phone"  pattern="[0]{1}[5]{1}[0-9]{8}"   title="الحقل يجب ان يحتوي علي رقم فقط ويحتوي علي 10 ارقام يبدء 05xxxxxxxx"   name="phone" class="form-control" required="" aria-required="true" type="text">
                    </div>
                  </div>
                  
                  
                  <div class="col-sm-12">
                    <div class="form-group mb-20">
                      <input placeholder="البريد الالكتروني" id="reservation_email" name="email" class="form-control" required="" aria-required="true" type="email">
                    </div>
                  </div>
                  
                  <div class="col-sm-6">
                      <div class="styled-select">
                        <select id="person_select" name="qualification" class="form-control" required="">
                          <option value="">المؤهل</option>
										<option>دكتوراه</option> 
										<option>ماجستير</option> 
										<option>جامعي</option> 
										<option>دبلوم متوسط</option> 
										<option>ثانوى</option> 
										<option>متوسط</option> 
										<option>ابتدائي فأقل</option> 

                        </select>
                  </div>
                  </div>
                  
<div class="col-sm-6">
<div class="form-group mb-20">
                      <input placeholder="الجنسية" id="nat" name="nat" class="form-control" required="" aria-required="true" type="text">
                    </div>
                  </div>



                  <div class="col-sm-12">
                    <div class="form-group mb-20">
                      <div class="styled-select"><label>  الدورة التدريبية</label>
                        <select id="person_select" name="cors" class="form-control" required="">
                          <option></option>
<?php
$result=mysqli_query($conn,"select* from subjects,cors
 where cors.cors_ID=subjects.cors_ID and  show_reg=1 ");
while($row=mysqli_fetch_array($result))
{

?>
                          <option value="<?php echo $row['ID']; ?>"><?php echo $row['cors_name']; ?></option>
 <?php } ?>
                        </select>
                      </div>
                    </div>
                  </div>
                  
                  <div class="col-sm-12">
                    <div class="form-group">
                      <textarea placeholder="ملاحظات" rows="3" class="form-control required" name="message" id="form_message" aria-required="true"></textarea>
 

                    </div>
                  </div>
                  
                  
                  
                  <div class="col-sm-12">
                    <div class="form-group mb-0 mt-10">
                      <input name="form_botcheck" class="form-control" value="" type="hidden">
                      <button type="submit"  name="contact" class="btn btn-primary" style="float: left">تسجيل</button>
                    </div>
                  </div>
                </div>
              </form>
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
  require_once('../include/phpmailer/PHPMailerAutoload.php');

   if(isset($_POST['contact'])){
   
 

	   	    $name = mysqli_real_escape_string($conn,htmlspecialchars($_POST['fullname'], ENT_QUOTES, "utf-8")); 
	       $phone= mysqli_real_escape_string($conn,htmlspecialchars($_POST['phone'], ENT_QUOTES, "utf-8")); 
	       $cors = mysqli_real_escape_string($conn,htmlspecialchars($_POST['cors'], ENT_QUOTES, "utf-8")); 
	        $message1= mysqli_real_escape_string($conn,htmlspecialchars($_POST['message'], ENT_QUOTES, "utf-8")); 
	   	    $company= mysqli_real_escape_string($conn,htmlspecialchars($_POST['company'], ENT_QUOTES, "utf-8")); 
	   	    $email= mysqli_real_escape_string($conn,htmlspecialchars($_POST['email'], ENT_QUOTES, "utf-8")); 
	   	    $iqama= mysqli_real_escape_string($conn,htmlspecialchars($_POST['iqama'], ENT_QUOTES, "utf-8")); 
	   	    $nat= mysqli_real_escape_string($conn,htmlspecialchars($_POST['nat'], ENT_QUOTES, "utf-8")); 
	   	    $qualification= mysqli_real_escape_string($conn,htmlspecialchars($_POST['qualification'], ENT_QUOTES, "utf-8")); 


$query = "select * from reg_cors where iqama='$iqama' and  address='$cors'";

$result = mysqli_query($conn,$query);
$rows = mysqli_num_rows($result );
if($rows > 0 )
{
echo '<script>
function myFunction() {
document.getElementById("snackbar4").style.visibility = "hidden";
}
 document.getElementById("snackbar4").style.visibility = "visible";
 window.setTimeout("hideMsg()", 1000); </script>';
?><meta http-equiv="refresh" content="2;url=<?php echo( $self ); ?>"><?php
}
else
{

$result=mysqli_query($conn,"select* from subjects,cors where cors.cors_ID=subjects.cors_ID AND cors.ID='$cors'");
while($row=mysqli_fetch_array($result))
{
$cors1=$row['cors_name'];
}
 
 
	   $message = "\nالاسم    : ".$name.'<br>';  
	   $message .= "\nالجوال   : ".$phone.'<br>';  
	   $message .= "\n   : ".$cors1.'<br>';  
	   $message .= "\nالبريد الالكتروني   : ".$email.'<br>'; 
	   $message .= "\nالهوية الوطنية   : ".$iqama.'<br>'; 
	   $message .= "\nالجنسية   : ".$nat.'<br>'; 
	   $message .= "\nالمؤهل: ".$qualification.'<br>'; 
 
	   $message .= $message1.'<br>';
	   $message .= "\n<center>نشكرك على تواصلك مع ".$site_name."<br>تم استلام طلبك  وسوف يتم الرد عليك<br>نتمنى لكم دوام الصحة والعافية</center>"  ;  
	    $message .= "<center><img src=".$site_url."/logo.png></center>" ;
	   $to = $site_email;               
				 
	   $headers  = 'MIME-Version: 1.0' . "\r\n";
	   $headers .= 'Content-type: text/html; charset=utf-8' . "\r\n";
	   $subject = 'طلب الالتحاق بدورة جديدة';
   
	   // Additional headers
	   	   $name1=$site_name;

	   $headers .= 'To: '.$name.' <'.$email.'>' . "\r\n";
	    $headers .= 'From:'.$name1.' <'.$site_email.'>' . "\r\n";   

									   
	   @mail($to, $subject, $message, $headers);  
	    $sql="insert into reg_cors set  name='$name',mobile='$phone',eqt='$message1',dates=CURDATE(),address='$cors',mail='$email',
	    iqama='$iqama',nat='$nat',qualification='$qualification'";
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

$query11 = "SELECT count(user_ID),ID  from user_crm left JOIN user_cors on user_crm.ID=user_cors.user_ID
where  acount_type=2  and Activation=1 GROUP by ID  ORDER by count(user_ID) ASC limit 1";
$result11 = mysqli_query($conn,$query11);
while($row11=mysqli_fetch_array($result11))
{
$user_ID=$row11['ID'];
 
 
  date_default_timezone_set('asia/riyadh');
  $time=date('H:i:s');




$sql="insert into user_cors set  cors_ID='$last_id',user_ID='$_SESSION[user_ID]',time='$time',date=CURDATE()";
if(mysqli_query($conn,$sql))
{
}}
	    $message = "";
                                                
   }
   }
 

?>