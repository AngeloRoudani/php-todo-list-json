const { createApp } = Vue

    createApp({
        data() {
            return {
                todoList: [],
                newItem: '',
                activeItem: 0
            }
        },
        methods: {

            //chiamata ajax per caricamento dati da "API"
            
            getDataList () {
                axios.get('server.php') 
                .then(response => {
                    this.todoList = response.data;
                });
            },

            //chiamata ajax per aggiunta elemento

            putDataInList () {

                
                const data = {
                    newItem: this.newItem
                }

                axios.post('server.php', data, 
                {

                    headers: {'Content-Type':'multipart/form-data'}

                }).then ( (response) => {
                    this.todoList = response.data ;
                    this.newItem = '';
                });
            },

            eraseText (index) {

                console.log(index)

                const data = {

                    textLine: index
                }

                axios.post('server.php', data, 
                {

                    headers: {'Content-Type':'multipart/form-data'}

                }).then ( (response) => {
                    this.todoList = response.data ;
                });
            },
 
            //eliminazione elemento dalla lista
            deleteData (index) {

                console.log(index);

                const data = {
                    oldTask: index
                }

                axios.post('server.php', data, 
                {

                    headers: {'Content-Type':'multipart/form-data'}

                }).then ( (response) => {
                    this.todoList = response.data ;
                });
                console.log(this.todoList)
            },
        },
        mounted () {
            this.getDataList();
        }

    }).mount('#app')