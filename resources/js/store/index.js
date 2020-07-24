import Vue from 'vue'
import Vuex from 'vuex'
import Axios from 'axios';
Vue.use(Vuex)

const store = new Vuex.Store({
    state: {
        category:[],
        post:[],
        news_all:[],
        a_news:[],
        all_categories:[],
        latest_news:[]
    },
    getters:{
        getCategory(state){
            return state.category;
        },
        getPost(state){
            return state.post;
        },
        getAllNews(state){
            return state.news_all;
        },
        getSingleNews(state){
            return state.a_news;
        },
        getAllCategories(state){
            return state.all_categories;
        },
        getLatestNews(state){
            return state.latest_news;
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
        },
        newsList(context){
            axios.get('/news/all').then((response)=>{
                context.commit('all_news',response.data.all_news)
            }).catch((err)=>{

            });
        },
        singleNewsAction(context,payload){
            axios.get('/single/news/'+payload).then((response)=>{
                context.commit('single_news',response.data.single_news)
            }).catch((err)=>{

            });
        },
        allCategoriesList(context){
            axios.get('/categories/all').then((response)=>{
                context.commit('all_category',response.data.categories)
            }).catch((err)=>{

            });
        },
        newsListByCategory(context,payload){
            axios.get('/categories/news/all/'+payload).then((response)=>{
                context.commit('all_news_by_category',response.data.all_news_by_category)
            }).catch((err)=>{

            });
        },
        searchNews(context,payload){
            axios.get('/search?s='+payload).then((response)=>{
                context.commit('news_by_search',response.data.news_by_search)
            }).catch((err)=>{

            });
        },
        latestNewsList(context){
            axios.get('/news/latest').then((response)=>{
                context.commit('all_latest_news',response.data.all_latest_news)
            }).catch((err)=>{

            });
        }
    },
    mutations: {
        categories(state,data){
            return state.category = data;
        },
        posts(state,data){
            return state.post = data;
        },
        all_news(state,data){
            return state.news_all = data;
        },
        single_news(state,data){
            return state.a_news = data;
        },
        all_category(state,data){
            return state.all_categories=data;
        },
        all_news_by_category(state,data){
            return state.news_all = data;
        },
        news_by_search(state,data){
            return state.news_all = data;
        },
        all_latest_news(state,data){
            return state.latest_news =data;
        }
    }
  })
export default store;
