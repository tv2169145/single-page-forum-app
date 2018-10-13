import Vue from 'vue'
import VueRouter from 'vue-router'

Vue.use(VueRouter)

import Login from '../components/login/Login';

const routes = [
    { path: '/login', component: Login },

]


const router = new VueRouter({
    routes, // (缩写) 相当于 routes: routes
    hashbang : false,
    mode : 'history',
})

export default router