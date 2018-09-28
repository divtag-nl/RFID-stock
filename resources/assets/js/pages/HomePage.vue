<template>
    <div class="button-container">
        <router-link :to="{ name:'check-in' }" class="button">Inchecken</router-link>
        <a href="/stock" class="button">Voorraad scannen</a>
        <a href="/locations" class="button">Locaties aanmaken</a>
    </div>
</template>

<script>
    export default {
        mounted () {

        }
    }
</script>

<style lang="scss">

</style>
