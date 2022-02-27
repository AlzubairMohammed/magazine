<template>
  <v-layout>
    <v-app-bar id="appBar" density="compact" fixed>
      <img height="30" width="0" src="../../../../logo5.svg" id="logo">
      <v-spacer></v-spacer>
      <i class="fas fa-search" v-if="x"></i>
        <div id="search" class="mr-3 mt-5 p-5">
          <v-text-field @focus="x=false" @blur="x=true">
        </v-text-field>
        </div>
      <v-btn
      color="#006c6e"
      :to="{name: 'login'}"
      ><span>تسجيل</span></v-btn>
      <v-btn
        class="mr-4 ml-5 mt-0"
        color="#006c6e"
        :to="{name: 'register'}"
      >
        <v-icon color="white" left>mdi-handshake-outline</v-icon>

        <span>انضم الينا</span>
      </v-btn>
      
    
    </v-app-bar>

    
  </v-layout>
</template>



<script>
  export default {
    data: () => ({
      x: true,
      items: [
        { title: 'Click Me' },
        { title: 'Click Me' },
        { title: 'Click Me' },
        { title: 'Click Me 2' },
      ],
    }),
  }
</script>

<style scoped>
#appBar{
  padding: 0px !important;
  height: 55px !important;
}
#appBar *{
  margin-bottom: 4px !important;
}
#logo{
  width: 150px !important;
  height: 150px !important;
  margin-top: 10px;
}
#search{
  width: 615px !important;
  margin-right: 180px !important;
}
i {
  margin-left: 280px;
  position: absolute;
  color: rgb(165, 161, 161);
}
span{
  color: white;
}
</style>