import Vue from 'vue'
import Vuex from 'vuex'
import Axios from 'axios';
Vue.use(Vuex)

const store = new Vuex.Store({
    state: {
        category:[],
        post:[],
    },
    getters:{
        getCategory(state){
            return state.category;
        },
        getPost(state){
            return state.post;
        }
    },
    actions:{
        categoryList(context){
            axios.get('/admin/category').then((response)=>{
                context.commit('categories',response.data.categories)
            }).catch((err)=>{

            });
        },
        postList(context){
            axios.get('/admin/post').then((response)=>{
                context.commit('posts',response.data.posts)
            }).catch((err)=>{

            });
        }
    },
    mutations: {
        categories(state,data){
            return state.category=data;
        },
        posts(state,data){
            return state.post=data;
        }
    }
  })
export default store;
