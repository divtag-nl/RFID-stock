<template>
    <ul>
        <li v-for="tag in tags" v-text="tag"></li>
    </ul>
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
                    console.log(e);
                    this.tags.push(e.tags)
                    this.tags = _.uniq(this.tags)
                });
        }
    }
</script>
