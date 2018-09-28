<template>
    <div class="main-container">
        <div class="card">
            <div class="card__content">
                <h1>Producten scannen</h1>
                <h3 v-if="location" v-text="location.name"></h3>
                <ul>
                    <li v-for="product in products" v-text="product.product.name"></li>
                </ul>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        data () {
            return {
                tags: {},
                products: [],
                location: null
            }
        },

        mounted () {
            Echo.channel('tag')
                .listen('TagScanned', (e) => {
                    console.log(e);
                    this.tags = _.merge(this.tags, e.tags);

                    this.products = _.filter(this.tags, (tag) => {
                        return tag.product !== null;
                    });

                    const location = _.find(this.tags, (tag) => {
                        return tag.location !== null;
                    });

                    if (location) {
                        this.location = location.location;
                    }
                });
        },

        computed: {
            // products () {
            //     console.log(this.tags);
            //     return _.filter(this.tags, (tag) => {
            //         console.log(tag);
            //         return tag.product !== null;
            //     })
            // },

            // location () {
            //     console.log(this.tags);
            //     return _.find(this.tags, (tag) => {
            //         return tag.location !== null;
            //     })
            // }
        }
    }
</script>
