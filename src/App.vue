<template>
  <v-app class="my-application">
    <router-view/>
    {{counter}}
  </v-app>
</template>

<script>

export default {
  name: 'App',
  mounted() {
    this.$vuetify.theme.dark = this.$store.state.counter;
    
  },
  components: {
    //
  },

  data: () => ({
    
  }),
  computed:{
     
  }
};
</script>



