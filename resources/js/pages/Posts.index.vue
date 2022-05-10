<template>
    <div>
        <div class="container mx-auto py-2">
            <h1 class="text-white text-center py-2 hover:decoration-4">Latest Posts</h1>
            <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-5">
                <div v-for="post in posts" :key="post.id" class="drop-shadow-lg overflow-hidden bg-slate-700/90 text-white mx-auto rounded w-auto">
                    <img class="" src="https://picsum.photos/350/250" alt="">
                    <div class="px-1 py-1">
                        <h4 class="py-2 post_title overflow-hidden">{{ post.title }} </h4>
                        <p v-for="tag in post.tags" :key="tag.id" class=" text-center rounded-full post_description text-small bg-orange-400/50">{{tag.name}}</p>
                        <router-link tag="button" 
                            class="rounded-full mt-4 bg-violet-600  mb-2 text-center text-small" 
                            :to=" { name:'posts.show', params: {slug: post.slug} } ">
                                <span class="p-2">more...</span>
                        </router-link>
                    </div>
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
        text-transform: capitalize;
        font-weight: 500;
        max-width: 120px;
        max-height: 62px;
        font-size: 1rem;
    }

    .post_description{
        max-width: 150px;
    }
</style>