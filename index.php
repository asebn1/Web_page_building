<?php


  session_start();   //세션의 시작
  include 'config/connect.php';

  if($_SERVER["REQUEST_METHOD"] == "POST")
  {
    $myusername = $_POST['username'];
    $mypassword = $_POST['password'];
    $check = true;
    while($row = mysqli_fetch_assoc($result)) {

      if($row['username'] == $myusername &&
      $row['password'] == $mypassword) {
        
        $_SESSION['myusername']=$myusername;
        header('Location: http://3.34.91.16/welcome.php');
      }
      else {
        $check = false;
      }
    }
    if($check == false)
    {
      echo '<script>alert("틀린 입력입니다.")</script>';
    }
    // header('Location: http://3.34.91.16/index.php');
  }
?>

<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <title>Login Page</title>
  <link rel="stylesheet" href="http://3.34.91.16/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="http://3.34.91.16/dist/css/web_board.css">
</head>

<body class = "main">

  <div class="container">
    <!-- panel -->

    <div class="panel panel-primary">
      <div class="panel-heading">
        <div class="row">
          <div class="col-xs-6 col-md-6">
            <h3 class="panel-title">Login</h3>
          </div>
          <div class="col-xs-6 col-md-6 text-right">
          </div>
        </div>
      </div>

      <div class="panel-body">

        <form class="form-horizontal" action="" method="post">
          <div class="form-group">
            <label class="col-sm-2 control-label">Username</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" name="username" autocomplete="off" required>
            </div>
          </div>

          <div class="form-group">
            <label class="col-sm-2 control-label">Password</label>
            <div class="col-sm-10">
              <input type="password" class="form-control" name="password" required>
            </div>
          </div>

          <div class="form-group">
            <div class="col-sm-offset-2 col-sm-10">
              <button type="submit" class="btn btn-info">로그인</button>
              <a href="sign_up.php" class="btn btn-default"> 회원가입</a>
            </div>
          </div>
          
        </form>

      </div>
      <div class="panel-footer">
        BOB9-보안컨설팅-공재호
      </div>

    </div>

    <!--/panel -->
  </div>

  <script src="http://3.34.91.16/dist/js/jquery.min.js"></script>
  <script src="http://3.34.91.16/dist/js/bootstrap.min.js"></script>  
</body>

</html>
