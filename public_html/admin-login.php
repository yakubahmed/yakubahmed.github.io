<?php  include('includes/header.php') ?>
 

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ncoiv-19 Somalia </title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
</head>
<body>
<div class='container'>
<form method='post'>
    <div class='card' style='width:50%; min-width:400px; margin: 10% auto;'>
        <h4 class='card-header'>
            <img src='images/som-logo.png' height='20'>
            LOGIN 
        </h4>
        <div class='card-body'>
          
            <div class="col-auto">
              <label class="sr-only" for="inlineFormInputGroup">Email Address</label>
              <div class="input-group mb-2">
                <div class="input-group-prepend">
                  <div class="input-group-text"> <i class='fa fa-user'></i> </div>
                </div>
                <input type="email" class="form-control" name='email' id="inlineFormInputGroup" placeholder="Email Address">
             </div>
            </div>
             <div class="col-auto">
              <label class="sr-only" for="inlineFormInputGroup">Password</label>
              <div class="input-group mb-2">
                <div class="input-group-prepend">
                  <div class="input-group-text"> <i class='fa fa-lock'></i> </div>
                </div>
                <input type="password" class="form-control" name='pwd' id="inlineFormInputGroup" placeholder="Password">
             </div>
            </div>
            <div class='col-auto'>
               <input type='submit' name='btnSubmit' class='btn btn-info' value='login'>
            </div>
        </div>
    </div>
    
</form>
    
</div>
</body>
</html>

<?php

	if(isset($_POST['btnSubmit'])){
		extract($_POST);
		$stmt = "SELECT * FROM tbl_user where email_address='$email' and password = '$pwd'";
		$result = mysqli_query($con, $stmt);
		if($row = mysqli_fetch_assoc($result)){
		    header('location: admin/');
		    $_SESSION['user_id'] = $row['user_id'];
			$_SESSION['pimage'] = $row['profile_image'];
			$_SESSION['email'] = $row['email_address'];
			$_SESSION['fname'] = $row['fullname'];
				

		
		}else{
		    echo "
		        <script>
		        Swal.fire({
                  position: 'top-end',
                  icon: 'error',
                  title: 'Invalid username or password',
                  showConfirmButton: false,
                  timer: 1500
                })
		        </script>
		    ";
		    $_SESSION['msg'] = 'Invalid  email adress or password ';
		}
	}







?>