new Vue({
    el:'#vm',
    data:{
        quesNo:1,
        json:null
    },
    methods:{
        getQuesJson:function(){
            const URL = 'https://dev1.cre-noa.me/output.php?q='+(this.quesNo*100)
            axios
                .get(URL)
                .then(response => (this.json = response.data))
        }
    },
    mounted:function(){
        this.getQuesJson()
    }
})
