<template>
    <div class="main-container">
        <h1 class="align-center">Check in</h1>
        <div class="form form--s margin-top">
            <form>
                <div class="form__row">
                    <div class="text-field">
                        <input id="productname" type="text" name="productname" class="text-field__input"
                               placeholder="Enter name product" v-model="name"/>
                        <label for="productname" class="text-field__label">Naam *</label>
                    </div>
                </div>
                <div class="form__row">
                    <div class="text-field">
                        <input id="producttag" type="text" name="producttag" class="text-field__input"
                               placeholder="Enter tag product" v-model="tag"/>
                        <label for="producttag" class="text-field__label">Tag *</label>
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
        name: null,
        tag: null
      }
    },

    methods: {
      save(e) {
        e.preventDefault();
        axios.post('/product', {'name':this.name,'tag':this.tag})
          .then((response) => {
            console.log(response);
          });
      }
    }


  }
</script>
