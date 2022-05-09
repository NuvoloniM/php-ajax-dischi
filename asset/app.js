var app = new Vue({
    el: '#app',
    data: {
        discArray: [],
    },
    created() {
        axios.get('http://localhost/php-ajax-dischi/APi/dischi.php')
                    .then((res) =>{
                        res.data.forEach(element => {
                            this.discArray.push(element);
                        });
                    })
    }
  })