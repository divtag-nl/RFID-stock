<template>
    <div class="form">
        <br/><br/><br/>
        <label>Naam product</label>
        <input v-model="name">
        <label>Tag product</label>
        <input v-model="tag">
        <button class="button">Save</button>
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
  }
</script>
