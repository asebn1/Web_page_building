<?php
  session_start();

  if(isset($_SESSION['id_check']))
  {
    $id_check = $_SESSION['id_check'];
    if($id_check == true) {
      echo '<script>alert("중복된 아이디입니다.")</script>';
      session_unset();
    }
  }
?>

<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <title>Sign Up Page</title>
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
              <h3 class="panel-title">회원가입</h3>
            </div>
            <div class="col-xs-6 col-md-6 text-right">
            </div>
          </div>
        </div>

        <div class="panel-body">

          <form class="form-horizontal" action="process.php" method="post">
            <div class="form-group">
              <label class="col-sm-2 control-label">Username</label>
              <div class="col-sm-10">
                <input type="text" class="form-control" name="sign_up_username" autocomplete="off" required>
              </div>
            </div>

            <div class="form-group">
              <label class="col-sm-2 control-label">Password</label>
              <div class="col-sm-10">
                <input type="password" class="form-control" name="sign_up_password" required>
              </div>
            </div>

            <div class="form-group">
              <div class="col-sm-offset-2 col-sm-10">
                <button type="submit" class="btn btn-success">회원가입</button>
                <a href="index.php" class="btn btn-default">뒤로가기</a>
              </div>
            </div>
          </form>

        </div>
      <div class="panel-footer">
        BOB9-보안컨설팅-공재호
      </div>
      </div>
    </div>

    <!--/panel -->
  </div>

  <script src="http://3.34.91.16/dist/js/jquery.min.js"></script>
  <script src="http://3.34.91.16/dist/js/bootstrap.min.js"></script>  
</body>

</html>
