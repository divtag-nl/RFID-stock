<template>
    <h1>Home!</h1>
</template>

<script>
    export default {
        mounted () {
            Echo.channel('tag')
                .listen('TagScanned', (e) => {
                    console.log(e);
                });
        }
    }
</script>

<style lang="scss">

</style>
