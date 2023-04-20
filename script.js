const { createApp } = Vue

    createApp({
        data() {
            return {
                todoList: []
            }
        },
        methods: {
            getDataList () {
                axios.get('server.php') 
                .then(response => {
                    this.todoList = response.data;
                    console.log(this.todoList);
                });
            }
        },
        mounted () {
            this.getDataList();
        }
        
    }).mount('#app')