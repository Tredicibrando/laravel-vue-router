<template>
    <div class="main bg-slate-600 text-white">
        <header>
            <nav class="p-8">
                <ul class="flex justify-center gap-5 ">
                    <li class="p-3"> <router-link :to="'/posts'">Home</router-link> </li>
                    <li class="p-3"> <router-link :to="'/posts'">Contatti</router-link> </li>
                    <li class="p-3"> <router-link :to="'/posts'">About</router-link> </li>
                </ul>
            </nav>
        </header>
        <router-view></router-view>
        
    </div>
</template>

<script>

    import PostGrid from '../pages/Posts.index.vue'
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