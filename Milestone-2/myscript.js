let app = new Vue({
    el: '#app',
    data: {
    Arraydischi: [],
    Arraydischigenre : [],
    valoregenere : "",
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
        axios.get('http://localhost:8888/php-ajax-dischi/Milestone-2/indexgeneri.php')
        .then( (risposta2) => {
            // handle success
            this.Arraydischigenre = (risposta2.data) 
            console.log(risposta2.data)
            console.log(this.Arraydischigenre)
        })
        .catch(function (error) {
            // handle error
            console.log(error);
        })
    }, 

        computed:{
            filtraGeneri(){
                if(this.valoregenere == "Null") return this.Arraydischi
                    return this.Arraydischi.filter( (album) => {
                    console.log('filtra album');
                    return album.genre.includes(this.valoregenere) /* || album.author.includes(this.valoreArtisti) */ ;
                });
        }
    },
    /* methods: {
        cambioValore(event){
            this.valoregenere = event;
            console.log(this.valore);  
        },
    } */
    
    
})