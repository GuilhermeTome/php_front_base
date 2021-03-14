import Vue from 'vue';

require('../app');

let base = 'http://localhost:8081/informations';

let data = {
    title: 'Vue JS',
    list: []
};

window.onload = () => {
    new Vue({
        el: '#main',
        data: data,
        mounted() {
            axios.get(base)
                .then((res) => {
                    if(res.data.status) {
                        this.list = res.data.data
                    }
                })
        }
    })
}
