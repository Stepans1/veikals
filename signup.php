<?php
  session_start();
  require_once 'connect.php';

$servername = "localhost";
$database = "veikals";
$username = "root";
$password = "";

$conn = mysqli_connect($servername, $username, $password, $database);

  $email = $_POST['email'];
  $password = $_POST['password'];
  $password_check = $_POST['password_check'];
  $full_name = $_POST['full_name'];
  $phone = $_POST['phone'];
if (empty($email and $password and $password_check and $full_name and $phone))
{
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
      $_SESSION['message'] = 'Registracija ir pabeikta';

      header('Location:login.php');
      echo $_SESSION['message'];
  }
  else
  {
     $_SESSION['message'] = 'Password is not correct';

    header('Location:reg.php');
      echo $_SESSION['message'];
  }

