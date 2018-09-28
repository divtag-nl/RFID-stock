<template>
    <div class="main-container">
        <div class="card">
            <div class="card__content">
                <h1>Producten scannen</h1>
                <ul>
                    <li v-for="tag in tags" v-text="tag"></li>
                </ul>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        data () {
            return {
                tags: []
            }
        },

        mounted () {
            Echo.channel('tag')
                .listen('TagScanned', (e) => {
                    this.tags = _.union(this.tags, e.tags);
                });
        }
    }
</script>
