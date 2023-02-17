<?php

session_start();
require_once 'connect.php';

$_SESSION['done'] = 'registracija ir pabeikta';


  $email = $_POST['email'] ?? null;
  $password = $_POST['password'] ?? null;
  $password_check = $_POST['password_check'] ?? null;
  $full_name = $_POST['full_name'] ?? null;
  $phone = $_POST['phone'] ?? null;

$formFields = [];

foreach ($formFields as $item) {
  if ($item === null && preg_match('test@test.lv', $item))
}

if ($email === null)
{
    $errors[] = ['email_error' => 'Email is empty'];

    $_SESSION['message'] = 'Ir tukši lauki!!!';

    header('Location:reg.php');
    echo $_SESSION['message'];
}
  if ($password === $password_check)
  {
 // $_FILES['avatar']['name'];
      $path='picture/' .time() . $_FILES['avatar']['name'] ;

      if(!move_uploaded_file($_FILES['avatar']['tmp_name'],  $path))
      {
          $_SESSION['message'] = 'Oshibka pri zagruzke soobshenija';

          header('Location:reg.php');
          echo $_SESSION['message'];
      }
      $password=md5($password);
      mysqli_query($conn,"
INSERT INTO `klients` (  `id`,`k_pasts`, `k_password`,
`k_vards_uzvards`, `k_mob_talr`, `k_atels`) 
VALUES (NULL, ' $email', '$password', ' $full_name', '$phone ', ' $path')");


      header('Location:login.php');

  }
  else
  {
     $_SESSION['message'] = 'Password is not correct';

    header('Location:reg.php');
      echo $_SESSION['message'];
  }


