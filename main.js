const { createApp } = Vue;

createApp({
    data(){
        return{
            apiUrl: 'server.php',
            title: 'TodoList',
            list: [],
            newTask: ''
        }
    },
    methods: {
        getApi(){
            axios.get(this.apiUrl)
            .then(response => {
                this.list = response.data
                console.log(this.list);
            })
        },
        addTask(){
            const data = {
                newTask: this.newTask
            }
            axios.post(this.apiUrl, data,{
                headers :{'Content-Type' : 'multipart/form-data'}
            })
            .then(response => {
                this.list = response.data;
                this.newTask = '';
            })
        },
    },
    mounted(){
        this.getApi();
    },

}).mount('#app');