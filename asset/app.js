var app = new Vue({
    el: '#app',
    data: {
        discArray: [],
        selected: '',
    },
    created() {
        axios.get('http://localhost/php-ajax-dischi/APi/dischi.php')
                    .then((res) =>{
                        res.data.forEach(element => {
                            this.discArray.push(element);
                        });
                    })
    },
    methods: {
        filterMusic(){
            if( this.selected == ""){
                return this.discArray;    
            } else {
                return this.discArray.filter( (elem) => {
                    return elem.genre.includes(this.selected);
                } )
            }
        }
    }
  })