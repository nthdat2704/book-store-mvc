<?php
/*##########Script Information#########
  # Purpose: Send mail Using PHPMailer#
  #          & Gmail SMTP Server 	  #
  # Created: 24-11-2019 			  #
  #	Author : Hafiz Haider			  #
  # Version: 1.0					  #
  # Website: www.BroExperts.com 	  #
  #####################################*/

//Include required PHPMailer files
	require 'includes/PHPMailer.php';
	require 'includes/SMTP.php';
	require 'includes/Exception.php';
//Define name spaces
	use PHPMailer\PHPMailer\PHPMailer;
	use PHPMailer\PHPMailer\SMTP;
	use PHPMailer\PHPMailer\Exception;
//Create instance of PHPMailer
	$mail = new PHPMailer();
//Set mailer to use smtp
	$mail->isSMTP();
//Define smtp host
	$mail->Host = "smtp.gmail.com";
//Enable smtp authentication
	$mail->SMTPAuth = true;
//Set smtp encryption type (ssl/tls)
	$mail->SMTPSecure = "tls";
	// set tieng viet
	$mail->CharSet = 'UTF-8';
//Port to connect smtp
	$mail->Port = "587";
//Set gmail username
	$mail->Username = "shinekawamoto@gmail.com";
//Set gmail password
	$mail->Password = "Ntd272586006";
//Email subject
	$mail->Subject = "Thông báo đơn hàng";
//Set sender email
	$mail->setFrom('shinekawamoto@gmail.com');
//Enable HTML
	$mail->isHTML(true);
//Attachment
	// $mail->addAttachment('/lab6/mvc/core/mailer/img/attachment.png');
//Email body
	$mail->Body = $content;
//Add recipient
	$mail->addAddress($email);
//Finally send email
	$mail->send();
	// if ( $mail->send() ) {
	// 	echo "Đã gửi thành công";
	// }else{
	// 	echo "Không thành công , Lỗi: "{$mail->ErrorInfo};
	// }
//Closing smtp connection
	$mail->smtpClose();
