<template>
    <div class="button-container">
		<router-link :to="{ name:'check-in' }" class="button">Inchecken</router-link>
        <router-link :to="{ name: 'scan-stock' }" class="button">Voorraad scannen</router-link>
        <router-link :to="{ name: 'location' }" class="button">Locatie aanmaken</router-link>
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
