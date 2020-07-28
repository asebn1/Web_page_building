<?php
  session_start();
  include 'config/connect.php';

  while($row = mysqli_fetch_assoc($result)) {
    $id_check = false;
    if($row['username'] === $_POST['sign_up_username']) {
      $id_check = true;
      break;
    }
  }
  if($id_check != true) {
    $sql = "INSERT INTO data (username,password) VALUES('".$_POST['sign_up_username']."', '".$_POST['sign_up_password']."')";
    $result = mysqli_query($conn, $sql);
    header('Location: http://3.34.91.16/index.php');
  }
  if($id_check == true) {
    header('Location: http://3.34.91.16/sign_up.php');
  }
  $_SESSION['id_check']=$id_check;
?>
