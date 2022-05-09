<template>
    <div>
        <div class="container mx-auto">
            <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-5">
                <div v-for="post in posts" :key="post.id" class="bg-zinc-400 text-white text-center p-3 rounded ">
                    <img src="https://picsum.photos/350/250" alt="">
                    <h4 class="p-2 post_title">{{ post.title }} </h4>
                    <p class="post_description">{{post.description}}</p>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        data(){
            return {
                posts: []
            }
        },
        methods: {
            fetchPosts(){
                //chiamata axios
                axios.get('/api/posts')
                .then( res => { 
                    const { posts } = res.data
                    this.posts = posts.data

                })
                .catch(err => {
                    console.warn(err)
                })
            }
        },
        mounted(){
            this.fetchPosts();
        }
    }
</script>

<style lang="scss" scoped>
    .post_title{
        text-transform: uppercase;
        font-weight: 900;
    }
</style>