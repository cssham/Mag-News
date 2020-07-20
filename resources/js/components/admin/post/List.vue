<template>
    <div>
        <section class="content">
      <div class="row">
        <div class="col-12">

          <!-- /.card -->

          <div class="card">
            <div class="card-header">
              <h3 class="card-title">Post List</h3>

                <div class="card-tools">
                  <button class="btn btn-primary">
                 <router-link to="/post-new" style="color:#ffff;">Add Post</router-link>
                  </button>
                </div>
            </div>

            <!-- /.card-header -->
            <div class="card-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>S/L</th>
                  <th>Title</th>
                  <th>Category</th>
                  <th>User</th>
                  <th>Image</th>
                  <th>Description</th>
                  <th>Action</th>
                </tr>
                </thead>
                <tbody>
                <tr v-for="(post, index) in getPostList" :key="post.id">
                  <td> {{ index+1 }} </td>
                  <td> {{ post.title  |shortLength(20,"...") }} </td>
                  <td> {{ post.category.name }} </td>
                  <td> {{ post.user.name }}</td>
                  <td> <img :src="imagePath(post.image)" :alt="post.title" height="50px" width="50px"> </td>
                  <td> {{ post.description | shortLength(25,"...")}} </td>
                  <td>
                     <router-link :to="`/post-edit/${post.id}`" class="btn btn-primary btn-sm" ><i class="fas fa-edit"></i></router-link>
                        <a href="" class="btn btn-danger btn-sm" @click.prevent="deletePost(post.id)" ><i class="fas fa-trash-alt"></i></a>
                  </td>
                </tr>
                </tbody>
                <tfoot>
                <tr>
                   <th>S/L</th>
                  <th>Title</th>
                  <th>Category</th>
                  <th>User</th>
                  <th>Image</th>
                  <th>Description</th>
                  <th>Action</th>
                </tr>
                </tfoot>
              </table>
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
    </div>
</template>
<script>
export default {
    name:"List",
    mounted() {
        this.$store.dispatch("postList")
    },
    computed: {
        getPostList(){
            return this.$store.getters.getPost
        }
    },
    methods: {
        imagePath(image){
            return "/storage/posts/"+image;
        },
        deletePost(id){
                axios.delete('/admin/post/'+id).then(()=>{
                    this.$store.dispatch("postList");
                    Toast.fire({
                    icon: "success",
                    title: "Post deleted successfully"
                });
                })
            }
    },
}
</script>
<style lang="stylus" scoped>

</style>

