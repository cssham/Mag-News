<template>
    <div>
         <section class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-12">
            <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Edit Category</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form role="form">
                <div class="card-body">
                  <div class="form-group">
                    <label for="name">Category Name</label>
                    <input type="text" class="form-control" id="name" v-model="form.name" name="name" placeholder="Enter Category Name" :class="{ 'is-invalid': form.errors.has('name') }">
                  <has-error :form="form" field="name"></has-error>
                  </div>
                  <!--
                      <div class="form-group">
                    <label for="exampleInputPassword1">Password</label>
                    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputFile">File input</label>
                    <div class="input-group">
                      <div class="custom-file">
                        <input type="file" class="custom-file-input" id="exampleInputFile">
                        <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                      </div>
                      <div class="input-group-append">
                        <span class="input-group-text" id="">Upload</span>
                      </div>
                    </div>
                  </div>
                  <div class="form-check">
                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                    <label class="form-check-label" for="exampleCheck1">Check me out</label>
                  </div>
                  -->
                </div>
                <!-- /.card-body -->

                <div class="card-footer">

                    <router-link to="/category-list" class="btn btn-danger">Back</router-link>

                  <button type="submit" class="btn btn-primary" @click.prevent="updateCategory()">Update</button>
                </div>
              </form>
            </div>
          </div>

        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    </div>
</template>
<script>
export default {
    name:"Edit",
    mounted() {
            axios.get(`admin/category/${this.$route.params.id}/edit/`).then((response)=>{
                this.form.fill(response.data.category)
            })
        },
    data() {
      return {
        // Create a new form instance
      form: new Form({
        name:'',
      })
      }
    },
    methods: {
      updateCategory(){
                this.form.put(`/admin/category/${this.$route.params.id}`).then((response) => {
                    this.$router.push('/category-list')
                    Toast.fire({
                        icon: 'success',
                        title: 'Category updated successfully'
                        })

                }).catch((err) => {

                });
            }
    },
}
</script>
<style lang="stylus" scoped>

</style>
