<template>
    <div class="button-container">
		<router-link :to="{ name:'check-in' }" class="button">Inchecken</router-link>
        <router-link :to="{ name: 'scan-stock' }" class="button">Voorraad scannen</router-link>
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
