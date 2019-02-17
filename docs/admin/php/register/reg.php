<?php

$reqid = $_POST[username];
$reqdisplay = $_POST[display];
$reqpass = $_POST[pass];
$re_qpass = $_POST[repass];

if ($reqpass == $re_qpass) {//password一致確認
  echo "[debug]リクエストパスワード一致<br>";
}else{
  echo "[debug] リクエストパスワード不一致<br>";//転送実装推奨
}
$pass = password_hash($reqpass, PASSWORD_DEFAULT);

$mysqli = new mysqli('localhost', 'nextlav-lifead', '9jWHrZbmVCxOLyOt', 'nextlav-life2_5');
          if ($mysqli->connect_error) {
            echo $mysqli->connect_error;
            echo "サービスが一時的に停止しています。";
            exit();
          } else {
            $mysqli->set_charset("utf8");
            //ユーザinsert用
            $sql = "INSERT INTO `adminuser` (`userid`, `username`, `password`) VALUES ('$reqid', '$reqdisplay', '$pass')";
          }




?>
