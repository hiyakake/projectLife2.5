new Vue({
    el:'#vm',
    data:{
        quesNo:1, //問題進行番号
        json:null, //QuesAPI
        choiceSelect:null, //どの選択肢を選択したかを保持,
        screenSwitch:'ques' //画面遷移
    },
    methods:{
        getQuesJson:function(){
            //テストサーバーから取得
            //const URL = 'https://dev1.cre-noa.me/quesAPI.php?q='+(this.quesNo*100)
            //サンプルデータから取得
            const URL = 'api/ques1.json'
            axios
                .get(URL)
                .then(response => (this.json = response.data))
        } 
    },
    mounted:function(){
        this.getQuesJson()
    }
})