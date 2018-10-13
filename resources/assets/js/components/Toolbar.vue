<template>
    <v-toolbar>
        <v-toolbar-side-icon></v-toolbar-side-icon>
        <v-toolbar-title>Vue test</v-toolbar-title>
        <v-spacer></v-spacer>
        <div class="hidden-sm-and-down">
            <router-link to="/forum">
                <v-btn flat>討論</v-btn>
            </router-link>

            <v-btn flat>發問</v-btn>
            <v-btn flat>分類</v-btn>

            <router-link to="/login">
                <v-btn flat>登入</v-btn>
            </router-link>

        </div>
    </v-toolbar>
</template>

<script>
    export default {
        name: "toolbar"
    }
</script>

<style scoped>

</style>