<template>
    <v-toolbar>
        <v-toolbar-side-icon></v-toolbar-side-icon>
        <v-toolbar-title>Vue test</v-toolbar-title>
        <v-spacer></v-spacer>
        <v-toolbar-items class="hidden-sm-and-down">
            <v-btn flat>討論</v-btn>
            <v-btn flat>發問</v-btn>
            <v-btn flat>分類</v-btn>
            <v-btn flat>登入</v-btn>
        </v-toolbar-items>
    </v-toolbar>
</template>

<script>
    export default {
        name: "toolbar"
    }
</script>

<style scoped>

</style>