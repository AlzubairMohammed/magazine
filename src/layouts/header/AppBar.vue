<template>
  <v-layout>
    <v-app-bar id="appBar" density="compact" fixed>
      <img src="../../assets/brand/Untitled-2.png" id="logo" alt="">
      <v-spacer></v-spacer>
      <i class="fas fa-search" v-if="x"></i>
        <div id="search" class="mr-3 mt-5 p-5">
          <v-text-field @focus="x=false" @blur="x=true">
        </v-text-field>
        </div>
      <v-menu
      open-on-hover
      top 
      offset-y
    >
      
      <template v-slot:activator="{ on, attrs }">
        <v-btn
          color="blue"
          dark
          v-bind="attrs"
          v-on="on"
        >
         الاقسام
        </v-btn>
      </template>

      <v-list>
        <v-list-item
          v-for="(item, index) in items"
          :key="index"
        >
          <v-list-item-title>{{ item.title }}</v-list-item-title>
        </v-list-item>
      </v-list>
    </v-menu>
      <v-btn
        class="mr-4 ml-5 mt-0"
        color="blue"
      >
        <v-icon left>mdi-handshake-outline</v-icon>

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
  width: 100px !important;
  height: 50px !important;
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
</style>