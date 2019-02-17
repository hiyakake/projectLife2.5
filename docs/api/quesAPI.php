<?php
$reqid = $_GET[q];//問題番号の取得

//json template

//dblogin
$mysqli = new mysqli('localhost', 'nextlav-lifead', '9jWHrZbmVCxOLyOt', 'nextlav-life2_5');
          if ($mysqli->connect_error) {
            echo $mysqli->connect_error;
            echo "サービスが一時的に停止しています。";
            exit();
          } else {
            $mysqli->set_charset("utf8");
            $question_sql = "select * from question where id = $reqid";
            $answer_sql = "select * from answer where id = $reqid";

            //dbから当該問題情報を取得する
            if ($result = $mysqli->query($question_sql)) {
              $questions = $result->fetch_assoc(); // dbデータ格納
              echo "$questions[text]";

              //問題が取得できたら、当該説明文,回答等を取得する
              if ($result = $mysqli->query($answer_sql)) {
                $answers = $result->fetch_assoc();
              echo "$answers[ans]";
              }

              /*
              これ以降、JSONファイルをtemplateから取得するとして、変数をechoしながらJSONを作成する。

              */

            }else{
              //問題情報が取得できない場合に出力する
              echo "id,または遷移が不正です。";
            }


          }


header('Content-Type: application/json; charset=utf-8');
//JSONは下のechoで出力する。インデントは不可
echo $maindata;

 ?>
