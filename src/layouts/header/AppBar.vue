<template>
  <v-layout>
    <v-app-bar density="compact" fixed>
      <v-app-bar-title>أطياف</v-app-bar-title>

      <v-spacer></v-spacer>

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

      <v-btn text>رسومات</v-btn>

      <v-btn text>قصص قصيرة</v-btn>

      <v-divider inset vertical></v-divider>
      
      <v-btn
        class="mr-4 ml-5"
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
      items: [
        { title: 'Click Me' },
        { title: 'Click Me' },
        { title: 'Click Me' },
        { title: 'Click Me 2' },
      ],
    }),
  }
</script>