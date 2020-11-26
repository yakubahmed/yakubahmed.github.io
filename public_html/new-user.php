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
			<div class="user_card" style='background:darkblue;color:white;'>
				<div class="d-flex justify-content-center">
					<div class="brand_logo_container">
						<img src="images/som-logo.png" class="brand_logo" alt="Logo">
					</div>
				</div>
				<div class="d-flex justify-content-center form_container">
					<form method="post" enctype="multipart/form-data">
						<?php  print_message();?>
                        <?php 

                           
                           if(isset($_GET['key'])){
                            $key=$_GET['key'];
                               $stmt = "SELECT * FROM tbl_user WHERE token = '$key' ";
                               $result = mysqli_query($con, $stmt);
                               if(mysqli_num_rows($result) < 1){    
                                $_SESSION['msg'] = 'session is expired';
                                die();
                               }
                           }else{
                            $_SESSION['msg'] = 'session is expired';
                            die();
                           }
                        
                        ?>
                        <div class="form-group">
                            <div class="col-md-12">
                                <label for="">profile image</label>
                                <input type="file" name="pimage" id="" class="form-control" required>
                            </div>

                            <div class="col-md-12">
                                <label for="">Password</label>
                                <input type="password" name="pwd"  class="form-control" placeholder="password" required>
                            </div>
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
        $password  = $_POST['pwd'];
        $key = $_GET['key'];
		$pimage1 = $_FILES['pimage']['name'];
		$pimage1_tmp = $_FILES['pimage']['tmp_name'];
		move_uploaded_file($pimage1_tmp,"images/$pimage1");

		$stmt = "UPDATE tbl_user SET password = '$password', profile_image='$pimage1' where token = '$key' ";
		$result = mysqli_query($con, $stmt);
		if($result){
			$stmt = "UPDATE tbl_user SET token='' WHERE password='$password' ";
			$result = mysqli_query($con, $stmt);
			if($result){
				header('location: admin-login');
			}
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