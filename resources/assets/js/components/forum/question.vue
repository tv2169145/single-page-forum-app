<template>
    <v-hover>
            <v-card
                    slot-scope="{ hover }"
                    :class="`elevation-${hover ? 12 : 2}`"
                    class="mx-auto grey lighten-4"
                    >
                <!--<v-img-->
                        <!--src="https://cdn.vuetifyjs.com/images/cards/desert.jpg"-->
                        <!--aspect-ratio="2.75"-->
                <!--&gt;</v-img>-->

                <v-card-title primary-title>
                    <div>
                        <h3 class="headline mb-0 font-weight-bold">
                            <router-link :to="data.path">
                                {{data.title}}
                            </router-link>
                        </h3>
                        <div class="grey--text">
                            {{data.user}} said
                            {{data.created_at}}
                        </div>
                    </div>
                </v-card-title>
                <v-card-text>
                   {{data.body}}
                </v-card-text>
            </v-card>
    </v-hover>
</template>

<script>
    export default {
        data: () => ({
            reviews: 600,
            value: 4.5
        }),
        props:['data'],
        name: "question"
    }
</script>

<style scoped>

</style>