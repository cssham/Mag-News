<template>
    <div>
        <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <!-- /.card -->

            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Categories List</h3>
                <div class="card-tools">
                    <button class="btn btn-primary">
                        <router-link to="/category-new" style="color:#fff">Add Category</router-link>
                    </button>
                </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>S/L</th>
                    <th>Name</th>
                    <th>Created At</th>
                    <th>Updated At</th>
                    <th>Action</th>
                  </tr>
                  </thead>
                  <tbody>
                  <tr v-for="(category, index) in getCategoryList" :key="index">
                    <td>{{ index+1}}</td>
                    <td>{{ category.name }}</td>
                    <td>{{ category.created_at | timeFormat}}</td>
                    <td>{{ category.updated_at | timeFormat}}</td>
                    <td>
                        <router-link :to="`/category-edit/${category.id}`" class="btn btn-primary btn-sm" ><i class="fas fa-edit"></i></router-link>
                        <a href="" class="btn btn-danger btn-sm" @click.prevent="deleteCategory(category.id)" ><i class="fas fa-trash-alt"></i></a>
                    </td>
                  </tr>
                  </tbody>
                  <tfoot>
                  <tr>
                    <th>S/L</th>
                    <th>Name</th>
                    <th>Created At</th>
                    <th>Updated At</th>
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
      </div>
      <!-- /.container-fluid -->
    </section>
    </div>
</template>
<script>
export default {
    name:"List",
    mounted() {
        this.$store.dispatch('categoryList')
    },
    computed: {
        getCategoryList(){
            return this.$store.getters.getCategory
        }
    },
    methods:{
        deleteCategory(id){
                axios.delete('/admin/category/'+id).then(()=>{
                    this.$store.dispatch("categoryList");
                    Toast.fire({
                    icon: "success",
                    title: "Category deleted successfully"
                });
                })
            }
        }
}
</script>
<style lang="stylus" scoped>

</style>
