<?php session_start();
ob_start();
include('config.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ncoiv-19 Somalia </title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/custome1.css">
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
</head>
<body>
<div class="container h-100">
		<div class="d-flex justify-content-center h-100">
			<div class="user_card">
				<div class="d-flex justify-content-center">
					<div class="brand_logo_container">
						<img src="images/som-logo.png" class="brand_logo" alt="Logo">
					</div>
				</div>
				<div class="d-flex justify-content-center form_container">
					<form method="post">
					<?php disp_msg();?>
						<div class="input-group mb-3">
							<div class="input-group-append">
								<span class="input-group-text"><i class="fa fa-envelope"></i></span>
							</div>
							<input type="email" name="email" class="form-control input_user" value="" placeholder="Email Address">

                        </div>
			

					    <div class="d-flex justify-content-center mt-3 login_container">
				 	        <button type="submit" name="button" class="btn login_btn btn-block">Submit</button>
				        </div>
					</form>
				</div>
		
				<div class="mt-4">
					
					<div class="d-flex justify-content-center links">
						<a href="admin-login"> <p class="text-light">I remember my password?</p> </a>
					</div>
				</div>
			</div>
		</div>
	</div> 
</body>
</html>

<?php 

if(isset($_POST['button'])){
	$email = $_POST['email'];

	$stmt = "SELECT * FROM tbl_user where `email_address` = '$email' ";
	$result_q =mysqli_query($con, $stmt);
	if($result_q){

		$str=rand(); 
		$code = md5($str) . $email; 
		
	   // $row = mysqli_fetch_assoc($result_q);

		$stmt = "UPDATE  tbl_user SET token = '$code' Where email_address = '$email' ";
		$result_q =mysqli_query($con, $stmt);
		if($result_q){
			require 'PHPMailerAutoload.php';
			
			$mail = new PHPMailer;


			//$mail->SMTPDebug = 4;                               // Enable verbose debug output

			$mail->isSMTP();                                      // Set mailer to use SMTP
			$mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
			$mail->SMTPAuth = true;                               // Enable SMTP authentication
			$mail->Username = "yaaqa91@gmail.com";                 // SMTP username
			$mail->Password = "Me.Yakub@2019.0.1.1";                           // SMTP password
			$mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
			$mail->Port = 587;                                    // TCP port to connect to

			$mail->setFrom('noreplay@covid.so', 'COVIC-10 Somalia');
			$mail->addAddress($email, 'YakubAhmed');     // Add a recipient
			//$mail->addAddress('ellen@example.com');               // Name is optional
			$mail->addReplyTo('yaaqa91@gmail.com', 'Yakub');


			//$mail->addCC('cc@example.com');
			//$mail->addBCC('bcc@example.com');

			//$mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
			//$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name
			$mail->isHTML(true);                                  // Set email format to HTML

			$mail->Subject = 'Password Reset';
			$mail->Body    = "
				
				<h1> Please click the following link to complete your password reset process</h1>
				<br>
				<a href='http://localhost/ncovic-19/password-reset?key=$code'>Reset password</a>
			";
			if(!$mail->send()) {
				$_SESSION['msg'] = "Failed to send reset email please try again";

				echo 'Mailer Error: ' . $mail->ErrorInfo;
			} else {
				$_SESSION['msg'] = "We send you reset password link to your email";
			}			
			 
				
		
		   


		}


	}else{
		$_SESSION['mail'] =  $email;
		$_SESSION['msg'] = "the email that you have entered is not found";
	}
}
function disp_msg(){
	if(isset($_SESSION['msg'])){
		$msg =  $_SESSION['msg'];
		echo "<div class='alert alert-warning animated--grow-in'>
		<button type='button' class='close' data-dismiss='alert' aria-label='Close'>
		<span aria-hidden='true'>&times;</span>
		</button> $msg </div>";
		unset($_SESSION['msg']);
	}

}

?>