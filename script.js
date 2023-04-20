const { createApp } = Vue

    createApp({
        data() {
            return {
                todoList: [],
                newItem: '',
            }
        },
        methods: {
            getDataList () {
                axios.get('server.php') 
                .then(response => {
                    this.todoList = response.data;
                });
            },
            putDataInList () {
                const data = {
                    newItem: this.newItem
                };
                axios.post('server.php', data, 
                {
                    headers: {'Content-Type':'multipart/form-data'}
                }
                ).then ( (response) => {
                    this.todoList = response.data ;
                    this.newItem = '';
                    console.log(this.todoList);
                });
            }
        },
        mounted () {
            this.getDataList();
        }

    }).mount('#app')