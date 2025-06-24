<?php
require_once 'phpmailer/PHPMailerAutoload.php';
require_once 'Db.php';
class Allemails extends Dbconnection{
    private $sent;

    public function sendRegEmail($to_receiver_name,$to_receiver_email,$password){
	$site_domain = 'www.rocketenglish.ru'; //from: site domain name
	$site_name = 'RocketEnglish'; //from: sender name
	$sitesupport_email = "support@rocketenglish.ru"; //from: sender email
	$receiver_name = $to_receiver_name; //to: receiver name
	$receiver_email = $to_receiver_email; //to: receiver email

	$title = "Welcome to ".$site_name." - Your Journey to Fluent English Starts Now! 🚀";
    $mail = new PHPMailer;
	$mail->isSMTP();
	//$mail->SMTPDebug = 2;
	$mail->Host='www.rocketenglish.ru';
	$mail->Port=587;
	$mail->SMTPAuth=true;
	$mail->SMTPSecure='tls';
	$mail->Username=$sitesupport_email;
	$mail->Password='rockeT100%';

	$mail->setFrom($sitesupport_email,$site_name);
	$mail->addAddress($receiver_email);
	$mail->addReplyTo($sitesupport_email,$site_name);

	$mail->isHTML(true);
	$mail->Subject=$title;

	$mail->Body='<body style="background-color: #f3f5f7; margin: 0 !important; padding: 0 !important;">
            
	<!-- HIDDEN PREHEADER TEXT -->
	<div style="display: none; font-size: 1px; color: #fefefe; line-height: 1px; font-family: "Poppins", sans-serif; max-height: 0px; max-width: 0px; opacity: 0; overflow: hidden;">
		
	</div>
	
	<table border="0" cellpadding="0" cellspacing="0" width="100%">
		<!-- LOGO -->
		<tr>
			<td align="center" style="padding: 0px 10px 0px 10px;">
				<table border="0" cellpadding="0" cellspacing="0" width="100%" style="max-width: 600px;">
					<tr>
					<td bgcolor="#ffffff" align="center" valign="top" style="padding: 40px 10px 10px 10px;">
					  <a href="#" target="_blank">
					  <img alt="logo" src="favicon_io/favicon-16x16.png" width="155" height="29"  border="0">
					  </a>
					</td>
				  </tr>
				</table>
			</td>
		</tr>
		<!-- HERO -->
		
		<tr>
			<td align="center" style="padding: 0px 10px 0px 10px;">
				<table border="0" cellpadding="0" cellspacing="0" width="100%" style="max-width: 600px;">
					<tr>
						<td bgcolor="#ffffff" align="left" valign="top" style="padding: 20px 20px 10px 10px; border-radius: 4px 4px 0px 0px; color: #111111; font-family: "Poppins", sans-serif; font-size: 48px; font-weight: 400; letter-spacing: 2px; line-height: 48px;">
						  <p style="font-size: 14px; font-weight: 600; margin: 10px 13px;">Hi '.$receiver_name.',</p>
						</td>
					</tr>
				</table>
			</td>
		</tr>
		<!-- COPY BLOCK -->
		<tr>
			<td align="center" style="padding: 0px 10px 0px 10px;">
				<table border="0" cellpadding="0" cellspacing="0" width="100%" style="max-width: 600px;">
				  <!-- COPY -->
				  <tr>
					<td bgcolor="#ffffff" align="left" style="padding: 10px 10px 20px 10px; color: #666666; font-family: "Poppins", sans-serif; font-size: 16px; font-weight: 400; line-height: 25px;">
							  <p style="margin:10px 13px; font-size: 12px;">Welcome aboard! 🎉 We’re so excited to have you as part of the RocketEnglish family. You’ve taken a huge step towards mastering English faster and more efficiently.</p>
					</td>
				  </tr>

                   <!-- COPY HEADING -->
				  <tr>
					<td bgcolor="#ffffff" align="left" style="padding: 10px 10px 40px 10px; color: #111111; font-family: "Poppins", sans-serif; font-size: 14px; font-weight: 400; line-height: 25px;">
					  <h2 style="font-size: 12px; font-weight: 400; margin: 10px 13px;">Here’s what you can expect:</h2>
					</td>
				  </tr>
				  <!-- COPY -->

				  <tr>
					<td bgcolor="#ffffff" align="left" style="padding: 10px 10px 20px 10px; color: #666666; font-family: "Poppins", sans-serif; font-size: 16px; font-weight: 400; line-height: 25px;">
					  <p style="margin:10px 13px; font-size: 12px;"><li><b>Simple and effective lessons<b> designed to get you speaking quickly.<li></p>
					  <p style="margin:10px 13px; font-size: 12px;"><li><b>Proven techniques<b> to help you learn faster, with everyday conversations.<li></p>
                      <p style="margin:10px 13px; font-size: 12px;"><li><b>Practice exercises<b> that will give you the confidence to use English in real-life situations.<li></p>

					</td>
				  </tr>

				  <!-- COPY HEADING -->
				  <tr>
					<td bgcolor="#ffffff" align="left" style="padding: 10px 10px 40px 10px; color: #111111; font-family: "Poppins", sans-serif; font-size: 14px; font-weight: 400; line-height: 25px;">
					  <h2 style="font-size: 12px; font-weight: 400; margin: 10px 13px;">🚀 Ready to get started? Log in now and dive into your first lesson: [Link to First Lesson]</h2>
					</td>
				  </tr>
				  <!-- COPY -->
				  <tr>
					<td bgcolor="#ffffff" align="left" style="padding: 10px 10px 20px 10px; color: #666666; font-family: "Poppins", sans-serif; font-size: 16px; font-weight: 400; line-height: 25px;">
					  <p style="margin: 10px 13px; font-size: 12px;">Email: '. $to_receiver_email .'</p>
					  <p style="margin: 10px 13px; font-size: 12px;">Password: '.$password.'</p>
					</td>
				  </tr>
				  <!-- COPY -->
				  <tr>
					<td bgcolor="#ffffff" align="left" style="padding: 10px 10px 20px 10px; color: #666666; font-family: "Poppins", sans-serif; font-size: 16px; font-weight: 400; line-height: 25px;">
					<p style="margin:10px 13px; font-size: 12px;">We’re confident you’ll love your learning experience with '.$site_name.'. Let’s make your English fluency journey an exciting one!</p>
					<p style="margin:10px 13px; font-size: 12px;">All the best,</p>
					</td>
				  </tr>
				 
				  <!-- COPY -->
				  <tr>
					<td bgcolor="#ffffff" align="left" style="padding: 10px 10px 40px 10px; border-radius: 0px 0px 4px 4px; color: #666666; font-family: "Poppins", sans-serif; font-size: 16px; font-weight: 400; line-height: 25px;">
					  <p style="margin:10px 13px; font-size: 12px;">'.$site_name.' Team</p>
					</td>
				  </tr>
				</table>
			</td>
		</tr>
		<!-- FOOTER -->
		<tr>
			<td align="center" style="padding: 0px 10px 50px 10px;">
		
			<table border="0" cellpadding="0" cellspacing="0" width="100%" style="max-width: 600px;">
		   
			<!-- PERMISSION REMINDER -->
			<tr>
			  <td bgcolor="#ffffff" align="left" style="padding: 10px 10px 10px 10px; color: #aaaaaa; font-family: "Poppins", sans-serif; font-size: 12px; font-weight: 400; line-height: 18px;">
				<p style="margin:20px 13px; font-size: 12px;">You received this email because you signed up with '.$site_domain.'. If it looks weird, view it in your browser ['.$site_domain.'].</p>
			  </td>
			</tr>
			
		<!-- COPYRIGHT -->
			<tr>
			  <td align="center" style="padding: 50px 10px 10px 10px; color: #333333; font-family: "Poppins", sans-serif; font-size: 12px; font-weight: 400; line-height: 18px;">
				<p style="margin: 70px 0 20px; font-size: 12px;">Copyright © '.$site_domain.'. All rights reserved.</p>
			  </td>
			</tr>
		  </table>
			</td>
		</tr>
	</table>
	</body>';
	if($mail->send()){
		return true;
	}
    }

	public function sendAdminRegEmail($fullname,$email){
	$site_domain = 'www.rocketenglish.ru'; //site domain name
	$site_name = 'Rocket English'; //from: sender name 
	$site_email = 'support@rocketenglish.ru'; //to: admin email
	$sitesupport_email = "support@rocketenglish.ru"; //from: sender email
	$receiver_name = "Admin"; //to: receiver name
	$receiver_email = $site_email; //to: receiver email

	$title = 'New Registration';

	$mail = new PHPMailer;
	$mail->isSMTP();
	// //$mail->SMTPDebug = 2;
	$mail->Host='www.rocketenglish.ru';
	$mail->Port=587;
	$mail->SMTPAuth=true;
	$mail->SMTPSecure='tls';
	$mail->Username=$sitesupport_email;
	$mail->Password='rockeT100%';

	$mail->setFrom($sitesupport_email,$site_name);
	$mail->addAddress($receiver_email);
	$mail->addReplyTo($sitesupport_email,$site_name);

	$mail->isHTML(true);
	$mail->Subject=$title;

	$mail->Body='<body style="background-color: #f3f5f7; margin: 0 !important; padding: 0 !important;">
            
	<!-- HIDDEN PREHEADER TEXT -->
	<div style="display: none; font-size: 1px; color: #fefefe; line-height: 1px; font-family: "Poppins", sans-serif; max-height: 0px; max-width: 0px; opacity: 0; overflow: hidden;">
		
	</div>
	
	<table border="0" cellpadding="0" cellspacing="0" width="100%">
		<!-- LOGO -->
		<tr>
			<td align="center" style="padding: 0px 10px 0px 10px;">
				<table border="0" cellpadding="0" cellspacing="0" width="100%" style="max-width: 600px;">
					<tr>
					<td bgcolor="#ffffff" align="center" valign="top" style="padding: 40px 10px 10px 10px;">
					  <a href="#" target="_blank">
					  <img alt="logo" src="https://www.rocketenglish.ru/assets/media/rockenglish-logo.png" width="155" height="29" border="0">
					  </a>
					</td>
				  </tr>
				</table>
			</td>
		</tr>
		<!-- HERO -->
		
		<tr>
			<td align="center" style="padding: 0px 10px 0px 10px;">
				<table border="0" cellpadding="0" cellspacing="0" width="100%" style="max-width: 600px;">
					<tr>
						<td bgcolor="#ffffff" align="left" valign="top" style="padding: 20px 20px 10px 10px; border-radius: 4px 4px 0px 0px; color: #111111; font-family: "Poppins", sans-serif; font-size: 48px; font-weight: 400; letter-spacing: 2px; line-height: 48px;">
						  <p style="font-size: 14px; font-weight: 600; margin: 10px 13px;">Dear '.$receiver_name.',</p>
						</td>
					</tr>
				</table>
			</td>
		</tr>
		<!-- COPY BLOCK -->
		<tr>
			<td align="center" style="padding: 0px 10px 0px 10px;">
				<table border="0" cellpadding="0" cellspacing="0" width="100%" style="max-width: 600px;">
				  <!-- COPY -->
				  <tr>
					<td bgcolor="#ffffff" align="left" style="padding: 10px 10px 20px 10px; color: #666666; font-family: "Poppins", sans-serif; font-size: 16px; font-weight: 400; line-height: 25px;">
							  <p style="margin:10px 13px; font-size: 12px;">A new user just registered on your website.</p>
					</td>
				  </tr>
				  <!-- COPY HEADING -->
				  <tr>
					<td bgcolor="#ffffff" align="left" style="padding: 10px 10px 40px 10px; color: #111111; font-family: "Poppins", sans-serif; font-size: 14px; font-weight: 400; line-height: 25px;">
					  <h2 style="font-size: 12px; font-weight: 400; margin: 10px 13px;">The user Details are as follow:</h2>
					</td>
				  </tr>
				  <!-- COPY -->
				  <tr>
					<td bgcolor="#ffffff" align="left" style="padding: 10px 10px 20px 10px; color: #666666; font-family: "Poppins", sans-serif; font-size: 16px; font-weight: 400; line-height: 25px;">
					  <p style="margin: 10px 13px; font-size: 12px;">Fullname: '. $fullname .'</p>
					  <p style="margin: 10px 13px; font-size: 12px;">Email: '.$email.'</p>
					</td>
				  </tr>
				  <!-- COPY -->
				  <tr>
					<td bgcolor="#ffffff" align="left" style="padding: 10px 10px 20px 10px; color: #666666; font-family: "Poppins", sans-serif; font-size: 16px; font-weight: 400; line-height: 25px;">
					  <p style="margin:10px 13px; font-size: 12px;">Warm regards,</p>
					</td>
				  </tr>
				</table>
			</td>
		</tr>
	</table>
	</body>';
	if($mail->send()){
		return true;
	}
	}

	public function sendPaymentEmail($to_receiver_name,$to_receiver_email,$plan,$amount,$ref){
		$site_domain = 'www.rocketenglish.ru'; //from: site domain name
		$site_name = 'RocketEnglish'; //from: sender name
		$sitesupport_email = "support@rocketenglish.ru"; //from: sender email
		$receiver_name = $to_receiver_name; //to: receiver name
		$receiver_email = $to_receiver_email; //to: receiver email
	
		$title = "Payment Successful!";
		$mail = new PHPMailer;
		$mail->isSMTP();
		//$mail->SMTPDebug = 2;
		$mail->Host='www.rocketenglish.ru';
		$mail->Port=587;
		$mail->SMTPAuth=true;
		$mail->SMTPSecure='tls';
		$mail->Username=$sitesupport_email;
		$mail->Password='rockeT100%';
	
		$mail->setFrom($sitesupport_email,$site_name);
		$mail->addAddress($receiver_email);
		$mail->addReplyTo($sitesupport_email,$site_name);
	
		$mail->isHTML(true);
		$mail->Subject=$title;
	
		$mail->Body='<body style="background-color: #f3f5f7; margin: 0 !important; padding: 0 !important;">
				
		<!-- HIDDEN PREHEADER TEXT -->
		<div style="display: none; font-size: 1px; color: #fefefe; line-height: 1px; font-family: "Poppins", sans-serif; max-height: 0px; max-width: 0px; opacity: 0; overflow: hidden;">
			
		</div>
		
		<table border="0" cellpadding="0" cellspacing="0" width="100%">
			<!-- LOGO -->
			<tr>
				<td align="center" style="padding: 0px 10px 0px 10px;">
					<table border="0" cellpadding="0" cellspacing="0" width="100%" style="max-width: 600px;">
						<tr>
						<td bgcolor="#ffffff" align="center" valign="top" style="padding: 40px 10px 10px 10px;">
						  <a href="#" target="_blank">
						  <img alt="logo" src="https://www.rocketenglish.ru/assets/media/rockenglish-logo.png" width="155" height="29"  border="0">
						  </a>
						</td>
					  </tr>
					</table>
				</td>
			</tr>
			<!-- HERO -->
			
			<tr>
				<td align="center" style="padding: 0px 10px 0px 10px;">
					<table border="0" cellpadding="0" cellspacing="0" width="100%" style="max-width: 600px;">
						<tr>
							<td bgcolor="#ffffff" align="left" valign="top" style="padding: 20px 20px 10px 10px; border-radius: 4px 4px 0px 0px; color: #111111; font-family: "Poppins", sans-serif; font-size: 48px; font-weight: 400; letter-spacing: 2px; line-height: 48px;">
							  <p style="font-size: 14px; font-weight: 600; margin: 10px 13px;">Hi '.$receiver_name.',</p>
							</td>
						</tr>
					</table>
				</td>
			</tr>
			<!-- COPY BLOCK -->
			<tr>
				<td align="center" style="padding: 0px 10px 0px 10px;">
					<table border="0" cellpadding="0" cellspacing="0" width="100%" style="max-width: 600px;">
					  <!-- COPY -->
					  <tr>
						<td bgcolor="#ffffff" align="left" style="padding: 10px 10px 20px 10px; color: #666666; font-family: "Poppins", sans-serif; font-size: 16px; font-weight: 400; line-height: 25px;">
								  <p style="margin:10px 13px; font-size: 12px;"><b>Thank you for your payment!</b></p>
						</td>
					  </tr>
	
					  <tr>
						<td bgcolor="#ffffff" align="left" style="padding: 10px 10px 20px 10px; color: #666666; font-family: "Poppins", sans-serif; font-size: 16px; font-weight: 400; line-height: 25px;">
						  <p style="margin:10px 13px; font-size: 12px;"><b>Plan: <b> '.$plan.'</p>
						  <p style="margin:10px 13px; font-size: 12px;"><b>Amount: <b> '.$amount.'</p>
						  <p style="margin:10px 13px; font-size: 12px;"><b>Payment Reference: <b> '.$ref.'</p>
	
						</td>
					  </tr>
	
					  <!-- COPY HEADING -->
					  <tr>
						<td bgcolor="#ffffff" align="left" style="padding: 10px 10px 40px 10px; color: #111111; font-family: "Poppins", sans-serif; font-size: 14px; font-weight: 400; line-height: 25px;">
						  <h2 style="font-size: 12px; font-weight: 400; margin: 10px 13px;">Your journey to mastering English has just begun! If you have any questions, feel free to contact our support team.</h2>
						</td>
					  </tr>
					  <!-- COPY -->
					  <tr>
						<td bgcolor="#ffffff" align="left" style="padding: 10px 10px 20px 10px; color: #666666; font-family: "Poppins", sans-serif; font-size: 16px; font-weight: 400; line-height: 25px;">
						<p style="margin:10px 13px; font-size: 12px;">Happy learning,</p>
						</td>
					  </tr>
					 
					  <!-- COPY -->
					  <tr>
						<td bgcolor="#ffffff" align="left" style="padding: 10px 10px 40px 10px; border-radius: 0px 0px 4px 4px; color: #666666; font-family: "Poppins", sans-serif; font-size: 16px; font-weight: 400; line-height: 25px;">
						  <p style="margin:10px 13px; font-size: 12px;">The '.$site_name.' Team</p>
						</td>
					  </tr>
					</table>
				</td>
			</tr>
			<!-- FOOTER -->
			<tr>
				<td align="center" style="padding: 0px 10px 50px 10px;">
			
				<table border="0" cellpadding="0" cellspacing="0" width="100%" style="max-width: 600px;">

			<!-- COPYRIGHT -->
				<tr>
				  <td align="center" style="padding: 50px 10px 10px 10px; color: #333333; font-family: "Poppins", sans-serif; font-size: 12px; font-weight: 400; line-height: 18px;">
					<p style="margin: 70px 0 20px; font-size: 12px;">Copyright © '.$site_domain.'. All rights reserved.</p>
				  </td>
				</tr>
			  </table>
				</td>
			</tr>
		</table>
		</body>';
		if($mail->send()){
			return true;
		}
		}

}