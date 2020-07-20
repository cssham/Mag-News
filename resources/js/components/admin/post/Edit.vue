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
                <h3 class="card-title">Edit Post</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form role="form" enctype="multipart/form-data" @submit.prevent="updatePost()">
                <div class="card-body">
                    <div class="form-group">
                        <label for="category_id">Category Name</label>
                        <select name="category_id" id="category_id" class="form-control" v-model="form.category_id" :class="{ 'is-invalid': form.errors.has('category_id') }">
                            <option v-for="category in getCategoryList" :key="category.id" :value="category.id">{{  category.name  }}</option>
                        </select>
                         <has-error :form="form" field="category_id"></has-error>
                    </div>

                  <div class="form-group">
                    <label for="title">Post Title</label>
                    <input type="text" class="form-control" id="title" name="title" placeholder="Enter Post Title" v-model="form.title" :class="{ 'is-invalid': form.errors.has('title') }">
                    <has-error :form="form" field="title"></has-error>
                  </div>
                 <div class="form-group">
                      <label for="image">Image</label>
                      <input type="file" name="image" @change="changePhoto($event)" :class="{ 'is-invalid': form.errors.has('image') }" >
                      <label for="">Old Image :</label>
                       <img :src="`storage/posts/${form.image}`" alt="Removed old image" height="70px" width="70px">
                       <label for="">New Image :</label>
                       <img  :src="form.image" alt="No image selected" height="70px" width="70px">
                       <has-error :form="form" field="image"></has-error>
                  </div>

                    <div class="form-group">
                        <label for="description">Description</label>
                        <!-- <textarea class="form-control" id="long_description" name="long_description" v-model="form.long_description" :class="{ 'is-invalid': form.errors.has('long_description') }">
                        </textarea> -->
                        <v-md-editor v-model="form.description" height="400px"></v-md-editor>
                         <has-error :form="form" field="description"></has-error>
                    </div>
                </div>
                <!-- /.card-body -->
                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Update</button>
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
        name:"New",
        data() {
            return {
                form :new Form({
                    category_id:'',
                    title:'',
                    image:'',
                    description:'',
                })
            }
        },
        mounted() {
            this.$store.dispatch('categoryList');
        },
        created() {
             axios.get(`admin/post/${this.$route.params.id}/edit/`).then((response)=>{
                this.form.fill(response.data.post)
            })
        },
        computed: {
            getCategoryList(){
                return this.$store.getters.getCategory;
            }
        },
        methods: {
             changePhoto(event){
                 let file = event.target.files[0];
                 let reader = new FileReader();
                 reader.onload = event=> {
                 // The file's text will be printed here
                 this.form.image = event.target.result
                 };

                 reader.readAsDataURL(file);
            },
        updatePost(){
         this.form.put(`/admin/post/${this.$route.params.id}`).then((response)=> {
                    this.$router.push('/post-list')
                    Toast.fire({
                        icon: 'success',
                        title: 'Post updated successfully'
                        })

                }).catch((err) => {

                });
        }
        }
}
</script>
<style lang="stylus" scoped>

</style>
