<template>
  <div id="switcherId">
    <v-pagination
      v-model="page"
      class=""
      color="#006c6e"
      :length="Math.ceil($store.state.posts.posts.length / 10)"
    ></v-pagination>
  </div>
</template>

<script>
export default {
  name: "Pagination",
  data() {
    return {
      page: 1,
    };
  },
  mounted() {},
};
</script>

<style scoped>
#switcherId {
  height: 45px;
}
</style>
