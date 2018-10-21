<template>

</template>

<script>
    export default {
        created() {
            EventBus.$emit('logout')
        },
        name: "logout"
    }
</script>
