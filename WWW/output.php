<?php
  $reqid = $_GET[q];

echo '

{
    "intoroTalk":[
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


';

 ?>
