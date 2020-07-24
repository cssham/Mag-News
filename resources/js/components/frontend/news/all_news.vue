<template>
    <div>
        <span id="all_news">
        <!--     <section id="inner-headline">
      <div class="container">
        <div class="row">
          <div class="span4">
            <div class="inner-heading">
              <h2> Home </h2>
            </div>
          </div>
          <div class="span8">
            <ul class="breadcrumb">
              <li><a href="#"><i class="icon-home"></i></a><i class="icon-angle-right"></i></li>
              <li><a href="#">News</a><i class="icon-angle-right"></i></li>
              <li class="active">Home</li>
            </ul>
          </div>
        </div>
      </div>
    </section> -->
    <section id="content">
      <div class="container">
        <div class="row">
          <div class="span8">
            <article v-for="news in getAllNewsList" :key="news.id" >
              <div class="row">
                <div class="span8">
                  <div class="post-image">
                    <div class="post-heading">
                      <h3><a href="#">{{news.title }}</a></h3>
                    </div>
                    <img :src="`storage/posts/${news.image}`" alt="image" />
                  </div>
                  <p>
                    {{ news.description | shortLength(500,"...") }}
                  </p>
                  <div class="bottom-article">
                    <ul class="meta-post">
                      <li><i class="icon-calendar"></i><a href="#">{{ news.created_at | timeFormat }}</a></li>
                      <li><i class="icon-user"></i><a href="#"> {{ news.user.name }}</a></li>
                      <li><i class="icon-folder-open"></i><a href="#"> {{news.category.name}}</a></li>
                    </ul>
                    <router-link :to="`/news/single/${news.id}`" href="#" class="pull-right">Continue reading <i class="icon-angle-right"></i></router-link>
                  </div>
                </div>
              </div>
            </article>
            <div id="pagination">
              <span class="all">Page 1 of 3</span>
              <span class="current">1</span>
              <a href="#" class="inactive">2</a>
              <a href="#" class="inactive">3</a>
            </div>
          </div>
            <!-- sidebar -->
            <Sidebar/>
        </div>
      </div>
    </section>
        </span>
    </div>
</template>
<script>
import Sidebar from './sidebar.vue'
export default {

    components:{
        Sidebar
    },
    mounted() {
        this.$store.dispatch('newsList')
    },
    computed: {
        getAllNewsList(){
            return this.$store.getters.getAllNews
        }
    },
    methods: {
        getCategoryNews(){
            if(this.$route.params.id != null){
                    this.$store.dispatch('newsListByCategory',this.$route.params.id);
            }
            else
            {
                 this.$store.dispatch('newsList')
            }
        }
    },
    watch: {
        $route(to,from){
            this.getCategoryNews();
        }
    },
}
</script>
<style lang="stylus" scoped>

</style>
