new Vue({
    el:'#vm',
    data:{
        quesNo:1, //問題進行番号
        quesRank:'1', //問題の難易度を、ユーザーのランクを管理 A=0 B=1 C=2
        json:null, //QuesAPI
        choiceSelect:null, //どの選択肢を選択したかを保持,
        screenSwitch:'ques', //画面遷移
        quesLog:{ //選択履歴保持
            quesID:[],
            result:[],
            quesRank:[]
        }
    },
    methods:{
        getQuesJson:function(){
            //テストサーバーから取得
            //const URL = 'https://dev1.cre-noa.me/quesAPI.php?r='+(this.quesRank)
            //サンプルデータから取得
            const URL = `api/ques${this.quesNo}.json`
            //const URL = 'api/ques2.json'
            axios
                .get(URL)
                .then(response => (this.json = response.data))
        },
        selectJudge:function(elementAttr){
            if(this.choiceSelect == null) this.choiceSelect = elementAttr
        },
        nextQues:function(){
            //次の問題のランクを決定
            if(this.choiceSelect == true) this.quesRank--
            else this.quesRank++
            if(this.quesRank > 2) this.quesRank = 2
            if(this.quesRank < 0) this.quesRank = 0
            //結果格納
            this.quesLog.quesID[this.quesNo-1] = this.json.quesID
            this.quesLog.result[this.quesNo-1] = this.choiceSelect
            this.quesLog.quesRank[this.quesNo-1] = this.quesRank
            //次の問題への手続き
            this.quesNo++
            this.choiceSelect = null
            window.scrollTo(0,0)
            this.getQuesJson()
        }
    },
    mounted:function(){
        this.getQuesJson()
    }
})