// require('./bootstrap');
import Vue from 'vue'
import 'flag-icon-css/css/flag-icon.css';
import mixin from './mixin';
import VueChatScroll from 'vue-chat-scroll'
Vue.use(VueChatScroll)
Vue.mixin(mixin);

window.Vue = require('vue').default;
window.axios =  require('axios');
Vue.component('send-message', require('./components/sendMessage.vue').default);
Vue.component('conversation', require('./components/conversation.vue').default);

const app = new Vue({
    el: '#app',
});