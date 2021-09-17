<template >
    <main>
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-6" v-for="post in posts" :key="post.id">
                <div class="card text-center">
                    <div class="card-header">
                        Featured
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">{{post.title}}</h5>
                        <p class="card-text">{{post.content}}</p>
                        <a href="#" class="btn btn-primary">Details </a>
                    </div>
                    <div class="card-footer text-muted">
                        2 days ago
                    </div>
                </div>
                </div>
            </div>
        </div>
         <nav aria-label="Page navigation example">
                <ul class="pagination">
                    <li class="page-item">
                        <button class="page-link" href="#">Previous</button>
                    </li>
                    <li class="page-item">
                         <button class="page-link" href="#">Next</button>
                    </li>
                
                </ul>
            </nav> 
   </main>
    
</template>
<script>


export default {
    name: 'Main',
    data(){
        return{
            callApi: 'http://127.0.0.1:8000/api/posts',
            posts: [],
             currentPage: 1 ,
            lastPage: null
        }
    },
    created(){
        this.getPosts();
    },
    methods:{
        getPosts(){
            axios.get(this.callApi)
            .then(response => {
                this.posts = response.data.results.data;
                 this.currentPage = response.data.results.current_page;
                this.lastPage = response.data.results.last_page;
          
            })
            .catch();
        }
        

    }

}
</script>

<style lang="scss" scoped>

</style>
