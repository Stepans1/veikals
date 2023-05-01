<?php
    session_start();
    //require_once 'connect.php';
//namespace test;

    $servername = "localhost";
    $database = "veikals";
    $username = "root";
    $password = "";
    $_SESSION['done'] = 'registracija ir pabeikta';

    $conn = mysqli_connect($servername, $username, $password, $database);

    $errors = [];
$check=" ";
    $email = empty($_POST['email']) ? null : $_POST['email'];
    $password = empty($_POST['password']) ? null : $_POST['password'];
    $password_check = empty($_POST['password_check']) ? null : $_POST['password_check'];
    $full_name = empty($_POST['full_name']) ? null : $_POST['full_name'];
    $phone = empty($_POST['phone']) ? null : $_POST['phone'];
    trim($email);



   // if ($email === null) {
   //     $errors['name'] = 'Name is empty';
  //  }

$empty=mysqli_query($conn,"SELECT `k_pasts` FROM `klients` where `k_pasts` like '%$email'");

$stmt_id="SELECT `k_id` FROM `klients` where `k_pasts` like '%$email'";
global $stm_id;
$stm_id=$conn->query($stmt_id);
if (mysqli_num_rows($empty)>0)
{
    $_SESSION['message'] = 'Šis pasts ir aiznemts.';
    header('Location:reg.php');
exit();

}
$formFields = [$email,$phone,$password,$full_name];
$bool=true;
  $errors = [];
  foreach ($formFields as $field) {
      if ($field === null) {
          $bool=false;
          $_SESSION['message'] = 'Some fields are empty.';
          header('Location:reg.php');
          break;
      }
  }
  //проверка вписанных данных
if (strlen($password)<8)
{
    $_SESSION['message'] = 'Parolē jābut minimums 8 simvoli';

    header('Location:reg.php');
    exit;
}
if (preg_match('/[^\d\.,]/', $phone)) { /* если есть лишний символ, то true, иначе false */
    $_SESSION['message'] = 'Mobilais numurs  var saturet tikai ciparus';
    header('Location:reg.php');
    exit;
}
if (strpos($full_name,$check)!==false)
{

}
else{
    $_SESSION['message'] = 'Ievadiet Vārdu UN Uzvārdu';

    header('Location:reg.php');
    exit;
}

//  end


  if ($password === $password_check && !empty($_POST['password'] && !empty($_POST['phone']) && !empty($_POST['email']) && !empty($_POST['full_name'])))
  {
 $_FILES['avatar']['name'];
      $path='picture/' .time() . $_FILES['avatar']['name'] ;


     // $password=md5($password);
      mysqli_query($conn,"
INSERT INTO `klients` (  `k_id`,`k_pasts`, `k_parole`,
`k_full_name`, `k_talrunis`, `k_atels`,`k_loma`)
VALUES (NULL, ' $email', '$password', ' $full_name', '$phone ', ' $path',0)");

//      mysqli_close($conn);
      header('Location:reg.php');

  }
  else
  {
     $_SESSION['message'] = 'Password is not correct or Some fields are empty.';

    header('Location:reg.php');
      echo $_SESSION['message'];
  }





