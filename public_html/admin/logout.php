<?php 

  session_start();

  unset($_SESSION['user_id']);
  unset($_SESSION['fname']);
  unset($_SESSION['email']);
  unset($_SESSION['pimage']);
  session_destroy();
  header('location: ../admin-login');


?>