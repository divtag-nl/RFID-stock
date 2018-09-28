<template>
    <div class="main-container">
        <h1 class="align-center">Check in</h1>
        <div class="form form--s margin-top">
            <form>
                <h2>{{ saved }}</h2>
                <div class="form__row">
                    <div class="text-field">
                        <input id="locationname" type="text" name="locationname" class="text-field__input"
                               placeholder="Enter name location" v-model="name"/>
                        <label for="locationname" class="text-field__label">Naam *</label>
                        <span class="field__error-text">{{ errors.name && errors.name[0] }}</span>
                    </div>
                </div>
                <div class="form__row">
                    <div class="text-field">
                        <input id="locationtag" type="text" name="locationtag" class="text-field__input"
                               placeholder="Enter tag location" v-model="tag"/>
                        <label for="locationtag" class="text-field__label">Tag *</label>
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

          Object.keys(e.tags).forEach(tag => {
            if(e.tags[tag].location === null) {
              if(!this.tags.includes(tag)){
                this.tag = tag;
              }
            }
          });
        });
    },

    methods: {
      save(e) {
        e.preventDefault();
        axios.post('/location', {'name':this.name,'tag':this.tag})
          .then((response) => {
            this.saved  = "Location saved!";
            this.name = null;
            this.tag = null;
            this.errors = {
              name: null,
              tag: null
            }
          })
          .catch(error => {
            this.errors = _.merge(this.errors, error.response.data.errors);
          });
      }
    }


  }
</script>
