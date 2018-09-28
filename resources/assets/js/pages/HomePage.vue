<template>
    <div class="main-container">
        <div class="buttongroup">
            <a href="/checkin" class="button">Inchecken</a>
            <a href="/stock" class="button">Voorraad scannen</a>
            <a href="/locations" class="button">Locaties aanmaken</a>
        </div>
    </div>
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
