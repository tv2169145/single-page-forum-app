<template>
            <v-card>
                <!--<v-img-->
                        <!--src="https://cdn.vuetifyjs.com/images/cards/desert.jpg"-->
                        <!--aspect-ratio="2.75"-->
                <!--&gt;</v-img>-->

                <v-card-title primary-title>
                    <div>
                        <h3 class="headline mb-0">
                            <router-link :to="data.path">
                                {{data.title}}
                            </router-link>
                        </h3>
                        <div class="grey--text">{{data.created_at}}</div>
                    </div>
                </v-card-title>
                <v-card-text>
                   {{data.body}}
                </v-card-text>
            </v-card>
</template>

<script>
    export default {
        props:['data'],
        name: "question"
    }
</script>

<style scoped>

</style>