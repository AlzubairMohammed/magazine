<template>
    <div id="switcherId">
        
            <v-pagination
              v-model="page"
              class=""
              color="#006c6e"
              :length="15"
            ></v-pagination>
          
    </div>
</template>

<script>
  export default {
    data () {
      return {
        page: 1,
      }
    },
  }
</script>

<style scoped>
#switcherId{
height: 45px;
}
</style>