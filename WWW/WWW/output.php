<?php

$reqid = $_GET[q];
echo "$req";

//dblogin
$mysqli = new mysqli('localhost', 'nextlav-lifead', 'IO8Ppbp6X5SepSBA', 'nextlav-life2_5');
if ($mysqli->connect_error) {
  echo $mysqli->connect_error;
  exit();
} else {
  $mysqli->set_charset("utf8");
  $sql1 = "select * from question where id = $reqid";
  $sql2 = "select * from answer where id = $reqid";

  if ($result = $mysqli->query($sql1)){
    //問題が取得できたら
    //当該問題の正解番号を取得する
    $row = $result->fetch_assoc();
    //echo $row[text];
    if ($result = $mysqli->query($sql2)){
      //回答が取得できたら
      $roww = $result->fetch_assoc();
      //echo "ans:$roww[ans]";
    }else{//問題の答えが取得できなかったら
      //echo "DBError2";

    }

  }else{//問題が取得できなかったら
    //echo "DBError1";
  }


}


// JSON形式のテキストを生成する
$json = <<< JSON_DOC
{
    "intoroTalk":[
        {
            "dataType":"$row[type]",
            "who":"Aさん",
            "content":"$roww[text]"
        },
        {
            "dataType":"img",
            "who":"Bさん",
            "content":"imagePath"
        }
    ],
    "choice":{
        "buttonList":[
            {
                "choiceContent":"選択肢１内容",
                "judge":false
            },
            {
                "choiceContent":"選択肢２内容",
                "judge":true
            }
        ],
        "html":"html tag here"
    },
    "answerTalk":[
        {
            "dataType":"talk",
            "who":"Aさん",
            "content":"セリフ"
        },
        {
            "dataType":"img",
            "who":"Bさん",
            "content":"imagePath"
        }
    ],
    "description":[
        "説明文段落１",
        "説明文段落２"
    ]
}
JSON_DOC;

// JSON用のヘッダを定義して出力
header("Content-Type: text/javascript; charset=utf-8");
echo $json;
exit();


?>
