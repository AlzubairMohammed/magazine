<template>
  <v-app class="my-application">
      <v-main>
        <Header></Header>
        <router-view />
        <Footer></Footer>
      </v-main>
    
  </v-app>
</template>

<script>
import Header from "./header/AppBar.vue";
import Footer from "./footer/Footer";
export default {
  name: "Layout",

  components: {
    Header,
    Footer,
  },

  props: {

  },
  data: () => ({

  })
};
</script>


<style lang="scss">
  @import url('https://fonts.googleapis.com/css2?family=New+Tegomin&display=swap');
  $font-family: 'Cairo', sans-serif;
  .my-application {
    .headline,
    [class*='display-'],
    [class*='text-'] {
      color: #36405a;
      font-family: $font-family, sans-serif !important;
    }
    font-family: $font-family, sans-serif !important;
  
  }
</style>
