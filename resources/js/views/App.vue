<template>
    <div class="main bg-slate-700 text-white">
        <header>
            <nav class="p-8">
                <ul class="flex justify-center gap-5 ">
                    <li class="p-3"> <a href="/#">Home</a> </li>
                    <li class="p-3"> <a href="/#">Post</a> </li>
                    <li class="p-3"> <a href="/#">About</a> </li>
                </ul>
            </nav>
        </header>
        <PostGrid />
        
    </div>
</template>

<script>

    import PostGrid from './Post.index.vue'
    export default {
        components:{
            PostGrid,
        }
    }
</script>

<style lang="scss" scoped>
.main{
    min-height: 100vh;
}
</style>