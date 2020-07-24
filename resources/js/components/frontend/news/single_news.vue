<template>
    <div>
        <span id="single_news">
             <section id="content">
      <div class="container">
        <div class="row">
          <div class="span8">
            <article>
              <div class="row">
                <div class="span8">
                  <div class="post-image">
                    <div class="post-heading">
                      <h3><a href="#">{{ news.title }}</a></h3>
                    </div>
                    <img :src="`storage/posts/${news.image}`" alt="" />
                  </div>
                  <p>
                    {{ news.description }}
                  </p>

                  <div class="bottom-article">
                    <ul class="meta-post">
                      <li><i class="icon-user"></i><a href="#"> {{news.user.name}}</a></li>
                      <li><i class="icon-folder-open"></i><a href="#"> {{news.category.name}}</a></li>
                      <li><i class="icon-tags"></i><a href="#">Person </a></li>
                    </ul>
                  </div>
                </div>
              </div>
            </article>
            <!-- author info -->

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
import Sidebar from './sidebar'
export default {
    components:{
        Sidebar
    },
    mounted() {
            this.singleNews()
    },
    computed: {
        news(){
            return this.$store.getters.getSingleNews
        }
    },
    methods: {
            singleNews(){
                 this.$store.dispatch('singleNewsAction',this.$route.params.id)
            }
    },
    watch: {
        $route(to,from){
            this.singleNews();
        }
    },
}
</script>
