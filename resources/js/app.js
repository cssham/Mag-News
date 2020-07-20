
require('./bootstrap');

window.Vue = require('vue');

//import vuex
import store from './store/index'

//import vue-router
import VueRouter from 'vue-router'
Vue.use(VueRouter)

//import v-form
import { Form, HasError, AlertError } from 'vform'
window.Form=Form; //for using globally
Vue.component(HasError.name, HasError)
Vue.component(AlertError.name, AlertError)

//import moment.js
import {filter} from './filter'

//import markdown editor
import VueMarkdownEditor from '@kangc/v-md-editor';
import '@kangc/v-md-editor/lib/style/base-editor.css';
import vuepressTheme from '@kangc/v-md-editor/lib/theme/vuepress.js';

VueMarkdownEditor.use(vuepressTheme);

Vue.use(VueMarkdownEditor);

//import sweet alert2
import Swal from 'sweetalert2'
window.Swal = Swal;
const Toast = Swal.mixin({
    toast: true,
    position: 'top-end',
    showConfirmButton: false,
    timer: 3000,
    timerProgressBar: true,
    onOpen: (toast) => {
      toast.addEventListener('mouseenter', Swal.stopTimer)
      toast.addEventListener('mouseleave', Swal.resumeTimer)
    }
  })
window.Toast = Toast;
//Vue.component('example-component', require('./components/ExampleComponent.vue').default);
Vue.component('admin-master', require('./components/admin/MasterComponent.vue').default);


import {routes} from './routes';
const router = new VueRouter({
    routes,
    mode:'hash'
})

const app = new Vue({
    el: '#app',
    router,
    store
});
