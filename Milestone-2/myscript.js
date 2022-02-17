let app = new Vue({
    el: '#app',
    data: {
    Arraydischi: []
    },

    mounted:function () {
        axios.get('http://localhost:8888/php-ajax-dischi/Milestone-2/index.php')
        .then( (risposta) => {
            // handle success
            this.Arraydischi = (risposta.data)
            console.log(risposta)
            console.log(this.Arraydischi)
        })
        .catch(function (error) {
            // handle error
            console.log(error);
        })
        
    }, 

        methods:{
            creaEmail: function(){
            console.log("ciao")
            }   
        }
    
})