<template >
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-6">
            <div class="card text-center">
                <div class="card-header">
                    Featured
                </div>
                <div class="card-body">
                    <h5 class="card-title">Special title treatment</h5>
                    <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                    <a href="#" class="btn btn-primary">Go somewhere</a>
                </div>
                <div class="card-footer text-muted">
                    2 days ago
                </div>
            </div>
            </div>
        </div>
    </div>
</template>
<script>


export default {
    name: 'Main',
    data(){
        return{
            callApi: 'http://127.0.0.1:8000/api/posts'
        }
    },
    created(){
        
    }

}
</script>

<style lang="scss" scoped>

</style>
