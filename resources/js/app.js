
require('./bootstrap');

window.Vue = require('vue');
//import vue-router
import VueRouter from 'vue-router'
Vue.use(VueRouter)


//Vue.component('example-component', require('./components/ExampleComponent.vue').default);
Vue.component('admin-master', require('./components/admin/MasterComponent.vue').default);


import {routes} from './routes';
const router = new VueRouter({
    routes,
    mode:'hash'
})

const app = new Vue({
    el: '#app',
    router
});
