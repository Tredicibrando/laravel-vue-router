import Vue from "vue";

import VueRouter from "vue-router";

Vue.use(VueRouter)

import Posts from '../pages/Posts.index.vue'
import Post from '../pages/Post.show.vue'
const routes = [
    {
        path: '/posts',
        name: 'posts.index',
        component: Posts,
    },

    {
        path: '/posts/:slug',
        name: 'posts.show',
        component: Post,
    },

]

const router = new VueRouter({
    mode: 'history',
    routes,
})

export default router