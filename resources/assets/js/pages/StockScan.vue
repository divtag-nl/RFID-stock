<template>
    <div class="main-container">
        <div class="card">
            <ul>
                <li v-for="tag in tags" v-text="tag"></li>
            </ul>
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
