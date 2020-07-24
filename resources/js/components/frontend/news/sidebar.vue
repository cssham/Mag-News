<template>
    <div>
        <span id="sidebar">
            <div class="span4">
            <aside class="right-sidebar">
              <div class="widget">
                <form class="form-search">
                  <input @keyup="realSearch" placeholder="Type something" v-model="keyword"  type="text" class="input-medium search-query" >
                  <button type="submit" @click.prevent="realSearch" class="btn btn-square btn-theme">Search</button>
                </form>
              </div>
              <div class="widget">
                <h5 class="widgetheading">Categories</h5>
                <ul class="cat">
                  <li v-for="category in getAllCategoriesList" :key="category.id" ><i class="icon-angle-right"></i><router-link :to="`/categories/news/${category.id}`" href="#">{{ category.name }}</router-link><span>({{ category.posts.length }})</span></li>
                </ul>
              </div>
              <div class="widget">
                <h5 class="widgetheading">Latest News</h5>
                <ul class="recent">
                  <li v-for="(news, index) in getLatestNewsList" :key="news.id" v-if="index<5" >
                    <img :src="`storage/posts/${news.image}`" class="pull-left" alt=""  width="80px" height="50px" />
                    <h6><router-link :to="`/news/single/${news.id}`" href="#">{{news.title |shortLength(25,"...")}}</router-link></h6>
                    <p>
                      {{news.description | shortLength(80,"...") }}
                    </p>
                  </li>
                </ul>
              </div>
              <div class="widget">
                <h5 class="widgetheading">Popular tags</h5>
                <ul class="tags">
                  <li><a href="#">Person</a></li>
                  <li><a href="#">Health</a></li>
                  <li><a href="#">Technology</a></li>
                  <li><a href="#">Economics</a></li>
                </ul>
              </div>
            </aside>
          </div>
        </span>
    </div>
</template>
<script>
import _ from 'lodash'
export default {
    data() {
        return {
            keyword:''
        }
    },
mounted() {
    this.$store.dispatch('latestNewsList')
    this.$store.dispatch('allCategoriesList')
},
computed: {
    getAllCategoriesList(){
        return this.$store.getters.getAllCategories
    },
     getLatestNewsList(){
            return this.$store.getters.getLatestNews
        }
},
methods:{
    realSearch:_.debounce(function(){
        this.$store.dispatch('searchNews',this.keyword);
    },1000)
}
}
</script>
