<template>
    <v-toolbar>
        <v-toolbar-side-icon></v-toolbar-side-icon>
        <v-toolbar-title>Vue test</v-toolbar-title>
        <v-spacer></v-spacer>
        <div class="hidden-sm-and-down">
           <router-link
           v-for="item in items"
           :key="item.title"
           :to="item.to"
           v-if="item.show">
               <v-btn flat>{{item.title}}</v-btn>

           </router-link>

        </div>
    </v-toolbar>
</template>

<script>
    export default {
        data(){
            return {
                items:[
                    {title : '問答', to:'/forum', show:true},
                    {title : '發問', to:'/ask', show: User.loggedIn()},
                    {title : '登入', to:'/login', show: !User.loggedIn()},
                    {title : '分類', to:'/category', show: User.loggedIn()},
                    {title : '登出', to:'/logout', show: User.loggedIn()},
                ]
            }
        },
        created(){
            EventBus.$on('logout', () => User.logout())
        },
        name: "toolbar"
    }
</script>

<style scoped>

</style>