<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Welcome</title>
  </head>

  <body>
    <h4>
      로그인을 환영합니다.
      <?php
        session_start();
        $myusername = $_SESSION['myusername'];
        echo $myusername."님";
      ?>
    </h4>
    <a href="http://3.34.91.16/index.php">홈으로</a>
  </body>

</html>
