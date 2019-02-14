new Vue({
    el:'#vm',
    data:{
        quesNo:1,
        json:null
    },
    methods:{
        getQuesJson:function(){
            //テストサーバーから取得
            //const URL = 'https://dev1.cre-noa.me/output.php?q='+(this.quesNo*100)
            //サンプルデータから取得
            const URL = 'js/ques1.json'
            axios
                .get(URL)
                .then(response => (this.json = response.data))
        } 
    },
    mounted:function(){
        this.getQuesJson()
    }
})