<?php include("config.php"); ?>

<?php
  require_once('phpmailer/PHPMailerAutoload.php');

	   	    $form_name= mysqli_real_escape_string($conn,htmlspecialchars($_POST['form_name'], ENT_QUOTES, "utf-8")); 
	       $form_email= mysqli_real_escape_string($conn,htmlspecialchars($_POST['form_email'], ENT_QUOTES, "utf-8")); 
	       $form_sex= mysqli_real_escape_string($conn,htmlspecialchars($_POST['form_sex'], ENT_QUOTES, "utf-8")); 
	        $form_message= mysqli_real_escape_string($conn,htmlspecialchars($_POST['form_message'], ENT_QUOTES, "utf-8")); 
	   	    $form_post= mysqli_real_escape_string($conn,htmlspecialchars($_POST['form_post'], ENT_QUOTES, "utf-8")); 
 


	   $message = "\nName    : ".$form_name.'<br>';  
	   $message .= "\Email : ".$form_email.'<br>';                   
	   $message .= "\nGender   : ".$form_sex.'<br>'; 
	   $message .= "\nForm post   : ".$form_post.'<br>';  
	   $message .= $form_message.'<br>';
	   $message .= "\n<center>����� ��� ������ �� ���� ���������� ������� ������ �������<br>�� ������ ������ ���� ��� ���� ����<br>����� ��� ���� ����� ��������</center>"  ;  
	    $message .= "<center><img src=https://www.naht.sa/logo.png></center>" ;
	   $to = 'info@nahtonline.com';               
	   $toName = 'info@nahtonline.com';               
				 
	   $headers  = 'MIME-Version: 1.0' . "\r\n";
	   $headers .= 'Content-type: text/html; charset=utf-8' . "\r\n";
	   $subject = '����� ������� �� ���� ���������� ������� ������ �������';
   
	   // Additional headers
	   $headers .= 'To: '.$toname.' <'.$to.'>' . "\r\n";
	   $headers .= 'From: '.$form_name.' <'.$form_email.'>' . "\r\n";
  

									   
	   @mail($to, $subject, $message, $headers);  
	    $sql="insert into eqt set  name='$name ',mobile='$phone',mail='$email',eqt='$message1',dates=CURDATE(),address='$company '";
if(mysqli_query($conn,$sql))
{
}

	   $message = "<div class='success'>�� ����� ������� �����</div>";                                                

?>