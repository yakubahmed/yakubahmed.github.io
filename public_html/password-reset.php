<?php 
session_start();
ob_start();
require('config.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ncoiv-19 Somalia </title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/custome1.css">
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
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
						<?php  print_message();?>
						<?php
							if(isset($_GET['key'])){
								$key = $_GET['key']; 
								$stmt = "SELECT * FROM tbl_user where token='$key' ";
								$result = mysqli_query($con, $stmt);
								if(mysqli_num_rows($result) < 0){
									$_SESSION['msg'] = 'Session is expired';
									die();
								}
							}
						
						?>
						<div class="input-group mb-3">
							<div class="input-group-append">
								<span class="input-group-text"><i class="fa fa-envelope"></i></span>
							</div>
                            
							<input type="text" name="password" class="form-control input_user" value="" placeholder="New password" required autocomplete='off'>
						</div>

		
					<div class="d-flex justify-content-center mt-3 login_container">
				 	    <button type="submit" name="btnSubmit" class="btn login_btn btn-block">Submit</button>
				    </div>
					</form>
				</div>

			</div>
		</div>
	</div> 
</body>
</html>

<?php
	
	if(isset($_POST['btnSubmit'])){
		$password  = $_POST['password'];
		$key = $_GET['key'];
		$stmt = "UPDATE tbl_user SET password = '$password' WHERE token = '$key' ";
		$result = mysqli_query($con, $stmt);
		if($result){
		$stmt = "UPDATE tbl_user SET token = '' WHERE password = '$password' ";
		$result = mysqli_query($con, $stmt);
		if($result){
			header('location: admin-login');
		}
		}else{
			$_SESSION['msg'] ='Failed Something is wrong please try again';
		}
	
       
	}



	function print_message(){
		if(isset($_SESSION['msg'])){
			$msg =  $_SESSION['msg'];
			echo "
			<div class='alert alert-info alert-dismissible fade show' role='alert'>
			<strong>$msg.</strong>
			<button type='button' class='close' data-dismiss='alert' aria-label='Close'>
				<span aria-hidden='true'>&times;</span>
			</button>
			</div>
			
			";

			unset($_SESSION['msg']);
		}
	}



?>