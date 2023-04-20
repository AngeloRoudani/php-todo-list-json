const { createApp } = Vue

    createApp({
        data() {
            return {
                todoList: [],
                addQuest: '',
            }
        },
        methods: {
            getDataList () {
                axios.get('server.php') 
                .then(response => {
                    this.todoList = response.data;
                    console.log(this.todoList);
                });
            },
            putDataInList () {
                const data = {
                    newItem: this.addQuest
                };
                axios.post('server.php', data, 
                {
                    header: {'Content-Type': 'multipart/form-data'}
                }
            ).then ( response => {
                this.todoList = response.data ;
                this.addQuest = '';
            })
            }
        },
        mounted () {
            this.getDataList();
        }

    }).mount('#app')