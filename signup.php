<?php
  session_start();
  require_once 'connect.php';


  $email = $_POST['email'];
  $password = $_POST['password'];
  $password_check = $_POST['password_check'];
  $full_name = $_POST['full_name'];
  $phone = $_POST['phone'];
  if ($password === $password_check)
  {
      $_SESSION['message'] = 'Password  correct';
  }
  else
  {
     $_SESSION['message'] = 'Password is not correct';

    header('Location:reg.php');
      echo $_SESSION['message'];
  }
