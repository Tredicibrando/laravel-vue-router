<template>
    <div>
        <div class="container mx-auto p-4">
            <figure class="img_wrapper">
                <img class="block" src="https://picsum.photos/1504/350" alt="">
            </figure>
            
            <h1 class="text-2xl capitalize">{{post.title}}</h1>
            <p v-for="tag in post.tags" :key="tag.id" class=" text-center rounded-full post_description text-small bg-orange-400/50">{{tag.name}}</p>
        </div>
    </div>
</template>

<script>
import Axios from 'axios'

    export default {
        data(){
            return {
                post: null,
                loading: true
            }
        },
        beforeMount(){
            Axios.get(`/api/posts/${this.$route.params.slug}`)
            .then(res => {
                const {post} = res.data

                this.post = post
                this.loading = false
            })
            .catch( err => {
                console.warn(err)
            })
        }
    }
</script>

<style lang="scss" scoped>
.img_wrapper{
    max-width: 1504px;
}

</style>