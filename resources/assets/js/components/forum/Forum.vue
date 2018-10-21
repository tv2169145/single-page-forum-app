<template>
    <v-container fluid grid-list-md>
        <v-layout row wrap>
            <v-flex xs8>
                <question
                v-for="question in questions"
                :key="question.path"
                :data=question>

                </question>
            </v-flex>
            sidebar
        </v-layout>
    </v-container>
</template>

<script>
    import Question from './question'
    export default {
        components:{Question}, //加入元件component
        data(){
            return {
                questions:null,
            }
        },
        created(){
            axios.get('/api/question')
                .then(response => this.questions = response.data.data)
                .catch(error => console.log(error.response.data))
        },
        name: "forum"
    }
</script>

<style scoped>

</style>