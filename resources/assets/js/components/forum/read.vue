<template>
    <show-question
    :data=question>

    </show-question>
    
</template>

<script>
    import ShowQuestion from "./ShowQuestion";

    export default {
        components: {ShowQuestion},
        data(){
            return {
                question:{},
            }
        },
        created(){

          axios.get(`/api/question/${this.$route.params.slug}`)
              .then(response => this.question = response.data.data)
        },
        name: "read"
    }
</script>s

<style scoped>

</style>