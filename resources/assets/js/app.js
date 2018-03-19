require('./bootstrap');
window.Vue = require('vue');
import Vue from 'vue';

let PlayersNav = require('./components/PlayersNav.vue');
let PlayerDisplay = require('./components/PlayerComponent.vue');
let MainComponent = require('./components/MainComponent.vue');

let app = new Vue({
    el: '#app',
    components: {
        "vs-main":MainComponent
    },
    data(){
        return {
            "currentPlayer" : -1
        }
    }
});
app.$on('updateRequest',function(){});

global.app = app;