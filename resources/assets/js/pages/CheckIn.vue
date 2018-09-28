<template>
    <div class="main-container">
        <h1 class="align-center">Check in</h1>
        <div class="form form--s margin-top">
            <form>
                <h2>{{ saved }}</h2>
                <div class="form__row">
                    <div class="text-field">
                        <input id="productname" type="text" name="productname" class="text-field__input"
                               placeholder="Enter name product" v-model="name"/>
                        <label for="productname" class="text-field__label">Naam *</label>
                        <span class="field__error-text">{{ errors.name && errors.name[0] }}</span>
                    </div>
                </div>
                <div class="form__row">
                    <div class="text-field">
                        <input id="producttag" type="text" name="producttag" class="text-field__input"
                               placeholder="Enter tag product" v-model="tag"/>
                        <label for="producttag" class="text-field__label">Tag *</label>
                        <span class="field__error-text">{{ errors.tag && errors.tag[0] }}</span>
                    </div>
                </div>
                <div class="margin-top">
                    <button type="submit" class="button" @click="save">Submit</button>
                    <a href="#" class="button button--text">Cancel</a>
                </div>
            </form>
        </div>
    </div>
</template>

<script>
  export default {

    data() {
      return {
        tags: [],
        name: null,
        tag: null,
        saved:null,
        errors: {
          name: null,
          tag: null
        }
      }
    },

    mounted() {
      Echo.channel('tag')
        .listen('TagScanned', (e) => {
          this.tags = _.union(this.tags, e.tags);

          if(this.tag === null || this.tag.length < 1) {
            this.tag = this.tags[0];
          }
        });
    },

    methods: {
      save(e) {
        e.preventDefault();
        axios.post('/product', {'name':this.name,'tag':this.tag})
          .then((response) => {
            this.saved  = "Product saved!";
            this.name = null;
            this.tag = null;
          })
          .catch(error => {
            this.errors = _.merge(this.errors, error.response.data.errors);
          });
      }
    }


  }
</script>
