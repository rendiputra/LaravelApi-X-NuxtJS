<template>
  <b-container fluid="md" class="mt-5 mb-5">
    <b-row>
        <b-col md="12">
          <b-card class="shadow-md border-0 rounded-lg">
            <h5>Data Posts</h5>
            <hr>
            <b-button :to="{name: 'post-create'}" variant="primary" class="mb-3">Tambah</b-button>
            <b-table striped bordered hover :items="posts" :fields="fields" show-empty>
              <template v-slot:cell(actions)="row">
                <b-button :to="{name: 'post-edit-id', params: {id: row.item.id}}" variant="warning" size="sm">Edit</b-button>
              </template>
            </b-table>
          </b-card>
        </b-col>
    </b-row>
  </b-container>
</template>

<script>
  export default {
    data() {
      return {
        //header table
        fields: ['title', 'content', 'actions'],
        //post data
        posts: [],
      }
    },

    mounted() {
      //fetching ke rest API
      this.$axios.get('/api/posts')
        .then(response => {

          //assign response ke state "posts"
          this.posts = response.data.data
        })
        .catch(error => {
          console.log(error.response.data)
        })
    }
  }
</script>

<style>

</style>