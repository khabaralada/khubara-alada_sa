<?php

require_once('phpmailer/PHPMailerAutoload.php');

$toemails = array();

$toemails[] = array(
	'email' => 'ahmed_mohammed148@hotmail.com', // Your Email Address
	'name' => 'Masterly Notion' // Your Name
);

// Form Processing Messages
$message_success = 'We have <strong>successfully</strong> received your Message and will get Back to you as soon as possible.';

$mail = new PHPMailer();
$mail->isSMTP();
//$email->Host = localhost;// Try your mail host address
$mail->Host = "smtp.office365.com";
$mail->Port = 587;
$mail->SMTPAuth = true;
$mail->SMTPSecure = true;
$mail->Username = "etickets@danabay.com";
$mail->Password = "123@123.com";
// If you intend you use SMTP, add your SMTP Code after this Line

 

		$name = isset( $_POST['cf-name'] ) ? $_POST['cf-name'] : '';
		$email = isset( $_POST['cf-email'] ) ? $_POST['cf-email'] : '';
		$subject = isset( $_POST['cf-subject'] ) ? $_POST['cf-subject'] : '';
		$message = isset( $_POST['cf-message'] ) ? $_POST['cf-message'] : '';

		$subject = isset($subject) ? $subject : 'New Message From Contact Form';

		$botcheck = $_POST['cf-botcheck'];

 

			$mail->CharSet = 'UTF-8';
			$mail->SetFrom( $email , $name );
			$mail->AddReplyTo( $email , $name );
			foreach( $toemails as $toemail ) {
				$mail->AddAddress( $toemail['email'] , $toemail['name'] );
			}
			$mail->Subject = $subject;

			$name = isset($name) ? "Name: $name<br><br>" : '';
			$email = isset($email) ? "Email: $email<br><br>" : '';
			$message = isset($message) ? "Message: $message<br><br>" : '';

			$referrer = $_SERVER['HTTP_REFERER'] ? '<br><br><br>This Form was submitted from: ' . $_SERVER['HTTP_REFERER'] : '';

			$body = "$name $email $message $referrer";

			$mail->MsgHTML( $body );
			$sendEmail = $mail->Send();

			if( $sendEmail == true ):
				echo '{ "alert": "success", "message": "' . $message_success . '" }';
			else:
				echo '{ "alert": "error", "message": "Email <strong>could not</strong> be sent due to some Unexpected Error. Please Try Again later.<br /><br /><strong>Reason:</strong><br />' . $mail->ErrorInfo . '" }';
			endif;
		 
	 
 

?>